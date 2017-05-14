<?php
 //require_once("/../../connection/conect.php");
 
 $update = $con -> query("select * from news limit 10");
 $num = mysqli_num_rows($update);
 if($num>0)
 {
	 while($results = mysqli_fetch_array($update))
	 {
		 $_SESSION['catname']  = $results[0];
			 $_SESSION['newstitle']  = $results[1];
			 $_SESSION['story']  = $results[2];
			 $_SESSION['time']  = $results[3];
			 $_SESSION['attach']  = $results[4];
			 $_SESSION['Type'] = $results[5];
		 $news = "
				 <tr>
					<td>".$results[0]."</td>
					<td>".$results[1]."</td>
					<td>".$results[2]."</td>
					<td>".$results[3]."</td>
					<td><a href='UploadNews.php?edit'><span class='glyphicon glyphicon-edit'></span></a></td>
					<td><a href='Edit.php?delete-all='".$results[3]."'><span class='glyphicon glyphicon-trash'></a>														</span></td>
				 </tr>
		  ";	         
	 }
	 if(isset($_GET['delete-all']))
			{
				$delete = $con -> query("DELETE FROM news WHERE timestamp = '$_SESSION[time]'");
				
				$add = $con -> query("INSERT INTO newsold VALUES ('$_SESSION[catname]', ' $_SESSION[newstitle]', '$_SESSION[story]', '$_SESSION[time]', '$_SESSION[attach]')");
				
				if($delete)
				{
					
					$echo = "<p>Record deleted succesfully</p>";
				}
				else
				{
					$echo = "<p style='color:red;'>Failed to Delete record</p>".mysqli_error($con)."<p style='color:red;'>$_GET[delete]</p>";
				}
			}
 }
 else
 {
<<<<<<< HEAD
	 $news = "Currently no newsfeeds uploaded";
=======
//	 session_start();
	 $_SESSION['v'] = $results[3];
	 echo "
			 <tr>
			    <td>".$results[0]."</td>
				<td>".$results[1]."</td>
				<td>".$results[2]."</td>
				<td>".$_SESSION['v']."</td>
				<td><a href=' UploadNews.php'<span class='glyphicon glyphicon-edit'></span></a></td>
				<td><span class='glyphicon glyphicon-trash'></span></td>
			 </tr>
	  ";
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
 }
?>