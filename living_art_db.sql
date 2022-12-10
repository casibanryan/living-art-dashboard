-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 02:32 AM
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
-- Database: `living_art_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `content`, `role`, `created_at`, `updated_at`) VALUES
(1, 31, 'Changed user status', 1, '2022-12-08 23:14:30', '0000-00-00 00:00:00'),
(2, 32, 'Changed user status', 1, '2022-12-08 23:45:33', '0000-00-00 00:00:00'),
(3, 32, 'Changed user status', 1, '2022-12-08 23:45:36', '0000-00-00 00:00:00'),
(4, 16, 'Changed user status', 1, '2022-12-08 23:50:50', '0000-00-00 00:00:00'),
(5, 16, 'Changed user status', 1, '2022-12-08 23:50:52', '0000-00-00 00:00:00'),
(6, 32, 'Changed user status', 1, '2022-12-08 23:51:36', '0000-00-00 00:00:00'),
(7, 32, 'Changed user status', 1, '2022-12-08 23:51:39', '0000-00-00 00:00:00'),
(8, 33, 'Changed user status', 1, '2022-12-08 23:51:46', '0000-00-00 00:00:00'),
(9, 33, 'Changed user status', 1, '2022-12-08 23:51:48', '0000-00-00 00:00:00'),
(10, 34, 'Delete user', 1, '2022-12-08 23:54:26', '0000-00-00 00:00:00'),
(11, 32, 'Changed user status', 1, '2022-12-09 00:00:06', '0000-00-00 00:00:00'),
(12, 17, 'Changed user status', 1, '2022-12-09 00:00:40', '0000-00-00 00:00:00'),
(13, 35, 'Changed user status', 1, '2022-12-09 00:02:55', '0000-00-00 00:00:00'),
(14, 36, 'Delete user', 1, '2022-12-09 00:06:24', '0000-00-00 00:00:00'),
(15, 38, 'Delete user', 1, '2022-12-09 12:26:14', '0000-00-00 00:00:00'),
(16, 39, 'Delete user', 1, '2022-12-09 12:34:42', '0000-00-00 00:00:00'),
(17, 38, 'Changed user status', 1, '2022-12-09 15:02:59', '0000-00-00 00:00:00'),
(18, 38, 'Changed user status', 1, '2022-12-09 15:03:00', '0000-00-00 00:00:00'),
(19, 40, 'Changed user status', 1, '2022-12-09 16:07:48', '0000-00-00 00:00:00'),
(20, 38, 'Unlocked user', 1, '2022-12-09 16:40:18', '0000-00-00 00:00:00'),
(22, 35, 'Unlocked user', 1, '2022-12-09 16:57:28', '0000-00-00 00:00:00'),
(23, 36, 'Unlocked user', 1, '2022-12-09 17:03:05', '0000-00-00 00:00:00'),
(24, 32, 'Unlocked user', 1, '2022-12-09 17:03:45', '0000-00-00 00:00:00'),
(25, 38, 'Delete user', 1, '2022-12-09 17:52:35', '0000-00-00 00:00:00'),
(26, 36, 'Delete user', 1, '2022-12-09 17:52:48', '0000-00-00 00:00:00'),
(27, 34, 'Delete user', 1, '2022-12-09 17:53:14', '0000-00-00 00:00:00'),
(28, 40, 'Update user', 1, '2022-12-09 23:43:28', '0000-00-00 00:00:00'),
(29, 40, 'Update user', 1, '2022-12-09 23:44:25', '0000-00-00 00:00:00'),
(30, 40, 'Update user', 1, '2022-12-09 23:44:34', '0000-00-00 00:00:00'),
(31, 40, 'Update user', 1, '2022-12-10 00:05:48', '0000-00-00 00:00:00'),
(32, 33, 'Delete user', 1, '2022-12-10 00:06:28', '0000-00-00 00:00:00'),
(33, 37, 'Changed user status', 1, '2022-12-10 00:15:04', '0000-00-00 00:00:00'),
(34, 37, 'Update user', 1, '2022-12-10 00:21:06', '0000-00-00 00:00:00'),
(35, 37, 'Update user', 1, '2022-12-10 00:21:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `counterlock` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `profile` text DEFAULT 'default.png',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `counterlock`, `status`, `is_deleted`, `profile`, `created_at`, `updated_at`) VALUES
(10, 'Restituto', 'Ochea', 'admin@yahoo.com', '$2y$10$Z.SinykJSDoUD9DzV8uLKeKm3oOh9CAz0bJu8da5Ir8.TKYTtISpW', 1, 0, 1, 0, 'Restituto-Ochea-360.jpg', '2022-12-07 18:21:53', '2022-12-09 16:01:07'),
(16, 'jan', 'Doe', 'jane_doe@yahoo.com', '$2y$10$hGtI4wmxOKxPjOw0DPM5bO0rbh5KoPsJlR6l/5Hb1Zfm0oPJNY9Ey', 0, 1, 1, 0, 'default.png', '2022-12-08 14:44:44', '2022-12-08 23:50:52'),
(17, 'bea', 'ochea', 'beaochea@yahoo.com', '$2y$10$XqM4Ro/sngdu.Z7rylDGe.dG3klkJS2sxX/ntuO8ryAP8wtUKqayK', 0, 0, 1, 0, 'default.png', '2022-12-08 15:16:15', '2022-12-09 00:00:40'),
(29, 'anjemar', 'ochea', 'anje@yahoo.com', '$2y$10$w/t15cRKiUGiky5aIJGbd.fIvS64.X4n4EIjJhyhbshLEcqWKNHca', 0, 0, 0, 1, 'default.png', '2022-12-08 22:04:05', '2022-12-08 22:04:10'),
(30, 'christian', 'dave', 'chanix@yahoo.com', '$2y$10$7n7DnNjxoH7ol3JwUWWqyePUGngySYN1PMS7G1OLrnKv/2uvqJKv.', 0, 1, 0, 0, 'default.png', '2022-12-08 22:45:16', '2022-12-08 22:49:32'),
(31, 'dovey', 'ochea', 'dovey@yahoo.com', '$2y$10$oeDZ5/Xwx3nCCkmQsISLzOEtxi2yuIgl7XiRLqrXx2vEKDtCKcChe', 0, 1, 1, 0, 'default.png', '2022-12-08 22:47:38', '2022-12-08 23:14:30'),
(32, 'karylle mae', 'miano', 'karylle@yahoo.com', '$2y$10$ZL/adriknt9IOPVrnxtZbu/gzJtY4GI5zoYuBa7fR/opGuiIJdPyu', 0, 0, 0, 0, 'default.png', '2022-12-08 22:50:08', '2022-12-09 17:03:45'),
(33, 'ninz', 'obando', 'ninz@gmail.com', '$2y$10$3GbUDnmRP/aYZ0WmRKNEUeBReEIa4AbA5bjbF99/tU/KyZWiM5IiW', 0, 1, 1, 1, 'default.png', '2022-12-08 22:52:52', '2022-12-10 00:06:28'),
(34, 'dsd', 'dsdsd', 'dsds@yahoo.com', '$2y$10$iNYbTz2llyer7Mk8/a2pJ.o09roH5KEzV4rsF9FIEAMjPvNIEDATi', 0, 1, 0, 1, 'default.png', '2022-12-08 23:54:21', '2022-12-09 17:53:14'),
(35, 'renan', 'ochea', 'renan@yahoo.com', '$2y$10$cVO3mqvCnZAyE0QvUdpVCek7mnFlBVhtEcQcw9LRy7qjEGMPfWnrm$2y$10$Z.SinykJSDoUD9DzV8uLKeKm3oOh9CAz0bJu8da5Ir8.TKYTtISpW', 0, 0, 1, 0, 'default.png', '2022-12-09 00:01:22', '2022-12-09 16:57:28'),
(36, 'usertest', 'usertest', 'test@yahoo.com', '$2y$10$RZ3T7qYQjt1Z2.ivlTJrI.uyIOLAu1HkWh3JK1zeTNs0ObSJ478TK', 0, 0, 1, 1, 'default.png', '2022-12-09 00:04:08', '2022-12-09 17:52:48'),
(37, 'killua', 'Zoldick', 'killua_zoldick@yahoo.com', '$2y$10$ca8Bxs.Vnv52UNQz9LJHNOgK5jCYOliS5q635dCqpu8QVvGfATGKC', 1, 1, 1, 0, 'default.png', '2022-12-09 12:24:13', '2022-12-10 00:21:11'),
(38, 'elsa', 'shane', 'elsa@yahoo.com', '$2y$10$iqanZ85AYUugGPXmBzR0PuqzS4IetgvvbHIeEXdK5PQxbqHtQaTCG', 0, 0, 0, 1, 'default.png', '2022-12-09 12:26:09', '2022-12-09 17:52:35'),
(39, 'test', 'test', 'tesdtsdt@yahoo.com', '$2y$10$ERKI18QPZPshkc4VoWaGMOQz03JIIkmelrhOyY.XVrhQJD3bji17i', 0, 0, 0, 1, 'default.png', '2022-12-09 12:28:17', '2022-12-09 12:34:42'),
(40, 'Melyn', 'Enot', 'melyn@yahoo.com', '$2y$10$8Wq4VzJaZbPTE6Su6f0c4.lut.Gi.PHwmNfX6Mf/rl2MiYqI1wPW.', 0, 0, 1, 0, 'Melyn-Enot-123.jpg', '2022-12-09 16:07:45', '2022-12-10 00:05:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
