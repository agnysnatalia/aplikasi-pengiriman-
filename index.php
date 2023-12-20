<?php
session_start(); 
if(!isset($_SESSION["login"]))
{
  header("Location: login.php");
  exit;
}
require 'functions.php'; 
$resi = query("SELECT * FROM resi");

if ( isset($_POST["cari"]))
{
  $resi = cari1($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
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
            <li><a href="admin.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="tambah.php"><span>Tambah Data</span></a></li>
            <li><a href="logout.php"><span>Logout</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          
  <br><br>

  <form action="" method="post" >
    
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
    
  </form>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Nama</th>
      <th>No.Resi</th>
      <th>Tujuan Pengiriman</th>
      <th>Lokasi</th>
      <th>No.Telp</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($resi as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus?');">hapus</a>
      </td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["noresi"]; ?></td>
      <td><?= $row["tujuanpengiriman"]; ?></td>
      <td><?= $row["lokasi"]; ?></td>
      <td><?= $row["notelp"]; ?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>
  </table>
        </div>
      </section>
    </div>

  

</body>
</html>