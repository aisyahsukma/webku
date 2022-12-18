<?php 
// connect ke database menggunakan ooject-oriented
$conn = new mysqli('localhost','root','','login');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="w3-cell" >
    <form id="komen"  method="POST" action="masukan.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td width="130">Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" value="Login">
                    <?php  ?>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>