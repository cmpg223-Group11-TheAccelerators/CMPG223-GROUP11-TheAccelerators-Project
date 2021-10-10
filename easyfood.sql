-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 11:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `confirm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`firstName`, `lastName`, `address`, `password`, `phoneNumber`, `confirm`) VALUES
('Mpho', 'Mokoena', '255 Cameroon Street', 123, '0781822417', '1234567899'),
('Mbali', 'Khanya', '112 Formax Street', 888, '12456688', '000212544');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `image` varchar(50) NOT NULL,
  `restaurantName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `name`, `Price`, `image`, `restaurantName`) VALUES
(7, 'Braai', 30, 'africanFood.jpg', 'Picasso Lounge'),
(10, 'Mala-mogodu', 35, 'picasso.jpg', 'Ga Setlatjile');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `phoneNumber` varchar(10) NOT NULL,
  `orderNum` int(50) NOT NULL,
  `Price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` double NOT NULL,
  `restaurantName` varchar(100) NOT NULL,
  `foodList` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`phoneNumber`, `orderNum`, `Price`, `quantity`, `total`, `restaurantName`, `foodList`, `address`) VALUES
('12456688', 35590899, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 61922435, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 83938740, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 105228927, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 206019385, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 212690424, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 379959046, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 411410460, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 422524234, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 444083255, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 461831227, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 531805651, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 550585375, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 592268174, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 742199295, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 820692174, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 879115927, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 905571673, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 908901465, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 988209471, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1031715834, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1067600471, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1143039942, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1220615652, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1305576956, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1422229166, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1431198389, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1432550867, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1433154337, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1433556694, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1435506095, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1572646765, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1725318244, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1748112902, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1751815673, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1800439556, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1895466347, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 1911197256, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street'),
('12456688', 2126487983, 0, 0, 35, 'Ga Setlatjile', 'Mala-mogodu', '112 Formax Street');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cuisine` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `password` int(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantName`, `address`, `cuisine`, `firstName`, `lastName`, `email`, `phoneNumber`, `password`, `image`) VALUES
('Dijo', '255 Cameroon Street', 'Ratanda', 'Mpho', 'Mokoena', 'fbkjFBjbfJ@gmail.com', '1234567890', 123, 'gasetlatjile.jpg'),
('Ga Setlatjile', '123 Formax street, Riverbend Gardens,Soweto', 'Maotoana', 'Mpho', 'Mokoena', 'fbkjFBjbfJ@gmail.com', '1234567890', 123, 'gasetlatjile.jpg'),
('Le gae', '111 Stene Street', 'Polokwane', 'Mesha', 'Monkoe', 'Gwebu@gmail.com', '0813066305', 123, 'africanFood.jpg'),
('Mogodu Corner', '3665 Egypt Street, Sharpeville, Vanderbijlpark', 'Mogodu', 'Moses', 'Khumalo', 'Gwebu@gmail.com', '0731234567', 445, 'dijo.jpg'),
('Picasso Lounge', '788 Sirus street,Mamelodi', 'Mala-mohodu', 'Mpho', 'Mokoena', 'Gwebu@gmail.com', '8552288', 445, 'picasso.jpg'),
('Tshola dijo', '255 Cameroon Street,Evanton', 'Kota', 'Mpho', 'Mokoena', 'Mbatha@gmail.com', '1114567890', 888, 'skhambane.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phoneNumber`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderNum`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurantName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `orderNum` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2126487984;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
