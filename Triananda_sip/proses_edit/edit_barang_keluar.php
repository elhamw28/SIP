<?php
include('../config.php');


$Ko = $_POST['kode_out'];
$Noprod = $_POST['kode_produk'];
$Waktu_masuk = $_POST['tgl_keluar'];
$Jml = $_POST['jumlah'];
$Ket = $_POST['keterangan'];


//query insert data

$query = "UPDATE barang_keluar SET kode_produk='$Noprod', tgl_keluar='$Waktu_masuk', jumlah='$Jml', keterangan='$Ket' WHERE kode_out='$Ko'";

//cek inputan

if ($koneksi->query($query)) {
    header("location: ../barang_keluar.php");
} else {
    echo "Error: Data gagal diEdit !!";
}