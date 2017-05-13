<?php
			  if(isset($_SESSION['Register']))
			  {
				  $reg = $con -> query ("select * from learner where username = '$_SESSION[username]'");
					$resul = $reg ->fetch_array(MYSQLI_BOTH);
					{
						if($resul['Register'] == "Registered")
						{
							echo '<li><a href="Print.php">Proof of Reg.</a></li>';
							echo '<li><a href="Portal.php">View Portal</a></li>';
						}
						else if($resul['Register'] == "Not Registered")
						{
							$pic = $con -> query ("select * from images where username = '$_SESSION[username]'");
							$res = $pic ->fetch_array(MYSQLI_BOTH);
							{
								$_SESSION["availablereport"]=$res['docname'];
								if(($_SESSION["availablereport"]) == '')
								{
									echo '<li><a href="After-Confirm.php">upload report</a></li>';
								}
								else
								{
									echo '<li><a href="Waiting.php">Application Status</a></li>';
								}
							}
						}
					}
			  }
			  else if(isset($_SESSION['userid']))
			  {
				  echo '<li><a href="Admin-Page.php">Admin</a></li>';
			  }
			  else if(isset($_SESSION['id_stuff']))
			  {
				  echo '<li><a href="Teachers.php">STAFF PAGE</a></li>';
			  }
			  ?>