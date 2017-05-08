<?php require ('connection/conect.php')?>

<?php
ob_start();
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bhevu High&reg;</title>

<link rel="stylesheet" type="text/css" href="css/main.css">

<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="assets/animate/animate.css" rel="stylesheet">

<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">

<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="Bhevu Pics/Edited/Logo/logo2.png">

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

			else if (isset($_SESSION['userid']))

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

          </li>";

			}

		  ?>

          <?php

		  if(isset($_SESSION['username']))

		  {

		  }

			else if (isset($_SESSION['userid']))

			{

			}		  

		  else

		  {

			  echo "

          <!-- Login -->

          <li class='login'><a href='javascript:void(0)'><i class='fa fa-lock'></i>Login</a>

            <div class='login-form'>

              <h4>Login</h4>

              <form action='' method='post'>

                <input type='text' name='username' placeholder='Username'>

                <input type='password' name='password' placeholder='Password'>";}?>

                <?php if(isset($error)){echo $error;}?>

           <?php

           if(isset($_SESSION['username']))

		  	{

		 	}

			else if (isset($_SESSION['userid']))

			{

			}

		  	else

		  	{

			  echo "  

                <button type='submit' name='login' class='btn'>Login</button>

              </form>

            </div>

          </li>";

			}

          ?>

          <?php

		  if(isset($_SESSION['username']))

		  {

		  }

			else if (isset($_SESSION['userid']))

			{

			}		  

		  else

		  {

		  echo "

          <!-- Apply -->

          <li class='register'><a href='Apply.php'><i class='fa fa-user'></i>Apply</a>

            <div class='register-form'>

              <h4>Apply</h4>

            </div>

           </li>";

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

            <a class="navbar-brand" href="index.php"><img src="Bhevu Pics/Edited/Logo/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;"></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li><a href="index.php">Home</a></li>

              <li><a href="about-us.php">About us</a></li>

              <li><a href="contact-us.php">Contact Us</a></li>

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

      <h2>Teacher's Portal</h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="index.php">Home</a></li>

        <li>Portal</li>

      </ul>

    </div>

  </div>

</div>

<!-- Portal nav start-->
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container" id="HeaderWrapper2">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="Bhevu Pics/P.Ps/17362372_1955905461304830_1811470495680181031_n.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						T-Man Dzanibe
					</div>
					<div class="profile-usertitle-job">
						Teacher
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Edite Profile</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
                        <nav class="nav navbar-default " style="background-color:#97A3BF; margin-left:-15px;">
                            <div class="container">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>Record Marks<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a  href="Teachers.php?subj='Records'">Grade 8</a>
                                                <a href="#">Pents</a>
                                                <a href="#">Shoes</a>
                                                <a href="#">Excesories</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                             </div>
                        </nav>
						<li>
							<a href="Teachers.php?upload='Upload'">
							<i class="glyphicon glyphicon-ok"></i>
							Upload Questions Papers </a>
						</li>
                        <li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Add Test </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
        <div class='profile-content col-sm-12'>  
				   <div id='records' class='col-sm-12'>
				   
				   	<hr>
                    <?php
                        if(isset($_GET['subj']))
                        {
                            echo
                            "
                        <form class='form'>
							<a href='TeacherS.php?grade=".'dfgh'."'>Grade 8 A</a>";
						}
                        if(isset($_GET['grade']))
                        {
                            echo
                            "	<table class='col-sm-12'>
                                            <tr>
                                                <th  style='text-align:center' colspan='2'><h2>Learner</h2></th>
                                            </tr>
                                            <tr>
                                                <th  style='text-align:center' colspan='2'><h3>Subject Test 1 Mark</h3></th>
                                            </tr>
                                            <tr>
                                                <td class='col-sm-1'><label for='InputEmail2'>Test 1</label></td>
                                                <td class='col-sm-1'><input type='text' class='form-control input-sm' id='exampleInputEmail2'></td>
                                                <td class='col-sm-2'><label for='Inputtest'> / 100</label></td>
                                            </tr>
                                            <tr>
                                                <td  style='text-align:center' colspan='2'><button type='botton' class='btn btn-success btn-sm profile-userbuttons'>Submit</button></td>
                                            </tr>
                                        </table>                         
                                    ";
                        }
						include "Controller/Question Papers Controller/Upload/Layout.php";
                        ?>
                        </form>
				   </div>
            </div>
		</div>
	</div>
</div>
<br>
<br>
<!-- Portal nav End -->

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

    <div class="col-sm-3"><img src="Bhevu Pics/Edited/Logo/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;"> </div>

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

  })
  
  	(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83282272-2', 'auto');

  ga('send', 'pageview');

</script>

</body>



</html>