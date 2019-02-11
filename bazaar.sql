-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 02:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` bigint(20) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_storage` varchar(20) DEFAULT NULL,
  `item_display_size` varchar(5) DEFAULT NULL,
  `item_battery` varchar(10) DEFAULT NULL,
  `item_resolution` varchar(15) DEFAULT NULL,
  `item_ram` varchar(4) DEFAULT NULL,
  `item_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_storage`, `item_display_size`, `item_battery`, `item_resolution`, `item_ram`, `item_image`) VALUES
(1, 'Iphone 6s', '16/32/64/128 gb', '4.7\"', '1715 mAh', '750 x 1334p', '2 gb', 'iphone/iphone6s.png'),
(2, 'iphone 7', '32/128/256 gb', '4.7\"', '1960 mAh', '750 x 1334p', '2 gb', 'iphone/iphone7.png'),
(3, 'iphone x', '64/256 gb', '5.8\"', '2716 mAh', '1125 x 2436p', '3 GB', 'iphone/iphonex.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created` date NOT NULL,
  `token` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tokenExpire` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `pass`, `created`, `token`, `tokenExpire`) VALUES
(9, 'yousef alatrash', 'yousef', 'yousef.mohmmed@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-14', 'n9pfsyimlu', '2019-01-16 19:41:19.000000'),
(10, 'alatrash', 'alatrash', 'yousef.mohmmed222@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-14', 'h8gt9my71f', '2019-01-16 18:31:00.000000'),
(11, 'alatrash', 'Joker', 'yousef@gmail.com', 'f638e2789006da9bb337fd5689e37a265a70f359', '2019-01-15', 'y13sfozwdj', '2019-01-16 19:43:02.000000'),
(12, 'YousefAlatrash', 'Y.alatrash', 'yousef.mohmmed123@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-15', 'wio8te6nmr', '2019-01-18 17:05:25.000000'),
(13, 'hamza alizabe', 'hamza', 'hamza@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-16', '', '2019-01-16 22:48:52.953000'),
(14, 'muhammed lagha', 'muhammed', 'muhammed.lagha@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-16', '', '2019-01-16 22:56:07.717000'),
(15, 'D.Rima', 'D.Rima', 'D.Rima@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '2019-01-18', '', '2019-01-18 08:11:30.487500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
