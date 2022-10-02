<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<!-- form for data collection -->
	<form action="connect.php" method="POST" class="vumu">
		<p class="title">AAU Resgistration</p>
		<label style="margin-right: 30px;">Name:</label><input type="text" name="name" required>
		<label style="margin-right: 30px;">Email:</label><input type="text" name="email" required>
		<label>Password:</label><input type="password" name="password" required>
		<label style="margin-right: 18px;">Confirm:</label><input type="password" name="con_password" required>		
		<p>Already have an account? <a href="signin.php">Sign in</a> here</p>
		<button type="submit" name="submit">Sign Up</button>
	</form>
</body>
</html>