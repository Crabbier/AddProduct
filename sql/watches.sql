-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watches`
--
CREATE DATABASE IF NOT EXISTS `watches` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `watches`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` enum('Silver','Gold','Black','Copper','Blue','White','Red') NOT NULL,
  `category` enum('Quartz Watch','Mechanic Watch','Automatic Watch','Necklace','Bracelete','Ring') NOT NULL,
  `brand` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `category`, `brand`, `description`, `date`) VALUES
(1, 'PD Daytona001', 'Silver', '', 'Quartz Watch', '- 10 ATM\r\n- 316L Stainless Steel\r\n- Zapphire crystal', '2023-10-10'),
(2, 'LG2407', 'Copper', '', 'Automatic Watch', '- Premium watch', '2023-10-10'),
(3, 'CRRJ3422', 'White', 'Mechanic Watch', 'Curren', '- Great performance \n\r\n- Big model', '2023-10-10'),
(4, 'JGR23764', 'Silver', 'Mechanic Watch', 'JRG', '-Leather style', '2023-10-11');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
