<?php 

session_start();
require_once("ketnoi.php");
if(isset($_POST["submit"])){
	$email = $_POST["email"];
	$password = $_POST["password"];
	if(isset($email) && isset($password)){
		$sql = "select *from users where email = '$email' AND password= '$password'";
		$query = mysqli_query($mysqli, $sql);
		$login = mysqli_num_rows($query);
		if($login>0){
			$_SESSION["email"]=$email;
			$_SESSION["password"]=$password;
			// $name = "select * from users where email='$email'";
			// $result = mysqli_query($mysqli,$name);
            echo "<script> alert('xin chào');window.location='index.php'</script>";
		
		}
	}
}