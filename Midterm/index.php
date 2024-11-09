<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login with Email Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <!-- Error Message -->
            <div id="error-box" class="alert alert-danger d-none" role="alert">
                Please enter a valid email address.
            </div>

            <!-- Login Form -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Login</h3>
                    <form id="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
                <script>
                    document.getElementById('login-form').addEventListener('submit', function (event) {
                        event.preventDefault();

                        const email = document.getElementById('email').value.trim();
                        const password = document.getElementById('password').value.trim();
                        const errorBox = document.getElementById('error-box');

                        // Regular expression for basic email validation
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                        // Check if email is empty or invalid
                        if (!email || !emailRegex.test(email)) {
                            errorBox.textContent = 'Please enter a valid email address.';
                            errorBox.classList.remove('d-none');
                        } else if (!password) {
                            errorBox.textContent = 'Please enter your password.';
                            errorBox.classList.remove('d-none');
                        } else {
                            // Hide the error message if all fields are valid
                            errorBox.classList.add('d-none');
                            alert('Form submitted successfully!');
                        }
                    });

                </script>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>