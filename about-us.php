<?php 
require ('connection/conect.php');
require ("signin.php");
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

<!-- Pre Loader -->

<div id="dvLoading"></div>

<!-- Header Start -->

<header>

  <div class="top-wrapper hidden-xs">

    <div class="container">

      <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">

        <ul class="header-social-icons">

          <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>

          <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>

          <li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>

          <li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>

          <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>

          <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>

          <li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>

        </ul>

      </div>

      <div class="col-md-8 col-sm-6">

        <ul class="top-right pull-right ">

      <?php include ("Controller/sign in/logins.php");?>

        </ul>

      </div>

    </div>

  </div>

  <div class="logo-bar hidden-xs">

    <div class="container">

      <!-- Logo -->

      <div class="row">

        <div class="col-sm-4"><a href="index.php"> <img src="Bhevu Pics/Edited/Logo/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;"></a> </div>

        <div class="col-sm-8">

          <ul class="contact-info pull-right">

            <li><i class="fa fa-phone"></i>

              <p> <span>Call us</span><br>

                +1-012-345-6789</p>

            </li>

            <li><i class="fa fa-envelope"></i>

              <p><span>Email Us</span><br>

                <a href="mailto:support@sbtechnosoft.com">support@sbtechnosoft.com</a></p>

            </li>

          </ul>

        </div>

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

            </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li><a href="index.php">Home</a></li>

              <!--<li class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elements <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li><a href="grid.html">Grid</a></li>

                  <li><a href="table.html">Tables</a></li>

                  <li><a href="tabs.html">Tabs</a></li>

                  <li><a href="accordions.html">Accordions</a></li>

                  <li><a href="forms.html">Forms</a></li>

                  <li><a href="buttons.html">Buttons</a></li>

                  <li><a href="lists.html">Lists</a></li>

                  <li><a href="typography.html">Typography</a></li>

                </ul>

              </li>

              <li class="dropdown mega-menu"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li>

                    <div class="row">

                      <div class="col-md-2 col-md-offset-1">

                        <ul class="list-unstyled">

                          <li><span>Eliments</span></li>

                          <li><a href="grid.html"><span class="fa fa-angle-right menu-icon"></span>Grid</a></li>

                          <li><a href="table.html"><span class="fa fa-angle-right menu-icon"></span>Tables</a></li>

                          <li><a href="tabs.html"><span class="fa fa-angle-right menu-icon"></span>Tabs</a></li>

                          <li><a href="accordions.html"><span class="fa fa-angle-right menu-icon"></span>Accordions</a></li>

                          <li><a href="forms.html"><span class="fa fa-angle-right menu-icon"></span>Forms</a></li>

                          <li><a href="buttons.html"><span class="fa fa-angle-right menu-icon"></span>Buttons</a></li>

                          <li><a href="lists.html"><span class="fa fa-angle-right menu-icon"></span>Lists</a></li>

                          <li><a href="typography.html"><span class="fa fa-angle-right menu-icon"></span>Typography</a></li>

                        </ul>

                      </div>

                      <div class="col-md-2">

                        <ul class="list-unstyled">

                          <li><span>Courses</span></li>

                          <li><a href="course-list.html"><span class="fa fa-angle-right menu-icon"></span>Course List</a></li>

                          <li><a href="course-grid.html"><span class="fa fa-angle-right menu-icon"></span>Course Grid</a></li>

                          <li><a href="course-details.html"><span class="fa fa-angle-right menu-icon"></span>Course Details</a></li>

                        </ul>

                      </div>

                      <div class="col-md-2">

                        <ul class="list-unstyled">

                          <li><span>News</span></li>

                          <li><a href="classic-news.html"><span class="fa fa-angle-right menu-icon"></span>Classic News</a></li>

                          <li><a href="grid-news.html"><span class="fa fa-angle-right menu-icon"></span>Grid News</a></li>

                          <li><a href="masonry-news.html"><span class="fa fa-angle-right menu-icon"></span>Masonry News</a></li>

                          <li><a href="news-post-page.html"><span class="fa fa-angle-right menu-icon"></span>News Post Page</a></li>

                        </ul>

                      </div>

                      <div class="col-md-2">

                        <ul class="list-unstyled">

                          <li><span>Gallery</span></li>

                          <li><a href="grid-gallery.html"><span class="fa fa-angle-right menu-icon"></span>Grid Gallery</a></li>

                          <li><a href="full-gallery.html"><span class="fa fa-angle-right menu-icon"></span>Full Width Gallery</a></li>

                          <li><a href="masonry-gallery.html"><span class="fa fa-angle-right menu-icon"></span>Masonry Gallery</a></li>

                          <li><a href="modern-gallery.html"><span class="fa fa-angle-right menu-icon"></span>Modern Gallery</a></li>

                        </ul>

                      </div>

                      <div class="col-md-2">

                        <ul class="list-unstyled">

                          <li><span>Pages</span></li>

                          <li><a href="about-us.html"><span class="fa fa-angle-right menu-icon"></span>About Us</a></li>

                          <li><a href="coming-soon.html"><span class="fa fa-angle-right menu-icon"></span>Coming Soon</a></li>

                          <li><a href="404.html"><span class="fa fa-angle-right menu-icon"></span>404</a></li>

                          <li><a href="faq.html"><span class="fa fa-angle-right menu-icon"></span>FAQ</a></li>

                        </ul>

                      </div>

                    </div>

                  </li>

                </ul>

              </li>

              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li><a href="course-list.html">Course List</a></li>

                  <li><a href="course-grid.html">Course Grid</a></li>

                  <li><a href="course-details.html">Course Details</a></li>

                </ul>

              </li>

              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li><a href="classic-news.html">Classic News</a></li>

                  <li><a href="grid-news.html">Grid News</a></li>

                  <li><a href="masonry-news.html">Masonry News</a></li>

                  <li><a href="news-post-page.html">News Post Page</a></li>

                </ul>

              </li>

              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li><a href="grid-gallery.html">Grid Gallery</a></li>

                  <li><a href="full-gallery.html">Full Width Gallery</a></li>

                  <li><a href="masonry-gallery.html">Masonry Gallery</a></li>

                  <li><a href="modern-gallery.html">Modern Gallery</a></li>

                </ul>

              </li>

              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="fa fa-angle-down"></i></a>

                <ul class="dropdown-menu">

                  <li><a href="about-us.html">About Us</a></li>

                  <li><a href="coming-soon.html">Coming Soon</a></li>

                  <li><a href="404.html">404</a></li>

                  <li><a href="faq.html">FAQ</a></li>

                </ul>

              </li>-->

              <li><a href="#">About Us</a></li>

              <li><a href="contact-us.php">Contact Us</a></li>
              
              <!--Registerd Learner-->
			  <?php include ("Controller/sign in/login_navs.php");?>

            </ul>

          </div>

          <!-- /.navbar-collapse -->

        </div>

      </nav>

    </div>

  </div>

</header>

<!-- Header End -->

<!-- Inner Banner Wrapper Start -->

<div class="inner-banner">

  <div class="container">

    <div class="col-sm-12">

      <h2>About Us</h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="index.php">Home</a></li>

        <li>About Us</li>

      </ul>

    </div>

  </div>

</div>

<!-- Inner Banner Wrapper End -->

<section class="inner-wrapper">

  <div class="container">

    <div class="row">

      <div class="inner-wrapper-main about-edu">

        <div class="col-sm-8">

          <h2>About Bhevu High School</h2>

          <p><em><strong><h4>Bhevu High School: Ladysmith KZN</h4></strong></em></p>

          <p>I am very proud to tell you about Bhevu High School Ladysmith, KZN, South Africa. Bhevu is proof that hard work and perseverance

          	  can overcome all pdds. Under the guidence of the principal, Gugu Ntshangase, the school has grown from literally learners sitting

              on the rocks with lap desks, to what it is now. She and her team of dedicated teachers provide a stable environment where teaching

              and learning continues even under very severe conditions. Her learners are dedicated, well-behaved young poeple who appriciate what thier

              teachers do for them.</p>

          <p><em><strong><h4>Here is a bit history of the school:</h4></strong></em>

             Late in 2008, Gugu was told that a new high school would be opening in the rural area of Roosboom, just outside Ladysmith.

          	 She was shocked to hear that there were would be no school buildings by the time the learners arrived in January 2009. The new year began with learners sitting

             in the sun (there are very few trees and none near the site of hte schhol) using lap desks. There were a total of 64 learnes in the first grade 8 class.</p>

          <p>A few months into the term, Gugu managed to persuad a <strong><a href="javascript:void(0)" data-toggle="modal" data-target="#2"><em style="color:#3460ED">local church</em></a></strong> to allow the leaners to use their building for teaching and learnign purposes. 

              That was the only permanent structure available to the learners. A local copmpany donated some desks and chairs and the learners began a difficult year

              cramped 4 to a desk in a very old, dilapidated building which leaks in the rain and allows the cold air in during winter. 

              There is no available electricity or water.</p>

           <p>2010 saw an increase in the number of the learners and the addition of a grade 9 class. It was only half way through this year

              	 that the Department gave the school two <a href="javascript:void(0)" data-toggle="modal" data-target="#3"><strong><em style="color:#3460ED">prefabricated temporarl classrooms</em></strong></a> which were only for teaching and learning late in the

                 year. Desks and chairs received by the school had to be housed in the church. One permanent toilet serves the children and staff,

                 as the other 5 portable toilets are some distance from the school in the neighbour's yard.</p>

           <p>Various local companies and churches have assisted where they can, providing everything from land and <strong><a href="javascript:void(0)" data-toggle="modal" data-target="#7"><em style="color:#3460ED">canvas tents</em></a></strong> which are used

               as classrooms, to <a href="javascript:void(0)" data-toggle="modal" data-target="#8"><strong><em style="color:#3460ED">blankets</em></strong></a> and food for the children. In 2011, there were 170 Grade 8 learners,

               159 Grade 9s &amp; 50 Grade 10 learners. There were two grade 8 "classrooms" (the church

               with 70 learners and one prefab class with 100 learners); 3 grade 9 "classrooms" (the three canvas tents which were donated

               each have about 53 learners in, three and four to a desk!) and the other prefab houses all 50 Grade 10 learners.</p>

           <p>In December 2011 the Department of Education built <a href="javascript:void(0)" data-toggle="modal" data-target="#1"><strong><em style="color:#3460ED">three permanent classrooms</em></strong></a> which are used by the grade 11

           	  learners in 2012. The school has also acquired a very big water tank which holds all the water that is needed at school. It is very 

              difficult to get water to refill the tanks. The Department also put a wire fence around the school property. The school now has a

              total of 520 learners in total!</p>

           <p>The ground around the school is not safe or conductive to sport other activities (there are many ditches and holes and there are muddy areas

           	  on an uneven slope). The toilets are kept apart from the school so when learners have to use them lose lots of teaching learning time

              because they have to walk far. All the school administration is done from back of the teacher's <a href="javascript:void(0)" data-toggle="modal" data-target="#4"><strong><em style="color:#3460ED">cars</em></strong></a> (those who have them) 

              &amp; the principal's office is a desk in the shade of the cars, outside! The notes and other school admin

              are put in a bookshelf at the <a href="javascript:void(0)" data-toggle="modal" data-target="#5"><strong><em style="color:#3460ED">back of the church</em></strong></a>.</p>

           <p>The school is in pesperate need of text books, library books, a photocopier for all their notes and exams; desks chairs,science 

           	  equipment ,sporting equipment etc. All things many schools in South Africa take for grantec. They also need a safe place to keep 

              these treasures.</p>

           <p>The Staff and children in this school need to know that people out there care and are willing to help. Those learners are the future

           	  of this country and if they see adults caring, helping, they will learn to do the same. We need to give them a chance in life. The 

              community is an extremly poor one and alomost all learners are part of the feeding scheme at the school (previously run by a church in town

              before the Government reinstituted a high school feeding programme). How will these children ever get the chance to feed themselves if their education

              is so lacking? They are really hard working children and only need a kick start to achieve. Their parents and the commmunity in general (both

              business/churches in town and individuals in the area) are extremly supportive of the principal and all her efforts. They know what

              this school can mean to their children and they are willing to do whatever it takes. They even asked local businesses for their packing 

              crates in order to build more classrooms for the children. <a href="javascript:void(0)" data-toggle="modal" data-target="#6"><strong><em style="color:#3460ED">They are willing to go work themselves</em></strong></a>. Let us help them too!

              The financial resources of the school are very limited as allocations from the department are based on the previous years' learner number.

              With the school growing an extra grade each year this simply not good enough. Other money (if parents can pay at all)! comes from 

              the poor famillies in the poverty stricken area. Business has been a great help but in the small town of Ladysmith there is only so much

              that can be done.</p>

           <p>Below are some photos of the school and thier staff. It will hopefully give you an idea of how special thes children are and how 

           	   deserving they are of a very bit of help they can get!</p>

        </div>

        <div class="gal-container full-width">

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box"> 

              <div class="modal fade" id="1" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/Edited/School/three classrooms.jpg" alt="Permanent Classrooms"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>3 Permanent Classrooms</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="2" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/Edited/School/church.jpg" alt="Local church"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Local Church</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="3" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/Edited/School/prefebs.jpg" alt="Prefebs"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Temporal Prefebs</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="4" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/Edited/School/office 2009.jpg" alt="office 2009"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Bhevu Office (2009)</strong></em></a></h4>

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

                    <div class="modal-body"> <img src="Bhevu Pics/4th CD/Bhevu High School 2009/SV104281.JPG" alt="2009"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Back of the church</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="6" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/4th CD/Bhevu High School 2009/Bhevu High School - DES CD/SV102233.JPG" alt="2009"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Hard working pupils(2009)</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="7" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/3rd CD/DSCN0746.JPG" alt="2009"> </div>

                    <div class="col-md-12 description">

                      <h4>Canvas Tents</h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 co-xs-12 gal-item">

            <div class="box">

              <div class="modal fade" id="8" tabindex="-1" role="dialog">

                <div class="modal-dialog" role="document">

                  <div class="modal-content">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                    <div class="modal-body"> <img src="Bhevu Pics/3rd CD/DSCN0856.JPG" alt="2009"> </div>

                    <div class="col-md-12 description">

                      <h4><a href="#"><em style="color:#3460ED"><strong>Blankets</strong></em></a></h4>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <div class="about-callouts">

          <div class="col-sm-12 col-md-8 no-space-right">

            <div class="col-sm-6 about-callout">

              <h4>Teachers used their cars as the office</h4>

              <p><a href="grid-gallery.html"><img src="Bhevu Pics/4th CD/Bhevu High School 2009/SV104246.JPG" alt="2009 office" width="1000px auto" height="1100px"></a></p>

            </div>

            <div class="col-sm-6 about-callout white">

              <h4>Lorem Ipsum is simply</h4><br/>

              <p><a><img src="Bhevu Pics/4th CD/Bhevu High School 2009/Bhevu High School - DES CD/SV101592.JPG" width="1000px" height="1100px" alt="Building school(2009)"></a></p>

            </div>

            <div class="col-sm-6 about-callout white">

              <h4>Lorem Ipsum is simply</h4>

              <p>Lorem Ipsum is simply dummy text of the printing.</p>

            </div>

            <div class="col-sm-6 about-callout">

              <h4>Lorem Ipsum is simply</h4>

              <p>Lorem Ipsum is simply dummy text of the printing.</p>

            </div>

          </div>

          <div class="col-sm-12 col-md-4 no-space-left"><img src="Bhevu Pics/Edited/Principal/principal2.jpg" alt="Principal"></div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- Call to Action start -->

<div class="call-to-action">

  <div class="container">

    <!--<h3>Lorem Ipsum is simply dummy text</h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. printing and typesetting industry.</p>

    <a href="javascript:void(0)">Sign Up</a>--> </div>

</div>

<!-- Call to Action End -->

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

    <div class="col-sm-4 subscirbe pull-right">

      <h2>Newsletter</h2>

      <p class="sub"><span>Subscribe</span> to Our Newsletter to get Important Blog Posts &amp; Inside Scoops:</p>

      <div class="form">

        <input type="text" placeholder="Enter your Email" id="exampleInputName" class="form-control first">

        <input type="text" class="bttn" value="Subscribe">

      </div>

    </div>

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

