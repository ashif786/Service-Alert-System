<?php
$servername = "localhost";
$username = "genetco_oacc";
$password = "L)3p=8mMZsR.";
$dbname = "genetco_dbgadget";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>