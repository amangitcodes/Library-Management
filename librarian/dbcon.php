<?php
// Create a connection
$mysql = mysqli_connect('localhost', 'root', ''); // Adjust credentials as needed

// Check the connection
if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
if (!mysqli_select_db($mysql, 'lms')) {
    die("Database selection failed: " . mysqli_error($mysql));
}

// Now $mysql can be used to interact with the database
?>
