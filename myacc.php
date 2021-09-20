<?php

include ('connect.php');
session_start();

$user=$_SESSION['user_Cust'];

$sql="SELECT * FROM customer WHERE id_Cust = '".$user."'";


$result=$conn->query($sql);


while($row=$result->fetch_assoc()){


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html style="min-height: 100%;min-width: 100%;">
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	.main-haha{
	background-color: rgb(0,0,0,0.5); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
}
.main{
  padding: 120px;
}

</style>
 
</head>
<body background="img/myacc.jpg" style="height: 100%;
width: 100%;
/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
<div class="main">
<div class="main-haha">
<center>
	<table>
		<form action="updatemyacc.php" method="post" name="form1" onsubmit="required()">
		<h2 style="background-color: rgb(0,0,0,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px; font-family:Lucida Console,Monospace;color:#FBB917;"><center>My Account</center></h2>

<td style="color:#99CCFF;">User ID:</td>
<td style="color:#CCE5FF;"><?php echo $row['id_Cust'] ?> </td>
</tr>

<tr>
<td style="color:#99CCFF;">Username:</td>
<td style="color: #CCE5FF;"><?php echo $row['user_Cust'] ?> </td>
</tr>

<tr>
	<td style="color:#99CCFF;">Name:</td>
	<td><input type="text" name="name_Cust" value="<?php echo$row['name_Cust'] ?>"></td>
</tr>
<tr>
	<td style="color:#99CCFF;">No Telephone:</td>
	<td><input type="text" name="noTel_Cust" value="<?php echo$row['noTel_Cust'] ?>"></td>
</tr>

<tr>
<td style="color:#99CCFF;"> Email:</td>
<td><input type="text" name="email_Cust" value="<?php echo $row['email_Cust'] ?>"></td>
</tr>

<tr>
  <td><input type="radio" id="m" name="gender_Cust" value="<?php echo $row['gender_Cust'] ?>"required="gender_Cust"></td>
  <td><label for="m" style="color:#99CCFF;">Male</label><br></td>
  <td><input type="radio" id="f" name="gender_Cust" value="<?php echo $row['gender_Cust'] ?>"required="gender_Cust"></td>
  <td><label for="f"style="color:#99CCFF;">Female</label><br></td>
</tr>
</table>
<br>
<button class="button button1" input type="submit" value="Update">Update</button>

<button class="button button1" input type="submit" onclick="window.location.href='aboutUs.php';">Back</button>

</form></center>
<br>
<script type="text/javascript">
function required() 
   {
 
    var empt6 = document.forms["form1"]["gender_Cust"].value;
   

     if (empt6 == "" )
      { 
         function openForm() {
  document.getElementById("myForm").style.display = "block";  
         return false; 
      }
  }     
}
</script>
</div>
</div>

</body>
</html>

<?php

}
?>