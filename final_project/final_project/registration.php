<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- inline CSS for registration system -->
	<style>
	body {font-family:Arial, Sans-Serif;background-color: #ccc}
	.clearfix:before, .clearfix:after { content: ""; display: table; }
	.clearfix:after { clear: both; }
	a {color:#0067ab; text-decoration:none;}
	a:hover {text-decoration:underline;}
	.form{width: 300px; margin: 0 auto; margin-top: 100px;}
	input[type='text'], input[type='email'], input[type='password'] {width: 200px; border-radius: 2px;border: 1px solid #CCC; padding: 10px; color: #333; font-size: 14px; margin-top: 10px;}
	input[type='submit']{padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;}
	input[type='submit']:hover {background-color: #024978;}
	#footer-last{
		margin-left: -8px;
	}
	</style>

	<link rel="stylesheet" href="css/screen.css">

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

<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br /> <br><br><br>
<p>This is part of the Honors Option</p>
</div>
<?php } ?>


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
