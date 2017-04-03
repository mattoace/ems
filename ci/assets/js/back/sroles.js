
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

   loadUrl = "/back/Sroles.php?inst="+instId+"&is_admin="+isAdmin;

	editor = new $.fn.dataTable.Editor( {	
                ajax: loadUrl,
		table: "#myView",
		fields: [ {
				label: "Priviledge Description:",
				name: "description"
			}, {
				label: "Scope:",
				name: "scope",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Zone" , value: "Zone" },
                                    { label: "Sub County",value: "Sub County" },
                                    { label: "County",value: "County" } ,
                                    { label: "National",value: "National" }                                     
                                ]
			},{
				label: "Id:",
				name: "id",
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
			{ data: "description" },
			{ data: "scope" }		
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
         
          });

       editor.on( 'submitComplete', function ( e, json, data ) {
                
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

