<?php
include("dbconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // escaping data to prevent SQL injection attacks when working with a MySQL database.
    //mysqli_real_escape_string()--This function is used to escape special characters in a string to make it safe for use in SQL queries.
    $email = mysqli_real_escape_string($con, $_POST['email']);////sanitized email address after processing and so on
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the provided credentials belong to an admin
    $admin_check_query = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '$email'";
    $admin_result = mysqli_query($con, $admin_check_query);

    if (mysqli_num_rows($admin_result) > 0) {
        $admin_data = mysqli_fetch_assoc($admin_result);
        $admin_password = $admin_data['admin_pass'];

        if ($password==$admin_password) {
            // Admin login successful, redirect to admin.html
            header("location: admin.html");
            exit();
        }
    }

    // If not an admin, check if the credentials belong to a regular user
    $user_check_query = "SELECT email, password FROM user WHERE email = '$email'";
    $user_result = mysqli_query($con, $user_check_query);

    if (mysqli_num_rows($user_result) > 0) {
        $user_data = mysqli_fetch_assoc($user_result);
        $user_password = $user_data['password'];

        if (password_verify($password, $user_password)) {
            // Regular user login successful, redirect to the user's dashboard or homepage
            header("location: HomePage.php");
            exit();
        }
    }

    // If neither admin nor user, display an error message
    $errors['email'] = "Incorrect email or password!";
} else {
    $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to sign up.";
}
?>
<!-- Rest of your HTML code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-eqiv="X-UA_Compatible" content="'IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Website with Login & Registration</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header>
        <h2 class="logo">Accident Detection & Alarming</h2>
        <nav class="navigation">
            <!--<button href="HomePage.html" class="btnLogin-popup">Login</button>-->
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form id="loginForm" action="login.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" required>
                    <label>Password</label>
                    <!--<input type="checkbox" id="showPassword">-->
                   
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="">Remember me</label>
                    <a href="forgot_password.html">Forgot Password?</a>
                </div>

                <button type="submit" class="btn" name="login">Login</button>
              
             

                    <p>Don't have an account? <a href="registration.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="script2.js"></script>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>