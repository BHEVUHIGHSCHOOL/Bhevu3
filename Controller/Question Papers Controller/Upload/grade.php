<?php 
	$phase_Grade = $con -> query("SELECT * FROM staff where IDNumber=$_SESSION[id_stuff]");
	$result = mysqli_num_rows($phase_Grade);
	
	if($result>0)
	{
		$data = $phase_Grade ->fetch_array(MYSQLI_BOTH);
		$_SESSION['phase'] =$data['Phase'];
		if($_SESSION['phase']== 'Senior')
		{
			echo'<option value="08">Grade 8</option>
			<option value="09">Grade 9</option>';	
		}
		else if($_SESSION['phase']== 'FET')
		{
			echo'<option value="Grade 10">Grade 10</option>
			<option value="11">Grade 11</option>
			<option value="12">Grade 12</option>';	
		}
		else 
		{
			echo'<option value="08">Grade 8</option>
			<option value="09">Grade 9</option>
			<option value="10">Grade 10</option>
			<option value="11">Grade 11</option>
			<option value="12">Grade 12</option>';	
		}
	}

?>