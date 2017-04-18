<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
div {
    position: relative;
    height: 60px;
    width: 60px;
    background-color: red;
    -webkit-transform: rotateY(180deg);  /* Chrome, Safari, Opera */
    transform: rotateY(180deg);
}

#div1 {
    -webkit-backface-visibility: hidden;  /* Chrome, Safari, Opera */
    backface-visibility: hidden;
}

#div2 {
    -webkit-backface-visibility: visible;  /* Chrome, Safari, Opera */
    backface-visibility: visible;
}
</style>
</head>

<body>
<select name="pan">
<option value="pan1">dcfvgbhnjkm</option>
<option value="pan">dcfvgbhnjkm</option>
</select>
<?php
if($_POST['pan'] = 'pan')
{
	echo'<div id="div2">DIV 2fghjkdfgh</div>';
}
?>
</body>
</html>