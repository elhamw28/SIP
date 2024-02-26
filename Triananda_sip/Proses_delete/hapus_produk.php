<?php
include('../config.php');


$Koduk = $_GET['kode_produk'];



$insert = "DELETE FROM produk WHERE kode_produk =$Koduk";


if ($koneksi->query($insert)) {
    header("location: ../produk.php");
} else {
    echo "Error: Data gagal disimpan !!";
}