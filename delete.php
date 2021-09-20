<?php
session_start();

include ('connect.php');

$id = $_REQUEST['id'];//tukar id_Reg

$sql = "DELETE FROM registration WHERE id_Reg='".$id."'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo'<script type="text/JavaScript">alert("Data '.$id.' Had Been Deleted!");</script>';
	//echo "<p style='text-align:center'>";
	include('read_Reg.php');
	echo "<p>";
} else {
	echo "<p>";
	echo "<p style='text-align:center'>Error:".$sql."<br>".$conn->error;
	echo "<p>";
}

//Closes specified connection
$conn->close();

?>

	
