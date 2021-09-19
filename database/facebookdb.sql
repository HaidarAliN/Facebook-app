-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 10:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `idq` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `connection_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`idq`, `user_id`, `connection_id`, `status`) VALUES
(15, 7, 1, 0),
(23, 9, 5, 2),
(24, 9, 6, 2),
(25, 9, 7, 2),
(26, 9, 3, 2),
(27, 1, 9, 1),
(28, 1, 6, 1),
(29, 1, 4, 1),
(30, 1, 3, 1),
(31, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `idn` int(11) NOT NULL,
  `notification` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_read` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`idn`, `notification`, `user_id`, `is_read`) VALUES
(1, 'haidar ali has sent you a friend request', 2, 0),
(2, 'rami ayash has accepted your friend request', 1, 0),
(11, 'yara makke has sent you a friend request', 1, 0),
(12, 'haidar ali has accepted your friend request', 3, 0),
(13, 'fatima hallal has sent you a friend request', 1, 0),
(14, 'haidar ali has accepted your friend request', 4, 0),
(15, 'haidar ali has sent you a friend request', 6, 0),
(16, 'ali fawaz has accepted your friend request', 1, 0),
(17, 'ali roumany has sent you a friend request', 1, 0),
(23, 'natali ammoun has sent you a friend request', 1, 0),
(26, 'jaafar nehme has sent you a friend request', 1, 0),
(28, 'jana hallal has sent you a friend request', 1, 0),
(29, 'haidar ali has accepted your friend request', 9, 0),
(30, 'jana hallal has sent you a friend request', 3, 0),
(31, 'yara makke has accepted your friend request', 9, 0),
(32, 'haidar ali has sent you a friend request', 9, 0),
(33, 'haidar ali has sent you a friend request', 6, 0),
(34, 'haidar ali has sent you a friend request', 4, 0),
(35, 'haidar ali has sent you a friend request', 3, 0),
(36, 'haidar ali has sent you a friend request', 8, 0),
(37, 'jana hallal has accepted your friend request', 1, 0),
(38, 'ali fawaz has accepted your friend request', 1, 0),
(39, 'fatima hallal has accepted your friend request', 1, 0),
(40, 'yara makke has accepted your friend request', 1, 0),
(41, 'jaafar nehme has accepted your friend request', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `image_path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `gender`, `bio`, `image_path`) VALUES
(1, 'haidar ali', 'user1@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png'),
(2, 'rami ayash', 'user2@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png'),
(3, 'yara makke', 'user3@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '', 'images/resources/pf-icon2.png'),
(4, 'fatima hallal', 'user4@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '', 'images/resources/pf-icon2.png'),
(5, 'ali roumany', 'user5@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png'),
(6, 'ali fawaz', 'user6@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png'),
(7, 'natali ammoun', 'user7@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '', 'images/resources/pf-icon2.png'),
(8, 'jaafar nehme', 'user8@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png'),
(9, 'jana hallal', 'user9@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '', 'images/resources/pf-icon2.png'),
(10, 'lara said', 'user10@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 0, '', 'images/resources/pf-icon2.png'),
(11, 'jad chebo', 'user11@gmail.com', 'f98204ba6963009734f0398a80f8e44f9d3ef74ebb9c49e5d4f000bd1c102d29', 1, '', 'images/resources/pf-icon1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`idq`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `idq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `idn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
