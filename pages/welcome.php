<?php
session_start();
include "../includes/header.php";
include "../includes/config.php";

if (isset($_SESSION["username"])) {
    echo "
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h2>Control Panel</h2>
                <p>Selamat Datang " . $_SESSION['username'] . ". Klik <a href='logout.php'>disini</a> untuk logout.</p>
                <p>Berikut ini adalah menu navigasi anda:</p>
                <p><a href='../admin/halaman_berita.php' class='btn btn-primary'>Halaman Berita</a> | <a href='../admin/halaman_user.php' class='btn btn-secondary'>Halaman User</a></p>
            </div>
        </div>
    </div>";
} else {
    echo "
    <div class='container mt-5'>
        <div class='row'>
            <div class='col-md-12 text-center'>
                <h2>Maaf...</h2>
                <p>Anda tidak berhak mengakses halaman ini. Silahkan <a href='login.php' class='btn btn-info'>Login</a> terlebih dahulu.</p>
            </div>
        </div>
    </div>";
}

include "../includes/footer.php";
