-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2023 at 02:36 AM
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
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_verified` int(255) NOT NULL,
  `resettoken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`full_name`, `username`, `number`, `email`, `password`, `address`, `pincode`, `verification_code`, `is_verified`, `resettoken`, `resettokenexpire`) VALUES
('Anand Choudhary', 'anand', '7000162902', 'do4anand@gmail.com', '$2y$10$5ppxB.8E8El0Yj7jvBemLeu34vPr94Mga1i8p4PZdkHgQqMxc8m4.', 'Rajoda', '455001', '15a46b7e8e4bbcafec69cd2dc8efa53a', 1, NULL, NULL),
('Ritik Choudhary', 'Ritik', '7000162902', 'do4smartwork@gmail.com', '$2y$10$sIlmCTYW1y1kmCkT5L8KxOqX22/YgRH43axKtUFp1hp8sk4m30oH.', 'Rajoda', '455001', '816143b82dfc24aeb261f175d7beb085', 1, NULL, NULL),
('xyz', 'xyz', '7374924057', 'sarthakjoshi2030@gmail.com', '$2y$10$0gDAPfB5qX926XeI13E9Fu0MaPScx8d8Oo3ZxPOFFx9cuJOVCizvG', 'rajoda', '455001', 'f4320561e6a06560cbb8d6ece0fac039', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
