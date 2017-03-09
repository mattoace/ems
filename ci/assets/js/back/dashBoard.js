

 $( "#dialog" ).dialog({
      width: 455,
      height: 500,
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
  $( "#dialog2" ).dialog({
      width: 455,
      height: 500,
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });




   /* (function () {
      var n, id, progress;

      progress = new CircularProgress({
        radius: 20
      });

      document.body.appendChild(progress.el);

      n = 0;
      id = setInterval(function () {
        if (n == 100) clearInterval(id);
        progress.update(n++);
      }, 100);
    })();

    (function () {
      var n, id, progress;

      progress = new CircularProgress({
        radius: 40,
        lineWidth: 2,
        strokeStyle: 'black',
        initial: {
          lineWidth: 4,
          strokeStyle: 'gray'
        }
      });

      document.body.appendChild(progress.el);

      n = 0;
      id = setInterval(function () {
        if (n == 100) clearInterval(id);
        progress.update(n++);
      }, 70);
    })();*/




function refreshMail(){
   var inboxDiv = $("#indoxmsg");
   inboxDiv.empty();
   $('#refreshing').html('Refreshing...');
           $.get("/back/ReadMailbox.php",function(dat){ 
				 for (var key in dat.maildate) {								 
                      inboxHtml = '<div id="indoxmsg" class="activity-row"><div class="col-xs-3 activity-img"><img width="30px" src="<?php echo base_url("assets/images/useremail.jpg");?>" class="img-responsive" alt=""/></div><div class="col-xs-7 activity-desc"><h5><a href="#" onClick="showBody(\'' + dat.mailbody[key]  +  '\' , \'' + key  + '\')">'+ dat.mailfrom[key]   +'</a></h5><p>'+ dat.mailsubject[key] +'</p></div><div class="col-xs-2 activity-desc1"><h6>'+ dat.maildate[key] +'</h6></div><div class="clearfix"></div></div>';
                     $(inboxHtml).appendTo(inboxDiv);
                     $('#refreshing').html('Refresh');
				  }
           },"json");
}


function newMail(){
      $( "#dialog" ).dialog( "open" );
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function cancelsendMail(){

      $( "#dialog" ).dialog( "close" );
}


function sendMail(){

	if($('#names').val()==""){
		alert("Enter name of Institution/Person");	
	}else if($('#email').val()==""){
	   alert("Please enter email address!");	   
	}else if(validateEmail($('#email').val()) == false){
	   alert("Email entered is invalid!");
	}else if($('#message').val()==""){
	   alert("Your message cannot be blank!");
	}else{

	    var postVars = {
	    	"names": $('#names').val(),
	    	"email": $('#email').val(),
	    	"message" : $('#message').val()
	     }
	 
	     $('#btnsendText').html('Sending...'); 
		   $.post("/back/Dashboard.php",postVars,function(data){ 
         $('#btnsendText').html('Sent');
		        alert(data.response);
         $( "#dialog" ).dialog( "close" );
		  },"json");

	}

}

function showBody(key){
      $('#mailBodyText').html($('#mailbody_'+ key ).html());
      $( "#dialog2" ).dialog( "open" );
}

function deletToDoNote(){

     elements = document.querySelectorAll("#myUI input[type=checkbox]");

          $('#deleteText').html('Deleting please wait..');

          for (var i = 0 ; i <= elements.length; i++) {
   
            if (elements[i].checked){

               var postVars = {
                    "id": elements[i].id,
                    "userId": $('#userId').val(),
                    "case": 3
                   }
                 $.post("/back/Dashboard.php",postVars,function(data){
                    var liToDo = $('#li_'+data.id);              
                    liToDo.remove();
                    $('#deleteText').html('Delete'); 
                 },"json");

            }
       
                
          }
}


function submitToDo(uId){
  
  var todoText = $('#todoText').val();
  var userId = $('#userId').val();

    var postVars = {
      "todoText": todoText,
      "userId": userId,
      "case":1
     }
   $('#todoText').val("");
   $.post("/back/Dashboard.php",postVars,function(data){
      var toDoDiv = $("#myUI");      
      toDoHtml = '<li id="li_'+ data.id +'"><input type="checkbox"  id="brand_'+ data.id +'" value=""><label for="brand_'+ data.id+'"><span></span> '+ todoText +'</label></li>';
      $(toDoHtml).appendTo(toDoDiv); 
     },"json"); 

}
