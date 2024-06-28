<?php

// Fungsi untuk mengurutkan transaksi berdasarkan aturan prioritas
function mergeSort($transactions)
{
    if (count($transactions) <= 1) {
        return $transactions;
    }

    $middle = floor(count($transactions) / 2);
    $left = array_slice($transactions, 0, $middle);
    $right = array_slice($transactions, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

// Fungsi untuk menggabungkan dua array secara terurut
function merge($left, $right)
{
    $result = [];
    $leftIndex = 0;
    $rightIndex = 0;

    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        // Membandingkan berdasarkan aturan prioritas
        if (compareTransactions($left[$leftIndex], $right[$rightIndex]) <= 0) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }

    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }

    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}

// Fungsi untuk membandingkan dua transaksi berdasarkan aturan prioritas
function compareTransactions($transaction1, $transaction2)
{
    // Prioritas pertama: Tanggal buat terdahulu dan berat pakaian terkecil
    if ($transaction1['transaksi_tgl'] < $transaction2['transaksi_tgl']) {
        return -1;
    } elseif ($transaction1['transaksi_tgl'] > $transaction2['transaksi_tgl']) {
        return 1;
    } else {
        // Jika tanggal buat sama, bandingkan berat pakaian
        if ($transaction1['transaksi_berat'] < $transaction2['transaksi_berat']) {
            return -1;
        } elseif ($transaction1['transaksi_berat'] > $transaction2['transaksi_berat']) {
            return 1;
        } 
    }
}

?>
