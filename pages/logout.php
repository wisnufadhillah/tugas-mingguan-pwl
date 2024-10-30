<?php
include "./includes/header.php";
include "./includes/config.php";

session_start();
session_destroy();

echo '<div class="container"><div class="alert alert-success" role="alert">Anda telah keluar dari sistem.</div><p>&nbsp;</p><p>&nbsp;</p></div>';
header("refresh:3;url=login.php");
exit();

include "./includes/footer.php";
