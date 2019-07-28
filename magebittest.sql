-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 05:37 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebittest`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(32) NOT NULL,
  `phone` int(32) NOT NULL,
  `city` varchar(255) NOT NULL,
  `comments` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `username`, `age`, `phone`, `city`, `comments`) VALUES
(44, 'user1', 11, 1111, 'Big city', 'This is first user!'),
(45, 'user2', 22, 2222, 'Small city', 'Second user.'),
(46, 'user3', 33, 3333, 'Town nor city', 'Third user.'),
(47, 'user4', 44, 4444, 'Village', 'Fourth user.'),
(49, 'user6', 66, 6666, 'Country', 'Sixt user.');

-- --------------------------------------------------------

--
-- Table structure for table `attributesinfo`
--

CREATE TABLE `attributesinfo` (
  `id` int(3) NOT NULL,
  `attributevalue` varchar(255) NOT NULL,
  `attributemeasure` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attributesinfo`
--

INSERT INTO `attributesinfo` (`id`, `attributevalue`, `attributemeasure`, `comments`) VALUES
(1, 'username', 'full name and surname', 'required'),
(2, 'age', 'full ages', ''),
(4, 'phone', 'phone number', ''),
(6, 'city', 'name of the city', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(155, 'user1', 'user1@user1', '24c9e15e52afc47c225b757e7bee1f9d'),
(156, 'user2', 'user2@user2', '7e58d63b60197ceb55a1c487989a3720'),
(157, 'user3', 'user3@user3', '92877af70a45fd6a2ed7fe81e1236b78'),
(158, 'user4', 'user4@user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(159, 'user5', 'user5@user5', '0a791842f52a0acfbb3a783378c066b8'),
(160, 'user6', 'user6@user6', 'affec3b64cf90492377a8114c86fc093');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributesinfo`
--
ALTER TABLE `attributesinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `attributesinfo`
--
ALTER TABLE `attributesinfo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
