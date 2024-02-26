<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makanan Ringan</title>
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



    <!-- Chart Start -->

    <!-- <div class="container-fluid pt-4 px-4">
    <div class="row g-6">
            <div class="col-sm-12 col-xl-4">
                <div class="card p-2 shadow text-left rounded p-4">
                    <div class="align-items-center justify-content-between mb-4">
                
                    </div>
                    <h3 txt-left><b>PT. Indofood</b></h3>
                    <iframe src="Laporan/home.php" width="100% " height="600"></iframe>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
    <div class="row g-6">
            <div class="col-sm-12 col-xl-4">
                <div class="card p-2 shadow text-left rounded p-4">
                    <div class="align-items-center justify-content-between mb-4">
                
                    </div>
                    <h3 txt-left><b>PT. Indofood</b></h3>
                    <iframe src="Laporan/gravik.php" width="100% " height="600"></iframe>
                </div>
            </div>

        </div> -->
    </div>
    <div class="container-fluid pt-4 px-12">
        <div class="row ">
            <div class="col-sm-6">
                <div class="card p-2 shadow bg-white  rounded h-100 p-2">
                    <h6 class="mb-5 text-black text-center">Grafik Laporan Transaksi Penjualan</h6>
                    <iframe src="Laporan/home.php" width="100% " height="600"></iframe>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card p-2 shadow bg-white rounded h-100 p-2">
                    <h6 class="mb-5 text-black text-center">Jumlah Laporan Pemberian Penilaian</h6>
                    <iframe src="Laporan/gravik.php" width="100%" height="600"></iframe>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Chart End -->

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