-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2020 pada 14.33
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dumbways`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments_tb`
--

CREATE TABLE `comments_tb` (
  `postId` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments_tb`
--

INSERT INTO `comments_tb` (`postId`, `id`, `comment`) VALUES
(8, 'a', 'jumlah binatang'),
(9, '2', 'jenis binatang?'),
(10, '3', 'kebun binatang mana?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts_tb`
--

CREATE TABLE `posts_tb` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `createdBy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts_tb`
--

INSERT INTO `posts_tb` (`id`, `title`, `content`, `createdBy`) VALUES
(2, 'dumbways', 'abdul robi', 'abdul robi padri'),
(3, 'suranenggala', 'abdul gani', 'abdul fazri'),
(4, 'cirebon', 'deva', 'dev');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_tb`
--

INSERT INTO `user_tb` (`id`, `name`) VALUES
(1, 'abdul fazri'),
(2, 'abdul robi '),
(3, 'abdul robi padri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments_tb`
--
ALTER TABLE `comments_tb`
  ADD PRIMARY KEY (`postId`);

--
-- Indeks untuk tabel `posts_tb`
--
ALTER TABLE `posts_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments_tb`
--
ALTER TABLE `comments_tb`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `posts_tb`
--
ALTER TABLE `posts_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
