<html>
<head>
<title> Login form </title>
<link rel = "stylesheet" type="text/css" href="style.css">
<body>
<div class = "loginbox" id="grad1">
<img src="user.jpg" class="avatar">
<h1> login here </h1>
<form action = "validation.php" method ="post">
<p> username </p>
<input type="text" name="firstname" placeholder="enter username" class="form-control" required>
<p> password </p>
<input type="password" name="pass" placeholder="enter password" class="form-control" required>
<input type= "submit" name ="" value="login">
<input type = "reset" name ="" value ="reset"><br>
<a href="registration.php"> register here </a><br>
</form>
</div>
</body>
</head>
</html>