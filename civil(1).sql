-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 06:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civil`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `govtjobs`
--

CREATE TABLE `govtjobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastdate` datetime NOT NULL,
  `describtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `govtjobs`
--

INSERT INTO `govtjobs` (`id`, `jobname`, `branch`, `eligibility`, `companyname`, `lastdate`, `describtion`, `created_at`, `updated_at`) VALUES
(1, 'welkm;fwelmfwel', 'dknldf', 'klfdwf', 'dklfdwf', '2222-05-25 00:00:00', 'dknldndw', '2021-03-11 13:22:47', '2021-03-11 13:22:47'),
(2, 'kmldwkmvek', 'mkldv,de', 'ml;ld,v.de', 'ml;dvdf.', '2020-02-02 00:00:00', 'dfnlfknwd', '2021-03-11 13:34:57', '2021-03-11 13:34:57'),
(3, 'rjfwknefklwe', 'ijgvwkelfwe', ';lkj;efmlewfkew', ';lklvewlfeml', '2222-05-22 00:00:00', 'dfknlvdvdnvlkdvlkndevnkldenklvedknlvkend', '2021-03-11 13:59:05', '2021-03-11 13:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `iscodes`
--

CREATE TABLE `iscodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `iscode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isdescribtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iscodes`
--

INSERT INTO `iscodes` (`id`, `iscode`, `isdescribtion`, `url`, `created_at`, `updated_at`) VALUES
(1, '654432', 'jghfjefjhefkj', 'https://www.google.com/', '2021-03-11 14:07:47', '2021-03-11 14:07:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_07_151801_create_govtjobs_table', 1),
(5, '2021_03_07_153844_create_privatejobs_table', 1),
(6, '2021_03_07_154421_create_qas_table', 1),
(7, '2021_03_07_154551_create_iscodes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privatejobs`
--

CREATE TABLE `privatejobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastdate` datetime NOT NULL,
  `describtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privatejobs`
--

INSERT INTO `privatejobs` (`id`, `jobname`, `branch`, `eligibility`, `companyname`, `lastdate`, `describtion`, `created_at`, `updated_at`) VALUES
(1, 'gkndfngefknffenj', 'nvkfdvknlfvnfe', 'ijohhvfdjknv', 'klfdnfevkfe', '2020-05-05 00:00:00', 'klncvnfklvfevn', '2021-03-09 06:53:37', '2021-03-09 06:53:37'),
(2, 'knflnkf', 'jkfwdnmw', 'knldfnkew', 'knldnkewnd', '2020-02-01 00:00:00', 'njwfjkndmw', '2021-03-11 13:34:10', '2021-03-11 13:34:10'),
(3, 'nklveknekdknldw', 'klndvkn', 'eflvnefkvef', 'kldnvdnmedknvlfe', '2020-05-22 00:00:00', 'fknlvdfvefknlvefklefklnvkjfkvnfklnvdfklnefklnklvnhefklgn', '2021-03-11 13:59:38', '2021-03-11 13:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `qas`
--

CREATE TABLE `qas` (
  `id` int(10) UNSIGNED NOT NULL,
  `qaname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `govtjobs`
--
ALTER TABLE `govtjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iscodes`
--
ALTER TABLE `iscodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `privatejobs`
--
ALTER TABLE `privatejobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qas`
--
ALTER TABLE `qas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `govtjobs`
--
ALTER TABLE `govtjobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iscodes`
--
ALTER TABLE `iscodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `privatejobs`
--
ALTER TABLE `privatejobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qas`
--
ALTER TABLE `qas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
