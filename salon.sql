-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 03:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_data`
--

CREATE TABLE `booking_data` (
  `full_name` varchar(100) NOT NULL,
  `p_no` int(20) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_data`
--

INSERT INTO `booking_data` (`full_name`, `p_no`, `email_address`, `address`) VALUES
('mohsin', 2147483647, 'mohsin@gmail.com', 'karachi125'),
('mohsin', 2147483647, 'mohsin@gmail.com', 'karachi125');

-- --------------------------------------------------------

--
-- Table structure for table `salon_user`
--

CREATE TABLE `salon_user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salon_user`
--

INSERT INTO `salon_user` (`name`, `email`, `password`, `id`) VALUES
('mohsin', 'mohsin@gmail.com', 'karachi', 1),
('mohsin', 'mohsin@gmail.com', 'karachi', 2),
('', '', '', 3),
('nabil', 'nabil@gmail.com', 'raza123', 4),
('ahmedraza', 'ahmedraza@gmail.com', 'razakhan123', 5),
('ukasha', 'ukasha@gmail.com', 'ukasha', 6),
('ahmedraza', 'ahmedraza@gmail.com', 'razakhan123', 7),
('kashan', 'kashan@gmail.com', 'kashan', 8),
('mohsin', 'mohsin@gmail.com', 'karachi', 9),
('nabil', 'nabil@gmail.com', '12345678', 10),
('mohsin', 'hassan@gmail.com', '1234567', 11),
('mohsin', 'mohsin@gmail.com', 'karachi125', 12),
('sufyan', 'sufyan@gmail.com', 'king', 13),
('mohsin', 'mohsin@gmail.com', 'king125', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salon_user`
--
ALTER TABLE `salon_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salon_user`
--
ALTER TABLE `salon_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
