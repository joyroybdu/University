<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="studentportal.css">
</head>
<body>
    <header>
        <h1>Student Portal</h1>
    </header>
    <section class="assignment-section">
        <h2>Upload Assignment</h2>
        <form id="assignmentForm">
            <input type="file" id="assignmentFile" required>
            <button type="submit">Upload Assignment</button>
        </form>
        <p id="assignmentStatus"></p>
    </section>

    <section class="quiz-section">
        <h2>Take a Quiz</h2>
        <button onclick="startQuiz()">Start Quiz</button>
    </section>

    <section class="attendance-section">
        <h2>Mark Attendance</h2>
        <button onclick="markAttendance()">Mark Present</button>
        <p id="attendanceStatus"></p>
    </section>

    <section class="comment-section">
        <h2>Comment Section</h2>
        <form id="commentForm">
            <textarea id="commentInput" placeholder="Write your comment..." required></textarea>
            <button type="submit">Submit Comment</button>
        </form>
        <div id="commentsList">
            <h3>Comments:</h3>
        </div>
    </section>

    <script src="studentportal.js"></script>
</body>
</html>
