<?php
require ('connection/conect.php');

	$sql = "SELECT * FROM images";

	$res = $con -> query($sql);
ob_start();
session_start();
require ("signin.php");
if(isset($_SESSION['Register']))
{
	if($_SESSION['Register'] == "Registered")
	{
		header('Location: index.php');
	}
}
/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');*/
//==NEXT=
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

					$_SESSION["initials"] = $inameUp.$ilnameUp;

					$_SESSION["name"] = $name;

					$_SESSION["lname"] = $lname;

					$_SESSION["sname"] = $sname;

					$_SESSION["dob"] = $getday."/".$getmongth."/".$getyear;

					$_SESSION["gender"] = $gender;

					$_SESSION["ID_number"] = $_POST["ID_number"];

					$_SESSION["Present_school"] = $_POST["Present_school"];

					$_SESSION["Learners_address"] = $_POST["Learners_address"];

					$_SESSION["citizenship"] = $citizenship;

					$_SESSION["username"] = $username;

					$_SESSION["password"] = $password;
					$_SESSION["Home_Language"] = $_POST['Home_Language'];

					$_SESSION["Mobile_number"] = $_POST["Mobile_number"];
					
					$_SESSION["Relative"] = $_POST["rel_First_name"]."-".$_POST["rel_Surname"]."-".$_POST["grade_rel"]."-".$_POST["section_rel"];

					$_SESSION['grade'] = $_POST['grade'];
					$_SESSION['Email'] = $_POST['Email'];
					
					//Inserting documents

					$doc_name = "ID/Certeficate".$id;
					$myfile = $_FILES['myfile']['name'];
					$tmp_name = $_FILES['myfile']['tmp_name'];
					if($myfile&&$doc_name)
					{
						$check = $con -> query("SELECT * FROM images WHERE username = '$username'");
						$number = mysqli_num_rows($check);
						
						if( $number < 1 && isset($_POST['next']))
						{
							$location = $myfile;
							move_uploaded_file($tmp_name,"document/".$myfile);
							$query = $con -> query("INSERT INTO images(imagename, imagepath,image,username,docname,doc,docpath) VALUES ('{$doc_name}', '{$location}', '{$tmp_name}','{$username}','','','')");
							$_SESSION["doc_name"] = $doc_name;
							$_SESSION["report"] = "Report".$id;
						}
					}	
						header('Location: Parent-details.php');
				 }

				 else

				 {

					 $errorid = "Your alreadey exist in the system";

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

      <?php

	  if(isset($_SESSION['username']))

	  {

	  }

	  else

	  {

		  echo "

      <div class='col-md-8 col-sm-6'>

        <ul class='top-right pull-right '>

          <!-- Login -->

          <li class='login'><a href='javascript:void(0)'><i class='fa fa-lock'></i>Login</a>

            <div class='login-form'>

              <h4>Login</h4>

              <form action='' method='post'>

                <input type='text' name='username' placeholder='Username'>

                <input type='password' name='password' placeholder='Password'>

                <button type='submit' name='login' class='btn'>Login</button>

              </form>

            </div>

          </li>

        </ul>

      </div>";

	  }

	  ?>

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

              </li>

              <li><a href="about-us.php">About Us</a></li>

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

          <h2>LEARNER'S PARTICULARS</h2>

        </div>

        </div>
		<script>
                	function charsonly(input)
					{
						var regex = /[^a-zA-Z]/g;
						input.value = input.value.replace(regex, "");
					}
                </script>
          <div class="col-sm-12 col-md-12 no-space-right">

          <div class="col-sm-12 col-md-9 no-space-left" style="text-align:center; padding-left:25%;">

            <div class="form"  style="text-align:center; border-radius:10px;">

              <form action="Apply.php" method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">
<!--MUST CHANGE-->
                <input type="text" required placeholder="Surname" value="<?php if(isset($_SESSION["sname"])){echo $_SESSION["sname"];}else if(isset($sname)){echo $sname;}else { echo '';}?>" name="Surname" class="txt" onKeyUp="charsonly(this)">

                <input type="text" required placeholder="First name" value="<?php if(isset($_SESSION["name"])){ echo $_SESSION["name"];} else if(isset($name)){echo $name;}else { echo '';}?>" name="First_name" class="txt" onKeyUp="charsonly(this)">

                <input type="text" required placeholder="Last name" value="<?php if(isset($_SESSION["lname"])){ echo $_SESSION["lname"];} else if(isset($lname)){echo $lname;}else { echo '';}?>" name="Last_name" class="txt" onKeyUp="charsonly(this)">

                <script>
                	function numbersonly(input)
					{
						var regex = /[^0-9]/g;
						input.value = input.value.replace(regex, "");
					}
                </script>
                <input type="text" required placeholder="ID Number" value="<?php if(isset($_SESSION["ID_number"])){ echo $_SESSION["ID_number"];} else if(isset($id)){echo $id;}else { echo '';}?>" name="ID_number" class="txt" onKeyUp="numbersonly(this)" maxlength="13">
                 <?php

                	if(isset($validity))

					{

						echo "<p style='color:red'>".$validity."You can not proceed</p>";

					}
					else
					if(isset($errorid))

					{

						echo "<p style='color:red'>".$errorid."</p>"."You can not proceed.";

					}
					?>
                 <select style="width:100%; height:45px; margin-bottom:10px;margin-top:10px"  name="grade" required>
                  <option value="">Select Grade</option>
                  <option value="08">8</option>
                  <option value="09">9</option>
                  <option value="10">10</option>
                 <option value="11">11</option>
               </select>
      			<?php
                        if(isset($errorG))
						{
							echo "<p style='color:red'>".$errorG."</p>";
						}

				?>

                <input type="text" required placeholder="Mobile Number" value="<?php if(isset($_SESSION["Mobile_number"])){ echo $_SESSION["Mobile_number"];} else if(isset($_POST["Mobile_number"])){echo $_POST["Mobile_number"];}else { echo '';}?>" name="Mobile_number" class="txt" onKeyUp="numbersonly(this)" maxlength="10">

                <table>

                	<tr>

                    	<th style="text-align:center; color:#fff;"><em>Upload ID/Certificate Copy</em></th>

                        <tr>

                        	<td style="color:#fff;"><input type="file" style="width:100%; height:20x; margin-bottom:30px;" required placeholder="Insert image" value="" name="myfile" class="txt"></td>

                        </tr>

                    </tr>

                </table>

                <input type="text" required placeholder="Present School" value="<?php if(isset($_SESSION["Present_school"])){ echo $_SESSION["Present_school"];} else if(isset($_POST["Present_school"])){echo $_POST["Present_school"];}else { echo '';}?>" name="Present_school" class="txt">
                
                
                
                    <td><input type="text" placeholder="Email" value="<?php if(isset($_POST["Email"])){echo $_POST["Email"];}else { echo '';}?>" name="Email" class="txt"></td>

<<<<<<< HEAD
=======
                    <td><input style="width:100%; height:45px; margin-bottom:0px" type="email" placeholder="Email" value="<?php if(isset($_POST["Email"])){echo $_POST["Email"];}else { echo '';}?>" name="Email" class="txt"></td>


=======
=======

>>>>>>> 53e69feb3b8f36da9955ee3e322b047aba0738a4

                    <td><input type="homeAdd" placeholder="Home Address" value="<?php if(isset($_POST["Address"])){echo $_POST["Email"];}else { echo '';}?>" name="Email" class="txt"></td>

                    <td><input style="width:100%; height:45px; margin-bottom:0px" type="email" placeholder="Email" value="<?php if(isset($_POST["Email"])){echo $_POST["Email"];}else { echo '';}?>" name="Email" class="txt"></td>

<<<<<<< HEAD
=======

>>>>>>> 795b01f2913f7203a9719a0a7892be4229774076

>>>>>>> f695deac1508654f2965b03659f17378afe378a8
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
>>>>>>> 53e69feb3b8f36da9955ee3e322b047aba0738a4
                <textarea value="<?php if(isset($_SESSION["Learners_address"])){ echo $_SESSION["Learners_address"];}else { echo '';}?>" placeholder="Learners Address" name="Learners_address" type="text" class="txt_3" required></textarea>
                <br><br>
               <select style="width:100%; height:45px; margin-bottom:10px" required name="Home_Language">
             	  <option value="">Select Your Home Language</option>
                  <option value="Zulu">Zulu</option>
                  <option value="English">English</option>
                  <option value="Afrikaans">Afrikaans</option>
                  <option value="Sesotho">Sesotho</option>
                  <option value="Sesotho">Xhosa</option>
                  <option value="Other">Other</option>
              </select>

                <table style="color:#fff;" class="col-sm-12">

                	<tr><th colspan="4" style="text-align:center;"><em>Relative(s) @ Bhevu H.</em></th></tr>

                	<tr>

                    	<th>Name</th>

                        <th>Surname</th>

                        <th>Grade</th>

                        <th>Section</th>

                    </tr>

                    <tr style="color:black;">

                    	<td><input type="text" placeholder="First name" value="<?php if(isset($_POST["rel_First_name"])){echo $_POST["rel_First_name"];}else { echo '';}?>" name="rel_First_name" class="txt" onKeyUp="charsonly(this)"></td>

                        <td><input type="text" placeholder="Surname" value="<?php if(isset($_POST["rel_Surname"])){echo $_POST["rel_Surname"];}else { echo '';}?>" name="rel_Surname" class="txt" onKeyUp="charsonly(this)"></td>

                        <td class="col-sm-3">
                        	<select style="width:125px; height:44px; margin-left:-30px; margin-top:1px;" name="grade_rel">
                              <option value="Please Select">Grade</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                             <option value="11">11</option>
			               </select>
                        </td>
                        <td class="col-sm-3">
                        	<select style="width:125px; height:44px; margin-left:-30px; margin-top:1px;" name="section_rel">
                              <option value="Please Select">Section</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                             <option value="D">D</option>
			               </select>
                        </td>

                    </tr>

                </table>

                <table style="width:100%;">

                	<tr>

                    	<th colspan="2" style=" text-align:center; color:#fff;">Parent/Gaurdian</th>

                    </tr>

                    <tr>

                    	<td style="color:#fff;"><input type="radio" name="elder" <?php if (isset($elder) && $elder=="Parent") {$elder="Parent";}?> value="PARENT">Parent</td>

                        <td style="color:#fff;"><input type="radio" name="elder" <?php if (isset($elder) && $elder=="Gardien") {$elder="Gardien";}?> value="GAURDIEN">Gaurdien</td>

                    </tr>
                    <tr>
                    	<?php
                        	if(isset($_SESSION['Eldererror']))
							{
								echo "<td colspan='2'>".$_SESSION['Eldererror']."</td>";
							}
							else if (isset($_SESSION['Eldererror']) && isset($_POST['next']))
							{
								session_destroy();
								unset($_SESSION['Eldererror']);
							}
						?>
                    </tr>

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