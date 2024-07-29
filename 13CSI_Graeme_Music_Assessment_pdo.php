<?php
//This is your Database connection file. You may use this file or create your own.
//Never code your normal user name and password into your database connection file.
//Keep the password contained in this file private.

try {
	$conn = new PDO('mysql:host=localhost;dbname=BenG_13CSI_Graeme_Music_Assessment', '_BenG', 'KPvuQAhB5v4euLig');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //This line helps you find your SQL syntax errors. You can remove it if you want to.
}catch(PDOException $e){
	echo 'Error: ' . $e->getMessage();
	die("Error Connecting to Database: BenG_13CSI_Graeme_Music_Assessment");
}
?>