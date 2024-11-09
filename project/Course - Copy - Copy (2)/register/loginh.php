<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="left-section">
        <div class="logincontainer">
            <h1 style="color: #008080;">Log In or Sign Up Here</h1>

         
            <div id="error-message" style="color: red;">
                <?php
                if (isset($_GET['error'])) {
                    echo htmlspecialchars($_GET['error']);
                }
                ?>
            </div>

            <form id="loginForm" method="POST" action="login.php">
                <div class="inputc">
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Enter your email or userid" id="email" name="email" required><br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Input your password" id="password" name="password" required><br>
                </div>
                <div class="buttonc">
                    <button type="submit" class="loginbtn">Log In</button><br>
                </div>
            </form>

            <a href="register.php">or Sign Up for New Account</a>
            <div class="social-login">
                <p>Or Log In Using</p>
                <a href="https://accounts.google.com/" class="google-btn">Login with Google</a>
                <a href="https://www.facebook.com/login/" class="facebook-btn">Login with Facebook</a>
            </div>
        </div>
    </div>
    <div class="right-section">
       
    </div>

    <script src="login.js"></script>
</body>
</html>
