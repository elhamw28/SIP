<?php
include('../config.php');


$Kopro = $_POST['kode_produk'];
$TglMasuk = $_POST['tgl_masuk'];
$Jml = $_POST['jumlah'];
$Ket = $_POST['keterangan'];


$insert = "INSERT INTO barang_masuk (kode_produk,tgl_masuk,jumlah,keterangan) VALUES ('$Kopro','$TglMasuk','$Jml','$Ket')";

if ($koneksi->query($insert)) {
    header("location: ../barang_masuk.php");
} else {
    echo "Error: Data gagal disimpan !!";
}