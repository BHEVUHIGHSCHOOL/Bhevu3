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

<!-- Header Start -->

<header>

  <div class="top-wrapper hidden-xs">

    <div class="container">

      <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">

        <ul class="header-social-icons">

          <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>

          <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>

          <!--<li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>-->

          <!--<li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>-->

          <!--<li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->

          <!--<li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>-->

         <!--<li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>-->

        </ul>

      </div>

      <div class="col-md-8 col-sm-6">

        <ul class="top-right pull-right ">

        <?php

		  if(isset($_SESSION['username']) || isset($_SESSION['userid']))

		  {

			 echo "

			  <!-- Lgout -->

          <li class='register'><a href='javascript:void(0)'><i class='fa fa-user'></i>Logout</a>

            <div class='register-form'>

              <h4>Logout</h4>

              <form action='Logout.php' method='post'>

                <button type='submit' class='btn'>Logout</button>

              </form>

            </div>

          </li>";}
		  else

		  {

			  echo "

          <!-- Login -->

          <li class='login'><a href='javascript:void(0)'><i class='fa fa-lock'></i>Login</a>

            <div class='login-form'>

              <h4>Login</h4>

              <form action='' method='post'>

                <input type='text' name='username' placeholder='Username'>

                <input type='password' name='password' placeholder='Password'>
				<!--Button-->
				<button type='submit' name='login' class='btn'>Login</button>

              </form>

            </div>

          </li>
		  <!-- Apply -->

          <li class='register'><a href='Apply.php'><i class='fa fa-user'></i>Apply</a>

            <div class='register-form'>

              <h4>Apply</h4>
			  
			  <form action='Apply.php' method='post'>
				<!--Button-->
				<button type='submit' name='Apply' class='btn'>Apply</button>

              </form>

            </div>

           </li>";}
				
				if(isset($error)){echo $error;}
		  ?>
          </ul>

      </div>

    </div>

  </div>
  
  <div class="logo-bar hidden-xs">
    <div class="container">
      <!-- Logo -->
      <div class="row">
        <div class="col-sm-4"><a href="index.php"> <img src="Bhevu Pics/Edited/Logo/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;"></a> </div>
        <div class="col-sm-7">
          <ul class="contact-info pull-right">
            <li><i class="fa fa-phone"></i>
              <p> <span>Call us</span><br>
               062 569 8372</p>
            </li>
            <li><i class="fa fa-envelope"></i>
              <p><span>Email Us</span><br>
                <a href="mailto:lenjabulothabiso@gmail.com">lenjabulothabiso@gmail.com</a></p>
            </li>
          </ul>
        </div>
        <?php
			  if(isset($_SESSION['Register']))
			  {
				  $reg = $con -> query ("select * from learner where username = '$_SESSION[username]'");
					$resul = $reg ->fetch_array(MYSQLI_BOTH);
					{
						if($resul['Register'] == "Registered")
						{
							echo "<div class='col-sm-1'><a href=''><img src='Bhevu Pics/P.Ps/17362372_1955905461304830_1811470495680181031_n.jpg' alt='Profile Pic' style='width:60px; height:60px;' class='img-thumbnail'></a> </div>";
						}
					}
			  }
		?>
      </div>
    </div>
  </div>
  <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">

    <div class="container">

      <nav class="navbar navbar-default">

        <div class="row">

          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <a class="navbar-brand" href="index.php"><img src="Bhevu Pics/Edited/Logo/Bhevu Logo.jpg" alt="Bhevu Logo"/></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li class="active"><a href="index.php">Home</a></li>

              <li><a href="about-us.php">About us</a></li>

              <li><a href="contact-us.php">Contact Us</a></li>
              
              <!--Registerd Learner-->
			  <?php
			  if(isset($_SESSION['Register']))
			  {
				  $reg = $con -> query ("select * from learner where username = '$_SESSION[username]'");
					$resul = $reg ->fetch_array(MYSQLI_BOTH);
					{
						if($resul['Register'] == "Registered")
						{
							echo '<li><a href="Print.php">Proof of Reg.</a></li>';
							echo '<li><a href="Portal.php">View Portal</a></li>';
						}
						else if($resul['Register'] == "Not Registered")
						{
							$pic = $con -> query ("select * from images where username = '$_SESSION[username]'");
							$res = $pic ->fetch_array(MYSQLI_BOTH);
							{
								$_SESSION["availablereport"]=$res['docname'];
								if(($_SESSION["availablereport"]) == '')
								{
									echo '<li><a href="After-Confirm.php">upload report</a></li>';
								}
								else
								{
									echo '<li><a href="Waiting.php">Application Status</a></li>';
								}
							}
						}
					}
			  }
			  else if(isset($_SESSION['userid']))
			  {
				  echo '<li><a href="Admin-Page.php">Admin</a></li>';
			  }
			  ?>

            </ul>

          </div>

          <!-- /.navbar-collapse -->

        </div>

      </nav>

    </div>

  </div>

</header>

<!-- Header End -->

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

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img2.jpg" alt="Team2" title="Team2" />

            <div class="text-center">

              <h4>Doris Wilson</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img3.jpg" alt="Team3" title="Team3" />

            <div class="text-center">

              <h4>Anne Kemper</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img4.jpg" alt="Team4" title="Team4" />

            <div class="text-center">

              <h4>Ruth Carman</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img1.jpg" alt="Team1" title="Team1" />

            <div class="text-center">

              <h4>Sarah Norris</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img2.jpg" alt="Team2" title="Team2" />

            <div class="text-center">

              <h4>Doris Wilson</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img3.jpg" alt="Team3" title="Team3" />

            <div class="text-center">

              <h4>Anne Kemper</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

            </div>

          </div>

        </div>

        <div class="item">

          <div class="img-box"> <img src="images/team-img4.jpg" alt="Team4" title="Team4" />

            <div class="text-center">

              <h4>Ruth Carman</h4>

              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

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
                <h4>Indlamu Dance</h4>
                <p>...........</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="Bhevu Pics/Edited/Gallery/Indlamu.jpg" alt="Netbal Team"> </a>
              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Gallery/IndlamuFull.jpg" alt="Gallery Image"> </div>
                    <div class="col-md-12 description">
                      <h4></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#3">
              <div class="caption">
                <h4>School Soccer Team</h4>
                <p>............</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="Bhevu Pics/Edited/Gallery/Soccer.jpg" alt="Soccer Team"> </a>
              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Gallery/SoccerFull.jpg" alt="Soocer Team"> </div>
                    <div class="col-md-12 description">
                      <h4></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
            <div class="box"> <a href="javascript:void(0)" data-toggle="modal" data-target="#4">
              <div class="caption">
                <h4>Matric Dance Event</h4>
                <p>..........</p>
                <i class="fa fa-search" aria-hidden="true"></i> </div>
              <img src="Bhevu Pics/Edited/Gallery/MatricDance.jpg" alt="Matric Dance Event"></a>
              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-body"> <img src="Bhevu Pics/Edited/Gallery/MatricDanceFull.jpg" alt="Matric Dance Event"> </div>
                    <div class="col-md-12 description">
                      <h4></h4>
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

<!-- Footer Links Start-->

<footer>

  <div class="container">

    <div class="col-sm-3"><img src="Bhevu Pics/Edited/Logo/logo2.png" alt="World Education"> </div>

    <div class="col-sm-5">

      <div class="contactus">

        <h2>Contact Us</h2>

        <ul class="list-ul">

          <li><i class="fa fa-map-marker"></i>Department of State, 300 E-Block Building, USA</li>

          <li><i class="fa fa-phone"></i>0800 123 46 0000</li>

          <li><i class="fa fa-envelope"></i><a href="mailto:support@yourdomain.com">support@yourdomain.com</a></li>

        </ul>

      </div>

    </div>

    <!--<div class="col-sm-4 subscirbe pull-right">

      <h2>Newsletter</h2>

      <p class="sub"><span>Subscribe</span> to Our Newsletter to get Important Blog Posts &amp; Inside Scoops:</p>

      <div class="form">

        <input type="text" placeholder="Enter your Email" id="exampleInputName" class="form-control first">

        <input type="text" class="bttn" value="Subscribe">

      </div>

    </div>-->

  </div>

</footer>

<!-- Footer Links End -->

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