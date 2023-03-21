<h5>Halaman Tambah Petugas.</h5>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<a href="?url=petugas" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
    <div class="form-group mb-2">
        <label >Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label >Password</label>
        <input type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label >Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label> Level Petugas </label>
        <select name="level" class="form-control" required>
            <option value=""> Pilih Level Petugas </option>
            <option value="admin"> Admin </option>
            <option value="petugas"> Petugas </option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>