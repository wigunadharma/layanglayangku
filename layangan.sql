-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2022 at 02:41 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventl`
--

CREATE TABLE `eventl` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `hadiah` varchar(255) NOT NULL,
  `pendaftaran` varchar(255) NOT NULL,
  `tgl_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventl`
--

INSERT INTO `eventl` (`id_event`, `nama_event`, `lokasi`, `hadiah`, `pendaftaran`, `tgl_event`) VALUES
(1, 'Galih Mina Team Kite Fest 2022', 'Pantai Padang Galak', 'Rp.3.000.000', '25-28 Agustus 2022', '4 September 2022');

-- --------------------------------------------------------

--
-- Table structure for table `layang`
--

CREATE TABLE `layang` (
  `id_layangan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layang`
--

INSERT INTO `layang` (`id_layangan`, `nama`, `kategori`, `ukuran`, `deskripsi`) VALUES
(12, 'Wikarna', 'Bebean', '420cm', 'layang danta ne bos'),
(13, 'Adihara', 'Bebean', '450cm', 'adiharafhfhfhfh'),
(14, 'GEMINI', 'Pecukan', '370 cm', 'Layangan pecukan dengan nama â€œGEMINIâ€ ini menggambarkan layangan yang manis diatas angin dengan warna putih yang bersih dan sedikit bumbu kemanisan didalamnnya\r\n'),
(15, 'TOMAS', 'Pecukan', '450cm', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore quos sed magnam, enim quaerat ipsa!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem '),
(16, 'NUR', 'Pecukan', '350cm', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem quidem enim beatae eum quibusdam? Officia itaque placeat nostrum ipsam dicta nihil ullam iure, ab at quod eligendi recusandae natus alias?'),
(17, 'SANG TORA', 'Janggan', '600 cm', 'Sangtora......'),
(18, 'BLACK MAMBA', 'Celepuk', '300cm', 'black mambaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin'),
(2, 'petugasl', '2', 'petugas', 'petugas', 'petugas'),
(4, 'adi', 'wiguna', 'adiwiguna', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventl`
--
ALTER TABLE `eventl`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `layang`
--
ALTER TABLE `layang`
  ADD PRIMARY KEY (`id_layangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventl`
--
ALTER TABLE `eventl`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layang`
--
ALTER TABLE `layang`
  MODIFY `id_layangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
