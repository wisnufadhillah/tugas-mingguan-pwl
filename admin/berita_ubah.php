<?php
session_start();
include "./includes/header.php";
include "./includes/config.php";
?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<h2>Edit Berita</h2>
<form method="POST" action="berita_ubah_action.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="100">Judul Berita</td>
            <td>:</td>
            <td>
                <input type="hidden" name="berita_id" value="<?php echo $data['berita_id'] ?>">
                <input type="text" name="judul" size="50" value="<?php echo $data['berita_judul'] ?>" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td>:</td>
            <td>
                <textarea name="isi" rows="6" cols="45" class="form-control"><?php echo $data['berita_isi'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal" class="form-control"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" required class="form-control-file"></td>
        </tr>
        <tr>
            <td>Nama User</td>
            <td>:</td>
            <td>
                <input type="text" name="user_nama" size="50" value="<?php echo $_SESSION['username']; ?>" readonly class="form-control">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                <input type="reset" value="reset" class="btn btn-secondary">
            </td>
        </tr>
    </table>
</form>

<?php include "./includes/footer.php"; ?>