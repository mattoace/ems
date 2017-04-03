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

    <script src='<?php echo base_url("assets/js/jssor.slider-22.2.16.mini.js");?>'></script>

    <link rel="stylesheet" href="<?php echo base_url("assets/jssor/dc_parallax.css");?>">


    <script type="text/javascript">
        jQuery(document).ready(function ($) {


            var _SlideshowTransitions = [{
            $Duration: 600,
            $Delay: 50,
            $Cols: 8,
            $Rows: 4,
            $FlyDirection: 5,
            $Formation:
            $JssorSlideshowFormations$.$FormationZigZag,
            $Assembly: 1028,
            $ChessMode: { $Column: 3, $Row: 12 },
            $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad },
            $Opacity: 2
        }];
          var options = {
              $DragOrientation: 3,
              $AutoPlay: true,
              $SlideDuration: 1500,
              $AutoPlayInterval: 4500,
              $SlideshowOptions: {                                //Options which specifies enable slideshow or not
                  $Class: $JssorSlideshowRunner$,                 //Class to create instance of slideshow
                  $Transitions: _SlideshowTransitions,            //Transitions to play slide, see jssor slideshow transition builder
                  $TransitionsOrder: 1,                           //The way to choose transition to play slide, 1 Sequence, 0 Random
                  $ShowLink: 2,                                   //0 After Slideshow, 2 Always
                  $ContentMode: false                             //Whether to trait content as slide, otherwise trait an image as slide
              },
                $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
          };
          var jssor_1_slider = new $JssorSlider$("jssor_1", options);

          /*  var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

           

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                 $TransitionsOrder: 1,                           //The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: 2,                                   //0 After Slideshow, 2 Always
                $ContentMode: false
                //$Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);*/

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo base_url("assets/images/b05.png");?>') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('<?php echo base_url("assets/images/a22.png");?>') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>



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
            <a data-type='rd-navbar-brand'  href="./">e-shule<small>portal</small></a>
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
          <a href="<?php echo base_url("index.php/signup");?>"> <img style="height:30px;margin-top:0.2%;" src="<?php echo base_url("assets/images/frontend/sign-up.png");?>" class="loginimage" alt=""></a>
          <a href="<?php echo base_url("index.php/signin");?>"><img style="height:30px;margin-top:0.2%;"  src="<?php echo base_url("assets/images/frontend/sign-in.png");?>" class="loginimage" alt=""></a>     
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
     





    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:310px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo base_url("assets/images/loading.gif");?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/frontend/newslider5.jpg");?>" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">e-shule</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">education management system</div>

                <!-- 
                 <div data-u="caption" data-t="0" style="position:absolute;top:10px;left:600px;width:245px;height:300px;z-index:0;">
                    <img style="position:absolute;top:0px;left:0px;width:445px;height:300px;z-index:0;" src="<?php echo base_url("assets/images/frontend/girl.png");?>" />              
                </div>

               <div data-u="caption" data-t="0" style="position:absolute;top:100px;left:600px;width:445px;height:300px;z-index:0;">
                    <img style="position:absolute;top:0px;left:0px;width:445px;height:300px;z-index:0;" src="<?php echo base_url("assets/images/c-phone.png");?>" />
                    <img data-u="caption" data-t="1" style="position:absolute;top:70px;left:130px;width:102px;height:78px;z-index:0;" src="<?php echo base_url("assets/images/c-jssor-slider.png");?>" />
                    <img data-u="caption" data-t="2" style="position:absolute;top:153px;left:163px;width:80px;height:53px;z-index:0;" src="<?php echo base_url("assets/images/c-text.png");?>" />
                    <img data-u="caption" data-t="3" style="position:absolute;top:60px;left:220px;width:140px;height:90px;z-index:0;" src="<?php echo base_url("assets/images/c-fruit.png");?>" />
                    <img data-u="caption" data-t="4" style="position:absolute;top:-123px;left:121px;width:200px;height:155px;z-index:0;" src="<?php echo base_url("assets/images/c-navigator.png");?>" />
                </div> -->
             <!--    <div data-u="caption" data-t="5" style="position:absolute;top:10px;left:650px;width:470px;height:220px;z-index:0;">
                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;z-index:0;" src="<?php echo base_url("assets/images/c-phone-horizontal.png");?>" />
                    <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0; overflow:hidden;">
                        <img data-u="caption" data-t="6" style="position:absolute;top:0px;left:0px;width:379px;height:213px;z-index:0;" src="<?php echo base_url("assets/images/c-slide-1.jpg");?>" />
                        <img data-u="caption" data-t="7" style="position:absolute;top:0px;left:379px;width:379px;height:213px;z-index:0;" src="<?php echo base_url("assets/images/c-slide-3.jpg");?>" />
                    </div>
                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0;" src="<?php echo base_url("assets/images/c-navigator-horizontal.png");?>" />
                    <img data-u="caption" data-t="8" style="position:absolute;top:740px;left:1600px;width:257px;height:300px;z-index:0;" src="<?php echo base_url("assets/images/c-finger-pointing.png");?>" />
                </div> -->
            </div>

            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/frontend/newslider3.jpg");?>" />
            </div>


            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/frontend/slider4.jpg");?>" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div>
                <img data-u="image" src="<?php echo base_url("assets/images/frontend/laptopproject4.jpg");?>" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>




     
</div> <!-- /da-slider -->
</div>
<!-- DC Parallax Slider End -->

   
        </div>
    

         <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
              <div class="container">
              
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <p>
                    <h3>e-shule-Portal</h3>
                    The e-shule online data-driven portal enables each public primary school shall create an account, upload and store KCPE and internal examinations’ data in a centralized database. 
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


<!-- 
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
          </div> -->

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