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
              <li><a href="Controller/Newsfeeds controller/classic-news.php">School Newsfeeds</a></li>
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
<section class="inner-wrapper">
  <div class="container">
    <div class="row">
      <h2><span>School TimeTable For The Year 2017</span></h2>
      <div class="inner-wrapper-main offset-top-30">
        <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0 table-responsive">
       
          <table class="table-custom">
         <tr>
            <td colspan="6"; bgcolor="#CDC9C9"; style="text-align:center"><strong>Grade 10 to 12 Time Table</strong></td>
        </tr>
           <th>Times</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          
           <tr>
            <th>8h00-8h55</th>
            <td>maths </td>
            <td>english</td>
            <td>life orientation </td>
            <td> physical science</td>
            <td>isizulu</td>
        </tr>
        <tr>
            <th>9h00-9h55</th>
            <td>physical science </td>
            <td>life sciences </td>
            <td>geography </td>
            <td> english</td>
            <td>geography</td>
        </tr>
        <tr>
            <th>10h00-10h55</th>
            <td>life orientation</td>
            <td>physical sciences</td>
            <td>busines studies</td>
            <td> history</td>
            <td>economics</td>
        </tr>
        <tr>
            <th class="glyphicon-text-color"; bgcolor="#B7AFB0" >11h00-11h55</th>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break</td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break </td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break </td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0"> break</td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break</td>
        </tr>
         <tr>
            <th>12h00-12h55</th>
            <td>maths</td>
            <td>english </td>
            <td>life sciences</td>
            <td> history</td>
            <td>maths lit</td>
        </tr>
         <tr>
            <th>13h00-13h55</th>
            <td>physical sciences</td>
            <td>maths</td>
            <td>study period </td>
            <td> life orientation</td>
            <td>english</td>
        </tr>
       <tr>
       
         <tr>
            <td colspan="6"; bgcolor="#CDC9C9"; style="text-align:center"><strong>Grade 8 and 9 Time Table</strong></td>
        </tr>
           <th>Times</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
          
           <tr>
            <th>8h00-8h55</th>
            <td>isizulu </td>
            <td>natural science</td>
            <td>Technology </td>
            <td> Life orientation</td>
            <td>maths</td>
        </tr>
        <tr>
            <th>9h00-9h55</th>
            <td>english</td>
            <td>economic and management sciences</td>
            <td>life orientation </td>
            <td> english</td>
            <td>maths</td>
        </tr>
        <tr>
            <th>10h00-10h55</th>
            <td>technology</td>
            <td>natural sciences</td>
            <td>english </td>
            <td> isizulu</td>
            <td>economic and management sciences</td>
        </tr>
        <tr>
            <th class="glyphicon-text-color"; bgcolor="#B7AFB0" >11h00-11h55</th>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break</td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break </td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break </td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0"> break</td>
            <td class="glyphicon-text-color"; bgcolor="#B7AFB0">break</td>
        </tr>
         <tr>
            <th>12h00-12h55</th>
            <td>maths</td>
            <td>english </td>
            <td>economic and management sciences</td>
            <td>accounting</td>
            <td>isizulu</td>
        </tr>
         <tr>
            <th>13h00-13h55</th>
            <td>economic and management sciences</td>
            <td>maths</td>
            <td>study period </td>
            <td> life orientation</td>
            <td>english</td>
        </tr>
       <tr>
		  <?php 
	
	      ?>
    </tr>
  
          </table>
          <div class="call-to-action" style="margin-top:50px; margin-bottom:50px;">
    <a id="p" href="javascript:void(0)">print timetable</a> 
</div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="footer-wrapper">
  <div class="container">
    <p>&copy; 
	<script type="text/javascript">
	var d=new Date();
	document.write(d.getFullYear());
	</script> 
    
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