<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-dark navbar-dark sticky-top px-4 py-3">

        <div class="navbar-nav   ml-auto">
            <div class="nav-item ">
                <a href="index.php" class="nav-link ">
                    <span class="d-none d-lg-inline-flex">Home</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="customer.php" class="nav-link ">
                    <span class="d-none d-lg-inline-flex">Customer</span>
                </a>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <span class="d-none d-lg-inline-flex">Master Data</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="transaksi.php" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Transaksi</h6>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="barang_masuk.php" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Barang Masuk</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="nav-item">
                <a href="produk.php" class="nav-link ">
                    <span class="d-none d-lg-inline-flex">Produk</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="review.php" class="nav-link ">
                    <span class="d-none d-lg-inline-flex">Review</span>
                </a>
            </div>

            <div class="nav-item">
                <a href="Laporan.php" class="nav-link ">
                    <span class="d-none d-lg-inline-flex">Laporan</span>

                </a>
            </div>
    </nav>
    <!-- Navbar End -->


    <div class="container-fluid pt-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="card p-3 shadow rounded h-100 p-4">
                    <h4 class="mb-4 text-black">Data Customer</h4>
                    <div class="box-body">
                   <span class="pull-left"> <a href="tambah/tambah_customer.php" class="btn btn-success">Tambah
                        Data</a></span>
                        <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Customer</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telfon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM customer";
                            $query = mysqli_query($koneksi, $sql);

                            while ($produk = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $produk['kode_customer'] . "</td>";
                                echo "<td>" . $produk['nama'] . "</td>";
                                echo "<td>" . $produk['alamat'] . "</td>";
                                echo "<td>" . $produk['no_telp'] . "</td>";
                                echo "<td>";
                            ?>

                            <!-- Edit -->
                            <a class="btn btn-success" data-target="#editMenu" class="badge badge-success"
                                href="Edit/edit_customer.php?id='<?php echo $produk['kode_customer'] ?>'">Edit</a>


                            <a class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus ini? ')"
                                href="Proses_delete/hapus_customer.php?kode_customer='<?php echo $produk['kode_customer'] ?>'">Delete</a>
                            </td>
                            </td>
                            </tr>
                            <?php
                                echo "</td>";

                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>