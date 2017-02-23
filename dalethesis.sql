-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 07:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dalethesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`No` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `mnum` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`No`, `fname`, `lname`, `email`, `message`, `mnum`) VALUES
(1, 'Dale', 'Diaz', 'diaz00dale@gmail.com', 'Hi', '09073307535'),
(2, 'Maegan', 'Gubrian', 'maegan@gmail.com', 'Hello', '09123456789'),
(3, 'Vincent', 'Barcelona', 'vincent@yahoo.com', 'Hi Hi', '09123456789'),
(4, 'asdfas', 'dfasdfasdf', 'a@gmail.com', 'asdkjfh', '09292704546');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`NO` int(11) NOT NULL,
  `NAME` varchar(500) NOT NULL,
  `TITLE` varchar(500) NOT NULL,
  `DESCRIPTION` varchar(500) NOT NULL,
  `DATE` varchar(500) NOT NULL,
  `HOUR` varchar(500) NOT NULL,
  `IMAGEURL` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`NO`, `NAME`, `TITLE`, `DESCRIPTION`, `DATE`, `HOUR`, `IMAGEURL`) VALUES
(1, 'Dale Diaz', 'Birthday Party', 'Vincent 70th Birthday Celebration', 'December 12, 2016', '05:13 AM', 'bday.jpg'),
(2, 'Dale Diaz', 'Wedding Anniversary', 'Barcelona and Palay Wedding', 'November 1, 2017', '09:15 AM', 'wed1.jpg'),
(3, 'Dale Diaz', 'DMCFI Graduation', 'Graduation', 'May 11, 2017', '10:00 AM', 'grad1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`No` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Imageurl` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`No`, `Name`, `Description`, `Imageurl`, `price`, `Category`) VALUES
(1, 'Package A', 'Assorted Mushroom Soup , Fish Fillet w/ Sweet & Sour Sauce , DnC Fried Chicken , Beef with Young Corn or Broccoli , Pancit Canton Toppings , Steam Rice , Softdrinks', 'packagea.jpg', 2500, 'Packages'),
(2, 'Package B', 'Birdnest w/ Quail Egg Soup , Fish Fillet w/ Thailand Sauce , Lemon Chicken , Lumpiang Shanghai , Beef w/ Young Corn , Chopsuey , Miki Bihon , Steam Rice , Softdrinks', 'packageb.jpg', 2750, 'Packages'),
(3, 'Package C', 'Crabmeat Green Soup , Fish Fillet w/ Sweet & Sour Sauce , Spicy Chop Fried Chicken , Pork Asado , Beef w/ Taiwan Pechay , Four Season Vegetables , Pancit Canton Guisado , Yangchow , Softdrinks', 'packagec.jpg', 3100, 'Packages'),
(4, 'Package D', 'Chicken Asparagus Soup , Fish Fillet w/ White Sauce , DnC Friend Chicken , Fried Spareribs w/ Salt & Pepper , Beef w/ Broccoli , Shrimp Greenpeas w/ Quail Egg , Pancit Canton Toppings , Yangchow , Iced Tea Tower ', 'packaged.jpeg', 3300, 'Packages'),
(5, 'Package E', 'Birdnest w/ Quail Eggs Soup , DnC Fried Chicken , Fried Spareribs w/ Salt & Pepper , Fish Fillet w/ Thailand Sauce , Pancit Canton Toppings , Beef Steak Chinese Tyle , Four Season Vegetables , Steam Rice , Iced Tea (Unlimited) , Leche Plan/Fresh Fruits', 'img7.jpg', 3500, 'Packages'),
(6, 'Package F', 'Assorted Cold Cuts , Seafood Chowder Soup , Crispy Pata , Fish Fillet Beancurd , Beef w/ Broccoli , Shrimp Greenpeas w/ Quail Egg , DnC Fried Chicken , Pancit Canton Toppings , Salted Fish Dice Chicken Fried Rice , Iced Tea(Unlimited) , Leche Flan/Fresh Fruits', 'packagef.jpg', 4000, 'Packages'),
(7, 'Fried Chicken', '6pcs chicken', 'img7.jpg', 400, 'Meat'),
(8, 'Iced Tea', 'Lemon', 'iced1.jpg', 50, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`No` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mnum` varchar(12) NOT NULL,
  `reserveDate` varchar(100) NOT NULL,
  `timeSet` varchar(20) NOT NULL,
  `noPer` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`No`, `fname`, `lname`, `mnum`, `reserveDate`, `timeSet`, `noPer`) VALUES
(1, 'Dale', 'Diaz', '09123456789', '2016-12-31', '12:59', 2),
(2, 'Maegan', 'Gubrian', '09123456789', '2017-12-31', '12:00', 4),
(3, 'Vincent', 'Barcelona', '09073307535', '2017-01-31', '01:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
`No` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `deletion` varchar(10) NOT NULL,
  `iurl` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `address`, `email`, `No`, `password`, `deletion`, `iurl`) VALUES
('dale', 'diaz', 'dsadasdas', 'diaz00dale@gmail.com', 1, '1234', '', 'logo1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
