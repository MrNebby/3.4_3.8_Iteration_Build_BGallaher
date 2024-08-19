<?php
session_start();
if(!isset($_SESSION['login_user'])) {
	header("location:login.php");
} else{
	$user = $_SESSION['login_user'];
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	//connect to the database
	require "13CSI_Graeme_Music_Assessment_mysqli.php";
	if(isset($_POST['search'])) {
		$search = mysqli_real_escape_string($conn,$_POST['search']);
		$_SESSION['search'] = $search;
		header('location:search.php');
	}
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
				<a href="index.php"><img src="images/graeme_music_logo_v2.png" alt="Goes to the main page"></a>
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
		
		<!-- Welcome users, display links to Graemes playlists, a search bar, and every song under it's genres -->
		<div class="main_container">
			<h1>Welcome <?php echo $user; ?> to Graeme's Music</h1>

			<!-- Displays the links to the playlists, changes positioning depending on screen size -->
			<h2>Recomendations from Graeme</h2>
			<div class="playlist_links">
				<a href="playlist1.php">
					<div class="playlist1_link">
						<p>Graeme's reverse alphabetical titles playlist</p>
					</div>
				</a>
				
				<a href="playlist2.php">
					<div class="playlist2_link">
						<p>Graeme's alphabetical genres playlist</p>
					</div>
				</a>
			</div>
			
			<!-- A search bar so that users can find songs by title -->
			<h2>Search by song title</h2>
			<div class="search_bar">
				<form method="post" id="search_bar">
					<input type="text" name="search">
					<input type="submit" value="">
				</form>
				<p>Or view by genre in alphabetical order below</p>
			</div>
			<br>
			
			<!-- Displays all of the songs sorted by their genre alphabetically -->
			<div class="genre_container">
				
				<!-- Displays all the Alternative Indie songs -->
				<div>
					<h2>Alternative Indie</h2>
					<ul>
						<?php
						require "13CSI_Graeme_Music_Assessment_mysqli.php";
			
						// Stores the query as a variable
						$alt_indie_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Alternative Indie'";
						$result = mysqli_query($conn,$alt_indie_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Alternative Rock songs -->
				<div>
					<h2>Alternative Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$alt_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Alternative Rock'";
						$result = mysqli_query($conn,$alt_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Bluegrass songs -->
				<div>
					<h2>Bluegrass</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$bluegrass_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Bluegrass'";
						$result = mysqli_query($conn,$bluegrass_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Blues songs -->
				<div>
					<h2>Blues</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$blues_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Blues'";
						$result = mysqli_query($conn,$blues_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Celtic songs -->
				<div>
					<h2>Celtic</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$celtic_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Celtic'";
						$result = mysqli_query($conn,$celtic_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Country songs -->
				<div>
					<h2>Country</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$country_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Country'";
						$result = mysqli_query($conn,$country_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Country Folk songs -->
				<div>
					<h2>Country Folk</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$country_folk_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Country Folk'";
						$result = mysqli_query($conn,$country_folk_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Easy Listening songs -->
				<div>
					<h2>Easy Listening</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$easy_listening_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Easy Listening'";
						$result = mysqli_query($conn,$easy_listening_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Electronic Dance songs -->
				<div>
					<h2>Electronic Dance</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$electronic_dance_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Electronic Dance'";
						$result = mysqli_query($conn,$electronic_dance_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Electronica songs -->
				<div>
					<h2>Electronica</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$electronica_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Electronica'";
						$result = mysqli_query($conn,$electronica_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Ethnic songs -->
				<div>
					<h2>Ethnic</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$ethnic_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Ethnic'";
						$result = mysqli_query($conn,$ethnic_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Folk songs -->
				<div>
					<h2>Folk</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$folk_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Folk'";
						$result = mysqli_query($conn,$folk_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Folk Rock songs -->
				<div>
					<h2>Folk Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$folk_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Folk Rock'";
						$result = mysqli_query($conn,$folk_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Grunge songs -->
				<div>
					<h2>Grunge</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$grunge_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Grunge'";
						$result = mysqli_query($conn,$grunge_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Hard Rock songs -->
				<div>
					<h2>Hard Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$hard_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Hard Rock'";
						$result = mysqli_query($conn,$hard_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Indie Rock songs -->
				<div>
					<h2>Indie Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$indie_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Indie Rock'";
						$result = mysqli_query($conn,$indie_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Jazz songs -->
				<div>
					<h2>Jazz</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$jazz_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Jazz'";
						$result = mysqli_query($conn,$jazz_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Moari songs -->
				<div>
					<h2>Moari</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$moari_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Moari'";
						$result = mysqli_query($conn,$moari_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Native American songs -->
				<div>
					<h2>Native American</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$native_american_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Native American'";
						$result = mysqli_query($conn,$native_american_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the New Age songs -->
				<div>
					<h2>New Age</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$new_age_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'New Age'";
						$result = mysqli_query($conn,$new_age_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the New Wave songs -->
				<div>
					<h2>New Wave</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$new_wave_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'New Wave'";
						$result = mysqli_query($conn,$new_wave_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Pop songs -->
				<div>
					<h2>Pop</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$pop_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Pop'";
						$result = mysqli_query($conn,$pop_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Post-Rock songs -->
				<div>
					<h2>Post-Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$post_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Post-Rock'";
						$result = mysqli_query($conn,$post_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Progressive Rock songs -->
				<div>
					<h2>Progressive Rock</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$progressive_rock_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Progressive Rock'";
						$result = mysqli_query($conn,$progressive_rock_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
				<!-- Displays all the Psychadelic songs -->
				<div>
					<h2>Psychadelic</h2>
					<ul>
						<?php
						// Stores the query as a variable
						$psychadelic_query = "SELECT m.song_id, m.file_name, m.title, m.track_number, m.duration, m.size, al.album, ar.artist, g.genre
						FROM graeme_music_main AS m
						JOIN graeme_music_album AS al ON m.album_id = al.album_id
						JOIN graeme_music_main_to_artist AS mta ON m.song_id = mta.song_id
						JOIN graeme_music_artist AS ar ON mta.artist_id = ar.artist_id
						JOIN graeme_music_main_to_genre AS mtg ON m.song_id = mtg.song_id
						JOIN graeme_music_genre AS g ON mtg.genre_id = g.genre_id
						WHERE g.genre = 'Psychadelic'";
						$result = mysqli_query($conn,$psychadelic_query);
						while($output=mysqli_fetch_array($result)) {
						?>
						<li>
							<div class="genre_data_container">
								<div class="genre_data"><p><?php echo $output['title']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['album']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['artist']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['track_number']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['duration']; ?></p></div>
								<div class="genre_data"><p><?php echo $output['size']; ?></p></div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				
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
		</div>
	</body>
</html>