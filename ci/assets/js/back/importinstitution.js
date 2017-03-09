institutionType = 1;

loadUrl = "/back/Institution.php?id="+institutionType;

/*function setCookie(c_name,value,exdays)
    {
      var exdate=new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
      document.cookie=c_name + "=" + c_value;
    }*/
	
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
  loadUrl = "/back/Institution.php?id="+institutionType;  
  myTable.ajax.url(loadUrl);
  myTable.ajax.reload();  
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
    
    
	m_editor = new $.fn.dataTable.Editor( {	
                ajax: loadUrl,
		table: "#myView",
		fields: [ {
				label: "Institution Name:",
				name: "ems_institution.institution_name"
			}, {
				label: "District:",
				name: "ems_institution.district",
                                type: 'select',
                                placeholder: "Select type",
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
	} );

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
			{ data: "ems_district.district_name" },
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
                            text: "Import",
                            action: function ( e, dt, node, config ) {
                               importInstitutions(institutionType,table);
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
   
         
} );

    

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
	

function importInstitutions(instType,object){


        if($('#inst_id').val()>0){
         institutionType = $('#inst_id').val();   
        }else{
          institutionType =1;  
        }
			
		
		$("#fileuploader").uploadFile({
		url:"/back/Imports.php?id="+institutionType,
		fileName:"myfile",
		afterUploadAll:function(obj)
			{
			  $( "#dialog" ).dialog( "close" ); 
		      loadUrl = "/back/Institution.php?id="+institutionType;
              table.ajax.url(loadUrl);
              table.ajax.reload();  
			}
		});


	$( "#dialog" ).dialog( "open" ); 	
}




//loadInstitutions(1);