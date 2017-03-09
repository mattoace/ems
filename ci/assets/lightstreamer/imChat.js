var chatUrl = "/back/GetUserName.php?id="+getUrlVars()["id"];
var chatLsUrl = "../assets/lightstreamer/";

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,
    function(m,key,value) {
      vars[key] = value;
    });
    return vars;
  }
     //Nick Submission Form Handling
  function submitNick() {
      
    //if (document.getElementById("user_nick")) {
    
        var myelement = []; 

         $.ajax({
             async: false,  
             url: chatUrl,
             type: 'POST',
             data: {"id":""},
             success: function(data) {                     
                 myelement[0] = data;                   
             }
         });
        var myData = jQuery.parseJSON(myelement[0]); 
      //var text = document.getElementById("user_nick").value;
      document.getElementById("user_nick").value = myData.user_name; 
      var text = myData.user_name;
      if (!text) {
        alert("Please choose a nickname");
      } else if (text.indexOf(" ") != -1) {
        alert("Space character is not allowed in the nickname");              
      } else {
        myNick = text;
        //document.getElementById("nick_button").disabled = true;
        document.getElementById("user_nick").disabled = true;
        document.getElementById("message_scroll").style.borderColor = "#0055aa";
        document.getElementById("buddies_scroll").style.borderColor = "#0080ff";
        //document.getElementById("buddies_title").style.backgroundColor = "#0080ff";
        document.getElementById("messages").style.visibility = "visible";
        createMessageGrid();
        createBuddyTable();
      }
    //}
  }
  
//////////////// Message Submission Form Handling

  function submitForm() {
    var textField = document.getElementById("user_message");
    if (textField) {
      var text = textField.value;
      if (!text) {
        alert("Can't send an empty message");
      } else if (!currentBuddyNick) {
        alert("Please select a buddy to send the message to");
      } else {
        var mex = "IM|" + myNick + "|" + currentBuddyNick + "|" + text;
        client.sendMessage(mex);
        textField.value = "";
      }
    }
  }

  //////////////// Initializations
  
  //document.getElementById("nick_button").disabled = false;
  document.getElementById("user_nick").disabled = false;   
  
  // DOM pointer to current recipient within buddiesTable
  var currentBuddyNode = null;
  // unique key of current recipient
  var currentBuddyNick = null;

  // nickname chosen by this page's user; it is used in the
  // item name for the subscription
  var myNick = null;
  
  var isActive = false;

  // define a random default nickname
  var userNickField = document.getElementById("user_nick");
  if (userNickField) {
    userNickField.value = "Guest" + Math.ceil(Math.random() * 1000);
  }

  
//////////////// Message Table Management

  var client = null;

  // will create a Subscription+DynaGrid when the nickname is available
  function createMessageGrid() {
  
    require([chatLsUrl+"lsClient","DynaGrid","Subscription"],function(lsClient,DynaGrid,Subscription) {   

      client = lsClient;
      
      var imGrid = new DynaGrid("messages",true);
      imGrid.setMaxDynaRows("unlimited"); // the grid will expand with no limits
      imGrid.setAutoScroll("ELEMENT", "message_scroll"); // automatic scrolling for new messages
      imGrid.setAutoCleanBehavior(true, false);
      imGrid.addListener({
        // background colors to associate to identities
        colors: ["#FFFFE0","#FFEBCD","#F0F8FF","#CCFFCC","#FFF5EE","#E0FFFF","#F0FFF0","#F0E68C","#87CEEB","#E6E6FA","#FFB6C1","#F5FFFA","#FFFAFA","#F5F5DC","#F8F8FF","#FFE4E1","#D8BFD8","#FFF0F5","#EEE8AA"],
        next: 0,
        associated: {},
      
        // set visual effects on received messages
        onVisualUpdate: function(key,info,domNode) {
          if (info == null) {
            return;
          }
         
          var rel = info.getCellValue("fromNick");
          if(rel == "me") {
            rel = info.getCellValue("toNick");
          }
  
          handleMessage(info.getCellValue("toNick"),info.getCellValue("message"),info.getCellValue("fromNick"),userImage);
         
          
          var color = this.associated[rel];
          if (!color) {
            this.associated[rel] = this.colors[this.next];
            this.next = (this.next >= this.colors.length) ? 0 : this.next+1;
            color = this.associated[rel];
          }
          // set background color for the new row
          domNode.style.backgroundColor = color;
        }

      });
      
      var imSubscription = new Subscription("DISTINCT","im_"+myNick,["fromNick", "toNick", "message"]); // myNick is used in the item name to subscribe to
      imSubscription.setDataAdapter("SIMPLE_MESSENGER");
      imSubscription.setRequestedSnapshot("no");
      
      imSubscription.addListener({
        // when the subscription is active, let's enable the message submission form
        onSubscription: function() {
          document.getElementById("user_message").disabled = false;
          document.getElementById("message_button").disabled = false;
        },
        // viceversa when the subscription is not active anymore, let's disable the message submission form
        onUnsubscription: function() {
          document.getElementById("user_message").disabled = true;
          document.getElementById("message_button").disabled = true;
        }
      });
      
      imSubscription.addListener(imGrid);
      
      lsClient.subscribe(imSubscription);
    }); 
  
 }

//////////////// Buddy Table Management

  // will create a Subscription+DynaGrid after the login
  function createBuddyTable() {
  
    require([chatLsUrl+"lsClient","DynaGrid","Subscription"],function(lsClient,DynaGrid,Subscription) { 
  
      
      var buddiesGrid = new DynaGrid("buddies",true);
      buddiesGrid.setAutoCleanBehavior(true, false);
      buddiesGrid.setSort("key");
      buddiesGrid.addListener({
        
        // handle new rows (style, manage clicks, etc.)
        onVisualUpdate: function(key,info,domNode) {
          if (info == null) {
            // handle disappearing rows
            if (buddiesGrid.getValue("key") == currentBuddyNick) {
              currentBuddyNode = null;
              currentBuddyNick = null;
            }
            return;
          }
          
          if (info.getChangedFieldValue("command") != "ADD") {
            return;
          }
          
          var currentNick = info.getChangedFieldValue("key"); //can't be unchanged during an ADD
          domNode.style.cursor = "pointer";
          if (currentNick == myNick) {
            info.setCellValue("key", currentNick + " (me)");
            domNode.style.fontStyle = "italic";
          }
          
          // make each new row added to the grid selectable
          domNode.onclick = function() {
            if (currentBuddyNode != null && currentBuddyNode != this) {
              currentBuddyNode.style.backgroundColor = "white";
              currentBuddyNode.style.fontWeight = "normal";
            }
            currentBuddyNode = this;
            currentBuddyNick = currentNick;
            currentBuddyNode.style.backgroundColor = "yellow";
            currentBuddyNode.style.fontWeight = "bold";
            selectedBuddie(currentNick);            
          };
        }
      
      });
      
      var buddiesSubscription = new Subscription("COMMAND","buddy_list",["command", "key"]);
      
      buddiesSubscription.setDataAdapter("SIMPLE_MESSENGER");
      
      buddiesSubscription.setRequestedSnapshot("yes");
      
      buddiesSubscription.addListener(buddiesGrid);
      lsClient.subscribe(buddiesSubscription);

    });
   }
   
   
   function handleMessage(to,message,from,userImage){
       var myClass1 = "";
       var chatHtml = "";
       
        var param1 = new Date();
        var param2 = param1.getDate() + '/' + (param1.getMonth()+1) + '/' + param1.getFullYear() + ' ' + param1.getHours() + ':' + param1.getMinutes() + ':' + param1.getSeconds();
       
       
       if(to == "me"){ 
           myClass1 = "col-xs-7 activity-img2";
           chatHtml ='<div class="activity-row activity-row1"><div class="col-xs-3 activity-img"><img style="border-radius: 25px" height="100" width="100" src="/back/uploads/'+userImage+'" class="img-responsive" alt=""/><span style="font-size: 9px;">'+ param2 +'</span></div><div class='+ myClass1 +'><div class="activity-desc-sub"><h5>'+ from +'</h5><p>' + message +'</p></div></div><div class="col-xs-4 activity-desc1"></div><div class="clearfix"> </div></div>';
      
       }else{       
           myClass1 = "col-xs-5 activity-img1";       
           chatHtml = '<div class="activity-row activity-row1"><div class="col-xs-2 activity-desc1"></div><div class="col-xs-7 activity-img2"><div class="activity-desc-sub1"><h5>'+ from +'</h5><p>'+ message +'</p></div></div><div class="col-xs-3 activity-img"><img style="border-radius: 25px" height="100" width="100" src="/back/uploads/'+userImage+'" class="img-responsive" alt=""/><span style="font-size: 9px;" >'+ param2 +'</span></div><div class="clearfix"> </div></div>';
          
       } 
       var chatDiv = $( "#style-2" ); 
       
       var postVars = {
           "id":getUrlVars()["id"],
           "action": "1",
           "message" : chatHtml,
           "to": to,
           "from": from
       }    
       
       $.post("/back/LoadRoles.php",postVars,function(){
           
       },"json")
       
       $(chatHtml).appendTo(chatDiv);
        
       $('#style-2').animate({
           scrollTop: $('#style-2').get(0).scrollHeight}, 2000); 
   }
   
   function selectedBuddie(selectedUser){ 
       
       var chatDiv = $( "#style-2" ); 
       
       var postVars = {
                "id":getUrlVars()["id"],
                "action": "2",
                "selected":selectedUser
             }
       chatDiv.html("");
       
       $.post("/back/LoadRoles.php",postVars,function(data){
            
            chatDiv.html(data.message);           
            $('#style-2').animate({
                scrollTop: $('#style-2').get(0).scrollHeight}, 2000); 
           
           
       },"json");
   }
   
   

   
   submitNick();