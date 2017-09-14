-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 09:56 AM
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
(1, 'BRRI-50', 2, 'January-April', '15000', '500', 'High groun', 'Well', 'Rice', 10),
(2, 'Kanchan', 1, 'Select Any One', '115', '2112', 'High groun', 'River', 'Oilseed', 12);

-- --------------------------------------------------------

--
-- Table structure for table `cropfertilizer`
--

CREATE TABLE `cropfertilizer` (
  `CropFertSysId` int(15) NOT NULL,
  `CropId` int(15) NOT NULL,
  `FertilizerId` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cropinsecticide`
--

CREATE TABLE `cropinsecticide` (
  `CropInsectSysId` int(15) NOT NULL,
  `CropId` int(15) NOT NULL,
  `InsecticideId` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(7, '1', 1, 2, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet vehicula turpis in gravida. Ut commodo leo vel maximus viverra. Vivamus tincidunt varius lacus vel placerat. Phasellus lectus lorem, vulputate vel orci vel, feugiat condimentum quam.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet vehicula turpis in gravida. Ut commodo leo vel maximus viverra. Vivamus tincidunt varius lacus vel placerat. Phasellus lectus lorem, vulputate vel orci vel, feugiat condimentum quam.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet vehicula turpis in gravida. Ut commodo leo vel maximus viverra. Vivamus tincidunt varius lacus vel placerat. Phasellus lectus lorem, vulputate vel orci vel, feugiat condimentum quam.'),
(8, '1', 1, 2, 2, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet vehicula turpis in gravida. Ut commodo leo vel maximus viverra. Vivamus tincidunt varius lacus vel placerat. Phasellus lectus lorem, vulputate vel orci vel, feugiat condimentum quam.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet vehicula turpis in gravida. Ut commodo leo vel maximus viverra. Vivamus tincidunt varius lacus vel placerat. Phasellus lectus lorem, vulputate vel orci vel, feugiat condimentum quam.'),
(9, '1', 1, 2, 2, 'as', 'as', 'asad'),
(10, '1', 1, 2, 2, 'as', 'as', 'asad'),
(11, '1', 1, 2, 3, 'xc', 'cdcsdc', 'sdvsdv'),
(12, '3', 1, 2, 3, 'xc', 'cdcsdc', 'sdvsdv'),
(13, '1', 1, 2, 2, 'vhvhv', 'mbjbj', 'jhjh jh'),
(14, '1', 1, 2, 2, 'wdce', 'dvwc', 'fvdefcv'),
(15, '1', 1, 2, 2, 'yo', 'yo', 'honey sing'),
(16, '1', 1, 2, 2, 'ss', 'ss', 'ss');

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
(318069, 2, 12, '2017-09-14', '', '50 Katha', '', '', 'Ongoing'),
(624823, 1, 12, '2017-09-13', '2017-09-13', '11 Katha', '123', '1222', 'Ended');

-- --------------------------------------------------------

--
-- Table structure for table `cultivationweeklytask`
--

CREATE TABLE `cultivationweeklytask` (
  `WeekSysId` int(15) NOT NULL,
  `CultivationId` int(15) NOT NULL,
  `StatusId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultivationweeklytask`
--

INSERT INTO `cultivationweeklytask` (`WeekSysId`, `CultivationId`, `StatusId`) VALUES
(7, 624823, 7),
(8, 624823, 1),
(9, 624823, 0),
(10, 624823, 0),
(11, 624823, 0),
(12, 624823, 0),
(13, 624823, 0),
(14, 624823, 0),
(15, 624823, 0),
(16, 624823, 0);

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
(1, 'admin', 'none', 'admin', '1234', 'admin'),
(12, 'Ashik', 'Dhaka', '014', '12334', 'farmer');

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
(2, '2,4-D, Dimethylamine salt', '120', 'Rice weevil', 'Bacterial leafstreak'),
(3, 'Regiment', '200', 'Rice weevil', 'Bacterial leafstreak'),
(4, 'none', '0', '', '');

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
(1, '12', 'pabna'),
(2, '13', 'Rajshahi');

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
  ADD KEY `FarmarId` (`FarmerId`);

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
  MODIFY `CropId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cropfertilizer`
--
ALTER TABLE `cropfertilizer`
  MODIFY `CropFertSysId` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cropinsecticide`
--
ALTER TABLE `cropinsecticide`
  MODIFY `CropInsectSysId` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cropweeklytask`
--
ALTER TABLE `cropweeklytask`
  MODIFY `WeekId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cultivationweeklytask`
--
ALTER TABLE `cultivationweeklytask`
  MODIFY `WeekSysId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `FertilizerId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `insecticide`
--
ALTER TABLE `insecticide`
  MODIFY `InsecticideId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `RegionId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `cultivationweeklytask_ibfk_2` FOREIGN KEY (`StatusId`) REFERENCES `status` (`StatusId`),
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
