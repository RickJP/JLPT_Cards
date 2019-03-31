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

/* change character set to utf8 */
if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
} else {
    //printf("Current character set: %s\n", $db->character_set_name());
}
?>
