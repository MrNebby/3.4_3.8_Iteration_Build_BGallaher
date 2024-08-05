<?php
session_start();
if(!isset($_SESSION['login_user'])) {
	header("location:login.php");
} else{
	$user = $_SESSION['login_user'];
}

if($user != 'Graeme') {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Keywords" content="Music, Playlists">
		<meta name="Author" content="Ben Gallaher">
		<meta name="Description" content="A website for Graeme and his friends to create playlists with his music">

		<title>Graeme's Music</title>
		
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<!-- The header contains the logo, website name, and link to login or sign out -->
		<div class="header">
			<div class="logo">
				<p>Logo placeholder</p>
			</div>
			
			<div class="header_text">
				<h1>Graeme's Music</h1>
			</div>
			
			<div class="user_info">
				<p>User icon placeholder</p>
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
		
		<!-- The form to update an existing account -->
		<div class="account_forms">
			<!-- Link that goes back to index page -->
			<p class="return_link"><a href="index.php">Return</a></p>
			<h1>Update an account</h1>

			<br>

			<form method="post" id="update_account">
				<div class="form_container">

					<div class="labels">
						<label for="current_username">Current Username:</label>
						<br><br>
						<label for="new_username">New Username:</label>
						<br><br>
						<label for="new_password">New Password:</label>
						<br><br>
						<label for="new_email">New Email Address:</label>
					</div>

					<div class="entries">
						<input type="text" name="current_username" placeholder="Enter the current username here">
						<br><br>
						<input type="text" name="new_username" placeholder="Enter the new username here">
						<br><br>
						<input type="password" name="new_password" placeholder="Enter the new password here">
						<br><br>
						<input type="email" name="new_email" placeholder="Enter the new email here">
						<br><br>
						<input type="submit" value="Update Account">
					</div>
				</div>
			</form>

			<?php
			//Connection to the server
			require "13CSI_Graeme_Music_Assessment_mysqli.php";
			print "<p>Connected to the server</p>";
						
			if(isset($_POST['current_username'])) {
				$current_username = $_POST['current_username'];
				$new_username = $_POST['new_password'];
				$new_password = $_POST['new_password'];
				$new_email = $_POST['new_email'];

				//Creating a variable to store the query to update users
				$insert_query = "UPDATE graeme_music_user SET user_id = '$new_username', password = '$new_password', email = '$new_email' WHERE user_id = '$current_username'";

				if (mysqli_query($conn,$insert_query)) {
					echo "<p>Account updated</p>";
				}
				else {
					echo "<p>Error updating account</p>";
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