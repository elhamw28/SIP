<?php
include('../config.php');


$Nampro = $_POST['nama_produk'];
$Kategori = $_POST['kategori'];
$Tgl_buat = $_POST['tgl_pembuatan'];
$Tglkadal = $_POST['tgl_kadaluarsa'];
$Hrg = $_POST['harga'];


$insert = "INSERT INTO produk (nama_produk,kategori,tgl_pembuatan,tgl_kadaluarsa,harga) VALUES ('$Nampro','$Kategori','$Tgl_buat','$Tglkadal','$Hrg')";

if ($koneksi->query($insert)) {
    header("location: ../produk.php");
} else {
    echo "Error: Data gagal disimpan !!";
}