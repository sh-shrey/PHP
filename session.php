<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["user"] = "user1";
$_SESSION["user2"] = "user2";
echo "Session variables are set.";
?>
</body>
</html>
