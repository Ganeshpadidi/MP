function checkSession() {
    fetch('../../admin/backend/check_session.php') // Replace with the correct path to your PHP script
        .then(response => response.text())
        .then(data => {
            if (data.trim() === 'authenticated') {
                // User is authenticated, show the protected content
                document.getElementById('protectedContent').style.display = 'block';
                document.getElementById('loginForm').style.display = 'none';
            } else {
                // User is not authenticated, show the login form
                document.getElementById('protectedContent').style.display = 'none';
                document.getElementById('loginForm').style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
}
// Function to handle the login form submission
function login() {
    const adminId = document.getElementById('admin_id').value;
    const adminPassword = document.getElementById('admin_password').value;

    // Send a request to a PHP script to check login credentials
    fetch('../../admin/backend/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `admin_id=${adminId}&admin_password=${adminPassword}`,
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            if (data.trim() === 'authenticated') {
                // User is authenticated, reload the page to show protected content
                location.reload();
            } else {
                // Authentication failed, display an error message
                document.getElementById('loginError').textContent = 'Invalid credentials';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Add an event listener to check the session status when the page loads
document.addEventListener('DOMContentLoaded', checkSession);
