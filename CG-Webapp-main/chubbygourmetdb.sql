-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 03:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chubbygourmetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(191) NOT NULL,
  `category_slug` varchar(191) NOT NULL,
  `category_desc` mediumtext NOT NULL,
  `category_image` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `category_popular` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_slug`, `category_desc`, `category_image`, `status`, `category_popular`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(4, 'Pasta', 'Pasta', 'PastaPastaPastaPasta', '1669804176.jpg', 0, 1, 'PastaPasta', 'PastaPastaPasta', 'PastaPasta', '2022-11-30 10:29:36'),
(6, 'Chimken', 'Chimken', 'ChimkenChimkenChimkenChimkenChimken', '1669805223.jpg', 0, 0, 'ChimkenChimken', 'ChimkenChimkenChimken', 'ChimkenChimkenChimken', '2022-11-30 10:47:03'),
(8, 'Cookie', 'Cookie', 'CookieCookieCookie', 'Dennis-0.png', 0, 0, 'Cookie', 'CookieCookie', 'CookieCookie', '2022-12-01 02:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `phone`, `address`, `email`, `password`, `role_as`, `created_at`) VALUES
(1, 'First try first name', 'First try last name', 2147483647, 'Sa malibay', 'email@gmail.com', 'password', 0, '2022-11-30 05:22:07'),
(2, 'John Rysal', 'Rosel', 12, 'afaw', 'email2@gmail.com', '1234', 0, '2022-11-30 05:27:14'),
(3, 'John Rysal', 'aw', 2147483647, 'aww', 'email3@gmail.com', 'pass', 0, '2022-11-30 05:34:19'),
(4, '', '', 0, '', '', '', 0, '2022-11-30 05:34:37'),
(5, 'Rysal', 'Rosel', 2147483647, 'aw', 'email4@gmail.com', '123', 0, '2022-11-30 05:59:38'),
(6, 'Chubby ', 'Gourmet', 2147483647, 'Address', 'chubbygourmet@gmail.com', 'chubbygourmet', 1, '2022-11-30 06:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `popular` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `popular`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(1, 4, 'Jjangmyeon', 'Jjangmyeon', '', 'Korea PASTA', 150, 100, '301554779_1716181225431591_6269800524892842033_n.jpg', 50, 0, 0, 'Jjangmyeon', 'Korea PASTA', 'Korea PASTA', '2022-11-30 12:10:57'),
(2, 6, '24CHicken', '24CHicken', '', 'wow', 450, 400, '296995271_1696920504024330_77729257313770521_n.jpg', 55, 0, 0, '24CHicken', 'wow', 'wow', '2022-11-30 12:11:30'),
(3, 4, 'Spag', 'Spag', '', 'SpagSpagSpagSpag', 150, 130, '296995271_1696920504024330_77729257313770521_n.jpg', 55, 1, 0, 'Spag', 'SpagSpagSpag', 'Spag', '2022-12-01 00:07:41'),
(4, 4, 'Pancitsss', 'Pancit', '', 'PancitPancitPancitPancit', 150, 133, '1669853952.jpg', 24, 1, 0, 'Pancit', 'PancitPancitPancit', 'PancitPancit', '2022-12-01 00:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
