-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 11:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
(1, 'draw cords', 'Product 1', 'draw1.jpg'),
(2, 'woven tapes', 'Product 2', 'woven1.jpg'),
(3, 'knitted tapes', 'Product 3', 'knitted1.jpg'),
(4, 'draw cords', 'Product 4', 'draw2.jpg'),
(5, 'woven tapes', 'Product 5', 'woven2.jpg'),
(6, 'knitted tapes', 'Product 6', 'knitted2.jpg'),
(7, 'draw cords', 'Product 7', 'draw3.jpg'),
(8, 'woven tapes', 'Product 8', 'woven3.jpg'),
(9, 'knitted tapes', 'Product 9', 'knitted3.jpg'),
(10, 'draw cords', 'Product 10', 'draw4.jpg'),
(11, 'woven tapes', 'Product 11', 'woven4.jpg'),
(12, 'knitted tapes', 'Product 12', 'knitted4.jpg'),
(13, 'draw cords', 'Product 13', 'draw5.jpg'),
(14, 'woven tapes', 'Product 14', 'woven5.jpg'),
(15, 'knitted tapes', 'Product 15', 'knitted5.jpg'),
(16, 'draw cords', 'Product 16', 'draw6.jpg'),
(17, 'woven tapes', 'Product 17', 'woven6.jpg'),
(18, 'draw cords', 'Product 18', 'draw7.jpg'),
(19, 'woven tapes', 'Product 19', 'woven7.jpg'),
(20, 'draw cords', 'Product 20', 'draw8.jpg'),
(21, 'woven tapes', 'Product 21', 'woven8.jpg'),
(22, 'draw cords', 'Product 22', 'draw9.jpg'),
(23, 'woven tapes', 'Product 23', 'woven9.jpg');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
