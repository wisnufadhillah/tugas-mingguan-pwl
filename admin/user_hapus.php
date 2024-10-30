<?php
include "../includes/header.php";
include "../includes/config.php";

$user = $_GET['user_nama'];
$sql = "DELETE FROM user WHERE user_nama = '$user'";
$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo "<div class='alert alert-success'>Data Berhasil Dihapus</div>";
    header("location:halaman_user.php");
} else {
    echo "<div class='alert alert-danger'>Data Gagal Dihapus</div>";
    header("location:halaman_user.php");
}

include "../includes/footer.php";
