institutionDropdown = $('#selector1'); 
loadUrleGrades = "/back/Grades.php?id="+institutionDropdown.val()+"&type=1";
loadUrlMGrades = "/back/Grades.php?id="+institutionDropdown.val()+"&type=2";
var editoreGrades;
is_admin = null;
instId = null; 

function loadInstitutions(institutionType,myTable1,myEditor1,myTable2,myEditor2,inst_name){

     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
     $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }
       selectChanged(institutionType,myTable1,myEditor1,myTable2,myEditor2);
     },"json"); 
     
         $('#inst_name').html(inst_name+'<span class="caret"></span>');
         $('#inst_id').val(institutionType);

}

function selectChanged(obj,table1,editor1,table2,editor2){   
    
    loadUrleGrades = "/back/Grades.php?id="+institutionDropdown.val()+"&type=1";
    loadUrlMGrades = "/back/Grades.php?id="+institutionDropdown.val()+"&type=2";
    
    table1.ajax.url(loadUrleGrades).load(); 
  
    editor1.on( 'open', function ( e, json, data ){         
        editor1.set('ems_grades.institution_id',institutionDropdown.val());
        editor1.set('ems_grades.type',1);
     }); 
  
    editor1.on( 'submitComplete', function ( e, json, data ) {
      table1.ajax.url(loadUrleGrades).load();
    } );
    
    table2.ajax.url(loadUrlMGrades).load(); 
  
    editor2.on( 'open', function ( e, json, data ){         
        editor2.set('ems_grades.institution_id',institutionDropdown.val());
        editor2.set('ems_grades.type',2);
     }); 
  
    editor2.on( 'submitComplete', function ( e, json, data ) {
      table2.ajax.url(loadUrlMGrades).load();
    } );
    
    
    
}


$(document).ready(function() {


  postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'12',
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
        
    $('#inst_name').html(data.category+'<span class="caret"></span>');
    $('#inst_id').val(data.institution);
    is_admin = data.is_admin;
    instId = data.institution;
    
    institutionDropdown = $('#selector1'); 
    
	editoreGrades = new $.fn.dataTable.Editor( {	
                ajax: loadUrleGrades,
		table: "#ExamGrades",
		fields: [{
				label: "Exam Name:",
				name: "ems_grades.exam",
                                type: 'select',
                                placeholder: "Select type of exam"
			},{
				label: "Marks From:",
				name: "ems_grades.marks_from"
			},
                        {
				label: "Marks To:",
				name: "ems_grades.marks_to"
			},{
				label: "Grade:",
				name: "ems_grades.grade",
                                type: 'select',
                                placeholder: "Choose Grade"
			},{
				label: "Comments:",
				name: "ems_grades.comments"
			}
                        ,{
				label: "Type:",
				name: "ems_grades.type",
                                type:"hidden"
			}
                        ,{
				label: "Institution:",
				name: "ems_grades.institution_id",
                                type:"hidden"
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#ExamGrades').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editoreGrades.inline( this );
	} );

	tablesGrades = $('#ExamGrades').DataTable( {
		dom: "Bfrtip",
		ajax: loadUrleGrades,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "e1.exam_description"},
                        { data: "ems_grades.grade" },
			{ data: "ems_grades.marks_from" },
			{ data: "ems_grades.marks_to" },
			{ data: "ems_grades.comments" }			
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editoreGrades },
			{ extend: "edit",   editor: editoreGrades },
			{ extend: "remove", editor: editoreGrades }
                      
		]
	} );
        
        editoreGrades.on( 'open', function ( e, json, data ) {
                    editoreGrades.set('ems_grades.institution_id',institutionDropdown.val());
                    editoreGrades.set('ems_grades.type',1);
          });
          
        tablesGrades.on( 'click', 'tr', function (id) {
                var selRow = tablesGrades.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         editoreGrades.on('onInitEdit onInitCreate', function () {//onInitEdit //onInitCreate 
             fnGetDropdown(7);
         });
         
         
         
         
         
         editorMGrades = new $.fn.dataTable.Editor( {	
                ajax: loadUrlMGrades,
		table: "#MeanGrade",
		fields: [{
				label: "Points:",
				name: "ems_grades.points"
			},{
				label: "Grade:",
				name: "ems_grades.grade",
                                type: 'select',
                                placeholder: "Choose Grade"
			},{
				label: "Comments:",
				name: "ems_grades.comments"
			}
                        ,{
				label: "Type:",
				name: "ems_grades.type",
                                type:"hidden"
			}
                        ,{
				label: "Institution:",
				name: "ems_grades.institution_id",
                                type:"hidden"
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#MeanGrade').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorMGrades.inline( this );
	} );

	tablesMGrades = $('#MeanGrade').DataTable( {
		dom: "Bfrtip",
		ajax: loadUrlMGrades,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_grades.points"},
                        { data: "ems_grades.grade" },
			{ data: "ems_grades.comments" }			
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorMGrades },
			{ extend: "edit",   editor: editorMGrades },
			{ extend: "remove", editor: editorMGrades }
                      
		]
	} );
        
        editorMGrades.on( 'open', function ( e, json, data ) {
                    editorMGrades.set('ems_grades.institution_id',institutionDropdown.val());
                    editorMGrades.set('ems_grades.type',2);
          });
        
        editorMGrades.on('onInitEdit onInitCreate', function () {//onInitEdit //onInitCreate 
             fnGetDropdown(7);
         });
         

     },"json");  
         
 });

     function fnGetDropdown(sortId) {
            
            var dropDownlist = new Array();
            $.ajax({
                url: '/back/LoopUpDropDowns.php?sortid='+sortId,
                async: false,
                dataType: 'json',
                success: function (json) {
                    
                   if( json.data[0] != null){ 
                    
                    for(var i=0; i<json.data.length; i++){
                        
                          dropDownlist[i] = { "label": json.data[i].ems_lookup["itemname"], "value": json.data[i].ems_lookup["itemvalue"] };
                      }
                      
                  }else{
                          dropDownlist[0] = { "label":"Please enter county in County section.", "value":0};
                   }
                }
            });
         
          editoreGrades.field('ems_grades.grade').update(dropDownlist);
          editorMGrades.field('ems_grades.grade').update(dropDownlist);
          
         }
         



