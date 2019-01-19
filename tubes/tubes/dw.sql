-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2019 at 01:20 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` varchar(10) NOT NULL DEFAULT 'False',
  `tglwaktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `fullname`, `email`, `password`, `active`, `tglwaktu`) VALUES
(1, 'Fikri Omar', 'fikri@omar.com', '827ccb0eea8a706c4c34a16891f84e7b', 'True', '2019-01-19 06:17:41'),
(2, 'Admin Desweb', 'admin@admin.com', '1e01ba3e07ac48cbdab2d3284d1dd0fa', 'True', '2018-12-29 18:03:47'),
(14, 'Omar1610', 'mar@getnada.com', '827ccb0eea8a706c4c34a16891f84e7b', 'True', '2018-12-31 15:37:27'),
(15, 'Getar', 'getar@getnada.com', '67dabaa3d5415a9e001905ae9a9a8c0f', 'True', '2019-01-07 06:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `buang`
--

CREATE TABLE `buang` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` varchar(10) NOT NULL,
  `tglwaktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buang`
--

INSERT INTO `buang` (`id`, `id_admin`, `fullname`, `email`, `password`, `active`, `tglwaktu`) VALUES
(3, 3, 'test', 't@t.com', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-29 10:05:23'),
(4, 4, 'Percobaan', 'test@aja.com', '1e01ba3e07ac48cbdab2d3284d1dd0fa', 'False', '2018-12-29 18:25:03'),
(5, 5, 'Test', 'a@a.a', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-29 18:39:14'),
(6, 6, 'tumbal', 'tumbalin@aja.ac', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-29 18:55:35'),
(7, 5, 'sume@getnada.com', 'sume@getnada.com', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-30 14:44:04'),
(8, 6, 'jaboh@getnada.com', 'jaboh@getnada.com', 'c6ca4ca33a4be68084b60675906c4711', 'True', '2018-12-30 15:40:32'),
(9, 7, 'omar@getnada.com', 'omar@getnada.com', '341a298e0aee633ce1cc6d71ecd9e72f', 'True', '2018-12-30 16:26:14'),
(10, 8, 'omar@getnada.com', 'omar@getnada.com', '341a298e0aee633ce1cc6d71ecd9e72f', 'False', '2018-12-30 16:29:12'),
(11, 9, 'slimeque69', 'slimeque69@gmail.com', 'af56fb9616e33e8ae9193826d5ba542e', 'True', '2018-12-30 16:32:24'),
(12, 10, 'slimeque69@gmail.com', 'slimeque69@gmail.com', 'a36d89fd249a746d703548b721ed24ea', 'True', '2018-12-30 16:37:43'),
(13, 4, 'tees', 'te@es.com', '360ae16ef681b96690ff06fb2a30435a', 'False', '2018-12-30 14:26:21'),
(14, 3, 'Akun Percobaan', 'coba@coba.com', 'c3ec0f7b054e729c5a716c8125839829', 'False', '2018-12-30 13:45:39'),
(15, 12, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', 'False', '2018-12-30 16:56:24'),
(16, 17, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'False', '2018-12-31 10:42:06'),
(17, 18, 'Dudi', 'dudi@getnada.com', '2615726de7dfb59c869b398b415c6bda', 'False', '2018-12-31 10:43:46'),
(18, 16, 'botomyj@getnada.com', 'botomyj@getnada.com', '4dd35da02768672b7a61eca8ba4dc7be', 'False', '2018-12-31 10:40:34'),
(19, 19, 'tumbal', 'tumbal@aja.com', 'c9564931a6599f4c27f9c0bd83e69dc4', 'False', '2018-12-31 10:50:00'),
(20, 20, '1111', '111@111.com', 'b59c67bf196a4758191e42f76670ceba', 'False', '2018-12-31 11:05:20'),
(21, 21, 'blabla', 'blabla@blabla.blabla', 'df5ea29924d39c3be8785734f13169c6', 'False', '2018-12-31 11:06:41'),
(22, 22, 'cek', 'cek@c.xd', 'ea416ed0759d46a8de58f63a59077499', 'False', '2018-12-31 11:08:23'),
(23, 23, 'not', 'suer@a.a', '0aae56fdb3ebfacdd0fd095c0dc936c2', 'False', '2018-12-31 11:10:31'),
(24, 24, 'test', 'tst@a.com', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-31 11:13:22'),
(25, 25, 'testajax', 'test@ajax.om', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-31 11:18:57'),
(26, 26, '111', '111@1.1', 'c4ca4238a0b923820dcc509a6f75849b', 'False', '2018-12-31 11:27:26'),
(27, 27, '111', '11@1.1', '698d51a19d8a121ce581499d7b701668', 'False', '2018-12-31 11:28:00'),
(28, 28, 'dudi@getnada.com', 'dudi@getnada.com', 'ea8ece3844db4c7ec1ef2e0aa18e7150', 'False', '2018-12-31 11:44:31'),
(29, 29, 'fnDraw', 'fnDraw@fnDraw.fnDraw', '6bad4ff825d203550244b33bf7cb4814', 'False', '2018-12-31 11:47:58'),
(30, 30, 'ralo', 'ae@ad.c', 'de38a4cf951d5b5723e54ee2c88d0b34', 'False', '2018-12-31 11:53:40'),
(31, 31, 'bbbb', 'bbb@bb.com', '65ba841e01d6db7733e90a5b7f9e6f80', 'False', '2018-12-31 15:38:34'),
(32, 32, 'b', 'b@b.b', '92eb5ffee6ae2fec3ad71c777531578f', 'False', '2018-12-31 15:40:51'),
(33, 33, '123', '1@q.c', '202cb962ac59075b964b07152d234b70', 'False', '2018-12-31 15:41:58'),
(34, 34, 'cobs', 'c@o.b', '827ccb0eea8a706c4c34a16891f84e7b', 'False', '2018-12-31 15:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `os` varchar(30) NOT NULL,
  `user` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `admin`, `tanggal`, `ip_address`, `os`, `user`, `ket`) VALUES
(0, 'admin@admin.com', '2018-12-27 18:01:15', '127.0.0.1', 'Ubuntu 16.04', 'admin@admin.com', 'Edit User'),
(1, 'fikri@omar.com', '2018-12-29 18:25:03', '127.0.0.1', 'Linux', 'Percobaan', 'Insert Akun'),
(2, 'fikri@omar.com', '2018-12-29 18:27:36', '127.0.0.1', 'Linux', 'test@aja.com', 'Update User'),
(3, 'fikri@omar.com', '2018-12-29 18:39:14', '127.0.0.1', 'Linux', 'Test', 'Insert User'),
(4, 'fikri@omar.com', '2018-12-29 18:39:23', '127.0.0.1', 'Linux', 'a@a.a', 'Delete User'),
(5, 'fikri@omar.com', '2018-12-29 18:55:35', '127.0.0.1', 'Linux', 'tumbal', 'Insert User'),
(6, 'fikri@omar.com', '2018-12-29 18:56:18', '127.0.0.1', 'Linux', 'tumbalin@aja.ac', 'Delete User'),
(7, 'fikri@omar.com', '2018-12-30 15:03:55', '127.0.0.1', 'Linux', 'sume@getnada.com', 'Update User'),
(8, 'fikri@omar.com', '2018-12-30 15:04:40', '127.0.0.1', 'Linux', 'sume@getnada.com', 'Delete User'),
(9, 'jaboh@getnada.com', '2018-12-30 15:42:01', '127.0.0.1', 'Linux', 'jaboh@getnada.com', 'Delete User'),
(10, 'fikri@omar.com', '2018-12-30 15:49:38', '127.0.0.1', 'Linux', 'coba@coba.com', 'Update User'),
(11, 'omar@getnada.com', '2018-12-30 16:26:55', '127.0.0.1', 'Linux', 'omar@getnada.com', 'Delete User'),
(12, 'slimeque69@gmail.com', '2018-12-30 16:32:44', '127.0.0.1', 'Linux', 'omar@getnada.com', 'Delete User'),
(13, 'slimeque69@gmail.com', '2018-12-30 16:33:33', '127.0.0.1', 'Linux', 'slimeque69@gmail.com', 'Delete User'),
(14, 'slimeque69@gmail.com', '2018-12-30 16:37:56', '127.0.0.1', 'Linux', 'slimeque69@gmail.com', 'Delete User'),
(15, 'fikri@omar.com', '2018-12-30 16:53:20', '127.0.0.1', 'Linux', 'te@es.com', 'Delete User'),
(16, 'fikri@omar.com', '2018-12-30 16:53:25', '127.0.0.1', 'Linux', 'coba@coba.com', 'Delete User'),
(17, 'fikri@omar.com', '2018-12-30 16:56:24', '127.0.0.1', 'Linux', 'test@test.com', 'Insert User'),
(18, 'fikri@omar.com', '2018-12-30 16:57:23', '127.0.0.1', 'Linux', 'test@test.com', 'Delete User'),
(19, 'mar@getnada.com', '2018-12-31 10:46:30', '127.0.0.1', 'Linux', '', 'Delete User'),
(20, 'mar@getnada.com', '2018-12-31 10:46:50', '127.0.0.1', 'Linux', 'dudi@getnada.com', 'Delete User'),
(21, 'mar@getnada.com', '2018-12-31 10:46:58', '127.0.0.1', 'Linux', 'botomyj@getnada.com', 'Delete User'),
(22, 'mar@getnada.com', '2018-12-31 10:50:00', '127.0.0.1', 'Linux', 'tumbal@aja.com', 'Insert User'),
(23, 'mar@getnada.com', '2018-12-31 11:02:08', '127.0.0.1', 'Linux', 'tumbal@aja.com', 'Delete User'),
(24, 'mar@getnada.com', '2018-12-31 11:05:21', '127.0.0.1', 'Linux', '111@111.com', 'Insert User'),
(25, 'mar@getnada.com', '2018-12-31 11:05:30', '127.0.0.1', 'Linux', '111@111.com', 'Delete User'),
(26, 'mar@getnada.com', '2018-12-31 11:06:41', '127.0.0.1', 'Linux', 'blabla@blabla.blabla', 'Insert User'),
(27, 'mar@getnada.com', '2018-12-31 11:07:05', '127.0.0.1', 'Linux', 'blabla@blabla.blabla', 'Delete User'),
(28, 'mar@getnada.com', '2018-12-31 11:08:23', '127.0.0.1', 'Linux', 'cek@c.xd', 'Insert User'),
(29, 'mar@getnada.com', '2018-12-31 11:10:00', '127.0.0.1', 'Linux', 'cek@c.xd', 'Delete User'),
(30, 'mar@getnada.com', '2018-12-31 11:10:31', '127.0.0.1', 'Linux', 'suer@a.a', 'Insert User'),
(31, 'mar@getnada.com', '2018-12-31 11:10:42', '127.0.0.1', 'Linux', 'suer@a.a', 'Delete User'),
(32, 'mar@getnada.com', '2018-12-31 11:13:22', '127.0.0.1', 'Linux', 'tst@a.com', 'Insert User'),
(33, 'mar@getnada.com', '2018-12-31 11:14:12', '127.0.0.1', 'Linux', 'tst@a.com', 'Delete User'),
(34, 'mar@getnada.com', '2018-12-31 11:18:57', '127.0.0.1', 'Linux', 'test@ajax.om', 'Insert User'),
(35, 'mar@getnada.com', '2018-12-31 11:19:17', '127.0.0.1', 'Linux', 'test@ajax.om', 'Delete User'),
(36, 'mar@getnada.com', '2018-12-31 11:27:26', '127.0.0.1', 'Linux', '111@1.1', 'Insert User'),
(37, 'mar@getnada.com', '2018-12-31 11:27:34', '127.0.0.1', 'Linux', '111@1.1', 'Delete User'),
(38, 'mar@getnada.com', '2018-12-31 11:28:00', '127.0.0.1', 'Linux', '11@1.1', 'Insert User'),
(39, 'mar@getnada.com', '2018-12-31 11:28:08', '127.0.0.1', 'Linux', '11@1.1', 'Delete User'),
(40, 'getar@getnada.com', '2018-12-31 11:46:34', '127.0.0.1', 'Linux', 'dudi@getnada.com', 'Delete User'),
(41, 'getar@getnada.com', '2018-12-31 11:47:58', '127.0.0.1', 'Linux', 'fnDraw@fnDraw.fnDraw', 'Insert User'),
(42, 'getar@getnada.com', '2018-12-31 11:48:50', '127.0.0.1', 'Linux', 'fnDraw@fnDraw.fnDraw', 'Delete User'),
(43, 'getar@getnada.com', '2018-12-31 11:53:40', '127.0.0.1', 'Linux', 'ae@ad.c', 'Insert User'),
(44, 'getar@getnada.com', '2018-12-31 11:53:48', '127.0.0.1', 'Linux', 'ae@ad.c', 'Delete User'),
(45, 'mar@getnada.com', '2018-12-31 15:38:34', '127.0.0.1', 'Linux', 'bbb@bb.com', 'Insert User'),
(46, 'mar@getnada.com', '2018-12-31 15:38:42', '127.0.0.1', 'Linux', 'bbb@bb.com', 'Delete User'),
(47, 'mar@getnada.com', '2018-12-31 15:40:51', '127.0.0.1', 'Linux', 'b@b.b', 'Insert User'),
(48, 'mar@getnada.com', '2018-12-31 15:40:58', '127.0.0.1', 'Linux', 'b@b.b', 'Delete User'),
(49, 'mar@getnada.com', '2018-12-31 15:41:58', '127.0.0.1', 'Linux', '1@q.c', 'Insert User'),
(50, 'mar@getnada.com', '2018-12-31 15:42:06', '127.0.0.1', 'Linux', '1@q.c', 'Delete User'),
(51, 'mar@getnada.com', '2018-12-31 15:43:13', '127.0.0.1', 'Linux', 'c@o.b', 'Insert User'),
(52, 'mar@getnada.com', '2018-12-31 15:43:21', '127.0.0.1', 'Linux', 'c@o.b', 'Delete User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buang`
--
ALTER TABLE `buang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `buang`
--
ALTER TABLE `buang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
