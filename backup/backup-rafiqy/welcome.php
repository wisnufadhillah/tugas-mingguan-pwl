<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["username"])) { ?>
        <h2 align="center">Control Panel</h2>
        <p align="center">Selamat Datang
            "<?php echo $_SESSION['username']; ?>".Klik <a href="logout.php">
                disini</a> untuk logout.</p>
    <?php
        echo "<p align=center> Berikut ini adalahah menu navigasi anda </p>";
        echo "<p align=center> <a href='admin/halamanberita.php'>Halaman Berita</a>
        | <a href='halamanuser.php'>Halaman User</a></p>";
    } else { ?>
        <h2>Maaf...</h2>
        <p>Anda tidak berhak mengakses halaman ini. Silahkan <a href="
login.php">Login </a> terlebih dahulu.</p>
    <?php } ?>
</body>

</html>