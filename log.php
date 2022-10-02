<?php
include "connect.php";

$_email = $_POST['email'];
$_password = $_POST['password'];

$stmt = $conn->prepare("select * from register where email = ?");
$stmt->bind_param("s", $_email);
$stmt->execute();
$stmt_result = $stmt->get_result();

if ($stmt_result->num_rows > 0) {
	// fetching data
	$data = $stmt_result->fetch_assoc();
	if (!password_verify($_POST['password'], $_password)) {
		//moving to the home page after a successful login
		header("Location: https://www.javatpoint.com/computer-graphics-flat-panel-display");
	} else{
	echo "<h2>Invalid email or password</h2>";
}

} else{
	echo "<h2>Invalid email or password</h2>";
}



 ?>