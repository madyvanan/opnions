-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 12:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zencode`
--
CREATE DATABASE IF NOT EXISTS `zencode` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zencode`;

-- --------------------------------------------------------

--
-- Table structure for table `poll_qna`
--

DROP TABLE IF EXISTS `poll_qna`;
CREATE TABLE `poll_qna` (
  `PollqID` int(100) NOT NULL,
  `PollQus` varchar(255) NOT NULL,
  `PollAns_1` varchar(255) NOT NULL DEFAULT '0',
  `PollAns_2` varchar(255) NOT NULL DEFAULT '0',
  `PollAns_3` varchar(255) NOT NULL,
  `PollAns_4` varchar(255) NOT NULL,
  `Status` enum('0','1') NOT NULL DEFAULT '1',
  `CreatedOn` datetime NOT NULL,
  `UpdatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll_qna`
--

INSERT INTO `poll_qna` (`PollqID`, `PollQus`, `PollAns_1`, `PollAns_2`, `PollAns_3`, `PollAns_4`, `Status`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 'Who is the best CM in Tamil Nadu?', 'Kamarajar', 'MGR', 'Karunanithi', 'Jeyalalitha', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(2, 'Which one is related to JavaScript?', 'JQuery', 'CodeIgniter', 'Laravel', 'Yii', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(3, 'Who is the Prime Minister of India?', 'Amit Shah', 'L. K. Advani', 'Mulayam Singh Yadav', 'Narendra Modi', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(4, 'PHP is ?', 'Web Server', 'Pre Processor', 'Server-side Scripting', 'OS', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(5, 'Which one is capital of India?', 'Chennai', 'Delhi', 'Mumbai', 'Kalkata', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(6, 'Which one is NoSql?', 'MongoDB', 'MySql', 'DB2', 'Oracle ', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(7, 'Who is the First Home Minister?', 'P.Chidambaram', 'Murli Manohar Joshi', 'Morarji Desai', 'Vallabhbhai Patel', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(8, 'In which duration Dr.Rajendra Prasad acts as President?', '1884–1963', '1910–2009', '1931–2015', '1905–1992', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(9, 'Who is present finance minister of india?', 'P. Chidambaram', 'Arun Jaitley', 'Piyush Goyal', 'Manmohan Singh', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(10, 'Who is the present telecom minister of india?', 'Shri V. P. Singh', 'Shri Charan Singh', 'Manoj Sinha', 'Shri Arjun Singh', '1', '2019-04-28 14:16:25', '2019-04-28 08:46:25'),
(11, 'Which one is the national game of india?', 'Cricket', 'Hockey', 'Kabadi', 'Ball Badminton', '1', '2019-04-28 15:26:46', '2019-04-28 09:56:46'),
(12, 'How many colors in the Indian flag?', '3', '5', '4', '2', '1', '2019-04-28 15:26:46', '2019-04-28 09:56:46'),
(13, 'When madras was renamed into Tamilnadu?', '14 January 1969', '14 January 1950', '14 January 1945', '14 January 1955', '1', '2019-04-28 15:26:46', '2019-04-28 09:56:46'),
(14, 'Who is doing as Tamil nadu CM on 23 days only?', 'O.PanneerSelvam', 'Janaki Ramachandran', 'Edappadi Palaniswami', 'C.N.Annadurai', '1', '2019-04-28 15:26:46', '2019-04-28 09:56:46'),
(15, 'Which one is Capital of Tamil Nadu?', 'Chennai', 'Madurai', 'Thanjavur', 'Trichy', '1', '2019-04-28 15:26:46', '2019-04-28 09:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
  `ResultID` int(100) NOT NULL,
  `UserID` int(11) NOT NULL,
  `PollqID` int(11) NOT NULL,
  `Ans_1` enum('0','1') NOT NULL DEFAULT '0',
  `Ans_2` enum('0','1') NOT NULL DEFAULT '0',
  `Ans_3` enum('0','1') NOT NULL DEFAULT '0',
  `Ans_4` enum('0','1') NOT NULL DEFAULT '0',
  `Status` enum('0','1') NOT NULL DEFAULT '1',
  `CreatedOn` datetime NOT NULL,
  `UpdatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ResultID`, `UserID`, `PollqID`, `Ans_1`, `Ans_2`, `Ans_3`, `Ans_4`, `Status`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 1, 1, '1', '0', '0', '0', '1', '2019-04-28 12:03:19', '2019-04-28 10:03:19'),
(2, 1, 2, '1', '0', '0', '0', '1', '2019-04-28 12:03:19', '2019-04-28 10:03:19'),
(3, 1, 3, '0', '0', '0', '1', '1', '2019-04-28 12:03:19', '2019-04-28 10:03:19'),
(4, 1, 4, '0', '0', '1', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(5, 1, 5, '0', '1', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(6, 1, 6, '1', '0', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(7, 1, 7, '0', '0', '0', '1', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(8, 1, 8, '1', '0', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(9, 1, 9, '0', '1', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(10, 1, 10, '0', '0', '1', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(11, 1, 11, '0', '1', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(12, 1, 12, '0', '0', '1', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(13, 1, 13, '1', '0', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(14, 1, 14, '0', '1', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(15, 1, 15, '1', '0', '0', '0', '1', '2019-04-28 12:03:20', '2019-04-28 10:03:20'),
(16, 2, 1, '1', '0', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(17, 2, 2, '1', '0', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(18, 2, 3, '0', '1', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(19, 2, 4, '0', '0', '1', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(20, 2, 5, '0', '1', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(21, 2, 6, '1', '0', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(22, 2, 7, '0', '1', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(23, 2, 8, '1', '0', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(24, 2, 9, '0', '1', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(25, 2, 10, '0', '0', '0', '1', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(26, 2, 11, '0', '1', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(27, 2, 12, '1', '0', '0', '0', '1', '2019-04-28 12:06:54', '2019-04-28 10:06:54'),
(28, 2, 13, '1', '0', '0', '0', '1', '2019-04-28 12:06:55', '2019-04-28 10:06:55'),
(29, 2, 14, '0', '0', '0', '1', '1', '2019-04-28 12:06:55', '2019-04-28 10:06:55'),
(30, 2, 15, '1', '0', '0', '0', '1', '2019-04-28 12:06:55', '2019-04-28 10:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `IsAdmin` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1=User, 2=Admin',
  `Status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=Active, 0=InActive',
  `CreatedOn` datetime NOT NULL,
  `UpdatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `Password`, `FirstName`, `LastName`, `Address`, `IsAdmin`, `Status`, `CreatedOn`, `UpdatedOn`) VALUES
(1, 'madyvanan09@gmail.com', 'Ê—R|AÍ#qKÂ|³_', 'Mathivanan', 'Sivanantham', '13/26 RM Nagar Adambakkam', '2', '1', '2019-04-28 14:47:01', '2019-04-28 09:17:01'),
(2, 'mady@gmail.com', 'Ê—R|AÍ#qKÂ|³_', 'Vetri', 'Vel', 'No 9 7TH ST Velachery', '1', '1', '2019-04-28 14:47:01', '2019-04-28 09:17:01'),
(3, 'vanan@gmail.com', 'Ê—R|AÍ#qKÂ|³_', 'Veera', 'Vel', 'No 7 9TH ST Guindy', '1', '1', '2019-04-28 14:47:01', '2019-04-28 09:17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll_qna`
--
ALTER TABLE `poll_qna`
  ADD PRIMARY KEY (`PollqID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ResultID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll_qna`
--
ALTER TABLE `poll_qna`
  MODIFY `PollqID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `ResultID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
