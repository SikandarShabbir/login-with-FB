<?php 
	session_start();
require_once 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => 'Your-app-id',
	'app_secret' => 'Your-app-secret',
	'default_graph_version' => 'v2.10',
]);
	
	$helper = $fb->getRedirectLoginHelper();

?>
