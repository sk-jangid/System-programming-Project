-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 01:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtech_web_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants_detail`
--

CREATE TABLE `applicants_detail` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `gate_score` varchar(10) NOT NULL,
  `gate_rank` varchar(20) NOT NULL,
  `key` varchar(30) NOT NULL,
  `grade_card` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants_detail`
--

INSERT INTO `applicants_detail` (`name`, `email`, `phone`, `dob`, `gender`, `department`, `gate_score`, `gate_rank`, `key`, `grade_card`) VALUES
(' ', '', '', '0000-00-00', 'Male', 'CSE', '', '', '4127785561', '0'),
('shubham jang', 'skj@gmail.com', '70231440', '2019-05-27', 'Male', 'CSE', '74', '231', '4940995906', '0'),
('shubham jangid', 'skj@gmail.com', '7023144009', '2019-05-27', 'Male', 'CSE', '741', '231', '8910542746', '0');

-- --------------------------------------------------------

--
-- Table structure for table `course1`
--

CREATE TABLE `course1` (
  `key` varchar(30) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  `week` int(11) NOT NULL,
  `assignment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course1`
--

INSERT INTO `course1` (`key`, `instructor`, `week`, `assignment`) VALUES
('5566630595', '', 1, 'Material on Assembeler'),
('6747255683', '', 2, 'Assinment 2 on Assembeler'),
('8474882140', '', 1, 'Assignment one on Assembler');

-- --------------------------------------------------------

--
-- Table structure for table `course2`
--

CREATE TABLE `course2` (
  `key` varchar(30) NOT NULL,
  `week` int(11) NOT NULL,
  `assignment` varchar(30) NOT NULL,
  `instructor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course3`
--

CREATE TABLE `course3` (
  `key` varchar(30) NOT NULL,
  `week` varchar(10) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course3`
--

INSERT INTO `course3` (`key`, `week`, `assignment`, `instructor`) VALUES
('1539621380', '2', 'new on assembeler', '');

-- --------------------------------------------------------

--
-- Table structure for table `news_section`
--

CREATE TABLE `news_section` (
  `news` varchar(30) NOT NULL,
  `department` varchar(10) NOT NULL,
  `key` varchar(20) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Notices`
--

CREATE TABLE `Notices` (
  `key` varchar(20) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Notices`
--

INSERT INTO `Notices` (`key`, `notice`, `from`, `to`, `date`) VALUES
('0160638729', 'Assignment one has been uploaded', 'course1', 'student', '2019-05-02 05:04:48'),
('0592454260', 'You should be present at your venue.', 'course1', 'student', '2019-05-02 05:06:07'),
('4178512', 'Class Time table should be ready by today.', 'staff', 'course1', '2019-05-02 05:03:41'),
('417852', 'Class Time table should be ready by tommorw.', 'staff', 'course1', '2019-05-02 05:03:27'),
('74122589', 'You all should take your grade cards', 'staff', 'student', '2019-05-02 05:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `key` varchar(30) NOT NULL,
  `selection` varchar(30) NOT NULL,
  `registration` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`key`, `selection`, `registration`) VALUES
('1', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `key` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`key`, `name`, `gender`, `dob`, `email`, `phone`, `address`, `department`) VALUES
('1741258968', 'shubham kumar', 'Male', '2019-05-09', 'shubhamjdh2017@gmail.com', '7845963210', 'bharatpur,nadbai', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `Users_detail`
--

CREATE TABLE `Users_detail` (
  `username` varchar(10) NOT NULL,
  `passowrd` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users_detail`
--

INSERT INTO `Users_detail` (`username`, `passowrd`, `designation`, `name`, `course`) VALUES
('faculty1', 'skj', 'Faculty', 'Instructor 1', 'course1'),
('faculty2', 'skj', 'Faculty', 'Instructor 2', 'course2'),
('faculty3', 'skj', 'Faculty', 'Instructor 3', 'course3'),
('skj', 'skj', 'Student', 'Shubham Jangid', ''),
('user1', 'skj', 'Student', 'Shubham kumar', ''),
('user2', 'skj', 'Student', 'Shubham kumar jangid', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants_detail`
--
ALTER TABLE `applicants_detail`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `course1`
--
ALTER TABLE `course1`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `course2`
--
ALTER TABLE `course2`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `course3`
--
ALTER TABLE `course3`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `news_section`
--
ALTER TABLE `news_section`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `Notices`
--
ALTER TABLE `Notices`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `Users_detail`
--
ALTER TABLE `Users_detail`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
