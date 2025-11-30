-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 10:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(25) DEFAULT NULL,
  `Content` varchar(250) NOT NULL,
  `Published_date` date NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Content`, `Published_date`, `userId`) VALUES
('Yeshani', 'asdsgfdfhtfrgjfhgt', '2024-09-05', 2),
('Kaveesha', 'This is a bad site', '2024-10-05', 3),
('Jane Smith', 'The app collection is impressive', '2024-10-03', 5),
('Sandesh Dewthilina', 'aasddsdchxckjxnudsih', '2024-10-05', 1),
('Sandesh Dewthilina', 'aasddsdchxckjxnudsih', '2024-10-05', 1),
('Sandesh Dewthilina', 'dfdfgdgdg', '2024-10-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `userid` int(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`userid`, `name`, `rating`, `content`) VALUES
(1, 'Sandeh', 3, 'This is a good app'),
(2, 'Yeshani', 5, 'This is a good app'),
(4, 'dineth', 5, 'sdffghjhkjkuiuytrrreewwq'),
(4, 'Akila', 5, 'adsfdsgdfgf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
