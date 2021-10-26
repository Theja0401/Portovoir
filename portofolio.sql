-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2021 pada 09.11
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_09_24_042324_users', 1),
(2, '2021_10_08_024753_tbpost', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpost`
--

CREATE TABLE `tbpost` (
  `posttitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbpost`
--

INSERT INTO `tbpost` (`posttitle`, `postdesc`, `archive`, `image`) VALUES
('adwadaw', 'adwdw', 'yes', 'adwadaw.PNG'),
('cartoon', 'hehfje', 'yes', 'cartoon.png'),
('tete', 'geage', 'yes', 'tete.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `email` varchar(150) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`email`, `username`, `password`) VALUES
('hansenawttheja@gmail.com', 'hans', 'fawfwa'),
('hansentth2eja@gmail.com', 'hans', 'dawdw'),
('hansenttheja@gmail.com', 'hans', 'Hansent123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('hans@gmail.com', 'assa@gmail.com', '$2y$10$YfzKA1PwDVdjUKlFY1MGZ.KuF3dZnKIYnE3QWIqtfLzOFDA792wmC'),
('ToxicHans', 'hansentthej12a@gmail.com', '$2y$10$CMeaIMQY5580bp3O7Xak7ejQ7EDIZFR6w9Og8HPfE1Q9bG9evfpkS'),
('ToxicHans', 'hansenttheja@gmail.com', '$2y$10$75WMlPzpu0IEPh1qfvtNhOhXdiGiHzC.E6PnRm0RnYy1U7FnTDbr6'),
('hans', 'hansenttheja38@gmail.com', '123456\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpost`
--
ALTER TABLE `tbpost`
  ADD PRIMARY KEY (`posttitle`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
