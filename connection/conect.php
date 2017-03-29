<?php 
	ob_start();
	$con = mysqli_connect("localhost:81","root","ds3(bhevu)");
if(!$con)
	{
		die ("Could not connect:".mysql_error());
	}
	if(mysql_query("create database ds3(bhevu)",$con))
	{
		echo "Database creted </br>";
	}
	else
	{
		echo "Error creating database".mysql_error();
	}
	
	mysql_select_db("ds3(bhevu)",$con);




?>

<?php

if(isset($con))

{

}

else

{

	die ('Could not connect'.mysqli_error());

}

?>