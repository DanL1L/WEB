-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 04:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabinet_personal`
--

CREATE TABLE `cabinet_personal` (
  `ID_Utilizator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(999) NOT NULL,
  `lname` varchar(999) NOT NULL,
  `username` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`) VALUES
(8, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$04$NLkk0PIlCUVh3uFZcK1vWu1PE/.cYI0QZvohkH5GYcxsaRI3xBWk6'),
(10, 'test', 'testare', 'testul', 'test@gmail.com', '$2y$04$/SvNsiOTuDHRUqjWeSCNz.DEqI8jRPfwzTb7rX.e/pNjlQeLhHo9W'),
(12, 'qazwsx', 'qazwsx', 'qazwsx', 'qazwsx@gmail.com', '$2y$04$pTpztUWHDg79x5kdQrEs/eVVYrwyxnEuuqHwqSEAAUOzDCluK1nqy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet_personal`
--
ALTER TABLE `cabinet_personal`
  ADD PRIMARY KEY (`ID_Utilizator`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabinet_personal`
--
ALTER TABLE `cabinet_personal`
  MODIFY `ID_Utilizator` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
