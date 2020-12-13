 <?php include('path.php'); ?>
 <?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Log In</title>
   <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
   	<style type="text/css">
   		body{
   		background: #efefef;
   		}
   		</style>
		<link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento+--Sans&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Open+--Sans|Roboto&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/587268498c.js" crossorigin="anonymous"></script>
		
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<?php include(ROOT_PATH . '/app/includes/header.php'); ?>

	<div class="auth-content" >
		<form action="login.php" method="POST">
			<h2 class="form-title">Login</h2>
			<?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
				</div>
				
				<div>
				<label>Password</label>
				<input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
				</div>
			
				<div>
					<button type="submit" name="login-btn" class="btn big-btn" >Login</button>
					</div>
					<p>Or <a href="<?php echo BASE_URL . '/register.php'?>">Sign Up</a></p>
			</form>
		</div>

<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				
<!--custom script-->
<script src="assets/js/scripts.js"></script>

	
   </body>
</html>