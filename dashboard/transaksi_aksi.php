<?php
include '../koneksi.php';
$pelanggan = $_POST['pelanggan'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];
$tgl_hari_ini = date('Y-m-d');
$status = 0;
$pembayaran = 0;
// Hitung total harga
$h = mysqli_query($koneksi,"select harga_per_kilo from harga");
$harga_per_kilo = mysqli_fetch_assoc($h);
$harga = $berat * $harga_per_kilo['harga_per_kilo'];
$total = $harga + $harga; // Perlu diperbaiki jika total dihitung dengan cara yang tidak diinginkan

// Menambahkan transaksi_pembayaran ke dalam pernyataan INSERT INTO
mysqli_query($koneksi,"INSERT INTO transaksi (transaksi_tgl, transaksi_pelanggan, transaksi_harga, transaksi_berat, transaksi_tgl_selesai, transaksi_status, transaksi_pembayaran, transaksi_total) 
VALUES ('$tgl_hari_ini', '$pelanggan', '$harga', '$berat', '$tgl_selesai', '$status', '$pembayaran','$total')");
$id_terakhir = mysqli_insert_id($koneksi);

$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];
for($x=0;$x<count($jenis_pakaian);$x++){
    if($jenis_pakaian[$x] != ""){
        mysqli_query($koneksi,"insert into pakaian values('','$id_terakhir','$jenis_pakaian[$x]','$jumlah_pakaian[$x]')");
    }
}
header("location:transaksi.php");
?>
