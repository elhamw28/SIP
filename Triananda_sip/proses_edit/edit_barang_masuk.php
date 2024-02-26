<?php
include('../config.php');


$Ki = $_POST['kode_in'];
$Noprod = $_POST['kode_produk'];
$Waktu_masuk = $_POST['tgl_masuk'];
$Jml = $_POST['jumlah'];
$Ket = $_POST['keterangan'];


//query insert data

$query = "UPDATE barang_masuk SET kode_produk='$Noprod', tgl_masuk='$Waktu_masuk', jumlah='$Jml', keterangan='$Ket' WHERE kode_in='$Ki'";

//cek inputan

if ($koneksi->query($query)) {
    header("location: ../barang_masuk.php");
} else {
    echo "Error: Data gagal diEdit !!";
}