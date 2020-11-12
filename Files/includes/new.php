<?php 
include_once "includes/dbh.inc.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>
<?php 
	$sql = "select * from artpiece";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result))
	{
		echo'
			<tr>
				<td>
					<img src = "data:image/jpeg;base64,'.base64_encode($row['image'] ).'" />
				</td>
			</tr>
		';
	}
 ?>
</body>
</html>