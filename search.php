<?php
session_start();
if(!isset($_SESSION['login_user'])) {
	header("location:login.php");
} else{
	$user = $_SESSION['login_user'];
	$search = $_SESSION['search'];
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
		<!-- The header contains the logo, website name, and link to sign out -->
		<div class="header">
			<div class="logo">
				<!-- Logo image that is also a link -->
				<a href="index.php"><img src="images/graeme_music_logo_v2.png" alt="Goes to main page"></a>
			</div>
			
			<div class="header_text">
				<h1>Graeme's Music</h1>
			</div>
			
			<div class="user_info">
				<img src="images/graeme_user_icon_v2.png" alt="User Info">
				<p><a href="sign_out.php">Sign out</a></p>
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
		
		<!-- Display the playlist and allow the user to go back to the main page -->
		<div class="search_container">

			<!-- A link to return the user to the main page -->
			<p class="return_link"><a href="index.php">Return</a></p>
			<h1>Searching for <?php echo $search; ?></h1>
			
			<!-- Display different amounts of fields based on screen size -->
			<div class="field_headings_mobile">
				<div class="heading_box"><h3>Song Title</h3></div>
				<div class="heading_box"><h3>Artist</h3></div>
				<div class="heading_box"><h3>Album</h3></div>
				<div class="heading_box"><h3>Genre</h3></div>
			</div>
			
			<div class="field_headings_desktop">
				<div class="heading_box"><h3>Song Title</h3></div>
				<div class="heading_box"><h3>Artist</h3></div>
				<div class="heading_box"><h3>Track Number</h3></div>
				<div class="heading_box"><h3>Album</h3></div>
				<div class="heading_box"><h3>Genre</h3></div>
				<div class="heading_box"><h3>Duration</h3></div>
				<div class="heading_box"><h3>Size</h3></div>
			</div>
			
			<?php
			require "13CSI_Graeme_Music_Assessment_mysqli.php";
			
			// Stores the query as a variable
			$query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
			FROM graeme_music_main AS m
			JOIN graeme_music_album AS al ON m.album_id = al.album_id
			JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
			JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
			JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
			JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
			WHERE m.title LIKE '%$search%'";
			$result = mysqli_query($conn,$query);
			while($output=mysqli_fetch_array($result)) {
			?>
			<div class="field_data_mobile">
				<div class="data_box"><p><?php echo $output['title'];?></p></div>
				<div class="data_box"><p><?php echo $output['artist'];?></p></div>
				<div class="data_box"><p><?php echo $output['album'];?></p></div>
				<div class="data_box"><p><?php echo $output['genre'];?></p></div>
			</div>
			
			<div class="field_data_desktop">
				<div class="data_box"><p><?php echo $output['title'];?></p></div>
				<div class="data_box"><p><?php echo $output['artist'];?></p></div>
				<div class="data_box"><p><?php echo $output['track_number'];?></p></div>
				<div class="data_box"><p><?php echo $output['album'];?></p></div>
				<div class="data_box"><p><?php echo $output['genre'];?></p></div>
				<div class="data_box"><p><?php echo $output['duration'];?></p></div>
				<div class="data_box"><p><?php echo $output['size'];?></p></div>
			</div>
			<br>
			<br>
			<hr>
			<?php
			}
			?>

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
		</div>
	</body>
</html>