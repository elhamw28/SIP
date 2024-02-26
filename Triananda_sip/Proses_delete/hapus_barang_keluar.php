<?php
include('../config.php');


$KoOut = $_GET['kode_out'];


$insert = "DELETE FROM barang_keluar WHERE kode_out =$KoOut";


if ($koneksi->query($insert)) {
    header("location: ../barang_keluar.php");
} else {
    echo "Error: Data gagal disimpan !!";
}