-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 06:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yamaha_jabar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

UPDATE `categories` SET `id` = 1,`name` = 'Matic',`image` = 'images/categories/matic.png',`created_at` = '2020-11-23 08:47:15',`updated_at` = '2020-11-23 08:47:15' WHERE `categories`.`id` = 1;
UPDATE `categories` SET `id` = 2,`name` = 'Moped',`image` = 'images/categories/moped.png',`created_at` = '2020-11-23 08:47:15',`updated_at` = '2020-11-23 08:47:15' WHERE `categories`.`id` = 2;
UPDATE `categories` SET `id` = 3,`name` = 'Sport',`image` = 'images/categories/sport.png',`created_at` = '2020-11-23 08:47:15',`updated_at` = '2020-11-23 08:47:15' WHERE `categories`.`id` = 3;
UPDATE `categories` SET `id` = 4,`name` = 'Moto GP',`image` = 'images/categories/motogp.png',`created_at` = '2020-11-23 08:47:15',`updated_at` = '2020-11-23 08:47:15' WHERE `categories`.`id` = 4;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

UPDATE `colors` SET `id` = 3,`product_id` = 4,`name` = 'Mysterious Red',`image` = 'images/color/1606154085_771.png',`created_at` = '2020-11-23 10:54:45',`updated_at` = '2020-11-23 10:54:45' WHERE `colors`.`id` = 3;

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

UPDATE `features` SET `id` = 5,`product_id` = 4,`name` = 'Lampu LED',`image` = 'images/feature/1606154068_629.png',`created_at` = '2020-11-23 10:54:28',`updated_at` = '2020-11-23 10:54:28' WHERE `features`.`id` = 5;
UPDATE `features` SET `id` = 6,`product_id` = 4,`name` = 'Answer Back System',`image` = 'images/feature/1606154077_789.png',`created_at` = '2020-11-23 10:54:37',`updated_at` = '2020-11-23 10:54:37' WHERE `features`.`id` = 6;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

UPDATE `messages` SET `id` = 1,`name` = 'nama',`email` = 'email@gmail.com',`company` = 'company',`phone` = '093209',`fax` = '093209',`address` = 'PT ARISTA JAYA LESTARI, Jl. Ipik Gandamanah No.176, Munjuljaya, Purwakarta, Jawa Barat 41117\r\nTlp & Wa : 0821 2399 7870\r\nfb & Ig : @promoyamahajabar',`content` = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat orci cursus, accumsan nisi a, luctus magna. Sed tempus placerat ullamcorper. Integer ut libero in lectus fermentum fermentum. Aliquam in ligula blandit, mattis elit sit amet liber',`created_at` = '2020-11-23 09:50:12',`updated_at` = '2020-11-23 09:50:12' WHERE `messages`.`id` = 1;
UPDATE `messages` SET `id` = 2,`name` = 'hello',`email` = 'email@email.com',`company` = NULL,`phone` = NULL,`fax` = NULL,`address` = 'address',`content` = 'pesan',`created_at` = '2020-11-23 09:50:27',`updated_at` = '2020-11-23 09:50:27' WHERE `messages`.`id` = 2;

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

UPDATE `migrations` SET `id` = 11,`migration` = '2014_10_12_000000_create_users_table',`batch` = 1 WHERE `migrations`.`id` = 11;
UPDATE `migrations` SET `id` = 12,`migration` = '2014_10_12_100000_create_password_resets_table',`batch` = 1 WHERE `migrations`.`id` = 12;
UPDATE `migrations` SET `id` = 13,`migration` = '2019_08_19_000000_create_failed_jobs_table',`batch` = 1 WHERE `migrations`.`id` = 13;
UPDATE `migrations` SET `id` = 14,`migration` = '2020_11_23_152056_create_categories_table',`batch` = 1 WHERE `migrations`.`id` = 14;
UPDATE `migrations` SET `id` = 15,`migration` = '2020_11_23_152115_create_regions_table',`batch` = 1 WHERE `migrations`.`id` = 15;
UPDATE `migrations` SET `id` = 16,`migration` = '2020_11_23_152123_create_networks_table',`batch` = 1 WHERE `migrations`.`id` = 16;
UPDATE `migrations` SET `id` = 17,`migration` = '2020_11_23_152219_create_messages_table',`batch` = 1 WHERE `migrations`.`id` = 17;
UPDATE `migrations` SET `id` = 18,`migration` = '2020_11_23_152235_create_products_table',`batch` = 1 WHERE `migrations`.`id` = 18;
UPDATE `migrations` SET `id` = 19,`migration` = '2020_11_23_152244_create_features_table',`batch` = 1 WHERE `migrations`.`id` = 19;
UPDATE `migrations` SET `id` = 20,`migration` = '2020_11_23_152257_create_colors_table',`batch` = 1 WHERE `migrations`.`id` = 20;

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_head_office` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

UPDATE `networks` SET `id` = 1,`region_id` = 2,`name` = 'GONDANG LEGI INDAH',`address` = 'Jl. Raya Hayam Wuruk (Utara RSI) - Gondang Legi Malang',`phone` = '879 219',`is_head_office` = 0,`created_at` = '2020-11-23 09:29:01',`updated_at` = '2020-11-23 09:29:01' WHERE `networks`.`id` = 1;
UPDATE `networks` SET `id` = 2,`region_id` = 1,`name` = 'SENTRAL YAMAHA BASRA',`address` = 'Jl. Basuki Rachmad 45-47 Surabaya',`phone` = '531 5588',`is_head_office` = 1,`created_at` = '2020-11-23 09:29:32',`updated_at` = '2020-11-23 09:29:32' WHERE `networks`.`id` = 2;
UPDATE `networks` SET `id` = 3,`region_id` = 4,`name` = 'SENTRAL YAMAHA GAJAH MADA',`address` = 'Jl. Gajah Mada 296 Jember',`phone` = '487 200',`is_head_office` = 0,`created_at` = '2020-11-23 09:30:05',`updated_at` = '2020-11-23 09:30:05' WHERE `networks`.`id` = 3;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tvc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

UPDATE `products` SET `id` = 4,`category_id` = 1,`name` = 'Mio S - Smart Sophisticated',`cover` = 'images/products/cover/1606154054_832.png',`logo` = 'images/products/logo/1607354798_519.png',`spec` = 'images/products/spec/1607354798_475.png',`tvc` = 'https://www.youtube.com/embed/Y8liMsWDC80',`slider` = 'images/products/slider/1606154054_467.png',`created_at` = '2020-11-23 10:54:14',`updated_at` = '2020-12-07 08:34:52' WHERE `products`.`id` = 4;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

UPDATE `regions` SET `id` = 1,`name` = 'Surabaya',`created_at` = '2020-11-23 09:18:35',`updated_at` = '2020-11-23 09:18:35' WHERE `regions`.`id` = 1;
UPDATE `regions` SET `id` = 2,`name` = 'Malang',`created_at` = '2020-11-23 09:18:40',`updated_at` = '2020-11-23 09:18:40' WHERE `regions`.`id` = 2;
UPDATE `regions` SET `id` = 4,`name` = 'Jember',`created_at` = '2020-11-23 09:18:59',`updated_at` = '2020-11-23 09:18:59' WHERE `regions`.`id` = 4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

UPDATE `users` SET `id` = 1,`username` = 'admin',`password` = '$2y$10$kl0mRGHActifGLZ4ZzC7N.3uF1NubxLVIrGFnjtO2GpNAcRa1lC0a',`remember_token` = NULL,`created_at` = '2020-11-23 08:47:15',`updated_at` = '2020-11-23 08:47:15' WHERE `users`.`id` = 1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colors_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `features_product_id_foreign` (`product_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `networks_region_id_foreign` (`region_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colors`
--
ALTER TABLE `colors`
  ADD CONSTRAINT `colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `networks`
--
ALTER TABLE `networks`
  ADD CONSTRAINT `networks_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
