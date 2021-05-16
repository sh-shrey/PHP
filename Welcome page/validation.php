<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
  $name=$_POST['firstname'];
  $em=$_POST['email'];
  $pass=$_POST['pass'];
  $mob=$_POST['phone'];
  $city=$_POST['dob'];
  $t = "select* from users where name='$name' && password='$pass'";
  $result = mysqli_query($con,$t);
  $num = mysqli_num_rows($result);
  if($num==1){
	  $_SESSION['username']=$name;
	  header('location:homepage.php');
  }
  else{
	  header('location:loginform.php');
  
  }
?>