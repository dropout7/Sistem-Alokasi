-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 12:03 PM
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
-- Database: `sislok`
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
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Mesut ', '');

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
(968, 'Pengecekan IP CCTV Pandu', 'Pagi jam 9, dengan teknisis CCTV', '2022-07-04 14:44:00', ''),
(969, 'Cek CCTV dan Fingerprint Pandu', 'fingerprint tidak terdetek, cctv tidak bisa diremote', '2022-07-05 15:13:54', '');

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
(70, 'Home Ozakiel', '113.30.11.44', 'Alamat : Jl. Bledugkuwu 88\r\nSSID : ozakielzz\r\nFrequency : 4990\r\nLainnya : Putus', 'OFF'),
(75, 'PT GROWTH YOUTH', '113.40.90.2', 'Alamat : Jl. Kepintaran Wes ewes\r\nSSID : growth angkasa\r\nFrequency :  5120\r\nLainnya : -', 'Aktif'),
(89144, 'PT LTM', '113.30.30.10', 'Alamat : Jl. SimpangSiyur No.101\r\nSSID : ltm-oke\r\nFrequency : 5910\r\nLainnya : -', 'Aktif'),
(2147483647, 'PT. Sea Wood Northwest', '113.40.20.22', 'Alamat : Jl. Ibu Kita Apa\r\nSSID : seawoodss\r\nFrequency : 5880\r\nLainnya : -', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `id` int(64) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `bts` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`id`, `nama`, `ip_address`, `detail`, `bts`) VALUES
(2, 'DynaDIsh', '10.100.20.10', 'SSID : wai-20\r\nFrequency : 5010\r\nLainnya : backbone', 'GOR Site'),
(5, 'Groove', '10.100.20.25', 'SSID : wai-25\r\nFrequency : 5880\r\nLainnya : ', 'Tanah Mas Site'),
(2147483647, 'Rocket M5', '10.100.20.90', 'SSID : rocket-90\r\nFrequency : 4920\r\nLainnya : backbone', 'Bukit Site');

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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=970;

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
