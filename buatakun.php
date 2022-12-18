<?php require 'koneksi.php'; ?>

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
<body >


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <div class="alert alert-danger" role="alert">
                    <form action="proses-masuk.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" class="form-control mb-3" id="nama" name="nama" >
                        <label for="email">Email</label>
                        <input type="email" class="form-control mb-3" id="email" name="email">
                        <label for="username">Username</label>
                        <input type="text" class="form-control mb-3" id="username" name="username" >
                        <label for="password">Password</label>
                        <input type="password" class="form-control mb-3" id="password" name="password" >
                        <label for="password_repeat">Confirm your password</label>
                        <input type="password" class="form-control mb-3" id="password_repeat" name="password_repeat" >
                        <div class="d-grid gap-2 mb-3">
                            <input class="btn btn-primary" type="submit" value="submit" name="submit">
                        </div>
                        <p>Already have an account? <a href="masuk.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</body>  
