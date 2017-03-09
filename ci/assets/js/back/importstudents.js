institutionDropdown = $('#selector1');
 is_admin = null;
 instId = null;  

loadUrl = "/back/PersonInstitution.php?inst="+institutionDropdown.val();
	
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
}

function reloadSelector(institutionType){    
     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
     $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }
         loadDataTable();
     },"json");
}

function loadDataTable(){
    
  loadUrl = "/back/PersonInstitution.php?inst="+institutionDropdown.val();
  table.ajax.url(loadUrl);
    
}

function selectChanged(obj,table,editor){
  loadUrl = "/back/PersonInstitution.php?inst="+institutionDropdown.val();
  table.ajax.url(loadUrl).load();
}

var m_editor;

$(document).ready(function() { 

   postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'19',
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

    
	m_editor = new $.fn.dataTable.Editor( {	
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
                                    { label: "Student" , value: "1" }//,
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
	$('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {
		m_editor.inline( this );
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
                         {                         
                            text: "Import",
                            action: function ( e, dt, node, config ) {
                               importStudents(institutionDropdown.val(),table);
                            }
                          }
		]
	} );
        
        m_editor.on( 'open', function ( e, json, data ) {
            m_editor.set('type',1);            
          });
          
        table.on( 'click', 'tr', function (id) {
                //var selRow = table.row('.selected').data(); 
                //var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         m_editor.on('onInitCreate onInitEdit', function () {//onInitEdit //onInitCreate 
               $('select', m_editor.node('ems_institution.district')).on('change', function () {      
                 fnGetCountyList(m_editor.get('ems_institution.district'))
               }); 
         });
         
         
        function fnGetCountyList(countryId) {
            
            var countylist = new Array();
            $.ajax({
                url: '/back/Countydropdown.php?countyId='+countryId,
                async: false,
                dataType: 'json',
                success: function (json) {
                    
                   if( json.data[0] != null){ 
                    
                    for(var i=0; i<json.data.length; i++){
                        
                          countylist[i] = { "label": json.data[i].ems_county["county_name"], "value": json.data[i].ems_county["id"] };
                      }
                      
                  }else{
                          countylist[0] = { "label":"Please enter county in County section.", "value":0};
                   }
                }
            });
         
          m_editor.field('ems_institution.county').update(countylist);
          
         }
         
         
         
         
    /* $('select', m_editor.node('ems_institution.district')).on('change', function () {      
            fnGetCountyList(m_editor.get('ems_institution.district'))
     });    */

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
	
function importStudents(inst,object){


        if($('#inst_id').val()>0){
         institutionType = $('#inst_id').val();   
        }else{
          institutionType =1;  
        }			
		
		$("#fileuploader").uploadFile({
		url:"/back/Imports.php?id="+inst+"&case=1&id2="+institutionType,
		fileName:"myfile",
		afterUploadAll:function(obj)
			{
			 $( "#dialog" ).dialog( "close" ); 
		         loadUrl = "/back/PersonInstitution.php?inst="+inst;
                         table.ajax.url(loadUrl);
                         table.ajax.reload();  
			}
		});

	$( "#dialog" ).dialog( "open" ); 	
}

