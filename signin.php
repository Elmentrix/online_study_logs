<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign in</title>
</head>
<body>
	<!-- form for data collection -->
	<form action="log.php" method="POST" class="vumu">
		<label style="margin-right: 30px;">Email:</label><input type="text" name="email" required>
		<label>Password:</label><input type="password" name="password" required>
		<p>Don't have an account? <a href="index.php">Sign up</a> here</p>
		<button type="submit" name="submit">Login</button>
	</form>

</body>
</html>