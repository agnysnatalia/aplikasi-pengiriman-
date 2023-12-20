<?php
require 'functions.php';

  $resi = query("SELECT * FROM resi");
if ( isset($_POST["cari"]))
{
  $resi = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resi</title>
  <style type="text/css">
    *{
        margin: 0px;
        padding:0px;
        font-family: century gothic;
    }

    body {
        background-color: grey;
        z-index: 1;
    }
    .bar
    {
        background: linear-gradient(to right, #000000,#ffffff );
        height: 60px;
        width: 100%;
        box-sizing: border-box;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        z-index: 9999;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .bar .tulisan
    {
        background-color:rgba(0, 0, 0, 0);
        width : 20%;
        height: 60px;
        line-height: 60px;
        margin: 0 2px;
        box-sizing: border-box;
        overflow: hidden;
    }
    .bar .tulisan a 
    {
        color: white;
    }
    .bar .search
    {
         background-color:rgba(0, 0, 0, 0);
        width : 20%;
        height: 60px;
        line-height: 60px;
        margin: 0 2px;
        box-sizing: border-box;
        overflow: hidden;
        text-align: center;
    }
    .bar .kotak
    {
        background-color:rgba(0, 0, 0, 0);
        width : 58%;
        height: 60px;
        line-height: 70px;
        margin: 0 2px;
        box-sizing: border-box;
        overflow: hidden;
        text-align: right;
    }

    .bar .kotak ul li
    {
            display: inline-block;
            margin: 0 5px;
    }
    .bar .kotak ul li a
    {
        color: #000;
        font-weight: bold;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 15px;
    }
    .bar .kotak ul li a:hover
    {
        background-color: white;
        border-radius: 3px;
    }
    .bar .search button
    {
        width: 60px;
        border-radius: 5px;
        font-weight: bold;
    }
    .bar .search input
    {
        border-radius: 5px;
        padding: 0 2px;
    }
    .bar .search button:hover
    {
        background-color: black;
        color: white;
        cursor: pointer;
    }
    .kontener
    {
        margin: 80px auto;
        width: 900px;
        padding: 10px;
        box-sizing: border-box;
        text-align: center;
    }
    .kontener .judul
    {
        width: 300px;
        text-align: center;
        box-sizing: border-box;
        margin: 2px auto;
    }
    .kontener .judul h1
    {
        font-family: sans-serif;
    }
    .tabel {
        margin: 50px auto;
        width: 700px;
        padding: 10px;
    }
    .tabel table {
      color: #666;
      text-shadow: 1px 1px 0px #fff;
      background: #eaebec;
      border: #ccc 1px solid;
    }
    .tabel table th {
      padding: 15px 35px;
      border-left:1px solid #e0e0e0;
      border-bottom: 1px solid #e0e0e0;
      background: #ededed;
    }
    .tabel table th:first-child{  
      border-left:none;  
    }
    .tabel table tr {
      text-align: center;
      padding-left: 20px;
    }
    .tabel table td:first-child {
      text-align: left;
      padding-left: 20px;
      border-left: 0;
    }
    .tabel table td {
      padding: 15px 35px;
      border-top: 1px solid #ffffff;
      border-bottom: 1px solid #e0e0e0;
      border-left: 1px solid #e0e0e0;
      background: #fafafa;
      background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
      background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }
    .tabel table tr:last-child td {
      border-bottom: 0;
    }
    .tabel table tr:last-child td:first-child {
      -moz-border-radius-bottomleft: 3px;
      -webkit-border-bottom-left-radius: 3px;
      border-bottom-left-radius: 3px;
    }
    .tabel table tr:last-child td:last-child {
      -moz-border-radius-bottomright: 3px;
      -webkit-border-bottom-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }
    .tabel table tr:hover td {
      background: #f2f2f2;
      background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
      background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }
    /*ini footer*/
    .footer
    {
        width: 100%; 
        background-color: white;
        color: #000;
        text-align: center;
        display: flex;
    }
    .footer .alamat
    {
        margin: 5px;
        width: 25%;
        box-sizing: border-box;
        padding-bottom: 10px;
        border-radius: 5px;
    }
    .footer .alamat p
    {
        font-weight: bold;
    }
    .footer .alamat1
    {
        margin: 5px;
        width: 25%;
        box-sizing: border-box;
        padding-bottom: 10px;
        border-radius: 5px;
    }
    .footer .alamat1 h1
    {
        margin: 70px;
        position: relative;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
    .footer1
    {
        text-align: center;
        background-color: white;
        font-weight: bold;
    }
    </style>
</head>
<body>
  <div class="bar">
    <div class="tulisan">
      <a href="landing.php"> 
        <img src="logo1.png">
        </a>
    </div>
    <div class="search">  
        <input type="Search" name="" placeholder="Search">
        <button type="Search" > cari</button>
    </div>
    <div class="kotak"> 
      <ul>
        <li> <a href="beranda.php"> Beranda </a></li>
        <li> <a href="produk.php"> Produk dan Layanan </a></li>
        <li> <a href="kemitraan.php"> Kemitraan</a></li>
        <li> <a href="aboutus.php"> About Us</a></li>
        <li> <a href="#"> Kontak</a></li>
      </ul>
    </div>
  </div>

  <div class="kontener">
    <div class="judul">
      <h1>RESI ANDA</h1>
      </div>
    </div>

      <div class="tabel">
      <table border="1" cellpadding="10" cellspacing="0">
          <tr>
            <th>Nama</th>
            <th>No.Resi</th>
            <th>Tujuan Pengiriman</th>
            <th>Lokasi</th>
            <th>No.Telp</th>
          </tr>
        <?php foreach ($resi as $row) : ?>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["noresi"]; ?></td>
            <td><?= $row["tujuanpengiriman"]; ?></td>
            <td><?= $row["lokasi"]; ?></td>
            <td><?= $row["notelp"]; ?></td>
          </tr>
           <?php endforeach; ?>
      </table>
    </div>
<br><br>
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
  <div class="footer1">
  <footer>
    @copyrights 2020 PT.AFA Express All Rights Reserved
  </footer>
</div>
</body>
</html>