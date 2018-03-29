-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 12:49 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Trần Đình Tuấn', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--

CREATE TABLE `bill_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Giày Li-ning'),
(2, 'Áo Nike'),
(3, 'Quần Adidas'),
(14, 'bla bla bla ok');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_time` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `img`, `date`, `edit_time`, `category_id`) VALUES
(1, 'Bikini Ngân 98', 'Bikini Ngân 98 like new, đã qua sử dụng, nhưng còn mới 99%. Nhanh tay đặt hàng kẻo hết nha ae.', 690000, '3042583.jpg', '2018-03-29 10:00:45', NULL, 14),
(2, 'Bikini Ngân 98', 'Bikini Ngân 98 like new, hàng đã qua sử dụng, nhưng mới 99%. Nhanh tay đặt hàng kẻo hết ae ơi !!!', 690000, '3042583.jpg', '2018-03-29 10:04:53', NULL, 14),
(3, 'ferfewr', 'hdghdgh', 9000, '', '2018-03-29 10:08:28', NULL, 1),
(4, 'sdcxvxcv', 'dsgvxcvxzcv', 9000, '3042583.jpg', '2018-03-29 10:22:28', NULL, 1),
(5, 'fsdfdsf', 'dsfdsfs', 1000, '3042583.jpg', '2018-03-29 10:38:57', NULL, 1),
(6, 'fsdafsadfas', 'fsadfasdfsadf', 1000, '3042583.jpg', '2018-03-29 10:40:17', NULL, 1),
(7, 'fsdf', 'sdfas', 1000, '3042583.jpg', '2018-03-29 11:05:23', NULL, 1),
(8, 'fsdffsadf', 'sdfassàd', 1000, '3042583.jpg', '2018-03-29 11:07:21', NULL, 1),
(9, 'sadfsadf', 'ádfsdfsdfsadfasdfsa', 1000, '3042583.jpg', '2018-03-29 11:07:34', NULL, 1),
(10, 'fsafsadfsdf', 'ádfsadfsadf', 2000, '3042583.jpg', '2018-03-29 11:08:17', NULL, 1),
(11, 'sadf', 'fasdfsadfsadf', 3000, '3042583.jpg', '2018-03-29 11:10:23', NULL, 1),
(12, 'fsdfas', 'fasdfsadfas', 3000, '3042583.jpg', '2018-03-29 11:11:09', NULL, 1),
(13, 'sadfsadf', 'fsdfasdf', 1000, '3042583.jpg', '2018-03-29 11:12:15', NULL, 1),
(14, 'sadfsa', 'fasdfsadfsadf', 4000, '3042583.jpg', '2018-03-29 11:12:57', NULL, 1),
(15, 'sdfsadf', 'ầ', 2000, '3042583.jpg', '2018-03-29 11:13:28', NULL, 1),
(16, 'fsdfsa', 'ấdfas', 1000, '3042583.jpg', '2018-03-29 11:14:00', NULL, 1),
(17, 'sadfasdf', 'fasdfas', 2000, '3042583.jpg', '2018-03-29 11:14:41', NULL, 1),
(18, 'sadfasdf', 'sadfasf', 1000, '3042583.jpg', '2018-03-29 11:15:10', NULL, 1),
(19, 'fdsfsdaf', 'fasdfasdfa', 1000, '3042583.jpg', '2018-03-29 11:15:50', NULL, 1),
(20, 'sadfsadf', 'sdfasdfasdf', 1000, '3042583.jpg', '2018-03-29 11:16:34', NULL, 1),
(21, 'fasdfsa', 'ấdfasdf', 1000, '3042583.jpg', '2018-03-29 11:17:16', NULL, 1),
(22, 'sadfasdf', 'fsadfas', 1000, '3042583.jpg', '2018-03-29 11:18:06', NULL, 1),
(23, 'sadfsaf', 'fsadfa', 1000, '3042583.jpg', '2018-03-29 11:19:12', NULL, 1),
(24, 'fsdfasd', 'fsdfasdf', 2000, '3042583.jpg', '2018-03-29 11:21:39', NULL, 1),
(25, 'fsadfasdf', 'ấdfasdfas', 2000, '3042583.jpg', '2018-03-29 11:22:35', NULL, 1),
(26, 'sfdasdf', 'ầ', 1000, '3042583.jpg', '2018-03-29 11:23:23', NULL, 1),
(27, 'ádfasdf', 'xcvxzv', 50000, '3042583.jpg', '2018-03-29 11:25:51', NULL, 1),
(28, 'ádfasdf', 'fasdfasdf', 1000, '3042583.jpg', '2018-03-29 11:27:23', NULL, 1),
(29, 'ádfas', 'fsdaf', 1000, '3042583.jpg', '2018-03-29 11:27:56', NULL, 1),
(30, 'fsadf', 'fsadf', 2000, '3042583.jpg', '2018-03-29 11:28:13', NULL, 1),
(31, 'ádf', 'fsadf', 2000, '3042583.jpg', '2018-03-29 11:28:35', NULL, 1),
(32, 'sadfsdaf', 'ádfsadf', 2000, '3042583.jpg', '2018-03-29 11:28:54', NULL, 1),
(33, 'sadfasdf', 'sadfd', 3000, '3042583.jpg', '2018-03-29 11:29:08', NULL, 1),
(34, 'sadf', 'fsdfa', 2000, '3042583.jpg', '2018-03-29 11:29:36', NULL, 1),
(35, 'sadfasdf', 'afasfsa', 2000, '3042583.jpg', '2018-03-29 11:30:02', NULL, 1),
(36, 'xzcvxczv', 'xcvxzcvxzcv', 2000, '3042583.jpg', '2018-03-29 11:30:31', NULL, 1),
(37, 'xzcvxczv', 'xzcvxczvzx', 2000, '3042583.jpg', '2018-03-29 11:31:11', NULL, 1),
(38, 'sadfsdaf', 'ádfsadf', 1000, '3042583.jpg', '2018-03-29 11:31:35', NULL, 1),
(39, 'fsdafsa', 'ádfdsaf', 1000, '3042583.jpg', '2018-03-29 11:31:51', NULL, 1),
(40, 'xcvxzcv', 'xzcvzxcv', 1000, '3042583.jpg', '2018-03-29 11:33:02', NULL, 1),
(41, 'sadfsdaf', 'sadfasdfsadf', 2000, '3042583.jpg', '2018-03-29 11:33:31', NULL, 1),
(42, 'ádfsadf', 'ádfsadfs', 1000, '3042583.jpg', '2018-03-29 11:34:08', NULL, 1),
(43, 'xzcvxzcv', 'xzcvxczvxzcv', 1000, '3042583.jpg', '2018-03-29 11:34:49', NULL, 1),
(44, 'sdfsad', 'sadfsadfasf', 4000, '3042583.jpg', '2018-03-29 12:42:28', '2018-03-29 12:43:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`, `date`) VALUES
(1, 'Vô Danh', 'vodanh@gmail.com', '123456', '0987654321', 'Ở một nơi rất xa', '2018-03-24 18:48:05'),
(2, 'Trần Đình Tuấn', 'admin@gmail.com', '123456', '0123456789', 'Hà Nội', '2018-03-24 18:48:05'),
(3, 'Nguyễn Đức Tú', 'tu@gmail.com', '123456', '0174839533', 'Thái Bình mồ hôi rơi', '2018-03-24 19:02:55'),
(4, 'Lê Anh Tuấn', 'tuan@gmail.com', '123456', '0147583959', 'Chịu', '2018-03-24 19:03:20'),
(5, 'Lê Thùy Dương', 'duong@gmail.com', '123456', '0987654321', 'Nam Định', '2018-03-27 15:21:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_info`
--
ALTER TABLE `bill_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
