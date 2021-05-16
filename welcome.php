<?php
 if(isset($_POST['submit']))
 {
  $fn=$_POST['firstname'];
  $em=$_POST['email'];
  $pass=$_POST['pass'];
  $mob=$_POST['phone'];
  $city=$_POST['dob'];
  $gender=$_POST['gender'];
  $hobies=$_POST['hobby'];
  $astream= $_POST['stream'];

  echo "First name : $fn <br><br>";
  echo "Email : $em <br><br>";
  echo "Mobile : $mob <br><br>";
  echo "date of birth : $city <br><br>";
  echo "Gender : $gender <br><br>";

  echo "<h3>Hobbies</h3>";

  $i=0;

  while($i<sizeof($hobies))
  {
   echo $hobies[$i]."<br>";

   $i++;
  }
}
?>
