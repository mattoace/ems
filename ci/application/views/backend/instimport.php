<title>EMS :: Import Institutions</title>                     
<div class="grid_3 grid_5">
    <h3>Excel Imports</h3>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
               <!-- <li role="presentation" class="active"><a href="#" onClick ="loadInstitutions(1, table, m_editor)" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                <li role="presentation"><a href="#" onClick ="loadInstitutions(2, table, m_editor)" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                <li role="presentation"><a href="#" onClick ="loadInstitutions(3, table, m_editor)" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                <li role="presentation" class="dropdown">
                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Others<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                        <li><a href="#" onClick ="loadInstitutions(4, table, m_editor)" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                        <li><a href="#" onClick ="loadInstitutions(5, table, m_editor)" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                        <li><a href="#" onClick ="loadInstitutions(6, table, m_editor)" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
                    </ul>
                </li>-->
               
               <script>
                   $('#Import').css('background-color',activeMenu);
                   $('#18').css('background-color',activeMenu);  
               </script>
               
         <li role="presentation" class="dropdown">
             <a href="#classes" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents"><div id="inst_id"></div><div id="inst_name">Choose an Institution Category<span class="caret"></span></div></a>
               <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li><a href="#" onClick ="loadInstitutions(1,table,m_editor,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,table,m_editor,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,table,m_editor,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,table,m_editor,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,table,m_editor,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,table,m_editor,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
               </ul>
         </li>
               
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

                    <!--begin first tab-->   

                    <div class="graphs">		
                        <div class="xs">
                                					
							 <div class="but_list">
							   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#homes" id="homes-tab" role="tab" data-toggle="tab" aria-controls="homes" aria-expanded="true">Import Institutions</a></li>
								  
					                       </ul>
							<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="homes" aria-labelledby="homes-tab">
								
                                                              
                                                             <!--<div class="col-md-12">                                                                  
                                                                <?php $query = $this->db->query('SELECT id,institution_name FROM ems_institution WHERE type = 1'); ?>
                                                                <div class="form-groups">
																	<label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Select Institution</label>
																	<div class="col-sm-8">
																	 <select onchange="selectChanged(this,table,editor)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;">
																		<?php
																			foreach ($query->result() as $row)
																				{
																				print('<option value = '.$row->id.'>'.$row->institution_name.'</option>');                                                                                                                                                              
																				} 
																		?>                     
																	</select>
																	</div>
																</div>                                                                   
                                                              </div>-->
                                                               <div class="col-md-12"> 
                                                                 
                                                                   
                                                                   
                                                                   
                                                                  <div class="grid_3 grid_5">						
																	<div class="but_list">
																		<div class="well">
																			<section>
																				<table id="myView" class="stripe" cellspacing="0" width="100%">
																					<thead>
																						<tr>
																							<th></th>
																							<th>Insitution Name</th>
																							<th>District</th>
																							<th>County</th>
																							<th>Sub county</th>
																							<th>Town</th>
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
									.ajax-upload-dragdrop{
										width:350px;
									}
                                </style>	


				<div id="dialog" title="Import Learning Institutions" style="z-index: 1;">
                <div id="fileuploader" style="width: 300px;">Upload</div>
				</div>
				
								

                        <div class="clearfix"> </div>
                        </div>
                        </div>
                        <!--jquery ui editor-->
                       <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.min.css"); ?>"> jquery.-->
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/css/select.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/css/editor.dataTables.min.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.css"); ?>">
                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/demo.css"); ?>">
                        <style type="text/css" class="init"></style>
						
						<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/uploadfile.css"); ?>">
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/js/jquery-1.12.0.min.js"); ?>"></script>
						<script type="text/javascript" language="javascript" src="<?php echo base_url("assets/js/jquery.uploadfile.min.js"); ?>"></script>
						
						
						<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.css"); ?>">
                        <link rel="stylesheet" href="<?php echo base_url("assets/jquery-ui-1.11.4/themes/smoothness/jquery-ui.css"); ?>"> 
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.js"); ?>"></script>
						
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>
                        
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" class="init"></script> 
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/importinstitution.js"); ?>"></script> 


                    </div>




                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>