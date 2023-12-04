-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 11.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komikghost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'DC', 'dc', '2023-10-16 05:28:21', '2023-10-16 05:28:21'),
(2, 'Marvel', 'marvel', '2023-10-16 05:28:21', '2023-10-16 05:28:21'),
(3, 'X-Men', 'x-men', '2023-10-16 05:28:21', '2023-10-16 05:28:21'),
(4, 'Vertigo', 'vertigo', '2023-10-16 05:28:21', '2023-10-16 05:28:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_ch` varchar(255) NOT NULL,
  `total_page` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `komik_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `chapters`
--

INSERT INTO `chapters` (`id`, `judul_ch`, `total_page`, `created_at`, `updated_at`, `komik_id`) VALUES
(1, 'Chapter 1', '36', '2023-10-16 05:32:10', '2023-10-16 05:32:10', 1),
(2, 'Full', '41', '2023-10-16 05:32:38', '2023-10-16 05:32:38', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `image`, `chapter_id`) VALUES
(1, 'komik/1697434444_00000.jpg', 2),
(2, 'komik/1697434444_00001.jpg', 2),
(3, 'komik/1697434444_00002.jpg', 2),
(4, 'komik/1697434444_00003.jpg', 2),
(5, 'komik/1697434444_00004.jpg', 2),
(6, 'komik/1697434444_00005.jpg', 2),
(7, 'komik/1697434444_00006.jpg', 2),
(8, 'komik/1697434444_00007.jpg', 2),
(9, 'komik/1697434445_00008.jpg', 2),
(10, 'komik/1697434445_00009.jpg', 2),
(11, 'komik/1697434481_00010.jpg', 2),
(12, 'komik/1697434481_00011.jpg', 2),
(13, 'komik/1697434481_00012.jpg', 2),
(14, 'komik/1697434481_00013.jpg', 2),
(15, 'komik/1697434481_00014.jpg', 2),
(16, 'komik/1697434481_00015.jpg', 2),
(17, 'komik/1697434481_00016.jpg', 2),
(18, 'komik/1697434481_00017.jpg', 2),
(19, 'komik/1697434481_00018.jpg', 2),
(20, 'komik/1697434481_00019.jpg', 2),
(21, 'komik/1697434517_00020.jpg', 2),
(22, 'komik/1697434517_00021.jpg', 2),
(23, 'komik/1697434517_00022.jpg', 2),
(24, 'komik/1697434517_00023.jpg', 2),
(25, 'komik/1697434517_00024.jpg', 2),
(26, 'komik/1697434517_00025.jpg', 2),
(27, 'komik/1697434517_00026.jpg', 2),
(28, 'komik/1697434517_00027.jpg', 2),
(29, 'komik/1697434517_00028.jpg', 2),
(30, 'komik/1697434517_00029.jpg', 2),
(31, 'komik/1697434517_00030.jpg', 2),
(32, 'komik/1697434517_00031.jpg', 2),
(33, 'komik/1697434517_00032.jpg', 2),
(34, 'komik/1697434542_00033.jpg', 2),
(35, 'komik/1697434542_00034.jpg', 2),
(36, 'komik/1697434542_00035.jpg', 2),
(37, 'komik/1697434542_00036.jpg', 2),
(38, 'komik/1697434542_00037.jpg', 2),
(39, 'komik/1697434542_00038.jpg', 2),
(40, 'komik/1697434542_00039.jpg', 2),
(41, 'komik/1697434542_00040.jpg', 2),
(42, 'komik/1697434780_TheSandman (1).jpg', 1),
(43, 'komik/1697434780_TheSandman (2).jpg', 1),
(44, 'komik/1697434780_TheSandman (3).jpg', 1),
(45, 'komik/1697434780_TheSandman (4).jpg', 1),
(46, 'komik/1697434780_TheSandman (5).jpg', 1),
(47, 'komik/1697434780_TheSandman (6).jpg', 1),
(48, 'komik/1697434780_TheSandman (7).jpg', 1),
(49, 'komik/1697434780_TheSandman (8).jpg', 1),
(50, 'komik/1697434780_TheSandman (9).jpg', 1),
(51, 'komik/1697434780_TheSandman (10).jpg', 1),
(52, 'komik/1697434780_TheSandman (11).jpg', 1),
(53, 'komik/1697434780_TheSandman (12).jpg', 1),
(54, 'komik/1697435064_TheSandman (13).jpg', 1),
(55, 'komik/1697435064_TheSandman (14).jpg', 1),
(56, 'komik/1697435065_TheSandman (15).jpg', 1),
(57, 'komik/1697435065_TheSandman (16).jpg', 1),
(58, 'komik/1697435065_TheSandman (17).jpg', 1),
(59, 'komik/1697435065_TheSandman (18).jpg', 1),
(60, 'komik/1697435065_TheSandman (19).jpg', 1),
(61, 'komik/1697435065_TheSandman (20).jpg', 1),
(62, 'komik/1697435105_TheSandman (21).jpg', 1),
(63, 'komik/1697435105_TheSandman (22).jpg', 1),
(64, 'komik/1697435105_TheSandman (23).jpg', 1),
(65, 'komik/1697435105_TheSandman (24).jpg', 1),
(66, 'komik/1697435105_TheSandman (25).jpg', 1),
(67, 'komik/1697435105_TheSandman (26).jpg', 1),
(68, 'komik/1697435105_TheSandman (27).jpg', 1),
(69, 'komik/1697435105_TheSandman (28).jpg', 1),
(70, 'komik/1697435105_TheSandman (29).jpg', 1),
(71, 'komik/1697435105_TheSandman (30).jpg', 1),
(72, 'komik/1697435128_TheSandman (31).jpg', 1),
(73, 'komik/1697435128_TheSandman (32).jpg', 1),
(74, 'komik/1697435128_TheSandman (33).jpg', 1),
(75, 'komik/1697435128_TheSandman (34).jpg', 1),
(76, 'komik/1697435128_TheSandman (35).jpg', 1),
(77, 'komik/1697435128_TheSandman (36).jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komiks`
--

CREATE TABLE `komiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `subjudul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `jumlah_ch` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komiks`
--

INSERT INTO `komiks` (`id`, `judul`, `subjudul`, `deskripsi`, `cover`, `jumlah_ch`, `published_at`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'The Sandman', 'The Dreams Hunters', 'Seorang biksu muda yang rendah hati dan seekor rubah ajaib yang bisa berubah bentuk mendapati diri mereka tertarik bersama secara romantis, tetapi saat cinta mereka berkembang, rubah mengetahui rencana jahat sekelompok setan untuk mencuri nyawa biksu tersebut.', 'covers/1697434228_sandman.jpg', '6', NULL, '2023-10-15 17:00:00', '2023-10-16 05:30:28', 4),
(2, 'The Superior Spider-Man', 'Returns', 'SLING WEB SPIDER-MAN SUPERIOR LAGI! Tim laba-laba yang mendefinisikan kembali AMAZING SPIDER-MAN kembali merayakan HUT SEPULUH TAHUN kisah Spidey yang paling monumental dan mengejutkan dalam satu generasi! DAN SLOT. RYAN STEGMAN. MARK BAGLEY. GIUSEPPE CAMUNCOLI. HUMBERTO RAMOS. Peter Parker. Dok Ock. Bersama lagi untuk kisah Spider-Man yang UNGGULAN dari yang lainnya!', 'covers/1697434296_00000.jpg', '1', NULL, '2023-10-15 17:00:00', '2023-10-16 05:31:36', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_18_011627_komik', 1),
(6, '2023_07_18_011702_chapter', 1),
(7, '2023_07_18_011720_images', 1),
(8, '2023_07_30_073742_categories', 1),
(9, '2023_08_04_154915_add_fk_to_chapters', 1),
(10, '2023_08_05_072751_add_fk_to_komiks', 1),
(11, '2023_08_05_083520_add_fk_to_images', 1),
(12, '2023_08_11_111639_create_roles_table', 1),
(13, '2023_08_11_111819_add_fk_to_users', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-10-16 05:28:21', '2023-10-16 05:28:21'),
(2, 'User', '2023-10-16 05:28:21', '2023-10-16 05:28:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'adryanowh@gmail.com', 'Adryan', '$2y$10$6H0L6BcOl9m3SZv3FYIiHenZP56gJ23tGCqxlRkkEeOZaNwQcRG8S', '2023-10-16 05:28:21', '2023-10-16 05:28:21', 1),
(2, 'tougashi@gmail.com', 'Tougashi', '$2y$10$OMemAQseae3krkqFxQ9Mj.dro.2W6Y4pjhnogU0xp5Ly2vuGqkovC', NULL, NULL, 1),
(3, 'user@gmail.com', 'user', '$2y$10$q2avuawiHIJpcrwHtCbPyO/lA8HvFxspcfEQeV/ZVu9cilAHUjVli', NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_komik_id_foreign` (`komik_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_chapter_id_foreign` (`chapter_id`);

--
-- Indeks untuk tabel `komiks`
--
ALTER TABLE `komiks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komiks_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_unique` (`role`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `komiks`
--
ALTER TABLE `komiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_komik_id_foreign` FOREIGN KEY (`komik_id`) REFERENCES `komiks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_chapter_id_foreign` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komiks`
--
ALTER TABLE `komiks`
  ADD CONSTRAINT `komiks_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
