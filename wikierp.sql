-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 02:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wikierp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tanggal_cuti` varchar(255) DEFAULT NULL,
  `lama_cuti` int(11) DEFAULT NULL,
  `alasan_cuti` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_karyawan`, `tanggal_cuti`, `lama_cuti`, `alasan_cuti`, `created_at`, `updated_at`) VALUES
(3, 5, '2022-03-16', 2, 'Sakit demam berdarah', '2022-03-06 22:36:25.000000', '2022-03-06 22:36:25.000000'),
(4, 6, '2022-03-18', 4, 'Isoman selama 1 Minggu', '2022-03-06 22:39:00.000000', '2022-03-06 22:39:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `no_induk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `jatah_cuti` int(11) NOT NULL,
  `nourut` int(11) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `no_induk`, `nama`, `alamat`, `tanggal_lahir`, `jatah_cuti`, `nourut`, `date_registered`, `created_at`, `updated_at`) VALUES
(5, 'IP6001', 'Darmawan', 'Jl Kemerdekaan 17', '1989-07-19', 9, 1, '2022-02-08', '2022-03-06 20:14:47.000000', '2022-03-06 22:36:25'),
(6, 'IP6002', 'Agus', 'Jln Gaja Mada no 12, Surabaya', '1980-01-11', 8, 2, '2005-08-07', '2022-03-06 20:14:55.000000', '2022-03-06 22:39:00'),
(7, 'IP6003', 'Amin', 'Jln Imam Bonjol no 11, Mojokeerto', '1977-09-03', 12, 3, '2005-08-07', '2022-03-06 22:29:17.000000', '2022-03-06 22:29:17'),
(8, 'IP6004', 'yusuf', 'Jl A Yani Raya 15 no 14 Malang', '2005-08-09', 12, 4, '2010-08-09', '2022-03-06 22:30:40.000000', '2022-03-06 22:31:06');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_29_113721_buat_user_erp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(256) NOT NULL,
  `created_at` int(6) NOT NULL,
  `updated_at` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 0, 0),
(2, 'Staff', 0, 0),
(3, 'Tamu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `initial` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `initial`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Jhon Cena', 'J', 1, 'jhon_cena', 'eyJpdiI6IkVReUcyRVVYTW9LcUFPTWpPNEVxbUE9PSIsInZhbHVlIjoiL0p3U01xS1JsaVFCWTJZQlN1cDV0UT09IiwibWFjIjoiMmNiNjUyOGFiMDQyZTNjMWQ5NDkzMzlhZjg3NjE4OGQyZWRlMTdkYWQ4NWU0NTBlODJiMGRiNWZmZmRlZjA0YiIsInRhZyI6IiJ9', '2022-03-06 18:06:16.000000', '2022-03-06 18:06:16.000000'),
(4, 'Mr Admin', 'M', 1, 'admin_erp', 'eyJpdiI6InFXMWwrQ3RKOGpLWEVyMDZtNFNRYkE9PSIsInZhbHVlIjoiSEEvZ0xmSEloM29GK2U5bU9OZTV2dz09IiwibWFjIjoiYjVmZTU5MTIxYjg3OGViMzc3MmFiZjY0YzZiODJmYjEwNDVlNDc3M2E2Yjc2MjY2MzdmOTkyZTU4NjUxZjNlOCIsInRhZyI6IiJ9', '2022-03-06 22:50:32.000000', '2022-03-06 22:50:32.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user_erp`
--

CREATE TABLE `user_erp` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_erp`
--

INSERT INTO `user_erp` (`id_user`, `name`, `initial`, `role`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Jhon Cena', 'J', 1, 'jhon_cena@gmail.com', 'eyJpdiI6IkVReUcyRVVYTW9LcUFPTWpPNEVxbUE9PSIsInZhbHVlIjoiL0p3U01xS1JsaVFCWTJZQlN1cDV0UT09IiwibWFjIjoiMmNiNjUyOGFiMDQyZTNjMWQ5NDkzMzlhZjg3NjE4OGQyZWRlMTdkYWQ4NWU0NTBlODJiMGRiNWZmZmRlZjA0YiIsInRhZyI6IiJ9', '2022-03-29', '2022-03-29'),
(2, 'Mr Admin', 'M', 1, 'admin_erp@gmail.com', 'eyJpdiI6InFXMWwrQ3RKOGpLWEVyMDZtNFNRYkE9PSIsInZhbHVlIjoiSEEvZ0xmSEloM29GK2U5bU9OZTV2dz09IiwibWFjIjoiYjVmZTU5MTIxYjg3OGViMzc3MmFiZjY0YzZiODJmYjEwNDVlNDc3M2E2Yjc2MjY2MzdmOTkyZTU4NjUxZjNlOCIsInRhZyI6IiJ9', '2022-03-29', '2022-03-29'),
(4, 'bill Gambus', 'b', 1, 'billgates@gmail.com', 'eyJpdiI6ImZRMVExdzhhd2kwTEJQdEtLSWJqc2c9PSIsInZhbHVlIjoid2dIQkJqMjBvTmZxWXMrSk5XUkkyZz09IiwibWFjIjoiYzRmNjA3NDk2OThkYTc1MGZhODU2ZWQzM2NmZTJlYjRiNjhiMmIyMWE0NWVkMmRjYWViNzUyMTY1NzM2ZDQxOCIsInRhZyI6IiJ9', '2022-03-29', '2022-03-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_erp`
--
ALTER TABLE `user_erp`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_erp`
--
ALTER TABLE `user_erp`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
