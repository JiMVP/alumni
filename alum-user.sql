-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 09:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alum-user`
--

CREATE TABLE `alum-user` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bday` date DEFAULT NULL,
  `bplace` varchar(255) NOT NULL,
  `conno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alum-user`
--

INSERT INTO `alum-user` (`id`, `lname`, `fname`, `mname`, `suffix`, `usn`, `pwd`, `gender`, `bday`, `bplace`, `conno`, `email`, `address`) VALUES
(2, 'Jems', 'Adimalas', '', '', 'jimvp', 'jems', '', NULL, '', '', '', ''),
(4, 'SALAMIDA', 'JEMWEL GERALD', 'OGARO', '', '21000131200', 'jemwel2003', 'Male', '2003-12-01', 'Tacloban City, Leyte', '09397689360', 'jemsadimalas@gmail.com', 'Blk. 11, Lot 12, Ruby Street, Lolita Homes Subdivision, Brgy. Guindapunan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum-user`
--
ALTER TABLE `alum-user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alum-user`
--
ALTER TABLE `alum-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
