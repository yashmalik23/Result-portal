-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 04:26 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `Batch` varchar(10) NOT NULL,
  `Subject1` varchar(10) NOT NULL,
  `Subject2` varchar(10) NOT NULL,
  `Subject3` varchar(10) NOT NULL,
  `Subject4` varchar(10) NOT NULL,
  `Subject5` varchar(10) NOT NULL,
  `Subject6` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`Batch`, `Subject1`, `Subject2`, `Subject3`, `Subject4`, `Subject5`, `Subject6`) VALUES
('GCS14', 'AM-521', 'AM-422', 'CY-521', 'AM-525', 'CS-521', 'CS-523'),
('GCS15', 'AM-422', 'CS-521', 'CS-522', 'CS-523', 'CS-524', 'AM-421');

--
-- Triggers `batch`
--
DELIMITER $$
CREATE TRIGGER `subUpdate` BEFORE UPDATE ON `batch` FOR EACH ROW UPDATE main
SET Subject1=NEW.Subject1,Subject2 = NEW.Subject2,Subject3 = NEW.Subject3,Subject4 = NEW.Subject4,Subject5 = NEW.Subject5,Subject5 = NEW.Subject5,Subject6 = NEW.Subject6 WHERE Batch=NEW.Batch
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `Trade` varchar(5) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Class_Group` char(1) NOT NULL,
  `Reg_No` varchar(20) NOT NULL,
  `Roll_No` varchar(20) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Subject1` varchar(10) DEFAULT NULL,
  `Subject2` varchar(10) DEFAULT NULL,
  `Subject3` varchar(10) DEFAULT NULL,
  `Subject4` varchar(10) DEFAULT NULL,
  `Subject5` varchar(10) DEFAULT NULL,
  `Subject6` varchar(10) DEFAULT NULL,
  `Repeat_Sub` varchar(20) DEFAULT NULL,
  `Supply` varchar(20) DEFAULT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Trade`, `Batch`, `Class_Group`, `Reg_No`, `Roll_No`, `Student_Name`, `Subject1`, `Subject2`, `Subject3`, `Subject4`, `Subject5`, `Subject6`, `Repeat_Sub`, `Supply`, `Password`) VALUES
('CS', 'GCS15', '', '15d', 'db', 'MALIK', 'AM-422', 'CS-521', 'CS-522', 'CS-523', 'CS-524', 'AM-421', NULL, NULL, ''),
('CS', 'GCS15', '', 'gcs', '15', 'RISH', 'AM-422', 'CS-521', 'CS-522', 'CS-523', 'CS-524', 'AM-421', NULL, NULL, ''),
('CS', 'GCS15', '', 'GCS/15/4000', '1540001', 'Gunjit', 'AM-422', 'CS-521', 'CS-522', 'CS-523', 'CS-524', 'AM-421', NULL, NULL, ''),
('CS', 'GC1S14', '', 'sjf', 'wf', 'Rish', '', '', '', '', '', '', NULL, NULL, '');

--
-- Triggers `main`
--
DELIMITER $$
CREATE TRIGGER `mark_table` BEFORE INSERT ON `main` FOR EACH ROW INSERT IGNORE INTO marks_theory (Reg_No,Subject_Code)
VALUES (NEW.Reg_No,NEW.Subject1)
,(NEW.Reg_No,NEW.Subject2)
,(NEW.Reg_No,NEW.Subject3)
,(NEW.Reg_No,NEW.Subject4)
,(NEW.Reg_No,NEW.Subject5)
,(NEW.Reg_No,NEW.Subject6)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `marks_teory_delete` AFTER DELETE ON `main` FOR EACH ROW DELETE FROM marks_theory
    WHERE marks_theory.Reg_No = old.Reg_No
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `marks_update` BEFORE UPDATE ON `main` FOR EACH ROW UPDATE marks_theory 
SET Reg_No=NEW.Reg_No,Subject_Code=NEW.Subject1,Subject_Code=NEW.Subject1,Subject_Code=NEW.Subject1,Subject_Code=NEW.Subject1,Subject_Code=NEW.Subject1,Subject_Code=NEW.Subject1 WHERE Reg_No=old.Reg_No
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `marks_theory`
--

CREATE TABLE `marks_theory` (
  `Reg_No` varchar(20) NOT NULL,
  `Subject_Code` varchar(20) NOT NULL,
  `Minor1` int(11) DEFAULT NULL,
  `Minor2` int(11) DEFAULT NULL,
  `Quiz` int(11) DEFAULT NULL,
  `Major` int(11) DEFAULT NULL,
  `Practical` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_theory`
--

INSERT INTO `marks_theory` (`Reg_No`, `Subject_Code`, `Minor1`, `Minor2`, `Quiz`, `Major`, `Practical`) VALUES
('GCS/15/4000', 'AM-422', NULL, NULL, NULL, NULL, 0),
('GCS/15/4000', 'CS-521', NULL, NULL, NULL, NULL, 0),
('GCS/15/4000', 'CS-522', NULL, NULL, NULL, NULL, 0),
('GCS/15/4000', 'CS-523', NULL, NULL, NULL, NULL, 0),
('GCS/15/4000', 'CS-524', NULL, NULL, NULL, NULL, 0),
('GCS/15/4000', 'AM-421', NULL, NULL, NULL, NULL, 0),
('gcs', 'AM-422', NULL, NULL, NULL, NULL, 0),
('gcs', 'CS-521', NULL, NULL, NULL, NULL, 0),
('gcs', 'CS-522', NULL, NULL, NULL, NULL, 0),
('gcs', 'CS-523', NULL, NULL, NULL, NULL, 0),
('gcs', 'CS-524', NULL, NULL, NULL, NULL, 0),
('gcs', 'AM-421', NULL, NULL, NULL, NULL, 0),
('15d', 'AM-422', NULL, NULL, NULL, NULL, 0),
('15d', 'CS-521', NULL, NULL, NULL, NULL, 0),
('15d', 'CS-522', NULL, NULL, NULL, NULL, 0),
('15d', 'CS-523', NULL, NULL, NULL, NULL, 0),
('15d', 'CS-524', NULL, NULL, NULL, NULL, 0),
('15d', 'AM-421', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0),
('sjf', '', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_Code` varchar(10) NOT NULL,
  `Subject_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_Code`, `Subject_Name`) VALUES
('AM-411', 'Maths'),
('AM-421', 'Higher Maths '),
('AM-521', 'Numerical Analysis'),
('CS-521', 'Web Technology'),
('CS-522', 'Computer Oraganizati'),
('CS-523', 'Networking'),
('CS-524', 'System Software'),
('CY-521', 'Industrial Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_Code` varchar(5) NOT NULL,
  `Teacher_Block` varchar(20) NOT NULL,
  `Teacher_Name` varchar(20) NOT NULL,
  `Teacher_Password` varchar(20) NOT NULL DEFAULT 'rand()*1000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_Code`, `Teacher_Block`, `Teacher_Name`, `Teacher_Password`) VALUES
('AD8', 'CS', 'Jasmin', 'rand()*1000'),
('CSY', 'CSE', 'Chandrashekhar Yadav', 'chutiya');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `Teacher_Code` varchar(5) NOT NULL,
  `Teacher_Name` varchar(20) NOT NULL,
  `Subject_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`Teacher_Code`, `Teacher_Name`, `Subject_Code`) VALUES
('AD8', 'Jasmine', 'CS-524'),
('CSY', 'Chandrashekhar Yadav', 'CS-521');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Acc_Type` int(1) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Acc_Type`) VALUES
('15', 'GCS15', -1),
('1540001', 'GCS15', 0),
('db', 'GCS15', 0),
('wf', 'GC1S14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`Batch`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`Reg_No`,`Roll_No`),
  ADD KEY `Reg_No` (`Reg_No`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_Code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_Code`,`Teacher_Block`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`Teacher_Code`,`Subject_Code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
