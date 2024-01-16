-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 09:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `convergenttask`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_01_16_071147_create_userlists_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlists`
--

CREATE TABLE `userlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlists`
--

INSERT INTO `userlists` (`id`, `name`, `surname`, `address`, `email`, `phone`, `state`, `city`, `pin`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Astra Mayo', 'Gonzalez', NULL, 'luhagodi@mailinator.com', '+1 (326) 349-6412', 'Gujarat', 'Bangalore', 'Quia eu qui voluptat', '$2y$12$D1yuY5q7rgcofQdBFXi0ouMo93OkjfcKrgZYF7FtlVzpjx7OcQGhO', NULL, NULL, '2024-01-16 01:49:37', '2024-01-16 01:49:37'),
(2, 'Ella Oneill', 'Kidd', NULL, 'user1@gmail.com', '+1 (209) 101-8363', 'Karnataka', 'Bhopal', 'Consequatur Porro a', '$2y$12$vf8JC6Dd/X6uCYRqLsy96eWxyaIQoZCKU6p6/bcsinW1QtwqQGIoe', NULL, NULL, '2024-01-16 01:57:43', '2024-01-16 01:57:43'),
(3, 'Luke Byrd', 'Mcconnell', NULL, 'sozode@mailinator.com', '+1 (245) 427-1876', 'Karnataka', 'Bhopal', 'Dolorem quidem iste', '$2y$12$Nu.m9Jj98XeLP.e2wcZobeIWRfQU.WU7hvaMovzDl1CD3WP2BjS46', NULL, NULL, '2024-01-16 02:16:08', '2024-01-16 02:16:08'),
(4, 'Blossom Merrill', 'Byers', NULL, 'kilic@mailinator.com', '+1 (403) 724-9156', 'Madhya Pradesh', 'Bhopal', 'Do ex necessitatibus', '$2y$12$L2WY3if./YJa.PNbA5usqex3iUbF6xXVCd9YSLcy9qn493nfEdA3K', NULL, NULL, '2024-01-16 02:39:13', '2024-01-16 02:39:13'),
(5, 'Orli Pruitt', 'Wolf', NULL, 'lyrawa@mailinator.com', '+1 (696) 938-4982', 'Gujarat', 'Ahmedabad', 'Accusantium elit in', '$2y$12$ayjHNCTT65KLwLXzbbczPeIsY62J7W5hBHXmBrEt1UPTX5OjEd.sG', NULL, NULL, '2024-01-16 02:45:01', '2024-01-16 02:45:01'),
(6, 'Hedley Jacobs', 'Greer', NULL, 'hunydyco@mailinator.com', '+1 (751) 456-6917', 'Madhya Pradesh', 'Ahmedabad', 'Molestiae et rerum e', '$2y$12$FuzwHrXHansL6x1D0pxac.9xLGTR8Irhn1I0FvpBkqjyEQgw6WpaK', NULL, NULL, '2024-01-16 02:45:56', '2024-01-16 02:45:56'),
(7, 'Gloria Rivera', 'Kim', NULL, 'qukovyxu@mailinator.com', '+1 (128) 308-3429', 'Karnataka', 'Ahmedabad', 'Et cumque sint cumqu', '$2y$12$oW7QSoO5lb1TVXx9/eppnO08CReNbzIjEvrYgNjrdlNFugPPbDsMW', NULL, NULL, '2024-01-16 02:46:39', '2024-01-16 02:46:39'),
(8, 'Mara Castillo', 'Chavez', NULL, 'gituxugyx@mailinator.com', '+1 (795) 104-8798', 'Gujarat', 'Bhopal', 'Non obcaecati ut et', '$2y$12$okd7MRdtO0QVFHGYn7Bhk.i/pKqddNMM088avii3rIaAfs6B7dvyq', NULL, NULL, '2024-01-16 02:55:23', '2024-01-16 02:55:23'),
(9, 'Penelope Diaz', 'Butler', NULL, 'nixyraxo@mailinator.com', '+1 (684) 986-8952', 'Madhya Pradesh', 'Bhopal', 'Tempora facilis natu', '$2y$12$dnbYfUaJpEGhaduvunNosO/PlcBFIDGWbEp0VsbCgUZahYeI1lvWe', NULL, NULL, '2024-01-16 02:58:16', '2024-01-16 02:58:16'),
(10, 'Basil Bruce', 'Conrad', NULL, 'qyzyfu@mailinator.com', '+1 (258) 244-3725', 'Madhya Pradesh', 'Bhopal', 'Laudantium est quas', '$2y$12$DwQsO48Q7NFmq35zXnYlfuN0YUuQu83hY3mBcpvl/tgWlYjZIj.Bm', NULL, NULL, '2024-01-16 03:02:21', '2024-01-16 03:02:21'),
(11, 'Harding Shepard', 'Moon', NULL, 'gyqabu@mailinator.com', '+1 (753) 456-6125', 'Madhya Pradesh', 'Bhopal', 'Consequatur Facere', '$2y$12$YpKOUkBTJbjzLQ21e6MeW.JjsxuZ0nbSNr3mR7i/kVT8XB/ISYnqe', NULL, NULL, '2024-01-16 03:03:56', '2024-01-16 03:03:56'),
(12, NULL, NULL, NULL, NULL, NULL, 'Gujarat', 'Ahmedabad', NULL, NULL, NULL, NULL, '2024-01-16 03:07:39', '2024-01-16 03:07:39'),
(13, 'Carla Dale', 'Whitehead', NULL, 'kibof@mailinator.com', '+1 (416) 229-1209', 'Gujarat', 'Bhopal', 'Qui eiusmod quia lab', NULL, NULL, NULL, '2024-01-16 03:08:38', '2024-01-16 03:08:38');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlists`
--
ALTER TABLE `userlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlists`
--
ALTER TABLE `userlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
