-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 10:13 AM
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

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`userID`, `adminRoles`, `officeNumber`) VALUES
('admin1', 'Super Admin', 'Office123'),
('admin2', 'Admin', 'Office456'),
('admin3', 'Assistant', 'Office789');

-- --------------------------------------------------------

--
-- Table structure for table `educationlevel`
--

CREATE TABLE `educationlevel` (
  `eduID` varchar(10) NOT NULL,
  `eduName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educationlevel`
--

INSERT INTO `educationlevel` (`eduID`, `eduName`) VALUES
('edu1', 'Primary School'),
('edu2', 'Secondary School'),
('edu3', 'College');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageID`, `packageName`, `packageQuantity`, `packagePrice`, `eduID`) VALUES
('pkg1', 'Mathematics Package', '10 sessions', '100.00', 'edu1'),
('pkg2', 'English Package', '8 sessions', '80.00', 'edu2'),
('pkg3', 'Science Package', '12 sessions', '120.00', 'edu3');

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

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `paymentStatus`, `paymentDate`, `paymentTime`, `paymentPrice`, `paymentAmount`, `subscribeID`, `packageID`) VALUES
('pay1', 'Paid', '2023-07-21', '2023-07-20 22:39:00', '100.00', '100.00', 'sub1', 'pkg1'),
('pay2', 'Pending', '2023-07-21', '2023-07-20 22:40:00', '80.00', '80.00', 'sub2', 'pkg2'),
('pay3', 'Paid', '2023-07-21', '2023-07-20 22:41:00', '120.00', '120.00', 'sub3', 'pkg3');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userID`, `guardianName`, `studentAddress`, `guardianNumber`) VALUES
('student1', 'John Doe', '123 Main St, City', 'Guardian123'),
('student2', 'Jane Smith', '456 Oak St, Town', 'Guardian456'),
('student3', 'Bob Johnson', '789 Elm St, Village', 'Guardian789');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectID` varchar(10) NOT NULL,
  `subjectName` varchar(45) NOT NULL,
  `time` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `tutorID` varchar(15) NOT NULL,
  `eduID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `subjectName`, `time`, `day`, `duration`, `tutorID`, `eduID`) VALUES
('subj1', 'Mathematics', '08:00:00', 'Monday', '1 hour', 'tutor1', 'edu1'),
('subj2', 'English', '10:00:00', 'Tuesday', '1 hour', 'tutor2', 'edu2'),
('subj3', 'Science', '14:00:00', 'Wednesday', '2 hours', 'tutor3', 'edu3');

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

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`subscribeID`, `subscribeDate`, `subscriptionStatus`, `isPaid`, `studentID`, `adminID`, `packageID`) VALUES
('sub1', '2023-07-21', 'Active', 'Yes', 'student1', 'admin1', 'pkg1'),
('sub2', '2023-07-21', 'Active', 'No', 'student2', 'admin2', 'pkg2'),
('sub3', '2023-07-21', 'Inactive', 'Yes', 'student3', 'admin3', 'pkg3');

-- --------------------------------------------------------

--
-- Table structure for table `subscribesubject`
--

CREATE TABLE `subscribesubject` (
  `subscribeID` varchar(10) NOT NULL,
  `subjectID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribesubject`
--

INSERT INTO `subscribesubject` (`subscribeID`, `subjectID`) VALUES
('sub1', 'subj1'),
('sub2', 'subj2'),
('sub3', 'subj3');

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

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`userID`, `tutorName`, `educationLevel`, `workingExperience`) VALUES
('tutor1', 'Tutor One', 'Bachelor', '3 years'),
('tutor2', 'Tutor Two', 'Master', '5 years'),
('tutor3', 'Tutor Three', 'PhD', '10 years');

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
  `userStatus` varchar(10) NOT NULL,
  `userType` enum('Student','Tutor','Admin') NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userPass`, `userName`, `userNumber`, `userEmail`, `userCreateDate`, `userStatus`, `userType`) VALUES
('admin1', 'adminpass', 'Admin One', '123456789', 'admin1@example.com', '2023-07-21', 'Active', 'Admin'),
('admin2', 'adminpass', 'Admin Two', '987654321', 'admin2@example.com', '2023-07-21', 'Active', 'Admin'),
('admin3', 'adminpass', 'Admin Three', '567891234', 'admin3@example.com', '2023-07-21', 'Inactive', 'Admin'),
('student1', 'studentpass', 'John Doe', '111222333', 'john@example.com', '2023-07-21', 'Active', 'Student'),
('student2', 'studentpass', 'Jane Smith', '444555666', 'jane@example.com', '2023-07-21', 'Active', 'Student'),
('student3', 'studentpass', 'Bob Johnson', '777888999', 'bob@example.com', '2023-07-21', 'Inactive', 'Student'),
('tutor1', 'tutorpass', 'Tutor One', '999888777', 'tutor1@example.com', '2023-07-21', 'Active', 'Tutor'),
('tutor2', 'tutorpass', 'Tutor Two', '666555444', 'tutor2@example.com', '2023-07-21', 'Active', 'Tutor'),
('tutor3', 'tutorpass', 'Tutor Three', '333222111', 'tutor3@example.com', '2023-07-21', 'Inactive', 'Tutor');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
