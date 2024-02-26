<?php
include('../config.php');


$Kopro = $_POST['kode_produk'];
$Nampro = $_POST['nama_produk'];
$Kat = $_POST['kategori'];
$Tglbuat = ['tgl_pembuatan'];
$Tglkadal = ['tgl_kadaluarsa'];
$Har = $_POST['harga'];


$insert = "UPDATE produk SET nama_produk='$Nampro', kategori='$Kat',tgl_pembuatan='$Tglbuat',tgl_kadaluarsa='$Tglkadal', harga='$Har' WHERE kode_produk='$Kopro'";


if ($koneksi->query($insert)) {
    header("location: ../produk.php");
} else {
    echo "Error: Data gagal disimpan !!";
}