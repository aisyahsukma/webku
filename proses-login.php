<?php 


// memakai post karena data yang diambil akan privat
if (isset($_POST["login"])){  

    // mengambil data dari database dan disimpan dalam variabel username
    $username = $_POST["username"];

    // untuk memulai session
    session_start();

    // session untuk username, diambil dari variabel username yang telah disimpan
    $_SESSION["username"] = $username;


    // untuk melempar halaman dari halaman ke halaman index.php jika login berhasil
    echo "
    <script>
        alert('Login berhasil!');
        location.href = 'index.php';
    </script>
    ";
};

?>