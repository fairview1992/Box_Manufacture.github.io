<?php 
session_start();

include('connect.php');

	$notel_Cust=$_POST ['notel_Cust'];
	$date_Reg=$_POST ['date_Reg'];
	$day_Reg=$_POST ['height_Pro'];
	$adult_ticket=$_POST ['width_Pro'];
	$children_ticket=$_POST ['lenght_Pro'];	
	$noted_Pro=$_POST ['noted_Pro'];
	$quantity2_Pro=$_POST ['quantity2_Pro'];
	$ind=$_POST['ind'];

	
	//$id_pro=$_POST['id_pro']


	$id_Cust=$_SESSION['user_Cust'];

			$sql="INSERT INTO registration (notel_Cust,date_Reg,height_Pro,width_Pro,lenght_Pro,noted_Pro,quantity2_Pro,ind,id_Cust) VALUES('$notel_Cust','$date_Reg','$day_Reg','$adult_ticket','$children_ticket','$noted_Pro','$quantity2_Pro','$ind','$id_Cust')" or die ("Error inserting data into table");

			if($conn->query($sql)){

				include ('read_Reg.php');
			}else{

			echo"<p style='text-align:center'>Error: ".$sql."<br/> ".$conn->error."</p>";


			}

		//$stmt= $conn->prepare("INSERT into registration (notel_Cust,date_Reg,day_Reg,adult_ticket,children_ticket,id_Cust) value( ?, ?, ?, ?,?,?)");
		//$stmt->bind_param("issiii",$notel_Cust,$date_Reg,$day_Reg,$adult_ticket,$children_ticket,$id_Cust);
		//$stmt-> execute();

		//$sql = "SELECT COUNT(id_Reg) AS register FROM registration ";
		//$sql = "SELECT * FROM registration LIMIT 25";
		//var $one = $sql; 
		//if($sql > 2){

			//echo'<script type="text/JavaScript">alert("You have reach a limit for today customer.. please come again..");</script>';
		//}

		//include ('read_Reg.php');
		
		//echo "<meta http-equiv=\"refresh\"content=\"0.5;URL=read_Reg_old.php\">";
		//$stmt->close();
		//$conn->close();	

 ?>  