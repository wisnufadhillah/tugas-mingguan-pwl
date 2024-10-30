<?php
include "../includes/header.php";
include "../includes/config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];
$sql = "UPDATE user
    set user_password = '$pass',
    user_namalengkap = '$nama',
    user_email = '$email'
    where user_nama = '$user'";

$hasil = mysqli_query($config, $sql);

if ($hasil) {
    echo '<div class="alert alert-success" role="alert">Data berhasil diubah</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Data gagal diubah</div>';
}
?>
<br>
<a href="halaman_user.php" class="btn btn-primary">Kembali ke halaman user</a>

<?php
include "../includes/footer.php";
