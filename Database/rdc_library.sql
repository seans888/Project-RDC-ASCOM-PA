-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2016 at 11:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdc_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `directive`
--

CREATE TABLE IF NOT EXISTS `directive` (
  `id` int(11) NOT NULL,
  `directive_date` date NOT NULL,
  `directive_type` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `emp_rank` varchar(11) NOT NULL,
  `emp_type` varchar(11) NOT NULL,
  `emp_fname` varchar(50) NOT NULL,
  `emp_lname` varchar(20) NOT NULL,
  `emp_division` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_rank`, `emp_type`, `emp_fname`, `emp_lname`, `emp_division`, `user_id`) VALUES
(1, 'Lt. Col', 'Army', 'Edric', 'Caranto', 'Director', 1),
(2, 'Major', 'Army', 'Jon', 'Caranto', 'QAD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `implementation_plan`
--

CREATE TABLE IF NOT EXISTS `implementation_plan` (
  `id` int(11) NOT NULL,
  `implan_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_specification`
--

CREATE TABLE IF NOT EXISTS `item_specification` (
  `id` int(11) NOT NULL,
  `itemspec_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1470452628),
('m130524_201442_init', 1470452637),
('m160806_032128_directive', 1470453715),
('m160806_045425_create_directive', 1470459370),
('m160806_045835_create_task_organization', 1470460620),
('m160806_050752_create_result', 1470461221),
('m160806_050938_create_implementation_plan', 1470461222),
('m160806_051550_create_item_specification', 1470461223);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL,
  `result_date` date NOT NULL,
  `result_item` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_organization`
--

CREATE TABLE IF NOT EXISTS `task_organization` (
  `id` int(11) NOT NULL,
  `task_org_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_document`
--

CREATE TABLE IF NOT EXISTS `test_document` (
  `id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_type` varchar(20) NOT NULL,
  `test_schedule` date NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `test_worksheet_id` int(11) NOT NULL,
  `task_organization_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `implementation_plan_id` int(11) NOT NULL,
  `item_specification_id` int(11) NOT NULL,
  `directive_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_worksheet`
--

CREATE TABLE IF NOT EXISTS `test_worksheet` (
  `id` int(11) NOT NULL,
  `work_item` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ebcaranto', 'A0vY8cGeW0POngE8eeV64VEsQonYc_8i', '$2y$13$wHSdyFveRpLaOWX7PAJqqOiIf8h0iRRlkG35ZpBNHVM2fOnRMesUa', NULL, 'edric.caranto@gmail.com', 10, 1470452782, 1470452782);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directive`
--
ALTER TABLE `directive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implementation_plan`
--
ALTER TABLE `implementation_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_specification`
--
ALTER TABLE `item_specification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_organization`
--
ALTER TABLE `task_organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_document`
--
ALTER TABLE `test_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_worksheet`
--
ALTER TABLE `test_worksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directive`
--
ALTER TABLE `directive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `implementation_plan`
--
ALTER TABLE `implementation_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_specification`
--
ALTER TABLE `item_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task_organization`
--
ALTER TABLE `task_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test_worksheet`
--
ALTER TABLE `test_worksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
