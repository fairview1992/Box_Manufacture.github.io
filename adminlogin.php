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
	label{
		color: white;
	}
	.main-haha{
	background-color: rgb(0,0,0,0.5); 
  margin:auto;
  border-radius: 15px 15px 15px 15px;
  width: 700px ;
}
.main{
  padding: 120px;
}
/* Floating column for labels: 25% width */
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
/* Style the submit button */
input[type=text]{
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=password]{ 
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
</style>


</head>
<body background="img/test2.jpg" style="height: 100%;
width: 100%;
/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;"/>
<div class="main">
<div class="main-haha">
<h1 style="background-color: rgb(0,0,0,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px;">LOGIN ADMIN</h1>
<!--USERNAME  and PASSWORD-->
<center>
<!--<table style="width:20%" class="haha">-->

<form action="adminlogin2.php" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar-->
		<table>
  <tr>
		<div class="row">
		<td><div class="col-25"><label for="user_Emp" class="name">Username:&emsp;&emsp;</label></div>

 	<div class="col-75">
      <input type="text" id="user_Emp" name="user_Emp"class="te_uname" placeholder="Enter Username"  required="user_Emp" /><br></div>
 </div>
    </td>
 </tr>
	<tr>
     <div class="row">
		<td><div class="col-25"><label for="pass_Emp"class="name">Password:&emsp;&emsp;</label></div>

      <div class="col-75">
        <input type="password" id="pass_Emp" name="pass_Emp" class="te_pass" placeholder="Enter Password" required="pass_Emp" />
      </div><br>
    </div>
    </td>
  
  </tr>
  </table>

<script type="text/javascript">
function required() 
   {
   	var empt1 = document.forms["form1"]["user_Emp"].value;
   	var empt2 = document.forms["form1"]["pass_Emp"].value;
     if (empt1 == "" && empt2 == "")
      { 
         function openForm() {
  document.getElementById("myForm").style.display = "block";	
         return false; 
      }
  }
   return true;       	
}
</script>

  	<button class="button button1" input type="submit"name="login"value="Login"onclick="myFunction() ">Login</button>
<!--</table>-->
<!--LINK TO SIGN UP  -->

<br><br><br>
<p style="color: white"><i class="fa fa-user-plus"style="font-size:24px; color:#E5E4E2;"></i></span>  Are you <a style="color: white" href="adminSignup.php">New</a> Employee ? </p>

</center>
</form>

</form>
</div>
</div>
</body>
</html>