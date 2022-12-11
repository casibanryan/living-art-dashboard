-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 09:24 AM
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
(35, 37, 'Update user', 1, '2022-12-10 00:21:11', '0000-00-00 00:00:00'),
(36, 37, 'Changed user status', 1, '2022-12-11 12:25:14', '0000-00-00 00:00:00'),
(37, 40, 'Changed user status', 1, '2022-12-11 12:27:29', '0000-00-00 00:00:00'),
(38, 40, 'Changed user status', 1, '2022-12-11 12:27:35', '0000-00-00 00:00:00'),
(39, 40, 'Changed user status', 1, '2022-12-11 12:31:19', '0000-00-00 00:00:00'),
(40, 40, 'Changed user status', 1, '2022-12-11 12:33:09', '0000-00-00 00:00:00'),
(41, 30, 'Changed user status', 1, '2022-12-11 12:42:15', '0000-00-00 00:00:00'),
(42, 40, 'Changed user status', 1, '2022-12-11 13:01:11', '0000-00-00 00:00:00'),
(43, 35, 'Changed user status', 1, '2022-12-11 13:01:13', '0000-00-00 00:00:00'),
(44, 37, 'Changed user status', 1, '2022-12-11 13:01:16', '0000-00-00 00:00:00'),
(45, 40, 'Changed user status', 1, '2022-12-11 13:01:18', '0000-00-00 00:00:00'),
(46, 35, 'Changed user status', 1, '2022-12-11 13:01:20', '0000-00-00 00:00:00'),
(47, 37, 'Changed user status', 1, '2022-12-11 13:01:22', '0000-00-00 00:00:00'),
(48, 55, 'Delete user', 1, '2022-12-11 14:17:54', '0000-00-00 00:00:00'),
(49, 54, 'Delete user', 1, '2022-12-11 14:17:58', '0000-00-00 00:00:00'),
(50, 53, 'Delete user', 1, '2022-12-11 14:18:01', '0000-00-00 00:00:00'),
(51, 52, 'Delete user', 1, '2022-12-11 14:18:07', '0000-00-00 00:00:00'),
(52, 51, 'Delete user', 1, '2022-12-11 14:18:10', '0000-00-00 00:00:00'),
(53, 50, 'Delete user', 1, '2022-12-11 14:18:12', '0000-00-00 00:00:00'),
(54, 49, 'Delete user', 1, '2022-12-11 14:18:15', '0000-00-00 00:00:00'),
(55, 48, 'Delete user', 1, '2022-12-11 14:18:18', '0000-00-00 00:00:00'),
(56, 47, 'Delete user', 1, '2022-12-11 14:18:21', '0000-00-00 00:00:00'),
(57, 46, 'Delete user', 1, '2022-12-11 14:18:24', '0000-00-00 00:00:00'),
(58, 45, 'Delete user', 1, '2022-12-11 14:19:32', '0000-00-00 00:00:00'),
(59, 44, 'Delete user', 1, '2022-12-11 14:19:34', '0000-00-00 00:00:00'),
(60, 43, 'Delete user', 1, '2022-12-11 14:19:38', '0000-00-00 00:00:00'),
(61, 42, 'Delete user', 1, '2022-12-11 14:19:41', '0000-00-00 00:00:00'),
(62, 41, 'Delete user', 1, '2022-12-11 14:19:44', '0000-00-00 00:00:00'),
(63, 40, 'Changed user status', 1, '2022-12-11 14:19:54', '0000-00-00 00:00:00'),
(64, 40, 'Changed user status', 1, '2022-12-11 14:19:56', '0000-00-00 00:00:00'),
(65, 40, 'Changed user status', 1, '2022-12-11 14:39:29', '0000-00-00 00:00:00'),
(66, 40, 'Changed user status', 1, '2022-12-11 14:39:32', '0000-00-00 00:00:00'),
(67, 40, 'Changed user status', 1, '2022-12-11 14:42:38', '0000-00-00 00:00:00'),
(68, 40, 'Changed user status', 1, '2022-12-11 14:43:15', '0000-00-00 00:00:00'),
(69, 40, 'Changed user status', 1, '2022-12-11 14:43:33', '0000-00-00 00:00:00'),
(70, 37, 'Changed user status', 1, '2022-12-11 14:46:19', '0000-00-00 00:00:00'),
(71, 37, 'Changed user status', 1, '2022-12-11 14:48:09', '0000-00-00 00:00:00'),
(72, 32, 'Changed user status', 1, '2022-12-11 14:48:12', '0000-00-00 00:00:00'),
(73, 37, 'Changed user status', 1, '2022-12-11 14:48:49', '0000-00-00 00:00:00'),
(74, 37, 'Changed user status', 1, '2022-12-11 14:49:33', '0000-00-00 00:00:00'),
(75, 40, 'Changed user status', 1, '2022-12-11 14:53:47', '0000-00-00 00:00:00'),
(76, 37, 'Changed user status', 1, '2022-12-11 14:54:08', '0000-00-00 00:00:00'),
(77, 40, 'Changed user status', 1, '2022-12-11 14:54:24', '0000-00-00 00:00:00'),
(78, 40, 'Changed user status', 1, '2022-12-11 14:57:25', '0000-00-00 00:00:00'),
(79, 40, 'Changed user status', 1, '2022-12-11 14:57:30', '0000-00-00 00:00:00'),
(80, 40, 'Changed user status', 1, '2022-12-11 14:58:29', '0000-00-00 00:00:00'),
(81, 40, 'Changed user status', 1, '2022-12-11 14:59:45', '0000-00-00 00:00:00'),
(82, 40, 'Changed user status', 1, '2022-12-11 15:00:14', '0000-00-00 00:00:00'),
(83, 40, 'Changed user status', 1, '2022-12-11 15:00:28', '0000-00-00 00:00:00'),
(84, 37, 'Changed user status', 1, '2022-12-11 15:00:59', '0000-00-00 00:00:00'),
(85, 40, 'Changed user status', 1, '2022-12-11 15:01:45', '0000-00-00 00:00:00'),
(86, 40, 'Changed user status', 1, '2022-12-11 15:02:03', '0000-00-00 00:00:00'),
(87, 40, 'Changed user status', 1, '2022-12-11 15:02:17', '0000-00-00 00:00:00'),
(88, 40, 'Changed user status', 1, '2022-12-11 15:02:55', '0000-00-00 00:00:00'),
(89, 40, 'Changed user status', 1, '2022-12-11 15:03:27', '0000-00-00 00:00:00'),
(90, 40, 'Changed user status', 1, '2022-12-11 15:03:42', '0000-00-00 00:00:00'),
(91, 40, 'Changed user status', 1, '2022-12-11 15:04:22', '0000-00-00 00:00:00'),
(92, 40, 'Changed user status', 1, '2022-12-11 15:05:09', '0000-00-00 00:00:00'),
(93, 40, 'Changed user status', 1, '2022-12-11 15:05:21', '0000-00-00 00:00:00'),
(94, 40, 'Changed user status', 1, '2022-12-11 15:05:29', '0000-00-00 00:00:00'),
(95, 40, 'Changed user status', 1, '2022-12-11 15:05:59', '0000-00-00 00:00:00'),
(96, 40, 'Changed user status', 1, '2022-12-11 15:06:27', '0000-00-00 00:00:00'),
(97, 40, 'Changed user status', 1, '2022-12-11 15:06:40', '0000-00-00 00:00:00'),
(98, 40, 'Changed user status', 1, '2022-12-11 15:06:50', '0000-00-00 00:00:00'),
(99, 40, 'Changed user status', 1, '2022-12-11 15:07:41', '0000-00-00 00:00:00'),
(100, 40, 'Changed user status', 1, '2022-12-11 15:07:47', '0000-00-00 00:00:00'),
(101, 40, 'Changed user status', 1, '2022-12-11 15:08:04', '0000-00-00 00:00:00'),
(102, 40, 'Changed user status', 1, '2022-12-11 15:08:18', '0000-00-00 00:00:00'),
(103, 40, 'Changed user status', 1, '2022-12-11 15:09:07', '0000-00-00 00:00:00'),
(104, 40, 'Changed user status', 1, '2022-12-11 15:09:22', '0000-00-00 00:00:00'),
(105, 40, 'Changed user status', 1, '2022-12-11 15:10:37', '0000-00-00 00:00:00'),
(106, 40, 'Changed user status', 1, '2022-12-11 15:10:53', '0000-00-00 00:00:00'),
(107, 40, 'Changed user status', 1, '2022-12-11 15:11:06', '0000-00-00 00:00:00'),
(108, 40, 'Changed user status', 1, '2022-12-11 15:11:27', '0000-00-00 00:00:00'),
(109, 40, 'Changed user status', 1, '2022-12-11 15:11:38', '0000-00-00 00:00:00'),
(110, 40, 'Changed user status', 1, '2022-12-11 15:11:49', '0000-00-00 00:00:00'),
(111, 40, 'Changed user status', 1, '2022-12-11 15:12:01', '0000-00-00 00:00:00'),
(112, 40, 'Changed user status', 1, '2022-12-11 15:13:05', '0000-00-00 00:00:00'),
(113, 40, 'Changed user status', 1, '2022-12-11 15:13:08', '0000-00-00 00:00:00'),
(114, 40, 'Changed user status', 1, '2022-12-11 15:14:19', '0000-00-00 00:00:00'),
(115, 37, 'Changed user status', 1, '2022-12-11 15:14:31', '0000-00-00 00:00:00'),
(116, 40, 'Changed user status', 1, '2022-12-11 15:14:49', '0000-00-00 00:00:00'),
(117, 40, 'Changed user status', 1, '2022-12-11 15:15:28', '0000-00-00 00:00:00'),
(118, 40, 'Changed user status', 1, '2022-12-11 15:15:30', '0000-00-00 00:00:00'),
(119, 40, 'Changed user status', 1, '2022-12-11 15:16:24', '0000-00-00 00:00:00'),
(120, 40, 'Changed user status', 1, '2022-12-11 15:16:29', '0000-00-00 00:00:00'),
(121, 40, 'Changed user status', 1, '2022-12-11 15:16:58', '0000-00-00 00:00:00'),
(122, 40, 'Changed user status', 1, '2022-12-11 15:17:00', '0000-00-00 00:00:00'),
(123, 40, 'Changed user status', 1, '2022-12-11 15:17:20', '0000-00-00 00:00:00'),
(124, 40, 'Changed user status', 1, '2022-12-11 15:18:56', '0000-00-00 00:00:00'),
(125, 40, 'Changed user status', 1, '2022-12-11 15:19:05', '0000-00-00 00:00:00'),
(126, 40, 'Changed user status', 1, '2022-12-11 15:19:16', '0000-00-00 00:00:00'),
(127, 40, 'Changed user status', 1, '2022-12-11 15:19:46', '0000-00-00 00:00:00'),
(128, 40, 'Changed user status', 1, '2022-12-11 15:19:58', '0000-00-00 00:00:00'),
(129, 40, 'Changed user status', 1, '2022-12-11 15:20:21', '0000-00-00 00:00:00'),
(130, 40, 'Changed user status', 1, '2022-12-11 15:20:23', '0000-00-00 00:00:00'),
(131, 40, 'Changed user status', 1, '2022-12-11 15:20:37', '0000-00-00 00:00:00'),
(132, 40, 'Changed user status', 1, '2022-12-11 15:22:20', '0000-00-00 00:00:00'),
(133, 40, 'Changed user status', 1, '2022-12-11 15:22:24', '0000-00-00 00:00:00'),
(134, 40, 'Changed user status', 1, '2022-12-11 15:23:58', '0000-00-00 00:00:00'),
(135, 40, 'Changed user status', 1, '2022-12-11 15:24:43', '0000-00-00 00:00:00'),
(136, 40, 'Changed user status', 1, '2022-12-11 15:24:53', '0000-00-00 00:00:00'),
(137, 40, 'Changed user status', 1, '2022-12-11 15:26:00', '0000-00-00 00:00:00'),
(138, 40, 'Changed user status', 1, '2022-12-11 15:26:21', '0000-00-00 00:00:00'),
(139, 40, 'Changed user status', 1, '2022-12-11 15:28:02', '0000-00-00 00:00:00'),
(140, 40, 'Changed user status', 1, '2022-12-11 15:28:04', '0000-00-00 00:00:00'),
(141, 40, 'Changed user status', 1, '2022-12-11 15:28:14', '0000-00-00 00:00:00'),
(142, 40, 'Changed user status', 1, '2022-12-11 15:30:16', '0000-00-00 00:00:00'),
(143, 40, 'Changed user status', 1, '2022-12-11 15:30:28', '0000-00-00 00:00:00'),
(144, 40, 'Changed user status', 1, '2022-12-11 15:31:15', '0000-00-00 00:00:00'),
(145, 40, 'Changed user status', 1, '2022-12-11 15:31:26', '0000-00-00 00:00:00'),
(146, 40, 'Changed user status', 1, '2022-12-11 15:31:34', '0000-00-00 00:00:00'),
(147, 40, 'Changed user status', 1, '2022-12-11 15:31:38', '0000-00-00 00:00:00'),
(148, 40, 'Changed user status', 1, '2022-12-11 15:32:14', '0000-00-00 00:00:00'),
(149, 40, 'Changed user status', 1, '2022-12-11 15:32:18', '0000-00-00 00:00:00'),
(150, 40, 'Changed user status', 1, '2022-12-11 15:32:48', '0000-00-00 00:00:00'),
(151, 40, 'Changed user status', 1, '2022-12-11 15:33:06', '0000-00-00 00:00:00'),
(152, 35, 'Changed user status', 1, '2022-12-11 15:33:45', '0000-00-00 00:00:00'),
(153, 40, 'Changed user status', 1, '2022-12-11 15:34:07', '0000-00-00 00:00:00'),
(154, 35, 'Changed user status', 1, '2022-12-11 15:35:54', '0000-00-00 00:00:00'),
(155, 40, 'Changed user status', 1, '2022-12-11 15:36:17', '0000-00-00 00:00:00'),
(156, 40, 'Changed user status', 1, '2022-12-11 15:36:21', '0000-00-00 00:00:00'),
(157, 40, 'Changed user status', 1, '2022-12-11 15:36:29', '0000-00-00 00:00:00'),
(158, 40, 'Changed user status', 1, '2022-12-11 15:36:32', '0000-00-00 00:00:00'),
(159, 40, 'Changed user status', 1, '2022-12-11 15:36:42', '0000-00-00 00:00:00'),
(160, 40, 'Changed user status', 1, '2022-12-11 15:36:44', '0000-00-00 00:00:00'),
(161, 40, 'Changed user status', 1, '2022-12-11 15:36:58', '0000-00-00 00:00:00'),
(162, 40, 'Changed user status', 1, '2022-12-11 15:37:14', '0000-00-00 00:00:00'),
(163, 40, 'Changed user status', 1, '2022-12-11 15:37:47', '0000-00-00 00:00:00'),
(164, 40, 'Changed user status', 1, '2022-12-11 15:37:58', '0000-00-00 00:00:00'),
(165, 40, 'Changed user status', 1, '2022-12-11 15:38:13', '0000-00-00 00:00:00'),
(166, 40, 'Changed user status', 1, '2022-12-11 15:38:15', '0000-00-00 00:00:00'),
(167, 40, 'Changed user status', 1, '2022-12-11 15:38:29', '0000-00-00 00:00:00'),
(168, 40, 'Changed user status', 1, '2022-12-11 15:40:21', '0000-00-00 00:00:00'),
(169, 40, 'Changed user status', 1, '2022-12-11 15:41:52', '0000-00-00 00:00:00'),
(170, 40, 'Changed user status', 1, '2022-12-11 15:42:25', '0000-00-00 00:00:00'),
(171, 40, 'Changed user status', 1, '2022-12-11 15:43:14', '0000-00-00 00:00:00'),
(172, 40, 'Changed user status', 1, '2022-12-11 15:43:37', '0000-00-00 00:00:00'),
(173, 40, 'Changed user status', 1, '2022-12-11 15:44:33', '0000-00-00 00:00:00'),
(174, 40, 'Changed user status', 1, '2022-12-11 15:45:41', '0000-00-00 00:00:00'),
(175, 40, 'Changed user status', 1, '2022-12-11 15:46:41', '0000-00-00 00:00:00'),
(176, 40, 'Changed user status', 1, '2022-12-11 15:47:02', '0000-00-00 00:00:00'),
(177, 40, 'Changed user status', 1, '2022-12-11 15:47:38', '0000-00-00 00:00:00'),
(178, 40, 'Changed user status', 1, '2022-12-11 15:47:49', '0000-00-00 00:00:00'),
(179, 40, 'Changed user status', 1, '2022-12-11 15:48:04', '0000-00-00 00:00:00'),
(180, 40, 'Changed user status', 1, '2022-12-11 15:48:14', '0000-00-00 00:00:00'),
(181, 40, 'Changed user status', 1, '2022-12-11 15:48:37', '0000-00-00 00:00:00'),
(182, 40, 'Changed user status', 1, '2022-12-11 15:48:56', '0000-00-00 00:00:00'),
(183, 40, 'Changed user status', 1, '2022-12-11 15:49:16', '0000-00-00 00:00:00'),
(184, 40, 'Changed user status', 1, '2022-12-11 15:50:10', '0000-00-00 00:00:00'),
(185, 40, 'Changed user status', 1, '2022-12-11 15:50:32', '0000-00-00 00:00:00'),
(186, 40, 'Changed user status', 1, '2022-12-11 15:50:57', '0000-00-00 00:00:00'),
(187, 40, 'Changed user status', 1, '2022-12-11 15:51:19', '0000-00-00 00:00:00'),
(188, 40, 'Changed user status', 1, '2022-12-11 15:51:59', '0000-00-00 00:00:00'),
(189, 40, 'Changed user status', 1, '2022-12-11 15:52:15', '0000-00-00 00:00:00'),
(190, 40, 'Changed user status', 1, '2022-12-11 15:53:02', '0000-00-00 00:00:00'),
(191, 40, 'Changed user status', 1, '2022-12-11 15:53:15', '0000-00-00 00:00:00'),
(192, 40, 'Changed user status', 1, '2022-12-11 15:53:39', '0000-00-00 00:00:00'),
(193, 40, 'Changed user status', 1, '2022-12-11 15:54:24', '0000-00-00 00:00:00'),
(194, 40, 'Changed user status', 1, '2022-12-11 15:54:38', '0000-00-00 00:00:00'),
(195, 40, 'Changed user status', 1, '2022-12-11 15:58:09', '0000-00-00 00:00:00'),
(196, 56, 'Delete user', 1, '2022-12-11 16:00:51', '0000-00-00 00:00:00'),
(197, 40, 'Changed user status', 1, '2022-12-11 16:01:16', '0000-00-00 00:00:00'),
(198, 40, 'Changed user status', 1, '2022-12-11 16:01:20', '0000-00-00 00:00:00'),
(199, 40, 'Changed user status', 1, '2022-12-11 16:01:21', '0000-00-00 00:00:00'),
(200, 40, 'Update user', 1, '2022-12-11 16:03:32', '0000-00-00 00:00:00'),
(201, 40, 'Changed user status', 1, '2022-12-11 16:04:36', '0000-00-00 00:00:00'),
(202, 40, 'Changed user status', 1, '2022-12-11 16:07:33', '0000-00-00 00:00:00'),
(203, 57, 'Changed user status', 1, '2022-12-11 16:12:53', '0000-00-00 00:00:00'),
(204, 57, 'Changed user status', 1, '2022-12-11 16:12:55', '0000-00-00 00:00:00');

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
  `status` tinyint(1) NOT NULL DEFAULT 1,
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
(30, 'christian', 'dave', 'chanix@yahoo.com', '$2y$10$7n7DnNjxoH7ol3JwUWWqyePUGngySYN1PMS7G1OLrnKv/2uvqJKv.', 0, 1, 1, 0, 'default.png', '2022-12-08 22:45:16', '2022-12-11 12:42:15'),
(31, 'dovey', 'ochea', 'dovey@yahoo.com', '$2y$10$oeDZ5/Xwx3nCCkmQsISLzOEtxi2yuIgl7XiRLqrXx2vEKDtCKcChe', 0, 1, 1, 0, 'default.png', '2022-12-08 22:47:38', '2022-12-08 23:14:30'),
(32, 'karylle mae', 'miano', 'karylle@yahoo.com', '$2y$10$ZL/adriknt9IOPVrnxtZbu/gzJtY4GI5zoYuBa7fR/opGuiIJdPyu', 0, 0, 1, 0, 'default.png', '2022-12-08 22:50:08', '2022-12-11 14:48:12'),
(33, 'ninz', 'obando', 'ninz@gmail.com', '$2y$10$3GbUDnmRP/aYZ0WmRKNEUeBReEIa4AbA5bjbF99/tU/KyZWiM5IiW', 0, 1, 1, 1, 'default.png', '2022-12-08 22:52:52', '2022-12-10 00:06:28'),
(34, 'dsd', 'dsdsd', 'dsds@yahoo.com', '$2y$10$iNYbTz2llyer7Mk8/a2pJ.o09roH5KEzV4rsF9FIEAMjPvNIEDATi', 0, 1, 0, 1, 'default.png', '2022-12-08 23:54:21', '2022-12-09 17:53:14'),
(35, 'renan', 'ochea', 'renan@yahoo.com', '$2y$10$cVO3mqvCnZAyE0QvUdpVCek7mnFlBVhtEcQcw9LRy7qjEGMPfWnrm$2y$10$Z.SinykJSDoUD9DzV8uLKeKm3oOh9CAz0bJu8da5Ir8.TKYTtISpW', 0, 0, 1, 0, 'default.png', '2022-12-09 00:01:22', '2022-12-11 15:35:54'),
(36, 'usertest', 'usertest', 'test@yahoo.com', '$2y$10$RZ3T7qYQjt1Z2.ivlTJrI.uyIOLAu1HkWh3JK1zeTNs0ObSJ478TK', 0, 0, 1, 1, 'default.png', '2022-12-09 00:04:08', '2022-12-09 17:52:48'),
(37, 'killua', 'Zoldick', 'killua_zoldick@yahoo.com', '$2y$10$ca8Bxs.Vnv52UNQz9LJHNOgK5jCYOliS5q635dCqpu8QVvGfATGKC', 1, 1, 1, 0, 'default.png', '2022-12-09 12:24:13', '2022-12-11 15:14:31'),
(38, 'elsa', 'shane', 'elsa@yahoo.com', '$2y$10$iqanZ85AYUugGPXmBzR0PuqzS4IetgvvbHIeEXdK5PQxbqHtQaTCG', 0, 0, 0, 1, 'default.png', '2022-12-09 12:26:09', '2022-12-09 17:52:35'),
(39, 'test', 'test', 'tesdtsdt@yahoo.com', '$2y$10$ERKI18QPZPshkc4VoWaGMOQz03JIIkmelrhOyY.XVrhQJD3bji17i', 0, 0, 0, 1, 'default.png', '2022-12-09 12:28:17', '2022-12-09 12:34:42'),
(40, 'Melyn', 'Enot', 'melyn@yahoo.com', '$2y$10$8Wq4VzJaZbPTE6Su6f0c4.lut.Gi.PHwmNfX6Mf/rl2MiYqI1wPW.', 0, 0, 1, 0, 'Melyn-Enot-123.jpg', '2022-12-09 16:07:45', '2022-12-11 16:07:33'),
(57, 'ninz', 'obando', 'ninz_obando@yahoo.com', '$2y$10$KVscUDJItcWmrCZr9t5TT.kTntRlx.glW3JyVpDYsr4/MqPWrqbQ.', 0, 0, 1, 0, 'ninz-obando-659.jpg', '2022-12-11 16:08:51', '2022-12-11 16:12:55'),
(58, 'Rodrigo', 'Duterte', 'rodrigo@gmail.com', '$2y$10$ZNX6S5gsqPKVpSrx0xNSk.exO20kc/vmT4Nenki2mqxCPRI9D4LgG', 0, 0, 1, 0, 'default.png', '2022-12-11 16:10:25', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
