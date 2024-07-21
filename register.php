<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Home</title>
 <link rel="icon" href="images/picture5.png" /> <!-- icon of the page -->
 <link rel='stylesheet'href ='css/bootstrap.css'/>
 <link rel='stylesheet'href ='css/font-awesome.min.css'/>
 <link rel='stylesheet'href ='css/style.css'/>
  <link rel='stylesheet'href='css/media.css'/>
  <link rel='stylesheet'href='css/animate.css'/>
  <meta name="keywords" content="Home Furniture,Website"> <!-- Search Engine -->
</head>
<body>

<!-- navbar start -->

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a href="index.php"><img src="images/logo78.png" alt=""></a>

    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php">Home</a></li>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="furniture.php">Furniture</a></li>
            <li><a href="bed.php">Beds</a></li>
            <li><a href="bath.php">Bath</a></li>
            <li><a href="home decor.php">Home Decor</a></li>
            <li><a href="kitchen.php">Kithcen</a></li>
          </ul> 
        </li>
             
            <li><a href="find us.php">Find Us</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- navbar end -->
<div class="pro" align="left">
  <h1 align="center">Make a New Account</h1>
  <h4 align="center">Welcome to our Shop</h4>
  <form onsubmit="return validation()" method="post" action="register_handler.php">
    <label>First Name</label>
    <br>
    <input type="text" name="firstName" placeholder="Your First Name" size="25" />
    <br>
    <label>Last Name</label>
    <br>
    <input type="text" name="lastName" placeholder="Your Last Name" size="25" />
    <br>
    <label>Email</label>
    <br>
    <input type="text" name="email" size="25" placeholder="Your Email" />
    <br>
    <label>Password</label>
    <br>
    <input type="password" name="password" placeholder="Your Password" size="25" />
    <br>
    <br>
    <div align="left">
    <input type="submit" value="Register" />
    <input type="reset" value="Clear" onclick="clear2();" />
    </div>
    <br>
    <div class="container signin" align="left">
    <p>Already have an account? <a href="login.php">Login</a>.</p>
  </div>
  </form>
</div>

<script>
function validation(){
  var valid = true;
  
  formLabels = document.getElementsByTagName("label");
  
  var firstName = document.getElementsByName("firstName")[0];
  if(firstName.value==""){
    formLabels[0].innerHTML="First Name: [required]";
    formLabels[0].style="color: red";
    valid = false;
  }
  else if( !isNaN(firstName.value)){
    formLabels[0].innerHTML="First Name: [Name must be a text]";
    formLabels[0].style="color: red";
    valid = false;
  }
  
  else {
    formLabels[0].innerHTML="First Name:";
    formLabels[0].style="color: black";
    valid = (valid) ? true : false;
  }
  
  var lastName = document.getElementsByName("lastName")[0];
  if(lastName.value==""){
    formLabels[1].innerHTML="Last Name: [required]";
    formLabels[1].style="color: red";
    valid = false;
  }
  else if( !isNaN(lastName.value)){
    formLabels[1].innerHTML="Last Name: [Name must be a text]";
    formLabels[1].style="color: red";
    valid = false;
  }
  else {
    formLabels[1].innerHTML="Last Name:";
    formLabels[1].style="color: black";
    valid = (valid) ? true : false;
  }
  
  var email = document.getElementsByName("email")[0];
  if(email.value==""){
    formLabels[2].innerHTML="Email: [required]";
    formLabels[2].style="color: red";
    valid = false;
  }

  else if(email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1 || email.value.indexOf(".") < 
    email.value.indexOf("@")){
    formLabels[2].innerHTML="Email: [Enter correct email]";
    formLabels[2].style="color: red";
    valid = false;
  }
 

  else {
    formLabels[2].innerHTML="Email:";
    formLabels[2].style="color: black";
    valid = (valid) ? true : false;
  }
  
  var password = document.getElementsByName("password")[0];
  if(password.value == ""){
    formLabels[3].innerHTML="Password: [required]";
    formLabels[3].style="color: red";
    valid = false;
  }
  else if(password.value.length < 8){
    formLabels[3].innerHTML="Password: [Length at least 8]";
    formLabels[3].style="color: red";
    valid = false;
  }
  else {
    formLabels[3].innerHTML="Password:";
    formLabels[3].style="color: black";
    valid = (valid) ? true : false;
  }

  return valid;
}

function clear2(){
  var myArray = new Array();
  myArray[0] = "First Name: *";
  myArray[1] = "Last Name: *";
  myArray[2] = "Email: *";
  myArray[3] = "Password: *";
  for(var i=0 ; i <4 ; i++){
    formLabels[i].innerHTML = myArray[i];
    formLabels[i].style = "color: black";
  }
}
</script>
<!-- start Footer -->
<section class="footer">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6">
        <a href="index.html"><img src="images/logo78.png" alt=""></a>
          <ul class="list-unstyled threecol ">
             <li><a href="index.html">Home</a></li>
             <li><a href="furniture.html"> Furniture</a></li>
              <li><a href="bed.html">Beds </a></li>
             <li><a href="bath.html">Bath</a></li>
             <li><a href=" home decor.html">Home Decor</a></li>
             <li><a href="kitchen.html"> Kithchen</a></li>
             <li><a href="find us .html">Find Us</a></li>
             <li><a href="aboutus.html">About Us</a></li>
            <li><a href="login.html">Login</a></li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h2>Follow us </h2>
        <ul class="list-unstyled icons">
          <li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
           <li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
          <li> <i class="fa fa-twitter fa-5x" aria-hidden="true"></i></li>
          <li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
        </ul>
        <div class="time">
<p>Day & Time</p>

<p id="demo2" ></p>
<p id="demo"></p>

<script>
var d = new Date();
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("demo2").innerHTML = days[d.getDay()];
</script>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                    } 
</script>
</div>
      </div>
    </div>
  </div>

  <div class="copyright text-center">
            Copyright&copy;2020<span>Home</span>.Samaa Mohamed & Sohaila Sami
            </div>
        </section>
        <!-- End Footer -->







 <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>

</body>
</html>