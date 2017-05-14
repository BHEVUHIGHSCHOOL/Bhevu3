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
      
        <?php include ("signin.php");?>
        
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

      <h2>Student's Portal</h2>

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
<nav class="nav navbar-default " style="background-color:#97A3BF;">
	<div class="container">
    	<ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men 	<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                	<li>
                    	<a href="#">Shirts</a>
                        <a href="#">Pents</a>
                        <a href="#">Shoes</a>
                        <a href="#">Excesories</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men 	<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                	<li>
                    	<a href="#">Shirts</a>
                        <a href="#">Pents</a>
                        <a href="#">Shoes</a>
                        <a href="#">Excesories</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men 	<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                	<li>
                    	<a href="#">Shirts</a>
                        <a href="#">Pents</a>
                        <a href="#">Shoes</a>
                        <a href="#">Excesories</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="ViewQuestionPapers.php">Question Papers</a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="Print.php">Proof of Reg.</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            	<a href="table.php">view TimeTable</span></a>
            </li>
        </ul>
    </div>
</nav>
<div id="HeaderWrapper" class="table-responsive">
	<div id="learner-info">
    	<table class="table">
        	<tr>
            	<th>Name & Surname</th>
                <td><?php if(isset($_SESSION['Firstname'])){echo $_SESSION['Firstname'] ." ".$_SESSION['Surname'];}?></td>
            </tr>
            <tr>
                <th>Grade</th>
                <td><?php if(isset($_SESSION['Grade'])){echo $_SESSION['Grade'];}?></td>
            </tr>
            <tr>
                <th>ID Number</th>
                <td><?php if(isset($_SESSION['ID_number'])){echo $_SESSION['ID_number'];}?></td>
            </tr>
            <tr>
                <th>No. of Days Absent</th>
                <td>Must be coded</td>
            </tr>
        </table>
    </div>
    <div id="administration-info">
        <blockquote>
            <table class="table">
                <tr>
                    <th>Administration Number</th>
                    <td>fvgbhnj</td>
                </tr>
                <tr>
                    <th>Years in Grade</th>
                    <td>fvgbhnj</td>
                </tr>
                <tr>
                    <th>School Re-opens</th>
                    <td>fvgbhnj</td>
                </tr>
            </table>
        </blockquote>
    </div>
	<div id="Overall-performance">
    	<div id="sbject-table">
        	<table class="table table-bordered table-hover table-striped col-sm-12" style="text-align:center">
            	<?php
                	$retuning89 = $con -> query ("select * from Subjects89 where StudID = '$_SESSION[ID_number]'");
					$retuning89 = $con -> query ("select * from Subjects101112 where StudID = '$_SESSION[ID_number]'");			
					$subj = $retuning89 -> fetch_array(MYSQLI_BOTH);
					
					if(isset($_GET['subj'])){
						$subj_par = mysqli_real_escape_string($con,$_GET['subj']);
						$query = "SELECT * FROM learner WHERE IDNumber='$_SESSION[ID_number]'";
						$subject_exe = mysqli_query($con,$query);
						$subject_info = mysqli_fetch_assoc($subject_exe);
					}
				?>
            	<tr>
                	<td class="col-sm-4">
                    	<label for="">SUBJECTS</label>
                    </td>
                    <td class="col-sm-2">
                    	<label for="">SUBJECTS CODES</label>
                    </td>
                    <td class="col-sm-2">
                    	<label for="">MAXIMUM MARKS</label>
                    </td>
                    <td class="col-sm-2">
                    	<label for="">LEARNER'S MAKRS</label>
                    </td>
                    <td class="col-sm-2">
                    	<label for="">LEVEL</label>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<?php echo '<a href="Portal.php?subj='.$subj['subj1'].'">'.$subj['subj1'].'</a>';?>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	
                    </td>
             
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
                <tr>
                	<td>
                    	<a href="#">nmhgfhh</a>
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                    <td>
                    	nmhgfhh
                    </td>
                </tr>
            </table>
        	<div id="single-subject">
                <blockquote>
                    <table class="table" style="text-align:center; border-color:#E19596;">
                        <tr>
                            <td><?php echo $subject_info['IDNumber'] ;?></td>
                        </tr>
                        <tr>
                            <td>fgbhjnkl,;.</td>
                        </tr>
                        <tr>
                            <td>fgbhjnkl,;.</td>
                        </tr>
                    </table>
                </blockquote>            
            </div>
        </div>
        <div id="Level-of-Overall-performance">
            	<table class="table table-bordered col-sm-12">
                	<tr>
                    	<td class="col-sm-1"></td>
                    	<th class="col-sm-8">
                        	LEVELS OF OVERALL PERFORMENCE
                        </th>
                        <th class="col-sm-3">
                        	RATING CODE
                        </th>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	7
                        </td>
                    	<td class="col-sm-8">
                        	Outstaing Achievement
                        </td>
                        <td class="col-sm-3">
                        	320 - 400
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	6
                        </td>
                    	<td class="col-sm-8">
                        	Meritorious Achievement
                        </td>
                        <td class="col-sm-3">
                        	280 - 319
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	5
                        </td>
                    	<td class="col-sm-8">
                        	Substantial Achievement
                        </td>
                        <td class="col-sm-3">
                        	240 - 279
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	4
                        </td>
                    	<td class="col-sm-8">
                        	Adequet Achievement
                        </td>
                        <td class="col-sm-3">
                        	200 - 239
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	3
                        </td>
                    	<td class="col-sm-8">
                        	Moderate Achievement
                        </td>
                        <td class="col-sm-3">
                        	160 - 199
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	2
                        </td>
                    	<td class="col-sm-8">
                        	Elementary Achievement
                        </td>
                        <td class="col-sm-3">
                        	120 - 159
                        </td>
                    </tr>
                    <tr>
                    	<td class="col-sm-1">
                        	1
                        </td>
                    	<td class="col-sm-8">
                        	Not Achieved
                        </td>
                        <td class="col-sm-3">
                        	0 - 119
                        </td>
                    </tr>
                </table>
            </div>
    </div>
</div>
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