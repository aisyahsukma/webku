<?php 
require 'koneksi.php';

if (isset($_POST['submit'])) {
    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn,"INSERT INTO `register` VALUES (
        '$nama',
        '$email',
        '$username',
        '$password'
    )");
    
    // header('location: index.php');
    // untuk melempar dari halaman tambah-data ke halaman index
    echo "
        <script>
            alert('Data berhasil ditambahkan');
            location.href='index.php';
        </script>
    ";
    var_dump($_POST);

    
    // echo $_GET['nama']; 
} else {
    echo 'AKSES DENIED!';
}

?>