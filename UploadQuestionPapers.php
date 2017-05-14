<?php
require ("connection/conect.php");

if(isset($_POST['upload']))
{
	$SubjectName  = $_POST['subjetcs'];
	$FileName = $_FILES['document']['name'];
	$temp_name = $_FILES['document']['tmp_name'];
	$Year = $_POST['year'];
	$Grade = $_POST['grade'];
	
	if($FileName)
	{
		$location = "document/QuetionPapers".$FileName;
		move_uploaded_file($temp_name,$location);
		
		
		$insert = $con -> query ("INSERT INTO Question_pprs  VALUES('$Year','$SubjectName','$temp_name','$location','$FileName','$Grade')");



		$checkyear = $con -> query ("SELECT * FROM Year WHERE Year = '$Year'");
		
		$number = mysqli_num_rows($checkyear);
		
		if($number < 1)
		{
			$chk = $con -> query ("INSERT INTO Year VALUES ('$Year')");
		}
		
	}
}

?>

?>

