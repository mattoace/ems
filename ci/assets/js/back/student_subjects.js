classDropdown = $('#selector2');
institutionDropdown  = $('#selector1');
streamDropdown = $('#selector3');
subjectDropdown = $('#selector5');
    is_admin = null;
    instId = null;  

loadUrl = "/back/Student_Subject.php?classId="+classDropdown.val()+"&inst="+institutionDropdown.val()+"&streamId="+streamDropdown.val()+"&subjectId="+subjectDropdown.val();

function loadInstitutions(institutionType,inst_name){
     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
     $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }         
       selectChanged(institutionType);
       chooseSubjects(institutionType);
     },"json");
      $('#inst_name').html(inst_name+'<span class="caret"></span>');
  $('#inst_id').val(institutionType);

}

function chooseClasses(selVal){
    var classDropdown = $('#selector2');
     classDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=1&sortid="+selVal,function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_classes.class_name,data.data[i].ems_classes.id );
            classDropdown.append(o);
            
       }
       chooseStream(classDropdown.val());
       //chooseExamType();
       //chooseTerm();
      },"json");
    
    }
    
 function chooseStream(selVal){
    var classDropdown = $('#selector2');
    selVal = classDropdown.val();
    var streamDropdown = $('#selector3');
     streamDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=2&sortid="+selVal,function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_stream.stream_name,data.data[i].ems_stream.id );
            streamDropdown.append(o);
       }
      reloadtheAllstudentsGrid();
      },"json");
    
    }
    

  function chooseSubjects(selVal){
    var subjectsDropdown = $('#selector5');
     subjectsDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=4&sortid="+selVal,function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_subjects.subject_name,data.data[i].ems_subjects.id );
            subjectsDropdown.append(o);
       }
       gettheclasses();
      },"json");
    
    }    


function selectChanged(obj,table1,editor1,table2,editor2){   
    chooseClasses(institutionDropdown.val());
    //chooseSubjects(institutionDropdown.val());
   
    
}

function reloadtheAllstudentsGrid(){   
    loadUrl = "/back/Student_Subject.php?classId="+classDropdown.val()+"&inst="+institutionDropdown.val()+"&streamId="+streamDropdown.val()+"&subjectId="+subjectDropdown.val();
    table.ajax.url(loadUrl).load();     
}

function toClass(){  
   var rowsSel =  table.rows('.selected').data().length;
   if(rowsSel == 0){
      alert("Please select a student that you want to assign a class!");
   }else{  
       var selArray = table.rows('.selected').data();     
       for(var i=0; i< table.rows('.selected').data().length; i++){           
            var arrSpl = selArray[i]['DT_RowId'].split('_');                
            var selectedRowsId = arrSpl[1];                
            $.get("/back/StudentsRaw.php?case=5&id="+selectedRowsId+"&class_id="+classDropdown.val()+"&institution_id="+institutionDropdown.val()+"&streamId="+streamDropdown.val()+"&subjectId="+subjectDropdown.val(),function(data){     
            });
            var rowNode = tableStudentsSubjects
            .row.add( [selectedRowsId,selArray[i]['ems_person'].lname,selArray[i]['ems_person'].fname, selArray[i]['ems_person'].mname,selArray[i]['ems_person'].telephone,selArray[i]['ems_person'].town] )
            .draw()
            .node();

            $( rowNode )
            .css( 'color', 'yellow' )
            .animate( { color: 'red' } );
            
         } 
            table
            .rows( '.selected' )
            .remove()
            .draw();
     }    
}

function fromClass(){ 
    
   var rowsSel =  tableStudentsSubjects.rows('.selected').data().length;
   
   if(rowsSel == 0){
      alert("Please select a student that you want to move from selected subject!!");
   }else{  
       var selArray = tableStudentsSubjects.rows('.selected').data();
       
       for(var i=0; i< tableStudentsSubjects.rows('.selected').data().length; i++){
           var strArr = selArray[i];
                
            var selectedRowsId =strArr[0];
                
            $.get("/back/StudentsRaw.php?case=6&id="+selectedRowsId+"&class_id="+classDropdown.val()+"&institution_id="+institutionDropdown.val()+"&streamId="+streamDropdown.val()+"&subjectId="+subjectDropdown.val(),function(data){     
            });
            
         }
         
        var rows = tableStudentsSubjects
        .rows( '.selected' )
        .remove()
        .draw(); 
         
       reloadtheAllstudentsGrid();
       
     } 
    
}


function gettheclasses(){ 
    
    
            tableStudentsSubjects.clear();
            tableStudentsSubjects.draw();
            tableStudentsSubjects.select.style( 'multi' );
            
            loadUrl = "/back/Student_Subject.php?case=1&classId="+classDropdown.val()+"&inst="+institutionDropdown.val()+"&streamId="+streamDropdown.val()+"&subjectId="+subjectDropdown.val();
            
            $.ajax({
                url: loadUrl,
                async: false,
                dataType: 'json',
                success: function (json) {                    
                   if( json.data[0] != null){
                    for(var i=0; i<json.data.length; i++){
                       var arrSpl = json.data[i].DT_RowId.split('_'); 
                       var rowNode = tableStudentsSubjects
                       .row.add( [arrSpl[1],json.data[i].ems_person["lname"],json.data[i].ems_person["fname"],json.data[i].ems_person["mname"],json.data[i].ems_person["telephone"],json.data[i].ems_person["town"]] )
                       .draw()
                       .node(); 
                      }
                      
                      
                  }else{
                       
                   }
                }
            });
    
}



$(document).ready(function() {    

   postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'17',
       "userId" : userId
      }
     $.post("/back/LoadRoles.php",postVars,function(data){
        if(data.add == 2 || data.add == null || data.add == 0){
          $('.left-create').css("display","none");
         }         
        if(data.edit == 2 || data.edit == null || data.edit == 0){
         $('.dt-button.buttons-edit').css("display","none");
         }
        if(data.delete == 2 || data.delete == null || data.delete == 0){
         $('.right-remove').css("display","none"); 
        }

    $('#inst_name').html(data.category+'<span class="caret"></span>');
    $('#inst_id').val(data.institution);
    is_admin = data.is_admin;
    instId = data.institution;        
   
    editor = new $.fn.dataTable.Editor( {
            
                ajax: loadUrl,
		table: "#myView",
		fields: [{
				label: "Surname:",
				name: "ems_person.lname"
			},{
				label: "First Name:",
				name: "ems_person.fname"
			}, {
				label: "Second Name:",
				name: "ems_person.mname"
			},{
				label: "Address:",
				name: "ems_person.address"
			}, {
				label: "Active:",
				name: "ems_person.active",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Active" , value: "1" },
                                    { label: "Not Active",value: "2" }                                    
                                ]
			}, {
				label: "Type:",
				name: "ems_person.type",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Student" , value: "1" },
                                    { label: "Staff",value: "2" }                                    
                                ]
			}, {
				label: "Telephone:",
				name: "ems_person.telephone"
				
			}, {
				label: "Mobile:",
				name: "ems_person.mobile"
			}, {
				label: "Email:",
				name: "ems_person.email"
			}, {
				label: "Date of reg:",
				name: "ems_person.dor",
                                type: "datetime"
			},{
				label: "Date of completion:",
				name: "ems_person.doc",
                                type: "datetime"
			},{
				label: "National Id:",
				name: "ems_person.nationalid"
			},{
				label: "Date of Birth:",
				name: "ems_person.dob",
                                type: "datetime"
			},{
				label: "Town:",
				name: "ems_person.town"
			},{
				label: "Country:",
				name: "ems_person.country",
                                type: 'select',
                                placeholder: "Select type"
			},{
				label: "Gender:",
				name: "ems_person.gender",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Male" , value: "1" },
                                    { label: "Female",value: "2" }                                    
                                ]
			},{
				label: "Is Border:",
				name: "ems_person.is_border",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Yes" , value: "1" },
                                    { label: "No",value: "2" }                                    
                                ]
			},{
				label: "Discontinued:",
				name: "ems_person.is_discontinue",
                                type: 'select',
                                placeholder: "Select type",
                                options: [
                                    { label: "Yes" , value: "1" },
                                    { label: "No",value: "2" }                                    
                                ]
			},{
				label: "Institution type:",
				name: "ems_person.institution_type",
                                type: 'hidden'
			},{
				label: "Institution:",
				name: "ems_person.institution",
                                type: 'hidden'
			}
		]

	 });

	// Activate an inline edit on click of a table cell
	$('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editor.inline( this );
	} );

	table = $('#myView').DataTable( {
		dom: "Bfrtip",
		ajax: loadUrl,
                select: true,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_person.lname" },
                        { data: "ems_person.fname" },
                        { data: "ems_person.mname" },
			//{ data: "address" },
			{ data: "ems_person.telephone" },
			//{ data: "email" },
			{ data: "ems_person.town" }
		],
		/*select: {
			style:    'os',
			selector: 'td:first-child'
		},*/
		buttons: [
			/*{ extend: "create", editor: editor },
			{ extend: "edit",   editor: editor },
			{ extend: "remove", editor: editor },
                        {
                            extend: "selectedSingle",
                            text: "Save",
                            action: function ( e, dt, node, config ) {
                               submitInstitutionDetails(this);
                            }
                        }*/
		]
	} );
        
       table.select.style( 'multi' );
    
    
    	tableStudentsSubjects = $('#studentSubjects').DataTable( {            
             select: true 
	});
    
    
        selectChanged(null);
        gettheclasses();
        chooseSubjects(1);


  
     },"json");
 });
/*
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

  }*/
         



