<?php
session_start();

include("dbconnection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something has posted--prevent sql injection also
    
    $Name = mysqli_real_escape_string ($con,$_POST['Name']);
    $Phone =mysqli_real_escape_string ($con,$_POST['Phone']);
    $Address = mysqli_real_escape_string ($con,$_POST['Address']);
    $Problem = mysqli_real_escape_string ($con,$_POST['Problem']);
    $Specialist_doctor =mysqli_real_escape_string ($con, $_POST['Specialist_doctor']); // Changed to 'confirm_password'
    $Location = mysqli_real_escape_string ($con, $_POST['Location']);
    
    
        //Save to database
        $query = "INSERT INTO Hospital_Admit(Name,Phone,Address,Problem,Specialist_doctor,Location) values ('$Name','$Phone','$Address','$Problem','$Specialist_doctor','$Location')";
        
       $data= mysqli_query($con, $query);

       if($data){

        header("Location: HomePage.php");//location to the target page
        echo "Successfully Submitted!";
        die;

       }
       else{
        echo "Please enter valid informations";
       }
        
     
    
}
?>