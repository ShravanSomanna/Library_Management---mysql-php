-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 04:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `pubname` varchar(20) NOT NULL,
  `pubyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `title`, `pubname`, `pubyear`) VALUES
(1, 'ABSALOM', 'WILLIAM FAULKNER', 1936),
(2, 'A TIME TO KILL', 'JOHN GRISHAM', 1989),
(3, 'HOUSE OF MIRTH', 'EDITH WHARTON', 1905),
(4, 'EAST OF EDEN', 'JOHN STEINBECK', 1952),
(5, 'SUN RISES', 'ERNEST HEMINGWAY', 1926),
(6, 'VILE BODIES', 'EVELYN WAUGH', 1930),
(7, 'A SCANNER DARKLY', 'PHILIP K', 1977),
(8, 'MOAB IS WASHPOT', 'STEPHEN FRY', 1997),
(9, 'NUMBER THE STARS', 'LOIS LOWRY', 1989),
(10, 'NOLI ME TANGERE', 'JOSÉ RIZAL', 1887),
(11, 'BRAVE WORLD', 'ALDOUS HUXLEY', 1921),
(12, 'ROSEMARY RUE', 'SEANAN MCGUIRE', 1946),
(13, 'PALE FIRE', 'VLADIMIR NABOKOV', 1962),
(14, 'REMEMBERENCE', 'MARCEL PROUST', 1922),
(15, 'FAULT IN STARS', 'JOHN GREEN', 2012),
(16, 'COLD COMFORT', 'STELLA GIBBONS', 1932),
(17, 'IN COLD BLOOD', 'TRUMAN CAPOTE', 1966),
(18, 'BEHOLD POISON', 'GEORGETTE HEYER', 2001),
(19, 'BAND OF BOTHERS', 'STEPHEN E', 2001),
(20, 'THE DARK TOWER', 'STEPHEN KING', 1982),
(21, 'SOUND FURY', 'WILLIAM FAULKNER', 1929),
(22, 'NO WIND', 'GEORGETTE HEYER', 1939),
(23, 'I KNOW BIRDS', 'MAYA ANGELOU', 1969),
(24, 'ALONE WIDE', 'MICHAEL MORPURGO', 2006),
(25, 'DANCE DANCE', 'HARUKI MURAKAMI', 1994),
(26, 'GONE WITH WIND', 'MARGARET M.', 1936),
(27, 'MORTAL ENGINES', 'PHILIP REEVE', 1936),
(28, 'MANY SPLENDOUR', 'HAN SUYIN', 1904),
(29, 'LAY DYING', 'WILLIAM FAULKNER', 1930),
(30, 'THINGS FALL', 'CHINUA ACHEBE', 1919);

-- --------------------------------------------------------

--
-- Table structure for table `booklend`
--

CREATE TABLE `booklend` (
  `Book_Id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `cardNo` int(11) NOT NULL,
  `dateOut` date NOT NULL,
  `DueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_copies`
--

CREATE TABLE `book_copies` (
  `Book_ID` int(11) NOT NULL,
  `branch_ID` int(11) NOT NULL,
  `No_of_copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branchauthor`
--

CREATE TABLE `branchauthor` (
  `bookid` int(11) NOT NULL,
  `authorName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libbranch`
--

CREATE TABLE `libbranch` (
  `branchID` int(11) NOT NULL,
  `branchName` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `booklend`
--
ALTER TABLE `booklend`
  ADD PRIMARY KEY (`cardNo`),
  ADD KEY `Book_Id` (`Book_Id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD PRIMARY KEY (`No_of_copies`),
  ADD KEY `Book_ID` (`Book_ID`),
  ADD KEY `branch_ID` (`branch_ID`);

--
-- Indexes for table `branchauthor`
--
ALTER TABLE `branchauthor`
  ADD KEY `Foreign Key` (`bookid`);

--
-- Indexes for table `libbranch`
--
ALTER TABLE `libbranch`
  ADD PRIMARY KEY (`branchID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklend`
--
ALTER TABLE `booklend`
  ADD CONSTRAINT `booklend_ibfk_1` FOREIGN KEY (`Book_Id`) REFERENCES `book` (`bookid`),
  ADD CONSTRAINT `booklend_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `libbranch` (`branchID`);

--
-- Constraints for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD CONSTRAINT `book_copies_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`bookid`),
  ADD CONSTRAINT `book_copies_ibfk_2` FOREIGN KEY (`branch_ID`) REFERENCES `libbranch` (`branchID`);

--
-- Constraints for table `branchauthor`
--
ALTER TABLE `branchauthor`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
