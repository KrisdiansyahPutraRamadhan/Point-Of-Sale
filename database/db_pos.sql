-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2022 pada 05.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `person_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_customers`
--

INSERT INTO `tbl_customers` (`person_id`, `fullname`, `phone_number`, `email`) VALUES
(1, 'asdfg', '6789', 'dcvg'),
(5, 'fullhouse', '089422351432', 'ndnfj@gmail.com'),
(62, 'wugiehd', '0987', 'wsq@wugd.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_deliveries`
--

CREATE TABLE `tbl_deliveries` (
  `sale_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `delivery_employee` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_deliveries`
--

INSERT INTO `tbl_deliveries` (`sale_id`, `status`, `fullname`, `address`, `delivery_employee`, `category`) VALUES
(1, 'tui', 'fghjkl', 'fghjk', 'ghjk', 'fghjk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `person_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_employee`
--

INSERT INTO `tbl_employee` (`person_id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'rudi', 'rudi77@gmail.com', '08972664734', 'JL. Budiyono No.9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_giftcard`
--

CREATE TABLE `tbl_giftcard` (
  `giftcard_number` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `customer_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_giftcard`
--

INSERT INTO `tbl_giftcard` (`giftcard_number`, `description`, `value`, `customer_name`) VALUES
(1, 'akuqqq', '89$', 'budi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_itemkits`
--

CREATE TABLE `tbl_itemkits` (
  `id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `cost_price` varchar(250) NOT NULL,
  `selling_price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_itemkits`
--

INSERT INTO `tbl_itemkits` (`id`, `product`, `category`, `cost_price`, `selling_price`) VALUES
(1, 'aquaa', 'minum', '89', '89');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_items`
--

CREATE TABLE `tbl_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_items`
--

INSERT INTO `tbl_items` (`item_id`, `item_name`, `cost_price`, `selling_price`, `quantity`) VALUES
(1, 'asd', 12, 13, 2),
(2, 'asdfgh', 1235, 1234, 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_locations`
--

INSERT INTO `tbl_locations` (`id`, `name`, `address`, `phone`, `email`) VALUES
(1, 'udonnnn', 'jl.kenangan 19', '089342424', 'udion@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pricerules`
--

CREATE TABLE `tbl_pricerules` (
  `id` int(11) NOT NULL,
  `rule_name` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `rule_type` varchar(30) NOT NULL,
  `coupon_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pricerules`
--

INSERT INTO `tbl_pricerules` (`id`, `rule_name`, `start_date`, `end_date`, `rule_type`, `coupon_code`) VALUES
(1, 'ASDF', '2022-08-15', '2022-08-17', 'personal', '3D873S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `person_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_suppliers`
--

INSERT INTO `tbl_suppliers` (`person_id`, `company_name`, `last_name`, `first_name`, `email`, `phone`) VALUES
(1, 'BLITZ ENT.', 'Henry', 'James', 'jameshh11@gmail.com', '089435135352'),
(2, 'Barbos Inc.', 'Matsumoto', 'Kanae', 'Kanna22@gmail.com', '089635472635'),
(3, 'Zeroo One  Inc.', 'Andi', 'Hay', 'halksi22@gmail.com', '089435132654'),
(82, 'faith inc', 'jah', 'kf', 'jdif@gmail.com', '0894422');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`person_id`);

--
-- Indeks untuk tabel `tbl_deliveries`
--
ALTER TABLE `tbl_deliveries`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`person_id`);

--
-- Indeks untuk tabel `tbl_giftcard`
--
ALTER TABLE `tbl_giftcard`
  ADD PRIMARY KEY (`giftcard_number`);

--
-- Indeks untuk tabel `tbl_itemkits`
--
ALTER TABLE `tbl_itemkits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indeks untuk tabel `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pricerules`
--
ALTER TABLE `tbl_pricerules`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`person_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
