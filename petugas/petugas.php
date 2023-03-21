<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>alert('Maaf Anda Belum Login);window.location.assign('../index.php');</script>";
}
if ($_SESSION['level'] != 'petugas') {
    echo "<script>alert('Maaf Anda Bukan Sesi Admin');window.location.assign('../index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    body {
        background-color: #ABDEE6;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="container mt-5 text-end">
            <a href="petugas.php?url=logout" class="btn btn-primary"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </div>
        <div class="container mt-5 text-center">
            <h3>Aplikasi Pembayaran SPP SMKN 1 CIJATI.</h3>
            <div class="alert alert-info text-black">
                Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Pada Aplikasi Pembayaran SPP.
            </div>
            <a href="petugas.php" class="btn btn-primary"> Petugas</a>
            <a href="petugas.php?url=pembayaran" class="btn btn-primary"> Pembayaran</a>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
                    echo "Aplikasi Pembayaran SPP Digunakan Untuk Mempermudah 
                Dalam Mencatat Pembayaran Siswa / Siswi Disekolah.";
                } else {
                    include $file . '.php';
                }
                ?>

            </div>
        </div>

    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>