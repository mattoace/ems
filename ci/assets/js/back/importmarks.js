institutionDropdown = $('#selector1');

classDropdown = $('#selector2'); 

streamDropdown = $('#selector3'); 

examDropdown = $('#selector4');

subjectDropdown = $('#selector5');

termDropdown = $('#selector6'); 


is_admin = null;
instId = null;



loadUrlMarks = "/back/MarksImport.php?inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown+"&term_id="+termDropdown;



	

function getCookie(c_name)

	{

		var i,x,y,ARRcookies=document.cookie.split(";");

		for (i=0;i<ARRcookies.length;i++)

		{

			x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));

			y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);

			x=x.replace(/^\s+|\s+$/g,"");

			if (x==c_name)

			{

				return unescape(y);

			}

		}

	} 



function loadInstitutions(institutionType,myTable,myEditor,inst_name){

	 reloadSelector(institutionType);

	 $('#inst_name').html(inst_name+'<span class="caret"></span>');

	 $('#inst_id').val(institutionType); 

   chooseSubjects(institutionType);   

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

      loadDataTable();

      },"json");

    

    }



  function streamChanged(){

    loadDataTable();    

  } 



  function subjectChanged(){     

     loadDataTable(); 

  } 

    

  function chooseExamType(){

    var examtypeDropdown = $('#selector4');

     examtypeDropdown.empty(); 

     $.get("/back/LoopUpDropDowns.php?case=3&sortid=0",function(data){ 

       for (var i = 0 ; i < data.data.length ; i++){ 

            var o = new Option(data.data[i].ems_examtypes.exam_description,data.data[i].ems_examtypes.id );

            examtypeDropdown.append(o);

       }     

      },"json");

    

    }

    

  function chooseSubjects(selVal){

    var subjectsDropdown = $('#selector5');

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



function selectChanged(obj){   

    chooseClasses(institutionDropdown.val());

}





function reloadSelector(institutionType){    

     var institutionDropdown = $('#selector1');     
     var selSchool = null;
     institutionDropdown.empty();
     $.post("/back/LoadRoles.php",postVars,function(data){ 

         $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+data.is_admin,function(data){ 
             selSchool = data.data[0].id;
             for (var i = 0 ; i < data.data.length ; i++){       

                  var o = new Option(data.data[i].institution_name,data.data[i].id );
                  institutionDropdown.append(o);              
             }

             loadDataTable();
             chooseClasses(selSchool);

           },"json");

  },"json");

}



function loadDataTable(){  



   if(streamDropdown.val()){

       loadUrlMarks = "/back/MarksImport.php?case=2&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();

       tablesMarks.ajax.url(loadUrlMarks).load();

   }else{

       loadUrlMarks = "/back/MarksImport.php?case=1&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val();

       tablesMarks.ajax.url(loadUrlMarks).load();

   }

}





$(document).ready(function() { 





$(document).ready(function(){

    postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'1',
       "userId" : userId
      }
 $.post("/back/LoadRoles.php",postVars,function(data){

  is_admin = data.is_admin;
  instId = data.institution;


  editorMarks = new $.fn.dataTable.Editor({ 

  ajax: loadUrlMarks,

  table: "#myView",

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



  $('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {          

            

    editorMarks.inline( this );

  } );  



  tablesMarks = $('#myView').DataTable({

    dom: "Bfrtip",

   // ajax: loadUrlMarks,

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

              {                

                  text: "Empty Excel",

                  action: function ( e, dt, node, config ) {

                  emptyExcel(this);

              }

              },

             {                

                  text: "Upload Excel",

                  action: function ( e, dt, node, config ) {

                  upoadExelFile(this);

             }

              }

           ]

         }); 

         selectChanged(null,tablesMarks,editorMarks);    

     });   

         
   },"json");  
});



    



function submitInstitutionDetails(ed){

    var selRow = table.row('.selected').data(); //selRow.toSource()

    var arrSpl = selRow['DT_RowId'].split('_'); 

    alert("Selected = "+arrSpl[1]);    

}



function studentDetails(ed){

  

    alert("888");

    

    

}



 $( "#dialog" ).dialog({

      width: 455,

      height: 200,

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

	

function upoadExelFile(inst,object){



        if($('#inst_id').val()>0){

         institutionType = $('#inst_id').val();   

        }else{

          institutionType =1;  

        }			

		

		$("#fileuploader").uploadFile({



		url:"/back/Imports.php?id="+inst+"&case=2&id2="+institutionType+"&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val()+"&exam_id="+examDropdown.val()+"&subject_id="+subjectDropdown.val()+"&term_id="+termDropdown.val(),

		

    fileName:"myfile",

		afterUploadAll:function(obj)

			{

			 $( "#dialog" ).dialog( "close" ); 

		                     loadDataTable();

                         tablesMarks.ajax.reload();  

			}

		});



	$( "#dialog" ).dialog( "open" ); 	

}





function emptyExcel(obj){



       if($('#inst_id').val()>0){

          institutionType = $('#inst_id').val();   

        }else{

          institutionType =1;  

        } 

    location.href ="/back/BlankExcel.php?id="+institutionType+"&inst="+institutionDropdown.val()+"&class_id="+classDropdown.val()+"&stream_id="+streamDropdown.val();



}

