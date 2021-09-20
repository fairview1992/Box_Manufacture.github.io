 <?php
$user_Emp=$_POST['user_Emp'];
$pass_Emp=$_POST['pass_Emp'];
$name_Emp=$_POST['name_Emp'];
$email_Emp=$_POST['email_Emp'];
$age_Emp=$_POST['age_Emp'];

$servername="localhost";
$username="root";
$password="";
$dbname="fairview"; 

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname );

//Check connection
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
else{

	$stmt=$conn->prepare("insert into employee(user_Emp,pass_Emp,name_Emp,email_Emp,age_Emp) values (?,?,?,?,?)");
	$stmt->bind_param("ssssi",$user_Emp,$pass_Emp,$name_Emp,$email_Emp,$age_Emp);
	$stmt->execute();


	//echo"you have sign in";
	include("adminlogin.php");
	$stmt->close();
	$conn->close();
}
?>