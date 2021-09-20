-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 03:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairview`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_Cust` int(11) NOT NULL,
  `user_Cust` varchar(100) NOT NULL,
  `pass_Cust` varchar(100) NOT NULL,
  `email_Cust` varchar(100) NOT NULL,
  `noTel_Cust` int(20) NOT NULL,
  `gender_Cust` enum('f','m') NOT NULL,
  `name_Cust` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_Cust`, `user_Cust`, `pass_Cust`, `email_Cust`, `noTel_Cust`, `gender_Cust`, `name_Cust`) VALUES
(6, 'fizah', '123', 'normala@yahoo.com', 1234567890, 'f', 'normala');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_Emp` int(11) NOT NULL,
  `user_Emp` varchar(100) NOT NULL,
  `pass_Emp` varchar(30) NOT NULL,
  `name_Emp` varchar(100) NOT NULL,
  `age_Emp` int(20) NOT NULL,
  `email_Emp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_Emp`, `user_Emp`, `pass_Emp`, `name_Emp`, `age_Emp`, `email_Emp`) VALUES
(11, 'admin', 'admin', 'hafizah', 23, 'hafizah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_Feed` int(11) NOT NULL,
  `name_Feed` varchar(100) NOT NULL,
  `feedback_Feed` varchar(100) NOT NULL,
  `feedback_grade` enum('G','B') NOT NULL,
  `id_Cust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_Feed`, `name_Feed`, `feedback_Feed`, `feedback_grade`, `id_Cust`) VALUES
(1, 'Website', 'IT USEFULL\r\n', 'G', 6);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id_Reg` int(11) NOT NULL,
  `notel_Cust` int(20) NOT NULL,
  `date_Reg` varchar(30) NOT NULL,
  `width_Pro` int(50) NOT NULL,
  `height_Pro` int(50) NOT NULL,
  `lenght_Pro` int(50) NOT NULL,
  `quantity2_pro` int(255) NOT NULL,
  `noted_Pro` varchar(255) NOT NULL,
  `ind` varchar(255) NOT NULL,
  `id_Cust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id_Reg`, `notel_Cust`, `date_Reg`, `width_Pro`, `height_Pro`, `lenght_Pro`, `quantity2_pro`, `noted_Pro`, `ind`, `id_Cust`) VALUES
(1, 1123115689, '2021-06-28', 0, 4, 2, 0, '', '', 2),
(47, 1123115689, '2021-09-22', 4869, 123, 3432, 50, 'i want 100 box, i want to put sumber ayu scrub', 'Food', 6),
(48, 1123115689, '2021-09-22', 4869, 123, 3432, 50, 'i want 100 box, i want to put sumber ayu scrub', 'Food', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_Cust`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_Emp`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_Feed`),
  ADD KEY `id_Cust` (`id_Cust`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id_Reg`),
  ADD KEY `id_Cust` (`id_Cust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_Cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_Emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_Feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id_Reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
