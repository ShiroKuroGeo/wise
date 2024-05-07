-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 05:56 AM
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
-- Database: `wise`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `department` varchar(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `deadline` varchar(125) NOT NULL,
  `description` text NOT NULL,
  `assigned` varchar(125) NOT NULL,
  `priority` varchar(125) NOT NULL,
  `attachment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `department` varchar(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `concern` varchar(50) NOT NULL,
  `issue` text NOT NULL,
  `assigned` varchar(50) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `attachment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `department`, `name`, `email`, `concern`, `issue`, `assigned`, `priority`, `attachment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accounting Department', 'George Alfeser', 'inocgeorgealfeser@gmail.com', 'Zoom, Skype & FB', '123', 'John Dizon', 'Moderate', '[object FileList]', 0, '2024-04-18 10:49:22', '2024-04-18 10:49:22'),
(2, 'Accounting Department', 'George Alfeser', 'inocgeorgealfeser@gmail.com', 'Zoom, Skype & FB', '123', 'John Dizon', 'Moderate', '[object FileList]', 1, '2024-04-18 10:49:28', '2024-04-18 10:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(125) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL DEFAULT 'P@ssw0rd',
  `role` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Seleno Shiro', 'selenoshiro@wise.com', '161ebd7d45089b3446ee4e0d86dbcf92', 1, 1, '2024-04-09 10:15:15', '2024-04-09 10:15:15'),
(2, 'George Alfeser Inoc', 'jd@gmail.com', 'P@ssw0rd', 2, 1, '2024-04-19 03:51:58', '2024-04-19 03:51:58'),
(3, 'John', 'test@123', '161ebd7d45089b3446ee4e0d86dbcf92', 2, 1, '2024-04-19 03:53:03', '2024-04-19 03:53:03'),
(4, 'Shirogeo', '123@123', '161ebd7d45089b3446ee4e0d86dbcf92', 2, 1, '2024-04-19 03:53:26', '2024-04-19 03:53:26'),
(5, 'vINCE', 'vINCEwise@gmail.com', '161ebd7d45089b3446ee4e0d86dbcf92', 2, 1, '2024-04-19 03:55:01', '2024-04-19 03:55:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
