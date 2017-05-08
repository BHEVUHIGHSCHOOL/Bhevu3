<?php require ('connection/conect.php');

	$sql = "SELECT * FROM images";

	$res = $con -> query($sql);
ob_start();
session_start();
if(isset($_SESSION['userid']))

{
	include ("Controller/Staff Controller/Save.php");
}

else

{

	header('Location: index.php');

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

		  if(isset($_SESSION['userid']))

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

              <li><a href="qazwsxedc.php">Applicants</a></li>

              <li><a href="#">Register Staff</a></li>

              <li><a href="Admin-Page.php">Admin</a></li>

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

      <h2>Register</h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="index.php">Home</a></li>

        <li>Register</li>

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

          <h2>Registration of Staff</h2>

        </div>

        </div>

          <div class="col-sm-12 col-md-12 no-space-right">

          <div class="col-sm-12 col-md-9 no-space-left" style="text-align:center; padding-left:25%;">

            <div class="form"  style="text-align:center; border-radius:10px;">

            <?php if(!isset($_GET['Details']))
				{
					echo
					'
              <form action="RegisterStuff.php?Details='.'Staff'.'" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">

                <input type="text" required placeholder="Surname" value="'; if(isset($_SESSION["surname"])){ echo $_SESSION["surname"];} else if(isset($_POST["Surname"])){echo $_POST["Surname"];}else { echo '';}echo'" name="Surname" class="txt">

                <input type="text" required placeholder="First name" value="'; if(isset($_SESSION["firstname"])){ echo $_SESSION["firstname"];} else if(isset($_POST["First_name"])){echo $_POST["First_name"];}else { echo '';}echo'" name="First_name" class="txt">

                <input type="text" required placeholder="Last name" value="'; if(isset($_SESSION["lastname"])){ echo $_SESSION["lastname"];} else if(isset($_POST["Last_name"])){echo $_POST["Last_name"];}else { echo '';}echo'" name="Last_name" class="txt">

                <input type="text" required placeholder="ID Number" value="'; if(isset($_SESSION["id"])){ echo $_SESSION["id"];} else if(isset($_POST["ID_number"])){echo $_POST["ID_number"];}else { echo '';}echo'" name="ID_number" class="txt">
				';

                	if(isset($_SESSION['validity']))

					{

						echo "<p style='color:red'>".$_SESSION['validity'].", You can not proceed.</p>";

					}

					 if(isset($_SESSION['existerror']))

					{

						echo "<p style='color:red'>".$_SESSION['existerror']."You can not proceed.</p>";

					}

				echo
				'

                <input style="width:100%; height:45px; margin-bottom:10px;margin-top:10px" type="email" required placeholder="Email" value="'; if(isset($_SESSION["email"])){ echo $_SESSION["email"];} else if(isset($_POST["email"])){echo $_POST["email"];}else { echo '';}echo'" name="email" class="txt">

                <input type="text" required placeholder="Mobile Number" value="'; if(isset($_SESSION["mobilenumber"])){ echo $_SESSION["mobilenumber"];} else if(isset($_POST["Mobile_number"])){echo $_POST["Mobile_number"];}else { echo '';}echo'" name="Mobile_number" class="txt">

                <table style="width:100%;">

                	<tr>

                    	<th colspan="3" style=" text-align:center; color:#fff;">Phase</th>

                    </tr>

                    <tr>

                    	<td style=" text-align:center; color:#fff;"><input type="radio" name="Phase"'; if (isset($Phase) && $Phase=="Senior") {$Phase="Senior";} echo ' value="Senior">Senior</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="Phase"'; if (isset($Phase) && $Phase=="FET") {$Phase="FET";} echo ' value="FET">FET</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="Phase"'; if (isset($Phase) && $Phase=="Both") {$Phase="Both";} echo ' value="Both">Both</td>

                    </tr>';
					if(isset($_SESSION['PhaseError']))
						{
							echo $_SESSION['PhaseError'];
						}
					echo
                    '<hr/>

                	<tr>

                    	<th colspan="3" style=" text-align:center; color:#fff;">Position</th>

                    </tr>

                    <tr>

                    	<td style=" text-align:center; color:#fff;"><input type="radio" name="position"';if (isset($position) && $position=="Teacher") {$position="Teacher";} echo 'value="Teacher">Teacher</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="position"'; if (isset($position) && $position=="Principal") {$position="Principal";} echo ' value="Principal">Principal</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="position"'; if (isset($position) && $position=="HOD") {$position="HOD";} echo' value="HOD">HOD</td>
					</tr>';
					if(isset($_SESSION['PositionError']))
					{
						echo $_SESSION['PositionError'];
					}
					
				echo'
                </table>

                <hr/>
                
                <table class="col-sm-12" style="margin-right:55%; left:-6%;">

                	<tr>

                    	<th style="text-align:center; color:#fff;"><em>Upload Qualification Copy</em></th>

                        <th style="text-align:center; color:#fff;"><em>Upload ID Copy</em></th>        

                    </tr>

                    <tr>

                        <td style="color:#fff;" class="col-sm-6"><input type="file" required placeholder="Qualification Copy" value="" name="qual" class="txt"></td>

                        <td style="color:#fff;" class="col-sm-6"><input type="file" required placeholder="ID Copy" value="" name="id" class="txt"></td>

                    </tr>
                    
                    <tr><td colspan="2"><hr/></td></tr>

                </table>

				<input type="submit" value="Submit" name="" class="txt2">
                
              </form>';
				}
				else if(isset($_GET['Details']) && !isset($_POST['Phase']))
				{
					$_SESSION['PhaseError'] = "<tr><td colspan='3' style='text-align:center;'><p style='color:red;'>Please select Phase.</p></td></tr>";
					header('Location: RegisterStuff.php');
				}
				else if(isset($_GET['Details']) && !isset($_POST['position']))
				{
					$_SESSION['PositionError'] = "<tr><td colspan='3' style='text-align:center;'><p style='color:red;'>Please select Position.</p></td></tr>";
					header('Location: RegisterStuff.php');
				}				
			  else if(isset($_GET['Details']))
			  {
				  echo'
              		<input type="submit" value="Confirm Details" name="" class="txt2" data-toggle="modal" data-target="#details-1">';
			  }
			  ?>

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

<?php 
	require "modals/StaffModal.php";
?>

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