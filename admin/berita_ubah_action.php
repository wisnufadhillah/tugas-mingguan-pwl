<?php
include "./includes/header.php";
include "./includes/config.php";

$judul = $_POST["judul"];
$isiberita = $_POST["isi"];
$tgl_upload = $_POST["tanggal"];
$usernama = $_POST["user_nama"];

$lokasifile = $_FILES['gambar']['tmp_name'];
$namafile = $_FILES['gambar']['name'];

$uploaddir = "uploads/";
$uploadfile = $uploaddir . basename($namafile);

?>

<div class="container mt-5">
    <?php if (move_uploaded_file($lokasifile, $uploadfile)): ?>
        <div class="alert alert-success" role="alert">
            Nama File: <b><?php echo htmlspecialchars($namafile); ?></b> sukses di upload.
        </div>
        <?php
        $sql = "INSERT INTO berita (berita_judul, berita_isi, berita_gambar, berita_tanggal, user_nama) 
                VALUES ('$judul', '$isiberita', '$uploadfile', '$tgl_upload', '$usernama')";
        mysqli_query($config, $sql);
        header('Location: halamanberita.php');
        ?>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            File gagal disimpan.
        </div>
    <?php endif; ?>
</div>

<?php include "./includes/footer.php"; ?>