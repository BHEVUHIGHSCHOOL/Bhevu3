<?php require ('connection/conect.php');

	$sql = "SELECT * FROM images";

	$res = $con -> query($sql);

?>

<?php
ob_start();
session_start();
if(isset($_SESSION['Register']))
{
	if($_SESSION['Register'] == "Registered")
	{
		//header('Location: Print.php');
	}
}
if(isset($_SESSION['stream']))
{
	if($_SESSION['stream'] == 'Please_Select')
	{
		$_SESSION['error']  = "Please choose stream.";
		header('Location: RegisterSubj.php');
	}
	else if($_SESSION['stream'] == 'Commerce')
	{
		$_SESSION['subj1'] = 'Mathematics';
		$_SESSION['subj2'] = 'Economics';
		$_SESSION['subj3'] = 'Business Studies';
		$_SESSION['subj4'] = 'Life Sciences';
	}
	else if($_SESSION['stream'] == 'History')
	{
		$_SESSION['subj1'] = 'Mathematics Literacy';
		$_SESSION['subj2'] = 'Geography';
		$_SESSION['subj3'] = 'History';
		$_SESSION['subj4'] = 'Life Sciences';
	}
	else if($_SESSION['stream'] == 'Science')
	{
		$_SESSION['subj1'] = 'Mathematics';
		$_SESSION['subj2'] = 'Physical Sciences';
		$_SESSION['subj3'] = 'Business Studies';
		$_SESSION['subj4'] = 'Life Sciences';
	}
	$_SESSION['stream'] = $_SESSION['stream'];
} 
//Default Subjects
	$Maths = 'Mathematics';
	$NS = 'Natural Sciences';
	$SS = 'Social Sciences';
	$EMS = 'Economic and Management Sciences';
	$Art = 'Creative Arts';
	$Tech = 'Technology';
	$LO = 'Life Orientation';
	$Eng = 'English First Additional Language';
	$IsiZ = 'IsiZulu Home Language';
	
if(isset($_POST['confirm']))
{
	if(isset($_SESSION['stream']))
	{
		if($_SESSION['Grade'] == "10")
		{
			$subjects = $con -> query ("insert into Subjects101112 values ('$_SESSION[ID_number]', '$_SESSION[stream]', '$_SESSION[subj1]', '$_SESSION[subj2]', '$_SESSION[subj3]', '$_SESSION[subj4]', '$LO', '$Eng', '$IsiZ')");
			if($subjects)
			{
				$con -> query ("update learner set Register = 'Registered', Stream = '$_SESSION[stream]' where IDNumber = '$_SESSION[ID_number]'");
				$_SESSION['Register'] == "Registered";
				header('Location: index.php');
			}
		}
	}
	else
	{
		$subjects = $con -> query ("insert into Subjects89 values ('$_SESSION[ID_number]', '$Maths', '$NS', '$SS', '$EMS', '$Art', '$Tech', '$LO', '$Eng', '$IsiZ')");
		if($subjects)
		{
			$con -> query ("update learner set Register = 'Registered', Stream = 'No stream' where IDNumber = '$_SESSION[ID_number]'");
		}
	}
}
?>			

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bhevu High&reg;</title>

<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="assets/animate/animate.css" rel="stylesheet">

<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">

<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="images/fav.png">

<script>
	function printContent(el)
	{
		var restorepage = document.body.innerHTML;
		var printContent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printContent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>

</head>

<body>

<div id="dvLoading"></div>

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

        <?php

		  if(isset($_SESSION['username']))

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

			  //header('Location: index.php');

		  }

		  ?>

        </ul>

      </div>

    </div>

  </div>

  <div class="logo-bar hidden-xs">

    <div class="container">

      <!-- Logo -->

      <div class="row">

        <div class="col-sm-4"><a href="index.php"> <img src="Bhevu Pics/Edited/Gallery/logo2.png" alt="Education World" style="width:218px; height:46px;"></a> </div>

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

            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Education World"/></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li><a href="index.php">Home</a></li>



<<<<<<< HEAD
          
=======
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

                          <li><a href="Controller/Newsfeeds controller/classic-news.php"><span class="fa fa-angle-right menu-icon"></span>Classic News</a></li>

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

                          <li><a href="about-us.php"><span class="fa fa-angle-right menu-icon"></span>About Us</a></li>

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

                  <li><a href="Controller/Newsfeeds controller/classic-news.php">Classic News</a></li>

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
>>>>>>> cef0ceb1865295f648cc0f3d18db4bd5e6ce8280


              </li>


            

           

              <li><a href="Portal.php">View Portal</a></li>

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

      <h2></h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="index.php">Home</a></li>

        <li>Proof</li>

      </ul>

    </div>

  </div>

</div>

<!-- Inner Banner Wrapper End -->

<section class="inner-wrapper contact-wrapper">

  <div class="container">

    <div class="row">

      <div class="inner-wrapper-main">

        <div class="contact-address">

        <div class="container">

        <div class="col-sm-12">

          <h2>Proof of Registration</h2>

        </div>

        </div>

          <div class="col-sm-12 col-md-12 no-space-right">

          <div class="col-sm-12 col-md-9 no-space-left" style="text-align:center; padding-left:25%;">
          
          <!--Printout-->

            <div class="form"  style="text-align:center; border-radius:10px;">
            
            <div id="div1" style="text-align:center">
			
              <form action="" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">
              	<img src="Bhevu Pics/Edited/Gallery/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;">
                <hr/>
                	<h3 style="color:#FFF"><?php echo "Surname : ". $_SESSION['Surname']."<br/> Firstname : ". $_SESSION['Firstname']."<br/> ID Number : ".$_SESSION['ID_number']."<br/> Grade : ".$_SESSION['Grade']?></h3><br/>
                <hr/>
                
                <h2>Your Subjecs</h2><br/>
              	<?php
                	if($_SESSION['Grade'] == "10")
					{
						echo '<table class="col-sm-12 txt" style="color:#000; background:#fff">
							  	<tr>
									<th>'.
										$_SESSION['subj1'].'</br>'.
										$_SESSION['subj2'].'</br>'.
										$_SESSION['subj3'].'</br>'.
										$_SESSION['subj4'].'</br>'.
										$LO.'</br>'.
										$Eng.'</br>'.
										$IsiZ.'</br>'
								  .'</th>
								</tr>
							  </table>';
					}
					else
					{
						if($_SESSION['Grade'] == "8" || $_SESSION['Grade'] == "9")
						{
							echo '<table class="col-sm-12 txt" style="color:#000; background:#fff">
							  	<tr>
									<th>'.
										$Maths.'</br>'.
										$NS.'</br>'.
										$SS.'</br>'.
										$Art.'</br>'.
										$EMS.'</br>'.
										$Tech.'</br>'.
										$LO.'</br>'.
										$Eng.'</br>'.
										$IsiZ.'</br>'
								  .'</th>
								</tr>
							  </table>';
						}
						else
						{
							echo '<table class="col-sm-12 txt" style="color:#000; background:#fff">
							  	<tr>
									<th>'.
										$_SESSION['subj1'].'</br>'.
										$_SESSION['subj2'].'</br>'.
										$_SESSION['subj3'].'</br>'.
										$_SESSION['subj4'].'</br>'.
										$LO.'</br>'.
										$Eng.'</br>'.
										$IsiZ.'</br>'
								  .'</th>
								</tr>
							  </table>';
						}
					}
				?>
              </form>
			</div>
            <input type="submit" onClick="printContent('div1')" value="Print" name="confirm" class="txt2">
            <!--<button class="txt2" onClick="printContent('div1')">Print</button>-->
            </div>
                
          </div>

        </div>

      </div>

    </div>

  </div>

  <div id="google-map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen></iframe>

        </div>

        </div>

</section>

<!-- Call to Action start -->

<div class="call-to-action">

  <div class="container">

    <h3>Lorem Ipsum is simply dummy text</h3>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. printing and typesetting industry.</p>

    <a href="javascript:void(0)">Sign Up</a> </div>

</div>

<!-- Call to Action End -->

<!-- Footer Links Start-->

<footer>

  <div class="container">

    <div class="col-sm-3"><img src="images/footer-logo.jpg" alt="World Education"> </div>

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

      Education World | All Rights Reserved.</p>

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
