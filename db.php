-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(21) NOT NULL,
  `passward` varchar(11) NOT NULL,
  `dob` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`firstname`, `lastname`, `email`, `passward`, `dob`) VALUES
('rani', 'patle', 'rani45@gmail.com', '678', '2024-03-21 15:00:51.000000'),
('rani', 'patle', 'rani45@gmail.com', '678', '2024-03-21 15:00:51.000000'),
('YAchna', 'patle', '098876r@gmail.com', '567', '2024-04-06 00:00:00.000000'),
('yachna', 'hjkn', 'toryuioi789@gmail.com', '678', '2024-03-22 00:00:00.000000'),
('', '', '', '', '0000-00-00 00:00:00.000000'),
('rani', 'patle', '098876r@gmail.com', '567890', '2024-04-05 00:00:00.000000'),
('rani', 'patle', '098876r@gmail.com', '567890', '2024-04-05 00:00:00.000000'),
('yachna', 'patle', 'patleyachna2004@gmail', '678', '2024-04-06 00:00:00.000000'),
('yachna', 'patle', 'patleyachna2004@gmail', '678', '2024-04-06 00:00:00.000000'),
('yachna', 'patle', 'patleyachna2004@gmail', '678', '2024-04-06 00:00:00.000000'),
('yachna', 'patle', 'patleyachna2004@gmail', '678', '2024-04-06 00:00:00.000000'),
('sakjsi', 'dubey', 'sdubey67@gmail.com', '3456', '2024-03-21 15:00:51.000000'),
('angad ', 'singh', 'angad34@gmail.com', '1234', '2024-03-22 00:00:00.000000'),
('dog', 'patle', 'dog45@gmail.com', '789', '2024-03-05 00:00:00.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
