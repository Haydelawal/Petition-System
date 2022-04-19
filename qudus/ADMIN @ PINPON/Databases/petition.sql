-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2022 at 02:48 AM
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
-- Table structure for table `petition`
--

DROP TABLE IF EXISTS `petition`;
CREATE TABLE IF NOT EXISTS `petition` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `initiator` varchar(50) NOT NULL,
  `initiator_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `signatures` int(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `main` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petition`
--

INSERT INTO `petition` (`id`, `initiator`, `initiator_id`, `date`, `status`, `signatures`, `title`, `main`) VALUES
(2, ' Olu Ibrahim', 0, '2021-12-29', 'Pending', 5, 'Reduce Food Prices', 'Petition For Canteens To Reduce Food Prices'),
(3, 'Sandra Femi', 0, '2021-12-09', 'Pending', 8, 'Increase Exam Duration', 'Petition To Increase Time Allocated To Exam '),
(4, 'Zainab Kareem', 0, '2021-12-31', 'Pending', 1, 'Include More Sports In Academic Calendar', 'Petition To Include More Sports In Academic Calendar'),
(5, 'Rahman Nedu', 0, '2021-12-31', 'Pending', 1, 'Reduce Printing Costs', 'Petition To Reduce Printing Costs'),
(6, 'Gafar Bashir', 0, '2022-01-01', 'Pending', 52, 'STOP KILLING ANIMALS', 'PETITION FOR ANIMALS TO LIVE'),
(7, 'ADMIN', 0, '2022-01-05', 'Approved', 11, 'Admit More Students', 'Petition To Admit More Students'),
(8, 'ADMIN', 0, '2022-01-05', 'Disapproved', 10, 'Create More Class Rooms', 'Petition To Create More Class Rooms'),
(9, 'ADMIN', 0, '2022-01-13', 'Pending', 17, 'Employ More Lecturers', 'Petition To Employ More Lecturers'),
(14, 'Wole Bankole', 0, '2022-01-20', 'Pending', 1, 'Free Available Internet On Campus', 'Petition To Have Free Fast And Available Internet On Campus'),
(13, 'Rauf Bolaji', 0, '2022-01-11', 'Pending', 1, 'Increase Number Of Rest Rooms', 'Petition To Increase Number Of Rest Rooms On Campus'),
(12, 'Jade Lolade', 0, '2022-01-06', 'Pending', 1, 'Better Treatment At Health Centre', 'Petition For Better Drugs And Treatment At Health Centre'),
(17, 'Noqeeb Roqeeb', 0, '2022-01-07', 'Pending', 1, 'Reduce Time Allocated To Lectures', 'Petition To Reduce Time Allocated To Lectures'),
(16, 'Akinola Ibrahim', 0, '2022-01-04', 'Pending', 1, 'Reduce Price Of Snacks', 'Petition To Reduce Price Of Snacks'),
(18, 'Jakande Mose', 0, '2022-01-05', 'Pending', 1, 'Allow Wearing Of Face Caps', 'Petition To Allow Wearing Of Face Caps');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
