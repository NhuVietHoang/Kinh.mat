-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2022 at 04:00 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinh.mat`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'kính mat Armani Exchange', '2022-04-18 09:21:48', '2022-04-18 09:21:48'),
(2, 'kính mát Bolon', '2022-04-18 09:21:48', '2022-04-18 09:21:48'),
(3, 'kính mát Burberry', '2022-04-18 09:22:50', '2022-04-18 09:22:50'),
(4, 'kính mát  Michael Kors', '2022-04-18 09:22:50', '2022-04-18 09:22:50'),
(5, 'kính mát Prada', '2022-04-18 09:23:31', '2022-04-18 09:23:31'),
(6, 'kính mát Oakley', '2022-04-18 09:23:31', '2022-04-18 09:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createad_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `address`, `password`, `createad_at`, `updated_at`) VALUES
(1, 'nguyen thu phuong', 373177267, '61 khuc thua du', 'e10adc3949ba59abbe56e057f20f883e', '2022-04-20 02:58:46', '2022-04-20 02:58:46'),
(2, 'Nhữ Việt Hoàng', 321010470, '61 khuc thua du', '827ccb0eea8a706c4c34a16891f84e7b', '2022-04-20 03:04:49', '2022-04-20 03:04:49'),
(4, 'Trang Kiều', 365210873, '61 khuc thua du', '25d55ad283aa400af464c76d713c07ad', '2022-04-20 03:07:02', '2022-04-20 03:07:02'),
(5, 'Thu phương', 321010480, '61 khuc thua du', 'e10adc3949ba59abbe56e057f20f883e', '2022-04-20 03:37:24', '2022-04-20 03:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(10) NOT NULL,
  `hot` int(2) NOT NULL DEFAULT '1',
  `unit_price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `hot`, `unit_price`, `image`, `image_model`, `created_at`, `updated_at`) VALUES
(1, 'kính tròn xanh Dior', 7, 1, 450000, 'kinhtronxanhDior.jpg', 'mdkinhtronxanhDior.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(2, 'Kính hình bướm bolon', 2, 1, 570000, 'kinhbuombolon.jpg', 'mdkinhbuombolon.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(3, 'Kính mèo Rayban', 1, 0, 470000, 'kinhmeorayban.jpg', 'mdkinhmeorayban.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(4, 'Kính hình bướm phối nhựa ', 3, 0, 350000, 'kinhbuommolsion.jpg', 'mdkinhbuommolsion.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(5, 'Mắt kính tròn kim loại Flyer', 5, 1, 400000, 'kinhtronkimloaiFlyer.jpg', 'mdkinhtronkimloaiFlyer.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(6, 'Mắt kính vuông phối cạnh nhựa Giorgio Freri', 6, 1, 450000, 'kinhvuonggiorgioferri.jpg', 'mdkinhvuonggiorgioferri.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(7, 'mắt kính tròn molsion', 3, 1, 500000, 'kinhtronmolsion.jpg', 'mdkinhtronmolsion.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(8, 'mắt kính tròn vogue', 4, 1, 500000, 'kinhtronvogue.jpg', 'mdkinhtronvogue.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24'),
(9, 'mắt kính tròn Flyer', 5, 1, 500000, 'kinhtronflyer.jpg', 'mdkinhtronflyer.jpg', '2022-04-19 02:09:24', '2022-04-19 02:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `trademark`
--

CREATE TABLE `trademark` (
  `id` int(11) NOT NULL,
  `name_trademark` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trademark`
--

INSERT INTO `trademark` (`id`, `name_trademark`, `created_at`, `updated_at`) VALUES
(1, 'Ray Ban', '2022-04-18 09:36:06', '2022-04-18 09:36:06'),
(2, 'bolon', '2022-04-18 09:36:06', '2022-04-18 09:36:06'),
(3, 'molsion', '2022-04-18 09:36:27', '2022-04-18 09:36:27'),
(4, 'vogue', '2022-04-18 09:36:27', '2022-04-18 09:36:27'),
(5, 'Flyer', '2022-04-18 09:37:05', '2022-04-18 09:37:05'),
(6, 'Giorgio Ferri', '2022-04-18 09:37:05', '2022-04-18 09:37:05'),
(7, 'Dior', '2022-04-18 09:44:06', '2022-04-18 09:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(5) NOT NULL,
  `createad_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `role`, `createad_at`, `updated_at`) VALUES
(1, 'nuoccam2k@gmail.com', 'Nhữ Việt Hoàng', '12345678h', 1, '2022-04-21 01:58:55', '2022-04-21 01:58:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trademark`
--
ALTER TABLE `trademark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
