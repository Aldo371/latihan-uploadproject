<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Universitas 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="general">
    <h2> CRUD MAHASISWA UNIVERSITAS 1</h2>
    <h3> TAMBAH MAHASISWA </h3>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
</div>
    <form method="post" action="add_aksi.php" style="color:rgb(00, 31, 35);">
        <table>
            <tr>
                <td> Kode Mahasiswa</td>
                <td><input type="text" name="kdm"></td>
            </tr>
            <tr>
                <td> Nama Mahasiswa</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td> NIM </td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td> Jurusan </td>
                <td><input type="text" name="jur"></td>
            </tr>
            <tr>
                <td> Alamat </td>
                <td><input type="text" name="alam"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
    </form>
</body>
</html>