<?php

include('connect.php');
echo"<link rel='stylesheet' type='text/css' href='css/stylesheet.css'>";
session_start();

$email=$_SESSION['user_Cust'];

$name_Cust=$_POST['name_Cust'];
$email_Cust=$_POST['email_Cust'];
$noTel_Cust=$_POST['noTel_Cust'];
$gender_Cust=$_POST['gender_Cust'];

$sql="UPDATE `customer` SET `email_Cust`='$email_Cust',`noTel_Cust`='$noTel_Cust',`gender_Cust`='$gender_Cust',`name_Cust`='$name_Cust' WHERE id_Cust='$email' ";

$result=$conn->query($sql);

if($conn->query($sql)){
echo"<br>";
echo"<p style='text-align:center'>Your Data Had Been Updated!";
echo"<meta http-equiv=\"refresh\" content=\"3; URL=aboutUs.php\">";
}else{

echo"<p style='text-align:center'>Error: ".$sql."<br>".$conn->error;


}

$conn->close();

?>