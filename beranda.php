<?php
require 'functions.php';
if ( isset($_POST["cari"]))
{
  $resi = cari($_POST["keyword"]);
  exit;

  if (mysqli_affected_row($db) == false) {
   		exit;
   } 
   	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<link rel="stylesheet" type="text/css" href="beranda1.css">
	<link rel="shortcut icon" href ="logo.png" >
</head>
<body>
	<div class="bar">
		<div class="tulisan">
			<a href="login1.php">	
				<img src="logo1.png">
				</a>
		</div>
		<div class="search">	
				<input type="Search" placeholder="Search">
				<button type="Search" > cari</button>
		</div>
		<div class="kotak">	
			<ul>
				<li> <a href="beranda.php"> Beranda </a></li>
				<li> <a href="produk.php"> Produk dan Layanan </a></li>
				<li> <a href="kemitraan.php"> Kemitraan</a></li>
				<li> <a href="aboutus.php"> About Us</a></li>
				<li> <a href="kontak.php"> Kontak</a></li>
			</ul>
		</div>
	</div>

	<div class="kontener">
		<div class="gambar">
			<img src="kurir6.jpg">
		</div>	
		<div class="fitur">
			<form action="tampil.php" method="post">
			<div class="resi">
				<h1>cek resi</h1><br>
				<input type="search" name="keyword" autocomplete="off" placeholder="Masukkan Resi" required><br><br>
				<button type="submit" name="cari">lacak</button>
			</div>
		</form>
		</div>
	</div>
	<div class="footer">
		<div class="alamat">
				<h2>Alamat</h2><br>
				<p>
					PT.AFA Express<br>
					JL Dimana Aja No.202,<br>
					Surabaya, 13201, Indonesia 
				</p>
			</div>
			<div class="alamat">
				<h2>Quick Links</h2><br>
				<p>
					Beranda<br>
					Layanan<br>
					Kemitraan <br>
					Tentang Kami<br>
					Kontak<br> 
				</p>
			</div>
			<div class="alamat">
				<h2>Customer Service</h2><br>
				<p>
					12302<br>
				</p>
			</div>
			<div class="alamat1">
				<h1>AFA Express</h1><br>
			</div>
	</div>
	<footer>
		@copyrights 2020 PT.AFA Express All Rights Reserved
	</footer>
</body>
</html>

