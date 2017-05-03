<?php
if(isset($_POST['login']))

{

	$username = $_POST['username'];

	$password = $_POST['password'];

	

	$admin = $con -> query ("SELECT * FROM qazwsxedc WHERE username = '$username' and password = '$password'");

	$resultadmin = mysqli_num_rows($admin);

	

	//Learner

	$learner = $con -> query ("SELECT * FROM learner WHERE Username = '$username' and Password = '$password'");

	$resultlearner = mysqli_num_rows($learner);

	

	//Parent

	$parent = $con -> query ("SELECT * FROM parent WHERE Username = '$username' and Password = '$password'");

	$resultparent = mysqli_num_rows($parent);

	

	if($resultadmin>0)

	{

		$queryadmin = $admin -> fetch_array(MYSQLI_BOTH);

		$_SESSION['usernamea'] = $queryadmin['username'];

		$_SESSION['userid'] = $queryadmin['userid'];


			header("Location:Admin-Page.php");
		

		//parent

		$queryparent = $parent -> fetch_array(MYSQLI_BOTH);

	}
	else if($resultlearner>0)
	{
		//Learner

		$querylearner = $learner -> fetch_array(MYSQLI_BOTH);

		$_SESSION['username'] = $querylearner['Username'];

		$_SESSION["ID_number"] = $querylearner['IDNumber'];

		$_SESSION['Status'] = $querylearner['Status'];
		
		$_SESSION['Register'] = $querylearner['Register'];
		$_SESSION['Firstname'] = $querylearner['Firstname'];
		$_SESSION['Surname'] = $querylearner['Surname'];
		
		$_SESSION['stream'] = $querylearner['Stream'];
		if(isset($_SESSION['username']))

		{

			//learner
			//Approved learner
			if($_SESSION['Status'] == "Approved" && $_SESSION['Register'] == "Not Registered")
			{
				$_SESSION['Grade'] = $querylearner['Grade'];
				
				if($_SESSION['Grade'] == "10" || $_SESSION['Grade'] == "11")
				{
					$retuning101112 = $con -> query ("select * from Subjects101112 where StudID = '$_SESSION[ID_number]'");
					 
					$resultretuning101112 = mysqli_num_rows($retuning101112);
					
					if($resultretuning101112<1)
					{
						$_SESSION["non-returning"] = "";
						header('Location: RegisterSubj.php');
					}
					else
					{
						$_SESSION["returning"] = "";
						header('Location: ConfirmSubj.php');
					}
				}
				else
				{
					$retuning89 = $con -> query ("select * from Subjects89 where StudID = '$_SESSION[ID_number]'");
					
					$maths = $retuning89 -> fetch_array(MYSQLI_BOTH);
					 $Subj = $maths['sibj1'];
					 
					$resultretuning89 = mysqli_num_rows($retuning89);
					
					if($resultretuning89<1)
					{
						$_SESSION["non-returning"] = "";
						header('Location: ConfirmSubj.php');
					}
					else
					{
						$_SESSION["returning"] = "";
					header('Location: ConfirmSubj.php');
					}
					
				}
				$_SESSION['report'] = "Report".$_SESSION["ID_number"];
			}
			//Registered learner
			else if($_SESSION['Register'] == "Registered")
			{
				header('Location: index.php');
			}
			else
			{
				$pic = $con -> query ("select * from images where username = '$username'");
				while ($res = $pic ->fetch_array(MYSQLI_BOTH))
				{
					$_SESSION["query2"]=$res['docname'];
					if(($_SESSION["query2"]) == '')
					{
						$_SESSION['Empty'] = "";
						$_SESSION['report'] = "Report".$_SESSION["ID_number"];
						header('Location: After-Confirm.php');
					}
					else
					{
						$_SESSION['report'] = "Report".$_SESSION["ID_number"];
						header('Location: Waiting.php');
					}
				}
			}

		}
	}
	else

	{

		$error = "<p style='color:red'>User Account not found.....</p>";

	}

}

?>