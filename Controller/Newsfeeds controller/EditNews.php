<?php
 require("/../../connection/conect.php");
 
 $update = $con -> query("select * from news limit 10");
 
 while($results = mysqli_fetch_array($update))
 {
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
 }
?>