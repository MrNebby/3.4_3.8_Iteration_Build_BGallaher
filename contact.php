<?php
session_start();
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
		<!-- The header contains the logo, website name, and link to login or sign out -->
		<div class="header">
			<div class="logo">
				<!-- Logo image that is also a link -->
				<a href="<?php if(!isset($_SESSION['login_user'])) {echo 'login.php';} else {echo 'index.php';} ?>"><img src="images/graeme_music_logo_v2.png" alt="Goes to <?php if(!isset($_SESSION['login_user'])) {echo 'login';} else {echo 'main';}?> page"></a>
			</div>
			
			<div class="header_text">
				<h1>Graeme's Music</h1>
			</div>
			
			<div class="user_info">
				<img src="images/graeme_user_icon_v2.png" alt="User Info">
				<?php
				if(!isset($_SESSION['login_user'])) {
					echo "<p><a href='login.php'>Login</a></p>";
				} else {
					echo "<p><a href='sign_out.php'>Sign out</a></p>";
				}
				?>
			</div>
		</div>
		
		<!-- Navigation that only displays for Graeme-->
		<div class="nav">
			<?php 
			if($user == 'Graeme') {
				require "admin_nav.php";
			}
			?>
		</div>
		
		<!-- The contact form for the contact page -->
		<div class="contact_form">

			<!-- php will be used to change link depending on if the user is logged in -->
			<p class="return_link"><a href="<?php if(!isset($_SESSION['login_user'])) {echo 'login.php';} else {echo 'index.php';} ?>">Return</a></p>
			<h1>Contact Us</h1>

			<br>

			<form method="post" id="contact">
				<div class="form_container">

					<div class="labels">
						<label for="name">Your Name:</label>
						<br><br>
						<label for="email">Email Address:</label>
						<br><br>
						<label for="phone">Phone Number:</label>
						<br><br>
						<label for="reason">Contact Reason:</label>
					</div>

					<div class="entries">
						<input type="text" name="name" id="name" placeholder="Enter your name here">
						<br><br>
						<input type="email" name="email" id="email" placeholder="Enter your email address here">
						<br><br>
						<input type="text" name="phone" id="phone" placeholder="Enter your phone number here">
						<br><br>
						<textarea name="reason" id="reason" placeholder="Why did you contact us?"></textarea>
						<br><br>
						<input type="submit" value="Submit">
					</div>
				</div>
			</form>

			<?php
			//Connection to the server
			require "13CSI_Graeme_Music_Assessment_mysqli.php";
			print "<p>Connected to the server</p>";
						
			if(isset($_POST['name'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$reason = $_POST['reason'];

				//Creating a variable to store the query to add users
				$insert_query = "INSERT INTO graeme_music_contact(name, email, phone, reason) VALUES( '$name', '$email', '$phone', '$reason')";

				if (mysqli_query($conn,$insert_query)) {
					echo "<p>Message received</p>";
				}
				else {
					echo "<p>Error accepting message</p>";
				}
			}
			?>
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
	</body>
</html>