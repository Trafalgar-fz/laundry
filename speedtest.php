<?php

include "dashboard/sorting.php";
include './koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM transaksi INNER JOIN pelanggan ON transaksi.transaksi_pelanggan = pelanggan.pelanggan_id");

$data = [];
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data[] = $row;
    }
}

$start_time = microtime(true);
$sortedData = mergeSort($data);
$end_time = microtime(true);

// Calculate the time taken
$time_taken = $end_time - $start_time;

echo "Waktu yang dibutuhkan untuk mengurutkan data: " . number_format($time_taken, 4) . " detik";
?>