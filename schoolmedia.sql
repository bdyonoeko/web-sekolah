-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 10:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wali_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tugas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `nama`, `wali_kelas`, `ketua_kelas`, `tugas`, `created_at`, `updated_at`) VALUES
(1, '12 IPA 1', 'Ita Masyitah, S.Pd', 'Ramdhan Maulana', '<div>Mata Pelajaran: Pendidikan Kewarganegaraan<br>Guru: Engkus Trihatmojo, S.pd<br><br>Sebutkan dan jelaskan serta berikan contoh minimal 5 mengenai faktor apa saja yang mempengaruhi stabilisasi struktural kepemerintahan terkait dinamika norma berdasarkan sistem standarisasi hak asasi manusia dalam upaya pencegahan terjadinya kudeta dan perpecahan di ruang lingkup kenegaraan! Serta berikan pendapatmu!</div>', '2021-12-03 21:31:48', '2021-12-04 01:55:04'),
(2, '12 IPA 2', 'Engkus Trihatmojo, S.pd', 'Marissa Lubis', '<div>Mata Pelajaran: Pendidikan Kewarganegaraan<br>Guru: Engkus Trihatmojo, S.pd<br><br>Sebutkan dan jelaskan serta berikan contoh minimal 5 mengenai faktor apa saja yang mempengaruhi stabilisasi struktural kepemerintahan terkait dinamika norma berdasarkan sistem standarisasi hak asasi manusia dalam upaya pencegahan terjadinya kudeta dan perpecahan di ruang lingkup kenegaraan! Serta berikan pendapatmu!</div>', '2021-12-04 01:54:36', '2021-12-04 01:54:36'),
(3, '12 IPA 3', 'Tata Muhafiz, S.pd.i', 'Hanung Bramasta', '<div>Mata Pelajaran: Pendidikan Kewarganegaraan<br>Guru: Engkus Trihatmojo, S.pd<br><br>Sebutkan dan jelaskan serta berikan contoh minimal 5 mengenai faktor apa saja yang mempengaruhi stabilisasi struktural kepemerintahan terkait dinamika norma berdasarkan sistem standarisasi hak asasi manusia dalam upaya pencegahan terjadinya kudeta dan perpecahan di ruang lingkup kenegaraan! Serta berikan pendapatmu!</div>', '2021-12-04 01:54:55', '2021-12-04 01:54:55');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_03_160937_create_school_profile_table', 1),
(6, '2021_12_03_161851_create_classes_table', 1),
(8, '2021_12_04_080846_create_answers_table', 2);

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
-- Table structure for table `school_profile`
--

CREATE TABLE `school_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_profile`
--

INSERT INTO `school_profile` (`id`, `tentang`, `visi`, `misi`, `alamat`, `email_sekolah`, `telepon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.</div>', '<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.</div>', '<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus voluptatibus doloremque fugiat veniam obcaecati, asperiores voluptate harum eos aspernatur? Molestiae quibusdam veritatis aut fugit sapiente.</div>', 'Jl. Kartaraharja No. 24 RT 12 RW 03, Bogor, Jawa Barat', 'websekolah@gmail.com', '123-456-78', NULL, NULL, '2021-12-04 02:18:20');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SISWA',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `class_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `image`, `class_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eko Budiyono', 'ekobudiyono@gmail.com', '2021-12-03 21:08:25', '$2y$10$4Dh6IpfTzhtYcVwDCbDcfuRa1coXS/c4EfVTSDYPGSaA3ebQ7fDB2', 'ADMIN', 'null', NULL, NULL, NULL, '2021-12-03 21:08:25'),
(2, 'Bambang', 'bambang@gmail.com', '2021-12-03 21:33:05', '$2y$10$Y2buNySHdw84mWltk3rld.lsfOWCzyCY/Xj7hGWqoOmg3nOlbicFm', 'SISWA', 'assets/images/XTVkJJ4hizPtAYXHh4mhJqeLAbQZC60Tj0luLrJ2.jpg', '1', NULL, '2021-12-03 21:32:22', '2021-12-04 00:49:29'),
(3, 'Sakata Gintoki', 'sakatagin@gmail.com', '2021-12-04 01:48:35', '$2y$10$/F1yIy2O4HLMfXuyKvLIcuqtDn.5u4Sm2BKfBfR8e8y/2MHVkYeWG', 'SISWA', 'assets/images/kaFE88ThWxxKDLvfTUXx1QCWgmPr04fIBFUX9yUr.png', '1', NULL, '2021-12-04 01:47:17', '2021-12-04 02:29:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `school_profile`
--
ALTER TABLE `school_profile`
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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_profile`
--
ALTER TABLE `school_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
