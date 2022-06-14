<?php
include 'config1.php';// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if($_SESSION["loggedin"] != true){
    header("location: login.php");
    exit;
}
?>
<!Doctype Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 18px sans-serif; text-align: left; }
		body {
		background-image: url('images/ssss.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;  
		background-size: cover;
}
.header img {
  float: left;
  width: 100px;
  height: 50px;
  background: #000;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
#logo{
position:fixed;
top:0;
left:0;
}
.carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">

    <a class="navbar-brand" href="#"></a>
	<div class="header">
<h1 id="logo"><a style="float:left" href="home.php"><img src="images/logo.png" alt="logo" /></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="retrieve.php">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body> 
<body style="color:#404040;font-size:20px;">
<head>
<title>Customer details</title> 
</head>
<br><br><br><br><br><b>Enter the required details:</b><br><br>
<form  method="POST" action=#>
  <label for="Customer ID">Customer ID:</label>
  <input type="INT" style="background-color: half white" name="cid" size="5" >
  <br>
  <input type="Submit">
</form>
</body> 
</html>

<?php 

$host="localhost:3306";
$user="root";
$password="";
$db="bikedb";

$conn= mysqli_connect($host,$user,$password,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['cid'])  ){
	$c = $_POST['cid'];

	$sql2 = "select * 
	from bikedb.customer
	natural join bikedb.bike_d1
	natural join bikedb.bike_d2 
	natural join bikedb.brakes_wheels_d1
	natural join bikedb.brakes_wheels_d2 
	natural join bikedb.engine_spec_d1
	natural join bikedb.engine_spec_d2
	natural join bikedb.engine_spec_d3
	natural join bikedb.engine_spec_d4
	natural join bikedb.electricals_d1
	natural join bikedb.electricals_d2
	natural join bikedb.electricals_d3
	natural join bikedb.electricals_d4
	where customer.c_id= ' ".$c." ' ";
	
	$data=$conn->query($sql2);
	
	echo '<table width=70% border="1" cellpadding="5" >
		<tr>
			<th>Customer id</th>
			<th>First name</th>
			<th>Last name</th>
			<th>PHONE NUMBER</th>
			<th>Bike id</th>
			<th>VIN</th>
			<th>Engine number</th>
			<th>Version year</th>
			<th>Version name</th>
			<th>Model name</th>  
			<th>Price</th>
			<th>Displacement</th>
			<th>Front brake type</th>
			<th>Front brake size</th>
			<th>Rear brake type</th>
			<th>Rear wheel size</th>			
			<th>Cylinder</th>
			<th>valves per cylinder</th>			
			<th>Odometer</th>
			<th>Speedometer</th>
			<th>Anti braking sytem</th>			
			<th>Number of gears</th>
			<th>Gearbox_type</th>
			<th>Fuel delivery  system</th>
			<th>Low fuel indicator</th>
			<th>Low oil indicator</th>
			<th>stroke</th>		
		</tr>';
	foreach($data as $row)
	{
		echo '<tr>
					<td>'.$row["C_ID"].'</td>
					<td>'.$row["FNAME"].'</td>
					<td>'.$row["LNAME"].'</td>
					<td>'.$row["PHONE_NUMBER"].'</td>
					<td>'.$row["BIKE_ID"].'</td>
					<td>'.$row["VIN"].'</td>
					<td>'.$row["ENGINE_NO"].'</td>
					<td>'.$row["VERSION_YEAR"].'</td>
					<td>'.$row["VERSION_NAME"].'</td>
					<td>'.$row["MODEL_NAME"].'</td>
					<td>'.$row["PRICE"].'</td>
					<td>'.$row["DISPLACEMENT"].'</td>				
					<td>'.$row["FRONT_BRAKE_TYPE"].'</td>
					<td>'.$row["FRONT_BRAKE_SIZE"].'</td>
					<td>'.$row["REAR_BREAK_TYPE"].'</td>
					<td>'.$row["REAR_WHEEL_SIZE"].'</td>
					<td>'.$row["CYLINDERS"].'</td>
					<td>'.$row["VALVES_PER_CYLINDER"].'</td>					
					<td>'.$row["ODOMETER"].'</td>
					<td>'.$row["SPEEDOMETER"].'</td>
					<td>'.$row["ANTI_BRAKING_SYSTEM"].'</td>					
					<td>'.$row["NUMBER_OF_GEARS"].'</td>
					<td>'.$row["GEARBOX_TYPE"].'</td>
					<td>'.$row["FUEL_DELIVERY_SYSTEM"].'</td>
					<td>'.$row["LOW_FUEL_INDICATOR"].'</td>
					<td>'.$row["LOW_OIL_INDICATOR"].'</td>					
					<td>'.$row["STROKE_mm"].'</td>													
			  </tr>';
	}
	//echo <tabel>;
}
$conn->close();
  
?>