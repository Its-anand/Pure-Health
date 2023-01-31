-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2023 at 02:35 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18749980_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_counter` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refund` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `name`, `username`, `number`, `email`, `address`, `pincode`, `product_id`, `order_id`, `product_name`, `product_counter`, `product_price`, `payment_status`, `delivery_status`, `refund`) VALUES
('2022-04-25', 'Mukesh', 'mukeshg', '7000162902', 'do4smartwork@gmail.com', 'Rajoda', 455001, '2', '048199', 'Face wash - Cleans Skin Deeply, 150ml', 3, 300, '1', 'Delivered', 'Refund Successful'),
('2022-10-20', 'Ritik Choudhary', 'Ritik', '7000162902', 'do4smartwork@gmail.com', 'Rajoda', 455001, '1', '232485', 'Body lotion with natural ingredients, 250ml', 10, 1500, '1', 'Delivered', 'Pending'),
('2022-08-04', 'Ritik Choudhary', 'Ritik', '7000162902', 'do4smartwork@gmail.com', 'Rajoda', 455001, '1', '247827', 'Body lotion with natural ingredients, 250ml', 2, 300, '1', 'Delivered', 'Refund Successful'),
('2022-04-25', 'Gopal choudhary', 'Gpl', '8815770680', 'divyanshuchoudhary717@gmail.com', 'Rajoda', 455001, '1', '339578', 'Body lotion with natural ingredients, 250ml', 1, 150, '1', 'Delivered', 'Refund Successful'),
('2022-04-30', 'Anand Choudhary', 'anand', '7000162902', 'do4connect@gmail.com', 'house no. 131 Rajoda, dewas, madhya pradesh', 455001, '1', '528939', 'Body lotion with natural ingredients, 250ml', 3, 450, '1', 'Delivered', 'Refund Successful'),
('2022-08-04', 'Anand Choudhary', 'anand', '7000162902', 'do4anand@gmail.com', 'Rajoda', 455001, '6', '757682', 'Onion Shampoo For Hair Fall Control, 200ml', 5, 600, '1', 'Pending', NULL),
('2022-04-28', 'Anand Choudhary', 'robot', '7000162902', 'do4anand@gmail.com', 'Rajoda', 455001, '1', '813797', 'Body lotion with natural ingredients, 250ml', 4, 600, '1', 'Delivered', 'Refund Successful'),
('2022-08-04', 'Anand Choudhary', 'anand', '7000162902', 'do4anand@gmail.com', 'Rajoda', 455001, '6', '915857', 'Onion Shampoo For Hair Fall Control, 200ml', 4, 480, '1', 'Pending', NULL),
('2022-04-30', 'Anand Choudhary', 'robot', '7000162902', 'do4anand@gmail.com', 'Rajoda', 455001, '4', '975012', 'moisturizer with Coconut oil, 150 ml', 10, 1800, '1', 'Delivered', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
