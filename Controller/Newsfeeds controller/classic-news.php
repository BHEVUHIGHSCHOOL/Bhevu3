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
          <?php include ("../sign in/logins.php");?>
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
  <div class="container">
    <div class="row">
      <div class="inner-wrapper-main news">
        <div class="col-sm-7 col-md-8">
          <?php 
		  		$conect = require ("../../connection/conect.php");
		  		if(!isset($_GET['Accademic']) && !isset($_GET['Cultural']) && !isset($_GET['Fundraising']) && !isset($_GET['Sports'])){ include ("View_news.php");}
		  		else if(isset($_GET['Accademic']))
				{
					$acc = $con -> query("select * from news where catname = 'Accademics'");
					
					while($result = mysqli_fetch_array($acc))
					{
						$num = mysqli_num_rows($acc);
						if($num>0)
						{
							echo '
								<div class="news-info">
									<div class="news-thumb"><img src="documents/'.$result[4].'" alt="News Image"> </div>
									<div class="news-cnt">
									  <h3>'.$result[1].'</h3>
									  <div class="news-tags">
										<ul class="time">
										  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
										  <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[3].'</li>
										</ul>
									  </div>
									  <p>'.$result[2].'</p>
									</div>
								  </div>
							';
						}
						else
						{
							echo '<p>There are currently no newsfeeds uploaded under this category.
							<br><a href:"classic-news.php">Back</a></p>';
						}
					}
				}
				else if(isset($_GET['Cultural']))
				{
					$cult = $con -> query("select * from news where catname = 'Cultural Activities'");
					
					while($result1 = mysqli_fetch_array($cult))
					{
						$num = mysqli_num_rows($cult);
						if($num>0)
						{
							echo '
								<div class="news-info">
									<div class="news-thumb"><img src="documents/'.$result1[4].'" alt="News Image"> </div>
									<div class="news-cnt">
									  <h3>'.$result1[1].'</h3>
									  <div class="news-tags">
										<ul class="time">
										  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
										  <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result1[3].'</li>
										</ul>
									  </div>
									  <p>'.$result1[2].'</p>
									</div>
								  </div>
							';
						}
						else
						{
							echo '<p>There are currently no newsfeeds uploaded under this category.
							<br><a href:"classic-news.php">Back</a></p>';
						}
					}
				}
				else if(isset($_GET['Fundraising']))
				{
					$fund = $con -> query("select * from news where catname = 'Fundraising events'");
					
					while($result2 = mysqli_fetch_array($fund))
					{
						$num = mysqli_num_rows($fund);
						if($num>0)
						{
							echo '
								<div class="news-info">
									<div class="news-thumb"><img src="documents/'.$result2[4].'" alt="News Image"> </div>
									<div class="news-cnt">
									  <h3>'.$result2[1].'</h3>
									  <div class="news-tags">
										<ul class="time">
										  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
										  <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result2[3].'</li>
										</ul>
									  </div>
									  <p>'.$result2[2].'</p>
									</div>
								  </div>
							';
						}
						else
						{
							echo '<p>There are currently no newsfeeds uploaded under this category.
							<br><a href:"classic-news.php">Back</a></p>';
						}
					}
				}
				else if(isset($_GET['Sports']))
				{
					$sport = $con -> query("select * from news where catname = 'Sports'");
					
					while($result3 = mysqli_fetch_array($sport))
					{
						$num = mysqli_num_rows($sport);
						if($num>0)
						{
							echo '
								<div class="news-info">
									<div class="news-thumb"><img src="documents/'.$result3[4].'" alt="News Image"> </div>
									<div class="news-cnt">
									  <h3>'.$result3[1].'</h3>
									  <div class="news-tags">
										<ul class="time">
										  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
										  <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result3[3].'</li>
										</ul>
									  </div>
									  <p>'.$result3[2].'</p>
									</div>
								  </div>
							';
						}
						else if ($num<1)
						{
							echo '
							<div class="news-info">
									<div class="news-cnt">
									  <h3>There are currently no newsfeeds uploaded under this category.
							<br><a href:"classic-news.php">Back</a></h3>
									  <div class="news-tags">
										<ul class="time">
										  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
										  <li><i class="fa fa-clock-o" aria-hidden="true"></i></li>
										</ul>
									  </div>
									  <p></p>
									</div>
								  </div>
							<p></p>';
						}
					}
				}
				?>
          <div class="news-pagination">
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span> </a> </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-5 col-md-4">
          <div class="sidebar">
          <div class="latest-blogs">
              <h2>Latest News</h2>
              <div class="latest-blog">
            	<?php include ("latestnews.php");?>
              </div>
          </div>
            <div class="unordered-list">
              <h2> Older newsfeeds</h2>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <ul>
                    <li><a href="javascript:void(0)">Mar 2016</a></li>
                    <li><a href="javascript:void(0)">Jan 2016</a></li>
                    <li><a href="javascript:void(0)">Jun 2016</a></li>
                    <li><a href="javascript:void(0)">Aug 2016</a></li>
                    <li><a href="javascript:void(0)">Oct 2016</a></li>
                    <li><a href="javascript:void(0)">Nov 2016</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <ul>
                    <li><a href="javascript:void(0)">Jul 2016</a></li>
                    <li><a href="javascript:void(0)">may 2016</a></li>
                    <li><a href="javascript:void(0)">Feb 2016</a></li>
                    <li><a href="javascript:void(0)">Apr 2016</a></li>
                    <li><a href="javascript:void(0)">Sep 2016</a></li>
                    <li><a href="javascript:void(0)">Dec 2015</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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