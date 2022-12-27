<?php

function koneksi()
{
  $host = "localhost";
  $db = "pw2020_531412017";
  $user = "root";
  $password = "";

  return mysqli_connect($host, $user, $password, $db);
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  //Cek jika data hanya dibutuhkan hanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  } else {
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
  }

  return $rows;
}

function tambah($data)
{
  //Memanggil fungsi koneksi
  $conn = koneksi();

  // Memecahkan array $data ke dalam variabel
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  // Membuat query untuk menyimpan data (insert)
  $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan, gambar) VALUES ('$nama','$nim','$email','$jurusan','$gambar')";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  //Memanggil fungsi koneksi
  $conn = koneksi();

  // Memecahkan array $data ke dalam variabel
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  // membuat query untuk mengubah data (update)
  $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', email='$email', gambar='$gambar' WHERE id=$id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn) or die(mysqli_error($conn));
}

function hapus($id)
{
  // memanggil fungsi koneksi
  $conn = koneksi();

  // membuat query hapus (delete)
  $query = "DELETE FROM mahasiswa WHERE id=$id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
