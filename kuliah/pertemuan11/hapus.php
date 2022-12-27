<?php
require 'functions.php';

$id = $_GET['id'];

$notif = "dihapus";
if (hapus($id) > 0) {
  echo "<script>
        document.location.href = 'index.php?status=berhasil&notif=$notif';
        </script>";
} else {
  echo "<script>
        document.location.href = 'index.phpstatus=gagal&notif=$notif';
        </script>";
}
