<?php require ('connection/conect.php')?>
<?php
session_start();
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$admin = $con -> query ("SELECT * FROM qazwsxedc WHERE username = '$username' and password = '$password'");
	$resultadmin = mysqli_num_rows($admin);
	
	//Learner
	$learner = $con -> query ("SELECT * FROM learner WHERE Username = '$username' and Password = '$password'");
	$resultlearner = mysqli_num_rows($learner);
	
	//Parent
	$parent = $con -> query ("SELECT * FROM parent WHERE Username = '$username' and Password = '$password'");
	$resultparent = mysqli_num_rows($parent);
	
	if($resultadmin>0 || $resultlearner>0 || $resultparent>0)
	{
		$queryadmin = $admin -> fetch_array(MYSQLI_BOTH);
		$_SESSION['usernamea'] = $queryadmin['username'];
		$_SESSION['userid'] = $queryadmin['userId'];
		
		//Learner
		$querylearner = $learner -> fetch_array(MYSQLI_BOTH);
		$_SESSION['username'] = $querylearner['Username'];
		$_SESSION["ID_number"] = $querylearner['IDNumber'];
		$_SESSION['Status'] = $querylearner['Status'];
		
		if(isset($_SESSION['userid']))
		{
			header('Location: Admin-Page.php');
		}
		if(isset($_SESSION['username']))
		{
			//learner
			if($_SESSION['Status'] == "Aproved")
			{
				header('Location: RegisterSubj.php');
				$_SESSION["report"] = "Report".$_SESSION["ID_number"];
			}
			else
			{
				header('Location: After-Confirm.php');
			}
		}
		
		//parent
		$queryparent = $parent -> fetch_array(MYSQLI_BOTH);
	}
	else
	{
		$error = "<p style='color:red'>User Account not found.....</p>";
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
      <h2>Application</h2>
    </div>
    <div class="col-sm-12 inner-breadcrumb">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>Apply</li>
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
        </div>
        </div>
          <div class="col-sm-12 col-md-12 no-space-right">
          <div class="col-sm-12 col-md-12 no-space-left" style="text-align:center;">
            <div class="form"  style="text-align:center; border-radius:10px;">
              <form action="" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">
                <table style="color:#fff; width:100%; border-radius:5px; background-color:#458CBF;">
                	<tr>
                    	<td>
                        	<?php echo "<h1>Thank you for applying at <strong><em>Bhevu High School</em></strong>, you Application in progress.</h1>";?>
                        </td>
                    </tr>
                </table>
              </form>
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
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83282272-2', 'auto');
  ga('send', 'pageview');

</script>
</body>


</html>