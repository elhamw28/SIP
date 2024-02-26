<?php
include('../config.php');

$Kode = $_GET['kode_transaksi'];

$insert = "DELETE FROM transaksi WHERE kode_transaksi =$Kode";

if ($koneksi->query($insert)) {
    header("location: ../transaksi.php");
} else {
    echo "Error: Data gagal disimpan !!";
}