<?php
// koneksi database
include 'koneksi.php';

// menangkapdata yang di kirim dari form
$kd = $_POST['kdm'];
$nama = $_POST['nm'];
$nim = $_POST['nim'];
$j = $_POST['jur'];
$a = $_POST['alam'];

// update data ke database
mysqli_query($koneksi,"update mahasiswa set kdm='$kd',nm='$nama',nim='$nim',jur='$j',alam='$a' where kdm='$kd'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
s
?>