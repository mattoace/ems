institutionDropdown = $('#selector1');
classDropdown = $('#selector2'); 
streamDropdown = $('#selector3'); 
examDropdown = $('#selector4');
subjectDropdown = $('#selector5');
termDropdown = $('#selector6');
is_admin = null;
instId = null;  

function getCookie(c_name)
{
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++)
    {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name)
        {
            return unescape(y);
        }
    }
}

function setCookie(c_name, value, exdays)
{
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

loadUrlMarks = "/back/Marks.php?inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();


function loadInstitutions(institutionType,myTable1,myEditor1,inst_name){
     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
     $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }         
       selectChanged(institutionType,myTable1,myEditor1,null,null);
       setCookie('institution_type',institutionType, 1); //alert(institutionType); 
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
       chooseExamType();
       chooseTerm();
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
      },"json");
     loadUrlMarks = "/back/Marks.php?case=1&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
     tablesMarks.ajax.url(loadUrlMarks).load(); 
    
    }

  function streamChanged(){
     loadUrlMarks = "/back/Marks.php?case=2&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
     tablesMarks.ajax.url(loadUrlMarks).load();     
  } 

  function subjectChanged(){
     loadUrlMarks = "/back/Marks.php?case=3&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
     tablesMarks.ajax.url(loadUrlMarks).load(); 
  } 
    
  function chooseExamType(){
    var examtypeDropdown = $('#selector4');
     examtypeDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=3&sortid=0",function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_examtypes.exam_description,data.data[i].ems_examtypes.id );
            examtypeDropdown.append(o);
       }

      loadUrlMarks = "/back/Marks.php?inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
      tablesMarks.ajax.url(loadUrlMarks).load(); 

      },"json");
    
    }
    
  function chooseSubjects(selVal){
    var subjectsDropdown = $('#selector5');
    //selVal = getCookie('institution_type'); alert(selVal);
    if(selVal == null) selVal =1;
     subjectsDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=4&sortid="+selVal,function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_subjects.subject_name,data.data[i].ems_subjects.id );
            subjectsDropdown.append(o);
       }
      },"json");
    
    }
    chooseSubjects(1); 
    
  function chooseTerm(){
    var termDropdown = $('#selector6');
     termDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=5&sortid=0",function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_terms.term_name,data.data[i].ems_terms.id );
            termDropdown.append(o);
       }
      },"json");
    
    }

function selectChanged(obj,table1,editor1,table2,editor2){   
    chooseClasses(institutionDropdown.val());
    //chooseSubjects(institutionDropdown.val());

    loadUrlMarks = "/back/Marks.php?inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
    tablesMarks.ajax.url(loadUrlMarks).load(); 

    /*loadUrleGrades = "/back/Grades.php?id="+institutionDropdown.val()+"&type=1";
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
    } );*/
    
    
    
}


$(document).ready(function() {

   postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'14',
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
    
	editorMarks = new $.fn.dataTable.Editor({	
        ajax: loadUrlMarks,
	table: "#Marks",
	fields: [       {
				label: "Marks:",
				name: "e1.marks"
			}
                         ,{
				label: "Fname:",
				name: "ems_person.fname"
			}
		]
	});

	$('#Marks').on( 'click', 'tbody td:not(:first-child)', function (e) {          
            
		editorMarks.inline( this );
	} );  

	tablesMarks = $('#Marks').DataTable({
		dom: "Bfrtip",
		ajax: loadUrlMarks,
		columns: [
			{
				data: null,
				defaultContent: '',
				//className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_person.id"},
                        { data: "ems_person.lname" },
			{ data: "ems_person.fname" },
			{ data: "ems_person.mname" },
                        { data: "e1.marks",className:'mark' }  	
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [		
			  { extend: "edit",   editor: editorMarks }
		]
	});        
 
  editorMarks.on('preSubmit', function (obj,values,action) { //postSubmit
         
         for (row in values.data) break;         
         var rows = tablesMarks.row('#'+row); 
         var celData = {row:rows[0], column:5};         
         var cell = tablesMarks.cell(celData);
         
         var arrID = row.split('_');
         
         var postVars = {
             "id":arrID[1],
             "val":values.data[row].e1.marks,
             "term":termDropdown.val(),
             "class":classDropdown.val(),
             "stream":streamDropdown.val(),
             "inst":institutionDropdown.val(),
             "row_inde":rows[0],
             "exam_id":examDropdown.val(),
             "subject_id":subjectDropdown.val()
         }
         
        /* $.post("/back/SaveMarks.php",postVars,function(data){ 
         
            //cell.data(values.data[row].e1.marks).draw();            
            loadUrlMarks = "/back/Marks.php?case=1&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();
             var newcelData = {row:data.row_index, column:5};
             
             tablesMarks.ajax.url(loadUrlMarks).load(); 
           
             editorMarks.inline( newcelData );
            
            
          },"json");*/
          
          

         
         return true;
     });
     
    /* editorMarks.on('onInitEdit onInitCreate', function () {
        // alert("2");
         //fnGetDropdown(7);
         return true;
     });         
  */
  
         
     selectChanged(null,tablesMarks,editorMarks); 
     },"json");

 });

   



