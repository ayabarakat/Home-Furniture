<?php

$email = $_POST["email"];
$password = $_POST["password"];

$con = mysqli_connect("localhost","root","") or die ("Can't Connect Server");
$db = mysqli_select_db($con , "furniture") or die ("Can't Connect to Database");

$login= "SELECT email,password FROM users WHERE email='$email' and password='$password'";

$result = mysqli_query($con,$login);
$count=mysqli_num_rows($result);

if($count==1)
{
    header('Location: index.html');
}
else
{
    //header('Location: login.php');
  echo '<script>
alert("invaild e_mail or password");
</script>'; 
echo"<a href='login.php'>click here to login again</a>";
}
?>