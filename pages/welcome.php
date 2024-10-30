<?php
include "./includes/header.php";
include "./includes/config.php";

if (isset($_SESSION["username"])) {
    echo "<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2 align='center'>Control Panel</h2>
            <p align='center'>Selamat Datang
                " . $_SESSION['username'] . ".Klik <a href='logout.php'>
                    disini</a> untuk logout.</p>
            <p align='center'> Berikut ini adalahah menu navigasi anda </p>
            <p align='center'> <a href='admin/halamanberita.php'>Halaman Berita</a>
                | <a href='halamanuser.php'>Halaman User</a></p>
        </div>
    </div>
    </div>";
} else {
    echo "<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <h2>Maaf...</h2>
            <p>Anda tidak berhak mengakses halaman ini. Silahkan <a href='
login.php'>Login </a> terlebih dahulu.</p>
        </div>
    </div>
    </div>";
}

include "./includes/footer.php";
