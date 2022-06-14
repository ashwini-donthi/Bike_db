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
<title>Order by</title>
<br><br><br><br><br><b>Enter the required details:</b><br><br>
<form  method="POST" action=#>
  <label for="Order by">Order by</label>
  <select name="y">
	<option value="Price">Price</option>
	<option value="version_year">Year of release</option>
	</select>
  <br>
  
  <input type="Submit">
</form>
</body> 
</html>
<br>
<?php 

$host="localhost:3306";
$user="root";
$password="";
$db="bikedb";

$conn= mysqli_connect($host,$user,$password,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['y']) ){
	$ob=$_POST['y']; 
	$sql2="SELECT  bike_d2.model_name , bike_d1.version_name ,".$ob."
	FROM bikedb.bike_d1 NATURAL JOIN bikedb.bike_d2  
    ORDER BY ".$ob.";";
	$data=$conn->query($sql2);
	echo '<table width=70% border="1" cellpadding="5" >
		<tr>
			<th>Model Name</th>
			<th>Version Name</th>
			<th>'.$ob.'</th>
		</tr>';
	foreach($data as $row)
	{
		echo '<tr>
					<td>'.$row["model_name"].'</td>
					<td>'.$row["version_name"].'</td>		
					<td>'.$row[$ob].'</td>
			  </tr>';
	}
	//echo <tabel>;
}
$conn->close();
  
?>
