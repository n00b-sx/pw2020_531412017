<?php
// koneksi ke DB dan pilih DB
$host = "localhost";
$db = "pw2020_531412017";
$user = "root";
$password = "";

$koneksi = mysqli_connect($host, $user, $password, $db);

// Query isi tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

// ubah data ke dalam array
$datas = [];
while ($row = mysqli_fetch_assoc($result)) {
  $datas[] = $row;
}

// tampung ke variabel
$mahasiswa = $datas;
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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
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
        <td><?= $siswa['email']; ?></td>
        <td><?= $siswa['jurusan']; ?></td>
        <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
      </tr>
    <?php
    endforeach;
    ?>
  </table>

</body>

</html>