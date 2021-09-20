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
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

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
  width: 50%;
  height: 70%;
  background-color: rgb(0,0,0,0.5); 
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
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.row:after {
  content: "";
  clear: both;
  display: table;
}
/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 55%;
  margin-top: 6px;
}
input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

@media screen and (max-width: 1000px) { 
  .col-25, .col-75 {
    width: 100%;
    margin-top: 0;
  }
  .main-haha{
  background-color: rgb(0,0,0,0.5); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
  width: 100% ;
}
input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
textarea{
  width:100%;
}

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
				<li><a style="font-size:15px;padding: 5px 10px;"href="report.php"><i class="	fa fa-pie-chart"></i> Dashboard </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminReadUser.php"><i class="fa fa-address-book-o"></i>    User </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminList.php"><i class="fa fa-address-book-o"></i>    Admin </a></li>

	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminRead.php"><i class="fa fa-calendar-check-o"></i> Quotation </a></li>

	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminFeedback.php"><i class="fa fa-calendar-check-o"></i> Feedback </a></li>

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
     <div class="row">
  <td><div class="col-25"><label for="id_Cust"style="color: #FFDB58">ID ticket:  </label> </div>

   <div class="col-75"><input type="text" id="id_Cust" name="id_Cust"  placeholder="Enter ID Qoutation" required="id_Cust"><br></div></td>
</div>
</tr>
<tr>
    <div class="row">
    <td><div class="col-25"><label for="notel_Cust"style="color: #FFDB58">No Telefon :   </label></div>

    <div class="col-75"><input type="text" id="notel_Cust" name="notel_Cust" placeholder="Enter Phone Number"required="notel_Cust"><br></div></td>
  </div>
  </tr>
<tr>
  <div class="row">
    <td><div class="col-25"><label for="date_Reg"style="color: #FFDB58">Date :   </label></div>

    <div class="col-75"><input type="date" id="date_Reg" name="date_Reg" required="date_Reg"><br></div></td>
  </div>
  </tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="ind"style="color: #FFDB58">Industry :   </label></div>

  <div class="col-75"><select id="ind" name="ind">
        <option selected>SELECT INDUSTRY</option>
        <option value="Food">Food</option>
        <option value="Oil and Gas">Oil and Gas</option>
        <option value="Pharmaceutical">Pharmaceutical</option>
        <option value="Electronic">Electronic</option>
        <option value="Other">Other</option>
</select></div>
      </td>
    </div>
      </tr>
  

  <tr>
    <div class="row">
    <td><div class="col-25"><label for="height_Pro"style="color: #FFDB58">Height(mm) :   </label></div>
    
    <div class="col-75"><input type="text" id="height_Pro" name="height_Pro" placeholder="Enter Box Height"required="height_Pro"><br></div></td>
  </div>
  </tr>

  <tr>
    <div class="row">
    <td><div class="col-25"><label for="width_Pro"style="color:#FFDB58">Width(mm) :   </label></div>

    <div class="col-75"><input type="text" id="width_Pro" name="width_Pro" placeholder="Enter Box Width" required="width_Pro"><br></div></td>
  </div>
  </tr>
  
  <tr>
    <div class="row">
    <td><div class="col-25"><label for="lenght_Pro"style="color: #FFDB58">Lenght(mm) :   </label></div>

    <div class="col-75"><input type="text"id="lenght_Pro" name="lenght_Pro"  placeholder="Enter Box Lenght" required="lenght_Pro"><br></div></td>
  </div>
  </tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="quantity2_Pro"style="color: #FFDB58" > Box Quantity :  </label></div>

  <div class="col-75"><input type="text" id="quantity2_Pro" name="quantity2_Pro" placeholder="Enter Box Quantity"><br></div></td>
</div>
</tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="noted_Pro"style="color: #FFDB58" >Notes:  </label></div>

  <div class="col-75"><input type="text" id="noted_Pro" name="noted_Pro" style="width: 300px;height:50px;"   placeholder="Enter Notes ">

    <br><p style="color: white;font-family: sans-serif;">Exp: What is the item do you want to put inside the box ?<br>How many quantity of the product that you want to put inside the box?<br>What type of box do you want? </p></div>
  </td>
</div>
</tr>
</center>
</table>

<button class="button button1" name="update" type="submit" value="Update"onclick="myFunction()">Update</button>

<button class="button button1"target= '_blank' name="update" type="submit" value="History"onclick="window.location.href='#booking';">History</button>

</form>		
</div>
		<h1 id="booking"><center>Quotation List</center></h1>
		<center>
		<!--<form method="post" action="searchAdmin.php">
  		<label for="months">Select A Month:</label>
  		<input type="month" id="bookmonth" name="bookmonth">
  		<input type="submit" value="Enter">
		</form>
		<br><br>-->
<table class="mama">
	<tr>
		<th>Customer ID</th>
		<th>Customer Name</th>
		<th>Booking ID</th>
		<th>Date</th>
		<th>Box Height</th>
		<th>Box Width</th>
		<th>Box Lenght</th>
		<th>Notes</th>
		<th>Industry Name</th>
		<th>DELETE</th>
	</tr>

<?php
 include ('connect.php');

$sql="SELECT * FROM registration INNER JOIN customer ON registration.id_Cust = customer.id_Cust ";

$result=$conn-> query($sql);

if($result->num_rows > 0)
{
	// tukar ikut yang sepatutnya
	while($row = $result-> fetch_assoc()) 
	{
		echo"<tr>"; 
		echo"<td><center>".$row["id_Cust"]. "</center></td>";
		echo"<td><center>".$row["name_Cust"]. "</center></td>";
		echo"<td><center>".$row["id_Reg"]. "</center></td>";
		echo"<td><center>".$row["date_Reg"]. "</center></td>";
		echo"<td><center>".$row["height_Pro"]."</center></td>";
		echo"<td><center>".$row["width_Pro"]."</center></td>";
		echo"<td><center>".$row["lenght_Pro"]."</center></td>";
		echo"<td><center>".$row["noted_Pro"]."</center></td>";
		echo"<td><center>".$row["ind"]."</center></td>";
		
	
	?>

	<td align="center"><a href="adminDelete.php?id=<?php echo $row["id_Reg"]; ?>">
			<span style="color: #493D26;">
				<!--<img src="image/trash2.png"></span>-->
			<i class="fa fa-trash-o"style="font-size:48px"></i></span>
	<!--<td align="center"><a href="adminRead.php?id=<?php echo $row["id_Reg"]; ?>">
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