<?php
// Database connection
$servername = "localhost";
$username = "root"; // XAMPP's default username is root
$password = ""; // Leave blank for default setup in XAMPP
$dbname = "your_database_name"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$university = $_POST['university'];
$grade = $_POST['grade'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

// Insert data into the database
$sql = "INSERT INTO users (name, email, phone, university, grade, password)
        VALUES ('$name', '$email', '$phone', '$university', '$grade', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
