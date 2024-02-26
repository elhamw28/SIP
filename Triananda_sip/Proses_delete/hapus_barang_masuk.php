<?php
include('../config.php');


$Kodein = $_GET['kode_in'];


$insert = "DELETE FROM barang_masuk WHERE kode_in =$Kodein";


if ($koneksi->query($insert)) {
    header("location: ../barang_masuk.php");
} else {
    echo "Error: Data gagal disimpan !!";
}