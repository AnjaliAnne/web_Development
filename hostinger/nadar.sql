-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 07:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bh108`
--

CREATE TABLE `bh108` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bh108`
--

INSERT INTO `bh108` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'tomato', 700, 34, 37, 12, 33, '95312-toma.png'),
(2, 'potato', 230, 12, 75, 12, 66, '18577-poty.png'),
(3, 'Cabbage', 12, 1, 53, 3, 51, '46033-cab.png'),
(4, 'Carrot', 46, 2, 120, 32, 82, '15708-car.png'),
(5, 'Corn', 78, 12, 65, 8, 60, '31747-corn.png'),
(6, 'Kashmiri Chilly', 240, 12, 101, 2, 99, '43878-chi.png');

-- --------------------------------------------------------

--
-- Table structure for table `bk105`
--

CREATE TABLE `bk105` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk105`
--

INSERT INTO `bk105` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'Strawberry (Kashmiri', 150, 20, 240, 8, 221, '16577-5a22f496bfae25.3554945215122402787851.png'),
(2, 'Grapes (Black)', 152, 2, 80, 15, 68, '66086-5a1ce8ed496623.1247057215118440773006.png');

-- --------------------------------------------------------

--
-- Table structure for table `bv104`
--

CREATE TABLE `bv104` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gr107`
--

CREATE TABLE `gr107` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gr107`
--

INSERT INTO `gr107` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'Cococola 200 ml', 255, 15, 35, 3, 34, '11457-5a34b550cf0684.661871471513403728848.png'),
(9, 'Mountain Dew 500ml', 12, 2, 45, 12, 40, '41857-1-(36).png'),
(10, 'Fanta 200ml', 25, 2, 25, 12, 22, '59512-1-(33).png'),
(11, 'Miranda 500ml', 42, 3, 25, 8, 23, '95605-1-(38).png'),
(12, 'Cococola Cherry 200 ', 45, 15, 28, 8, 26, '9045-1-(21).png'),
(13, 'Sprite 500ml', 75, 23, 25, 10, 23, '98656-1-(58).png'),
(14, 'Pepsi 200ml', 41, 23, 25, 10, 23, '23089-1-(49).png'),
(15, 'Mountain Dew 200ml', 21, 4, 26, 14, 22, '33029-1-(56).png'),
(16, 'Cococola Zero 200 ml', 41, 45, 29, 6, 27, '46857-1-(35).png');

-- --------------------------------------------------------

--
-- Table structure for table `hs101`
--

CREATE TABLE `hs101` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kt103`
--

CREATE TABLE `kt103` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kt103`
--

INSERT INTO `kt103` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'Nivea Active Charcoa', 50, 10, 250, 12, 220, '12099-niveo.png'),
(2, 'Dove Body Wash', 45, 23, 450, 13, 392, '7412-dove.png'),
(3, 'AXE (Anarchy) 100ml', 13, 2, 85, 12, 75, '31987-1-(23).png'),
(4, 'AXE (Twist) 100ml', 13, 5, 84, 14, 72, '29745-1-(16).png'),
(6, 'Fair & Lovely (men) ', 42, 23, 45, 5, 43, '94453-1-(26).png'),
(7, 'Fair & Lovely (men) ', 45, 12, 20, 2, 20, '31593-1-(25).png'),
(8, 'Nivea (Fresh Musk)', 62, 23, 84, 12, 74, '17671-1-(29).png'),
(9, 'Dove (Cream Oil)', 74, 45, 94, 18, 77, '42775-1-(31).png'),
(10, 'FOGG (Body Spray)', 41, 23, 67, 10, 60, '99683-1-(18).png'),
(11, 'Gillette After shave', 10, 2, 82, 9, 75, '3665-1-(30).png');

-- --------------------------------------------------------

--
-- Table structure for table `oth100`
--

CREATE TABLE `oth100` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pt106`
--

CREATE TABLE `pt106` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf109`
--

CREATE TABLE `sf109` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slno` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `header1` varchar(50) NOT NULL,
  `header2` varchar(50) NOT NULL,
  `header3` varchar(50) NOT NULL,
  `header4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vf102`
--

CREATE TABLE `vf102` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vf102`
--

INSERT INTO `vf102` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(2, 'Arial washing-powder', 12, 1, 111, 12, 98, '30378-arial.png'),
(3, 'Surf Excel', 52, 12, 76, 8, 70, '31728-sur.png'),
(4, 'Surf Washing Powder', 23, 1, 80, 20, 64, '52101-surf.png'),
(5, 'Vanish Washing Powde', 89, 2, 150, 25, 113, '57097-van.png'),
(6, 'Wheel Washing Powder', 41, 12, 94, 6, 88, '91752-wheel.png'),
(7, 'Sunlight Washing Pow', 89, 12, 84, 12, 74, '23128-sun.png'),
(8, 'Rose Bathing Soap', 56, 3, 26, 3, 25, '57886-rosw.png'),
(9, 'Colgate Max fresh', 41, 23, 45, 10, 41, '19319-1-(24).png'),
(10, 'LUX 100gm', 41, 23, 49, 8, 45, '20144-1-(43).png'),
(11, 'Colgate Optic white', 84, 22, 73, 8, 67, '63397-1-(45).png'),
(12, 'Lavender 200gm', 12, 3, 58, 5, 55, '44822-1-(50).png'),
(13, 'Pears 150gm', 64, 4, 64, 16, 54, '2617-1-(48).png'),
(14, 'Park Avenue 100gm', 26, 23, 48, 12, 42, '88299-1-(40).png'),
(15, 'Pears 150gm X 4', 20, 2, 175, 12, 154, '88964-1-(19).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bh108`
--
ALTER TABLE `bh108`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `bk105`
--
ALTER TABLE `bk105`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `bv104`
--
ALTER TABLE `bv104`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `gr107`
--
ALTER TABLE `gr107`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `hs101`
--
ALTER TABLE `hs101`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `kt103`
--
ALTER TABLE `kt103`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `oth100`
--
ALTER TABLE `oth100`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `pt106`
--
ALTER TABLE `pt106`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `sf109`
--
ALTER TABLE `sf109`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `vf102`
--
ALTER TABLE `vf102`
  ADD PRIMARY KEY (`Sl.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bh108`
--
ALTER TABLE `bh108`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bk105`
--
ALTER TABLE `bk105`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bv104`
--
ALTER TABLE `bv104`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gr107`
--
ALTER TABLE `gr107`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hs101`
--
ALTER TABLE `hs101`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kt103`
--
ALTER TABLE `kt103`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oth100`
--
ALTER TABLE `oth100`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pt106`
--
ALTER TABLE `pt106`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sf109`
--
ALTER TABLE `sf109`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vf102`
--
ALTER TABLE `vf102`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
