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
    <h2> Universitas 1 </h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>EDIT DATA MAHASISWA</h3>
    </div>
    <form>
        <fieldset>
    <?php
    include "koneksi.php";
    $kd = $_GET['id'];
    $universitas = mysqli_query($koneksi,"select * from mahasiswa where kdm='$kd'");
    while($u = mysqli_fetch_array($universitas)){
        ?>
        <form method="post" action="change.php" style="color:rgb(00, 31, 35);">
            <table>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>
                        <input type="hidden" name="kdm" value="<?php echo $u['kdm']; ?>">
                        <input type="text" name="nama" value="<?php echo $u['nm']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim" value="<?php echo $u['nim']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jur" value="<?php echo $u['jur']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $u['alam']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                    <td><input type="hidden" name="kdm" value="<?php echo $u['kdm']; ?>">
                    </td>
                </tr>
        </table>
    </form>
    <?php
    
    }
    ?>
    </fieldset>
</form>
</body>
</html>