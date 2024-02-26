<?php
$server = "localhost";
$user = "id19146728_root";
$password = "hH4tRJq0%Cea@PIa";
$nama_database = "id19146728_makanan";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if (!$koneksi) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}