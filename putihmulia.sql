-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2024 at 06:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putihmulia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('aw@gmail.com|127.0.0.1', 'i:1;', 1726276310),
('aw@gmail.com|127.0.0.1:timer', 'i:1726276310;', 1726276310),
('dapa|127.0.0.1', 'i:1;', 1726285483),
('dapa|127.0.0.1:timer', 'i:1726285483;', 1726285483);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `total_pembayaran` decimal(10,2) NOT NULL,
  `no_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nama_pemesan`, `alamat`, `nohp`, `tglmasuk`, `tglkeluar`, `total_pembayaran`, `no_kamar`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'dapa', 'jalan pp3', '08991314141', '2024-09-21', '2024-09-28', '14145.00', 'B001', 'wok', '2024-09-13 08:42:56', '2024-09-13 08:42:56'),
(2, 'aloo', 'jalan wj', '085180180141', '2024-09-13', '2024-09-20', '15000000.00', 'B001', 'wok', '2024-09-13 08:45:26', '2024-09-13 08:45:26'),
(3, 'dappapaaa', 'jalan jalan', '08318048141', '2024-09-13', '2024-09-20', '750000.00', 'B004', 'awikwok', '2024-09-13 08:51:25', '2024-09-13 08:51:25'),
(4, 'amel', 'jalan jalan', '08318048141', '2024-09-19', '2024-09-28', '1414141.00', 'B002', 'uy', '2024-09-13 09:01:42', '2024-09-13 09:01:42'),
(5, 'ear', 'jalan jalan', '08991314141', '2024-09-18', '2024-09-14', '1901415.00', '18', 'eheh', '2024-09-13 09:06:53', '2024-09-13 09:06:53'),
(6, 'awikwok', 'jalan', '083180481411', '2024-09-13', '2024-09-14', '17000.00', '02', 'ijat', '2024-09-13 09:09:44', '2024-09-13 09:09:44'),
(7, 'amel1', 'jalan jalan', '08318048141', '2024-09-14', '2024-09-16', '200000.00', 'B14', 'ww', '2024-09-13 18:30:50', '2024-09-13 18:30:50'),
(8, 'cc', 'jalan xyz', '081841941414', '2024-09-14', '2024-09-15', '198000.00', '15', 'wal', '2024-09-13 18:38:39', '2024-09-13 18:38:39'),
(9, 'memel', 'jalan jalan', '085180180141', '2024-09-14', '2024-09-15', '1400000.00', 'B005', 'h3', '2024-09-14 01:44:38', '2024-09-14 01:44:38'),
(10, 'wow', 'jalan jalan', '08571415616', '2024-09-14', '2024-09-15', '205000.00', 'B001', 'awikwok', '2024-09-14 02:37:55', '2024-09-14 02:37:55'),
(11, 'aaheae', 'jalan pp', '08141894951', '2024-09-15', '2024-09-16', '1900001.00', '19414', 'wanto', '2024-09-14 03:09:44', '2024-09-14 03:09:44'),
(12, 'memel', 'jalan jalan', '083180481411', '2024-09-19', '2024-09-21', '141515.00', 'A003', 'awikwok', '2024-09-15 11:35:36', '2024-09-15 11:35:36'),
(13, 'wow', 'jalan jalan', '08991314141', '2024-09-18', '2024-09-21', '141515.00', 'A004', 'wok', '2024-09-15 13:20:29', '2024-09-15 13:20:29'),
(14, 'amel33', 'jalan jalan', '085180180141', '2024-09-15', '2024-09-18', '750000.00', 'A004', 'wleo', '2024-09-15 13:35:38', '2024-09-15 13:35:38'),
(15, 'amel1', 'jalan jalan', '083180481411', '2024-09-15', '2024-09-20', '14145.00', 'A004', 'eheh', '2024-09-15 13:47:32', '2024-09-15 13:47:32'),
(16, 'daoa', 'jalan xyz', '083180481411', '2024-09-15', '2024-09-20', '150000.00', 'A004', 'wleo', '2024-09-15 13:56:53', '2024-09-15 13:56:53'),
(17, 'amel', 'jalan jalan', '08318048141', '2024-09-15', '2024-09-20', '1901415.00', 'A004', 'awikwok', '2024-09-15 14:20:07', '2024-09-15 14:20:07'),
(18, 'yahaha', 'jalan', '081841941414', '2024-09-15', '2024-09-17', '150000.00', 'A004', 'wok', '2024-09-15 15:03:50', '2024-09-15 15:03:50'),
(19, 'amel', 'jalan xyz', '081841941414', '2024-09-15', '2024-09-19', '141515.00', 'A004', 'wleoe', '2024-09-16 04:10:04', '2024-09-16 04:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int NOT NULL,
  `nama_kamar` varchar(100) DEFAULT NULL,
  `jenis_kamar` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Tersedia',
  `images` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `nama_kamar`, `jenis_kamar`, `status`, `images`, `created_at`, `updated_at`) VALUES
(13, 'A002', 'Dual Bed', 'tidak tersedia', '1726461098.jpg', '2024-09-16 04:31:38', '2024-09-16 05:00:27'),
(14, 'A003', 'Dual Bed', 'Tersedia', '1726461108.jpg', '2024-09-16 04:31:48', '2024-09-16 04:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_12_012114_create_pemesanan_table', 1),
(5, '2024_09_13_095701_create_pemesanann_table', 2),
(6, '2024_09_13_101428_create_pemesanan_table', 3),
(7, '2024_09_13_111841_create_history_table', 4),
(8, '2024_09_14_132913_create_kamars_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pemesan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `total_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kamar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `alamat`, `nohp`, `tglmasuk`, `tglkeluar`, `total_pembayaran`, `no_kamar`, `admin`, `created_at`, `updated_at`) VALUES
(39, 'yahaha', 'jalan jalan', '081841941414', '2024-09-16', '2024-09-20', '150000', 'A002', 'wal', '2024-09-16 05:00:27', '2024-09-16 05:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('piDYDi4pheCbAup5qesDpcPCEE1lf1p7Uy04Igyf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0w3bFNYbldsdVhidjdObHlLQ0lhOVE2S0tYU1pNSkh6b3hzOGJBNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1726466624);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dapaww', 'dapa@gmail.com', NULL, '$2y$12$STxUS/vUap6PlmD4/H9.q.uksxWPFEBvPHr9Ylsik.oDEVohTHZkK', NULL, '2024-09-11 18:29:11', '2024-09-11 18:29:11'),
(2, 'ela', 'ela@gmail.com', NULL, '$2y$12$e5K2qyoh7pEidRCuyAkip.U8xJiR2/CkdjGJeNo7VgOLCconlwvea', NULL, '2024-09-12 00:07:51', '2024-09-12 00:07:51'),
(3, 'awok', 'awok@gmail.com', NULL, '$2y$12$7/BOq4.qDMSEOsynnejuPOjLjfc6gp/cCDzRyS5mI.5uPuonKlSPC', NULL, '2024-09-12 02:48:59', '2024-09-12 02:48:59'),
(4, 'hehe', 'hehea@gmail.com', NULL, '$2y$12$VdfPBfqKrrLY0gxaHdyiGOdUU0n3P3ZHSrvaQJrWlfBrIv1VvaZ.m', NULL, '2024-09-12 02:51:11', '2024-09-12 02:51:11'),
(5, 'dapaw', 'dapaw@gmail.com', NULL, '$2y$12$ulahpR02gm6EGRxuT/z6g.N0HcwgNUoJGKuhp3MbFPhs7B4baHOS6', NULL, '2024-09-12 03:27:07', '2024-09-12 03:27:07'),
(6, 'dapha', 'dapha@gmail.com', NULL, '$2y$12$S8Xmew68mUV4FdCxuiId8.XN9oG4AAyvdI1ajbTCmMEV1gjGVL//y', NULL, '2024-09-12 03:51:21', '2024-09-12 03:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
