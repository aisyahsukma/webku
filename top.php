<?php
  session_start();
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berter Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>   
</head>
<body>
    <div class="wrapper">
        <div class="logo"><a href=''>Barter Shop Kay_-</a></div>
        <div class="menu">
        <div class="container">
          <ul class="nav nav-pills">
            <?php 
                if(!empty($_SESSION['username'])){
                  echo"<li class='nav-link active'>".$_SESSION['username']."</li>";
                } else{
                  echo '<li class="nav-item">
                         <a class="nav-link active" href="buatakun.php">Buat Akun</a>
                        </li>';
                }
                ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Menu</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php">Home</a>
                <a class="dropdown-item" href="info.php">Info</a>
                <?php 
                  if(isset($_SESSION['username'])){
                  echo '<a class="dropdown-item" href="category.php">Category</a>
                  <a class="dropdown-item" href="nominal.php">Nominal</a></div>';
                  }
                ?>
                
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bottom.php">Contact</a>
            </li>
            <?php 
              if(!empty($_SESSION['username'])){
						  echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
					    }
					    else{
						    echo "<li class='nav-item'><a class='nav-link' href='masuk.php'>Login</a></li>";
					    }
            ?>
            <!-- <li class='nav-item'><a class='nav-link' href='masuk.php'>Login</a></li> -->
            <!-- <li class='nav-item'><a class='nav-link' href='index.php'>Logout</a></li>   -->
          </ul>
    </div>
</body>  
