-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 03:42 AM
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
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `CropsId` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `CropsGroupId` varchar(15) NOT NULL,
  `RegionId` varchar(15) NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `TotalCost` varchar(7) NOT NULL,
  `EstimatedProduction` varchar(7) NOT NULL,
  `LandType` varchar(10) NOT NULL,
  `WaterSource` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropsgroup`
--

CREATE TABLE `cropsgroup` (
  `CropsGroupId` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivation`
--

CREATE TABLE `cultivation` (
  `CultivationId` varchar(15) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
  `CultFertSysId` varchar(15) NOT NULL,
  `FarmarId` varchar(15) NOT NULL,
  `WeekSysId` varchar(15) NOT NULL,
  `CultInsectSysId` varchar(15) NOT NULL,
  `StartDate` varchar(20) NOT NULL,
  `EndDate` varchar(20) NOT NULL,
  `TotalLandInUse` varchar(20) NOT NULL,
  `TotalCost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivationfertilizer`
--

CREATE TABLE `cultivationfertilizer` (
  `CultFertSysId` varchar(15) NOT NULL,
  `CultivationId` varchar(15) NOT NULL,
  `FertilizerId` varchar(15) NOT NULL,
  `WeekSysId` varchar(15) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Use` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivationinsecticide`
--

CREATE TABLE `cultivationinsecticide` (
  `CultInsectSysId` varchar(15) NOT NULL,
  `CultivationId` varchar(15) NOT NULL,
  `InsecticideId` varchar(15) NOT NULL,
  `WeekSysId` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `Use` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `FarmerID` varchar(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `FertilizerId` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `insecticide`
--

CREATE TABLE `insecticide` (
  `InsecticideId` varchar(15) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `PricePerUnit` varchar(10) NOT NULL,
  `InsectName` varchar(20) NOT NULL,
  `DiseaseName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `RegionId` varchar(15) NOT NULL,
  `RegionNumber` varchar(4) NOT NULL,
  `Area` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `regioncroprelation`
--

CREATE TABLE `regioncroprelation` (
  `CropsId` varchar(15) NOT NULL,
  `RegionId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `weeklytask`
--

CREATE TABLE `weeklytask` (
  `WeekId` varchar(15) NOT NULL,
  `WeekNumber` varchar(3) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
  `Task` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `weeklytaskcultivationrelation`
--

CREATE TABLE `weeklytaskcultivationrelation` (
  `WeekSysId` varchar(15) NOT NULL,
  `WeekId` varchar(15) NOT NULL,
  `CultivationId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`CropsId`),
  ADD KEY `CropsGroupId` (`CropsGroupId`),
  ADD KEY `RegionId` (`RegionId`);

--
-- Indexes for table `cropsgroup`
--
ALTER TABLE `cropsgroup`
  ADD PRIMARY KEY (`CropsGroupId`);

--
-- Indexes for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD PRIMARY KEY (`CultivationId`),
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `CultFertSysId` (`CultFertSysId`),
  ADD KEY `FarmarId` (`FarmarId`),
  ADD KEY `WeekSysId` (`WeekSysId`),
  ADD KEY `CultInsectSysId` (`CultInsectSysId`);

--
-- Indexes for table `cultivationfertilizer`
--
ALTER TABLE `cultivationfertilizer`
  ADD PRIMARY KEY (`CultFertSysId`),
  ADD KEY `CultivationId` (`CultivationId`),
  ADD KEY `FertilizerId` (`FertilizerId`),
  ADD KEY `WeekSysId` (`WeekSysId`);

--
-- Indexes for table `cultivationinsecticide`
--
ALTER TABLE `cultivationinsecticide`
  ADD PRIMARY KEY (`CultInsectSysId`),
  ADD KEY `CultivationId` (`CultivationId`),
  ADD KEY `InsecticideId` (`InsecticideId`),
  ADD KEY `WeekSysId` (`WeekSysId`);

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
-- Indexes for table `regioncroprelation`
--
ALTER TABLE `regioncroprelation`
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `RegionId` (`RegionId`);

--
-- Indexes for table `weeklytask`
--
ALTER TABLE `weeklytask`
  ADD PRIMARY KEY (`WeekId`),
  ADD KEY `CropsId` (`CropsId`);

--
-- Indexes for table `weeklytaskcultivationrelation`
--
ALTER TABLE `weeklytaskcultivationrelation`
  ADD PRIMARY KEY (`WeekSysId`),
  ADD KEY `weeklytaskcultivationrelation_ibfk_1` (`WeekId`),
  ADD KEY `weeklytaskcultivationrelation_ibfk_2` (`CultivationId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crops`
--
ALTER TABLE `crops`
  ADD CONSTRAINT `crops_ibfk_1` FOREIGN KEY (`CropsGroupId`) REFERENCES `cropsgroup` (`CropsGroupId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crops_ibfk_2` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD CONSTRAINT `cultivation_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_2` FOREIGN KEY (`CultFertSysId`) REFERENCES `cultivationfertilizer` (`CultFertSysId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_3` FOREIGN KEY (`FarmarId`) REFERENCES `farmer` (`FarmerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_4` FOREIGN KEY (`WeekSysId`) REFERENCES `weeklytaskcultivationrelation` (`WeekSysId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_5` FOREIGN KEY (`CultInsectSysId`) REFERENCES `cultivationinsecticide` (`CultInsectSysId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivationfertilizer`
--
ALTER TABLE `cultivationfertilizer`
  ADD CONSTRAINT `cultivationfertilizer_ibfk_1` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationfertilizer_ibfk_2` FOREIGN KEY (`FertilizerId`) REFERENCES `fertilizer` (`FertilizerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationfertilizer_ibfk_3` FOREIGN KEY (`WeekSysId`) REFERENCES `weeklytaskcultivationrelation` (`WeekSysId`);

--
-- Constraints for table `cultivationinsecticide`
--
ALTER TABLE `cultivationinsecticide`
  ADD CONSTRAINT `cultivationinsecticide_ibfk_1` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationinsecticide_ibfk_2` FOREIGN KEY (`InsecticideId`) REFERENCES `insecticide` (`InsecticideId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivationinsecticide_ibfk_3` FOREIGN KEY (`WeekSysId`) REFERENCES `weeklytaskcultivationrelation` (`WeekSysId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regioncroprelation`
--
ALTER TABLE `regioncroprelation`
  ADD CONSTRAINT `regioncroprelation_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regioncroprelation_ibfk_2` FOREIGN KEY (`RegionId`) REFERENCES `region` (`RegionId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weeklytask`
--
ALTER TABLE `weeklytask`
  ADD CONSTRAINT `weeklytask_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `weeklytaskcultivationrelation`
--
ALTER TABLE `weeklytaskcultivationrelation`
  ADD CONSTRAINT `weeklytaskcultivationrelation_ibfk_1` FOREIGN KEY (`WeekId`) REFERENCES `weeklytask` (`WeekId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `weeklytaskcultivationrelation_ibfk_2` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
