-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 08:53 PM
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
  `RegionId` varchar(15) NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `TotalCost` varchar(7) NOT NULL,
  `EstimatedProduction` varchar(7) NOT NULL,
  `LandType` varchar(10) NOT NULL,
  `WaterSource` varchar(7) NOT NULL,
  `CropsGroupName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropsfertilizer`
--

CREATE TABLE `cropsfertilizer` (
  `CultFertSysId` varchar(15) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
  `FertilizerId` varchar(15) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Use` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropsinsecticide`
--

CREATE TABLE `cropsinsecticide` (
  `CultInsectSysId` varchar(15) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
  `InsecticideId` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `Use` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropsweeklytask`
--

CREATE TABLE `cropsweeklytask` (
  `WeekId` varchar(15) NOT NULL,
  `WeekNumber` varchar(3) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
  `CultInsectSysId` varchar(15) NOT NULL,
  `CultFertSysId` varchar(15) NOT NULL,
  `FertilizerTask` varchar(255) NOT NULL,
  `InsecticideTask` varchar(255) NOT NULL,
  `OtherTask` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crops_ cropsweeklytask`
--

CREATE TABLE `crops_ cropsweeklytask` (
  `WeekSysId` varchar(15) NOT NULL,
  `CropsId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivation`
--

CREATE TABLE `cultivation` (
  `CultivationId` varchar(15) NOT NULL,
  `CropsId` varchar(15) NOT NULL,
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
-- Table structure for table `regioncrops`
--

CREATE TABLE `regioncrops` (
  `CropsId` varchar(15) NOT NULL,
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
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`CropsId`);

--
-- Indexes for table `cropsfertilizer`
--
ALTER TABLE `cropsfertilizer`
  ADD PRIMARY KEY (`CultFertSysId`),
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `FertilizerId` (`FertilizerId`);

--
-- Indexes for table `cropsinsecticide`
--
ALTER TABLE `cropsinsecticide`
  ADD PRIMARY KEY (`CultInsectSysId`),
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `InsecticideId` (`InsecticideId`);

--
-- Indexes for table `cropsweeklytask`
--
ALTER TABLE `cropsweeklytask`
  ADD PRIMARY KEY (`WeekId`),
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `CultInsectSysId` (`CultInsectSysId`),
  ADD KEY `CultFertSysId` (`CultFertSysId`);

--
-- Indexes for table `crops_ cropsweeklytask`
--
ALTER TABLE `crops_ cropsweeklytask`
  ADD PRIMARY KEY (`WeekSysId`),
  ADD KEY `CropsId` (`CropsId`);

--
-- Indexes for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD PRIMARY KEY (`CultivationId`),
  ADD KEY `CropsId` (`CropsId`),
  ADD KEY `FarmarId` (`FarmarId`);

--
-- Indexes for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD PRIMARY KEY (`WeekSysId`),
  ADD KEY `CultivationId` (`CultivationId`);

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
-- Indexes for table `regioncrops`
--
ALTER TABLE `regioncrops`
  ADD KEY `CropsId` (`CropsId`),
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
-- Constraints for table `cropsfertilizer`
--
ALTER TABLE `cropsfertilizer`
  ADD CONSTRAINT `cropsfertilizer_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropsfertilizer_ibfk_2` FOREIGN KEY (`FertilizerId`) REFERENCES `fertilizer` (`FertilizerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropsinsecticide`
--
ALTER TABLE `cropsinsecticide`
  ADD CONSTRAINT `cropsinsecticide_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropsinsecticide_ibfk_2` FOREIGN KEY (`InsecticideId`) REFERENCES `insecticide` (`InsecticideId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cropsweeklytask`
--
ALTER TABLE `cropsweeklytask`
  ADD CONSTRAINT `cropsweeklytask_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropsweeklytask_ibfk_2` FOREIGN KEY (`CultInsectSysId`) REFERENCES `cropsinsecticide` (`CultInsectSysId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cropsweeklytask_ibfk_3` FOREIGN KEY (`CultFertSysId`) REFERENCES `cropsfertilizer` (`CultFertSysId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crops_ cropsweeklytask`
--
ALTER TABLE `crops_ cropsweeklytask`
  ADD CONSTRAINT `crops_ cropsweeklytask_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD CONSTRAINT `cultivation_ibfk_1` FOREIGN KEY (`CropsId`) REFERENCES `crops` (`CropsId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cultivation_ibfk_2` FOREIGN KEY (`FarmarId`) REFERENCES `farmer` (`FarmerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  ADD CONSTRAINT `cultivationweeklytask_ibfk_1` FOREIGN KEY (`CultivationId`) REFERENCES `cultivation` (`CultivationId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
