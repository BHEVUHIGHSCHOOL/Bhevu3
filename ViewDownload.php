<?php
include ("connection/conect.php");

session_start();
$Year = $con -> query("SELECT * FROM Year");

$learner = $con -> query ("SESLECT * FROM learner WHERE IDNumber = '$_SESSION[ID_number]'");
$numlearner = mysqli_num_rows($learner);
if($numlearner>0)
{
	$data = $learner -> fetch_array(MYSQLI_BOTH);
	
	$_SESSION['Grade'] = $data['Grade'];
	
	$Papers = $con -> query ("SELECT * FROM Question_pprs  WHERE Grade = '$_SESSION[Grade]'");
}
?>