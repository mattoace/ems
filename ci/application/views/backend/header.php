<?php error_reporting(0);?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Management system" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url("assets/css/style.css");?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url("assets/css/font-awesome.css");?>" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/icon-font.min.css");?>" type='text/css' />
<script src="<?php echo base_url("assets/js/timemachine.min.js");?>"></script>
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url("assets/js/Chart.js");?>"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url("assets/css/animate.css");?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url("assets/js/wow.min.js");?>"></script>
	<script>
		 new WOW().init();
		 activeMenu = "#992200"; //6D740C
	</script>
 <link href="<?php echo base_url("assets/css/tablecss.css");?>" rel="stylesheet"> 
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
 
<script src="<?php echo base_url("assets/js/jquery-1.10.2.min.js");?>"></script>

<!-- Placed js at the end of the document so the pages load faster -->
<!--jquery ui-->
</head>
 <body class="sticky-header left-side-expanded"  onload="">
    <section>
    <!-- left side start-->
   <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?php echo base_url("index.php/admin?id=".$_GET['id']);?>">e-shule<span>admin</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo base_url("index.php?id=".$_GET['id']);?>"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
                                
					<ul class="nav nav-pills nav-stacked custom-nav">
                                            
				          <li class="actives"><a href="<?php echo base_url("index.php/admin?id=".$_GET['id']);?>"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						                                                
                                               <?php 
                                               $query = $this->db->query('SELECT id,menu_name,class FROM ems_menu WHERE is_active = 1 ORDER BY sort_id');
                                               
                                                            foreach ($query->result() as $row)
                                                                {  
                                                                  print('<li id='.$row->menu_name.' class="menu-list">');
                                                                  
                                                                  print('<a href="#"><i class="'.$row->class.'"></i>');
                                                                  
                                                                  print('<span>'.$row->menu_name.'</span></a>');
                                                                  
                                                                  print('<ul class="sub-menu-list">');
                                                                           
                                                                        $querySub = $this->db->query('SELECT id,menu_name,url FROM ems_submenu WHERE menu_id = "'.$row->id.'" ORDER BY Sort_id');
                                                                               foreach ($querySub->result() as $rowSub)
                                                                                { 

                                                                                   $queryRoles = $this->db->query('SELECT id,moduleId FROM ems_useroles WHERE md5(userId) = "'.$_GET['id'].'"');
                                                                                      foreach ($queryRoles->result() as $rowRoles)
		                                                                                { 
		                                                                                	$modArr = explode("_",$rowRoles->moduleId);
		                                                                                	$subModuleId = end($modArr);		                                                                                
		                                                                                	if($subModuleId == $rowSub->id && $modArr[0] == 'sub'){
		                                                                                		 print('<li id='.$rowSub->id.'><a href='.base_url(''.$rowSub->url.'?id='.$_GET['id']).'>'.$rowSub->menu_name.'</a> </li>');
		                                                                                	}

		                                                                                }

                                                                                }     
                                                                            
                                                                            
                                                                  print('</ul>');
                                                                  print('</li>');
                                                                                                                                                                                                                             
                                                                }  
                                                    ?>  
                                             
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
   
		<!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content2 main-content2copy">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-expanded"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="<?php echo base_url("assets/images/14.png");?>" alt=""></div>
											   <div class="notification_desc">
											
                                                                                               
										          </div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
										          <div class="user_img"><img src="<?php echo base_url("assets/images/14.png");?>" alt=""></div>
											     <div class="notification_desc">
												
										              </div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="<?php echo base_url("assets/images/14.png");?>" alt=""></div>
											   <div class="notification_desc">
											
											   </div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="<?php echo base_url("assets/js/classie.js");?>"></script>
										<script src="<?php echo base_url("assets/js/uisearch.js");?>"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="<?php echo base_url("assets/images/11.png");?>" alt=""></div>
										   <div class="notification_desc">
										
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="<?php echo base_url("assets/images/11.png");?>" alt=""></div>
										   <div class="notification_desc">
										
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="<?php echo base_url("assets/images/11.png");?>" alt=""></div>
										   <div class="notification_desc">
										
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<!--<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>-->
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">                                                                            
                                                                               <?php
                                                                                $query = $this->db->query("SELECT id,profile_image,fname FROM ems_users WHERE md5(id) = '" . $_GET['id']."'");                                                          
                                                                                $row = $query->result();
                                                                                $imgPath = "/back/uploads/".$row[0]->profile_image;
                                                                                print("<span ><img style='border-radius: 25px' height='40' width='40' src='".$imgPath."'  class='preview'/></span>");
                                                                                //$query = $this->db->query('SELECT fname FROM ems_users WHERE md5(id) = "'.$_GET['id'].'"');                                                        
                                                                                //$row = $query->result(); 
                                                                                ?>	
                                         <script> userImage = '<?php echo $row[0]->profile_image; ?>';</script>
                                         <script> userId = '<?php echo $row[0]->id; ?>';</script>		

                                            <div class="user-name">
											<p><?php echo $row[0]->fname; ?><span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
							        </div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="<?php echo base_url("index.php/signin");?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<!--<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>-->
						<div class="clearfix"> </div>
					</div>			             	
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
                        
                        