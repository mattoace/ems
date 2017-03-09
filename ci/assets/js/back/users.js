
var editor;
var instId = null;
var instType = null;
var isAdmin = null;

$(document).ready(function() {

  postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'5',
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

   loadUrl = "/back/Users.php?inst="+instId+"&is_admin="+isAdmin;

	editor = new $.fn.dataTable.Editor( {	
                ajax: loadUrl,
		table: "#myView",
		fields: [ {
				label: "First Name:",
				name: "ems_users.fname"
			}, {
				label: "Second Name:",
				name: "ems_users.mname"
			},
                        {
				label: "Email:",
				name: "ems_users.email"
			},{
				label: "Mobile:",
				name: "ems_users.mobile"
			}, {
				label: "Username:",
				name: "ems_users.username"
			}, {
				label: "Password:",
				name: "ems_users.pass",
                type:"password"
			},{
				label: "Is Active:",
				name: "ems_users.is_active",
				type: "hidden"
			},{
				label: "Institution Type:",
				name: "ems_userinstitution.type",
				type: "hidden"
			},{
				label: "Institution:",
				name: "ems_userinstitution.institution",
				type: "hidden"
			},{
				label: "Id:",
				name: "ems_users.id",
                type: "hidden"
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editor.inline( this );
	} );

	table = $('#myView').DataTable( {
		dom: "Bfrtip",
		ajax: loadUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_users.fname" },
			{ data: "ems_users.mname" },
			{ data: "ems_users.username" },
			{ data: "ems_users.email" }			
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editor },
			{ extend: "edit",   editor: editor },
			{ extend: "remove", editor: editor }
                        /*,{
                            extend: "selectedSingle",
                            text: "Roles",
                            action: function ( e, dt, node, config ) {
                               gotoRoles(this);
                            }
                          }*/
		]
	} );
        
        editor.on( 'open', function ( e, json, data ) {
            editor.set('ems_userinstitution.institution',instId);
            editor.set('ems_userinstitution.type',instType);
            editor.set('ems_users.is_active',1);
          });

       editor.on( 'submitComplete', function ( e, json, data ) {
                /*var newId = json.data[0].DT_RowId;
                newId = newId.split('_'); 
                var myPass = CryptoJS.MD5(json.data[0].ems_users.pass);
                
                postVars = {
			       "action" : 6,
			       "id" :newId[1],
			       "hash" : myPass
			      }
			    //  alert(postVars.toSource());
		     $.get("/back/LoadRoles.php",postVars,function(){

		     },"json");*/
           });	
          
        table.on( 'click', 'tr', function (id) {
                var selRow = table.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });


     },"json"); 
});

function gotoRoles(obj){    
    alert(obj);
}

