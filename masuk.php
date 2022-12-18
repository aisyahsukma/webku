<?php require 'koneksi.php'; ?>
<?php 
	if(isset($_SESSION['username'])){
		header('Location:index.php');
	}
	if(isset($_SESSION['error'])){
		echo "<script>alert('".$_SESSION['error']."');</script>";
		unset($_SESSION['error']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css.css">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
    <style>
        h1{
            font-family: 'comic sans ms';
        }
    </style>
</head>
<body class="bg-light">

    <main>
        <title>Login</title>
        <div class="content container-fluid d-flex justify-content-center align-items-center">
            <div class="row">
                <h1 class="text-center my-4">Login</h1>
                <div class="card shadow p-3">
                    <form action="cek_login.php" method="POST">
                        <fieldset>
                            <div class="my-2">
                                <label for="username" class="form-label">Username :</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="my-2">
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <input type="submit" name="login" value="Login" class="btn btn-primary form-control mt-2">
                        </fieldset>
                    </form>
                    <p>Belum Purnya akun? daftar/register <a href="buatakun.php" class="text-primary">disini</a></p>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>