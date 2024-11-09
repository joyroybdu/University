document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevent the form from submitting the default way

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                // If login is successful, redirect to home.html
                window.location.href = "home.html";  
            } else {
                // Display error message if login fails
                document.getElementById('error-message').innerText = response.message;
            }
        }
    };

    var data = "email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password);
    xhr.send(data);
});
