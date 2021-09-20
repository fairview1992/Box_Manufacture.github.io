<?php 
session_start();

include('connect.php');

	$notel_Cust=$_POST ['name_Feed'];
	$date_Reg=$_POST ['feedback_Feed'];
	$feedback_grade=$_POST['feedback_grade'];
	$date=date("d-m-y H:i:s");
	
	//$id_pro=$_POST['id_pro']

	$id_Cust=$_SESSION['user_Cust'];



			$sql="INSERT INTO feedback (name_Feed,feedback_Feed,feedback_grade,id_Cust) 
			VALUES('$notel_Cust','$date_Reg','$feedback_grade',$id_Cust)";

			if($conn->query($sql)){

				include ('aboutUs.php');
			}else{

			echo"<p style='text-align:center'>Error: ".$sql."<br/> ".$conn->error."</p>";


			}
?>