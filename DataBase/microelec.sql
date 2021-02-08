-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 04:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microelec`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'babyh', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', '0000-00-00 00:00:00'),
(0, 'babyhd', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', '0000-00-00 00:00:00'),
(0, 'qqqq', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', '0000-00-00 00:00:00'),
(0, 'lakindu', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', '0000-00-00 00:00:00'),
(0, 'kian de silva', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', '0000-00-00 00:00:00'),
(0, 'kyra de silva', '$2y$10$AEKRxH9SwXiXvS.6sAJkteDMjka7qUEMsGRILUplsH/2R9LGiBYEK', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
