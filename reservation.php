<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css" >
<title> Reservation </title>
<style>
.button{ /* container style for reservation button and cancel button */ 
	position:absolute;
	top:90%;
	left:50%;
	transform: translate(-50%,-50%);
}
.btn{ /* style for reservation button and cancel button */ 
	border:1px solid #fff;
	padding:10px 30px;
	color:black;
	text-decoration: none;
	transition: 0.6s ease;
	
}
.btn:hover{ 
    background-color:#fff;
	color:#000;
}
</style>
</head>
<body>
<header>
<div class="main">
<div class="logo">
<img src="logo.jpg">
</div>
<ul> <!--- Navigation Bar -->
     <li ><a href="home.html" >Home</a></li>
     <li class="dropdown"> <!--- Menu Bar -->
     <a href="javascript:void(0)" >Menu</a>  <!-- The JavaScript void operator evaluates the given expression and then returns a value of undefined -->
    <div class="dropdown-content">
      <a href="pizzza.html">Pizza</a>
      <a href="Appetizers.html">Appetizers</a>
      <a href="drink.html">Drink</a>
    </div>
	 <li> <a href="Offers.html">Offers</a></li>
	 <li><a href="reservation.php"> Reservation </a></li>
	 <li><a href="contact.html">Contact Us </a></li>
     </li>
</ul>
</div>
</header>
</br></br></br> </br></br></br>
<h1 style="color:white; text-align:center;"> Reservation here for a table </h1></br></br>
<form  method="post" name="add">
<fieldset><br><br>
<div class="coupon"><br>
<h3 style="color:gray;"><b> Enter your name : </b></h3> </br>
<input type="text" name="user_name" placeholder="Enter your name" required ></br></br>
<h3 style="color:gray;"><b> Enter your email : </b></h3> </br>
<input type="email" name="email" placeholder="Enter your email" ></br></br>
<h3 style="color:gray;"><b> Enter your mobile number : </b></h3> </br>
<input type="tel" name="mobile" placeholder="Enter your mobile number" required ></br></br>
 <h3 style="color:gray;"> Select number of seats : </h3></br>
<select name="seat" required>
    <option value="One person"> One person </option>
    <option value="Two persons"> Two persons </option>
    <option value="3 People"> 3 People </option>
    <option value="4 People">4 People </option>
	<option value="5 People">5 People </option>
    <option value="6 People">6 People </option>
    <option value="7 People">7 People </option>
    <option value="8 People">8 People </option>
	<option value="9 People">9 People </option>
    <option value="1O People">10 People </option>
  </select></br></br></br>
  <p style="color:gray;"> check here for table next to the window <input type="checkbox" name="window" value="window"></p></br></br>
   <h3 style="color:gray;"> Select branch : </h3></br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.885855287757!2d46.758627514773465!3d24.76510248409898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f01ef645ff611%3A0xecd303b907a7a0a4!2sMaestro%20Pizza!5e0!3m2!1sen!2ssa!4v1572768109827!5m2!1sen!2ssa" width="400" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</br></br></br><select name="branch" required>
    <option value="East. Ring Rd. Exit 10-11, Riyadh "> East. Ring Rd. Exit 10-11, Riyadh </option>
    <option value="Prince Saud Bin Mohammad, Riyadh"> Prince Saud Bin Mohammad, Riyadh </option>
    <option value="King Abdullah Road, Riyadh"> King Abdullah Road, Riyadh </option>
  </select></br></br></br>
 <h3 style="color:gray;"> Choose the time : </h3></br>
<select name="time" required>
    <option value="1:00 PM">1:00 PM</option>
    <option value="2:00 PM">2:00 PM</option>
    <option value="3:00 PM">3:00 PM</option>
    <option value="4:00 PM">4:00 PM</option>
	<option value="5:00 PM">5:00 PM</option>
    <option value="6:00 PM">6:00 PM</option>
    <option value="7:00 PM">7:00 PM</option>
    <option value="8:00 PM">8:00 PM</option>
	<option value="9:00 PM">9:00 PM</option>
    <option value="1O:00 PM">10:00 PM</option>
    <option value="11:00 PM">11:00 PM</option>
  </select></br></br></br></br></br></br>
   <div class="button">
 <input class="btn" type="submit"  value="Reservation"> <input class="btn" type="reset"  value="Cancel Reservation">
  </div>
  </div></br></br>
  </fieldset>
</form></br></br></br></br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$user_name=$_POST['user_name'];
$mail=$_POST['email'];
$mobile=$_POST['mobile'];
$seat=$_POST['seat'];
$window=$_POST['window'];
$branch=$_POST['branch'];
$time=$_POST['time'];
$sql="INSERT INTO reservation (user_name,email,mobile,seat,window,branch,time) VALUES ('$user_name','$mail','$mobile','$seat','$window','$branch','$time')";
if($conn->query($sql) === TRUE) {
	    echo "New reservation created successfully";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();?>
<footer> <!--- footer for the page -->
<h4 style="color:white;"> &copy; 2019 <b>Delicious</b>Pizza-All rights reserved.</h4><br><a href="https://www.facebook.com/"><img src="facbook.png" height="50" width="50"></a><a href="https://twitter.com/login?lang=en"><img src="twitter.png" height="50" width="50"></a><a href="https://www.instagram.com/?hl=en"><img src="instagram.png" height="50" width="50"></a>
</footer>
</body>
</html>