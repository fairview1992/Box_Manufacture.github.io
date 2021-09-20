<?php
include ('connect.php');

function getPost()
{
	$posts=array();
	$posts[0]=$_POST['id_Cust'];
	$posts[1]=$_POST['name_Cust'];
	$posts[2]=$_POST['email_Cust'];
	$posts[3]=$_POST['notel_Cust'];
	$posts[4]=$_POST['date_Reg'];
	$posts[5]=$_POST['day_Reg'];
	$posts[6]=$_POST['adult_ticket'];
	$posts[7]=$_POST['children_ticket'];
	return $posts;
}
if(isset($_POST['search']))
{
	$data=getPost();
	$search_Query="SELECT * FROM registration WHERE id_Cust= $data[0]";
	$search_Result=mysqli_query($connect,$search_Query);
	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while ($row=mysqli_fetch_array($search_Result))
			{
				$id_Cust=$row['id_Cust'];
				$name_Cust=$row['name_Cust'];
				$email_Cust=$row['email_Cust'];
				$notel_Cust=$row['notel_Cust'];
				$date_Reg=$row['date_Reg'];
				$day_Reg=$row['day_Reg'];
				$adult_ticket=$row['adult_ticket'];
				$children_ticket=$row['children_ticket'];

			}
		}else
		{
			echo 'No Data for This Id';
		}

	}else{
		echo 'Result Error';
	}

}

?>
