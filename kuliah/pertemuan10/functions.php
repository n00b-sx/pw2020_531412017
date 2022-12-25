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
