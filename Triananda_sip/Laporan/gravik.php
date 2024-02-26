<?php

include("../config.php");

//Inisialisasi nilai variabel awal
$nama_jur = "";
$total = null;

//Query SQL
$sql = "SELECT nama_produk FROM produk GROUP BY kode_produk";
$hasil = mysqli_query($koneksi, $sql);

while ($data = mysqli_fetch_array($hasil)) {
    //Mengambil nilai nama_jurusan dari database
    $jur = $data['nama_produk'];
    $nama_jur .= "'$jur'" . ", ";
}

//Query SQL
$sql1 = "SELECT nilai FROM review GROUP BY kode_review";
$hasil1 = mysqli_query($koneksi, $sql1);

while ($data = mysqli_fetch_array($hasil1)) {
    //Mengambil nilai jumlah_siswa dari database
    $jumlah = $data['nilai'];
    $total .= "'$jumlah'" . ", ";
}

?>

<!doctype html>
<html lang="en">

<head>


</head>

<body>

    <div class="chartCard">
        <div class="chartBox">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script type="text/javascript">
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<?php echo $nama_jur; ?>],
                datasets: [{
                    label: 'Penilaian Customer',
                    data: [<?php echo $total; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>


</body>

</html>