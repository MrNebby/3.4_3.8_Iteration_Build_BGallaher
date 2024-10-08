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
				<a href="index.php"><img src="images/graeme_music_logo_v2.png" alt="Goes to the main page"></a>
			</div>
			
			<div class="header_text">
				<h1>Graeme's Music</h1>
			</div>
			
			<div class="user_info">
				<img src="images/graeme_user_icon_v2.png" alt="User Info">
				<p><a href='sign_out.php'>Sign out</a></p>
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
		
		<!-- The form to delete an account -->
		<div class="account_forms">

			<!-- Link that goes back to index page -->
			<p class="return_link"><a href="index.php">Return</a></p>
			<h1>Delete an account</h1>

			<br>

			<form method="post" id="delete_account">
				<div class="form_container">

					<div class="labels">
						<label for="username">Username:</label>
					</div>

					<div class="entries">
						<input type="text" name="username" id="username" placeholder="Enter the username here">
						<br><br>
						<input type="submit" value="Delete Account">
					</div>
				</div>
			</form>

			<?php
			//Connection to the server
			require "13CSI_Graeme_Music_Assessment_mysqli.php";
			print "<p>Connected to the server</p>";
			
			if(isset($_POST['username'])) {
				$username = $_POST['username'];
				
				//Making sure that Graeme's account does not get deleted
				if($username != 'Graeme') {

					//Creating a variable to store the query to delete users
					$insert_query = "DELETE FROM graeme_music_user WHERE user_id = '$username'";

					if (mysqli_query($conn,$insert_query)) {
						echo "<p>Account deleted</p>";
					}
					else {
						echo "<p>Error deleting account</p>";
					}
				}
				else {
					echo "<p>Cannot delete admin user</p>";
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