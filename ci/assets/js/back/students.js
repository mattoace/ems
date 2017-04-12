institutionDropdown = $('#selector1');
classDropdown = $('#selectorClass');
 is_admin = null;
instId = null; 
loadUrl = "/back/Student_ClassesMain.php?inst="+institutionDropdown.val()+"&id="+classDropdown.val()+"&type=main";

function loadInstitutions(institutionType,myTable,myEditor,inst_name){
  loadUrl = "/back/Student_ClassesMain.php?inst="+institutionDropdown.val()+"&id="+classDropdown.val()+"&type=main";
  
  //myTable.ajax.url(loadUrl);
  //myTable.ajax.reload();
  myTable.ajax.url(loadUrl).load(); 
  
  myEditor.on( 'open', function ( e, json, data ){
    var institutionDropdown = $('#selector1');
    myEditor.set('institution',institutionDropdown.val());
    myEditor.set('institution_type',institutionType);
    
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
         chooseClasses();
     },"json");
}

var editor; 

$(document).ready(function() {

    postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'16',
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
     'selectAll',
        'selectNone'
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
		],
      language: {
        buttons: {
            selectAll: "Select all items",
            selectNone: "Select none"
        }
    }
	} );
        
       table.select.style( 'multi' );
         
        var institutionDropdown = $('#selector1');
        editor.on( 'open', function ( e, json, data ) {           
            editor.set('institution',institutionDropdown.val());
            editor.set('institution_type',1);
          });
          
        table.on( 'click', 'tr', function (id) {
                var selRow = table.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
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
  loadUrl = "/back/Student_ClassesMain.php?inst="+institutionDropdown.val()+"&id="+classDropdown.val()+"&type=main"; 
  table.ajax.url(loadUrl).load();
}


$("#container_image").PictureCut({
    InputOfImageDirectory       : "image",
    PluginFolderOnServer        : "/ems/ci/assets/jquerypic/",
    FolderOnServer              : "/ems/ci/assets/uploads/",
    EnableCrop                  : true,
    CropWindowStyle             : "Bootstrap"
});
//ref of plugin : http://picturecut.tuyoshi.com.br/docs/#Installation

//loadInstitutions(1);