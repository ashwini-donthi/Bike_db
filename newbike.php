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
<html>   
<body style="color:#404040;font-size:20px;">
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

<title>New Bike</title>
<br><br><b>Enter the available details of the model:</b><br><br>
<div class="container"> 
<form  method="POST" action=# >
	
	<div class="form-input">
		<b>BIKE ID :</b>
		<input type="INT" name="bid"  placeholder="BIKE ID" style="background-color: #cccccc" size="40">	
	</div>
	<div class="form-input">
		<b>VIN:</b>
		<input type="VARCHAR" name="vin"  placeholder="VIN" style="background-color: #cccccc" size="40">
	</div>
	<div class="form-input">
		<b>ENGINE NUMBER:</b>
		<input type="VARCHAR" name="eng"  placeholder="ENGINE NUMBER" style="background-color: #cccccc" size="40">
	</div>
	<div class="form-input">
		<b>MODEL NAME:</b>
		<input type="VARCHAR" name="mn"  placeholder="MODEL NAME" style="background-color: #cccccc" size="40">
	</div>
	<div class="form-input">
		<b>VERSION NAME:</b>
		<input type="VARCHAR" name="ver" placeholder="VERSION NAME" style="background-color: #cccccc"  size="40">
	</div>
	<div class="form-input">
		<b>YEAR OF RELEASE:</b>
		<input type="int" name="yor" placeholder="YEAR OF RELEASE" style="background-color: #cccccc"  size="40">
	</div>
	<div class="form-input">
		<b>PRICE:</b>
		<input type="BIGINT" name="p"  placeholder="PRICE" style="background-color: #cccccc" size="40">
	</div>
	<div class="form-input">
		<b>DISPLACEMENT:</b>
		<input type="FLOAT" name="dis" placeholder="DISPLACEMENT" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>STROKE(IN mm):</b>
		<input type="FLOAT" name="str" placeholder="STROKE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>NUMBER OF CYLINDERS:</b>
		<input type="INT" name="c" placeholder=" CYLINDERS" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>VALVES PER CYLINDER:</b>
		<input type="INT" name="vc" placeholder="VALVES PER CYLINDER" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>FUEL DELIVERY SYSTEM:</b>
		<input type="VARCHAR" name="fds" placeholder="FUEL DELIVERY SYSTEM" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>NUMBER OF GEARS:</b>
		<input type="INT" name="g" placeholder="NUMBER OF GEARS" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>GEARBOX TYPE:</b>
		<input type="VARCHAR" name="gbt" placeholder="GEARBOX TYPE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>FRONT BRAKE TYPE:</b>
		<input type="VARCHAR" name="fbt" placeholder="FRONT BRAKE TYPE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>REAR BRAKE TYPE:</b>
		<input type="VARCHAR" name="rbt" placeholder="REAR BRAKE TYPE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>FRONT BRAKE SIZE(IN mm):</b>
		<input type="INT" name="fbs" placeholder="FRONT BRAKE SIZE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>REAR WHEEL SIZE(IN inches):</b>
		<input type="INT" name="rws" placeholder="REAR WHEEL SIZE" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>ODOMETER:</b>
		<input type="VARCHAR" name="o" placeholder="ODOMETER" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>SPEEDOMETER:</b>
		<input type="VARCHAR" name="sp" placeholder="SPEEDOMETER" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>LOW FUEL INDICATOR:</b>
		<input type="VARCHAR" name="lfi" placeholder="LOW FUEL INDICATOR" style="background-color: #cccccc"  size="40">
	</div> 
	<div class="form-input">
		<b>LOW OIL INDICATOR:</b>
		<input type="VARCHAR" name="loi" placeholder="LOW OIL INDICATOR" style="background-color: #cccccc"  size="40">
	</div>
	<div class="form-input">
		<b>ANTI BRAKING SYSTEM:</b>
		<input type="VARCHAR" name="abs" placeholder="ANTI BRAKING SYSTEM" style="background-color: #cccccc"  size="40">
	</div> 
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
  die("Connection failed: " . $conn->connect_error);
}

	if(!empty($_POST['bid'])  && !empty($_POST['vin']) && !empty($_POST['eng']) && !empty($_POST['p']) && !empty($_POST['c']) && !empty($_POST['g']) && !empty($_POST['dis']) && !empty($_POST['o']) && !empty($_POST['sp']) && !empty($_POST['abs']) && !empty($_POST['fbs'])){
	$bid=$_POST['bid'];
		$vin=$_POST['vin'];
		$eng=$_POST['eng'];
		$mn=$_POST['mn'];
		$ver=$_POST['ver'];
		$yor=$_POST['yor'];
		$p=$_POST['p'];
		
		$dis=$_POST['dis'];
		$str=$_POST['str'];
		$c=$_POST['c'];
		$vc=$_POST['vc'];
		$fds=$_POST['fds'];
		$g=$_POST['g'];
		$gbt=$_POST['gbt'];
		
		$fbt=$_POST['fbt'];
		$rbt=$_POST['rbt'];
		$fbs=$_POST['fbs'];
		$rws=$_POST['rws'];
		
		$o=$_POST['o'];
		$sp=$_POST['sp'];
		$lfi=$_POST['lfi'];
		$loi=$_POST['loi'];
		$abs=$_POST['abs'];		
		
		
		$sq1 = "select * from bikedb.brakes_wheels_d2 where FRONT_BRAKE_SIZE = '".$fbs."' ; ";
		
		$result1=$conn->query($sq1);
		

		$sq2 = "SELECT * FROM electricals_d4 WHERE odometer = '".$o."' ";
		$result2 = $conn->query($sq2);
		
		$sq3 = "SELECT * FROM electricals_d3 WHERE speedometer = '".$sp."' ";
		$result3 = $conn->query($sq3);
		
		$sq4 = "SELECT * FROM electricals_d2 WHERE anti_braking_system = '".$abs."' ";
		$result4 = $conn->query($sq4);
		
		$sq5 = "SELECT * FROM engine_spec_d4 WHERE number_of_gears= '".$g."' ";
		$result5 = $conn->query($sq5);  
		
		$sq6 = "SELECT * FROM  engine_spec_d3 WHERE cylinders= '".$c."' ";
		$result6 = $conn->query($sq6); 
		
		$sq7 = "SELECT * FROM engine_spec_d2 WHERE displacement = '".$dis."' ";
		$result7 = $conn->query($sq7); 
		
		$sql1 = "SELECT * FROM bike_d2 WHERE price = '".$p."' ";
		$resu1 = $conn->query($sql1); 
		 
		
		if(mysqli_num_rows($result1)== 1 ){	
			$sq10="INSERT INTO brakes_wheels_d1(vin,front_brake_type,front_brake_size) VALUES ('".$vin."','".$fbt."','".$fbs."')";
			$res1 = $conn->query($sq10);
			
			}
		else { 
			$sq20="INSERT INTO brakes_wheels_d2(front_brake_size,rear_break_type,rear_wheel_size) VALUES ('".$fbs."','".$rbt."','".$rws."')";
			$res12 = $conn->query($sq20);						
			if($res12 === True)	{
				$sq10="INSERT INTO brakes_wheels_d1(vin,front_brake_type,front_brake_size) VALUES ('".$vin."','".$fbt."','".$fbs."')";
				$res1 = $conn->query($sq10);}
		}
		if (mysqli_num_rows($result2)== 1)
		{
			if(mysqli_num_rows($result3)== 1)
			{
				if(mysqli_num_rows($result4)== 1)
				{
					$sq8="INSERT INTO electricals_d1(vin,odometer,speedometer,anti_braking_system) VALUES ('".$vin."','".$o."','".$sp."','".$abs."')";
					$result8 = $conn->query($sq8);
				}
				else 
				{
					$sq16="INSERT INTO electricals_d2(anti_braking_system,low_fuel_indicator) VALUES ('".$abs."','".$lfi."')";
					$res6 = $conn->query($sq16);
					if($res6 === True)	
						{$sq8="INSERT INTO electricals_d1(vin,odometer,speedometer,anti_braking_system) VALUES ('".$vin."','".$o."','".$sp."','".$abs."')";
						$result8 = $conn->query($sq8);}				
				}		
			}
			else
			{
				$sq15="INSERT INTO electricals_d3(speedometer,low_fuel_indicator) VALUES ('".$sp."','".$lfi."')";
				$res5 = $conn->query($sq15);
				if($res5 === True){
					$sq16="INSERT INTO electricals_d2(anti_braking_system,low_fuel_indicator) VALUES ('".$abs."','".$lfi."')";
					$res6 = $conn->query($sq16);
					if($res6 === True    )	
						{$sq8="INSERT INTO electricals_d1(vin,odometer,speedometer,anti_braking_system) VALUES ('".$vin."','".$o."','".$sp."','".$abs."')";
						$result8 = $conn->query($sq8);}}
		}}
		else
		{
			$sq14="INSERT INTO electricals_d4(odometer,low_fuel_indicator,low_oil_indicator) VALUES ('".$o."','".$lfi."','".$loi."')";
			$res4 = $conn->query($sq14);
			if($res4 === True){	
				$sq15="INSERT INTO electricals_d3(speedometer,low_fuel_indicator) VALUES ('".$sp."','".$lfi."')";
				$res5 = $conn->query($sq15);
				if($res5 === True){		
					$sq16="INSERT INTO electricals_d2(anti_braking_system,low_fuel_indicator) VALUES ('".$abs."','".$lfi."')";
					$res6 = $conn->query($sq16);
					if($res6 === True )	
						{$sq8="INSERT INTO electricals_d1(vin,odometer,speedometer,anti_braking_system) VALUES ('".$vin."','".$o."','".$sp."','".$abs."')";
						$result8 = $conn->query($sq8);}}}
		}
		
		if(mysqli_num_rows($result6) == 1)
		{
			if(mysqli_num_rows($result5)== 1)
			{
				if(mysqli_num_rows($result7)== 1)
				{
					$sq9="INSERT INTO engine_spec_d1(engine_no,stroke_mm,fuel_delivery_system,displacement) VALUES ('".$eng."','".$str."','".$fds."','".$dis."')";
					$result9 = $conn->query($sq9);
				}
				else 
				{
					$sq19="INSERT INTO engine_spec_d2(displacement,cylinders,number_of_gears) VALUES ('".$dis."','".$c."','".$g."')";
					$res11 = $conn->query($sq19);
					if($res11 === True)	
					{$sq9="INSERT INTO engine_spec_d1(engine_no,stroke_mm,fuel_delivery_system,displacement) VALUES ('".$eng."','".$str."','".$fds."','".$dis."')";
					$result9 = $conn->query($sq9);}				
				}		
			}
			else
			{
				$sq17="INSERT INTO engine_spec_d4(number_of_gears,gearbox_type,valves_per_cylinder) VALUES ('".$g."','".$gbt."','".$vc."')";
				$res9 = $conn->query($sq17);
				if($res9 === True){
					$sq19="INSERT INTO engine_spec_d2(displacement,cylinders,number_of_gears) VALUES ('".$dis."','".$c."','".$g."')";
					$res11 = $conn->query($sq19);
					if($res11 === True  )	
						{$sq9="INSERT INTO engine_spec_d1(engine_no,stroke_mm,fuel_delivery_system,displacement) VALUES ('".$eng."','".$str."','".$fds."','".$dis."')";
						$result9 = $conn->query($sq9);}}
			}}
		else
		{
			$sq18 ="INSERT INTO engine_spec_d3(cylinders,valves_per_cylinder) VALUES ('".$c."','".$vc."')";
			$res10 = $conn->query($sq18);
			if($res10 === True)
			{	$sq17="INSERT INTO engine_spec_d4(number_of_gears,gearbox_type,valves_per_cylinder) VALUES ('".$g."','".$gbt."','".$vc."')";
				$res9 = $conn->query($sq17);
				if($res9 === True){
					$sq19="INSERT INTO engine_spec_d2(displacement,cylinders,number_of_gears) VALUES ('".$dis."','".$c."','".$g."')";
					$res11 = $conn->query($sq19);
					if($res11 === True  )	
						{$sq9="INSERT INTO engine_spec_d1(engine_no,stroke_mm,fuel_delivery_system,displacement) VALUES ('".$eng."','".$str."','".$fds."','".$dis."')";
					$result9 = $conn->query($sq9);}}}
		}
		
		if(mysqli_num_rows($resu1)== 1){	
				$sq12="INSERT INTO bike_d1 (bike_id,vin,engine_no,version_year,version_name,price) VALUES ('".$bid."','".$vin."','".$eng."','".$yor."','".$ver."' ,'".$p."')";
				$resu2 = $conn->query($sq12);
				}
		else { 
				$sql3="INSERT INTO bike_d2(price,model_name) VALUES ('".$p."','".$mn."')";
				$resu3 = $conn->query($sql3);				
				if($resu3 === True)	{
					$sq12="INSERT INTO bike_d1 (bike_id,vin,engine_no,version_year,version_name,price) VALUES ('".$bid."','".$vin."','".$eng."','".$yor."','".$ver."' ,'".$p."')";
					$resu2 = $conn->query($sq12);}
		}
		if( $resu2 === True && $result9 === True && $result8 === True && $res1 === True )
		{
			echo "Data inserted successfully";
		}
		else
			echo "Please verify your connection";
}
else{
	echo "Please fill the details";
}
$conn->close();
?>