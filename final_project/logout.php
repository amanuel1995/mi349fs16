<?php
session_start();
if(session_destroy()) // Destroy active Sessions
{
header("Location: login.php"); // Redirecting To Login page
}
?>
