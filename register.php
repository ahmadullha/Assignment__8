<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	// Check if all fields are filled
	if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cpassword)) {
		echo "<p>Please fill all the fields!</p>";
	}
	// Check if email is valid
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<p>Please enter a valid email address!</p>";
	}
	// Check if password and confirm password match
	elseif ($password !== $cpassword) {
		echo "<p>Passwords do not match!</p>";
	}
	else {
		// Process the form data here (e.g., save to database)
		echo "<p>Registration Successful!</p>";
	}
}
?>
