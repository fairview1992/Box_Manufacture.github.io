<?php
session_start();

include ('connect.php');

$id = $_REQUEST['id'];//tukar id_Reg

$sql = "DELETE FROM registration WHERE id_Reg='".$id."'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
	echo "<p style='text-align:center'>Data $id Had Been Deleted!";
	echo "<meta http-equiv=\"refresh\" content=\"
	3; URL=adminRead.php\">";
	echo "<p>";
} else {
	echo "<p>";
	echo "<p style='text-align:center'>Error:".$sql."<br>".$conn->error;
	echo "<p>";
}

//Closes specified connection
$conn->close();

?>
