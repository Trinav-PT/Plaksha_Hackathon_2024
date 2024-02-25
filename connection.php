<?php
$servername = "localhost";
$username = "root";
$password = "Rushabh1234#";

// Create connection

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, "piano");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
