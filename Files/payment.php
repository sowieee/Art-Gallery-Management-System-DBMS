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




$query = "select * from payment where cardnum='$cardnum' and cvv='$cvv' ";
$query_run = mysqli_query($conn,$query);
if($query_run)
        {
          if(mysqli_num_rows($query_run)>0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          
          $_SESSION['cardnum'] = $cardnum;
          $_SESSION['cvv'] = $cvv;
          header( "Location: continueshopping.php");
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
	<title>PAYMENT & CARD</title>
	<link rel="stylesheet" type="text/css" href="payment.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body class="bgcolor">

	<div class="row">
  <div class="col-75">
    <div class="container">
      <form method='POST'>
      	<!-- in the above tag php must be used -->

        <div class="row">
          <div class="col-50">

            <center><h3>Billing Address</h3></center>

            <br>

            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="full name"required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="email" required>

            <label for="adr">Address</label>
            <input type="text" id="adr" name="address" placeholder="address" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="city" required>

            <div class="row">
              <div class="col-50">

                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="state" required>

              </div>

              <div class="col-50">

                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="zip" required>
              </div>
            </div>
          </div>

          <div class="col-50">

            <center><h3>Payment</h3></center>

            <br>

           <!--  <label for="fname">Accepted Cards</label>
            <div class="icon-container">

              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>

            </div> -->

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="name" required>

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnum" placeholder="card-number" required>

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="exp month" required>

            <div class="row">
              <div class="col-50">

                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="year" required>

              </div>

              <div class="col-50">

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="cvv" required>
              </div>
            </div>
          </div>

        </div>

        <label>
          <input type="checkbox" checked="checked" name="sameadr" required> Shipping address same as billing
        </label>

        <button type="submit" name = "submit" class="btn">Checkout</button>

      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">

      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>

          <b></b>

        </span>

      </h4>

     

      <p><a href="#">Product </a> <span class="price"> <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery where idGallery='5';";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<p>Price: '.$row["price"].'</p>
                 ';
              }
            }
            ?></span></p>

      <!-- <p><a href="#">Product 2</a> <span class="price">$5</span></p>

      <p><a href="#">Product 3</a> <span class="price">$8</span></p>

      <p><a href="#">Product 4</a> <span class="price">$2</span></p> -->

<!-- the price must be provided with the name of the item name -->

      <hr>

      <p>Total <span class="price" style="color:black"><b> <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery where idGallery='5';";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<p>Price: '.$row["price"].'</p>
                 ';
              }
            }
            ?></b></span></p>

      <!-- total must also be provided automatically if a customer is buying more than one item. -->

    </div>
  </div>
</div>


</body>
</html>
