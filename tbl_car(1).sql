-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 05:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car`
--

CREATE TABLE IF NOT EXISTS `tbl_car` (
  `CAR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_NAME` varchar(100) NOT NULL,
  `CAR_NAME` varchar(100) NOT NULL,
  `VARIANT_NAME` varchar(100) NOT NULL,
  `E_S_PRICE` decimal(20,2) NOT NULL,
  `O_R_PRICE` decimal(20,2) NOT NULL,
  `BODY_TYPE` varchar(50) NOT NULL,
  `SEGMENT` varchar(5) NOT NULL,
  `ENGINE` varchar(50) NOT NULL,
  `DISP_CC` double NOT NULL,
  `FUEL_TYPE` varchar(50) NOT NULL,
  `TRANSMISSION` varchar(50) NOT NULL,
  `GEAR_NO` int(11) NOT NULL,
  `P_POWER_BHP` int(11) NOT NULL,
  `MAX_RPM_PP` int(11) NOT NULL,
  `P_TORQUE_NM` int(11) NOT NULL,
  `MAX_RPM_PT` int(11) NOT NULL,
  `MILEAGE_CITY` float NOT NULL,
  `MILEAGE_HIGHWAY` float NOT NULL,
  `LENGTH_MM` int(11) NOT NULL,
  `WIDTH_MM` int(11) NOT NULL,
  `HEIGHT_MM` int(11) DEFAULT NULL,
  `GRND_CLR_MM` int(11) NOT NULL,
  `WHEEL_BASE_MM` int(11) NOT NULL,
  `KERB_WEIGHT_KGS` float NOT NULL,
  `BOOT_SPACE_L` float NOT NULL,
  `TURNING_RAD_M` float NOT NULL,
  `AC` tinyint(1) DEFAULT '0',
  `CLIMATE_CTRL` tinyint(1) DEFAULT '0',
  `CENTRAL_LOCK` tinyint(1) DEFAULT '0',
  `CD_PLAYER` tinyint(1) DEFAULT '0',
  `POWER_STEERING` tinyint(1) NOT NULL DEFAULT '0',
  `POWER_WINDOWS` tinyint(1) NOT NULL DEFAULT '0',
  `STEERING_ADJ_RAKE` tinyint(1) NOT NULL DEFAULT '0',
  `STEERING_ADJ_REACH` tinyint(1) NOT NULL DEFAULT '0',
  `E_ADJ_D_SEAT` tinyint(1) NOT NULL DEFAULT '0',
  `STEERING_M_C` tinyint(1) NOT NULL DEFAULT '0',
  `REAR_AC_VENT` tinyint(1) NOT NULL DEFAULT '0',
  `REMOTE_C_B` tinyint(1) NOT NULL DEFAULT '0',
  `REAR_WIPER` tinyint(1) NOT NULL DEFAULT '0',
  `LEATHER_SEATS` tinyint(1) NOT NULL DEFAULT '0',
  `E_ADJ_MIRRORS` tinyint(1) NOT NULL DEFAULT '0',
  `ABS` tinyint(1) NOT NULL DEFAULT '0',
  `AIR_BAG` tinyint(1) NOT NULL DEFAULT '0',
  `PARKING_SENSORS` tinyint(1) NOT NULL DEFAULT '0',
  `TRACTION_CONTROL` tinyint(1) NOT NULL DEFAULT '0',
  `FUEL_CAP_L` float NOT NULL,
  `SEATING_CAP` int(11) NOT NULL,
  `F_TYRE_WIDTH_MM` int(11) NOT NULL,
  `F_TYRE_H_R` int(11) NOT NULL,
  `F_RADIAL_PLY` varchar(5) NOT NULL DEFAULT 'R',
  `F_WHEEL_RIM_DIA_IN` int(11) NOT NULL,
  `B_TYRE_WIDTH_MM` int(11) NOT NULL,
  `B_TYRE_H_R` int(11) NOT NULL,
  `B_RADIAL_PLY` varchar(5) NOT NULL DEFAULT 'R',
  `B_WHEEL_RIM_DIA_IN` int(11) NOT NULL,
  `CAR_IMG_URL` text,
  PRIMARY KEY (`CAR_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`CAR_ID`, `COMPANY_NAME`, `CAR_NAME`, `VARIANT_NAME`, `E_S_PRICE`, `O_R_PRICE`, `BODY_TYPE`, `SEGMENT`, `ENGINE`, `DISP_CC`, `FUEL_TYPE`, `TRANSMISSION`, `GEAR_NO`, `P_POWER_BHP`, `MAX_RPM_PP`, `P_TORQUE_NM`, `MAX_RPM_PT`, `MILEAGE_CITY`, `MILEAGE_HIGHWAY`, `LENGTH_MM`, `WIDTH_MM`, `HEIGHT_MM`, `GRND_CLR_MM`, `WHEEL_BASE_MM`, `KERB_WEIGHT_KGS`, `BOOT_SPACE_L`, `TURNING_RAD_M`, `AC`, `CLIMATE_CTRL`, `CENTRAL_LOCK`, `CD_PLAYER`, `POWER_STEERING`, `POWER_WINDOWS`, `STEERING_ADJ_RAKE`, `STEERING_ADJ_REACH`, `E_ADJ_D_SEAT`, `STEERING_M_C`, `REAR_AC_VENT`, `REMOTE_C_B`, `REAR_WIPER`, `LEATHER_SEATS`, `E_ADJ_MIRRORS`, `ABS`, `AIR_BAG`, `PARKING_SENSORS`, `TRACTION_CONTROL`, `FUEL_CAP_L`, `SEATING_CAP`, `F_TYRE_WIDTH_MM`, `F_TYRE_H_R`, `F_RADIAL_PLY`, `F_WHEEL_RIM_DIA_IN`, `B_TYRE_WIDTH_MM`, `B_TYRE_H_R`, `B_RADIAL_PLY`, `B_WHEEL_RIM_DIA_IN`, `CAR_IMG_URL`) VALUES
(1, 'Nissan', 'Sunny', 'XL', '846133.00', '846133.00', 'Sedan', 'C', '1.5L', 1498, 'Petrol', 'Manual', 5, 98, 6000, 134, 4000, 15, 17, 4455, 1695, NULL, 161, 2600, 1022, 490, 5.3, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 41, 5, 185, 70, 'R', 14, 185, 70, 'R', 14, NULL),
(2, 'Nissan', 'Sunny ', 'XV CVT', '1095263.00', '1095263.00', 'Sedan', 'B', '1.5L', 1498, 'Petrol', 'Automatic', 5, 100, 5600, 134, 4000, 16, 18, 4455, 1695, NULL, 161, 2600, 1040, 490, 5.3, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 0, 41, 5, 185, 70, 'R', 14, 185, 70, 'R', 14, NULL),
(3, 'Nissan', 'Sunny', 'XE Diesel', '886066.00', '886066.00', 'Sedan', 'C', '1.5L dCi', 1461, 'Diesel', 'Manual', 5, 85, 3750, 200, 2000, 21, 23, 4455, 1695, NULL, 1515, 161, 1092, 490, 503, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 41, 5, 185, 65, 'R', 15, 185, 65, 'R', 15, NULL),
(4, 'Nissan', 'Terrano', 'XE Diesel', '999000.00', '999000.00', 'SUV', 'C', '1.5 Diesel', 1461, 'Diesel', 'Manual', 5, 84, 3750, 200, 1900, 18, 20, 4331, 1822, 1671, 205, 2673, 1236, 475, 5.2, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, NULL),
(5, 'Nissan', 'Terrano', 'XV Premium Diesel THP 110 PS', '1315030.00', '1315030.00', 'SUV', 'c', '1.5 Diesel', 1461, 'Diesel', 'Manual', 6, 109, 3900, 248, 2250, 17, 19, 4331, 1822, 1671, 205, 2673, 1160, 475, 5.2, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, NULL),
(6, 'Mahindra', 'Bolero', 'DI NON AC BS3', '684293.00', '684293.00', 'SUV', 'C', 'Turbo Diesel', 2523, 'Diesel', 'Manual', 5, 63, 3200, 180, 1440, 14, 16, 4170, 1660, 1880, 183, 2794, 1200, 470, 5.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 9, 215, 75, 'R', 15, 215, 75, 'R', 15, NULL),
(7, 'Mahindra', 'Scorpio', 'Getaway 2WD', '881755.00', '881755.00', 'SUV', 'C', 'SZ CRDe', 2609, 'Diesel', 'Manual', 5, 115, 3800, 278, 1700, 12, 14, 5118, 1850, 1874, 180, 3040, 2550, 0, 5.6, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 80, 5, 245, 75, 'R', 16, 245, 75, 'R', 16, NULL),
(8, 'bmw', 'bmw', 'bmw X1', '4000000.00', '4000000.00', 'SUV', 'D', '2.0L', 1995, 'Diesel', 'Automatic', 8, 190, 4000, 400, 1750, 18, 20, 4439, 1821, 1612, 165, 2670, 5500, 420, 5.5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 51, 5, 225, 50, 'R', 18, 225, 50, 'R', 18, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
