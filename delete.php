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
.container{
    width: 100%;
	margin:0;
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
<title>Delete</title> 
</head>
<br><br><br><b>Enter the bike id:</b><br></br>
<div class="container"> 
<form  method="POST" action=#>
  <div class="form-input">
Bike ID: <input type="text" name="bid" placeholder="BIKE ID" style="background-color: half white" size="5"/>	
	</div>
  <input type="Submit" value="Delete" >
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
if(isset($_POST['bid'])){
	$bid=$_POST['bid'];
	$s = "select bike_id from bikedb.bike_d1 where BIKE_ID = '".$bid."' ; ";	
	$r=$conn->query($s);
	if(mysqli_num_rows($r)!= 1){echo "Bike does not exist";}
	else{
		$sqlvin = "SELECT vin 
				FROM bikedb.bike_d1 
				WHERE bike_id =".$bid.";";
		$resultvin = $conn->query($sqlvin);
		/*foreach($resultvin as $row)
		{
			echo '<tr>
					<td>'.$row["vin"].'</td>										
					</tr>';
		}*/
		$sqlen = "SELECT engine_no 
				FROM bikedb.bike_d1 
				WHERE bike_id =".$bid.";";
		$resulten = $conn->query($sqlen);
		/*foreach($resulten as $row)
		{
			echo '<tr> 
					<td>'.$row["engine_no"].'</td>										
			  </tr>';
		}*/
		foreach($resultvin as $row){
			foreach($resulten as $row1){
	
				$sql2 = "DELETE FROM bikedb.brakes_wheels_d1 WHERE brakes_wheels_d1.vin = '".$row["vin"]."';";
				$result2 = $conn->query($sql2);
				$sql3 = "DELETE FROM bikedb.electricals_d1 WHERE electricals_d1.vin = '".$row["vin"]."';";
				$result3 = $conn->query($sql3);
				$sql4 = "DELETE FROM bikedb.engine_spec_d1 WHERE engine_spec_d1.engine_no = '".$row1["engine_no"]."';";
				$result4 = $conn->query($sql4);

				if ($result2 === TRUE and $result3 === TRUE and $result4 === TRUE)
					{echo "Bike record deleted successfully";} 
				else 
					{echo "Error: in query <br>" .$conn->error;}
			}
		}
	}
}
$conn->close();
?>