<?php 
	ob_start();

	$con = mysqli_connect("www.zanzosamazingdish.co.za","yxhhnsph","*3*NRdNXKb9jRRK","yxhhnsph_ds3(bhevu)");
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


	$con = mysqli_connect("localhost","root","","ds3(bhevu)");




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