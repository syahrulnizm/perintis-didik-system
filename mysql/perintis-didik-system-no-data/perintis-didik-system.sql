-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 06:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perintis-didik-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `userID` varchar(15) NOT NULL,
  `adminRoles` varchar(45) NOT NULL,
  `officeNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educationlevel`
--

CREATE TABLE `educationlevel` (
  `eduID` varchar(10) NOT NULL,
  `eduName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageID` varchar(10) NOT NULL,
  `packageName` varchar(100) NOT NULL,
  `packageQuantity` varchar(20) NOT NULL,
  `packagePrice` varchar(20) NOT NULL,
  `eduID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` varchar(15) NOT NULL,
  `paymentStatus` varchar(10) NOT NULL,
  `paymentDate` date NOT NULL,
  `paymentTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `paymentPrice` varchar(20) NOT NULL,
  `paymentAmount` varchar(20) NOT NULL,
  `subscribeID` varchar(10) NOT NULL,
  `packageID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userID` varchar(15) NOT NULL,
  `guardianName` varchar(100) NOT NULL,
  `studentAddress` varchar(200) NOT NULL,
  `guardianNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectID` varchar(10) NOT NULL,
  `subjectName` varchar(45) NOT NULL,
  `time` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `tutorID` varchar(15) NOT NULL,
  `eduID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `subscribeID` varchar(10) NOT NULL,
  `subscribeDate` date NOT NULL,
  `subscriptionStatus` varchar(10) NOT NULL,
  `isPaid` varchar(10) NOT NULL,
  `studentID` varchar(15) NOT NULL,
  `adminID` varchar(15) NOT NULL,
  `packageID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribesubject`
--

CREATE TABLE `subscribesubject` (
  `subscribeID` varchar(10) NOT NULL,
  `subjectID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `userID` varchar(15) NOT NULL,
  `tutorName` varchar(100) NOT NULL,
  `educationLevel` varchar(45) NOT NULL,
  `workingExperience` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(15) NOT NULL,
  `userPass` varchar(45) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userNumber` varchar(15) NOT NULL,
  `userEmail` varchar(225) NOT NULL,
  `userCreateDate` date NOT NULL,
  `userStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `educationlevel`
--
ALTER TABLE `educationlevel`
  ADD PRIMARY KEY (`eduID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageID`),
  ADD KEY `package_ibfk_1` (`eduID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `payment_ibfk_1` (`subscribeID`),
  ADD KEY `payment_ibfk_2` (`packageID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectID`),
  ADD KEY `subject_ibfk_1` (`tutorID`),
  ADD KEY `subject_ibfk_2` (`eduID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`subscribeID`),
  ADD KEY `subscribe_ibfk_1` (`adminID`),
  ADD KEY `subscribe_ibfk_2` (`packageID`),
  ADD KEY `subscribe_ibfk_3` (`studentID`);

--
-- Indexes for table `subscribesubject`
--
ALTER TABLE `subscribesubject`
  ADD PRIMARY KEY (`subscribeID`,`subjectID`),
  ADD KEY `subscribesubject_ibfk_3` (`subjectID`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`eduID`) REFERENCES `educationlevel` (`eduID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`subscribeID`) REFERENCES `subscribe` (`subscribeID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`packageID`) REFERENCES `package` (`packageID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`tutorID`) REFERENCES `tutor` (`userID`),
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`eduID`) REFERENCES `educationlevel` (`eduID`);

--
-- Constraints for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD CONSTRAINT `subscribe_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `administrator` (`userID`),
  ADD CONSTRAINT `subscribe_ibfk_2` FOREIGN KEY (`packageID`) REFERENCES `package` (`packageID`),
  ADD CONSTRAINT `subscribe_ibfk_3` FOREIGN KEY (`studentID`) REFERENCES `student` (`userID`);

--
-- Constraints for table `subscribesubject`
--
ALTER TABLE `subscribesubject`
  ADD CONSTRAINT `subscribesubject_ibfk_2` FOREIGN KEY (`subscribeID`) REFERENCES `subscribe` (`subscribeID`),
  ADD CONSTRAINT `subscribesubject_ibfk_3` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`);

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
