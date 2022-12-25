<?php
require 'functions.php';

//Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id=$id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3><?= $mahasiswa['nama']; ?></h3>

  <ul>
    <li>NIM : <?= $mahasiswa['nim']; ?></li>
    <li>Email :<?= $mahasiswa['email']; ?></li>
    <li>Jurusan :<?= $mahasiswa['jurusan']; ?></li>
    <li><img src="img/<?= $mahasiswa['gambar']; ?>" width="100px" /></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
  </ul>
  <br>
  <a href="latihan3.php">Kembali ke halaman sebelumnya</a>
</body>

</html>