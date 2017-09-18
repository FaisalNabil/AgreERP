-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 04:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `agrierp` DEFAULT CHARACTER SET = 'utf8' COLLATE utf8_general_ci;
USE `agrierp`;

--
-- Database: `agrierp`
--

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `CropId` int(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `RegionId` int(15) NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `TotalCost` varchar(7) NOT NULL,
  `EstimatedProduction` varchar(7) NOT NULL,
  `LandType` varchar(20) NOT NULL,
  `WaterSource` varchar(7) NOT NULL,
  `CropGroupName` varchar(50) NOT NULL,
  `TotalWeeks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`CropId`, `Name`, `RegionId`, `TimePeriod`, `TotalCost`, `EstimatedProduction`, `LandType`, `WaterSource`, `CropGroupName`, `TotalWeeks`) VALUES
(4, 'BRRI-50', 2, 'Jan-Apr', '145500', '19500', 'High ground', 'River', 'Rice', 15),
(5, 'Kanchan', 4, 'Apr-Aug', '15000', '120', 'Low ground', 'River', 'Pulses', 13);

-- --------------------------------------------------------

--
-- Table structure for table `cropweeklytask`
--

CREATE TABLE `cropweeklytask` (
  `WeekId` int(15) NOT NULL,
  `WeekNumber` varchar(3) NOT NULL,
  `CropId` int(15) DEFAULT NULL,
  `CropInsectSysId` int(15) NOT NULL,
  `CropFertSysId` int(15) NOT NULL,
  `FertilizerTask` varchar(255) NOT NULL,
  `InsecticideTask` varchar(255) NOT NULL,
  `OtherTask` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cropweeklytask`
--

INSERT INTO `cropweeklytask` (`WeekId`, `WeekNumber`, `CropId`, `CropInsectSysId`, `CropFertSysId`, `FertilizerTask`, `InsecticideTask`, `OtherTask`) VALUES
(1, '1', 4, 6, 2, 'N/A', 'Lorem ipsum dolor sit amet', ' consectetur adipisicing elit. Obcaecati beatae earum quisquam. Illo eum assumenda officia voluptatibus aspernatur ipsa labore maiores temporibus et quibusdam! Pariatur animi saepe dicta numquam reprehenderit.'),
(2, '1', 4, 6, 2, 'N/A', 'Lorem ipsum dolor sit amet', ' consectetur adipisicing elit. Ea dicta cumque minus dolor aspernatur quasi ad error laborum ab assumenda officia tempore sequi'),
(3, '3', 4, 7, 2, 'N/A', 'Lorem ipsum dolor sit amet', ' consectetur adipisicing elit. Ea dicta cumque minus dolor aspernatur quasi ad error laborum ab assumenda officia tempore sequi'),
(4, '1', 5, 4, 2, 'N/A', 'N/A', 'Lorem ipsum dolor sit amet'),
(5, '3', 5, 4, 2, 'N/A', 'N/A', 'Lorem ipsum dolor sit amet'),
(6, '2', 5, 7, 3, 'Lorem Ipsum', 'Lorem Ipsum', 'N/A'),
(7, '5', 5, 6, 3, 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `cultivation`
--

CREATE TABLE `cultivation` (
  `CultivationId` int(15) NOT NULL,
  `CropId` int(15) NOT NULL,
  `FarmerId` int(15) NOT NULL,
  `StartDate` varchar(20) NOT NULL,
  `EndDate` varchar(20) NOT NULL,
  `TotalLandInUse` varchar(20) NOT NULL,
  `TotalCost` varchar(10) NOT NULL,
  `TotalProduction` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultivation`
--

INSERT INTO `cultivation` (`CultivationId`, `CropId`, `FarmerId`, `StartDate`, `EndDate`, `TotalLandInUse`, `TotalCost`, `TotalProduction`, `Status`) VALUES
(720681, 4, 0, '2017-09-18', '2017-09-18', '10 Bigha', '141000', '19000', 'Ended');

-- --------------------------------------------------------

--
-- Table structure for table `cultivationweeklytask`
--

CREATE TABLE `cultivationweeklytask` (
  `Cultivationweekid` int(15) NOT NULL,
  `WeekSysId` int(10) NOT NULL,
  `CultivationId` int(15) NOT NULL,
  `StatusId` int(5) NOT NULL,
  `DoneDate` varchar(15) NOT NULL,
  `WeeklyCost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultivationweeklytask`
--

INSERT INTO `cultivationweeklytask` (`Cultivationweekid`, `WeekSysId`, `CultivationId`, `StatusId`, `DoneDate`, `WeeklyCost`) VALUES
(1, 1, 720681, 4, '2017-09-18', 1000),
(2, 2, 720681, 7, '2017-09-18', 20000),
(3, 3, 720681, 7, '2017-09-18', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `FarmerId` int(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `District` varchar(35) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`FarmerId`, `Name`, `District`, `Phone`, `Password`, `Role`) VALUES
(0, 'Nabil', 'Rajshahi', '015', '1234', 'farmer'),
(1, 'admin', 'none', 'admin', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `FertilizerId` int(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`FertilizerId`, `Name`, `PricePerUnit`) VALUES
(2, 'none', '0'),
(3, 'Urea', '250'),
(4, 'Carbaryl', '60');

-- --------------------------------------------------------

--
-- Table structure for table `insecticide`
--

CREATE TABLE `insecticide` (
  `InsecticideId` int(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL,
  `InsectName` varchar(35) NOT NULL,
  `DiseaseName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insecticide`
--

INSERT INTO `insecticide` (`InsecticideId`, `Name`, `PricePerUnit`, `InsectName`, `DiseaseName`) VALUES
(4, 'none', '0', '', ''),
(6, '2,4-D, Dimethylamine salt', '120', 'Rice weevil', 'Bacterial leafstreak'),
(7, 'Regiment', '200', 'Rice weevil', 'Bacterial leafstreak');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `RegionId` int(15) NOT NULL,
  `RegionNumber` varchar(4) NOT NULL,
  `Area` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`RegionId`, `RegionNumber`, `Area`) VALUES
(1, '12', 'Pabna'),
(2, '13', 'Rajshahi'),
(3, '71', 'Dhaka'),
(4, '35', 'Narshingdi');

-- --------------------------------------------------------

--
-- Table structure for table `regioncrop`
--

CREATE TABLE `regioncrop` (
  `CropId` int(15) NOT NULL,
  `RegionId` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(5) NOT NULL,
  `DoneTask` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusId`, `DoneTask`) VALUES
(0, 'None'),
(1, 'Fertilizer Task'),
(2, 'Insecticide Task'),
(3, 'Other Task'),
(4, 'Fertilizer Task,Insecticide Task'),
(5, 'Fertilizer Task,Other  Task'),
(6, ' Insecticide Task,Other Task'),
(7, 'Fertilizer Task,Insecticide Task,Other Task');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`CropId`),
  ADD KEY `RegionId` (`RegionId`);

--
-- Indexes for table `cropweeklytask`
--
ALTER TABLE `cropweeklytask`
  ADD PRIMARY KEY (`WeekId`),
  ADD KEY `CropId` (`CropId`),
  ADD KEY `CultInsectSysId` (`CropInsectSysId`),
  ADD KEY `CultFertSysId` (`CropFertSysId`);

--
-- Indexes for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD PRIMARY KEY (`CultivationId`),
  ADD KEY `CropId` (`CropId`),
  ADD KEY `FarmarId` (`FarmerId`);

--
-- Indexes for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD PRIMARY KEY (`Cultivationweekid`),
  ADD KEY `CultivationId` (`CultivationId`),
  ADD KEY `StatusId` (`StatusId`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`FarmerId`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`FertilizerId`);

--
-- Indexes for table `insecticide`
--
ALTER TABLE `insecticide`
  ADD PRIMARY KEY (`InsecticideId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`RegionId`);

--
-- Indexes for table `regioncrop`
--
ALTER TABLE `regioncrop`
  ADD KEY `CropId` (`CropId`),
  ADD KEY `RegionId` (`RegionId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `CropId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cropweeklytask`
--
ALTER TABLE `cropweeklytask`
  MODIFY `WeekId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  MODIFY `Cultivationweekid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `FertilizerId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `insecticide`
--
ALTER TABLE `insecticide`
  MODIFY `InsecticideId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `RegionId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `crop`
--
ALTER TABLE `crop`
  ADD CONSTRAINT `crop_ibfk_1` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropweeklytask`
--
ALTER TABLE `cropweeklytask`
  ADD CONSTRAINT `cropweeklytask_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD CONSTRAINT `cultivation_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_2` FOREIGN KEY (`FarmerId`) REFERENCES `farmer` (`FarmerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD CONSTRAINT `cultivationweeklytask_ibfk_2` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationweeklytask_ibfk_3` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regioncrop`
--
ALTER TABLE `regioncrop`
  ADD CONSTRAINT `regioncrop_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regioncrop_ibfk_2` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
