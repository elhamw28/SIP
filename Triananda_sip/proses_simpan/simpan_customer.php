<?php
include('../config.php');


$Kocus = $_POST['kode_customer'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$Nomor = $_POST['no_telp'];


$insert = "INSERT INTO customer (kode_customer,nama,alamat,no_telp) VALUES ('$Kocus','$Nama','$Alamat','$Nomor')";

if ($koneksi->query($insert)) {
    header("location: ../customer.php");
} else {
    echo "Error: Data gagal disimpan !!";
}
