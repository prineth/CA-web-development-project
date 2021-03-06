<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>user registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<!-- Display validation errors here -->
	<?php include('errors.php'); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>confirm Password</label>
		<input type="Password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Registration</button>
	</div>
	<p>
		Already member? <a href="login.php">Sign in</a>
	</p>

	<div class="input-group">
		<a href="../index.html">
			<button type="button" name="register" class="btn">Home</button>
		</a>
		
		<button type="reset" name="register" class="btn">Reset</button>
	</div>
</form>

</body>
</html>


