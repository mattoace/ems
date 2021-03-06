<title>EMS :: Institution Facilities</title> 
<style>
   .alert.alert-success {
    line-height: 0.7;
}

.well {
    margin-bottom: 0px;
}
</style>
<div class="grid_3 grid_5">
    <h3>Institution Facilities</h3>
                <script>
                   $('#Education').css('background-color',activeMenu);
                   $('#21').css('background-color',activeMenu);  
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
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',tableMainFacilities,editorMainCategories,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
               <!-- <li><a href="#" onClick ="loadInstitutions(1, tableMainFacilities,editorMainCategories,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,tableMainFacilities,editorMainCategories,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,tableMainFacilities,editorMainCategories,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,tableMainFacilities,editorMainCategories,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,tableMainFacilities,editorMainCategories,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,tableMainFacilities,editorMainCategories,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
               -->

               </ul>
         </li> 
       </ul>
         
         <div class="grid_3 grid_5">
               <div class="but_list">
                    <div class="well">
                     <?php 
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
                      <label for="selector1" class="col-sm-2 control-label" style="margin-left: 2%; margin-top: 0.9%;">Select Institution</label>

                       <select onchange="selectChanged(this)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60%;">
                              <?php
                                  foreach ($query->result() as $row)
                                      {
                                      print('<option value = '.$row->id.'>'.$row->institution_name.'</option>');                                                                                                                                                              
                                      } 
                              ?>                     
                      </select>
                
                    </div>
                 </div>
         
         </div>
         
         
           <div id="myTabContent" class="tab-content">
               
               <ul id="myTab" class="nav nav-tabs" role="tablist">
                 <li role="presentation" class="active"><a href="#subjectgrades" id="home-tab" role="tab" data-toggle="tab" aria-controls="subjectgrades" aria-expanded="true">Main Categories</a></li>
                 <li role="presentation" class="inactive"><a href="#meangrade" id="mean-grade" role="tab" data-toggle="tab" aria-controls="meangrade" aria-expanded="true">Sub Categories</a></li>
               </ul>
               
                <div role="tabpanel" class="tab-pane fade in active" id="subjectgrades" aria-labelledby="home-tab">
                      <div class="alert alert-success" role="alert">

                                                                <section>
                                                                     <table id="MainCategories" class="display" cellspacing="0" width="100%">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th></th>
                                                                                 <th>Facility Name</th>
                                                                                 <th>Description</th>
                                                                                 <th>Location</th>                                                                   
                                                                             </tr>
                                                                         </thead>
                                                                     </table>
                                                                 </section>
                       </div>                    
                </div> 
               
                  <div role="tabpanel" class="tab-pane fade" id="meangrade" aria-labelledby="mean-grade">
                    <div class="alert alert-success" role="alerter">   
                          <div >
                                  <div class="alert alert-warning " role="alert">
                                      <div id="treeViewSubCats" class="demo"></div>
                                 </div>
                          </div>
                    </div>
                  </div> 

<style>
.has-feedback label ~ .form-control-feedback {
    top: 0 !important;
}

.form-control1, .form-control_2.input-sm {
    padding: 0px 5px;
}
</style>

              <div id='dialogcontent' style='display:none'>       
           
              <div class='form-group has-warning has-feedback'>
              <label class='control-label' for='facility_name'>Facility Name</label>
              <input type='text' class='form-control1' id='facility_name' style='width:50%;height: 23px;' aria-describedby='inputWarning2Status'>
              <span class='glyphicon glyphicon-warning-sign form-control-feedback' aria-hidden='true' ></span>
              <span id='inputWarning2Status' class='sr-only'>(warning)</span>
              </div>
              <div class='form-group has-warning has-feedback'>
              <label class='control-label' for='description' style='padding-right:10px;'>Description</label>
              <input type='text' class='form-control1' id='description' style='width:50%;height: 23px;' aria-describedby='inputWarning2Status'>           
              </div>
              <div class='popModal_footer'>
              <div style='display:none;' id='treeId'></div>
              <button type='button' onClick="addItem()" data-popModalBut='ok'>ok</button>         
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

                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jQuery-Multi-Purpose-Popup-Modal-Plugin-popModal/popModal.min.css");?>">
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/jQuery-Multi-Purpose-Popup-Modal-Plugin-popModal/popModal.min.js"); ?>"></script>


                        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/themes/default/style.min.css");?>">
                        <script type="text/javascript" src="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/jstree.min.js");?>"></script>                         
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/facilities.js"); ?>"></script>

            </div>
        </div>
    </div>
</div>