<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Universitas 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="general">
        <h1> Daftar Tabel Mahasiswa Universitas 1</h1>
        <a href="add.php">+ TAMBAH MAHASISWA </a>
    </div>
    <br/>
    <br/>
    <form>
        <div class="column">
        <legend> <b>Data Mahasiswa</b> </legend>
                    <table border="1">
                        
                        <tr>
                            <th>Kode Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
        </div>
                        <?php
                            include 'koneksi.php';
                            $universitas = mysqli_query($koneksi,"select * from mahasiswa");
                            while($u = mysqli_fetch_array($universitas)){
                        ?>
                        <tr>
                            
                            <td><?php echo $u['kdm']; ?></td>
                            <td><?php echo $u['nm']; ?></td>
                            <td><?php echo $u['nim']; ?></td>
                            <td><?php echo $u['jur']; ?></td>
                            <td><?php echo $u['alam']; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $u['kdm']; ?>">UPDATE</a>
                                <a href="delete.php?id=<?php echo $u['kdm']; ?>">DELETE</a>
                            </td>
                            
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
    </form>
</body>
</html>