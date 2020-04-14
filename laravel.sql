-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 07:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_31_045336_create_tickets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `content`, `slug`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'anotherTicket', 'this is the demo ticket', '5e63cd13ccaeb', 1, NULL, '2020-03-08 00:34:27', '2020-04-13 17:49:57'),
(9, 'anothermyTest', 'anothermyTestanothermyTestanothermyTestanothermyTest', '5e8d8d370c5fb', 1, NULL, '2020-04-08 15:37:11', '2020-04-08 15:37:11'),
(10, 'my second ticket', 'my second ticketmy second ticket', '5e903e62c0711', 1, NULL, '2020-04-10 16:37:38', '2020-04-10 16:37:38'),
(11, 'asadTicket', 'asadTicketasadTicketasadTicketasadTicketasadTicket', '5e943c7654d02', 1, NULL, '2020-04-13 17:18:30', '2020-04-13 17:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'baher', 'baher@gmail.com', 'aaa', NULL, '2020-04-10 17:24:10', '2020-04-10 17:24:10'),
(3, 'edrise', 'edrise@yahoo.com', '860b4b55c7b14270899317220a7e3ac0', NULL, '2020-04-10 17:27:38', '2020-04-10 17:27:38'),
(4, 'jawid', 'jawid@aol.com', 'aaa', NULL, '2020-04-10 17:35:01', '2020-04-10 17:35:01'),
(5, 'sya', 'sya@gmail.com', 'sa', NULL, '2020-04-10 17:37:54', '2020-04-10 17:37:54'),
(6, 'jayhon', 'jayhon@gmail.com', 'jjj', NULL, '2020-04-10 17:41:07', '2020-04-10 17:41:07'),
(7, 'samad', 'samad@gmail.com', 'sa', NULL, '2020-04-10 17:41:46', '2020-04-10 17:41:46'),
(8, 'sayar', 'sayar@gmail.com', 'sa', NULL, '2020-04-10 18:24:36', '2020-04-10 18:24:36'),
(9, 'japan', 'japan@gmail.com', 'japan', NULL, '2020-04-12 01:05:15', '2020-04-12 01:05:15'),
(12, 'eyman', 'eyman@gmail.com', 'eyman', NULL, '2020-04-12 18:07:46', '2020-04-12 18:07:46'),
(13, 'hebat', 'hebat@gmail.com', 'hebat', NULL, '2020-04-12 18:09:12', '2020-04-12 18:09:12'),
(14, 'asad', 'asad@gmail.com', 'asad', NULL, '2020-04-13 17:19:24', '2020-04-13 17:19:24');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
