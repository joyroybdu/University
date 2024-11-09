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

// Quiz Button Functionality
function startQuiz() {
    alert('Quiz has started!');
}

// Attendance Marking
function markAttendance() {
    document.getElementById('attendanceStatus').textContent = 'Attendance marked for today!';
}

// Comment Section
document.getElementById('commentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const commentInput = document.getElementById('commentInput').value;
    if (commentInput.trim() !== '') {
        const comment = document.createElement('div');
        comment.className = 'comment';
        comment.textContent = commentInput;
        document.getElementById('commentsList').appendChild(comment);
        document.getElementById('commentInput').value = ''; // Clear input
    }
});
