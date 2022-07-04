-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 02:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cendana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Mesut ', 'profil2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id` int(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id`, `judul`, `detail`, `waktu`, `status`) VALUES
(6, 'Troubleshoot DynaDish site Ngesrep', 'Reset Dynadish, ganti adaptor 48v 0.5A --> sebelumnya 24v 1A', '2022-07-03 20:05:02', '0'),
(100, 'Pergantian Panel Box', 'Lokasi Oceanco Bukit\r\npanelbox ganti yang lebih besar', '2022-07-03 20:09:00', '0'),
(965, 'Mapping Network Pandu Logistic', '- Kabel 10m\r\n- Switch 8 Port\r\n- Pergantian litebeam kantor depan\r\n- Crimping 8 titik kabel', '2022-07-03 19:35:09', '1'),
(967, 'Ganti Groove 26.150', 'Ngesrep user MIC', '2022-07-03 23:03:42', ''),
(968, 'Pengecekan IP CCTV Pandu', 'Pagi jam 9, dengan teknisis CCTV', '2022-07-04 14:44:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ip_publik` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `nama`, `ip_publik`, `detail`, `status`) VALUES
(2, 'LSM', '114.30.81.84', 'd', 'Aktif'),
(21, 'PT ABADI NAN JAYA', '10.10.10.111', 'nothing', 'Aktif'),
(22, 'PT DISANA LAHIR BETAs', '29.20.29.11ss', 'nothing', 'Aktif'),
(273, 'Growell', '114.30.81.85', 's', 'Aktif'),
(507, 'OSA', '114.30.81.62', 'd', 'Aktif'),
(508, 'Mr.Park', '114.30.81.91', 's', 'Aktif'),
(2147483647, 'PT COCA COLA', '10.10.10.22', 'DIcoba Lorem Ipsum', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id` int(64) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `bts` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id`, `nama`, `ip_address`, `detail`, `bts`) VALUES
(4, 'PBE', '10.159.26.220', 'BUKIT ESCE 5120', 'bukit'),
(5, 'Rocket M5', '10.159.26.83', 'tan-2-oce123 5720', 'tnmas'),
(7, 'DynaDish', '10.159.26.209', '4965\r\n', 'wai'),
(77, 'DynaDish', '10.159.26.211', 'PTP-GOR-TM 4975', 'tnmas'),
(94, 'RB433', '10.159.26.11', 's', 'bukit'),
(700, 'PowerBeam M5 400', '10.159.26.13', 'LLOcean 5060', 'tnmas'),
(8197, 'RB433', '10.159.26.160', 'RUDAL-LANGIT 5010', 'bukit'),
(17508, 'Groove', '10.159.26.170', 'HONDA QU 5325', 'bukit'),
(52057, 'RB433', '10.159.26.60', 'pak_jenggot 4930\r\nANAK PANTAI 2437\r\n\r\nOsa', 'tnmas'),
(2147483647, 'PBE Gen2', '10.159.26.15', 'OC LANGIT 5870', 'tnmas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=969;

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
