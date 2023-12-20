<?php
session_start(); 
if(!isset($_SESSION["login"]))
{
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

$resi = query("SELECT * FROM resi WHERE id = $id")[0];




	if(isset($_POST["submit"]))
	{
		if( ubah($_POST) > 0)
		{
			echo "
				<script>
				alert('Data Berhasil Diubah!');
				document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "
				<script>
				alert('Data Gagal Diubah!');
				document.location.href = 'index.php';
				</script>
			";
		}

		
	} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet"  href="tambah.css">
</head>
<body>
  <div class="wrapper">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Selamat Datang Admin!</a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="tambah.php"><span>Tambah Data</span></a></li>
            <li><a href="#"><span>Logout</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
  		<div class="container">
  		<form action="" method="post">
		  <input type="hidden" name="id" value="<?= $resi["id"]; ?>">
		    <div class="row">
		      <div class="col-25">
		        <label for="nama">Nama : </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="nama" name="nama" required="" value="<?= $resi["nama"]; ?>">
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="noresi">No. Resi : </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="noresi" name="noresi" value="<?= $resi["noresi"]; ?>">
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="tujuanpengiriman">Tujuan Pengiriman : </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="tujuanpengiriman" name="tujuanpengiriman" value="<?= $resi["tujuanpengiriman"]; ?>">
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="lokasi">Lokasi : </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="lokasi" name="lokasi" value="<?= $resi["lokasi"]; ?>">
		      </div>
		    </div>
		    <div class="row">
		      <div class="col-25">
		        <label for="notelp">No. Telepon : </label>
		      </div>
		      <div class="col-75">
		        <input type="text" id="notelp" name="notelp" value="<?= $resi["notelp"]; ?>">
		      </div>
		    </div>
		    <div class="row">
		      <button type="submit" name="submit">Ubah Data!</button>
		    </div>
  		</form>
	</div>
        </div>
      </section>
    </div>
</body>
</html>