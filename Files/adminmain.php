<!DOCTYPE html>
<html>
<head>
	<title>Admin Main</title>
  <link rel="stylesheet" type="text/css" href="adminmain.css">
</head>
<body>

  <div class="split left">
  <div class="centered">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      
      <h1>Admin Operations :</h1>
        <form method="POST">
	         <p>Get user details:</p>
	         <button type="submit" name="submit" class="bustyle">GET</button>
        </form>


        <form method="POST">
	         <p>Get artist details:</p>
	         <button type="submit" name="SUBMIT" class="bustyle">GET</button>
        </form>


        <form method="POST">
          <p>Get art details:</p>
          <button type="submit" name="art" class="bustyle">GET</button>
        </form>


        <form method="POST">
	         <p>Get details of the artist:</p>
	         <input type="text" name="uid" placeholder="user id" class="bstyle">
	         <button type="submit" name="detail" class="bustyle">GET</button>
        </form>


        <form method="POST">
	         <p>Get details of the user</p>
	         <input type="text" name="uid" placeholder="user id" class="bstyle">
	         <button type="submit" name="DETAIL" class="bustyle">GET</button>
        </form>


        <form method="POST">
	         <p>Delete an artist:</p>
	         <input type="text" name="uid" placeholder="user id" class="bstyle">
	         <button type="submit" name="delete" class="bustyle">Delete</button>
        </form>


        <form method="POST">
	         <p>Delete an user:</p>
	         <input type="text" name="uid" placeholder="user id" class="bstyle">
	         <button type="submit" name="deleteuser" class="bustyle">Delete</button>
        </form>

        <br>
        <br>

        <a href="index.php">Home</a>

        <br>
        <br>
        <br>
        <br>

</div>
</div>

<div class="split right">
  <div class="centered">
 
 <p><textarea rows="50" cols="50" name="comment" form="usrform">

<?php 
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);


$sql1 = "call getdetail()";
$result1 = $conn-> query($sql1);


if($result1-> num_rows > 0)
{
  while($row = $result1-> fetch_assoc())
  {
  echo "
    First Name:".$row["fname"]."
    Last Name:".$row["lname"]."
    Date of Birth:".$row["dob"]."
    Gender".$row["gender"]."
    Address:".$row["address"]."
    Mobile NO.:".$row["mob"]."
    User ID:".$row["uid"]."
    Email:".$row["email"]."
    
  ";
 }

}
else{
  echo "0 result";
}
}


if(isset($_POST['SUBMIT'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);


$sql = "SELECT * from artists";
$result = $conn-> query($sql);


if($result-> num_rows > 0)
{
  while($row = $result-> fetch_assoc())
  {
  echo "
    First Name:".$row["fname"]."
    Last Name:".$row["lname"]."
    Date of Birth:".$row["dob"]."
    Gender:".$row["gender"]."
    Mobile NO.:".$row["mob"]."
    User ID:".$row["uid"]."
    Email:".$row["email"]."
    
  ";
 }

}
else{
  echo "0 result";
}
}



if(isset($_POST['art'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);


$sql = "call getart()";
$result = $conn-> query($sql);


if($result-> num_rows > 0)
{
  while($row = $result-> fetch_assoc())
  {
  echo "
    Artist Name:".$row["uid"]."
    Artpiece Title:".$row["titleGallery"]."
    
  ";
 }

}
else{
  echo "0 result";
}
}











if(isset($_POST['detail'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$uid=$_POST['uid'];
$sql = "SELECT * from artists where uid='$uid'";
$result = $conn-> query($sql);


if($result-> num_rows > 0)
{
  while($row = $result-> fetch_assoc())
  {
  echo "
    First Name:".$row["fname"]."
    Last Name:".$row["lname"]."
    Date of Birth:".$row["dob"]."
    Gender:".$row["gender"]."
    Mobile NO.:".$row["mob"]."
    User ID:".$row["uid"]."
    Email:".$row["email"]."
    
  ";
 }

}
else{
  echo "0 result";
}
}










if(isset($_POST['DETAIL'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$UID=$_POST['uid'];
$sql = "SELECT * from users where uid='$UID'";
$result = $conn-> query($sql);


if($result-> num_rows > 0)
{
  while($row = $result-> fetch_assoc())
  {
  echo "
    First Name:".$row["fname"]."
    Last Name:".$row["lname"]."
    Date of Birth:".$row["dob"]."
    Gender:".$row["gender"]."
    Mobile NO.:".$row["mob"]."
    User ID:".$row["uid"]."
    Email:".$row["email"]."
    
  ";
 }

}
else{
  echo "0 result";
}
}


















if(isset($_POST['delete'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$uid=$_POST['uid'];
$sql = "delete from artists where uid = '$uid'";
$result = $conn-> query($sql);
echo "Successfully deleted the artist";
}


if(isset($_POST['deleteuser'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$uid=$_POST['uid'];
$sql = "delete from users where uid = '$uid'";
$result = $conn-> query($sql);
echo "Successfully deleted the user";
}



?></textarea>
</p> 
  </div>
</div>

</body>
</html>