<?php require('connection/conect.php');?>

<?php
ob_start();
session_start();
if(!isset($_SESSION["elder"]))
{
	$_SESSION['Eldererror'] = "<p style='color:red;'>Please Select</p>";
	header ("Location: Apply.php");
}
if(isset($_POST['next']))

{

   			$idp = $_POST["ID_number"];

            $namep = $_POST["First_name"];

            $lnamep = $_POST["Last_name"];

            $snamep = $_POST["Surname"];

			$cellnump = $_POST["cell"];



            //initials

            $iname = substr($namep,0,1);

			$inameUp = strtoupper($iname);

            $ilname = substr($lnamep,0,1);

			$ilnameUp = strtoupper($ilname);

            $isname1 = substr($snamep,0,1);

			$isname1Up = strtoupper($isname1);

            $isname2 = substr($snamep,1);

			$isname2Low = strtolower($isname2);

			

            $initials = "Initials :" . " " . $inameUp. "." . " " . $ilnameUp . "." . " " . $isname1Up . $isname2Low . "<br/>";

            //fullnames

            $fname2 = substr($namep,1);

			$fname2Low = strtolower($fname2);

            $flname2 = substr($lnamep,1);

			$flname2Low = strtolower($flname2);



            $fullnames = "First Name :" . " " . $inameUp . $fname2Low . "<br/>" . "Second Name :" . " " . $ilnameUp . $flname2Low . "<br/>" . "Surname :" . " " . $isname1Up . $isname2Low . "<br/>";



            $length = strlen($idp);

            $months = substr($idp,2,2);

			$password = $inameUp.$ilnameUp.$months;

			$username = $months.$isname1Up.$isname2Low;

            if ($length == 13 && $months > 0 && $months < 13)

            {

                //Date of birth

                //get day

                $day = substr($idp,4,2);

                if ($day <= 10)

                {

                    $getday = "0" . $day . " ";

                }

                else

                    $getday = $day . " ";



                //get month

                //array

                $month = array( "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                $montha = array( 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13 );

                for ($i = 0; $i < 13; $i++)

                {

                    if($months == $montha[$i])

                    {

                        $getmongth = $month[$i] . " ";

                    }

                }



                //get year

                $year = substr($idp,0,2);

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

                    if ($age > 25)

                    {

                        

                    }

					else

					{

						$getage = "This person can not be assigned to you as a Parent." . "<br/>" . "Age : " . $age . "<br>";

					}

                }

                //2000's

                else if ($year < 18)

                {

                    $age = 2017 - (2000 + $year);

                    if($age>25)

                    {

                        

                    }

					else

					{

						$getage = "This person can not be assigned to you as a parent." . "<br/>" . "Age :" . " " . $age . "<br>";

					}

                }



                //get gender

                $output = substr($idp,6,1);

                if ($output >= 5)

                {

                    $gender = "Male";

                }

                else

                {

                    $gender = "Female";

                }



                //Citizenship

                $citizen = substr($idp,10,1);

                if($citizen == 0)

                {

                    $citizenship = "Citizenship :" . " " . "SA Citizen.";

                }

                else

                {

                    $citizenship = "Citizenship :" . " " . "Non SA Citizen.";

                }

            }

            else

            {

                $validity = "Invalid ID number!!!!";

            }

			

			//process

			if(isset($getday))

						{



							$checkp = $con -> query ("select * from parent where First_Name ='$namep' && Second_Name = '$lnamep'");

							$checkp1 = $con -> query ("select * from parent where Surname = '$snamep' && ID_Number = '$idp'");

							$checkid = $con -> query ("select * from parent where ID_Number  = '$idp'");

							$checkcell = $con -> query ("select * from parent where Cellphone = '$cellnump'");

							$numcell = mysqli_num_rows($checkcell);

							$numid = mysqli_num_rows($checkid);

							$nump = mysqli_num_rows($checkp);

							$nump1 = mysqli_num_rows($checkp1);

							if($nump>0 && $nump1>0 && $numcell>0)

							{

								$array = $checkp -> fetch_array(MYSQLI_BOTH);

								//sdfghnm,

								//Display

								$_SESSION["parent"] = $array['Parent_Gardien'];

								$_SESSION["title"] = $array['Title'];

								$_SESSION["First_name"] = $array['First_Name'];

								$_SESSION["Last_name"] = $array['Second_Name'];

								$_SESSION["Surname"] = $array['Surname'];

								$_SESSION["ID"] = $array['ID_Number'];

								$_SESSION["email"] = $array['Email'];

								$_SESSION["dob"] = $array['DOB'];

								$_SESSION["gender"] = $array['Gender'];

								$_SESSION["Home Address"] = $array['Home_Address'];

								$_SESSION["Postal Address"] = $array['Postal_Address'];

								header('Location: confpar.php');

							}

							else if($numid>0)

							{

								$parent = "That parent's Id already exists,are you sure you are inserting incorect info?Please re-check!";	

							}

							else if($numcell>0)

							{

								$parent = "That parent's cellphone number already exists,are you sure you are inserting incorect info?Please re-check!";

							}

							else

							{

								//to database

								$_SESSION["initialsp"] = $inameUp.$ilnameUp;

								$_SESSION["Relationship"];
								
								if($_POST['title'] == 'Please_Select')
								{
									$errorG = "Please Select Grade";
								}
								else
								{
									$_SESSION['titlep'] = $_POST['title'];
								}

								$_SESSION["emailp"] = $_POST["email"];

								$_SESSION["namep"] = $namep;

								$_SESSION["lnamep"] = $lnamep;

								$_SESSION["snamep"] = $snamep;

								$_SESSION["dobp"] = $getday."/".$getmongth."/".$getyear;

								$_SESSION["genderp"] = $gender;

								$_SESSION["ID_numberp"] = $_POST["ID_number"];

								$_SESSION["Home_Addressp"] = $_POST["Home_Address"];

								$_SESSION["Postal_Addressp"] = $_POST["Postal_Address"];

								$_SESSION["citizenshipp"] = $citizenship;

								$_SESSION["usernamep"] = $username;

								$_SESSION["passwordp"] = $password;

								$_SESSION["Cellphone"] = $cellnump;
								
								$_SESSION["Workphone"] = $_POST['work'];
								$_SESSION["Homephone"] = $_POST['home'];

								$_SESSION["LearnersIDp"] = $_SESSION["ID_number"];

								header('Location: Confirm-details.php');

							}

							

						}

}
if(isset($_POST["parent"]))
{
	$_SESSION["parent"] = ($_POST["parent"]);
}
else 
{
	$error = "<p style='color:red;'>PLease select your elder.</p>";
}
?>



<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bhevu High School</title>

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

        </ul>

      </div>

    </div>

  </div>

  <div class="logo-bar hidden-xs">

    <div class="container">

      <!-- Logo -->

      <div class="row">

        <div class="col-sm-4"><a href="index.php"> <img src="images/logo.png" alt="Education World"></a> </div>

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

              <li><a href="about-us.php">About us</a></li>

              <li><a href="contact-us.php">Contact Us</a></li>

            </ul>

          </div>

          <!-- /.navbar-collapse -->

        </div>

      </nav>

    </div>

  </div>
  <!--<script>
  setTimeout(function){ var a=document.createElement("script")}
  </script>-->
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

        <div class="container" style="border-color:#F7F2F2; margin-left:-3px">

        <div class="col-sm-12">

          <h2>

          <?php

				if(isset($_SESSION["elder"]))

				{

					echo $_SESSION["elder"]."'S"." ";

				}
				

		 ?> PARTICULARS</h2>

        </div>

        </div>

          <div class="col-sm-12 col-md-12 no-space-right">	


          <div class="col-sm-12 col-md-9 no-space-left" style="text-align:center; padding-left:25%;">

            <div class="form"  style="text-align:center; border-radius:10px; border:dashed">
              <form action="" method="post" id="contactFrm" name="contactFrm">
              
              <?php
			  if(isset($_SESSION["elder"]))
			    {
					if($_SESSION["elder"] == "PARENT")
					{
                    	echo"
						<table style='width:100%;'>
							<tr>
								<td style='color:#fff;'><input type='radio' name='elder'value='PARENT'>"."Father"."</td>
								<td style='color:#fff;'><input type='radio' name='elder' value='GUADIEN'>"."Mother"."</td>	
							<tr>
						</table>";
						if (isset($parent) && $parent=="Gardien") {$parent="Gardien";}
						if (isset($parent) && $parent=="Gardien") {$parent="Gardien";}				
					}
					else
					{
						echo "<input type='text' required placeholder='Relationship(e.g Aunty)' value='' name='parent' class='txt'>";
					}
				}
				?>

               <!-- <input type="text" required placeholder="Father or Mother" value="" name="parent" class="txt">-->
                <select style="width:100%; height:45px; margin-bottom:10px" name="title" required>
                  <option value="Please Select" placeholder="Select Title">Select Title</option>
                  <option value="MR">MR</option>
                  <option value="MRS">MRS</option>
                  <option value="MRS">MISS</option>
              </select>
              
               <!-- <input type="text" required placeholder="Tittle(e.g Mr or Mrs)" value="" name="title" class="txt">-->

                <input type="text" required placeholder="First name" value="<?=((isset($_SESSION["namep"]))?$_SESSION["namep"]:'');?>" name="First_name" class="txt" onKeyUp="charsonly(this)">

                <input type="text" required placeholder="Last name" value="<?=((isset($_SESSION["lnamep"]))?$_SESSION["lnamep"]:'');?>" name="Last_name" class="txt" onKeyUp="charsonly(this)">

                <input type="text" required placeholder="Surname" value="<?=((isset($_SESSION["snamep"]))?$_SESSION["snamep"]:'');?>" name="Surname" class="txt" onKeyUp="charsonly(this)">

                <input type="text" required placeholder="ID Number" value="<?=((isset($_SESSION["ID"]))?$_SESSION["ID"]:'');?>" name="ID_number" class="txt" onKeyUp="numbersonly(this)" maxlength="13">

                <?php

                	if(isset($validity))

					{

						echo "<p style='color:red'>".$validity."</p>";

					}

					if(isset( $getage))

					{

						echo "<p style='color:red'>".$getage."</p>";

					}

				?>
				<script>
                	function numbersonly(input)
					{
						var regex = /[^0-9]/g;
						input.value = input.value.replace(regex, "");
					}
                </script>
                <script>
                	function charsonly(input)
					{
						var regex = /[^a-zA-Z]/g;
						input.value = input.value.replace(regex, "");
					}
                </script>
                <input type="text" required placeholder="Email" value="<?=((isset($_SESSION["ID"]))?$_SESSION["ID"]:'');?>" name="email" class="txt">

                <textarea placeholder="Physical/Home Address" name="Home_Address" type="text" class="txt_3"></textarea>

                <textarea placeholder="Postal Address" name="Postal_Address" type="text" class="txt_3"></textarea>

                <table style="color:#fff;">

                	<tr>

                    	<th colspan="4" style="text-align:center;">

                        	<em>Contact details</em>

                        </th>

                        <td>

                        <tr style="color:black;">

                            <td><input type="text"  placeholder="Home(036.....)" value="<?=((isset($_SESSION["Homephone"]))?$_SESSION["Homephone"]:'');?>" name="home" class="txt" onKeyUp="numbersonly(this)" maxlength="10"></td>

                            <td><input type="text"  placeholder="Work(036...)" value="<?=((isset($_SESSION["Workphone"]))?$_SESSION["Cellphone"]:'');?>" name="work" class="txt" onKeyUp="numbersonly(this)" maxlength="10"></td>

                            <td><input type="text" required placeholder="Cell(086....)" value="<?=((isset($_SESSION["Cellphone"]))?$_SESSION["Cellphone"]:'');?>" name="cell" class="txt" onKeyUp="numbersonly(this)" maxlength="10"></td>

                        </tr>	

                        </td>     

                    </tr>

                    <?php

                    	if(isset($parent))

						{

							echo "<p style='color:red;'>".$parent."</p>";

						}

					?>

                </table>

                <input type="submit" value="Next..." name="next" class="txt2">

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