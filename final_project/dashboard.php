<?php

require('db.php');
include("auth.php"); //include auth.php for logged in users ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Melkam Fashion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/favicon.ico">

      <!-- bootstrap links and other external styling sheets and javascript -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- External link (relative) to main stylesheet -->
        <link rel="stylesheet" href="css/screen.css">

        <!-- External link (relative) to your javascript file -->
        <script src="js/index.js"></script>


      </head>

     <body>

      <header>

        <!-- Header Bar -->
        <div class="logo">
        <a href="#" class="logo-resp">Melkam Fashion</a>
        <img src="images/logo.png" class="image-res" alt="">
        <!-- the handle button for Responsive nav -->
          <button type="button" class="handle"> <i class="fa fa-bars"></i></button>

        </div>

        <!-- naviagation bar -->
        <nav class="nav">
          <ul class="menu" >
            <li class=""><a href="index.html">Home</a></li>
            <li class="sub-nav"><a href="dashboard.html">Dashboard</a>

              <ul class="">
                 <li class="sub-nav"><a href="registration.php" class="register">Register</a></li>
                 <li class="sub-nav"><a href="login.php" class="sign in">Log In</a></li>
              </ul>

            </li>
         <li class="menu-"><a href="shop.html">Shop</a></li>
         <li class="menu-"><a href="campaigns.html">Get Involved</a></li>
         <li class="menu-"><a href="about-me.html">About Us</a></li>

        </ul>

      </nav>

    </header>

    <div class="form">
      <p class="page-header"></p>
      <p class="h3">This is your personal space. Your orders, savings and points will be here</p>
      <p><a href="index.php">Home</a></p>
      <a href="logout.php">Logout</a>

      <br><br><br><br><br><br>
      <p>This is part of the Honors Option</p>

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
          <p><a href="https://wwww.facebook.com/melkamfashion">Facebook</a></p>
          <p><a href="https://wwww.twitter.com/melkamfashion">Twitter</a></p>
        </section>

        <section class="Adress-map">
          <p>Physical Adress</p>
          <p>Addis Ababa</p>
          <p>Ethiopia</p>
        </section>
  </body>
</html>
