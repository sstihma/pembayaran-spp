<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    body {
        background-color: #AFCBFF;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <h4 class="text-center">LOGIN SISWA</h4>
                <div class="card">
                    <div class="card-header">
                        <img src="Logo.jpg" width="100%">
                    </div>
                    <div class="card-body">
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda.." required>
                            </div>
                            <div class="form-group mb-2">
                                <label>NIS</label>
                                <input type="number" name="nis" class="form-control" placeholder="Masukan NISN anda.." required>
                            </div>
                            <div class="form-group mb-2 text-center">
                                <button type="submit" class="btn btn-primary"> LOGIN </button>
                            </div>
                            <div class="container mt-2">
                            <a href="index.php?url=logout" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>