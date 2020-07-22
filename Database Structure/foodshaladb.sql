-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 05:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshaladb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(6) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Restaurant_Name` varchar(50) NOT NULL,
  `Item_Name` varchar(50) NOT NULL,
  `Price` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(6) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Prefered_Restaurant_Type` varchar(7) NOT NULL,
  `Customer_Email` varchar(100) NOT NULL,
  `Customer_Password` varchar(50) NOT NULL,
  `Customer_PhoneNo` varchar(10) NOT NULL,
  `Customer_Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `Customer_Name`, `Prefered_Restaurant_Type`, `Customer_Email`, `Customer_Password`, `Customer_PhoneNo`, `Customer_Address`) VALUES
(1, 'Dharmendra Pagare', 'veg', 'dharmendrapagare01@gmail.com', 'dharmendra', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa'),
(3, 'Shivansh Pagare', 'veg', 'shivanshpagare97@gmail.com', 'shivansh', '7999735633', 'Near Moghat Police Station, Moghat Road, Khandwa (M.P.)');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(6) NOT NULL,
  `Restaurant_Name` varchar(50) NOT NULL,
  `Item_Name` varchar(50) NOT NULL,
  `Price` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Restaurant_Name`, `Item_Name`, `Price`) VALUES
(7, 'Bikanervala Saket- Indian Restaurant', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw', '100'),
(9, 'Bikanervala Saket- Indian Restaurant', 'Lassi', '35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(6) NOT NULL,
  `Date_Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `Items_with_Price` varchar(3000) NOT NULL,
  `Restaurant_Name` varchar(50) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_PhoneNo` varchar(10) NOT NULL,
  `Customer_Address` varchar(500) NOT NULL,
  `Order_Total` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Date_Time`, `Items_with_Price`, `Restaurant_Name`, `Customer_Name`, `Customer_PhoneNo`, `Customer_Address`, `Order_Total`) VALUES
(1, '2020-06-29 22:37:45.464341', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100, Lassi:- Rs.35, ', 'Bikanervala Saket- Indian Restaurant', 'Dharmendra Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 135),
(2, '2020-06-29 23:53:30.434372', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100,', 'Bikanervala Saket- Indian Restaurant', 'Shivansh Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 100),
(4, '2020-06-30 00:18:18.512768', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100, Lassi:- Rs.35, ', 'Bikanervala Saket- Indian Restaurant', 'Shivansh Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 135),
(5, '2020-06-30 02:50:00.106502', '', '', '', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 0),
(6, '2020-06-30 02:51:41.469193', '', '', '', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 0),
(7, '2020-06-30 02:54:06.036775', 'lskjdfvnfld;slkdfjvkfldk', 'aksjdhjksjdfk', 'slkdjfhdjkdjfdk', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 0),
(8, '2020-06-30 02:54:57.420611', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100, Lassi:- Rs.35, ', 'Bikanervala Saket- Indian Restaurant', 'Dharmendra Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 135),
(9, '2020-06-30 02:57:58.718292', '', '', '', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 0),
(10, '2020-06-30 03:14:27.223386', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100, Lassi:- Rs.35, ', 'Bikanervala Saket- Indian Restaurant', 'Dharmendra Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 135),
(11, '2020-06-30 03:15:56.522260', 'Normal Thali (4 Roti, 1 Sabzi, 1 Rice, 1 Dal, 1 Sw:- Rs.100, Lassi:- Rs.35, ', 'Bikanervala Saket- Indian Restaurant', 'Dharmendra Pagare', '9827302680', '02, Near Moghat Police Station Moghat Road Khandwa', 135);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `Id` int(6) NOT NULL,
  `Restaurant_Name` varchar(50) NOT NULL,
  `Owner_Name` varchar(50) NOT NULL,
  `Prefered_Restaurant_Type` varchar(7) NOT NULL,
  `Restaurant_Email` varchar(100) NOT NULL,
  `Restaurant_Password` varchar(50) NOT NULL,
  `Restaurant_PhoneNo` varchar(10) NOT NULL,
  `Open_Time` varchar(15) NOT NULL,
  `Certified_By` varchar(10) NOT NULL,
  `Certitied_Licence_No` varchar(14) NOT NULL,
  `GSTNo` varchar(15) NOT NULL,
  `Restaurant_Address` varchar(500) NOT NULL,
  `Embedded_Map_Link` varchar(1000) NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Twitter` varchar(100) NOT NULL,
  `LinkedIn` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`Id`, `Restaurant_Name`, `Owner_Name`, `Prefered_Restaurant_Type`, `Restaurant_Email`, `Restaurant_Password`, `Restaurant_PhoneNo`, `Open_Time`, `Certified_By`, `Certitied_Licence_No`, `GSTNo`, `Restaurant_Address`, `Embedded_Map_Link`, `Facebook`, `Twitter`, `LinkedIn`, `Instagram`) VALUES
(1, 'Bikanervala Saket- Indian Restaurant', 'xyz', 'veg', 'bikanervala@gmail.com', 'bikanervala', '9599267002', '9:00 AM to 11:0', 'fssai', '12216017000287', '22AAAAA0000A1Z5', '14,15 - PVR Anupam, Community Centre, Saket, Delhi, 110017', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7011.093250826068!2d77.20748468192399!3d28.523285200504294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1f0eab4daeb%3A0xfc9a492d7ac780d5!2sBikanervala%20Saket-%20Indian%20Restaurant!5e0!3m2!1sen!2sin!4v1590316706375!5m2!1sen!2sin', 'https://www.facebook.com/shivansh.pagare', 'https://twitter.com/ShivanshPagare', 'https://www.linkedin.com/in/shivansh-pagare-7330a1128/', 'https://www.instagram.com/shivanshpagare/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Customer_Email` (`Customer_Email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Restaurant_Email` (`Restaurant_Email`),
  ADD UNIQUE KEY `Restaurant_Name` (`Restaurant_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
