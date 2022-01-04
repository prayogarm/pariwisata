-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 01:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(22) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `level_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `level_user`) VALUES
(2, 'admin', 'admin', 'Rama', 1),
(3, 'user', 'user', 'Prayoga', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_destinasi`
--

CREATE TABLE `tbl_destinasi` (
  `id_destinasi` int(22) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `id_kategori` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_destinasi`
--

INSERT INTO `tbl_destinasi` (`id_destinasi`, `nama_destinasi`, `lokasi`, `id_kategori`, `deskripsi`, `gambar`) VALUES
(2, 'Pantai Air Manis', 'Air Manis, Kec. Padang Sel., Kota Padang, Sumatera Barat', '2', 'Pantai Air Manis atau Pantai Aia Manih dalam bahasa Minang adalah...', 'pamm.jpg'),
(8, 'Sate Danguang-Danguang', 'Jalan Simpang Kinol, Padang', '10', 'Mengunjungi Kota Padang tanpa mencoba ...', 'wisata-kuliner-padang-1-Tempo.jpg'),
(10, 'Bukit Nobita Pesona Kota Padang Dari Ketinggian', 'Kp. Jua Nan XX, Kec. Lubuk Begalung, Kota Padang', '1', 'Bukit Nobita adalah salah satu bukit yang berada di Kelurahan Kampung Jua', 'bukit-nobita.jpg'),
(11, 'Pantai Padang', 'Berok Nipah, Kec. Padang Bar., Kota Padang, Sumatera Barat', '2', 'Isi Deskripsi Pantai', 'pantai_padang.jpg'),
(12, 'Pantai Gajah Padang', 'Jl. Gajah III No.14, Air Tawar Bar., Kec. Padang Utara, Kota Padang', '2', 'Isi deskripsi wisata', 'pntai_gajah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(22) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Wisata Alam'),
(2, 'Pantai'),
(3, 'Agra'),
(4, 'Religius'),
(10, 'Wisata Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(22) NOT NULL,
  `nama_user` varchar(22) DEFAULT NULL,
  `username` varchar(22) DEFAULT NULL,
  `password` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_destinasi`
--
ALTER TABLE `tbl_destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_destinasi`
--
ALTER TABLE `tbl_destinasi`
  MODIFY `id_destinasi` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(22) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
