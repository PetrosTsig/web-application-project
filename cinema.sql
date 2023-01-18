-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 08:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `films_id` int(11) NOT NULL,
  `film_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`films_id`, `film_title`) VALUES
(1, 'the horror movie'),
(2, 'the adventure movie'),
(3, 'the comedy movie');

-- --------------------------------------------------------

--
-- Table structure for table `projections`
--

CREATE TABLE `projections` (
  `prov_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projections`
--

INSERT INTO `projections` (`prov_id`, `time_start`, `time_end`, `film_id`) VALUES
(1, '18:00:00', '20:00:00', 3),
(2, '20:00:00', '22:00:00', 2),
(3, '22:00:00', '24:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `username` varchar(255) NOT NULL,
  `res_date` date NOT NULL,
  `prov_id` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`username`, `res_date`, `prov_id`, `seat`, `approved`) VALUES
('petros', '2023-01-10', 3, 10, 0),
('petros', '2023-01-11', 3, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(250) NOT NULL,
  `date_limit` date NOT NULL,
  `seats_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `date_limit`, `seats_limit`) VALUES
('Cinema', '2023-01-30', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`) VALUES
('Admin', '12345', 'Admin', 'cinema-admin@gmail.com'),
('Vaggelis', 'vag12', 'vaggelis', 'vaggelis@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`films_id`);

--
-- Indexes for table `projections`
--
ALTER TABLE `projections`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
