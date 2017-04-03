<title>EMS :: Priviledges</title>                     
<div class="grid_3 grid_5">
<h3>Institution level priviledge</h3>
               <script>
                   $('#Student').css('background-color',activeMenu);
                   $('#15').css('background-color',activeMenu);  
               </script>
<div class="but_list">
  <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
       <ul id="myTab" class="nav nav-tabs" role="tablist"> 

<style>
.stripe td {
  overflow: hidden; /* this is what fixes the expansion */
  text-overflow: ellipsis; /* not supported in all browsers, but I accepted the tradeoff */
  white-space: nowrap;
}
</style>

        
    <!--      <li role="presentation" class="dropdown">
                <a href="#classes" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents"><div id="inst_id"></div><div id="inst_name">Choose an Institution Category<span class="caret"></span></div></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
            
                <?php
                  $query = $this->db->query('SELECT el.itemvalue , el.itemname 
                    FROM ems_lookup el , ems_userinstitution eui 
                    WHERE el.itemtype = 6
                    AND eui.type  = el.itemvalue
                    AND md5(eui.userId) = "'.$_GET['id'].'"
                    GROUP BY el.itemvalue              
                '); 

                  foreach ($query->result() as $row)
                   {
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',table,editor,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
        
               </ul>
         </li> -->
            
       </ul>
<div id="myTabContent" class="tab-content">
 <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
    
  <!--begin first tab-->   

     		<div class="graphs">		
			    <div class="xs">
                                            
                                           <div class="grid_20">  
                                               <div class="col-md-6 email-list1">
                                                   <?php 
                                                     $qry = "SELECT * FROM ems_users ";
                                                     $query = $this->db->query($qry); 
                                                   ?>
                                                   <div class="form-groups">
                                                       <label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Select User</label>
                                                       <div class="col-sm-8">
                                                           <select onchange="relaodUserSelected(this)"  name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;">
                                                               <?php
                                                               foreach ($query->result() as $row) {
                                                                   print('<option value = ' . $row->id . '>' . $row->username . '</option>');
                                                               }
                                                               ?>                     
                                                           </select></div>
                                                   </div>  
                                                 <!--   <div class="clearfix"></div> -->                                                   
                                                   <div class="grid_3 grid_5">						
                                                       <div class="but_list">
                                                           <div class="well">
                                                               <section>
                                                                  <table id="myView" class="stripe" cellspacing="0" width="100%">
				                                                        <thead>
				                                                            <tr>
				                                                                <th></th>
				                                                                <th>Insitution Name</th>				                                                               
				                                                                <th>County</th>
				                                                                <th>Sub-C</th>
				                                                                <th>Zone</th>
				                                                                <th width="18%">Address</th>
				                                                                <th>Founded</th>
				                                                            </tr>
				                                                        </thead>
				                                                    </table>
                                                               </section>
                                                           </div>
														   
														   </div>
														 
														   </div>
                                               </div>
                                               
                                               <div class="col-md-1" style="width:5%"> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">                                                  
                                              </div> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">                                                  
                                                  <button type="button" onClick="toRoles()" class="btn btn-danger  left-create">>></button>
                                              </div> 
                                               </div> 
                                               
                                               <div class="col-md-5">                                                   
                            
                                                                                          
                                                   <div class="grid_3 grid_5">						
                                                       <div class="but_list">
                                                           <div class="well">
                                                                  <section>
                                                                  <table id="myView2" class="stripe" cellspacing="0" width="100%">
				                                                        <thead>
				                                                            <tr>				                                                            
				                                                                <th>Insitution Name</th>			                                                               
				                                                                
				                                                            </tr>
				                                                        </thead>
				                                                    </table>
                                                               </section>
                                                           </div></div></div>                    
                                                   
                                                   
                                                   
                                                </div>                                               
					<div class="clearfix"> </div>
                                        </div>
                                  </div>                    
                    
              <!--jquery ui editor-->
              <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.min.css");?>">jquery.-->
               <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.min.css");?>">
               <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/css/select.dataTables.min.css");?>">
               <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/css/editor.dataTables.min.css");?>">
               <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.css");?>">
               <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/demo.css");?>">
               <style type="text/css" class="init"></style>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/js/jquery-1.12.0.min.js");?>"></script>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js");?>"></script>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js");?>"></script>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js");?>"></script>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js");?>"></script>
               <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js");?>"></script>
               <script type="text/javascript" language="javascript" class="init"></script> 
               <script src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.js");?>"></script>              
               <script src="<?php echo base_url("assets/jquerypic/src/jquery.picture.cut.js");?>"></script>                                                 
               <script type="text/javascript" src="<?php echo base_url("assets/js/back/institutionroles.js");?>"></script>     					
				
	 </div>
     
     
     
     
<!-- end first tab -->    
 </div>
</div>
</div>
</div>
</div>