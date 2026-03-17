<?php
// $host = "localhost";
$host = "db"; // Use the service name defined in docker-compose.yml for the database container
$user = "root";
$pass = "root";
$dbname = "hotel_annapurna_db";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("<h3 style='color:red;'>❌ Database Connection Failed: " . mysqli_connect_error() . "</h3>");
}
?>
