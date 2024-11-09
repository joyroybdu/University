document.querySelector('.loginbtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Check if fields are empty
    if (!email || !password) {
        alert('Please fill in both fields');
        return;
    }

    // Check password strength
    const strengthMessage = document.getElementById('password-strength');
    const strength = checkPasswordStrength(password);
    strengthMessage.textContent = strength;

    if (strength !== "Strong password!") {
        return; // Stop further action if password is not strong
    }

    // Proceed with form submission (e.g., AJAX or form submit)
    alert('Login Successful'); // Replace with actual submission logic
});

// Function to check password strength
function checkPasswordStrength(password) {
    const strongPasswordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    const mediumPasswordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,}$/;

    if (strongPasswordPattern.test(password)) {
        return "Strong password!";
    } else if (mediumPasswordPattern.test(password)) {
        return "Medium password. Consider adding special characters for strength.";
    } else {
        return "Weak password. Please use at least 8 characters, including uppercase, lowercase, numbers, and special characters.";
    }
}
