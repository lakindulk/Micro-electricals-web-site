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
-- Database: `micro_electricals`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(100) NOT NULL,
  `watt` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `watt`, `nid`, `brand`) VALUES
('led0032', '5', '901545171V', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `message`) VALUES
('12345678900V', 'HSH', 'laki', 'hsah@gmail.com', 'good service'),
('912345678900V', 'lakida', 'kaman', 'lk@gmail.com', 'Warrenty problem'),
('9612345678900V', 'Saman', 'Kuamran', 'saman@gmail.com', 'Goood');

-- --------------------------------------------------------

--
-- Table structure for table `fan`
--

CREATE TABLE `fan` (
  `id` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fan`
--

INSERT INTO `fan` (`id`, `item`, `brand`, `company`, `date`, `phone`, `price`) VALUES
('f111', 'Fan', 'hightec A', '', '2021-01-06', '0571222333', '3000'),
('w112', 'Wall Fan', 'N12', '', '2020-08-05', '0751921333', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `high`
--

CREATE TABLE `high` (
  `id` varchar(100) NOT NULL,
  `watt` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `high`
--

INSERT INTO `high` (`id`, `watt`, `company`, `date`, `phone`, `price`) VALUES
('high1', '18', '', '2021-01-12', '071222333', '1500'),
('high113', '22', '', '2020-12-31', '0111222333', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `ledproduct`
--

CREATE TABLE `ledproduct` (
  `id` varchar(100) NOT NULL,
  `watt` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledproduct`
--

INSERT INTO `ledproduct` (`id`, `watt`, `company`, `date`, `phone`, `price`) VALUES
('led0032', '12', 'SLTs', '2020-12-23', '0112661511', '100'),
('led011', '3W', 'Orange', '2021-01-01', '0119876541', '65'),
('led012', '5W', 'Erition', '2020-10-08', '071222333', '50'),
('led876', '12', 'LKHSH', '2021-01-10', '076222333', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `normal`
--

CREATE TABLE `normal` (
  `id` varchar(100) NOT NULL,
  `watt` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normal`
--

INSERT INTO `normal` (`id`, `watt`, `company`, `date`, `phone`, `price`) VALUES
('nor111', '18', '', '2020-12-29', '0971222333', '1100'),
('nor154', '38', '', '2021-01-05', '0321222333', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'babyh', '$2y$10$ODI0/E49YvRsvdXG125vYuaHLmvF9u1Fqq8DYoYKut9mm1wmcPFoS', '2021-01-09 18:23:10'),
(0, 'lakilk1', '$2y$10$Y3oOsbmXFWL6b58z5Q4W3.UyOu6bEM3hwSHWgPZEhIxiAhR0c1kA.', '2021-01-09 18:23:29'),
(0, 'lakindu', '$2y$10$eSOSQN9iJAQxtJr.wzI.2ORYA94oavVVFR.F8ZIudLI4ulH9iceKC', '2021-01-09 18:24:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high`
--
ALTER TABLE `high`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledproduct`
--
ALTER TABLE `ledproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal`
--
ALTER TABLE `normal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
