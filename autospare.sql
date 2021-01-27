-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 04:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autospare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Email`, `password`) VALUES
(1, 'Angie', 'angiemwende56@gmail.com', '$2y$10$k872.D17kH6pBmkGXaS2Fe.dc.9E2b/ISO9aPsoj/fbENaUVn9xR6');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Secondname` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `idnumber` int(255) NOT NULL,
  `needname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `Firstname`, `Secondname`, `amount`, `phonenumber`, `idnumber`, `needname`) VALUES
(1, 'eric', 'karani', 500, 704080757, 25352689, 'family one');

-- --------------------------------------------------------

--
-- Table structure for table `donee`
--

CREATE TABLE `donee` (
  `id` int(255) NOT NULL,
  `familyname` varchar(255) NOT NULL,
  `familynumber` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `amountneeded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donee`
--

INSERT INTO `donee` (`id`, `familyname`, `familynumber`, `problem`, `county`, `amountneeded`) VALUES
(1, 'Muchai family', 'family one', 'food,clothing,education', 'Turkana', '100,000'),
(2, 'Hanna family', 'family two', 'food,clothing,education', 'Turkana', '250,000'),
(3, 'Ann family', 'family three', 'food,clothing,education', 'Turkana', '150,000'),
(4, 'Beatrice family', 'family four', 'food,clothing,education', 'Turkana', '100,000'),
(5, 'Dan family', 'family five', 'food,clothing,education', 'Turkana', '300,000'),
(6, 'Ken family', 'family six', 'food,clothing,education', 'Turkana', '400,000'),
(7, 'Bill one', 'Bill one', 'hospital bills', 'Nairobi', '50,000'),
(8, 'Bill two', 'Bill two', 'hospital bills KNH mortuary', 'Nairobi', '200,000'),
(9, 'Bill three', 'Bill three', 'hospital bills', 'Nairobi', '100,000'),
(10, 'Bill four', 'Bill four', 'hospital bills', 'Nairobi', '100,000'),
(11, 'Home one', 'Home one', 'children home', 'Nairobi', '100,000'),
(12, 'Home two', 'Home two', 'children home', 'Kitui', '100,000'),
(13, 'Home three', 'Home three', 'children home', 'Mombasa', '100,000');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `Fullname`, `username`, `telephone`, `companyname`, `email`, `password`) VALUES
(7, 'evans kariuki', 'evans', '0741598623', 'safaricom', 'safaricom@gmail.com', '$2y$10$ZuZd.ADEYWvYgy4AS3vtZ.trnRtpye/QgCxNwvCk8yymenXec3PrO'),
(8, 'steve dan', 'dan', '0739864521', 'airtel', 'stevedan@gmail.com', '$2y$10$ntJImyirelkj1iJ/V8YyaO2omPOmim4BoKfusFn2kUrmP3qWEkaIy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `PhoneNumber` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idnumber` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `PhoneNumber`, `email`, `idnumber`) VALUES
(23, 'Angela', 'angela94@gmail.com', '$2y$10$7hnfNopb/d3f5Ud1YVvYpOOZBP8Ky3cERIa/M36NzDdw.POHh1n.2', 0, '', 0),
(24, 'Michael Njihia', 'mikewesh@gmail.com', '$2y$10$5oEt3JsATCbrf/4BZFCssuR/Rc7vyDFgKDRVXkfi.ApziDX9PB2zO', 0, '', 0),
(25, 'Eric karani', 'eric', '$2y$10$HCjm8kzshEDBBY.RyAXZX.QT1GEePn5wAxRUMmp.cpsQH5fxsme5y', 735984275, 'eric@gmail.com', 22568942),
(26, 'steve ngumu', 'steve', '$2y$10$sJjfD8cU.l3.zY/LWGvcDe9c9bYXFzP/eo6ThrqHfpwwwX5gygkrm', 785963251, 'steve@gmail.com', 25352689),
(28, 'Lilian Wanjuki', 'lilian', '$2y$10$UZocLocwFdGx.mcylBNe0u8vFopb7IaDgGsat7WrSc7uM6FfXSc7K', 786523124, 'lilian@gmail.com', 22568942);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donee`
--
ALTER TABLE `donee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donee`
--
ALTER TABLE `donee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
