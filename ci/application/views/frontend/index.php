<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <title>HOME</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">
    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/front.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/camera.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/search.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/google-map.css");?>">
    <!--JS-->
    <!--<script src="<?php echo base_url("assets/js/jquery.js");?>"></script>-->
    <script src="<?php echo base_url("assets/jssor/js/jquery-1.11.3.min.js");?>"></script>  
    <script src="<?php echo base_url("assets/js/jquery-migrate-1.2.1.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/rd-smoothscroll.min.js");?>"></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo base_url("assets/images/ie8-panel/warning_bar_0000_us.jpg");?>" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="<?php echo base_url("assets/js/html5shiv.js");?>"></script>
    <![endif]-->
    <script src='<?php echo base_url("assets/js/device.min.js");?>'></script>

  <link rel="stylesheet" href="<?php echo base_url("assets/jssor/dc_parallax.css");?>">


    <style>
  .iossliderContainer {
    background-image: url("../../../bg_images/color/c21.jpg");
    padding: 0 0;
}
.camera_container {   
    padding-bottom: 0;
    
}
.fluidHeight {
    padding: 0 0 8%;  
 }
 .da-slide h2 {
    color: #21C2F8;
    font-size: 28px;
    top: 140px;
}
.da-slide p {
    color: #B8C6E5;  
}
.sliderimag{
  border-radius: 5%;
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
          <small><span>Hours : </span>6am-4pm GMT Mon-Sat; &nbsp;8am-12pm GMT Sat</small>
        </div>
      </div>
  </div> 


      <div id="stuck_container" class="stuck_container">
        <div class="container customnavbar">   
        <nav class="navbar navbar-default navbar-static-top pull-left">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="active">
                  <a href="./">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url("index.php/about");?>">ABOUT</a>
                </li>             
                <li>
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

    <main>        

      <section class="well well1 well1_ins1">
        <div class="camera_container" style="">


<!-- DC Parallax Slider Start -->
<div style="width:100%; margin:0 auto; padding:0px; position:relative;"> <!-- define slider container width (strict enforce) -->
<div id="da-slider" class="da-slider">
     
    <!-- Slide 1 -->
    <div class="da-slide">

         <div id="camera" class="camera_wrap">

            <div data-src="<?php echo base_url("assets/images/frontend/Male-African-Collega-Student-400x200.jpg");?>">
             
            </div>
          </div>
               
                  
       <h2> Education Resource Center</h2> 
          
                    <p>
                      Building a world in which people in underdeveloped and developing countries have 
            similar access to educational facilities
            and infrastructure as those in developed countries<span></span>.
                    </p> 
        <div class="da-img"><img class="sliderimag" src="<?php echo base_url("assets/images/frontend/slider1.jpg");?>" alt="" /></div> 
    </div>
     
    <!-- Slide 2 -->
    <div class="da-slide">
       <div class="da-img">
        <img class="sliderimag" src="<?php echo base_url("assets/images/frontend/slider2.png");?>" alt="" /></div>
        <h2>Making Real Change Happen</h2>
        <p>
            Inspire the world by building innovatve solution.<span> </span>.
        </p>
        
    </div>
     
    <!-- Slide 3 -->
    <div class="da-slide">
        <h2>EMS Solution</h2>
       <p>
        Develop an online data-driven portal where each public primary school shall create an account,<span>upload and store KCPE and internal examinatrions</span>.
        </p>
        <div class="da-img"><img class="sliderimag" src="<?php echo base_url("assets/images/frontend/slider3.jpg");?>" alt="" /></div>
    </div>

    <div class="da-slide">       
        <div class="da-img"><img class="sliderimag" src="<?php echo base_url("assets/images/frontend/slider4.jpg");?>" alt="" /></div>
    </div>
    <div class="da-slide">       
        <div class="da-img"><img class="sliderimag" src="<?php echo base_url("assets/images/frontend/slider5.jpg");?>" alt="" /></div>
    </div>
     
    <!-- Slide 3 -->
  <!--   <div class="da-slide">
        <h2>24/7 Support</h2>
        <p>Email & phone support whenever you need it. We're here 7 days a week! Sed ullamcorper odio commodo velit rutrum ut aliquam velit volutpat. Vestibulum hendrerit tristique ornare. Nam vitae libero sapien.</p>
        <a href="#" class="da-link">Read more</a>
        <div class="da-img"><img src="dcodes/sliders/images/parallax/4.png" alt="image01" /></div>
    </div> -->
     
    <!-- Slide 4 -->
     
    <!-- navigation controls -->
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
     
</div> <!-- /da-slider -->
</div>
<!-- DC Parallax Slider End -->

          <!-- 
          <div id="camera" class="camera_wrap">




     <div data-src="<?php echo base_url("assets/images/frontend/Male-African-Collega-Student-400x200.jpg");?>">
              <div class="camera_caption fadeIn">
			  			    		  
			  
                <div class="jumbotron jumbotron1" style="">
                  <div class="row">


				  <div class="col-lg-8">
				  <em>
                      <h3> Education Resource Center</h3>  
                  </em>
                  <div class="wrap">
                    <p>
                      Building a world in which people in <a href="<?php echo base_url("index.php/signin");?>" class="btn-link fa-angle-right"></a> underdeveloped and developing countries have 
					  similar access to educational facilities
					  and infrastructure as those in developed countries<span></span>.
                    </p>
                    
                  </div>
                  </div>	
              </div>				  
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url("assets/images/frontend/minority-student-grants.jpg");?>">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron2">
                  <em>
                    <h3> Making Real Change Happen  </h3>
                  </em>
                  <div class="wrap">  
                    <p>
                      Inspire the world by building innovatve solution.<span> </span>.
                    </p>
                    <a href="#" class="btn-link hov_prime fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url("assets/images/frontend/african-american-scholarships.jpg");?>">
              <div class="camera_caption fadeIn">
                <div class="jumbotron">
                  <em>
                  <h3>   SOLUTIONS  </h3>
                  </em>
                  <div class="wrap">
                    <p>
                      Develop an online data-driven portal where each public primary school shall create an account,<span>upload and store KCPE and internal examinatrions</span>.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div> 
          </div>-->
        </div>
    

         <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
              <div class="container">
              
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <p>
                    <h3>EMS-Portal</h3>
                    The EMS online data-driven portal enables each public primary school shall create an account, upload and store KCPE and internal examinations’ data in a centralized database. 
                    The data will be analyzed to give information to various users on the state of education in a school and/or a group of schools in a given area. 
                    This data and information will be available to any interested party..
                    </p>
                  </div>
                </div>
              <!--   <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <p>
                  <h3>Sustainable development Goals</h3>         
                  
                        In order to stay on course in the attainment of this desire, 
                        the  sector  has  planned  to improve  equitable  access  quality  education  at  all  levels, 
                        continuously bridge the gender gap in access to education at all levels; promote science and 
                        technical  education  at  all  levels;  integrate  ICT  into  education  and  training;  strengthen  the 
                        linkage between tertiary education and industry; and deliver quality and reliable education 
                        management information to facilitate objective planning.                     
                    </p>
                  </div>
                </div> -->
              </div>
            </section>

        <div class="container center991">
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url("assets/images/frontend/parent-meetings-20153.jpg");?>" alt="">
                <div class="caption bg2">
                  <h3>
                    Education and Knowledge Access
                  </h3>
                  <div class="wrap">
                    <p>
                      Education is the key to unlocking the golden dor of freedom for all in Africa.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url("assets/images/frontend/Ghana-laptop.jpg");?>" alt="">
                <div class="caption bg3">
                  <h3>
                    GLOBAL SOLUTIONS
                  </h3>
                  <div class="wrap">
                    <p class="thumb_ins1">
                      Sustainable development through integration of science ,technology and innovation into the education system.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div> 
            </div>
          </div>





         <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
              <div class="container">
              
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                      <div class="thumbnail thumb-shadow">
                        <img src="<?php echo base_url("assets/images/frontend/laptopproject1.jpg");?>" alt="">
                        <div class="caption bg3">
                          <h3>
                            Digital Literacy Program
                          </h3>
                          <div class="wrap">
                            <p>
                              This project will help support the Digital Literacy Programme  that is being implemented in Kenya.
                            </p>
                            <a href="#" class="btn-link fa-angle-right"></a>
                          </div>  
                        </div>
                      </div> 
                  </div>                
                  <div class="col-md-6 col-sm-12">
                              <div class="thumbnail thumb-shadow">
                                <img src="<?php echo base_url("assets/images/frontend/laptopproject2.jpg");?>" alt="">                                
                              </div> 
                  </div>
                </div>
              </div>
            </section>



          <div class="row wow fadeIn" data-wow-duration='2s'>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url("assets/images/frontend/Male-African-Collega-Student-400x200.jpg");?>" alt="">
                <div class="caption bg3">
                  <h3>
                    Expertise
                  </h3>
                  <div class="wrap">
                    <p>
                      Commited to delivering services in an honest , accountable and transparent manner.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url("assets/images/frontend/Black-Women-have-highest-enrollment-for-college.-300x2002.png");?>" alt="">
                <div class="caption bg-primary">
                  <h3>
                    RESOURCES
                  </h3>
                  <div class="wrap">
                    <p>
                      World-class benchmarking standards,delivering an innovative education system based on an international standard for global competitiveness
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url("assets/images/frontend/minority-student-grants2.jpg");?>" alt="">
                <div class="caption bg2">
                  <h3>
                    Professionalism
                  </h3>
                  <div class="wrap">
                    <p>
                      Service deliver based on the highest professional standards and ethics.Decisiona based on objective and verifiable facts.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>              
            </div>
          </div>
        </div>        
      </section>
      
  <!--     <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        The
          <small>
            EMS PORTAL.
          </small>
        </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <p>
              <h3>Purpose of the Project</h3>   
                  
               The purpose of the project is to develop an online data-driven portal where each public primary school shall create an account, upload and store KCPE and internal examinations’ data in a centralized database.  The data will be analyzed to give information to various users on the state of education in a school and/or a group of schools in a given area. This data and information will be available to any interested party via the internet.
              
              </p>
            </div>
            <div class="col-md-6 col-sm-12">
              <p>
            <h3>Objectives of the Project</h3>         
             The main goal of the project is to develop aweb portal to store and analyze schools’ data to provide information to various users.  The specific objectives of the project are:

                <ol type="i">   
               <li> i). Create an account for each public primary school in the online portal.</li>
               <li> ii). Identify and collect KCPE and other examination data from public primary schools for analysis and evaluation.</li>
               <li> iii). To carry out statistical analysis on the historical data to develop models. The models will help in decision support.</li>
               <li> iv). Provide a platform for communication between a school and the external environment.</li>
               <li> v). Analyze, design and implement the system using appropriate tools.</li>
               <li> vi). Evaluate the system using appropriate techniques.</li>
              </ol>
                <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
          </div>
        </div>
      </section> -->

<!--       <section class="well well2">
        <div class="container">
        <h2>
          our
          <small>
            SERVICES
          </small>
        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                  <a href="#">Education Institutions Management</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Schools Management</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Student Management</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Academice Management</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <img class="width_img" src="<?php echo base_url("assets/images/frontend/images1.jpg");?>" alt=""> 
            </div>
          </div>
        </div>
      </section> -->

      <!--       <section class="well well3 parallax" data-url="<?php echo base_url("assets/images/frontend/DYy9AVa.jpg");?>" data-mobile=" 
      true" data-speed="0.9">
        <div class="container">
          <div class="wrap text-center">
               <strong><h2> 
              Save time,<br />
              Quick Accees of Education Information,
              <small>
               Knowledge at your finger tips
              </small>
                 </h2> </strong>
            <p>
                
             The recent development of the web generates further momentum to the design and implementation of an online portal. An online portal is to provide a way for storing, presenting, gathering, sharing, processing, and using information. The portal is also to provide a distributed infrastructure for information processing, interaction and tool with user-friendly interface. This allows users to access the system remotely and instantly at anytime, anywhere.
            
            </p>
            <a href="#" class="btn btn-primary">read more <span class="fa-angle-right"></span></a>
          </div>  
        </div>        
      </section> -->

      <section class="well well2">
        <div class="container">
          <!--<h2>
            our 
            <small>
              clients
            </small>-->
          </h2>

         <!-- <div class="row offs1">
            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">                    
                  <img src="<?php echo base_url("assets/images/frontend/govt.png");?>" alt="">
                </a>
               <h6>Ministry Of Education</h6> 
              </li>
                
          </div> --> 
          
        </div>
      </section>

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">

   <!-- <div class="map">
      <div id="google-map" class="map_model" data-zoom="11"></div>
      <ul class="map_locations">
        <li data-x="37.083325" data-y="-1.039606" data-basic="<?php echo base_url("assets/images/gmap_marker.png");?>" data-active="<?php echo base_url("assets/images/gmap_marker_active.png");?>">
          <div class="location">
            <h3 class="txt-clr1">
              Core
              <small>
                Ict Consultancy
              </small>
            </h3>  
              <address>
                <dl>
                  <dt>Mobile: </dt>
                  <dd class="phone"><a href="callto:#"> +254-727-***-***</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd>1130,Nairobi</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm GMT M-Sat; &nbsp;&nbsp;  8am-12pm GMT Sat</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@coreict.co.ke</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
    
        <li data-x="-74.200000" data-y="40.683180" data-basic="<?php echo base_url("assets/images/gmap_marker.png");?>" data-active="<?php echo base_url("assets/images/gmap_marker_active.png");?>">
          <div class="location">
            <h3 class="txt-clr1">
              Core
              <small>
                Ict Consultancy
              </small>
            </h3>  
              <address>
                <dl>
                  <dt>Mobile: </dt>
                  <dd class="phone"><a href="callto:#"> +254-727-310-743</a></dd>
                </dl>
                <dl>
                  <dt>Address: </dt>
                  <dd>1130,Nairobi</dd>
                </dl>
                <dl>
                  <dt>Hours: </dt>
                  <dd> 6am-4pm GMT M-Sat; &nbsp;&nbsp;  8am-12pm GMT Sat</dd>
                </dl>
                <dl>
                  <dt> E-mail: </dt>
                  <dd><a href="mailto:#">info@coreict.co.ke</a></dd>
                </dl>
              </address>
            
          </div>
        </li>
      </ul>
    </div>-->

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
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/tm-scripts.js");?>"></script>

    
    <script src="<?php echo base_url("assets/jssor/modernizr.custom.js");?>"></script>
        <script src="<?php echo base_url("assets/jssor/jquery.cslider.js");?>"></script>    

  <!-- </script> -->  



    <script type="text/javascript">
    $(document).ready(function() {
         
        $(function() {
             
                $('#da-slider').cslider({
                    autoplay    : true, // auto play slider on load
                    bgincrement : 1050,
                    interval  : 10000  
                });
             
            });
         
    });
     

    </script>

      
  </body>
  </html>