<?php
session_start();
if(isset($_SESSION['userid']))
{
unset($_SESSION['userid']);
session_destroy();
header('Location: index.php');
}
else if(isset($_SESSION['username']))
{
unset($_SESSION['username']);
session_destroy();
header('Location: index.php');
}
session_destroy();
header('Location: index.php');
?>