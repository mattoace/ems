var institutionDropdown = $('#selector1');
    is_admin = null;
    instId = null;  

loadClassesUrl = "/back/Classes.php?id="+institutionDropdown.val();

function loadInstitutions(institutionType,myTable,myEditor,inst_name){

 reloadSelector(institutionType,myTable,myEditor);  
    $('#inst_name').html(inst_name+'<span class="caret"></span>');
  $('#inst_id').val(institutionType);
}

function selectChanged(institutionType,myTable,myEditor){
    
    institutionDropdown = $('#selector1'); 
    
    loadClassesUrl = "/back/Classes.php?id="+institutionDropdown.val();
    
    myTable.ajax.url(loadClassesUrl).load(); 
  
    myEditor.on( 'open', function ( e, json, data ){         
        myEditor.set('institution_id',institutionDropdown.val());
     }); 
  
    myEditor.on( 'submitComplete', function ( e, json, data ) {
      myTable.ajax.url(loadClassesUrl).load();
    } );

  }



  function loadTree(){

   $('#treeViewSubCats').jstree("destroy");
   $('#treeViewSubCats').jstree({
        'plugins': ["checkbox"],
        'check_callback' : true,   
        'core': {
            'data': {
                "url": "/back/ClassesTree.php?id="+institutionDropdown.val()+"&instId="+instId+"&is_admin="+is_admin,           
                "dataType": "json"
            }
        }
    });
}


function reloadSelector(institutionType,myTable,myEditor){    
     var institutionDropdown = $('#selector1');     
     institutionDropdown.empty(); 
    $.get("/back/InstitutionDropDown.php?id="+institutionType+"&is_admin="+is_admin+"&inst="+instId,function(data){  
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }
       selectChanged(institutionType,myTable,myEditor);
     },"json");
}

var editorClasses; 

$(document).ready(function() {

   postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'8',
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

    $('#inst_name').html(data.category+'<span class="caret"></span>');
    $('#inst_id').val(data.institution);
    is_admin = data.is_admin;
    instId = data.institution;

    
	editorClasses = new $.fn.dataTable.Editor( {	
                ajax: loadClassesUrl,
		table: "#Classes",
		fields: [{
				label: "Class Name:",
				name: "ems_lookup.itemname"
			}/*,
                        {
				label: "Additional Description:",
				name: "description"
			},
                        {
				label: "Institution Id:",
				name: "institution_id",
                                type: "hidden"
			}*/
		]
	});

	// Activate an inline edit on click of a table cell
	$('#Classes').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorClasses.inline( this );
	} );

	tableClasses = $('#Classes').DataTable( {
		dom: "Bfrtip",
		ajax: loadClassesUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			//{ data: "ems_lookup.id" },
			{ data: "ems_lookup.itemname" }//,
                       // { data: "description" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			//{ extend: "create", editor: editorClasses },
			//{ extend: "edit",   editor: editorClasses },
			//{ extend: "remove", editor: editorClasses },
                        {
                            //extend: "selectedSingle",
                            text: "Save",
                            action: function ( e, dt, node, config ) {
                               saveTree(this);
                            }
                        },
                        {
                            extend: "selectedSingle",
                            text: "Enter a Stream(s) For Selected Class/Form",
                            action: function ( e, dt, node, config ) {
                               createStreamPopUp(this);
                            }
                        },
		  ]
	   });
        
        editorClasses.on( 'open', function ( e, json, data ) {
             var institutionDropdown = $('#selector1'); 
             editorClasses.set('institution_id',institutionDropdown.val());
          });
          
        tableClasses.on( 'click', 'tr', function (id) {
                var selRow = tableClasses.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
         
         
         
    loadStreamsUrl = "/back/Streams.php?id=1";
   
    editorStreams = new $.fn.dataTable.Editor( {	
                ajax: loadStreamsUrl,
		table: "#Streams",
		fields: [{
				label: "Stream Name:",
				name: "stream_name"
			},
                        {
				label: "Additional Description:",
				name: "description"
			},
                        {
				label: "Class Id:",
				name: "class_id",
                                type: "hidden"
			}
		]
	});

	// Activate an inline edit on click of a table cell
	$('#Streams').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorStreams.inline( this );
	} );

	tableStreams = $('#Streams').DataTable( {
		dom: "Bfrtip",
		ajax: loadStreamsUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			//{ data: "id" },
			{ data: "stream_name" },
                        { data: "description" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorStreams },
			{ extend: "edit",   editor: editorStreams },
			{ extend: "remove", editor: editorStreams }
		]
	});
   




     },"json"); 

     loadTree();   
        
});

  $( "#dialog" ).dialog({
      width: 700,
      height: 500,
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

function createStreamPopUp(obj){
    
    var selRow = tableClasses.row('.selected').data();
    
    var arrSpl = selRow['DT_RowId'].split('_'); 
    
    loadStreamsUrl = "/back/Streams.php?id="+arrSpl[1];
    
    tableStreams.ajax.url(loadStreamsUrl).load();
    
    editorStreams.on( 'open', function ( e, json, data ) {
        editorStreams.set('class_id',arrSpl[1]);
      });
      
    editorStreams.on( 'submitComplete', function ( e, json, data ) {
      tableStreams.ajax.url(loadStreamsUrl).load();
    });
    
    $( "#dialog" ).dialog( "open" );    
    
}

function saveTree(obj){

       checkedObjects =  $('#treeViewSubCats').jstree("get_checked",true);

       var arr = new Array();

       for (i = 0; i < checkedObjects.length; i++) {
          arr.push(checkedObjects[i].id);       
        }

       var postVars = {   
        "checked" :arr,
        "case":1,
        "id":institutionDropdown.val() 
       } 

       $.post("/back/ClassesTree.php",postVars,function(data){ 

            loadClassesUrl = "/back/Classes.php?id="+institutionDropdown.val();
    
            tableClasses.ajax.url(loadClassesUrl).load(); 

            alert("Successfully saved!");
       },"json");

}

