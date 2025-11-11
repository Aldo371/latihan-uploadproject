<?php


$koneksi = mysqli_connect("localhost","root","mysql","universitas");
echo "koneksi berhasil";

//cek koneksi
if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>