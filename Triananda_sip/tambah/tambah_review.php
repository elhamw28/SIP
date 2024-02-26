<?php include("../config.php"); ?>

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
                        <div class="card-header  bg-dark text-white">
                            TAMBAH CUSTOMER
                        </div>
                        <div class="card-body">
                            <form action="../proses_simpan/simpan_review.php" method="POST">
                                <div class="form-group">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kode Customer</label>
                                    <select class="form-control" name="kode_customer">

                                        <?php
                                        $sql = "SELECT kode_customer,nama FROM customer";
                                        $query = mysqli_query($koneksi, $sql);

                                        while ($data = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <option value="<?php echo $data['kode_customer'] ?>">
                                                <?php echo $data['nama'] ?></option>

                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kode Produk</label>
                                    <select class="form-control" name="kode_produk">

                                        <?php
                                        $sql =  "SELECT kode_produk FROM produk";
                                        $query = mysqli_query($koneksi, $sql);

                                        while ($data = mysqli_fetch_assoc($query)) {
                                        ?>
                                            <option value="<?php echo $data['kode_produk'] ?>">
                                                <?php echo $data['kode_produk'] ?></option>

                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Review</label>
                                    <input type="text" class="form-control" name="review" placeholder="Masukan Review">
                                </div>
                                <div class="form-group">
                                    <label>Nilai</label>
                                    <div class="form-group">
                                        <input type="number" max="10" min="1" class="form-control form-control-user" id="nilai" name="nilai" placeholder="Masukkan Nilai">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">SIMPAN</button>
                                <button type="reset" class="btn btn-warning">RESET</button>
                                <a href="../customer.php" class="btn btn-danger">BATAL</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>