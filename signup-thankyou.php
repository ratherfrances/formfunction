<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank You | Hipstirred</title>
	<link href="https://fonts.googleapis.com/css?family=Abel|Rancho" rel="stylesheet">
	<link rel="stylesheet" href="main.css">
</head>
<body class="thank-you">
	<div class="wrapper">
		<header>
			<a href="index.html"><img src="images/logo@2x.png" class="logo" height="36" width="105" alt="Hipstirred"></a>
			<nav>
				<ul>
					<li><a href="about.html">About Us</a></li>
					<li><a href="signup.html" class="button">Sign Up</a></li>
				</ul>
			</nav>
		</header>
		<div class="hero">
			<h1>Thank You!</h1>
			<h2>You’ll be hearing from us soon</h2>
		</div>
		<main role="main">
			<div class="form-data">
				<p>One of our coffee specialists will be reaching out to you as soon as possible. Thanks again for starting the process!</p>

				<h2>Here’s the info you provided:</h2>
				<p>
					Name: <strong><?php echo $_SESSION['nameField']?></strong>
					<br>
					Email: <strong><?php echo $_SESSION['emailField']?></strong>
				</p>
			</div>
		</main>
	</div>
	<footer>
		<div class="wrapper">
			<div class="social">
				<a href="https://www.facebook.com">
					<img src="images/facebook@2x.png" width="24" height="24" alt="Facebook">
				</a>
				<a href="https://twitter.com">
					<img src="images/twitter@2x.png" width="28" height="23" alt="Twitter">
				</a>
				<a href="https://www.instagram.com">
					<img src="images/instagram@2x.png" width="24" height="24" alt="Instagram">
				</a>
			</div>
			<p>© Hipstirred LLC</p>
		</div>
	</footer>
</body>
</html>