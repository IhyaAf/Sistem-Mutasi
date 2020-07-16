-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 10:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(3) NOT NULL,
  `unit3` varchar(100) NOT NULL,
  `unit2` varchar(100) NOT NULL,
  `unit1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit3`, `unit2`, `unit1`) VALUES
(1, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Binjai Barat\n'),
(2, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Binjai Kota'),
(3, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Binjai Timur'),
(4, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Gebang'),
(5, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Pangkalan Brandan'),
(6, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Pangkalan Susu'),
(7, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Stabat'),
(8, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai ', 'Unit Layanan Pelanggan (ULP) Tanjung Pura'),
(9, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Brastagi\n'),
(10, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Kabanjahe'),
(11, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Kuala'),
(12, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Pancur Batu'),
(13, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Sidikalang'),
(14, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Bukit Barisan ', 'Unit Layanan Pelanggan (ULP) Tiga Binanga'),
(15, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Deli Tua\n'),
(16, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Galang 1963'),
(17, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Lubuk Pakam'),
(18, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Medan Denai'),
(19, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Perbaungan'),
(20, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Sei Rampah'),
(21, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Lubuk Pakam ', 'Unit Layanan Pelanggan (ULP) Tanjung Morawa '),
(22, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan', 'Unit Layanan Pelanggan (ULP) Johor\n'),
(23, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan', 'Unit Layanan Pelanggan (ULP) Medan Baru'),
(24, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan', 'Unit Layanan Pelanggan (ULP) Medan Kota'),
(25, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan', 'Unit Layanan Pelanggan (ULP) Medan Selatan'),
(26, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan', 'Unit Layanan Pelanggan (ULP) Sunggal ?'),
(27, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan Utara ', 'Unit Layanan Pelanggan (ULP) Belawan\n'),
(28, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan Utara ', 'Unit Layanan Pelanggan (ULP) Helvetia'),
(29, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan Utara ', 'Unit Layanan Pelanggan (ULP) Labuhan'),
(30, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Medan Utara ', 'Unit Layanan Pelanggan (ULP) Medan Timur '),
(31, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Nias', 'Unit Layanan Pelanggan (ULP) Gunung Sitoli\n'),
(32, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Nias', 'Unit Layanan Pelanggan (ULP) Nias Barat'),
(33, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Nias', 'Unit Layanan Pelanggan (ULP) Teluk Dalam '),
(34, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Gunung Tua\n\n\n'),
(35, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Kotanopan'),
(36, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Natal'),
(37, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Penyabungan'),
(38, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Sibuhuan'),
(39, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Sidimpuan Kota'),
(40, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Padangsidimpuan', 'Unit Layanan Pelanggan (ULP) Sipirok '),
(41, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Dolok Masihul\n'),
(42, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Indrapura'),
(43, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Kisaran'),
(44, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Lima Puluh'),
(45, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Pangururan'),
(46, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Parapat'),
(47, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Perdagangan'),
(48, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Siantar Kota'),
(49, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Sidamanik'),
(50, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Tanah Jawa'),
(51, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Tanjung Tiram'),
(52, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Pematang Siantar ', 'Unit Layanan Pelanggan (ULP) Tebing Tinggi '),
(53, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Aek Kanopan\n'),
(54, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Aek Kota Batu'),
(55, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Aek Nabara'),
(56, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Kota Pinang'),
(57, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Labuhan Bilik'),
(58, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Rantau Kota'),
(59, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Simpang Kawat'),
(60, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Rantau Prapat ', 'Unit Layanan Pelanggan (ULP) Tanjung Balai'),
(61, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Balige 2014\n'),
(62, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Barus 2015'),
(63, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Dolok Sanggul 2016'),
(64, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Porsea 2017'),
(65, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Sibolga Kota 2018'),
(66, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Siborong-Borong 2019'),
(67, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pelayanan Pelanggan (UP3) Sibolga ', 'Unit Layanan Pelanggan (ULP) Tarutung'),
(68, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Pengatur Distribusi (UP2D) Sumatera Utara ', 'Unit Pelaksana Pengatur Distribusi (UP2D) Sumatera Utara'),
(69, 'Unit Induk Wilayah (UIW) Sumatera Utara', 'Unit Pelaksana Proyek Ketenagalistrikan (UP2K) Provinsi Sumatera Utara', 'Unit Pelaksana Proyek Ketenagalistrikan (UP2K) Provinsi Sumatera Utara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
