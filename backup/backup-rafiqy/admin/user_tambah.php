<!DOCTYPE html>
<html>

<head>
    <title>Halaman Tambah Data</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    .tengah {
        text-align: center;
    }
</style>

<body>
    <h3>Menambah Data User</h3>
    <form method="POST" action="user_tambah_action.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr style="background-color:#f2f2f2;">
                <td>Password</td>
                <td>:</td>
                <td><input type="Password" name="password"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="Email" name="email"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>