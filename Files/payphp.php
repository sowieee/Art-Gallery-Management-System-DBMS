<?php 
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);

$cardname=$_POST['cardname'];
$cardnum=$_POST['cardnum'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$state=$_POST['state'];




$query = "select * from payment where cardnum='$cardnum' and cvv='$cvv';";
$query_run = mysqli_query($conn,$query);
if($query_run)
        {
          if(mysqli_num_rows($query_run)>0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          
          $_SESSION['cardnum'] = $cardnum;
          $_SESSION['cvv'] = $cvv;
   //        if(mysqli_num_rows(mysqli_query($conn,$query))>0){
   //        header( "Location: continueshopping.php");
			// }
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
