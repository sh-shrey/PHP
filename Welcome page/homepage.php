<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:loginform.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  body{
  margin:0;
font-family: Arial, Helvetica, sans-serif;
background-image: url(11.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat; 
}

.topnav {
  overflow: hidden;
  background-color: #463E3F;
}

.topnav a {
  float: right;
  display: block;
  color: #438D80;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:  #EBF4FA;
  color: black;
}

.topnav a.active {
  background-color: #34282C;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="homepage.php" class="active">Home</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<center style="font-size:30px;"> welcome <?php echo $_SESSION['username'];?>
</center>
</body>
</html>
