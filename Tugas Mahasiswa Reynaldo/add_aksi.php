<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kd = $_POST['kdm'];
$nama = $_POST['nm'];
$nim = $_POST['nim'];
$j = $_POST['jur'];
$a = $_POST['alam'];


//menginput data ke database
mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$kd', '$nama', '$nim', '$j', '$a')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>