<?php

include ('connect.php');
session_start();

$user=$_SESSION['user_Cust'];

$sql="SELECT * FROM registration WHERE id_Cust = '".$user."'";


$result=$conn->query($sql);


while($row=$result->fetch_assoc()){


?>

<!DOCTYPE html>
<html>
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
<!-- <link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

</head>
<body >
  <div class="main-haha">
		<center><h2 style=" background-color: rgb(0,0,0,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px;font-size: 28px; font-family:Lucida Console,Monospace;color:#FBB917">UPDATE</h2></center>
		 
		<form action="update2.php" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar--><center>
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

    <div class="col-75"><input type="text" id="notel_Cust" name="notel_Cust" placeholder="Enter Phone Number" value="<?php echo$row['notel_Cust'] ?>" required="notel_Cust"><br></div></td>
  </div>
  </tr>
<tr>
  <div class="row">
    <td><div class="col-25"><label for="date_Reg"style="color: #FFDB58">Date :   </label></div>

    <div class="col-75"><input type="date" id="date_Reg" name="date_Reg" value="<?php echo$row['date_Reg'] ?>" required="date_Reg"><br></div></td>
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
    
    <div class="col-75"><input type="text" id="height_Pro" name="height_Pro" placeholder="Enter Box Height"value="<?php echo$row['height_Pro'] ?>" required="height_Pro"><br></div></td>
  </div>
  </tr>

  <tr>
    <div class="row">
    <td><div class="col-25"><label for="width_Pro"style="color:#FFDB58">Width(mm) :   </label></div>

    <div class="col-75"><input type="text" id="width_Pro" name="width_Pro" placeholder="Enter Box Width" value="<?php echo$row['width_Pro'] ?>" required="width_Pro"><br></div></td>
  </div>
  </tr>
  
  <tr>
    <div class="row">
    <td><div class="col-25"><label for="lenght_Pro"style="color: #FFDB58">Lenght(mm) :   </label></div>

    <div class="col-75"><input type="text" value="<?php echo$row['lenght_Pro'] ?>" id="lenght_Pro" name="lenght_Pro"  placeholder="Enter Box Lenght" required="lenght_Pro"><br></div></td>
  </div>
  </tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="quantity2_Pro"style="color: #FFDB58" > Box Quantity :  </label></div>

  <div class="col-75"><input type="text" id="quantity2_Pro"value="<?php echo$row['quantity2_pro'] ?>" name="quantity2_Pro" placeholder="Enter Box Quantity"><br></div></td>
</div>
</tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="noted_Pro"style="color: #FFDB58" >Notes:  </label></div>

  <div class="col-75"><input type="text" id="noted_Pro" name="noted_Pro" style="width: 300px;height:50px;"value="<?php echo$row['noted_Pro'] ?>"   placeholder="Enter Notes ">

    <br><p style="color: white;font-family: sans-serif;">Exp: What is the item do you want to put inside the box ?<br>How many quantity of the product that you want to put inside the box?<br>What type of box do you want? </p></div>
  </td>
</div>
</tr>
</center>
</table>

<button class="button button1" name="update" type="submit" value="Update"onclick="myFunction()">Submit</button>

</form>		
</div>
<script type="text/javascript">
function required() 
   {
    var empt3 = document.forms["form1"]["id_Cust"].value;
   var empt4 = document.forms["form1"]["notel_Cust"].value;
    var empt5 = document.forms["form1"]["date_Reg"].value;
    var empt6 = document.forms["form1"]["height_Pro"].value;
    var empt7 = document.forms["form1"]["width_Pro"].value;
    var empt8 = document.forms["form1"]["lenght_Pro"].value;

    var empt9 = document.forms["form1"]["ind"].value;
    var empt10 = document.forms["form1"]["noted_Pro"].value;
    var empt11 = document.forms["form1"]["quantity2_pro"].value;


     if (empt3 == "" &&empt4 == "" && empt5 == "" && empt6 == "" && empt7 == "" && empt8 == "" && empt9 == "" && empt10 == "" && empt11 == "" )
      { 
         function openForm() {
  document.getElementById("myForm").style.display = "block";  
         return false; 
      }
  } 
  <?php
  }  ?>
</script>    
</body>
</html>