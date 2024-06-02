-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 02, 2024 at 01:27 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waqqly`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `jsonData` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `jsonData`) VALUES
(1, '{\"age\": 30, \"city\": \"New York\", \"name\": \"John Doe\", \"email\": \"john.doe@example.com\", \"address\": {\"zip\": \"10001\", \"city\": \"New York\", \"street\": \"123 Main St\", \"country\": \"USA\"}, \"interests\": [\"reading\", \"traveling\", \"cooking\"], \"is_verified\": true}'),
(2, '{\"name\": \"Brad Bradley\", \"email\": \"brad@brad.com\", \"dogAge\": [\"6\"], \"dogName\": [\"Scruff\"], \"dogBreed\": [\"German Shepherd\"], \"location\": \"Bradford\", \"password\": \"brad\"}'),
(3, '{\"name\": \"Bradley\", \"email\": \"heheh@gmail.com\", \"dogAge\": [\"6\", \"\"], \"dogName\": [\"Scruff\", \"\"], \"dogBreed\": [\"German Shepherd\", \"\"], \"location\": \"Bradford\", \"password\": \"hehehe\"}'),
(4, '{\"name\": \"Gigi Bebe\", \"email\": \"nonono@gmail.com\", \"dogAge\": [\"\", \"4\"], \"dogName\": [\"\", \"Colin\"], \"dogBreed\": [\"\", \"Mongrel\"], \"location\": \"London\", \"password\": \"no\"}');

-- --------------------------------------------------------

--
-- Table structure for table `walkers`
--

CREATE TABLE `walkers` (
  `id` int(11) NOT NULL,
  `jsonData` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `walkers`
--

INSERT INTO `walkers` (`id`, `jsonData`) VALUES
(1, '{\"name\": \"hi\", \"email\": \"ness.korin@gmail.com\", \"location\": \"hi\", \"password\": \"hi\", \"experience\": \"49\", \"availability\": \"20 hours\", \"insuredRadios\": \"option1\"}'),
(2, '{\"name\": \"hu\", \"email\": \"ness.korin@gmail.com\", \"location\": \"hu\", \"password\": \"hu\", \"experience\": \"49\", \"availability\": \"20 hours\", \"insuredRadios\": \"option1\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walkers`
--
ALTER TABLE `walkers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `walkers`
--
ALTER TABLE `walkers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
