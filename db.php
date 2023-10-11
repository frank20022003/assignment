<?php
// Database configuration
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "playerdb";  // Use the name of your database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve player data
function getPlayers($conn) {
    $sql = "SELECT * FROM players";
    $result = $conn->query($sql);
    $players = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $players[] = $row;
        }
    }

    return $players;
}
?>
