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

if(isset($_POST['next']))

{

   			$id = $_POST["ID_number"];

            $name = $_POST["First_name"];

            $lname = $_POST["Last_name"];

            $sname = $_POST["Surname"];



            //initials

            $iname = substr($name,0,1);

			$inameUp = strtoupper($iname);

            $ilname = substr($lname,0,1);

			$ilnameUp = strtoupper($ilname);

            $isname1 = substr($sname,0,1);

			$isname1Up = strtoupper($isname1);

            $isname2 = substr($sname,1);

			$isname2Low = strtolower($isname2);

			

            $initials = "Initials :" . " " . $inameUp. "." . " " . $ilnameUp . "." . " " . $isname1Up . $isname2Low . "<br/>";

            //fullnames

            $fname2 = substr($name,1);

			$fname2Low = strtolower($fname2);

            $flname2 = substr($lname,1);

			$flname2Low = strtolower($flname2);



            $fullnames = "First Name :" . " " . $inameUp . $fname2Low . "<br/>" . "Second Name :" . " " . $ilnameUp . $flname2Low . "<br/>" . "Surname :" . " " . $isname1Up . $isname2Low . "<br/>";



            $length = strlen($id);

            $months = substr($id,2,2);

			$password = $inameUp.$ilnameUp.$months;

			$username = $months.$isname1Up.$isname2Low;

            if ($length == 13 && $months > 0 && $months < 13)

            {

                //Date of birth

                //get day

                $day = substr($id,4,2);

                if ($day <= 10)

                {

                    $getday = "0" . $day . " ";

                }

                else

				{

                    $getday = $day . " ";

				}

                //get month

                //array

                $month = array( "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                $montha = array( 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12);

                for ($i = 0; $i <12; $i++)

                {

                    if($months == $montha[$i])

                    {

                        $getmongth = $month[$i] . " ";

                    }

                }



                //get year

                $year = substr($id,0,2);

                if ($year > 17 && $year <= 99)

                {

                    $getyear = "19" . $year;

                }

                else if ($year < 18)

                {

                    if ($year < 10)

                    {

                        $getyear = "200" . $year;

                    }

                    else

                    {

                        $getyear = "20" . $year;

                    }

                }



                //Age

                //90's

                if ($year > 17 && $year <= 99)

                {

                    $age = 2017 - (1900 + $year);

                    if ($age <= 25)

                    {

                        $getage = "Age :" . " " . $age . "<br>";

                    }

                    else

                    {

                        $getage = "Your age does not allow you to create account as a learner." . "<br/>" . "Age : " . $age . "<br>";

                    }

                }

                //2000's

                else if ($year < 18)

                {

                    $age = 2017 - (2000 + $year);

                    if($age>13)

                    {

                        $getage = "Age :" . " " . $age . "<br>";

                    }

                    else

                    {

                        $getage = "Your age does not allow you to create account as a learner." . "<br/>" . "Age :" . " " . $age . "<br>";

                    }

                }



                //get gender

                $output = substr($id,6,1);

                if ($output >= 5)

                {

                    $gender = "Male";

                }

                else

                {

                    $gender = "Female";

                }



                //Citizenship

                $citizen = substr($id,10,1);

                if($citizen == 0)

                {

                    $citizenship = "SA Citizen";

                }

                else

                {

                    $citizenship = "Non SA Citizen";

                }

            }

            else

            {

                $validity = "Invalid ID number!!!!";

            }

			//processing

			if(isset($getday))

			{

				$exist = $con -> query ("SELECT * FROM learner where IDNumber = '$id'");

				$result = $exist -> fetch_array(MYSQLI_BOTH);

				if($result<1)

				{

					//to the database

					$initialst = $inameUp.$ilnameUp;

					$namet = $name;

					$lnamet = $lname;

					$snamet = $sname;

					$dobt = $getday."/".$getmongth."/".$getyear;

					$gendert = $gender;

					$idt = $_POST["ID_number"];

					$emailt = $_POST["email"];

					$citizenshipt = $citizenship;

					$usernamet = $username;

					$passwordt = $password;

					$Mobile_numbert = $_POST["Mobile_number"];

					if(empty($_POST["Phase"]))

					{

						$error = "<p style='color:red;'>PLease select phase.</p>";

					}

					else 

					{

						$Phase = ($_POST["Phase"]);

					}

					if(empty($_POST["position"]))

					{

						$error = "<p style='color:red;'>PLease select Position.</p>";

					}

					else 

					{

						$Phase = $_POST["position"];
						if($Phase == "Senior")
						{
							$teachingGrade = "8&9";
						}
						else if($Phase == "FET")
						{
							$teachingGrade = "10,11&12";
						}
						else
						{
							$teachingGrade = "All";
						}

					}

					//Inserting Qualification

					$doc_nameq = "Qualification".$id;

					$myfileq = $_FILES['qual']['name'];

					$tmp_nameq = $_FILES['qual']['tmp_name'];

					if($myfileq&&$doc_nameq)

					{

						$locationq = $myfileq;

						move_uploaded_file($tmp_nameq,"document/".$myfileq);

						$queryq = $con -> query("INSERT INTO images(imagename, imagepath,image,username) VALUES ('{$doc_nameq}', '{$locationq}', '{$tmp_nameq}','{$username}')");

						$_SESSION["doc_name"] = $doc_nameq;

					}

					

					//Inserting Id

					$doc_namei = "id".$id;

					$myfilei = $_FILES['id']['name'];

					$tmp_namei = $_FILES['id']['tmp_name'];

					if($myfilei&&$doc_namei)

					{

						$locationi = $myfilei;

						move_uploaded_file($tmp_namei,"document/".$myfilei);

						$queryi = $con -> query("INSERT INTO images(imagename, imagepath,image,username) VALUES ('{$doc_namei}', '{$locationi}', '{$tmp_name}','{$username}')");

						$_SESSION["doc_name"] = $doc_namei;

					}	

					$query = $con -> query("INSERT INTO staff(Initials, Firstname, Lastname, Surname, DOB,Gender, IDNumber, Email, Citizenship, Username, Password, Mobilenumber, Phase, Position, TeachingGrade)VALUES('{$initialst}', '{$namet}', '{$lnamet}', '{$snamet}', '{$dobt}', '{$gendert}', '{$idt}', '{$emailt}', '{$citizenshipt}', '{$usernamet}', '{$passwordt}', '{$Mobile_numbert}', '{$Phase}', '{$position}', '$teachingGrade')");

					header('Location: Admin-Page.php');

				 }

				 else

				 {

					 $error = "Your alreadey exist in the system";

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

          <h2>Register of Staff</h2>

        </div>

        </div>

          <div class="col-sm-12 col-md-12 no-space-right">

          <div class="col-sm-12 col-md-9 no-space-left" style="text-align:center; padding-left:25%;">

            <div class="form"  style="text-align:center; border-radius:10px;">

              <form action="" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">

                <input type="text" required placeholder="Surname" value="" name="Surname" class="txt">

                <input type="text" required placeholder="First name" value="" name="First_name" class="txt">

                <input type="text" required placeholder="Last name" value="" name="Last_name" class="txt">

                <input type="text" required placeholder="ID Number" value="" name="ID_number" class="txt">

                <input type="text" required placeholder="Email" value="" name="email" class="txt">

                <p>

                <?php

                	if(isset($validity))

					{

						echo "<p style='color:red'>".$validity."</p>"."You can not proceed.";

					}

					if(isset($error))

					{

						echo "<p style='color:red'>".$error."</p>"."You can not proceed.";

					}

				?>

                </p>

                <input type="text" required placeholder="Mobile Number" value="" name="Mobile_number" class="txt">

                <!--<input type="text" required placeholder="Phase" value="" name="Phase" class="txt">-->

                <!--<textarea placeholder="Learners Address" name="Learners_address" type="text" class="txt_3"></textarea>-->

                <table style="width:100%;">

                	<tr>

                    	<th colspan="3" style=" text-align:center; color:#fff;">Phase</th>

                    </tr>

                    <tr>

                    	<td style=" text-align:center; color:#fff;"><input type="radio" name="Phase" <?php if (isset($Phase) && $Phase=="Senior") {$Phase="Senior";}?> value="Senior">Senior</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="Phase" <?php if (isset($Phase) && $Phase=="FET") {$Phase="FET";}?> value="FET">FET</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="Phase" <?php if (isset($Phase) && $Phase=="Both") {$Phase="Both";}?> value="Both">Both</td>

                    </tr>

                    <hr/>

                	<tr>

                    	<th colspan="3" style=" text-align:center; color:#fff;">Position</th>

                    </tr>

                    <tr>

                    	<td style=" text-align:center; color:#fff;"><input type="radio" name="position" <?php if (isset($position) && $position=="Teacher") {$position="Teacher";}?> value="Teacher">Teacher</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="position" <?php if (isset($position) && $position=="Principal") {$position="Principal";}?> value="Principal">Principal</td>

                        <td style=" text-align:center; color:#fff;"><input type="radio" name="position" <?php if (isset($position) && $position=="HOD") {$position="HOD";}?> value="HOD">HOD</td>

                    </tr>

                </table>

                <hr/>
                
                <table class="col-sm-12" style="margin-left:-4%;">

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

                <input type="submit" value="Submit" name="" class="txt2" data-toggle="modal" data-target="#details-1">

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

<!-- Modal Start-->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
    	<div class="modal-header">
        	<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            	<span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title text-center">Staff Details</h4>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="center-block">
                                INfo
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <h4>SUBJECTS</h4>
                            <table class="col-sm-12">
                                <tr>
                                    <td>
                                        <label for="InputEnglish">English</label><input class="checkbox" type="checkbox" value="English">	
                                    </td>
                                    <td>
                                        <label for="InputIsiZulu">IsiZulu</label><input class="checkbox" type="checkbox" value="IsiZulu">	
                                    </td>
                                    <td>
                                        <label for="InputLO">Life Orientation</label><input class="checkbox" type="checkbox" value="LO">	
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-lg" data-dismiss="modal">Back</button>
                <button class="btn btn-success btn-lg" type="submit" name="next">Save</button>
            </div>
        </form>
    </div>
   </div>
</div>
<!-- Modal end -->

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