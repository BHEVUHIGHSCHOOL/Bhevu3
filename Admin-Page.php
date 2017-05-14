<?php require ('connection/conect.php');

	$sql = "SELECT * FROM images";

	$res = $con -> query($sql);

?>



<?php
ob_start();
session_start();
if(isset($_SESSION['userid']))

{

}

else

{

	header('Location: index.php');

}
if(isset($_POST['search-submit']))
{
	$id = $_POST['approved'];
	//search leaner
	$learner = $con -> query ("SELECT * FROM learner where IDNumber = '$id'");
	
	//search staff
	$staff = $con -> query ("SELECT * FROM staff where IDNumber = '$id'");
	
	//found learner
	$num_learner = mysqli_num_rows($learner);
	if($num_learner>0)
	{
		//leaner
		$result = $learner -> fetch_array(MYSQLI_BOTH);
		$approved_name = $result['Firstname'];
	}
	//found staff
	$num_staff = mysqli_num_rows($staff);
	if($num_staff>0)
	{
		//leaner
		$result = $staff -> fetch_array(MYSQLI_BOTH);
		$staff_name = $result['Firstname'];
	}	
}
include ("Controller/Admin/Pagination/pagination.php");
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

              <li><a href="qazwsxedc.php">Applicants</a></li>

              <li><a href="RegisterStuff.php">Register Staff</a></li>
              
              <li><a href="Send.php">Send SMS</a></li>

              <li><a href="Admin-Page.php">Admin</a></li>
              
              <li><a href="Controller/Newsfeeds controller/UploadNews.php">Upload newfeeds</a></li>

=======
              
              <li><a href="Admin-Page.php?Search='search'">Search</a></li>
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3

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

      <h2>Admin</h2>

    </div>

    <div class="col-sm-12 inner-breadcrumb">

      <ul>

        <li><a href="index.php">Home</a></li>

        <li>Admin</li>

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

          <div class="col-sm-12 col-md-12 no-space-left">

            <div class="form">

              <table style="background-color:#84C0C3; width:100%;">

              	<tr>

                	<th>

                    	<h2 style="color:#2274C0; text-align:center;"><em>Hello Admin</em></h2>
						<?php
						if(isset($result['IDNumber']))
						{
                        echo $result['IDNumber'];
						}
						?>
                    </th>

                </tr>

              </table>
			<?php
			  if(!isset($_GET['Search']) && !isset($_GET['Approved']) && !isset($_GET['Result']))
			  {
				  /*<!--==these are waiting learners==-->*/
			  	if($number_of_learners>0)
					{
						echo"
						<br/>
								 <hr/>
								 <br/>
								 <table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
									<tr>
										<th colspan='12' style='text-align:center;'><h4><em>Waiting List</em></h4></th>
									</tr>";
						while($row = mysqli_fetch_array($learner))
						{
							echo "
								 		<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Initials</th>
										<th style='text-align:center;'>First name</th>
										<th style='text-align:center;'>Second name</th>
										<th style='text-align:center;'>Surname</th>
										<th style='text-align:center;'>Date of Birth</th>
										<th style='text-align:center;'>Gander</th>
										<th style='text-align:center;'>ID Number</th>
									</tr>".
									"<tr>
										<td>".$row['Initials']."</td>
										<td>".$row['Firstname']."</td>
										<td>".$row['LastName']."</td>
										<td>".$row['Surname']."</td>
										<td>".$row['DOB']."</td>
										<td>".$row['Gender']."</td>
										<td>".$row['IDNumber']."</td>
									</tr>
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Parent/Guadien</th>
										<th style='text-align:center;'>Address</th>
										<th style='text-align:center;'>Home Language</th>
										<th style='text-align:center;'>Relative</th>
										<th style='text-align:center;'>Citizenship</th>
										<th style='text-align:center;'>Documents</th>
										<th style='text-align:center;'>Friendly Format</th>
									</tr>
									<tr>
										<td>".$row['Elder']."</td>                        
										<td>".$row['LearnersAddress']."</td>
										<td>".$row['HomeLanguage']."</td>
										<td>".$row['Relative']."</td>
										<td>".$row['Citizenship']."</td>
										<td><a style='color:black;' href='report.php'>Report</a><br/><a style='color:black;' href='certificate.php'>ID/Certficate</a></td>
										<td><button type='button' class='btn btn-success' onclick='openModal(".$row['IDNumber'].")'>View</button></td>
									</tr>
									<tr><td colspan='7'><hr/></td></tr>
									";
						}
						echo"
							<tr>
										<td style='color:#fff'>";
										for ($page=1;$page<=$number_of_pages;$page++)
										{
											echo 'Page(s) : <a style="color:black;" href="Admin-Page.php?page='.$page.'">'.$page.'</a>';
										}
									echo "
										</td>
									</tr>
								
						</table>
								<br/>
								<hr/>
								<br/>";
					}
					else
					{
						echo "
						<br/>
						<hr/>
						<br/>
						<table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
							<tr>
								<td><h1>There are currently no waiting applicants.</h1><td>
							</tr>
						</table>
						<br/>
						<hr/>
						<br/>
						";
					}


				/*=========== these are approved learners=========-*/
=======
				/*==== these are approved learners==-*/
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
			  	if($number_of_learners_approved>0)
					{
						echo"
						<br/>
								 <hr/>
								 <br/>
								 <table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
									<tr>
										<th colspan='12' style='text-align:center;'><h4><em>Approved Applicants</em></h4></th>
									</tr>";
						while($row_approved = mysqli_fetch_array($learner_approved))
						{
							echo "
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Initials</th>
										<th style='text-align:center;'>First name</th>
										<th style='text-align:center;'>Second name</th>
										<th style='text-align:center;'>Surname</th>
										<th style='text-align:center;'>Date of Birth</th>
										<th style='text-align:center;'>Gander</th>
										<th style='text-align:center;'>ID Number</th>
									</tr>".
									"<tr>
										<td>".$row_approved['Initials']."</td>
										<td>".$row_approved['Firstname']."</td>
										<td>".$row_approved['LastName']."</td>
										<td>".$row_approved['Surname']."</td>
										<td>".$row_approved['DOB']."</td>
										<td>".$row_approved['Gender']."</td>
										<td>".$row_approved['IDNumber']."</td>
									</tr>
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Parent/Guadien</th>
										<th style='text-align:center;'>Address</th>
										<th style='text-align:center;'>Home Language</th>
										<th style='text-align:center;'>Relative</th>
										<th style='text-align:center;'>Citizenship</th>
										<th style='text-align:center;'>Documents</th>
										<th style='text-align:center;'>Friendly Format</th>
									</tr>
									<tr>
										<td>".$row_approved['Elder']."</td>                        
										<td>".$row_approved['LearnersAddress']."</td>
										<td>".$row_approved['HomeLanguage']."</td>
										<td>".$row_approved['Relative']."</td>
										<td>".$row_approved['Citizenship']."</td>
										<td><a style='color:black;' href='report.php'>Report</a><br/><a style='color:black;' href='certificate.php'>ID/Certficate</a></td>
										<td><button type='button' class='btn btn-success' onclick='openModal(".$row_approved['IDNumber'].")'>View</button></td>
									</tr>
									<tr><td colspan='7'><hr/></td></tr>
									";
						}
						echo"
							<tr>
										<td style='color:#fff'>
										Page(s) :";
										for ($page_approved=1;$page_approved<=$number_of_pages_approved;$page_approved++)
										{
											echo '|<a style="color:black;" href="Admin-Page.php?page_approved='.$page_approved.'">'.$page_approved.'</a> |';
										}
									echo "
										</td>
									</tr>
								
						</table>
								<br/>
								<hr/>
								<br/>";
					}
					else
					{
						echo "
						<br/>
						<hr/>
						<br/>
						<table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
							<tr>
								<td><h1 style'text-aligne:center;'>There are currently no Approved applicants.</h1><td>
							</tr>
						</table>
						<br/>
						<hr/>
						<br/>";
					}
					

					/*=========== this is the staff=========-*/
=======
					/*==== this is the staff==-*/
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
			  	if($number_of_staff>0)
					{
						echo"
						<br/>
								 <hr/>
								 <br/>
								 <table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
									<tr>
										<th colspan='12' style='text-align:center;'><h4><em>Staff member(s)</em></h4></th>
									</tr>";
						while($row_staff = mysqli_fetch_array($staff))
						{
							echo "
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Initials</th>
										<th style='text-align:center;'>First name</th>
										<th style='text-align:center;'>Second name</th>
										<th style='text-align:center;'>Surname</th>
										<th style='text-align:center;'>Date of Birth</th>
										<th style='text-align:center;'>Gander</th>
										<th style='text-align:center;'>ID Number</th>
										<th style='text-align:center;'>Email</th>
									</tr>".
									"<tr>

										<td>".$row_staff['Email']."</td>                        
=======
										                       
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
										<td>".$row_staff['Initials']."</td>
										<td>".$row_staff['Firstname']."</td>
										<td>".$row_staff['Lastname']."</td>
										<td>".$row_staff['Surname']."</td>
										<td>".$row_staff['DOB']."</td>
										<td>".$row_staff['Gender']."</td>
										<td>".$row_staff['IDNumber']."</td>

=======
										<td>".$row_staff['Email']."</td> 
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
									</tr>
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Citizenship</th>
										<th style='text-align:center;'>Mobile number</th>
										<th style='text-align:center;'>Phase</th>
										<th style='text-align:center;'>Position</th>
										<th style='text-align:center;'>Teaching Grade</th>
										<th style='text-align:center;'>Documents</th>
										<th style='text-align:center;'>Friendly Format</th>
										<th></th>
									</tr>
									<tr>
										<td>".$row_staff['Citizenship']."</td>
										<td>".$row_staff['Mobilenumber']."</td>
										<td>".$row_staff['Phase']."</td>
										<td>".$row_staff['Position']."</td>
										<td>".$row_staff['TeachingGrade']."</td>
										<td><a style='color:black;' href='report.php'>Report</a><br/><a style='color:black;' href='certificate.php'>ID/Certficate</a></td>
										<td><button type='button' class='btn btn-success' onclick='openModal(".$row_staff['IDNumber'].")'>View</button></td>
									</tr>
									<tr><td colspan='8'><hr/></td></tr>
									";
						}
						echo"
							<tr>
										<td style='color:#fff'>
										Page(s) :";
										for ($page_staff=1;$page_staff<=$number_of_pages;$page_staff++)
										{
											echo '|<a style="color:black;" href="Admin-Page.php?page_approved='.$page_staff.'">'.$page_staff.'</a> |';
										}
									echo "
										</td>
									</tr>
								
						</table>
								<br/>
								<hr/>
								<br/>";
					}
					else
					{
						echo "
						<br/>
						<hr/>
						<br/>
						<table style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
							<tr>
								<td><h1 style'text-aligne:center;'>Staff record is currently empty.</h1><td>
							</tr>
						</table>
						<br/>
						<hr/>
						<br/>";
					}

=======
			  }
			  else
			  {
				  echo "<hr/>
						<br/>
						<form method='post' action='Admin-Page.php?Result=result'>
						<table class='col-sm-12' style='color:#fff; width:100%; border-radius:5px; background-color:#458CBF;'>
							<tr>
								<td colspan='3'><h1 style'text-aligne:center;'>Search</h1><td>
							</tr><tr>
									<td class='col-sm-3'>
										Please enter ID number :
									</td>
									<td class='col-sm-3'>
										<input type='text' name='approved' />
									</td>
									<td class='col-sm-3'>
										<input type='submit' value='Search' name='search-submit' class='txt2'/>
									</td>
								</tr>";
								if(isset($_GET['Result']))
								{
									if(isset($staff_name))
									{
										echo "
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Initials</th>
										<th style='text-align:center;'>First name</th>
										<th style='text-align:center;'>Second name</th>
										<th style='text-align:center;'>Surname</th>
										<th style='text-align:center;'>Date of Birth</th>
										<th style='text-align:center;'>Gander</th>
										<th style='text-align:center;'>ID Number</th>
										<th style='text-align:center;'>Email</th>
									</tr>".
									"<tr>                        
										<td>".$result['Initials']."</td>
										<td>".$result['Firstname']."</td>
										<td>".$result['Lastname']."</td>
										<td>".$result['Surname']."</td>
										<td>".$result['DOB']."</td>
										<td>".$result['Gender']."</td>
										<td>".$result['IDNumber']."</td>
										<td>".$result['Email']."</td>										
									</tr>
									<tr style='background-color:#363FA3; text-align:center;'>
										<th style='text-align:center;'>Citizenship</th>
										<th style='text-align:center;'>Mobile number</th>
										<th style='text-align:center;'>Phase</th>
										<th style='text-align:center;'>Position</th>
										<th style='text-align:center;'>Teaching Grade</th>
										<th style='text-align:center;'>Documents</th>
										<th style='text-align:center;'>Friendly Format</th>
										<th></th>
									</tr>
									<tr>
										<td>".$result['Citizenship']."</td>
										<td>".$result['Mobilenumber']."</td>
										<td>".$result['Phase']."</td>
										<td>".$result['Position']."</td>
										<td>".$result['TeachingGrade']."</td>
										<td><a style='color:black;' href='report.php'>Report</a><br/><a style='color:black;' href='certificate.php'>ID/Certficate</a></td>
										<td><button type='button' class='btn btn-success' onclick='openModal(".$result['IDNumber'].")'>View</button></td>
									</tr>
									<tr><td colspan='8'><hr/></td></tr>
									";
									}
								}
								else if(isset($approved_name))
								{
									echo $approved_name;
								}
							echo"
							</tr></td>
							</table>
						</form>
						<br/>";
			  }
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
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

</section><!-- Call to Action End -->

<!-- Footer Links Start-->

<footer>

  <div class="container">

    <div class="col-sm-3"><img src="images/footer-logo.jpg" alt="World Education"> </div>

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
<script>
   function openModal(id){
	   var data = {"id" : id}
	   jQuery.ajax({
		   url: 'modal.php',
		   method: "post",
		   data: data,
		   success: function(data){
			   jQuery('body').append(data);
			   $('#modal-info').modal('toggle');
			   },
		   error: function(){
			   alert('error');
		   }
		   });
   }
</script>
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



<!-- Mirrored from sbtechnosoft.com/education-world/multiple-pages/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 11:36:17 GMT -->

</html>