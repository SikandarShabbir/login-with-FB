<?php 
session_start();
// print_r($_SESSION['facebook_access_token']);
if (isset($_SESSION['facebook_access_token'])) {
	session_destroy();
	header('location: login.php');
	exit;
}
header('Location: login.php');
 ?>