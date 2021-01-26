<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWIKODE</title>

    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <script src="asset/js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="asset/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m2-auto" style="text-align: left;">
                    <a class="nav-link active" href="http://localhost/new_siwikode">Home</a>
                    <a class="nav-link active" href="wisata_rekreasi.html">Wisata Rekreasi</a>
                    <a class="nav-link active" href="wisata_kuliner.html">Wisata Kuliner</a>
                    <a class="nav-link active" href="new_siwikode/dashboard/register.php">Registrasi</a>
                </div>
            </div>
            <div>
                <div class="navbar-nav">
                <?php 
                    session_start();
                    if($_SESSION['status']!="login"){
                      echo '<a class="nav-link active" href="logout.php">Logout</a>';
                    }else{
                      echo '<a class="nav-link active" href="login.php">Login</a>';
                    }
                ?>
                </div>
            </div>
        </div>
    </nav>
    <?php
    if(isset($_GET['status'])):
    ?>
    <p>
        <?php
            if($_GET['status'] == 'gagal'){
                echo "Pendaftaran Wisata baru berhasi!";
            } else {
                echo "Selamat Datang!";
            }
        ?>
    </p>

    <?php endif; ?>
    