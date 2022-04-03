-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2022 at 02:51 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qudus`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `gender`, `department`, `level`) VALUES
(1, 'Rahman', 'Nedu', '09045567890', 'rahman@gmail.com', 'password', 'Male', 'Chemistry', '300'),
(2, 'Olu', 'Ibrahim', '08155741784', 'oluibrahim@yahoo.com', 'password', 'Male', 'Physics', '300'),
(3, 'Wole', 'Bankole', '0908663728', 'bankywole@gmail.com', 'password', 'Male', 'Computer Science', '200'),
(4, 'Sandra', 'Femi', '090345678', 'sandrafemi@gmail.com', 'password', 'Female', 'Botany', '100'),
(5, 'Zainab ', 'Kareem', '091345678', 'kareemzeze@gmail.com', 'password', 'Female', 'Physics', '300'),
(6, 'Rauf', 'Bolaji', '081345600', 'beejayrauf@gmail.com', 'password', 'Male', 'Physics', '400'),
(7, 'Jade', 'Lolade', '080615654', 'lolajade@gmail.com', 'password', 'Female', 'Computer Science', '100'),
(8, 'Noqeeb', 'Roqeeb', '0906624579', 'noroqeeb@gmail.com', 'password', 'Male', 'Botany', '200'),
(9, 'Akinola', 'Ibrahim', '09073892', 'ibroakin@gmail.com', 'password', 'Male', 'Chemistry', '200'),
(10, 'Jakande', 'Mose', '0703329918', 'jakandemose@gmail.com', 'password', 'Male', 'Physics', '100');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
