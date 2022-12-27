<?php
require 'functions.php';
// Cek apakah ada data yang dikirim
if (isset($_GET['id'])) {
  // Memanggil id data yang akan diubah
  $id = $_GET['id'];
  // Memanggil data yang akan diubah
  $siswa = query("SELECT * FROM mahasiswa WHERE id=$id");
} else {
  die();
}

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
    <?php if (isset($_POST['ubah'])) {
      $notif = "diubah";
      if (ubah($_POST) > 0) {
        echo "<script>
        document.location.href = 'index.php?status=berhasil&notif=$notif';
        </script>";
      } else {
        echo "<script>
                document.location.href = 'index.phpstatus=gagal&notif=$notif';
                </script>";
      }
    }
    ?>
    <form action="" method="POST">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaMahasiswa" placeholder="Masukan Nama Mahasiswa" value="<?= $siswa['nama']; ?>" autofocus required>
        <small id="namaMahasiswa" class="form-text text-muted">Nama Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" aria-describedby="nimMahasiswa" placeholder="Masukan NIM" value="<?= $siswa['nim']; ?>" required>
        <small id="nimMahasiswa" class="form-text text-muted">NIM Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailMahasiswa" placeholder="Masukan email" value="<?= $siswa['email']; ?>" required>
        <small id="emailMahasiswa" class="form-text text-muted">Email Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="text" class="form-control" name="jurusan" id="jurusan" aria-describedby="jurusanMahasiswa" placeholder="Masukan Jurusan" value="<?= $siswa['jurusan']; ?>" required>
        <small id="jurusanMahasiswa" class="form-text text-muted">Jurusan Mahasiswa</small>
      </div>
      <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="text" class="form-control" name="gambar" id="gambar" aria-describedby="fotoMahasiswa" placeholder="Masukan Nama Gambar" value="<?= $siswa['gambar']; ?>" required>
        <small id="fotoMahasiswa" class="form-text text-muted">Foto Mahasiswa</small>
      </div>
      <input type="hidden" name="id" value="<?= $siswa['id']; ?>" />
      <div class="row col-xs-4">
        <div class="col-auto mr-1">
          <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
        </div>
        <div class="">
          <a name="kembali" id="kembali" class="btn btn-danger" href="index.php" role="button">Kembali</a>
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