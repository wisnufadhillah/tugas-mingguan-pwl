<?php
include "./includes/header.php";
include "./includes/config.php";

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword']; // Missing closing quote

$sql = "select user_nama from user
        where user_nama = '$username'
        and user_password = '$password'";

$hasil = mysqli_query($config, $sql) or exit("Error query : <b>" . $sql . "</b>.");

if (mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_array($hasil);
    $_SESSION['username'] = $data['user_nama'];
    header('Location:welcome.php');
    exit();
} else {
    echo "<div class='alert alert-danger' role='alert'>Maaf, username atau password salah. <a href='login.php'>Klik disini</a> untuk kembali login.</div>";
}

include "./includes/footer.php";
