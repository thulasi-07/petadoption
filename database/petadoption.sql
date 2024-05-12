-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 08:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `petcart`
--

CREATE TABLE `petcart` (
  `petcartid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `petid` int(11) NOT NULL,
  `dateadded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petid` int(11) NOT NULL,
  `petname` varchar(40) NOT NULL,
  `species` varchar(25) NOT NULL,
  `breed` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `Image` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `petstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petid`, `petname`, `species`, `breed`, `age`, `gender`, `description`, `Image`, `user_id`, `petstatus`) VALUES
(8, 'joy', 'species', 'german', '3', 'male', 'this is a pet details box.', 'uploads/backgroundimg.jpeg', 1, 'false'),
(9, 'joyroy', 'speciesss', 'dog breed', '5', 'female', 'this is a dog of breed dog.', 'uploads/dog.jpg', 1, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `u_email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `u_email`, `password`) VALUES
(1, 'manish', 'manish@gmail.com', 'password'),
(2, 'anish', 'anish@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petcart`
--
ALTER TABLE `petcart`
  ADD PRIMARY KEY (`petcartid`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petcart`
--
ALTER TABLE `petcart`
  MODIFY `petcartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
