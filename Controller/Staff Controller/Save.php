<?php
ob_start();
if(isset($_POST['next']))

{
	include ("../../connection/conect.php");
	session_start();
			$Phase = $_SESSION['phase'];
			$position = $_SESSION['position'];
   			$id = $_SESSION['id'];

            $name = $_SESSION['firstname'];

            $lname = $_SESSION['lastname'];

            $sname = $_SESSION['surname'];



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

                $_SESSION['validity'] = "Invalid ID number";
				header('Location: ../../RegisterStuff.php');

            }

			//processing

			if(isset($getday))

			{

				$exist = $con -> query ("SELECT * FROM staff where IDNumber = '$id'");

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

					$idt = $_SESSION['id'];

					$emailt = $_SESSION['email'];

					$citizenshipt = $citizenship;

					$usernamet = $username;

					$passwordt = $password;

					$Mobile_numbert = $_SESSION['mobilenumber'];
					
					include ("Documents.php");
					
					$insertsubjects = $con -> query ("insert into Subjects values ('$_SESSION[id]', '$_POST[subj1]', '$_POST[subj2]', '$_POST[subj3]')");
					
					$queryi = $con -> query("INSERT INTO images VALUES ('{$doc_namei}', '{$locationi}', '{$tmp_name}','{$username}','{$doc_nameq}', '{$tmp_nameq}', '{$locationq}')");

					$query = $con -> query("INSERT INTO staff(Initials, Firstname, Lastname, Surname, DOB,Gender, IDNumber, Email, Citizenship, Username, Password, Mobilenumber, Phase, Position, TeachingGrade)VALUES('{$initialst}', '{$namet}', '{$lnamet}', '{$snamet}', '{$dobt}', '{$gendert}', '{$idt}', '{$emailt}', '{$citizenshipt}', '{$usernamet}', '{$passwordt}', '{$Mobile_numbert}', '{$Phase}', '{$position}', '$teachingGrade')");
					
					include ("session_destr.php");
					
					header('Location: ../../Admin-Page.php');
				 }

				 else

				 {
					$_SESSION['existerror'] = "Statt member alreadey exists in the system";
					header('Location: ../../RegisterStuff.php');
				 }

			}

}
?>