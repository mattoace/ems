<!DOCTYPE HTML>
<html>
<head>
<title>EMS :: Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Management System ,E-Learning" />
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
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Sign In to</span> <a href="index.html">Admin</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" >Forgot Password ?</label>
								</span>								
								<div class="clearfix"> </div>
							</div>
							<form action ="#">
							<div class="log-input">
								<div class="log-input-center">
								   <input id ="uname" type="text" class="user" value="Enter username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter username:';}"/>
								</div>								
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-center">
								   <input id = "upass" type="password" class="lock" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
                                                            
                             <div class="log-input">
								<div class="log-input-center" style = "width: 50%;">
							          <input type="submit" onClick="login(this)" value="Login to your account">
                                </div>							
							</div>
						</form>	 
						</div>
						<div class="new_people">
							<h4>all your educaton needs</h4>
							<p>Having hands on experience in creating innovative solution for country growth and devlopment</p>
							<!-- <a href="<?php echo base_url("index.php/signup");?>">Register Now!</a> -->
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2017, All Rights Reserved | Developed by <a href="http://coreict.co.ke" target="_blank">Core Ict Consultancy</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="<?php echo base_url("assets/js/jquery.nicescroll.js");?>"></script>
<script src="<?php echo base_url("assets/js/scripts.js");?>"></script>
<script src="<?php echo base_url("assets/js/back/login.js");?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
</body>
</html>