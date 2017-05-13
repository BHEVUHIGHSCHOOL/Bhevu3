<?php require ('connection/conect.php');
ob_start();
session_start();
/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');*/

require ("signin.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bhevu High&reg;</title>

<!-- Bootstrap CSS -->

<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome CSS-->

<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom CSS -->

<link href="css/style.css" rel="stylesheet">

<!-- Animate CSS -->

<link href="assets/animate/animate.css" rel="stylesheet">

<!-- Owl Carousel -->

<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">

<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">

<!-- Favicon -->

<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">

</head>

<body>

<div id="dvLoading"></div>


<?php include ("Controller/requirements/header/header.php");?>
<!-- Banner Wrapper Start -->

<div class="banner-wrapper">

  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

    <!-- Overlay -->

    <div class="overlay"></div>

    <!-- Indicators -->

    <ol class="carousel-indicators">

      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>

      <li data-target="#bs-carousel" data-slide-to="1"></li>

      <li data-target="#bs-carousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner">

      <div class="item slides active">

        <div class="slide-1"></div>

        <div class="hero">

          <h1 class="animated1">Bhevu High School</h1>

          <h3 class="animated2">Aspire to Inspire........</h3>

        </div>

      </div>

      <div class="item slides">

        <div class="slide-2"></div>

        <div class="hero">

          <h1 class="animated1">Bhevu High School</h1>

          <h3 class="animated2">Aspire to Inspire........</h3>

        </div>

      </div>

      <div class="item slides">

        <div class="slide-3"></div>

        <div class="hero">

          <h1 class="animated1">Bhevu High School</h1>

          <h3 class="animated2">Aspire to Inspire........</h3>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- Banner Wrapper End -->

<!-- About Us -->

<div class="about-us">

  <div class="container">

    <div class="row">

      <div class="col-sm-12 col-md-8">

        <h2>HARD WORK &amp; PRESEVERANCE<br>

          IS THE <span> MOTHER OF SUCCESS</span></h2>

        <p><strong>Here is a bit of the history of the School:</strong>

Late in 2008, Principal(Gugu Ntshangase) was told that a new High school would be opening in the rural area of Roosboom, just outside Ladysmith. She was shocked to hear that there would be no school buildings by the time the learners arrived in January 2009. The new year began with learners sitting in the sun (there are very few trees and none near the site of the school) using lap desks. There were total of 64 learners in the first Grade 8 Class.</p>

        <a href="about-us.php">More...</a> </div>

      <div class="col-sm-12 col-md-4 pull-right hidden-sm"> <img src="Bhevu Pics/Edited/Logo/Bhevu Logo.jpg" alt="World-edu"> </div>

    </div>

  </div>

</div>

<!-- Callouts Wrapper Start -->

<div class="callouts-wrapper">

  <div class="container">

    <h2>Welcome to <span>Bhevu High</span></h2>

    <p class="center">I am very proud to welcome you to Bhevu High School website Ladysmith, KZN, South Africa.</p>

    <p class="center">This is where leaners and teachers are working together, and leaners are dedicated, well-behaved &amp; appriciate what their teachers do for them.</p>

    <div class="row">

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s">

        <div class="callouts">

          <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Fully Responsive</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>
				
        </div>

      </div>

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="callouts">

          <div class="icon"> <i class="fa fa-paint-brush" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Clean Design</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>

        </div>

      </div>

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.5s">

        <div class="callouts">

          <div class="icon"><i class="fa fa-magic" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Retina Ready</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>

        </div>

      </div>

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s">

        <div class="callouts">

          <div class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Multipurpose</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>

        </div>

      </div>

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.3s">

        <div class="callouts">

          <div class="icon"> <i class="fa fa-users" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Customer Support</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>

        </div>

      </div>

      <div class="col-sm-6 col-md-4 wow fadeIn animated" data-wow-duration="1.5s" data-wow-delay="0.5s">

        <div class="callouts">

          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>

          <div class="content">

            <h3>Marketing</h3>

            <p>Coccaecat cupidatat aliqu proident sunt.</p>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- Callouts Wrapper End -->

<!-- Satisfied Wrapper start -->

<div class="satisfied-wrapper">

  <div class="container">

    <h2>Statistics of <span><strong>Bhevu High School</strong></span></h2>

    <p class="center">Bhevu is proof that hard work and perseverance can overcome all odds.</p>

    <p class="center">This school got 100% rate on it first Matric on 2013.</p>

    <div class="statistics">

      <div class="col-sm-3 counter"> <i class="fa fa-list-alt" aria-hidden="true"></i>

        <div class="number animateNumber" data-num="01"> <span>01</span></div>

        <p>Our Branches</p>

      </div>

      <div class="col-sm-3 counter"> <i class="fa fa-user" aria-hidden="true"></i>

        <div class="number animateNumber" data-num="50"> <span>50</span></div>

        <p>Our teachers</p>

      </div>

      <div class="col-sm-3 counter"> <i class="fa fa-users" aria-hidden="true"></i>

        <div class="number animateNumber" data-num="600"> <span>600</span></div>

        <p>Students</p>

      </div>

      <div class="col-sm-3 counter"> <i class="fa fa-graduation-cap" aria-hidden="true"></i>

        <div class="number animateNumber" data-num="368"> <span>368</span></div>

        <p>Graduates</p>

      </div>

    </div>

  </div>

</div>

<!-- satisfied Wrapper End -->

<!-- Call to Action start -->

<div class="call-to-action">

  <div class="container">

    <!-- <h3><strong>B.H.S.</strong></h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. printing and typesetting industry.</p>

    <a href="javascript:void(0)">Sign Up</a> --> </div>

</div>

<!-- Call to Action End -->

<!-- Faculty Wrapper Start -->

<div class="team-wrapper">

  <div class="container">

    <div class="row">

      <h2>Meet The <span>Teachers</span></h2>

      <div id="owl-demo" class="owl-carousel owl-theme">

        <div class="item">

          <div class="img-box"> <img src="images/team-img1.jpg" alt="Team1" title="Team1" />

            <div class="text-center">

              <h4>Sarah Norris</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img2.jpg" alt="Team2" title="Team2" />

            <div class="text-center">

              <h4>Doris Wilson</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img3.jpg" alt="Team3" title="Team3" />

            <div class="text-center">

              <h4>Anne Kemper</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img4.jpg" alt="Team4" title="Team4" />

            <div class="text-center">

              <h4>Ruth Carman</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img1.jpg" alt="Team1" title="Team1" />

            <div class="text-center">

              <h4>Sarah Norris</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img2.jpg" alt="Team2" title="Team2" />

            <div class="text-center">

              <h4>Doris Wilson</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img3.jpg" alt="Team3" title="Team3" />

            <div class="text-center">

              <h4>Anne Kemper</h4>

              <p></p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img4.jpg" alt="Team4" title="Team4" />

            <div class="text-center">

              <h4>Ruth Carman</h4>

              <p></p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<!-- Faculty Wrapper End -->

<!-- Principal Wrapper Start -->

<div class="testimonials-wrapper">

  <div class="container">

    <h2>Principal</h2>

    <div id="testimonials" class="owl-carousel owl-theme" style="padding-left:33%;">

      <div class="item"> <a href="javascript:void(0)" data-toggle="modal" data-target="#5">

              <img src="Bhevu Pics/Edited/Principal/principal1.jpg" alt="Mrs. Ntshangase(Principal)"> </a>

        <p>I am very proud to tell you about Bhevu High School Ladysmith, KZN, South Africa. Bhevu is proof that hard work and perseverance can overcome all odds. Under the guidance of the principal, Gugu Ntshangase, the school has grown from literally learners sitting on the rocks with lap desks, to what it is now. She and her team of dedicated teachers provide a stable environment where teaching and learning continues even under very severe conditions. Her learners are dedicated, well-behaved young people who appreciate what their teachers do for them.</p>

        <a href="about-us.php"><h3>- G. F. <span>Ntshangase</span></h3></a>

      </div>

      <!-- If i want to put onother person -->

      <!-- <div class="item"> <img src="Bhevu Pics/Edited/Principal/principal1.jpg" alt="G. F. Ntshangase(Principal)">

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

        <h3>- Mary Williams <span>Service manager</span></h3>

      </div> -->

    </div>

  </div>

</div>

<!-- Principal Wrapper End -->

<!-- sponsers Start -->

<div class="sponsers">

  <div class="container">

    <h2>Our <span>Sponsers</span></h2>

    <div id="sponsers" class="owl-carousel owl-theme">

      <div class="item"> <img src="images/edu-logo1.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo2.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo3.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo4.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo5.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo6.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo1.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo2.jpg" alt="Education Logos"></div>

      <div class="item"> <img src="images/edu-logo3.jpg" alt="Education Logos"></div>

    </div>

  </div>

</div>

<!-- sponsers End -->

<!-- Gallery Start -->
<div class="gal-container full-width">
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#1">
              <div class="caption">
                <h4>Netball Team</h4>
                <p><strong>.........</strong></p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="Bhevu Pics/Edited/Gallery/netball.jpg" alt="Netbal Team"> </a>
              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Gallery/netball full.jpg" alt="Gallery Image"> </div>
                    <div class="col-md-12 description">
                      <h4>Netball Team</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#2">
              <div class="caption">
                <h4>Indlamu</h4>
                <p>...............</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="Bhevu Pics/Edited/Gallery/IndlamuFull.JPG" alt="Gallery Image"> </a>
              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Gallery/Indlamu.JPG" alt="Gallery Image"> </div>
                    <div class="col-md-12 description">
                      <h4>Indlamu Dance</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#3">
              <div class="caption">
                <h4>Gallery Image3</h4>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="images/gallery-img3.jpg" alt="Gallery Image"> </a>
              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="images/gallery-img3.jpg" alt="Gallery Image"> </div>
                    <div class="col-md-12 description">
                      <h4>This is the third one on my Gallery</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#4">
              <div class="caption">
                <h4>Gallery Image4</h4>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="images/gallery-img4.jpg" alt="Gallery Image"> </a>
              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="images/gallery-img4.jpg" alt="Gallery Image"> </div>
                    <div class="col-md-12 description">
                      <h4>This is the fourth one on my Gallery</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> 
              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Principal/principal2.jpg" alt="Mrs. Ntshangase(Principal)"> </div>
                    <div class="col-md-12 description">
                      <h4>Mrs. G. F. Ntshangase (Principal)</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
<!-- Gallery End -->

<?php include ("Controller/footer/footer.php");?>

<!-- Copy Rights Start -->

<div class="footer-wrapper">

  <div class="container">

    <p>&copy; Copyright 

	<script type="text/javascript">

	var d=new Date();

	document.write(d.getFullYear());

	</script> 

      Bhevu High School | All Rights Reserved.</p>

  </div>

  <a id="scrool-top" href="javascript:void(0)"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a> 

</div>

<!-- Copy Rights End --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="assets/jquery/jquery-3.1.1.min.js"></script> 

<script src="assets/jquery/jquery.animateNumber.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="assets/easing/jquery.easing.min.js"></script> 

<script src="assets/bootstrap/js/bootstrap.min.js"></script> 

<script src="assets/wow/wow.min.js"></script> 

<script src="assets/owl-carousel/js/owl.carousel.js"></script> 

<script src="js/custom.js"></script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-83282272-2', 'auto');

  ga('send', 'pageview');



</script>

</body>

</html>