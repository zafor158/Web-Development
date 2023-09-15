<?php
include('dbconnection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $road = $_POST["road"];
   


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO user_locations (latitude, longitude, city, country,road) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ddsssss", $latitude, $longitude, $city, $country,$road);
    $stmt->execute();
    $stmt->close();

    $conn->close();
}
?>