<?php
ob_start();
session_start();
$error = NULL;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//connect to the database
	require "13CSI_Graeme_Music_Assessment_mysqli.php";
	//username and password from form
	if(isset($_POST['username'])) {
		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']);

		//save a query as a variable
		$query = "SELECT user_id FROM graeme_music_user WHERE user_id = '$myusername' and password = '$mypassword'";

		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);

		if($count == 1) {
			$_SESSION['login_user'] = $myusername;
			header("location:index.php");
		} else {
			$error = "ERROR, your username or password is invalid";
		}
	}
	ob_end_flush();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Keywords" content="Music, Playlists">
		<meta name="Author" content="Ben Gallaher">
		<meta name="Description" content="A website for Graeme and his friends to create playlists with his music">

		<title>Graeme's Music</title>
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" type="image/png" href="images/graeme_favicon_v2.png">
	</head>

	<body>
		<!-- The header contains the logo, website name, and link to login-->
		<div class="header">
			<div class="logo">
				<!-- Logo image that is also a link -->
				<a href="login.php"><img src="images/graeme_music_logo_v2.png" alt="Goes to the login page"></a>
			</div>
			
			<div class="header_text">
				<h1>Graeme's Music</h1>
			</div>
			
			<div class="user_info">
				<img src="images/graeme_user_icon_v2.png" alt="User Info">
				<p><a href="login.php">Login</a></p>
			</div>
		</div>

		<!-- This will have an image slider -->
		<div class="slider">
			<h1 class="slider_heading">Login to see all of Graeme's tunes</h1>
			<div class="slides fade slide1">
			</div>
			
			<div class="slides fade slide2">
			</div>
			
			<div class="slides fade slide3">
			</div>

			<a class="prev" onclick="plusSlides(-1)">❮</a>
			<a class="next" onclick="plusSlides(1)">❯</a>
		</div>
		
		<!-- This allows the users to select a specific image slide -->
		<div class="dot_container">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		
		<!-- This is the login form so that users can login properly -->
		<div class="login_form">
			<h1>Login Here</h1>
			<br>
			<form method="post" id="login">
				<div class="form_container">

					<div class="labels">
						<label for="username">Username:</label>
						<br><br>
						<label for="password">Password:</label>
					</div>

					<div class="entries">
						<input type="text" name="username" id="username" placeholder="Enter your username here">
						<br><br>
						<input type="password" name="password" id="password" placeholder="Enter your password here">
						<br><br>
						<input type="submit" value="Login">
					</div>
				</div>
			</form>
			<p><?php echo $error;?></p>
		</div>
		
		<!-- The footer contains a copyright statement and a link to the contact page -->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Graeme 2024, all rights reserved</p>
			</div>
			
			<!-- Different contact link wording depending on screen size -->
			<div class="contact">
				<p class="contact_mobile"><a href="contact.php">Contact us here</a></p>
				<p class="contact_desktop">Need something? <a href="contact.php">Contact us here</a></p>
			</div>
		</div>
		<script src="js/slider.js"></script>
	</body>
</html>