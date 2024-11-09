<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-container {
            min-height: 100vh;
        }

        .welcome-text {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .card-container {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .card-body {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Login Form (Visible initially) -->
    <div id="login-form" class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <div id="error-box" class="alert alert-danger d-none" role="alert">
                Please enter a valid email address and password.
            </div>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Login</h3>
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard with Logout Button (Hidden initially) -->
    <div id="dashboard" class="container dashboard-container d-none d-flex flex-column align-items-center justify-content-center">
        <button class="btn btn-danger" id="logoutBtn" style="position: absolute; top: 20px; right: 20px;">Logout</button>
        <div class="welcome-text">
            Welcome to the System: <strong id="userEmail"></strong>
        </div>
        <div class="card-container">
            <div class="card shadow-sm" style="width: 18rem;">
                <div class="card-header">Add a Subject</div>
                <div class="card-body">
                    <p class="card-text">This section allows you to add a new subject in the system.</p>
                    <a href="#" class="btn btn-primary">Add Subject</a>
                </div>
            </div>
            <div class="card shadow-sm" style="width: 18rem;">
                <div class="card-header">Register a Student</div>
                <div class="card-body">
                    <p class="card-text">This section allows you to register a new student in the system.</p>
                    <a href="#" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Handle Login
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorBox = document.getElementById('error-box');

            // Basic email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!email || !emailRegex.test(email) || !password) {
                errorBox.textContent = 'Please enter a valid email address and password.';
                errorBox.classList.remove('d-none');
            } else {
                errorBox.classList.add('d-none');
                document.getElementById('userEmail').textContent = email;
                document.getElementById('login-form').classList.add('d-none');
                document.getElementById('dashboard').classList.remove('d-none');
            }
        });

        // Handle Logout
        document.getElementById('logoutBtn').addEventListener('click', function () {
            document.getElementById('dashboard').classList.add('d-none');
            document.getElementById('login-form').classList.remove('d-none');
            document.getElementById('loginForm').reset();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
