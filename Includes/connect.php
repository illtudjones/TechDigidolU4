<?php
// Create connection
$conn = new mysqli("localhost", "root", "root", "My_store");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>