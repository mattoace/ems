institutionDropdown = $('#selector1'); 
is_admin = null;
instId = null;
loadUrl = "/back/PersonInstitutionTeacher.php?inst="+institutionDropdown.val()+"&instype="+instId+"&is_admin="+is_admin;

function loadInstitutions(institutionType,myTable,myEditor,inst_name){
  
  myEditor.on( 'open', function ( e, json, data ){
    var institutionDropdown = $('#selector1');
    myEditor.set('ems_person.institution',institutionDropdown.val());
    myEditor.set('ems_person.institution_type',institutionType);
    myEditor.set('ems_person.persontype',2);
    
  } );
  
  
  myEditor.on( 'submitComplete', function ( e, json, data ) {
    myTable.ajax.url(loadUrl).load();
  } );
  reloadSelector(institutionType);
    $('#inst_name').html(inst_name+'<span class="caret"></span>');
  $('#inst_id').val(institutionType);
}

function reloadSelector(institutionType){    
     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
        $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }

    loadUrl = "/back/PersonInstitutionTeacher.php?inst="+institutionDropdown.val()+"&instype="+instId+"&is_admin="+is_admin;
    table.ajax.url(loadUrl).load(); 

     },"json");
}

var editor; 
$(document).ready(function() {

      institutionDropdown = $('#selector1'); 

      postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'3',
       "userId" : userId
      }
     $.post("/back/LoadRoles.php",postVars,function(data){
        if(data.add == 2 || data.add == null){
          $('.dt-button.buttons-create').css("display","none");
         }         
        if(data.edit == 2 || data.edit == null){
         $('.dt-button.buttons-edit').css("display","none");
         }
        if(data.delete == 2 || data.delete == null){
         $('.dt-button.buttons-remove').css("display","none"); 
        }
   
        $('#inst_name').html(data.category+'<span class="caret"></span>');
        $('#inst_id').val(data.institution);
        is_admin = data.is_admin;
        instId = data.institution;
       // alert(institutionDropdown.val());
//
      // loadUrl = "/back/PersonInstitution.php?inst="+instId+"&instype="+data.instType+"&is_admin="+is_admin;
	
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
                                    { label: "Teacher" , value: "2" }//,
                                    //{ label: "Staff",value: "2" }                                    
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
			}, /*{
				label: "Date of reg:",
				name: "ems_person.dor",
                                type: "datetime"
			},{
				label: "Date of completion:",
				name: "ems_person.doc",
                                type: "datetime"
			},*/
      {
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
			},

      {
        label: "Job Number / Employee No.:",
        name: "ems_person.jobnumber"
      },
      {
        label: "Qualification:",
        name: "ems_person.qualification"
      },

      /*{
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
			},*/

      {
        label: "Person type:",
        name: "ems_person.persontype",
                                type: 'hidden'
      },

      {
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
			{ data: "ems_person.lname" },
                        { data: "ems_person.fname" },
                        { data: "ems_person.mname" },
			//{ data: "address" },
			{ data: "ems_person.telephone" },
			//{ data: "email" },
			{ data: "ems_person.town" }
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
        var institutionDropdown = $('#selector1');



        editor.on( 'open', function ( e, json, data ) {       
            editor.set('ems_person.institution',institutionDropdown.val());
            editor.set('ems_person.institution_type',1);
            editor.set('ems_person.persontype',2);
          });
          
        table.on( 'click', 'tr', function (id) {
                var selRow = table.row('.selected').data();
                var rowId =  selRow['DT_RowId'];
                var arrValues = rowId.split('_');
                rowSelected(arrValues[1]);
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

function selectChanged(obj,table,editor){
  loadUrl = "/back/PersonInstitutionTeacher.php?inst="+obj.value;  
  table.ajax.url(loadUrl).load();
}

/*$("#container_image").PictureCut({
    InputOfImageDirectory       : "image",
    PluginFolderOnServer        : "/assets/jquerypic/",
    FolderOnServer              : "/assets/uploads/",
    EnableCrop                  : true,
    CropWindowStyle             : "Bootstrap"
});*/


/*---working -- $("#container_image").PictureCut({
    InputOfImageDirectory       : "image",
    PluginFolderOnServer        : "/ems/ci/assets/jquerypic/",
    FolderOnServer              : "/ems/ci/assets/uploads/",
    EnableCrop                  : true,
    DataPost  : {"id":1234},
    CropWindowStyle             : "Bootstrap"
});*/
//ref of plugin : http://picturecut.tuyoshi.com.br/docs/#Installation

function rowSelected(rowId){

    $.get("/back/PersonInstitution.php?case=1&inst="+institutionDropdown.val()+"&student_id="+rowId,function(data){ 
     $('#fullnames').val(data.data[0].ems_person.lname+" "+data.data[0].ems_person.fname+" "+data.data[0].ems_person.mname);
     $('#address').val(data.data[0].ems_person.address);
     $('#telephone').val(data.data[0].ems_person.telephone);
     $('#mobile').val(data.data[0].ems_person.mobile);
     $('#email').val(data.data[0].ems_person.email);
     $('#dateofreg').val(data.data[0].ems_person.dor);
     $('#dateofcompletion').val(data.data[0].ems_person.doc);
     $('#nationalid').val(data.data[0].ems_person.nationalid);
     $('#dateofbirth').val(data.data[0].ems_person.dob);
     $('#town').val(data.data[0].ems_person.town);
     $('#country').val(data.data[0].e1.country_name);
    
      if(data.data[0].ems_person.gender == 1){
         $('#gender').val("Male");
      }else{
      	 $('#gender').val("Female");
      }

      if(data.data[0].ems_person.is_border == 1){
         $('#border').val("Is Border");
      }else{
      	 $('#border').val("Day Scholar");
      }

      if(data.data[0].ems_person.is_discontinue == 1){
         $('#discontinue').val("Discontinued");
      }else{
      	 $('#discontinue').val("Not Discontinued");
      }    

    },"json");

   setStudentImage(rowId);    


  $(document).ready(function() {

/*
  $("#myPicture").empty();
  $("#container_image").remove();

  var div = $( "<div id='container_image'/>" );
  $("#container_image").css("background-size" , "90% 90%");
  $( "#myPicture" ).append(div); */

    $("#container_image").PictureCut({
          InputOfImageDirectory       : "image",
          PluginFolderOnServer        : "/assets/jquerypic/",
          FolderOnServer              : "/assets/uploads/",
          EnableCrop                  : true,
          DataPost  : {"id": rowId },
          CropWindowStyle             : "Bootstrap"
      });
    });

}

initPicture(0);

$(document).ready(function() {

 $("#container_image").PictureCut({
        InputOfImageDirectory       : "image",
        PluginFolderOnServer        : "/assets/jquerypic/",
        FolderOnServer              : "/assets/uploads/",
        EnableCrop                  : true,
        DataPost  : {"id": 0 },
        CropWindowStyle             : "Bootstrap"
    });
  });


/*function getStudentId(){

$(document).ready(function() {
                var selRow = table.row('.selected').data();
                var rowId =  selRow['DT_RowId'];
                var arrValues = rowId.split('_'); 

  return 151;
  });
}*/

function setStudentImage(student_id){

      $("#container_image").css("background-size" , "90% 90%");

      $.get("/back/ReadImage.php?action=1&id="+student_id,function(data){

      //$("#container_image").css("background-image", "url(http://192.168.1.40/ems/ci/assets/uploads/"+data.img_name+")");
      $("#container_image").css("background-image", "url(/assets/uploads/"+data.img_name+")");

      },"json");
}


$(document).ready(function() {
      postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'3',
       "userId" : userId
      }
     $.post("/back/LoadRoles.php",postVars,function(data){
        if(data.add == 2 || data.add == null){
          $('.dt-button.buttons-create').css("display","none");
         }         
        if(data.edit == 2 || data.edit == null){
         $('.dt-button.buttons-edit').css("display","none");
         }
        if(data.delete == 2 || data.delete == null){
         $('.dt-button.buttons-remove').css("display","none"); 
        }
     },"json");
  });


