<?php
session_start();

include("dbconnection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something has posted--prevent sql injection also
    
    $Name = mysqli_real_escape_string ($con,$_POST['Name']);
    $Phone =mysqli_real_escape_string ($con,$_POST['Phone']);
    $Address = mysqli_real_escape_string ($con,$_POST['Address']);
    $Problem = mysqli_real_escape_string ($con,$_POST['Problem']);
    $Specialist_doctor =mysqli_real_escape_string ($con, $_POST['Specialist_doctor']); 
    $Location = mysqli_real_escape_string ($con, $_POST['Location']);
    
    
        //Save to database
        $query = "INSERT INTO Hospital_Admit(Name,Phone,Address,Problem,Specialist_doctor,Location) values ('$Name','$Phone','$Address','$Problem','$Specialist_doctor','$Location')";
        
       $data= mysqli_query($con, $query);

       if($data){

        header("Location: display_admitdata.php");//location to the target page
        echo "Successfully patient added!";
        die;

       }
       else{
        echo "Please enter valid informations";
       }
        
     
    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Admission Form</title>
    <style>
        body {
            background-image: url('patient-visiting-doctor-medical-check-up-hospital-108986590.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            height: 40px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
         background-color: #333;
         color: #fff;
         padding: 20px 0;
         text-align: center;
      }

      footer p {
         margin: 0;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hospital Admission Form</h1>
        <form action="hospital_ad.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="Phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="Address" required>
            
            <label for="problem">Patient's Problem:</label>
            <textarea id="problem" name="Problem" required></textarea>
            
            <label for="doctor">Choose Specialist Doctor:</label>
            <select id="doctor" name="Specialist_doctor" required>
                <option value="cardiologist">Cardiologist</option>
                <option value="orthopedist">Orthopedist</option>
                <option value="neurologist">Neurologist</option>
                <option value="dermatologist">Dermatologist</option>
                <option value="gynecologist">Gynecologist</option>
                <!-- Add more options as needed -->
            </select>

            <label for="location">Preferred Location:</label>
            <select id="location" name="Location" required>
                <option value="hospitalA">Dhaka</option>
                <option value="hospitalB">Chittagong </option>
                <option value="hospitalC">Sylhet </option>

       <option value="hospitalD">Rangpur  </option>
          <option value="hospitalE">Barishal  </option>
              <option value="hospitalF">Rajshahi  </option>
                
            </select>
            
            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
      <p>&copy; 2023 Accident Detection & Alarming</p>
   </footer>
</body>
</html>