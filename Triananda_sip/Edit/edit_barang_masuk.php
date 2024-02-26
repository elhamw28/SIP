<?php
include('../config.php');
$id = $_GET['id'];
$query = "SELECT * FROM barang_masuk WHERE kode_in = $id LIMIT 1";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">




</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            EDIT BARANG MASUK
                        </div>
                        <div class="card-body">

                            <form action="../proses_edit/edit_barang_masuk.php" method="POST">
                                <div class="from-group">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kode Transaksi</label>
                                    <input type="text" name="kode_in" placeholder="Masukan Kode In" class="form-control" value="<?php echo $row['kode_in']; ?>">
                                </div>
                                <div class=" form-group">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kode Produk</label>
                                    <select class="form-control" name="kode_produk">

                                        <?php
                                        $sql =  "SELECT kode_produk,nama_produk FROM produk";
                                        $query = mysqli_query($koneksi, $sql);

                                        while ($data = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <option value="<?php echo $data['kode_produk'] ?>">
                                                <?php echo $data['nama_produk'] ?></option>

                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" class="form-control" name="tgl_masuk" placeholder="Masukan Tanggal Masuk">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" placeholder="Masukan Jumlah">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan">
                                </div>
                                <button type="submit" class="btn btn-success">SIMPAN</button>
                                <button type="reset" class="btn btn-warning">RESET</button>
                                <a href="../barang_masuk.php" class="btn btn-danger">BATAL</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>