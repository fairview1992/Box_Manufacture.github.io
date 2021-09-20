<?php

include ('connect.php');
session_start();

$user=$_POST['user_Cust'];
$pass=$_POST['pass_Cust'];

//echo $user;
//echo $pass;
	
$sql="SELECT * from customer where user_Cust = '".$_POST['user_Cust']."' AND pass_Cust = '".$_POST['pass_Cust']."'";


if ($result=$conn-> query($sql))
{
		if (mysqli_num_rows($result) == 0)  
		{
		echo'<script type="text/JavaScript">alert("The username and password does not exist. You need to sign up.");</script>';

		session_unset();

				include("signup.php");
			}
		
		else {
			
			while($row = $result-> fetch_assoc()){
			$_SESSION['user_Cust']=$row["id_Cust"];
		  	//echo $_SESSION['user_Cust'];
			}
		include("aboutUs.php");
  	
  		}

 }else{
  	echo $conn->error;
  }

//include ['dsfaf']// nk call file php

?>
 