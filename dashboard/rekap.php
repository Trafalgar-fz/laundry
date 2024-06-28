<?php
include '../koneksi.php';
include 'header.php';
?>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="alert alert-info text-center">
            <h4 style="margin-bottom: 0px">SELAMAT DATANG DI <b>MUTIARA LAUNDRY</b></h4>
        </div>
        <div class="panel-body">
         <div class="panel">
        <div class="panel-heading">
            <h4>Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
               

                <?php
                $data = mysqli_query($koneksi,"select * from pelanggan,transaksi where transaksi_pelanggan=pelanggan_id order by transaksi_id");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                        <td><?php echo $d['transaksi_tgl']; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['transaksi_berat']; ?></td>
                        <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                        <td><?php echo "Rp. ".number_format($d['transaksi_harga']) ." ,-"; ?></td>
                        <td>
                            <?php
                            if($d['transaksi_status']=="0"){
                                echo "<div class='label label-warning'>PROSES</div>";
                            }else if($d['transaksi_status']=="1"){
                                echo "<div class='label label-info'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    
                    
                    <?php
                    
                }
                ?>
            </table>
          </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
