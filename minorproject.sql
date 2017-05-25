-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 08:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minorproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(1) NOT NULL,
  `isi_about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `isi_about`) VALUES
(1, 'Halo! Perkenalkan, Minor Project adalah sebuah Ethnic Warehouse yang berdomisili di Rumbai, Riau, Pekanbaru Indonesia. Kami menjual baju dan aksesoris handmade serba etnik yang berasal dari Indonesia. Pastinya sangat original (100%!) dan kece banget untuk dipakai sebagai fashion terkini.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', 'minor1234'),
(3, 'sarahchair', 'rinalinda');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id_broadcast` int(11) NOT NULL,
  `tgl_broadcast` date NOT NULL,
  `subject_broadcast` varchar(50) NOT NULL,
  `message_broadcast` varchar(300) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast`
--

INSERT INTO `broadcast` (`id_broadcast`, `tgl_broadcast`, `subject_broadcast`, `message_broadcast`, `path`) VALUES
(23, '2017-05-22', 'sd', 'sds', 'assets/file/images/Screenshot (3).png'),
(28, '2017-05-22', 'd', 'sd', 'assets/file/images/Photo from Sarah C M.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul_gallery` varchar(20) NOT NULL,
  `isi_gallery` varchar(180) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul_gallery`, `isi_gallery`, `path`) VALUES
(3, 'A', 'A', 'assets/file/images/g1.jpg'),
(4, 'B', 'B', 'assets/file/images/g2.jpg'),
(5, 'C', 'C', 'assets/file/images/g3.jpg'),
(6, 'D', 'D', 'assets/file/images/g4.jpg'),
(7, 'E', 'E', 'assets/file/images/g5.jpg'),
(8, 'F', 'F', 'assets/file/images/g6.jpg'),
(9, 'G', 'G', 'assets/file/images/g7.jpg'),
(10, 'H', 'H', 'assets/file/images/g8.jpg'),
(11, 'I', 'I', 'assets/file/images/g9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(4) NOT NULL,
  `nama_katalog` varchar(15) NOT NULL,
  `harga_katalog` varchar(9) NOT NULL,
  `deskripsi_katalog` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama_katalog`, `harga_katalog`, `deskripsi_katalog`, `path`) VALUES
(5, 'Tops', 'IDR', 'By lovedmaharani.\r\ninstagram : @lovebymaharani', 'assets/file/images/10.jpg'),
(6, 'Tops', 'IDR 50K -', 'By lovedbymaharani\r\nInstagram : @lovebymaharani', 'assets/file/images/11.jpg'),
(8, 'Trousers', 'IDR 50K -', 'By Bhinka\r\ninstagram : @bhinka.id', 'assets/file/images/9.jpg'),
(9, 'Necklace', 'IDR 50K -', 'By rheamalia\r\ninstagram : @rheamalia', 'assets/file/images/3.jpg'),
(12, 'Necklace', 'IDR 50K -', 'By rheamalia\r\ninstagram : @rheamalia', 'assets/file/images/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(18) NOT NULL,
  `email` varchar(20) NOT NULL,
  `isi` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `tgl`, `nama`, `email`, `isi`) VALUES
(2, '2017-05-08', 'awer', 'sdf', 'asdf'),
(3, '2017-05-08', 'sarahchairinam', 'aoaya', 'jhasbnd'),
(5, '2017-05-12', 'anya', 'amshxav@anya.com', 'wdfghjk'),
(6, '2017-05-20', 'sarah', 'sdf', 'jhgf'),
(7, '2017-05-20', 'nhfjhf', 'jhkuiug', 'ngfh'),
(8, '2017-05-20', 'j', 's@asda.ashd', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id_subscriber` int(11) NOT NULL,
  `nama_subscriber` varchar(30) NOT NULL,
  `email_subscriber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id_subscriber`, `nama_subscriber`, `email_subscriber`) VALUES
(1, 'sarah', 'sarahchairinam@gmail.com'),
(2, 'asdad', 'farizsamanha@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id_broadcast`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id_subscriber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id_broadcast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id_subscriber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
