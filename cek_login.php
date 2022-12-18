<?php 
	include 'koneksi.php';
	session_start();
	
	$username = $_POST['username'];
	$pass = ($_POST['password']);
	
	$sql = "SELECT * FROM register WHERE username='$username' AND password='$pass'";
    $result = $conn->query($sql);
	
	if($result->num_rows > 0) {
		$_SESSION['username']=$username;
		header('Location: index.php');
	}
	else{
		$_SESSION['err']="<h4>Username atau Password Anda Salah</h4>";
		header('Location: login.php');
	}

	$conn->close();
?>