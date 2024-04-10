<?php
// Database connection
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get user data from form
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$disability = $_POST["disability"];

	// Save user data to database
	$sql = "INSERT INTO users (fname, lname, email, password, disability) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sssss", $fname, $lname, $email, $password, $disability);

	if ($stmt->execute()) {
		echo "Registration successful!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$stmt->close();
}

// Close database connection
$conn->close();
?>
