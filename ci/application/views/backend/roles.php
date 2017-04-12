<title>EMS :: Roles</title>				
<div id="page-wrapper">
    <div class="graphs">
            <h3 class="blank1" style="
    background-color: #8bc34a !important;
    color: white !important;
    font-size: 16px !important;
    margin-bottom: 4px !important;
            ">System Users Roles</h3>
                <script>
                   $('#Settings').css('background-color',activeMenu);
                   $('#4').css('background-color',activeMenu);  
               </script>
        	    <div class="xs"> 
                            <div class="col-md-6 email-list1">                                                    
                                <?php
                                   //$query = $this->db->query('SELECT id,username FROM ems_users'); 
                                    $queryU = $this->db->query('SELECT eui.institution,eui.type,eu.is_admin FROM ems_userinstitution eui,ems_users eu
                                    WHERE
                                    eui.userId = eu.id
                                    AND md5(eu.id) =  "'.$_GET['id'].'"  ');
                                    $resultU =  $queryU->result();                                  
                                    if($resultU[0]->is_admin){
                                      $query = $this->db->query('SELECT id,username FROM ems_users'); 
                                    }else{
                                      $qry = "SELECT eu.id,eu.username FROM ems_users eu , ems_userinstitution eui WHERE eui.userId = eu.id AND eui.institution = '".$resultU[0]->institution."' "; 
                                     $query = $this->db->query($qry);
                                    }                                    
                                    ?>
                                            <div class="form-group" style = "margin-bottom:8%;">
                                                    <label for="selector1" class="col-sm-1 control-label">Users</label>
                                                    <div class="col-sm-4">
                                                     <select onchange="selectChanged()" name="selector1" id="selector1" class="form-control1">
                                                            <?php
                                                                foreach ($query->result() as $row)
                                                                    {
                                                                    print('<option value = '.$row->id.'>'.$row->username.'</option>');                                                                                                                                                              
                                                                    } 
                                                            ?>                     
                                                    </select></div>
                                            </div>  
                                        <div class="grid_3 grid_5">
                                          <button type="button" class="btn btn-sm btn-danger" onClick="saveRoles()">Save Roles</button>                                      
                                                <div class="alert alert-warning " role="alert">                                                
                                                    <div id="treeView" class="demo"></div>
                                               </div>
                                        </div>
                                           
                             </div>
                        
                           <div class="col-md-6 email-list1" style="margin-top:4%;"> 
                                <div class="grid_3 grid_5">
                                                   <section>
                                                           <table id="myView" class="display" cellspacing="0" width="100%">
                                                                   <thead>
                                                                           <tr>
                                                                                   <th></th>
                                                                                   <th>Username</th>                                                                      
                                                                                   <th>Add</th>
                                                                                   <th>Edit</th>                                                                                               
                                                                                   <th>Delete</th>                                                                  
                                                                           </tr>
                                                                   </thead>
                                                           </table>
                                                   </section>
                                    </div>
                                </div>
    </div>
    </div>

   <!--jquery ui editor-->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.min.css");?>"> jquery.-->
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
   <script src="<?php echo base_url("assets/jquery.fileTree-1.01/jquery.easing.js");?>"></script>   
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/themes/default/style.min.css");?>">
   <script type="text/javascript" src="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/jstree.min.js");?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/js/back/roles.js");?>"></script> 