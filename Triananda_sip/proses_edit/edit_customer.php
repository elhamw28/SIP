<?php
include('../config.php');


$Kocus = $_POST['kode_customer'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$Nomor = $_POST['no_telp'];


$query = "UPDATE customer SET nama='$Nama',alamat='$Alamat',no_telp='$Nomor' WHERE kode_customer = '$Kocus'";

if ($koneksi->query($query)) {
    header("location: ../customer.php");
} else {
    echo "Error: Data gagal disimpan !!";
}