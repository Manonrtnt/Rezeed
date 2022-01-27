-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2022 at 10:21 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `name_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `first_name_user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `login_user` varchar(50) DEFAULT NULL,
  `pw_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(75) NOT NULL,
  `preferences_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `first_name_user`, `login_user`, `pw_user`, `email_user`, `preferences_user`) VALUES
(3, 'azfazfazf', 'azfazfazf', 'root', 'root', 'azfazf@aazf.co', 'classique'),
(4, 'azfazf', 'azfazfazf', 'azfazf', 'azfazf%Zf15', 'azfazf@azfazf.co', 'classique'),
(5, 'azfazfazf', 'azfazfazf', 'rootazfazf', '730cdaa00b22cfc4593b167358c239190bf128f2', 'cava@ar.com', 'classique'),
(6, 'azfazf', 'azfazfa', 'root', '6b57f57d00791bf8febc64173fa13ea9a5de28d6', 'azfaz@xn--f-vfa.co', 'classique'),
(7, 'zafza', 'azvaz', 'rootazv', 'ed699ecf62e098440d41ff019210a6f49511ae75', 'azfazf@azf.co', 'classique'),
(8, 'zafza', 'azvaz', 'rootazv', 'ed699ecf62e098440d41ff019210a6f49511ae75', 'azfazf@azf.co', 'classique'),
(9, 'aaaaaaaaaaaa', 'azvaz', 'rootazv', 'ed699ecf62e098440d41ff019210a6f49511ae75', 'azfazf@azf.co', 'classique');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
