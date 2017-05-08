<!-- Modal Start-->
<?php include ("Controller/Staff Controller/phase.php");
include ("Controller/Staff Controller/Save.php");
if(isset($_GET['Details']))
{
	$_SESSION['surname'] = $_POST["Surname"];
	$_SESSION['firstname'] = $_POST["First_name"];
	$_SESSION['lastname'] = $_POST["Last_name"];
	$_SESSION['id'] = $_POST["ID_number"];
	$_SESSION['email'] = $_POST["email"];
	$_SESSION['mobilenumber'] = $_POST["Mobile_number"];
	$_SESSION['phase'] = $_POST["Phase"];
	$_SESSION['position'] = $_POST["position"];
	$_SESSION[''] = $_POST["Surname"];
}
?>
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
    	<div class="modal-header">
        	<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            	<span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title text-center">Saving Staff</h4>
        </div>
        <form action="Controller/Staff Controller/Save.php" method="post">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="center-block">
                                <table class="col-sm-12">
                                	<tr><td align="center" colspan="2"><h4><strong>STAFF DETAILS</strong></h4></td></tr>
                                	<tr>
                                    	<td class="col-sm-6">Surname</td>
                                        <td class="col-sm-6"><input type="text" class="txt" name="Surname" value="<?php echo $_POST["Surname"];?>" placeholder="<?php echo $_POST["Surname"];?>" readonly></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Firstname</td>
                                        <td class="col-sm-6"> <input type="text" class="txt" name="First_name" value="<?php $_POST["First_name"];?>" placeholder="<?php echo $_POST["First_name"];?>" disabled></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Second name</td>
                                        <td class="col-sm-6"> <input type="text" class="txt" name="Last_name" value="<?php $_POST["Last_name"];?>" placeholder="<?php echo $_POST["Last_name"];?>" disabled></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">ID Number</td>
                                        <td class="col-sm-6"> <input type="text" class="txt" name="ID_number" value="<?php $_POST["ID_number"]; ?>" placeholder="<?php echo $_POST["ID_number"];?>" disabled></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Email</td>
                                        <td class="col-sm-6"> <input type="text" class="txt" name="email" value="<?php $_POST["email"] ?>" placeholder="<?php echo $_POST["email"] ?>"></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Mobile number</td>
                                        <td class="col-sm-6"><input type="text" class="txt" name="Mobile_number" value="<?php $_POST["Mobile_number"]; ?>" placeholder="<?php echo $_POST["Mobile_number"];?>" disabled></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Phase</td>
                                        <td class="col-sm-6"><input type="text" class="txt" name="Phase" value="<?php $phase; ?>" placeholder="<?php echo $phase; ?>" disabled></td>
                                    </tr>
                                    <tr>
                                    	<td class="col-sm-6">Position</td>
                                        <td class="col-sm-6"><input type="text" class="txt" name="position" value="<?php $position; ?>" placeholder="<?php echo $position; ?>" disabled></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
	                <div class="col-sm-5" style="text-align:center;">
                        <blockquote>
                            <h4><strong>ENTER SUBJECTS</strong></h4>
                                <table class="col-sm-12">
                                    <tr>
                                        <td>
                                            Subject 1
                                        </td><br>
                                        <td>
                                            <input type="text" name="subj1" class="txt" placeholder="Subject 1" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Subject 2
                                        </td>
                                        <td>
                                            <input type="text" name="subj2" class="txt" placeholder="Subject 2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Subject 3
                                        </td>
                                        <td>
                                            <input type="text" name="subj3" class="txt" placeholder="Subject 3">
                                        </td>
                                    </tr>
                            </table>
                         </blockquote>
                     </div>
                    </div>
                    <div class="col-sm-12">
                            <div class="center-block">
                            	<div class="col-sm-12" style="text-align:center;">
                                    <h4>AVAILABLE SUBJECTS</h4>
                                        <table class="col-sm-12">
                                        	<?php
											   if($_POST["Phase"] == "Senior")
												{
													include ("Controller/Staff Controller/Subjects/Common Subjects.php");
													include ("Controller/Staff Controller/Subjects/Grade 8-9.php");
												}
												else if ($_POST["Phase"] == "FET")
												{
													include ("Controller/Staff Controller/Subjects/Common Subjects.php");
													include ("Controller/Staff Controller/Subjects/Grade 10-12.php");
												}
												else
												{
													include ("Controller/Staff Controller/Subjects/Common Subjects.php");
													include ("Controller/Staff Controller/Subjects/Grade 8-9.php");
													echo "<tr><td colspan='3'><hr></td></tr>";
													include ("Controller/Staff Controller/Subjects/Grade 10-12.php");
												}
											?>
                                        </table>
                                 </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-lg" data-dismiss="modal">Back</button>
                <button class="btn btn-success btn-lg" type="submit" name="next">Save</button>
            </div>
        </form>
    </div>
   </div>
</div>
<!-- Modal end -->