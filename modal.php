<?php
require('connection/conect.php');
  $id = $_POST['id'];
  $query = "SELECT * FROM learner WHERE IDNumber = '$id'";
  $exe = mysqli_query($con,$query);
  $result = mysqli_fetch_assoc($exe);
 ?>
<?php ob_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
    <div class="modal fade" id="modal-info" role="dialog" tabindex="-1" aria-hidden="true" aria-labelledby="modal-label">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <div class="modal-header">
               <button type="button" class="close" onclick="closeModal();"><span>&times;</span></button>
               <h4 class="modal-title text-center" aria-label="modal-label"><?php echo $result['Status'] ?> applicant</h4>
             </div>
             <div class="modal-body">
             <?php
			 echo"
             	<table>
                	<tr>
                    	<td>First name  </td>
						<td> : </td>
						<td>".$result['Firstname']."</td>
                    </tr>
                    <tr>
                    	<td>Second name  </td>
						<td> : </td>
						<td>".$result['LastName']."</td>
                    </tr>
                    <tr>
                    	<td>Surname  </td>
						<td> : </td>
						<td>".$result['Surname']."</td>
                    </tr>
                    <tr>
                    	<td>Initials  </td>
						<td> : </td>
						<td>".$result['Initials']."</td>
                    </tr>
                    <tr>
                    	<td>Date of Birth  </td>
						<td> : </td>
						<td>".$result['DOB']."</td>
                    </tr>
                    <tr>
                    	<td>Gender  </td>
						<td> : </td>
						<td>".$result['Gender']."</td>
                    </tr>
                    <tr>
                    	<td>ID Number  </td>
						<td> : </td>
						<td>".$result['IDNumber']."</td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                </table>";
				?>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-warning" onclick="closeModal();">Close</button>
             </div>
           </div>
        </div>
    </div>
</body>
</html>
<script>
   function closeModal(){
	   $('#modal-info').modal('hide');
	   setTimeOut(function(){
		   $('#modal-info').remove();
	   },500);
   }
</script>
<?php echo ob_get_clean(); ?>