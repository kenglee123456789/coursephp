-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 03:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 1 COMMENT '1:user;2admin;3:teacher;4:parents',
  `is_delete` int(1) NOT NULL DEFAULT 0,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `is_delete`, `timestamps`) VALUES
(1, NULL, NULL, 'admin@gmail.com', '123456', 1, 1, '2024-03-18 19:08:56'),
(2, NULL, NULL, 'kang@gmail.com', '123456', 2, 1, '2024-03-18 19:10:24'),
(3, NULL, NULL, 'kangserpobtsuasvaaj@', '25f9e794323b453885f5', 2, 1, '2024-03-20 18:32:32'),
(4, NULL, NULL, 'admin@gmail.com', 'e10adc3949ba59abbe56', 2, 1, '2024-03-20 18:35:28'),
(5, NULL, NULL, '', 'd41d8cd98f00b204e980', 2, 1, '2024-03-20 18:36:27'),
(6, NULL, NULL, 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 0, '2024-03-20 19:29:40'),
(7, NULL, NULL, 'admindfgsf@gmail.com', '1ba46e06aa73bbe8ef92', 2, 1, '2024-03-25 18:27:47'),
(8, NULL, NULL, 'english.academia30@g', 'e10adc3949ba59abbe56', 2, 1, '2024-03-25 19:24:35'),
(9, NULL, NULL, 'admin@gmail.com', 'e10adc3949ba59abbe56', 2, 1, '2024-03-26 17:54:27'),
(10, NULL, NULL, 'admin2@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 0, '2024-04-02 18:30:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
