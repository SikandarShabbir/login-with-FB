<?php 
	session_start();
require_once 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '755582418154248',
	'app_secret' => '733b29c048c7196fddef141630aab95f',
	'default_graph_version' => 'v2.10',
]);
	
	$helper = $fb->getRedirectLoginHelper();

?>