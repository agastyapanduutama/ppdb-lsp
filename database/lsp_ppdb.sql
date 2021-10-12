-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 07:29 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_agama`
--

CREATE TABLE `t_agama` (
  `id` int(11) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_agama`
--

INSERT INTO `t_agama` (`id`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Budha'),
(4, 'Hindu'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`id`, `nama_jurusan`, `keterangan`) VALUES
(1, 'Rekayasa Perangkat Lunak', ''),
(2, 'Administrasi Perkantoran', ''),
(3, 'Teknik Sepeda Motor', ''),
(4, 'Teknik Kendaraan Ringan', ''),
(5, 'Tata Boga', ''),
(6, 'Teknik Komunikasi Jaringan', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `id` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nilai_un_ind` int(11) NOT NULL,
  `nilai_un_ing` int(11) NOT NULL,
  `nilai_un_mat` int(11) NOT NULL,
  `nilai_un_ipa` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '4' COMMENT '1 = Diterima\r\n2 = Cadangan\r\n3 = Tidak Diterima\r\n4 = Belum di konfirmasi',
  `tanggal_dibuat` date NOT NULL,
  `waktu_dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_siswa`
--

INSERT INTO `t_siswa` (`id`, `id_agama`, `id_jurusan`, `nama_siswa`, `nik`, `nisn`, `password`, `tempat_lahir`, `tanggal_lahir`, `jk`, `sekolah_asal`, `nama_ortu`, `alamat`, `desa`, `kecamatan`, `kota`, `provinsi`, `no_hp`, `nilai_un_ind`, `nilai_un_ing`, `nilai_un_mat`, `nilai_un_ipa`, `foto`, `status`, `tanggal_dibuat`, `waktu_dibuat`) VALUES
(1, 1, 1, 'Agastya Pandu Satriya Utama', '1293128', '19283791283', '', 'Bandung', '1999-08-07', 1, 'MTS Al-Misbah', 'Sumardi', 'Cibiru', 'Cipadung', 'Cibiru', 'Bandung', 'Jawa Barat', '08956544', 89, 78, 98, 0, '4be5a03a52fd323d6ea175dd3a032086.jpg', '1', '2021-10-12', '2021-10-12 13:53:49'),
(3, 2, 1, 'lorem ipsum', '38', '70', '6cb88f490439a77c371f055f7431e4e8', 'Aperiam quis delenit', '2009-03-18', 1, 'Pariatur Dolor dolo', 'In sit et ipsum aut', 'Reprehenderit error', 'Consectetur voluptat', 'Explicabo Tempore ', 'Amet officiis quod ', 'Voluptatem Sunt di', '95', 61, 48, 66, 22, '55e4670c90b1961f1e33ee52305b6a8c.png', '2', '2021-10-12', '2021-10-12 15:34:11'),
(4, 3, 1, 'Agastya Pandu', '123123', '95', '6cb88f490439a77c371f055f7431e4e8', 'Quis aut dolor Nam q', '2018-03-02', 1, 'Quae voluptatem volu', 'Possimus praesentiu', 'Sed aliquam ut nulla', 'Aut qui aspernatur e', 'Voluptatem Tenetur ', 'Sed sunt cillum quia', 'Ut accusantium animi', '90', 59, 99, 80, 92, '6ff57c6d2b3a73980378076887c4244c.png', '1', '0000-00-00', '2021-10-12 22:57:58'),
(5, 1, 1, 'Sit sint quos labor', '88', '123', 'f87a26fee0cd92eca817fae2c0d9afd8', 'awd', '0231-12-31', 0, '123', '123', '123', '123', '123', '123', '123', '123', 980, 98, 98, 23, '7114faddefa9789339d5f9ec0753735c.png', '3', '0000-00-00', '2021-10-12 22:58:49'),
(6, 6, 6, 'Sed culpa velit poss', '54', '20', '6cb88f490439a77c371f055f7431e4e8', 'Aut cum veniam vel ', '1995-11-04', 1, 'Rerum consequatur a', 'Consequatur Commodo', 'A exercitation facer', 'Eos doloremque ut vo', 'Earum fugiat sed opt', 'Saepe ab quas eum ne', 'Reprehenderit sunt ', '66', 6, 39, 16, 38, '8df084ee9eac42f84bca46701109b346.png', '4', '0000-00-00', '2021-10-13 00:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `id_konfigurasi` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `id_konfigurasi`, `username`, `password`, `nama_user`, `level`, `keterangan`, `status`) VALUES
(1, 1, 'admin', '580097c0183509887837571145ccc3ad', 'Administrator', 1, '0', '1'),
(5, 1, 'user', '7648be42b5e3e6afde12b6bd7f300b52', 'user', 2, '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_agama`
--
ALTER TABLE `t_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_agama`
--
ALTER TABLE `t_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_siswa`
--
ALTER TABLE `t_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
