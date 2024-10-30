<?php
$config = mysqli_connect("localhost", "root", "", "dataweb_2926", "3306");
if (!$config) {
    die("Gagal terhubung ke MySQLi : " . mysqli_connect_error());
}
