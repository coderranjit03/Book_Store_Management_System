-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 10:27 AM
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
-- Database: `college_peoject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `qut` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `date`) VALUES
(1, 'Comics Books', '2023-11-01'),
(2, 'DRAMA', '2023-11-02'),
(3, 'History', '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `message`, `date`) VALUES
(4, 'dgfdhg', '35454346', 'sushant@appmonks.net', 'Messagedg', '2023-11-03 09:18:03'),
(5, 'dgdsg', '4654754745', 'sushant@appmonks.net', 'Message', '2023-11-03 09:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `offers` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `c_images` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `own_name` varchar(500) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `code` varchar(100) NOT NULL,
  `duration_from` varchar(100) NOT NULL,
  `duration_to` varchar(100) NOT NULL,
  `validity_certificate` varchar(100) NOT NULL,
  `details` longtext NOT NULL,
  `price` varchar(100) NOT NULL,
  `writen_by` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `offers`, `category`, `c_images`, `heading`, `own_name`, `short_name`, `code`, `duration_from`, `duration_to`, `validity_certificate`, `details`, `price`, `writen_by`, `year`, `language`, `pages`, `date`) VALUES
(3, '', '2', '654364b7dd8ddbook5.jpg', 'Take Out Tango', 'Sushant ', '', '', '', '', 'SKU-1', '<p><span style=\"color: rgb(119, 119, 119); font-family: \"Open Sans\", sans-serif; font-size: 16px; background-color: rgb(247, 247, 247);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</span><br></p>', '500', 'Smrita', '2023-11-03', 'English', '520', '2023-11-02'),
(4, '', '2', '654364f7361afbook7.jpg', 'Seconds', 'Sushant ', '', '', '', '', 'SKU-2', '<p><span style=\"color: rgb(119, 119, 119); font-family: \"Open Sans\", sans-serif; font-size: 16px; background-color: rgb(247, 247, 247);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</span><br></p>', '1000', 'Sushant', '2023-07-06', 'English', '600', '2023-11-02'),
(5, '', '2', '6543653155ef1book8.jpg', 'The Advanture', 'Sushant ', '', '', '', '', 'SKU-3', '<p><span style=\"color: rgb(119, 119, 119); font-family: \"Open Sans\", sans-serif; font-size: 16px; background-color: rgb(247, 247, 247);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</span><br></p>', '300', 'Sumit', '2023-01-04', 'English', '200', '2023-11-02'),
(6, '', '2', '6543656c0c208book4.jpg', 'Such a Fun Age', 'Sushant ', '', '', '', '', 'SKU-4', '<p><span style=\"color: rgb(119, 119, 119); font-family: \"Open Sans\", sans-serif; font-size: 16px; background-color: rgb(247, 247, 247);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</span><br></p>', '700', 'Akshay', '2020-06-18', 'Marathi', '700', '2023-11-02'),
(7, '', '2', '654365aade724book9.jpg', 'Pushing Clouds', 'Sushant ', '', '', '', '', 'SKU-5', '<p><span style=\"color: rgb(119, 119, 119); font-family: \"Open Sans\", sans-serif; font-size: 16px; background-color: rgb(247, 247, 247);\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</span><br></p>', '900', 'Swapnil', '2017-06-08', 'Marathi', '800', '2023-11-02'),
(8, 'Special Offers', '3', '6544aa03d7340blog7.jpg', 'REWORK ', 'Sushant ', '', '', '', '', 'WORK-23', '<p><span style=\"color: rgb(119, 119, 119); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 12.96px; text-wrap: nowrap;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br></p>', '1000', 'Abhijeet', '2023-11-09', 'Marathi', '600', '2023-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `book_price` varchar(50) DEFAULT NULL,
  `book_qut` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `apartment` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `book_name`, `book_price`, `book_qut`, `fname`, `lname`, `address`, `apartment`, `country`, `state`, `city`, `zip`, `email`, `phone`, `payment_method`, `date`) VALUES
(1, '1', 'Pushing Clouds, Take Out Tango', '900, 500', '1, 2', 'Sushant ', 'Waghmare', 'Thane', 'Gitanjali ', 'India', 'Maharashtra', 'Mumbai ', '400045', 'Sushantwagh211@gmail.com', '1234567890', '', '2023-11-02 09:58:22'),
(3, '1', 'Pushing Clouds', '900', '2', 'sushant', 'waghmare', 'Thane', 'Ganga ', 'India', 'maharashtra', 'Mumbai', '400079', 'Sushantwagh211@gmail.com', '1234567890', 'COD', '2023-11-03 03:27:33'),
(4, '1', 'The Advanture', '900', '3', 'sushant', 'waghmare', 'Thane', 'Ganga ', 'India', 'maharashtra', 'Mumbai', '400079', 'Sushantwagh211@gmail.com', '1234567890', 'COD', '2023-11-03 09:23:52'),
(5, '1', 'Seconds, Take Out Tango', '2000, 3000', '2, 2', 'sushant', 'waghmare', 'Thane', 'Ganga ', 'India', 'maharashtra', 'Mumbai', '400079', 'Sushantwagh211@gmail.com', '1234567890', 'COD', '2023-11-03 09:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `professional` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `address` longtext NOT NULL,
  `age` varchar(50) NOT NULL,
  `desc` mediumtext NOT NULL,
  `country` varchar(50) NOT NULL,
  `postcode` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `number`, `professional`, `language`, `pass`, `address`, `age`, `desc`, `country`, `postcode`, `city`, `date`) VALUES
(1, 'Sushant ', 'Sushantwagh211@gmail.com', '1234567890', 'Web Developer', 'English', '12345', 'Thane', '23', 'Hiee ', 'India', '400069', 'Mumbai', '2023-11-02 07:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `s_image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `s_image`, `date`) VALUES
(1, '6542131d27611gifts_slider_image.jpg', '2023-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
