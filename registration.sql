-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 03:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `logID` int(11) UNSIGNED NOT NULL,
  `logDate` datetime NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`logID`, `logDate`, `fname`, `lname`, `contact`, `email`, `uname`, `pass`) VALUES
(1, '2023-01-21 19:54:18', 'wer', 'tyu', 9123456789, 'gf@gmail.com', 'gio', 'passw'),
(2, '2023-01-21 20:27:19', 'ghgh', 'hjhj', 9876543216, 'gt', 'hjhk', '45'),
(3, '2023-01-24 01:08:18', 'Geoffrey', 'Rendon', 9186332659, 'rendon@gmail.com', 'geoff', '202cb962ac59075b964b07152d234b70'),
(4, '2023-01-24 01:15:10', 'Gerald', 'Rendon', 1234, 're@gmail.com', 'rald', '7815696ecbf1c96e6894b779456d330e'),
(5, '2023-01-24 22:27:03', '1st', 'try', 123, 'asd', '1st', '080f651e3fcca17df3a47c2cecfcb880'),
(6, '2023-01-24 22:36:40', '2nd', 'try', 0, 'as', '2ndd', 'dbdf75bcb9d7128e418cecdecc4bc2dc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`logID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `logID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
