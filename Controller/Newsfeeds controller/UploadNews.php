<?php require ('../../connection/conect.php');

	$sql = "SELECT * FROM images";

	$res = $con -> query($sql);

?>



<?php
ob_start();
session_start();
if(isset($_GET['delete-all']) || isset($_GET['edit']))
  {
	 $_SESSION['catname_up'] = $_SESSION['catname'];
	 $_SESSION['newstitle_up'] =$_SESSION['newstitle'];
	 $_SESSION['story_up'] = $_SESSION['story'];
	 $_SESSION['time_up'] = $_SESSION['time'];
	 $_SESSION['attach_up'] = $_SESSION['attach'];
	 $_SESSION['Type_up'] = $_SESSION['Type'];
  }
if(isset($_SESSION['userid']))

{

}

else

{

	//header('Location: index.php');

}


/*====================Paginnation==================*/
//approved Learners
$result_per_page_approved = 10;
$learner_approved = $con -> query ("SELECT * FROM learner where Status = 'Approved'");
$number_of_learners_approved = mysqli_num_rows($learner_approved);
$number_of_pages_approved = ceil($number_of_learners_approved/$result_per_page_approved);

if(!isset($_GET['page_approved']))
{
	$page_approved = 1;
}
else
{
	$page_approved = $_GET['page_approved'];
}

$this_page_first_result_approved = ($page_approved-1)*$result_per_page_approved;

$learner_approved = $con -> query ("SELECT * FROM learner where Status = 'Approved' LIMIT " . $this_page_first_result_approved . "," .$result_per_page_approved);

//Waiting Students
$result_per_page = 10;
//get number of recods in the database
$learner = $con -> query ("SELECT * FROM learner where Status = 'Waiting'");
$number_of_learners = mysqli_num_rows($learner);
$number_of_pages = ceil($number_of_learners/$result_per_page);

if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$result_per_page;

$learner = $con -> query ("SELECT * FROM learner where Status = 'Waiting' LIMIT " . $this_page_first_result . "," .$result_per_page);

//Pagination//

//===============upload news feeds=======//

if(isset($_POST["add"]))
{
	
	//===============attach files start========//
	$myfile = $_FILES['img_preview']['name'];
	$tmp_name = $_FILES['img_preview']['tmp_name'];
	$type = $_FILES['img_preview']['type'];	
		$location = $myfile;
		move_uploaded_file($tmp_name,"documents/".$myfile);

//==============attach files end===========//

	$query = "INSERT INTO News VALUES('$_POST[category]', '$_POST[title]','$_POST[story]', NOW(), '$location','$type')";
	$results = mysqli_query($con,$query);
	if(!$results)
	{
	  echo ('Error adding news'.mysqli_error($con));
	  exit();	
	}
	
	else
	{
   	    header("Location: Edit.php");
	}
}
//===============end upload news feeds=======//
//==============Update====================//
if(isset($_SESSION['time_up']))
 {
	 $edit = $con -> query ("select * from news where timestamp = '$_SESSION[time_up]'");
	 $data = $edit -> fetch_array(MYSQLI_BOTH);
	 
	 $_SESSION['catname_up'] = $data['catname'];
	 $_SESSION['newstitle_up'] = $data['newstitle'];
	 $_SESSION['story_up'] = $data['story'];
	 $_SESSION['attach_up'] = $data['Attachments'];
	 $_SESSION['Type_up'] = $data['Type'];
	 $_SESSION['time_up'] = $data['timestamp'];
 }
 if(isset($_POST["update"]))
{
	
	//===============attach files start========//
	$myfile = $_FILES['img_preview']['name'];
	$tmp_name = $_FILES['img_preview']['tmp_name'];
	$type = $_FILES['img_preview']['type'];	
		$location = $myfile;
		move_uploaded_file($tmp_name,"documents/".$myfile);

//==============attach files end===========//

	$query = "UPDATE News SET catname  = '$_POST[category]',  newstitle='$_POST[title]', story='$_POST[story]', Attachments='$location', Type='$type' WHERE timestamp = '$_SESSION[time_up]'";
	$results = mysqli_query($con,$query);
	    header("Location: Edit.php");
		unset($_SESSION['catname_up']);
		unset($_SESSION['newstitle_up']);
		unset($_SESSION['story_up']);
		unset($_SESSION['attach_up']);
		unset($_SESSION['Type_up']);
		unset($_SESSION['time_up']);		
}

?>


<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bhevu High&reg;</title>

<!-- Bootstrap CSS -->

<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome CSS-->

<link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom CSS -->

<link href="../../css/style.css" rel="stylesheet">

<!-- Animate CSS -->

<link href="../../assets/animate/animate.css" rel="stylesheet">

<!-- Owl Carousel -->

<link href="../../assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">

<link href="../../assets/owl-carousel/css/owl.theme.css" rel="stylesheet">

<!-- Favicon -->

<link rel="shortcut icon" type="image/x-icon" href="../../images/fav.png">

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

        <div class="col-sm-4"><a href="../../index.php"> <img src="../../images/logo.png" alt="Education World"></a> </div>

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

            <a class="navbar-brand" href="../../index.php"><img src="../../images/logo.png" alt="Education World"/></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li><a href="../../index.php">Home</a></li>

              <li><a href="../../qazwsxedc.php">Applicants</a></li>

              <li><a href="../../RegisterStuff.php">Register Staff</a></li>

              <li><a href="#">Admin</a></li>
              
              <li><a href="Edit.php">All Newsfeeds</a></li>

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

      <h2>Upload Newsfeeds</h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="../../index.php">Home</a></li>

        <li>Upload Newsfeeds</li>

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

          <div class="col-sm-10 col-md-12 no-space-left">

            <div class="form">
              <!--===============Change from here=============-->
              <form method="post" action="UploadNews.php" enctype="multipart/form-data">
              <table class="col-sm-12" style="color:#fff; left:-6%;"> 
                   <tr> 
                      <td width="50%">Category</td>
                      <td>
                        <select name="category" style="width:100%; height:44px; color:#000; margin-left:1px; margin-top:1px;" required>
                            <option value="<?php if(isset($_SESSION['catname_up'])){echo $_SESSION['catname_up'];} ?>">Select News Category</option>
                            <option>Accademics</option>
                            <option>Cultural Activities</option>
                            <option>Fundraising events</option>
                            <option>Sports</option>
                        </select>
                      </td>
                  </tr>
                    <tr> 
                        <td>News Title</td>
                        <td>
                            <input style="color:#000" name="title" value="<?php if(isset($_SESSION['newstitle_up'])){echo $_SESSION['newstitle_up'];} ?>" type="text" class="txt" required>
                        </td>
                    </tr>
                    <tr> 
                        <td>News Story</td>
                        <td>
                            <textarea  class="col-sm-12 form-group" name="story" style="color:#000; margin-bottom:10px;"  rows="8" cols="70" required><?php if(isset($_SESSION['story_up'])){echo $_SESSION['story_up'];} ?></textarea>
                        </td>
                        <td></td>
                    </tr>
						<tr>
							<td>Attach a file</td>
                        <td><input type="file" name="img_preview" value="Attachments"></td>
                     </tr>
                    <tr> 
                        <td colspan="3">
                            <div align="center"> 
                            <?php
                            	if(isset($_SESSION['time_up']))
								{
									echo ' <input name="update" type="submit"  value="UPDATE" class="txt2"> ' ;
								}
								else
								{
									echo ' <input name="add" type="submit"  value="UPLOAD" class="txt2" onClick="getConfirmation();">';
								}
							?>                               
                            </div>
                        </td>
                    </tr>           
           </table>
          </form>    
 
              <!--===============Change to here=============-->
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <div id="google-map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen></iframe>

        </div>

</section><!-- Call to Action End -->

<!-- Footer Links Start-->

<footer>

  <div class="container">

    <div class="col-sm-3"><img src="../../images/footer-logo.jpg" alt="World Education"> </div>

    <div class="col-sm-5">

      <div class="contactus">

        <h2>Admin</h2>

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

<script src="../../assets/jquery/jquery-3.1.1.min.js"></script> 

<script src="../../assets/jquery/jquery.animateNumber.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="../../assets/easing/jquery.easing.min.js"></script> 

<script src="../../assets/bootstrap/js/bootstrap.min.js"></script> 

<script src="../../assets/wow/wow.min.js"></script> 

<script src="../../assets/owl-carousel/js/owl.carousel.js"></script> 

<script src="../../js/custom.js"></script>

<script>
         function getConfirmation()
     {
	     var reval= confirm('Newsfeed uploded successfuly');
	      if(retval==true)
	     {
		    return true;
	     }
     }
</script>


<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-83282272-2', 'auto');

  ga('send', 'pageview');



</script>

</body>



<!-- Mirrored from sbtechnosoft.com/education-world/multiple-pages/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 11:36:17 GMT -->

</html>