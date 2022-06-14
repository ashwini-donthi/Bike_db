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
<head>
<title>Availability</title> 
</head>
<body style="color:#404040;font-size:20px;">
<br><br><br><br><br><b>Please make a selection:</b><br><br>
<div class="container"> 
<form  method="POST" action=# >	

		<label for="Model">MODEL :</label>
	<select id="mn" name="mn">
		<?php
		$sql="select distinct model_name  from bike_d2 order by model_name asc";
		$result=mysqli_query($link,$sql);
		while($rows = $result->fetch_array()){
		?>
			<option value= "<?php echo $rows['model_name']; ?>" > <?php echo $rows['model_name']; ?> </option>;
		<?php 
		} 
		?>
	</select>
	<br><br>
	<label for="version">VERSION :</label>
	<select id="vn" name="vn">
		<?php
		$sql="select distinct version_name  from bike_d1 order by version_name asc";
		$result=mysqli_query($link,$sql);
		while($rows = $result->fetch_array()){
		?>
			<option value= "<?php echo $rows['version_name']; ?>" > <?php echo $rows['version_name']; ?> </option>;
		<?php 
		} 
		?>
	</select>
	<br><br>
  <input type="submit"  value="SUBMIT" class="btn-btn-primary"/>
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
  die("Connection failed: " . $conn->connect_error);}
if(isset($_POST['mn']) && isset($_POST['vn'])){
	$mn = $_POST['mn'];
	$vn=$_POST['vn'];
	
	$sql = "SELECT * FROM bikedb.bike_d1 NATURAL JOIN bikedb.bike_d2  
			WHERE  bike_d2.model_name='".$mn."' and bike_d1.version_name='".$vn."' ;" ;
	$result1 = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result1) > 0){
	
		$sql2 = "SELECT * FROM bikedb.bike_d1 
					NATURAL JOIN bikedb.bike_d2 
					NATURAL JOIN bikedb.customer 
					WHERE  bike_d2.model_name='".$mn."' and bike_d1.version_name='".$vn."' ;" ;
		$result2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)== mysqli_num_rows($result1)){
			
			echo 'Model is currently out of stock';
		}
		else{
			
			echo 'Model is  available';
		}
	}
	else
		echo "Sorry,no models available";
}
$conn->close();
  
?>
