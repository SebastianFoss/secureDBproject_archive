

<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database credentials

$servername = "cssql.seattleu.edu";
$username = "ll_sfoss";
$password = "1Tbuwmn3iQ+odBuE";
$dbname = "ll_sfoss";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
}
?>
