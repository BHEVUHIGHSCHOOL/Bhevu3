<?php 
	ob_start();
	$con = mysqli_connect("localhost","root","");
	
	//CODE 1st
	if($con)
	{
		$dababase = $con -> query ("CREATE DATABASE Bhevu");
		if($dababase)
		{
			$con -> select_db("Bhevu");
			$tbimages = $con -> query ("CREATE TABLE images(imagename varchar(200), imagepath varchar(400), image blob, id int(11), username text, docname text, doc text, docpath text)");
			
			if($tbimages)
			{
				$tblearner = $con -> query ("CREATE TABLE Learner(Surname text(200), Firstname text(400), LastName text, IDNumber text(13), Mobilenumber text, PresentSchool varchar(50), LearnersAddress text, HomeLanguage text, Password text, Username text, Gender text, Citizenship text, DOB text, Initials text, Elder text, Relative text, ElderID text, Status varchar(50), Grade text)");
				
				if($tblearner)
				{
					$tbparent = $con -> query ("CREATE TABLE Parent(Parent_Gardin varchar(10), Title varchar(5), First_Name varchar(30), Second_Name varchar(30), Surname varchar(20), ID_Number varchar(13), Email varchar(50), Home_Address varchar(100), Postal_Address varchar(100), Gender text, Password text, Username text, Citizenship text, DOB text, Initials text, Cellphone text)");
					
					if($tbparent)
					{
						$tbqazwsxedc = $con -> query ("CREATE TABLE qazwsxedc(userid int(1), username text, password text)");
						
						if($tbqazwsxedc)
						{
							$tbrejected = $con -> query ("CREATE TABLE rejected(Citizenship text, DOB text, Elder text, ElderID text, Firstname text, Gender text, HomeLanguage text, IDNumber text, Initials text, LastName text, LearnersAddress text, Mobilenumber text, Password text, Relative text, Status text, Surname text, Username text)");
							
							if($tbrejected)
							{
								$tbstaff = $con -> query ("CREATE TABLE staff(Initials text, Firstname text, Lastname text, Surname text, DOB text, Gender text, IDNumber text, Email text, Citizenship text, Username text, Password text, Mobilenumber text, Phase text, Position text)");
								//Ends here with the table of the staff
							}
							else
							{
								echo 'Table of rejected learners not created.'.mysqli_error();
							}
						}
						else
						{
							echo 'Table of Admin not created.'.mysqli_error();
						}
					}
					else
					{
						echo 'Table of Parents not created.'.mysqli_error();
					}
				}
				else
				{
					echo 'Table of Learners not created.'.mysqli_error();
				}
			}
			else
			{
				echo 'Table of Cetificates not created.'.mysqli_error();
			}
		}
		else
		{
			$con -> select_db("Bhevu");
		}
	}
	else
	{
		echo "Could not connect.".mysqli_error();
	}
?>

