<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIWIKODE</title>

    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
 <header class="sticky">
        <div style="text-align: center; margin-top:50px;">
            <h2>
                Sistem Informasi Wisata Kota Depok - SIWIKODE
            </h2>
        </div>
        <div class="container-fluid" onclick="toggleMenu();"></div>
            <ul>
                <li style="padding-left: 9%;"><a href="index.php" onclick="toggleMenu();">Home</a></li>
                <li><a href="wisata_rekreasi.html" onclick="toggleMenu();">Wisata Rekreasi</a></li>
                <li><a href="wisata_kuliner.html" onclick="toggleMenu();">Wisata Kuliner</a></li>
                <li><a href="formregistrekreasi.html" onclick="toggleMenu();">Registrasi</a></li>
                <li style="float: right; padding-right: 9%;"><a href="login.php" onclick="toggleMenu();">Login</a></li>
            </ul> <br>
            <div style="text-align: right; padding-right: 3%;">
                <a href="index.php">Home</a> / <a href="registrasi.php">Registrasi</a> / Registrasi Wisata Kuliner
            </div> 
           
            <a style="padding-left: 3%;" href="formregistkuliner.html">Registrasi Wisata Kuliner</a>
        </div> <br> <br>
    </header>
    <?php 
    if(isset($_GET['status'])):
    ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Wisata baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    <div class="container" style="padding:20px;">
        <form action="proses_register.php" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="nametw">Nama Tempat Wisata</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" id="nametw" name="nametw" placeholder="Nama Tempat Wisata" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="jeniswisata">Jenis Wisata</label>
                            </div>
                            <div class="col-8">
                                <select name="wisata" class="select" id="jeniswisata" class="form-control" required>
                                    <option value="Taman" id="1">Taman</option>
                                    <option value="Masjid" id="2">Masjid</option>
                                    <option value="Kolam Renang / Waterpark" id="3"> Kolam Renang / Waterpark</option>
                                    <option value="Setu" id="4">Setu</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="desc">Deskripsi Wisata</label>
                            </div>
                            <div class="col-8">
                                <textarea rows="5" class="textareadeskripsi form-control" name="desc_wisata" id="desc"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="kontak">Kontak Person</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" name="kontak"  id="kontak" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="telpon">No Handphone/ Telepon </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" name="telpon"  id="telpon" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="email">E-mail </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" name="email"  id="email" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="web">Alamat Web </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" name="web"  id="web" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="bujur"> Latitude, Longitude </label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="input form-control" name="bujur"  id="bujur">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="psw"> Password </label>
                            </div>
                            <div class="col-8">
                                <input type="password" class="input form-control" name="psw" id="psw" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 left">
                <button style="background-color: red;" type="reset" class="button">Batal</button>
                <button style="background-color: green;" type="submit" value="submit" name="submit" class="button">Daftar</button>
                </div>
            </div>
        </form>
    </div>
    
    
    <script src="asset/js/jquery-3.5.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="asset/js/jquery-slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="asset/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>