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
div.contact4{
width: 500px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 5px;
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
div.lulu
{
  width: 100%;
  background-color: rgb(0,0,0,0.5);
  

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
  width: 70%;
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
.footer {
   
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
  text-align: center;
}
 div.contact4{
    width:50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
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
  width: 100%;  /* Full width */
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
      <div class="lulu">
      	<br>
<div class="navbar"> 
  <ul >
<li><a style=" ;font-size:15px;"href="homepage.php"><i class="fa fa-group"></i> About Us </a></li>

        <li><a style="font-size:15px; " href= "aboutUs.php"> <i class="fa fa-cube"></i>  Product </a></li>
    
    <li><a style="font-size:15px; " href="#reservation"> <i class="fa fa-address-book-o"></i>  Quotation </a></li>

        <li><a style="font-size:15px; " href="#service"> <i class="fa fa-gears"></i>  Services </a></li>

        <li style=" float:right;"><a style=" font-size:15px; " href="logout.php"> <i class="fa fa-sign-in"></i>  Log Out </a></li>
        
        <li style=" float:right;"><a style=" font-size:15px; " href="myacc.php"> <i class="fa fa-sign-in"></i> My Account </a></li>
  </ul>
  </div>
</div>
<div class="lala">
<center>
      

<br>
<center><h2 id="Product" style="font-size: 28px; font-family:Arial,sans-serif ;">Product</h2></center>
<center>

<div class="slideshow-container">
<div class="container">
<div class="mySlides fade">
  <img class="q" src="img /pizza 2.0 1(1).png" style="width: 47%;" >
 <div class="overlay"> <div class="text">Die Cut Carton</div>
</div></div></div>

<div class="container">
<div class="mySlides fade">
  <img class="q"src="img /nesting.png"style="width: 61%;" >
  <div class="overlay">
  <div class="text">Layerpads, Division Pads & Nesting </div></div>
</div></div>

<div class="container">
<div class="mySlides fade">
  <img class="q"src="img /tuckfolder1.png"style="width: 48%;">
  <div class="overlay"><div class="text">Tuck Folder</div></div>
</div></div>

<div class="container">
<div class="mySlides fade">
  <img class="q"src="img /topbottom.png" style="width: 46.7%;">
  <div class="overlay"><div class="text">Top and Bottom</div></div>
</div></div>

<div class="container">
<div class="mySlides fade">
  <img class="q"src="img /RSC.png" style="width: 52.8%;">
  <div class="overlay"><div class="text">Regular Slotted Carton (RSC)</div></div>
</div></div>

<div class="container">
<div class="mySlides fade">
  <img class="q"src="img /tray.png" style="width: 50.8%;">
  <div class="overlay"><div class="text">Self Lock Carton & Trays</div></div>
</div></div>

<center>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</center>
</div>


<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

</center>


<center><h2 id="reservation" style="font-size: 28px; font-family:Arial,sans-serif ;">How to make your Quotation. </h2></center>
<center><h3>Step 1: Choose Your Marketing Manager</h3></center>

<div class="contact1">

	 <i class="fa fa-vcard  " style=" font-size:16px;"></i><a name="marketing" id="marketing" style="text-transform: capitalize; color:#331900;text-decoration: none;  " onchange="myFunc()" href="registration2.php">  Person in Charge Marketing 1 </a><br>
</div>
<br>
<div class="contact1">
	 <i class="fa fa-vcard  "style=" font-size:16px;"></i><a style="text-transform: capitalize; color:#331900;text-decoration: none; "href="registerMark2.php">  Person in Charge Marketing 2</a><br>
</div>
<br>
<div class="contact1">

	<i class="fa fa-vcard" style=" font-size:16px;"></i><a style="text-transform: capitalize; color:#331900;text-decoration: none; "href="registerMark3.php">  Person in Charge Marketing 3</a><br>
</div>
<br>
<div class="contact1">

	 <i class="fa fa-vcard  "style=" font-size:16px;"></i> <a style="text-transform: capitalize; color:#331900;text-decoration: none; "href="registerMark4.php">  Person in Charge Marketing 4</a><br>
</div>
<br>
<div class="contact1">

	 <i class="fa fa-vcard  "style=" font-size:16px;"></i> <a style="text-transform: capitalize; color:#331900;text-decoration: none; " href="registerMark5.php">  Person in Charge Marketing 5</a><br>
</div>


<center><h2 id="service" style="font-size: 28px; font-family:Arial,sans-serif ;">Services</h2></center>
<div class="contact3">
  <div class="c">
<table style="width: 100%;">
<tr> 
<td style="text-align: center;"><i class="fa fa-check-square-o"style="font-size:60px;"></i></td>
<td style="text-align: center;"><i class="fa fa-cube"style="font-size:60px;"></i> </td>
<td style="text-align: center;"><i class="fa fa-truck fa-flip-horizontal"style="font-size:60px;" ></i></td>
</tr>
<tr>
	<td>
		<h3 style="text-align: center; color: black;"> Ordering </h3>
	</td>
	<td>
		<h3 style="text-align: center; color: black;"> Production Process </h3>

	</td>
	<td>
		<h3 style="text-align: center; color: black;"> Delivering </h3>

	</td>
</tr>
<tr>
	<td>
		<p style="font-family:Georgia,serif;text-align: center;  ">FISB encourages innovative
packaging solution for our
customers.We assist our clients in designing top-notch packaging for their products and provide samples beforehand to ensure quality and customer satisfaction before production. </p>
	</td>
	<td>
		<p style="font-family:Georgia,serif;text-align: center;  ">FISB provide high quality and colored printing on corrugated boxes to ensure our clients products is eminently displayed. We have a genuine concern and strive to reduce our environmental footprint, therefore our printing uses eco-friendly and alcohol-free inks.</p>

	</td>
	<td><p style="font-family:Georgia,serif;text-align: center;  ">
		Here at FISB, we strive to deliver our products quickly to our customers. We are aware and respect that any delay in our delivery can result in damages and losses to our clients.
Transportation of products are monitored vigorously to meet the time of delivery.
	</p>
	</td>
</tr>
</table>
</div>
</div>
<br>

<div class="b">
	<center><h3 style="color: black; font-size: 17px;">Feedback for this Website</h3></center>

<form action="feedback.php" method="POST" name="form1" onsubmit="required()"><!--important= nnti tukar--><center>
<table class="haha">

  <tr>
  	<td><label for="name_Feed"style="color: #330000">Subject :   </label></td>
  	<td><input type="text" id="name_Feed" name="name_Feed" placeholder="Enter Title For This Feedback"  required="notel_Cust"><br></td>
  </tr>
<tr>
  	<td><label for="feedback_Feed"style="color: #330000">Text :   </label></td>
  	<td><textarea type="text" id="feedback_Feed" name="feedback_Feed"placeholder="Enter Your Feedback"  required="date_Reg"></textarea></td>
  </tr>

  <tr>
  	<td>
  <input type="radio" id="g" name="feedback_grade" value="g">
  <label for="f"><i class='far fa-laugh-beam' style='font-size:24px ;color:green; '></i></label><br></td> 
 
  <td><input type="radio" id="b" name="feedback_grade" value="b">
  <label for="b"><i class='	far fa-frown' style='font-size:24px; color: red;'></i></label><br></td>
</tr>



</div>
</table>
<ol>
<button class="button button1" input type="submit" value="submit"onclick="myFunction()">Publish</button>
</ol>
</center>
</form>

</div>


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
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

}

</script>


<br>
<br>
<?php 

$sql="SELECT * FROM feedback INNER JOIN customer ON feedback.id_Cust = customer.id_Cust order by id_Feed Desc limit 5 ";

$result = $conn-> query($sql)or die($conn->error);

if($result!== true)
{
  while($row = $result-> fetch_assoc()) 
  {
    echo"<center><div class='contact4'>"; 

    echo "<i class='fa fa-user-circle' style='font-size:24px'></i> ";


    echo" ".$row["user_Cust"]."&emsp;said..."; 


    echo"<b> <p style=' text-align: left;font-size:16px;font-family:times New Roman, serif;'> ".$row["name_Feed"]. "<br>";
    echo"</b>";

    echo"".$row["feedback_Feed"]."";

    echo"<p style=' text-align: right;font-size:16px;font-family:times New Roman, serif;'> ".$row["feedback_grade"]. "";


    echo"<br></div></center><br>";

   }
}

?>


</div>
</ul>
</tr>
</table>
</div>
</div>
</center>
</div>
</center>

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