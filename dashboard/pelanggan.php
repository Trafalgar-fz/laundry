<?php include 'header.php'; ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
    <a href="pelanggan_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah</a>
</div>
    <div class="panel">
        <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th width="15%">OPSI</th>
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"select * from pelanggan");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['pelanggan_hp']; ?></td>
                        <td><?php echo $d['pelanggan_alamat']; ?></td>
                        <td>
                            <a href="pelanggan_edit.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="pelanggan_hapus.php?id=<?php echo $d['pelanggan_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
          </div>
        </div>
    </div>

<?php include 'footer.php'; ?>