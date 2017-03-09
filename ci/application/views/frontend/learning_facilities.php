<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url("assets/images/favicon.ico");?>"  type="image/x-icon">
    <title>EMS</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>"  rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/front.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/front.css");?>">
    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/autoComplete.css");?>" >

    <!--JS-->
    <script src="<?php echo base_url("assets/js/jquery.js");?>" ></script>
    <script src="<?php echo base_url("assets/js/jquery-migrate-1.2.1.min.js");?>" ></script>
    <script src="<?php echo base_url("assets/js/rd-smoothscroll.min.js");?>" ></script>


	<!--  PAGINATION plugin -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bs_pagination-master/jquery.bs_pagination.min.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/bs_pagination-master/jquery.bs_pagination.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/bs_pagination-master/localization/en.min.js");?>"></script>
	<!--  FILTERS plugin -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jui_filter_rules-master/minified/jquery.jui_filter_rules.bs.min.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/jui_filter_rules-master/minified/jquery.jui_filter_rules.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/jui_filter_rules-master/minified/localization/en.min.js");?>"></script>
	<!--  required from filters plugin -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/moment.min.js");?>"></script>
	<!--  JQUERY-UI (only sortable and datepicker is needed) -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.js");?>"></script>
	<!--  if touch event support is needed (mobile devices) -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.ui.touch-punch.min.js");?>"></script>
	<!--  DATAGRID plugin -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bs_grid-master/minified/jquery.bs_grid.min.css");?>">
	<script type="text/javascript" src="<?php echo base_url("assets/bs_grid-master/minified/jquery.bs_grid.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/bs_grid-master/minified/localization/en.min.js");?>"></script>




   
 <!-- <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.ba-hashchange.min.js");?>"></script>-->
	<script type="text/javascript" src="<?php echo base_url("assets/easytabs/lib/jquery.easytabs.min.js");?>"></script>

  <script src="<?php echo base_url("assets/js/jquery-1.9.1.min.js");?>" ></script>

  <!--<script src="<?php echo base_url("assets/js/jquery.autocomplete.min.js");?>" ></script>-->
  <!--<script src="<?php echo base_url("assets/js/jquery.ba-hashchange.min.js");?>" ></script>-->
  <script src="<?php echo base_url("assets/js/jquery.cookie.js");?>" ></script>






  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/css/select.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/css/editor.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.css"); ?>">
  <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/demo.css"); ?>">-->
  <style type="text/css" class="init"></style>

  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>

  <!-- <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/js/dataTables.editor.min.js"); ?>"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.js"); ?>"></script>-->





  <script src="<?php echo base_url("assets/js/front/schools-autocomplete.js");?>" ></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo base_url("assets/images/ie8-panel/warning_bar_0000_us.jpg");?>"  border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="<?php echo base_url("assets/js/html5shiv.js");?>" ></script>
    <![endif]-->
    <script src="<?php echo base_url("assets/js/device.min.js");?>" ></script>
    <style>
	.ui-tabs .ui-tabs-nav li {
	  /*float:none;*/
	}
	.tab.ui-state-default.ui-corner-top.ui-tabs-selected {
    background: #E1D1B7 none repeat scroll 0 0;
    }
    body{
      background-color: #097FD6;
    }

  .autocomplete-suggestions {  
    width: 35.7% !important;
  }

  .dataTables_filter {
    margin-bottom: -13%;
    visibility: hidden;
   }
.nav > li > a { 
    padding: 5px; 
  }

  table.dataTable tbody tr {
  /*  line-height: 2px !important;*/
    font-size:10px;
}


.cdataTable tbody tr.even:hover,  .cdataTable tbody tr.even td.highlighted {
        background-color: #21C2F8;
        color:white;        
    }

.cdataTable tbody tr.odd:hover,  .cdataTable tbody tr.odd td.highlighted {
          background-color: #21C2F8;
        color:white;
    }

  .cdataTable tr.even:hover {
          background-color: #21C2F8;
        color:white;
    }

 .cdataTable tr.even:hover td.sorting_1 {
         background-color: #21C2F8;
        color:white;
    }

 .cdataTable tr.even:hover td.sorting_2 {
          background-color: #21C2F8;
        color:white;
    }
.cdataTable tr.even:hover td.sorting_3 {
          background-color: #21C2F8;
        color:white;
    }

.cdataTable tr.odd:hover {
          background-color: #21C2F8;
        color:white;
    }

.cdataTable tr.odd:hover td.sorting_1 {
          background-color: #21C2F8;
        color:white;
    }

.cdataTable tr.odd:hover td.sorting_2 {
          background-color: #21C2F8;
        color:white;
    }

.cdataTable tr.odd:hover td.sorting_3 {
          background-color: #21C2F8;
        color:white;
    }

.content-wrapper, .right-side {
    background-color: #21C2F8 !important;
}


table.dataTable tr{ background-color:  #dde7f0; }
table.dataTable tr:nth-child(even)  { background-color: #C7E3FB;  }
thead {
    color: #21c2f8;
}

	</style>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header> 
    <div id="headerwrapper" class="headerwrapper" > 
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./">Ems<small>portal</small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
          <p>Need help?</p>
            <a href="callto:#">+254-723-315-344</a>
          <small><span>Hours:</span>  6am-4pm GMT M-Th; &nbsp;6am-3pm GMT Fri</small>
        </div>
      </div>
    </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container customnavbar">   
        <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li>
                  <a href="./">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url("index.php/about");?>">ABOUT</a>
                </li>              
                <li class="active">
                  <a href="<?php echo base_url("index.php/learning_facilities");?>">MY SCHOOL</a>
                </li>                
                <li>
                  <a href="<?php echo base_url("index.php/contacts");?>">CONTACTS</a>
                </li>
              </ul>                           
            </div>
        </nav>   
         <div class="buttonspanel">
          <a href="<?php echo base_url("index.php/signup");?>"> <img src="<?php echo base_url("assets/images/Log Register.png");?>" class="loginimage" alt=""></a>
          <a href="<?php echo base_url("index.php/signin");?>"><img src="<?php echo base_url("assets/images/Log In Iportal.png");?>" class="loginimage" alt=""></a>     
         </div>
             
        </div>

      </div>  
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <section id="content" class="content well">
        <div class="container">



  <div id="topbar"><a href="#"></a></div>
  <div id="w" >

       <div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
         <h5 class="bars">Look up a learning institution</h5>
           <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
      <ul id="myTab" class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Search by school name</a></li>
        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Search by County</a></li>
        
      </ul>
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

            <div id="contents" >  <br> <hr>         
              <p>Type the name of your school on the field below : </p>
              
              <div id="searchfield" >
                <form><input type="text" name="currency" class="biginput" id="autocomplete"></form>
              </div>     
              <div id="outputbox">
                <p id="outputcontent"></p>
              </div>
            </div>

        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
         <span style="margin-bottom:5%;"> <br></span>
          <div class ="row">

            <div class ="col-md-6">
            <div id="contents" > 
              <div id="searchfieldcounty" >
                <form>Type the County :<input type="text" name="county" class="biginput" style="width:100%;"  id="county"></form>
              </div>     
              <div id="outputbox2">
                <p id="outputcontent2"></p>
              </div>
            </div>
          </div>
       
          <div class ="col-md-6">
              <div id="contents" >
              <div id="searchfieldschool" >
                <form>Select a school :<input type="text" name="school" class="biginput" style="width:100%;" id="school"></form>
              </div>     
              <div id="outputbox3">
                <p id="outputcontent3"></p>
              </div>
            </div>
          </div>
          </div>

             <div class ="row">
              <div class ="col-md-12">
                                   <div class="well">
                                                <section>
                                                    <table id="myView" class="cdataTable" cellspacing="0" width="100%">
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
      </div>
       </div>
      </div>


<!--     <div id="contents" >
      <h5>EMS School Search</h5>
      <p>Type the name of your school on the field below : </p>
      
      <div id="searchfield" >
        <form><input type="text" name="currency" class="biginput" id="autocomplete"></form>
      </div>     
      <div id="outputbox">
        <p id="outputcontent"></p>
      </div>
    </div> -->



  </div>


  <!-- @end #w -->

      <!--  <style>
			.btn{
			padding: 0 16px;
			}
			.btn-default {
			    color: #777777;
			}
			.ui-widget {
			    font-family: none;
			    font-size: 0.9em;
			}
			.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
				 padding: 3px;	
			}
			.pagination > li > a, .pagination > li > span {			
			    padding: 5px 25px; 	
			}
			.warning {
				color: orange;
				background-color: black;
			}
			.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
				padding: 2;
			}
			.table {
             margin-bottom: 0px;
             color: #5D5D5D;			 
		    }
			.ui-tabs .ui-tabs-nav {
				margin: 0;
				padding: 0.2em;
			}
			
			.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {				
				padding: 35px;		
			}
        </style>
		    <div id="tab-container" class="tab-container">
			  <ul class='etabs'>
			    <li class='tab'><a href="#tabs1"><img src="<?php echo base_url("assets/images/hand.png");?>" alt=">" style="width:20px;height:10px;"> Institutions</a></li>
			    <li class='tab'><a href="#tabs2"><img src="<?php echo base_url("assets/images/hand.png");?>" alt=">" style="width:20px;height:10px;"> Facitlities</a></li>
			    <li class='tab'><a href="#tabs3"><img src="<?php echo base_url("assets/images/hand.png");?>" alt=">" style="width:20px;height:10px;"> Performance</a></li>
			    <li class='tab'><a href="#tabs4"><img src="<?php echo base_url("assets/images/hand.png");?>" alt=">" style="width:20px;height:10px;"> Student Search</a></li>
			  </ul>
			  <div id="tabs1">
			    <h4>View Learning Institutions</h4>
			    <div id="learning_institutions_grid"></div>

			  </div>
			  <div id="tabs2">
			    <h4>Facilities</h4>
				  <div id="treeViewSubCats" class="demo"></div>		
			  </div>
			  <div id="tabs3">
			    <h4>Performance</h4>
		
			  </div>
			  <div id="tabs4">
			    <h4>Student Search</h4>
			 
				<div id="students_grid"></div>
			  </div>
			</div>-->
        </div>
    </section>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/themes/default/style.min.css");?>">
    <script type="text/javascript" src="<?php echo base_url("assets/vakata-jstree-8ea6ce7/dist/jstree.min.js");?>"></script>  
    <!--<script type="text/javascript" src="<?php echo base_url("assets/js/front/learning_facilities.js");?>"></script>-->
    <!--========================================================
                              FOOTER
    =========================================================-->
                  <style>
                      .ui-dialog.ui-widget.ui-widget-content.ui-corner-all.ui-front.ui-draggable.ui-resizable {
                          z-index: 1000;
                          line-height: 0.7;
                          background:#EDF3CC;
                      } 
                  </style>  

    <div id="dialog" title="" style="z-index: 1000;">
          <iframe id="myContent" class="myContent" style="width:100%;height:100%;border:0;"> </iframe>     
    </div>

       <div id="dialog2" title="" style="z-index: 1000;">
          <iframe id="myContent2" class="myContent" style="width:172px !important;height:100%;border:0;"> </iframe>     
    </div>

    <footer>
     <section class="well1">
        <div class="container"> 
            <p class="rights">
              Core Ict Consultancy  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a> <a rel="nofollow" href="#" target="_blank"></a>
            </p>           
        </div> 
      </section>    
    </footer>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>" ></script>
    <script src="<?php echo base_url("assets/js/tm-scripts.js");?>" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/jquery-ui-1.11.4/jquery-ui.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/jquery-ui-1.11.4/themes/smoothness/jquery-ui.css");?>"> 
    <script type="text/javascript" language="javascript" src="<?php echo base_url("/assets/jquery-ui-1.11.4/jquery-ui.min.js");?>"></script>   
    <script src="<?php echo base_url("assets/js/jquery.autocomplete.min.js");?>" ></script>
  <!-- </script> -->
  </body>
</html>
