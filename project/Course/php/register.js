document.getElementById('userForm').addEventListener('submit', function(event) {
    // Perform form validation or any other checks
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault(); // Prevent form submission if passwords do not match
    } else {
        // Allow form submission if all is well
        alert("Registration successful! Redirecting to homepage...");
    }
});
