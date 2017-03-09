<title>EMS :: Upload Exams</title>
<style>
   .alert.alert-success {
    line-height: 0.7;
}

.well {
    margin-bottom: 0px;
}
.form-group {
    margin-bottom: 4px;
}
.col-sm-12 {
    margin-top: 1.5%;   
}
</style>                     
<div class="grid_3 grid_5">
    <h3>Examinations Uploads</h3>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">

               
               <script>
                   $('#Import').css('background-color',activeMenu);
                   $('#20').css('background-color',activeMenu);  
               </script>
               
         <li role="presentation" class="dropdown">
             <a href="#classes" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents"><div id="inst_id"></div><div id="inst_name">Choose an Institution Category<span class="caret"></span></div></a>
               <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li><a href="#" onClick ="loadInstitutions(1,tablesMarks,editorMarks,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,tablesMarks,editorMarks,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,tablesMarks,editorMarks,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,tablesMarks,editorMarks,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,tablesMarks,editorMarks,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,tablesMarks,editorMarks,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
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
								  <li role="presentation" class="active"><a href="#homes" id="homes-tab" role="tab" data-toggle="tab" aria-controls="homes" aria-expanded="true">Upload Examination Results</a></li>
								  
					                       </ul>
							<div id="myTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="homes" aria-labelledby="homes-tab">
								
                                                              


       <div class="col-sm-12">
             
          <!--start top selection here -->   
             <div class="grid_3 grid_5">
                 <div class="but_list">
                     <div class="well">
                         <?php $query = $this->db->query('SELECT id,institution_name FROM ems_institution WHERE type = 1'); ?>

                         <div class="form-group">         
                             <label for="selector1" class="col-sm-2 control-label" style="width:18.5%;padding-left: 2.4%; margin-top: 0.9%;">Select Institution</label>

                             <select onLoad="alert('test')" onchange="selectChanged(this)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60.4%;">
                                 <?php
                                 foreach ($query->result() as $row) {
                                     print('<option value = ' . $row->id . '>' . $row->institution_name . '</option>');
                                 }
                                 ?>                     
                             </select>
                         </div>

                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector2" class="col-sm-2 control-label" style="margin-left: 0.9%; margin-top: 1.8%; width:35.5%;">Choose Class</label>
                                 <select onchange="chooseStream()" name="selector2" id="selector2" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select a Class / Form</option>
                                 </select>                     
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector3" class="col-sm-2 control-label" style="margin-left: -20%; margin-top: 1.8%; width:28%;">Choose Stream</label>
                                 <select onchange="streamChanged()" name="selector3" id="selector3" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select a Stream </option>
                                 </select>                     
                             </div>
                         </div>
                         
                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector4" class="col-sm-2 control-label" style="margin-left: 0.9%; margin-top: 1.8%; width:35.5%;">Exam Type</label>
                                 <select  onchange="loadDataTable()" name="selector4" id="selector4" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select Exam Type</option>
                                 </select>                     
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector5" class="col-sm-2 control-label" style="margin-left: -20%; margin-top: 1.8%; width:28%;">Subject</label>
                                 <select onchange="loadDataTable()" name="selector5" id="selector5" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select Subject</option>
                                 </select>                     
                             </div>
                         </div>

                         <div class="form-group">                     
                             <label for="selector6" class="col-sm-2 control-label" style="width:18.4%; padding-left: 2.4%; margin-top: 0.9%;">Term / Semester</label>
                             <select onchange="loadDataTable()" name="selector6" id="selector6" class="form-control1" style="height:26px;margin-top:0.4px;width: 24.1%;">
                                 <option>Select Term / Semester</option>
                             </select>                     
                         </div>                       
                         
                     </div>

                 </div>
             </div>
<!--  end top selection here-->
         </div>




                                                               <div class="col-md-12">                                                                    
                                                                   
                                                                  <div class="grid_3 grid_5">						
																	<div class="but_list">
																		<div class="well">															        
                                                                        <section>
                                                                                <table id="myView" class="display" cellspacing="0" width="100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th></th>
                                                                                            <th>Student Reg.</th>
                                                                                            <th>Surname</th>
                                                                                            <th>First Name</th>
                                                                                            <th>Second Name</th>
                                                                                            <th id="mks">Marks</th>
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


				<div id="dialog" title="Import Marks" style="z-index: 1;">
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
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/importmarks.js"); ?>"></script> 


                    </div>




                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>