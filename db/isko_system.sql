-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 01:55 PM
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
-- Database: `isko_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_type` varchar(255) NOT NULL,
  `activity_data` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `program_name`) VALUES
(1, 'Universal Access to Quality Tertiary Education(UAQTEA)'),
(2, 'Training for Work Scholarship Program(TWSP)'),
(3, 'Private Education Student Financial Assistance(PESFA)'),
(4, 'Special Training for Employment Program'),
(5, 'Tesda Online Program'),
(6, 'Rice Extension Service Program'),
(7, 'Tulong Trabaho Law');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `scholar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lrn_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `program_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'P',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`scholar_id`, `user_id`, `lrn_id`, `fname`, `mname`, `lname`, `province`, `municipality`, `barangay`, `email`, `phone`, `gender`, `civil_status`, `program_id`, `status`, `create_date`, `update_date`) VALUES
(4, 3, '158514060112', 'Dingdong', 'Sheesh', 'Dantes', 'Bulacan', 'Malolos', 'Pinagbiyakan', 'caymalu@gmail.com', '666666666', 'Male', 'Divorced', 7, 'A', '2023-11-23 08:40:30', '2023-11-26 20:03:26'),
(5, 4, '123133123132', 'Taylor', 'Alison', 'Swift', 'Tennessee', 'Nashville', 'Swift', 'swift@test.com', '777777', 'Female', 'Married', 2, 'A', '2023-10-24 05:06:48', '2023-11-26 20:01:24'),
(6, 5, '46541321866', 'Rod', 'Shesh', 'Wave', 'St. Petersburg', 'FL', 'USA', 'rod@test.com', '64135153153', 'Male', 'Single', 1, 'P', '2023-10-25 02:34:55', '2023-11-26 20:01:01'),
(7, 6, '76541232189', 'James', 'Swift', 'Augusta', 'CA', 'Memphis', 'Blvd', 'james@test.com', '213213216', 'Male', 'Divorced', 6, 'I', '2023-11-25 03:32:04', '2023-11-26 20:01:06'),
(8, 7, '84895132133', 'Jose', 'Jojo', 'Manalo', 'Manila', 'Valenzuela', 'Karuhatan', 'tscott@test.com', '783131699', 'Male', 'Single', 3, 'A', '2023-11-25 03:44:39', '2023-11-26 20:01:10'),
(9, 8, '4879878132132', 'Mxm', 'hehe', 'Toon', 'California', 'Los Angeles', 'Swift', 'mxm@test.com', '515313513', 'Female', 'Single', 4, 'P', '2023-11-26 07:12:13', '2023-11-26 20:01:17'),
(10, 9, '131232142432', 'Juan', 'Mercado', 'Dela Cruz', 'Bulacan', 'Guiguinto', 'Cruz', 'juan@test.com', '0941231354', 'Female', 'Single', 5, 'P', '2023-11-26 12:14:18', '2023-11-26 20:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `scholar_reqs`
--

CREATE TABLE `scholar_reqs` (
  `scholar_reqs_Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gwa` varchar(50) NOT NULL,
  `cor` text NOT NULL,
  `profilepic` text NOT NULL,
  `brgycert` text NOT NULL,
  `signature` text NOT NULL,
  `idcard` text NOT NULL,
  `req_status` varchar(255) NOT NULL DEFAULT 'P',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar_reqs`
--

INSERT INTO `scholar_reqs` (`scholar_reqs_Id`, `user_id`, `gwa`, `cor`, `profilepic`, `brgycert`, `signature`, `idcard`, `req_status`, `create_date`) VALUES
(4, 3, '2.0', '3_cor.PNG', '3_profilepic.PNG', '3_brgycert.PNG', '3_signature.PNG', '3_idcard.PNG', 'A', '2023-11-23 14:30:09'),
(5, 4, '1.0', '4_cor.PNG', '4_profilepic.PNG', '4_brgycert.PNG', '4_signature.PNG', '4_idcard.PNG', 'A', '2023-11-24 05:08:38'),
(6, 5, '1.6', '5_cor.PNG', '5_profilepic.PNG', '5_brgycert.PNG', '5_signature.PNG', '5_idcard.PNG', 'P', '2023-11-25 02:35:28'),
(7, 6, '1.4', '6_cor.PNG', '6_profilepic.PNG', '6_brgycert.PNG', '6_signature.PNG', '6_idcard.PNG', 'A', '2023-11-25 03:33:04'),
(8, 7, '1.1', '7_cor.PNG', '7_profilepic.PNG', '7_brgycert.PNG', '7_signature.PNG', '7_idcard.PNG', 'A', '2023-11-25 04:47:56'),
(9, 8, '1.3', '8_cor.PNG', '8_profilepic.PNG', '8_brgycert.PNG', '8_signature.PNG', '8_idcard.PNG', 'P', '2023-11-26 07:12:40'),
(10, 9, '1.6', '9_cor.PNG', '9_profilepic.PNG', '9_brgycert.PNG', '9_signature.PNG', '9_idcard.PNG', 'P', '2023-11-26 12:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `usertype`, `create_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, '2023-11-22 06:49:27'),
(2, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 2, '2023-11-22 06:51:33'),
(3, 'omega', 'dde055cdba209a54a7c8ec0fb720d761', 1, '2023-11-22 14:53:25'),
(4, 'alpha', '2c1743a391305fbf367df8e4f069f9f9', 1, '2023-11-23 04:54:00'),
(5, 'beta', '987bcab01b929eb2c07877b224215c92', 1, '2023-11-25 02:29:54'),
(6, 'charlie', 'bf779e0933a882808585d19455cd7937', 1, '2023-11-25 02:31:30'),
(7, 'delta', '63bcabf86a9a991864777c631c5b7617', 1, '2023-11-25 02:32:59'),
(8, 'toon', '1f2004d2d300ac1da929d30860236fc6', 1, '2023-11-26 07:10:44'),
(9, 'will', '18218139eec55d83cf82679934e5cd75', 1, '2023-11-26 12:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`scholar_id`);

--
-- Indexes for table `scholar_reqs`
--
ALTER TABLE `scholar_reqs`
  ADD PRIMARY KEY (`scholar_reqs_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `scholar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scholar_reqs`
--
ALTER TABLE `scholar_reqs`
  MODIFY `scholar_reqs_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
