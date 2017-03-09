loadCountyUrl = "/back/Location.php?action=1";

loadSubCountyUrl = "/back/Location.php?action=2";

loadDistrictUrl = "/back/Location.php?action=3";

var editorCounty,editorSubCounty,editorDistrict; 

$(document).ready(function() {
    
	editorCounty = new $.fn.dataTable.Editor( {	
                ajax: loadCountyUrl,
		table: "#County",
		fields: [
	               {
					label: "County Code:",
					name: "id"
				   },
			       {
					label: "County:",
					name: "county_name"
				   }
		]
	});

	// Activate an inline edit on click of a table cell
	$('#County').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorCounty.inline( this );
	} );

	tableCounty = $('#County').DataTable( {
		dom: "Bfrtip",
		ajax: loadCountyUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "id" },
			{ data: "county_name" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorCounty },
			{ extend: "edit",   editor: editorCounty },
			{ extend: "remove", editor: editorCounty }
		]
	} );
        
        editorCounty.on( 'open', function ( e, json, data ) {
            editorCounty.set('type',1);
          });
          
        tableCounty.on( 'click', 'tr', function (id) {
                var selRow = tableCounty.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         
         
        editorSubCounty = new $.fn.dataTable.Editor( {	
                ajax: loadSubCountyUrl,
		table: "#SubCounty",
		fields: [
                  {
				  label: "County:",
				  name: "ems_subcounty.county",
				  type: 'select',
                  placeholder: "Select type"
			      },
			      {
				  label: "Sub County Code:",
				  name: "ems_subcounty.id"
			      },
		          {
				  label: "Sub county:",
				  name: "ems_subcounty.sub_countyname"
			      }
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#SubCounty').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorSubCounty.inline( this );
	} );

	tableSubCounty = $('#SubCounty').DataTable( {
		dom: "Bfrtip",
		ajax: loadSubCountyUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_subcounty.id" },
			{ data: "ems_county.county_name"},
		    { data: "ems_subcounty.sub_countyname"}
			
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorSubCounty },
			{ extend: "edit",   editor: editorSubCounty },
			{ extend: "remove", editor: editorSubCounty }
		]
	} );
        
        editorSubCounty.on( 'open', function ( e, json, data ) {
            editorSubCounty.set('type',1);
          });
          
        tableSubCounty.on( 'click', 'tr', function (id) {
                var selRow = tableSubCounty.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         
         
         
         
         
         
         
        editorDistrict = new $.fn.dataTable.Editor( {	
                ajax: loadDistrictUrl,
		table: "#District",
		fields: [
                        {
				label: "District:",
				name: "ems_district.district_name",                              
			},
                        {
				label: "County:",
				name: "ems_district.county",
                                type: 'select',
                                placeholder: "Select type",
			}
		]
	} );

	// Activate an inline edit on click of a table cell
	$('#District').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorDistrict.inline( this );
	} );

	/*tableDistrict = $('#District').DataTable( {
		dom: "Bfrtip",
		ajax: loadDistrictUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "ems_district.id" },
			{ data: "ems_district.district_name" },
                        { data: "ems_county.county_name" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorDistrict },
			{ extend: "edit",   editor: editorDistrict },
			{ extend: "remove", editor: editorDistrict }
		]
	} );
        
        editorDistrict.on( 'open', function ( e, json, data ) {
            editorDistrict.set('type',1);
          });
          
        tableDistrict.on( 'click', 'tr', function (id) {
                var selRow = tableDistrict.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         
                 editorDistrict.on( 'open', function ( e, json, data ) {
            editorDistrict.set('type',1);
          });
          
        tableDistrict.on( 'click', 'tr', function (id) {
                var selRow = tableDistrict.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         */
         
      postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'7',
       "userId" : userId
      }
     $.post("/back/LoadRoles.php",postVars,function(data){
        if(data.add == 2 || data.add == null || data.add == 0){
          $('.dt-button.buttons-create').css("display","none");
         }         
        if(data.edit == 2 || data.edit == null || data.edit == 0){
         $('.dt-button.buttons-edit').css("display","none");
         }
        if(data.delete == 2 || data.delete == null || data.delete == 0){
         $('.dt-button.buttons-remove').css("display","none"); 
        }
     },"json"); 

         
 });

