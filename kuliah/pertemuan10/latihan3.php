<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php
    $i = 1;
    foreach ($mahasiswa as $siswa) :
    ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><img src="img/<?= $siswa['gambar']; ?>" alt="" width="100px"></td>
        <td><?= $siswa['nim']; ?></td>
        <td><?= $siswa['nama']; ?></td>
        <td><a href="detail.php?id=<?= $siswa['id'] ?>">Lebih Detail...</a> | <a href="">Ubah</a> | <a href="">Hapus</a></td>
      </tr>
    <?php
    endforeach;
    ?>
  </table>

</body>

</html>