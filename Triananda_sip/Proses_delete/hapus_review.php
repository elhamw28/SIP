<?php
include('../config.php');

$Korev = $_GET['kode_review'];



$insert = "DELETE FROM review WHERE kode_review='$Korev'";


if ($koneksi->query($insert)) {
    header("location: ../review.php");
} else {
    echo "Error: Data gagal disimpan !!";
}
