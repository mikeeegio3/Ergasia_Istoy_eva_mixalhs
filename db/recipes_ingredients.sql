-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 03:00 AM
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
-- Database: `lmaorofl`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes_ingredients`
--

CREATE TABLE `recipes_ingredients` (
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `recipes_ingredients`
--

INSERT INTO `recipes_ingredients` (`recipe_id`, `ingredient_id`) VALUES
(1, 1),
(1, 2),
(1, 11),
(1, 14),
(1, 15),
(1, 16),
(1, 18),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 32),
(1, 34),
(1, 45),
(2, 14),
(2, 16),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(3, 1),
(3, 11),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 29),
(3, 30),
(4, 2),
(4, 5),
(4, 8),
(4, 9),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 29),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(6, 1),
(6, 12),
(6, 18),
(6, 22),
(6, 29),
(6, 30),
(6, 35),
(6, 36),
(6, 37),
(6, 38),
(6, 39),
(6, 40),
(6, 41),
(6, 42),
(6, 43),
(6, 44),
(6, 45),
(6, 46),
(7, 2),
(7, 5),
(7, 7),
(7, 8),
(7, 11),
(7, 12),
(7, 14),
(7, 15),
(7, 16),
(7, 29),
(7, 46),
(7, 47),
(8, 5),
(8, 11),
(8, 12),
(8, 15),
(8, 23),
(8, 29),
(8, 38),
(8, 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  ADD PRIMARY KEY (`recipe_id`,`ingredient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
