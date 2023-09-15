<?php
include("dbconnection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = mysqli_real_escape_string($con, $_POST['admin_email']);
        $pass = mysqli_real_escape_string($con, $_POST['admin_pass']);
        $check_email = "SELECT admin_email,admin_pass FROM admin WHERE admin_email = '$email' ";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res)>0){ 
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['admin_pass'];

        if($pass==$fetch_pass){
                header("location:admin.html");
                }else{
                   
                    echo"unsuccessfull login";
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    
?>
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
            <form id="loginForm" action="login_admin.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="admin_email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="admin_pass" required>
                    <label>Password</label>
                    <!--<input type="checkbox" id="showPassword">-->
                   
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="">Remember me</label>
                    <a href="forgot_password.html">Forgot Password?</a>
                </div>

                

                <div class="btn-container">
              
                <button type="submit" class="btn" name="login">Login As Admin</button><!--here I have named the 'loin as admin' button as login that is same to log in page-- log in button. so admin/user can login through login button of the log in page-->
               
            </form>
        </div>
    </div>

    <script src="script2.js"></script>
    <!--<script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', () => {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    </script>-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>