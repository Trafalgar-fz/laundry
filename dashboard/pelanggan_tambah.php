
<?php include 'header.php'; ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Pelanggan</h1>
</div>
<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
            <form method="post" action="pelanggan_aksi.php">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
            </div>
            <div class="form-group">
                <label>HP</label>
                <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp ..">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat ..">
            </div>
            <br/>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

