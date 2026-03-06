<?php
// Database connection details
$servername = "localhost";
$username = "cpses_sad23hnevz@localhost"; // Replace with your database username
$password = "MutterGutter33!";     // Replace with your database password
$dbname = "sazxjwte_CustomerFormSubmit"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data (names match the "name" attributes in the HTML form)sFname,Lname,email,messge firstname"]').val();
	// let Lname =  $('input[name="lastname"]').val();
	// let email =  $('input[name="email"]').val();
	// let messge = $('#message').val();
$name = $_POST['firstname'] ?? 'Guest';
$phone = $_POST['phone'] ?? 'N/A';
$email = $_POST['email'] ?? 'N/A';
$message = $_POST['message'] ?? 'No message';
// Check vars recieve

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Phone: " . htmlspecialchars($phone) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Message: " . htmlspecialchars($message);

// Close connections
$stmt->close();
$conn->close();
?>
