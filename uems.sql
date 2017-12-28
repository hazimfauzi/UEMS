-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 03:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uems`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `comment` longtext NOT NULL,
  `commentTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `createdBy`, `userId`, `comment`, `commentTime`) VALUES
(34, '950227115961', '71', 'Hai', '2016-12-07 14:27:00'),
(35, '950227115961', 'A001', 'awak sape', '2016-12-07 14:28:00'),
(36, '950227115961', 'A001', 'Test', '2016-12-07 15:23:00'),
(37, '950227115961', 'A001', 'test', '2016-12-07 17:55:00'),
(38, '950227115961', 'A001', 'rate x jadi lgi', '2016-12-07 20:15:00'),
(39, '950227115961', 'A001', 'rate dh jadi haha', '2016-12-07 21:02:00'),
(40, '950227115961', 'A001', 'test', '2016-12-09 16:51:00'),
(41, '950227115961', 'A001', 'your event awesome', '2016-12-09 16:52:00'),
(42, '950227115962', 'A001', 'Please create an event', '2016-12-09 17:06:00'),
(43, 'A001', 'A001', 'halo', '2016-12-14 01:18:00'),
(44, 'A001', 'A001', 'test', '2016-12-14 01:20:00'),
(45, 'A001', 'A001', 'tet', '2016-12-14 01:22:00'),
(46, 'A001', 'A001', 'ermm', '2016-12-14 01:22:00'),
(47, 'A001', 'A001', 'ermm', '2016-12-14 01:23:00'),
(48, 'A001', 'A001', 'halo', '2016-12-14 01:23:00'),
(49, 'A002', 'A001', 'test', '2016-12-14 01:43:00'),
(50, 'A002', 'A001', 'test', '2016-12-14 01:43:00'),
(51, 'A002', 'A001', 'hai', '2017-04-25 20:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventId` int(20) NOT NULL,
  `eventTitle` varchar(50) NOT NULL,
  `eventCategory` varchar(20) NOT NULL,
  `eventLocation` varchar(50) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `maxParticipant` varchar(20) NOT NULL,
  `totalParticipant` varchar(10) NOT NULL,
  `eventBanner` varchar(20) NOT NULL,
  `eventDescription` longtext NOT NULL,
  `eventStatus` varchar(20) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `validateBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `eventTitle`, `eventCategory`, `eventLocation`, `startTime`, `endTime`, `startDate`, `endDate`, `maxParticipant`, `totalParticipant`, `eventBanner`, `eventDescription`, `eventStatus`, `createdBy`, `validateBy`) VALUES
(1, 'Get Out And Play.. Everyday!', 'Student_Life', 'UTeM SPORT CENTRE', '09:00:00', '22:00:00', '2017-01-06', '2016-12-31', '100', '16', 'Test1.jpg', 'None', 'Validated', 'A001', 'A001'),
(2, 'Cyber Game', 'Contest', 'COMPUTER CENTRE, CRIM & ICNet(PKomp)', '08:00:00', '12:00:00', '2016-12-31', '2016-12-31', '100', '16', 'Banner4.jpg', 'Test', 'Validated', 'A001', 'A001'),
(3, 'Summer Festival', 'Festival', 'STUDENT CENTRE(PPP)', '00:00:00', '00:00:00', '2016-11-30', '2016-12-21', '100', '7', 'Banner5.png', 'Test', 'Validated', 'A001', 'A001'),
(4, 'Fiesta Bola Sepak Jalanan', 'Sport', 'UTeM SPORT CENTRE"', '00:00:00', '00:00:00', '2016-11-18', '2016-12-29', '100', '7', 'Banner3.jpg', 'tEST', 'Validated', '950227115961', 'A001'),
(5, 'Creepy Kentucky', 'Other', 'CENTRE FOR CO-CURRICULAR ACTIVITIES"', '00:00:00', '00:00:00', '2016-11-25', '2016-11-30', '100', '7', 'Banner2.png', 'test', 'Validated', '950227115961', 'A001'),
(9, 'Test', 'Career_Development', 'UTeM MAIN HALL', '23:59:00', '12:59:00', '2016-12-31', '2016-12-31', '1000', '', 'haha.png', 'test', 'Pending', 'A001', ''),
(10, 'Test', 'Other', 'UTeM MAIN HALL', '08:00:00', '13:00:00', '2016-12-14', '2016-12-14', '50', '16', '20160613213230_1.jpg', 'Classroom Training for Autocount Basic Module\r\nDuration :- 6 hour / Class\r\nFees :- Call 1300 800 828 for quote and more info', 'Validated', '950227115961', 'A003'),
(11, 'Test2', 'Career_Development', 'UTeM MAIN HALL', '08:00:00', '14:00:00', '2016-12-15', '2016-12-16', '10', '15', '20160703011151_1.jpg', 'This event for test only', 'Validated', '950227115961', 'A003');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rateId` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rateId`, `createdBy`, `userId`, `rate`) VALUES
(27, '950227115961', 'A001', 'Unlike'),
(28, '950227115962', 'A001', 'Like'),
(29, '950227115961', 'B031410208', 'Like'),
(30, '950227115961', 'B031410208', 'Unlike'),
(31, '950227115961', 'B031410208', 'Like'),
(32, '950227115961', 'B031410208', 'Like'),
(33, 'A001', 'A001', 'Like'),
(34, 'A002', 'A001', 'Like');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportId` int(20) NOT NULL,
  `userId` varchar(20) NOT NULL,
  `eventId` int(20) NOT NULL,
  `attendanceStatus` varchar(20) NOT NULL,
  `qrCode` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportId`, `userId`, `eventId`, `attendanceStatus`, `qrCode`) VALUES
(91, 'B031410208', 1, 'attend', '1B031410208.png'),
(92, 'B031410208', 2, 'absent', '2B031410208.png'),
(93, '950227115961', 10, 'absent', '10950227115961.png'),
(94, 'A001', 2, 'absent', '2A001.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `icNum` varchar(12) NOT NULL,
  `password` longtext NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `yearLevel` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `icNum`, `password`, `email`, `gender`, `address`, `phoneNum`, `yearLevel`, `level`, `status`) VALUES
('9', 'MUHAMMAD HAZIM BIN MOHD FAUZI', '950227115961', '$2y$10$AeLgtgQjPyGVtKQrTm5b3.0XFrNX9DQ57j/E05ZVJ2Dl/YJAyr0Z2', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'Third Year', 'Student', 'Active'),
('950227115961', 'MUHAMMAD HAZIM BIN MOHD FAUZI [ORGANIZER]', '950227115961', '$2y$10$B3Pakt83lKGffqej/fIJteXpwA1SzRn/zD/IlSofF.iA1zN1t4GPO', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,TAMAN KENARI JAYA,', '0137664533', 'None', 'Organizer', 'Active'),
('A001', 'MUHAMMAD HAZIM BIN MOHD FAUZI', '950227115961', '$2y$10$FYEjBGVMvM1NbmqK3S79h.hm2jvRWQ6lD.YoySBXODOza8HxGQxFG', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,TAMAN KENARI JAYA, DURIAN TUNGGAL, MELAKA.', '0137664533', 'None', 'Admin', 'Active'),
('A002', 'Admin', 'None', '$2y$10$Qffp42MkTVXiPfO.zWn85OAie3xZ/OCioDqNJeT7DP385YLOg5Zh.', 'none@gmail.com', 'Male', 'None', '0123456789', 'None', 'Admin', 'Active'),
('A003', 'AHMAD SAFWAN', '951127235431', '$2y$10$5bx35BNSbNVjwMM8KG2vqek4MfxPJi0uqzEpZ1AlHSP1oQHG7v8jq', 'test@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'None', 'Admin', 'Active'),
('B031410123', 'Mohd Nasrullah Bin Mohamad', '940325115261', '$2y$10$NJVcwCCwgKTngAOQphhHyeq4US00CBtBpGami7kA89vZOS5boTfBa', 'narulsrul44@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0199562125', 'Third Year', 'Student', 'Active'),
('B031410208', 'MUHAMMAD HAZIM BIN MOHD FAUZI', '950227115961', '$2y$10$dc87KP5.He9lv8tLnspLU.cjUBEvLQX/7LBxIvS9Tmj1Lep4hiNGy', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0137664533', 'Third Year', 'Student', 'Active'),
('B031410211', 'Hazim Fauzi', '950227115961', '$2y$10$zq2/Tb4R7QowKiRTW4FJse.R.wNSWwfwTJ45b5s0X21ez6lf6ntqO', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '1234567890', 'First Year', 'Student', 'Active'),
('B031410219', 'NURZAFIRAH BINTI ZAMRI', '950328085642', '$2y$10$mf2p.HKsU4/VNdV3jDyvG.EJ8x4jit3B/aKk9aWjD/CpCghqcC/Ti', 'rizalman@msn.com', 'Male', 'utem', '0123456789', 'Second Year', 'Student', 'Active'),
('B031410298', 'MUHAMMAD HAZIM BIN MOHD FAUZI', '950227115961', '$2y$10$JxRhbe2Lu1otFtFgMWSPr.mhVXhutogPrAlc4Hug6hrDMllEZ6eWy', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'Second Year', 'Student', 'Active'),
('B031410313', 'Eizmal Razak', '950924134566', '$2y$10$5d3sW7cNTd7NXFD1UySDt.9TIhemOBmEN.TyiSS/wO4UcxcXNmKuW', 'imalrzk@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'Third Year', 'Student', 'Active'),
('B031410349', 'Afif Najmi', '951210026051', '$2y$10$cawN6X2GPmFKFoqvQUhLbOjYal15n2Cj2d8mR4HFp/PBpzqz6nGGG', 'afif.radzif77@gmail.com', 'Male', 'Durian Tunggal', '0174184281', 'Third Year', 'Student', 'Active'),
('B031520031', 'HAU TZE MIN', '951122045594', '$2y$10$1.judayK/KHtwTNew6hCk.Hm7IV3qrYeb7sBovb7ZkG940mjfa5Zi', '', 'Female', 'Duyong', '0166074526', 'Second Year', 'Student', 'Active'),
('email', 'ad', 'dad', '$2y$10$B65Ep9RkXwEcwvV4ULn0q.yXhHeojxcSfxsHhHKNV6oxpD8GyMaS6', 'hazimfauzi12@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'First Year', 'Student', 'Active'),
('email2', 'TEST', 'TEST', '$2y$10$lF8ED2AL3Tax1rDZ2GbmjOD3UpedKX9r1Y1v5Bwn/XtNg5enSbyjC', 'hazimfauzi12@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'First Year', 'Student', 'Active'),
('email3', 'TEST', 'TEST', '$2y$10$i/svlLZXa5xkj5mecnzlkecG0ZBlsIM8cuz26IuAAixXSdb5AIo1S', 'kucinggilobabi@gmail', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'Second Year', 'Student', 'Active'),
('password', 'password', 'password', '$2y$10$JIOGVCs9T7EF3e1g5kYmSe1zYM3a0JsH93xVLBSONP869gAAXevQm', 'hazimfauzi95@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'Second Year', 'Student', 'Active'),
('teA', 'Hazim Fauzi', 'TEST', '$2y$10$xjj1Bfvtzw7Cwt24tHLi..F1137EyM9q0YJl1V9/PvZHmTAr5T8SK', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '0123456789', 'First Year', 'Student', 'Active'),
('teAo', 'Hazim Fauzi', 'TEST', '$2y$10$x8eXz5gX3HoSrWGgrGM0Ru/rEa9jjr7t.x02Q9erQ/iw6iNL7fpse', 'hazimfauzi124@gmail.com', 'Male', 'DT2916, JALAN KENARI JAYA 2,\r\nTAMAN KENARI JAYA,', '1234567890', 'First Year', 'Student', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateId`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
