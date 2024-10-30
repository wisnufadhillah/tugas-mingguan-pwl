<?php
include "./includes/header.php";
include "./includes/config.php";
?>

<div class="container mt-5">
    <h3 class="text-center">Menambah Data User</h3>
    <form method="POST" action="user_tambah_action.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
    </form>
</div>

<?php include "./includes/footer.php"; ?>