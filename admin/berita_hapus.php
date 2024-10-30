<?php
include "../includes/header.php";
include "../includes/config.php";

$id_beritanya = $_GET['berita_id'];
$sql = "DELETE FROM berita WHERE berita_id = '$id_beritanya'";
$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "<div class='alert alert-success'>Data Berhasil Dihapus</div>";
} else {
    echo "<div class='alert alert-danger'>Data Gagal Dihapus</div>";
}

echo "<a href='halaman_berita.php' class='btn btn-primary'>Kembali</a>";
include "../includes/footer.php";
