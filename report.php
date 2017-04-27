<?php require ('connection/conect.php');?>
<?php
session_start();
$doc_name2 = "ID/Certeficate".$_SESSION["ID_number"];
$pic = $con -> query ("select * from images where imagename = '$doc_name2'");
while ($res = $pic ->fetch_array(MYSQLI_BOTH))
{
	if($res >0)
	{
		$docs = $res['docpath'];
	}
	else
	{
		$noimage = "There is no Document uploaded.";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bhevu&reg;</title>
</head>
<body>
<table style="width:100%; height:100% auto;">
	<tr>
    	<td><iframe style="width:100%; height:800px;" frameborder="0" src = "document/<?php echo $docs; ?>"></td>
    </tr>
</table>
</body>
</html>