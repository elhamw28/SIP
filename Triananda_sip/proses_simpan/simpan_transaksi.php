<?php
include('../config.php');

$Kocus = $_POST['kode_customer'];
$Tgltransaksi = $_POST['tgl_transaksi'];
$Kopro = $_POST['kode_produk'];
$Harga = $_POST['harga'];
$Jml = $_POST['jumlah'];
$Total = $_POST['total'];

$insert = "INSERT INTO transaksi (kode_customer,tgl_transaksi,kode_produk,harga,jumlah,total) VALUES ('$Kocus','$Tgltransaksi','$Kopro','$Harga','$Jml','$Total')";

if ($koneksi->query($insert)) {
    header("location: ../transaksi.php");
} else {
    echo "Error: Data gagal disimpan !!";
}