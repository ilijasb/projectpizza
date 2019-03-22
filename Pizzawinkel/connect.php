<?php
$servername = "127.0.0.1";
$username = "root";
$password = "usbw";

// Create connection
$conn = new mysqli($servername, $root, $usbw);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>