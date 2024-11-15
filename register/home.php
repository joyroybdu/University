<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMHhc1a8jOjDA80bF2g8p3cAlYz56G4/7K3a5X" crossorigin="anonymous">
    </head>
    
<body>
    <header class="header">
        <div class="logo">
            <img src="images/universitylogo.jpg" alt="University Logo">
        </div>
        <div class="university-info">
            <h1>BANGLADESH TECHNOLOGY UNIVERSITY</h1>
            <p>Technology is vital for progress, innovation, and global interconnectedness.</p>
        </div>
        <div class="social-links">
            <p>Follow us</p>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </header>
    <nav class="navbar">
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
            
            <li><a href="https://bdu.ac.bd/academic"><i class="fas fa-building"></i> Department</a></li>
            <li><a href="https://libgen.is/"><i class="fas fa-book"></i> Library</a></li>
            <li><a href="#"><i class="fas fa-pencil-alt"></i> Exam</a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i> Result</a></li>
        <li><a href="https://bdu.ac.bd/"><i class="fas fa-bullhorn"></i> Notice</a></li>
        <li><a href="https://admission.bdu.ac.bd/"><i class="fas fa-graduation-cap"></i> Admission</a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> Profile</a></li>
        </ul>
    </nav>
    
    <marquee behavior="scroll" direction="left" class="marquee-text">
        Exam Routnie has been Published.Check It Out!
    </marquee>
    <div class="content-section">
       
        <div class="card-container department-section">
            <h2>Departments</h2>
            <a href="edtech.php">
                <div class="card">EdTech</div>
            </a>
            <a href="ire.php">
                <div class="card">IRE</div>
            </a>
            <a href="datascience.php">
                <div class="card">Data Science</div>
            </a>
            <a href="cybersecurity.php">
                <div class="card">Cyber Security</div>
            </a>
        </div>
        

      
        <div class="course-container">
            <h2>Courses</h2>
          <a href="https://www.w3schools.com/whatis/">   <div class="course-card">Web Development</div></a>
           <a href="https://www.geeksforgeeks.org/difference-between-machine-learning-and-artificial-intelligence/"> <div class="course-card">AI & Machine Learning</div></a>
           <a href="https://www.geeksforgeeks.org/dbms/">  <div class="course-card">Database Management</div></a>
           <a href="https://www.w3schools.com/cybersecurity/index.php"> <div class="course-card">Cyber Security Fundamentals</div></a>
          
           
        </div>
    </div>

    <div class="additional-sections">
    
       

        <div class="news-section">
            <h2>Latest News</h2>
            <div class="news-slider">
                <button class="slider-btn left" onclick="slide(-1)">&#10094;</button>
                <div class="news-cards">
                    <div class="news-card">
                        <img src="images/ds.jpeg" alt="New Course Announcement" />
                        <h3>New Course Announcement</h3>
                        <p>A new Data Science course will start next month.</p>
                    </div>
                    <div class="news-card">
                        <img src="images/library.webp" alt="Library Hours Update" />
                        <h3>Library Hours Update</h3>
                        <p>The library will be open from 8 AM to 8 PM during the exam period.</p>
                    </div>
                    <div class="news-card">
                        <img src="images/assignment.jpeg" alt="Notice" />
                        <h3>Notice</h3>
                        <p>Please submit your assignments by the end of this week.</p>
                    </div>
                    <div class="news-card">
                        <img src="images/workshop.jpeg" alt="Workshop Announcement" />
                        <h3>Workshop Announcement</h3>
                        <p>Join our workshop on web development this weekend.</p>
                    </div>
                    <div class="news-card">
                        <img src="images/gra.jpeg" alt="Graduation Ceremony" />
                        <h3>Graduation Ceremony</h3>
                        <p>The graduation ceremony will take place on June 15.</p>
                    </div>
                    <div class="news-card">
                        <img src="images/books.jpeg" alt="New Library Books" />
                        <h3>New Library Books</h3>
                        <p>Check out the latest additions to our library collection.</p>
                    </div>
                </div>
                <button class="slider-btn right" onclick="slide(1)">&#10095;</button>
            </div>
        </div>
        
        <section class="track-progress">
            <h2>Track Your Progress</h2>
            <div class="progress-container">
                <div class="progress-item">
                    <h3>Web Development</h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: 70%;"></div>
                    </div>
                    <span>70% Complete</span>
                </div>
                <div class="progress-item">
                    <h3>AI & Machine Learning</h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: 50%;"></div>
                    </div>
                    <span>50% Complete</span>
                </div>
                <div class="progress-item">
                    <h3>Database Management</h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: 90%;"></div>
                    </div>
                    <span>90% Complete</span>
                </div>
                <div class="progress-item">
                    <h3>Cyber Security Fundamentals</h3>
                    <div class="progress-bar">
                        <div class="progress" style="width: 30%;"></div>
                    </div>
                    <span>30% Complete</span>
                </div>
            </div>
        </section>
        
        <!-- Calendar Section -->
        <section class="calendar-section">
            <h2>Academic Calendar</h2>
            <div class="calendar">
                <div class="month">
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>
                            August<br>
                            <span style="font-size:18px">2024</span>
                        </li>
                    </ul>
                </div>

                <ul class="weekdays">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>

                <ul class="days">
                    <li></li>
                    <li></li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                </ul>
            </div>
        </section>
    </div>

  
<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>CAMPUS ADDRESS</h3>
            <p><i class="fas fa-map-marker-alt"></i> Kaliakair, Gazipur-1750, Bangladesh.</p>
            <p><i class="fas fa-phone-alt"></i> 09666775534</p>
            <p><i class="fas fa-envelope"></i> info@bdu.ac.bd</p>
        </div>
        <div class="footer-column">
            <h3>DEPARTMENTS</h3>
            <p><a href="edtech.php" target="_blank">Educational Technology and Engineering (EdTE)</a></p>
<p><a href="#">Internet of Things (IoT) and Robotics Engineering (IRE)</a></p>
<p><a href="#" target="_blank">Data Science and Engineering (DSE)</a></p>
<p><a href="#" target="_blank">Cyber Security Engineering (CySE)</a></p>
<p><a href="#" target="_blank">Software Engineering (SE)</a></p>

        </div>
        <div class="footer-column">
            <h3>USEFUL LINKS</h3>
            <p><a href="https://ums.bdu.ac.bd/">UMS</a></p>
            <p><a href="https://bdu.ac.bd/apa">APA</a></p>
            <p><a href="https://bdu.ac.bd/bdu-admin/uploads/e-journal.php">E-Journals</a></p>
            <p><a href="https://www.taylorfrancis.com/">E-Library</a></p>
            <p><a href="https://bdu.ac.bd/gallery">Photo Gallery</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2024 BANGLADESH TECHNOLOGY UNIVERSITY. All Rights Reserved.</p>
    </div>
</footer>

    <script src="home.js"></script>
</body>
</html>
