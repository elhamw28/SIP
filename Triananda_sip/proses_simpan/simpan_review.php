<?php
include('../config.php');

$Nopel = $_POST['kode_customer'];
$Nopro = $_POST['kode_produk'];
$Review = $_POST['review'];
$Nilai = $_POST['nilai'];


$insert = "INSERT INTO review (kode_customer,kode_produk,review,nilai) VALUES ('$Nopel','$Nopro','$Review','$Nilai')";

if ($koneksi->query($insert)) {
    header("location: ../review.php");
} else {
    echo "Error: Data gagal disimpan !!";
}