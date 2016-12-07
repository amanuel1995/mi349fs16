<?php

$con = mysqli_connect("localhost","root","","register");
//localhost will have to change to host name if hosted on different server

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
