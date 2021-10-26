-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2020 at 12:43 AM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8026447_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `dealer_kode` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopol` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_booking`, `dealer_kode`, `dealer`, `tanggal`, `waktu`, `type`, `nama`, `kontak`, `nopol`, `service`, `keluhan`, `token`, `created_at`, `updated_at`) VALUES
(8, 'AA0107', 'Bisma Mandiri', '2020-01-06', '14.00', 'Aerox', 'Ayu T', '0811997639', 'DK 3768FBP', 'KSG', 'Service 1', 'BO20200106055128', '2020-01-05 22:52:16', NULL),
(9, 'AA0107', 'Bisma Mandiri', '2020-01-15', '09.00', 'Nmax', 'Dian Maharani', '087855594949', '2735 XX', 'KSG', '-', 'BO20200114111044', '2020-01-14 04:25:19', NULL),
(11, 'AA0105', 'Bisma TTS', '2020-01-18', '09.00', 'Mio Series', 'Syaifuddin', '082359390260', 'Dk 4763 abm', 'Service Ringan', 'Pak mesin bocor dan sekalian service kabilator', 'BO20200116095025', '2020-01-16 03:20:06', NULL),
(12, 'AA0109', 'Bisma Sunset Road', '2020-01-27', '09.00', 'Mio Series', 'Brian', '087862035334', 'DK 3989 AZ', 'Service Ringan', 'Tune Up, Ganti Oli, Cek speedometer, spion kanan longgar, rem depan belakang', 'BO20200123174452', '2020-01-23 10:46:21', NULL),
(13, 'AA0105', 'Bisma TTS', '2020-01-25', '10.00', 'Nmax', 'Tuhendra Wijaya', '087861250520', 'DK 7475 QG', 'KSG', 'Mau memperbaiki & mengganti deck yg patah. Tks', 'BO20200124154038', '2020-01-24 08:41:47', NULL),
(14, 'AA0105', 'Bisma TTS', '2020-02-01', '09.00', 'Fino', 'Hj. Rohemah', '081236213973', 'DK 5351', 'Service Ringan', NULL, 'BO20200128131819', '2020-01-28 06:20:00', NULL),
(15, 'AA0107', 'Bisma Mandiri', '2020-01-30', '11.00', 'Nmax', 'Henny', '0813801150', 'DK 6357 JA', 'Service Ringan', 'Service Ringan dan Ganti Oli', 'BO20200129090534', '2020-01-29 02:07:13', NULL),
(16, 'AA0107', 'Bisma Mandiri', '2020-02-06', '09.00', 'Aerox', 'Brian', '082288882672', 'Dk 6219 lo', 'Service Ringan', NULL, 'BO20200205223843', '2020-02-05 15:42:03', NULL),
(17, 'AA0102', 'Bisma BMM', '2020-02-11', '14.00', 'Mio Series', 'Hanif', '081214709929', 'DK 5656 DW', 'Ganti Oli', 'Tarikan sudah mulai getar', 'BO20200206171840', '2020-02-06 10:19:43', NULL),
(18, 'AA0107', 'Bisma Mandiri', '2020-02-08', '11.00', 'Nmax', 'Rolando Hermanus', '081999552030', 'DK.6636.ABC', 'KSG', NULL, 'BO20200207095448', '2020-02-07 03:17:43', NULL),
(22, 'AA0109', 'Bisma Sunset Road', '2020-02-13', '13:00', 'Nmax', 'IK. Surya Negara', '081999343536', 'DK 6547 ABR', 'Service Ringan', 'cek kampas rem cakram belakang sepertinya habis', 'BO20200212123951', '2020-02-12 05:41:22', NULL),
(20, 'AA0108', 'Bisma WR Supratman', '2020-02-11', '10:00', 'Nmax', 'Wyn Wijaya kusuma', '085237176794', 'Belum dapet plat', 'KSG', 'TDK ada', 'BO20200210111017', '2020-02-10 04:11:11', NULL),
(21, 'AA0109', 'Bisma Sunset Road', '2020-02-11', '10:00', 'Nmax', 'hanif', '081214709929', 'DK 6758 ABA', 'Service Ringan', 'tidak ada', 'BO20200210114156', '2020-02-10 04:47:56', NULL),
(23, 'AA0108', 'Bisma WR Supratman', '2020-02-18', '09:00', 'Nmax', 'Ayu mahasari', '087860011223', '4221 abu', 'KSG', NULL, 'BO20200216092542', '2020-02-16 02:29:06', NULL),
(24, 'AA0105', 'Bisma TTS', '2020-02-18', '09:00', 'Nmax', 'Ayu mahasari', '087860011223', '4221abu', 'KSG', NULL, 'BO20200216092935', '2020-02-16 02:29:59', NULL),
(25, 'AA0107', 'Bisma Mandiri', '2020-02-21', '11:00', 'Nmax', 'Widhi', '08191620716', 'DK 3885 XX', 'Ganti Oli', NULL, 'BO20200220075702', '2020-02-20 00:58:38', NULL),
(26, 'AA0105', 'Bisma TTS', '2020-02-24', '09:00', 'Nmax', 'Ida bagus aris pramana', '087862146316', 'DK3419FAF', 'Service Ringan', 'Ganti vbelt, service ringan, ganti oli', 'BO20200222141443', '2020-02-22 07:17:40', NULL),
(29, 'AA0105', 'Bisma TTS', '2020-02-26', '10:00', 'Nmax', 'Putu Agus Indra juliantika', '081339941677', 'DK 2866 XX', 'KSG', NULL, 'BO20200225092313', '2020-02-25 02:24:03', NULL),
(28, 'AA0105', 'Bisma TTS', '2020-02-25', '09:00', 'Nmax', 'NYOMAN SUKA', '082144331663', 'DK 4822 XX', 'KSG', NULL, 'BO20200224095921', '2020-02-24 02:59:59', NULL),
(30, 'AA0107', 'Bisma Mandiri', '2020-02-26', '11:00', 'Nmax', 'Ivan Al farisi', '083119548652', 'DK-3545-ACE', 'KSG', 'Tarikan berat. Kadang\" mati', 'BO20200225125650', '2020-02-25 06:01:28', NULL),
(31, 'AA0107', 'Bisma Mandiri', '2020-03-02', '13:00', 'Aerox', 'SHAE MACNAMARA', '081805616823', 'Dk 1813aab', 'KSG', NULL, 'BO20200225131431', '2020-02-25 06:15:35', NULL),
(32, 'AA0105', 'Bisma TTS', '2020-02-26', '09:00', 'Nmax', 'Dewa ayu santi windasari', '081236462345', 'DK 2029 FBS', 'KSG', 'Service motor baru pertama kali', 'BO20200225165836', '2020-02-25 09:59:55', NULL),
(33, 'AA0107', 'Bisma Mandiri', '2020-02-27', '09:00', 'Nmax', 'Ivan Al farisi', '083119548652', 'Dk3545ACE', 'KSG', 'Kadang\" mati sendiri/tarikan berat', 'BO20200226161615', '2020-02-26 09:17:33', NULL),
(34, 'AA0105', 'Bisma TTS', '2020-03-05', '10:00', 'Nmax', 'I GEDE OKA BINTARAYASA', '081237945366', 'DK 4390 AAE', 'KSG', 'CEK SEMUA , SERVICE DAN GANTI OLI', 'BO20200304112010', '2020-03-04 04:21:24', NULL),
(35, 'AA0105', 'Bisma TTS', '2020-03-05', '09:00', 'Nmax', 'I WAYAN ARIS HERMAWAN N', '081547536136', 'DK 5981 XY', 'KSG', '-', 'BO20200304141946', '2020-03-04 07:21:07', NULL),
(36, 'AA0105', 'Bisma TTS', '2020-03-07', '09:00', 'Nmax', 'WREDIAYU CAHYANINGTYAS', '08123711086', 'DK 3012 XX', 'KSG', 'CEK TARIKAN GAK BISA NANCAP', 'BO20200304155455', '2020-03-04 08:57:10', NULL),
(37, 'AA0107', 'Bisma Mandiri', '2020-03-07', '10:00', 'Lexi', 'Putu sinta wulandari', '085847826531', 'DK 6247 XZ', 'Ganti Oli', NULL, 'BO20200305172357', '2020-03-05 10:25:39', NULL),
(38, 'AA0105', 'Bisma TTS', '2020-03-07', '09:00', 'Nmax', 'I GUSTI KETUT BUDIANTA', '082237451591', 'DK 4785 TI', 'KSG', 'service , ganti oli mesin dan oli gardan, tarikan agak berat', 'BO20200306145011', '2020-03-06 07:52:01', NULL),
(39, 'AA0105', 'Bisma TTS', '2020-03-11', '09:00', 'Nmax', 'I GUSTI AYU MADE SRI WIKASIH', '081931558951', 'DK 4902 ABW', 'KSG', '-', 'BO20200310123910', '2020-03-10 05:40:05', NULL),
(40, 'AA0105', 'Bisma TTS', '2020-03-11', '10:00', 'Lexi', 'NI KADEK CITRA WATI', '085934248489', 'DK 4559 ACE', 'KSG', '-', 'BO20200310142251', '2020-03-10 07:23:35', NULL),
(41, 'AA0105', 'Bisma TTS', '2020-03-12', '09:00', 'Lexi', 'FREDERYK JARWANTO, SP', '0818631369', 'DK 4584 ACI', 'KSG', NULL, 'BO20200311093209', '2020-03-11 02:34:23', NULL),
(42, 'AA0107', 'Bisma Mandiri', '2020-03-14', '11:00', 'Nmax', 'Ni kadek indah dian lestari', '082236622218', '-', 'Ganti Oli', 'Servis pertama', 'BO20200313105130', '2020-03-13 03:54:31', NULL),
(43, 'AA0107', 'Bisma Mandiri', '2020-03-23', '11:00', 'Freego', 'Arisandy Zanda Turmudi', '082244309258', 'DK 2803 XX', 'KSG', NULL, 'BO20200322140447', '2020-03-22 07:06:57', NULL),
(44, 'AA0105', 'Bisma TTS', '2020-03-24', '09:00', 'Nmax', 'SUTAWAR', '082340654958', 'DK 6457 XX', 'KSG', NULL, 'BO20200323153804', '2020-03-23 08:39:06', NULL),
(45, 'AA0107', 'Bisma Mandiri', '2020-03-24', '09:00', 'Mio Series', 'Randy', '08882016400', 'DK 4604 UV', 'KSG', 'Motor tidak dapat menyala', 'BO20200323192406', '2020-03-23 12:25:28', NULL),
(46, 'AA0109', 'Bisma Sunset Road', '2020-03-31', '10:00', 'Nmax', 'Ray', '081318318988', 'DK6656ABA', 'Ganti Oli', NULL, 'BO20200327083919', '2020-03-27 01:40:56', NULL),
(47, 'AA0107', 'Bisma Mandiri', '2020-03-28', '10:00', 'Nmax', 'I putu eka saputra', '081933077192', 'Plat sementara 5491XZ', 'KSG', NULL, 'BO20200327111559', '2020-03-27 04:18:05', NULL),
(48, 'AA0107', 'Bisma Mandiri', '2020-03-28', '14:00', 'Freego', 'Arisandy Zanda Turmudi', '082244309258', 'DK 2803 XX', 'KSG', NULL, 'BO20200328020223', '2020-03-27 19:02:55', NULL),
(49, 'AA0109', 'Bisma Sunset Road', '2020-03-30', '10:00', 'Fino', 'tes', '08180545567', 'dk34443ag', 'Service Ringan', 'dxfsf', 'BO20200328165155', '2020-03-28 09:52:31', NULL),
(50, 'AA0107', 'Bisma Mandiri', '2020-03-30', '09:00', 'Nmax', 'Dian Maharani', '087855594949', '3034 ACF', 'KSG', NULL, 'BO20200329194651', '2020-03-29 12:47:27', NULL),
(51, 'AA0105', 'Bisma TTS', '2020-03-31', '09:00', 'Nmax', 'FAHRIL ADI SETIAWAN', '0895331310673', 'DK4585XX', 'KSG', '-', 'BO20200330104909', '2020-03-30 03:51:10', NULL),
(52, 'AA0109', 'Bisma Sunset Road', '2020-04-08', '09:00', 'Nmax', 'I Nyoman Arsana', '087841127872', 'Dk 3868 FBM', 'KSG', 'Rem belakang bunyi,sangat berisik pas direm,pas jalan biasanya juga kadang bunyi', 'BO20200407143757', '2020-04-07 07:40:51', NULL),
(53, 'AA0109', 'Bisma Sunset Road', '2020-04-11', '10:00', 'Freego', 'I Ketut Sudana', '08123649648', 'DK-5504-XX', 'KSG', NULL, 'BO20200410175139', '2020-04-10 10:53:59', NULL),
(54, 'AA0107', 'Bisma Mandiri', '2020-04-13', '13:00', 'Nmax', 'I made sudiana', '08970171743', '2297 xx', 'Ganti Oli', NULL, 'BO20200413054600', '2020-04-12 22:49:29', NULL),
(55, 'AA0107', 'Bisma Mandiri', '2020-04-14', '09:00', 'Nmax', 'Ni ketut widiyanti', '085738191898', 'Dk 2294 XX', 'KSG', NULL, 'BO20200413100044', '2020-04-13 03:01:47', NULL),
(56, 'AA0107', 'Bisma Mandiri', '2020-04-14', '09:00', 'Lexi', 'Teguh Arifianto', '08123856788', 'DK 3443 XX', 'KSG', NULL, 'BO20200413110753', '2020-04-13 04:09:45', NULL),
(57, 'AA0107', 'Bisma Mandiri', '2020-04-25', '09:00', 'Freego', 'Arisandy Zanda Turmudi', '082244309258', 'DK 2803 XX', 'KSG', NULL, 'BO20200424163032', '2020-04-24 09:31:04', NULL),
(58, 'AA0107', 'Bisma Mandiri', '2020-04-29', '10:00', 'Nmax', 'Wilda sinta', '081353303151', 'Dk 2867 xx', 'KSG', NULL, 'BO20200428175358', '2020-04-28 10:54:27', NULL),
(59, 'AA0107', 'Bisma Mandiri', '2020-05-02', '09:00', 'Aerox', 'andi', '082236361001', 'dk1900ad', 'Service Ringan', NULL, 'BO20200501095931', '2020-05-01 02:59:53', NULL),
(60, 'AA0107', 'Bisma Mandiri', '2020-05-12', '11:00', 'Nmax', 'I Made Aditya Darma Putra', '087859535978', 'DK 3219 ABS', 'KSG', 'Agak ngeden kalau di pakai ngebut', 'BO20200511222249', '2020-05-11 15:26:09', NULL),
(61, 'AA0107', 'Bisma Mandiri', '2020-05-15', '10:00', 'Nmax', 'Kadek Dwi supriyatna', '081238434987', '6373 DWI', 'Ganti Oli', NULL, 'BO20200514214405', '2020-05-14 14:45:59', NULL),
(62, 'AA0107', 'Bisma Mandiri', '2020-05-20', '14:00', 'Mio Soul GT', 'Ida Bgs Mulyantara', '08124624022', 'DK2449if', 'Service Ringan', NULL, 'BO20200519095503', '2020-05-19 03:01:48', NULL),
(63, 'AA0109', 'Bisma Sunset Road', '2020-05-22', '09:00', 'Nmax', 'I wayan Candra satria', '081805562442', 'Dk 2537 fbu', 'KSG', NULL, 'BO20200521144450', '2020-05-21 07:46:40', NULL),
(64, 'AA0108', 'Bisma WR Supratman', '2020-05-23', '11:00', 'Nmax', 'I Made Gede Wira Bhuana P', '087860209408', '5293 ABK', 'KSG', '-', 'BO20200522125620', '2020-05-22 06:18:41', NULL),
(65, 'AA0105', 'Bisma TTS', '2020-05-25', '09:00', 'Nmax', 'Dewa ayu santi windasari', '081236462345', 'DK 2029 FBS', 'KSG', 'Mau service yg kedua kalinya untuk 4000 km, karena sudah ada tulisan “OIL” 21,4 km di layar motornya ,sudah waktunya service juga', 'BO20200523143415', '2020-05-23 07:36:35', NULL),
(66, 'AA0105', 'Bisma TTS', '2020-05-26', '09:00', 'Nmax', 'Dewa ayu santi windasari', '081236462345', 'DK 2029 FBS', 'KSG', 'Service kedua karena sudah waktu,dan tanda oil di layar nyala', 'BO20200525194229', '2020-05-25 12:44:29', NULL),
(67, 'AA0105', 'Bisma TTS', '2020-05-29', '09:00', 'Nmax', 'I Made Dwi Putra Utama', '081242301530', 'DK 3409 FBU', 'KSG', 'Mesin bunyi tik tik, normal atau tidak?', 'BO20200528115555', '2020-05-28 04:58:57', NULL),
(68, 'AA0105', 'Bisma TTS', '2020-06-01', '09:00', 'Mio Series', 'Pipin pefrianto', '081366079742', 'DK 5440 DC', 'KSG', 'Lampu indikator mati dan motor mati', 'BO20200531130310', '2020-05-31 06:03:58', NULL),
(69, 'AA0105', 'Bisma TTS', '2020-06-04', '09:00', 'Nmax', 'Aris hermawan', '081547536136', 'DK 4173 GAZ', 'Service Ringan', NULL, 'BO20200603095737', '2020-06-03 03:01:18', NULL),
(70, 'AA0105', 'Bisma TTS', '2020-06-08', '11:00', 'Nmax', 'Yoseph', '081558004978', 'DK 2904 ER', 'KSG', NULL, 'BO20200607161058', '2020-06-07 09:12:30', NULL),
(71, 'AA0105', 'Bisma TTS', '2020-06-09', '10:00', 'Nmax', 'I komang rai satria budiman', '082237656316', 'DK 4714 NB', 'KSG', 'Blm ada', 'BO20200607232213', '2020-06-07 16:22:39', NULL),
(72, 'AA0107', 'Bisma Mandiri', '2020-06-09', '09:00', 'Nmax', 'NI KADEK SRI DAMAYANTI', '082144923022', 'Dk 3274-ABW', 'KSG', NULL, 'BO20200608112943', '2020-06-08 04:31:40', NULL),
(73, 'AA0105', 'Bisma TTS', '2020-06-13', '09:00', 'Nmax', 'ary septian eka cahya', '081999768881', 'dk 2922 er', 'KSG', NULL, 'BO20200611104712', '2020-06-11 03:49:21', NULL),
(74, 'AA0107', 'Bisma Mandiri', '2020-06-13', '10:00', 'Lexi', 'Putu sinta wulandari', '085847826531', 'Dk 5380 pw', 'KSG', NULL, 'BO20200612210724', '2020-06-12 14:09:17', NULL),
(75, 'AA0107', 'Bisma Mandiri', '2020-06-17', '09:00', 'Nmax', 'Anak agung ayu chintya devi', '087770047064', '5443ACI', 'KSG', NULL, 'BO20200616173621', '2020-06-16 10:37:56', NULL),
(76, 'AA0107', 'Bisma Mandiri', '2020-06-17', '09:00', 'Nmax', 'Ni made kartini asih', '085337746676', '2149ABN', 'Service Ringan', NULL, 'BO20200616173928', '2020-06-16 10:40:23', NULL),
(77, 'AA0108', 'Bisma WR Supratman', '2020-06-23', '10:00', 'Lexi', 'Kadek Ana Mega Yanti', '081999214100', 'DK 4580 PW', 'Service Ringan', NULL, 'BO20200622085012', '2020-06-22 01:51:38', NULL),
(78, 'AA0108', 'Bisma WR Supratman', '2020-06-23', '14:00', 'Nmax', 'I ketut mandi wira putra', '082339524212', 'DK 2060 ACA', 'KSG', NULL, 'BO20200622105819', '2020-06-22 04:02:21', NULL),
(79, 'AA0108', 'Bisma WR Supratman', '2020-06-23', '09:00', 'Nmax', 'Ni Ketut Sekarini', '085857473313', 'DK 6408 ACC', 'Service Ringan', NULL, 'BO20200622154511', '2020-06-22 08:46:39', NULL),
(80, 'AA0105', 'Bisma TTS', '2020-06-25', '09:00', 'Aerox', 'GUNG RESTU', '087861680406', 'DK 3848 FAH', 'Service Ringan', 'GANTI BAN BELAKANG', 'BO20200624151759', '2020-06-24 08:21:26', NULL),
(81, 'AA0108', 'Bisma WR Supratman', '2020-06-27', '10:00', 'Lexi', 'IB made budiarta manuaba', '082339097375', 'DK5772 ABF', 'KSG', NULL, 'BO20200627072919', '2020-06-27 00:31:36', NULL),
(82, 'AA0105', 'Bisma TTS', '2020-06-30', '10:00', 'Nmax', 'WAYAN ERWIN', '081999226899', 'DK 4795 GBA', 'KSG', '-', 'BO20200629102422', '2020-06-29 03:25:22', NULL),
(83, 'AA0105', 'Bisma TTS', '2020-07-04', '09:00', 'Nmax', 'Winantara', '081805247384', 'Dk 2585 ABX', 'KSG', 'Stang motor agak goyang karena bekas jatuh. Dan ganti oli', 'BO20200703145715', '2020-07-03 07:59:16', NULL),
(84, 'AA0108', 'Bisma WR Supratman', '2020-07-08', '13:00', 'Nmax', 'Kadek warniti', '087860331205', 'Dk 6531 ABW', 'Ganti Oli', NULL, 'BO20200707155831', '2020-07-07 09:00:43', NULL),
(85, 'AA0105', 'Bisma TTS', '2020-07-09', '09:00', 'Jupiter MX', 'Jonatan', '081237318255', 'DK 4572 BB', 'Service Ringan', 'Cek rem dan yang lain', 'BO20200708155830', '2020-07-08 08:59:19', NULL),
(86, 'AA0105', 'Bisma TTS', '2020-07-13', '11:00', 'Nmax', 'JOSHUA DEZIKO', '0895415707770', 'DK 4505 CZ', 'KSG', NULL, 'BO20200711134455', '2020-07-11 06:47:25', NULL),
(87, 'AA0105', 'Bisma TTS', '2020-07-13', '09:00', 'Nmax', 'Ria', '081805699373', 'DK 6689 xx', 'KSG', '-', 'BO20200711195015', '2020-07-11 13:12:13', NULL),
(88, 'AA0105', 'Bisma TTS', '2020-07-15', '09:00', 'Nmax', 'A.A. NGURAH RIKY NURCAHYA', '087860424805', 'DK 4643 EW', 'KSG', NULL, 'BO20200714133704', '2020-07-14 06:38:06', NULL),
(89, 'AA0105', 'Bisma TTS', '2020-07-25', '11:00', 'Nmax', 'I WAYAN EKA KURNIAWAN, SH', '081237773089', 'DK 2207 IY', 'KSG', NULL, 'BO20200720212312', '2020-07-20 14:25:07', NULL),
(90, 'AA0104', 'Bisma Hasanuddin', '2020-07-21', '09:00', 'Nmax', 'I WAYAN EKA KURNIAWAN, SH', '081237773089', 'DK 2207 IY', 'KSG', NULL, 'BO20200720214330', '2020-07-20 14:43:56', NULL),
(91, 'AA0107', 'Bisma Mandiri', '2020-07-21', '10:00', 'Nmax', 'I WAYAN EKA KURNIAWAN, SH', '081237773089', 'DK 2207 IY', 'KSG', NULL, 'BO20200720215115', '2020-07-20 14:51:38', NULL),
(92, 'AA0107', 'Bisma Mandiri', '2020-07-22', '10:00', 'Lexi', 'Arista eka wahyuni', '081238456788', 'DK 3443 XX', 'KSG', NULL, 'BO20200721111729', '2020-07-21 04:18:09', NULL),
(93, 'AA0105', 'Bisma TTS', '2020-07-22', '10:00', 'Nmax', 'Putu arsarinanda utami dewi', '08174733991', 'Dk 3636 xx', 'KSG', '-', 'BO20200721211647', '2020-07-21 14:18:20', NULL),
(94, 'AA0107', 'Bisma Mandiri', '2020-07-23', '10:00', 'Nmax', 'Pradipta Valerian', '085967080223', 'DK3304ACK', 'KSG', 'Agak getar di tarikan bawah dan pernah sekali waktu starter langsung mati sampai 3 kali posisi sss mati', 'BO20200722125312', '2020-07-22 05:59:01', NULL),
(95, 'AA0105', 'Bisma TTS', '2020-07-25', '10:00', 'Nmax', 'NI PUTU SUARNITI', '081999343536', 'DK6547ABR', 'Service Ringan', NULL, 'BO20200724154546', '2020-07-24 08:46:32', NULL),
(96, 'AA0109', 'Bisma Sunset Road', '2020-07-30', '09:00', 'Nmax', 'Iwayan Candra Satria', '081805562442', 'DK 2537 FBU', 'KSG', NULL, 'BO20200729080948', '2020-07-29 01:10:36', NULL),
(97, 'AA0107', 'Bisma Mandiri', '2020-08-14', '09:00', 'Fino', 'ff', '54322244', 'dk4444ie', 'Service Ringan', 'ttt', 'BO20200802131505', '2020-08-02 06:15:27', NULL),
(98, 'AA0105', 'Bisma TTS', '2020-08-07', '13:00', 'Nmax', 'Santi windasari', '08123887176', 'DK-2029-FBS', 'KSG', 'Service gratis 8000 km', 'BO20200806211457', '2020-08-06 15:15:19', NULL),
(100, 'AA0107', 'Bisma Mandiri', '2020-08-14', '10.00', 'Nmax', 'Dewa made darmawan', '081338023273', 'Dk 4607 ACK', 'Ganti Oli', NULL, 'BO20200813152816', '2020-08-13 08:33:56', NULL),
(101, 'AA0105', 'Bisma TTS', '2020-08-15', '09.00', 'Nmax', 'RB. Arif Permana Kusumah', '0895329626686', 'DK 3740 FBV', 'KSG', 'Notif TCS suka tiba-tiba nyala, suara mesin bunyi keras', 'BO20200814201611', '2020-08-14 13:24:01', NULL),
(102, 'AA0108', 'Bisma WR Supratman', '2020-08-19', '13.00', 'Nmax', 'Ni Wayan Vina Utami Dewi', '085792492795', 'DK5026KAT', 'KSG', NULL, 'BO20200818225455', '2020-08-18 15:57:21', NULL),
(103, 'AA0105', 'Bisma TTS', '2020-08-24', '10.00', 'Nmax', 'Ayu Mahasari', '087860011223', '4221ABU', 'KSG', 'Bunyi pada saat rem , cek kampas rem padahal baru , tarikan gas berat', 'BO20200821181409', '2020-08-21 11:15:13', NULL),
(104, 'AA0107', 'Bisma Mandiri', '2020-08-24', '11.00', 'Nmax', 'supaidah', '081337278287', 'DK 3969 FBU', 'Service Ringan', 'Service Rutin', 'BO20200822111705', '2020-08-22 04:19:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id_dealer` bigint(20) UNSIGNED NOT NULL,
  `kode_dealer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dealer` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrcode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id_dealer`, `kode_dealer`, `nama_dealer`, `alamat`, `telp`, `koordinat`, `maps`, `qrcode`, `created_at`, `updated_at`) VALUES
(1, 'AA0101', 'Bisma Sentral', 'Jl. Teuku Umar No.172, Denpasar', '0361 232528', 'https://maps.google.com/maps?q=Yamaha%20Bisma%20Sentral&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/Yamaha+Bisma+Central/@-8.675302,115.207086,17z/data=!4m5!3m4!1s0x0:0x1c33f11387a2f495!8m2!3d-8.6753023!4d115.2070862?hl=en-US', '1574834881_sentral-loc.png', '2020-01-04 17:00:00', NULL),
(2, 'AA0102', 'Bisma BMM', 'Jl. Cokroaminoto No.78, Pemecutan Kaja, Denpasar', '0361 434775', 'https://maps.google.com/maps?q=Yamaha%20Bisma%20Cokro&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps?ll=-8.639913,115.207931&z=17&t=m&hl=en-US&gl=US&mapclient=embed&cid=17896922499717399268', '1574835038_bmm-loc.png', '2020-01-04 17:00:00', NULL),
(3, 'AA0104', 'Bisma Hasanuddin', 'Jl. Hasanuddin No.74, Pemecutan, Denpasar', '0361 422660', 'https://maps.google.com/maps?q=Yamaha%20Bisma%20Hasanuddin&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/UD+Bisma+Motor/@-8.658176,115.2105227,16.25z/data=!4m5!3m4!1s0x0:0x958876db0e2980b!8m2!3d-8.658418!4d115.2119889?hl=en-US', '1574835131_hasanuddin-loc.png', '2020-01-04 17:00:00', NULL),
(4, 'AA0105', 'Bisma TTS', 'JL. Jend Gatot Subroto Tengah No. 21-X, Denpasar', '0361 410535', 'https://maps.google.com/maps?q=Yamaha%20Bisma%20Tri%20Tunggal%20Sejahtera&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/Yamaha+Tri+Tunggal+Sejahtera/@-8.635941,115.215783,17z/data=!4m5!3m4!1s0x0:0x5e58db139fcc999e!8m2!3d-8.635941!4d115.215783?hl=en-US', '1574835230_tts-loc.png', '2020-01-04 17:00:00', NULL),
(5, 'AA0106', 'Bisma Imam Bonjol', 'Jl. Imam Bonjol No.551C, Pemecutan Klod, Denpasar', '0361 499389', 'https://maps.google.com/maps?q=Yamaha%20Bisma%20Motor%20Imam%20Bonjol&t=&z=17&ie=UTF8&iwloc=&output=embed', '', '1574835645_imbo-loc.png', '2020-01-04 17:00:00', NULL),
(6, 'AA0107', 'Bisma Mandiri', 'Jl. Teuku Umar Barat No. 100X Malboro, Denpasar', '0361 490690', 'https://maps.google.com/maps?q=CV.%20Yamaha%20Bisma%20Mandiri&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/Yamaha+CV.+Bisma+Mandiri/@-8.68183,115.190823,17z/data=!4m5!3m4!1s0x0:0xb0ad2fbe9ef1115d!8m2!3d-8.6818305!4d115.1908231?hl=en-US', '1574835735_mandiri-loc.png', '2020-01-04 17:00:00', NULL),
(7, 'AA0108', 'Bisma WR Supratman', 'Jl. WR Supratman No.76, Sumerta, Denpasar', '0361 243056', 'https://maps.google.com/maps?q=CV.%20Yamaha%20Bisma%20WR%20Supratman&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/Yamaha+Bisma+Supratman/@-8.648959,115.231821,17z/data=!4m5!3m4!1s0x0:0xb7f37269939bac0b!8m2!3d-8.648959!4d115.231821?hl=en-US', '1574835812_supratman-loc.png', '2020-01-04 17:00:00', NULL),
(8, 'AA0109', 'Bisma Sunset Road', 'Jl. Sunset Road No.162, Legian, Kuta, Kabupaten Badung', '0361 758140', 'https://maps.google.com/maps?q=CV.%20Yamaha%20Bisma%20Sunset%20Road&t=&z=17&ie=UTF8&iwloc=&output=embed', 'https://www.google.com/maps/place/Yamaha+Bisma+S.R/@-8.707559,115.183249,17z/data=!4m5!3m4!1s0x0:0x507eed810480e9ed!8m2!3d-8.7075594!4d115.1832492?hl=en-US', '1574835882_sunset-loc.png', '2020-01-04 17:00:00', NULL),
(9, 'AA0104F', 'Flagship Shop', 'Jl. Diponegoro No.57, Denpasar', '0361 238800', 'https://maps.google.com/maps?q=Yamaha%20Flagship&t=&z=17&ie=UTF8&iwloc=&output=embed', '', '1574836087_fss.loc.png', '2020-01-04 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `akses`, `dealer`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'I Wayan Andika Pranayoga', 'andika', '$2y$10$ieHkJCiZkY3lHMn7AKsFMuzTax8MCwrvT/MboAllV6MbLUA6f3Tn6', 'super', 'all', '', '2020-01-04 17:00:00', NULL),
(2, 'Bisma Mandiri', 'mandiri', '$2y$10$BkZflPGShPizgIFzpROzcuzfV/m28JnRItO08osPgWBm3P0tX6Hp.', 'admin', 'AA0107', '', NULL, NULL),
(3, 'Bisma BMM', 'bmm', '$2y$10$/PqaeH/rUJKkKZjOKlR/GuMsiSLJYmH8aMRwueKcJhQSQHfRf4U0.', 'admin', 'AA0102', '', NULL, NULL),
(4, 'Bisma Hasanuddin', 'bismamotor', '$2y$10$ODun/qMhl03iAGjnfvJo7e8S4foskNOZPEeipMB1MJ1LATrX4Oj0K', 'admin', 'AA0104', '', NULL, NULL),
(5, 'Bisma TTS', 'gatsu', '$2y$10$t2BEplIVTPiOT/NY7Jef4e5PmzSV6YY/jOPDCHYA5RHdmtf8Ho.RC', 'admin', 'AA0105', '', NULL, NULL),
(6, 'Bisma Imam Bonjol', 'imbo', '$2y$10$X9HlZQ2J9hYFmL4Sbdi4TOsDTG8851Q9CLgIdA6eQEubv7GRsAepO', 'admin', 'AA0106', '', NULL, NULL),
(7, 'Bisma WR Supratman', 'supratman', '$2y$10$qPHNOp2Aop7qObCdg/RGVu7JPkHU42hj1WgoDD1y50TymrTMyAKem', 'admin', 'AA0108', '', NULL, NULL),
(8, 'Bisma Sunset Road', 'sunset', '$2y$10$qf6XlGeCe50rEku7q1irae3338wozKCXs1JYLYHcpdhWCBVElK2CG', 'admin', 'AA0109', '', NULL, NULL),
(9, 'Bisma Sentral', 'sentral', '$2y$10$xuuvzM06OsmNAwUSkWMBN.3HbNuV3F42DXFtnE77/O6HefjGNvYuW', 'admin', 'AA0101', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id_dealer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id_dealer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
