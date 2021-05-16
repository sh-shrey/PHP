<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
  $name=$_POST['firstname'];
  $em=$_POST['email'];
  $pass=$_POST['pass'];
  $mob=$_POST['phone'];
  $city=$_POST['dob'];
  $t = "select* from users where name='$name'";
  $result = mysqli_query($con,$t);
  $num = mysqli_num_rows($result);
  if($num==1){
  echo"username already taken";
  }
  else{
  $reg ="insert into users(name,emailid,password,phone,dob) values('$name','$em','$pass','$mob','$city')";
  mysqli_query($con,$reg);
  echo"registration succesfull";
  }
?>