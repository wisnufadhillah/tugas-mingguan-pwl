<?php
include "../includes/header.php";
include "../includes/config.php";
?>
<style>
.jumbotron {
    background: url('images/nature.jpg') center center fixed no-repeat;
    background-size: cover;
}

.card {
    margin-bottom: 20px;
}

.card-img-top {
    width: 100%;
    height: 200px;
}
</style>

<div class="jumbotron text-center">
    <h1>BERITA AMIKOM</h1>
    <p>Berita Terkini</p>
</div>

<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT berita_id, berita_judul, berita_isi, berita_gambar, user_nama, berita_tanggal  FROM berita ORDER BY berita_id";
        $hasil = mysqli_query($config, $sql);
        while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="admin/<?php echo $data['berita_gambar'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['berita_judul']; ?></h5>
                    <p class="card-text"><?php echo $data['berita_isi']; ?></p>
                    <p class="card-text"><small class="text-muted"> Ditulis oleh <?php echo $data['user_nama']; ?> pada
                            <?php echo $data['berita_tanggal']; ?></small></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
include "../includes/footer.php";