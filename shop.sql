-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 10:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory_search`
--

CREATE TABLE `catagory_search` (
  `id` int(11) NOT NULL,
  `catagory_name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory_search`
--

INSERT INTO `catagory_search` (`id`, `catagory_name`, `link`) VALUES
(1, 'babu', ''),
(2, 'kalu', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(11) NOT NULL,
  `link` varchar(50) NOT NULL,
  `sub_menu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `menu_name`, `link`, `sub_menu`) VALUES
(2, 'mintu', 'www.youtube.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `priceUntil` varchar(11) NOT NULL,
  `minimum` int(11) NOT NULL,
  `sku` int(11) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `author` varchar(50) NOT NULL,
  `inStock` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `sub_catagory` varchar(30) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `rank` varchar(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `sub_catagory_ID` int(11) NOT NULL,
  `sort_details` varchar(30) NOT NULL,
  `others` varchar(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `priceUntil`, `minimum`, `sku`, `brand`, `author`, `inStock`, `description`, `catagory`, `sub_catagory`, `product_type`, `color`, `weight`, `stock_amount`, `rank`, `product_id`, `catagory_id`, `sub_catagory_ID`, `sort_details`, `others`, `image`) VALUES
(12, 'computer', 1000, '', 0, 12, '', '', 0, '', '', '', '', '', 0, 0, '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `sub_menu_name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `parent_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory_search`
--
ALTER TABLE `catagory_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory_search`
--
ALTER TABLE `catagory_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
