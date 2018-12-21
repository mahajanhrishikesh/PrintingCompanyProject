-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 09:33 AM
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
-- Table structure for table `job_card`
--

CREATE TABLE `job_card` (
  `card_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `gsm` int(255) NOT NULL,
  `length` int(255) NOT NULL,
  `width` int(255) NOT NULL,
  `num_of_cards` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `job_card`
--

INSERT INTO `job_card` (`card_id`, `name`, `gsm`, `length`, `width`, `num_of_cards`) VALUES
(4, 'gloss_card', 60, 23, 20, 5),
(5, 'gloss_card', 60, 30, 20, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_card`
--
ALTER TABLE `job_card`
  ADD PRIMARY KEY (`card_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_card`
--
ALTER TABLE `job_card`
  MODIFY `card_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
