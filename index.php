<?php  
session_start();
	if (!isset($_SESSION['facebook_access_token'])) {
		header('location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to FB</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="">
</head>
<body>
	 <!-- <?php //echo $_SESSION['data']['picture']['data']['url']; 	//exit;  ?> -->
	<div class="container" style="margin-top: 100px;">		
		<div class="row">
			<div class="col-md-10">	
				<!-- <button type="button" class="btn btn-primary" onclick="window.location='<?php //session_destroy(); header('location.login.php'); ?>'">Logout</button> -->
			<!-- <button type="button" class="btn btn-primary">Logout</button>			 -->
				<table class="table table-primary table-responsive">
					<caption>User Loggedin Data</caption>
					<thead>
						<tr>
							<th>User Picture</th>					
							<th>ID</th>					
							<th>First Name</th>					
							<th>Last Name</th>
							<th>Email</th>
							<th><a href="logout.php" class="btn btn-primary">Logout</a></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<img src="<?php echo $_SESSION['data']['picture']['data']['url']; ?>"  alt=""> 
							</td>					
							<td><?php echo $_SESSION['data']['id']; ?></td>					
							<td><?php echo $_SESSION['data']['first_name']; ?></td>				
							<td><?php echo $_SESSION['data']['last_name']; ?></td>
							<td><?php echo $_SESSION['data']['email']; ?></td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</body>
</html>