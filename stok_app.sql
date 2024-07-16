-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2024 at 10:45 PM
-- Server version: 8.0.38
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaveaweb_stok_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL DEFAULT 'undefined',
  `satuan_barang` varchar(20) NOT NULL DEFAULT 'undefined',
  `stok_barang` int NOT NULL DEFAULT '0',
  `photo_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'x.photo',
  `status` int NOT NULL DEFAULT '0',
  `time_entry` varchar(25) NOT NULL DEFAULT '00:00:00 00-00-00',
  `pengguna` varchar(100) NOT NULL DEFAULT 'unidentified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `satuan_barang`, `stok_barang`, `photo_barang`, `status`, `time_entry`, `pengguna`) VALUES
(1, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(2, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(3, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(4, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(5, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(6, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(7, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(8, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(9, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(10, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(11, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(12, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(13, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(14, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(15, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(16, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(17, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(18, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(19, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(20, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(21, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(22, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(23, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(24, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(25, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(26, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(27, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(28, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(29, 'KERTAS A4 (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(30, 'KERTAS F4 (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(31, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 5, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(32, 'KERTAS F4 SINAR TIGA (100, @50000)', 'RIM', 2, 'x.photo', 0, '00:00:00 00-00-00', 'unidentified'),
(33, 'CAPE', 'LUSIN', 4, '05082023150941SCR-20230804-muxo.jpeg', 0, '2023-08-05 21:09:41', 'unidentified'),
(34, 'PULPEN', 'BIJI', 6, '05082023151129', 0, '2023-09-18 16:21:38', 'unidentified'),
(35, 'HOLA', 'GROSS', 3, '06082023002508', 1, '2023-08-26 23:11:32', 'unidentified'),
(36, 'LKOK', 'LUSIN', 7, '06082023002746', 0, '2023-08-06 6:27:46', 'unidentified'),
(37, 'TORMENTED', 'LUSIN', 9, '25082023155209photo_2023-08-22 15.45.29.jpeg', 0, '2023-08-25 21:52:09', 'unidentified'),
(38, 'TES PATH', 'APAKAH', 0, '25082023155421friday-work-meme18.jpeg', 0, '2023-08-27 0:46:07', 'unidentified'),
(39, 'L', 'LUSIN', 10, '25082023161235WhatsApp Image 2023-08-22 at 19.14.36.jpeg', 0, '2023-08-27 0:23:56', 'unidentified'),
(40, 'ALIBI', 'TES SWEETALERT', 20, '25082023161327photo_2023-08-18 22.27.59.jpeg', 0, '2023-08-27 0:36:10', 'unidentified'),
(41, 'LIAT FOTO', 'LUSIN', 3, '26082023090456SCR-20230823-qqfd.jpeg', 1, '2023-08-26 23:11:27', 'unidentified'),
(42, 'SEKALI LAGI', 'BPS SANGIHE', 5, '26082023091958SCR-20230811-hgwh.jpeg', 1, '2023-08-26 22:42:33', 'unidentified'),
(43, 'THANKS GOD', 'LUSIN', 5, '26082023161641anakku 2023-08-03 at 18.04.19 (1).jpeg', 1, '2023-08-26 22:42:30', 'unidentified'),
(44, 'MAP KANTOR', 'PIECES', 150, '26082023185532MAP-DEPAN_FIX.jpg', 0, '2023-08-27 0:55:32', 'unidentified'),
(45, 'PAPER CLIP', 'BOX @350', 30, '26082023185752MAP-BELAKANG-FONT-TIPIS.jpg', 0, '2023-08-27 0:57:52', 'unidentified'),
(46, 'STOFMAP ', 'PIECES', 35, '26082023185906Social-Media-Icons-1.jpg', 0, '2023-08-27 0:59:06', 'unidentified'),
(47, 'MARKER PERMANENT SNOWMAN', 'PIECES', 20, '26082023190010-gray_and_white_bk8.jpg', 0, '2023-08-27 1:00:10', 'unidentified'),
(48, 'KERTAS A4 80 GRAM SINAR DUNIA', 'RIM', 15, '26082023190108245px-Lambang_Kabupaten_Kepulauan_Sangihe.jpeg', 0, '2023-08-27 1:01:08', 'unidentified'),
(49, 'KERTAS F4 70 GRAM SINAR DUNIA', 'RIM', 10, '26082023190141350-b202d1af-b629-475e-ad42-e057ca2b9523.jpg', 0, '2023-08-27 1:01:41', 'unidentified'),
(50, 'TISSUE TOILET MERK MONTIES', 'BOX @350', 2, '26082023190322CONFIRM_KOSEKA.jpg', 0, '2023-08-27 15:05:30', 'unidentified'),
(51, 'BLOCK NOTE', 'PIECES', 45, '2608202319044820210730_Penjelasan_Berakhlak.jpg', 0, '2023-08-27 20:33:03', 'unidentified'),
(52, 'SUNLIGHT @150ML', 'PIECES', 2, '26082023190526depositphotos_272287264-stock-illustration-hands-hold-tablet-trees-rocket - Copy.jpg', 0, '2023-08-27 11:47:26', 'unidentified'),
(53, 'SELOTIP HITAM BESAR', 'PIECES', 5, '26082023190657OTSS9M0.jpg', 0, '2023-08-27 8:11:00', 'unidentified'),
(54, 'MACBOOK AIR M1', 'PIECES', 4, '18092023080447mac-book-air-m1-3.jpg', 0, '2023-08-27 11:49:49', 'unidentified'),
(55, 'LAMPU PHILIPS 100WATT', 'PIECES', 3, '27082023140804photo_2023-08-21 08.45.14.jpeg', 0, '2023-08-27 20:41:53', 'Golfrid Woren Wel Pumpente, S.Kom'),
(56, 'PULPEN', 'PIECES', 6, '28082023133813photo_2023-08-21 08.45.14.jpeg', 0, '2023-09-18 16:21:38', 'Golfrid Woren Wel Pumpente, S.Kom'),
(57, 'TESJO', 'PIECES', 2, '18092023102829user.jpeg', 0, '2023-09-18 16:29:05', 'dummy'),
(58, 'HOLA', 'PIECES', 8, '23092023125743mac-book-air-m1-3.jpg', 0, '2023-09-23 18:57:43', 'Golfrid Woren Wel Pumpente, S.Kom'),
(59, 'TESSSSSSSS', 'PIECES', 9, '23092023125824photo_2023-08-30 00.40.03.jpg', 0, '2023-09-23 18:58:24', 'Golfrid Woren Wel Pumpente, S.Kom'),
(60, 'MAX UKURAN', 'PIECES', 13, '23092023130411IMG_7140.JPG', 0, '2023-09-23 19:04:11', 'Golfrid Woren Wel Pumpente, S.Kom'),
(61, 'WHATIAM', 'RIM', 4, '23092023134432IMG_7140.JPG', 0, '2023-09-23 19:44:32', 'Golfrid Woren Wel Pumpente, S.Kom'),
(62, 'OKO', 'PIECES', 8, '23092023135528IMG_7140.JPG', 0, '2023-09-23 19:55:28', 'Golfrid Woren Wel Pumpente, S.Kom'),
(63, 'TESTINGIJIJIII', 'PIECES', 7, '23092023135735IMG_7140.JPG', 0, '2023-09-23 19:57:35', 'Golfrid Woren Wel Pumpente, S.Kom'),
(64, 'HURS', 'PIECES', 3, '23092023135810IMG_7140.JPG', 0, '2023-09-23 19:58:10', 'Golfrid Woren Wel Pumpente, S.Kom'),
(65, 'SULASTRIIII', 'PIECES', 3, '23092023143310IMG_7140.JPG', 0, '2023-09-23 20:33:10', 'Golfrid Woren Wel Pumpente, S.Kom'),
(66, 'YGHJKJK', 'PIECES', 2, '23092023145011IMG_7140.JPG', 0, '2023-09-23 20:50:11', 'Golfrid Woren Wel Pumpente, S.Kom'),
(67, 'MNBVCXZ', 'PIECES', 2, '23092023145033IMG_7140.JPG', 0, '2023-09-23 20:50:33', 'Golfrid Woren Wel Pumpente, S.Kom'),
(68, 'HOI', 'PIECES', 2, '23092023145107IMG_7140.JPG', 0, '2023-09-23 20:51:07', 'Golfrid Woren Wel Pumpente, S.Kom'),
(69, 'LDSADJKAJDJHE', 'PIECES', 3, '23092023145235IMG_7140.JPG', 0, '2023-09-23 20:52:35', 'Golfrid Woren Wel Pumpente, S.Kom'),
(70, 'KJK', 'PIECES', 7, '23092023145532IMG_7140.JPG', 0, '2023-09-23 20:55:32', 'Golfrid Woren Wel Pumpente, S.Kom'),
(71, 'OKOK', 'PIECES', 4, '23092023145741IMG_7140.JPG', 0, '2023-09-23 20:57:41', 'Golfrid Woren Wel Pumpente, S.Kom'),
(72, 'OHGY', 'BOX @350', 3, '23092023145917IMG_7140.JPG', 0, '2023-09-23 20:59:17', 'Golfrid Woren Wel Pumpente, S.Kom'),
(73, '23', 'PIECES', 2, '23092023150346IMG_7140.JPG', 0, '2023-09-23 21:03:46', 'Golfrid Woren Wel Pumpente, S.Kom'),
(74, 'OKOK', 'PIECES', 1, '23092023150412IMG_7140.JPG', 0, '2023-09-23 21:04:12', 'Golfrid Woren Wel Pumpente, S.Kom'),
(75, 'JEALOUS', 'RIM', 4, '23092023150602IMG_7140.JPG', 0, '2023-09-23 21:06:02', 'Golfrid Woren Wel Pumpente, S.Kom'),
(76, 'TEST', 'PIECES', 4, '04102023091413foto.jpeg', 0, '2023-10-04 15:14:13', 'Golfrid Woren Wel Pumpente, S.Kom'),
(77, 'COBA-AJA', 'PIECES', 8, '04102023152428foto.jpeg', 0, '2023-10-04 21:24:28', ''),
(78, 'LAMA', 'PIECES', 6, '04102023152645foto.jpeg', 0, '2023-10-04 21:26:45', ''),
(79, 'HY', 'PIECES', 3, '04102023153119foto.jpeg', 0, '2023-10-04 21:31:19', ''),
(80, 'OKOK', 'PIECES', 1, '04102023232952foto.jpeg', 0, '2023-10-05 5:29:52', ''),
(81, 'TESTTT', 'PIECES', 1, '04102023233627neural-red-g.jpg', 0, '2024-07-12 9:22:10', 'Golfrid Woren Wel Pumpente, S.Kom'),
(82, 'MACBOOK', 'PIECES', 16, '12072024153429flowclaims.jpg', 0, '2024-07-12 23:34:29', 'Muhammad Syibli, S.Tr.Stat');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL DEFAULT 'undefined',
  `satuan_barang` varchar(25) NOT NULL DEFAULT 'undefined',
  `stok_barang` int NOT NULL DEFAULT '0',
  `keterangan` varchar(10) NOT NULL DEFAULT 'undefined',
  `j_masuk_keluar` int NOT NULL DEFAULT '0',
  `photo_barang` varchar(50) NOT NULL DEFAULT 'x.photo',
  `time` varchar(25) NOT NULL DEFAULT '00:00:00 00-00-00',
  `user` varchar(100) NOT NULL DEFAULT 'nama-pengguna-00',
  `flag` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama_barang`, `satuan_barang`, `stok_barang`, `keterangan`, `j_masuk_keluar`, `photo_barang`, `time`, `user`, `flag`) VALUES
(19, 'PULPEN', 'BIJI', 3, '1', 1, '25082023145958', '2023-08-25 20:59:58', 'nama-pengguna-00', 0),
(20, 'CAPE', 'LUSIN', 7, '1', 3, '25082023150030', '2023-08-25 21:00:30', 'nama-pengguna-00', 0),
(21, 'CAPE', 'LUSIN', 7, '1', 3, '25082023150135', '2023-08-25 21:01:35', 'nama-pengguna-00', 0),
(22, 'LKOK', 'LUSIN', 14, '1', 7, '25082023150159', '2023-08-25 21:01:59', 'nama-pengguna-00', 0),
(23, 'LKOK', 'LUSIN', 11, '1', 4, '25082023150302', '2023-08-25 21:03:02', 'nama-pengguna-00', 0),
(24, 'CAPE', 'LUSIN', 7, '1', 3, '25082023150335', '2023-08-25 21:03:35', 'nama-pengguna-00', 0),
(25, 'HOLA', 'GROSS', 6, '1', 3, '25082023150356', '2023-08-25 21:03:56', 'nama-pengguna-00', 0),
(26, 'LKOK', 'LUSIN', 14, '1', 7, '25082023150549', '2023-08-25 21:05:49', 'nama-pengguna-00', 0),
(27, 'LKOK', 'LUSIN', 0, '2', 7, '25082023152026', '2023-08-25 21:20:26', 'Agus Hardiyanto, S.Tr.Stat', 0),
(28, 'LKOK', 'LUSIN', 10, '1', 3, '25082023152046', '2023-08-25 21:20:46', 'nama-pengguna-00', 0),
(29, 'HOLA', 'GROSS', 0, '2', 3, '25082023153105', '2023-08-25 21:31:05', 'nama-pengguna-00', 0),
(30, 'LKOK', 'LUSIN', 1, '2', 6, '25082023153929photo_2023-08-22 15.45.29.jpeg', '2023-08-25 21:39:29', 'nama-pengguna-00', 0),
(31, 'ALIBI', 'TES SWEETALERT', 0, '2', 9, '25082023172652photo_2023-08-22 15.45.29.jpeg', '2023-08-25 23:26:52', 'nama-pengguna-00', 0),
(32, 'L', 'LUSIN', 0, '2', 8, '25082023173159photo_2023-08-22 15.45.29.jpeg', '2023-08-25 23:31:59', 'nama-pengguna-00', 0),
(33, 'ALIBI', 'TES SWEETALERT', 10, '1', 1, '25082023173221photo_2023-08-22 15.45.29.jpeg', '2023-08-25 23:32:21', 'nama-pengguna-00', 0),
(34, 'ALIBI', 'TES SWEETALERT', 7, '2', 2, '25082023181923SCR-20230727-mhnp.jpeg', '2023-08-26 0:19:23', 'nama-pengguna-00', 0),
(35, 'LIAT FOTO', 'LUSIN', 11, '1', 8, '26082023090959SCR-20230823-qqfd.jpeg', '2023-08-26 15:09:59', 'nama-pengguna-00', 0),
(36, 'LIAT FOTO', 'LUSIN', 0, '2', 3, '26082023091056SCR-20230823-mvbg.jpeg', '2023-08-26 15:10:56', 'nama-pengguna-00', 0),
(37, 'LIAT FOTO', 'LUSIN', 4, '1', 1, '26082023091130SCR-20230808-mfsy.jpeg', '2023-08-26 15:11:30', 'nama-pengguna-00', 0),
(38, 'SEKALI LAGI', 'BPS SANGIHE', 0, '2', 5, '26082023092043SCR-20230823-mvbg.jpeg', '2023-08-26 15:20:43', 'nama-pengguna-00', 0),
(39, 'SEKALI LAGI', 'BPS SANGIHE', 10, '1', 5, '26082023092101SCR-20230728-ndmx.jpeg', '2023-08-26 15:21:01', 'nama-pengguna-00', 0),
(40, 'BYE', 'LUSIN', 10, '1', 3, '26082023150937istriku.jpg', '2023-08-26 21:09:37', 'nama-pengguna-00', 0),
(41, 'THANKS GOD', 'LUSIN', 2, '2', 3, '260820231617186week-anakku.jpeg', '2023-08-26 22:17:18', 'nama-pengguna-00', 0),
(42, 'ALIBI', 'TES SWEETALERT', 10, '1', 1, '260820231821446week-anakku.jpeg', '2023-08-27 0:21:44', 'nama-pengguna-00', 0),
(43, 'ALIBI', 'TES SWEETALERT', 5, '2', 5, '26082023182236anakku 2023-08-03 at 18.04.19.jpeg', '2023-08-27 0:22:36', 'nama-pengguna-00', 0),
(44, 'L', 'LUSIN', 10, '1', 2, '26082023182356anakku 2023-08-03 at 18.04.19.jpeg', '2023-08-27 0:23:56', 'nama-pengguna-00', 0),
(45, 'ALIBI', 'TES SWEETALERT', 13, '1', 3, '26082023183045photo_2023-08-21 08.45.14.jpeg', '2023-08-27 0:30:45', 'nama-pengguna-00', 0),
(46, 'ALIBI', 'TES SWEETALERT', 0, '2', 13, '26082023183101photo_2023-08-21 12.53.12.jpeg', '2023-08-27 0:31:01', 'nama-pengguna-00', 0),
(47, 'ALIBI', 'TES SWEETALERT', 15, '1', 2, '26082023183328003B MALA Lind 1.jpeg', '2023-08-27 0:33:28', 'nama-pengguna-00', 0),
(48, 'ALIBI', 'TES SWEETALERT', 1, '2', 14, '26082023183403photo_2023-08-22 15.37.59.jpeg', '2023-08-27 0:34:03', 'nama-pengguna-00', 0),
(49, 'L', 'LUSIN', 0, '2', 10, '26082023183457001B MIULU (1).jpeg', '2023-08-27 0:34:57', 'nama-pengguna-00', 0),
(50, 'ALIBI', 'TES SWEETALERT', 20, '1', 5, '26082023183610003B MALA Lind 1.jpeg', '2023-08-27 0:36:10', 'nama-pengguna-00', 0),
(51, 'ALIBI', 'TES SWEETALERT', 0, '2', 20, '26082023183652photo_2023-08-22 15.45.29.jpeg', '2023-08-27 0:36:52', 'nama-pengguna-00', 0),
(52, 'ALIBI', 'TES SWEETALERT', 0, '2', 20, '26082023183958photo_2023-08-21 12.53.12.jpeg', '2023-08-27 0:39:58', 'nama-pengguna-00', 0),
(53, 'TES PATH', 'APAKAH', 8, '2', 1, '26082023184251photo_2023-08-21 08.45.14.jpeg', '2023-08-27 0:42:51', 'nama-pengguna-00', 0),
(54, 'TES PATH', 'APAKAH', 13, '1', 3, '26082023184535photo_2023-08-21 11.46.02.jpeg', '2023-08-27 0:45:35', 'nama-pengguna-00', 0),
(55, 'TES PATH', 'APAKAH', 0, '2', 13, '26082023184607photo_2023-08-21 08.45.14.jpeg', '2023-08-27 0:46:07', 'nama-pengguna-00', 0),
(56, 'SELOTIP HITAM BESAR', 'PIECES', 5, '2', 1, '26082023190940cvr.jpg', '2023-08-27 1:25:32', 'nama-pengguna-00', 1),
(57, 'SELOTIP HITAM BESAR', 'PIECES', 15, '1', 10, '26082023191011-gray_and_white_bk8.jpg', '2023-08-27 1:10:11', 'nama-pengguna-00', 0),
(58, 'SELOTIP HITAM BESAR', 'PIECES', 0, '2', 15, '26082023191239dataflow-page0001.jpg', '2023-08-27 1:12:39', 'nama-pengguna-00', 0),
(59, 'SELOTIP HITAM BESAR', 'PIECES', 5, '1', 5, '27082023021100istriku.jpg', '2023-08-27 8:11:00', 'nama-pengguna-00', 0),
(60, 'SUNLIGHT @150ML', 'PIECES', 2, '2', 2, '27082023054726istriku.jpg', '2023-08-27 11:47:26', 'nama-pengguna-00', 0),
(61, 'TISSUE TOILET MERK MONTIES', 'BOX @350', 5, '2', 2, '27082023090503istriku.jpg', '2023-08-27 15:05:03', 'nama-pengguna-00', 0),
(62, 'TISSUE TOILET MERK MONTIES', 'BOX @350', 6, '1', 1, '27082023090515istriku.jpg', '2023-08-27 15:05:15', 'nama-pengguna-00', 0),
(63, 'TISSUE TOILET MERK MONTIES', 'BOX @350', 2, '2', 4, '27082023090530istriku.jpg', '2023-08-27 15:05:30', 'nama-pengguna-00', 0),
(64, 'LAMPU PHILIPS 100WATT', 'PIECES', 10, '1', 5, '27082023142355photo_2023-08-21 11.46.02.jpeg', '2023-08-27 20:23:55', 'Golfrid Woren Wel Pumpente, S.Kom', 0),
(65, 'LAMPU PHILIPS 100WATT', 'PIECES', 0, '2', 10, '27082023142505001B MIULU.jpeg', '2023-08-27 20:25:05', 'Golfrid Woren Wel Pumpente, S.Kom', 0),
(66, 'BLOCK NOTE', 'PIECES', 45, '2', 5, '27082023143303photo_2023-08-21 08.45.14.jpeg', '2023-08-27 20:33:03', 'Golfrid Woren Wel Pumpente, S.Kom', 0),
(67, 'LAMPU PHILIPS 100WATT', 'PIECES', 3, '1', 3, '27082023144153001B MIULU.jpeg', '2023-08-27 20:41:53', 'Sulastri Sahampelo, A.Md.Kom', 0),
(68, 'PULPEN', 'PIECES', 16, '1', 9, '18092023102055mac-book-air-m1-3.jpg', '2023-09-18 16:20:55', 'Golfrid Woren Wel Pumpente, S.Kom', 0),
(69, 'PULPEN', 'PIECES', 6, '2', 10, '18092023102138mac-book-air-m1-3.jpg', '2023-09-18 16:21:38', 'Golfrid Woren Wel Pumpente, S.Kom', 0),
(70, 'TESJO', 'PIECES', 2, '2', 2, '18092023102905mac-book-air-m1-3.jpg', '2023-09-18 16:29:05', 'dummy', 0),
(71, 'MACBOOK', 'PIECES', 21, '2', 2, '120720240117340JrPmXc-fbi-wallpaper.jpg', '2024-07-12 9:17:34', 'Doni', 0),
(72, 'MACBOOK', 'PIECES', 20, '2', 1, '120720240118151eb57161bf1e2a7897945bf3216000a6.jpg', '2024-07-12 9:18:15', 'Doni', 0),
(73, 'TESTTT', 'PIECES', 1, '2', 1, '12072024012210291.jpg', '2024-07-12 9:22:10', 'Doni', 0),
(74, 'MACBOOK', 'PIECES', 19, '2', 1, '12072024150300WhatsApp Image 2024-07-04 at 16.34.2', '2024-07-12 23:03:00', 'Doni', 0),
(75, 'MACBOOK', 'PIECES', 18, '2', 1, '12072024150352WhatsApp Image 2023-10-16 at 13.49.1', '2024-07-12 23:03:52', 'Doni', 0),
(76, 'MACBOOK', 'PIECES', 17, '2', 1, '12072024153316IMG_3177.PNG', '2024-07-12 23:33:16', 'Doni', 0),
(77, 'MACBOOK', 'PIECES', 17, '2', 1, '12072024153342IMG_3177.PNG', '2024-07-12 23:33:42', 'Doni', 0),
(78, 'MACBOOK', 'PIECES', 16, '2', 1, '12072024153429flowclaims.jpg', '2024-07-12 23:34:29', 'Doni', 0);

-- --------------------------------------------------------

--
-- Table structure for table `i_us3r`
--

CREATE TABLE `i_us3r` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT 'unknown',
  `password` varchar(300) NOT NULL DEFAULT 'unidentified',
  `nama_lgkp` varchar(300) NOT NULL DEFAULT 'unknown',
  `nip` varchar(20) NOT NULL DEFAULT '0',
  `jabatan` varchar(250) NOT NULL DEFAULT 'unknown',
  `flag` varchar(2) NOT NULL DEFAULT '00',
  `photo` varchar(70) NOT NULL DEFAULT 'x.jpg',
  `time_entry` varchar(50) NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `i_us3r`
--

INSERT INTO `i_us3r` (`id`, `username`, `password`, `nama_lgkp`, `nip`, `jabatan`, `flag`, `photo`, `time_entry`) VALUES
(2, 'syibli', '$2y$10$ilVqD32IKBRcFZqpIOdJw.ufCW3IxuCYqfMO8so3O6Qf/N1x8k9FO', 'Muhammad Syibli, S.Tr.Stat', '200011072023101001', 'Pelaksana', '1', '23062024043511221911062_MUHAMMAD SYIBLI.JPG', '2023-08-27 18:42:28'),
(9, 'helo', '$2y$10$mftaKAnx/ZI4yjy1JUGY0OTEV9wA9YCYS9K5F5Bs9FX.LFLWAq2qW', 'Pengguna, S.Kom', '19832938928392839823', 'Pranata Komputer Ahli Muda', '2', '27082023124057photo_2023-08-21 08.45.14.jpeg', '2023-08-27 18:41:55'),
(10, 'testing', '$2y$10$m0pK8cBELwrXmCfiehYFk.slBUb7OpYeyVQdmit674/l28AqpdWXO', 'testing', '123', 'Statistisi Ahli Pertama', '1', '14092023160011Backdrop HSN 2023.jpg', '2023-09-14 22:00:11'),
(11, 'dummy', '$2y$10$VVK8adMgLMfFsNzn/rTzv.YJxBW8oKVmC9IfmMRq4EI77V3YpwQsy', 'dummy', '0', 'Statistisi Ahli Muda', '1', '18092023102756user.jpeg', '2023-09-18 16:27:56'),
(12, 'doni123', '$2y$10$6/sSDHhfLLKS51rdCVZG4OdCKuj4PBp49d5aASR5hG7IK8cXxQseW', 'Doni', '221911062', 'Pranata Komputer Ahli Pertama', '2', '230620240207330JrPmXc-fbi-wallpaper.jpg', '2024-06-23 10:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int NOT NULL,
  `nama_barang` varchar(35) NOT NULL DEFAULT 'unidentified',
  `satuan_barang` varchar(20) NOT NULL DEFAULT '0',
  `jumlah_barang` int NOT NULL DEFAULT '0',
  `tgl_pengajuan` varchar(35) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_update_pengajuan` varchar(35) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_pengajuan` varchar(100) NOT NULL DEFAULT 'unidentified',
  `progress_pengajuan` int NOT NULL DEFAULT '0',
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `nama_barang`, `satuan_barang`, `jumlah_barang`, `tgl_pengajuan`, `tgl_update_pengajuan`, `nama_pengajuan`, `progress_pengajuan`, `alasan`) VALUES
(1, 'ENTAH APA', 'PIECES', 4, '2023-09-18 14:58:03', '2023-09-18 15:43:14', 'g', 2, ''),
(2, 'TESTING AJA', 'RIM', 3, '2023-09-18 15:12:24', '2023-09-18 15:43:17', 'g', 1, ''),
(3, 'TES', 'BOX @350', 2, '2023-09-18 15:35:56', '2023-09-18 15:43:09', 'g', 2, 'none'),
(4, 'AJUKAN AWAL', 'RIM', 4, '2023-09-18 15:48:11', '2023-10-06 6:11:20', 'g', 2, 'none'),
(13, 'MACBOOK', 'PIECES', 1, '2024-07-07 2:09:53', '0000-00-00', 'syibli', 0, 'none'),
(14, 'MACBOOK', 'PIECES', 2, '2024-07-07 22:07:56', '2024-07-07 22:08:14', 'doni123', 0, 'none'),
(15, 'PAPER CLIP', 'BOX @350', 2, '2024-07-08 21:16:16', '2024-07-12 9:27:06', 'doni123', 0, 'none'),
(16, 'MACBOOK', 'PIECES', 1, '2024-07-11 21:41:50', '2024-07-12 9:27:25', 'doni123', 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `pengusulan`
--

CREATE TABLE `pengusulan` (
  `id` int NOT NULL,
  `nama_barang` varchar(35) NOT NULL DEFAULT 'unidentified',
  `satuan_barang` varchar(20) NOT NULL DEFAULT '0',
  `jumlah_barang` int NOT NULL DEFAULT '0',
  `tgl_pengusulan` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_update_pengusulan` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama_pengusulan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'unidentified',
  `progress_pengusulan` int NOT NULL DEFAULT '0',
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengusulan`
--

INSERT INTO `pengusulan` (`id`, `nama_barang`, `satuan_barang`, `jumlah_barang`, `tgl_pengusulan`, `tgl_update_pengusulan`, `nama_pengusulan`, `progress_pengusulan`, `alasan`) VALUES
(2, 'MACBOOK', 'PIECES', 2, '2024-07-08 21:13:26', '0000-00-00', 'doni123', 0, 'none'),
(3, 'KERTAS A4 SINAR DUA (100, @50000)', 'RIM', 2, '2024-07-09 21:56:39', '0000-00-00', 'syibli', 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int NOT NULL,
  `nama_satuan` varchar(25) NOT NULL DEFAULT 'undefined',
  `status` int NOT NULL DEFAULT '0',
  `time_entry` varchar(50) NOT NULL DEFAULT '0000:00:00 00-00-0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `nama_satuan`, `status`, `time_entry`) VALUES
(85, 'PIECES', 1, '2023-08-27 0:49:43'),
(87, 'BOX @350', 1, '2023-08-27 0:57:26'),
(88, 'RIM', 1, '2023-08-27 1:00:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_us3r`
--
ALTER TABLE `i_us3r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengusulan`
--
ALTER TABLE `pengusulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `i_us3r`
--
ALTER TABLE `i_us3r`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengusulan`
--
ALTER TABLE `pengusulan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
