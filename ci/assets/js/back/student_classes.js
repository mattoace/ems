classDropdown = $('#selectorClass');
instDropdown = $('#selector1'); 
//loadUrlClass = "/back/Student_Classes.php?id="+classDropdown.val()+"&inst="+instDropdown.val();
 loadUrlClass = "/back/Student_ClassesMain.php?id="+classDropdown.val()+"&inst="+instDropdown.val();
function selectClassChanged(tableClass){
  gettheclasses(tableClass,instDropdown.val(),classDropdown.val());
  //chooseClasses();
}


function chooseClasses(){
    selVal = instDropdown.val();
    var classDropdown = $('#selectorClass');
     classDropdown.empty(); 
     $.get("/back/LoopUpDropDowns.php?case=1&sortid="+selVal,function(data){ 
       for (var i = 0 ; i < data.data.length ; i++){ 
            var o = new Option(data.data[i].ems_classes.class_name,data.data[i].ems_classes.id );
            classDropdown.append(o);
            
       }
       gettheclasses(tableClass,instDropdown.val(),classDropdown.val());
       //chooseStream(classDropdown.val());
       //chooseExamType();
       //chooseTerm();
      },"json");
    
    }

var editorClass; 
$(document).ready(function() {


  postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'15',
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


	editorClass = new $.fn.dataTable.Editor( {	
                ajax: loadUrlClass,
		table: "#studentClasses",
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
	} );

	// Activate an inline edit on click of a table cell
	$('#studentClasses').on( 'click', 'tbody td:not(:first-child)', function (e) {
		//editor.inline( this );
	} );

	tableClass = $('#studentClasses').DataTable( {            
             select: true 
	});
      
    gettheclasses(tableClass,instDropdown.val(),classDropdown.val()); 



     },"json");  



});


function toClass(){   
 
   var rowsSel =  table.rows('.selected').data().length;
   if(rowsSel == 0){
      alert("Please select a student that you want to assign a class!");
   }else{  
       var selArray = table.rows('.selected').data();     
       for(var i=0; i< table.rows('.selected').data().length; i++){           
            var arrSpl = selArray[i]['DT_RowId'].split('_');                
            var selectedRowsId = arrSpl[1];                
            $.get("/back/StudentsRaw.php?case=1&id="+selectedRowsId+"&class_id="+classDropdown.val()+"&institution_id="+instDropdown.val(),function(data){     
            });
            var rowNode = tableClass
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
//get all for selected form
function gettheclasses(tableClass,inst,classId){    
            tableClass.clear();
            tableClass.draw();
            tableClass.select.style( 'multi' );
            $.ajax({
                url: '/back/Student_Classes.php?id='+classId+"&inst="+inst,
                async: false,
                dataType: 'json',
                success: function (json) {                    
                   if( json.data[0] != null){
                    for(var i=0; i<json.data.length; i++){
                       var arrSpl = json.data[i].DT_RowId.split('_'); 
                       var rowNode = tableClass
                       .row.add( [arrSpl[1],json.data[i].ems_person["lname"],json.data[i].ems_person["fname"],json.data[i].ems_person["mname"],json.data[i].ems_person["telephone"],json.data[i].ems_person["town"]] )
                       .draw()
                       .node(); 
                      }
                      
                      
                  }else{
                       
                   }
                }
            });
    
}



function fromClass(){ 
    
   var rowsSel =  tableClass.rows('.selected').data().length;
   
   if(rowsSel == 0){
      alert("Please select a student that you want to move from a class!");
   }else{  
       var selArray = tableClass.rows('.selected').data();     
       for(var i=0; i< tableClass.rows('.selected').data().length; i++){
           var strArr = selArray[i];
                
            var selectedRowsId =strArr[0];
                
            $.get("/back/StudentsRaw.php?case=2&id="+selectedRowsId+"&class_id="+classDropdown.val()+"&institution_id="+instDropdown.val(),function(data){     
            });          
         }
         
        var rows = tableClass
        .rows( '.selected' )
        .remove()
        .draw(); 
         
       loadUrlClass = "/back/Student_ClassesMain.php?id="+classDropdown.val()+"&inst="+instDropdown.val();  
       table.ajax.url(loadUrlClass).load(); 
     } 
    
}