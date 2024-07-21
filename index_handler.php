<?php
$name = $_POST["name"];
$email = $_POST["email"];
$TelephoneNumber = $_POST["mobile"];
$message = $_POST["message"];

$con = mysqli_connect("localhost","root","") or die ("Can't Connect Server");
$db = mysqli_select_db($con , "furniture") or die ("Can't Connect to Database");

$contact = "INSERT INTO contactus (name , email, TelephoneNumber,message) 
values('$name' ,'$email','$TelephoneNumber','$message')" ;

$result = mysqli_query($con,$contact);

if($result)
{
    header('Location: index.php');
}
else
{
   echo"Error".mysqli_error($con);
}
?>