-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 10:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traning_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `printing_request`
--

CREATE TABLE `printing_request` (
  `order_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `store_id` int(255) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lamination` tinyint(1) NOT NULL DEFAULT '0',
  `master_printer_job` tinyint(1) NOT NULL DEFAULT '0',
  `jobcard_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `length` int(255) NOT NULL,
  `width` int(255) NOT NULL,
  `gsm` int(255) NOT NULL,
  `num_of_copies` int(255) NOT NULL DEFAULT '1',
  `order_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `printing_request`
--

INSERT INTO `printing_request` (`order_id`, `user_id`, `store_id`, `order_time`, `lamination`, `master_printer_job`, `jobcard_type`, `length`, `width`, `gsm`, `num_of_copies`, `order_cost`) VALUES
(1, 5, 5, '2018-10-28 18:45:31', 1, 1, 'gloss_paper', 10, 5, 60, 5, 3750),
(2, 5, 5, '2018-10-28 18:46:14', 1, 1, 'gloss_paper', 15, 5, 60, 5, 5625),
(3, 5, 5, '2018-10-28 18:56:49', 1, 1, 'gloss_card', 15, 5, 60, 5, 9375),
(4, 5, 5, '2018-10-28 19:03:33', 1, 1, 'gloss_card', 15, 5, 60, 5, 9375),
(5, 5, 5, '2018-10-28 19:04:29', 1, 1, 'gloss_card', 15, 5, 60, 5, 9375),
(6, 5, 5, '2018-10-28 19:07:50', 1, 1, 'gloss_card', 15, 5, 60, 5, 9380),
(7, 5, 5, '2018-10-28 19:08:29', 1, 1, 'gloss_card', 15, 5, 60, 5, 9400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printing_request`
--
ALTER TABLE `printing_request`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printing_request`
--
ALTER TABLE `printing_request`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
