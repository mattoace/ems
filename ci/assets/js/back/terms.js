loadUrl = "/back/Terms.php";
var editor; 
$(document).ready(function() {
	editor = new $.fn.dataTable.Editor( {	
                ajax: loadUrl,
		table: "#myView",
		fields: [ {
				label: "Term Name:",
				name: "term_name"
			}, {
				label: "Additional details:",
				name: "description"
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
			{ data: "term_name" },
			{ data: "description" }			
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
            editor.set('type',1);
          });
          
        table.on( 'click', 'tr', function (id) {
                var selRow = table.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });

      postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'13',
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
     },"json"); 
 });

function gotoRoles(obj){    
   
}

