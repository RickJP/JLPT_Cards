<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "rick";
$dbPassword = "apache2k19";
$dbName     = "jlpt";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
