<?php 
$host="localhost:3306";
$user="root";
$password="";
$db="bikedb";

$link = mysqli_connect($host,$user,$password,$db);
//if($link === false){
//die("ERROR: Could not connect. " . mysqli_connect_error());}
//mysqli_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM `admindb` where uname='".$uname."' AND pwd='".$password."' limit 1";
    
    $result=mysqli_query($link , $sql);
    if(mysqli_num_rows($result)==1){
		session_start();
                            
			// Store data in session variables
			$_SESSION["loggedin"] = true;
			$_SESSION["username"] = $uname;
			header("location: home.php");
			exit();
    }
    else{
		$failed = 1;
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>