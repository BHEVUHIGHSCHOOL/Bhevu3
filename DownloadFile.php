<?php require ('connection/conect.php');?>
<?php
//session_start();
if(isset($_GET['dow'])) 
{
	$year = $_SESSION['year'];
	$result = $_GET['dow'];
	$res = $con -> query ("SELECT * FROM question_pprs WHERE Year = '$year'");
	
	header ('Content-Type: application/octect-stream');
	header('Content-Disposition: attachment; filename="'.basename($result).'"');
	header('Content-Length: '.filesize($result));
	readfile($result);
}
?>