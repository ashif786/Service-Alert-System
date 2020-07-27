-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 05, 2020 at 03:31 AM
-- Server version: 5.6.39-83.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genetco_dbgadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passcode` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'genetco', 'gen07885');

-- --------------------------------------------------------

--
-- Table structure for table `sas_data`
--

CREATE TABLE `sas_data` (
  `App_ID` int(11) NOT NULL,
  `App_name` varchar(50) NOT NULL,
  `Purchase_date` date NOT NULL,
  `Expiry_date` date NOT NULL,
  `Renew_date` date NOT NULL,
  `Vendor_name` varchar(25) NOT NULL,
  `Price` varchar(11) NOT NULL,
  `Number_of_users` int(11) NOT NULL,
  `hardwaresoftware` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sas_data`
--

INSERT INTO `sas_data` (`App_ID`, `App_name`, `Purchase_date`, `Expiry_date`, `Renew_date`, `Vendor_name`, `Price`, `Number_of_users`, `hardwaresoftware`) VALUES
(12, 'microsoft', '2019-02-08', '2019-02-02', '2019-02-16', 'wwww', '$1125', 2, 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `app_id` int(11) NOT NULL,
  `App_name` varchar(100) DEFAULT NULL,
  `Purchase_date` date NOT NULL,
  `Expiry_date` date NOT NULL,
  `Renew_date` date NOT NULL,
  `Vendor_name` varchar(50) NOT NULL,
  `Price` text NOT NULL,
  `number_of_users` int(15) DEFAULT NULL,
  `hardwaresoftware` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`app_id`, `App_name`, `Purchase_date`, `Expiry_date`, `Renew_date`, `Vendor_name`, `Price`, `number_of_users`, `hardwaresoftware`) VALUES
(18, 'FIRE ESTINGUISER', '2019-02-22', '2020-08-26', '2020-08-26', 'AAAA', '11', 1111, 'Hardware'),
(19, 'AMC-NET App,HP Switches,IBM and HP Servers', '2019-04-29', '2021-06-30', '2021-06-30', 'AAAA', '111', 111, 'Hardware'),
(20, 'Parallels Remote Application Server', '2019-08-15', '2020-08-16', '2020-08-16', 'AAAA', '111', 111, 'Software'),
(21, 'Office 365 Suscription ( OACCOMAN.COM)', '2019-08-06', '2020-08-07', '2020-08-07', 'microsoft office', '111', 111, 'Software'),
(17, 'TREND MICRO ANTI VIRUS', '2019-01-31', '2021-01-30', '2021-01-30', 'AAAA', '111', 111, 'Software'),
(22, 'Office 365 Suscription ( GENETCO.NET)', '2019-03-28', '2021-03-26', '2021-03-26', 'microsoft office', '1111', 111, 'Software'),
(13, 'Oacc & GCE Hosting', '2018-02-22', '2021-02-22', '2021-02-22', 'Host Gator', '$150', 500, 'Software'),
(11, 'Genetco Hosting', '2019-06-18', '2021-06-18', '2021-06-18', 'Managed.com', '$1100', 500, 'Software'),
(12, 'Oacc Domain', '2017-11-08', '2021-09-08', '2019-09-08', 'Go Daddy', '$50', 500, 'Software'),
(10, 'Genetco Domain', '2018-08-29', '2021-08-27', '2021-08-27', 'networksolutions', '$50', 500, 'Software'),
(14, 'Gce Oman', '2019-08-18', '2021-08-02', '2021-08-02', 'Go Daddy', '$50', 500, 'Software'),
(16, 'SMS Service Subscription', '2015-12-15', '2020-11-04', '2019-11-04', 'SMS Country Dubai', '100 AED', 2000, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(100) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`) VALUES
(1, 'aa'),
(2, 'ab'),
(3, 'ac'),
(4, 'ad'),
(5, 'ae'),
(6, 'af'),
(7, 'ag'),
(8, 'ah'),
(9, 'ai'),
(10, 'aj');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `posts` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `user_id`, `posts`) VALUES
(1, 1, 'blog'),
(2, 1, 'blog'),
(3, 1, 'blog'),
(4, 1, 'blog'),
(5, 1, 'blog'),
(6, 1, 'blog'),
(7, 1, 'blog'),
(8, 1, 'blog'),
(9, 1, 'blog'),
(10, 1, 'blog'),
(11, 2, 'vlog'),
(12, 2, 'vlog'),
(13, 2, 'vlog'),
(14, 2, 'vlog'),
(15, 2, 'vlog'),
(16, 2, 'vlog'),
(17, 2, 'vlog'),
(18, 2, 'vlog'),
(19, 2, 'vlog'),
(20, 2, 'vlog'),
(21, 3, 'supervisor'),
(22, 3, 'supervisor'),
(23, 3, 'supervisor'),
(24, 3, 'supervisor'),
(25, 3, 'supervisor'),
(26, 3, 'supervisor'),
(27, 3, 'supervisor'),
(28, 3, 'supervisor'),
(29, 3, 'supervisor'),
(30, 3, 'supervisor'),
(31, 4, 'inspector'),
(32, 4, 'inspector'),
(33, 4, 'inspector'),
(34, 4, 'inspector'),
(35, 4, 'inspector'),
(36, 4, 'inspector'),
(37, 4, 'inspector'),
(38, 4, 'inspector'),
(39, 4, 'inspector'),
(40, 4, 'inspector'),
(41, 5, 'controller'),
(42, 5, 'controller'),
(43, 5, 'controller'),
(44, 5, 'controller'),
(45, 5, 'controller'),
(46, 5, 'controller'),
(47, 5, 'controller'),
(48, 5, 'controller'),
(49, 5, 'controller'),
(50, 5, 'controller'),
(51, 6, 'banker'),
(52, 6, 'banker'),
(53, 6, 'banker'),
(54, 6, 'banker'),
(55, 6, 'banker'),
(56, 6, 'banker'),
(57, 6, 'banker'),
(58, 6, 'banker'),
(59, 6, 'banker'),
(60, 6, 'banker'),
(61, 7, 'economist'),
(62, 7, 'economist'),
(63, 7, 'economist'),
(64, 7, 'economist'),
(65, 7, 'economist'),
(66, 7, 'economist'),
(67, 7, 'economist'),
(68, 7, 'economist'),
(69, 7, 'economist'),
(70, 7, 'economist'),
(71, 8, 'auditor'),
(72, 8, 'auditor'),
(73, 8, 'auditor'),
(74, 8, 'auditor'),
(75, 8, 'auditor'),
(76, 8, 'auditor'),
(77, 8, 'auditor'),
(78, 8, 'auditor'),
(79, 8, 'auditor'),
(80, 8, 'auditor'),
(81, 9, 'accountant'),
(82, 9, 'accountant'),
(83, 9, 'accountant'),
(84, 9, 'accountant'),
(85, 9, 'accountant'),
(86, 9, 'accountant'),
(87, 9, 'accountant'),
(88, 9, 'accountant'),
(89, 9, 'accountant'),
(90, 9, 'accountant'),
(91, 10, 'cashier'),
(92, 10, 'cashier'),
(93, 10, 'cashier'),
(94, 10, 'cashier'),
(95, 10, 'cashier'),
(96, 10, 'cashier'),
(97, 10, 'cashier'),
(98, 10, 'cashier'),
(99, 10, 'cashier'),
(100, 10, 'cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sas_data`
--
ALTER TABLE `sas_data`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sas_data`
--
ALTER TABLE `sas_data`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
