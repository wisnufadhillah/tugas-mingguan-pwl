<?php
include "config.php";
$id_beritanya = $_GET['berita_id'];

$sql = "DELETE FROM berita WHERE berita_id = '$id_beritanya'";
$hasil = mysqli_query($config, $sql);
echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("location:halamanberita.php");
?>