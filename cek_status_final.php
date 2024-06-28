<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mutiara Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
</head>

<body>
<div class="container">
    <?php
    if (isset($_GET['transaksi_id'])) {
        $transaksi_id = $_GET['transaksi_id'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Data Laporan Laundry</h4>
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
                    include 'koneksi.php';
                    $query = "SELECT * FROM transaksi 
                    INNER JOIN pelanggan ON transaksi.transaksi_pelanggan = pelanggan.pelanggan_id 
                    WHERE transaksi.transaksi_id = $transaksi_id";
                    $no = 1;
                    $result = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                            <td><?php echo $d['transaksi_tgl']; ?></td>
                            <td><?php echo $d['pelanggan_nama']; ?></td>
                            <td><?php echo $d['transaksi_berat']; ?></td>
                            <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                            <td><?php echo "Rp. " . number_format($d['transaksi_harga']) . " ,-"; ?></td>
                            <td>
                                <?php
                                if ($d['transaksi_status'] == "0") {
                                    echo "<span class='label label-warning'>PROSES</span>";
                                } else if ($d['transaksi_status'] == "1") {
                                    echo "<span class='label label-success'>SELESAI</span>";
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
    <?php } ?>
</div>
</body>
</html>
