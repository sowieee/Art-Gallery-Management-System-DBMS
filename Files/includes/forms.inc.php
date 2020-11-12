<?php 
	include_once "dbh.inc.php";
	$title = $_POST['title'];
	$aname = $_POST['aname'];
	// $image = $_POST['image'];
	$category = $_POST['category'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	// $filename = $file["tmp_name"];





	$sql = "insert into artprice(title, aname, image, category, description, price) values ('$title', '$aname', '$file', '$category', '$description', '$price');";
	if(mysqli_query($conn, $sql))
	{
		echo '<script>alert("Image Inserted into Database")</script>';
	}

	header("Location: ../new.php?forms=success")
 
 ?>