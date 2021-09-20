<?php

include ('connect.php');
session_start();

function getPost()
{
	$posts=array();
	$posts[0]=$_POST['id_Cust'];
	$posts[3]=$_POST['notel_Cust'];
	$posts[4]=$_POST['date_Reg'];
	$posts[5]=$_POST['height_Pro'];
	$posts[6]=$_POST['width_Pro'];
	$posts[7]=$_POST['lenght_Pro'];
	$posts[8]=$_POST['quantity2_Pro'];
	$posts[9]=$_POST['noted_Pro'];
	$posts[10]=$_POST['ind'];

	
	//$posts[7]=$_POST['lenght_Pro'];
	return $posts;
}
//delete
if (isset($_POST['update']))
{
	$data=getPost();
	$update_Query="UPDATE `registration` SET `notel_Cust`='$data[3]',`date_Reg`='$data[4]',`height_Pro`='$data[5]',`width_Pro`='$data[6]',`lenght_Pro`='$data[7]',`noted_Pro`='$data[9]',`quantity2_pro`='$data[8]',`ind`='$data[10]'WHERE`id_Reg`='$data[0]';";


	try{
		$update_Result= mysqli_query($conn, $update_Query);
	
		if($update_Result)
		{

			if(mysqli_affected_rows($conn)>0)
			{
				echo'<script type="text/JavaScript">
				alert("Data has Successfully Updated ");</script>';
				include('read_Reg.php');
			}
		}
		else{
			echo'<script type="text/JavaScript">alert("Data is Failed to Updated ");</script>';
			}
		 
	}
	catch(Exception $ex ){
		echo'Error Update'.$ex-> getMessage();
	}

}

?>