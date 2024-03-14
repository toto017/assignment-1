-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 04:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `No` int(11) NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `day` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `term` varchar(1) NOT NULL,
  `user_id` varchar(40) CHARACTER SET utf8 NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`No`, `stadium_id`, `day`, `time`, `term`, `user_id`, `cost`) VALUES
(43, 1, '2024-03-13', '10:00 - 11:00', '1', 'poon', 250);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `stadium_id` int(11) NOT NULL,
  `day` date NOT NULL,
  `time1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time4` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time5` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time6` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time7` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time8` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`stadium_id`, `day`, `time1`, `time2`, `time3`, `time4`, `time5`, `time6`, `time7`, `time8`) VALUES
(1, '2024-03-13', 'จองแล้ว', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-14', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-15', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-16', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-17', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-18', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-19', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(1, '2024-03-20', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-13', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-14', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-15', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-16', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-17', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-18', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-19', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(2, '2024-03-20', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-13', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-14', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-15', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-16', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-17', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-18', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-19', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง'),
(3, '2024-03-20', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `stadium`
--

CREATE TABLE `stadium` (
  `stadium_id` int(11) NOT NULL,
  `stadium_name` varchar(40) NOT NULL,
  `stadium_pic` varchar(40) DEFAULT NULL,
  `stadium_detail` text NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stadium`
--

INSERT INTO `stadium` (`stadium_id`, `stadium_name`, `stadium_pic`, `stadium_detail`, `cost`) VALUES
(1, 'สนามไหนนิ', 's1.png', 'สนามนี้มีขนาดหยั่ยโตโอฬาร ขนาดประมาณต้นตาลหน้าบ้านคุณ', 250),
(2, 'สนามไหนนั่น', 's2.png', 'สนามนี้มีขนาดหยั่ยโตโอฬาร ขนาดประมาณต้นตาลหน้าบ้านคุณ55+', 180),
(3, 'สนามไหนหว่า', 's3.png', 'สนามนี้มีขนาดหยั่ยโตโอฬาร ขนาดประมาณต้นตาลหน้าบ้านคุณ5555+', 180);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_password` text NOT NULL,
  `user_telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_telephone`) VALUES
('Pin', 'เทพ', '8af95a9ca4f3f7b8589c3f2fc390d258', 'ๅ/-'),
('poon', 'ปูน', '5f4dcc3b5aa765d61d8327deb882cf99', '0982923584'),
('pp', 'pp', '202cb962ac59075b964b07152d234b70', '123'),
('Pto', 'พี่โต้', 'c4ca4238a0b923820dcc509a6f75849b', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`stadium_id`,`day`);

--
-- Indexes for table `stadium`
--
ALTER TABLE `stadium`
  ADD PRIMARY KEY (`stadium_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
