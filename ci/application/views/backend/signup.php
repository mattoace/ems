<!DOCTYPE HTML>
<html>
<head>
<title>EMS :: Signup</title>
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
					<div class="sign-up">
						<h3>Register Here</h3>
						<p class="creating">EMS initiative aims to deploy a high-quality Education Management Information System (EMIS) designed to collect and report data on schools, students, teachers and staff. </p>
						<h5>Personal Information</h5>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>First Name* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="firstname"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Last Name* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="lastname"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
							 <h4>School Name* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="schoolname"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
							 <h4>School Category* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<select name="schoolcategory" id="schoolcategory" class="form-control1" style="margin-top: 16px;">
                                           <option value="1">High Schools</option>
                                           <option value="2">Primary Schools</option>
                                           <option value="3">Kindergatens</option>
                                           <option value="4">Universities</option>
                                           <option value="5">Colleges</option>
                                           <option value="6">Technical Training Institutions</option>                                   
                                     </select>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
							 <h4>Location(town):</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="town"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
							 <h4>School Address:</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="address"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>


						<div class="sign-u">
							<div class="sign-up1">
								<h4>Telephone * :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="mobile"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="email"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

					 <div class="sign-u">
							<div class="sign-up1">
								<h4>Website :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="website"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>


                        <div class="clearfix"> </div>
                                                
						<div class="sign-u">
							<div class="sign-up1">
								<h5>Photo* :</h5>
							</div>
							<div class="sign-up2">
								<form id="imageform" method="post" enctype="multipart/form-data" action='/back/ajaximage.php'>
									<input type="file" name="photoimg" id="photoimg" />
								</form>
                                                            <div id='preview'>
                                                             </div>
                                                            
							</div>
							<div class="clearfix"> </div>
						</div>
						<h6>Login Information</h6>


						<div class="sign-u">
							<div class="sign-up1">
								<h4>Username* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="text" placeholder=" " required=" " id="username"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required=" " id="pass"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password* :</h4>
							</div>
							<div class="sign-up2">
								<form>
									<input type="password" placeholder=" " required=" " id="cpass"/>
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<form action="#">
									<input type="submit" value="Submit" onClick="submitForm()">
								</form>
							</div>
							<div class="sub_home_right">
								<p>Go Back to <a href="<?php echo base_url("/");?>">Home</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2016, All Rights Reserved | Developed by <a href="http://coreict.co.ke" target="_blank">Core Ict Consultancy</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="<?php echo base_url("assets/js/jquery.nicescroll.js");?>"></script>
<!--<script src="<?php echo base_url("assets/js/scripts.js");?>"></script>-->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/jquery.minold.js");?>"></script> 
<script src="<?php echo base_url("assets/js/jquery.form.js");?>"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			    $("#preview").html('');
			    $("#preview").html('<img src="<?php echo base_url("assets/images/loader.gif");?>" alt="Uploading...."/>');
                            $("#imageform").ajaxForm({
                             target: '#preview'
                             }).submit();
                            });



	   new WOW().init();
	   activeMenu = "#992200"; 		
       $('#Settings').css('background-color',activeMenu);
       $('#6').css('background-color',activeMenu); 


        });


 function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function submitForm(){


	if($('#firstname').val()==""){
		alert("Please enter first name!");	
	}else if($('#lastname').val()==""){
	   alert("Please enter last name!");	
	}else if($('#email').val()==""){
	   alert("Please enter email address!");
    }else if($('#schoolcategory').val()==""){
       alert("Please choose a category!");
    }else if($('#schoolname').val()==""){
       alert("Please enter your school name!");
	}else if(validateEmail($('#email').val()) == false){
	   alert("Email entered is invalid!");
	}else if($('#pass').val()==""){
	   alert("Please enter password!");
	}else if($('#pass').val() != $('#cpass').val()){
        alert("Password entered do not match!");	
	}else{

    var postVars ={
        "fname": $('#firstname').val(),
        "lname":$('#lastname').val(),
        "email":$('#email').val(), 
        "pass":$('#pass').val(),
        "schoolname":$('#schoolname').val(),
        "website":$('#website').val(),
        "username":$('#username').val(),
        "mobile":$('#mobile').val(),
        "schoolcategory":$('#schoolcategory').val(),
        "town":$('#town').val(),
        "address":$('#address').val()           
    }
    
    $.post("/back/SignUp.php",postVars,function(data){
         if(data.bool){
         	alert(data.response);
         	window.location.href ='signin';
         }else{
         	alert(data.response);
         }
    },"json");
	}


}


</script>

</body>
</html>