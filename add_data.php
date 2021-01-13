<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

//cek data
$cek = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim='$nim'");

if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Mahasiswa dengan $nim sudah ada!');
                document.location='index.php';
    
    </script>";
} else {
    $insert = mysqli_query($connect, "INSERT INTO mahasiswa VALUES('$nim','$nama','$alamat','$no_hp')");
    if ($insert) {
        echo "<script>alert('Data berhasil disimpan!');
                    document.location='index.php';
        
        </script>";
    } else {
        echo "Gagal";
    }
}
