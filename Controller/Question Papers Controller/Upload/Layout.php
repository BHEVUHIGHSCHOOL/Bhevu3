<?php
include ("Save.php");
include ("connection/conect.php");
$getsubjects = $con -> query ("select * from subjects where TeachersID = '$_SESSION[id_stuff]'");

$numrows = mysqli_num_rows($getsubjects);
if($numrows>0)
{
	$result = $getsubjects -> fetch_array(MYSQLI_BOTH);
	
	$_SESSION['subj1'] = $result['1st_Subject'];
	$_SESSION['subj2'] = $result['2nd_Subject'];
	$_SESSION['subj3'] = $result['3rd_Subject'];
	
	if($_SESSION['subj2'] == '' && $_SESSION['subj3'] == '')
	{
		$first = $_SESSION['subj1'];
	}
	if($_SESSION['subj3'] == '')
	{
		$first = $_SESSION['subj1'];
		$second = $_SESSION['subj2'];
	}
	else if($_SESSION['subj2'] == '')
	{
		$first = $_SESSION['subj1'];
		$third = $_SESSION['subj3'];
	}
	else
	{
		$first = $_SESSION['subj1'];
		$second = $_SESSION['subj2'];
		$third = $_SESSION['subj3'];
	}
	
}

if(isset($_GET['upload']))
{
	echo
	'
		<div class="col-sm-12 col-md-12 no-space-right">

<div class="col-sm-12 col-md-12 no-space-left" style="text-align:center;">

<div class="form"  style="text-align:center; border-radius:10px;">

<form method="post" id="contactFrm" name="contactFrm" enctype="multipart/form-data">

<table class="col-sm-12" style="color:#000; width:100%; border-radius:5px; background-color:#fff; text-align:center">

<tr>

<td class="col-sm-12" colspan="4" style="text-align:center">                        	
	<h1>UPLOAD QUESTION PAPERS</h1>
</td>

</tr>
<tr>
<td class=" col-sm-3">Year</td>
<td class=" col-sm-3">Subjects</td>
<td class=" col-sm-3">Document</td>
<td class=" col-sm-3">Grade</td>
</tr>
<tr>
<td class=" col-sm-3">
	<input class="form-group" type="text" name="year" placeholder="e.g(2000)"/>
</td>
<td class=" col-sm-3">
	<select class="form-group"  name="subjetcs" required>
		<option value="">Select Subject</option>
		';if(isset($first) && !isset($second) && !isset($third)){ echo '<option value="'.$first.'">'.$first.'</option>';}
			else if(isset($first)&&isset($second) && !isset($third)){echo '<option value="'.$first.'">'.$first.'</option>
														 <option value="'.$second.'">'.$second.'</option>';}
			else if(isset($first)&&isset($third) && !isset($second)){echo '<option value="'.$first.'">'.$first.'</option>
														 <option value="'.$third.'">'.$third.'</option>';}
			else                                  {echo '<option value="'.$first.'">'.$first.'</option>
														 <option value="'.$second.'">'.$second.'</option>
														 <option value="'.$third.'">'.$third.'</option>';}
														 
	echo'
	</select>
</td>
<td class=" col-sm-3">
	<input class="form-group"  type="file" name="document" />
</td>
<td class=" col-sm-3">
	<select class="form-group"  name="grade">
		<option value="Select">Select</option>';
		include ("grade.php");
	echo'</select>
</td>
</tr>
<tr>
<td colspan="4" class="col-sm-12">
	<input type="submit" name="upload" class="txt2" value="UPLOAD">
</td>
</tr>

</table>

</form>

</div>

</div>

</div>
	';
}
?>