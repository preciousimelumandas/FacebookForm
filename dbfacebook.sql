-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 02:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfacebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfacebook`
--

CREATE TABLE `tblfacebook` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `enum` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfacebook`
--

INSERT INTO `tblfacebook` (`fname`, `lname`, `enum`, `password`, `birthday`, `gender`) VALUES
('Precious Ime', 'Lumandas', 'precious@gmail.com', 'tostos', '1999-10-31', 'female'),
('Joughnzeal', 'Olveda', 'zeal@gmail.com', 'zeal', '0535-03-04', 'male'),
('precious Ime', 'Gonzales', 'lazo@gmail.com', 'tostos', '6456-05-04', 'male'),
('Juan', 'Dela Cruz', 'juan@gmail.com', 'juan', '1999-12-12', 'male'),
('Ime', 'Rico', 'Ime@gmail.com', 'ime', '1999-10-23', 'female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
