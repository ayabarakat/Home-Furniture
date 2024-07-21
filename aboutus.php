<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
   
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile & tablet -->
 		<title>Home</title> <!--Title of the page-->
 		<link rel="icon" href="images/picture5.png" /> <!-- icon of the page -->
 		<link rel='stylesheet'href ='css/bootstrap.css'/> <!-- Bootstrap -->
        <link rel='stylesheet'href ='css/font-awesome.min.css'/> <!-- font -->
        <link rel='stylesheet'href ='css/style.css'/> <!-- External sheet CSS -->
        <link rel='stylesheet'href='css/media.css'/>
        <link rel='stylesheet'href='css/animate.css'/>
        <meta name="keywords" content="Home Furniture,Website"> 
		
</head>


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
       <a href="index.html"><img src="images/logo78.png" alt=""></a> <!-- Logo of the page -->
      </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
       <ul class="nav navbar-nav">
        <li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="furniture.html">Furniture</a></li>
            <li><a href="bed.html">Beds</a></li>
            <li><a href="bath.html">Bath</a></li>
            <li><a href="home decor.html">Home Decor</a></li>
            <li><a href="kitchen.html">Kithcen</a></li>
          </ul>
        </li>
            <li><a href="find us.html">Find Us</a></li>
            <li class="active"><a href="aboutus.html">About US <span class="sr-only">(current)</span></a> </li>            
            <li><a href="login.html">Login</a></li>
         </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->

<!-- About us Section -->
<div class="aboutus">
  <h1>Home Furniture</h1><br>
  <p>They say home is where the heart is.</p>
  <p>Home furniture is an online catalog website. The customer can enjoy a wide variety of trendy home goods from A to Z with a competitive prices and view the available products with their details and the  
    <br>products’ prices and if there is a discount, the customer can view it. 
    <br>
  Our store is beginning in 2020 to sell Furniture in Alexandria and it is available 24 X 7. We offer good prices with discount offers for customers. 
  <br>
  Our philosophy is to consistently deliver outstanding quality and service at the lowest possible price, and we pride ourselves on our innovation towards the latest fashion trends and our exceptional customer
  <br> 
  <br>
  
  service we provide to our customers.
</p>
<script>
function ValidateEmail(email)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}
</script>


<div class="rate">
<form  method="post" action="aboutus_handler.php">
<h3> Customer Opinion Survey </h3>
<p style="text-align: left;"> 
 
<script>
  name= window.prompt("Enter Your Name");
  document.write("Welcome ",name);
  </script> </p> 
  <input type="text" name="email" size="25" placeholder=" ENTER YOUR EMAIL" /><br>
   <p style="text-align: left;" >How do you like our Website ?</p>
  <input type="radio" id="Excellent" name="Rate" value="Excellent">
  <label for="Excellent">Excellent</label><br>
  <input type="radio" id="Very Good" name="Rate" value="Very Good">
  <label for="Very Good">Very Good</label><br>
  <input type="radio" id="Good" name="Rate" value="Good">
  <label for="Good">Good</label><br>
  <input type="radio" id="Bad" name="Rate" value="Bad">
  <label for="Bad">Bad</label>
  <br> 
  <br>
  <input type="submit" value="submit" onclick="ValidateEmail(email)">

  <!--<input onclick="myFunction()">Submit>

<script>
function myFunction() {
  alert("your survey is submitted successfully");
}
</script>-->

</form>
</div>

 
  <div class="madeby">
    <h1><b>The Founders</b></h1>
    <a href="aboutus.html"><img src="madeby.jpg" alt=""></a>
    <img src="images/madeby.jpg" height="500px" width="500px">
  </div>
 

<br>
<br>
<br>




</div>



<!-- End About us -->



<!-- start Footer -->
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <a href="index.html"><img src="images/logo78.png" alt="logo"></a>
          <ul class="list-unstyled threecol ">
             <li><a href="index.html">Home</a></li>
             <li><a href="furniture.html"> Furniture</a></li>
              <li><a href="bed.html">Beds </a></li>
             <li><a href="bath.html">Bath</a></li>
             <li><a href=" home decor.html">Home Decor</a></li>
             <li><a href="kitchen.html"> Kitchen</a></li>
             <li><a href="find us.html">Find Us</a></li>
             <li><a href="aboutus.html">About US</a></li>
            <li><a href="login.html">Login</a></li>
          </ul>
      </div>
      <div class="col-lg-6">
        <h2> Follow us </h2>
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
</div>


<!-- copyright -->
  <div class="copyright text-center">
    Copyright&copy;2023<span>Home</span>.R&A    
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

