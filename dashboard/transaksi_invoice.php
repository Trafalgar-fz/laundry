<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI MUTIARA LAUNDRY</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php
        session_start();
        if($_SESSION['status']!="login"){
            header("location: ../login.php?pesan=belum_login");
        }
        include '../koneksi.php';
    ?>

    <div id="section-to-print" class="container">

        <div class="col-md-12">
            <?php
            $id = $_GET['id'];
            $transaksi = mysqli_query($koneksi,"select * from transaksi,pelanggan where transaksi_id='$id' and transaksi_pelanggan=pelanggan_id");
            while($t=mysqli_fetch_array($transaksi)){
                ?>
                <h2 class="text-center">MUTIARA LAUNDRY</h2>
                <div class="d-flex mb-4">
                    <button class="btn btn-success me-2 d-print-none" id="btn-close">Tutup</button>
                    <button class="btn btn-primary d-print-none" id="btn-print">
                        <i class="fas fa-print me-2"></i>
                        <span>Cetak</span>
                    </button>
                </div>
                <table class="table">
                    <tr>
                        <th width="20%">No. Invoice</th>
                        <th>:</th>
                        <td>INVOICE-<?php echo $t['transaksi_id']; ?></td>
                    </tr>
                    <tr>
                        <th width="20%">Tgl. Laundry</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_nama']; ?></td>
                    </tr>
                    <tr>
                        <th>HP</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_hp']; ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <td><?php echo $t['pelanggan_alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>Berat Cucian (Kg)</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_berat']; ?></td>
                    </tr>
                    <tr>
                        <th>Tgl. Selesai</th>
                        <th>:</th>
                        <td><?php echo $t['transaksi_tgl_selesai']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>
                            <?php
                            if($t['transaksi_status']=="0"){
                                echo "<div class='label label-warning'>PROSES</div>";
                            }else if($t['transaksi_status']=="1"){
                                echo "<div class='label label-info'>DI CUCI</div>";
                            }else if($t['transaksi_status']=="2"){
                                echo "<div class='label label-success'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <th>:</th>
                        <td><?php echo "Rp. ".number_format($t['transaksi_harga'])." ,-"; ?></td>
                    </tr>
                </table>
                <br/>
                <h4 class="text-center">Daftar Cucian</h4>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Jenis Pakaian</th>
                        <th width="20%">Jumlah</th>
                    </tr>
                    <?php
                    $id = $t['transaksi_id'];
                    $pakaian = mysqli_query($koneksi,"select * from pakaian where pakaian_transaksi='$id'");

                    while($p=mysqli_fetch_array($pakaian)){
                        ?>
                        <tr>
                            <td><?php echo $p['pakaian_jenis']; ?></td>
                            <td width="5%"><?php echo $p['pakaian_jumlah']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>

                    <br/>
                    <p><center><i>" Professional, Cepat, Dan Terpercaya ".</i></center></p>
                    <?php
                }
                ?>
            </div>
        </div>
    <script>
        const btnPrint = document.getElementById('btn-print')
        const btnClose = document.getElementById('btn-close')
        btnPrint.addEventListener('click', function(){
            window.print()
        })
        btnClose.addEventListener('click', function(){
            window.close()
        })
    </script>
    </body>
</html>