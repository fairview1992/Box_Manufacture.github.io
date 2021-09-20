   <?php
   session_start();
$user_Cust=$_POST['user_Cust'];
$pass_Cust=$_POST['pass_Cust'];
$name_Cust=$_POST['name_Cust'];
$email_Cust=$_POST['email_Cust'];
$noTel_Cust=$_POST['noTel_Cust'];
$gender_Cust=$_POST['gender_Cust'];

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
	$stmt=$conn->prepare("insert into customer(user_Cust,pass_Cust,name_Cust,email_Cust,noTel_Cust,gender_Cust) values (?,?,?,?,?,?)");
	$stmt->bind_param("ssssis",$user_Cust,$pass_Cust,$name_Cust,$email_Cust,$noTel_Cust,$gender_Cust);
	$stmt->execute();

	include('index.php');

}
	$stmt->close();
	$conn->close();
?>
