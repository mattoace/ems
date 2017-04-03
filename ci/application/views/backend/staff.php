<title>EMS :: Staff</title>                     
<div class="grid_3 grid_5">
<h3>Staff</h3>
               <script>
                   $('#Teachers').css('background-color',activeMenu);
                   $('#9').css('background-color',activeMenu);  
               </script>
<div class="but_list">
  <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
       <ul id="myTab" class="nav nav-tabs" role="tablist">



<!--         <div id="dialog_contentUsername" class="dialog_contentUsername" style="display:none;">
        <div class="dialogModal_header">Set Username / Password</div>
        <div class="dialogModal_content" id="dialogModal_content">
       <div class="but_list">
                         <div class="form-group">
                            <label for="focusedinput" class="col-sm-8 control-label">Username</label>
                            <div class="col-sm-12">
                              <input type="text" id="text1" >
                            </div>
                          </div> 
                                                         
                          <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-12"><input type="text" class="form-control1" id="text2" placeholder="Password"></div>
                          </div> 

                         <div class="form-group"> 
                         <div class="clearfix"> </div><hr>                         
                            <div class="col-sm-4"><input type="button" value="Save" onClick="submitUsernamePassword(this)"  class="form-control1" id="submitpass">
                          </div>            
                      </div>

            </div>
            </div> 
<div class="clearfix"> </div>
             <div class="dialogModal_footer">
     
    </div>  
        </div> -->

       
      </ul>
         </li>
            
       </ul>
<div id="myTabContent" class="tab-content">
 <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
    
  <!--begin first tab-->   

     		<div class="graphs">		
			    <div class="xs">
                                            
                                           <div class="grid_20">  
						<div class="col-md-8 email-list1">
                                                    
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
									<!-- <label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Select Institution</label> -->
									<div class="col-sm-8">
                                         <!--                                <select onchange="selectChanged(this,table,editor)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;">
										<?php
                                                                                    foreach ($query->result() as $row)
                                                                                        {
                                                                                        print('<option value = '.$row->id.'>'.$row->institution_name.'</option>');                                                                                                                                                              
                                                                                        } 
                                                                                ?>                     
									</select>-->
									</div>
								</div>                                                     
                                       <div class="grid_3 grid_5">						
                                        <div class="but_list">
                                            <div class="well">
                                                               <section>
                                                                        <table id="myView" class="display" cellspacing="0" width="100%">
                                                                                <thead>
                                                                                        <tr>
                                                                                                <th></th>
                                                                                                <th>Surname</th>
                                                                                                <th>First</th>
                                                                                                <th>Second</th>                                                                                               
                                                                                                <th>Telephone</th>                                                                                                
                                                                                                <th width="18%">Town</th>                                                                                           
                                                                                        </tr>
                                                                                </thead>
                                                                        </table>
                                                                </section>
                                            </div></div></div>
                                                 </div>
                                               
                                               <div class="col-md-4">
                                                   
                                               <div class="clearfix" style="margin-top:15%"> </div>
                                                   
                                               <!--form here -->
                                               
                                               	                <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">Photo</label>
								        <div id="container_image"></div>    
								</div> 
                                               
                                      			       <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">Full Names</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div> 
                                               
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-12"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div>
                                               
                                                               <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telephone</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                               <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Mobile</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div> 
                                               
                                                                 <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                                 <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">Date of Reg</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">Date of Completion</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div> 
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">National Id</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                               <div class="form-group">
									<label for="focusedinput" class="col-sm-8 control-label">Date of Birth</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Town</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Country</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div> 
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Border</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div> 
                                               
                                                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Discontinued</label>
									<div class="col-sm-12">
										<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
									</div>
								</div>
                                               		
                                                   
                                               <!--end form here -->
                                                </div>
                                               
						 <div class="clearfix"> </div>
                                        </div>
                                  </div>
                                                 <!--jquery ui editor-->
                                              <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.min.css");?>"> jquery.-->
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

                <!--    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jQuery-Multi-Purpose-Popup-Modal-Plugin-popModal/popModal.min.css");?>">
      <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/jQuery-Multi-Purpose-Popup-Modal-Plugin-popModal/popModal.min.js"); ?>"></script>-->
        <script src='<?php echo base_url("assets/jquery-popup-overlay-gh-pages/jquery.popupoverlay.js");?>'></script>


                                                <script type="text/javascript" src="<?php echo base_url("assets/js/back/personstaff.js");?>"></script> 
                                                
         
						
				
				</div>
     
     
     
     
<!-- end first tab -->    
 </div>
</div>
</div>
</div>
</div>


 <div id="usernamepopup" class="well" style="visibility:hidden;">

 <div class="but_list">
    <div class="dialogModal_header"><h4>Set Username / Password</h4></div><div class="clearfix"> </div>
                         <div class="form-group">
                            <label for="focusedinput" class="col-sm-8 control-label">Username</label>
                            <div class="col-sm-12">
                              <input type="hidden" class="form-control1" id="text4" placeholder="Id">
                              <input type="hidden" class="form-control1" id="text3" placeholder="Id">
                              <input type="text" class="form-control1"  id="text1"  placeholder="User Name" >
                            </div>
                          </div> 
                                                         
                          <div class="form-group">
                            <label for="txtarea1" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-12"><input type="password" class="form-control1" id="text2" placeholder="Password"></div>
                          </div> 

                         <div class="form-group"> 
                         <div class="clearfix"> </div><hr>                         
                            <div class="col-sm-4"><input type="button" value="Save" onClick="submitUsernamePassword(this)"  class="form-control1" id="submitpass">
                          </div>            
                      </div>

            </div>

 </div>