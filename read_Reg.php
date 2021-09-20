 <!DOCTYPE html>
<html style="min-height: 100%;min-width: 100%;">
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	background-color:#00008B;
	color:white;

}.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#191970 ;
   color: white;
   text-align: center;
}
div.yuyu{
  text-align: center;
   font-family: Arial, sans-serif; 
}
div.contact5{
  width: 100%;
  border-radius: 5px;
  padding: 20px;
}
td{
	color: black;

}
  .main-haha{
  background-color: rgb(255,255,255,0.7); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
}
.navbar a:hover {
  background: #ddd;
  color: black; 
}
h3,h4{
  color: white;
}
@media screen and (max-width: 1000px) {
table.mama{
	border-collapse: collapse;
	color:#588c7e;   
	font-family: monospace;
	font-size: 10px;
	text-align: center;
}
.main-haha{
  background-color: rgb(255,255,255,0.7); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
  width:91%;
}
}
.navbar {
  width: 100%;  /* Full width */
}


	</style>


<body background="img/haha.jpg" style="height: 100%;
/* Center and scale the image nicely */

background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;"/>

		<h1 style="font-family: arial,sans-serif;"><center>Fairview Box Production</center></h1>
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

	<h1 style="font-size: 28px; font-family:Lucida Console,Monospace;color:	#ADD8E6"><center>QUOTATION LIST </center></h1>
	<div class="main-haha">
<table class="mama">
<?php
//session_start();
 include ('connect.php');

//$sql="SELECT id_Reg,date_Reg,day_Reg,adult_ticket,children_ticket FROM registration ";


 $sql="SELECT * FROM registration INNER JOIN customer ON registration.id_Cust = customer.id_Cust where customer.id_Cust='".$_SESSION['user_Cust']."'";
//$sql = "SELECT * FROM customer,promotion,registration where registration.id_Cust = customer.id_Cust and registration.id_pro = promotion.id_pro and id_Cust='".$id."' ORDER BY date_Reg DESC";

$result = $conn-> query($sql)or die($conn->error);

//echo $result;
//$rows = $result->num_rows;
if($result!== true)
{
// kene tukar nie dlm hisrory;


echo "<tr><th style='border-radius:15px 0px 0px 0px;'>ID</th><th>Date</th><th>Box Height, Width,Lenght (mm)</th><th>Box Amount</th><th>Notes</th><th>Category</th><th>DELETE</th><th style='border-radius:0px 15px 0px 0px;'>UPDATE</th></tr>";	
	// tukar ikut yang sepatutnya
	while($row = $result-> fetch_assoc()) 
	{
		echo"<tr>"; 
		echo"<td><center>".$row["id_Reg"]. "</center></td>";
		echo"<td><center>".$row["date_Reg"]. "</center></td>";
		echo"<td><center>".$row["height_Pro"].",";
		echo"".$row["width_Pro"].",";
		echo"".$row["lenght_Pro"]."</center></td>";
		echo"<td><center>".$row["quantity2_pro"]."</center></td>";
		echo"<td><center>".$row["noted_Pro"]."</center></td>";
		echo"<td><center>".$row["ind"]."</center></td>";
	
	?>

	<td align="center"><a href="delete.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<!--<img src="image/trash2.png"></span>-->
			<i class="fa fa-trash-o"style="font-size:48px"></i></span>


	<td align="center"><a href="update.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<i class="fa fa-edit"style="font-size:48px;"></i></span>

	<!--<td align="center"><a href="reciept.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<i class="fa fa-print"style="font-size:48px"></i></span>			

				<img src="image/update2.png"></span>	-->	
	<?php  
echo"</tr>";
}
echo "</table> </div>";
}
else{
	echo"<center>You have't booking the ticket</center>";
}
//$conn->close();
?>
<!--<td><button><a onclick="window.location.href='delete.php';" >Delete</a></button></td>-->
<br>
<br>
<br>
</table>
<div class="footer">
	<div class="contact5">
		<a href="https://www.facebook.com/fairview.1992" style="color: white;text-decoration: none;text-transform: capitalize;  "><i style="color:white;font-size: 24px;" class='fab fa-facebook-f'></i>Carton Manufacture - Fairview Industries</a> 
				&emsp;  &emsp;
<a href="https://www.instagram.com/pengilang_kotak92/" style="color: white;text-decoration: none;text-transform: capitalize; "><i  style="color: white ;font-size: 24px;"class='fab fa-instagram'></i>@pengilang_kotak92</a><br><br>
<center>
	<table >
	<tr>
 	 <div class= "yuyu">
 		 <li><i class="fa fa-envelope"style="color:#87CEEB ; font-size:16px;"></i>    Email        : fairview1992@gmail.com</li><br>

  		<li> <i class="fa fa-map-marker"style="color:#87CEEB ; font-size:16px;"></i> Location     : LOT 1295, BATU 14 1/2, KAMPUNG SUNGAI SEMUNGKIS, HULU LANGAT 43100, HULU LANGAT, SELANGOR.</li><br>
  
  		<li>  <i class="fa fa-phone-square"style="color:#87CEEB ; font-size:16px;"></i>  OFF:  +603 9021 3285/3287</li><br>

		<li>  <i class="fa fa-phone-square"style="color:#87CEEB ; font-size:16px;"></i>  Fax: +603 9021 2750</li><br> 
	 </div>
	</tr>
	</table>

</center>

<br><br><center>Copyright &copy; 2021</center>
<br>

</div>	

</body>
</html>