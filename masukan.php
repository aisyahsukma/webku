<?php 
include "formmasukan.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>