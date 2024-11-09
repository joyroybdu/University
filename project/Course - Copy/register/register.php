<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength Checker</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <div class="form-container">
        <h2>User Registration</h2>

        <!-- Add form action to submit data to dbConn.php -->
        <form action="dbConn.php" method="POST" id="userForm">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="department_name">Department Name</label>
<input type="text" id="department_name" name="department_name" placeholder="Enter your Department name" required>


            <label for="Session">Session</label>
            <input type="text" id="session" name="session" placeholder="Enter your Session" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <!-- Password strength meter -->
            <div class="strength-meter">
                <div id="strengthBar" class="strength-bar"></div>
            </div>
            <p id="strengthText" class="strength-text"></p>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script src="register.js"></script>

</body>
</html>
