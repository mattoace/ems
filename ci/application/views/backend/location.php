<title>EMS :: Geographical locations</title>                     
<div class="grid_3 grid_5">
    <h3>Geographical locations</h3>
             <script>
                   $('#Geo').css('background-color',activeMenu);
                   $('#7').css('background-color',activeMenu);  
               </script>
    <div class="but_list">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
             <!--  <li role="presentation"  style="display:none;"><a href="#district" id="home-tab" role="tab" data-toggle="tab" aria-controls="district" aria-expanded="true">District</a></li>-->
                <li role="presentation" ><a href="#county" id="home-tab" role="tab" data-toggle="tab" aria-controls="county" aria-expanded="true">County</a></li>            
                <li role="presentation"><a href="#subcounty"  role="tab" id="profile-tab" data-toggle="tab" aria-controls="subcounty">Sub county</a></li>
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
                                                
                                                	<div id="myTabContent" class="tab-content">
							 <!-- <div role="tabpanel" class="tab-pane fade in active" id="district" aria-labelledby="district-tab" style="display:none;">
								
                                                                <section>
                                                                     <table id="District" class="display" cellspacing="0" width="100%">
                                                                         <thead>
                                                                             <tr>
                                                                                 <th></th>
                                                                                 <th>Id</th>
                                                                                 <th>District</th>
                                                                                 <th>County</th> 
                                                                             </tr>
                                                                         </thead>
                                                                     </table>
                                                                 </section>
                                                              
							  </div>-->
							  <div role="tabpanel" class="tab-pane fade in active" id="county" aria-labelledby="county-tab">

                                                                <section>
                                                                    <table id="County" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Code</th>
                                                                                <th>County</th>                                                                
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </section>
                                                              
                                                              
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="subcounty" aria-labelledby="subcounty-tab">
								
                                                              <section>
                                                                 <table id="SubCounty" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Sub-County Code</th>
                                                                                <th>County</th> 
                                                                                <th>Sub County</th>                                                                
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
                        <script type="text/javascript" src="<?php echo base_url("assets/js/back/location.js"); ?>"></script>
                    </div>
                    <!-- end first tab -->    
                </div>
            </div>
        </div>
    </div>
</div>