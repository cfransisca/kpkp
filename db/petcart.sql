-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 04:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `email`, `nama`, `alamat`, `telepon`) VALUES
(4, 'aris.itholic@gmail.com', 'Erny Soegiharto', 's', '+6289678618327'),
(5, 'aris@paypoint.id', 'Erny Soegiharto', 's', '+6289678618327'),
(7, 'christianafransisca1827@gmail.com', 'ch', 'ch', '00'),
(8, 'cs@paypoint.id', 'cs', '', '+6289678618327'),
(9, 'qwert@gmail.com', 'ssss', 'ssss', '00000000000'),
(10, 'sasas@gmail.com', 'qqqqqqqqqqqq', 'qqqqqqq', '1111111111'),
(11, 'coba@gmail.com', 'rama', 'coba', '1111111111'),
(12, 'rr@gmail.com', 'rr', 'rr', '12121212'),
(13, 'ramasenduk@gmail.com', 'rama senduk', 'kebraon', '089784728'),
(18, 'coba@gmail.com', 'cobalagi', 'ggggg', '010291039'),
(19, 'cicak@paypoint.id', 'boooooooooo', 'beeeeeeeemmmmm', '000000000000'),
(20, 'cicak@paypoint.id', 'aris', 'kedung', '089'),
(21, 'aris@paypoint.id', 'aris', 'kedung', '089'),
(22, 'aris@paypoint.id', 'aris', 'kedung', '089'),
(23, 'cicak@paypoint.id', 'aris', 'kedung', '089'),
(24, '', 'aris', 'kedung', '089'),
(25, 'aris@paypoint.id', 'aris', 'kedung', '089'),
(26, 'aris@paypoint.idL', 'aris', 'kedung', '089'),
(27, 'sisca_selofa@yahoo.com', 'Christiana', 'GMS', '089678618327'),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', 'qqqqqqqqqqqqqqqq', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL,
  `id_kode` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `panjang` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` double NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_nota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `id_kode`, `id_jenis`, `nama`, `warna`, `harga`, `panjang`, `tinggi`, `berat`, `foto`, `id_nota`) VALUES
(1, 0, 1, 'Mini', 'Abu-abu', 550000, 25, 7, 0.3, 'anggoraAbu.jpg', NULL),
(2, 0, 1, 'Miko', 'Blonde', 750000, 25, 10, 0.5, 'anggoraCklt.jpg', NULL),
(3, 0, 1, 'Kitty', 'Coklat', 1000000, 30, 20, 0.75, 'AnggoraEkorPendek.jpg', NULL),
(4, 0, 1, 'Karamel', 'Putih', 2500000, 45, 30, 1.5, 'anggoraHimalaya.jpg', NULL),
(5, 0, 1, 'Bluck', 'Hitam', 850000, 29, 25, 0.9, 'anggoraHtm.jpg', NULL),
(6, 0, 1, 'Batman', 'Hitam Putih', 850000, 60, 20, 2, 'AnggoraHtmPth.jpg', NULL),
(7, 0, 1, 'Tiger', 'Coklat Tutul', 3000000, 45, 30, 2, 'AnggoraMacan.jpg', NULL),
(8, 0, 1, 'Fatty', 'Coklat Hitam', 5000000, 20, 20, 0.5, 'anggoraNorwegia.jpg', NULL),
(9, 0, 1, 'Katty', 'Putih', 650000, 30, 15, 0.4, 'anggoraPth.jpg', NULL),
(10, 0, 1, 'Blue', 'Putih', 2500000, 20, 12, 0.35, 'anggoraPth2.jpg', NULL),
(11, 0, 1, 'Kiki', 'Abu-abu Putih', 650000, 27, 20, 0.65, 'AnggoraPthAbu.jpg', NULL),
(12, 0, 2, 'Lizzy', 'Abu-abu', 650000, 38, 21, 0.8, 'persiaAbu.jpg', NULL),
(13, 0, 2, 'Kiku', 'Kuning', 700000, 25, 12, 0.45, 'persiaCklt.jpg', NULL),
(14, 0, 2, 'Pesek', 'Abu-abu Putih', 1700000, 38, 28, 0.65, 'persiaExoticShortHair.jpg', NULL),
(15, 0, 3, 'Bantet', 'Kuning', 1000000, 20, 15, 0.3, 'persiaFlatNose.JPG', NULL),
(16, 0, 4, 'Mbah', 'Krem Coklat', 2000000, 40, 18, 0.5, 'PersiaHimalayaPeakNose.jpg', NULL),
(17, 0, 2, 'Snowie', 'Putih', 700000, 37, 24, 0.8, 'persiaPth.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `harga` double NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasa_jenishewan`
--

CREATE TABLE `jasa_jenishewan` (
  `id_jjh` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `id_jenishewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenishewan`
--

CREATE TABLE `jenishewan` (
  `id_jenis` int(11) NOT NULL,
  `ras` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenishewan`
--

INSERT INTO `jenishewan` (`id_jenis`, `ras`, `jenis`) VALUES
(1, 'anggora', 'Kucing'),
(2, 'persia', 'Kucing'),
(3, 'persia flat nose', 'Kucing'),
(4, 'persia himalaya peaknose', 'Kucing'),
(5, 'beagle', 'Anjing'),
(6, 'chow-chow', 'Anjing'),
(7, 'siberian husky', 'Anjing'),
(8, 'golden retriever', 'Anjing'),
(9, 'new zealand white', 'Kelinci'),
(10, 'flemish giant', 'Kelinci'),
(11, 'angora giant', 'Kelinci'),
(12, 'satin', 'Kelinci'),
(13, 'kerdil putih rusia', 'Hamster'),
(14, 'suriah', 'Hamster'),
(15, 'tiongkok', 'Hamster'),
(16, 'eropa', 'Hamster'),
(17, 'burung hantu', 'Burung'),
(18, 'cendrawasih', 'Burung'),
(19, 'pentet', 'Burung'),
(20, 'burung madu', 'Burung'),
(21, 'arwana asia', 'Ikan'),
(22, 'ikan mas koki', 'Ikan'),
(23, 'koi', 'Ikan'),
(24, 'louhan', 'Ikan'),
(25, 'king snake', 'Ular'),
(26, 'milk snake', 'Ular'),
(27, 'blood python', 'Ular'),
(28, 'ball python', 'Ular');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `userid` varchar(150) NOT NULL,
  `namabrg` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `jmlbrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kode`
--

CREATE TABLE `kode` (
  `id_kode` int(100) NOT NULL,
  `kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode`
--

INSERT INTO `kode` (`id_kode`, `kode`) VALUES
(1, 'KC'),
(2, 'KL');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `harga` double NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota_jasa`
--

CREATE TABLE `nota_jasa` (
  `id_notajasa` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota_pakan`
--

CREATE TABLE `nota_pakan` (
  `id_notapakan` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_pakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nota_perlengkapan`
--

CREATE TABLE `nota_perlengkapan` (
  `id_notaperlengkapan` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_perlengkapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pakan`
--

CREATE TABLE `pakan` (
  `id_pakan` int(11) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `harga` double NOT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori_usia` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pakan_jenishewan`
--

CREATE TABLE `pakan_jenishewan` (
  `id_pjh` int(11) NOT NULL,
  `id_pakan` int(11) NOT NULL,
  `id_jenishewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `total_bayar` double NOT NULL,
  `waktu_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id_perlengkapan` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan_jenishewan`
--

CREATE TABLE `perlengkapan_jenishewan` (
  `id_pjh` int(11) NOT NULL,
  `id_perlengkapan` int(11) NOT NULL,
  `id_jenishewan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `jasa_jenishewan`
--
ALTER TABLE `jasa_jenishewan`
  ADD PRIMARY KEY (`id_jjh`),
  ADD KEY `id_jasa` (`id_jasa`),
  ADD KEY `id_jenishewan` (`id_jenishewan`);

--
-- Indexes for table `jenishewan`
--
ALTER TABLE `jenishewan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `nota_jasa`
--
ALTER TABLE `nota_jasa`
  ADD PRIMARY KEY (`id_notajasa`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_jasa` (`id_jasa`);

--
-- Indexes for table `nota_pakan`
--
ALTER TABLE `nota_pakan`
  ADD PRIMARY KEY (`id_notapakan`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_pakan` (`id_pakan`);

--
-- Indexes for table `nota_perlengkapan`
--
ALTER TABLE `nota_perlengkapan`
  ADD PRIMARY KEY (`id_notaperlengkapan`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_perlengkapan` (`id_perlengkapan`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `pakan_jenishewan`
--
ALTER TABLE `pakan_jenishewan`
  ADD PRIMARY KEY (`id_pjh`),
  ADD KEY `id_pakan` (`id_pakan`),
  ADD KEY `id_jenishewan` (`id_jenishewan`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`id_perlengkapan`);

--
-- Indexes for table `perlengkapan_jenishewan`
--
ALTER TABLE `perlengkapan_jenishewan`
  ADD PRIMARY KEY (`id_pjh`),
  ADD KEY `id_perlengkapan` (`id_perlengkapan`),
  ADD KEY `id_jenishewan` (`id_jenishewan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenishewan`
--
ALTER TABLE `jenishewan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `kode`
--
ALTER TABLE `kode`
  MODIFY `id_kode` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pakan`
--
ALTER TABLE `pakan`
  MODIFY `id_pakan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  MODIFY `id_perlengkapan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `hewan_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenishewan` (`id_jenis`);

--
-- Constraints for table `jasa_jenishewan`
--
ALTER TABLE `jasa_jenishewan`
  ADD CONSTRAINT `jasa_jenishewan_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`),
  ADD CONSTRAINT `jasa_jenishewan_ibfk_2` FOREIGN KEY (`id_jenishewan`) REFERENCES `jenishewan` (`id_jenis`);

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `nota_jasa`
--
ALTER TABLE `nota_jasa`
  ADD CONSTRAINT `nota_jasa_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `nota_jasa_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`);

--
-- Constraints for table `nota_pakan`
--
ALTER TABLE `nota_pakan`
  ADD CONSTRAINT `nota_pakan_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `nota_pakan_ibfk_2` FOREIGN KEY (`id_pakan`) REFERENCES `pakan` (`id_pakan`);

--
-- Constraints for table `nota_perlengkapan`
--
ALTER TABLE `nota_perlengkapan`
  ADD CONSTRAINT `nota_perlengkapan_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `nota_perlengkapan_ibfk_2` FOREIGN KEY (`id_perlengkapan`) REFERENCES `perlengkapan` (`id_perlengkapan`);

--
-- Constraints for table `pakan_jenishewan`
--
ALTER TABLE `pakan_jenishewan`
  ADD CONSTRAINT `pakan_jenishewan_ibfk_1` FOREIGN KEY (`id_pakan`) REFERENCES `pakan` (`id_pakan`),
  ADD CONSTRAINT `pakan_jenishewan_ibfk_2` FOREIGN KEY (`id_jenishewan`) REFERENCES `jenishewan` (`id_jenis`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `perlengkapan_jenishewan`
--
ALTER TABLE `perlengkapan_jenishewan`
  ADD CONSTRAINT `perlengkapan_jenishewan_ibfk_1` FOREIGN KEY (`id_perlengkapan`) REFERENCES `perlengkapan` (`id_perlengkapan`),
  ADD CONSTRAINT `perlengkapan_jenishewan_ibfk_2` FOREIGN KEY (`id_jenishewan`) REFERENCES `jenishewan` (`id_jenis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
