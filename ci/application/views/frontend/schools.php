<?php  
$schoolid = $_COOKIE['schoolid'];
//$schoolid = 13;

$query = $this->db->query('SELECT * FROM ems_institution WHERE id = "'.$schoolid.'"'); 
$row = $query->result();

$myshool = $row[0]->institution_name;
$moto = "Striving for excelence";
$aboutheading = "We provide excellent studies.";
$aboutus = "More information about it";
?>
<Script>
var schoolid = "<?php echo $schoolid ; ?>"; 
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>My School</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url("assets/css/schoolsstyle.css");?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo base_url("assets/css/font-awesome.css");?>" rel="stylesheet" type="text/css"> 
<link href="<?php echo base_url("assets/css/animate.css");?>" rel="stylesheet" type="text/css"> 
<link rel="stylesheet" href="<?php echo base_url("assets/css/autoComplete.css ");?>" >
<link href="<?php echo base_url("assets/morris.js-0.5.1/morris.css");?>" rel="stylesheet" type="text/css">



<!--[if lt IE 9]>
    <script src="<?php echo base_url("assets/js/respond-1.1.0.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/html5shiv.js");?>"></script>
    <script src="<?php echo base_url("assets/js/html5element.js");?>"></script>
<![endif]--> 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="img/logo.png" alt=""></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">About <?php echo $myshool; ?></a></li>
			  <li><a href="#service" class="scroll-link">Facilities</a></li>
			  <li><a href="#Portfolio" class="scroll-link">Performance</a></li>
			  <li><a href="#clients" class="scroll-link">Students</a></li>
			  <li><a href="#team" class="scroll-link">Teachers</a></li>
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 
<style>

.top_cont_outer {
    background: repeat url("../assets/images/frontend/back1.png");   
}
.bannerImg.zoomIn.wow.animated.animated {
    border-radius: 10%;
    opacity: 0.7;
    width: 25%;
    height: 200px;
    }
 #header_wrapper {
      background-image: url("../assets/images/darkblue.jpg");
      background-size: 200% auto; 
 } 
  table.dataTable tbody tr {
  /*  line-height: 2px !important;*/
    font-size:12px;
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
.section-title > h2 {
    background: #21c2f8 none repeat scroll 0 0;
    color: white;
}
table.dataTable tr{ background-color:  #dde7f0; }
table.dataTable tr:nth-child(even)  { background-color: #C7E3FB;  }
thead {
    color: #21c2f8;
}


</style>
<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated" > 
              <h2>Need to know more about <strong><?php echo $myshool; ?></strong>?</h2>
              <p><?php echo $moto; ?>.</p>
              <a href="#service" class="read_more2">Read more</a> </div>
          </div>
          <div>
            <?php   $imagenumber = rand(1, 5); 
                $imageurl = "assets/images/frontend/custom/image".$imagenumber.".jpg"; 
            ?>
			<img src="<?php echo base_url($imageurl);?>" class="bannerImg zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>About Us</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="<?php echo base_url("assets/images/frontend/about.png");?>" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
			<h3><?php echo $aboutheading; ?></h3><br/>          
<p><?php echo $aboutus; ?></p>
</div>
<div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>       
	   </div>
      	
      </div>
	  
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 
<?php
$item1 = "Libraries";
$item2 = "Clinic";
$item3 = "Canteen";

  $query = $this->db->query('SELECT * FROM ems_facilities WHERE inst_id = "'.$schoolid.'"'); 
  $row = $query->result();
?>

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Facilities</h2>
    <div class="service_wrapper">
      <div class="row">

<?php

$imagenumber = rand(1, 5); 
$imageurl = "../assets/images/frontend/custom/image".$imagenumber.".jpg";             
    
$i = 1;
foreach ($row  as $key => $facilities) { 


       echo '<div class="col-lg-4">';
          echo '<div class="service_block">';
            echo '<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android1">'.$i.'</i></span> </div>';
            echo '<h3 class="animated fadeInUp wow">'.$facilities->facility_name.'</h3>';
            echo '<p class="animated fadeInDown wow">'.$facilities->description.'</p>';
          echo '</div>';
        echo '</div>';
        $i++;

}


?>



      </div>
	   </div>
  </div>
</section>
<!--Service-->

<?php
$performance_heading = "Performace";
$examination1 = "Resulsts Term 1";
$examination2 = "Results Term 2";
?>


<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2><?php echo $performance_heading;  ?></h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    


      <div class ="row">
              <div class ="col-md-6">
                   <h4>County Performace</h4>
                    <div id="countychart" style="height: 350px;"></div>
                    County Performance
              </div>
              <div class ="col-md-6">
                    <h4>Sub-County Performace</h4>
                    <div id="subcountychart" style="height: 350px;"></div>
                    Sub-County Performance 
             </div>
      </div>
    
  </div>

  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<?php
$studentsHeading = "Students";
$heading1 = "Students Information";
$heading2 = "Students Information";
?>


<section class="page_section" id="clients"><!--page_section-->
  <h2><?php  echo $studentsHeading;  ?></h2> 
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container"> 


          <div class ="row">

            <div class ="col-md-6">
            <div id="contents" > 
              <div id="searchfieldcounty" >
                <form><h3>Select Class</h3><input type="text" name="county" class="biginput" style="width:100%;"  id="classes"></form>
              </div>     
              <div id="outputbox2">
                <p id="outputcontent2"></p>
              </div>
            </div>
          </div>
       
          <div class ="col-md-6">
              <div id="contents" >
              <div id="searchfieldschool" >
                <form><h3>Select a stream (optional) :</h3><input type="text" name="school" class="biginput" style="width:100%;" id="stream"></form>
              </div>     
              <div id="outputbox3">
                <p id="outputcontent3"></p>
              </div>
            </div>
          </div>
          </div>

  </div>


                                      <div class="well" style="background-color:#DDE7F0;">
                                                <section>
                                                    <table id="myView" class="cdataTable" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>First Name</th>
                                                               <th>Second Name</th>
                                                                <th>Last Name</th>
                                                                <th>Address</th>
                                                                <th>Town</th>                                                               
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </section>
                                            </div>

</div>
</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Teachers</h2>
    <h6>Information on teachers</h6>

<div class="member-area">
					<div class="row">
						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".1s">
									<div class="inner-container">
										<div class="author-avatar">									
											<!--<img class="img-circle" src="img/team_pic1.jpg" alt="Team Menber">-->
										</div><!-- /.author-avatar -->

										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Teacher Name
												</h4>
												<span class="designation">
												More on Teacher
												</span>
											</div><!-- /.member-top -->

											<p>
												More
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>

						<div class="col-md-6">
							<div class="member wow bounceInUp animated">
								<div class="member-container" data-wow-delay=".3s">
									<div class="inner-container">
										<div class="author-avatar">									
											<!--<img class="img-circle" src="img/team_pic2.jpg" alt="Team Menber">-->
										</div><!-- /.author-avatar -->
										<div class="member-details">
											<div class="member-top">									
												<h4 class="name">
													Teacher Name
												</h4>
												<span class="designation">
													Desc
												</span>
											</div><!-- /.member-top -->
											<p>
												More
											</p>
											<div class="member-social-link">
												<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>
												<a href="#" class="facebook-btn"><i class="fa fa-facebook"></i></a>
												<a href="#" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
												<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
											</div><!-- /.member-social-link -->
										</div><!-- /.member-details -->
									</div><!-- /.inner-container -->
								</div><!-- /.member-container -->
							</div><!-- /.member -->
						</div>
				

</div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
 
        <div class="col-lg-12 wow fadeInLeft delay-06s">
          <div class="form">
 			<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate> 
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control input-text" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control input-text" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control input-text" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary input-btn pull-right">Send</button><br />
		</form>
          </div>
        </div>
		
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2016,<a href="http://www.coreict.co.ke">Core Ict Consultancy</a>. </span> </div>
  </div>
</footer>

  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.0.min.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-scrolltofixed.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.nav.js");?>"></script> 
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.easing.1.3.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.isotope.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/wow.js");?>"></script> 
  <script src="<?php echo base_url("assets/js/jqBootstrapValidation.js");?>"></script>
  <script src="<?php echo base_url("assets/js/contact_me.js");?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js");?>"></script>
  <script src="<?php echo base_url("assets/js/jquery.autocomplete.min.js");?>"></script>

  <script src="<?php echo base_url("assets/morris.js-0.5.1/raphael-min.js");?>"></script>
  <script src="<?php echo base_url("assets/morris.js-0.5.1/morris.min.js");?>"></script>


  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/media/css/dataTables.bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/css/buttons.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/css/select.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/css/editor.dataTables.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/Editor/examples/resources/syntax/shCore.css"); ?>"> 

  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/media/js/jquery.dataTables.min.js"); ?>"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Buttons/js/dataTables.buttons.min.js"); ?>"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url("assets/DataTables-1.10.11/extensions/Select/js/dataTables.select.min.js"); ?>"></script>



<script>

$(function(){

var sections = "";
            $.ajax({
            async: false,  
            url: "/back/Load_CountyGraph.php?action=1",
            type: 'POST',
            data: {"id":schoolid},
            success: function(data) {                     
            sections = data;            
            }
        }); 

  sections = JSON.parse(sections); 

   new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'countychart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: sections,         
        // The name of the data record attribute that contains x-values.
        xkey: 'schoolid',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Mean Mark'],

        xLabels : "decade", 

        goals: [1.0, -1.0],

        lineColors: ['#E33848', '#21C2F8'],

        hideHover: 'auto' ,

        xLabelFormat: function(d) {
                    return "Education Institutions in the county"; 
                    },

      });


  var sections = "";
            $.ajax({
            async: false,  
            url: "/back/Load_CountyGraph.php?action=2",
            type: 'POST',
            data: {"id":schoolid},
            success: function(data) {                     
            sections = data;            
            }
        }); 

  sections = JSON.parse(sections); 

   new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'subcountychart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: sections,         
        // The name of the data record attribute that contains x-values.
        xkey: 'schoolid',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Mean Mark'],

        xLabels : "decade", 

        goals: [1.0, -1.0],

        lineColors: ['#E33848', '#21C2F8'],

        hideHover: 'auto' ,

        xLabelFormat: function(d) {
                    return "Education Institutions in the sub county"; 
                    },
      });



classes = $('#classes');
stream = $('#stream');

  var myelement2 = []; 
       
        $.ajax({
            async: false,  
            url: "/back/Load_Classes.php?id="+schoolid,
            type: 'POST',
            success: function(data) {                     
                myelement2[0] = data;                   
            }
        });
        
  var ctext2 = eval(myelement2[0]); 
    $('#classes').autocomplete({
    lookup: ctext2,
    onSelect: function (suggestion) {      
      loadStreams(suggestion.data);
      loadGrid(suggestion.data,stream.val(),schoolid);
    }
  });


  $('#classes').val(ctext2[0].value);

  function loadStreams(classid){


        var myelement3 = []; 
             
              $.ajax({
                  async: false,  
                  url: "/back/Load_Stream.php?id="+classid,
                  type: 'POST',
                  success: function(data) {                     
                      myelement3[0] = data;                   
                  }
              });
              
        var ctext3 = eval(myelement3[0]); 
          $('#stream').autocomplete({
          lookup: ctext3,
          onSelect: function (suggestion) {      
            loadGrid(classes.val(),suggestion.data,schoolid);
          }
        });

      if(ctext3){
         $('#stream').val(ctext3[0].value);
      }      


    }


    loadUrl = "/back/Load_Students.php?classid="+ctext2[0].data+"&streamid=0&institution=13"; 
       
    table = $('#myView').DataTable({ 
                "paging":   false,
                "ordering": false,
                "info":     false,         
                "processing": true, 
                "serverSide": true, 
                "order": [],          
               
                "ajax": {
                    "url": loadUrl,  
                    "type": "POST"
                },
                    select: {
              style:    'os',
              selector: 'td:first-child'
            },
                       
              "columnDefs": [
                { 
                    "targets": [ 0 ], 
                    "orderable": false, 
                },
                {
                        "targets": [ 0 ],
                        "visible": false
                 }
                ]
         
            });


    function loadGrid(classid,streamid,institution){
      loadUrl = "/back/Load_Students.php?classid="+classid+"&streamid="+streamid+"&institution="+institution;
      table.ajax.url(loadUrl).load(); 
    }



 });   

</script>

</body>
</html>