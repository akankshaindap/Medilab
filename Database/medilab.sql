-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2019 at 12:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medilab`
--
CREATE DATABASE IF NOT EXISTS `medilab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medilab`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `c_name` varchar(225) NOT NULL,
  `c_email` varchar(225) NOT NULL,
  `c_subject` varchar(225) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(2, 'Gitesh', 'giteshsawant03@gmail.com', 'Help', 'Hello'),
(3, 'Gitesh', 'giteshsawant03@gmail.com', 'Help', 'Hello'),
(4, 'Gitesh', 'giteshsawant03@gmail.com', 'sfas', 'savfks'),
(5, 'Akanksha', 'aindap@gmail.com', 'sfsa', 'dsagdfg'),
(6, 'harsh', 'harshsanghani11@gmail.com', 'sdddhgd', 'fgfj'),
(7, 'parth', 'parth@gmail.com', 'Help', 'Want to get appointment.');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE `medicine` (
  `m_id` int(50) NOT NULL,
  `m_name` varchar(225) NOT NULL,
  `m_brand` varchar(225) NOT NULL,
  `m_disease` varchar(225) NOT NULL,
  `m_effect` varchar(225) NOT NULL,
  `m_weight` int(11) NOT NULL,
  `m_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_brand`, `m_disease`, `m_effect`, `m_weight`, `m_price`) VALUES
(1, 'ewgfw', 'efwefew', 'ffdb', 'low', 24, 500),
(2, 'abc', 'pqr', 'fever', 'low', 34, 632),
(3, 'asdsa', 'sfas', 'asff', 'asffs', 50, 500),
(4, 'crocine', 'cipla', 'fever', 'high', 20, 10),
(5, 'pqr', 'aa', 'headache', 'high', 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `offline`
--

DROP TABLE IF EXISTS `offline`;
CREATE TABLE `offline` (
  `id` int(11) NOT NULL,
  `o_name` varchar(225) NOT NULL,
  `o_address` varchar(225) NOT NULL,
  `o_city` varchar(225) NOT NULL,
  `o_pincode` int(10) NOT NULL,
  `o_email` varchar(225) NOT NULL,
  `o_contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offline`
--

INSERT INTO `offline` (`id`, `o_name`, `o_address`, `o_city`, `o_pincode`, `o_email`, `o_contact`) VALUES
(1, 'Laxmi Medicals', 'Navghar Road', 'Bhayadar', 401001, 'laxmimed@gmail.com', 9867347321),
(2, 'Rock Medical', 'Samelpada', 'Vasai', 401300, 'rock@gmail.com', 8768543329);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `on_name` varchar(225) NOT NULL,
  `on_website` varchar(520) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `on_name`, `on_website`) VALUES
(1, '1MG', 'https://www.1mg.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `offline`
--
ALTER TABLE `offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offline`
--
ALTER TABLE `offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
