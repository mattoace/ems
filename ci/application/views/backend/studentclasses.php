<title>EMS :: Assign Classes</title>                     
<div class="grid_3 grid_5">
<h3>Students - Classes</h3>
               <script>
                   $('#Student').css('background-color',activeMenu);
                   $('#15').css('background-color',activeMenu);  
               </script>
<div class="but_list">
  <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
       <ul id="myTab" class="nav nav-tabs" role="tablist">
        <!-- <li role="presentation" class="active"><a href="#" onClick ="loadInstitutions(1,table,editor)" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
         <li role="presentation"><a href="#" onClick ="loadInstitutions(2,table,editor)" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
         <li role="presentation"><a href="#" onClick ="loadInstitutions(3,table,editor)" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
         <li role="presentation" class="dropdown">
               <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Others<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                 <li><a href="#" onClick ="loadInstitutions(4,table,editor)" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,table,editor)" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,table,editor)" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
               </ul>
         </li>-->
        
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
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',table,editor,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
            <!--    
                <li><a href="#" onClick ="loadInstitutions(1,table,editor,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,table,editor,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,table,editor,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,table,editor,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,table,editor,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,table,editor,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
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
                                               <div class="col-md-6 email-list1">
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
                                                       <label for="selector1" class="col-sm-2 control-label" style="margin-left: 0%; margin-top: 0.5%;">Institution</label>
                                                       <div class="col-sm-8">
                                                           <select onchange="selectChanged(this,table,editor);chooseClasses();"  name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;">
                                                               <?php
                                                               foreach ($query->result() as $row) {
                                                                   print('<option value = ' . $row->id . '>' . $row->institution_name . '</option>');
                                                               }
                                                               ?>                     
                                                           </select></div>

                                                   </div>
                                                 <div class="row">
                                                    <div class="form-groups">
                                                    <label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;"><span style="font-size:0.9em;">Check All : &nbsp; </span>  <input type="checkbox" id="selectall" value="selectall"></label>
                                                        

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
                                                           </div>
														   
														   </div>
														 
														   </div>
                                               </div>
                                               
                                               <div class="col-md-1" style="width:5%"> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">
                                                  <button type="button" onClick="toClass()" class="btn btn-danger  left-create">>></button></div> 
                                                  <div class="grid_3 grid_5" style="padding: 0em;">
                                                  <button type="button" onClick="fromClass()" class="btn btn-danger right-remove"><<</button></div> 
                                               </div> 
                                               
                                               <div class="col-md-5">
                                                   
                            
                                                   
                                                 <?php $query = $this->db->query('SELECT id,class_name FROM ems_classes WHERE institution_id = 1'); ?>
                                                   <div class="form-groups">
                                                       <label for="selector12" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.5%;">Class :</label>
                                                       <div class="col-sm-8">
                                                           <select onchange="selectClassChanged(tableClass)" name="selectorClass" id="selectorClass" class="form-control1" style="height:26px;margin-top:0.4px;">
                                                               <?php
                                                               foreach ($query->result() as $row) {
                                                                   print('<option value = ' . $row->id . '>' . $row->class_name . '</option>');
                                                               }
                                                               ?>                     
                                                           </select></div>
                                                   </div>                                                     
                                                   <div class="grid_3 grid_5">						
                                                       <div class="but_list">
                                                           <div class="well">
                                                               <section>
                                                                   <table id="studentClasses" class="display" cellspacing="0" width="100%">
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
               <script type="text/javascript" src="<?php echo base_url("assets/js/back/students.js");?>"></script>
               <script type="text/javascript" src="<?php echo base_url("assets/js/back/student_classes.js");?>"></script> 						
				
	 </div>
     
     
     
     
<!-- end first tab -->    
 </div>
</div>
</div>
</div>
</div>