<div class="container mt-5 text-left">
    <h5>Halaman Tambah Data Kelas.</h5>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <a href="?url=kelas" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
    <hr>
    <form method="post" action="?url=proses-tambah-kelas">
        <div class="form-group mb-2">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" required>
        </div>
        <div class="form-group mb-2">
            <label>Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success"> SIMPAN </button>
            <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
        </div>
</div>
</form>
