<?php
  // panggil file "database.php" untuk koneksi ke database
  require_once "../config/database.php";

  // ambil tanggal sekarang
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  // sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
  // tampilkan data
  // echo number_format($jumlah_antrian, 0, '', '.');
//   echo str_pad($no_antrian, 3, "0", STR_PAD_LEFT);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Antrian</title>
    <link rel="stylesheet" href="../assets/css/report.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <?php
                $tgl = date('d - m - Y'); 
                $query = mysqli_query($mysqli, "SELECT no_antrian, nama, loket FROM tbl_antrian ORDER BY ID DESC LIMIT 1")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
                while ($data = mysqli_fetch_array($query)) {
                    # code...
                
            ?>
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button
                    class="btnn btn-secondary"> <img src="../assets/img/dp.jpg" height="100" width="100" /></button>
                <span class="name mt-2 fs-1 text-center"><?=$data['nama']?></span> <span class="idd fs-5"><?=$data['loket']?></span>

                <div class="d-flex flex-row justify-content-center align-items-center mt-3">
                    <span class="number fs-1 fw-bold">No.<?=$data['no_antrian']?></span></div>
                <div class="text fw-bold mt-5">Balai Teknologi Air Minum</div>
                <div class="text mt-3 text-center"> <span>Jl. Chairil Anwar I No.1, RT.004/RW.009, Margahayu, Kec.
                        Bekasi Tim., Kota Bks, Jawa Barat 17113</span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                            class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                            class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join"><?=$tgl ?></span> </div>
                <a href="http://172.16.15.10/btam-fo/" class="btn btn-primary mt-3 home"><i class="bi bi-house-door-fill"></i>
                    Kembali</a>
            </div>
        </div>
    </div>
    <?php } ?>
    <script>
        // window.onload = function () {
        //     window.print();
        // }
    </script>
</body>

</html>