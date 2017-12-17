-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 06:09 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis161_dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `date_of_birth` date NOT NULL,
  `town` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `town`, `batch`) VALUES
(1, 'Stella Grace', 'Abrencia', 'M', '1998-02-06', 'Meycauayan', 'HARAYA'),
(2, 'John Aaron', 'Alsol', 'M', '1997-12-08', 'Meycauayan', 'ALAPAAP'),
(3, 'Maria April', 'Ama', 'F', '1996-04-07', 'Meycauayan', 'HARAYA'),
(4, 'Mark Romeo', 'Aquino', 'M', '1995-11-08', 'Malolos', 'ALAPAAP'),
(5, 'Hazel Princess', 'Arcega', 'F', '1997-04-29', 'Baliuag', 'TAKIPSILIM'),
(6, 'Patricia Anne', 'Arellano', 'F', '1999-05-16', 'Malolos', 'ALPAS'),
(7, 'Mark Dave', 'Bautista', 'M', '1996-10-28', 'Baliuag', 'SINAGTALA'),
(14, 'Dustin', 'Estrellado', 'M', '1997-06-09', 'Obando', 'ALAPAAP'),
(17, 'asfdgaf', 'sgdbolvm', 'F', '2017-12-17', 'sdpbijenrm', 'svmeitjouenr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
