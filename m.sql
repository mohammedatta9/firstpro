-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 02:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `aalan`
--

CREATE TABLE `aalan` (
  `id` int(11) NOT NULL,
  `taa` varchar(50) NOT NULL,
  `aa` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aalan`
--

INSERT INTO `aalan` (`id`, `taa`, `aa`) VALUES
(4, 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø§Ø¹Ù„Ø§Ù†', ''),
(6, 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø§Ø¹Ù„Ø§Ù†', 'ss'),
(7, 'Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ø§Ø¹Ù„Ø§Ù†', 'hghughk hghughk'),
(8, 'ss', 'aa'),
(9, 'Ø§Ù„Ù„Ù„Ù„', 'Ø§ØªÙ„Ø§Ù„Ø¨Ø¨Ø¨Ù„ÙŠÙŠ'),
(10, 's', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `gro`
--

CREATE TABLE `gro` (
  `id` int(11) NOT NULL,
  `stone` varchar(50) NOT NULL,
  `sttwo` varchar(50) NOT NULL,
  `st3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gro`
--

INSERT INTO `gro` (`id`, `stone`, `sttwo`, `st3`) VALUES
(37, 'a', 'd', 's'),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, 'mohammed', 'atta', 'mohammed'),
(50, '', '', ''),
(52, 'd', 's', 'mohammed');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `tp` varchar(50) NOT NULL,
  `typ` varchar(50) NOT NULL,
  `dp` varchar(200) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `tp`, `typ`, `dp`, `active`) VALUES
(5, 'Ù…ÙˆÙ‚Ø¹', 'ÙˆÙŠØ¨', 'Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹', 1),
(6, 'aa', 'ss', 'aaÙ…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹Ù…ÙˆÙ‚Ø¹', 0),
(7, 'zzz', 'zz', 'zzxx', 0),
(8, 'ata', 'web', 'ataaaattttaaata', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shda`
--

CREATE TABLE `shda` (
  `id` int(11) NOT NULL,
  `techname` varchar(50) NOT NULL,
  `ngro` int(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `project` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shda`
--

INSERT INTO `shda` (`id`, `techname`, `ngro`, `time`, `date`, `place`, `project`) VALUES
(1, 'aaa', 35, '3', '2019-06-14', '32', ''),
(3, 'ss', 40, '2:30', '2019-06-06', 'Ø´3023', ''),
(4, 'ss', 40, '2:30', '2019-06-06', 'Ø´3023', ''),
(5, 'ss', 40, '2:30', '2019-06-06', 'Ø´3023', ''),
(6, 'ss', 40, '2:30', '2019-06-06', 'Ø´3023', ''),
(7, 'Ø´Ø§Ø©Ø´ÙŠ', 41, '2:30', '2019-05-31', 'Ø´302', 'Ù…ÙˆÙ‚Ø¹'),
(8, 'Ø´Ø§Ø©Ø´ÙŠ', 41, '2:30', '2019-05-31', 'Ø´302', 'Ù…ÙˆÙ‚Ø¹');

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `lv` varchar(50) DEFAULT NULL,
  `phonn` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`id`, `name`, `lv`, `phonn`, `active`) VALUES
(5, 'g', '5', 5, 1),
(6, 'h', '6', 6, 1),
(100, 'mohammed', '2', 444, 1),
(300, 'atta', '33', 5554, 1),
(2000, 'ahmed', '4', 3334, 1),
(20011, 'attaaraa', 'Ø§Ù„Ø±Ø§Ø¨Ø¹', 252, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jop` varchar(50) NOT NULL,
  `sis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`id`, `name`, `jop`, `sis`) VALUES
(1, 's', 'ss', 'ss'),
(5, 'r', 'ØµØµ', 'ØµØ¶'),
(6, 'atta', 'Ø¯ÙƒØªÙˆØ±', 'Ø§Ù„Ø·Ø¨'),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aalan`
--
ALTER TABLE `aalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gro`
--
ALTER TABLE `gro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shda`
--
ALTER TABLE `shda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech`
--
ALTER TABLE `tech`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aalan`
--
ALTER TABLE `aalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gro`
--
ALTER TABLE `gro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shda`
--
ALTER TABLE `shda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201828;

--
-- AUTO_INCREMENT for table `tech`
--
ALTER TABLE `tech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
