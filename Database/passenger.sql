-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 08:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passenger`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `amount_set` ()  NO SQL
BEGIN
UPDATE register SET amount='800' WHERE offer_applicable='NA' and offer_type='NA';
UPDATE register SET amount='650' WHERE offer_type='STUDENT_OFFER' and offer_applicable='A';
UPDATE register SET amount='550' WHERE offer_type='AGE_OFFER' and offer_applicable='A';
UPDATE register SET amount='650' WHERE offer_type='GOVERNMENT_SERVENT' and offer_applicable='A';
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `offers` ()  BEGIN
UPDATE register SET offer_applicable='A',offer_type='AGE_OFFER' WHERE age>=60;
UPDATE register SET offer_applicable='A',offer_type='STUDENT_OFFER' WHERE designation='student';
UPDATE register SET offer_applicable='A',offer_type='GOVERNMENT_SERVENT' WHERE designation='governmnt_job';
UPDATE register SET offer_applicable='NA',offer_type='NA' WHERE designation='other' and age<60;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `p_id` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`p_id`, `email`, `msg`) VALUES
(73, 'mrunalkotkar25@gmail.com', 'Service is very good'),
(73, 'mrunalkotkar25@gmail.com', 'Service is very good'),
(72, 'tusharkotkar2002@gmail.com', 'Good'),
(73, 'mrunalkotkar25@gmail.com', 'Service is very good');

-- --------------------------------------------------------

--
-- Table structure for table `pass_information`
--

CREATE TABLE `pass_information` (
  `passenger_Id` int(30) NOT NULL,
  `pass_Id` int(100) NOT NULL,
  `bus_no` varchar(80) NOT NULL,
  `timespan` varchar(70) NOT NULL,
  `bus_type` varchar(70) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_information`
--

INSERT INTO `pass_information` (`passenger_Id`, `pass_Id`, `bus_no`, `timespan`, `bus_type`, `start_date`, `end_date`, `amount`) VALUES
(11, 2, 'bus1', 'monthly', 'nonac', '2019-10-03', '2019-11-05', 0),
(72, 7, 'allroute', 'monthly', 'acbus', '2019-10-03', '2019-11-22', 0),
(73, 46, 'bus1', 'monthly', 'acbus', '2019-10-01', '2019-11-09', 0),
(72, 58, '345M', 'monthly', 'acbus', '2019-10-26', '2019-11-22', 0),
(72, 59, '345M', 'monthly', 'acbus', '2019-10-26', '2019-11-22', 0),
(72, 60, '345M', 'monthly', 'acbus', '2019-10-17', '2019-11-16', 0),
(72, 63, '345M', 'monthly', 'acbus', '0000-00-00', '0000-00-00', 0),
(72, 64, '303B', 'monthly', 'acbus', '2019-10-17', '2019-11-14', 0),
(72, 65, '345M', 'monthly', 'acbus', '2019-10-01', '2019-11-01', 0),
(84, 66, '345M', 'monthly', 'acbus', '2019-10-01', '2019-11-01', 0),
(85, 67, '345M', 'monthly', 'acbus', '2012-10-17', '2019-10-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pno` bigint(10) NOT NULL,
  `age` bigint(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `offer_applicable` varchar(100) NOT NULL,
  `offer_type` char(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `fname`, `mname`, `lname`, `password`, `username`, `pno`, `age`, `designation`, `gender`, `offer_applicable`, `offer_type`, `amount`) VALUES
(11, 'rakshit', '', 'sathe', '$2y$12$Pp304y8SGocurCZD7QkvpuzbLt90BDvdlhIlmAJqVK1cLfTWQIBpi', 'rakshit@gmail.com', 9076543423, 43, 'bussinessman', 'male', '', '', 0),
(33, 'Vaishnavi', '', 'sharma', '$2y$12$pM41m0lEHB.9y.BSbsTmWe0rF1UuDE4jS5mIJV/bYKpuN1UYYrOFi', 'sharma@gmail.com', 8765456734, 23, 'student', 'female', 'A', 'STUDENT_OFFER', 650),
(62, 'mini', '', 'chawla', '$2y$12$0tMLLZZ1GSkLsqcUqjbXle14HY9AodnCXVX4owXVtgYC.VvQW5zUS', 'mrunalkotkar25@gmail.com', 9075610282, 76, 'student', 'female', 'A', 'STUDENT_OFFER', 650),
(68, 'Mayuri', 'Bhalchandra', 'Kotkar', '$2y$12$H8P8bR.sI/dL68.7rPGmCuYBoVIYLfOlG1S0cSt1FddxdsayoteoG', 'mayuri.kotkar@cumminscollege.in', 8390089206, 24, 'governmnt_job', 'female', 'A', 'GOVERNMENT_SERVENT', 650),
(72, 'karishma', '', 'harchandani', '$2y$12$Nu.ZPM0ZJAqEiq.uuEcqJ.fJDGjdPMIGdP0yapCPOXtJ3KHtU7GVS', 'harchandanikarishma1@gmail.com', 8302493435, 20, 'student', 'female', 'A', 'STUDENT_OFFER', 650),
(73, 'Mrunal', '', 'Kotkar', '$2y$12$adlWMO/a2z4Q1wT1YaKR6.Am3VyLdvT7tvV1G11kv5kM/9EAl.UZm', 'mrunalkotkar25@gmail.com', 9075610282, 20, 'student', 'female', 'A', 'STUDENT_OFFER', 650),
(75, 'Rupak', '', 'chawhan', '$2y$12$q48.8xDG4FCfyJeOUzXHWeOV2AHJEoDmGoPGULMgZlJGLt30kIEH.', 'rupak@gmail.com', 8767543232, 45, 'governmnt_job', 'male', 'A', 'GOVERNMENT_SERVENT', 650),
(76, 'vrushali', '', 'yadav', '$2y$12$X7k9SP3HaFFJNUsosE29oumhI04uVERKRVVNmLJ85AEbglLyNhjcq', 'vrushali@gmail.com', 9878677656, 70, 'other', 'female', 'A', 'AGE_OFFER', 550),
(78, 'diksha', '', 'katake', '$2y$12$0VXGd/fDdqV4sJYCdSkgfurOc8elEIDn7GM6lS4Ol0jpsxyKZKz6y', 'diksha@gmail.com', 8787654565, 30, 'other', 'female', 'NA', 'NA', 800),
(79, 'Mrunal', '', 'Kotkar', '$2y$12$UP7ci0xcqHvxq7c/KMz5SepcjbuogKGhbtPPY1kXU/Xdk264.qC3O', 'mrunalkotkar25@gmail.com', 9075610282, 32, 'student', 'female', '', '', 0),
(80, 'Mrunal', '', 'Kotkar', '$2y$12$tQUKwEyrV2ywLV7jlmAtxeDaeofMS2y/e4Bh6NOMPrWrZe7wMcG4S', 'mrunalkotkar25@gmail.com', 9075610282, 32, 'student', 'female', '', '', 0),
(81, 'Mrunal', '', 'Kotkar', '$2y$12$hl621Rcu7KHzRVbBdBkm3ev/gjWQJ7oId5QrV3b13K6gSynB5LSLK', 'mrunalkotkar25@gmail.com', 9075610282, 32, 'student', 'female', '', '', 0),
(82, 'Mrunal', '', 'Kotkar', '$2y$12$Xt3J1vY6Jh3FxuqhIZ8/Xeqqo.25bEULT33Za3zg3VKC3dedbDL.W', 'mrunalkotkar25@gmail.com', 8976564354, 20, 'student', 'female', '', '', 0),
(83, 'Mrunal', '', 'Kotkar', '$2y$12$iY/pVDOTanJiv0RyWVAMQeq840mgKF9PIcEQ2e5SlIrpYR2edYXvW', 'mrunalkotkar25@gmail.com', 8976564354, 20, 'student', 'female', '', '', 0),
(84, 'Mrunal', '', 'Kotkar', '$2y$12$ij8ATnfsIH0DO3uLwFdeJub6.A.n6HHup8JYXzJ3w/h9bx6jJuAqa', 'mrunalkotkar25@gmail.com', 9075610282, 20, 'student', 'female', '', '', 0),
(85, 'Rutuja', '', 'Chaudhari3333', '$2y$12$/QLqbUWY8J1bHAAA4EWV1evXZGOG.pQTJBnbXvo2zOpv9HQszdHOq', 'chaudhari.rutuja99@gmail.com', 8975384856, 20, 'student', 'female', '', '', 0);

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `offers` BEFORE INSERT ON `register` FOR EACH ROW BEGIN
if(new.age>=60)
THEN
SET new.offer_applicable="A" AND new.offer_type="OL_AGE_OFFER";
end if;
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pass_information`
--
ALTER TABLE `pass_information`
  ADD PRIMARY KEY (`pass_Id`),
  ADD KEY `passenger_Id` (`passenger_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pass_information`
--
ALTER TABLE `pass_information`
  MODIFY `pass_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pass_information`
--
ALTER TABLE `pass_information`
  ADD CONSTRAINT `pass_information_ibfk_1` FOREIGN KEY (`passenger_Id`) REFERENCES `register` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
