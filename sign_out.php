<?php
// Ends the session
session_start();
session_destroy();
header("location:login.php");
?>