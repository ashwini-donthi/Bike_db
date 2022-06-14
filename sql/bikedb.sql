-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 20, 2021 at 04:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `uname` varchar(40) NOT NULL,
  `pwd` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`uname`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bike_d1`
--

CREATE TABLE `bike_d1` (
  `BIKE_ID` int(11) NOT NULL,
  `ENGINE_NO` char(6) NOT NULL,
  `VIN` char(17) NOT NULL,
  `VERSION_YEAR` int(11) NOT NULL,
  `VERSION_NAME` varchar(45) NOT NULL,
  `PRICE` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_d1`
--

INSERT INTO `bike_d1` (`BIKE_ID`, `ENGINE_NO`, `VIN`, `VERSION_YEAR`, `VERSION_NAME`, `PRICE`) VALUES
(1, 'E76234', '1S4PT4GK6BW601937', 2019, 'Drum', '74400.00'),
(2, 'R17253', '2S3CCAGG2DH567426', 2019, 'Drum - CBS', '71000.00'),
(3, 'T32617', '1SVBP8CU5D5120464', 2019, 'Disc - CBS', '74700.00'),
(4, 'Y45234', 'JSKDE167770196616', 2019, 'Special Edition - Disc CBS', '76400.00'),
(5, 'U90826', '2S3CA3CV0AH316290', 2018, 'SP Rear Disc', '103826.00'),
(6, 'I65243', '1SMCU0GX6DUB13269', 2018, 'Dual Tone Rear Disc', '103826.00'),
(7, 'O62837', '4SGAB57E94A496389', 2018, 'ABS', '103826.00'),
(8, 'P29379', 'JS1SG65625G730677', 2018, 'SP ABS', '103826.00'),
(9, 'L72626', '1S4FY29P2VP494059', 2016, 'Rear Disc', '113376.00'),
(10, 'K25368', 'JS8AZ2NE6E9049124', 2018, 'SP Rear Disc', '113376.00'),
(11, 'J46583', '1SD8W3GT7FEA48119', 2018, 'price ashte', '113376.00'),
(12, 'H34749', '2SCEC19V941152774', 2020, 'ABS', '113376.00'),
(13, 'G64738', 'KSDPBCA23C7324436', 2021, 'Standard', '82700.00'),
(14, 'F63849', 'WSUBJAFM6CA004331', 2019, '2019 Edition', '1617320.00'),
(15, 'D82937', '1S6AG5RX9E0111346', 2020, 'SP', '110076.00'),
(16, 'S52282', '3SNDA23D16S596494', 2020, 'Standard', '120076.00'),
(17, 'A74839', '1SNEC13T25R117856', 2021, 'ABS', '102076.00'),
(18, 'Z52639', '1S2JB12FX47137471', 2021, 'SP ABS', '102076.00'),
(19, 'X54658', '1SDKF37G4VEB50095', 2020, 'Standard', '745961.00'),
(20, 'C98577', '5S1AZ2MH0FN227329', 2020, 'SP', '109626.00'),
(21, 'V29384', '1STZR15U4WPB29325', 2020, 'Standard', '109626.00'),
(22, 'B94837', '1S1YZ23J4L5885957', 2021, 'Dual Tone', '49237.00'),
(23, 'C63728', '3SGAL4EK6ES599054', 2019, 'Standard', '52953.00'),
(24, 'M20393', '2SMGK5C82EBD06738', 2021, 'Standard', '225455.00'),
(25, 'S63527', '1S7HE48K87S104449', 2019, 'ABS', '884034.00'),
(26, 'T29387', '4S4BP61C787303050', 2015, 'R', '2319522.00'),
(27, 'H64839', '5SNYF4H57FB032110', 2015, 'Standard', '1526508.00'),
(28, 'E09282', '5SNRL5H6XCB104280', 2015, 'Standard', '1473818.00'),
(29, 'X57822', '2SMDJ8JK8FBL31364', 2021, 'Standard', '831875.00'),
(30, 'G63882', '1SABP2731GF254510', 2019, 'Standard', '1416325.00'),
(31, 'N71826', '3S1CN7AP6FL861006', 2021, 'Standard', '710703.00'),
(32, 'P83736', '1SGCR2F59FA089640', 2016, 'Standard', '55073.00'),
(33, 'R37838', '1S4BA41E74C948087', 2015, '125', '49980.00'),
(34, 'I93836', '1S4HP54K8Y4138036', 2019, 'SEU', '60158.00'),
(35, 'T38474', '3S1BC1CP5BL432669', 2019, 'SCD', '58361.00'),
(36, 'H89282', '1SBNE31L75HA05999', 2016, 'Kick Start', '42985.00'),
(37, 'R56573', '1SDKF37G0VEB24514', 2016, 'Electric Start', '42985.00'),
(38, 'M87363', '1SUYSSEB2WL827369', 2021, 'Standard', '71009.00'),
(39, 'H02635', '1STRF12228KC75685', 2019, 'Intruder', '1014976.00'),
(40, 'L45575', '4S32B2FF3BE024516', 2021, 'Intruder', '1550000.00'),
(41, 'Z89937', '1STEW1CG7FFA14003', 2021, 'Standard', '1638850.00'),
(42, 'I58676', '1S1AF5F5XA7177885', 2021, 'B.O.S.S. Edition', '1638850.00'),
(43, 'Q82746', '1SMNU40S84EA3768', 2019, '1250SA', '1006606.00'),
(44, 'D04973', '1SNUKBE09AR119587', 2016, '400F', '1643939.00'),
(45, 'E27354', '1STRF17233NA27932', 2016, 'R600', '1643939.00'),
(46, 'C54637', '1SMCU0EG5AKC67482', 2016, 'R750', '1643939.00'),
(47, 'H20937', '1SUJGLBG7CSB48775', 2016, 'Standard', '1643939.00'),
(48, 'Y41758', '1S1AL55F877262915', 2020, 'Standard', '216498.00');

-- --------------------------------------------------------

--
-- Table structure for table `bike_d2`
--

CREATE TABLE `bike_d2` (
  `MODEL_NAME` varchar(45) NOT NULL,
  `PRICE` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_d2`
--

INSERT INTO `bike_d2` (`MODEL_NAME`, `PRICE`) VALUES
('Suzuki Hayate', '42985.00'),
('Suzuki Let\'s', '49237.00'),
('Suzuki Swish', '49980.00'),
('Suzuki Hayate EP', '52953.00'),
('Suzuki Access 125', '55073.00'),
('Suzuki SlingShot Plus', '58361.00'),
('Suzuki SlingShot Plus', '60158.00'),
('Suzuki Access 125', '71000.00'),
('Suzuki GS150R', '71009.00'),
('Suzuki Access 125', '74400.00'),
('Suzuki Access 125', '74700.00'),
('Suzuki Access 125', '76400.00'),
('Suzuki Burgman Street 125', '82700.00'),
('Suzuki Gixxer SF Fi', '102076.00'),
('Suzuki Gixxer', '103826.00'),
('Suzuki Intruder 150 Fi', '109626.00'),
('Suzuki Intruder 150', '110076.00'),
('Suzuki Gixxer SF', '113376.00'),
('Suzuki Intruder 150', '120076.00'),
('Suzuki Inazuma 250', '216498.00'),
('Suzuki DR-Z50', '225455.00'),
('Suzuki RM-Z250', '710703.00'),
('Suzuki GSX-S750', '745961.00'),
('Suzuki RM-Z450', '831875.00'),
('Suzuki V-Strom 650 XT', '884034.00'),
('Suzuki Bandit', '1006606.00'),
('Suzuki M800', '1014976.00'),
('Suzuki V-Strom 1000', '1416325.00'),
('Suzuki GSX-S1000', '1473818.00'),
('Suzuki GSX-S1000F', '1526508.00'),
('Suzuki M1800RZ', '1550000.00'),
('Suzuki Hayabusa', '1617320.00'),
('Suzuki Intruder M1800R', '1638850.00'),
('Suzuki GSX-R1000', '1643939.00'),
('Suzuki GSX-R1000', '2319522.00');

-- --------------------------------------------------------

--
-- Table structure for table `brakes_wheels_d1`
--

CREATE TABLE `brakes_wheels_d1` (
  `VIN` char(17) NOT NULL,
  `FRONT_BRAKE_TYPE` varchar(10) DEFAULT NULL,
  `FRONT_BRAKE_SIZE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brakes_wheels_d1`
--

INSERT INTO `brakes_wheels_d1` (`VIN`, `FRONT_BRAKE_TYPE`, `FRONT_BRAKE_SIZE`) VALUES
('1S1AF5F5XA7177885', 'Disc ', 310),
('1S1AL55F877262915', 'Disc ', 310),
('1S1YZ23J4L5885957', 'Drum ', 120),
('1S2JB12FX47137471', 'Disc ', 266),
('1S4BA41E74C948087', 'Drum ', 120),
('1S4FY29P2VP494059', 'Disc ', 266),
('1S4HP54K8Y4138036', 'Drum ', 120),
('1S4PT4GK6BW601937', 'Drum ', 120),
('1S6AG5RX9E0111346', 'Disc ', 266),
('1S7HE48K87S104449', 'Disc ', 310),
('1SABP2731GF254510', 'Disc ', 310),
('1SBNE31L75HA05999', 'Drum ', 130),
('1SD8W3GT7FEA48119', 'Disc ', 266),
('1SDKF37G0VEB24514', 'Drum ', 130),
('1SDKF37G4VEB50095', 'Disc ', 310),
('1SGCR2F59FA089640', 'Drum ', 120),
('1SMCU0EG5AKC67482', 'Disc ', 310),
('1SMCU0GX6DUB13269', 'Disc ', 266),
('1SMNU40S84EA3768', 'Disc ', 310),
('1SNEC13T25R117856', 'Disc ', 266),
('1SNUKBE09AR119587', 'Disc ', 310),
('1STEW1CG7FFA14003', 'Disc ', 310),
('1STRF12228KC75685', 'Disc ', 300),
('1STRF17233NA27932', 'Disc ', 310),
('1STZR15U4WPB29325', 'Disc ', 266),
('1SUJGLBG7CSB48775', 'Disc ', 310),
('1SUYSSEB2WL827369', 'Disc ', 240),
('1SVBP8CU5D5120464', 'Disc ', 120),
('2S3CA3CV0AH316290', 'Disc ', 266),
('2S3CCAGG2DH567426', 'Drum ', 120),
('2SCEC19V941152774', 'Disc ', 266),
('2SMDJ8JK8FBL31364', 'Disc ', 310),
('2SMGK5C82EBD06738', 'Drum ', 120),
('3S1BC1CP5BL432669', 'Disc ', 240),
('3S1CN7AP6FL861006', 'Disc ', 310),
('3SGAL4EK6ES599054', 'Drum ', 130),
('3SNDA23D16S596494', 'Disc ', 266),
('4S32B2FF3BE024516', 'Disc ', 310),
('4S4BP61C787303050', 'Disc ', 266),
('4SGAB57E94A496389', 'Disc ', 266),
('5S1AZ2MH0FN227329', 'Disc ', 266),
('5SNRL5H6XCB104280', 'Disc ', 310),
('5SNYF4H57FB032110', 'Disc ', 310),
('JS1SG65625G730677', 'Disc ', 266),
('JS8AZ2NE6E9049124', 'Disc ', 266),
('JSKDE167770196616', 'Disc ', 120),
('KSDPBCA23C7324436', 'Disc ', 120),
('WSUBJAFM6CA004331', 'Disc ', 310);

-- --------------------------------------------------------

--
-- Table structure for table `brakes_wheels_d2`
--

CREATE TABLE `brakes_wheels_d2` (
  `FRONT_BRAKE_SIZE` int(11) NOT NULL,
  `REAR_BREAK_TYPE` varchar(10) DEFAULT NULL,
  `REAR_WHEEL_SIZE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brakes_wheels_d2`
--

INSERT INTO `brakes_wheels_d2` (`FRONT_BRAKE_SIZE`, `REAR_BREAK_TYPE`, `REAR_WHEEL_SIZE`) VALUES
(120, 'Drum ', 10),
(130, 'Drum ', 17),
(240, 'Drum ', 17),
(266, 'Disc ', 17),
(300, 'Drum ', 19),
(310, 'Disc ', 17);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` bigint(20) NOT NULL,
  `BIKE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `FNAME`, `LNAME`, `PHONE_NUMBER`, `BIKE_ID`) VALUES
(1, 'Amit ', 'Bhatia', 7906125201, 1),
(2, 'Sanjay ', 'Sharma', 9996118438, 4),
(3, 'Ram  ', 'Gupta', 8067349934, 45),
(4, 'Gurmit ', 'Singh', 8138348183, 29),
(5, 'Sharat', 'Shambu', 6698270935, 2),
(6, 'Aakash ', 'Reddy', 6781172630, 22),
(7, 'Lakshman ', 'Mishra', 6944733329, 3),
(8, 'Rohit ', 'Agarwal', 8973764434, 7),
(9, 'Rakesh ', 'Naik', 6741914016, 16),
(10, 'Kushal', 'Nayak', 8917522852, 19),
(11, 'Priyanka ', 'Acharya', 7931322930, 11),
(12, 'Kiran ', 'Chawla', 6127926312, 38),
(13, 'Kaushik', 'Raj', 6127975982, 27),
(14, 'Shivaraj', 'Gowda', 8160651749, 17),
(15, 'Anand ', 'Ahuja', 9155551939, 42),
(16, 'Praful ', 'Patel', 9155651938, 21),
(17, 'Harshith ', 'K R', 9855521099, 12),
(18, 'Surya ', 'Verma', 9455505513, 44),
(19, 'Chetan ', 'Bhatt', 9455559735, 5),
(20, 'Ankit ', 'Shetty', 9455659735, 6);

-- --------------------------------------------------------

--
-- Table structure for table `electricals_d1`
--

CREATE TABLE `electricals_d1` (
  `VIN` char(17) NOT NULL,
  `ODOMETER` varchar(10) DEFAULT NULL,
  `SPEEDOMETER` varchar(10) DEFAULT NULL,
  `ANTI_BRAKING_SYSTEM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricals_d1`
--

INSERT INTO `electricals_d1` (`VIN`, `ODOMETER`, `SPEEDOMETER`, `ANTI_BRAKING_SYSTEM`) VALUES
('1S1AF5F5XA7177885', 'Digital ', 'Analogue ', 'No'),
('1S1AL55F877262915', 'Digital ', 'Digital ', 'Yes'),
('1S1YZ23J4L5885957', 'Analogue ', 'Analogue ', 'No'),
('1S2JB12FX47137471', 'Digital ', 'Digital ', 'Yes'),
('1S4BA41E74C948087', 'Analogue ', 'Analogue ', 'No'),
('1S4FY29P2VP494059', 'Digital ', 'Digital ', 'No'),
('1S4HP54K8Y4138036', 'Analogue ', 'Analogue ', 'No'),
('1S4PT4GK6BW601937', 'Digital ', 'Analogue ', 'No'),
('1S6AG5RX9E0111346', 'Digital ', 'Digital ', 'Yes'),
('1S7HE48K87S104449', 'Digital ', 'Digital ', 'Yes'),
('1SABP2731GF254510', 'Digital ', 'Digital ', 'Yes'),
('1SBNE31L75HA05999', 'Analogue ', 'Analogue ', 'No'),
('1SD8W3GT7FEA48119', 'Digital ', 'Digital ', 'No'),
('1SDKF37G0VEB24514', 'Analogue ', 'Analogue ', 'No'),
('1SDKF37G4VEB50095', 'Digital ', 'Digital ', 'Yes'),
('1SGCR2F59FA089640', 'Analogue ', 'Analogue ', 'No'),
('1SMCU0EG5AKC67482', 'Analogue ', 'Analogue ', 'No'),
('1SMCU0GX6DUB13269', 'Digital ', 'Digital ', 'No'),
('1SMNU40S84EA3768', 'Digital ', 'Digital ', 'Yes'),
('1SNEC13T25R117856', 'Digital ', 'Digital ', 'Yes'),
('1SNUKBE09AR119587', 'Analogue ', 'Analogue ', 'No'),
('1STEW1CG7FFA14003', 'Digital ', 'Analogue ', 'No'),
('1STRF12228KC75685', 'Digital ', 'Analogue ', 'No'),
('1STRF17233NA27932', 'Digital ', 'Digital ', 'Yes'),
('1STZR15U4WPB29325', 'Digital ', 'Digital ', 'Yes'),
('1SUJGLBG7CSB48775', 'Digital ', 'Digital ', 'Yes'),
('1SUYSSEB2WL827369', 'Digital ', 'Digital ', 'No'),
('1SVBP8CU5D5120464', 'Digital ', 'Analogue ', 'No'),
('2S3CA3CV0AH316290', 'Digital ', 'Digital ', 'No'),
('2S3CCAGG2DH567426', 'Digital ', 'Analogue ', 'No'),
('2SCEC19V941152774', 'Digital ', 'Digital ', 'Yes'),
('2SMDJ8JK8FBL31364', 'Analogue ', 'Analogue ', 'No'),
('2SMGK5C82EBD06738', 'Digital ', 'Digital ', 'Yes'),
('3S1BC1CP5BL432669', 'Analogue ', 'Analogue ', 'No'),
('3S1CN7AP6FL861006', 'Analogue ', 'Analogue ', 'No'),
('3SGAL4EK6ES599054', 'Analogue ', 'Analogue ', 'No'),
('3SNDA23D16S596494', 'Digital ', 'Digital ', 'Yes'),
('4S32B2FF3BE024516', 'Digital ', 'Digital ', 'Yes'),
('4S4BP61C787303050', 'Digital ', 'Digital ', 'Yes'),
('4SGAB57E94A496389', 'Digital ', 'Digital ', 'Yes'),
('5S1AZ2MH0FN227329', 'Digital ', 'Digital ', 'Yes'),
('5SNRL5H6XCB104280', 'Digital ', 'Digital ', 'Yes'),
('5SNYF4H57FB032110', 'Digital ', 'Digital ', 'Yes'),
('JS1SG65625G730677', 'Digital ', 'Digital ', 'Yes'),
('JS8AZ2NE6E9049124', 'Digital ', 'Digital ', 'No'),
('JSKDE167770196616', 'Digital ', 'Analogue ', 'No'),
('KSDPBCA23C7324436', 'Digital ', 'Digital ', 'No'),
('WSUBJAFM6CA004331', 'Digital ', 'Analogue ', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `electricals_d2`
--

CREATE TABLE `electricals_d2` (
  `LOW_FUEL_INDICATOR` varchar(10) DEFAULT NULL,
  `ANTI_BRAKING_SYSTEM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricals_d2`
--

INSERT INTO `electricals_d2` (`LOW_FUEL_INDICATOR`, `ANTI_BRAKING_SYSTEM`) VALUES
('Yes', 'No'),
('Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `electricals_d3`
--

CREATE TABLE `electricals_d3` (
  `SPEEDOMETER` varchar(10) NOT NULL,
  `LOW_FUEL_INDICATOR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricals_d3`
--

INSERT INTO `electricals_d3` (`SPEEDOMETER`, `LOW_FUEL_INDICATOR`) VALUES
('Analogue ', 'Yes'),
('Digital ', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `electricals_d4`
--

CREATE TABLE `electricals_d4` (
  `ODOMETER` varchar(10) NOT NULL,
  `LOW_FUEL_INDICATOR` varchar(10) DEFAULT NULL,
  `LOW_OIL_INDICATOR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricals_d4`
--

INSERT INTO `electricals_d4` (`ODOMETER`, `LOW_FUEL_INDICATOR`, `LOW_OIL_INDICATOR`) VALUES
('Analogue ', 'Yes', 'No'),
('Digital ', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `engine_spec_d1`
--

CREATE TABLE `engine_spec_d1` (
  `ENGINE_NO` char(6) NOT NULL,
  `DISPLACEMENT` float DEFAULT NULL,
  `STROKE_mm` float DEFAULT NULL,
  `FUEL_DELIVERY_SYSTEM` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engine_spec_d1`
--

INSERT INTO `engine_spec_d1` (`ENGINE_NO`, `DISPLACEMENT`, `STROKE_mm`, `FUEL_DELIVERY_SYSTEM`) VALUES
('A74839', 154.9, 63, 'Fuel Injection'),
('B94837', 124, 57, 'Carburettor'),
('C54637', 805, 74, 'Carburettor'),
('C63728', 155, 63, 'Carburettor'),
('C98577', 112, 55, 'Carburettor'),
('D04973', 113, 55, 'Carburettor'),
('D82937', 154.9, 63, 'Fuel Injection'),
('E09282', 1255, 64, 'Carburettor'),
('E27354', 149, 58, 'Carburettor'),
('E76234', 124, 57, 'Carburettor'),
('F63849', 1783, 90, 'Carburettor'),
('G63882', 124, 55, 'Carburettor'),
('G64738', 155, 62, 'Carburettor'),
('H02635', 124, 55, 'Carburettor'),
('H20937', 999, 57, 'Fuel Injection'),
('H34749', 249, 53.6, 'Carburettor'),
('H64839', 1255, 64, 'Carburettor'),
('H89282', 124, 57.4, 'Carburettor'),
('I58676', 154.9, 63, 'Fuel Injection'),
('I65243', 645, 62.6, 'Fuel Injection'),
('I93836', 155, 62, 'Carburettor'),
('J46583', 1037, 66, 'Fuel Injection'),
('K25368', 449, 62.1, 'Carburettor'),
('L45575', 154.9, 63, 'Carburettor'),
('L72626', 999, 59, 'Fuel Injection'),
('M20393', 155, 62, 'Carburettor'),
('M87363', 1783, 90, 'Carburettor'),
('N71826', 124, 55, 'Carburettor'),
('O62837', 999.8, 55, 'Fuel Injection'),
('P29379', 999, 59, 'Fuel Injection'),
('P83736', 155, 62, 'Carburettor'),
('Q82746', 113, 55, 'Carburettor'),
('R17253', 124, 57, 'Carburettor'),
('R37838', 155, 62, 'Carburettor'),
('R56573', 1340, 65, 'Electronic Fuel Injection'),
('S52282', 749, 46, 'Fuel Injection'),
('S63527', 1255, 64, 'Carburettor'),
('T29387', 248, 55, 'Fuel Injection'),
('T32617', 124, 57, 'Carburettor'),
('T38474', 155, 62, 'Carburettor'),
('U90826', 49, 41.8, 'Carburettor'),
('V29384', 113, 55, 'Carburettor'),
('X54658', 1255, 64, 'Carburettor'),
('X57822', 124, 55, 'Carburettor'),
('Y41758', 1783, 90, 'Carburettor'),
('Y45234', 155, 62, 'Carburettor'),
('Z52639', 154.9, 63, 'Fuel Injection'),
('Z89937', 154.9, 63, 'Carburettor');

-- --------------------------------------------------------

--
-- Table structure for table `engine_spec_d2`
--

CREATE TABLE `engine_spec_d2` (
  `DISPLACEMENT` float NOT NULL,
  `CYLINDERS` int(11) NOT NULL,
  `NUMBER_OF_GEARS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engine_spec_d2`
--

INSERT INTO `engine_spec_d2` (`DISPLACEMENT`, `CYLINDERS`, `NUMBER_OF_GEARS`) VALUES
(49, 1, 3),
(112, 1, 0),
(113, 1, 4),
(124, 1, 0),
(149, 1, 5),
(154.9, 1, 5),
(155, 1, 5),
(248, 2, 6),
(249, 1, 5),
(449, 1, 5),
(645, 2, 6),
(749, 4, 6),
(805, 2, 2),
(999, 4, 6),
(999.8, 4, 6),
(1037, 2, 6),
(1255, 4, 6),
(1340, 4, 6),
(1783, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `engine_spec_d3`
--

CREATE TABLE `engine_spec_d3` (
  `CYLINDERS` int(11) NOT NULL,
  `VALVES_PER_CYLINDER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engine_spec_d3`
--

INSERT INTO `engine_spec_d3` (`CYLINDERS`, `VALVES_PER_CYLINDER`) VALUES
(1, 2),
(2, 4),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `engine_spec_d4`
--

CREATE TABLE `engine_spec_d4` (
  `NUMBER_OF_GEARS` int(11) NOT NULL,
  `GEARBOX_TYPE` varchar(30) DEFAULT NULL,
  `VALVES_PER_CYLINDER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engine_spec_d4`
--

INSERT INTO `engine_spec_d4` (`NUMBER_OF_GEARS`, `GEARBOX_TYPE`, `VALVES_PER_CYLINDER`) VALUES
(0, 'Automatic', 2),
(2, 'Manual', 4),
(3, 'Manual', 2),
(4, 'Manual', 2),
(5, 'Manual', 2),
(6, 'Manual', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `bike_d1`
--
ALTER TABLE `bike_d1`
  ADD PRIMARY KEY (`BIKE_ID`),
  ADD KEY `BIKE_D1_FK2` (`VIN`),
  ADD KEY `BIKE_D1_FK3` (`ENGINE_NO`),
  ADD KEY `BIKE_D1_FK4` (`PRICE`);

--
-- Indexes for table `bike_d2`
--
ALTER TABLE `bike_d2`
  ADD PRIMARY KEY (`PRICE`);

--
-- Indexes for table `brakes_wheels_d1`
--
ALTER TABLE `brakes_wheels_d1`
  ADD PRIMARY KEY (`VIN`),
  ADD KEY `BRAKES_WHEELS_D1_FK1` (`FRONT_BRAKE_SIZE`);

--
-- Indexes for table `brakes_wheels_d2`
--
ALTER TABLE `brakes_wheels_d2`
  ADD PRIMARY KEY (`FRONT_BRAKE_SIZE`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `CUSTOMER_FK1` (`BIKE_ID`);

--
-- Indexes for table `electricals_d1`
--
ALTER TABLE `electricals_d1`
  ADD PRIMARY KEY (`VIN`),
  ADD KEY `ELECTRICALS_D1_FK1` (`ODOMETER`),
  ADD KEY `ELECTRICALS_D1_FK2` (`SPEEDOMETER`),
  ADD KEY `ELECTRICALS_D1_FK3` (`ANTI_BRAKING_SYSTEM`);

--
-- Indexes for table `electricals_d2`
--
ALTER TABLE `electricals_d2`
  ADD PRIMARY KEY (`ANTI_BRAKING_SYSTEM`);

--
-- Indexes for table `electricals_d3`
--
ALTER TABLE `electricals_d3`
  ADD PRIMARY KEY (`SPEEDOMETER`);

--
-- Indexes for table `electricals_d4`
--
ALTER TABLE `electricals_d4`
  ADD PRIMARY KEY (`ODOMETER`);

--
-- Indexes for table `engine_spec_d1`
--
ALTER TABLE `engine_spec_d1`
  ADD PRIMARY KEY (`ENGINE_NO`),
  ADD KEY `ENGINE_SPEC_D1_FK1` (`DISPLACEMENT`);

--
-- Indexes for table `engine_spec_d2`
--
ALTER TABLE `engine_spec_d2`
  ADD PRIMARY KEY (`DISPLACEMENT`),
  ADD KEY `ENGINE_SPEC_D2_FK1` (`CYLINDERS`),
  ADD KEY `ENGINE_SPEC_D2_FK2` (`NUMBER_OF_GEARS`);

--
-- Indexes for table `engine_spec_d3`
--
ALTER TABLE `engine_spec_d3`
  ADD PRIMARY KEY (`CYLINDERS`);

--
-- Indexes for table `engine_spec_d4`
--
ALTER TABLE `engine_spec_d4`
  ADD PRIMARY KEY (`NUMBER_OF_GEARS`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bike_d1`
--
ALTER TABLE `bike_d1`
  ADD CONSTRAINT `BIKE_D1_FK1` FOREIGN KEY (`VIN`) REFERENCES `brakes_wheels_d1` (`VIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BIKE_D1_FK2` FOREIGN KEY (`VIN`) REFERENCES `electricals_d1` (`VIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BIKE_D1_FK3` FOREIGN KEY (`ENGINE_NO`) REFERENCES `engine_spec_d1` (`ENGINE_NO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BIKE_D1_FK4` FOREIGN KEY (`PRICE`) REFERENCES `bike_d2` (`PRICE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brakes_wheels_d1`
--
ALTER TABLE `brakes_wheels_d1`
  ADD CONSTRAINT `BRAKES_WHEELS_D1_FK1` FOREIGN KEY (`FRONT_BRAKE_SIZE`) REFERENCES `brakes_wheels_d2` (`FRONT_BRAKE_SIZE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `CUSTOMER_FK1` FOREIGN KEY (`BIKE_ID`) REFERENCES `bike_d1` (`BIKE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `electricals_d1`
--
ALTER TABLE `electricals_d1`
  ADD CONSTRAINT `ELECTRICALS_D1_FK1` FOREIGN KEY (`ODOMETER`) REFERENCES `electricals_d4` (`ODOMETER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ELECTRICALS_D1_FK2` FOREIGN KEY (`SPEEDOMETER`) REFERENCES `electricals_d3` (`SPEEDOMETER`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ELECTRICALS_D1_FK3` FOREIGN KEY (`ANTI_BRAKING_SYSTEM`) REFERENCES `electricals_d2` (`ANTI_BRAKING_SYSTEM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `engine_spec_d1`
--
ALTER TABLE `engine_spec_d1`
  ADD CONSTRAINT `ENGINE_SPEC_D1_FK1` FOREIGN KEY (`DISPLACEMENT`) REFERENCES `engine_spec_d2` (`DISPLACEMENT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `engine_spec_d2`
--
ALTER TABLE `engine_spec_d2`
  ADD CONSTRAINT `ENGINE_SPEC_D2_FK1` FOREIGN KEY (`CYLINDERS`) REFERENCES `engine_spec_d3` (`CYLINDERS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ENGINE_SPEC_D2_FK2` FOREIGN KEY (`NUMBER_OF_GEARS`) REFERENCES `engine_spec_d4` (`NUMBER_OF_GEARS`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
