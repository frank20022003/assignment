<?php
// Fetch player data from the database (not shown in this simplified example).
// You would typically use SQL commands to retrieve data from the database.

// Sample data for demonstration purposes.
$players = array(
    array("Alice", "Forward"),
    array("Bob", "Midfielder"),
    array("Charlie", "Defender"),
);

foreach ($players as $player) {
    echo "<tr><td>" . $player[0] . "</td><td>" . $player[1] . "</td></tr>";
}
?>
