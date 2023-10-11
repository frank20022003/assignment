<?php
$playerName = $_POST['playerName'];
$playerRole = $_POST['playerRole'];

// Store this data in a database (not shown in this simplified example).
// You would typically use SQL commands to insert data into the database.

header("Location: display.html"); // Redirect to the display page.
?>
