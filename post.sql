-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 05:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filters`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `car_no` int(8) NOT NULL,
  `car_model` varchar(10) NOT NULL,
  `car_sfx` varchar(10) NOT NULL,
  `car_var` text NOT NULL,
  `car_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`car_no`, `car_model`, `car_sfx`, `car_var`, `car_img`) VALUES
(1051, '2021', 'Yes', 'Enjoy our selection of motors and vehicle-related sounds. Our catalog offers over 90,000 sound effects and you can try them all for free with Epidemic Sound\'s 30-day trial.', '/demo/img/car.jpeg'),
(1073, '2022', 'no', 'Enjoy our selection of motors and vehicle-related sounds. Our catalog offers over 50,000 sound effects and you can try them all for free with Epidemic Sound\'s 60-day trial.', '/demo/img/car1.jpeg'),
(1092, '2020', 'yes', 'Enjoy our selection of motors and vehicle-related sounds. Our catalog offers over 90,000 sound effects and you can try them all for free with Epidemic Sound\'s 30-day trial.', '/demo/img/car2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`car_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `car_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1093;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
