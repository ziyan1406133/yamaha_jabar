-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:31 PM
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
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Assistant Promotion Manager', '<p>We are hiring for Assistant Promotion Manager position!<br /><br />Kirim lamaran Anda ke hr.recruitment.yamahastsj@gmail.com dengan subyek &quot;Lamaran Asst. Promotion Manager&quot;<br /><br /><br />More information:<br />PT Surya Timur Sakti Jatim<br />Jl. Basuki Rahmad No. 45-47, Surabaya<br />(031) 5312121<br /><br />Check our Instagram @ yamaharecruitment for more info and other job opportunities!<br /><br /><br />Requirements:</p><ul><li>Pria/Wanita</li><li>Pendidikan min. S1 semua jurusan, usia max. 35 tahun</li><li>Pengalaman di bidang event management lebih diutamakan</li><li>Bisa memimpin tim dan bekerja sama</li><li>Mampu mengoperasikan MS. Office</li><li>Berjiwa kreatif dan inisiatif</li><li>Memiliki SIM A dan C</li></ul>', 0, '2020-12-15 02:49:43', '2020-12-15 03:24:27'),
(2, 'Fleet/Marketing Corporate (Female)', '<p>We are hiring for Fleet/Marketing Corporate (Female) position!<br /><br />Kirim lamaran Anda ke hr.recruitment.yamahastsj@gmail.com dengan subyek &quot;Lamaran Fleet Female&quot;<br /><br /><br />More information:<br />PT Surya Timur Sakti Jatim<br />Jl. Basuki Rahmad No. 45-47, Surabaya<br />(031) 5312121<br /><br />Check our Instagram @ yamaharecruitment for more info and other job opportunities!<br /><br /><br />Requirements:</p><ul><li>Wanita</li><li>Pendidikan min. D3/S1, usia max. 30 tahun</li><li>Pengalaman min. 1 tahun di bidang penjualan</li><li>Memiliki kemampuan komunikasi dan negosiasi yang baik</li><li>Memiliki relasi di perusahaan-perusahaan potensial</li><li>Berpenampilan menarik, rambut biasa terurai, terbiasa menggunakan make-up dan sepatu hak tinggi, fashionable</li><li>Komunikatif</li><li>Dapat melakukan presentasi kepada klien</li></ul>', 1, '2020-12-15 02:58:25', '2020-12-15 02:58:25'),
(3, 'Fleet/Marketing Corporate (Male)', '<p>We are hiring for Fleet/Marketing Corporate (Male) position!<br /><br />Kirim lamaran Anda ke hr.recruitment.yamahastsj@gmail.com dengan subyek &quot;Lamaran Fleet Corporate&quot;<br /><br /><br />More information:<br />PT Surya Timur Sakti Jatim<br />Jl. Basuki Rahmad No. 45-47, Surabaya<br />(031) 5312121<br /><br />Check our Instagram @ yamaharecruitment for more info and other job opportunities!<br /><br /><br />Requirements:</p><ul><li>Pria</li><li>Pendidikan min. D3/S1 semua jurusan, usia max. 30 tahun</li><li>Pengalaman min. 1 tahun di bidangnya</li><li>Berorientasi pada target</li><li>Memiliki relasi di perusahaan-perusahaan potensial maupun pemerintahan</li><li>Komunikatif dan memiliki kemampuan bernegosiasi</li><li>Dapat melakukan presentasi kepada klien</li><li>Good looking dan berpenampilan rapi</li><li>Memiliki SIM A lebih disukai</li></ul>', 1, '2020-12-15 02:58:39', '2020-12-15 02:58:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
