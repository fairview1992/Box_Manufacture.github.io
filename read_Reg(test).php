<!DOCTYPE html>
<html>
<head>
	<title>Fairview Industrial Sdn Bhd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--  -->

	<style type="text/css">
		table.mama{
	border-collapse: collapse;
	width:100%;
	color:#588c7e;   
	font-family: monospace;
	font-size: 15px;
	text-align: center;
}
th {
	background-color:#7E354D;
	color:white;
}
  .main-haha{
  background-color: rgb(0,0,0,0.5); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
}
.navbar a:hover {
  background: #ddd;
  color: black; 
}
	</style>


<body >
		<h1><center>Fairview Booking System</center></h1>
<div class="navbar">
<br></br>
	<center>
	<ul >
		<h2>
			<b>
				<!--<li><a style="font-size:15px;padding: 5px 10px;  "href="Homepage2.php"> <i class="fa fa-home"></i> Home </a></li>-->

				<li><a style="font-size:15px;padding: 5px 10px 15px;"href="registration2.php"><i class="fa 	fa fa-mail-reply"></i> Back </a></li>

	 			<li style=" float:right;"><a style=" font-size:15px; padding: 5px 10px; " href="logout.php"> <i class="fa fa-sign-in"></i>  Log Out </a></li>

	 				
	 		</b>
		</h2>
	</ul>
	</center>
	<br></br>
	</div>
	
	<center><h3>Step 4: Check Your Reservation </h3></center>

	<h1 style="font-size: 28px;"><center>READ TABLE</center></h1>
<table class="mama">
<?php
//session_start();
 include ('connect.php');

//$sql="SELECT id_Reg,date_Reg,day_Reg,adult_ticket,children_ticket FROM registration ";
$sql = "SELECT * FROM registration,industry,customer where registration.id_ind=industry.id_ind and registration.id_Cust = customer.id_Cust and customer.id_Cust='".$_SESSION['user_Cust']."'";



 //$sql="SELECT * FROM registration INNER JOIN customer join industry ON registration.id_Cust = customer.id_Cust and registration.id_ind=industry.id_ind where customer.id_Cust='".$_SESSION['user_Cust']."'";


//$sql = "SELECT * FROM customer,promotion,registration where registration.id_Cust = customer.id_Cust and registration.id_pro = promotion.id_pro and id_Cust='".$id."' ORDER BY date_Reg DESC";

$result = $conn-> query($sql)or die($conn->error);

//echo $result;
//$rows = $result->num_rows;
if($result!== true)

{
// kene tukar nie dlm hisrory;

echo "<tr><th>Booking ID</th><th>Date</th><th>Box Height</th><th>Box Width</th>
		<th>Box Lenght</th><th>Notes</th><th>Notes</th><th>DELETE</th><th>UPDATE</th><th>RECIEPT</th></tr>";	

	// tukar ikut yang sepatutnya
	while($row = $result-> fetch_assoc()) 
	{
		echo"<tr>"; 
		echo"<td><center>".$row["id_Reg"]. "</center></td>";
		echo"<td><center>".$row["date_Reg"]. "</center></td>";
		echo"<td><center>".$row["height_Pro"]."</center></td>";
		echo"<td><center>".$row["width_Pro"]."</center></td>";
		echo"<td><center>".$row["lenght_Pro"]."</center></td>";
		echo"<td><center>".$row["noted_Pro"]."</center></td>";
		//echo"<td><center>".$row["name_ind"]."</center></td>";
	
	?>

	<td align="center"><a href="delete.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<!--<img src="image/trash2.png"></span>-->
			<i class="fa fa-trash-o"style="font-size:48px"></i></span>
	<td align="center"><a href="update.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<i class="fa fa-edit"style="font-size:48px"></i></span>

	<td align="center"><a href="reciept.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<i class="fa fa-print"style="font-size:48px"></i></span>			

				<!--<img src="image/update2.png"></span>	-->	
	<?php  
echo"</tr>";
}
echo "</table>";
}
else{
	echo"<center>You have't booking the ticket</center>";
}
//$conn->close();
?>
<!--<td><button><a onclick="window.location.href='delete.php';" >Delete</a></button></td>-->
</table>

</body>
</html>