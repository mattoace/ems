<title>EMS :: Student ~ Stream</title>

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
<h3>Match Students ~ Streams</h3>
               <script>
                   $('#Student').css('background-color',activeMenu);
                   $('#16').css('background-color',activeMenu);  
               </script>
<div class="but_list">
  <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
       <ul id="myTab" class="nav nav-tabs" role="tablist">
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
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',null,null,null,null,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
             <!--   <li><a href="#" onClick ="loadInstitutions(1,null,null,null,null,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,null,null,null,null,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,null,null,null,null,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,null,null,null,null,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,null,null,null,null,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,null,null,null,null,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
              -->

               </ul>
         </li>
            
       </ul>
<div id="myTabContent" class="tab-content">
 <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
    
  <!--begin first tab-->   

     <div class="graphs">		
        <div class="xs">
        <!--  <div class="col-md-12 email-list1"> -->                                    
           <div class="grid_3 grid_5">
             <div class="but_list">
                     <div class="well" style="padding: 22px 30px 50px;">
                         <?php 

                        // $query = $this->db->query('SELECT id,institution_name FROM ems_institution WHERE type = 1'); 

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

                         <div class="form-group">         
                             <label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.9%;">Select Institution</label>

                             <select onLoad="alert('test')" onchange="selectChanged(this)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60%;">
                                 <?php
                                 foreach ($query->result() as $row) {
                                     print('<option value = ' . $row->id . '>' . $row->institution_name . '</option>');
                                 }
                                 ?>                     
                             </select>
                         </div>

                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector2" class="col-sm-2 control-label" style="margin-left: 1.3%; margin-top: 1.8%; width:35.5%;">Choose Class</label>
                                 <select onchange="chooseStream()" name="selector2" id="selector2" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select a Class / Form</option>
                                 </select>                     
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector3"  class="col-sm-2 control-label" style="margin-left: -20%; margin-top: 1.8%; width:28%;">Choose Stream</label>
                                 <select name="selector3" onchange="getStudentStreams()" id="selector3" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select a Stream </option>
                                 </select>                     
                             </div>
                         </div>                                   
                         
                      </div>

               </div> 
             </div>      
         <!--   </div>  -->  
                                
                                           <div class="grid_20">                                               
                                               <div class="col-md-6 email-list1">                                                   
                                                   <div class="grid_3 grid_5">						
                                                       <div class="but_list">
                                                           <div class="well">
                                                               <section>
                                                                   <table id="allStudents" class="display" cellspacing="0" width="100%">
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
                                                           </div>
														   
														   </div>
														 
														   </div>
                                               </div>
                                               
                                               <div class="col-md-1" style="width:5%"> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">
                                                  <button type="button" onClick="toClass()" class="btn btn-danger left-create">>></button></div> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">
                                                  <button type="button" onClick="fromClass()" class="btn btn-danger right-remove"><<</button></div> 
                                               </div> 
                                               
                                               <div class="col-md-5">                                                                         
                                                   <div class="grid_3 grid_5">						
                                                       <div class="but_list">
                                                           <div class="well">
                                                               <section>
                                                                   <table id="streamStudents" class="display" cellspacing="0" width="100%">
                                                                       <thead>
                                                                           <tr>
                                                                               <th></th>
                                                                               <th>Surname</th>
                                                                               <th>First</th>
                                                                               <th>Second</th>                                                                                               
                                                                               <!--<th>Telephone</th>                                                                                                
                                                                               <th>Town</th> -->                                                                                          
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
               <!--<script type="text/javascript" src="<?php echo base_url("assets/js/back/students.js");?>"></script>
               <script type="text/javascript" src="<?php echo base_url("assets/js/back/student_classes.js");?>"></script>-->
               <script type="text/javascript" src="<?php echo base_url("assets/js/back/student_streams.js");?>"></script>
               
				
	 </div>
     
     
     
     
<!-- end first tab -->    
 </div>
</div>
</div>
</div>
</div>