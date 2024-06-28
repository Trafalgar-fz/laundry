<?php include 'header.php'; ?>
<div class="panel">
    <div class="panel-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Transaksi Laundry</h1>
            <a href="transaksi_tambah.php"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Transaksi Baru</a>
        </div>
        <div class ="table-responsive">
        <table id="dataTable" class="table table-bordered table-striped text-nowrap">
            <tr>
                <th width="1%">No</th>
                <th>Invoice</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Berat (Kg)</th>
                <th>Tanggal Selesai</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Pembayaran</th>
                <th width="20%" align="center">Opsi</th>
            </tr>
            <?php
            include '../koneksi.php';
            include './sorting.php';

            $query = mysqli_query($koneksi, "SELECT * FROM transaksi INNER JOIN pelanggan ON transaksi.transaksi_pelanggan = pelanggan.pelanggan_id");
            
            $data = [];
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
            }
            $sort = mergeSort($data);

            $no = 1;
            foreach ($sort as $d ) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++; ?>
                    </td>
                    <td>INVOICE-
                        <?php echo $d['transaksi_id']; ?>
                    </td>
                    <td>
                        <?php echo $d['transaksi_tgl']; ?>
                    </td>
                    <td>
                        <?php echo $d['pelanggan_nama']; ?>
                    </td>
                    <td>
                        <?php echo $d['transaksi_berat']; ?>
                    </td>
                    <td>
                        <?php echo $d['transaksi_tgl_selesai']; ?>
                    </td>
                    <td>
                        <?php echo "Rp. " . number_format($d['transaksi_harga']) . " ,-"; ?>
                    </td>
                    
                    <td>
                        <?php
                        if ($d['transaksi_status'] == "0") {
                            echo "<span class='badge badge-warning'>PROSES</span>";
                        } else if ($d['transaksi_status'] == "1") {
                            echo "<span class='badge badge-success'>SELESAI</span>";
                        } 
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($d['transaksi_pembayaran'] == "0") {
                            echo "<span class='badge badge-warning'>BELUM LUNAS</span>";
                        } else if ($d['transaksi_pembayaran'] == "1") {
                            echo "<span class='badge badge-success'>LUNAS</span>";
                        } 
                        ?>
                    </td>
                    <td>
                        <a href="transaksi_invoice.php?id=<?php echo $d['transaksi_id']; ?>" target="_blank"
                            class="btn btn-sm btn-warning">Invoice</a>
                        <a href="transaksi_edit.php?id=<?php echo $d['transaksi_id']; ?>"
                            class="btn btn-sm btn-info">Edit</a>
                        <a href="transaksi_hapus.php?id=<?php echo $d['transaksi_id']; ?>"
                            class="btn btn-sm btn-danger">Batal</a>
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