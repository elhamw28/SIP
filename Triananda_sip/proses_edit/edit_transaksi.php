<?=
include('../config.php');

$Kode = $_POST['kode_transaksi'];
$Nocus = $_POST['kode_customer'];
$Waktu = $_POST['tgl_transaksi'];
$Nopro = $_POST['kode_produk'];
$Harga = $_POST['harga'];
$Jml = $_POST['jumlah'];
$Tot = $_POST['total'];


//query insert data

$query = "UPDATE transaksi SET kode_customer='$Nocus', tgl_transaksi='$Waktu',kode_produk='$Nopro', harga='$Harga', jumlah='$Jml', total='$Tot' WHERE kode_transaksi='$Kode'";

//cek inputan

if ($koneksi->query($query)) {
    header("location: ../transaksi.php");
} else {
    echo "Error: Data gagal diEdit !!";
}