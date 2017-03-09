<title>EMS :: Subjects</title>                     
<div class="grid_3 grid_5">
    <h3>Subjects</h3>
                <script>
                   $('#Examinations').css('background-color',activeMenu);
                   $('#11').css('background-color',activeMenu);  
               </script>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
           <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

                    <!--begin first tab-->   

                    <div class="graphs">		
                        <div class="xs">

                            <div class="grid_20">  
                                <div class="col-md-12 email-list1">
                                        
                                                    <?php 


                                                      $queryU = $this->db->query('SELECT eui.institution,eui.type,eu.is_admin ,eui.type FROM ems_userinstitution eui,ems_users eu
                                                      WHERE
                                                      eui.userId = eu.id
                                                      AND md5(eu.id) =  "'.$_GET['id'].'"  ');
                                                      $resultU =  $queryU->result();                                  
                                                      if($resultU[0]->is_admin){
                                                      //$queryAdmin = $this->db->query('SELECT group_concat(eui.type) as types FROM ems_userinstitution eui WHERE md5(eui.userId) =  "'.$_GET['id'].'"');
                                                      //$resultAdmin =  $queryAdmin->result(); 
                                                       //$qry = "SELECT id,institution_name FROM ems_institution WHERE type IN (".$resultAdmin[0]->types.")";
                                                         $query = $this->db->query('SELECT itemvalue,itemname FROM ems_lookup WHERE itemtype = 6');
                                                      }else{
                                                        $qry = "SELECT itemvalue,itemname FROM ems_lookup WHERE itemvalue = '".$resultU[0]->type."' AND itemtype = 6";
                                                        $query = $this->db->query($qry); 
                                                      } 
                                                      //$query = $this->db->query($qry); 


                                                         // $query = $this->db->query('SELECT itemvalue,itemname FROM ems_lookup WHERE itemtype = 6'); 



                                                    ?>
                                                                <div class="form-groups">
									<label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Select Institution</label>
									<div class="col-sm-8">
                                                                         <select onchange="selectChanged(this,tableSubjects,editorSubjects)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60%;">
										<?php
                                                                                    foreach ($query->result() as $row)
                                                                                        {
                                                                                        print('<option value = '.$row->itemvalue.'>'.$row->itemname.'</option>');                                                                                                                                                              
                                                                                        } 
                                                                                ?>                     
									</select></div>
								</div> 
                                        
                                   <div class="grid_3 grid_5">	
                                        <div class="but_list">
                                            <div class="well">
                                                
                                                	<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="district" aria-labelledby="classes-tab">
								
                                                                <section>
                                                                     <table id="Subjects" class="display" cellspacing="0" width="100%">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th></th>
                                                                                 <th>Subject/Unit Name</th>
                                                                                 <th>Additional Description</th> 
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
                                <div class="clearfix"> </div>
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
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" class="init"></script> 
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/subjects.js"); ?>"></script>
                    </div>
                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>