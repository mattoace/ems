<title>Classes</title>                     
<div class="grid_3 grid_5">
    <h3>Classes</h3>
                <script>
                   $('#Teachers').css('background-color',activeMenu);
                   $('#8').css('background-color',activeMenu);  
               </script>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
             <!--   <li role="presentation" class="active"><a href="#classes" id="home-tab" role="tab" data-toggle="tab" aria-controls="classes" aria-expanded="true">Classes</a></li>-->
           
            
         <li role="presentation" class="dropdown">
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
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',tableClasses,editorClasses,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
               <!--
                <li><a href="#" onClick ="loadInstitutions(1,tableClasses,editorClasses,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,tableClasses,editorClasses,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,tableClasses,editorClasses,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,tableClasses,editorClasses,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,tableClasses,editorClasses,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,tableClasses,editorClasses,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
               -->

               </ul>
         </li>
            
            
            </ul>
           <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

                    <!--begin first tab-->   

                    <div class="graphs">		
                        <div class="xs">

                            <div class="grid_20">  
                                <div class="col-md-12 email-list1">                                    
                                        
                                        
                                                        <?php 

                                                        //$query = $this->db->query('SELECT id,institution_name FROM ems_institution WHERE type = 1'); 
                                                              $queryU = $this->db->query('SELECT eui.institution,eui.type,eu.is_admin FROM ems_userinstitution eui,ems_users eu
                                                              WHERE
                                                              eui.userId = eu.id
                                                              AND md5(eu.id) =  "'.$_GET['id'].'"  ');
                                                              $resultU =  $queryU->result();                                  
                                                              if($resultU[0]->is_admin){
                                                              $queryAdmin = $this->db->query('SELECT group_concat(eui.type) as types FROM ems_userinstitution eui WHERE md5(eui.userId) =  "'.$_GET['id'].'"');
                                                              $resultAdmin =  $queryAdmin->result(); 
                                                               $qry = "SELECT id,institution_name FROM ems_institution WHERE type IN (".$resultAdmin[0]->types.")";
                                                              }else{
                                                               $qry = "SELECT id,institution_name FROM ems_institution WHERE type = 1 AND id =  '".$resultU[0]->institution."' "; 
                                                              } 
                                                              $query = $this->db->query($qry); 

                                                        ?>
                                                                <div class="form-groups">
									<label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Select Institution</label>
									<div class="col-sm-8">
                                                                         <select onchange="selectChanged(this,tableClasses,editorClasses)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60%;">
										<?php
                                                                                    foreach ($query->result() as $row)
                                                                                        {
                                                                                        print('<option value = '.$row->id.'>'.$row->institution_name.'</option>');                                                                                                                                                              
                                                                                        } 
                                                                                ?>                     
									</select></div>
								</div> 

                <div class="grid_3 grid_5" style="margin-top:10px;">  
                      <div class="but_list">
                            <div class="well" style="background-color:#E7E2E2"> 
                                   <span style="font-size:10px;"><b> Tick the classes available for the selected school on below tree view.</b></span>
                            </div>
                             <div class="alert alert-warning " style="margin-top:-20px;">

                                  <div id="treeViewSubCats" class="demo"></div>

                             </div> 
                      </div> 
                </div>

                                        
                                        
                                        
                                        
                                   <div class="grid_3 grid_5">	
                                        <div class="but_list">
                                            <div class="well">
                                                
                                                	<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="district" aria-labelledby="classes-tab">
								
                                                                <section>
                                                                     <table id="Classes" class="display" cellspacing="0" width="100%">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th></th>
                                                                                <!--  <th>Code</th> -->
                                                                                 <th>Class Name</th>
                                                                          <!--        <th>Additional Description</th>  -->
                                                                             </tr>
                                                                         </thead>
                                                                     </table>
                                                                 </section>
                                                              
							  </div>
					
								
							</div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                    .ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-front.ui-draggable.ui-resizable {
                                        z-index: 1;
                                        line-height: 0.7;
                                        background:#EDF3CC;
                                    }
                                </style>
                                <div class="clearfix"> </div>
                                <div id="dialog" title="Streams" style="z-index: 1;">
                                    
                                        <section>
                                             <table id="Streams" class="display" cellspacing="0" width="100%">
                                                 <thead>
                                                     <tr>
                                                         <th></th>
                                                         <th>Stream Name</th>
                                                         <th>Additional Description</th> 
                                                     </tr>
                                                 </thead>
                                             </table>
                                         </section>
                                    
                                  </div>
                            </div>
                        </div>
                        <!--jquery ui editor-->
                       <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.min.css"); ?>">jquery.-->
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/css/select.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/css/editor.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/demo.css"); ?>">
                        <style type="text/css" class="init"></style>
                        
                        
                        
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/js/jquery-1.12.0.min.js"); ?>"></script>
                        
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.css"); ?>">
                        <link rel="stylesheet" href="<?php echo base_url("assets/jquery-ui-1.11.4/themes/smoothness/jquery-ui.css"); ?>"> 
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.js"); ?>"></script>
                        
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" class="init"></script>
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/themes/default/style.min.css");?>">
                        <script type="text/javascript" src="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/jstree.min.js");?>"></script>                          
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/classes.js"); ?>"></script>
                    </div>
                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>