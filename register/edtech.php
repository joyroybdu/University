<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department of EdTech</title>
    <link rel="stylesheet" href="edtech.css">
</head>
<body>
    <header class="parallax-header">
        <div class="header-content">
            <h1>Department of Educational Technology and Engineering (EDTE)</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="sessions">
        <h2>Academic Sessions</h2>
        <ul>
            <li onclick="navigateToSession('2019-2020.php')">2019-2020</li>
            <li onclick="navigateToSession('2020-2021.php')">2020-2021</li>
            <li onclick="navigateToSession('2022-2023.php')">2022-2023</li>
            <li onclick="navigateToSession('2024-2025.php')">2024-2025</li>
        </ul>
    </section>

    <section class="overview">
        <h2>Overview</h2>
        <p>Welcome to the Department of Educational Technology and Engineering. Our mission is to innovate education through technology and empower students to become leaders in the digital learning space.</p>
    </section>

    <section class="events">
        <h2>Upcoming Events</h2>
        <div class="event-card">
            <h3>Workshop on Digital Pedagogy</h3>
            <p>Date: October 15, 2024</p>
            <p>Location: Room 204, EdTech Building</p>
            <button onclick="registerEvent()">Register Now</button>
        </div>
    </section>

    <section class="faculty">
        <h2>Faculty and Staff</h2>
        <div class="faculty-card">
            <img src="images/professor.jpg" alt="Professor Name">
            <h3>MR ABC</h3>
            <p>Head of Department</p>
        </div>
    </section>

    <footer>
        <p>Contact us at edtech@bdu.com | Follow us on <a href="#">Twitter</a> | <a href="#">Facebook</a></p>
    </footer>

    <script src="edtech.js"></script>
</body>
</html>
