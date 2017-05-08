<?php
if(isset($_POST["Phase"]))
{
	if($_POST["Phase"] == "Senior")
	{
		$phase = "Senior (Grade 8-9)";
	}
	else if($_POST['Phase'] == "FET")
	{
		$phase = "FET (Grade 10-12)";
	}
	else
	{
		$phase = "Both(All Grades)";
	}
}
if(isset($_POST["position"]))
{
	if($_POST["position"] == "Teacher")
	{
		$position = "Teacher";
	}
	else if($_POST['position'] == "H.O.D")
	{
		$position = "H.O.D";
	}
	else
	{
		$position = "Principal";
	}
}
?>