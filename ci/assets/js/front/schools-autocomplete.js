$(function(){

  function setCookie(c_name, value, exdays)
  {
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
      document.cookie = c_name + "=" + c_value;
  }


  function openInNewTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
  }

   var myelement = []; 
       
        $.ajax({
            async: false,  
            url: "/back/Load_Schools.php",
            type: 'POST',
            success: function(data) {                     
                myelement[0] = data;                   
            }
        });
        
  var ctext = eval(myelement[0]);   

  $('#autocomplete').autocomplete({
    lookup: ctext,
    onSelect: function (suggestion) { 
      setCookie("schoolid",suggestion.data,1); 
      openInNewTab("school");
    }
  });

  var myelement2 = []; 
       
        $.ajax({
            async: false,  
            url: "/back/Load_County.php",
            type: 'POST',
            success: function(data) {                     
                myelement2[0] = data;                   
            }
        });
        
  var ctext2 = eval(myelement2[0]); 
    $('#county').autocomplete({
    lookup: ctext2,
    onSelect: function (suggestion) {      
      loadSchoolsInSelect(suggestion.data);
    }
  });


      loadUrl = "/back/Load_SchoolsFilteredGrid.php?id=0"; 

        //initialize the table
      table = $('#myView').DataTable({ 
                "paging":   false,
                "ordering": false,
                "info":     false,         
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
         
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": loadUrl,  //"url": "<?php echo site_url('patientController/ajax_list')?>",
                    "type": "POST"
                },
                    select: {
              style:    'os',
              selector: 'td:first-child'
            },
         
                //Set column definition initialisation properties.
              "columnDefs": [
                { 
                    "targets": [ 0 ], 
                    "orderable": false, 
                },
                {
                        "targets": [ 0 ],
                        "visible": false
                 },
                                 {
                        "targets": [ 2 ],
                        "visible": false
                 },
                                 {
                        "targets": [ 4 ],
                        "visible": true
                 },
                                 {
                        "targets": [ 5 ],
                        "visible": false
                 },
                                 {
                        "targets": [ 6 ],
                        "visible": false
                 }
                ]
         
            });

    table.on( 'click', 'tr', function (id) { 
             table.$('tr.selected').removeClass('selected'); 
             $(this).addClass('selected');                   
                 var selRow = table.row('.selected').data();             
                 selectedRow = selRow[0];
                 setCookie("schoolid",selectedRow,1);
                 openInNewTab("school");
                   
    });   


   function loadSchoolsInSelect(school){

       var myelement3 = []; 
       
        $.ajax({
            async: false,  
            url: "/back/Load_SubcountyFiltered.php?id="+school,
            type: 'POST',
            success: function(data) {                     
                myelement3[0] = data;                   
            }
        });
        
       var ctext3 = eval(myelement3[0]); 


       var ctext3 = eval(myelement3[0]); 
          $('#school').autocomplete({
          lookup: ctext3,
          onSelect: function (suggestion) { 
            // setCookie("schoolid",suggestion.data,1);     
            // openInNewTab("school");
              loadUrl = "/back/Load_SchoolsFilteredGridSubCounty.php?county="+school+"&id="+suggestion.data;
              table.ajax.url(loadUrl).load(); 
          }
        });      

      loadUrl = "/back/Load_SchoolsFilteredGrid.php?id="+school;
      table.ajax.url(loadUrl).load();  

   } 
  

});

/*$(document).ready(function() { 

$( "#dialog" ).dialog({
      width: $(window).width()/1.3,
      height: $(window).height()/1.2,
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
$("#myContent2").attr("src","school");


$( "#dialog2" ).dialog({
      width: $(window).width()/1.3,
      height: $(window).height()/1.2,
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

 $("#myContent").attr("src","school");
});*/

