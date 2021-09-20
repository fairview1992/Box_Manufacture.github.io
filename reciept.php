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
		table.mama1{
	border-collapse: collapse;
	color:#588c7e;   
	font-family: monospace;
	font-size: 15px;
	margin-left: auto;
  margin-right: auto;
	text-align: left;
}
table.mama{
	border-collapse: collapse;
	color:#588c7e;   
	font-family: monospace;
	font-size: 15px;
	 margin-left: auto;
  margin-right: auto;
	text-align: left;
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

.main{
  padding: 20px;
  text-align: center;
}
.navbar a:hover {
  background: #ddd;
  color: black; 
}
.center {
 
}
	</style>


<body >
		<h1><center>Fairview Booking System</center></h1>

	<h1 style="font-size: 28px; color: #006666;"> <center>RECEIPT</center></h1>
<?php
//session_start();
 include ('connect.php');
session_start();
//$sql="SELECT id_Reg,date_Reg,day_Reg,adult_ticket,children_ticket FROM registration ";

$id=$_REQUEST['id'];

 $sql="SELECT * FROM registration INNER JOIN customer ON registration.id_Cust = customer.id_Cust where registration.id_Cust='".$_SESSION['user_Cust']."' AND registration.id_Reg='".$id."'";
//$sql = "SELECT * FROM customer,promotion,registration where registration.id_Cust = customer.id_Cust and registration.id_pro = promotion.id_pro and id_Cust='".$id."' ORDER BY date_Reg DESC";

$result = $conn-> query($sql)or die($conn->error);

//echo $result;
//$rows = $result->num_rows;
if($result!== true)
{
// kene tukar nie dlm hisrory;
//echo "<tr><th>ID Ticket</th><th>Date</th><th>Day</th><th>Adult Ticket</th><th>Children Ticket</th></tr>";	

	// tukar ikut yang sepatutnya
	while($row = $result-> fetch_assoc()) 
	{

		echo"<p>&emsp;&emsp;Qoutation Date :".$row["date_Reg"]. "</p>";

		echo"<p>&emsp;&emsp;Qoutation ID : ".$row["id_Reg"]."</p>";

		echo"<div class='main'>"; 

		echo "<p>Customer Detail       &emsp;        &emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Company Detail</p>";
		
echo "<table class='mama1'>";

		echo "<tr>"; 
		echo"<td>ID Customer : </td>";
		//echo"<td> : </td>";
		echo"<td>".$row["id_Cust"]."</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td> From : Fairview Industries Sdn Bhd </td>";
		echo "</tr>";

		echo "<tr>"; 
		echo"<td>Customer Name : </td>";
		echo"<td>".$row["name_Cust"]."</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td>Email : fairview1992@gmail.com </td>";
		echo "</tr>";

		echo "<tr>"; 
		echo"<td> Customer Email: </td>";
		echo"<td>".$row["email_Cust"]."</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td>Address : Lot 1295, Batu 14 1/2,  </td>";
		echo "</tr>"; 

		echo "<tr>"; 
		echo"<td>Customer Contact Number : </td>";
		echo"<td>".$row["noTel_Cust"]."</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td> Kampung Sungai Semungkis, Hulu Langat 43100,</td>";
		echo "</tr>";

		echo "<tr>"; 
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;</td>";
		echo"<td>  Hulu Langat, Selangor.</td>";
		echo "</tr>";

echo "</table>";

echo"</div >";
	echo"<div class='main'>";
			echo "<center><p>Booking Detail</p></center>";
	echo "<table class='mama'>";

			echo "<tr>"; 
			echo"<td>Industry : </td>";
			echo"<td>".$row["ind"]."</td>";
			echo "</tr>";

			echo "<tr>";
			echo"<td>Box Height : </td>"; 	
			echo"<td>".$row["height_Pro"]."</td>";
			echo "</tr>";

			echo "<tr>"; 
			echo"<td>Box Width : </td>";
			echo"<td>".$row["width_Pro"]."</td>";
			echo "</tr>";

			echo "<tr>"; 
			echo"<td>Box Length : </td>";
			echo"<td>".$row["lenght_Pro"]."</td>";
			echo "</tr>";

			echo "<tr>"; 
			echo"<td>Box Quantity : </td>";
			echo"<td>".$row["quantity2_pro"]."</td>";
			echo "</tr>";
  
	echo "</table>";
	echo"</div >";

echo"<center><button onclick='myFunction()'>Print Reciept</button></center>
		<script>
		function myFunction() {
		window.print();}
		</script>";	
echo"<center><a href='aboutUs.php';>Back Home </a></center>";

	?>
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

</body>
</html>