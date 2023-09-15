<?php
session_start();

include("dbconnection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $name = mysqli_real_escape_string ($con, $_POST['fullname']);
    $number =mysqli_real_escape_string ($con, $_POST['phone']);
    $email = mysqli_real_escape_string ($con,$_POST['email']);
    $password = mysqli_real_escape_string ($con,$_POST['password']);
    $confirmPassword =mysqli_real_escape_string ($con, $_POST['confirm_password']); // Changed to 'confirm_password'
     $Photo =mysqli_real_escape_string ($con, $_POST['Photo']);
    $gender =mysqli_real_escape_string ($con, $_POST['gender']);
    $address =mysqli_real_escape_string ($con, $_POST['address']);


    $errors=array();

    
    
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"Email is not valid");
    }
    
    
    
    if (!empty($name) && !empty($password) && !empty($confirmPassword) &&
        !empty($email) && !is_numeric($name) && !is_numeric($email) && $password == $confirmPassword) 
   {
        //Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        //Save to database
        $query = "INSERT INTO user(name,number,email,password,Photo,gender,address) values ('$name','$number','$email','$hashedPassword','$Photo','$gender','$address')";
        
        mysqli_query($con, $query);
        
        header("Location: login.php");
        echo "Successfully Registered!";
        die;
    } 
    else {
        echo "Please enter valid information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-eqiv="X-UA_Compatible" content="'IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> User Registration</title>
    <!--<link rel="stylesheet" href="signcs.css">-->

</head>

<body>
    <style>
      /* Reset default browser styles */
body, h2, form, label, input, textarea, button {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

/* Define background color and spacing */
body {
    background-image: url('istockphoto-947068776-1024x1024.jpg');
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 120vh;
}

.wrapper {
    background-color: #ffffff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 20px;
    width: 100%; /* Adjust to full width */
    max-width: 400px; /* Set a maximum width */
    text-align: center;
}

/* Style form elements */
.form-box {
    text-align: left;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

.input {
    margin-bottom: 20px;
}

/* Emphasize the "Name" label */
label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: bold;
    font-size: 18px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
input[type="password"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    font-size: 16px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}





    </style>
 
 
    <div class="wrapper">
        
          <div class="form-box signup">
            <h2>User Registration Form</h2>

            <form action="registration.php" method="post">
                <div clas="input">

                    <label for="fullname"> Fullname:</label> <input type="text" name="fullname"  id="fullname">
                    </div> <br>
                    <div>
                        <label for="phone"> Enter  your phone number :</label> 
                        <input type="tel" name="phone" id="phone" pattern="[0-9]{1,11}" maxlength="11" required> 
                        </div> <br>
                      <div>
                        <label for="email"> Email:</label> <input type="email" name="email"  id="email" required >
                        </div> <br>
                       <div>
                        <label for="password"> Password:</label> <input type="password" name="password"  id="Password "required>
                        </div> <br>

                        <div>
                         <label for="password">Confirm Password:</label> <input type="password" name="confirm_password"  id="confirm_password "required>
                         </div> <br>

                          <div>
                             <label for="photo">Photo:</label>
                             <input type="file" name="Photo" id="photo" required>
                             </div>
                           <div>
                        
                        
                        <div>
                        <label for="gender"> Gender:</label> <input type="radio" name="gender"  id="gender" value="Male"required>Male<input type="radio" name="gender"  id="gender" value="Female"required>  Female    
                        </div> <br>
                        
                        <div class="mb-3">
                        <label for="address" class="form-label">Enter your address:</label>
                          <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                         </div><br>

                        <div> 
                            <button type="submit" name="submit"required>Sign Up</button>              
                           </div> <br>
                           <p>Already have an account?
                            <a href="login.php">Login </a>
                        </p>
                           
            </form>
        </div>
        
    </div>


    <!script src="/script2.js"></!script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>





</html>