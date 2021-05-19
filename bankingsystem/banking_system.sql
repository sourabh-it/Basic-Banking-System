-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 12:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15426996_banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender`, `receiver`, `balance`) VALUES
('Deepika Basu', 'Sujatha', 500),
('Swati', 'Sujatha', 1000),
('Sujatha', 'Greeshma', 100),
('Swati', 'Deeksha Bharadwaj', 100),
('Sujatha', 'Anshu', 300),
('Greeshma', 'Athira S', 100),
('Greeshma', 'Athira S', 100),
('Greeshma', 'Sujatha', 100),
('Deeksha Bharadwaj', 'Swati', 100),
('Anshu', 'Raj', 100),
('Raj', 'Swati', 250),
('Akhil Hari', 'Raj', 100),
('Greeshma', 'Prasad Yadav', 800),
('Athira S', 'Anshu', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
('101', 'Greeshma', 'greeshnairgmail.com', 1000),
('211', 'Athira S', 'athirasuresh@gmail.com', 4100),
('221', 'Raj', 'raj12@yahoo.com', 950),
('222', 'Sujatha', 'sujanair@gmail.com', 1310),
('306', 'Anshu', 'anshu_5@gmail.com', 5200),
('345', 'Prasad Yadav', 'prayad7@gmail.com', 1800),
('367', 'Deeksha Bharadwaj', 'deeku_cool@gmail.com', 3000),
('456', 'Deepika Basu', 'deeeepzzz@gmail.com', 4500),
('500', 'Akhil Hari', 'hariakhil@gmail.com', 900),
('560', 'Swati', 'swati45@gmail.com', 7250);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
