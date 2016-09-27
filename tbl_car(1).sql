
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2016 at 05:07 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u959295034_oui`
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
  `COMFORT_PT` float DEFAULT NULL,
  `SECURITY_PT` float DEFAULT NULL,
  `EOD_PT` float DEFAULT NULL,
  `WEB_URL` text NOT NULL,
  PRIMARY KEY (`CAR_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_car`
--

INSERT INTO `tbl_car` (`CAR_ID`, `COMPANY_NAME`, `CAR_NAME`, `VARIANT_NAME`, `E_S_PRICE`, `O_R_PRICE`, `BODY_TYPE`, `SEGMENT`, `ENGINE`, `DISP_CC`, `FUEL_TYPE`, `TRANSMISSION`, `GEAR_NO`, `P_POWER_BHP`, `MAX_RPM_PP`, `P_TORQUE_NM`, `MAX_RPM_PT`, `MILEAGE_CITY`, `MILEAGE_HIGHWAY`, `LENGTH_MM`, `WIDTH_MM`, `HEIGHT_MM`, `GRND_CLR_MM`, `WHEEL_BASE_MM`, `KERB_WEIGHT_KGS`, `BOOT_SPACE_L`, `TURNING_RAD_M`, `AC`, `CLIMATE_CTRL`, `CENTRAL_LOCK`, `CD_PLAYER`, `POWER_STEERING`, `POWER_WINDOWS`, `STEERING_ADJ_RAKE`, `STEERING_ADJ_REACH`, `E_ADJ_D_SEAT`, `STEERING_M_C`, `REAR_AC_VENT`, `REMOTE_C_B`, `REAR_WIPER`, `LEATHER_SEATS`, `E_ADJ_MIRRORS`, `ABS`, `AIR_BAG`, `PARKING_SENSORS`, `TRACTION_CONTROL`, `FUEL_CAP_L`, `SEATING_CAP`, `F_TYRE_WIDTH_MM`, `F_TYRE_H_R`, `F_RADIAL_PLY`, `F_WHEEL_RIM_DIA_IN`, `B_TYRE_WIDTH_MM`, `B_TYRE_H_R`, `B_RADIAL_PLY`, `B_WHEEL_RIM_DIA_IN`, `CAR_IMG_URL`, `COMFORT_PT`, `SECURITY_PT`, `EOD_PT`, `WEB_URL`) VALUES
(1, 'Nissan', 'Sunny', 'XL', '846133.00', '846133.00', 'Sedan', 'C', '1.5L', 1498, 'Petrol', 'Manual', 5, 98, 6000, 134, 4000, 15, 17, 4455, 1695, NULL, 161, 2600, 1022, 490, 5.3, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 41, 5, 185, 70, 'R', 14, 185, 70, 'R', 14, 'images/1.jpg', 34.4917, 48.577, 38.5958, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(2, 'Nissan', 'Sunny ', 'XV CVT', '1095263.00', '1095263.00', 'Sedan', 'B', '1.5L', 1498, 'Petrol', 'Automatic', 5, 100, 5600, 134, 4000, 16, 18, 4455, 1695, NULL, 161, 2600, 1040, 490, 5.3, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 0, 41, 5, 185, 70, 'R', 14, 185, 70, 'R', 14, 'images/2.jpg', 45.5679, 48.64, 51.1339, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(3, 'Nissan', 'Sunny', 'XE Diesel', '886066.00', '886066.00', 'Sedan', 'C', '1.5L dCi', 1461, 'Diesel', 'Manual', 5, 85, 3750, 200, 2000, 21, 23, 4455, 1695, NULL, 1515, 161, 1092, 490, 5.3, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 41, 5, 185, 65, 'R', 15, 185, 65, 'R', 15, 'images/3.jpg', 21.1333, 38.822, 27.9167, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(4, 'Nissan', 'Terrano', 'XE Diesel', '999000.00', '999000.00', 'SUV', 'C', '1.5 Diesel', 1461, 'Diesel', 'Manual', 5, 84, 3750, 200, 1900, 18, 20, 4331, 1822, 1671, 205, 2673, 1236, 475, 5.2, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, 'images/4.jpg', 21.3832, 24.326, 28.0916, 'https://www.nissan-cdn.net/content/dam/Nissan/global/vehicles/terrano/d10/0_pilot/overview/15TDIinrhd_TER-Hw001_M_k23.png.ximg.m_12_h.smart.png'),
(5, 'Nissan', 'Terrano', 'XV Premium Diesel ', '1315030.00', '1315030.00', 'SUV', 'c', '1.5 Diesel', 1461, 'Diesel', 'Manual', 6, 109, 3900, 248, 2250, 17, 19, 4331, 1822, 1671, 205, 2673, 1160, 475, 5.2, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, 'images/5.jpg', 32.9085, 49.06, 48.3543, 'https://www.nissan-cdn.net/content/dam/Nissan/global/vehicles/terrano/d10/0_pilot/overview/15TDIinrhd_TER-Hw001_M_k23.png.ximg.m_12_h.smart.png'),
(6, 'Mahindra', 'Bolero', 'DI NON AC BS3', '684293.00', '684293.00', 'SUV', 'C', 'Turbo Diesel', 2523, 'Diesel', 'Manual', 5, 63, 3200, 180, 1440, 14, 16, 4170, 1660, 1880, 183, 2794, 1200, 470, 5.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 9, 215, 75, 'R', 15, 215, 75, 'R', 15, 'images/33.jpg', 7.23438, 4.2, 5.66719, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(7, 'Mahindra', 'Scorpio', 'Getaway 2WD', '881755.00', '881755.00', 'SUV', 'C', 'SZ CRDe', 2609, 'Diesel', 'Manual', 5, 115, 3800, 278, 1700, 12, 14, 5118, 1850, 1874, 180, 3040, 2550, 0, 5.6, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 80, 7, 245, 75, 'R', 16, 245, 75, 'R', 16, 'images/39.jpg', 31.6896, 8.925, 32.0448, 'http://imgd5.aeplcdn.com/310x174/ec/ae/93/19049/img/m/Mahindra-Scorpio-Getaway-Right-Front-Three-Quarter-52933_ol.jpg'),
(8, 'BMW', 'X1', 'sDrive28i', '4000000.00', '4000000.00', 'SUV', 'D', '2.0L', 1995, 'Diesel', 'Automatic', 8, 190, 4000, 400, 1750, 18, 20, 4439, 1821, 1612, 165, 2670, 5500, 420, 5.5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 51, 5, 225, 50, 'R', 18, 225, 50, 'R', 18, 'images/8.jpg', 63.8036, 84.25, 76.6518, 'https://images.cardekho.com/images/car-images/large/BMW/BMW-X1/Alpine-White.jpg'),
(9, 'Mercedes Benz', 'S ', 'S600 Maybach ', '105000000.00', '105000000.00', 'Sedan', 'D', '6.0L', 5980, 'Petrol', 'Automatic', 7, 530, 4900, 830, 1900, 5, 7, 5453, 1099, 1498, 128, 3365, 4700, 510, 6.15, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 63, 5, 225, 55, 'R', 16, 225, 55, 'R', 16, 'images/9.jpg', 77.2503, 81.45, 83.0501, 'https://media.zigcdn.com/media/model/2016/Jan/mercedesbenz_sclass_600x300.jpg'),
(10, 'Audi', 'Four A', ' A4', '3800000.00', '4000000.00', 'Sedan', 'D', '1.8 TFSI', 1798, 'Petrol', 'Automatic', 6, 170, 3800, 320, 1400, 10, 12, 4703, 1826, 1427, 128, 2808, 1545, 480, 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 63, 5, 225, 55, 'R', 16, 225, 55, 'R', 16, 'images/10.jpg', 63.6654, 70.4075, 78.8327, 'https://images0.cardekho.com/images/car-images/large/Audi/Audi-A4/Dakota-Grey,-metallic.jpg'),
(11, 'Nissan', 'Sunny ', 'XL Diesel', '952035.00', '952035.00', 'Sedan', 'C', '1.5L dCi', 1461, 'Diesel', 'Manual', 5, 85, 3750, 200, 2000, 21, 23, 4455, 1695, 1515, 161, 2600, 1092, 490, 5.3, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 41, 5, 185, 65, 'R', 15, 185, 65, 'R', 15, 'images/11.jpg', 38.1333, 48.822, 35.4167, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(12, 'Nissan', 'Sunny', 'XV Diesel', '999000.00', '999000.00', 'Sedan', 'C', '1.5L dCi', 1461, 'Diesel', 'Manual', 5, 85, 3750, 200, 2000, 21, 23, 4455, 1695, 1515, 161, 2600, 1097, 490, 5.3, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 0, 41, 5, 185, 65, 'R', 15, 185, 65, 'R', 15, 'images/12.jpg', 44.1333, 48.8395, 40.4167, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(13, 'Nissan', 'Sunny', 'XV Diesel Premium', '1052011.00', '1052011.00', 'Sedan', 'C', '1.4L dCi', 1461, 'Diesel', 'Manual', 5, 85, 3750, 200, 2000, 21, 23, 4455, 1695, 1515, 161, 2600, 1097, 490, 5.3, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 41, 5, 185, 65, 'R', 15, 185, 65, 'R', 15, 'images/13.jpg', 38.1333, 48.8395, 35.4167, 'https://media.zigcdn.com/media/model/2016/Jan/nissan_sunny_600x300.jpg'),
(14, 'Nissan', 'Terrano', 'XL Diesel Plus', '1169031.00', '1169031.00', 'SUV', 'C', '1.5 Diesel', 1461, 'Diesel', 'Manual', 5, 84, 3750, 200, 1900, 18, 20, 4331, 1822, 1671, 205, 2673, 1236, 475, 5.2, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, 'images/14.jpg', 26.3832, 39.326, 38.0916, 'https://www.nissan-cdn.net/content/dam/Nissan/global/vehicles/terrano/d10/0_pilot/overview/15TDIinrhd_TER-Hw001_M_k23.png.ximg.m_12_h.smart.png'),
(15, 'Nissan', 'Terrano', 'XL Petrol', '999000.00', '999000.00', 'SUV', 'C', '1.6 Petrol MPFI', 1598, 'Petrol', 'Manual', 5, 103, 5850, 145, 3750, 11, 13, 4331, 1822, 1671, 205, 2673, 1160, 475, 5.2, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 50, 5, 215, 65, 'R', 16, 215, 65, 'R', 16, 'images/15.jpg', 22.8137, 39.06, 36.3068, 'https://www.nissan-cdn.net/content/dam/Nissan/global/vehicles/terrano/d10/0_pilot/overview/15TDIinrhd_TER-Hw001_M_k23.png.ximg.m_12_h.smart.png'),
(16, 'Mahindra', 'Bolero', 'Plus NON AC BS3', '711519.00', '711519.00', 'SUV', 'B', 'Turbo Diesel', 2523, 'Diesel', 'Manual', 5, 63, 3200, 180, 1440, 14, 16, 4440, 1660, 1977, 195, 2794, 1200, 475, 5.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 9, 185, 75, 'R', 16, 185, 75, 'R', 16, 'images/33.jpg', 7.23438, 4.2, 5.66719, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(17, 'Mahindra', 'Bolero', 'DI AC BS3', '713096.00', '713096.00', 'SUV', 'B', 'Turbo Diesel', 2523, 'Diesel', 'Manual', 5, 63, 3200, 180, 1500, 14, 16, 4170, 1660, 1977, 195, 2794, 1200, 475, 5.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 9, 185, 75, 'R', 16, 185, 75, 'R', 16, 'images/33.jpg', 6.98438, 9.779, 5.54219, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(18, 'Mahindra', 'Bolero', ' LX NON AC BS4', '733358.00', '733358.00', 'SUV', 'B', 'DI Turbo Diesel Engine', 2523, 'Diesel', 'Manual', 5, 63, 3200, 180, 1440, 14, 16, 4440, 16660, 1977, 195, 2794, 1545, 245, 5.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 9, 185, 75, 'R', 16, 185, 75, 'R', 16, 'images/33.jpg', 7.23438, 5.4075, 5.66719, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(19, 'Mahindra', 'Bolero ', 'EX AC BS4', '744262.00', '744262.00', 'SUV', 'B', 'm2DiCR', 2523, 'Diesel', 'Manual', 5, 63, 3200, 195, 1400, 14, 16, 4221, 1745, 1910, 183, 2794, 1545, 245, 5.9, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 60, 7, 215, 75, 'R', 15, 215, 75, 'R', 15, 'images/33.jpg', 17.9487, 5.4075, 23.5243, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(20, 'Mahindra', 'Bolero', 'ZLX BS4', '866072.00', '866072.00', 'SUV', 'B', 'm2DiCR', 2523, 'Diesel', 'Manual', 5, 63, 3200, 195, 1400, 14, 16, 4107, 1745, 1880, 180, 2680, 2000, 245, 5.8, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 60, 7, 215, 75, 'R', 15, 215, 75, 'R', 15, 'images/33.jpg', 27.9487, 7, 26.0743, 'https://imgct3.aeplcdn.com/img/800x600/car-data/big/mahindra-bolero-default-image.png-version2016091414.png'),
(21, 'Mahindra', 'Scorpio', 'S4 PLUS', '1062787.00', '1062787.00', 'SUV', 'C', '2.0L', 1999, 'Diesel', 'Manual', 5, 120, 4000, 280, 1800, 13, 15, 4456, 1820, 1995, 180, 2680, 2650, 245, 5.4, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 60, 8, 235, 65, 'R', 17, 235, 65, 'R', 17, 'images/21.jpg', 24.2778, 44.275, 29.4389, 'https://images0.cardekho.com/car-images/carexteriorimages/large/Mahindra/Mahindra-Scorpio/front-left-side-047.jpg'),
(22, 'Mahindra', 'Scorpio', 'S6 PLUS 1.99', '1166320.00', '1166320.00', 'SUV', 'C', '2.0L', 1999, 'Diesel', 'Manual', 5, 120, 4000, 280, 1800, 13, 15, 4456, 1820, 1995, 180, 2680, 2650, 245, 5.4, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 0, 0, 60, 7, 235, 65, 'R', 17, 235, 65, 'R', 17, 'images/22.jpg', 36.2778, 44.275, 31.9389, 'https://images0.cardekho.com/car-images/carexteriorimages/large/Mahindra/Mahindra-Scorpio/front-left-side-047.jpg'),
(23, 'Mahindra ', 'Scorpio ', 'S8', '1254343.00', '1254343.00', 'SUV', 'C', '4 cylinder mHawk CRDe diesel engine', 2179, 'Diesel', 'Manual', 5, 120, 4000, 280, 1800, 13, 15, 4456, 1820, 1995, 180, 2680, 2650, 245, 5.4, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 60, 7, 235, 65, 'R', 17, 235, 65, 'R', 17, 'images/23.jpg', 36.2778, 54.275, 39.4389, 'https://images0.cardekho.com/car-images/carexteriorimages/large/Mahindra/Mahindra-Scorpio/front-left-side-047.jpg'),
(24, 'Honda', 'City', '2014 E 1.5L i-VTEC ', '811000.00', '811000.00', 'Sedan', 'C', '1.5L i-VTEC', 1497, 'Petrol', 'Manual', 5, 117, 6600, 145, 4600, 16, 18, 4440, 1695, 1495, 165, 2600, 1029, 510, 5.3, 1, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 40, 5, 175, 65, 'R', 15, 175, 65, 'R', 15, 'images/24.jpg', 17.4625, 38.6015, 28.5812, 'https://imgct1.aeplcdn.com/img/800x600/car-data/big/honda-city-default-image.png-version2016090815.png'),
(25, 'Honda', 'City', '2014 VX1.5Li-VTEC ', '1205000.00', '1205000.00', 'Sedan', 'C', '1.5L i-VTEC', 1497, 'Petrol', 'Automatic', 5, 117, 6600, 145, 4600, 16, 18, 4440, 1695, 1495, 165, 2600, 1085, 510, 5.3, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 40, 5, 175, 65, 'R', 15, 175, 65, 'R', 15, 'images/26.jpg', 52.4625, 48.7975, 56.0812, 'https://imgct1.aeplcdn.com/img/800x600/car-data/big/honda-city-default-image.png-version2016090815.png'),
(26, 'Honda', 'City', 'VX(O) MT i-DTEC ', '1243000.00', '1243000.00', 'Sedan', 'C', '1.5L i-DTEC', 1498, 'Diesel', 'Manual', 6, 99, 3600, 200, 1750, 23, 25, 1695, 1695, 1495, 165, 2600, 1165, 510, 5.3, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 40, 5, 175, 65, 'R', 15, 175, 65, 'R', 15, 'images/26.jpg', 57.0893, 49.0775, 40.8946, 'https://imgct1.aeplcdn.com/img/800x600/car-data/big/honda-city-default-image.png-version2016090815.png'),
(27, 'Honda', 'Jazz', 'SV 1.2L i-VTEC', '679000.00', '679000.00', 'Hatchback', 'C', '1.2L', 1199, 'Petrol', 'Manual', 5, 89, 6000, 110, 4800, 16, 18, 3955, 1694, 1544, 165, 2530, 1042, 354, 5.1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 40, 5, 175, 65, 'R', 15, 175, 65, 'R', 15, 'images/28.jpg', 21.8875, 48.647, 38.3937, 'https://imgct2.aeplcdn.com/img/800x600/car-data/big/honda-jazz-default-image.png-version2016091414.png'),
(28, 'Honda ', 'Jazz', 'VX 1.5L i-DTEC', '899000.00', '899000.00', 'Hatchback', 'C', '1.5L', 1498, 'Diesel', 'Manual', 6, 99, 3600, 200, 1750, 25, 27, 3955, 1694, 1544, 165, 2530, 1154, 354, 5.1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 1, 0, 40, 5, 175, 65, 'R', 15, 175, 65, 'R', 15, 'images/28.jpg', 44.0893, 49.039, 43.4946, 'http://data1.ibtimes.co.in/cache-img-800-413/en/full/600640/1457256600_honda-jazz-keenlight.jpg'),
(29, 'Ford', 'Figo', 'Base 1.2 Ti-VCT ', '454000.00', '454000.00', 'Hatchback', 'B', 'Ti-VCT ', 1196, 'Petrol', 'Manual', 5, 87, 6300, 112, 4000, 16, 18, 3886, 1695, 1525, 174, 2491, 1029, 257, 4.9, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 42, 5, 175, 65, 'R', 14, 175, 65, 'R', 14, 'images/29.jpg', 12.0905, 23.6015, 26.0952, 'https://images.cardekho.com/images/car-images/large/Ford/Ford-Figo/047.jpg'),
(30, 'Ford', 'Figo', 'Titanium 1.5 Ti-VCT ', '727000.00', '727000.00', 'Hatchback', 'B', 'Ti-VCT', 1499, 'Petrol', 'Automatic', 5, 110, 6300, 136, 4250, 16, 18, 3886, 1695, 1525, 174, 2491, 1029, 257, 4.9, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 42, 5, 175, 64, 'R', 14, 175, 64, 'R', 14, 'images/30.jpg', 34.473, 38.6015, 53.7865, 'https://images.cardekho.com/images/car-images/large/Ford/Ford-Figo/047.jpg'),
(31, 'Ford', 'Figo', 'Titanium 1.5 TDCi ', '654000.00', '654000.00', 'Hatchback', 'B', 'TDCi ', 1498, 'Diesel', 'Manual', 5, 99, 3750, 215, 1750, 23, 25, 3886, 1695, 1525, 174, 2491, 1029, 257, 4.9, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 0, 40, 5, 175, 65, 'R', 14, 175, 65, 'R', 14, 'images/30.jpg', 39.4629, 38.6015, 36.2814, 'https://images.cardekho.com/images/car-images/large/Ford/Ford-Figo/047.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
