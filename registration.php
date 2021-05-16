<Html>
<head>
<title>
Registration Page </title>
<style>
body{
margin: 0;
padding: 0;
background: url(https://www.mikesplc.com/wp-content/uploads/mikesplc-landing-page-background.jpg);
background-size: cover;
background-position: center;
background-repeat: no-repeat;
font-family: sans-serif;
}

.registration{
    width:640px;
	height:600px;
	background: #000;
	color: #fff;
	top:50%;
	left:50%;
	position: absolute;
	transform:translate(-50%,-50%);
	box-sizing: border-box;

}
#grad1 {
  background-image: linear-gradient(to bottom, #85BB65 0%,#008080 100%);
}
.try{
backgroung-color:lightblue;}
</style> </head>
<br>
<br>
<div class="registration"  id ="grad1">
<form method="post" action="welcome.php">
 <fieldset>
          <legend>Registration page</legend>
<label> Name: </label>
<input type="text" name="firstname" size="15"/> <br> <br>
<label>
Email: </label>
<input type="email" id="email" name="email"/> <br>
<br> <br>
 <label>
Password:
<input type="Password" id="pass" name="pass"> <br>
<br> <br>
Phone :
</label>
<input type="text" name="country code"  value="+91" size="2"/>
<input type="text" name="phone" size="10"/> <br> <br>
<label>
Date of birth </label>
<input type ="text" name="dob" >
<label><br> <br>
<br>
<label>
  Hobbies</label><br>
  <input type="checkbox" name="hobby[]" value="Traveling">traveling<br>
  <input type="checkbox" name="hobby[]" value="reading books">Reading books<br>
  <input type="checkbox" name="hobby[ ]" value="Writting/Bloging">Writting/Bloging<br>
  <input type="checkbox" name="hobby[ ]" value="listening music">listening music<br>
  <input type="checkbox" name="hobby[ ]" value="video gaming">Video gaming<br>
<br>
<label>
stream
</label>
<select name="stream[]">
<option value="engineering">engineering</option>
<option value="cse">CSE</option>
<option value="aeronautical">aeronautical</option>
<option value="chemical">chemical engineering</option>
<option value="mech">mechanical </option>
<option value="electrical">electrical</option>
</select>
 <br>
<br>
<label>
Gender :
</label><br>
Gender<br>
  <input type="radio" name="gender" value="Male">Male<br>
  <input type="radio" name="gender" value="female">Female<br>
<br>
<br>

<label>
<input type="submit" name="submit" value="Register">
</form>
</div>
</body>
</html>
