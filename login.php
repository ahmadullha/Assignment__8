<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Check if email and password are filled
	if (empty($email) || empty($password)) {
		echo "<p>Please fill all the fields!</p>";
	}
	else {
		// Check if email and password are valid (e.g., match with database)
		if ($email == "example@email.com" && $password == "password123") {
			// Redirect to welcome page and pass the first name as a URL parameter
			$fname = "John"; // Replace with actual first name
			header("Location: welcome.php?fname=" . urlencode($fname));
			exit();
		}
		else {
			echo "<p>Invalid login credentials!</p>";
		}
	}
}
?>
