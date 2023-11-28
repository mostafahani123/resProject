-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 08:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `totalphone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `phone`, `totalphone`, `date`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'mostafa', '01145467021', '3', '2023-11-08', '05:20:01', 9, NULL, NULL),
(3, 'mohamed', '01127310893', '4', '2023-11-03', '02:31:00', 0, '2023-11-22 22:33:24', '2023-11-22 22:33:24'),
(4, 'mm', '+201145467021', '4', '2023-11-16', '02:56:00', 0, '2023-11-22 22:50:41', '2023-11-22 22:50:41'),
(5, 'mostafa', '+201145467021', '4', '2023-11-16', '14:56:00', 0, '2023-11-22 22:54:00', '2023-11-22 22:54:00'),
(6, 'mostafa', '+201145467021', '4', '2023-12-01', '02:59:00', 0, '2023-11-22 22:54:32', '2023-11-22 22:54:32'),
(7, 'mohamed', '01127310893', '4', '2023-11-09', '16:15:00', 9, '2023-11-23 11:15:26', '2023-11-23 11:15:26'),
(8, 'mohamed', '01127310893', '4', '2023-11-10', '17:16:00', 9, '2023-11-23 11:16:06', '2023-11-23 11:16:06'),
(9, 'mohamed', '01127310893', '4', '2023-11-10', '17:16:00', 9, '2023-11-23 11:16:28', '2023-11-23 11:16:28'),
(10, 'mona', '01127310893', '10', '2023-11-15', '15:22:00', 9, '2023-11-23 11:17:38', '2023-11-23 11:17:38'),
(11, 'logyne', '01127310893', '5', '0000-00-00', '19:21:00', 7, '2023-11-23 11:19:01', '2023-11-23 11:19:01'),
(14, 'mostafa', '+201145467021', '01127310893', '2023-11-07', '15:39:00', 7, '2023-11-23 11:37:10', '2023-11-23 11:37:10'),
(15, 'mostafa', '+201145467021', '3', '2023-11-07', '15:46:00', 7, '2023-11-23 11:44:59', '2023-11-23 11:44:59'),
(16, 'mostafa', '+201145467021', '3', '2023-11-07', '15:46:00', 7, '2023-11-23 11:45:12', '2023-11-23 11:45:12'),
(17, 'mostafa', '+201145467021', '3', '2023-11-02', '15:48:00', 7, '2023-11-23 11:45:20', '2023-11-23 11:45:20'),
(18, 'mostafa', '+201145467021', '3', '2023-11-16', '16:09:00', 7, '2023-11-23 12:07:23', '2023-11-23 12:07:23'),
(19, 'mostafa', '+201145467021', '3', '2023-11-09', '18:09:00', 7, '2023-11-23 12:09:34', '2023-11-23 12:09:34'),
(20, 'mostafa', '+201145467021', '3', '2023-11-16', '19:10:00', 7, '2023-11-23 12:10:26', '2023-11-23 12:10:26'),
(21, 'mostafa', '+201145467021', '3', '2023-11-01', '21:00:00', 8, '2023-11-23 15:00:51', '2023-11-23 15:00:51'),
(22, 'mohamed', '+201145467021', '2', '2023-11-14', '19:53:00', 13, '2023-11-25 15:55:05', '2023-11-25 15:55:05'),
(23, 'mohamed', '+201145467021', '2', '2023-11-23', '19:58:00', 13, '2023-11-25 15:55:26', '2023-11-25 15:55:26'),
(24, 'mohamed', '01127310893', '9', '2023-11-16', '20:12:00', 14, '2023-11-25 16:08:31', '2023-11-25 16:08:31'),
(25, 'mohamed', '01143597071', '7', '2023-11-03', '12:28:00', 13, '2023-11-26 18:28:11', '2023-11-26 18:28:11'),
(26, 'amr', '+201145467021', '10', '2023-11-05', '20:30:00', 16, '2023-11-27 16:28:34', '2023-11-27 16:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Classic mostafa', 'mostafajhgfd112@gmail.com', 'a', 'ew', '2023-11-26 17:02:37', '2023-11-26 17:02:37'),
(2, 'mostafa', 'mostafa@gmail.com', 'hany', 'hello i\'m wanna manger please', '2023-11-26 17:18:19', '2023-11-26 17:18:19'),
(3, 'amr', 'amr11@gmail.com', 'sdas', 'hello , i\'m amr please call me', '2023-11-27 16:36:26', '2023-11-27 16:36:26');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_15_061446_create_products_table', 1),
(3, '2023_11_18_102301_create_signup_table', 1),
(4, '2023_11_18_102734_add_role_to_signup', 2),
(5, '2023_11_18_111007_create_signups_table', 3),
(6, '2023_11_18_125705_add_mopile_location_to_signups', 4),
(7, '2023_11_18_133808_create_users_table', 5),
(8, '2023_11_18_135354_create_users_table', 6),
(9, '2023_11_18_140430_create_signups_table', 7),
(10, '2023_11_18_141423_create_signups_table', 8),
(11, '2023_11_18_144136_create_users_table', 9),
(12, '2023_11_18_191230_create_users_table', 10),
(13, '2023_11_21_185031_create_products_table', 11),
(14, '2023_11_22_173059_create_products_table', 12),
(15, '2023_11_22_205008_create_books_table', 13),
(16, '2023_11_23_171301_add_request_to_books', 14),
(17, '2023_11_23_174903_add_requ_to_books', 15),
(18, '2023_11_25_174214_add_role_to_users', 16),
(19, '2023_11_26_184835_create_massages_table', 17);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `descraption` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `descraption`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Fried Eggs', '$ 9.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700675542_menu_.JPG', '2023-11-22 15:52:22', '2023-11-22 15:52:22'),
(8, 'Hawaiian Pizza', '$ 15.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700675966_menu_.JPG', '2023-11-22 15:59:26', '2023-11-22 15:59:26'),
(9, 'Martinez Cocktail', '$ 7.25', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700675997_menu_.JPG', '2023-11-22 15:59:57', '2023-11-22 15:59:57'),
(11, 'Butterscotch Cake', '$ 20.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700676073_menu_.JPG', '2023-11-22 16:01:13', '2023-11-22 16:01:13'),
(12, 'Mint Lemonade', '$ 5.89', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700920289_menu_.JPG', '2023-11-22 16:01:45', '2023-11-25 11:51:29'),
(13, 'Chocolate Icecream', '$ 18.05', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700920361_menu_.JPG', '2023-11-22 16:02:15', '2023-11-25 11:52:41'),
(14, 'Cheese Burger', '$ 12.55', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700676167_menu_.JPG', '2023-11-22 16:02:47', '2023-11-22 16:02:47'),
(15, 'Classic Waffles', '$ 12.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', 'uploads/1700936400_menu_.JPG', '2023-11-22 16:03:30', '2023-11-25 16:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `Image`, `email`, `password`, `mobile`, `location`, `created_at`, `updated_at`, `role`) VALUES
(2, 'mohamed', 'uploads/1700334940_profile_.jpg', 'mohamed3@gmail.com', '$2y$10$v457mob6jCT3HkPFSiAZTukpkyWxSkmYeWwnWmWfUhgM9KRYKc226', '01143597071', 'Egypt', '2023-11-18 17:15:40', '2023-11-18 17:15:40', 'user'),
(3, 'mohamed ali', 'uploads/1700372662_profile_.jpg', 'a@gmail.com', '$2y$10$SfEkNaJUJynYzZziSlXW9u.k16u/tJMgUZ7h074YblBdj/B5dLcEe', '+201145467021', 'Egypt', '2023-11-19 03:44:22', '2023-11-19 03:44:22', 'user'),
(4, 'mostafa hany', 'uploads/1700393692_profile_.jpg', 'mostafajhgfd112@gmail.com', '$2y$10$VBymQ6FzUwWIDK8I9ZeQgeA6jvpdTqTeu/UFA471bmInym4qbEGAG', '+201145467021', 'Egypt', '2023-11-19 09:34:52', '2023-11-19 09:34:52', 'user'),
(5, 'Engineer Mustafa Hany', 'uploads/1700396617_profile_.jpg', 'mostafajhgfd112@gmail.com', '$2y$10$cL5AUho44JN3pkZ4qMvjUeLWzbKApvdYO4BHD70CAwWxChh3PgEFy', '+201145467021', 'Egypt', '2023-11-19 10:23:37', '2023-11-19 10:23:37', 'user'),
(7, 'logyne mohamed', 'uploads/1700562237_profile_.JPG', 'logyne@gmail.com', '$2y$10$i4eQl1AEW5kozg9oz0lStO2c2NPCS.FiGQ/GDuZ9IQ8c5j/2UhWR6', '+201145467021', 'Egypt', '2023-11-21 08:23:57', '2023-11-21 08:23:57', 'user'),
(8, 'nada ahmed', 'uploads/1700923712_menu_.jpg', 'nada@gmail.com', '222', '01143597071', 'Egypt', '2023-11-21 08:40:36', '2023-11-25 12:48:32', 'user'),
(10, 'Classic mostafa', 'uploads/1700928868_profile_.JPG', 'mostafajhgfd112@gmail.com', '$2y$10$Q8SkzgfgF7zHZrO3ENxEWOeY7daBPHAT2vt0HMXmJg8vVSNyHHDO2', '01127310893', 'Egypt', '2023-11-25 14:14:28', '2023-11-25 14:14:28', 'user'),
(11, 'Classic mostafa', 'uploads/1700929887_profile_.JPG', 'mostafajhgfd112@gmail.com', '$2y$10$HpfvBXH.ts1KrXI43I82yulzLadOvDDia648Q8V.sNPyPlihtCvUO', '01127310893', 'Egypt', '2023-11-25 14:31:27', '2023-11-25 14:31:27', 'user'),
(12, 'Classic mostafa', 'uploads/1700930569_profile_.JPG', 'mostafajhgfd112@gmail.com', '$2y$10$yX/XLOYuP/d514MMQs.aBuG.cFdYtpP4k3ZeUyC7KRyfvojr5sAKO', '01127310893', 'Egypt', '2023-11-25 14:42:50', '2023-11-25 14:42:50', 'user'),
(13, 'logy', 'uploads/1701030584_menu_.jpg', 'amr11@gmail.com', '$2y$10$jFsUrQQI0eHdSFymtZI/z.9AAGcaZX6KduJAWFlns2i5JkYsiH3Wy', '11111', 'E', '2023-11-25 14:52:03', '2023-11-26 18:29:44', 'admin'),
(14, 'mostafa', 'uploads/1700935678_menu_.jpg', 'mostafa@gmail.com', '$2y$10$ih0iS03vYqXzgaXjZmXKUeiUMPzCQytpAThCBpEEAZsdZ4ZhKekPi', '+201145467021', 'Egypt', '2023-11-25 15:58:33', '2023-11-25 16:07:58', 'admin'),
(15, 'mostafa hani', 'uploads/1701023899_profile_.JPG', 'mostafa12@gmail.com', '$2y$10$GQ4Eswc1Ne.weLfuOE1SB.24VqFx9fF/n9S.AM7Zxl.RiuGOBvTPG', '+201145467021', 'Egypt', '2023-11-26 16:38:19', '2023-11-26 16:38:19', 'user'),
(16, 'Amr mohamed', 'uploads/1701110304_menu_.JPG', 'amr122@gmail.com', '$2y$10$mrApe8hgOFEeJ4ARlDdzg.9BkFeq2YNa6MKsAoWFd3XZTjDMGn6M2', '+201145467021', 'Egypt', '2023-11-27 16:24:32', '2023-11-27 16:38:24', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
