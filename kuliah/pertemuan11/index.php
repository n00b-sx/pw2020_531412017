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
    <div class="mt-2">
      <?php
      if (isset($_GET['status'])) {
        if ($_GET['status'] == "berhasil") { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Sukses</h4>
            <p>Data berhasil <?= $_GET['notif']; ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php } else { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Gagal</h4>
            <p>Data gagal <?= $_GET['notif']; ?></p>
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <?php }
      }
      ?>
    </div>
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
                  <a href="ubah.php?id=<?= $siswa['id']; ?>" class="badge badge-primary">Ubah</a>
                </div>
                <div class="col-auto">
                  <!-- Button trigger modal -->
                  <a href="hapus.php" class="badge badge-danger" data-toggle="modal" data-target="#staticBackdrop<?= $siswa['id']; ?>">Hapus</a>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop<?= $siswa['id']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-danger" id="staticBackdropLabel"><i class="fas fa-wind-warning    "></i> Peringatan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah anda yakin ingin menghapus data dari <?= $siswa['nama']; ?> ?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="hapus.php?id=<?= $siswa['id']; ?>" type="button" class="btn btn-danger">Ya</a>
                        </div>
                      </div>
                    </div>
                  </div>
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