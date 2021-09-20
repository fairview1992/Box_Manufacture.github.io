 <?php
include ('connect.php');
session_start();
?>
<!DOCTYPE html>
<html style="min-height: 100%;min-width: 100%;">
<head>
<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css" >
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->

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
.navbar {
  width: 100%;  /* Full width */
}

</style>

</head>
<body background="img/wewe.jpeg" style="height: 100%;
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

				<li><a style="font-size:15px;padding: 5px 10px 15px;"href="aboutUs.php"><i class="fa 	fa fa-mail-reply"></i> Back </a></li>
	 			
	 			<li style=" float:right;"><a style=" font-size:15px; padding: 5px 10px; " href="logout.php"> <i class="fa fa-sign-in"></i>  Log Out </a></li>
	 			
	 		</b>
		</h2>
	</ul>
	</center>

<center><h3>Step 2: Contact your Manager</h3></center>
<center><h4>Mr. Mohd Yunus</h4></center>

<center>
<button class="button button1" input type="submit" value="submit"onclick="myFunction()"><a href="https://api.whatsapp.com/send?phone=+601123115689">Send Message</a>
</button>
</center>


  <br>
<center><h3>Step 3: Fill in the Form </h3></center>

		
<div class="main-haha">
<center><h2 style=" background-color: rgb(0,0,0,0.6); margin:auto; padding :10px 0px 10px 0px; text-align: center; border-radius: 15px 15px 0px 0px;font-size: 28px; font-family:Lucida Console,Monospace;color:#FBB917">QUOTATION</h2></center>

<form action="registration.php" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar--><center>
<table class="haha">

  <tr>
    <div class="row">
    <td><div class="col-25"><label for="notel_Cust"style="color: #FFDB58">No Telefon :   </label></div>

    <div class="col-75"><input type="text" id="notel_Cust" name="notel_Cust" placeholder="Enter Phone Number"  required="notel_Cust"><br></div></td>
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
    
    <div class="col-75"><input type="text" id="height_Pro" name="height_Pro" placeholder="Enter Box Height"  required="height_Pro"><br></div></td>
  </div>
  </tr>

  <tr>
    <div class="row">
    <td><div class="col-25"><label for="width_Pro"style="color:#FFDB58">Width(mm) :   </label></div>

    <div class="col-75"><input type="text" id="width_Pro" name="width_Pro" placeholder="Enter Box Width"  required="width_Pro"><br></div></td>
  </div>
  </tr>
  
  <tr>
    <div class="row">
    <td><div class="col-25"><label for="lenght_Pro"style="color: #FFDB58">Lenght(mm) :   </label></div>

    <div class="col-75"><input type="text" id="lenght_Pro" name="lenght_Pro"  placeholder="Enter Box Lenght" required="lenght_Pro"><br></div></td>
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

  <div class="col-75"><input type="text" id="noted_Pro" name="noted_Pro" style="width: 300px;height:50px;"  placeholder="Enter Notes ">

    <br><p style="color: white;font-family: sans-serif;">Exp: What is the item do you want to put inside the box ?<br>How many quantity of the product that you want to put inside the box?<br>What type of box do you want? </p></div>
  </td>
</div>
</tr>

<script type="text/javascript">
function required() 
   {
    var empt3 = document.forms["form1"]["notel_Cust"].value;
    var empt4 = document.forms["form1"]["date_Reg"].value;
    var empt5 = document.forms["form1"]["height_Pro"].value;
    var empt6 = document.forms["form1"]["width_Pro"].value;
    var empt7 = document.forms["form1"]["lenght_Pro"].value;

     if (empt3 == "" && empt4 == "" &&empt5 == "" && empt6 == ""&& empt7 == "")
      { 
         function openForm() {
  document.getElementById("myForm").style.display = "block";  
         return false; 
      }
  }     
}
	function myFunction() {
  alert("You Have Successfully Book Your Box !!");
</script>
</table>
<ol>
	<button class="button button1" input type="submit" value="submit"onclick="myFunction()">Submit</button>

	

   	<!--<center><td><input type="submit" value="Submit" ></td></center>-->
    </center>
</ol>

</form>	
</div>
</center>
</form>

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