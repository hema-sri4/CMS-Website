-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2022 at 07:55 AM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clickndbuy_hema`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `heading` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `datess` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `heading`, `content`, `datess`) VALUES
(1, 'uploads/e4b526e838d23598c14e8c772825daf5.jpg', 'college about us', 'college about us', '0000-00-00'),
(2, 'uploads/8947c06bd90c4b7091eb624b0f486e25.jpg', 'Antenna wave propogation', 'Antenna wave propogation', '0000-00-00'),
(3, 'uploads/4006d9d9af8c57ce43bc2223db30773a.jpg', 'micro processor', 'micro processor', '0000-00-00'),
(4, 'uploads/0fe479a31033a36eb93ae232a31e35c7.jpg', 'digital', 'digital', '0000-00-00'),
(5, 'uploads/bc0027fd866180ec8dc296cb0110972b.jpg', 'prcosessor', 'processor', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
