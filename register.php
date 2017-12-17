<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	
	<!--meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" type="image/png" href="https://lh3.googleusercontent.com/Jas1tt7s3zHlxKp1DBmL_cQI8QMsDr8eFA8SHfn-Q2kTnK0LdyF0O2yZnYhs06IwvbGbz7SnMV78ouQ=w1366-h638-rw" />


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom1.css">

   <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Rufina" rel="stylesheet">

</head>
<body>
	<div class="header">
		<h2>REGISTER</h2>
	</div>
	
	<form method="post" action="register.php">
		<?php include "errors.php"; ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" value="<?php echo $password_1; ?>">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" value="<?php echo $password_2; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>