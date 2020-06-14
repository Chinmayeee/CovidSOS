-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 08:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dth`
--

CREATE TABLE `dth` (
  `name` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `pno` varchar(11) NOT NULL,
  `severity` varchar(20) NOT NULL,
  `symptoms` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `hospital` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dth`
--

INSERT INTO `dth` (`name`, `age`, `pno`, `severity`, `symptoms`, `area`, `hospital`) VALUES
('rahul dharam', '20', '9890754530', '1', 'fever', 'yerawada', 'Ruby Hall Clinic');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(20) NOT NULL,
  `phone no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `phone no`) VALUES
('rahul', '9890754534'),
('rahul', '9890754534');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `email_id`, `password`) VALUES
(1, 'raj', 'dhamdhere', 'rajdhamdhere2112@gmail.com', '3e7073700ac1fbcd03d72583f588811b'),
(2, 'siasmic', 'gl', 'siasmicgl@gmail.com', '7387b7fc428f121d09ae7ea276c552d7'),
(3, 'ankush', 'pawar', 'ap69@gmail.com', '63610082af32f04ed9c48fd9dd053bac'),
(4, 'aniket', 'ghadge', 'aniket.ghadge@gmail.com', '2a45305047501c9d740ea9978327445a'),
(5, 'Chinmayee', 'Kulkarni', 'k.chinmayee8@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Raj', 'Dhamdhere', 'rajdh@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Raj', 'Dhamdhere', 'rajdha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'snehal', 'umare', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Raj', 'Dhamdhere', 'rajdham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Sanket', 'wadje', 'sanket@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Chinmayee', 'Kulkarni', 'k.chinmayee8@gmail.com', '25f9e794323b453885f5181f1b624d0b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
