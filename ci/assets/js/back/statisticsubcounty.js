institutionType = 2;
is_admin = null;
instId = null;

subcounty = 11231;

function loadInstitutions(institutionType,myTable,myEditor,inst_name){
  
  //loadUrl = "/back/Institution.php?id="+institutionType;

  loadUrl = "/back/Institution.php?id="+institutionType+"&inst=" + instId + "&is_admin="+is_admin; 
  
  myTable.ajax.url(loadUrl);
  myTable.ajax.reload();
  //myTable.ajax.url(loadUrl).load(); 
  
  myEditor.on( 'open', function ( e, json, data ) {
    myEditor.set('type',institutionType);
    
  } );
  
  
  myEditor.on( 'submitComplete', function ( e, json, data ) {
     myTable.ajax.url(loadUrl).load();
  } );
  
  $('#inst_name').html(inst_name+'<span class="caret"></span>');
  $('#inst_id').val(institutionType); 
  
}

var m_editor;

$(document).ready(function() {


    postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'1',
       "userId" : userId
      }
     $.post("/back/LoadRoles.php",postVars,function(data){
        if(data.add == 2 || data.add == null ){
          $('.dt-button.buttons-create').css("display","none");
         }         
        if(data.edit == 2 || data.edit == null){
         $('.dt-button.buttons-edit').css("display","none");
         $('.dt-button.buttons-selected-single.disabled').css("display","none");
         }
        if(data.delete == 2 || data.delete == null){
         $('.dt-button.buttons-remove').css("display","none"); 
        }

        $('#inst_name').html(data.category+'<span class="caret"></span>');
        $('#inst_id').val(data.institution);
        is_admin = data.is_admin;
        instId = data.institution;
        $('#inst_id').val(data.instType); 
        loadUrl = "/back/Institution.php?id="+institutionType+"&inst=" + instId + "&is_admin="+is_admin; 

    
    
    
	m_editor = new $.fn.dataTable.Editor({	
                ajax: loadUrl,
		table: "#myView",
		fields: [ {
				label: "Institution Name:",
				name: "ems_institution.institution_name"
			},
      {
				label: "County:",
				name: "ems_institution.county",
                                type: 'select',
                                placeholder: "Select type",
			},                        {
				label: "Sub county:",
				name: "ems_institution.subcounty",
                                type: 'select',
                                placeholder: "Select type",
			},{
				label: "Address:",
				name: "ems_institution.address"
			}, {
				label: "Town:",
				name: "ems_institution.town"
			}, {
				label: "Email:",
				name: "ems_institution.email"
			}, {
				label: "Founded:",
				name: "ems_institution.founded_date",
				type: "datetime"
			}, {
				label: "Population:",
				name: "ems_institution.total_population"
			}, {
				label: "Type:",
				name: "ems_institution.type",
                                type: "hidden"
			}, {
				label: "Id:",
				name: "ems_institution.id",
                                type: "hidden"
			}
		]

	});

	// Activate an inline edit on click of a table cell
	$('#myView').on( 'click', 'tbody td:not(:first-child)', function (e) {
		m_editor.inline( this );
	} );

	table = $('#myView').DataTable( {
		dom: "Bfrtip",
                //processing: true, 
		ajax: loadUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_institution.institution_name" },
			/*{ data: "ems_district.district_name" },*/
			{ data: "ems_county.county_name" },
                        { data: "ems_subcounty.sub_countyname" },
			{ data: "ems_institution.town" },
			{ data: "ems_institution.address" },
                        { data: "ems_institution.founded_date" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [	
                       {
                            extend: "selectedSingle",
                            text: "Print School Pdf",
                            action: function ( e, dt, node, config ) {
                               printSchoolPdf(this);
                            }
                        },{
                            extend: "selectedSingle",
                            text: "Print Teachers Pdf",
                            action: function ( e, dt, node, config ) {
                               printTeachersPdf(this);
                            }
                          },
                          {
                            extend: "selectedSingle",
                            text: "Print Teachers in Selected School Pdf",
                            action: function ( e, dt, node, config ) {
                               printTeacherSchoolPdf(this);
                            }
                          },
                          {
                            extend: "selectedSingle",
                            text: "Zone Calendar of Events",
                            action: function ( e, dt, node, config ) {
                               printCalendarOfEvents(this);
                            }
                         }
		]
	});
        
        m_editor.on( 'open', function ( e, json, data ) { 
            m_editor.set('ems_institution.type',$('#inst_id').val());            
          });
          
        table.on( 'click', 'tr', function (id) {
              
                
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
   
    },"json");     
 });    


function printSchoolPdf(ed){  
    var selRow = table.row('.selected').data(); 
    var arrSpl = selRow['DT_RowId'].split('_'); 
    $("#reportView").html('<object data="/back/Jasper/subcountyschools.php?id='+arrSpl[1]+'&subcounty='+subcounty+' " type="application/pdf" width="1000px" height="700px">alt : Schools in my Sub County</object>');
    $('#reportView').popup('show'); 
    
}

function printTeacherSchoolPdf(ed){
    var selRow = table.row('.selected').data(); 
    var arrSpl = selRow['DT_RowId'].split('_'); 
    $("#reportView").html('<object data="/back/Jasper/subcountysteachers.php?id='+arrSpl[1]+'&subcounty='+subcounty+' " type="application/pdf" width="1000px" height="700px">alt : Schools in my Sub County</object>');
    $('#reportView').popup('show');   
}


function printTeachersPdf(ed){
    var selRow = table.row('.selected').data(); 
    var arrSpl = selRow['DT_RowId'].split('_'); 
    $("#reportView").html('<object data="/back/Jasper/subcountyteachers.php?id='+arrSpl[1]+'&subcounty='+subcounty+' " type="application/pdf" width="1000px" height="700px">alt : Schools in my Sub County</object>');
    $('#reportView').popup('show'); 
}

function printCalendarOfEvents(ed){

	   var selRow = table.row('.selected').data(); 
     var arrSpl = selRow['DT_RowId'].split('_'); 

}

