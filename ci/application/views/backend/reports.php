<title>EMS :: Report Generation</title> 
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
    <h3>Ems Reports</h3>
               <script>
                   $('#Ems').css('background-color',activeMenu);
                   $('#23').css('background-color',activeMenu);  
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
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',tablesMarks,editorMarks,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>             
               </ul>
         </li> 
       </ul>
         <div class="col-sm-12">
             
          <!--start top selection here -->   
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

                         <div class="form-group">         
                             <label for="selector1" class="col-sm-2 control-label" style="width:18.5%;padding-left: 2.4%; margin-top: 0.9%;">Select Institution</label>

                             <select onLoad="alert('test')" onchange="selectChanged(this,tablesMarks,editorMarks)" name="selector1" id="selector1" class="form-control1" style="height:26px;margin-top:0.4px;width: 60.4%;">
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
                                 <select name="selector4" id="selector4" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select Exam Type</option>
                                 </select>                     
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">                     
                                 <label for="selector6" class="col-sm-2 control-label" style="margin-left: -20%; margin-top: 1.8%; width:28%;">Term / Semester</label>
                                 <select onchange="subjectChanged()" name="selector5" id="selector6" class="form-control1" style="height:26px;margin-top:0.4px;width: 50%;">
                                     <option>Select Term / Semester</option>
                                 </select>                     
                             </div>
                         </div>

                         <div class="form-group">                     
                             <label for="selector7" class="col-sm-2 control-label" style="width:18.4%; padding-left: 2.4%; margin-top: 0.9%;">Exam Year</label> 
                               <?php   
                                $already_selected_value = 2016;
                                $earliest_year = 1950;
                                print '<select name="selector7" id="selector7" class="form-control1" style="height:26px;margin-top:0.4px;width: 24.1%;">';
                                foreach (range(date('Y'), $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                }
                                print '</select>'; 
                                ?>
                         </div>                     
                         
                     </div>

                 </div>
             </div>
<!--  end top selection here-->
         </div>
         
         
           <div id="myTabContent" class="tab-content">               
        
               
           <div role="tabpanel" class="tab-pane fade in active" id="subjectgrades" aria-labelledby="home-tab">
                      <div class="alert alert-success" role="alert"> 
                        <div class="row">
                          <div class="col-sm-1">
                        <button type="button" onClick="reportDialog()" class="btn btn_5 btn-sm btn-default">Generate Report</button>
                         </div>
                         <div class="col-sm-1">
                            <button type="button" onClick="reportDialogTabular()" class="btn btn_5 btn-sm btn-default">Tabular View Report</button>
                         </div>
                        <div class="col-sm-10">
                        </div>
                       </div>
                      </div> 

                                      
                </div> 

                    <style>
                    .dialogModal .dialogModal_content {
                        height: 80vh;
                        padding: 15px 5px;  
                    }

                   </style>

                      <div id="dialog_content" class="dialog_content" style="display:none;">
                            <div class="dialogModal_header">Ems : Report</div>
                            <div class="dialogModal_content" id="dialogModal_content">
                                <!--<object data="/back/uploads/User.pdf" type="application/pdf" width="100%" height="100%^">
                                    alt : <a href="back/uploads/User.pdf">back/uploads/User.pdf</a>
                                </object>-->
                            </div>
                            <div class="dialogModal_footer">
                                <button type="button" data-dialogModalBut="ok">Print</button>
                                <button type="button" data-dialogModalBut="cancel">cancel</button>
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

                          <script src='<?php echo base_url("assets/jquery-popup-overlay-gh-pages/jquery.popupoverlay.js");?>'></script>

                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/reports.js"); ?>"></script>

            </div>
        </div>
    </div>
</div>
 <div id="reportView" class="well" style="visibility:hidden;">