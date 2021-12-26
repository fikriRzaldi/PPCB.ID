-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 04:22 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_periz`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
('ACC001', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `aside`
--

CREATE TABLE `aside` (
  `id_aside` varchar(20) NOT NULL DEFAULT '',
  `aside_faq` varchar(255) DEFAULT NULL,
  `faq_answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aside`
--

INSERT INTO `aside` (`id_aside`, `aside_faq`, `faq_answer`) VALUES
('asd001', 'Bagaimana cara melakukan perizinan?', 'Silahkan buka halaman perizinan melalui navigasi '),
('asd002', 'Bagaimana Cara Menambahkan Akun untuk Akses Website ?', 'Masuk ke dalam Manage Account Data dan klik Halaman Admin');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` varchar(20) NOT NULL DEFAULT '',
  `copyright` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `nama_web` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `copyright`, `facebook`, `instagram`, `twitter`, `nama_web`, `slogan`, `keterangan`) VALUES
('1', 'Copyright 2021 by PPCB. All Rights Reserved', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'Perizinan Pembukaan cabang usaha', 'Memulai Peluang Baru', 'UAS PIBS');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` varchar(20) NOT NULL DEFAULT '',
  `logo` varchar(255) DEFAULT NULL,
  `nama_web` varchar(255) DEFAULT NULL,
  `sub_text` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `logo`, `nama_web`, `sub_text`, `alamat`) VALUES
('1', 'ppcb', 'Perizinan Pembukaan Cabang Usaha', 'Memulai Peluang Baru', 'Jl. Permaisuri No. 38, Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id_home` varchar(20) NOT NULL DEFAULT '',
  `text` varchar(255) DEFAULT NULL,
  `sub_text` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `head_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_home`, `text`, `sub_text`, `image`, `head_link`) VALUES
('1', 'Selamat Datang Ke Aplikasi', 'PPCB.ID', 'jakarta', 'transaksi');

-- --------------------------------------------------------

--
-- Table structure for table `navchild`
--

CREATE TABLE `navchild` (
  `id_child` varchar(20) NOT NULL DEFAULT '',
  `child_name` varchar(255) DEFAULT NULL,
  `child_link` varchar(255) DEFAULT NULL,
  `id_nav` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navchild`
--

INSERT INTO `navchild` (`id_child`, `child_name`, `child_link`, `id_nav`) VALUES
('chd001', 'Izin Usaha', 'transaksi', 'nav002'),
('chd002', 'Admin', 'akun', 'nav004'),
('chd003', 'Perusahaan', 'perusahaan', 'nav004'),
('chd004', 'Home', 'dataHome', 'nav005'),
('chd005', 'Header', 'header', 'nav005'),
('chd006', 'Aside', 'aside', 'nav005'),
('chd007', 'Footer', 'footer', 'nav005'),
('chd008', 'Navigasi', 'navigasi', 'nav005');

-- --------------------------------------------------------

--
-- Table structure for table `navigasi`
--

CREATE TABLE `navigasi` (
  `id_nav` varchar(11) NOT NULL DEFAULT '',
  `nav_main` varchar(255) DEFAULT NULL,
  `nav_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigasi`
--

INSERT INTO `navigasi` (`id_nav`, `nav_main`, `nav_link`) VALUES
('nav001', 'Home', 'home'),
('nav002', 'Perizinan', '#'),
('nav004', 'Manage Account Data', '#'),
('nav005', 'Manage Layout', '#');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` varchar(20) NOT NULL DEFAULT '',
  `nama_perusahaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`) VALUES
('CO001', 'Asia Raya Eksibisi'),
('CO002', 'CV. PUSPITA NIRWANA'),
('CO003', 'PT JCO DONUT & COFFEE'),
('CO004', 'PT. Dwi daya World Wide'),
('CO005', 'PT SARI BURGER INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` varchar(20) NOT NULL DEFAULT '',
  `approval` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `approval`) VALUES
('st001', 'approved'),
('st002', 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL DEFAULT '',
  `nama_izin` varchar(255) DEFAULT NULL,
  `alamat_perusahaan` varchar(255) DEFAULT NULL,
  `merk_usaha` varchar(255) DEFAULT NULL,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `nama_penanggung_jawab` varchar(255) DEFAULT NULL,
  `jumlah_karyawan` int(5) DEFAULT NULL,
  `id_status` varchar(255) DEFAULT NULL,
  `id_perusahaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_izin`, `alamat_perusahaan`, `merk_usaha`, `nama_pemilik`, `nama_penanggung_jawab`, `jumlah_karyawan`, `id_status`, `id_perusahaan`) VALUES
('trn001', 'Tanda Daftar Jasa Fasilitasi Konvensi dan Pameran (MICE) Baru', 'JL. RAYA KEBON JERUK NO.10 RT.004 RW.003', 'EXPO-SURE', 'LEONITA WIDJAYA', 'LEONITA WIDJAYA', 5, 'st002', 'CO001'),
('trn002', 'Tanda Daftar Karaoke Baru', 'JL.MH THAMRIN KAV.3 RT.010 RW.010', 'ZEN', 'ANFAR', 'ANFAR', 30, 'st001', 'CO002'),
('trn003', 'Tanda Daftar Restoran / Rumah Makan / Cafe Baru', 'Jalan Senen Raya N0. 135', 'JCO Donuts & Coffee', 'Robert Suteja', 'Robert Suteja', 24, 'st001', 'CO003'),
('trn004', 'Tanda Daftar Usaha Biro Perjalanan Wisata Baru', 'JL. Mangga Dua RayaPusat Grosir Pasar Pagi Mangga Dua Blok. D No. 23-24', 'Dwi Daya Tour', 'Tjong Wai Kit', 'Tjong Wai Kit', 7, 'st002', 'CO004'),
('trn005', 'Tanda Daftar Restoran / Rumah Makan / Cafe Baru', 'JL. JEND. SUDIRMAN', 'BURGER KING', 'JAP JANTI KUSUMA JAYA', 'JAP JANTI KUSUMA JAYA', 16, 'st001', 'CO005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `aside`
--
ALTER TABLE `aside`
  ADD PRIMARY KEY (`id_aside`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `navchild`
--
ALTER TABLE `navchild`
  ADD PRIMARY KEY (`id_child`),
  ADD KEY `id_nav` (`id_nav`);

--
-- Indexes for table `navigasi`
--
ALTER TABLE `navigasi`
  ADD PRIMARY KEY (`id_nav`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `navchild`
--
ALTER TABLE `navchild`
  ADD CONSTRAINT `navchild_ibfk_1` FOREIGN KEY (`id_nav`) REFERENCES `navigasi` (`id_nav`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
