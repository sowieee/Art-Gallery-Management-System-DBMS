<?php 
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$email=$_POST['email'];
$password=$_POST['password'];
$query = "select * from artists where email='$email' and pwd='$password'";
$query_run = mysqli_query($conn,$query);
if($query_run)
        {
          if(mysqli_num_rows($query_run)>0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          $_SESSION['email'] = $email;
          $_SESSION['pwd'] = $password;
          
          header( "Location: G.php");

          }
          else
          {
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("Database Error")</script>';
        }
      }
 
?>




<!DOCTYPE html>
<html>
<head>
	<title>ARTIST LOGIN</title>
	<link rel="stylesheet" type="text/css" href="loginartist.css">
</head>
<body>

<div class="split left">
<div class="centered">

	<h1>Welcome Back : Artist</h1>

	<br>

	<form method='POST'>
		<label>
			Username:
			<input name="email" type="email" placeholder="Username/Email" class="bstyle" required>
		</label><p></p>

		<label>
			Password:
			<input type="password" name="password" placeholder="Password" class="bstyle" required>
		</label><p></p>


			<button type='submit' name='submit'class="bustyle">Login</button><br><br>

			<a href="fp.php">Forgot Password ?</a>

	</form>

	<br>

	<a href="index.php">Home</a>

</div>
</div>

<!-- this will be the part for right side -->

<div class="split right">
<div class="centered">

<!-- image is inserted here -->

</div>
</div>

</body>
</html>