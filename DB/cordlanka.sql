-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Generation Time: Jan 14, 2018 at 08:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cordlanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_name`, `product_name`, `image`) VALUES
(1, 'woven tapes', 'Product 1', 'woven1.jpg'),
(2, 'draw cords', 'Product 2', 'draw1.jpg'),
(3, 'knitted tapes', 'Product 3', 'knitted1.jpg'),
(4, 'woven tapes', 'Product 4', 'woven2.jpg'),
(5, 'draw cords', 'Product 5', 'draw2.jpg'),
(10, 'knitted tapes', 'Product 6', 'knitted2.jpg'),
(11, 'woven tapes', 'Product 7', 'woven3.jpg'),
(19, 'draw cords', 'Product 8', 'draw3.jpg'),
(20, 'knitted tapes', 'Product 9', 'knitted3.jpg'),
(23, 'woven tapes', 'Product 10', 'woven4.jpg'),
(24, 'draw cords', 'Product 11', 'draw4.jpg'),
(26, 'knitted tapes', 'Product 12', 'knitted4.jpg'),
(28, 'woven tapes', 'Product 13', 'woven5.jpg'),
(32, 'draw cords', 'Product 14', 'draw5.jpg'),
(33, 'knitted tapes', 'Product 15', 'knitted5.jpg'),
(34, 'woven tapes', 'Product 16', 'woven6.jpg'),
(35, 'woven tapes', 'Product 17', 'woven7.jpg'),
(36, 'woven tapes', 'Product 18', 'woven8.jpg'),
(37, 'woven tapes', 'Product 19', 'woven9.jpg'),
(38, 'draw cords', 'Product 20', 'draw6.jpg'),
(39, 'draw cords', 'Product 21', 'draw7.jpg'),
(40, 'draw cords', 'Product 22', 'draw8.jpg'),
(41, 'draw cords', 'Product 23', 'draw9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1, 'jayanakafonseka@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
