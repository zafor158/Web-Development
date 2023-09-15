<?php
session_start();

$con = mysqli_connect("localhost","root","","login_sample_bd");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    
    $name = mysqli_real_escape_string ($con, $_POST['name']);
    $email =mysqli_real_escape_string ($con, $_POST['email']);
    $subject = mysqli_real_escape_string ($con,$_POST['subject']);
    $message = mysqli_real_escape_string ($con,$_POST['message']);
    


    $errors=array();

    
    
    
   {
        

        //Save to database
        $query = "INSERT INTO contact(name,email,subject,message) values ('$name','$email','$subject','$message')";
        
        mysqli_query($con, $query);
        
        header("Location: HomePage.php");
        echo "Successfully message sent!";
        die;
    } 
    
}else{
  echo"Invalid";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('contact.png') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
        }

        .nav-links ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 50px;
        }

        .contact-info {
            flex: 1;
            padding-right: 20px;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin-right: 20px;
        }

        .contact-info h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-item i {
            font-size: 24px;
            margin-right: 10px;
            color: #007bff;
        }

        .contact-item p {
            margin: 0;
            font-size: 16px;
            color: #555;
        }

        .contact-form {
            flex: 1;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
        }

        .contact-form h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .contact-form form {
            display: grid;
            gap: 15px;
        }

        .contact-form label {
            font-size: 16px;
            color: #555;
            display: block;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            transition: border-color 0.3s;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }
         .contact-form input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-form input[type="submit"]:hover {
        background-color: #0056b3;
    }


  </style>
</head>

<body>
    <div class="navbar">
        <div class="nav-links">
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p><strong>Address:</strong> <a
                        href="https://www.google.com/maps/place/A,+Jahurul+Islam+Avenue,+Dhaka" target="_blank">A,
                        Jahurul Islam Avenue, Dhaka</a></p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p><strong>Email:</strong> <a href="mailto:zafor4558@gmail.com,nshatzahan99@gmail.com">zafor4558@gmail.com,nshatzahan99@gmail.com</a></p>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <p><strong>Phone:</strong> <a href="tel:01756473367,01990436506">01756473367,01990436506</a></p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
        <div class="contact-form">
    <h2>Contact Us</h2>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

        <!-- Add a submit button to send the form -->
        <input type="submit" value="Submit">
    </form>
</div>

