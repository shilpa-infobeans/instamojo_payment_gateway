-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2023 at 06:15 AM
-- Server version: 8.0.34-0ubuntu0.20.04.1
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_history`
--

CREATE TABLE `donation_history` (
  `id` int NOT NULL,
  `donator_name` varchar(255) NOT NULL,
  `donator_phone` varchar(255) NOT NULL,
  `donation_amount` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_data` datetime NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation_history`
--

INSERT INTO `donation_history` (`id`, `donator_name`, `donator_phone`, `donation_amount`, `payment_status`, `created_date`, `updated_data`, `email`) VALUES
(4, 'Shilpa Choudhary', '+917354800152', '1000.00', '1', '2023-09-28 11:24:30', '2023-09-28 11:24:30', 'shilpa.choudhary1996@gmail.com'),
(5, 'Gourav Choudhary', '+917354800152', '5000.00', 'Completed', '2023-09-28 11:32:33', '2023-09-28 11:32:33', 'shilpa.choudhary1996@gmail.com'),
(6, 'Shilpa Choudhary', '+917354800152', '5000.00', 'Completed', '2023-09-28 11:36:44', '2023-09-28 11:36:44', 'shilpa.choudhary1996@gmail.com'),
(7, 'Aalok Shrivastva', '+917354800152', '5000.00', 'Completed', '2023-09-28 11:38:20', '2023-09-28 11:38:20', 'shilpa.choudhary1996@gmail.com'),
(8, 'Shilpa Choudhary2333', '917354800152', '5000', 'Completed', '2023-09-28 12:04:59', '2023-09-28 12:04:59', 'shilpa.choudhary1996@gmail.com'),
(12, 'Shilpa Choudhary3444', '917354800152', '200', 'Completed', '2023-09-28 12:21:45', '2023-09-28 12:21:45', 'shilpa.choudhary1996@gmail.com'),
(13, 'Sakshi123', '917354800152', '900', 'Completed', '2023-09-28 12:24:01', '2023-09-28 12:24:01', 'shilpa.choudhary1996@gmail.com'),
(14, 'Sakshi123', '917354800152', '900', 'Completed', '2023-09-28 12:24:54', '2023-09-28 12:24:54', 'shilpa.choudhary1996@gmail.com'),
(15, 'Sakshi123', '917354800152', '900', 'Completed', '2023-09-28 12:26:27', '2023-09-28 12:26:27', 'shilpa.choudhary1996@gmail.com'),
(16, 'Sakshi123', '917354800152', '900', 'Completed', '2023-09-28 12:30:48', '2023-09-28 12:30:48', 'shilpa.choudhary1996@gmail.com'),
(17, 'Sakshi', '917354800152', '2000', 'Completed', '2023-09-28 04:35:31', '2023-09-28 04:35:31', 'shilpa.choudhary1996@gmail.com'),
(18, 'Sakshi', '917354800152', '2000', 'Completed', '2023-09-28 04:36:30', '2023-09-28 04:36:30', 'shilpa.choudhary1996@gmail.com'),
(19, 'Sakshi', '917354800152', '2000', 'Completed', '2023-09-28 04:36:49', '2023-09-28 04:36:49', 'shilpa.choudhary1996@gmail.com'),
(20, 'Sakshi', '917354800152', '2000', 'Completed', '2023-09-28 04:38:18', '2023-09-28 04:38:18', 'shilpa.choudhary1996@gmail.com'),
(21, 'Sakshi', '917354800152', '2000', 'Completed', '2023-09-28 04:38:20', '2023-09-28 04:38:20', 'shilpa.choudhary1996@gmail.com'),
(22, 'Shilpa Choudhary90', '917354800152', '1900', 'Completed', '2023-09-28 04:38:59', '2023-09-28 04:38:59', 'shilpa.choudhary1996@gmail.com'),
(23, 'Shilpa Choudhary90', '917354800152', '1900', 'Completed', '2023-09-28 04:41:28', '2023-09-28 04:41:28', 'shilpa.choudhary1996@gmail.com'),
(24, 'Shilpa Choudhary1209', '917354800152', '800', 'Completed', '2023-09-28 04:42:10', '2023-09-28 04:42:10', 'shilpa.choudhary1996@gmail.com'),
(25, 'Shilpa Choudhary1209', '917354800152', '800', 'Completed', '2023-09-28 04:42:21', '2023-09-28 04:42:21', 'shilpa.choudhary1996@gmail.com'),
(26, 'Shilpa Choudhary1209', '917354800152', '800', 'Completed', '2023-09-28 04:43:23', '2023-09-28 04:43:23', 'shilpa.choudhary1996@gmail.com'),
(27, 'Shilpa Choudhary1209', '917354800152', '800', 'Completed', '2023-09-28 04:43:26', '2023-09-28 04:43:26', 'shilpa.choudhary1996@gmail.com'),
(28, 'Shilpa Choudhary1209', '917354800152', '800', 'Completed', '2023-09-28 04:47:17', '2023-09-28 04:47:17', 'shilpa.choudhary1996@gmail.com'),
(29, 'Shilpa Choudhary1276', '917354800152', '2001', 'Completed', '2023-09-28 04:47:58', '2023-09-28 04:47:58', 'shilpa.choudhary1996@gmail.com'),
(30, 'Shilpa Choudhary1276', '917354800152', '2001', 'Completed', '2023-09-28 04:48:19', '2023-09-28 04:48:19', 'shilpa.choudhary1996@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_history`
--
ALTER TABLE `donation_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
