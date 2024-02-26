<?php
include('../config.php');


$Koduk = $_POST['kode_produk'];
$TglKeluar = $_POST['tgl_keluar'];
$Jml = $_POST['jumlah'];
$Ket = $_POST['keterangan'];


$insert = "INSERT INTO barang_keluar (kode_produk,tgl_keluar,jumlah,keterangan) VALUES ('$Koduk','$TglKeluar','$Jml','$Ket')";

if ($koneksi->query($insert)) {
    header("location: ../barang_keluar.php");
} else {
    echo "Error: Data gagal disimpan !!";
}
