<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<head>
    <meta charset="utf-8">
    <script src="js/Chart.js"></script>
    <style type="text/css">
    </style>
</head>

<body>

    <?php
    include "../config.php";
    $tanggal = mysqli_query($koneksi, "SELECT DATE_FORMAT(t.tgl_transaksi,'%M %Y') AS `tgl_transaksi`
FROM transaksi t
GROUP BY DATE_FORMAT(t.tgl_transaksi,'%M %Y')
ORDER BY STR_TO_DATE(DATE_FORMAT(t.tgl_transaksi,'%M %Y'),'%Y-%m-01') ASC   ");

    $jumlahbrg       = mysqli_query($koneksi, "SELECT tgl_transaksi,
SUM(jumlah) AS jumlah
FROM transaksi
GROUP BY MONTH(tgl_transaksi)
ORDER BY SUM(jumlah) DESC;");
    ?>

    <div class="container">
        <canvas id="barchart"></canvas>
    </div>
    <!-- <div class=" container" style="width: 450px;">
            <canvas id="barchart"></canvas>
    </div>
    -->


</body>

</html>

<script type="text/javascript">
    var ctx = document.getElementById("barchart").getContext("2d");
    var data = {
        labels: [<?php while ($p = mysqli_fetch_array($tanggal)) {
                        echo '"' . $p['tgl_transaksi'] . '",';
                    } ?>],
        datasets: [{
            label: "jumlah barang terjual Perbulan",
            data: [<?php while ($p = mysqli_fetch_array($jumlahbrg)) {
                        echo '"' . $p['jumlah'] . '",';
                    } ?>],
            backgroundColor: [
                'rgba(245, 204, 154, 0.8)'

            ],
            borderColor: [
                'rgb(255, 99, 132)'

            ],
            borderWidth: 1
        }]
    };
    var myBarChart = new Chart(ctx, {

        type: 'bar',
        data: data,
        options: {
            legend: {
                display: false
            },
            barValueSpacing: 5,
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            }
        }
    });
</script>