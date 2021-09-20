<?php
session_start();
include ('connect.php');

function getPost()
{
	$posts=array();
	$posts[0]=$_POST['id_Cust'];
	$posts[3]=$_POST['notel_Cust'];
	$posts[4]=$_POST['date_Reg'];
	$posts[5]=$_POST['day_Reg'];
	$posts[6]=$_POST['adult_ticket'];
	$posts[7]=$_POST['children_ticket'];
	return $posts;
}
//delete
if (isset($_POST['update']))
{
	$data=getPost();
	$update_Query="UPDATE `registration` SET `notel_Cust`='$data[3]',`date_Reg`='$data[4]',`day_Reg`='$data[5]',`adult_ticket`='$data[6]',`children_ticket`='$data[7]' WHERE `id_Reg`='$data[0]'";
	try{
		$update_Result= mysqli_query($conn, $update_Query);
	
	
		if($update_Result)
		{

			if(mysqli_affected_rows($conn)>0)
			{
				echo'<script type="text/JavaScript">
				alert("Data has Successfully Updated ");</script>';
			}
			else{
				echo'<script type="text/JavaScript">alert("Data is Failed to Updated ");</script>';
			}
		}
		}
	catch(Exception $ex ){
		echo'Error Update'.$ex-> getMessage();
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SUNGO WATER THEME PARK TICKET BOOKING SYSTEM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="image/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--  -->

<style type="text/css">

table.mama{
	border-collapse: collapse;
	width:80%;
	color:#588c7e;   
	font-family: monospace;
	font-size: 15px;
	text-align: center;
}

th {
	background-color: #00cc99;
	color:white;
}
th,td{

	padding: 10px;
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


<body bgcolor="white">
<!-- slide show start-->
<!-- slide show end-->
<div class="navbar">
	<center>
	<ul >
		<h2>
			<b>
				<li><a style="font-size:15px;padding: 5px 10px;"href="Homepage.php"><i class="	fa fa-home"></i> Home </a></li>
				
				<li><a style="font-size:15px;padding: 5px 10px;"href="report.php"><i class="	fa fa-pie-chart"></i> Dashboard </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminReadUser.php"><i class="fa fa-address-book-o"></i>    User </a></li>

	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminRead.php"><i class="fa fa-calendar-check-o"></i> Booking </a></li>

	 			<li style=" float:right;"><a style=" font-size:15px; padding: 5px 10px; " href="adminlogout.php"><i class="fa fa-sign-out"></i>  Log Out </a></li>
	 			
	 		</b>
		</h2>
	</ul>
	</center>
	<br></br>
</div>
<div class="main-haha">
		<center><h2 style="background-color: rgb(0,0,0,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px;font-size: 28px; font-family:Lucida Console,Monospace;color:#FBB917">UPDATE</h2></center>
		 
		<form action="#" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar--><center>
<table class="haha">
  <tr>
  <td><label for="id_Cust" style="color: #FFDB58">ID ticket:  </label> </td>
  <td> <input type="text" id="id_Cust" name="id_Cust" placeholder="Enter Id ticket"><br></td>

</tr>
<tr>
  <td><label for="notel_Cust" style="color: #FFDB58">No. Tel:  </label></td>
  <td><input type="text" id="notel_Cust" name="notel_Cust"placeholder="Enter Phone Number"><br></td>
</tr>

<tr>
  <td><label for="date_Reg"style="color: #FFDB58">Date:  </label> </td>
  <td><input type="date" id="date_Reg" name="date_Reg" ><br></td>
</tr>

<tr>
  <td><label for="day_Reg"style="color: #FFDB58">Day:  </label> </td>
  <td><input type="text" id="day_Reg" name="day_Reg"  placeholder="Enter Day"><br></td>
</tr>

<tr>
  <td><label for="adult_ticket" style="color: #FFDB58">Adult Ticket:  </label> </td>
  <td><input type="text" id="adult_ticket" name="adult_ticket" placeholder="Enter Adult Ticket Number" ><br></td>
</tr>

<tr>
  <td><label for="children_ticket" style="color: #FFDB58">Children Ticket:  </label> </td>
  <td><input type="text" id="children_ticket" name="children_ticket" placeholder="Enter Children Ticket Number"><br></td>
</tr>

<tr>
    <td><input type="submit" name="update" value="Update" ></td>
    <td><input type="button" target= '_blank' onclick="window.location.href='#booking';" value="History"/></td>
    <!--<td><input type="submit" name="search" value="Search" ></td>-->
</tr>

</center>
</table>
</form>		
</div>
</center>
	
<?php
		include('connect.php');
		//session_start();

		$month = $_POST['bookmonth'];

		$sql="SELECT * FROM registration where date_Reg LIKE '%".$month."%'ORDER BY date_Reg DESC ";
		$result = $conn->query($sql);

		echo "<center><h3>".$month."'s Booking Record </h3></center>";

		if ($result->num_rows > 0)
		{
		
		echo " <table class='mama' align='center'> ";
		echo "<tr><th>ID Ticket</th><th>Date</th><th>Day</th><th>Adult Ticket</th><th>Children Ticket</th><th>DELETE</th></tr>";

		while($row = $result->fetch_assoc())
		{ 
			echo"<tr>"; 
		echo"<td><center>".$row["id_Reg"]. "</center></td>";
		echo"<td><center>".$row["date_Reg"]. "</center></td>";
		echo"<td><center>".$row["day_Reg"]."</center></td>";
		echo"<td><center>".$row["adult_ticket"]."</center></td>";
		echo"<td><center>".$row["children_ticket"]."</center></td>";

		?>

		<td align="center"><a href="adminDelete.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<!--<img src="image/trash2.png"></span>-->
			<i class="fa fa-trash-o"style="font-size:48px"></i></span>

		<?php
			echo "</tr>";
		}
		echo "</table>";
		} else {
		echo "<center>There's no Booking Record for this month.</center>";
		}
		$conn->close();

		?>

</table>	
</body>
</html>

