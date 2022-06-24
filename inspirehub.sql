-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 05:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspirehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `l_name` text NOT NULL,
  `id_no` int(20) NOT NULL,
  `age` int(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `cand_status` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `f_name`, `m_name`, `l_name`, `id_no`, `age`, `address`, `cand_status`, `created_at`, `updated_at`) VALUES
(1, 'Patrick', 'Maingi', 'Mutuku', 37740498, 23, '0759936766', 0, NULL, NULL),
(2, 'John', 'Mutuku', 'Mutua', 37740499, 26, '0737273738', 0, NULL, NULL),
(3, 'Wayne', 'Gakuo', 'Charles', 12909090, 22, '0740804152', 0, '2022-06-24 08:34:04', '2022-06-24 08:34:04'),
(4, 'Muli', 'Shadrack', 'Kitavi', 1290909022, 22, 'Masaku', 0, '2022-06-24 11:00:11', '2022-06-24 11:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(11) NOT NULL,
  `interview_id` varchar(100) NOT NULL,
  `interview_desc` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `interview_id`, `interview_desc`, `updated_at`, `created_at`) VALUES
(1, 'intdev001', 'senior software developer', '2022-06-24 09:32:07', '2022-06-24 09:32:07'),
(2, 'intdev002', 'backend developer', '2022-06-24 09:32:57', '2022-06-24 09:32:57'),
(3, 'intdev003', 'frontend developer', '2022-06-24 09:33:27', '2022-06-24 09:33:27'),
(4, 'intdev007', 'senior front developer', '2022-06-24 11:01:21', '2022-06-24 11:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `qsn_code` varchar(100) NOT NULL,
  `interview_id` varchar(100) NOT NULL,
  `id_no` int(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `qsn_code`, `interview_id`, `id_no`, `score`, `updated_at`, `created_at`) VALUES
(1, 'Q001', 'intdev001', 37740498, '60', NULL, NULL),
(2, 'Q001', 'intdev001', 37740498, '60', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `qsn_code` varchar(20) NOT NULL,
  `qsn_desc` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qsn_code`, `qsn_desc`, `updated_at`, `created_at`) VALUES
(1, 'Q001', 'list 5 differences between SOAP and RESTFUL API', '2022-06-24 09:04:01', '2022-06-24 09:04:01'),
(2, 'Q002', 'differentiate http and tcp', '2022-06-24 09:15:34', '2022-06-24 09:15:34'),
(3, 'Q009', 'Advantages of mysql over postgresql', '2022-06-24 11:02:14', '2022-06-24 11:02:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
