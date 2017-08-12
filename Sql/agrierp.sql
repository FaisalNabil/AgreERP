-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 03:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrierp`
--
CREATE DATABASE IF NOT EXISTS `agrierp` DEFAULT CHARACTER SET = 'utf8' COLLATE utf8_general_ci;
USE `agrierp`;
-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `CropId` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `RegionId` varchar(15) NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `TotalCost` varchar(7) NOT NULL,
  `EstimatedProduction` varchar(7) NOT NULL,
  `LandType` varchar(10) NOT NULL,
  `WaterSource` varchar(7) NOT NULL,
  `CropGroupName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropfertilizer`
--

CREATE TABLE `cropfertilizer` (
  `CropFertSysId` varchar(15) NOT NULL,
  `CropId` varchar(15) NOT NULL,
  `FertilizerId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropinsecticide`
--

CREATE TABLE `cropinsecticide` (
  `CropInsectSysId` varchar(15) NOT NULL,
  `CropId` varchar(15) NOT NULL,
  `InsecticideId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropweeklytask`
--

CREATE TABLE `cropweeklytask` (
  `WeekId` varchar(15) NOT NULL,
  `WeekNumber` varchar(3) NOT NULL,
  `CropId` varchar(15) NOT NULL,
  `CropInsectSysId` varchar(15) NOT NULL,
  `CropFertSysId` varchar(15) NOT NULL,
  `FertilizerTask` varchar(255) NOT NULL,
  `InsecticideTask` varchar(255) NOT NULL,
  `OtherTask` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivation`
--

CREATE TABLE `cultivation` (
  `CultivationId` varchar(15) NOT NULL,
  `CropId` varchar(15) NOT NULL,
  `FarmarId` varchar(15) NOT NULL,
  `StartDate` varchar(20) NOT NULL,
  `EndDate` varchar(20) NOT NULL,
  `TotalLandInUse` varchar(20) NOT NULL,
  `TotalCost` varchar(10) NOT NULL,
  `TotalProducation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivationweeklytask`
--

CREATE TABLE `cultivationweeklytask` (
  `WeekSysId` varchar(15) NOT NULL,
  `CultivationId` varchar(15) NOT NULL,
  `StatusId` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `FarmerID` varchar(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `District` varchar(35) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`FarmerID`, `Name`, `District`, `Phone`, `Password`) VALUES
('f-001', 'ashiq', 'pabna', '01532312342', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `FertilizerId` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`FertilizerId`, `Name`, `PricePerUnit`) VALUES
('fer-001', 'Urea', '50tk');

-- --------------------------------------------------------

--
-- Table structure for table `insecticide`
--

CREATE TABLE `insecticide` (
  `InsecticideId` varchar(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL,
  `InsectName` varchar(35) NOT NULL,
  `DiseaseName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insecticide`
--

INSERT INTO `insecticide` (`InsecticideId`, `Name`, `PricePerUnit`, `InsectName`, `DiseaseName`) VALUES
('ins-001', 'abc', '50tk', 'dsa', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `RegionId` varchar(15) NOT NULL,
  `RegionNumber` varchar(4) NOT NULL,
  `Area` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`RegionId`, `RegionNumber`, `Area`) VALUES
('re-001', '12', 'pabna');

-- --------------------------------------------------------

--
-- Table structure for table `regioncrop`
--

CREATE TABLE `regioncrop` (
  `CropId` varchar(15) NOT NULL,
  `RegionId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` varchar(5) NOT NULL,
  `DoneTask` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `cropfertilizer`
--
ALTER TABLE `cropfertilizer`
  ADD PRIMARY KEY (`CropFertSysId`),
  ADD KEY `CropId` (`CropId`),
  ADD KEY `FertilizerId` (`FertilizerId`);

--
-- Indexes for table `cropinsecticide`
--
ALTER TABLE `cropinsecticide`
  ADD PRIMARY KEY (`CropInsectSysId`),
  ADD KEY `CropId` (`CropId`),
  ADD KEY `InsecticideId` (`InsecticideId`);

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
  ADD KEY `FarmarId` (`FarmarId`);

--
-- Indexes for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD PRIMARY KEY (`WeekSysId`),
  ADD KEY `CultivationId` (`CultivationId`),
  ADD KEY `StatusId` (`StatusId`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`FarmerID`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `crop`
--
ALTER TABLE `crop`
  ADD CONSTRAINT `crop_ibfk_1` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropfertilizer`
--
ALTER TABLE `cropfertilizer`
  ADD CONSTRAINT `cropfertilizer_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropfertilizer_ibfk_2` FOREIGN KEY (`FertilizerId`) REFERENCES `fertilizer` (`FertilizerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropinsecticide`
--
ALTER TABLE `cropinsecticide`
  ADD CONSTRAINT `cropinsecticide_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropinsecticide_ibfk_2` FOREIGN KEY (`InsecticideId`) REFERENCES `insecticide` (`InsecticideId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropweeklytask`
--
ALTER TABLE `cropweeklytask`
  ADD CONSTRAINT `cropweeklytask_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropweeklytask_ibfk_2` FOREIGN KEY (`CropInsectSysId`) REFERENCES `cropinsecticide` (`CropInsectSysId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropweeklytask_ibfk_3` FOREIGN KEY (`CropFertSysId`) REFERENCES `cropfertilizer` (`CropFertSysId`);

--
-- Constraints for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD CONSTRAINT `cultivation_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_2` FOREIGN KEY (`FarmarId`) REFERENCES `farmer` (`FarmerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD CONSTRAINT `cultivationweeklytask_ibfk_1` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationweeklytask_ibfk_2` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`);

--
-- Constraints for table `regioncrop`
--
ALTER TABLE `regioncrop`
  ADD CONSTRAINT `regioncrop_ibfk_1` FOREIGN KEY (`CropId`) REFERENCES `crop` (`CropId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regioncrop_ibfk_2` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
