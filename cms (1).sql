-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 08:29 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `adm_category_id` int(11) NOT NULL,
  `adm_category` varchar(60) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`adm_category_id`, `adm_category`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(1, 'sd', 'sad', '2016-06-06 22:59:34', '0', '2016-06-06 22:59:34'),
(2, 'dfasd', '', '2016-06-06 23:35:38', '0', '2016-06-06 23:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `bank_alias` varchar(30) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(2, 'India', '', '2016-06-07 17:43:17', 'test_user', '2016-06-07 17:43:17'),
(3, 'America', '', '2016-06-07 17:43:17', 'test_user', '2016-06-07 17:43:17'),
(4, 'Nepal', '', '2016-06-07 17:43:17', 'test_user', '2016-06-07 17:43:17'),
(5, 'fg', '', '2016-06-07 17:43:17', 'test_user', '2016-06-07 17:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `course_alias` varchar(10) NOT NULL,
  `course_intake` varchar(20) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_alias`, `course_intake`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(1, 'sd', '', '', 'sad', '2016-06-06 22:59:34', '0', '2016-06-06 22:59:34'),
(2, 'dfasd', '', '', '', '2016-06-06 23:35:38', '0', '2016-06-06 23:35:38'),
(3, 'CSE', '', '65', 'test_user', '2016-06-07 17:40:22', '0', '2016-06-07 17:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `degree_alias` varchar(7) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entry_level`
--

CREATE TABLE `entry_level` (
  `entry_level_id` int(11) NOT NULL,
  `entry_level` varchar(60) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_level`
--

INSERT INTO `entry_level` (`entry_level_id`, `entry_level`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(1, 'sd', 'sad', '2016-06-06 22:59:34', '0', '2016-06-06 22:59:34'),
(2, 'dfasd', '', '2016-06-06 23:35:38', '0', '2016-06-06 23:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `fee_details`
--

CREATE TABLE `fee_details` (
  `roll_no` varchar(30) NOT NULL,
  `total_fees` varchar(12) NOT NULL,
  `hostel_fee` varchar(10) NOT NULL,
  `transport_fee` varchar(10) NOT NULL,
  `college_fee` varchar(10) NOT NULL,
  `tution_fee` varchar(10) NOT NULL,
  `fee` varchar(30) NOT NULL,
  `other_fee` varchar(10) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_details`
--

INSERT INTO `fee_details` (`roll_no`, `total_fees`, `hostel_fee`, `transport_fee`, `college_fee`, `tution_fee`, `fee`, `other_fee`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
('rfteww', '15', '1', '11', '1', '1', 'svfsd', '1', 'hi', '2016-06-06 22:16:52', '', '2016-06-06 22:32:07'),
('rfteww4', '15', '3', '2', '1', '4', 'check', '5', 'hi', '2016-06-06 22:21:10', '', '2016-06-06 22:28:32'),
('wr', '0', '', '', '', '', '', '', 'hi', '2016-06-06 22:35:31', '', '2016-06-06 22:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `nationalities`
--

CREATE TABLE `nationalities` (
  `nationality_id` int(11) NOT NULL,
  `nationality_name` varchar(30) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE `stuinfo` (
  `roll_no` varchar(30) NOT NULL,
  `adm_category` varchar(60) NOT NULL,
  `adm_date` date NOT NULL,
  `title` varchar(5) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `entry_level` varchar(2) NOT NULL,
  `degree` varchar(2) NOT NULL,
  `course` varchar(60) NOT NULL,
  `section` varchar(5) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`roll_no`, `adm_category`, `adm_date`, `title`, `first_name`, `middle_name`, `last_name`, `dob`, `gender`, `mobile`, `email_id`, `entry_level`, `degree`, `course`, `section`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
('', 'Counselling', '0000-00-00', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', 'hi', '2016-06-06 21:39:49', '', '2016-06-06 21:39:49'),
('12', 'Counselling', '0000-00-00', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', 'hi', '2016-06-06 22:16:52', '', '2016-06-06 22:16:52'),
('675', 'Counselling', '2016-06-06', 'Ms.', 'Suganya', '', 'Mahendran', '1994-02-16', 'Female', '9876543210', 'suganya@dreamhost.in', 'Br', 'B.', 'IT', 'D', 'hi', '2016-06-06 22:05:21', '', '2016-06-06 22:08:59'),
('cdbcsd', 'Counselling', '2016-06-13', 'Mr.', 'sdfsfddd', 'sfs', 'sfs', '2016-07-15', 'Male', 'fsf', 'sfs', '', '', 'sf', 'sf', 'hi', '2016-06-05 01:05:11', '', '2016-06-06 20:58:20'),
('chian', 'Counselling', '0000-00-00', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', 'hi', '2016-06-06 19:27:33', '', '2016-06-06 19:27:33'),
('dgdg', 'Merit', '0000-00-00', 'Ms.', 'sfs', 'sf', 'sf', '0000-00-00', 'Male', 'sf', 'sf', '', '', '', '', 'hi', '2016-06-05 01:07:43', '', '2016-06-05 01:10:48'),
('fg', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'hi', '2016-06-06 18:50:37', '', '2016-06-06 20:35:22'),
('fghf', 'Counselling', '0000-00-00', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', 'hi', '2016-06-06 19:28:30', '', '2016-06-06 19:28:30'),
('rfteww4', 'dfasd', '2016-06-01', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', 'df', 'sf', 'sd', '3', 'hi', '2016-06-06 22:21:10', '', '2016-06-07 00:04:29'),
('sf', 'sf', '0000-00-00', 'sf', 'sf', 'sf', 'sf', '0000-00-00', 'sf', 'sf', 'sf', '', '', 'sf', 'sf', 'hi', '2016-06-04 23:24:27', '', '2016-06-04 23:24:27'),
('wr', 'Counselling', '0000-00-00', 'Mr.', '', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', 'hi', '2016-06-06 22:35:31', '', '2016-06-06 22:35:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`adm_category_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `entry_level`
--
ALTER TABLE `entry_level`
  ADD PRIMARY KEY (`entry_level_id`);

--
-- Indexes for table `fee_details`
--
ALTER TABLE `fee_details`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `nationalities`
--
ALTER TABLE `nationalities`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `stuinfo`
--
ALTER TABLE `stuinfo`
  ADD PRIMARY KEY (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `adm_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entry_level`
--
ALTER TABLE `entry_level`
  MODIFY `entry_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nationalities`
--
ALTER TABLE `nationalities`
  MODIFY `nationality_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
