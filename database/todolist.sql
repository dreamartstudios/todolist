-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 05:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `done_todo`
--

CREATE TABLE `done_todo` (
  `id` int(11) NOT NULL,
  `done_title` varchar(455) NOT NULL,
  `done_date` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `done_todo`
--

INSERT INTO `done_todo` (`id`, `done_title`, `done_date`) VALUES
(1, 'communication', '19-Mar-2021');

-- --------------------------------------------------------

--
-- Table structure for table `to_do`
--

CREATE TABLE `to_do` (
  `id` int(11) NOT NULL,
  `todo_title` varchar(455) NOT NULL,
  `todo_date` varchar(30) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `to_do`
--

INSERT INTO `to_do` (`id`, `todo_title`, `todo_date`) VALUES
(11, 'communication', '19-Mar-2021'),
(12, 'planning', '19-Mar-2021'),
(13, 'Modeling', '19-Mar-2021'),
(14, 'construction ', '19-Mar-2021');

-- --------------------------------------------------------

--
-- Table structure for table `working_todo`
--

CREATE TABLE `working_todo` (
  `id` int(11) NOT NULL,
  `working_title` varchar(455) NOT NULL,
  `work_date` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `working_todo`
--

INSERT INTO `working_todo` (`id`, `working_title`, `work_date`) VALUES
(2, 'communication on progress', '19-Mar-2021'),
(3, 'planning ', '19-Mar-2021'),
(4, 'modeling', '19-Mar-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `done_todo`
--
ALTER TABLE `done_todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_do`
--
ALTER TABLE `to_do`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_todo`
--
ALTER TABLE `working_todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `done_todo`
--
ALTER TABLE `done_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `to_do`
--
ALTER TABLE `to_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `working_todo`
--
ALTER TABLE `working_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
