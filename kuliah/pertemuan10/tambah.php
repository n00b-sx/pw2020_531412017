<?php
require 'functions.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Tambah Data Mahasiswa</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container justify-center col-xs-8 mt-5">
    <?php if (isset($_POST['tambah'])) {
      if (tambah($_POST) > 0) {
    ?>
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Sukses</h4>
          <p>Data berhasil ditambahkan</p>
          <p class="mb-0"><a href="latihan3.php">kembali ke halaman daftar mahasiswa ?</a></p>
        </div>
      <?php
      } else {
      ?>
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Gagal</h4>
          <p>Data gagal ditambahkan</p>
        </div>
    <?php
      }
    } ?>
    <form action="" method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaMahasiswa" placeholder="Masukan Nama Mahasiswa" autofocus required>
        <small id="namaMahasiswa" class="form-text text-muted">Nama Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nimMahasiswa" placeholder="Masukan NIM" required>
        <small id="nimMahasiswa" class="form-text text-muted">NIM Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailMahasiswa" placeholder="Masukan email" required>
        <small id="emailMahasiswa" class="form-text text-muted">Email Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" id="jurusan" aria-describedby="jurusanMahasiswa" placeholder="Masukan Jurusan" required>
        <small id="jurusanMahasiswa" class="form-text text-muted">Jurusan Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="text" class="form-control" name="gambar" id="gambar" aria-describedby="fotoMahasiswa" placeholder="Masukan Nama Gambar" required>
        <small id="fotoMahasiswa" class="form-text text-muted">Foto Mahasiswa</small>
      </div>
      <div class="row col-xs-4">
        <div class="col-auto mr-1">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
        <div class="">
          <a name="kembali" id="kembali" class="btn btn-danger" href="latihan3.php" role="button">Kembali</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>