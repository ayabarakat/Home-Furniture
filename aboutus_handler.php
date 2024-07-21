<?php
$Rate = $_POST["Rate"];
$email = $_POST["email"];

$con= mysqli_connect("localhost","root","") or die("Error:can't connect to server");
$db=mysqli_select_db($con,"furniture" ) or die("Error:can't connect to db");
$insertsurvey = "INSERT INTO survey (email ,Rate) 
values('$email' ,'$Rate')" ;
$result=mysqli_query($con , $insertsurvey);
if($result==true)
{
echo "eshta 3leek :) ";
echo"<br>";
echo"<a href='index.php'>click here to go to home</a>";
echo"<br>";
echo"<a href='aboutus.php'>click here to aboutus again</a>";
//header('Location: aboutus.php');;
}
else
{
echo "Error to Register".mysqli_error($con);
}

?>