<?php
$con= mysqli_connect("localhost","root","") or die("Error:can't connect to server");
$db=mysqli_select_db($con,"furniture") or die("Error:can't connect to db");
?>