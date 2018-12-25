<?php 
require_once 'config.php';

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (!$accessToken){
	header('location: login.php');
	exit();
}

	// OAuth 2.0 client handler
	$oAuth2Client = $fb->getOAuth2Client();
// if (!$accessToken->isLongLived()) {
	// Exchanges a short-lived access token for a long-lived one
	// echo 'HeLLLLoooo'; exit;
	$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
// }

	//////////////////////////////OOP Method
	/*
	$fb->setDefaultAccessToken($accessToken);

	try {
	  $response = $fb->get('/me?fields=id,name,email');
	  $userNode = $response->getGraphUser();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
}
	$_SESSION['id'] = $userNode->getId();;
	$_SESSION['firstname'] = $userNode->getFirstName();
	$_SESSION['last_name'] = $userNode->getLastName();
	$_SESSION['email'] = $userNode->getEmail();
	*/
	/////////////////////////////////////////////////// Traditional ArraysMethod

	$fb->setDefaultAccessToken($accessToken);
	try {
	  $response = $fb->get('/me?fields=id,first_name,last_name,email,picture');
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	$plainOldArray = $response->getDecodedBody();
	$_SESSION['facebook_access_token'] = $accessToken;
	$_SESSION['data'] = $plainOldArray;
	header('location: index.php');
	exit;
	// echo '<pre>';
	// print_r($_SESSION['data']);exit;


/////////////////////////////////////////////////////////////
	/*
	$fb->setDefaultAccessToken($accessToken);
	$response = $fb->get("me?fields=id,first_name,last_name,email,picture");
	$userData = $response->getGraphUser();
	// echo 'Logged in as ' . $userData;
	// echo '<pre>';
	// var_dump($userData);	
	echo 'Logged in as ' . $userData->getName();
	exit;
	$_SESSION['userData'] = $userData;

	echo '<pre>' ;
	echo($_SESSION['userData']);
	echo $_SESSION['facebook_access_token'] = (string) $accessToken;
	header('location: index.php');
	exit();
	*/



 ?>