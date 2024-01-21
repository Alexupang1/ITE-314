<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional styles for responsiveness */
        body {
            padding-top: 60px; /* Add padding to body for the fixed navbar */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><img  src="images/logo.png"  style="width:200px;"></a>
        <!-- Add your navigation links if needed -->
    </nav>

    <!-- Header Section -->
    <header class="py-5 text-center">
        <div class="container">
            <h1>Reset Password</h1>
        </div>
    </header>

    <!-- Login Content -->
    <section style="margin-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form id="loginForm" action="/login" method="post" style="border: 1px solid #000000; border-radius: 20px; padding:20%; margin:-10%"> <!-- Adjusted border-radius value -->
                        @csrf
                        <h4 class="text-center">SET YOUR PASSWORD</h4>
                        <p class="text-center">Create a new password for<br>User@email.com</p>

                        <div class="form-group mb-3">
                            <label for="username">New Password</label>
                            <input type="password" class="form-control" id="username" name="newPass" placeholder="Enter your new password">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password" name="conPass" placeholder="Confirm password">
                        </div>
                        <p class="text-muted small">* At least one lowercase character<br>
                            * At least one upper case character<br>
                            * 8-16 characters<br>
                            * Only letters, numbers, and common punctuation can be used</p>
                        <button type="submit" class="btn btn-primary btn-block mt-5">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer Section -->
    <footer class="bg-dark text-light text-center py-2 fixed-bottom">
        <p>&copy; 2023 Confirm Page. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

