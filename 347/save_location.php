

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $sector = $_POST["sector"];
    $road = $_POST["road"];
    $block = $_POST["block"];

    // Replace this with your database connection logic
    $conn = new mysqli("localhost", "root", "", "location");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO user_locations (latitude, longitude, city, country, sector, road, block) VALUES (?, ?, ?, ?, ?, ?, ?)");//This step is important for preventing SQL injection.
    $stmt->bind_param("ddsssss", $latitude, $longitude, $city, $country, $sector, $road, $block);
    $stmt->execute();
    $stmt->close();

    $conn->close();
}
?>