<?php
include('connectlogindb.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <style >

        body{
            background-image: url('google-map-background-2.jpg');
        }
        /* Style the container */
.add-user {
    text-align: left;
    margin-top: 20px;
}

/* Style the link */
.add-user a {
    display: inline-block;
    background-color: #007bff; /* Background color */

    color: #fff; /* Text color */
    padding: 10px 20px;
    text-decoration: none; /* Remove underlines */
    border-radius: 5px; /* Rounded corners */
    font-weight: bold; /* Bold text */
    transition: background-color 0.3s; /* Smooth background color transition */
}

/* Hover effect */
.add-user a:hover {
    background-color: #0056b3; /* Darker background color on hover */
}

    </style>
    

<div class="container mt-3">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">City</th>
                <th scope="col">Sector</th>
                <th scope="col">Country</th>
                <th scope="col">Road</th>
                <th scope="col">Block</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

            $sql="select * from user_locations";
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Latitude=$row['latitude'];
                    $Longitude=$row['longitude'];
                    $City=$row['city'];
                    $Sector=$row['sector'];
                    $Country=$row['country'];
                    $Road=$row['road'];
                    $Block=$row['block'];


                    echo '<tr>
                    <th scope="row">'. $Latitude.'</th>
                    <td>'.$Longitude.'</td>
                    <td>'.$City.'</td>
                    <td>'.$Sector.'</td>
                    <td>'.$Country.'</td>
                    <td>'.$Road.'</td>
                    <td>'.$Block.'</td>
                    <td> 
                <tr>';

                }
            }
        

            ?>

            
            
        </tbody>

    </table>
</div>
<section class="map-container">
      <h1>Google Map</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.406205905648!2d90.42292967420768!3d23.768545288081594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2sEast%20West%20University!5e0!3m2!1sen!2sbd!4v1693636415105!5m2!1sen!2sbd" width="1600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </section>
</body>
</html>