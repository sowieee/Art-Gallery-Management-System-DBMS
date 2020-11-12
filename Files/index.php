<?php 
   if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "testing";
$conn = new mysqli($servername, $username, $password,$dbDatabase);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mesg = $_POST['mesg'];



    $sql = "insert into feedback(name, email, phone, message) values ('$name', '$email', '$phone', '$mesg');";
    mysqli_query($conn, $sql);

   } 
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flair</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Flair</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Highlights</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#four">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last">Feedback</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">Contact</a>
                    </li>
                    <li>
                        <a href="#">Login as:-</a>
                    </li>
                    <li>
                        <a href="login.php">User</a>
                    </li>
                    <li>
                        <a href="loginartist.php">Artist</a>
                    </li>
                    <li>
                        <a href="admin.php">Admin</a>
                    </li>
                    <!-- <li class="page-scroll">
                        <?php 
                            $sql = "select * from users;";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            if($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['uid'] . "<br>";
                                 }
                            }
                        ?>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Welcome to Flair!</h1>
                <h4>Have an amazing , colourful & artistic experience.</h4>
                <hr>
                <h3>Sign up as :</h3>
                <a href="signupar.php" class="btn btn-primary btn-xl">Artist</a> &nbsp; <a href="signup.php" class="btn btn-primary btn-xl page-scroll">Customer</a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">Where Art meets Flair!
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="text-faded">
                        We at Flair are here to help you obtain beautiful artwork provided by our artists. We will constantly be updating our webpage to new content so ensure to check back from time to time. Have a nice time with Flair!
                    </p>
                    <!-- <a href="#three" class="btn btn-default btn-xl page-scroll">See for yourself</a> -->
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Easy and Flexible spot for Art to Flourish</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ionicons ion-mouse" data-wow-delay=".3s"></i>
                        <h3>One click away</h3>
                        <p class="text-muted">Always at your service</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ionicons ion-ios-home" data-wow-delay=".2s"></i>
                        <h3>An Abode</h3>
                        <p class="text-muted">A feel like home for artistry</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ionicons ion-bonfire fadeIn" data-wow-delay=".3s"></i>
                        <h3>Memorable</h3>
                        <p class="text-muted">Always creating stories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">Features</h2>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Simple</h3>
                    <div class="media-body media-middle">
                        <p>One click away from purchasing an piece for your amazing collection.</p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeIn">
                    <h3>Free</h3>
                    <div class="media-left">
                        <!-- <a href="#alertModal" data-toggle="modal" data-target="#alertModal"> --><i class="icon-lg ion-ios-cloud-download-outline"></i></a>
                    </div>
                    <div class="media-body media-middle">
                        <p>Who doesn't love free shipping?</p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Unique</h3>
                    <div class="media-body media-middle">
                        <p>The greatness of art is not to find what is common but what is unique.</p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-snowy"></i>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeIn">
                    <h3>Popular</h3>
                    <div class="media-left">
                        <i class="icon-lg ion-ios-heart-outline"></i>
                    </div>
                    <div class="media-body media-middle">
                        <p>Art is never popular. Our users make it.</p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>Trusted</h3>
                    <div class="media-body media-middle">
                        <p>To be trusted is a greater complement than being loved.</p>
                    </div>
                    <div class="media-right">
                        <i class="icon-lg ion-ios-flask-outline"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                    <hr class="primary">
                    <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row" method="POST">
                       <div class="col-md-4">
                            <label></label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                           <input type="email" name="email"class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" name="phone"class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" name="mesg"class="form-control" placeholder="Your message here...">
                        </div>
                        
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <input type="submit" name="submit" value="Send" class="btn btn-primary btn-block btn-lg"> 
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
   
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="" id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Contact Us</h2>
        		
        		<p class="text-justify">
        		    For any further queries please feel free to contact us through our email and we shall get back to you as soon as possible. Our email is
        		</p>
        		<p class="text-center"><a href="http://www.gmail.com">hi_flair@gmail.com</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Nice Job!</h2>
        		<p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
        		<p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>