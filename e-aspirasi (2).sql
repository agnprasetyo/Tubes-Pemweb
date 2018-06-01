-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 06:29 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-aspirasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_infrastruktur`
--

CREATE TABLE `bukti_infrastruktur` (
  `id_bukti_infrastruktur` int(11) NOT NULL,
  `id_infrastruktur` int(11) NOT NULL,
  `file_foto` varchar(11) NOT NULL,
  `judul_foto` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_kejahatan`
--

CREATE TABLE `bukti_kejahatan` (
  `id_bukti_kejahatan` int(11) NOT NULL,
  `id_gangguan_kejahatan` int(11) NOT NULL,
  `file_foto` varchar(20) NOT NULL,
  `judul_foto` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pelayanan`
--

CREATE TABLE `bukti_pelayanan` (
  `id_bukti_pelayanan` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `file_foto` varchar(11) NOT NULL,
  `judul_foto` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_infrastruktur`
--

CREATE TABLE `jenis_infrastruktur` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kejahatan`
--

CREATE TABLE `jenis_kejahatan` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_jenis` int(11) NOT NULL,
  `jenis_pelayanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1527048071),
('m130524_201442_init', 1527048109);

-- --------------------------------------------------------

--
-- Table structure for table `review_pelayanan`
--

CREATE TABLE `review_pelayanan` (
  `id_review` int(11) NOT NULL,
  `review` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_infrastruktur`
--

CREATE TABLE `status_infrastruktur` (
  `id_status` int(11) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_pelayanan`
--

CREATE TABLE `tempat_pelayanan` (
  `id_tempat` int(11) NOT NULL,
  `tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_gangguan_keamanan`
--

CREATE TABLE `transaksi_gangguan_keamanan` (
  `id_gangguan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kejahatan` varchar(20) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `longitude` int(20) NOT NULL,
  `latitude` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_infrastruktur`
--

CREATE TABLE `transaksi_infrastruktur` (
  `id_infrastruktur` int(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_infrastruktur` varchar(30) NOT NULL,
  `longitude` int(20) NOT NULL,
  `latitude` int(20) NOT NULL,
  `id_status` int(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `id_wilayah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pelayanan`
--

CREATE TABLE `transaksi_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_tempat` int(20) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL,
  `id_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'FVdyVngxKCnJL1d21dWg15pKGUAvar7l', '$2y$13$pOFaGBwb2kClwrfaq2VptOeTk1LthXSAnl/aort8kq/xJSmvBOv0u', NULL, 'admin@gmail.com', 10, 1527048686, 1527048686),
(2, 'agung', '5TNqcQ1e1SlEOp53lvOmVzeS2_76K__j', '$2y$13$6jJN3QZGYtw.XbmXbwW/L.EtzNh4uwTeia21iNkxt.y9GBuDbtsda', NULL, 'agnprasetyo@gmail.com', 10, 1527048766, 1527048766),
(3, 'user', 'Hcwd93hyzr6O39OsaCWzHqYYps1iKjCD', '$2y$13$hAmOcAf78Q0nndrf6JQH3OXCuVxo/c9c8wmrrQbWL9ENOPuyYvyRK', NULL, 'user@gmail.com', 10, 1527048796, 1527048796);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `provinsi`, `kota`, `kecamatan`, `desa`) VALUES
(1, 'jawa timur', 'kediri', 'pare', 'tulungrejo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_infrastruktur`
--
ALTER TABLE `bukti_infrastruktur`
  ADD PRIMARY KEY (`id_bukti_infrastruktur`),
  ADD KEY `id_infrastruktur` (`id_infrastruktur`);

--
-- Indexes for table `bukti_kejahatan`
--
ALTER TABLE `bukti_kejahatan`
  ADD PRIMARY KEY (`id_bukti_kejahatan`),
  ADD UNIQUE KEY `id_gangguan_kejahatan` (`id_gangguan_kejahatan`);

--
-- Indexes for table `bukti_pelayanan`
--
ALTER TABLE `bukti_pelayanan`
  ADD PRIMARY KEY (`id_bukti_pelayanan`),
  ADD UNIQUE KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `jenis_infrastruktur`
--
ALTER TABLE `jenis_infrastruktur`
  ADD PRIMARY KEY (`id_jenis`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  ADD PRIMARY KEY (`id_jenis`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_jenis`),
  ADD UNIQUE KEY `jenis_pelayanan` (`jenis_pelayanan`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `review_pelayanan`
--
ALTER TABLE `review_pelayanan`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `status_infrastruktur`
--
ALTER TABLE `status_infrastruktur`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tempat_pelayanan`
--
ALTER TABLE `tempat_pelayanan`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `transaksi_gangguan_keamanan`
--
ALTER TABLE `transaksi_gangguan_keamanan`
  ADD PRIMARY KEY (`id_gangguan`),
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `jenis_kejahata` (`jenis_kejahatan`) USING BTREE,
  ADD KEY `id_wilayah` (`id_wilayah`) USING BTREE;

--
-- Indexes for table `transaksi_infrastruktur`
--
ALTER TABLE `transaksi_infrastruktur`
  ADD PRIMARY KEY (`id_infrastruktur`),
  ADD KEY `id_status` (`id_status`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_wilayah` (`id_wilayah`) USING BTREE,
  ADD KEY `jenis_infrastruktur` (`jenis_infrastruktur`) USING BTREE;

--
-- Indexes for table `transaksi_pelayanan`
--
ALTER TABLE `transaksi_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_wilayah` (`id_wilayah`),
  ADD UNIQUE KEY `id_review` (`id_review`),
  ADD UNIQUE KEY `jenis_layanan` (`jenis_layanan`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_infrastruktur`
--
ALTER TABLE `bukti_infrastruktur`
  MODIFY `id_bukti_infrastruktur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bukti_kejahatan`
--
ALTER TABLE `bukti_kejahatan`
  MODIFY `id_bukti_kejahatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bukti_pelayanan`
--
ALTER TABLE `bukti_pelayanan`
  MODIFY `id_bukti_pelayanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_kejahatan`
--
ALTER TABLE `jenis_kejahatan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review_pelayanan`
--
ALTER TABLE `review_pelayanan`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_infrastruktur`
--
ALTER TABLE `status_infrastruktur`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tempat_pelayanan`
--
ALTER TABLE `tempat_pelayanan`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_gangguan_keamanan`
--
ALTER TABLE `transaksi_gangguan_keamanan`
  MODIFY `id_gangguan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_infrastruktur`
--
ALTER TABLE `transaksi_infrastruktur`
  MODIFY `id_infrastruktur` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi_pelayanan`
--
ALTER TABLE `transaksi_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_infrastruktur`
--
ALTER TABLE `bukti_infrastruktur`
  ADD CONSTRAINT `bukti_infrastruktur_ibfk_1` FOREIGN KEY (`id_infrastruktur`) REFERENCES `transaksi_infrastruktur` (`id_infrastruktur`);

--
-- Constraints for table `bukti_kejahatan`
--
ALTER TABLE `bukti_kejahatan`
  ADD CONSTRAINT `bukti_kejahatan_ibfk_1` FOREIGN KEY (`id_gangguan_kejahatan`) REFERENCES `transaksi_gangguan_keamanan` (`id_gangguan`);

--
-- Constraints for table `transaksi_gangguan_keamanan`
--
ALTER TABLE `transaksi_gangguan_keamanan`
  ADD CONSTRAINT `transaksi_gangguan_keamanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaksi_gangguan_keamanan_ibfk_2` FOREIGN KEY (`jenis_kejahatan`) REFERENCES `jenis_kejahatan` (`jenis`),
  ADD CONSTRAINT `transaksi_gangguan_keamanan_ibfk_3` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `transaksi_infrastruktur`
--
ALTER TABLE `transaksi_infrastruktur`
  ADD CONSTRAINT `transaksi_infrastruktur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaksi_infrastruktur_ibfk_4` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`),
  ADD CONSTRAINT `transaksi_infrastruktur_ibfk_5` FOREIGN KEY (`jenis_infrastruktur`) REFERENCES `jenis_infrastruktur` (`jenis`),
  ADD CONSTRAINT `transaksi_infrastruktur_ibfk_6` FOREIGN KEY (`id_status`) REFERENCES `status_infrastruktur` (`id_status`);

--
-- Constraints for table `transaksi_pelayanan`
--
ALTER TABLE `transaksi_pelayanan`
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_3` FOREIGN KEY (`jenis_layanan`) REFERENCES `jenis_pelayanan` (`jenis_pelayanan`),
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_4` FOREIGN KEY (`id_review`) REFERENCES `review_pelayanan` (`id_review`),
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_5` FOREIGN KEY (`id_pelayanan`) REFERENCES `bukti_pelayanan` (`id_pelayanan`),
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_6` FOREIGN KEY (`id_tempat`) REFERENCES `tempat_pelayanan` (`id_tempat`),
  ADD CONSTRAINT `transaksi_pelayanan_ibfk_7` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
