<!DOCTYPE html>
<?php
$cookie_name = "practical";
$cookie_value = "shreya";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "<b><h2> Cookie named '" . $cookie_name . "' is not set!</h2> </b>";
} else {
     echo " <b> <h3>Cookie '" . $cookie_name . "' is set!</h3></b><br>";
     echo " <h3> Value is:  " . $_COOKIE[$cookie_name]."</h3><br>";
}
?>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>
</body>
</html>
