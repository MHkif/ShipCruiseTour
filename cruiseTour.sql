-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:16 PM
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
-- Database: `shipcruise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'aziz', 'harkati', 'harkati@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `cruise`
--

CREATE TABLE `cruise` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `nights_number` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `starting_port` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cruise`
--

INSERT INTO `cruise` (`id`, `name`, `price`, `image`, `nights_number`, `starting_date`, `starting_port`, `ship_id`) VALUES
(9, 'cruise1', 100, '', 8, '2022-12-09', 15, 1),
(10, 'cruise2', 111, 'braclet2.webp', 8, '2022-12-23', 15, 1),
(11, 'cruise3', 362, 'braclet5.webp', 5, '2022-12-17', 15, 1),
(12, 'cruise4', 362, 'braclet4.webp', 6, '2022-12-16', 15, 2),
(13, '', 44, '5.jpg', 27, '2022-12-10', 15, 2),
(14, '', 2345, '4.jpg', 345, '2022-12-11', 15, 5),
(15, '', 100, '3.jpg', 1, '2022-01-01', 15, 2),
(16, '', 100, '4.jpg', 3, '2022-01-02', 15, 5),
(17, '', 234, '4.jpg', 11, '2022-12-14', 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cruise_port`
--

CREATE TABLE `cruise_port` (
  `cruise_id` int(11) NOT NULL,
  `port_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`id`, `name`, `country`) VALUES
(15, 'New York', 'New York'),
(16, 'Coodly', 'Canada'),
(17, 'Germo', 'Germany'),
(18, 'Micco', 'Morocco'),
(19, 'qwerty', 'qwerty'),
(20, 'qwerty', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_price` float NOT NULL,
  `cruise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`, `room_type_id`, `ship_id`) VALUES
(1, 10, 1, 1),
(2, 11, 3, 2),
(3, 15, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `name`, `price`, `capacity`) VALUES
(1, 'solo', 100, 1),
(2, '2_people', 150.8, 2),
(3, 'family', 300.5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `rooms_number` int(11) NOT NULL,
  `places_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`id`, `name`, `rooms_number`, `places_number`) VALUES
(1, 'ship1', 12, 4),
(2, 'ship2', 20, 8),
(3, 'ship3', 10, 20),
(4, 'Luffy Ship', 40, 90),
(5, 'ship1', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `cruise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `cruise_id`) VALUES
(6, 'Abdelmalek', 'Achkif', 'mhkif@gmail.com', '$2y$10$oqvzuQJIH3eg8lcAKlQO9uQPc.WyIjTMG', NULL),
(7, 'Aziz', 'Harkati', 'azizharkati@gmail.com', '$2y$10$UJ8hDxA3whjg9JKnXXpx4u1HhEy.xaK5r', NULL),
(8, 'asiyya', 'elbouhali', 'asiyya@gmail.com', '$2y$10$ttUOhitEk9viI0zrDfdFW.5kWnexZLyqN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruise`
--
ALTER TABLE `cruise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ship_id` (`ship_id`),
  ADD KEY `starting_port` (`starting_port`);

--
-- Indexes for table `cruise_port`
--
ALTER TABLE `cruise_port`
  ADD PRIMARY KEY (`cruise_id`,`port_id`),
  ADD KEY `cruise_port_ibfk_2` (`port_id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cruise_id` (`cruise_id`),
  ADD KEY `reservation_ibfk_2` (`room_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_ibfk_1` (`room_type_id`),
  ADD KEY `ship_id` (`ship_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cruise_id` (`cruise_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cruise`
--
ALTER TABLE `cruise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cruise`
--
ALTER TABLE `cruise`
  ADD CONSTRAINT `cruise_ibfk_1` FOREIGN KEY (`ship_id`) REFERENCES `ship` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cruise_ibfk_2` FOREIGN KEY (`starting_port`) REFERENCES `port` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cruise_port`
--
ALTER TABLE `cruise_port`
  ADD CONSTRAINT `cruise_port_ibfk_1` FOREIGN KEY (`cruise_id`) REFERENCES `cruise` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cruise_port_ibfk_2` FOREIGN KEY (`port_id`) REFERENCES `port` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`cruise_id`) REFERENCES `cruise` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`ship_id`) REFERENCES `ship` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cruise_id`) REFERENCES `cruise` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
