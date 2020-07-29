-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 03:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32


-- GRANT ALL PRIVILEGES ON *.* TO 'Admin'@'%' IDENTIFIED BY PASSWORD '*01A6717B58FF5C7EAFFF6CB7C96F7428EA65FE4C' WITH GRANT OPTION;
-- GRANT SELECT ON *.* TO 'User1'@'%';

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northairlines`
--
CREATE DATABASE IF NOT EXISTS `northairlines` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `northairlines`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `makeflight` (IN `departure` VARCHAR(55), IN `arrival` VARCHAR(55), IN `price` INT, IN `duration` INT, IN `departuretime` TIME, IN `arrivaltime` TIME, IN `departuredate` DATE)  BEGIN
    INSERT INTO flights(
        departure,
        arrival,
        price,
        duration,
        departuretime,
        arrivaltime,
        departuredate
    )
VALUE
    (
        departure,
        arrival,
        price,
        duration,
        departuretime,
        arrivaltime,
        departuredate
    ) ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `flightid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `userid`, `flightid`) VALUES
(1, 1, 20),
(2, 1, 20),
(3, 1, 8),
(4, 1, 8),
(5, 1, 8),
(6, 9, 20),
(7, 9, 20);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flightid` int(11) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `duration` bigint(20) NOT NULL,
  `departuretime` time NOT NULL,
  `arrivaltime` time NOT NULL,
  `departuredate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flightid`, `departure`, `arrival`, `price`, `duration`, `departuretime`, `arrivaltime`, `departuredate`) VALUES
(5, 'Copenhagen/CPH', 'Oslo/OSL', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(6, 'Oslo/OSL', 'Copenhagen/CPH', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(7, 'Copenhagen/CPH', 'Oslo/OSL', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(8, 'Oslo/OSL', 'Copenhagen/CPH', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(9, 'Stockholm/STH', 'Copenhagen/CPH', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(10, 'Copenhagen/CPH', 'Stockholm/STH', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(11, 'Copenhagen/CPH', 'Stockholm/STH', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(12, 'Stockholm/STH', 'Copenhagen/CPH', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(13, 'Stockholm/STH', 'Oslo/OSL', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(14, 'Oslo/OSL', 'Stockholm/STH', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(15, 'Stockholm/STH', 'Oslo/OSL', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(16, 'Oslo/OSL', 'Stockholm/STH', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(17, 'Helsinki/HKI', 'Bergen/BRG', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(18, 'Bergen/BRG', 'Helsinki/HKI', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(19, 'Bergen/BRG', 'Helsinki/HKI', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(20, 'Helsinki/HKI', 'Bergen/BRG', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(21, 'Malmo/MLM', 'Rovaniemi/RVN', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(22, 'Rovaniemi/RVN', 'Malmo/MLM', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(23, 'Rovaniemi/RVN', 'Malmo/MLM', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(24, 'Malmo/MLM', 'Rovaniemi/RVN', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(25, 'Billund/BLL', 'Copenhagen/CPH', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(26, 'Copenhagen/CPH', 'Billund/BLL', 500, 60, '10:30:00', '00:00:00', '2020-01-08'),
(27, 'Copenhagen/CPH', 'Billund/BLL', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(28, 'Billund/BLL', 'Copenhagen/CPH', 500, 60, '20:30:00', '00:00:00', '2020-01-08'),
(29, 'Copenhagen / CPH', 'Oslo / OSL', 500, 60, '10:30:00', '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `frisname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `frisname`, `lastname`, `email`, `password`, `phone`) VALUES
(5, 'a', 'v', 'niekto@a.dk', 'abcd', 993984),
(6, 'a', 'v', 'amalie@amalie.com', 'abcd', 993984),
(7, 'ff', 'gg', 'van@van.com', 'wow', 993984),
(8, 'Eric', 'Eric', 'eric@yahoo.dk', 'eric', 2004550121),
(9, 'Thmas', 'bo', 'a@a.com', 'pass123', 14345454);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightid`),
  ADD KEY `departure` (`departure`),
  ADD KEY `flightid` (`flightid`),
  ADD KEY `departuredate` (`departuredate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flightid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DELIMITER $$
CREATE TRIGGER too_expensive 
BEFORE INSERT ON flights FOR EACH ROW 
BEGIN 
IF NEW.price > 500 
THEN SIGNAL SQLSTATE '45000' 
SET MESSAGE_TEXT = 'This is too expensive';
 END IF; 
 END;
 $$
 DELIMITER

 INSERT INTO flights (price) VALUES (700);

DELIMITER $$
 CREATE PROCEDURE GetUsers() 
 BEGIN SELECT frisname, 
              lastname, 
              email 
  FROM users 
 ORDER BY userid; 
 END $$
 DELIMITER

 CALL GetUsers();