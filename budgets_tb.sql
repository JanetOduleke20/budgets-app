-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 03:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets_tb`
--

CREATE TABLE `budgets_tb` (
  `budget_id` int(11) NOT NULL,
  `budget_name` varchar(200) NOT NULL,
  `budget_amount` varchar(200) NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budgets_tb`
--

INSERT INTO `budgets_tb` (`budget_id`, `budget_name`, `budget_amount`, `deadline`) VALUES
(1, 'Shoe', '5000', '2022-11-01'),
(2, 'Shoe', '5000', '2022-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets_tb`
--
ALTER TABLE `budgets_tb`
  ADD PRIMARY KEY (`budget_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgets_tb`
--
ALTER TABLE `budgets_tb`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
