-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:42 AM
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
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `NIP` varchar(12) NOT NULL,
  `NAMA_PEGAWAI` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(100) DEFAULT NULL,
  `UNIT1` varchar(50) DEFAULT NULL,
  `UNIT2` varchar(50) DEFAULT NULL,
  `UNIT3` varchar(50) DEFAULT NULL,
  `Grade` varchar(50) DEFAULT NULL,
  `Jenjang_Jabatan` varchar(100) DEFAULT NULL,
  `Tempat_Lahir` varchar(30) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Tanggal_Pegawai_Tetap` date DEFAULT NULL,
  `Tanggal_UPK` date DEFAULT NULL,
  `Tanggal_Lulus_SE_1` date DEFAULT NULL,
  `Tanggal_Lulus_EE 3` date DEFAULT NULL,
  `Tanggal_Grade_Terakhir` date DEFAULT NULL,
  `Tanggal_Mutasi` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Status_Pernikahan` varchar(30) DEFAULT NULL,
  `Jumlah_Anak` int(3) DEFAULT NULL,
  `Pernikahan_Antar_Pegawai` varchar(30) DEFAULT NULL,
  `Religious_Denomination_Key` varchar(30) DEFAULT NULL,
  `Alamat` varchar(80) DEFAULT NULL,
  `Telephone_no` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Pendidikan_Terakhir` varchar(40) DEFAULT NULL,
  `Asesmen_SPV_Dasar` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MULP` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_KSA` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_JAR` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_REN` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_KONS` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_TEL` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MB_SAR_PP` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_SPV_A_UI` int(11) DEFAULT NULL,
  `Nilai_Fit_Proper_MD` int(11) DEFAULT NULL,
  `Nilai_UPK` int(11) DEFAULT NULL,
  `Sertifikasi_Keahlian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`NIP`, `NAMA_PEGAWAI`, `JABATAN`, `UNIT1`, `UNIT2`, `UNIT3`, `Grade`, `Jenjang_Jabatan`, `Tempat_Lahir`, `Tanggal_Lahir`, `Tanggal_Pegawai_Tetap`, `Tanggal_UPK`, `Tanggal_Lulus_SE_1`, `Tanggal_Lulus_EE 3`, `Tanggal_Grade_Terakhir`, `Tanggal_Mutasi`, `Gender`, `Status_Pernikahan`, `Jumlah_Anak`, `Pernikahan_Antar_Pegawai`, `Religious_Denomination_Key`, `Alamat`, `Telephone_no`, `Email`, `Pendidikan_Terakhir`, `Asesmen_SPV_Dasar`, `Nilai_Fit_Proper_MULP`, `Nilai_Fit_Proper_MB_KSA`, `Nilai_Fit_Proper_MB_JAR`, `Nilai_Fit_Proper_MB_REN`, `Nilai_Fit_Proper_MB_KONS`, `Nilai_Fit_Proper_MB_TEL`, `Nilai_Fit_Proper_MB_SAR_PP`, `Nilai_Fit_Proper_SPV_A_UI`, `Nilai_Fit_Proper_MD`, `Nilai_UPK`, `Sertifikasi_Keahlian`) VALUES
('6488055A', 'FULAN 1', 'ASSISTANT OFFICER ADMINISTRASI PELANGGAN', 'SEKSI PELAYANAN PELANGGAN', 'BAGIAN PEMASARAN DAN PELAYANAN PELANGGAN', 'UNIT PELAKSANA PELAYANAN PELANGGAN MEDAN', '', 'Fungsional V', 'KUTAMBARU', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Female', 'Kawin', 3, '', 'Islamic', 'xxx1', '81264230364', 'SARUNDUNG.GINTING@PLN.CO.ID', 'STM', 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 71, 'POTENSIAL'),
('7802043H2', 'FULAN 2', 'MANAJER UNIT PELAKSANA PELAYANAN PELANGGAN MEDAN', '', '', 'UNIT PELAKSANA PELAYANAN PELANGGAN MEDAN', '', 'Manajemen Dasar', 'MATARAM', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Male', 'Kawin', 2, '', 'Islamic', 'xxx2', '81339916878', 'AGUS.TS@PLN.CO.ID', 'Program S2 Teknik', 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 76, 'OPTIMAL'),
('8508035A', 'FULAN 3', 'SUPERVISOR PELAYANAN PELANGGAN', '', 'BAGIAN PEMASARAN DAN PELAYANAN PELANGGAN', 'UNIT PELAKSANA PELAYANAN PELANGGAN MEDAN', '', 'Supervisori Dasar', 'MEDAN', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Male', 'Kawin', 3, '9717019SBY', 'Islamic', 'xxx3', '81362212211', 'ALFHARIZ@PLN.CO.ID', 'S1 Teknik', 78, 85, 0, 0, 0, 0, 0, 0, 0, 0, 77, 'SANGAT POTENSIAL'),
('8810745Z', 'FULAN 4', 'MANAGER BAGIAN PEMASARAN DAN PELAYANANPELANGGAN', '', '', 'UNIT PELAKSANA PELAYANAN PELANGGAN MEDAN', '', 'Supervisori Atas', 'BANDUNG', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Male', 'Kawin', 2, '', 'Islamic', 'xxx4', '85222233179', 'CECEP.SATRIA@PLN.CO.ID', 'S1 Non Teknik', 85, 87, 87, 0, 0, 0, 0, 88, 0, 82, 78, 'SANGAT POTENSIAL'),
('NIP', 'NAMA_PEGAWAI', 'JABATAN', 'UNIT1', 'UNIT2', 'UNIT3', 'Grade', 'Jenjang_Jabatan', 'Tempat_Lahir', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Gender', 'Status_Pernikahan', 0, 'Pernikahan_Antar_Pegawai', 'Religious_Denomination_Key', 'Alamat', 'Telephone_no', 'Email', 'Pendidikan_Terakhir', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Talenta_Sem_1_2016');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan`) VALUES
('ANALYST ACCOUNT EXECUTIVE'),
('ANALYST ANGGARAN'),
('ANALYST CORPORATE SOCIAL RESPONSIBILITY (CSR) DAN PROGRAM KEMITRAAN DAN BINA LINGKUNGAN (PKBL)'),
('ANALYST HUBUNGAN INDUSTRIAL DAN PENGAWASAN TENAGA KERJA'),
('ANALYST INTERAKSI ANTAR UNIT PELAKSANA'),
('ANALYST KELAYAKAN INVESTASI KELISTRIKAN'),
('ANALYST KEUANGAN'),
('ANALYST KINERJA'),
('ANALYST KINERJA DAN PELAPORAN MANAJEMEN'),
('ANALYST KINERJA DAN SISTEM MANAJEMEN'),
('ANALYST KINERJA RAYON'),
('ANALYST PELAKSANA PENGADAAN'),
('ANALYST PERENCANA PENGADAAN'),
('ANALYST PERKIRAAN PENJUALAN ENERGI DAN PENDAPATAN'),
('ANALYST TINGKAT MUTU PELAYANAN'),
('ASSISTANT ANALYST ACCOUNT EXECUTIVE'),
('ASSISTANT ANALYST AKUNTANSI'),
('ASSISTANT ANALYST ANGGARAN'),
('ASSISTANT ANALYST CORPORATE SOCIAL RESPONSIBILITY (CSR) DAN PROGRAM KEMITRAAN DAN BINA LINGKUNGAN (P'),
('ASSISTANT ANALYST EVALUASI HARGA JUAL LISTRIK'),
('ASSISTANT ANALYST KELAYAKAN INVESTASI KELISTRIKAN'),
('ASSISTANT ANALYST KEUANGAN DAN AKUNTANSI'),
('ASSISTANT ANALYST KINERJA DAN PELAPORAN MANAJEMEN'),
('ASSISTANT ANALYST KINERJA DAN PERENCANAAN TENAGA KERJA'),
('ASSISTANT ANALYST KOMUNIKASI DAN HUBUNGAN MASYARAKAT'),
('ASSISTANT ANALYST LAYANAN PRIORITAS'),
('ASSISTANT ANALYST MANAJEMEN STAKEHOLDER'),
('ASSISTANT ANALYST MAPPING DATA JARINGAN DAN PELANGGAN'),
('ASSISTANT ANALYST PAJAK'),
('ASSISTANT ANALYST PELAKSANA PENGADAAN'),
('ASSISTANT ANALYST PELAYANAN PELANGGAN'),
('ASSISTANT ANALYST PEMASARAN DAN PELAYANAN PELANGGAN'),
('ASSISTANT ANALYST PENGELOLAAN PEMBANGKIT INDEPENDENT POWER PRODUCER DAN EXCESS POWER'),
('ASSISTANT ANALYST PENGEMBANGAN SDM'),
('ASSISTANT ANALYST PENGENDALIAN LOGISTIK'),
('ASSISTANT ANALYST PERENCANA PENGADAAN'),
('ASSISTANT ANALYST PERENCANAAN LISTRIK PEDESAAN'),
('ASSISTANT ANALYST PERENCANAAN PENGUSAHAAN DAN PROYEKSI KEUANGAN'),
('ASSISTANT ANALYST PERENCANAAN SIPIL SARANA KANTOR'),
('ASSISTANT ANALYST REMUNERASI DAN BENEFIT'),
('ASSISTANT ANALYST SDM DAN ADMINISTRASI'),
('ASSISTANT ANALYST TINGKAT MUTU PELAYANAN'),
('ASSISTANT ENGINEER ANALISA DATA EVALUASI PENYALURAN ENERGI'),
('ASSISTANT ENGINEER EFISIENSI JARINGAN DISTRIBUSI'),
('ASSISTANT ENGINEER KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN'),
('ASSISTANT ENGINEER KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN (K3L)'),
('ASSISTANT ENGINEER KONSTRUKSI DISTRIBUSI'),
('ASSISTANT ENGINEER METER ELEKTRONIK'),
('ASSISTANT ENGINEER OTOMATISASI OPERASI JARINGAN DISTRIBUSI'),
('ASSISTANT ENGINEER PEMELIHARAAN DISTRIBUSI'),
('ASSISTANT ENGINEER PEMELIHARAAN METER TRANSAKSI'),
('ASSISTANT ENGINEER PENERTIBAN PEMAKAIAN TENAGA LISTRIK'),
('ASSISTANT ENGINEER PENGENDALIAN APP'),
('ASSISTANT ENGINEER PENGENDALIAN KONSTRUKSI'),
('ASSISTANT ENGINEER PENGENDALIAN OPERASI DAN PEMELIHARAAN'),
('ASSISTANT ENGINEER PENGENDALIAN PENERTIBAN PEMAKAIAN TENAGA LISTRIK'),
('ASSISTANT ENGINEER PENGENDALIAN SUSUT DAN PJU'),
('ASSISTANT ENGINEER PENYAMBUNGAN DAN PEMUTUSAN'),
('ASSISTANT ENGINEER PERENCANAAN DAN EVALUASI KONSTRUKSI DISTRIBUSI'),
('ASSISTANT ENGINEER PERENCANAAN DAN EVALUASI SISTEM DISTRIBUSI'),
('ASSISTANT ENGINEER PREPARATOR PDKB'),
('ASSISTANT ENGINEER SCADA DAN TELEKOMUNIKASI'),
('ASSISTANT ENGINEER SISTEM KELISTRIKAN'),
('ASSISTANT OFFICER ADMINISTRASI'),
('ASSISTANT OFFICER ADMINISTRASI PELANGGAN'),
('ASSISTANT OFFICER ADMINISTRASI PENGADAAN'),
('ASSISTANT OFFICER ADMINISTRASI TEKNIK'),
('ASSISTANT OFFICER LOGISTIK'),
('ASSISTANT OFFICER PEMBACAAN METER DAN METER ELEKTRONIK'),
('ASSISTANT OFFICER PEMBACAAN METER DAN PEMBUATAN REKENING'),
('ASSISTANT OFFICER PEMBAYARAN'),
('ASSISTANT OFFICER PENERTIBAN PEMAKAIAN TENAGA LISTRIK'),
('ASSISTANT OFFICER PENGENDALIAN PIUTANG'),
('ASSISTANT OFFICER PENGOLAHAN DATA INDUK SALDO DAN SALDO PIUTANG'),
('ASSISTANT OFFICER REMUNERASI DAN BENEFIT'),
('ASSISTANT OFFICER SARANA DAN FASILITAS'),
('ASSISTANT OFFICER SDM DAN ADMINISTRASI'),
('ASSISTANT OFFICER SEKRETARIAT'),
('ASSISTANT OFFICER SISTEM CATER'),
('ASSISTANT OPERATOR OPERASI DISTRIBUSI'),
('ASSISTANT OPERATOR PENGATURAN OPERASI'),
('ASSISTANT TECHNICIAN KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN (K3L)'),
('ASSISTANT TECHNICIAN PEMELIHARAAN APP'),
('ASSISTANT TECHNICIAN PEMELIHARAAN DISTRIBUSI'),
('ASSISTANT TECHNICIAN PEMELIHARAAN ELEKTROMEKANIK'),
('ASSISTANT TECHNICIAN PEMELIHARAAN METER TRANSAKSI'),
('ASSISTANT TECHNICIAN PENGENDALIAN APP'),
('ASSISTANT TECHNICIAN PENYAMBUNGAN DAN PEMUTUSAN'),
('ENGINEER  EFISIENSI JARINGAN DISTRIBUSI'),
('ENGINEER EFISIENSI JARINGAN DISTRIBUSI'),
('ENGINEER KEANDALAN SISTEM DISTRIBUSI'),
('ENGINEER KESELAMATAN, KESEHATAN KERJA DAN LINGKUNGAN'),
('ENGINEER PENGENDALIAN KONSTRUKSI'),
('ENGINEER PENGENDALIAN LOSSES DAN PJU'),
('ENGINEER PENGENDALIAN OPERASI DAN PEMELIHARAAN'),
('ENGINEER PERENCANAAN DAN EVALUASI SISTEM DISTRIBUSI'),
('ENGINEER PERENCANAAN DAN PENGENDALIAN KONSTRUKSI'),
('ENGINEER PERENCANAAN KONSTRUKSI DAN TEKNIK DISTRIBUSI'),
('ENGINEER PERENCANAAN PENGATUR DISTRIBUSI'),
('ENGINEER SISTEM KELISTRIKAN'),
('JUNIOR ANALYST ADMINISTRASI UMUM'),
('JUNIOR ANALYST AKUNTANSI'),
('JUNIOR ANALYST ANGGARAN'),
('JUNIOR ANALYST HUBUNGAN INDUSTRIAL DAN PENGAWASAN TENAGA KERJA'),
('JUNIOR ANALYST KELAYAKAN INVESTASI KELISTRIKAN'),
('JUNIOR ANALYST KEUANGAN DAN AKUNTANSI'),
('JUNIOR ANALYST KINERJA DAN PELAPORAN MANAJEMEN'),
('JUNIOR ANALYST MAPPING DATA JARINGAN DAN PELANGGAN'),
('JUNIOR ANALYST PELAYANAN PELANGGAN'),
('JUNIOR ANALYST PEMASARAN DAN PELAYANAN PELANGGAN'),
('JUNIOR ANALYST PENGEMBANGAN SDM'),
('JUNIOR ANALYST SDM DAN ADMINISTRASI'),
('JUNIOR ENGINEER ANALISA DAN EVALUASI AUTOMATIC METER READING (AMR)'),
('JUNIOR ENGINEER K3 PDKB'),
('JUNIOR ENGINEER KEPALA REGU PDKB'),
('JUNIOR ENGINEER KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN'),
('JUNIOR ENGINEER KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN (K3L)'),
('JUNIOR ENGINEER PEMELIHARAAN DISTRIBUSI'),
('JUNIOR ENGINEER PEMELIHARAAN METER TRANSAKSI'),
('JUNIOR ENGINEER PEMELIHARAAN RTU'),
('JUNIOR ENGINEER PENERTIBAN PEMAKAIAN TENAGA LISTRIK'),
('JUNIOR ENGINEER PENGENDALIAN APP'),
('JUNIOR ENGINEER PENGENDALIAN OPERASI DAN PEMELIHARAAN'),
('JUNIOR ENGINEER PENGENDALIAN SUSUT DAN PJU'),
('JUNIOR ENGINEER PERENCANAAN DAN EVALUASI SISTEM DISTRIBUSI'),
('JUNIOR ENGINEER PERENCANAAN DAN PENGENDALIAN KONSTRUKSI'),
('JUNIOR ENGINEER PREPARATOR PDKB'),
('JUNIOR ENGINEER SCADA DAN TELEKOMUNIKASI'),
('JUNIOR ENGINEER SISTEM KELISTRIKAN'),
('JUNIOR OFFICER ADMINISTRASI'),
('JUNIOR OFFICER ADMINISTRASI DAN PELAPORAN'),
('JUNIOR OFFICER ADMINISTRASI PELANGGAN'),
('JUNIOR OFFICER ADMINISTRASI PENGADAAN'),
('JUNIOR OFFICER ADMINISTRASI PENGELOLAAN PENDAPATAN'),
('JUNIOR OFFICER ADMINISTRASI SDM'),
('JUNIOR OFFICER ADMINISTRASI TEKNIK'),
('JUNIOR OFFICER CALL CENTER'),
('JUNIOR OFFICER LOGISTIK'),
('JUNIOR OFFICER PELAKSANA PENGADAAN'),
('JUNIOR OFFICER PEMBACAAN METER DAN PEMBUATAN REKENING'),
('JUNIOR OFFICER PEMBACAAN METER DAN PEMBUATAN REKENING   '),
('JUNIOR OFFICER PEMBAYARAN'),
('JUNIOR OFFICER PENERTIBAN PEMAKAIAN TENAGA LISTRIK'),
('JUNIOR OFFICER PENGENDALIAN PIUTANG'),
('JUNIOR OFFICER PENGOLAHAN DATA INDUK SALDO DAN SALDO PIUTANG'),
('JUNIOR OFFICER REMUNERASI DAN BENEFIT'),
('JUNIOR OFFICER SARANA DAN FASILITAS'),
('JUNIOR OFFICER SDM DAN ADMINISTRASI'),
('JUNIOR OFFICER SEKRETARIAT'),
('JUNIOR OFFICER VERIFIKASI'),
('JUNIOR OPERATOR OPERASI DAN PEMELIHARAAN PEMBANGKIT'),
('JUNIOR OPERATOR OPERASI DISTRIBUSI'),
('JUNIOR OPERATOR OPERASI PEMBANGKIT'),
('JUNIOR OPERATOR OPERATOR OPERASI DISTRIBUSI'),
('JUNIOR OPERATOR PENGATURAN OPERASI'),
('JUNIOR TECHNICIAN K3 PDKB'),
('JUNIOR TECHNICIAN KESELAMATAN, KESEHATAN KERJA, KEAMANAN, DAN LINGKUNGAN'),
('JUNIOR TECHNICIAN METER DAN TRANSAKSI ENERGI'),
('JUNIOR TECHNICIAN PEMELIHARAAN APP'),
('JUNIOR TECHNICIAN PEMELIHARAAN DISTRIBUSI'),
('JUNIOR TECHNICIAN PEMELIHARAAN MESIN'),
('JUNIOR TECHNICIAN PEMELIHARAAN METER TRANSAKSI'),
('JUNIOR TECHNICIAN PENGENDALIAN APP'),
('JUNIOR TECHNICIAN PENGENDALIAN SUSUT DAN PJU'),
('JUNIOR TECHNICIAN PENYAMBUNGAN DAN PEMUTUSAN'),
('JUNIOR TECHNICIAN TEKNISI PDKB'),
('MASA PERSIAPAN PENSIUN'),
('OFFICER ADMINISTRASI PENGADAAN'),
('OFFICER KEAMANAN'),
('OFFICER PELAKSANA PENGADAAN'),
('OFFICER PENGOLAHAN TRANSAKSI JUAL BELI KWH'),
('SENIOR ENGINEER II PENGEMBANGAN SISTEM KELISTRIKAN'),
('SENIOR ENGINEER II PENGENDALIAN LOSSES DAN PJU'),
('SENIOR SPECIALIST II ACCOUNT EXECUTIVE'),
('SENIOR SPECIALIST II MANAJEMEN MUTU'),
('SENIOR SPECIALIST II SISTEM SDM');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_unit_3`
--

CREATE TABLE `tabel_unit_3` (
  `id` int(3) NOT NULL,
  `Unit_3` varchar(100) NOT NULL,
  `Relasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `talenta`
--

CREATE TABLE `talenta` (
  `ID` int(3) NOT NULL,
  `NIP` varchar(12) NOT NULL,
  `NAMA_PEGAWAI` varchar(50) NOT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `TAHUN` int(11) DEFAULT NULL,
  `TALENTA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talenta`
--

INSERT INTO `talenta` (`ID`, `NIP`, `NAMA_PEGAWAI`, `SEMESTER`, `TAHUN`, `TALENTA`) VALUES
(1, '6488055A', 'FULAN 1', NULL, NULL, NULL),
(2, '7802043H2', 'FULAN 2', NULL, NULL, NULL),
(3, '8508035A', 'FULAN 3', NULL, NULL, NULL),
(4, '8810745Z', 'FULAN 4', NULL, NULL, NULL);

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
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan`);

--
-- Indexes for table `tabel_unit_3`
--
ALTER TABLE `tabel_unit_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talenta`
--
ALTER TABLE `talenta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_unit_3`
--
ALTER TABLE `tabel_unit_3`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `talenta`
--
ALTER TABLE `talenta`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
