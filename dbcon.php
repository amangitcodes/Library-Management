<?php
$host = 'localhost'; // Your database host
$user = 'root'; // Your database username
$password = ''; // Your database password
$database = 'lms'; // Your database name

// Create a connection
$mysql = new mysqli($host, $user, $password);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Select the database
if (!mysqli_select_db($mysql, 'lms')) {
    die("Database selection failed: " . mysqli_error($mysql));
}
?>
