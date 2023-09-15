<?php
session_start();

$con = mysqli_connect("localhost","root","","login_sample_bd");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    
    
    $email =mysqli_real_escape_string ($con, $_POST['email']);
    $review= mysqli_real_escape_string ($con,$_POST['review']);
 

    $query = "INSERT INTO review(email,review) values ('$email','$review')";
        
        mysqli_query($con, $query);
        
        header("Location: HomePage.php");
        echo "Successfully message sent!";
        die;
    
    
}else{
  echo"Invalid";
}
?>