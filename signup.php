<?php
include('connect.php');
session_start();
?>
 <!DOCTYPE html>
<html style="min-height: 100%;min-width: 100%;">
<head>
  <title>Box or Carton Supply |Selangor|Fairview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

  <link rel="stylesheet" type="text/css" href="css/myStyle.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
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
  background-color: rgb(255,255,255,0.5); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
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
.col-75 {
  float: left;
  width: 55%;
  margin-top: 6px;
}
/* Style the submit button */
input[type=text]{
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  width: 250px;
}
input[type=password]{ 
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  width: 250px;
}
.main{
  padding: 120px;
}
@media screen and (max-width: 1000px) { 
  .col-25, .col-75 {
    width: 100%;
    margin-top: 0;
  }
  .main-haha{
  background-color: rgb(255,255,255,0.5); 
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
input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
h1{
  margin:100%;
}
p{
  font-size: 12px;
}
}
</style>


</head>

<body background="img/jaja.jpg" style="height: 100%;
width: 100%;
/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;"/>
<div class="main">
<div class="main-haha">
<center>
    <h1 style="background-color: rgb(255,255,255,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px;font-family:Courier New,monospace;color:   #00008B;"><center>SIGN UP</center></h1>
   
<form action="signup2.php" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar-->
<table>
<tr>
  <div class="row">
  <td><div class="col-25"><label for="user_Cust">Username:&emsp;&emsp;</label></div>
  <div class="col-75">
  <input type="text" id="user_Cust" name="user_Cust" required="user_Cust"placeholder="Enter Username"><br>
</div></td>

</div>
</tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="pass_Cust">Password:&emsp;&emsp;</label></div>

  <div class="col-75"><input type="password" id="pass_Cust" name="pass_Cust" required="pass_Cust"placeholder="Enter Password"><br></div></td>

</div>
</tr> 

<tr>
  <div class="row">
  <td><div class="col-25"><label for="name_Cust">Name:&emsp;&emsp;</label> </div>

  <div class="col-75"><input type="text" id="name_Cust" name="name_Cust"required="name_Cust"placeholder="Enter Name"><br></div>
</div></td>

</tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="email_Cust">Email:&emsp;&emsp;</label></div>


   <div class="col-75"><input type="text" id="email_Cust" name="email_Cust"placeholder="Enter Email" onsubmit="checkEmail()" required="email_Cust"><br></div></div></td>

</tr>

<tr>
  <div class="row">
  <td><div class="col-25"><label for="noTel_Cust">No.Tel:&emsp;&emsp;</label></div>

   <div class="col-75"><input type="text" id="noTel_Cust" name="noTel_Cust"required="noTel_Cust"placeholder="Enter Phone Number"><br></div></div></td>

</tr>

<tr>
  <div class="row">
    <td><div class="col-25"><label for="noTel_Cust">Gender:&emsp;&emsp;</label></div>
    
    <div class="col-75">
      <input type="radio" id="m" name="gender_Cust" value="m"required="gender_Cust">
   

  <i class="fa fa-male" style="font-size:24px;color: #0000CD"></i>
    <label for="m">Male</label>

  
      <input type="radio" id="f" name="gender_Cust" value="f"required="gender_Cust">
    
    <i class="fa fa-female" style="font-size:24px;color:#FF1493"></i><label for="f">Female</label>
  </div>
  
</td>
</div>
</tr>

<script type="text/javascript">

 
function required() 
   {
    var empt1 = document.forms["form1"]["user_Cust"].value;
    var empt2 = document.forms["form1"]["pass_Cust"].value;
    var empt3 = document.forms["form1"]["name_Cust"].value;
    var empt4 = document.forms["form1"]["email_Cust"].value;
    var empt5 = document.forms["form1"]["noTel_Cust"].value;
    var empt6 = document.forms["form1"]["gender_Cust"].value;
   

     if (empt1 == "" && empt2 == ""&&empt3 == "" && empt4 == "" &&empt5 == "" && empt6 == "" )
      { 
         function openForm() {
  document.getElementById("myForm").style.display = "block";  
         return false; 
      }
  }     
}
function checkEmail() {

    var email = document.getElementById('email_Cust');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email_Cust.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
</script>

</table>
    
<button class="button button1" input type="submit" value="Signup"onclick="myFunction() ">Signup</button>

</center>
</form>   

</div>
</div>
</body>
</html>