<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP ARTIST</title>
	<link rel="stylesheet" type="text/css" href="signupar.css">
</head>
<body>

	<nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li style="float:right;"><a href="loginartist.php">Login</a></li>
    </ul>
  </nav>

  <br>
  <br>
  <br>

	<h1>Artists : Sign Up</h1>

	<p class="pstyle">Please fill in the following details to create an account.</p>

  	<form action = "includes/signupar.inc.php" method="POST">

		<p><label>
			First Name :
			<input type="text" name="fname" placeholder="first name" class="lstyle" required>
		</label></p>

		<p><label>
			Last Name :
			<input type="text" name="lname" placeholder="last name" class="lstyle" required>
		</label></p>

		<p><label>
			Date of Birth :
			<input type="date" name="dob" class="lstyle" required>
		</label></p>

		<p><label>
			Gender :
			<select name="gender" class="lstyle" required>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Others">Others</option>
			</select>
		</label></p>

		<p><label>
			Address :
			<p><textarea name="address" placeholder="address" class="lstyle" required rows="3" cols="30"></textarea></p>
		</label></p>

		<p><label>
			Mobile Number :
			<input type="text" name="number" placeholder="number" class="lstyle" placeholder maxlength="10">
		</label></p>

		<p><label>
			Artist_ID :
			<input type="text" name="user_id" placeholder="id" class="lstyle" required>
	</label></p>

		<p><label>
			Email :
			<input type="email" name="email" placeholder="email" class="lstyle" required>
		</label></p>

		<p><label>
			Password :
			<input type="password" name="password" placeholder="password" class="lstyle" required>
		</label></p>

		<p><label>
			Confirm Password :
			<input type="password" name="password" placeholder="confirm password" class="lstyle" required>
		</label></p>

		<p><label>
			<input type="checkbox" name="click" class="lstyle" required>Remember Me.
		</label></p>

		<button class="lstyle">Submit</button>

		<p>Already have an existing account?
			<a href="login.php"> Login</a></p>

		<p>Want to sign up as a Buyer</p>
			<a href="signup.php">SignUp_Buyer</a>
	</form>

</body>
</html>