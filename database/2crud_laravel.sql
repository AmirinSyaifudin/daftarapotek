-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 05:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2crud_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(200) NOT NULL,
  `tanggal_lahir` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(199) NOT NULL,
  `spesialis` varchar(225) NOT NULL,
  `agama` varchar(199) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `tanggal_lahir`, `jenis_kelamin`, `spesialis`, `agama`, `no_telpon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dr Amir Malik ', '21 - September - 1993', 'Laki-Laki', 'Spesialis Kulit', 'Islam ', '082333858461', 'Ds. Sukolilo,\r\nkec. Sukolilo,\r\nKab. Pati', '2019-10-17 02:06:12', '0000-00-00 00:00:00'),
(2, 'Izzati ', '27 -Juli - 1994', 'Perempuan ', 'Spesialis Penyakit Dalam', 'Islam ', '085666442222', 'Banjir Kanal Barat \r\nSemarang ', '2019-10-17 02:06:12', '0000-00-00 00:00:00'),
(3, 'Az Zahra ', '22 -Juli - !995', 'Perempuan ', 'Spesialis Mata', 'Islam ', '08977766555', 'Jogja ', '2019-10-17 03:22:24', '0000-00-00 00:00:00'),
(4, 'Aisyah', '30 - Januari - 2000', 'P', 'Spesialis Tulang', 'Islam', '082333858461', 'Solo Baru', '2019-10-17 03:22:24', '2019-10-21 07:09:08');

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
(3, '2019_10_03_013414_create_kelurahan_table', 1),
(4, '2019_10_03_081137_create_pasien_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_pasien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `user_id`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_telpon`, `gambar`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 0, 'Rudi Suwandi', '1 - Januari - 1999', 'L', 'Kristen', '012345678', 'elthof-razita-kerudung-instan_l-699-1414.png', 'Kudus', NULL, '2019-10-17 08:33:12'),
(2, 0, 'Siswo Handoko', '12-maret-1997', 'L', 'Islam', '085666333999', 'Amirin Syaifudin.jpg', 'Kudus Selatan', NULL, '2019-10-30 05:40:04'),
(8, 0, 'fatimah ahmad', '1 - Januari - 2001', 'P', 'ISLAM', '0123411111', 'elthof-razita-kerudung-instan_l-699-1414.png', 'Jogja', '2019-10-03 18:55:45', '2019-10-16 06:20:47'),
(10, 0, 'Amir Malik', '21 -September -  1993', 'L', 'ISLAM', '082333858461', '', 'Tengahan, Sukolilo \r\nKec, Sukolilo \r\nKab. PATI', '2019-10-06 16:39:24', '2019-10-06 16:39:24'),
(11, 0, 'Izza', '20 - Juli - 1994', 'P', 'ISLAM', '0987689098', 'elthof-razita-kerudung-instan_l-699-1414.png', 'Banjir Kanal\r\nSemarang', '2019-10-06 21:00:40', '2019-10-15 00:07:43'),
(13, 0, 'Aulia Zahra', '28 - september - 2019', 'L', 'ISLAM', '0987654321', 'elthof-razita-kerudung-instan_l-699-1414.png', 'Sleman', '2019-10-08 17:30:50', '2019-10-15 00:06:45'),
(17, 0, 'Nisa Az Zahra', '22 - September - 1993', 'P', 'ISLAM', '1234567789', '', 'Bogor', '2019-10-08 19:27:59', '2019-10-08 19:27:59'),
(21, 0, 'Kukoh', '11 - Maret - 1993', 'L', 'BUDHA', '086222444777', NULL, 'Kudus', '2019-10-15 04:53:03', '2019-10-15 04:53:03'),
(22, 0, 'Windi', '28 - Oktober - 1995', 'L', 'KONG_HU_CUU', '096333888111', NULL, 'Bandung', '2019-10-15 04:53:44', '2019-10-15 04:53:44'),
(25, 0, 'Ibnu Malik Mubarak', '21 -September - 1993', 'L', 'ISLAM', '08566774321', 'Amirin Syaifudin.jpg', 'Sukolilo PATI', '2019-10-18 18:02:29', '2019-10-30 05:53:39'),
(26, 0, 'Hazza', '30 - Januari - 2000', 'L', 'Islam', '086222444777', NULL, 'Mecca', '2019-10-23 08:02:06', '2019-10-23 08:02:06'),
(27, 7, 'fauzi', '30 - Januari - 2000', 'L', 'Islam', '086222444777', NULL, 'Bekasi', '2019-10-23 09:17:49', '2019-10-23 09:17:49'),
(28, 10, 'jamal', '1 - januari - 1998', 'L', 'Islam', '09864466798', NULL, 'Jogja', '2019-10-24 06:27:43', '2019-10-24 06:27:43'),
(29, 11, 'Nia Ramadhan', '27 - Oktober - 2000', 'P', 'Islam', '0979674787987', NULL, 'Solo', '2019-10-24 06:29:07', '2019-10-24 06:29:07'),
(30, 12, 'Wijaya Andari', '15 - Juni - 1994', 'P', 'Islam', '09865435678', NULL, 'Samarinda Kalimantan Timur', '2019-10-24 17:44:32', '2019-10-24 17:44:32'),
(31, 13, 'Sadio Mane', '29 - Maret - 1990', 'L', 'Islam', '0975489875578', NULL, 'Liverpool', '2019-10-25 00:23:23', '2019-10-25 00:23:23'),
(32, 14, 'Ahmad Muhammad', '24 - Juli - 1992', 'L', 'Islam', '0983337776', NULL, 'Turky', '2019-10-29 21:20:41', '2019-10-29 21:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_penyakit`
--

CREATE TABLE `pasien_penyakit` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `obat` varchar(199) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien_penyakit`
--

INSERT INTO `pasien_penyakit` (`id`, `pasien_id`, `penyakit_id`, `obat`, `created_at`, `updated_at`) VALUES
(2, 11, 1, 'Obat Flu kamsul', '2019-10-29 13:34:44', '0000-00-00 00:00:00'),
(3, 24, 6, 'Panadol Demam', '2019-10-29 13:35:13', '0000-00-00 00:00:00'),
(4, 17, 3, 'Bodrek Sakit Kepala', '2019-10-29 13:43:24', '0000-00-00 00:00:00'),
(6, 10, 1, 'paramex', '2019-10-29 08:13:29', '2019-10-29 15:13:29'),
(7, 10, 3, 'domex', '2019-10-29 08:13:48', '2019-10-29 15:13:48'),
(8, 10, 2, 'Obat Panu', '2019-10-29 08:14:14', '2019-10-29 15:14:14'),
(10, 1, 2, 'Obat Panu', '2019-10-29 08:15:11', '2019-10-29 15:15:11'),
(11, 1, 4, 'streepsil', '2019-10-29 08:15:21', '2019-10-29 15:15:21'),
(12, 11, 3, 'domex', '2019-10-29 08:15:47', '2019-10-29 15:15:47'),
(13, 11, 4, 'streepsil', '2019-10-29 08:16:36', '2019-10-29 15:16:36'),
(14, 25, 1, 'paramex', '2019-10-29 08:17:47', '2019-10-29 15:17:47'),
(15, 25, 3, 'domex', '2019-10-29 08:17:58', '2019-10-29 15:17:58'),
(16, 25, 2, 'Obat Panu', '2019-10-29 08:18:13', '2019-10-29 15:18:13'),
(17, 26, 1, 'paramex', '2019-10-29 08:39:40', '2019-10-29 15:39:40'),
(18, 26, 3, 'domex', '2019-10-29 08:39:49', '2019-10-29 15:39:49'),
(19, 26, 4, 'streepsil', '2019-10-29 08:40:00', '2019-10-29 15:40:00'),
(20, 2, 1, 'Misagrip Flu Batuk', '2019-10-29 19:23:11', '2019-10-30 02:23:11'),
(21, 2, 2, 'Kalpanak Jamur', '2019-10-29 19:23:59', '2019-10-30 02:23:59'),
(22, 2, 6, 'domex', '2019-10-29 19:25:06', '2019-10-30 02:25:06'),
(23, 27, 1, 'Misagrip Flu Batuk', '2019-10-29 19:52:32', '2019-10-30 02:52:32'),
(26, 1, 1, 'domex', '2019-10-29 21:19:27', '2019-10-30 04:19:27'),
(27, 32, 1, 'domex', '2019-10-29 21:21:19', '2019-10-30 04:21:19'),
(28, 32, 3, 'paramex', '2019-10-29 21:21:35', '2019-10-30 04:21:35'),
(29, 32, 2, 'Obat Panu', '2019-10-29 21:21:45', '2019-10-30 04:21:45');

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `nama_penyakit` varchar(225) NOT NULL,
  `jenis_penyakit` varchar(225) NOT NULL,
  `dokter_id` varchar(199) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama_penyakit`, `jenis_penyakit`, `dokter_id`, `created_at`, `updated_at`) VALUES
(1, 'Flu', 'Penyakit Hidung ', '', '2019-10-17 03:18:02', '0000-00-00 00:00:00'),
(2, 'Biduan Gatel ', 'Penyakit Kulit ', '', '2019-10-17 03:18:02', '0000-00-00 00:00:00'),
(3, 'Migran', 'Penyakit Kepala', '', '2019-10-17 03:19:16', '0000-00-00 00:00:00'),
(4, 'Radang Tenggorokan ', 'Penyakit Tenggorokan', '', '2019-10-17 03:19:16', '0000-00-00 00:00:00'),
(5, 'Jamur Kulit ', 'Penyakit Kulit ', '', '2019-10-17 03:20:30', '0000-00-00 00:00:00'),
(6, 'Demam ', 'Penyait Badan ', '', '2019-10-17 03:20:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Amirin Syaifudin', 'amirinsyaifudin6@gmail.com', NULL, '$2y$10$GHCbD4eNoK6KzVSi/MjBsujYXU8fPXf7t8P7lieaB.cVRHtkvzNIi', NULL, '2019-10-06 19:11:20', '2019-10-06 19:11:20'),
(2, '', 'Nisa Az Zahra', 'nisazahra@gmail.com', NULL, '$2y$10$ZMJNvsCcyagV1QQzt2/in.nyOaTB9WfagDzOIzBtWBxVoKiPLNdC6', NULL, '2019-10-10 01:47:51', '2019-10-10 01:47:51'),
(3, '', 'admin', 'admin@gmail.com', NULL, '$2y$10$GCc4wZ0ldN/raenQHMIiU.PDlyHWvjzJHuB.bx5E212/lJZQ0zn2y', '66AzDrsB560XRyJ2IKJ9cP8Tr5Z7Yfert5CPLZyupMrf0igAjwUSEX9HQ5k9', '2019-10-21 19:13:05', '2019-10-21 19:13:05'),
(7, 'pasien', 'fauzi', 'fauzi@gmail.com', NULL, '$2y$10$AQQbTuNnqGsjRkGQGvy1FObiPvvpEL6ERqrlpOKAhNkGGlEyYt2.a', 'UtsLKJwpNcYpOF5UoBeEYKnpeuUv0deoFqIde7nMy4HhnspyLq35dgQ5qXGw', '2019-10-23 09:17:49', '2019-10-23 09:17:49'),
(8, 'pasien', 'Ibnu Malik', 'ibnu@gmail.com', NULL, '$2y$10$a9RNYwB4CURQiZnsmO6ID.3BbTFy69CWZ0ZaL4NuW7mT2jVmMsLFm', 'FspHfvV7KYTAIGEMlQ3M6nWtrUbkYc5nePWxd98qO6iscEhqgcJ78lt9XlAk', '2019-10-24 06:25:47', '2019-10-24 06:25:47'),
(10, 'pasien', 'jamal', 'jamal@gmail.com', NULL, '$2y$10$HEMXA6xYj.K6HW.unncBv.tTyVBVBU7fczwNC3gkyPj5cR5BVgprm', 'xOxO3rBhNlWR5RISHr2kwq5JW5vawiEFP1oZkcCp333EypZTUulWFk8MGiO4', '2019-10-24 06:27:43', '2019-10-24 06:27:43'),
(11, 'pasien', 'Nia Ramadhan', 'nia@gmail.com', NULL, '$2y$10$UDTyOIY8Nsfs1Pvo7yOZG.sHshqF8RcQzvA4OlJ3p3Kicm7DRfeYG', 'D0ToIKiDq3DgAvfPvAzummFjHgienYNpEtIFtwIlnTR7QV3iRT281TdIfnJg', '2019-10-24 06:29:07', '2019-10-24 06:29:07'),
(12, 'pasien', 'Wijaya Andari', 'wijaya@gmail.com', NULL, '$2y$10$o6d24TJxk7VfrHHZVyg5EeiamjiULy6zjoq3P9PUYU8GNse0BJKK2', 'jCNj3ca5VPMl6015S2yBWT7TiVW9I5FMdeYrxkH3XOSvC4NLYPq2GxZDvfmz', '2019-10-24 17:44:32', '2019-10-24 17:44:32'),
(13, 'pasien', 'Sadio Mane', 'sadio@gmail.com', NULL, '$2y$10$Q6/mwn2bGAsOjjPrmGMLveb1Ji/Hdv8sgprAwDGhB5JmHe/Q9xNIS', 'JUPcar7qo1hTOVA8EiFyNUyUbxOd47x50Ege3sPvUgHO05jit4Wk3dq4JA7r', '2019-10-25 00:23:23', '2019-10-25 00:23:23'),
(14, 'pasien', 'Ahmad Fatih', 'fatih@gmail.com', NULL, '$2y$10$8X/InwG0tO4fjil9oP03HOtBOR/8BL/cAoYDyq0.K1OkQxl9hVegC', 'zyMd0eI1gk8ebnqgphXZcZb9QwUgjY7I1pVCCBz2DWpWmHXlJggymlBwRAHq', '2019-10-29 21:20:41', '2019-10-29 21:20:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien_penyakit`
--
ALTER TABLE `pasien_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pasien_penyakit`
--
ALTER TABLE `pasien_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
