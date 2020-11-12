<?php 
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$email=$_POST['email'];
$newpassword=$_POST['password'];
$query = "update users set pwd='$newpassword' where email='$email';";
$query_run = mysqli_query($conn,$query);
if($query_run)
{
          if(mysqli_num_rows($query_run)>=0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          $_SESSION['email'] = $email;
          
          header( "Location: login.php");
          
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
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="fp.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li style="float:right;"><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <br>
  <br>

  <h1>Forgot Password ?</h1>
  <p>If you have forgotten your password, not to worry we will help you get back your account.</p>
  <form method='POST'>
    <label>
      Username:
      <input name="email" type="email" placeholder="Username/Email" class="bstyle" required>
    </label><p></p>

    <label>
      New Password:
      <input type="password" name="password" placeholder="Password" class="bstyle" required>
    </label><p></p>


      <button type='submit' name='submit'class="bustyle">Submit</button><br><br>
  </form>

  <p>If you still find difficulty then please email us your contact details and we will get back to you as soon as possible. Our email id is <address>hi_flair@gmail.com</address></p>

  <p>Have a nice day with Flair!</p>

</body>
</html>