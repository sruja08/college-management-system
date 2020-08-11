-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 04:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total` (IN `ROLL_NO` INT(2), IN `c_code` VARCHAR(10))  NO SQL
BEGIN
update result1 set finalia = ((ia1 + ia2 + ia3)/3);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_code`, `c_name`, `dept`, `sem`) VALUES
('01', 'DBMS', 'cse', 5),
('02', 'OOC', 'cse', 6),
('03', 'Adv java', 'cse', 5),
('04', 'ATC', 'cse', 5),
('05', 'dot net', 'ise', 5),
('08', 'dbms', 'cse', 6),
('09', 'test3', 'cse', 5);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `facid` varchar(10) NOT NULL,
  `mno` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `qualify` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `branch`, `dob`, `facid`, `mno`, `gender`, `adress`, `qualify`) VALUES
('Asha', 'cse', '2019-03-14', '123', 1234567890, 'female', 'jaynagar', 'prof'),
('test', 'cse', '2020-08-17', '123456789', 1234567899, 'male', 'abc', 'prof'),
('abc', 'cse', '2019-12-11', '1414', 1234567899, 'male', 'jaynagar', 'b.e'),
('Harshitha', 'cse', '2019-11-21', '147', 123456789, 'female', 'bsk2', 'prof'),
('Ranjitha', 'cse', '2019-11-27', '258', 123456789, 'female', 'jp nagar', 'prof'),
('Rck', 'cse', '2019-11-20', '456', 2147483647, 'male', 'jp nagar', 'prof'),
('Rahul', 'cse', '2019-11-14', '789', 987654321, 'male', 'jp nagar', 'prof'),
('ravi', 'cse', '2002-03-14', 'qw22', 1234567899, 'male', 'jaynagar', 'B.E');

-- --------------------------------------------------------

--
-- Table structure for table `fee_status`
--

CREATE TABLE `fee_status` (
  `ROLL_NO` int(2) NOT NULL,
  `tot_amt` int(6) NOT NULL,
  `amt_paid` int(6) NOT NULL,
  `remaining` int(6) NOT NULL,
  `id` int(11) NOT NULL,
  `status1` varchar(10) NOT NULL DEFAULT 'Not paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_status`
--

INSERT INTO `fee_status` (`ROLL_NO`, `tot_amt`, `amt_paid`, `remaining`, `id`, `status1`) VALUES
(26, 20000, 20000, 0, 147, 'paid'),
(26, 123, 23, 0, 387, 'PAID'),
(26, 100000, 100000, 0, 390, 'PAID'),
(26, 10000, 10000, 0, 395, 'PAID');

--
-- Triggers `fee_status`
--
DELIMITER $$
CREATE TRIGGER `inst` AFTER INSERT ON `fee_status` FOR EACH ROW insert into status ( ROLL_NO,status,id) values (NEW.ROLL_NO,'NOT PAID',NEW.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `state` AFTER UPDATE ON `fee_status` FOR EACH ROW update status set status='PAID' where id in (SELECT id from fee_status where remaining=0)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('srujan', 'srujan');

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE `result1` (
  `ROLL_NO` int(2) NOT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `c_code` varchar(10) NOT NULL,
  `sem` int(2) DEFAULT NULL,
  `ia1` int(3) DEFAULT NULL,
  `ia2` int(3) DEFAULT NULL,
  `ia3` int(3) DEFAULT NULL,
  `finalia` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`ROLL_NO`, `dept`, `c_code`, `sem`, `ia1`, `ia2`, `ia3`, `finalia`) VALUES
(26, 'cse', '01', 5, 34, 34, 34, 34),
(26, 'cse', '02', 5, 34, 56, 56, 49),
(26, 'cse', '03', 5, 30, 30, 15, 25),
(26, 'cse', '04', 5, 23, 23, 25, 24),
(89, 'cse', '01', 5, 23, 23, 34, 27);

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

CREATE TABLE `staff_login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login`
--

INSERT INTO `staff_login` (`Username`, `Password`) VALUES
('srujan', 'srujan');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ROLL_NO` int(11) NOT NULL,
  `status` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ROLL_NO`, `status`, `id`) VALUES
(26, 'PAID', 147),
(26, 'PAID', 387),
(26, 'PAID', 390);

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `ROLL_NO` int(2) NOT NULL,
  `NAME` varchar(10) DEFAULT NULL,
  `SEM` int(2) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `BRANCH` varchar(10) DEFAULT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`ROLL_NO`, `NAME`, `SEM`, `GENDER`, `BRANCH`, `Password`) VALUES
(26, 'srujan', 5, 'm', 'cse', '123'),
(89, 'test1', 5, 'm', 'cse', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facid`);

--
-- Indexes for table `fee_status`
--
ALTER TABLE `fee_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ROLL_NO` (`ROLL_NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `result1`
--
ALTER TABLE `result1`
  ADD PRIMARY KEY (`ROLL_NO`,`c_code`),
  ADD KEY `c_code` (`c_code`);

--
-- Indexes for table `staff_login`
--
ALTER TABLE `staff_login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ROLL_NO` (`ROLL_NO`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`ROLL_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_status`
--
ALTER TABLE `fee_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fee_status`
--
ALTER TABLE `fee_status`
  ADD CONSTRAINT `fee_status_ibfk_1` FOREIGN KEY (`ROLL_NO`) REFERENCES `stud` (`ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result1`
--
ALTER TABLE `result1`
  ADD CONSTRAINT `result1_ibfk_1` FOREIGN KEY (`ROLL_NO`) REFERENCES `stud` (`ROLL_NO`),
  ADD CONSTRAINT `result1_ibfk_2` FOREIGN KEY (`c_code`) REFERENCES `course` (`c_code`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`ROLL_NO`) REFERENCES `stud` (`ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`id`) REFERENCES `fee_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
