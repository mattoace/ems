<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url("assets/images/favicon.ico");?>" type="image/x-icon">
    <title>CONTACTS</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/css/bootstrap.css");?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/front.css");?>">
    <!-- Links -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/contact-form.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/google-map.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/search.css");?>">

    <!--JS-->
    <script src="<?php echo base_url("assets/js/jquery.js");?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-migrate-1.2.1.min.js");?>"></script>
    <!--<script src="<?php echo base_url("assets/js/rd-smoothscroll.min.js");?>"></script>-->


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="<?php echo base_url("assets/http://windows.microsoft.com/en-US/internet-explorer/..");?>">
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
        <div class="container customnavbar" >

        <nav class="navbar navbar-default navbar-static-top pull-left">

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li>
                  <a href="./">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url("index.php/about");?>">ABOUT</a>
                </li>               
                <li>
                  <a href="<?php echo base_url("index.php/learning_facilities");?>">MY SCHOOL</a>
                </li>                 
                <li class="active">
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


         <section class="well well4">
        <div class="container">
         
              <h4>
               
                <small>
                   For more information
                </small>
              </h4>

                <p>Reach us for more inquiries :
                  <p> Location :
                  <p> Telephone :
                   <p>Email :  
              </div>     

      <section class="well well4">
        <div class="container">
         
              <h4>
                Contact 
                <small>
                 form
                </small>
              </h4>
              <form id="contact-form" class='contact-form'>
                <div class="contact-form-loader"></div>
                <fieldset>
                  <label class="name">
                    <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid name.</span>
                  </label>              
              
                  <label class="phone">
                    <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@JustNumbers"/>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid phone.</span>
                  </label>

                  <label class="email">
                    <input type="text" name="email" placeholder="Email:" value="" data-constraints="@Required @Email"/>
                    
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*This is not a valid email.</span>
                  </label>
              
                  <label class="message">
                    <textarea name="message" placeholder="Message" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              
                    <span class="empty-message">*This field is required.</span>
                    <span class="error-message">*The message is too short.</span>
                  </label>
              
                 <!--  <label class="recaptcha"> <span class="empty-message">*This field is required.</span> </label> -->
              
                  <div class="btn-wr text-primary">
                    <a class="btn btn-primary" href="#" data-type="submit">Submit comment</a>
                  </div>
                </fieldset>
                <div class="modal fade response-message">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          &times;
                        </button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        You message has been sent! We will be in touch soon.
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
                     
        </div>        
      </section>

      

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
