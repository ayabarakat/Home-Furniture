<?php

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost","root","") or die ("Can't Connect Server");
$db = mysqli_select_db($con , "furniture") or die ("Can't Connect to Database");


$insertUser = "INSERT INTO users (firstName ,lastName , email , password ) 
values('$firstName','$lastName', '$email', '$password')" ; 


$result = mysqli_query($con , $insertUser); 

	if($result){
		header('Location: index.php');
	}
	else{
		echo "Error to Register".mysqli_error($con);
	}

?>