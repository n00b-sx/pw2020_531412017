<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">

<head>
  <title>Data Mahasiswa</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container justify-center col-xs-8">
    <h3>Daftar Mahasiswa</h3>
    <a name="tambah" id="tambah" class="btn btn-primary mb-3" href="tambah.php" role="button">Tambah Data Mahasiswa</a>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($mahasiswa as $siswa) :
        ?>
          <tr>
            <td><?= $i++ ?></td>
            <td>
              <a href="detail.php?id=<?= $siswa['id']; ?>">
                <img src="img/<?= $siswa['gambar']; ?>" alt="" width="100px">
              </a>
            </td>
            <td><?= $siswa['nim']; ?></td>
            <td><?= $siswa['nama']; ?></td>
            <td>
              <div class="row">
                <div class="mr-1">
                  <a href="ubah.php" class="badge badge-primary">Ubah</a>
                </div>
                <div class="col-auto">
                  <a href="hapus.php" class="badge badge-danger">Hapus</a>
                </div>
              </div>
            </td>
          </tr>
        <?php
        endforeach;
        ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>