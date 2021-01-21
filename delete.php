<?php
include "koneksi.php";
$nim = $_GET['nim'];
$query = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$nim'");
if ($query) {
    echo "<script>alert('Data berhasil dihapus!');
    document.location='index.php';

</script>";
} else {
    echo "<script>alert('Data gagal dihapus!');
    document.location='index.php';

</script>";
}
