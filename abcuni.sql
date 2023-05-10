-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 10:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcuni`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_course`
--

CREATE TABLE `all_course` (
  `id` int(11) NOT NULL,
  `course` varchar(60) NOT NULL,
  `dept` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_course`
--

INSERT INTO `all_course` (`id`, `course`, `dept`) VALUES
(1, 'SPL', 'CSE'),
(3, 'Data Structure', 'CSE'),
(5, 'Discrete Mathematics', 'CSE'),
(6, 'Object Oriented Programming', 'CSE'),
(7, 'Physics', 'CSE'),
(11, 'Integral Calculus & Differential Equation', 'CSE'),
(12, 'Algorithm', 'CSE'),
(13, 'Differential and Integral Calculus', 'EEE'),
(14, 'Vector Analysis', 'EEE'),
(15, 'Electrical Circuit Laboratory', 'EEE'),
(16, 'Chemistry', 'EEE'),
(17, 'Linear Algebra', 'EEE'),
(18, '19th Century Novels and Prose Writings', 'ENGLISH'),
(19, 'English for Business Communication', 'ENGLISH'),
(20, 'Studies in English History', 'ENGLISH'),
(21, 'Old English Poetry in Translation', 'ENGLISH'),
(22, 'Development of English Language', 'ENGLISH'),
(23, 'Introduction to Poetry and Rhetoric', 'ENGLISH'),
(24, 'Database Management Systems', 'IT'),
(25, 'Object-Oriented Analysis and Design\r\n', 'IT'),
(26, 'Artificial Intelligence and Applications Analysis', 'IT'),
(27, 'Software Engineering', 'IT'),
(28, 'Computer Communication Networks', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_course`
--
ALTER TABLE `all_course`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_course`
--
ALTER TABLE `all_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
