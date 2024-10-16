-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 18.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `name`) VALUES
(1, 'niswa', '08', 'niswa'),
(2, 'nia', '01', 'nia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(17, 'Madu Manis 1000 gr', '160000', 'images/mellifera3.png', 1, '160000', 'p1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `nomor` varchar(20) DEFAULT NULL,
  `status` enum('accepted','rejected') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id`, `nama`, `email`, `nomor`, `status`) VALUES
(27, 'Khoirun Niswati Ulya', 'khoirunniswatiulyaa@gmail.com', '085890202094', 'accepted'),
(28, 'niswa ulya', '062140722849@student.polsri.ac.id', '085890202094', 'accepted'),
(29, 'bungaaa', 'uangbuatdunia@gmail.com', '085890202094', 'accepted'),
(30, 'Khoirun Niswati Ulya', 'khoirunniswatiulyaa@gmail.com', '085890202094', 'accepted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `status` enum('selesai','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`, `status`) VALUES
(6, 'wawa', 'uangbuatdunia@gmail.com', '+6285890202094', 'szdgfhghmjb,kn,', 'cod', 'Madu Manis 125 gr(1)', '25000', 'selesai'),
(7, 'wawa', 'khoirunniswatiulyaa@gmail.com', '+6285890202094', 's', 'cod', 'Madu Manis 300 gr(1)', '60000', 'ditolak'),
(8, 'Khoirun Niswati Ulya', 'khoirunniswatiulyaa@gmail.com', '085890202094', 'Palembang', 'cod', 'Madu Manis 300 gr(1), Madu Manis 1000 gr(1)', '220000', NULL),
(9, 'Khoirun Niswati Ulya', 'khoirunniswatiulyaa@gmail.com', '085890202094', 'Palembang', 'Dana', 'Madu Manis 300 gr(1)', '60000', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `status` enum('selesai','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `status`) VALUES
(1, 'Madu Manis 1000 gr', '160000', 23, 'images/mellifera3.png', 'p1000', NULL),
(2, 'Madu Manis 300 gr', '60000', 20, 'images/mellifera2.png', 'p1001', NULL),
(3, 'Madu Manis 125 gr', '25000', 20, 'images/mellifera1.png', 'p1002', NULL),
(4, 'Madu Itama 1000 gr', '300000', 20, 'images/itama3.png', 'p1003', NULL),
(5, 'Madu Itama 300 gr', '135000', 20, 'images/itama2.png', 'p1004', NULL),
(6, 'Madu Itama 125 gr', '60000', 20, 'images/itama1.png', 'p1005', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama`, `username`, `password`) VALUES
(1, 'noa', 'noa', '00'),
(2, 'nana', 'nana', '01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
