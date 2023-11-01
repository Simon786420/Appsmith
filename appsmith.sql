-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 09:27 PM
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
-- Database: `appsmith`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartproduct`
--

CREATE TABLE `cartproduct` (
  `ProductName` varchar(20) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartproduct`
--

INSERT INTO `cartproduct` (`ProductName`, `UserName`, `Price`) VALUES
('Accordion', 'Manish123', 1900),
('Tripura', 'Manish123', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` text DEFAULT NULL,
  `UserName` varchar(20) NOT NULL,
  `Mobile` bigint(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `UserName`, `Mobile`, `Email`, `Password`) VALUES
('Anna', 'Anna@123', 7821033354, 'nileshtiwari204203@gmail.com', 'fb7c67c83bb5df554a7ccc917eb9ee21'),
('Anshu', 'Anshu123', 9004550897, 'mayureshdalvi43@gmail.com', '420c02b055eb6e67ba44acd0d4b654a4'),
('Manish Sharma', 'Manish123', 7821033354, 'nileshtiwari204203@gmail.com', 'd0e9bb38d41fddcd7ba827340f9e1fbb'),
('Nilesh', 'Nilesh21', 7821033354, 'nileshtiwari204203@gmail.com', '25d55ad2'),
('Nilesh', 'Nilesh22', 7821033354, 'nileshtiwari204203@gmail.com', 'fcea920f'),
('Nilesh', 'Nilesh23', 7821033354, 'nileshtiwari204203@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('Shreya Tiwari', 'Shreya12', 7821033354, 'nileshtiwari204203@gmail.com', '5e2f8406bc50f8518729821677c89b06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
