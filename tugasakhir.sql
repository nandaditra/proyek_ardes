-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 04:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `email` varchar(255) NOT NULL,
  `id` int(50) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `noTelp` varchar(255) NOT NULL,
  `noWa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`email`, `id`, `instagram`, `noTelp`, `noWa`) VALUES
('Elang@gmail.com', 72, '@Elang01', '081343215432', '081343215432'),
('Nanda@gmail.com', 73, '@Nanda02', '081123456354', '081123456354');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(50) NOT NULL,
  `gambarProfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `gambarProfil`) VALUES
(71, 'Munir.jpg'),
(72, 'User 1.jpeg'),
(73, 'User 2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(40) NOT NULL,
  `nama_file1` varchar(255) NOT NULL,
  `nama_file2` varchar(255) NOT NULL,
  `nama_file3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `nama_file1`, `nama_file2`, `nama_file3`) VALUES
(72, 'Ars 1.jpeg', 'Ars 2.jpeg', 'Ars 3.jpeg'),
(73, 'DI 1.jpeg', 'DI 2.jpeg', 'DI 3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `aktif` int(40) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `id` int(50) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `otoritas` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`aktif`, `domisili`, `email`, `first_name`, `id`, `last_name`, `otoritas`, `pass`, `sex`) VALUES
(0, 'Jakarta', 'fanomulyadi@gmail.com', 'Yonathan Fanuel', 71, 'Mulyadi', 'Pengguna', '202cb962ac59075b964b07152d234b70', 'laki-laki'),
(1, 'Mojokerto', 'Elang@gmail.com', 'Elang Sotya', 72, 'Putra Dumipta', 'Arsitek', '202cb962ac59075b964b07152d234b70', 'laki-laki'),
(1, 'Pekalongan', 'Nanda@gmail.com', 'Nanda Aditya', 73, 'Putra', 'Desain Interior', '202cb962ac59075b964b07152d234b70', 'laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
