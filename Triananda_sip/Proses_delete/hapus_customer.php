<?php
include('../config.php');


$Nopel = $_GET['kode_customer'];



$query = "DELETE FROM customer WHERE kode_customer = $Nopel";

if ($koneksi->query($query)) {
    header("location: ../customer.php");
} else {
    echo "Error: Data gagal disimpan !!";
}