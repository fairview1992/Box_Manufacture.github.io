<!DOCTYPE html>
<html>
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--  -->

	<style type="text/css">
		table{
	border-collapse: collapse;
	width:80%;
	color:#588c7e;   
	font-family: monospace;
	font-size: 15px;
	text-align: center;
}
th {
	background-color: #4682B4;
	color:white;
}
th,td{

	padding: 10px;
}
.navbar a:hover {
  background: #ddd;
  color: black;
}
	</style>

	

</head>
<body >
<!-- slide show start-->

<!-- slide show end-->
<div class="navbar">
	<center>
	<ul >
		<h2>
			<b>
				<li><a style="font-size:15px;padding: 5px 10px;"href="report.php"><i class="	fa fa-pie-chart"></i> Dashboard </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px; " href="adminReadUser.php"><i class="fa fa-address-book-o"></i>    User </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminList.php"><i class="fa fa-address-book-o"></i>    Admin </a></li>


	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminRead.php"><i class="fa fa-calendar-check-o"></i> Quotation </a></li>
	 			
	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminFeedback.php"><i class="fa fa-calendar-check-o"></i> Feedback </a></li>
	 			
	 			<li style=" float:right;"><a style=" font-size:15px; padding: 5px 10px; " href="adminlogout.php"><i class="fa fa-sign-out"></i>  Log Out </a></li>
	 			
	 		</b>
		</h2>
	</ul>
	</center>
</div>
	<br></br>
		<h1><center>USER DETAIL</center></h1>
		<center>
<table class="mama" >
	<tr>
		<th>ID User</th>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>DELETE</th>
	</tr>

<?php
session_start();
 include ('connect.php');

$sql="SELECT id_Cust,name_Cust,user_Cust,email_Cust,noTel_Cust,gender_Cust FROM customer";

$result=$conn-> query($sql);

if($result->num_rows > 0)
{
	// tukar ikut yang sepatutnya
	while($row = $result-> fetch_assoc()) 
	{
		echo"<tr>"; 
		echo"<td><center>".$row["id_Cust"]. "</center></td>";
		echo"<td><center>".$row["name_Cust"]. "</center></td>";
		echo"<td><center>".$row["user_Cust"]. "</center></td>";
		echo"<td><center>".$row["email_Cust"]."</center></td>";
		echo"<td><center>0".$row["noTel_Cust"]."</center></td>";
	?>

	<td align="center"><a href="adminDeleteUser.php?id=<?php echo $row["id_Cust"]; ?>">
			<span style="color: #493D26;">
				<!--<img src="image/trash2.png"></span>-->
		<i class="fa fa-trash-o"style="font-size:48px"></i></span><!--	
	<td align="center"><a href="adminUpdate.php?id=<?php echo $row["id_Cust"]; ?>">
			<span style="color: #493D26;">
				<i class="fa fa-edit"style="font-size:48px"></i></span>-->

				<!--<img src="image/update2.png"></span>	-->	
	<?php  
echo"</tr>";
}
echo "</table>";
}
else{
	echo"0 result";
}
//$conn->close();
?>
<!--<td><button><a onclick="window.location.href='delete.php';" >Delete</a></button></td>-->

</table>
</center>
</body>
</html>