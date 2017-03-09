<?php error_reporting(0);?>
<!DOCTYPE HTML>
<html>
<head>
<title>Education Management System :: Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pharmaceuticals admin panel,Core Ict Consultancy" />
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

<script src="<?php echo base_url("assets/circular-progress-master/circular-progress.js");?>"></script>
<!-- //chart -->
<!--animate-->
<link href="<?php echo base_url("assets/css/animate2.css");?>" rel="stylesheet" type="text/css" media="all">
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/im.css");?>"/>
<style>
.profile_img {
    padding-right: 0%;
}
</style>

</head> 
   
 <body class="sticky-header left-side-expanded" ><!--initMap()-->




    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?php echo base_url("index.php/admin?id=".$_GET['id']);?>">EMS <span>Modules</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo base_url("index.php");?>"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li id="dashboard" class="active"><a href="<?php echo base_url("index.php/admin?id=".$_GET['id']);?>"><i class="lnr lnr-power-switch"></i><span id="dashboard_header">Dashboard</span></a></li>

                <script>
				   activeMenu = "#992200"; 
                   $('#dashboard').css('background-color',activeMenu);
                   $('#dashboard_header').css('background-color',activeMenu);  
               </script>                    
                                             <!--   <li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>EMS Modules1</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?php echo base_url("index.php/institutions");?>">Education Institutions</a> </li>
									<li><a href="<?php echo base_url("index.php/students");?>">Students</a></li>
                                                                        <li><a href="<?php echo base_url("index.php/staff");?>">Institution(s) Staff</a></li>
                                                                        <li><a href="<?php echo base_url("index.php/location");?>">Geographical Locations</a></li>
								</ul>
						</li>-->
                                                
                                               <?php 
                                               $query = $this->db->query('SELECT id,menu_name,class FROM ems_menu WHERE is_active = 1 ORDER BY Sort_id');                                                        
                                                            foreach ($query->result() as $row)
                                                                {  
                                                                  print('<li class="menu-list">');
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
										</a></li>-->
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
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs" id="graphs">
					<!--<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-mail-forward"></i>
								<div class="stats">
								  <h5>45 <span>%</span></h5>
								  <div class="grow">
									<p>Growth</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5>50 <span>%</span></h5>
								  <div class="grow grow1">
									<p>New Users</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								  <h5>70 <span>%</span></h5>
								  <div class="grow grow3">
									<p>Visitors</p>
								  </div>
								</div>
							</div>
						 </div>
						 <div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-usd"></i>
								<div class="stats">
								  <h5>70 <span>%</span></h5>
								  <div class="grow grow2">
									<p>Profit</p>
								  </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>-->

	        <!-- switches -->
		<div class="switches">
			<div class="col-4">
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<!--<h3>TODAY'S STATS</h3>
							<p>Duis aute irure dolor in reprehenderit.</p>
							<ul>
								<li>Earning: $400 USD</li>
								<li>Items Sold: 20 Items</li>
								<li>Last Hour Sales: $34 USD</li>
							</ul>-->
						</div>
					</div>
					<div class="sparkline">
						<canvas id="line" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
							<script>
									var lineChartData = {
										labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
										datasets : [
											{
												fillColor : "#fff",
												strokeColor : "#F44336",
												pointColor : "#fbfbfb",
												pointStrokeColor : "#F44336",
												data : [20,35,45,30,10,65,40]
											}
										]
										
									};
									new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							</script>
					</div>
				</div>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<!--<h3>MONTHLY STATS</h3>
							<p>Duis aute irure dolor in reprehenderit.</p>
							<ul>
								<li>Earning: $5,000 USD</li>
								<li>Items Sold: 400 Items</li>
								<li>Last Hour Sales: $2,434 USD</li>
							</ul>-->
						</div>
					</div>
					<div class="sparkline">
						<canvas id="bar" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
							<script>
								var barChartData = {
									labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
									datasets : [
										{
											fillColor : "#8BC34A",
											strokeColor : "#8BC34A",
											data : [25,40,50,65,55,30,20,10,6,4]
										},
										{
											fillColor : "#8BC34A",
											strokeColor : "#8BC34A",
											data : [30,45,55,70,40,25,15,8,5,2]
										}
									]
									
								};
									new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							</script>
					</div>
				</div>
				<div class="col-md-4 switch-right">
					<div class="switch-right-grid">
						<div class="switch-right-grid1">
							<!--<h3>ALLTIME STATS</h3>
							<p>Duis aute irure dolor in reprehenderit.</p>
							<ul>
								<li>Earning: $80,000 USD</li>
								<li>Items Sold: 8,000 Items</li>
								<li>Last Hour Sales: $75,434 USD</li>
							</ul>-->
						</div>
					</div>
					<div class="sparkline">
						<!--graph-->
						<link rel="stylesheet" href="<?php echo base_url("assets/css/graph.css");?>">
						<script src="<?php echo base_url("assets/js/jquery.flot.min.js");?>"></script>
					       <!--//graph-->
							<script>
								$(document).ready(function () {
								
									// Graph Data ##############################################
									var graphData = [{
											// Returning Visits
											data: [ [4, 4500], [5,3500], [6, 6550], [7, 7600],[8, 4500], [9,3500], [10, 6550], ],
											color: '#FFCA28',
											points: { radius: 7, fillColor: '#fff' }
										}
									];
								
									// Lines Graph #############################################
									$.plot($('#graph-lines'), graphData, {
										series: {
											points: {
												show: true,
												radius: 1
											},
											lines: {
												show: true
											},
											shadowSize: 0
										},
										grid: {
											color: '#fff',
											borderColor: 'transparent',
											borderWidth: 10,
											hoverable: true
										},
										xaxis: {
											tickColor: 'transparent',
											tickDecimals: false
										},
										yaxis: {
											tickSize: 1200
										}
									});
								
									// Graph Toggle ############################################
									$('#graph-bars').hide();
								
									$('#lines').on('click', function (e) {
										$('#bars').removeClass('active');
										$('#graph-bars').fadeOut();
										$(this).addClass('active');
										$('#graph-lines').fadeIn();
										e.preventDefault();
									});
								
									$('#bars').on('click', function (e) {
										$('#lines').removeClass('active');
										$('#graph-lines').fadeOut();
										$(this).addClass('active');
										$('#graph-bars').fadeIn().removeClass('hidden');
										e.preventDefault();
									});
								
								});
							</script>
							<div id="graph-wrapper">
								<div class="graph-container">
									<div id="graph-lines"> </div>
									<div id="graph-bars"> </div>
								</div>
							</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //switches -->
		<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box" id="inboxBody">
                   <h3>Inbox</h3>
                    <div class="scrollbar scrollbar1" id="style-20" style="padding-top:0px;">

                        <div class="activity-row">
				            <div style="float : left;">
							<span class="label label-success" style="cursor: pointer;" onClick="refreshMail()">Refresh</span>
							<span class="label label-success" style="cursor: pointer;" onClick="newMail()">New</span>
							</div>
						</div>
						<script>
						var inboxDiv = $("#style-20");
                        var n, id, progressInbox;
						   (function () {						      
						      progressInbox = new CircularProgress({
						        radius: 50,
						        strokeStyle: 'black',
						        lineCap: 'square',
						        lineJoin: 'round',
						        lineWidth: 1,
						        shadowBlur: 0,
						        shadowColor: 'yellow',
						        text: {
						          font: 'bold 15px arial',
						          shadowBlur: 0
						        },
						        initial: {
						          strokeStyle: 'white',
						          lineCap: 'square',
						          lineJoin: 'round',
						          lineWidth: 1,
						          shadowBlur: 10,
						          shadowColor: 'black'
						        }
						      });


						     $("#style-20").append(progressInbox.el);
						      n = 0;
						        pid1 = setInterval(function () {						    						        
						        progressInbox.update(n++);						     
						      }, 1000);
						    })();



                          $.get("/back/ReadMailbox.php",function(dat){ 
                          	     clearInterval(pid1);

                          	     $(progressInbox.el).detach();

								 for (var key in dat.maildate) {								 
                                      inboxHtml = '<div id="indoxmsg" class="activity-row"><div class="col-xs-3 activity-img"><img width="30px" src="<?php echo base_url("assets/images/useremail.jpg");?>" class="img-responsive" alt=""/></div><div class="col-xs-7 activity-desc"><h5><a href="#" onClick="showBody(\'' + key  + '\')">'+ dat.mailfrom[key]   +'</a></h5><p>'+ dat.mailsubject[key] +'</p></div> <div id="mailbody_'+ key +'" style="display:none;"> '+ dat.mailbody[key] +' </div>  <div class="col-xs-2 activity-desc1"><h6>'+ dat.maildate[key] +'</h6></div><div class="clearfix"></div></div>';//\'' + dat.mailbody[key]  +  '\' , \'' + key  + '\'
                                     $(inboxHtml).appendTo(inboxDiv);
								  }
                           },"json");
						</script>					
					  </div>
				</div>
			</div>
                    
                    
            <!-- message container; the scrollbar will be handled by Lightstreamer -->
            <div id="message_scroll" class="messagePanel" style="height:30px;display:none;">
              <!-- message row template; will be cloned for each incoming message -->
              <div class="messageContainer" id="messages" data-source="lightstreamer" style="visibility: hidden">
                <span class="messagePart1" data-source="lightstreamer" data-field="fromNick"></span><span class="messagePart1" style="margin-left: 5px">to</span>
                <span class="messagePart1" data-source="lightstreamer" data-field="toNick"></span><span class="messagePart1" style="margin-left: 0px">:</span>
                <span class="messagePart2" data-source="lightstreamer" data-field="message"></span>
              </div>
            </div>
                    
                    
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1" id="myChatWindow" style="margin-right: 4%;">
					<h3>chat</h3>
                                        <div class=" col-xs-4 scrollbar" id="mybuddy" style="padding:0.1em 0em 0;">                                            
                                                  <input id="user_nick" type="hidden" value="" class="sendTitle" size="20" />
                                                  <div id="buddies_title" class="buddiesTitle" style="background-color:#ffff;">Buddies</div> 
                                                   <div id="buddies_scroll" class="buddiesPanel" style="width:130px;height:305px;border-style:none;backgrounr-color:#ffff;">
                                                      <div data-source="lightstreamer" id="buddies" >
                                                        <div data-source="lightstreamer" data-field="key" class="buddy"></div>
                                                      </div>
                                                    </div> 


                                        </div>                                        
					<div class="col-xs-8 scrollbar" id="style-2">
                                            
						<!--<div class="activity-row activity-row1">
                                                    
							<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""/><span>10:00 PM</span></div>
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
							<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/3.png");?>" class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/1.png");?>" class="img-responsive" alt=""/><span>10:00 PM</span></div>
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
							<div class="col-xs-3 activity-img"><img src="<?php echo base_url("assets/images/3.png");?>" class="img-responsive" alt=""/><span>10:02 PM</span></div>
							<div class="clearfix"> </div>
						</div>-->
					</div>
                                        
                                        
                                        
					<form onSubmit="submitForm(); return false;" style="margin-top: 10px;" >
						<input id="user_message" type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input id="message_button" type="submit" value="Send" required=""/>		
					</form>
				</div>
                        </div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-22" style="padding:0px;">
						<div class="activity-row activity-row1">



                        <div class="activity-row">
				            <div style="float : right;">
							<span class="label label-success" onClick="deletToDoNote()" id="deleteText">Delete</span>							
							</div>
						</div>

							<div class="single-bottom">
								<ul id="myUI">

									<script>

									$( document ).ready(function() {

	                                  var toDoDiv = $("#myUI");
									  var postVars = {
											"case":2,
											"userId": $('#userId').val()
											}

									       $.post("/back/Dashboard.php",postVars,function(dat){								
									       	for(var i=0;i<dat.body.length;i++){	
                                                 toDoHtml = '<li id="li_'+ dat.id[i] +'"><input type="checkbox"  id="brand_'+ dat.id[i] +'" value=""><label for="brand_'+ dat.id[i] +'"><span></span> '+ dat.body[i] +'</label></li>';
                                                 $(toDoHtml).appendTo(toDoDiv);		                                        
												}											
				                           },"json");

                                      });
									</script>									
									
								</ul>
							</div>
						</div>
					</div>
					<form onSubmit="submitToDo(); return false;">
						<input type="hidden" id="userId" value="<?php echo $_GET['id']; ?>" >
						<input type="text" value="Enter your text" id="todoText" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input id="message_button" type="submit" value="Submit" required=""/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>

<style>
.input-group{
margin : 0 0 0 2em;
width : 140%;
}
</style>


   <div id="dialog2" title="Body" style="z-index: 1;">

	  <div class="panel-body panel-body-inputin" id="mailBodyText">

	  </div>

	</div>



<div id="dialog" title="Compose Email" style="z-index: 1;">

			  <div class="panel-body panel-body-inputin">

					<form role="form" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-2 control-label">Full Names</label>
							<div class="col-md-8">
								<div class="input-group in-grp1">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="names" type="text" class="form-control1" placeholder="Full Names">
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Email</label>
							<div class="col-md-8">
								<div class="input-group in-grp1">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input id="email" type="text" class="form-control1" id="exampleInputPassword1" placeholder="Email">
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Message</label>
							<div class="col-md-8">
								<div class="input-group input-icon right in-grp1">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<!-- <input id="message" class="form-control1" type="textarea" style="height:220px;" rows="3" placeholder="Message"> -->
									<textarea id="message"  class="form-control1" style="height:220px;"   name="Text1"  rows="5" placeholder="Message"></textarea>
								</div>
							</div>
						
							<div class="clearfix"> </div>
						</div>



						<div class="form-group">
						  <span class="label label-success" style="float:right; margin-left:5px; cursor: pointer;" onClick="sendMail()"><div id="btnsendText">Send</div></span>
						  <span class="label label-success" style="float:right; margin-left:5px; cursor: pointer;" onClick="cancelsendMail()">Cancel</span>
						</div>




					</form>
				</div>









			</div>


       

        <!--footer section start-->
			<footer>
			   <p>&copy 2016 . Rights Reserved | Developed by <a href="https://coreict.co.ke/" target="_blank">Core Ict Consultancy</a></p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/jquery-ui-1.11.4/themes/smoothness/jquery-ui.css"); ?>"> 
<script type="text/javascript" language="javascript" src="<?php echo base_url("assets/jquery-ui-1.11.4/jquery-ui.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/lightstreamer/require.min.js");?>"></script>
<script src="<?php echo base_url("assets/lightstreamer/lightstreamer.js");?>"></script> 
<script src="<?php echo base_url("assets/lightstreamer/imChat.js");?>"></script>
<script src="<?php echo base_url("assets/js/jquery.nicescroll.js");?>"></script>
<script src="<?php echo base_url("assets/js/scripts.js");?>"></script>




<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("assets/js/bootstrap.min2.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/back/dashBoard.js");?>"></script> 




</body>
</html>