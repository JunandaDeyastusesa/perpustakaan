-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2020 pada 07.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `jurusan`, `kelas`, `created_at`, `updated_at`) VALUES(8, 'Salman Nauval Haq', 'RPL', 6, '2019-09-29 06:49:25', '2019-09-29 06:49:25');
INSERT INTO `anggota` (`id`, `nama`, `jurusan`, `kelas`, `created_at`, `updated_at`) VALUES(9, 'Nanda', 'RPL', 11, '2019-09-29 23:07:26', '2019-09-29 23:07:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `genre` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stok` int(20) DEFAULT NULL,
  `gambar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `genre`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES(23, 'Iot', 'Saya', 2013, 'Teknologi', 9, '43730.jpg', '2019-09-26 20:07:23', '2020-07-22 22:52:06');
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `genre`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES(28, 'KKN Desa Nari', 'Secret Man', 2019, 'Horor', 3, 'kkn desa penari.PNG', '2019-09-29 23:13:06', '2020-07-22 22:48:21');
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `genre`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES(29, 'Android', 'P', 2019, 'Teknologi', 10, 'Pemrograman Aplikasi Android dengan Android Studio, Photoshop dan Audition.PNG', '2019-10-04 05:57:00', '2019-10-04 05:57:00');
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `genre`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES(30, 'aku kamu', 'salman', 2000, 'Horor', 1, 'kitab hacker.PNG', '2019-10-04 06:21:12', '2019-10-04 06:21:12');
INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `genre`, `stok`, `gambar`, `created_at`, `updated_at`) VALUES(31, 'MARK', 'DESAIN', 2020, 'CORONA', 12, 'React2.jpeg', '2020-07-22 22:49:30', '2020-07-22 22:50:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(4, '2019_09_17_020548_create_anggota', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(5, '2019_09_17_021205_create_table_anggota', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(6, '2019_09_17_021820_create_table_pinjam', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(7, '2019_09_17_022137_create_buku', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES(8, '2019_09_17_022345_create_kembali', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED DEFAULT NULL,
  `kode_buku` bigint(20) UNSIGNED DEFAULT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` date DEFAULT NULL,
  `denda` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id`, `id_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `status`, `denda`, `created_at`, `updated_at`) VALUES(33, 17, 28, '2019-10-11', '2019-10-18', '2019-10-10', 0, '2019-10-04 06:10:22', '2019-10-04 06:10:43');
INSERT INTO `pinjam` (`id`, `id_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `status`, `denda`, `created_at`, `updated_at`) VALUES(34, 22, 28, '2020-07-23', '2020-07-30', '2020-07-24', 0, '2020-07-22 22:47:29', '2020-07-22 22:48:21');
INSERT INTO `pinjam` (`id`, `id_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `status`, `denda`, `created_at`, `updated_at`) VALUES(35, 22, 31, '2020-07-30', '2020-08-06', '2020-08-08', 5000, '2020-07-22 22:50:01', '2020-07-22 22:50:36');
INSERT INTO `pinjam` (`id`, `id_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `status`, `denda`, `created_at`, `updated_at`) VALUES(36, 23, 23, '2020-07-01', '2020-07-08', '2020-08-23', 5000, '2020-07-22 22:51:47', '2020-07-22 22:52:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('1','2') COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` int(10) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(15, 'Juna', 'u@u.u', NULL, '$2y$10$qpSgu/jhfRRqJ1iRj8x9KuL6rMqq0.YX1DUYNJv82SbuwnnqC9v8a', '2', 'RPL', 10, NULL, '2019-10-02 17:42:27', '2019-10-02 17:42:27');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(16, 'zalfa', 'zalfa@gmail.com', NULL, '$2y$10$JvIO0xtuY2GdB2qFnRzvFO1.dDYJtpFpSmqB0bNS24E5zoDhULI2G', '2', 'RPL', 5, NULL, '2019-10-02 17:54:51', '2019-10-02 17:54:51');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(17, 'salman', 'salmannaufal@gmail.com', NULL, '$2y$10$21cf7tYZxxiw5DZHhK0nnuVL.sizDLXcMTJoXL2uZJlxdHVq9OVuG', '2', 'RPL', 11, NULL, '2019-10-02 17:59:30', '2019-10-02 17:59:30');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(18, 'okokok', 'okok@gmail.com', NULL, '$2y$10$K7c.9jvhgEOnHTDyxgnEAesJ.dJQvayr8LYtxN.5SkbH4uAGUAMb2', '1', 'TKJ', 9, NULL, '2019-10-02 18:13:04', '2019-10-02 18:13:04');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(19, 'salmann', 'salmannaufal21@gmail.com', NULL, '$2y$10$G3bRzNvmerQYO8YFodVoj.FytWrB7btOuMbqPX6MYfBAoyn11NhtG', '1', 'RPL', 11, NULL, '2019-10-04 06:04:21', '2019-10-04 06:04:21');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(20, 'salmannn', 'salmannnn@gmail.com', NULL, '$2y$10$H5d0pdIZDzdTJrExgmSs0ug7DAOZa0hpi6I94Rh1c0mLmpwvZLkAK', '1', 'RPL', 11, NULL, '2019-10-04 06:09:31', '2019-10-04 06:09:31');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(21, 'salmannau', 'salmannau@gm.k', NULL, '$2y$10$gWuJj0EEK/pJkHjlnRoPkuaSejeU7bBFkfqu7L14POzY6Nll5QRDi', '2', 'RPL', 11, NULL, '2019-10-04 06:23:02', '2019-10-04 06:23:02');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(22, 'ajeng', 'aj@a.a', NULL, '$2y$10$peZVt9yDP78UgtlK.L7iBeFFWfWKe0Q8VqGlvmP/aSiHP1rfOJTzG', '1', 'TKJ', 12, NULL, '2020-07-22 22:47:02', '2020-07-22 22:47:02');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jurusan`, `kelas`, `remember_token`, `created_at`, `updated_at`) VALUES(23, 'nq', 'na@n.n', NULL, '$2y$10$71/xBgcOei1KiKWD.vVQgORb.Q5O.pXEgCbjHDfM4pRW9xnp8k8.e', '2', 'RPL', 11, NULL, '2020-07-22 22:51:17', '2020-07-22 22:51:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_4` FOREIGN KEY (`kode_buku`) REFERENCES `buku` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjam_ibfk_5` FOREIGN KEY (`id_anggota`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
