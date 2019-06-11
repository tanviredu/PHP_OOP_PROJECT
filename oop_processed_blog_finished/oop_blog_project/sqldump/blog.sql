-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2019 at 07:38 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `username` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`username`, `title`, `content`, `time`) VALUES
('tanvir1122', 'first post', '<p>This is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postThis is the first postv</p>', '2019-06-11 22:46:40'),
('tanvir1122', 'i am ironman', '<p>do you trust me ??</p>\r\n<p>yes i do.</p>\r\n<p>nice pep talk pissant</p>', '2019-06-11 23:36:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
