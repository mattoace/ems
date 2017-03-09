loadSubjectsUrl = "/back/Subjects.php?id=1";

function selectChanged(institutionType,myTable,myEditor){
    
    var institutionDropdown = $('#selector1'); 
    
    loadSubjectsUrl = "/back/Subjects.php?id="+institutionDropdown.val();
    
    myTable.ajax.url(loadSubjectsUrl).load(); 
  
    myEditor.on( 'open', function ( e, json, data ){         
        myEditor.set('institution_type',institutionDropdown.val());
     }); 
  
    myEditor.on( 'submitComplete', function ( e, json, data ) {
      myTable.ajax.url(loadSubjectsUrl).load();
    } );
    
  }


var editorSubjects; 

$(document).ready(function() {
    
	editorSubjects = new $.fn.dataTable.Editor( {	
                ajax: loadSubjectsUrl,
		table: "#Subjects",
		fields: [{
				label: "Subject/Unit:",
				name: "subject_name"
			},
                        {
				label: "Additional Description:",
				name: "description"
			},
                        {
				label: "Institution Id:",
				name: "institution_id",
                                type:"hidden"
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#Classes').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorSubjects.inline( this );
	} );

	tableSubjects = $('#Subjects').DataTable( {
		dom: "Bfrtip",
		ajax: loadSubjectsUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			//{ data: "id" },
			{ data: "subject_name" },
                        { data: "description" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorSubjects },
			{ extend: "edit",   editor: editorSubjects },
			{ extend: "remove", editor: editorSubjects }
		]
	} );
        
        editorSubjects.on( 'open', function ( e, json, data ) {
                var institutionDropdown = $('#selector1');   
                editorSubjects.set('institution_id',institutionDropdown.val()); 
          });
          
        tableSubjects.on( 'click', 'tr', function (id) {
                var selRow = tableSubjects.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });

      postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'11',
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

function createStreamPopUp(obj){
    alert(obj);
}

