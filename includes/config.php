<?php
$config = mysqli_connect("localhost", "root", "", "dataweb_kelompok");
if (!$config) {
    die("Gagal terhubung ke MySQLi : " . mysqli_connect_error());
}
