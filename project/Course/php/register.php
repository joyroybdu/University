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

        <form action="dbConn.php" method="POST" id="userForm">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="university">Department Name</label>
            <input type="text" id="university" name="university" placeholder="Enter your Department name" required>

            <label for="Session">Session</label>
            <input type="text" id="grade" name="grade" placeholder="Enter your Session" required>

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

    <script>
        // Password Strength Checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            let strength = 0;

            // Check for length
            if (password.length >= 8) {
                strength += 1;
            }

            // Check for numbers
            if (/\d/.test(password)) {
                strength += 1;
            }

            // Check for lowercase letters
            if (/[a-z]/.test(password)) {
                strength += 1;
            }

            // Check for uppercase letters
            if (/[A-Z]/.test(password)) {
                strength += 1;
            }

            // Check for special characters
            if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
                strength += 1;
            }

            // Update strength bar and text
            switch (strength) {
                case 0:
                    strengthBar.style.width = '0%';
                    strengthBar.style.backgroundColor = 'red';
                    strengthText.textContent = '';
                    break;
                case 1:
                    strengthBar.style.width = '20%';
                    strengthBar.style.backgroundColor = 'red';
                    strengthText.textContent = 'Very Weak';
                    break;
                case 2:
                    strengthBar.style.width = '40%';
                    strengthBar.style.backgroundColor = 'orange';
                    strengthText.textContent = 'Weak';
                    break;
                case 3:
                    strengthBar.style.width = '60%';
                    strengthBar.style.backgroundColor = 'yellow';
                    strengthText.textContent = 'Medium';
                    break;
                case 4:
                    strengthBar.style.width = '80%';
                    strengthBar.style.backgroundColor = 'lightgreen';
                    strengthText.textContent = 'Strong';
                    break;
                case 5:
                    strengthBar.style.width = '100%';
                    strengthBar.style.backgroundColor = 'green';
                    strengthText.textContent = 'Very Strong';
                    break;
            }
        });

        // Redirect to home.html after form submission
        document.getElementById('userForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                event.preventDefault(); // Prevent form submission if passwords do not match
            }
        });
    </script>

</body>
</html>
