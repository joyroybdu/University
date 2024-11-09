<?php
// Start session
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'university_lms');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute query to check if email exists
    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email exists, fetch the hashed password
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Correct email and password
            header("Location: home.html");
            exit();
        } else {
            // Incorrect password
            header("Location: loginh.php?error=Invalid+password!");
            exit();
        }
    } else {
        // Email not found
        header("Location: loginh.php?error=Invalid+email!");
        exit();
    }

    $stmt->close();
}
$conn->close();
?>
