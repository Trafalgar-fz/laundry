-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 04:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '$2y$10$nSIqHtzVXm8vEj616INqTOZlxHTf9TbwSc5uqhRl2gyMrdJh18Knq', 19),
('pais akbar', '$2y$10$b/HTENw9LlGYU3ivLyR78udskJdC9g2LfHdXIWMonEoJ4T2zbCsFW', 21),
('pais22', '$2y$10$JEZOP5v1fAGVEzlF51L0e.CDIZrB0mPIGC2MQU8Lk58rSVJPYa3nm', 22),
('admin12', '$2y$10$U5/EVYYKvbjqNT6LhxFUZuP4BlSeSC5rGuQjMqN9uhSyiOkPVkBUC', 23);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`harga_per_kilo`) VALUES
(5000),
(5000),
(5000),
(5000);

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL,
  `pakaian_transaksi` int(11) NOT NULL,
  `pakaian_jenis` varchar(255) NOT NULL,
  `pakaian_jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `pakaian_transaksi`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
(170, 74, 'baju', 10),
(270, 142, 'baju', 10),
(271, 143, 'baju', 10),
(273, 145, 'baju ', 10),
(274, 146, 'baju', 10),
(275, 147, 'baju', 10),
(276, 148, 'baju', 10),
(277, 149, 'baju', 10),
(278, 150, 'baju', 10),
(279, 151, 'baju', 10),
(280, 152, 'baju', 10),
(281, 153, 'baju', 10),
(282, 154, 'baju', 10),
(283, 155, 'Baju', 10),
(284, 156, 'baju', 10),
(285, 157, 'baju', 10),
(286, 158, 'baju', 10),
(287, 159, 'baju', 10),
(288, 160, 'baju', 10),
(289, 161, 'baju', 10),
(290, 162, 'baju', 10),
(291, 163, 'baju', 10),
(292, 164, 'baju', 10),
(293, 165, 'baju', 10),
(294, 166, 'baju', 10),
(295, 167, 'baju', 10),
(296, 168, 'baju', 10),
(297, 169, 'baju', 10),
(298, 170, 'baju', 10),
(299, 171, 'baju', 10),
(300, 172, 'baju', 10),
(301, 173, 'baju', 10),
(302, 174, 'baju', 10),
(303, 175, 'baju', 10),
(304, 176, 'baju', 10),
(305, 177, 'baju', 10),
(307, 179, 'baju', 10),
(308, 180, 'baju', 10),
(309, 181, 'baju', 10),
(310, 182, 'baju', 10),
(311, 183, 'baju', 10),
(312, 184, 'baju', 10),
(313, 185, 'baju', 10),
(314, 186, 'baju', 10),
(315, 187, 'baju', 10),
(316, 188, 'baju', 30),
(318, 190, 'baju', 40),
(320, 191, 'baju', 10),
(323, 192, 'baju', 10),
(324, 178, 'baju', 10),
(325, 144, 'baju', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(255) NOT NULL,
  `pelanggan_hp` varchar(20) NOT NULL,
  `pelanggan_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(30, 'Faiz ', '089869860', 'batara'),
(31, 'yogi', '090080', 'kedaton'),
(32, 'arip', '090486048', 'kedaton'),
(33, 'endi', '090909', 'teluk'),
(34, 'fahri', '090808', 'kandis'),
(35, 'rama', '089776', 'natar'),
(36, 'restu', '0808080', 'sukarame'),
(37, 'fadly', '09088768', 'kedaton'),
(38, 'agus', '0898608', 'kedaton'),
(39, 'muklis', '0807807', 'kedaton'),
(40, 'akbar', '0977676', 'bataranila'),
(41, 'putra', '0889685', 'teluk'),
(42, 'dani', '090976', 'kedaton'),
(43, 'setiawan', '087676', 'kedaton'),
(44, 'marta', '08657678', 'Teluk Betung'),
(45, 'dinata', '0877989', 'teluk'),
(46, 'febri', '0867868', 'kandis'),
(47, 'andika', '0868787', 'kandis'),
(48, 'wijaya', '096678', 'natar'),
(49, 'anggi', '096767', 'sukarame'),
(50, 'zelzian', '089765', 'way halim'),
(51, 'yahya', '09787668', 'labuhan dalam'),
(52, 'laksmana', '0976578', 'fajar baru'),
(53, 'sandi', '090970696', 'untung'),
(54, 'reno', '09909696', 'sinar harapan'),
(55, 'raziz', '090999898', 'kedaton'),
(56, 'aris', '081369032197', 'kedaton');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `status_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `status_pengiriman`) VALUES
(0, 'belum dibayar'),
(1, 'sedang diproses'),
(2, 'barang dikirm');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_pelanggan` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL,
  `transaksi_pembayaran` int(11) NOT NULL,
  `transaksi_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `transaksi_pelanggan`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`, `transaksi_pembayaran`, `transaksi_total`) VALUES
(142, '2024-01-02', 30, 50000, 10, '2024-01-03', 0, 0, 100000),
(143, '2024-01-02', 31, 30000, 6, '2024-01-03', 0, 0, 60000),
(144, '2024-01-02', 32, 20000, 4, '2024-01-03', 1, 1, 40000),
(145, '2024-01-02', 33, 35000, 7, '2024-01-05', 0, 0, 70000),
(146, '2024-01-02', 34, 45000, 9, '2024-01-05', 0, 0, 90000),
(147, '2024-01-02', 35, 25000, 5, '2024-01-05', 0, 0, 50000),
(148, '2024-01-02', 36, 60000, 12, '2024-01-05', 0, 0, 120000),
(149, '2024-01-02', 35, 55000, 11, '2024-01-05', 0, 0, 110000),
(150, '2024-01-02', 37, 65000, 13, '2024-01-05', 0, 0, 130000),
(151, '2024-01-02', 38, 55000, 11, '2024-01-06', 0, 0, 110000),
(152, '2024-01-02', 39, 80000, 16, '2024-01-05', 0, 0, 160000),
(153, '2024-01-02', 40, 75000, 15, '2024-01-05', 0, 0, 150000),
(154, '2024-01-02', 41, 90000, 18, '2024-01-05', 0, 0, 180000),
(155, '2024-01-02', 43, 85000, 17, '2024-01-05', 0, 0, 170000),
(156, '2024-01-02', 44, 110000, 22, '2024-01-05', 0, 0, 220000),
(157, '2024-01-02', 46, 100000, 20, '2024-01-05', 0, 0, 200000),
(158, '2024-01-02', 45, 105000, 21, '2024-01-05', 0, 0, 210000),
(159, '2024-01-02', 47, 140000, 28, '2024-01-05', 0, 0, 280000),
(160, '2024-01-02', 48, 130000, 26, '2024-01-05', 0, 0, 260000),
(161, '2024-01-02', 49, 130000, 26, '2024-01-05', 0, 0, 260000),
(162, '2024-01-02', 55, 140000, 28, '2024-01-05', 0, 0, 280000),
(163, '2024-01-02', 53, 150000, 30, '2024-01-05', 0, 0, 300000),
(164, '2024-01-02', 52, 165000, 33, '2024-01-05', 0, 0, 330000),
(165, '2024-01-02', 51, 160000, 32, '2024-01-05', 0, 0, 320000),
(166, '2024-01-02', 49, 155000, 31, '2024-01-05', 0, 0, 310000),
(167, '2024-01-02', 33, 185000, 37, '2024-01-05', 0, 0, 370000),
(168, '2024-01-02', 43, 180000, 36, '2024-01-05', 0, 0, 360000),
(169, '2024-01-02', 37, 195000, 39, '2024-01-05', 0, 0, 390000),
(170, '2024-01-02', 50, 225000, 45, '2024-01-05', 0, 0, 450000),
(171, '2024-01-02', 56, 210000, 42, '2024-01-05', 0, 0, 420000),
(172, '2024-01-02', 53, 210000, 42, '2024-01-05', 0, 0, 420000),
(173, '2024-01-02', 31, 235000, 47, '2024-01-05', 0, 0, 470000),
(174, '2024-01-02', 35, 230000, 46, '2024-01-05', 0, 0, 460000),
(175, '2024-01-02', 38, 245000, 49, '2024-01-05', 0, 0, 490000),
(176, '2024-01-02', 44, 275000, 55, '2024-01-05', 0, 0, 550000),
(177, '2024-01-02', 52, 260000, 52, '2024-01-05', 0, 0, 520000),
(178, '2024-01-02', 35, 255000, 51, '2024-01-05', 0, 1, 520000),
(179, '2024-01-02', 46, 295000, 59, '2024-01-05', 0, 0, 590000),
(180, '2024-01-02', 40, 265000, 53, '2024-01-05', 0, 0, 530000),
(181, '2024-01-02', 32, 285000, 57, '2024-01-05', 0, 0, 570000),
(182, '2024-01-02', 50, 290000, 58, '2024-01-05', 0, 0, 580000),
(183, '2024-01-02', 40, 325000, 65, '2024-01-05', 0, 0, 650000),
(184, '2024-01-02', 38, 320000, 64, '2024-01-05', 0, 0, 640000),
(185, '2024-01-02', 40, 310000, 62, '2024-01-05', 0, 0, 620000),
(186, '2024-01-02', 48, 340000, 68, '2024-01-05', 0, 0, 680000),
(187, '2024-01-02', 51, 390000, 78, '2024-01-05', 0, 0, 780000),
(188, '2024-01-02', 32, 345000, 69, '2024-01-05', 0, 0, 690000),
(190, '2024-01-02', 53, 360000, 72, '2024-01-05', 0, 0, 720000),
(191, '2024-01-02', 31, 375000, 75, '2024-01-05', 0, 1, 750000),
(192, '2024-01-02', 43, 375000, 75, '2024-01-05', 0, 1, 750000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `pelanggan` (`transaksi_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `pakaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`transaksi_pelanggan`) REFERENCES `pelanggan` (`pelanggan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
