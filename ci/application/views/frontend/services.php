<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url("assets/images/favicon.ico");?>" type="image/x-icon">
    <title>SERVICES</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/front.css");?>">
    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.fancybox.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/search.css");?>">

    <!--JS-->
    <script src="<?php echo base_url("assets/js/jquery.js");?>"></script>
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
    <script src="<?php echo base_url("assets/js/device.min.js");?>"></script>
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
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li>
                  <a href="./">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url("index.php/about");?>">ABOUT</a>
                </li>
                <li class="dropdown">
                  <a href="#">PROJECTS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?php echo base_url("index.php/signin");?>">Education Management System</a>
                    </li>
                   <!-- <li>
                      <a href="#">Dolor sit amet  </a>                      
                    </li>
                    <li>
                      <a href="#">Conse ctetur </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Latest</a>
                          </li>
                          <li>
                            <a href="#">Archive</a>
                          </li>                      
                        </ul>
                    </li>-->
                  </ul>
                </li>
                <li>
                  <a href="<?php echo base_url("index.php/learning_facilities");?>">MY SCHOOL</a>
                </li>                
                <li>
                  <a href="<?php echo base_url("index.php/services");?>">SERVICES</a>
                </li>
                
                <li>
                  <a href="<?php echo base_url("index.php/contacts");?>">CONTACTS</a>
                </li>
              </ul>                           
            </div>
        </nav>   
        <form class="search-form" action="<?php echo base_url("index.php/search");?>" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>
        </div>

      </div>  
    </header>
  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        <div class="container">
          <h2 class='offs5'>
            featured 
            <small>
              services
            </small>            
          </h2>
          <div class="row offs3">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <a class="thumb" data-fancybox-group='1' href="<?php echo base_url("assets/images/frontend/african-american-scholarships.jpg");?>">              
                <img class="" src="<?php echo base_url("assets/images/frontend/african-american-scholarships.jpg");?>" alt="">
                <span class='thumb_overlay'></span>
              </a>
              <p class="lead">
                Education Managemtnt System
              </p>
              <p class="ins767-1">
                This is a web portal to store and analyze schools’ data to provide information to various users. 
                <br /><br />
                The portal will be a framework where a particular school can communicate to the parents, alumni and other development partners via emails, social media and bulk sms service. <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <a class="thumb" data-fancybox-group='1' href="<?php echo base_url("assets/images/frontend/education-news-africa2.jpg");?>"> <!--page-3_img2_original.jpg-->             
                <img class="" src="<?php echo base_url("assets/images/frontend/education-news-africa2.jpg");?>" alt="">
                <span class='thumb_overlay'></span>
              </a>  
              <p class="lead">
                Education Services
              </p>
              <p class="ins767-1">
               This is a program to improve educational quality ,Kenya has been the development network pioneer in the use of computers in the classrooms.
                <br /><br />
               This will make information on education more accessible to each and every sector of the economy.<a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <a class="thumb" data-fancybox-group='1' href="<?php echo base_url("assets/images/frontend/africanHigh.jpg");?>"> <!--page-3_img3_original.jpg-->             
                <img class="" src="<?php echo base_url("assets/images/frontend/africanHigh.jpg");?>" alt="">
                <span class='thumb_overlay'></span>
              </a>  
              <p class="lead">
               Centralizing Kenyan Education Information
              </p>
              <p class="ins767-1">
               Education is widely seen as one of the most promising paths for individuals to realize better , more productive lives and as one of the primary drivers of national economic development.The citizens and the government of Kenya have invested heavliy in improving both the access and quality of education ,in an effort to realize the promise of education as well as to achieve the education-related Millennium Development Goals and Vision 2030.
               <br /><br /><a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="well well6 parallax parallax1" data-url="<?php echo base_url("assets/images/parallax2.jpg");?>" data-mobile="
      true" data-speed="0.7">
        <div class="container">
          <div class="wrap text-center">
            <strong>
              WE OFFER<br />
              IDEAS THAT RAISE
              <small>
                YOUR BUSINESS
              </small>
            </strong>            
          </div>  
        </div>        
      </section>

      <!--<section class="well well2">
        <div class="container">
        <h2>
          services
          <small>
            list
          </small>
        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                  <a href="#">Lorem ipsum dolor sit amet</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Conse ctetur adipisicing elit sed do</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Eiusmod tempor incididunt</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <p>
                Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac magna nisi. Integer dictum sagittis vulputate. Nulla a purus felis. Nam nec egestas justo. Nunc id risus neque. Pellentesque vestibulum lectus sed ex efficitur lacinia. Sed efficitur nunc sed rhoncus tempor. Quisque ultricies
                <br /><br />
                Maecenas dignissim, metus a luctus lacinia, nisl purus commodo tortor, vel rutrum urna arcu non massa. Quisque tellus velit, dignissim interdum enim in, sodales suscipit purus. Curabitur et tincidunt elit. Phasellus pulvinar bibendum dapibus. Sed mollis sapien in justo tincidunt, quis venenatis orci ornare. Proin sed nisi ut diam volutpat malesuada. Nullam cursus aliquet nunc 
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="well well4">
        <div class="container">
          <h2>
            services
            <small>
              overview
            </small>            
          </h2>
          <div class="row offs3">
            <div class="col-md-3 col-sm-6 col-xs-12"> 
              <img class="" src="<?php echo base_url("assets/images/page-3_img4.jpg");?>" alt="">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">             
              <p class="lead lead_offs2">
                Ut enim ad minim veniam quis
              </p>
              <p class="ins767-1">
                Suspendisse sit.Amet vehicula nisl, nec faucibus nisl. Proin ac ferme ntum orci, non semper metus. 
                <br /><br />
                Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nislulla <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 clear991"> 
              <img class="" src="<?php echo base_url("assets/images/page-3_img5.jpg");?>" alt="">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">             
              <p class="lead lead_offs2">
                Ut enim ad minim veniam quis
              </p>
              <p class="ins767-1">
                Suspendisse sit.Amet vehicula nisl, nec faucibus nisl. Proin ac ferme ntum orci, non semper metus. 
                <br /><br />
                Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nislulla <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>           
          </div>
          <div class="row row_offs">
            <div class="col-md-3 col-sm-6 col-xs-12"> 
              <img class="" src="<?php echo base_url("assets/images/page-3_img6.jpg");?>" alt="">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">             
              <p class="lead lead_offs2">
                Ut enim ad minim veniam quis
              </p>
              <p class="ins767-1">
                Suspendisse sit.Amet vehicula nisl, nec faucibus nisl. Proin ac ferme ntum orci, non semper metus. 
                <br /><br />
                Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nislulla <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 clear991"> 
              <img class="" src="<?php echo base_url("assets/images/page-3_img7.jpg");?>" alt="">
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">             
              <p class="lead lead_offs2">
                Ut enim ad minim veniam quis
              </p>
              <p class="ins767-1">
                Suspendisse sit.Amet vehicula nisl, nec faucibus nisl. Proin ac ferme ntum orci, non semper metus. 
                <br /><br />
                Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nislulla <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>           
          </div>
        </div>
      </section>

      --> 

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
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
    <script src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/tm-scripts.js");?>"></script>    
  <!-- </script> -->


  </body>
</html>
