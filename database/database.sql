-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2024 at 05:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpro`
--

CREATE TABLE `addpro` (
  `id` int(25) NOT NULL,
  `catagories` text NOT NULL,
  `pname` text NOT NULL,
  `oprice` varchar(25) NOT NULL,
  `nprice` varchar(25) NOT NULL,
  `pimg` varchar(222) NOT NULL,
  `pdiscription` varchar(222) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addpro`
--

INSERT INTO `addpro` (`id`, `catagories`, `pname`, `oprice`, `nprice`, `pimg`, `pdiscription`, `created_at`) VALUES
(7, 'Nike', 'Nike -1', '1500', '1100', '1.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 19:49:29'),
(8, 'Bata', 'Bata -1', '1999', '1099', '2.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 19:58:03'),
(9, 'Jordan', 'Jorden -1', '2999', '2599', '3.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 19:59:33'),
(10, 'Nike', 'Nike -2', '5999', '4599', '4.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:00:47'),
(11, 'Bata', 'Bata -2', '5999', '4599', '5.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:11:37'),
(12, 'Jordan', 'Jorden -2', '9999', '8999', '6.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:15:14'),
(13, 'Bata', 'Bata -3', '4999', '4599', '7.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:16:25'),
(14, 'Bata', 'Bata -4', '7999', '7599', '8.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:16:58'),
(15, 'Jordan', 'Jorden -3', '7999', '6999', '9.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:18:43'),
(16, 'Jordan', 'Jorden -4', '8999', '8599', '10.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:20:17'),
(17, 'Nike', 'Nike -3', '5999', '5599', '11.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:21:59'),
(18, 'Nike', 'Nike -4', '4999', '4899', '12.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 20:22:48'),
(20, 'Bata', 'Bata -5', '4599', '3999', 'hover1.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 22:08:15'),
(21, 'Bata', 'Bata -6', '5999', '5599', 'hover3.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 22:09:51'),
(22, 'Bata', 'Bata -7', '4555', '3999', 'hover5.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 22:11:12'),
(23, 'Bata', 'Bata -8', '4999', '4599', 'hover6.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2024-07-15 22:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `state_province` text NOT NULL,
  `country` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`order_id`, `items`, `amount`, `name`, `email`, `phone`, `address`, `city`, `postal_code`, `state_province`, `country`, `date`) VALUES
(49, 'id=11Bata -23,id=13Bata -35,id=10Nike -21,id=14Bata -41,id=8Bata -11', '50,139', 'Muhammad Shehbaz Khan', 'shehbaz@gmail.com', '03183790054', 'House no L-128 Sector 35/E Korangi, Karachi', 'Karachi', 75400, 'Sindh', 'Pakistan', '2024-07-26 22:40:31'),
(50, 'id=22Bata -72,id=13Bata -33,id=8Bata -14', '26,241', 'Muhammad Shehbaz Khan', 'shehbaz@gmail.com', '03183790054', 'House no L-128 Sector 35/E Korangi, Karachi', 'Karachi', 75400, 'Sindh', 'Pakistan', '2024-07-28 19:02:23'),
(51, 'id=22Bata -71', '4,049', 'Muhammad Shehbaz Khan', 'shehbaz@gmail.com', '03183790054', 'House no L-128 Sector 35/E Korangi, Karachi', 'Karachi', 75400, 'Sindh', 'Pakistan', '2024-07-28 19:03:42'),
(52, 'id=22Bata -71,id=8Bata -11', '5,148', 'Muhammad Shehbaz Khan', 'shehbaz@gmail.com', '03183790054', 'House no L-128 Sector 35/E Korangi, Karachi', 'Karachi', 75400, 'Sindh', 'Pakistan', '2024-07-28 19:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(25) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `cpassword`, `img`, `created_at`) VALUES
(1, 'Muhammad Arbaz Khan', 'arbaz@gmail.com', '$2y$10$Sb5j/y3DgIyGTyaRWKxdNe5Poadq/J9TKiet/ROYIrER5dU8bCxke', '123', '2.jpg', '2024-06-23 19:58:29'),
(2, 'Muhammad Shehbaz Khan', 'learnfromshehbaz08@gmail.com', '$2y$10$ielTsSN4SkBW8Wl62x.FPOhzQPDi4y2R/.Q2FoYRPKRUAGqtWJRvi', '123', '2.jpg', '2024-06-23 20:28:51'),
(3, 'Jagli', 'jangli@gmail.com', '$2y$10$petSF6Njt7s7YxXSWNhxqelcrFj6HBUZtolr01ubFIbmBMxSLCA7O', '$2y$10$7oLmjghM0EVYzI5G6viX8.B2WVh1XALjqWD07zX8AjuSX2iiOH4Qi', 'img21.avif', '2024-07-10 21:30:46'),
(4, 'Muhammad Sajid Khan', 'sajid@gmail.com', '$2y$10$YtMvKWJxfrtw7bVEhl74deIi/F9kPsKR6kBdHgVC.G1JiLY5PB2tm', '123', '2.jpg', '2024-07-15 18:46:23'),
(5, 'Ahad', 'ahad@gmail.com', '$2y$10$yRCJMKp2WJEhaSaWSbiuo.oAzg55ICl1U243GWobo.ok6DF69fUtK', 'ahad2423', 'IMG-20240708-WA0000.jpg', '2024-07-15 21:02:47'),
(6, 'jangli', 'jangliii@gmail.com', '$2y$10$ELz3dNiblCgENPiiqGETquuiIRFNxg0ZS2eZw3eWMdTIkomQAnTsa', '123', 'checkout.php', '2024-07-25 18:43:25'),
(7, 'Taha Khan', 'tahakhan@gmail.com', '$2y$10$Kk6Rqg4EU.7hfgn01ZeHB.7J1/shXLsvPtEQGYz.govPsfYIp.5hq', '123', '4.jpg', '2024-07-28 19:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` text NOT NULL,
  `postalcode` int(255) NOT NULL,
  `state_province` text NOT NULL,
  `country` text NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `city`, `postalcode`, `state_province`, `country`, `password`, `date`) VALUES
(2, 'Muhammad Shehbaz Khan', 'shehbaz@gmail.com', '03183790054', 'House no L-128 Sector 35/E Korangi, Karachi', 'Karachi', 75400, 'Sindh', 'Pakistan', '$2y$10$0gX3.gUs5HiQQEAm0r9SNerw98ibyyUkju6unvcgTTBms3b6V93Xm', '2024-07-25 07:39:14'),
(3, 'Muhammad Arbaz Khan', 'arbaz@gmail.com', '031548564', 'gali no 1', 'Karachi', 123887, 'Sindh', 'Pakistan', '$2y$10$nUq.Om1QzihA9U3Yc9w9.ugJsKy/3WjgSu3FiukoceUv35QKDTLgi', '2024-07-26 22:43:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpro`
--
ALTER TABLE `addpro`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpro`
--
ALTER TABLE `addpro`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
