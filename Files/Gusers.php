<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GALLERY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <a href="index.php" class="header-brand">Flair</a>
      <nav>
        <ul>
          
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
    </header>
    <main>

      <section class="gallery-links">
        <div class="wrapper">
          <h2>Gallery</h2>

          <div class="gallery-container">
            <?php
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="payment.php">
                  <div style="background-image: url(img/'.$row["imgFullNameGallery"].');"></div>
                  <h3>'.$row["titleGallery"].'</h3>
                  <p>'.$row["descGallery"].'</p>
                  <p>Artist :'.$row["aname"].'</p>
                  <p>Price: '.$row["price"].'</p>
                </a>';
               
              }
            }
            ?>
          </div>

          

        </div>
      </section>

    </main>
    <!-- <div class="wrapper">
      <footer>
        <ul class="footer-links-main">
          <li><a href="#">Home</a></li>
          <li><a href="#">Cases</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-links-cases">
          <li><p>Latest cases</p></li>
          <li><a href="#">MALING SHAOLIN - WEB DEVELOPMENT</a></li>
          <li><a href="#">EXCELLENTO - WEB DEVELOPMENT, SEO</a></li>
          <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>
          <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
        </ul>
        <div class="footer-sm">
          <a href="#">
            <img src="img/youtube-symbol.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/twitter-logo-button.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/facebook-logo-button.png" alt="youtube icon">
          </a>
        </div>
      </footer>
    </div> -->
  </body>
</html>
