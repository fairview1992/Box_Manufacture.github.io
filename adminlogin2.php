<?php

include ('connect.php');

session_start();


$user=$_POST['user_Emp'];
$pass=$_POST['pass_Emp'];

/*if(!isset($_SESSION['user_Emp']))
{
$_SESSION['user_Emp']=$_POST['user_Emp'];
$_SESSION['pass_Emp']=$_POST['pass_Emp'];

}*/

$sql="SELECT * from employee where user_Emp = '".$_POST['user_Emp']."' AND pass_Emp = '".$_POST['pass_Emp']."'";

//$sql="SELECT * FROM employee WHERE user_Emp='".$_SESSION['user_Emp']."' AND pass_Emp='".$_SESSION['pass_Emp']."'";

/*$result=$conn->query($sql);

if($result-> num_rows == 0){
echo'<script type="text/JavaScript">alert("You Need To Sign Up !!");</script>';

include("adminSignup.php");
}
else{
		include("report.php");
	}*/

if ($result=$conn-> query($sql))
{
		if (mysqli_num_rows($result) == 0)  
		{
		echo'<script type="text/JavaScript">alert("You Need To Sign Up !!");</script>';

		session_unset();

				include("adminSignup.php");
			}
		
		else {
			
		include("report.php");
  	
  }

 }else{
  	echo $conn->error;
  }
//include ['dsfaf']// nk call file php
?>
