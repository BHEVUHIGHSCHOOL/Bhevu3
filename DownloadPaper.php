<?php
 include ("connection/conect.php");
 
 if(isset($_POST['search']))
 {
	 $paper = $con -> query("select * from question_pprs where Subject = '$_POST[Subject]' and Year = '$_POST[Year]'");
	 
	 $num = mysqli_num_rows($paper);
	 
	 if($num > 0)
	 {
<<<<<<< HEAD
		 while ($result = mysqli_fetch_array($paper))
		 {
			$_SESSION['year']=$result['Year'];
=======
		 while ($result = mysqli_fetch_assoc($paper))
		 {
>>>>>>> cef0ceb1865295f648cc0f3d18db4bd5e6ce8280
			 echo'<table style="background-color:#fff;" class="table">
			 	<tr>
					<td>Year</td>
					<td>Question Paper</td>
					<td>Download</td>
				</tr>
				<tr>
<<<<<<< HEAD
					<td>'.$_SESSION['year'].'</td>
					<td>'.$result['QuetionPath'].'</td>
					<td><a href="ViewQuestionPapers.php?dow='.$result["Subject"].'">Download</a></td>
=======
					<td>'.$result['Year'].'</td>
					<td>'.$result['QuetionPath'].'</td>
					<td><a>Download</a></td>
>>>>>>> cef0ceb1865295f648cc0f3d18db4bd5e6ce8280
				</tr>
			 </table>';
		 }
	 }
	 else
	 {
		 echo "<p style='color:red;'>Question Paper not found,Please try to select a different year or subject.</p>";
	 }
 }
?>