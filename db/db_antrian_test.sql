-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 01:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(3) UNSIGNED ZEROFILL NOT NULL,
  `loket` enum('Pelayanan Publik','Informasi dan Pengaduan','','') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `loket`, `nama`, `status`, `updated_date`) VALUES
(26, '2022-08-23', 001, 'Pelayanan Publik', 'Finto', '0', NULL),
(27, '2022-08-23', 002, 'Pelayanan Publik', 'Def', '0', NULL),
(28, '2022-08-24', 001, 'Pelayanan Publik', 'Def', '1', '2022-08-24 16:35:07'),
(29, '2022-08-24', 002, 'Informasi dan Pengaduan', 'Sulaiman', '1', '2022-08-24 16:35:57'),
(30, '2022-08-25', 001, 'Pelayanan Publik', 'rida intan martiwulan', '0', NULL),
(31, '2022-08-25', 002, 'Pelayanan Publik', 'Rida Intan Martiwulan ', '0', NULL),
(34, '2022-08-28', 001, 'Informasi dan Pengaduan', 'Fahri Test', '1', '2022-08-28 14:36:19'),
(35, '2022-08-29', 001, 'Pelayanan Publik', 'Auzan', '0', NULL),
(36, '2022-08-30', 001, 'Pelayanan Publik', 'Fahri', '1', '2022-08-30 17:02:12'),
(37, '2022-08-30', 002, 'Informasi dan Pengaduan', 'Gunawan', '1', '2022-08-30 17:19:44'),
(38, '2022-08-30', 003, 'Pelayanan Publik', 'Tyyy', '1', '2022-08-30 17:20:39'),
(39, '2022-08-30', 004, 'Informasi dan Pengaduan', 'Pak eko', '0', NULL),
(40, '2022-08-30', 005, 'Pelayanan Publik', 'Uddin', '1', '2022-08-30 17:20:15'),
(41, '2022-08-30', 006, 'Informasi dan Pengaduan', 'Gg', '0', NULL),
(42, '2022-08-30', 007, 'Pelayanan Publik', 'Yuliana', '1', '2022-08-30 18:10:50'),
(43, '2022-08-30', 008, 'Informasi dan Pengaduan', 'Nisa', '1', '2022-08-30 17:24:17'),
(44, '2022-08-31', 001, 'Pelayanan Publik', 'Mirah', '0', NULL),
(45, '2022-08-31', 002, 'Pelayanan Publik', 'Mirah', '0', NULL),
(46, '2022-09-01', 001, 'Informasi dan Pengaduan', 'Hhjk', '0', NULL),
(47, '2022-09-06', 001, 'Pelayanan Publik', 'Belinda Priharum', '0', NULL),
(48, '2022-09-07', 001, 'Pelayanan Publik', 'Belinda P', '0', NULL),
(49, '2022-09-29', 001, 'Pelayanan Publik', 'Rina Susilawati', '0', NULL),
(50, '2022-11-21', 001, 'Pelayanan Publik', 'Revan', '0', NULL),
(51, '2022-11-23', 001, 'Pelayanan Publik', 'luqman', '1', '2022-11-23 09:24:04'),
(52, '2022-11-24', 001, 'Informasi dan Pengaduan', 'Tes ', '1', '2022-11-24 08:38:53'),
(53, '2022-11-24', 002, 'Pelayanan Publik', 'Tes ', '1', '2022-11-24 14:24:33'),
(54, '2023-02-07', 001, 'Pelayanan Publik', 'Gina Widyanti', '0', NULL),
(55, '2023-03-03', 001, 'Pelayanan Publik', 'Esa kurnia', '0', NULL),
(56, '2023-04-05', 001, 'Pelayanan Publik', 'Luqman Sulistyo Budi', '0', NULL),
(57, '2023-04-11', 001, 'Pelayanan Publik', 'Aji', '0', NULL),
(58, '2023-04-14', 001, 'Pelayanan Publik', 'Ahmad Kholidi Nasution', '0', NULL),
(59, '2023-05-11', 001, 'Pelayanan Publik', 'Luqman Sulistyo Budi', '0', NULL),
(60, '2023-07-03', 001, 'Pelayanan Publik', 'Erwin', '0', NULL),
(61, '2023-07-11', 001, 'Pelayanan Publik', 'Josua batubara', '0', NULL),
(62, '2023-07-12', 001, 'Pelayanan Publik', 'Fajar f', '0', NULL),
(63, '2023-07-14', 001, 'Pelayanan Publik', 'Ayu kusuma puspitasari', '0', NULL),
(64, '2023-08-01', 001, 'Pelayanan Publik', 'Rifqi Fauzi Kamal', '0', NULL),
(65, '2023-08-01', 002, 'Pelayanan Publik', 'Heri s', '0', NULL),
(66, '2023-08-01', 003, 'Pelayanan Publik', 'Luqman Sulistyo', '0', NULL),
(67, '2023-08-08', 001, 'Pelayanan Publik', 'Fazri Yayang Hidayat', '0', NULL),
(68, '2023-08-11', 001, 'Pelayanan Publik', 'Bambang Tri ', '0', NULL),
(69, '2023-08-28', 001, 'Pelayanan Publik', 'Fahri', '1', '2023-08-28 16:25:20'),
(70, '2023-10-27', 001, 'Pelayanan Publik', 'Doni Ramdhani', '0', NULL),
(71, '2023-10-27', 002, 'Pelayanan Publik', 'Rizal sidiq', '0', NULL),
(72, '2023-11-17', 001, 'Pelayanan Publik', 'Rezza wicaksono', '0', NULL),
(73, '2023-11-30', 001, 'Pelayanan Publik', 'Sugeng', '0', NULL),
(74, '2023-12-05', 001, 'Pelayanan Publik', 'Fahri', '0', NULL),
(75, '2023-12-05', 002, 'Pelayanan Publik', 'SANIN', '0', NULL),
(76, '2023-12-11', 001, 'Pelayanan Publik', 'fahri', '1', '2023-12-11 17:07:24'),
(77, '2023-12-13', 001, 'Pelayanan Publik', 'sekar', '0', NULL),
(78, '2023-12-14', 001, 'Informasi dan Pengaduan', 'auuzan', '0', NULL),
(79, '2023-12-19', 001, 'Pelayanan Publik', 'Firman', '0', NULL),
(80, '2023-12-29', 001, 'Pelayanan Publik', 'Rian majid', '0', NULL),
(81, '2024-02-02', 001, 'Pelayanan Publik', 'Darta', '0', NULL),
(82, '2024-02-12', 001, 'Pelayanan Publik', 'Sudarta', '0', NULL),
(83, '2024-06-05', 001, 'Pelayanan Publik', 'Janing', '0', NULL),
(84, '2024-06-20', 001, 'Pelayanan Publik', 'Anggar', '1', '2024-06-20 19:02:13'),
(85, '2024-06-21', 001, 'Pelayanan Publik', 'Gdgdgd', '1', '2024-06-21 19:49:21'),
(86, '2024-06-21', 002, 'Informasi dan Pengaduan', 'Naufal andra', '1', '2024-06-21 19:49:38'),
(87, '2024-06-24', 001, 'Pelayanan Publik', '352525252000333', '1', '2024-06-24 14:30:52'),
(88, '2024-06-28', 001, 'Pelayanan Publik', 'Rully Lukas Tampubolon', '0', NULL),
(89, '2024-07-15', 001, 'Pelayanan Publik', 'Wahyudiw', '0', NULL),
(90, '2024-07-16', 001, 'Pelayanan Publik', 'Agit', '0', NULL),
(91, '2024-07-17', 001, 'Pelayanan Publik', 'Fahri', '0', NULL),
(92, '2024-07-25', 001, 'Pelayanan Publik', 'Fahri Gunawan', '0', NULL),
(93, '2024-07-26', 001, 'Informasi dan Pengaduan', 'dojdkjdkjndk', '0', NULL),
(94, '2024-07-26', 002, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(95, '2024-07-26', 003, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(96, '2024-07-26', 004, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(97, '2024-07-26', 005, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(98, '2024-07-26', 006, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(99, '2024-07-26', 007, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(100, '2024-07-26', 008, 'Pelayanan Publik', 'dojdkjdkjndk', '0', NULL),
(101, '2024-07-26', 009, 'Pelayanan Publik', '1', '0', NULL),
(102, '2024-07-26', 010, 'Pelayanan Publik', '1', '0', NULL),
(103, '2024-07-26', 011, 'Pelayanan Publik', '1-- -', '0', NULL),
(104, '2024-07-26', 012, 'Pelayanan Publik', '1 order by 1-- -', '0', NULL),
(105, '2024-07-26', 013, 'Pelayanan Publik', '1 order by 10000-- -', '0', NULL),
(106, '2024-07-26', 014, 'Pelayanan Publik', 'Ysys', '0', NULL),
(107, '2024-07-26', 015, 'Pelayanan Publik', 'tes', '0', NULL),
(108, '2024-07-26', 016, 'Informasi dan Pengaduan', 'sss', '0', NULL),
(109, '2024-07-26', 017, 'Informasi dan Pengaduan', 'sss', '0', NULL),
(110, '2024-07-26', 018, 'Informasi dan Pengaduan', 'ssssssss', '0', NULL),
(111, '2024-08-01', 001, 'Pelayanan Publik', 'fah', '1', '2024-08-01 14:55:29'),
(112, '2024-08-08', 001, 'Pelayanan Publik', 'gg', '0', NULL),
(113, '2024-08-10', 001, 'Pelayanan Publik', 'Fahri Gunawan', '1', '2024-08-10 11:12:07'),
(114, '2024-08-10', 002, 'Pelayanan Publik', 'Ulva Aryani', '0', NULL),
(115, '2024-08-10', 003, 'Pelayanan Publik', 'Diana Maryati', '0', NULL),
(116, '2024-08-10', 004, 'Pelayanan Publik', 'Aslijan Salahudin', '0', NULL),
(117, '2024-08-10', 005, 'Pelayanan Publik', 'Wulan Pudjiastuti', '0', NULL),
(118, '2024-08-10', 006, 'Pelayanan Publik', 'Wulan Pudjiastuti', '0', NULL),
(119, '2024-08-10', 007, 'Pelayanan Publik', 'Danu Widodo', '0', NULL),
(120, '2024-08-10', 008, 'Pelayanan Publik', 'Jaswadi Zulkarnain', '0', NULL),
(121, '2024-08-10', 009, 'Pelayanan Publik', 'Bagas Uwais', '0', NULL),
(122, '2024-08-10', 010, 'Pelayanan Publik', 'Sabrina Melani', '0', NULL),
(123, '2024-08-13', 001, 'Pelayanan Publik', 'a', '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
