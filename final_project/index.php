<?php

include("auth.php"); //include auth.php file on all secure pages
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Melkam Fashion : Index</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href=".ico">

      <!-- bootstrap links and other external styling sheets and javascript -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- logo -->
        <a href="#" id="logo"></a>

        <!-- External link (relative) to main stylesheet -->
        <link rel="stylesheet" href="css/screen.css">
        <link rel="stylesheet" href="/css/style.css">

        <!-- External link (relative) to your javascript file -->
        <script src="js/index.js"></script>

      </head>
      <header>

        <!-- Navigation Bar -->
        <nav>
          <ul class="menu" >
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Dashboard</a>

              <ul>
                 <li><a href="sign_in.php" class="register">Register</a></li>
                 <li><a href="sign_in.php" class="sign in">Log In</a></li>
              </ul>

            </li>
         <li><a href="shop.html">Shop</a></li>
         <li><a href="campaigns.html">Get Involved</a></li>
         <li><a href="about-me.html">About Us</a></li>

        </ul>

      </nav>

    </header>





  <body>
    <div class="form">
      <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
      <p>This is secure area.</p>
      <p><a href="dashboard.php">Dashboard</a></p>
      <a href="logout.php">Logout</a>
      <br /><br /><br /><br />
      <p>Honors Option: User registration</p>
    </div>

    <!-- footer goes here -->
  	<footer class="flex-content" id="footer-last">
  		<section class="contact-info">
  			<p>Melkam Fashion PLC</p>
  			<p>Melkamsew Takele</p>
  			<p>Email: <a href="mailto:melkamfashion@greenfashion.com">
  			someone@example.com</a></p>
  		</section>

  			<section class="social-icons">
  				<p>Get Social</p>
  				<p>Facebook:</p>
  				<p>Twitter:</p>
  			</section>

  			<section class="Adress-map">
  				<p>Physical Adress</p>
  				<p>placeholder textarea </p>
  				<p>embed map here</p>
  			</section>
  		</footer>
</body>
</html>
