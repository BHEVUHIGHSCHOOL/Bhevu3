<?php
//Inserting Qualification
					//include ("../../RegisterStuff.php");
					$doc_nameq = "Qualification".$id;

					$myfileq = $_FILES['qual']['name'];

					$tmp_nameq = $_FILES['qual']['tmp_name'];

					if($myfileq&&$doc_nameq)

					{

						$locationq = $myfileq;

						move_uploaded_file($tmp_nameq,"document/".$myfileq);

						$_SESSION["doc_name"] = $doc_nameq;

					}

					

					//Inserting Id

					$doc_namei = "id".$id;

					$myfilei = $_FILES['id']['name'];

					$tmp_namei = $_FILES['id']['tmp_name'];

					if($myfilei&&$doc_namei)

					{

						$locationi = $myfilei;

						move_uploaded_file($tmp_namei,"document/".$myfilei);

						$_SESSION["doc_name"] = $doc_namei;

					}
?>