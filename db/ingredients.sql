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
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredient_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredient_id`, `title`) VALUES
(1, 'κρεμμύδι'),
(2, 'αλεύρι'),
(3, 'μασκαρπόνε'),
(4, 'άχνη ζάχαρη'),
(5, 'εκχύλισμα βανίλιας'),
(6, 'καφέ'),
(7, 'κρέμα γάλακτος'),
(8, 'κουβερτούρα'),
(9, 'κακάο'),
(10, 'σαβαγιάρ'),
(11, 'ζάχαρη'),
(12, 'νερό'),
(13, 'μπέικιν πάουντερ'),
(14, 'βούτηρο'),
(15, 'γάλα'),
(16, 'αυγά'),
(17, 'πατάτες'),
(18, 'ελαιόλαδο'),
(19, 'κολοκύθια'),
(20, 'μελιτζάνες'),
(21, 'θυμάρι'),
(22, 'σκόρδο'),
(23, 'κανέλα'),
(24, 'πελτέ ντομάτας'),
(25, 'κιμά'),
(26, 'ντομάτα'),
(27, 'παρμεζάνα'),
(28, 'μακαρόνια'),
(29, 'αλάτι'),
(30, 'πιπέρι'),
(31, 'μπέικον'),
(32, 'κρασί κόκκινο'),
(34, 'δάφνη'),
(35, 'γαρίδες'),
(36, 'κοτόπουλο'),
(37, 'τσορίθο'),
(38, 'ρύζι'),
(39, 'πάπρικα'),
(40, 'κρασί λευκό'),
(41, 'μύδια'),
(42, 'αρακά'),
(43, 'ντοματίνια'),
(44, 'άνηθο'),
(45, 'μαϊντανό'),
(46, 'λεμόνι'),
(47, 'κορν φλάουρ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
