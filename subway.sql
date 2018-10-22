-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2018 at 11:18 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.1.23-2+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subway`
--

-- --------------------------------------------------------

--
-- Table structure for table `baked_type`
--

CREATE TABLE `baked_type` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baked_type`
--

INSERT INTO `baked_type` (`id`, `name`) VALUES
(1, 'It should  oven baked'),
(2, 'It shouldn\'t  oven baked');

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

CREATE TABLE `bread` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`id`, `name`) VALUES
(1, 'Bagels'),
(2, 'Batard'),
(3, 'Baguette');

-- --------------------------------------------------------

--
-- Table structure for table `bread_size`
--

CREATE TABLE `bread_size` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bread_size`
--

INSERT INTO `bread_size` (`id`, `name`) VALUES
(1, '15 cm'),
(2, '30 cm');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `name`) VALUES
(1, 'Extra bacon'),
(2, 'Double meat'),
(3, 'Extra cheese');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bread_id` int(11) NOT NULL,
  `bread_size_id` int(11) NOT NULL,
  `baked_type_id` int(11) NOT NULL,
  `taste_sandwich_id` int(11) NOT NULL,
  `extras_id` int(11) NOT NULL,
  `vegetables_id` int(11) DEFAULT NULL,
  `sauce_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `name`, `bread_id`, `bread_size_id`, `baked_type_id`, `taste_sandwich_id`, `extras_id`, `vegetables_id`, `sauce_id`, `user_id`, `rate_id`, `created_at`, `updated_at`) VALUES
(1, 'Meal1', 2, 1, 1, 1, 1, 1, 1, 1, 2, NULL, '2018-10-19 02:57:17'),
(2, 'Meal2', 1, 1, 1, 1, 1, 1, 1, 2, 1, NULL, '2018-10-19 02:57:17'),
(3, 'Meal 3', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2018-10-19 02:57:17'),
(4, 'Meal4-2', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-10-17', '2018-10-19 03:03:36'),
(5, 'Meal 5', 2, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2018-10-19 03:14:05'),
(6, 'Meal 6', 1, 1, 1, 1, 1, 1, 1, 2, 1, NULL, '2018-10-19 03:17:17'),
(7, 'Meal 7', 1, 1, 1, 1, 1, 1, 1, 2, 1, '2018-10-17', '2018-10-19 03:19:38'),
(8, 'meal 8-13', 2, 1, 1, 1, 1, 1, 1, 1, 1, '2018-10-18', '2018-10-19 03:39:33'),
(9, 'meal 8-14', 2, 1, 1, 1, 1, 1, 1, 1, 1, '2018-10-19', '2018-10-19 06:23:14'),
(10, 'Meal 111', 1, 1, 1, 1, 1, 3, 1, 2, 2, '2018-10-19', '2018-10-19 09:23:18'),
(11, 'Meal 10', 2, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2018-10-22 06:34:58'),
(12, 'Meal 12', 1, 1, 1, 1, 1, 1, 1, 1, 3, '2018-10-22', '2018-10-22 07:45:04'),
(13, 'Meal 13', 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-10-22', '2018-10-22 07:45:35'),
(14, 'meal 14', 3, 2, 2, 3, 3, 4, 3, 2, 2, '2018-10-22', '2018-10-22 08:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `meal_status`
--

CREATE TABLE `meal_status` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal_status`
--

INSERT INTO `meal_status` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `sauce`
--

CREATE TABLE `sauce` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sauce`
--

INSERT INTO `sauce` (`id`, `name`) VALUES
(1, 'Brown sauces'),
(2, 'Butter sauces'),
(3, ' Fish sauces');

-- --------------------------------------------------------

--
-- Table structure for table `taste_sandwich`
--

CREATE TABLE `taste_sandwich` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taste_sandwich`
--

INSERT INTO `taste_sandwich` (`id`, `name`) VALUES
(1, 'Сhicken'),
(2, 'Pork'),
(3, 'Beef');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `authKey` varchar(45) DEFAULT NULL,
  `accessToken` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `authKey`, `accessToken`, `status`, `role`) VALUES
(1, 'user', 'user', 'user', 'user@gmail.com', '', '', 1, 0),
(2, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin2', 'admin2', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `name`) VALUES
(1, 'Tomato'),
(2, 'Beetroot'),
(3, 'Broccoli'),
(4, 'Corn'),
(5, 'Cucumber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baked_type`
--
ALTER TABLE `baked_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bread_size`
--
ALTER TABLE `bread_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_meal_bread1_idx` (`bread_id`),
  ADD KEY `fk_meal_bread_size1_idx` (`bread_size_id`),
  ADD KEY `fk_meal_baked_type1_idx` (`baked_type_id`),
  ADD KEY `fk_meal_taste_sandwich1_idx` (`taste_sandwich_id`),
  ADD KEY `fk_meal_extras1_idx` (`extras_id`),
  ADD KEY `fk_meal_vegetables1_idx` (`vegetables_id`),
  ADD KEY `fk_meal_sauce1_idx` (`sauce_id`),
  ADD KEY `fk_meal_users1_idx` (`user_id`),
  ADD KEY `fk_meal_rate1_idx` (`rate_id`),
  ADD KEY `bread_id` (`bread_id`,`bread_size_id`,`baked_type_id`,`taste_sandwich_id`,`extras_id`,`vegetables_id`,`sauce_id`,`user_id`,`rate_id`);

--
-- Indexes for table `meal_status`
--
ALTER TABLE `meal_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taste_sandwich`
--
ALTER TABLE `taste_sandwich`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baked_type`
--
ALTER TABLE `baked_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bread`
--
ALTER TABLE `bread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bread_size`
--
ALTER TABLE `bread_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `meal_status`
--
ALTER TABLE `meal_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sauce`
--
ALTER TABLE `sauce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `taste_sandwich`
--
ALTER TABLE `taste_sandwich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `meal`
--
ALTER TABLE `meal`
  ADD CONSTRAINT `fk_meal_baked_type1` FOREIGN KEY (`baked_type_id`) REFERENCES `baked_type` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_bread1` FOREIGN KEY (`bread_id`) REFERENCES `bread` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_bread_size1` FOREIGN KEY (`bread_size_id`) REFERENCES `bread_size` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_extras1` FOREIGN KEY (`extras_id`) REFERENCES `extras` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_rates1` FOREIGN KEY (`rate_id`) REFERENCES `rate` (`id`),
  ADD CONSTRAINT `fk_meal_sauce1` FOREIGN KEY (`sauce_id`) REFERENCES `sauce` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_taste_sandwich1` FOREIGN KEY (`taste_sandwich_id`) REFERENCES `taste_sandwich` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_users1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_meal_vegetables1` FOREIGN KEY (`vegetables_id`) REFERENCES `vegetables` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
