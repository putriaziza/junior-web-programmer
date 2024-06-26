-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 08:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `Id_peserta` int(11) NOT NULL,
  `Kd_skema` varchar(255) NOT NULL,
  `Nm_peserta` varchar(100) NOT NULL,
  `Jekel` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(1, '', 'Putri Azizatul Awaliyah', 'Perempuan', 'tegal', '086766356436'),
(2, '', 'Suci Wulandari', 'Perempuan', 'Brebes', '08654827267'),
(3, '', '', '', '', ''),
(4, '', 'Pinaringan Pangestu', 'laki-laki', 'Tegal', '0876756456377');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skema`
--

CREATE TABLE `tb_skema` (
  `Kd_Skema` varchar(255) NOT NULL,
  `Nm_Skema` varchar(200) NOT NULL,
  `Jenis` varchar(100) NOT NULL,
  `Jml_Unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skema`
--

INSERT INTO `tb_skema` (`Kd_Skema`, `Nm_Skema`, `Jenis`, `Jml_Unit`) VALUES
('SKM-001', 'Junior Web Programming', 'Okupasi', '8'),
('SKM-002', 'Digital Marketing', 'Klaster', '8'),
('SKM-003', 'Desain Grafis Muda', 'Okupasi', '5'),
('SKM-004', 'Network Designer', 'Okupasi', '19'),
('SKM-005', 'Operator Komputer Muda', 'Okupasi', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`Id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `Id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
