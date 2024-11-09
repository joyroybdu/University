<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - EDTE Department</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <h1>EDTE Department</h1>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="edtech.html">EDTE</a></li>
                <li><a href="#assignments">Assignments</a></li>
                <li><a href="#due-assignments">Due Assignments</a></li>
                <li><a href="#class-tests">Class Tests</a></li>
                <li><a href="#notifications">Notifications</a></li>
                <div class="logout-container">
                    <!-- Updated logout button that redirects to logout.php -->
                    <button id="logout-btn" class="logout-btn">
                        <i class="fas fa-sign-out-alt logout-icon"></i>
                        Logout
                    </button>
                </div>
            </ul>
        </div>
    </nav>

    <!-- Profile Section -->
    <section id="profile" class="profile-section">
        <div class="profile-container">
            <img src="images/joy.jpeg" alt="Profile Picture" class="profile-pic">
            <div class="profile-info">
                <h2>Joy Roy</h2>
                <p>EDTE Department</p>
                <p>University ID: 2002025</p>
                <p>Email: 2002025@icte.bdu.ac.bd</p>
            </div>
        </div>
    </section>

    <!-- Assignments Section -->
    <section id="assignments" class="assignments-section">
        <h2>Assignments Submission History</h2>
        <ul>
            <li class="submitted">
                <span>Assignment 1: Data Science</span>
                <span>Submitted</span>
            </li>
            <li class="not-submitted">
                <span>Assignment 2: Blended Learning </span>
                <span>Not Submitted</span>
            </li>
        </ul>
    </section> 

    <!-- Due Assignments Section -->
    <section id="due-assignments" class="due-section">
        <h2>Due Assignments</h2>
        <ul>
            <li class="due">
                <span>Assignment 3: Accounting</span>
                <span>Due: Sep 30, 2024</span>
            </li>
        </ul>
    </section>

    <!-- Class Test Section -->
    <section id="class-tests" class="class-tests-section">
        <h2>Class Test Dates</h2>
        <ul>
            <li>
                <span>Course: Educational Technology</span>
                <span>Test Date: Oct 05, 2024</span>
            </li>
            <li>
                <span>Course: E-Commerce</span>
                <span>Test Date: Oct 12, 2024</span>
            </li>
        </ul>
    </section>

    <!-- Notifications Section -->
    <section id="notifications" class="notifications-section">
        <h2>Notifications</h2>
        <ul>
            <li>
                <span>New lecture on "Future of EdTech" uploaded on Sep 25, 2024.</span>
                <button onclick="markAsRead(this)">Mark as Read</button>
            </li>
            <li>
                <span>Midterm exam scheduled for Oct 8, 2024.</span>
                <button onclick="markAsRead(this)">Mark as Read</button>
            </li>
        </ul>
    </section>

    <script>
        // Logout button click event handler
        document.getElementById("logout-btn").addEventListener("click", function () {
            
            window.location.href = "logout.php";
        });

        // Function to mark notifications as read
        function markAsRead(button) {
            button.innerText = "Read";
            button.style.backgroundColor = "#76b5c5";
            button.disabled = true;
        }
    </script>

</body>
</html>
