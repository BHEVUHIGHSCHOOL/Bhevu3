<?php
unset($_SESSION['surname']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['mobilenumber']);
unset($_SESSION['phase']);
unset($_SESSION['position']);

if(isset($_SESSION['validity']))
{
	unset($_SESSION['validity']);
}
if(isset($_SESSION['existerror']))
{
	unset($_SESSION['existerror']);
}
if(isset($_SESSION['PhaseError']))
{
	unset($_SESSION['PhaseError']);
}
if(isset($_SESSION['PositionError']))
{
	unset($_SESSION['PositionError']);
}

?>