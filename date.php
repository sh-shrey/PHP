<!DOCTYPE html>
<html>
<body>
  <h1>date and time using php </h1>
</body>
</html>

<?php
date_default_timezone_set('Asia/Calcutta');
header("Refresh: 1");
$d = date("h:i:s");
echo $d;
?>
