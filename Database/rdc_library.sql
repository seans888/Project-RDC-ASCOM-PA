-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 06:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('user', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('administrative', 1, 'these are permission for administrative division employee', NULL, NULL, NULL, NULL),
('create-directive', 1, 'allow user to add directive', NULL, NULL, NULL, NULL),
('create-implan', 1, 'allows user to create an implan document', NULL, NULL, NULL, NULL),
('create-itemspec', 1, 'allows user to add an itemspecification document', NULL, NULL, NULL, NULL),
('create-result', 1, 'allows user to create a result document', NULL, NULL, NULL, NULL),
('create-taskorg', 1, 'allows user to add a taskorg document', NULL, NULL, NULL, NULL),
('create-worksheet', 1, 'allows user to add a worksheet', NULL, NULL, NULL, NULL),
('director', 1, 'this user can do everything', NULL, NULL, NULL, NULL),
('quality-assurance', 1, 'these are permissions for quality assurance division', NULL, NULL, NULL, NULL),
('tester', 1, 'these are permissions for testers under QAD', NULL, NULL, NULL, NULL),
('user', 1, 'standard user', NULL, NULL, NULL, NULL),
('view index', 1, 'this user can view index when looged in', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('director', 'create-directive'),
('director', 'create-worksheet'),
('user', 'view index');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `directive`
--

CREATE TABLE `directive` (
  `id` int(11) NOT NULL,
  `directive_date` date NOT NULL,
  `directive_type` varchar(45) NOT NULL,
  `directive_name` varchar(100) NOT NULL,
  `directive_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directive`
--

INSERT INTO `directive` (`id`, `directive_date`, `directive_type`, `directive_name`, `directive_file`) VALUES
(1, '2012-12-12', 'DirectiveType1', 'Directive1', ''),
(2, '2012-12-12', 'Pretest', 'Pretest1', ''),
(3, '2012-12-12', 'Pretest', 'Pretest1', ''),
(4, '0000-00-00', 'Pretest', 'Pretest1', 'uploads/Pretest1,docx'),
(5, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(6, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(7, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(8, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(9, '2012-12-12', 'acceptance', 'acceptance directive', ''),
(10, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(11, '2012-11-12', 'acceptance', 'acceptance directive', ''),
(12, '2012-10-12', 'post qualification', 'post qualification', ''),
(13, '0000-00-00', 'acceptance2', 'acceptancedir', 'uploads/acceptancedir,docx'),
(17, '0000-00-00', 'acceptance3', 'acceptance directive3', 'uploads/acceptance directive3.docx'),
(18, '2012-09-12', 'acceptance3', 'acceptance directive3', ''),
(19, '2012-09-12', 'Pretest', 'Pretest1', ''),
(20, '0000-00-00', 'postqual', 'postqual directive', ''),
(21, '2012-09-12', 'acceptance3', 'acceptance directive', ''),
(22, '0000-00-00', 'DirectiveType1', 'post qualification', 'uploads/post qualification.docx'),
(23, '2012-11-12', 'DirectiveType1', 'Directive1', ''),
(24, '2012-12-12', 'acceptance', 'Directive1', ''),
(25, '2012-12-12', 'acceptance', 'Directive1', ''),
(26, '2012-09-12', 'acceptance', 'Pretest1', ''),
(27, '2012-12-16', 'Pretest', 'Pretest sample document', ''),
(28, '2012-09-12', 'acceptance', 'Pretest1', ''),
(29, '2012-09-12', 'acceptance', 'Directive1', ''),
(30, '2012-09-12', 'DirectiveType1', 'post qualification', ''),
(31, '2012-12-12', 'acceptance2', 'Pretest1', ''),
(32, '0000-00-00', 'Acceptance', 'new', 'uploads/new.docx'),
(33, '0000-00-00', 'Acceptance', 'new1', 'uploads/new1.docx'),
(34, '0000-00-00', 'Acceptance', 'Sample', 'uploads/Sample.docx');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_rank` varchar(45) NOT NULL,
  `emp_type` varchar(45) NOT NULL,
  `emp_fname` varchar(45) NOT NULL,
  `emp_lname` varchar(45) NOT NULL,
  `emp_division` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `implementation_plan`
--

CREATE TABLE `implementation_plan` (
  `id` int(11) NOT NULL,
  `implan_date` date NOT NULL,
  `implan_name` varchar(100) NOT NULL,
  `implan_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `implementation_plan`
--

INSERT INTO `implementation_plan` (`id`, `implan_date`, `implan_name`, `implan_file`) VALUES
(1, '2012-12-12', 'implan1', '0'),
(2, '2012-12-12', 'implan2', ''),
(3, '2012-12-12', 'implan2', ''),
(4, '0000-00-00', 'implan2', 'uploads/implan2.docx'),
(5, '2012-12-12', 'implan3', ''),
(6, '0000-00-00', 'implan3', 'uploads/implan3.docx');

-- --------------------------------------------------------

--
-- Table structure for table `item_specification`
--

CREATE TABLE `item_specification` (
  `id` int(11) NOT NULL,
  `itemspec_date` date NOT NULL,
  `itemspec_name` varchar(100) NOT NULL,
  `itemspec_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_specification`
--

INSERT INTO `item_specification` (`id`, `itemspec_date`, `itemspec_name`, `itemspec_file`) VALUES
(1, '2012-12-12', 'itemspecification1', ''),
(2, '2012-12-12', 'newItemSpec', ''),
(3, '2012-12-12', 'itemspec2', ''),
(4, '0000-00-00', 'itemspec2', 'uploads/itemspec2.docx'),
(5, '0000-00-00', 'itemspecnew', 'uploads/itemspecnew.docx');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1470902919),
('m130524_201442_init', 1470902926);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `result_date` date NOT NULL,
  `result_item` varchar(45) NOT NULL,
  `result_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `result_date`, `result_item`, `result_file`) VALUES
(1, '2012-12-12', 'result1', ''),
(2, '2012-12-12', 'ResultItemnew', ''),
(3, '0000-00-00', 'ResultItemnew', 'uploads/ResultItemnew.docx'),
(4, '0000-00-00', 'ResultItemnewest', 'uploads/ResultItemnewest.docx');

-- --------------------------------------------------------

--
-- Table structure for table `task_organization`
--

CREATE TABLE `task_organization` (
  `id` int(11) NOT NULL,
  `taskorg_date` date NOT NULL,
  `taskorg_name` varchar(100) NOT NULL,
  `taskorg_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_organization`
--

INSERT INTO `task_organization` (`id`, `taskorg_date`, `taskorg_name`, `taskorg_file`) VALUES
(1, '2012-12-12', 'taskorg1', ''),
(2, '0000-00-00', 'taskorgnew', 'uploads/taskorgnew.docx'),
(3, '0000-00-00', 'taskorgnewest', 'uploads/taskorgnewest.docx');

-- --------------------------------------------------------

--
-- Table structure for table `test_document`
--

CREATE TABLE `test_document` (
  `id` int(11) NOT NULL,
  `test_date` date NOT NULL,
  `test_type` varchar(45) NOT NULL,
  `test_schedule` date NOT NULL,
  `test_name` varchar(45) NOT NULL,
  `test_worksheet_id` int(11) NOT NULL,
  `task_organization_id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `implementation_plan_id` int(11) NOT NULL,
  `item_specification_id` int(11) NOT NULL,
  `directive_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_document`
--

INSERT INTO `test_document` (`id`, `test_date`, `test_type`, `test_schedule`, `test_name`, `test_worksheet_id`, `task_organization_id`, `result_id`, `implementation_plan_id`, `item_specification_id`, `directive_id`) VALUES
(1, '0000-00-00', 'Acceptance', '0000-00-00', 'New Test', 1, 1, 1, 3, 1, 11),
(2, '2012-12-12', 'Acceptance', '2012-12-12', 'New Test1', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_worksheet`
--

CREATE TABLE `test_worksheet` (
  `id` int(11) NOT NULL,
  `work_item` varchar(46) NOT NULL,
  `work_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_worksheet`
--

INSERT INTO `test_worksheet` (`id`, `work_item`, `work_file`) VALUES
(1, 'boots', ''),
(2, 'TestWorksheetnew', 'uploads/TestWorksheetnew.docx'),
(3, 'TestWorksheetnewest', 'uploads/TestWorksheetnewest.docx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ebcaranto', 'YGesfi39Sth741fU_xTwT3zd9BnNganm', '$2y$13$s.cnfXXfBwd14h9xR.2oDe7KSMx3JZIVkVEYCm09BqNyNYtQgj3mq', NULL, 'ebcaranto@gmail.com', 10, 1471020871, 1471020871),
(2, 'newuser', 'LdnqkbIY9RzL6_ZWWH9_djGVicZt7Pul', '$2y$13$p.kcVmaptRgvhr3wc5O./OSA6i2RnSGQvMzKKLLCpdh6fsv4fmYoe', NULL, 'newuser@gmail.com', 10, 1471660708, 1471660708),
(3, 'admins', '4ToEdf7TJzOWSXhJnGZwxHXbLRBLkTAw', '$2y$13$hyg/l1Xi5/ncRtiF8hF8Leahtv6danrC/lgcK2WPW2FOi5tDUsgOy', NULL, 'admin@gmail.com', 10, 1471835530, 1471835530),
(4, 'carlos', 'f5bXn6sm3rH4QyHgNljgjtXc1NzGyF4Z', '$2y$13$9GNU..hxTZwJhcEPNhkSVu.4HcYTdqG.VZefl0k/8J2.lYWKW/gZK', NULL, 'carlos@gmail.com', 10, 1471836055, 1471836055),
(5, 'qad', '7pDX5EKlAcxjlrA45l6ja6nDJSu1TCM4', '$2y$13$aitVGeFDqj3Sn8GdjDKm0uiwTVzwQj8go90HzZqrh4GjjB7jaq/N6', NULL, 'qad@gmail.com', 10, 1477232750, 1477232750),
(6, 'director', 'Na2FwSmDIR_ZRYmaYrCTnO7XnXbavADK', '$2y$13$H/jJIJedFURQ6YrP5O/7ouWU.gFAaXlLgxiLPzi8aYzsQzjnYinu.', NULL, 'director@gmail.com', 10, 1477321030, 1477321030),
(7, 'tester', 'wWA4Sbl6DYhM02ajY1tf_3nHuEiyvGEI', '$2y$13$CJOFs..KwMKbEO52XmzAju4yorU/sYCj5pmpMcN.GcyJIvVtXd3T.', NULL, 'tester@gmail.com', 10, 1477322778, 1477322778);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

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
-- Indexes for table `event`
--
ALTER TABLE `event`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `implementation_plan`
--
ALTER TABLE `implementation_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `item_specification`
--
ALTER TABLE `item_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `task_organization`
--
ALTER TABLE `task_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test_document`
--
ALTER TABLE `test_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test_worksheet`
--
ALTER TABLE `test_worksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
