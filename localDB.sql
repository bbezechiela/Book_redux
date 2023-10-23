-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 07:30 PM
-- Server version: 10.11.4-MariaDB
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookCategories`
--

CREATE TABLE `bookCategories` (
  `book_ID` int(11) NOT NULL,
  `book_genre` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_timestamp` timestamp NOT NULL,
  `book_owner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bookCategories`
--

INSERT INTO `bookCategories` (`book_ID`, `book_genre`, `book_title`, `book_author`, `book_price`, `book_timestamp`, `book_owner`) VALUES
(1, 'Education', 'Learing is for everyone', 'Pedro the great', 200, '2022-12-12 04:12:12', 'Joseph Handog'),
(2, 'Education', 'Learing is for everyone', 'Pedro the great', 200, '2022-12-12 04:12:12', 'Joseph Handog'),
(4, 'Romance', 'Two is better than one.', 'Pedro', 1500, '2012-12-12 04:12:12', 'Cham');

-- --------------------------------------------------------

--
-- Table structure for table `cartTable`
--

CREATE TABLE `cartTable` (
  `cart_book_ID` int(11) NOT NULL,
  `book_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cartTable`
--

INSERT INTO `cartTable` (`cart_book_ID`, `book_ID`, `userID`) VALUES
(8, 1, 1),
(9, 2, 1),
(10, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conversationDB`
--

CREATE TABLE `conversationDB` (
  `conversationID` int(11) NOT NULL,
  `conversationName` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `conversationDB`
--

INSERT INTO `conversationDB` (`conversationID`, `conversationName`, `timestamp`) VALUES
(58, 'cham,ezechiela', '2023-10-07 07:10:54'),
(59, 'abe,cham', '2023-10-07 07:11:22'),
(60, 'abe,ezechiela', '2023-10-07 07:31:41'),
(61, 'ezechiela,pedro', '2023-10-08 10:27:50'),
(62, 'cham,pedro', '2023-10-08 10:28:10'),
(63, 'abe,pedro', '2023-10-09 15:19:13'),
(64, 'cham,kyle', '2023-10-11 14:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `likedBooks`
--

CREATE TABLE `likedBooks` (
  `liked_book_ID` int(11) NOT NULL,
  `book_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `likedBooks`
--

INSERT INTO `likedBooks` (`liked_book_ID`, `book_ID`, `userID`) VALUES
(18, 2, 1),
(19, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loginDB`
--

CREATE TABLE `loginDB` (
  `userID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `loginDB`
--

INSERT INTO `loginDB` (`userID`, `username`, `password`) VALUES
(1, 'cham', 'happyme123'),
(2, 'ezechiela', 'happyme123'),
(3, 'abe', 'happyme123'),
(4, 'pedro', 'happyme123'),
(5, 'kyle', 'happyme123');

-- --------------------------------------------------------

--
-- Table structure for table `messageDB`
--

CREATE TABLE `messageDB` (
  `messageID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `conversationID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messageDB`
--

INSERT INTO `messageDB` (`messageID`, `senderID`, `receiverID`, `content`, `timestamp`, `conversationID`) VALUES
(269, 2, 1, 'poga', '2023-10-17 14:38:03', 58),
(270, 2, 1, 'cham ngan ezechiela ini na convo', '2023-10-17 14:38:15', 58),
(271, 2, 4, 'ezechiela ngan pedro ini na convo', '2023-10-17 14:38:29', 61),
(272, 2, 3, 'ezechiela ngan abe ini na convo', '2023-10-17 14:38:40', 60),
(273, 2, 4, '', '2023-10-17 14:56:33', 61),
(274, 1, 3, 'atun inin toy', '2023-10-17 16:25:56', 59),
(275, 1, 3, 'asdadadad', '2023-10-17 16:26:20', 59),
(276, 1, 2, 'anu kana toy', '2023-10-17 16:37:32', 58),
(277, 1, 3, 'bole', '2023-10-17 16:37:38', 59),
(278, 1, 3, 'poga', '2023-10-17 16:37:44', 59),
(279, 1, 4, 'nice pedro', '2023-10-17 16:37:59', 62),
(280, 1, 5, 'nice kyle', '2023-10-17 16:38:05', 64),
(281, 2, 3, '', '2023-10-17 16:50:59', 60),
(282, 2, 1, 'asd', '2023-10-17 17:51:20', 58),
(283, 2, 1, 'hahahaha', '2023-10-17 17:51:25', 58),
(284, 1, 3, '', '2023-10-20 13:34:35', 59);

-- --------------------------------------------------------

--
-- Table structure for table `participantsTable`
--

CREATE TABLE `participantsTable` (
  `participantsID` int(50) NOT NULL,
  `userID` int(50) NOT NULL,
  `conversationID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookCategories`
--
ALTER TABLE `bookCategories`
  ADD PRIMARY KEY (`book_ID`);

--
-- Indexes for table `cartTable`
--
ALTER TABLE `cartTable`
  ADD PRIMARY KEY (`cart_book_ID`),
  ADD KEY `index_book_ID` (`book_ID`),
  ADD KEY `index_user_ID` (`userID`);

--
-- Indexes for table `conversationDB`
--
ALTER TABLE `conversationDB`
  ADD PRIMARY KEY (`conversationID`);

--
-- Indexes for table `likedBooks`
--
ALTER TABLE `likedBooks`
  ADD PRIMARY KEY (`liked_book_ID`),
  ADD KEY `index_book_ID` (`book_ID`),
  ADD KEY `index_userID` (`userID`);

--
-- Indexes for table `loginDB`
--
ALTER TABLE `loginDB`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `messageDB`
--
ALTER TABLE `messageDB`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `index_conversationID` (`conversationID`);

--
-- Indexes for table `participantsTable`
--
ALTER TABLE `participantsTable`
  ADD PRIMARY KEY (`participantsID`),
  ADD KEY `index_userID` (`userID`),
  ADD KEY `index_conversationID` (`conversationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookCategories`
--
ALTER TABLE `bookCategories`
  MODIFY `book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cartTable`
--
ALTER TABLE `cartTable`
  MODIFY `cart_book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `conversationDB`
--
ALTER TABLE `conversationDB`
  MODIFY `conversationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `likedBooks`
--
ALTER TABLE `likedBooks`
  MODIFY `liked_book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loginDB`
--
ALTER TABLE `loginDB`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messageDB`
--
ALTER TABLE `messageDB`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `participantsTable`
--
ALTER TABLE `participantsTable`
  MODIFY `participantsID` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartTable`
--
ALTER TABLE `cartTable`
  ADD CONSTRAINT `cartTable_ibfk_1` FOREIGN KEY (`book_ID`) REFERENCES `bookCategories` (`book_ID`),
  ADD CONSTRAINT `cartTable_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `loginDB` (`userID`);

--
-- Constraints for table `likedBooks`
--
ALTER TABLE `likedBooks`
  ADD CONSTRAINT `likedBooks_ibfk_1` FOREIGN KEY (`book_ID`) REFERENCES `bookCategories` (`book_ID`),
  ADD CONSTRAINT `likedBooks_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `loginDB` (`userID`);

--
-- Constraints for table `messageDB`
--
ALTER TABLE `messageDB`
  ADD CONSTRAINT `messageDB_ibfk_1` FOREIGN KEY (`conversationID`) REFERENCES `conversationDB` (`conversationID`);

--
-- Constraints for table `participantsTable`
--
ALTER TABLE `participantsTable`
  ADD CONSTRAINT `participantsTable_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `loginDB` (`userID`),
  ADD CONSTRAINT `participantsTable_ibfk_2` FOREIGN KEY (`conversationID`) REFERENCES `conversationDB` (`conversationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
