-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 06:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martech_cnc_kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `downtime_records`
--

CREATE TABLE `downtime_records` (
									`downtime_id` int(11) NOT NULL,
									`machine_downtime` varchar(255) NOT NULL,
									`downtime_start` datetime NOT NULL,
									`downtime_end` datetime NOT NULL,
									`downtime_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downtime_records`
--

INSERT INTO `downtime_records` (`downtime_id`, `machine_downtime`, `downtime_start`, `downtime_end`, `downtime_reason`) VALUES
																															(1, 'STAR', '2022-08-09 11:01:00', '2022-08-09 12:01:00', ''),
																															(2, 'SCRW1', '2022-08-09 11:02:00', '2022-08-09 13:02:00', ''),
																															(3, 'STAR', '2022-08-10 09:09:00', '2022-08-10 10:09:00', ''),
																															(4, 'STAR', '2022-08-16 16:40:00', '2022-08-16 17:41:00', ''),
																															(5, 'STAR', '2022-08-16 07:00:00', '2022-08-16 17:00:00', ''),
																															(6, 'STAR', '2022-08-16 17:15:00', '2022-08-16 18:17:00', 'Machine down'),
																															(7, 'STAR', '2022-08-17 07:04:00', '2022-08-17 08:04:00', 'No Material'),
																															(8, 'SCRW2', '2022-08-18 08:00:00', '2022-08-18 13:00:00', 'Change over/ Set up'),
																															(9, 'STAR', '2022-08-19 06:00:00', '2022-08-19 14:00:00', 'Change over/ Set up'),
																															(10, 'SCRW1', '2022-08-22 08:30:00', '2022-08-22 11:00:00', 'Change over/ Set up'),
																															(11, 'SCRW1', '2022-08-23 14:00:00', '2022-08-24 02:00:00', 'Downtime Reasons'),
																															(12, 'SCRW1', '2022-08-24 06:00:00', '2022-08-24 12:00:00', 'Collet'),
																															(13, 'STAR', '2022-09-06 06:00:00', '2022-09-06 11:00:00', 'Change over/ Set up'),
																															(14, 'SCRW2', '2022-09-06 06:30:00', '2022-09-06 20:45:00', 'Change over/ Set up'),
																															(15, 'STAR', '2022-09-07 14:30:00', '2022-09-07 16:00:00', 'Broken Tool'),
																															(16, 'SCRW1', '2022-09-08 21:30:00', '2022-09-09 01:45:00', 'Change over/ Set up'),
																															(17, 'STAR', '2022-09-09 06:00:00', '2022-09-09 07:00:00', 'Maintenance'),
																															(18, 'SCRW1', '2022-09-09 06:00:00', '2022-09-09 14:00:00', 'Maintenance'),
																															(19, 'SCRW2', '2022-09-09 06:00:00', '2022-09-09 14:00:00', 'Maintenance'),
																															(20, 'STAR', '2022-09-12 13:35:00', '2022-09-12 17:30:00', 'Collet'),
																															(21, 'SCRW1', '2022-09-12 06:15:00', '2022-09-12 08:00:00', 'Change over/ Set up'),
																															(22, 'SCRW2', '2022-09-14 06:15:00', '2022-09-14 07:15:00', 'Broken Tool'),
																															(23, 'STAR', '2022-09-15 06:30:00', '2022-09-15 09:00:00', 'Broken Tool'),
																															(24, 'STAR', '2022-09-15 12:00:00', '2022-09-15 14:30:00', 'Personnel'),
																															(25, 'SCRW2', '2022-09-15 12:00:00', '2022-09-15 14:30:00', 'Personnel'),
																															(26, 'STAR', '2022-09-15 12:00:00', '2022-09-15 14:30:00', 'Personnel'),
																															(27, 'SCRW1', '2022-09-16 06:30:00', '2022-09-16 15:00:00', 'Maintenance'),
																															(28, 'SCRW2', '2022-09-16 11:30:00', '2022-09-16 15:00:00', 'Change over/ Set up'),
																															(29, 'SCRW2', '2022-09-19 06:50:00', '2022-09-19 11:40:00', 'Change over/ Set up'),
																															(30, 'SCRW1', '2022-09-21 06:15:00', '2022-09-21 10:00:00', 'Broken Tool'),
																															(31, 'SCRW2', '2022-09-21 19:15:00', '2022-09-21 20:30:00', 'Broken Tool'),
																															(32, 'SCRW1', '2022-09-22 21:00:00', '2022-09-23 01:45:00', 'Broken Tool'),
																															(33, 'SCRW2', '2022-09-22 06:15:00', '2022-09-22 08:30:00', 'Broken Tool'),
																															(34, 'SCRW1', '2022-09-23 06:15:00', '2022-09-23 15:00:00', 'Maintenance'),
																															(35, 'SCRW2', '2022-09-23 06:10:00', '2022-09-23 09:15:00', 'Maintenance'),
																															(36, 'SCRW1', '2022-09-26 06:10:00', '2022-09-26 07:00:00', 'Broken Tool');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
							`machine_id` int(11) NOT NULL,
							`machine_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`machine_id`, `machine_name`) VALUES
														  (1, 'STAR'),
														  (2, 'SCRW1'),
														  (3, 'SCRW2');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
						   `id` int(11) NOT NULL,
						   `machine` varchar(255) NOT NULL,
						   `part` varchar(255) NOT NULL,
						   `quantity` int(11) NOT NULL,
						   `goal` float NOT NULL,
						   `start` datetime NOT NULL,
						   `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `machine`, `part`, `quantity`, `goal`, `start`, `end`) VALUES
																						(1, 'SCRW1', 'MP5405', 115, 120, '2022-07-27 09:07:00', '2022-07-27 11:07:00'),
																						(2, 'SCRW1', 'MP5241', 89, 96, '2022-07-27 09:12:00', '2022-07-27 11:12:00'),
																						(3, 'STAR', 'MP0050', 44, 44, '2022-07-27 09:54:00', '2022-07-27 11:54:00'),
																						(4, 'SCRW1', 'MP3070', 280, 270, '2022-07-27 09:59:00', '2022-07-27 14:59:00'),
																						(5, 'STAR', 'MP0050', 100, 110, '2022-08-09 09:50:00', '2022-08-09 14:50:00'),
																						(6, 'SCRW2', 'MP5241', 180, 144, '2022-08-09 11:05:00', '2022-08-09 14:05:00'),
																						(7, 'STAR', 'MP0051', 44, 44, '2022-08-10 09:08:00', '2022-08-10 11:08:00'),
																						(8, 'STAR', 'MP0051', 102, 110, '2022-08-16 16:09:00', '2022-08-16 20:39:00'),
																						(9, 'STAR', 'MP0051', 18, 22, '2022-08-17 10:04:00', '2022-08-17 11:04:00'),
																						(10, 'STAR', 'MP0066', 200, 198, '2022-08-17 07:00:00', '2022-08-17 16:00:00'),
																						(11, 'STAR', 'MP0080', 410, 0, '2022-08-17 06:30:00', '2022-08-18 01:45:00'),
																						(12, 'SCRW1', 'MP5405', 1051, 1140, '2022-08-17 06:30:00', '2022-08-18 01:45:00'),
																						(13, 'SCRW2', 'MP5497', 1492, 1634, '2022-08-17 06:30:00', '2022-08-18 01:45:00'),
																						(14, 'STAR', 'MP0080', 406, 0, '2022-08-18 06:10:00', '2022-08-19 01:45:00'),
																						(15, 'SCRW1', 'MP5405', 1040, 480, '2022-08-18 18:10:00', '2022-08-19 01:45:00'),
																						(16, 'STAR', 'MP0080', 406, 440, '2022-08-18 06:10:00', '2022-08-19 01:45:00'),
																						(17, 'SCRW2', 'MP30409-6', 1045, 975, '2022-08-18 13:00:00', '2022-08-19 01:45:00'),
																						(18, 'STAR', 'MP0066', 0, 176, '2022-08-19 06:00:00', '2022-08-19 14:00:00'),
																						(19, 'SCRW1', 'MP5405', 270, 300, '2022-08-19 09:00:00', '2022-08-19 14:00:00'),
																						(20, 'SCRW2', 'MP30409-6', 480, 600, '2022-08-19 06:15:00', '2022-08-19 14:00:00'),
																						(21, 'STAR', 'MP0066', 475, 440, '2022-08-22 06:15:00', '2022-08-23 01:45:00'),
																						(22, 'SCRW1', 'MP5241', 760, 720, '2022-08-22 11:00:00', '2022-08-23 01:45:00'),
																						(23, 'SCRW2', 'MP30409-6', 1570, 1500, '2022-08-22 06:10:00', '2022-08-23 01:45:00'),
																						(24, 'STAR', 'MP0066', 465, 418, '2022-08-23 06:20:00', '2022-08-24 01:45:00'),
																						(25, 'SCRW1', 'MP5241', 450, 960, '2022-08-23 06:15:00', '2022-08-24 01:45:00'),
																						(26, 'SCRW2', 'MP30409-6', 1520, 1500, '2022-08-23 06:15:00', '2022-08-24 01:45:00'),
																						(27, 'STAR', 'MP0066', 480, 440, '2022-08-24 06:10:00', '2022-08-25 01:45:00'),
																						(28, 'SCRW1', 'MP5241', 740, 672, '2022-08-24 12:00:00', '2022-08-25 01:45:00'),
																						(29, 'SCRW2', 'MP30409-6', 1588, 1500, '2022-08-24 06:15:00', '2022-08-25 01:45:00'),
																						(30, 'STAR', 'MP0066', 475, 440, '2022-08-25 06:10:00', '2022-08-26 01:45:00'),
																						(31, 'SCRW1', 'MP5241', 1045, 960, '2022-08-25 06:15:00', '2022-08-26 01:45:00'),
																						(32, 'SCRW2', 'MP30409-6', 1576, 1500, '2022-08-25 06:15:00', '2022-08-26 01:45:00'),
																						(33, 'STAR', 'MP0066-A', 352, 330, '2022-09-06 11:00:00', '2022-09-07 01:45:00'),
																						(34, 'SCRW1', 'MP5241', 1010, 912, '2022-09-06 06:20:00', '2022-09-07 01:45:00'),
																						(35, 'SCRW2', 'MP5241', 260, 240, '2022-09-06 20:45:00', '2022-09-07 01:45:00'),
																						(36, 'STAR', 'MP0066-A', 405, 440, '2022-09-07 06:10:00', '2022-09-08 01:45:00'),
																						(37, 'SCRW1', 'MP5241', 1030, 960, '2022-09-07 06:15:00', '2022-09-08 01:45:00'),
																						(38, 'SCRW2', 'MP5241', 945, 912, '2022-09-07 06:35:00', '2022-09-08 01:45:00'),
																						(39, 'STAR', 'MP0066-A', 465, 440, '2022-09-08 06:10:00', '2022-09-09 01:45:00'),
																						(40, 'SCRW1', 'MP5241', 790, 720, '2022-09-08 06:20:00', '2022-09-08 21:30:00'),
																						(41, 'SCRW2', 'MP5241', 980, 912, '2022-09-08 06:20:00', '2022-09-09 01:45:00'),
																						(42, 'STAR', 'MP0066-A', 140, 132, '2022-09-09 07:15:00', '2022-09-09 13:15:00'),
																						(43, 'STAR', 'MP0066-A', 372, 440, '2022-09-12 06:10:00', '2022-09-13 01:45:00'),
																						(44, 'SCRW1', 'MP5405', 1015, 1080, '2022-09-12 08:00:00', '2022-09-13 01:45:00'),
																						(45, 'SCRW1', 'MP5405', 945, 1080, '2022-09-12 08:00:00', '2022-09-13 01:45:00'),
																						(46, 'SCRW2', 'MP5241', 1015, 912, '2022-09-12 06:20:00', '2022-09-13 01:45:00'),
																						(47, 'STAR', 'MP0066-A', 417, 440, '2022-09-13 06:10:00', '2022-09-14 01:45:00'),
																						(48, 'SCRW1', 'MP5405', 1058, 1200, '2022-09-13 06:15:00', '2022-09-14 01:45:00'),
																						(49, 'SCRW2', 'MP5241', 1044, 960, '2022-09-13 06:15:00', '2022-09-14 01:45:00'),
																						(50, 'STAR', 'MP0066-A', 455, 440, '2022-09-14 06:15:00', '2022-09-15 01:45:00'),
																						(51, 'SCRW1', 'MP5405', 1027, 1200, '2022-09-14 06:15:00', '2022-09-15 01:45:00'),
																						(52, 'SCRW2', 'MP5241', 1001, 912, '2022-09-14 07:15:00', '2022-09-15 01:45:00'),
																						(53, 'STAR', 'MP0066-A', 309, 352, '2022-09-15 06:15:00', '2022-09-15 22:00:00'),
																						(54, 'SCRW1', 'MP5405', 145, 480, '2022-09-15 09:00:00', '2022-09-15 17:00:00'),
																						(55, 'SCRW2', 'MP5241', 648, 768, '2022-09-15 06:30:00', '2022-09-15 22:00:00'),
																						(56, 'STAR', 'MP0066-A', 166, 154, '2022-09-16 06:30:00', '2022-09-16 13:30:00'),
																						(57, 'SCRW2', 'MP5241', 231, 240, '2022-09-16 06:50:00', '2022-09-16 11:30:00'),
																						(58, 'STAR', 'MP0066-A', 470, 440, '2022-09-19 06:15:00', '2022-09-20 01:45:00'),
																						(59, 'SCRW1', 'MP5405', 855, 1200, '2022-09-19 06:20:00', '2022-09-20 01:45:00'),
																						(60, 'SCRW2', 'MP5497', 1045, 1204, '2022-09-19 11:40:00', '2022-09-20 01:45:00'),
																						(61, 'STAR', 'MP0066-A', 462, 440, '2022-09-20 06:10:00', '2022-09-21 01:45:00'),
																						(62, 'SCRW1', 'MP5405', 934, 1140, '2022-09-20 06:20:00', '2022-09-21 01:45:00'),
																						(63, 'SCRW2', 'MP5497', 1425, 1634, '2022-09-20 06:20:00', '2022-09-21 01:45:00'),
																						(64, 'STAR', 'MP0066-A', 468, 440, '2022-09-21 06:10:00', '2022-09-22 01:45:00'),
																						(65, 'SCRW1', 'MP5405', 708, 960, '2022-09-21 10:00:00', '2022-09-22 01:45:00'),
																						(66, 'SCRW2', 'MP5497', 1400, 1634, '2022-09-21 06:20:00', '2022-09-22 01:45:00'),
																						(67, 'STAR', 'MP0066-A', 477, 440, '2022-09-22 06:15:00', '2022-09-23 01:45:00'),
																						(68, 'SCRW1', 'MP5405', 633, 900, '2022-09-22 06:15:00', '2022-09-22 21:00:00'),
																						(69, 'SCRW2', 'MP5497', 1275, 1462, '2022-09-22 08:30:00', '2022-09-23 01:45:00'),
																						(70, 'STAR', 'MP0066-A', 183, 176, '2022-09-23 06:30:00', '2022-09-23 14:55:00'),
																						(71, 'SCRW2', 'MP5497', 406, 516, '2022-09-23 09:15:00', '2022-09-23 14:55:00'),
																						(72, 'STAR', 'MP0066-A', 472, 440, '2022-09-26 06:10:00', '2022-09-27 01:45:00'),
																						(73, 'SCRW1', 'MP5405', 915, 1140, '2022-09-26 07:00:00', '2022-09-27 01:45:00'),
																						(74, 'SCRW2', 'MP5497', 1465, 1720, '2022-09-26 06:10:00', '2022-09-27 01:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `validated_parts`
--

CREATE TABLE `validated_parts` (
								   `id` int(11) NOT NULL,
								   `COL1` varchar(10) DEFAULT NULL,
								   `COL2` varchar(75) DEFAULT NULL,
								   `COL3` varchar(1) DEFAULT NULL,
								   `COL4` int(2) DEFAULT NULL,
								   `COL5` int(2) DEFAULT NULL,
								   `COL6` varchar(5) DEFAULT NULL,
								   `COL7` varchar(6) DEFAULT NULL,
								   `COL8` varchar(50) DEFAULT NULL,
								   `COL9` varchar(255) DEFAULT NULL,
								   `COL 10` varchar(14) DEFAULT NULL,
								   `COL 11` varchar(10) DEFAULT NULL,
								   `COL 12` varchar(10) DEFAULT NULL,
								   `COL 13` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `validated_parts`
--

INSERT INTO `validated_parts` (`id`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL 10`, `COL 11`, `COL 12`, `COL 13`) VALUES
																																						 (1, 'MP0050', '5F UNIVERSAL STEM INSERT - MACHINED', 'E', 22, 19, '1 hr', 'RM5365', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0003', '', 'MP0050GP', 'VP007625 (OQ)'),
																																						 (2, 'MP0051', '5F LP STEM INSERT-MACHINED', 'E', 22, 19, '1 hr', 'RM5366', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0015', '', 'MP0051GP', 'VP008020'),
																																						 (3, 'MP0066', '6.6F UNIVERSAL STEM INSERT TITANIUM 6AL-4V ELI', 'E', 22, 19, '1 hr', 'RM5365', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0004', '', 'MP0066GP', 'VP007689 (OQ)'),
																																						 (4, 'MP0066-A', '6.6F LP STEM INSERT-MACHINED', 'E', 22, 19, '1 hr', 'RM5366', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0009', '', 'MP0066GP-A', 'VP007783 (OQ)'),
																																						 (5, 'MP0080', '8F UNIVERSAL STEM INSERT TITANIUM 6AL-4V ELI', 'E', 22, 19, '1 hr', 'RM5365', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0005', '', 'MP0080GP', 'VP007690 (OQ)'),
																																						 (6, 'MP0081', '8F UNIVERSAL STEM INSERT (.075 EXTENSION) TITANIUM 6AL-4V ELI', 'E', 22, 19, '1 hr', 'RM5365', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0006', '', 'MP0081GP', 'VP007691 (OQ)'),
																																						 (7, 'MP0180', '8F LOW PROFILES STEM INSERT-TITIANUM 6AL-4V ELI', 'E', 22, 19, '1 hr', 'RM5365', 'TITANIUM 6AL-4V ELI ROD .125\" OD', 'STAR', 'SSCREWSUP-0015', '', 'MP0180GP', 'VP008021'),
																																						 (8, 'MP5405', '.144\" DIA TRI-BALL TUNNELER 4.500\"±.125\" DIM \"A\" LENGTH 303 STAINLESS STEEL', 'E', 60, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0001', '', 'AC5405', 'VP007279 (OQ)'),
																																						 (9, 'MP5241', '.115X4.500 TUNNELER-MACHINED', 'E', 48, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0002', '', '5241', 'VP007478 (OQ)'),
																																						 (10, 'MP5241', '.115X4.500 TUNNELER-MACHINED', 'E', 48, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0020', '', '5241', 'VP008174'),
																																						 (11, 'MP5513', '.115X5\" DIA TRIBALL Y ADAPTER', 'E', 0, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0017', '', 'AC5513', 'VP008033'),
																																						 (12, 'MP5698-1', '.103X6\" DIA TRIBALL W/ADAPTER', 'E', 0, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0014', '', 'AC5698-1', 'VP007993'),
																																						 (13, 'MP5081-T', '.103\" DIAMETER X 4.5\" DIM \"A\" LENGTH TRI BALL', 'E', 0, 19, '1 hr', 'RM5367', '304 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0008', '', 'AC5081-T', 'VP007817 (OQ)'),
																																						 (14, 'MP5081-1-T', '.103\" DIAMETER X 6.0\" DIM \"A\" LENGTH TRI BALL', 'E', 0, 19, '1 hr', 'RM5367', '307 SS Bar .1875\" ± 0.00015\" OD', 'SCRW1', 'SSCREWSUP-0013', '', 'AC5081-1-T', 'OQ'),
																																						 (15, 'MP3070', 'MERIT CENTROS TUNNELER-MACHINE', 'E', 54, 19, '1 hr', 'RM5368', '303 SS Bar .1875\" ± .00015\" OD (Centerless Ground)', 'SCRW1', 'SSCREWSUP-0012', '', 'AC3070', 'VP007833 (OQ)'),
																																						 (16, 'MP30409-6', '6F Tunneler Machined Part- Trocar', 'E', 75, 19, '1 hr', 'RM5555', '303 SS Bar .098\" ± .00015\" OD (Centerless Ground)', 'SCRW2', 'SSCREWSUP-0007', '', 'AC30409-6', 'VP007680 (OQ)'),
																																						 (17, 'MP5221-T', '10F Split Cath Tunneler', 'E', 0, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0025', '', 'AC5221-T', 'OQ'),
																																						 (18, 'MP30375', '9.6F PORT TUNNELER', 'E', 75, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0024', '', 'AC30375', 'VP008214'),
																																						 (19, 'MP30579', '.062 BARBED TUNNELER 303 STAINLESS STEEL', 'E', 0, 19, '1 hr', 'RM5555', '303 SS Bar .098\" ± .00015\" OD (Centerless Ground)', 'SCRW2', 'SSCREWSUP-0018', '', 'AC30579', 'VP008022 (OQ)'),
																																						 (20, 'MP30733', '9.5f DUAL PORT TUNNELER', 'E', 0, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0022', '', 'AC30733', 'VP008194'),
																																						 (21, 'MP3936', '1/8\" BLUNT TROCAR', 'E', 0, 19, '1 hr', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0021', '', 'AC3936', 'VP008193'),
																																						 (22, 'MP5761', 'PERITONEAL DIALYSIS TUNNELER - MACHINED', 'E', 20, 19, '10 hr', 'RM5556', '303 SS Bar.250\" ± .00015\" OD (Centerless Ground)', 'SCRW2', 'SSCREWSUP-0010', '', 'AC5761', 'VP007861 (OQ)'),
																																						 (23, 'MP8246-112', '13 GA CANNULA - .112 BARB - MACHINED - .082\" ± ID x .095\" ± .001\" OD', 'E', 0, 19, '3 hrs', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0023', '', 'AC8246-112', 'VP008034 (OQ)'),
																																						 (24, 'MP5497', 'ROUND CANNULA WITH .130 BARB - MACHINED - .097\" ID X .108\" OD', 'E', 86, 19, '3 hrs', 'RM5367', '303 SS Bar .1875\" ± 0.00015\" OD', 'SCRW2', 'SSCREWSUP-0011', '', 'AC5497', 'VP007864 (OQ)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `downtime_records`
--
ALTER TABLE `downtime_records`
	ADD PRIMARY KEY (`downtime_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
	ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
	ADD PRIMARY KEY (`id`);

--
-- Indexes for table `validated_parts`
--
ALTER TABLE `validated_parts`
	ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `downtime_records`
--
ALTER TABLE `downtime_records`
	MODIFY `downtime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
	MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `validated_parts`
--
ALTER TABLE `validated_parts`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
