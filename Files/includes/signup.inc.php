<?php 
	include_once "dbh.inc.php";

	$first = $_POST['fname'];
	$last = $_POST['lname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$mob = $_POST['number'];
	$uid = $_POST['user_id'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];



	$sql = "insert into users(fname, lname, dob, gender, address, mob, uid, email, pwd) values ('$first', '$last', '$dob', '$gender', '$address', '$mob', '$uid', '$email', '$pwd');";
	mysqli_query($conn, $sql);

	header("Location: ../Gusers.php?signup=success")
 ?>