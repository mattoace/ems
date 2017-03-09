var   editor;
var   instId = null;
var   instType = null;
var   isAdmin = null;

usersDropdown = $('#selector1');



$(document).ready(function () {

  postVars = {
   "action" : 5,
   "start" :'sub',
   "end" :'4',
   "userId" : userId
  }
 $.post("/back/LoadRoles.php",postVars,function(data){
    if(data.add == 2 || data.add == null || data.add == 0){
      $('.dt-button.buttons-create').css("display","none");
     }         
    if(data.edit == 2 || data.edit == null || data.edit == 0){
     $('.dt-button.buttons-edit').css("display","none");
     }
    if(data.delete == 2 || data.delete == null || data.delete == 0){
     $('.dt-button.buttons-remove').css("display","none"); 
    }

   instId = data.institution;
   instType = data.instType;
   isAdmin = data.is_admin;

  var userId = usersDropdown.val();

  loadUrl = "/back/AccessRoles.php?id="+userId+"&instId="+instId+"&instType="+instType+"&isAdmin="+isAdmin;    

  userJsTree =   $('#treeView').jstree({
        'plugins': ["checkbox"],
        'core': {
            'data': {
                "url": "/back/LoadRoles.php?id="+userId,
                "plugins": ["checkbox"],
                "dataType": "json"

            }
        }
    });    
    
editor = new $.fn.dataTable.Editor( {	
        ajax: loadUrl,
        table: "#myView",
        fields: [ {
                        label: "User Name:",
                        name: "ems_accessroles.user_id",
                        type: 'select',
                        placeholder: "Select type",
                }, {
                        label: "Module:",
                        name: "ems_accessroles.module",
                        type: 'hidden'
                },
                {
                        label: "Add:",
                        name: "ems_accessroles.add",
                        type: 'select',
                        placeholder: "Select type",
                        options: [
                            { label: "Enable" , value: "1" },
                            { label: "Disable",value: "2" }                                    
                        ]
                },{
                        label: "Edit:",
                        name: "ems_accessroles.edit",
                        type: 'select',
                        placeholder: "Select type",
                        options: [
                            { label: "Enable" , value: "1" },
                            { label: "Disable",value: "2" }                                    
                        ]
                }, {
                        label: "Delete:",
                        name: "ems_accessroles.delete",
                        type: 'select',
                        placeholder: "Select type",
                        options: [
                            { label: "Enable" , value: "1" },
                            { label: "Disable",value: "2" }                                    
                        ]
                },{
                        label: "Id:",
                        name: "ems_accessroles.id",
                        type: "hidden"
                }
        ]
 });

// Activate an inline edit on click of a table cell
$('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
} );

table = $('#myView').DataTable( {
        dom: "Bfrtip",
        ajax: "",
        columns: [
                {
                        data: null,
                        defaultContent: '',
                        className: 'select-checkbox',
                        orderable: false
                },
                { data: "ems_users.username" },    
                { data: "is_add" },
                { data: "is_edit" },
                { data: "is_delete" }
        ],
        select: {
                style:    'os',
                selector: 'td:first-child'
        },
        buttons: [
                { extend: "create", editor: editor },
                { extend: "edit",   editor: editor },
                { extend: "remove", editor: editor }
        ]
} );

editor.on( 'open', function ( e, json, data ) {
    editor.set('ems_accessroles.module',selTreeId); 
  });

table.on( 'click', 'tr', function (id) {
        var selRow = table.row('.selected').data(); 
        var arrSpl = selRow['DT_RowId'].split('_'); 

 });
    
 checkSavedNodes(); 


  userJsTree.on("changed.jstree ", function (e, data) {  //select_node.jstree
  loadUrl = "/back/AccessRoles.php?id="+data.node.id+"&instId="+instId+"&instType="+instType+"&isAdmin="+isAdmin;
  table.ajax.url(loadUrl).load(); 
  selTreeId = data.node.id; 

  return true;
 }); 


 },"json"); 

});


function checkSavedNodes(){

    jQuery("#treeView").bind("loaded.jstree", function (event, data) {
    
         var postVars = {
            "user_id" : usersDropdown.val(),         
            "action":4 
           } 
           $.post("/back/LoadRoles.php",postVars,function(data){             
            for (i = 0; i < data.length; i++) {    
               $('#treeView').jstree("check_node",data[i]);
            }
          },"json");

    });

}       


function saveRoles(){

       userId = usersDropdown.val();    

       checkedObjects = userJsTree.jstree("get_checked",true);

       var arr = new Array();

       for (i = 0; i < checkedObjects.length; i++) {
          arr.push(checkedObjects[i].id);       
        }

       var postVars = {
        "user_id" : userId,
        "checked" :arr,
        "action":3 
       } 

       $.post("/back/LoadRoles.php",postVars,function(data){ 
            alert("Successfully saved!");
       },"json");

}   


function  reLoadTree(userId){

   $('#treeView').jstree("destroy");
   userJsTree=  $('#treeView').jstree({
        'plugins': ["checkbox"],
        'core': {
            'data': {
                "url": "/back/LoadRoles.php?id="+userId,
                "plugins": ["checkbox"],
                "dataType": "json"

            }
        }
    });

  userJsTree.on("changed.jstree ", function (e, data) {  //select_node.jstree
  loadUrl = "/back/AccessRoles.php?id="+data.node.id+"&instId="+instId+"&instType="+instType+"&isAdmin="+isAdmin;
  table.ajax.url(loadUrl).load(); 
  selTreeId = data.node.id; 

  return true;
 }); 
 checkSavedNodes();
}

function selectChanged(){

  reLoadTree(usersDropdown.val());


}
   