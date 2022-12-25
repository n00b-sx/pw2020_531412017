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
  $nama = $data['nama'];
  $nim = $data['nim'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];

  // Membuat query untuk menyimpan data (insert)
  $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan, gambar) VALUES ('$nama','$nim','$email','$jurusan','$gambar')";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


