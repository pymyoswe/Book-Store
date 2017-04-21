-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 03:03 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `id` int(11) NOT NULL,
  `bookName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authorName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookCover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bookFile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_Id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`id`, `bookName`, `authorName`, `bookCover`, `bookFile`, `cat_Id`, `created_date`) VALUES
(1, 'PHP(myanmar)', 'Moe Myint Shine', 'logo.jpg', 'MM_PHP_Ebook.pdf', 8, '2017-04-20 19:59:24'),
(4, 'Mysql(PHP)', 'Lake Willing', 'logo2.jpg', 'PHP and MySQL (Web Development).pdf', 13, '2017-04-21 14:04:50'),
(5, 'one', 'One', 'logo3.jpg', 'mysql_tutorial.pdf', 9, '2017-04-21 14:42:42'),
(6, 'two', 'TWO', 'logo3.jpg', 'PHP and MySQL Everyday Apps For Dummies.pdf', 14, '2017-04-21 14:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `created_date`) VALUES
(8, 'First Year', '2017-04-20 16:54:10'),
(9, 'Second Year', '2017-04-20 16:54:20'),
(13, 'Third Year', '2017-04-21 11:03:34'),
(14, 'Forth Year', '2017-04-21 11:03:42'),
(15, 'Firth Year', '2017-04-21 11:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `name`, `password`, `created_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-04-20 14:09:23'),
(2, 'pymyoswe', '405018ea08ec946aa52454379e82ac40', '2017-04-20 14:39:23'),
(3, 'koko', '37f525e2b6fc3cb4abd882f708ab80eb', '2017-04-20 14:40:14'),
(4, 'mgmg', 'daa4bf1b4d0978fa034ada89161a23c4', '2017-04-20 15:03:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
