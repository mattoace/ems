var selInst = null;
$('#tab-container').easytabs({uiTabs: true});
$('#tab-container')
  .bind('easytabs:before', function(id,val,t){ 	    
	  if(selInst){
		 if(t.selector == "#tabs2"){
			  loadTree(selInst);
		  }
		 if(t.selector == "#tabs4"){
			 loadStudents(selInst);
		 } 
	  }else{
		  //alert("Please select a learning Institution!");		 
		  return true;
	  }
  });
/**
 * Add leading zeros
 * @param {Number} n
 * @param {Number} totalDigits
 * @return {String}
 */
function loadTree(selInst){

  $('#treeViewSubCats').jstree("destroy");
   $('#treeViewSubCats').jstree({
        'plugins': ["contextmenu"],
        'check_callback' : true,        
        'core': {
            'data': {
                "url": "/back/SubFacilities.php?id="+selInst,       
                "dataType": "json"
            }
        }
    });
}
 //'contextmenu': {'items': customMenu},
function PadDigits(n, totalDigits) {
    n = n.toString();
    var pd = '';
    if(totalDigits > n.length) {
        for(i = 0; i < (totalDigits - n.length); i++) {
            pd += '0';
        }
    }
    return pd + n.toString();
}
/**
 * Convert local timezone date string to UTC timestamp
 *
 * Alternative syntax using jquery (instead of moment.js):
 *     var date = $.datepicker.parseDateTime(dateformat, timeformat, date_str);
 *
 * @see http://stackoverflow.com/questions/948532/how-do-you-convert-a-javascript-date-to-utc
 * @param {String} date_str
 * @param {String} dateformat
 * @return {String}
 */
function local_datetime_to_UTC_timestamp(date_str, dateformat) {
 
    // avoid date overflow in user input (moment("14/14/2005", "DD/MM/YYYY") => Tue Feb 14 2006)
    if(moment(date_str, dateformat).isValid() == false) {
        throw new Error("Invalid date");
    }
 
    // parse date string using given dateformat and create a javascript date object
    var date = moment(date_str, dateformat).toDate();
 
    // use javascript getUTC* functions to conv ert to UTC
    return  date.getUTCFullYear() +
        PadDigits(date.getUTCMonth() + 1, 2) +
        PadDigits(date.getUTCDate(), 2) +
        PadDigits(date.getUTCHours(), 2) +
        PadDigits(date.getUTCMinutes(), 2) +
        PadDigits(date.getUTCSeconds(), 2);
 
}	


$(function() {
 
 institutionsgridView =  $("#learning_institutions_grid").bs_grid({
 
        ajaxFetchDataURL: "/back/Front_learning_institutions.php",
        row_primary_key: "id",
 
        columns: [
            {field: "id", header: "Code", visible: "no"},
            {field: "institution_name", header: "Institution Name"},
            {field: "town", header: "Town"},
            {field: "latitude", header: "Latitude", visible: "no", "sortable": "no"},
            {field: "longitude", header: "Longitude", visible: "no", "sortable": "no"},
            {field: "address", header: "Address"},
            {field: "telephone", header: "Telephone"},
            {field: "email", header: "Email"},
            {field: "principal", header: "Principal"},
            {field: "founded_date", header: "Founded Date"},
            {field: "total_population", header: "Total Population"}
        ],
 
        sorting: [
            {sortingName: "Code", field: "id", order: "none"},
            {sortingName: "Institution Name", field: "institution_name", order: "ascending"},
            {sortingName: "Town", field: "town", order: "ascending"},
            {sortingName: "Founded Date", field: "founded_date", order: "none"}
        ],
 
        filterOptions: {
            filters: [
                {
                    filterName: "InstitutionName", "filterType": "text", field: "institution_name", filterLabel: "Institution Name",
                    excluded_operators: ["in", "not_in"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {"type": "text"}
                        }
                    ]
                },
                {
                    filterName: "Gender", "filterType": "number", "numberType": "integer", field: "latitude", filterLabel: "Latitude",
                    excluded_operators: ["equal", "not_equal", "less", "less_or_equal", "greater", "greater_or_equal"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {type: "checkbox"}
                        }
                    ],
                    lookup_values: [
                        {lk_option: "Active", lk_value: "1"},
                        {lk_option: "Not Active", lk_value: "2", lk_selected: "yes"}
                    ]
                },
                {
                    filterName: "FoundedDate", "filterType": "date", field: "founded_date", filterLabel: "Founded Date",
                    excluded_operators: ["in", "not_in"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {
                                type: "text",
                                title: "Set the date and time using format: dd/mm/yyyy hh:mm:ss"
                            },
                            filter_widget: "datetimepicker",
                            filter_widget_properties: {
                                dateFormat: "dd/mm/yy",
                                timeFormat: "HH:mm:ss",
                                changeMonth: true,
                                changeYear: true,
                                showSecond: true
                            }
                        }
                    ],
                    validate_dateformat: ["DD/MM/YYYY HH:mm:ss"],
                    filter_value_conversion: {
                        function_name: "local_datetime_to_UTC_timestamp",
                        args: [
                            {"filter_value": "yes"},
                            {"value": "DD/MM/YYYY HH:mm:ss"}
                        ]
                    }
                }
            ]
        },
		
		             onRowClick: function(event, data) { 
                        if(data.row_status == 'selected')
                        {
							selInst = data.row_id; 
							                       
                        }
                    }
		
		
		
		
    });
 
});


function loadStudents(instId){
	
	 studentsgridView =  $("#students_grid").bs_grid({
 
        ajaxFetchDataURL: "/back/Front_students.php?id="+instId,
        row_primary_key: "id",
 
        columns: [
            {field: "id", header: "Stud Reg", visible: "yes"},
            {field: "fname", header: "First Name"},
            {field: "mname", header: "Second Name"},
            {field: "lname", header: "Last Name", visible: "yes", "sortable": "no"},
            {field: "address", header: "Address", visible: "yes", "sortable": "no"},
            {field: "telephone", header: "Telephone"},
            {field: "mobile", header: "Mobile"},
            {field: "email", header: "Email"},
            {field: "dor", header: "Date Of Registration"},
            {field: "nationalid", header: "National Id"},
            {field: "town", header: "Town"}
        ],
 
        sorting: [
            {sortingName: "First Name", field: "fname", order: "ascending"},
            {sortingName: "Second Name", field: "mname", order: "ascending"},
            {sortingName: "Last Name", field: "lname", order: "ascending"},
            {sortingName: "Date Of Registration", field: "dor", order: "none"}
        ],
 
        filterOptions: {
            filters: [
                {
                    filterName: "Fname", "filterType": "text", field: "fname", filterLabel: "First Name",
                    excluded_operators: ["in", "not_in"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {"type": "text"}
                        }
                    ]
                },
                {
                    filterName: "Gender", "filterType": "number", "numberType": "integer", field: "gender", filterLabel: "Gender",
                    excluded_operators: ["equal", "not_equal", "less", "less_or_equal", "greater", "greater_or_equal"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {type: "checkbox"}
                        }
                    ],
                    lookup_values: [
                        {lk_option: "Active", lk_value: "1"},
                        {lk_option: "Not Active", lk_value: "2", lk_selected: "yes"}
                    ]
                },
                {
                    filterName: "DateOfRegistration", "filterType": "date", field: "dor", filterLabel: "Date Of Registration",
                    excluded_operators: ["in", "not_in"],
                    filter_interface: [
                        {
                            filter_element: "input",
                            filter_element_attributes: {
                                type: "text",
                                title: "Set the date and time using format: dd/mm/yyyy hh:mm:ss"
                            },
                            filter_widget: "datetimepicker",
                            filter_widget_properties: {
                                dateFormat: "dd/mm/yy",
                                timeFormat: "HH:mm:ss",
                                changeMonth: true,
                                changeYear: true,
                                showSecond: true
                            }
                        }
                    ],
                    validate_dateformat: ["DD/MM/YYYY HH:mm:ss"],
                    filter_value_conversion: {
                        function_name: "local_datetime_to_UTC_timestamp",
                        args: [
                            {"filter_value": "yes"},
                            {"value": "DD/MM/YYYY HH:mm:ss"}
                        ]
                    }
                }
            ]
        },
		
		             onRowClick: function(event, data) { 
                        if(data.row_status == 'selected')
                        {
							//selInst = data.row_id; 
							                       
                        }
                    }
		
		
		
		
    });
	
	
}


