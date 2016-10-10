-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 03:54 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citybasedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(8) NOT NULL,
  `title` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imagepath` varchar(70) NOT NULL,
  `capacity` int(5) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `city`, `country`, `description`, `imagepath`, `capacity`, `price`, `type`) VALUES
(1, '3 Winston Apartments', 'London', 'England', 'This luxury Knightsbridge apartment boasts a stellar location, modern furnishings and stunning views over the Thames.', 'ahfc10102016.jpg', 4, 280, 'Apartment'),
(2, '6 Elsborough Mount', 'London', 'England', 'Situated at the North end of Elsborough, this modern apartment is the perfect base for anyone wanting a high-quality yet affordable base in the North London area.', 'rkxo10102016.jpg', 2, 180, 'Apartment'),
(3, 'Richo Park Penthouse', 'Miami', 'United States', 'This stunning penthouse provides amazing views over downtown Miami. The penthouse features 2 bathrooms, a master and guest bedroom, as well as a kitchen and lounge.', 'rlpz11102016.jpg', 4, 375, 'Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`) VALUES
(1, 'sim_lees@hotmail.co.uk', '$2y$10$EzkH7VtgHE1YMjTprGAKE.SOx0SryIYD/pte51LgJxsUFCbQbJpSy', 'Simeon', 'Lees');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
