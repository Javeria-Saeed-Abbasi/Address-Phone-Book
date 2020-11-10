-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 05:14 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin1', 'admin1@gmail.com', '123');

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
(4, 'K@GMAIL.COM', 'kkkkk', '2020-09-20 03:51:52'),
(5, 'democontact@gmail.com', '', '2020-11-01 03:56:12'),
(6, 'democontact@gmail.com', '', '2020-11-01 03:56:12'),
(7, 'democontact@gmail.com', '', '2020-11-01 03:56:59'),
(8, 'democontact@gmail.com', '', '2020-11-01 03:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `profile_pic` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sec_ques` varchar(255) NOT NULL,
  `sec_ans` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `profile_pic`, `username`, `email`, `password`, `phone`, `city`, `country`, `address`, `sec_ques`, `sec_ans`, `date`, `status`) VALUES
(3, '', 'jsa', 'jsa@gmail.com', '123', ' 123', '12345', '123', '1234', 'Who is your favourite cricketer?', 'ab de villerss', '2020-10-30 07:45:04', ''),
(5, '', 'user2', 'user2@gmail.com', '123', ' 123', 'peshwar', 'pakistan', '1234', 'pet', 'jackie', '2020-11-07 09:20:15', ''),
(7, '', 'jia', 'jia1@gmail.com', '123', ' 123', 'lahore', 'pakis', '1234', 'Who is your favourite cricketer?', 'SAMMY', '2020-11-07 09:26:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `profile_pic` blob NOT NULL,
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
(1, '', 'jiyaaa', 'j@gmail.com', 'kkk', 0, 'kkk', 'kkkk', 'kkkk', 'What is your pet name?', 'kkkkkkkkkkkkkkkkkkkk', '2020-09-19 21:18:52', 'accepted'),
(6, '', 'user2', 'user2@gmail.com', '123', 123, 'peshwar', 'pakistan', '1234', 'pet', 'jackie', '2020-10-31 10:20:18', 'accepted'),
(7, '', 'jia', 'jia1@gmail.com', '123', 123, 'lahore', 'pakis', '1234', 'Who is your favourite cricketer?', 'SAMMY', '2020-11-01 07:32:24', 'accepted'),
(8, '', 'Javeriya', 'jaaaa@gmail.com', '1233', 1123, 'xBAiWWOWaO', 'u9VRryvumq', 'N4X2kjJUH2', 'What is your pet name?', 'gbxHMHIUk3', '2020-11-07 09:31:41', 'created'),
(10, '', 'yF6Bs1lv0v', 'uhlvk@s0mz.com', 'Gz9So3RWcb', 1259043192, 'H2ZxBT0fWr', 'rGkWPdpymQ', 'IJGfHpKhBP', '0', 'Nw95lwyH9y', '2020-11-07 09:33:05', 'created');

-- --------------------------------------------------------

--
-- Table structure for table `users_contact`
--

CREATE TABLE `users_contact` (
  `id` int(11) NOT NULL,
  `user-id` int(11) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_contact`
--

INSERT INTO `users_contact` (`id`, `user-id`, `first-name`, `last-name`, `email`, `phone`, `address`, `city`, `country`) VALUES
(3, 0, 'democontact', 'by admin', 'democontact@gmail.com', '123', '1234', 'kar', 'pak'),
(4, 0, 'javeria', 'abb', 'jia@gmail.com', '123', '123 street', 'lahore', 'pakistan'),
(5, 3, 'ali', 'khan', 'ali@gmail.com', '0321', 'address', 'karachi', 'pakistan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_contact`
--
ALTER TABLE `users_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feed_back`
--
ALTER TABLE `feed_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_contact`
--
ALTER TABLE `users_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
