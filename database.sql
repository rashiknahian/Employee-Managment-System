-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 26, 2019 at 06:02 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `employeeManagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$oTjXwA7Zsu.OOS.3nzGdWuyFnavAcopbrEi1aS9ogm9ZrVMF.P272'),
(2, 'admin', 'admin@ahobanfoundation.org', '$2y$10$rSbfXXEzC.VeFoM7czYSAOv8h.M2yckNDA43iTLqibfNp8MWu2gzW'),
(3, 'Akash', 'akash@gmail.com', '$2y$10$wB3vJnhnay8By.SqW/SdHeUhcekSRE3frXz9tl5Mard8rxY4dD0P2'),
(4, 'test', 'test@gmail.com', '$2y$10$FVcZl0T/H6A2fkrzDcQG1O7DvJyk/vV9/E7bUmjDDs481qvb9jSv2'),
(5, 'tom', 'tom@gmail.com', '$2y$10$9q4Os3rN6RBiuK4dIqzW7eW3Yg1FmhdpoeLqMWzY8GBWbCKFGgdQy');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `employeeId` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `starttime` time(6) NOT NULL,
  `endtime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`employeeId`, `date`, `starttime`, `endtime`) VALUES
('1234', '2019-04-08', '12:01:00.000000', '23:02:00.000000'),
('1234', '2019-04-08', '12:25:25.000000', '12:25:25.000000'),
('1234', '2019-04-08', '12:25:25.000000', '01:25:25.000000'),
('123', '2019-04-08', '12:25:25.000000', '01:25:25.000000'),
('123', '2019-04-08', '12:25:25.000000', '01:25:25.000000');

-- --------------------------------------------------------

--
-- Table structure for table `employeeData`
--

CREATE TABLE `employeeData` (
  `id` int(11) NOT NULL,
  `employeeId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `bloodGroup` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `employeeId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `deadline` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`employeeId`, `task`, `created`, `deadline`) VALUES
('1236', 'new website', '2019-04-08 06:28:20', 'today'),
('1235', 'Slider image for new website', '2019-04-15 08:40:47', '12 May');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$oTjXwA7Zsu.OOS.3nzGdWuyFnavAcopbrEi1aS9ogm9ZrVMF.P272'),
(2, 'admin', 'admin@ahobanfoundation.org', '$2y$10$rSbfXXEzC.VeFoM7czYSAOv8h.M2yckNDA43iTLqibfNp8MWu2gzW'),
(3, 'Akash', 'akash@gmail.com', '$2y$10$wB3vJnhnay8By.SqW/SdHeUhcekSRE3frXz9tl5Mard8rxY4dD0P2'),
(4, 'test', 'test@gmail.com', '$2y$10$FVcZl0T/H6A2fkrzDcQG1O7DvJyk/vV9/E7bUmjDDs481qvb9jSv2'),
(5, 'tom', 'tom@gmail.com', '$2y$10$9q4Os3rN6RBiuK4dIqzW7eW3Yg1FmhdpoeLqMWzY8GBWbCKFGgdQy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employeeData`
--
ALTER TABLE `employeeData`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employeeData`
--
ALTER TABLE `employeeData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;