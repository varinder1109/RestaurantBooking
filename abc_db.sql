-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2020 at 10:49 PM
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
-- Database: `abc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_booking`
--

DROP TABLE IF EXISTS `table_booking`;
CREATE TABLE IF NOT EXISTS `table_booking` (
  `Booking_ID` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `party_size` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  PRIMARY KEY (`Booking_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_booking`
--

INSERT INTO `table_booking` (`Booking_ID`, `name`, `phone_number`, `party_size`, `day`, `time`) VALUES
(8, 'hello', '7854123698', '3', 'WEDNESSDAY', '1:30 PM'),
(7, 'Varinder Singh', '7896541230', '6', 'WEDNESSDAY', '12:30 PM'),
(6, 'varinder', '4521789632', '5', 'MONDAY', '12:30 PM'),
(13, 'hanif', '456987123', '5', 'TUESDAY', '1:30 PM'),
(11, 'raman', '745213698', '9', 'WEDNESSDAY', '1:30 PM'),
(12, 'hari parkash', '456123456', '7', 'MONDAY', '12:30 PM'),
(14, 'Josh', '456987123', '5', 'THURSDAY', '6:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `user_name`, `phone_number`, `password`) VALUES
(21, 'Hanif', 'hani@gmail.com', 'hani', '4563217898', '123456'),
(20, 'Ram', 'raman@gmail.com', 'raman', '7896654123', '789456'),
(19, 'Hari Ram', 'Hari@gmail.com', 'hari', '7896541236', '123456'),
(18, 'geet', 'geet@gmail.com', 'geet23', '7896541236', '12345'),
(17, 'varinder', 'variii@v.com', 'vari', '4578963214', 'hello');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
