-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2020 at 05:16 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11628615_data`
--
CREATE DATABASE IF NOT EXISTS `id11628615_data` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id11628615_data`;

-- --------------------------------------------------------

--
-- Table structure for table `data_logger`
--

CREATE TABLE `data_logger` (
  `Updatedatetime` datetime DEFAULT current_timestamp(),
  `level` int(4) DEFAULT NULL,
  `count` int(4) DEFAULT NULL,
  `entry` int(4) DEFAULT NULL,
  `exitt` int(4) DEFAULT NULL,
  `security_status` int(3) DEFAULT NULL,
  `out_light` tinyint(1) DEFAULT NULL,
  `in_light` tinyint(1) DEFAULT NULL,
  `pump_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_logger`
--

INSERT INTO `data_logger` (`Updatedatetime`, `level`, `count`, `entry`, `exitt`, `security_status`, `out_light`, `in_light`, `pump_status`) VALUES
('2019-11-18 04:31:25', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `switch`
--

CREATE TABLE `switch` (
  `pump` tinyint(1) DEFAULT NULL,
  `security_ss` tinyint(1) DEFAULT NULL,
  `doorlockstatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switch`
--

INSERT INTO `switch` (`pump`, `security_ss`, `doorlockstatus`) VALUES
(1, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
