<!DOCTYPE html>
<html>
<head>
	<title>User registration system using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="Password" name="Password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn">login</button>
		</div>
		<p> 
			Not yeta member?<a href="register.php">sign up
		</p>
	</form>
	
</body>
</html>