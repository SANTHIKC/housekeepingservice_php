-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 09:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg`
--

CREATE TABLE `employee_reg` (
  `emp_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_reg`
--

INSERT INTO `employee_reg` (`emp_id`, `name`, `email`, `address`, `phone_number`, `experience`, `service_type`, `photo`) VALUES
(1, 'bibi', 'bibi@gmail.com', 'kochi', '9876543210', '3', 'Electriction', 'download (1).jpg'),
(2, 'anus', 'anus@gmail.com', 'kollam', '9870654326', '4', 'cleaning ', 'pexels-photo-674010.jpg'),
(42, '', '', '', '', '', '', ''),
(43, 'avi', 'avi@gmail.com ', 'kochi', '9876543212', '6', 'Electriction ', 'IMG_20230912_102940_737.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'anu@gmail.com', 'anu@123');

-- --------------------------------------------------------

--
-- Table structure for table `login_emp_user`
--

CREATE TABLE `login_emp_user` (
  `log_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_emp_user`
--

INSERT INTO `login_emp_user` (`log_id`, `email`, `password`, `type`) VALUES
(1, 'bibi@gmail.com', 'bibi@123', 'employee'),
(4, 'anus@gmail.com', 'anus@123', 'employee'),
(14, 'abhi@gmail.com ', 'abhi@123', 'employee'),
(42, '', '', 'employee'),
(43, 'avi@gmail.com ', 'avi@123', 'employee'),
(100, 'veena@gmail.com', 'veena@123', 'user'),
(102, 'venus@gmail.com', 'veena@123', 'user'),
(103, 'sneha@gmail.com', 'sneha@123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` bigint(15) NOT NULL,
  `photo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `user_name`, `email`, `address`, `phone_number`, `photo`) VALUES
(100, 'veena', 'veena@gmail.com', 'kochi', 9876543216, 'download.jpg'),
(101, 'varun', 'veena@gmail.com', 'kochi', 9876543216, 'download.jpg'),
(102, 'varunss', 'venus@gmail.com', 'kochi', 9876543216, 'download.jpg'),
(103, 'sneha', 'sneha@gmail.com', 'kottayam', 9633045681, 'IMG-230823-212013-22628.png'),
(104, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_reg`
--
ALTER TABLE `employee_reg`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `login_emp_user`
--
ALTER TABLE `login_emp_user`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_reg`
--
ALTER TABLE `employee_reg`
  MODIFY `emp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_emp_user`
--
ALTER TABLE `login_emp_user`
  MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
