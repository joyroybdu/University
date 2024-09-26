<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'university_lms');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            header("Location: home.php");
            exit();
        } else {
            header("Location: loginh.php?error=Invalid+password!");
            exit();
        }
    } else {
        header("Location: loginh.php?error=Invalid+email!");
        exit();
    }

    $stmt->close();
}
$conn->close();
?>