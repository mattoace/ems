<title>EMS :: Institutions</title>                     
<div class="grid_3 grid_5">
    <h3>Education Institution(s) Management</h3>
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
                   $('#Education').css('background-color',activeMenu);
                   $('#1').css('background-color',activeMenu);  
               </script>
               
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

      //AND eui.type = el.itemvalue
                   // AND e.id = eui.institution
                  foreach ($query->result() as $row)
                   {
                     print('<li><a href="#" onClick ="loadInstitutions('.$row->itemvalue.',table,m_editor,\''.$row->itemname.'\')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">'.$row->itemname.'</a></li>');
                   }   

                ?>
<!--

                <li><a href="#" onClick ="loadInstitutions(1,table,m_editor,'High Schools')" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">High Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(2,table,m_editor,'Primary Schools')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Primary Schools</a></li>
                 <li><a href="#" onClick ="loadInstitutions(3,table,m_editor,'Kindergatens')" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kindergatens</a></li>
                 <li><a href="#" onClick ="loadInstitutions(4,table,m_editor,'Universities')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Universities</a></li>
                 <li><a href="#" onClick ="loadInstitutions(5,table,m_editor,'Colleges')" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Colleges</a></li>
                 <li><a href="#" onClick ="loadInstitutions(6,table,m_editor,'Technical training Institutions')" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Technical training Institutions</a></li>
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

                                    <div class="grid_3 grid_5">						
                                        <div class="but_list">
                                            <div class="well">
                                                <section>
                                                    <table id="myView" class="stripe" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Insitution Name</th>
                                                               <!-- <th>District</th>-->
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
                                <div class="col-md-12 email-list1">
                                    <!--form here -->


                                    <form class="form-horizontal">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email Address</label>
                                            <div class="col-sm-8">
                                                <div class="input-group in-grp1" style = "margin:0;width:100%">							
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </span>
                                                    <input type="text" class="form-control1" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Student / pupil(s) per class</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
                                            </div>
                                            <div class="col-sm-2 jlkdfj1">
                                                <p class="help-block">Student details</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="disabledinput" class="col-sm-2 control-label">No. teachers</label>
                                            <div class="col-sm-8">
                                                <input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
                                            </div>
                                        </div>		
                                        <div class="form-group">
                                            <label for="checkbox" class="col-sm-2 control-label">Mode of learning</label>
                                            <div class="col-sm-8">
                                                <div class="checkbox-inline1"><label><input type="checkbox"> Day scholar</label></div>
                                                <div class="checkbox-inline1"><label><input type="checkbox" checked=""> Boarding</label></div>
                                                <div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Mixed Day & Boarding</label></div>									
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="checkbox" class="col-sm-2 control-label">Students Gender</label>
                                            <div class="col-sm-8">
                                                <div class="checkbox-inline"><label><input type="checkbox"> Male</label></div>
                                                <div class="checkbox-inline"><label><input type="checkbox" checked=""> Female</label></div>										
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
                                            <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                                                    <option>Test Option</option>
                                   
                                                </select></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Institution facilities</label>
                                            <div class="col-sm-8">
                                                <select multiple="" class="form-control1">
                                                    <option>Test</option>
                                                    <option>Test</option>
                                          
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtarea1" class="col-sm-2 control-label">Institution projects</label>
                                            <div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <button class="btn-success btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>



                                    <!--end form here -->
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
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/js/jquery-1.12.0.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>
                        
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js"); ?>"></script>
                        <script type="text/javascript" language="javascript" class="init"></script> 
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/institution.js"); ?>"></script> 


                    </div>




                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>