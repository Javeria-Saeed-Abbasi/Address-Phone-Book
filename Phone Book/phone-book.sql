-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 08:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `message`, `date`) VALUES
(1, 'JAveria', 'Abbasi', 'jiya@gmail.com', 'kkkkkkkkkkkkkkkkkk', '2020-09-19 23:48:25'),
(2, 'jj', 'jjj', 'jj@gm.com', 'jjjjj', '2020-09-19 23:51:01'),
(3, 'jj', 'jjj', 'jj@gm.com', 'jjjjj', '2020-09-19 23:51:01'),
(4, 'JAveria', 'Abbasi', 'jiya@gmail.com', 'kkkkkkkkkkkkkkkkkk', '2020-09-19 23:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE `feed_back` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_back`
--

INSERT INTO `feed_back` (`id`, `email`, `message`, `date`) VALUES
(1, 'ja@gmsil.copm', 'kkkk', '2020-09-20 01:26:35'),
(2, 'ja@gmsil.copm', 'kkkk', '2020-09-20 01:26:35'),
(3, 'K@GMAIL.COM', 'kkkkk', '2020-09-20 03:51:52'),
(4, 'K@GMAIL.COM', 'kkkkk', '2020-09-20 03:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `sec_question` varchar(255) NOT NULL,
  `sec_answer` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) DEFAULT 'created'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `profile_pic`, `username`, `email`, `password`, `phone`, `city`, `country`, `address`, `sec_question`, `sec_answer`, `date`, `status`) VALUES
(1, '', 'jiya', 'j@gmail.com', 'kkk', 0, 'kkk', 'kkkk', 'kkkk', 'What is your pet name?', 'kkkk', '2020-09-19 21:18:52', 'created'),
(11, '', 'jiya', 'j@gmail.com', 'kkk', 0, 'kkk', 'kkkk', 'kkkk', 'What is your pet name?', 'kkkk', '2020-09-19 22:12:23', 'created'),
(12, '', 'jiya', 'j@gmail.com', 'kkk', 0, 'kkk', 'kkkk', 'kkkk', 'What is your pet name?', 'kkkk', '2020-09-19 22:12:23', 'created'),
(13, '', 'kk', 'kkk@yahoo.com', '1223', 1, 'frff', 'ggg', 'gggggggggg', 'Which is your favourite movie?', 'hhh', '2020-09-19 22:13:28', 'created'),
(14, '', 'kk', 'kkk@yahoo.com', '1223', 1, 'frff', 'ggg', 'gggggggggg', 'Which is your favourite movie?', 'hhh', '2020-09-19 22:13:28', 'created'),
(15, '', 'kk', 'kkk@yahoo.com', '1223', 1, 'frff', 'ggg', 'gggggggggg', 'Which is your favourite movie?', 'hhh', '2020-09-19 22:15:13', 'created'),
(16, '', 'kk', 'kkk@yahoo.com', '1223', 1, 'frff', 'ggg', 'gggggggggg', 'Which is your favourite movie?', 'hhh', '2020-09-19 22:15:13', 'created');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_back`
--
ALTER TABLE `feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
