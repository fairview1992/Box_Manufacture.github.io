<?php
include ('connect.php');


?>
<!DOCTYPE html>
<html style="min-height: 100%; min-width: 100%;" >
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
	.navbar a:hover {
  background: #333;
  color: white;
}
.contact{
  width: 70%;
  border-radius: 5px;
  background-color:lightblue;
  padding: 20px;
}
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

	padding: 2px;
}
	.main-haha{
	background-color: rgb(0,0,0,0.5); 
	margin:auto;
	border-radius: 15px 15px 15px 15px;
}

div.contact1{
width: 500px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}
div.contact2{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:70%;
}
div.contact3{
  width: 70%;
  border-radius: 5px;
  background-color: lightblue;
  padding: 5px;
}
div.lala
{
  width: 100%;
  background-color: rgb(0,0,0,0.5);
  padding: 20px;

}
div.c{
  list-style:brown ;
  list-style-position: inside;
  color: #330000 ;
  background-color:lightblue;
  font-family: monospace, courier New;
}
.b{
	list-style-type:circle; 
	list-style:brown ;
	list-style-position: inside;
	color: #330000 ;
	background-color:lightblue;
	font-family: monospace, courier New;
	padding: 10px 0px 10px 0px;
  width: 100%;
}
li.ting{
font-family: time news roman, serif;
}
.container {
  position: relative;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 320px;
  width: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: rgb(0,0,0,0.5);
}

.container:hover .overlay {
  opacity: 1;
  width: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.column {
  float: left;
  padding: 5px;
  margin: auto;
  display: block;
}
.r{
  width: 70%;
  text-align: left;
}
/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 1000px) {
  .column {
    width: 100%;
    display: block;
  }

  .q{
    width: 100%;
    height:70%;
  }
  .contact{
    width: 100%;
  border-radius: 5px;
  background-color:lightblue;
  padding: 20px;
}
.b{
  list-style-type:circle;
  list-style:brown ;
  list-style-position: inside;
  color: #330000 ;
  background-color:lightblue;
  font-family: monospace, courier New;
  padding: 10px 0px 10px 0px;
  width: 100%;
}
  div.contact1{
    width: auto;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin:;
  text-align: center;
}
div.contact3{
  width: 100%;
  border-radius: 5px;
  background-color: lightblue;
  margin:;
  padding: 5px;
}
div.contact2{
  width: 100%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
p{
  font-size:12px ;
}
h3{
  font-size: 16px;
  color:#6495ED;
}
}


h3,h4{
  color:#6495ED;
}
div.yoyo{
  width: 80%;
  background-color: 
}

* {box-sizing: border-box}
.mySlides {display: none}
.q {vertical-align: middle;}
  .slideshow-container {
  position: relative;
  margin: auto;
}
  /* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 20px;
  border-radius: 3px 0 0 3px;
}
.prev{
  left: 20px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
/* Caption text */
.text {
  color: white;
  font-size: 45px;
  padding: 20px;
  position: absolute;
  bottom: 4000px;
  width: 100%;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
div.yiyi{
   font-family: "Times New Roman", serif;
}

.active, .dot:hover {
  background-color: #717171;
}


/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

body {margin:0;}

.navbar {
  width: 100%; /* Full width */
}


.main {
  padding: 10px;
  margin-top: 10px;
  height: 1500px; /* Used in this example to enable scrolling */
}



	</style>
</head>
<body background="img/lolo.jpg" style="height: 100%;
/* Center and scale the image nicely */
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;"/>

<center>
      <img style="width: 40%; " src="img/tutu.png" ></li></center>
<br>
<div class="navbar"> 
  <ul >
        <li><a style=" ;font-size:15px;"href="homepage.php"><i class="fa fa-group"></i> About Us </a></li>

        <li><a style="font-size:15px; " href= "aboutUs.php"> <i class="fa fa-cube"></i>  Product </a></li>
 		

        <li style=" float:right;"><a style=" font-size:15px; " href="logout.php"> <i class="fa fa-sign-in"></i>  Log Out </a></li>
        
        <li style=" float:right;"><a style=" font-size:15px; " href="myacc.php"> <i class="fa fa-sign-in"></i> My Account </a></li>
  </ul>
    <br>
  </div>
<div class="lala">
<center>  

<center><h2 id="aboutUs" style="font-size: 28px; font-family:Arial,sans-serif ;">About Us</h2></center>
<div class="contact"> 
<h3 style="font-family: arial,sans-serif;text-align: center; color:	#00008B;">CORRUGATED CARTON BOXES MANUFACTURER</h3>


<p style="font-family:Georgia,serif;  ">
	Fairview  Industries  Sdn  Bhd  (FISB)  has  been  
operating  for  over  20  years  in  the  business  of 
manufacturing  and  selling  the  corrugated  carton 
boxes  to  our  customers  from  various  industries.

<br>
<br>
Our  mission  is  to  provide  reliable   and
innovative  packaging  solutions  to  our
customers. To  do  this  we  continuously
improve  our  production  facility  and
quality  of  products. FISB  has  invested  in
numerous  outstanding  quality  controlled 
equipments  and  trainings  for  our  staff  to  cater 
to  customers  needs.

</p>
</div>

</center>
</div>
</body>
</html>
