<?php 
// connecting to database
$server = "localhost";
$username = "root";
$password = "";
$dbname = "aau";

$conn = mysqli_connect($server, $username, $password, $dbname);

// checking if the submission have been clicked or not
if (isset($_POST['submit'])) {
	
	// checking if boxes are empty or not
	if (!empty($_POST['name']) && !empty($_POST['email']) &&!empty($_POST['password']) && !empty($_POST['con_password'])) {

		// checking if the password content and the confirmation side are the same
		if ($_POST['password'] == $_POST['con_password']) {

			// sending data collected into the database
			$_name = $_POST['name'];
			$_email = $_POST['email'];
			$_password = $_POST['password'];
			$hashed_password = password_hash($_password, PASSWORD_DEFAULT);

			$query = "insert into register(name, email, password) value('$_name', '$_email', '$hashed_password')";

			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if ($run) {
				header("Location: signin.php");
			} else{
				echo "form not submit";
			}

		} else{
			echo "passwords do not match";
		} // password check ends here

		}  //field box check ends here
	}

?>