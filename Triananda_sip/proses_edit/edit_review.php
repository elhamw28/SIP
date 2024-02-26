<?php
include('../config.php');

$Korev = $_POST['kode_review'];
$Kocus = $_POST['kode_customer'];
$Kopro = $_POST['kode_produk'];
$Review = $_POST['review'];
$Nilai = $_POST['nilai'];


$insert = "UPDATE review SET kode_customer='$Kocus',kode_produk='$Kopro',review='$Review',nilai='$Nilai' WHERE kode_review='$Korev'";


if ($koneksi->query($insert)) {
    header("location: ../review.php");
} else {
    echo "Error: Data gagal disimpan !!";
}
