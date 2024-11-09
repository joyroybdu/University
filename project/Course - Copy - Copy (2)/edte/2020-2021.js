// Assignment Upload Simulation
document.getElementById('assignmentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const fileInput = document.getElementById('assignmentFile');
    if (fileInput.files.length > 0) {
        document.getElementById('assignmentStatus').textContent = 'Assignment uploaded successfully!';
    } else {
        document.getElementById('assignmentStatus').textContent = 'Please select a file to upload.';
    }
});

// Quiz Functionality
function checkQuiz() {
    const answer = document.getElementById('quizAnswer').value;
    const result = answer == '12' ? 'Correct!' : 'Incorrect. Try again!';
    document.getElementById('quizResult').textContent = result;
}

// Attendance Marking
function markAttendance() {
    document.getElementById('attendanceStatus').textContent = 'Attendance marked for today!';
}
