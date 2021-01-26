<?php 
    include 'header.php';
    include 'dashboard/config.php';
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

<?php endif;

	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
?>
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
    <div class="container">
        <table class="table table-bordered">
			<tr>
				<th width="20%">Nama</th>
				<th width="20%">Kontak</th>
				<th width="20%">Alamat</th>
				<th width="20%">Link Foto</th>
				<th width="40%">Action</th>
			</tr>
			<?php 
			$data = mysqli_query($db,"select * from user_wisata");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['nama_wisata']; ?></td>
					<td><?php echo $d['jenis_wisata']; ?></td>
					<td><?php echo $d['kontak']; ?></td>
                    <td><a href="">link upload</a></td>
                    <td><a href="">View</a>| <a href="">Edit</a>| <a href="">delete</a></td>
				</tr>
				<?php
			}
 
			?>
		</table>
    </div>