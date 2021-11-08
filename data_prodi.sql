-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 10:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_prodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `angkatan`) VALUES
(1, 'sistem informasi', '2020'),
(2, 'informatika', '2020'),
(3, 'Teknologi Informasi', '2020'),
(4, 'Psikologi', '2021'),
(5, 'olahraga', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `username`, `password`, `id_jurusan`) VALUES
(1, 'Wildan Rizky Ramadlan', '2000-12-02', 'L', 'Lamongan', 'wildanrr', '1234567', 1),
(2, 'Blis', '2003-06-21', 'L', 'Padra', 'blisss', '12345', 1),
(3, 'Wazo Arsyuu', '2002-12-07', 'L', 'Sechio Meido', 'Arsuuwazo', '123', 1),
(4, 'Sanasira Hanakari', '2003-04-11', 'P', 'reiss', 'sanasss', '12345', 1),
(5, 'Ashiba Arsyuu', '2001-05-16', 'L', 'Sechio Meido', 'arsyuuass', '1234', 2),
(6, 'Narendra Betha Baskara Al Arof', '2001-10-10', 'L', 'Lamongan', 'chickengas', '123', 3),
(7, 'Lavietech', '2001-07-03', 'L', 'Munda Garaka', 'lav__tech', '12345', 3),
(8, 'Muhammad Iqbal Dandi', '2000-12-11', 'L', 'Lamongan', 'jindandi', '123', 4),
(9, 'Sin Renaray', '2002-03-12', 'P', 'massryas', 'sinrerr', '123', 4),
(10, 'Ashkhary Tekano', '2001-09-12', 'L', 'kuroitown', 'tekano', '123', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
