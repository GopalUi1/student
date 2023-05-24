-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2023 at 05:35 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(20) NOT NULL,
  `locat` varchar(20) NOT NULL,
  `about` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `dob`, `education`, `locat`, `about`) VALUES
(8, 'fathik', 'K', 'fathi@gmail.com', '2023-05-17', 'BBA', 'VNR', 'BEST STUDENT   '),
(5, 'shar', 'G', 'shar@gmail.com', '1998-09-22', 'MCA', 'pattikadu', 'hard worker'),
(7, 'sharmi', 'G', 'sharmila@gmail.com', '1998-09-22', 'MCA', 'virudhunagar', 'Speed Worker '),
(11, 'perumal', 'K', 'perumal@gmail.com', '2023-05-17', 'BBA', 'VNR', 'writing student'),
(12, 'ravanan', 'N', 'ravanan@gmail', '2023-05-02', 'MCOM', 'SATTUR', 'Long jumb first '),
(13, 'hendry', 'h', '123@fmail.com', '2023-03-29', 'MCOM', 'MDU', 'GOOd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
