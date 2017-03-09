<!DOCTYPE HTML>
<html>
<head>
<title>EMS :: Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
<!-- //lined-icons -->
<!-- chart -->
<script src="<?php echo base_url("assets/js/Chart.js");?>"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url("assets/css/animate.css");?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url("assets/js/wow.min.js");?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="<?php echo base_url("assets/js/jquery-1.10.2.min.js");?>"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?php echo base_url("index.php/admin");?>">EMS <span>Modules</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo base_url("index.php/admin");?>"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="<?php echo base_url("index.php/admin");?>"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>Components</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?php echo base_url("index.php/grids");?>">Grids</a> </li>
									<li><a href="<?php echo base_url("index.php/widgets");?>">Widgets</a></li>
								</ul>
						</li>
						<li><a href="<?php echo base_url("index.php/forms");?>"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
						<li><a href="<?php echo base_url("index.php/tables");?>"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url("index.php/inbox");?>">Inbox</a> </li>
								<li><a href="<?php echo base_url("index.php/mail");?>">Compose Mail</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url("index.php/charts");?>">Basic Charts</a> </li>
							</ul>
						</li>
						<li><a href="<?php echo base_url("index.php/codes");?>"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li><a href="<?php echo base_url("index.php/media");?>"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url("index.php/signin");?>">Sign In</a> </li>
								<li><a href="<?php echo base_url("index.php/signup");?>">Sign Up</a></li>
								<li><a href="<?php echo base_url("index.php/blankpage");?>">Blank Page</a></li>
							</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
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
											   <div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
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
											<div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="<?php echo base_url("assets/images/1.png");?>" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
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
										<li><a href="#">
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
										</li>
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
										<span style="background:url(<?php echo base_url("assets/images/1.png");?>) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Michael<span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
						<div class="col-md-4 social_icons-left">
							<a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
						</div>
						<div class="col-md-4 social_icons-left pinterest">
							<a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
						</div>
						<div class="col-md-4 social_icons-left twi">
							<a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
						</div>
						<div class="clearfix"> </div>
					</div>			             	
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
			</div>
	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Inbox</h3>
					<div class="xs">
						<div class="col-md-4 email-list1">
							<ul class="collection">
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-users icon_1"></i>
								  <div class="avatar_left">
									<span class="email-title">Social</span>
									<p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 blue">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-exclamation-circle icon_2"></i>
								  <div class="avatar_left">
									<span class="email-title">Updates</span>
									<p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 red">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Promotions</span>
									<p class="truncate grey-text ultra-small">There are many variations of passages.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 blue1">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="icon_4">G</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Gmail</span></a>
									<p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="icon_4 icon_5">F</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Facebook</span></a>
									<p class="truncate grey-text ultra-small">But I must explain to you how.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread email_last">
								  <i class="icon_4 icon_6">T</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Twitter</span></a>
									<p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
							</ul>
							<div class="content-box  mrg15B">
							  <div class="content-box-wrapper text-center">
								<h4 class="content-box-header">
								Chat
								<small>(Online friends)</small>
								</h4>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/1.png");?>" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/3.png");?>" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/4.png");?>" alt="">
									<div class="small-badge bg-green1"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/5.png");?>" alt="">
									<div class="small-badge bg-orange"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/1.png");?>" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/4.png");?>" alt="">
									<div class="small-badge bg-green1"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url("assets/images/3.png");?>" alt="">
									<div class="small-badge bg-orange"></div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-8 inbox_right">
							<form action="#" method="GET">
								<div class="input-group input-group-ind">
									<input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit"><i class="fa fa-search icon-ser"></i></button>
									</span>
								</div><!-- Input Group -->
							</form>
							<div class="mailbox-content">
							   <div class="mail-toolbar clearfix">
								 <div class="float-left">
									<div class="btn btn_1 btn-default mrg5R">
									   <i class="fa fa-refresh"> </i>
									</div>
									<div class="dropdown">
										<a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
											<i class="fa fa-cog icon_8"></i>
											<i class="fa fa-chevron-down icon_8"></i>
										<div class="ripple-wrapper"></div></a>
										<ul class="dropdown-menu float-right">
											<li>
												<a href="#" title="">
													<i class="fa fa-pencil-square-o icon_9"></i>
													Edit
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-calendar icon_9"></i>
													Schedule
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download icon_9"></i>
													Download
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-times" icon_9=""></i>
													Delete
												</a>
											</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="float-right">
									
										  
											<span class="text-muted m-r-sm">Showing 20 of 346 </span>
											<div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Social</a></li>
														<li><a href="#">Forums</a></li>
														<li><a href="#">Updates</a></li>
														<li class="divider"></li>
														<li><a href="#">Spam</a></li>
														<li><a href="#">Trash</a></li>
														<li class="divider"></li>
														<li><a href="#">New</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Work</a></li>
														<li><a href="#">Family</a></li>
														<li><a href="#">Social</a></li>
														<li class="divider"></li>
														<li><a href="#">Primary</a></li>
														<li><a href="#">Promotions</a></li>
														<li><a href="#">Forums</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
												<a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
											</div>
										
									
								</div>
							   </div>
								<table class="table table-fhr">
									<tbody>
										<tr class="unread checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Google
											</td>
											<td>
												Nullam quis risus eget urna mollis ornare vel eu leo
											</td>
											<td>
											</td>
											<td>
												12 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
											</td>
											<td>
												02 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Adobe
											</td>
											<td>
												Nullam quis risus eget urna mollis ornare vel eu leo
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												8 march
											</td>
										</tr>
										<tr class="unread checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Apple
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												4 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Nullam quis risus eget urna mollis ornare vel eu leo
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												1 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												15 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Nullam quis risus eget urna mollis ornare vel eu leo
											</td>
											<td>
											</td>
											<td>
												16 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												9 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Microsoft
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												16 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Nullam quis risus eget urna mollis ornare vel eu leo
											</td>
											<td>
											</td>
											<td>
												10 march
											</td>
										</tr>
										<tr class="read checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star"></i>
											</td>
											<td class="hidden-xs">
												Dropbox
											</td>
											<td>
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit
											</td>
											<td>
												<i class="fa fa-paperclip"></i>
											</td>
											<td>
												14 march
											</td>
										</tr>
									</tbody>
								</table>
							   </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col_1">
						<div class="col-md-4 span_8">
							<div class="activity_box">
								<h3>Inbox</h3>
								<div class="scrollbar scrollbar1" id="style-2">
									<div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#">John Smith</a></h5>
											<p>Hey ! There I'm available.</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/5.png");?>" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#">Andrew Jos</a></h5>
											<p>Hey ! There I'm available.</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/3.png");?>" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#">Adom Smith</a></h5>
											<p>Hey ! There I'm available.</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/4.png");?>" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#">Peter Carl</a></h5>
											<p>Hey ! There I'm available.</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#">John Smith</a></h5>
											<p>Hey ! There I'm available.</p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 span_8">
							<div class="activity_box activity_box1">
								<h3>chat</h3>
								<div class="scrollbar" id="style-2">
									<div class="activity-row activity-row1">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""><span>10:00 PM</span></div>
										<div class="col-xs-5 activity-img1">
											<div class="activity-desc-sub">
												<h5>John Smith</h5>
												<p>Hello !</p>
											</div>
										</div>
										<div class="col-xs-4 activity-desc1"></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-2 activity-desc1"></div>
										<div class="col-xs-7 activity-img2">
											<div class="activity-desc-sub1">
												<h5>Adom Smith</h5>
												<p>Hi,How are you ? What about our next meeting?</p>
											</div>
										</div>
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/3.png");?>" class="img-responsive" alt=""><span>10:02 PM</span></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""><span>10:00 PM</span></div>
										<div class="col-xs-5 activity-img1">
											<div class="activity-desc-sub">
												<h5>John Smith</h5>
												<p>Yeah fine</p>
											</div>
										</div>
										<div class="col-xs-4 activity-desc1"></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-2 activity-desc1"></div>
										<div class="col-xs-7 activity-img2">
											<div class="activity-desc-sub1">
												<h5>Adom Smith</h5>
												<p>Wow that's great</p>
											</div>
										</div>
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/3.png");?>" class="img-responsive" alt=""><span>10:02 PM</span></div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<form>
									<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
									<input type="submit" value="Send" required="">		
								</form>
							</div>
						</div>
						<div class="col-md-4 span_8">
							<div class="activity_box activity_box2">
								<h3>todo</h3>
								<div class="scrollbar" id="style-2">
									<div class="activity-row activity-row1">
										<div class="single-bottom">
											<ul>
												<li>
													<input type="checkbox" id="brand" value="">
													<label for="brand"><span></span> Sunt in culpa qui officia.</label>
												</li>
												<li>
													<input type="checkbox" id="brand1" value="">
													<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
												</li>
												<li>
													<input type="checkbox" id="brand2" value="">
													<label for="brand2"><span></span> Dolorem eum.</label>
												</li>
												<li>
													<input type="checkbox" id="brand9" value="">
													<label for="brand9"><span></span> Pain that produces no resultant.</label>
												</li>
												<li>
													<input type="checkbox" id="brand8" value="">
													<label for="brand8"><span></span> Cupidatat non proident.</label>
												</li>
												<li>
													<input type="checkbox" id="brand7" value="">
													<label for="brand7"><span></span> Praising pain was born.</label>
												</li>
												<li>
													<input type="checkbox" id="brand3" value="">
													<label for="brand3"><span></span> Computer &amp; Electronics</label>
												</li>
												<li>
													<input type="checkbox" id="brand4" value="">
													<label for="brand4"><span></span> Dolorem ipsum quia.</label>
												</li>
												<li>
													<input type="checkbox" id="brand5" value="">
													<label for="brand5"><span></span> Consequatur aut perferendis.</label>
												</li>
												<li>
													<input type="checkbox" id="brand6" value="">
													<label for="brand6"><span></span> Dolorem ipsum quia.</label>
												</li>
												
												
											</ul>
										</div>
									</div>
								</div>
								<form>
									<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
									<input type="submit" value="Submit" required="">		
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			</div>
		</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="<?php echo base_url("assets/js/jquery.nicescroll.js");?>"></script>
<script src="<?php echo base_url("assets/js/scripts.js");?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
</body>
</html>