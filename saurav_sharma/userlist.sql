-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saurav_sharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `exp` int(4) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `email`, `gender`, `contact`, `address`, `exp`, `dept`, `edu`, `image`, `hobby`) VALUES
(3, 'Patience Mcgee', 'beqigy@mailinator.com', 'female', 'Sed ad illum error ', 'Ad cum hic dolor qui', 84, 'php', 'be', 'images/1718182646superhero.jpg', 'cooking,reading'),
(4, 'Price Evans', 'dysiku@mailinator.com', 'male', 'Eos consectetur quos', 'Nisi laudantium sed', 80, 'android', 'bca', 'images/1718182677movie_bg.jpg', 'cricket,dance,hiking,photography,surfing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
