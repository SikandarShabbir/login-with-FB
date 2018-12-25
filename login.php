<?php
// session_start(); 
require_once 'config.php';
if (isset($_SESSION['facebook_access_token'])) {
		header('location: index.php');
		exit();
	}


$permissions = ['email']; 
$loginUrl = $helper->getLoginUrl('http://localhost:8080/fb/fb_callback.php', $permissions);

// echo  $loginUrl ;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login with FB</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">
				<h3>Login with Facebook</h3>
				<form>
				<input type="email" name="email" placeholder="Email" class="form-control"><br>			
				<input type="password" name="password" placeholder="Password" class="form-control">	<br>		
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" onclick="window.location='<?php echo $loginUrl ?>';" class="btn btn-primary">Login with Facebook</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>