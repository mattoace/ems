$(document).ready(function() {


	loadUrl = "/back/InstitutionRoles.php";     
    
    
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
		
		]
	});
        
        m_editor.on( 'open', function ( e, json, data ) { 
            m_editor.set('ems_institution.type',$('#inst_id').val());            
          });
          
        table.on( 'click', 'tr', function (id) {
                //var selRow = table.row('.selected').data(); 
                //var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });




	loadUrl = "/back/InstitutionRoles.php?action=1&id=67";

	m_editorRoles = new $.fn.dataTable.Editor({	
                ajax: loadUrl,
		table: "#myView2",
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
	$('#myView2').on( 'click', 'tbody td:not(:first-child)', function (e) {
		m_editorRoles.inline( this );
	} );

	tableRoles = $('#myView2').DataTable( {
		dom: "Bfrtip",   
		ajax: loadUrl,
		columns: [			
			{ data: "ems_institution.institution_name" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
		
		]
	});
        
    m_editorRoles.on( 'open', function ( e, json, data ) { 
                   
          });
          
     tableRoles.on( 'click', 'tr', function (id) {
          
                
         });







   });

function relaodUserSelected(obj,sel){ //alert($('#selector1').val().toSource());
    loadUrl = "/back/InstitutionRoles.php?action=1&id="+$('#selector1').val();
	tableRoles.ajax.url(loadUrl);
	tableRoles.ajax.reload();
}



function toRoles(){   
 
   var rowsSel =  table.rows('.selected').data().length;
   if(rowsSel == 0){
      alert("Please select an Institution!");
   }else{  
       var selArray = table.rows('.selected').data();     
       for(var i=0; i< table.rows('.selected').data().length; i++){           
            var arrSpl = selArray[i]['DT_RowId'].split('_');                
            var selectedRowsId = arrSpl[1];    

            $.get("/back/Common.php?action=3&id="+selectedRowsId+"&userid="+$('#selector1').val(),function(data){ 

	         loadUrl = "/back/InstitutionRoles.php?action=1&id="+$('#selector1').val();
	         tableRoles.ajax.reload(loadUrl);
   
            });
          /*  var rowNode = tableClass
            .row.add( [selectedRowsId,selArray[i]['ems_person'].lname,selArray[i]['ems_person'].fname, selArray[i]['ems_person'].mname,selArray[i]['ems_person'].telephone,selArray[i]['ems_person'].town] )
            .draw()
            .node();

            $( rowNode )
            .css( 'color', 'yellow' )
            .animate( { color: 'red' } );
            */
         } 
            table
            .rows( '.selected' )
            .remove()
            .draw();
     }    
}