<?php
include ('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Box or Carton Supply |Selangor|Fairview</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="img/png" href="img/favicon1.png" sizes="16x16">

	<link rel="stylesheet" type="text/css" href="css/myStyle.css"> 
	<!--<link rel="stylesheet" type="text/javascript" href="java/myjava.js"> -->

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/5ab001e91f.js" crossorigin="anonymous"></script>


<script src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	<?php
	//include ('connect.php');
		//session_start();
	$sql = "SELECT COUNT(id_Reg) AS elec FROM registration where ind='Electronic'";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
		echo "google.charts.load('current',{packages:['corechart']});";
		echo "google.charts.setOnLoadCallback(drawChart);";
		echo "function drawChart() {";
		echo "var data = google.visualization.arrayToDataTable([";
		echo "['Industry', 'Total'],";
		while($row = $result->fetch_assoc())
			{
		echo "['Electronic',".$row['elec']."],";		
			}
		}


		$sql = "SELECT COUNT(id_Reg) AS Food FROM registration WHERE ind='Food'";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
		while($row = $result->fetch_assoc())
			{
				echo "['Food',".$row['Food']."],";
			}
		}


		$sql = "SELECT COUNT(id_Reg) AS oil FROM registration WHERE ind='Oil and Gas'";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
		while($row = $result->fetch_assoc())
			{
				echo "['Oil and Gas',".$row['oil']."],";
			}
		}


		$sql = "SELECT COUNT(id_Reg) AS Phar FROM registration WHERE ind='Pharmaceuti'";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
		while($row = $result->fetch_assoc())
			{
				echo "['Pharmaceutical',".$row['Phar']."],";
			}
		}


	 $sql = "SELECT COUNT(id_Reg) AS other FROM registration where ind='Other'";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
			while($row = $result->fetch_assoc())
			{
				echo "['Other',".$row['other']."]]);";
	}
		echo "var options = {";
		echo "title: 'Industry',";
		echo "pieHole: 0.2,";
		echo "colors: ['#8360c3', '#c471ed', '#eaafc8', '#ee9ca7', '#00416A', '#77A1D3', '#BBD2C5', '#A5CC82', '#cbcaa5', '#536976', '#314755']};";

		echo "var chart = new google.visualization.PieChart(document.getElementById('donutchart'));chart.draw(data, options); }";
		//echo "chart.draw(data, options); }";
      	} else {
			echo "0 results";
		}
?>
</script>

<script type="text/javascript">
<?php 

	$sql = "SELECT COUNT(id_Reg),MONTHNAME(date_Reg) AS elec FROM registration where ind='Electronic' GROUP BY MONTH(date_Reg) ";
		$result = $conn->query($sql);

		if ($result->num_rows > -1)
		{
		echo "google.charts.load('current', {packages: ['corechart', 'bar']});";
		echo "google.charts.setOnLoadCallback(drawChart);";
		echo "function drawChart() { ";
		echo "var data = google.visualization.arrayToDataTable([";

		while($row = $result->fetch_assoc())
			{
		echo "['Electronic',".$row['elec']."],";		
			}
		}


 
 
 

		echo " var options = {";
		echo "chart: {";
		echo " title: 'Company Performance',";
		echo "subtitle: 'Sales, Expenses, and Profit: 2014-2017',} };";

		echo "var chart = new google.charts.Bar(document.getElementById('columnchart_material'));";
		echo "chart.draw(data, google.charts.Bar.convertOptions(options)); } ";
      

     /* data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');
      data.addColumn('number', 'Energy Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1, .25],
        [{v: [9, 0, 0], f: '9 am'}, 2, .5],
        [{v: [10, 0, 0], f:'10 am'}, 3, 1],
        [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
        [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
        [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
        [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
        [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
        [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
        [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
      ]);

      var options = {
        title: 'Motivation and Energy Level Throughout the Day',
        isStacked: true,
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }*/

  ?>
</script>
 
	<style type="text/css">
		@media screen and (max-width: 1000px) {
			#donutchart{
        	width:100%;
        	height: 100%;
    			padding: 5px;
    			display:inline-block;
    			background-color: white;
    			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
		}
		.icon {
				display: inline-block;
				float: right;
				margin: 3px;
			}

		#chart_div {
        	margin:20px;
        	width:45%;
    			padding: 10px;
    			display:inline-block;
    			background-color: white;
    			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}

			#donutchart {
        	margin:20px;
        	width:45%;
    			padding: 10px;
    			display:inline-block;
    			background-color: white;
    			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
		div.total {
        	margin:20px;
        	width:15%;
    			padding: 10px;
    			display:inline-block;
    			background-color: white;
    			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
		div.info {
				display: inline-block;
				margin:auto;
			}
		.sb {
        float: right;
        padding: 3px;
      }
		div.main-wrapper {
				max-width: 1400px;
    		margin-left: auto;
    		margin-right: auto;
        padding: 5px;
    		background-color: #eeebf0;
			}
		.navbar a:hover {
  background: #ddd;
  color: black;
}
	</style>
 
</head>
<body>

	<div class="navbar">
	<center>
	<ul >
		<h2>
			<b>
				<li><a style="font-size:15px;padding: 5px 10px;"href="report.php"><i class="	fa fa-pie-chart"></i> Dashboard </a></li>

	 			<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminReadUser.php"><i class="fa fa-address-book-o"></i>    User </a></li>

				<li><a style="font-size:15px;padding: 5px 10px 15px ; " href="adminList.php"><i class="fa fa-address-book-o"></i>    Admin </a></li>

	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminRead.php"><i class="fa fa-calendar-check-o"></i> Quotation </a></li>

	 			<li><a style="font-size:15px; padding: 5px 10px;" href="adminFeedback.php"><i class="fa fa-calendar-check-o"></i> Feedback </a></li>
	 			
	 			<li style=" float:right;"><a style=" font-size:15px; padding: 5px 10px; " href="adminlogout.php"><i class="fa fa-sign-out"></i>  Log Out </a></li>
	 			

	 		</b>
		</h2>
	</ul>
	</center></div>
		<br></br>
	<div class="main-wrapper">
    	<?php
		$sql = "SELECT COUNT(id_Reg) AS register FROM registration";

		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			echo "<div class='total'>";
			echo "<div class='info'>";
			while($row = $result->fetch_assoc())
			{
			echo "<h3>".$row['register']."</h3>";
			}
			echo "<span>Total Quotation</span></div>";
			echo "<span class='icon' style='color: #3B9C9C;'>";
			echo "<i class='fas fa-address-book  fa-4x'></i></span></div>";
		}

		$sql = "SELECT COUNT(id_Cust) AS customer FROM customer";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			echo "<div class='total'>";
			echo "<div class='info'>";
			while($row = $result->fetch_assoc())
			{
			echo "<h3>".$row['customer']."</h3>";
			}
			echo "<span>Total Customer</span></div>";
			echo "<span class='icon' style='color: #7f99f5;'>";
			echo "<i class='fas fa-users' style=' font-size:65px;'></i></span></div>";
		}
		$sql = "SELECT COUNT(id_Emp) AS employee FROM employee";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			echo "<div class='total'>";
			echo "<div class='info'>";
			while($row = $result->fetch_assoc())
			{
			echo "<h3>".$row['employee']."</h3>";
			}
			echo "<span>Total Employee</span></div>";
			echo "<span class='icon' style='color: #7f99f5;'>";
			echo "<i class='fas fa-user-tie' style=' font-size:65px;'></i></span></div>";
		}
$sql = "SELECT COUNT(id_Feed) AS good FROM feedback where feedback_grade='g'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			echo "<div class='total'>";
			echo "<div class='info'>";
			while($row = $result->fetch_assoc())
			{
			echo "<h3>".$row['good']."</h3>";
			}
			echo "<span>Good Feedback</span></div>";
			echo "<span class='icon' style='color: #7f99f5;'>";
			echo "<i class='far fa-smile' style=' font-size:65px; color: green;'></i></span></div>";
		}
		$sql = "SELECT COUNT(id_Feed) AS bad FROM feedback where feedback_grade='b'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0)
		{
			echo "<div class='total'>";
			echo "<div class='info'>";
			while($row = $result->fetch_assoc())
			{
			echo "<h3>".$row['bad']."</h3>";
			}
			echo "<span>Bad Feedback</span></div>";
			echo "<span class='icon' style='color: #7f99f5;'>";
			echo "<i class='far fa-frown' style=' font-size:65px;color:red;'></i></span></div>";
		}          
		?>

<center><div id="donutchart" style="width: 650px; height: 500px;" > </div></center>

<!--<div id="columnchart_material" style="width: 800px; height: 500px;"></div>-->

</center>
</div>
</body>
</html>