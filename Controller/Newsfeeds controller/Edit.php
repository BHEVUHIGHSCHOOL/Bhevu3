<?php
session_start();
require("/../../connection/conect.php");
require ('EditNews.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
          <!-- Login -->
          <li class="login"><a href="javascript:void(0)"><i class="fa fa-lock"></i>Login</a>
            <div class="login-form">
              <h4>Login</h4>
              <form action="#" method="post">
                <input type="text" name="name" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn">Login</button>
              </form>
            </div>
          </li>
          <!-- Register -->
          <li class="register"><a href="javascript:void(0)"><i class="fa fa-user"></i>Sign Up</a>
            <div class="register-form">
              <h4>Sign Up</h4>
              <span>Please sign up the account</span>
              <form action="#" method="post">
                <input type="text" name="user-name" placeholder="Username">
                <input type="email" name="user-email" placeholder="Email">
                <input type="password" name="user-password" placeholder="Password">
                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </li>
          <li class="search"><i class="fa fa-search" aria-hidden="true"></i>
            <div id="search-form-container">
              <form id="search-form" action="#" style="display: none;" class="">
                <input type="search" id="search" name="search" placeholder="Search...">
                <input type="submit" id="search-submit" value="">
                <span id="close-form" class="close">x</span>
              </form>
            </div>
          </li>
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
              <li class="active"><a href="../../index.php">Home</a></li>

              <li><a href="../../about-us.php">About us</a></li>

              <li><a href="../../contact-us.php">Contact Us</a></li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News Categories <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="classic-news.php?Accademic='Accademic'">Accademics News</a></li>
                  <li><a href="classic-news.php?Cultural='Cultural'">Cultural Activities</a></li>
                  <li><a href="classic-news.php?Fundraising='Fundraising'">Fundraising events</a></li>
                  <li><a href="classic-news.php?Sports='Sports'">Sports</a></li>
                  <li><a href="classic-news.php">All</a></li>
                </ul>
              </li>
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
      <h2>Newsfeeds</h2>
    </div>
    <div class="col-sm-12 inner-breadcrumb">
      <ul>
        <li><a href="../../index.php">Home</a></li>
        <li>News</li>
        <li>Newsfeeds</li>
      </ul>
    </div>
  </div>
</div>
<!-- Inner Banner Wrapper End -->
<section class="inner-wrapper">
<div class="form-group col-lg-6 top-right">
	<h3>Search by <a href="Edit.php?title='title'">Title</a> or <a href="Edit.php?Category='Category'">Category</a></h3>
</div>
    <?php
<<<<<<< HEAD
		//session_start();
		
=======
		require("/../../connection/conect.php");
		//session_start();
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
		if(isset($_POST['title-search']))
		{
			$title = $con -> query("select * from news where newstitle = '$_POST[title]'");
			//$title = $con -> query("select * from news where newstitle like %$_POST[title]%");
			$numcheck = mysqli_num_rows($title);
			if($numcheck>0)
			{
				while ($titleresults = mysqli_fetch_array($title))
				{
					$time = $titleresults['timestamp'];
					echo "
				<table class='table col-sm-12'>
				 <tr>
					 <th class='col-sm-1'>Category Name</th>
					 <th class='col-sm-1'>Title</th>
					 <th class='col-sm-4'>Content</th>
					 <th class='col-sm-2'>Date Uploaded</th>
					 <th class='col-sm-1'></th>
					 <th class='col-sm-1'></th>
				 </tr>
				 <tr>
					<td>".$titleresults['catname']."</td>
					<td>".$titleresults['newstitle']."</td>
					<td>".$titleresults['story']."</td>
					<td>".$titleresults['timestamp']."</td>
<<<<<<< HEAD
					
=======
					<td><a href='UploadNews.php'<span class='glyphicon glyphicon-edit'></span></a></td>
					<td><a href='Edit.php?delete='".$time."'><span class='glyphicon glyphicon-trash'></a></span></td>
				 </tr>
				 </table>
			";
				}
			}
			else
			{
				echo "<p style='color:red;'>Record not found.</p>";
			}
		}
		else if(isset($_POST['cat-search']))
		{
			$category = $con -> query("select * from news where catname = '$_POST[category]'");
			//$title = $con -> query("select * from news where newstitle like %$_POST[title]%");
			$numcheck = mysqli_num_rows($category);
			if($numcheck>0)
			{
				while ($categoryresults = mysqli_fetch_array($category))
				{
					echo "
				<table class='table col-sm-12'>
				 <tr>
					 <th class='col-sm-1'>Category Name</th>
					 <th class='col-sm-1'>Title</th>
					 <th class='col-sm-4'>Content</th>
					 <th class='col-sm-2'>Date Uploaded</th>
					 <th class='col-sm-1'></th>
					 <th class='col-sm-1'></th>
				 </tr>
				 <tr>
					<td>".$categoryresults['catname']."</td>
					<td>".$categoryresults['newstitle']."</td>
					<td>".$categoryresults['story']."</td>
					<td>".$categoryresults['timestamp']."</td>
					<td><a href='UploadNews.php'<span class='glyphicon glyphicon-edit'></span></a></td>
					<td><span class='glyphicon glyphicon-trash'></span></td>
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
				 </tr>
				 </table>
			";
				}
			}
			else
			{
				echo "<p style='color:red;'>Record not found.</p>";
			}
		}
<<<<<<< HEAD
		else if(isset($_POST['cat-search']))
		{
			$category = $con -> query("select * from news where catname = '$_POST[category]'");
			//$title = $con -> query("select * from news where newstitle like %$_POST[title]%");
			$numcheck = mysqli_num_rows($category);
			if($numcheck>0)
			{
				while ($categoryresults = mysqli_fetch_array($category))
				{
					echo "
				<table class='table col-sm-12'>
				 <tr>
					 <th class='col-sm-1'>Category Name</th>
					 <th class='col-sm-1'>Title</th>
					 <th class='col-sm-4'>Content</th>
					 <th class='col-sm-2'>Date Uploaded</th>
					 <th class='col-sm-1'></th>
					 <th class='col-sm-1'></th>
				 </tr>
				 <tr>
					<td>".$categoryresults['catname']."</td>
					<td>".$categoryresults['newstitle']."</td>
					<td>".$categoryresults['story']."</td>
					<td>".$categoryresults['timestamp']."</td>
					<td><a href='Edit.php?delete-cat='".$categoryresults['timestamp']."'><span class='glyphicon glyphicon-trash'></a></span></td>
				 </tr>
				 </table>
			";
				}
			}
			else
			{
				echo "<p style='color:red;'>Record not found.</p>";
			}
		}
		
		//delete
		if(isset($_GET['delete']))
		{
			$delete = $con -> query("DELETE FROM news WHERE timestamp = '$time'");
			
			if($delete)
			{
				$echo = "<p>Record deleted succesfully</p>";
			}
			else
			{
				$echo = "<p style='color:red;'>Failed to Delete record</p>".mysqli_error($con)."<p style='color:red;'>$_GET[delete]</p>";
			}
		}
		
    	if(isset($_GET['title']) || isset($_GET['delete-title']))
=======
		
		//delete
		if(isset($_GET['delete']))
		{
			$delete = $con -> query("DELETE FROM news WHERE timestamp = '$time'");
			
			if($delete)
			{
				$echo = "<p>Record deleted succesfully</p>";
			}
			else
			{
				$echo = "<p style='color:red;'>Failed to Delete record</p>".mysqli_error($con)."<p style='color:red;'>$_GET[delete]</p>";
			}
		}
		
    	if(isset($_GET['title']) || isset($_GET['delete']))
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
		{
			echo '
			<form method="post">
				<div class="form-group col-lg-6 top-right">
				<table class="col-sm-6 table">
					<tr>
						<th class="h4 col-sm-4">Search by Title</th>
						<td class="col-sm-4" ><input name="title" type="text" class="form-control"></td>
					</tr>
					<tr style="text-align:center;">
						<td colspan="2"><button type="submit" name="title-search" class="txt2">Search</button></td>
					</tr>
<<<<<<< HEAD
					<tr><td></td></tr>
=======
					<tr><td>'.$echo.'</td></tr>
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
				</table>
				</div>
			</form>
			';
			
		}
		else if (isset($_GET['Category']) || isset($_GET['delete-cat']))
		{
			echo '
			<form method="post">
				<div class="form-group col-lg-6 top-right">
					<table class="col-sm-6 table">
						<tr>
							<th class="h4 col-sm-4">Search by Category</th>
							<td class="col-sm-4" >
								<select name="category" style="width:100%; height:44px; color:#000; margin-left:1px; margin-top:1px;" required>
								<option value="">Select News Category</option>
								<option>Accademics</option>
								<option>Cultural Activities</option>
								<option>Fundraising events</option>
								<option>Sports</option>
							</select>
							</td>
							<tr style="text-align:center;">
								<td colspan="2"><button type="submit" name="cat-search" class="txt2">Search</button></td>
							</tr>
						</tr>
					</table>
				</div>
			</form>
			';
		}
		if (!isset($_GET['title'])  && !isset($_GET['Category'])  || isset($_GET['delete-all']))
		{
			echo "
				<table class='table col-sm-12'>
				 <tr>
					 <th class='col-sm-1'>Category Name</th>
					 <th class='col-sm-1'>Title</th>
					 <th class='col-sm-4'>Content</th>
					 <th class='col-sm-2'>Date Uploaded</th>
					 <th class='col-sm-1'></th>
					 <th class='col-sm-1'></th>
				 </tr>".$news."
			 <tr>		 
				 <td colspan='2'>
				  <form action='UploadNews.php'>
				 <input name='back' type='submit'  value='BACK' class='txt2'>
				 </form>
				 </td>
			 </tr>	 
			 </table>
			";
		}
	?>
</section>
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
    <div class="col-sm-3"><img src="../../images/footer-logo.jpg" alt="World Education"> </div>
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
<script src="../../assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="../../assets/jquery/jquery.animateNumber.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../assets/easing/jquery.easing.min.js"></script> 
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="../../assets/wow/wow.min.js"></script> 
<script src="../../assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="../../js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83282272-2', 'auto');
  ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from sbtechnosoft.com/education-world/multiple-pages/classic-news.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 11:34:57 GMT -->
</html>