<?php
session_start();


if(isset($_SESSION['user_Emp'])){

$_SESSION=array();
session_destroy();
echo"<meta http-equiv=\"refresh\" content=\"3; URL=index.php\">";

}

echo"<link rel='stylesheet' type='text/css' href='css/stylesheet.css'>";
echo"<br>";
//echo"<p style='text-align:center;'>You have Log Out ...</p>";
include ('index.php');
echo'<script type="text/JavaScript">alert("You have Log Out ...");</script>';

?>