-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 06:56 PM
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
  `update_by` int(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`adm_category_id`, `adm_category`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(1, 'sd', 'sad', '2016-06-06 22:59:34', 0, '2016-06-06 22:59:34'),
(2, 'dfasd', '', '2016-06-06 23:35:38', 0, '2016-06-06 23:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL,
  `updated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `updated_by`) VALUES
(2, 'India', 'test_user'),
(3, 'America', 'test_user'),
(4, 'Nepal', 'test_user'),
(5, 'fg', 'test_user');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(60) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `course-intake` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `entry_by`, `entry_date`, `update_by`, `update_date`, `course-intake`) VALUES
(1, 'sd', 'sad', '2016-06-06 22:59:34', 0, '2016-06-06 22:59:34', ''),
(2, 'dfasd', '', '2016-06-06 23:35:38', 0, '2016-06-06 23:35:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`degree_id`, `degree_name`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
(0, 'sfs', '', '2016-06-07 00:01:53', '', '0000-00-00 00:00:00'),
(0, 'ug', '', '2016-06-07 00:02:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `entry_level`
--

CREATE TABLE `entry_level` (
  `entry_level_id` int(11) NOT NULL,
  `entry_level` varchar(60) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `course-intake` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_level`
--

INSERT INTO `entry_level` (`entry_level_id`, `entry_level`, `entry_by`, `entry_date`, `update_by`, `update_date`, `course-intake`) VALUES
(1, 'sd', 'sad', '2016-06-06 22:59:34', 0, '2016-06-06 22:59:34', ''),
(2, 'dfasd', '', '2016-06-06 23:35:38', 0, '2016-06-06 23:35:38', '');

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
  `other_fee` varchar(10) NOT NULL,
  `tution_fee` varchar(10) NOT NULL,
  `fee` varchar(30) NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_details`
--

INSERT INTO `fee_details` (`roll_no`, `total_fees`, `hostel_fee`, `transport_fee`, `college_fee`, `other_fee`, `tution_fee`, `fee`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
('rfteww', '15', '1', '11', '1', '1', '1', 'svfsd', 'hi', '2016-06-06 22:16:52', '', '2016-06-06 22:32:07'),
('rfteww4', '15', '3', '2', '1', '5', '4', 'check', 'hi', '2016-06-06 22:21:10', '', '2016-06-06 22:28:32'),
('wr', '0', '', '', '', '', '', '', 'hi', '2016-06-06 22:35:31', '', '2016-06-06 22:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE `stuinfo` (
  `roll_no` varchar(30) NOT NULL,
  `title` varchar(5) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email_id` varchar(55) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `adm_category` varchar(60) NOT NULL,
  `entry_level` varchar(2) NOT NULL,
  `degree` varchar(2) NOT NULL,
  `course` varchar(60) NOT NULL,
  `section` varchar(5) NOT NULL,
  `adm_date` date NOT NULL,
  `entry_by` varchar(30) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`roll_no`, `title`, `first_name`, `middle_name`, `last_name`, `gender`, `email_id`, `mobile`, `dob`, `adm_category`, `entry_level`, `degree`, `course`, `section`, `adm_date`, `entry_by`, `entry_date`, `update_by`, `update_date`) VALUES
('', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 21:39:49', '', '2016-06-06 21:39:49'),
('12', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 22:16:52', '', '2016-06-06 22:16:52'),
('675', 'Ms.', 'Suganya', '', 'Mahendran', 'Female', 'suganya@dreamhost.in', '9876543210', '1994-02-16', 'Counselling', 'Br', 'B.', 'IT', 'D', '2016-06-06', 'hi', '2016-06-06 22:05:21', '', '2016-06-06 22:08:59'),
('cdbcsd', 'Mr.', 'sdfsfddd', 'sfs', 'sfs', 'Male', 'sfs', 'fsf', '2016-07-15', 'Counselling', '', '', 'sf', 'sf', '2016-06-13', 'hi', '2016-06-05 01:05:11', '', '2016-06-06 20:58:20'),
('chian', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 19:27:33', '', '2016-06-06 19:27:33'),
('dgdg', 'Ms.', 'sfs', 'sf', 'sf', 'Male', 'sf', 'sf', '0000-00-00', 'Merit', '', '', '', '', '0000-00-00', 'hi', '2016-06-05 01:07:43', '', '2016-06-05 01:10:48'),
('fg', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 18:50:37', '', '2016-06-06 20:35:22'),
('fghf', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 19:28:30', '', '2016-06-06 19:28:30'),
('rfteww', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 22:20:03', '', '2016-06-06 22:20:03'),
('rfteww4', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'dfasd', 'df', 'sf', 'sd', '3', '2016-06-01', 'hi', '2016-06-06 22:21:10', '', '2016-06-07 00:04:29'),
('sf', 'sf', 'sf', 'sf', 'sf', 'sf', 'sf', 'sf', '0000-00-00', 'sf', '', '', 'sf', 'sf', '0000-00-00', 'hi', '2016-06-04 23:24:27', '', '2016-06-04 23:24:27'),
('wr', 'Mr.', '', '', '', 'Male', '', '', '0000-00-00', 'Counselling', '', '', '', '', '0000-00-00', 'hi', '2016-06-06 22:35:31', '', '2016-06-06 22:35:31');

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
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `entry_level`
--
ALTER TABLE `entry_level`
  MODIFY `entry_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
