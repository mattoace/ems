institutionDropdown = $('#selector1');
is_admin = null;
instId = null;


function loadInstitutions(institutionType,myTable1,myEditor1,inst_name){
 
     institutionDropdown.empty(); 
     $.get("/back/InstitutionDropDown.php?id="+institutionType,function(data){ 
         for (var i = 0 ; i < data.data.length ; i++){        
              var o = new Option(data.data[i].institution_name,data.data[i].id );
              institutionDropdown.append(o);
         }
       selectChanged(institutionType,myTable2,myEditor2);
     },"json"); 
     
    $('#inst_name').html(inst_name+'<span class="caret"></span>');
    $('#inst_id').val(institutionType);

}


function selectChanged(obj,table1,editor1){   
    
    loadMainCategoriesUrl = "/back/Facilities.php?case=3&id="+institutionDropdown.val()+"&instId="+instId+"&is_admin="+is_admin;

    tableMainFacilities.ajax.url(loadMainCategoriesUrl).load();  
	  editorMainCategories.on( 'open', function ( e, json, data ) {
	    editorMainCategories.set('inst_id',institutionDropdown.val());
	  });


	 editorMainCategories.on( 'submitComplete', function ( e, json, data ) {
      tableMainFacilities.ajax.url(loadMainCategoriesUrl).load();
     });

    loadTree();
    //var instance = $('#treeViewSubCats').jstree(true);
    // instance.data.url='';
    //alert(instance);
}

function loadTree(){

  $('#treeViewSubCats').jstree("destroy");
   $('#treeViewSubCats').jstree({
        'plugins': ["contextmenu"],
        'check_callback' : true,
        'contextmenu': {'items': customMenu},
        'core': {
            'data': {
                "url": "/back/SubFacilities.php?id="+institutionDropdown.val()+"&instId="+instId+"&is_admin="+is_admin,       
                "dataType": "json"
            }
        }
    });
}


function addItem(){
    var parentId = $('#treeId').html();
    var facility_name = $('#facility_name').val();
    var description = $('#description').val(); 

    postVars = {
      "id": parentId,
      "case": 1,
      "facility_name":facility_name,
      "description":description,
      "inst": institutionDropdown.val() 
    } 
    $.post("/back/SubFacilities.php", postVars , function(data){ 
        if(data.bool == true){
         loadTree();
         facilitiesPopup.remove(); 
        }else{
            alert(data.response);
        }
    },"json"); 

}


function customMenu(node) {

    var items = {
        renameItem: { 
            label: "Add category",
            action: function (id) { 
             var selId =  $('#treeViewSubCats').jstree('get_selected'); 
             $('#treeId').html(selId);

    facilitiesPopup = $('#'+selId+'_anchor').popModal({
                    html : $('#dialogcontent').html(),
                    placement : 'bottomLeft',
                    showCloseBut : true,
                    onDocumentClickClose : false,
                        onOkBut : function(){ },
                        onCancelBut : function(){ },
                        onLoad : function(){ },
                        onClose : function(){ }
                    });
        



           // alert(selId);

            }
        },
        deleteItem: { 
            label: "Delete category",
            action: function (id) {
               var selId =  $('#treeViewSubCats').jstree('get_selected');
                postVars = {
                  "item": selId,
                  "case": 2,
                  "inst": institutionDropdown.val() 
                } 
                $.post("/back/SubFacilities.php?id="+ $('#treeViewSubCats').jstree('get_selected'), postVars , function(data){ 
                    if(data.bool == true){
                     loadTree();                
                    }else{
                        alert(data.response);
                    }
                },"json"); 
            }
        }
    };

    if ($(node).hasClass("folder")) {
        // Delete the "delete" menu item
        delete items.deleteItem;
    }

    return items;
}

var editorMainCategories,editorDistrict; 

$(document).ready(function() {


    postVars = {
       "action" : 5,
       "start" :'sub',
       "end" :'21',
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

   loadMainCategoriesUrl = "/back/Facilities.php?case=3&id="+institutionDropdown.val()+"&instId="+instId+"&is_admin="+is_admin;

   $('#treeViewSubCats').jstree({
        'plugins': ["contextmenu"],
        'check_callback' : true,
        'contextmenu': {'items': customMenu},
        'core': {
            'data': {
                "url": "/back/SubFacilities.php?id="+institutionDropdown.val()+"&instId="+instId+"&is_admin="+is_admin,  
                "dataType": "json"
            }
        }
    });  

    
	editorMainCategories = new $.fn.dataTable.Editor( {	
                ajax: loadMainCategoriesUrl,
		table: "#MainCategories",
		fields: [{
				  label: "Facility Name:",
				  name: "facility_name"
			     },
			     {
				  label: "Facility Description:",
				  name: "description"
			     },
			     {
				  label: "Quantity:",
				  name: "quantity"
			     },
			     {
				  label: "Facility Location:",
				  name: "location"
			     },{
				  label: "Institution:",
				  name: "inst_id"
			     }		
		       ]
	});
	
	$('#MainCategories').on( 'click', 'tbody td:not(:first-child)', function (e) {
		editorMainCategories.inline( this );
	});

	tableMainFacilities = $('#MainCategories').DataTable( {
		dom: "Bfrtip",
		ajax: loadMainCategoriesUrl,
		columns: [
			{
				data: null,
				defaultContent: '',
				className: 'select-checkbox',
				orderable: false
			},
			{ data: "facility_name" },
			{ data: "description" },
			{ data: "location" }
		],
		select: {
			style:    'os',
			selector: 'td:first-child'
		},
		buttons: [
			{ extend: "create", editor: editorMainCategories },
			{ extend: "edit",   editor: editorMainCategories },
			{ extend: "remove", editor: editorMainCategories }
		]
     	});
 
        
        editorMainCategories.on( 'open', function ( e, json, data ) {
            editorMainCategories.set('inst_id',institutionDropdown.val());
          });
          
        tableMainFacilities.on( 'click', 'tr', function (id) {
                var selRow = tableMainFacilities.row('.selected').data(); 
                var arrSpl = selRow['DT_RowId'].split('_'); 
                
         });
        
    
  },"json");  
         
});

