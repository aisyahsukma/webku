<?php 
$conn = new mysqli('localhost','root','','kay');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
