<?php
session_start();
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

//cek data
$cek = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim='$nim'");

if (mysqli_num_rows($cek) > 0) {
    $alert = "<div class='alert alert-danger' role='alert'>
   Data sudah ada!
  </div>";
    $_SESSION['alert'] = $alert;
    header("location:index.php");
} else {
    $insert = mysqli_query($connect, "INSERT INTO mahasiswa VALUES('$nim','$nama','$alamat','$no_hp')");
    if ($insert) {
        $alert = "<div class='alert alert-success' role='alert'>
   Data Berhasil disimpan!
  </div>";
        $_SESSION['alert'] = $alert;
        header("location:index.php");
    } else {
        echo "Gagal";
    }
}
