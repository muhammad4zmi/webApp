<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$insert = mysqli_query($connect, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat',no_hp='$no_hp' WHERE nim='$nim'");
if ($insert) {
    echo "<script>alert('Data berhasil di update!');
                    document.location='index.php';
        
        </script>";
} else {
    echo "Gagal";
}
