-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 04:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `thumb1` varchar(255) NOT NULL,
  `thumb2` varchar(255) NOT NULL,
  `thumb3` varchar(255) NOT NULL,
  `thumb4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `detail`, `thumb1`, `thumb2`, `thumb3`, `thumb4`) VALUES
(17, 'Water Bottles', '$13', '900ml Water Bottle Motivational Sport Water Bottle Leakproof Drinking Bottles Outdoor Sports Travel Kettle Drinking Water Bottle.', 'b1.jpeg', 'b2.jfif', 'b3.webp', 'b4.jfif'),
(18, 'Mug', '$90', 'Customize Mug, Picture Mug, 3D Mug With Text, Logo, or Photo. Custom Photo Mugs (PERFECT GIFT FOR YOUR FAMILY & FRIENDS)', 'm1.webp', 'm2.webp', 'm4.jfif', 'mm.webp'),
(19, 'wall clock', '$130', 'Wooden Wall Clock-3D Watch DIY Design Decoration Birds Numeral Quartz For Home Décor Living Room And Offices And For Gifts', 'w1.webp', 'w2.jfif', 'w3.jpg', 'w4.jfif'),
(20, 'airpods', '$350', 'Airpods Air Pro 3rd Gen TWS (True Wireless Stereo) Bluetooth Earbuds Dual Earphones Headset (Connect With All Bluetooth Devices).', 'a1.jfif', 'a2.jfif', 'a3.jfif', 'a4.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
