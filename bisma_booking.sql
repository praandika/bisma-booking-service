-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 05:47 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisma_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopol` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_dealer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kordinat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `kode_dealer`, `kordinat`, `qrcode`, `created_at`, `updated_at`) VALUES
(1, 'AA0101', 'https://www.google.com/maps/place/Yamaha+Bisma+Central/@-8.675302,115.207086,17z/data=!4m5!3m4!1s0x0:0x1c33f11387a2f495!8m2!3d-8.6753023!4d115.2070862?hl=en-US', 'sentral-loc.png', '2019-11-11 16:00:00', NULL),
(2, 'AA0102', 'https://www.google.com/maps?ll=-8.639913,115.207931&z=17&t=m&hl=en-US&gl=US&mapclient=embed&cid=17896922499717399268', 'bmm-loc.png', '2019-11-11 16:00:00', NULL),
(3, 'AA0104', 'https://www.google.com/maps/place/UD+Bisma+Motor/@-8.658176,115.2105227,16.25z/data=!4m5!3m4!1s0x0:0x958876db0e2980b!8m2!3d-8.658418!4d115.2119889?hl=en-US', 'hasanuddin-loc.png', '2019-11-11 16:00:00', NULL),
(4, 'AA0105', 'https://www.google.com/maps/place/Yamaha+Tri+Tunggal+Sejahtera/@-8.635941,115.215783,17z/data=!4m5!3m4!1s0x0:0x5e58db139fcc999e!8m2!3d-8.635941!4d115.215783?hl=en-US', 'tts-loc.png', '2019-11-11 16:00:00', NULL),
(5, 'AA0107', 'https://www.google.com/maps/place/Yamaha+CV.+Bisma+Mandiri/@-8.68183,115.190823,17z/data=!4m5!3m4!1s0x0:0xb0ad2fbe9ef1115d!8m2!3d-8.6818305!4d115.1908231?hl=en-US', 'mandiri-loc.png', '2019-11-11 16:00:00', NULL),
(6, 'AA0108', 'https://www.google.com/maps/place/Yamaha+Bisma+Supratman/@-8.648959,115.231821,17z/data=!4m5!3m4!1s0x0:0xb7f37269939bac0b!8m2!3d-8.648959!4d115.231821?hl=en-US', 'supratman-loc.png', '2019-11-11 16:00:00', NULL),
(7, 'AA0109', 'https://www.google.com/maps/place/Yamaha+Bisma+S.R/@-8.707559,115.183249,17z/data=!4m5!3m4!1s0x0:0x507eed810480e9ed!8m2!3d-8.7075594!4d115.1832492?hl=en-US', 'sunset-loc.png', '2019-11-11 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_11_08_030614_create_booking_table', 1),
(2, '2019_11_12_023951_create_dealer_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
