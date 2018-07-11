-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 03:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `SEAT_NUMBER` int(5) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `M_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `AM_TH` int(5) NOT NULL,
  `AM_IA` int(5) NOT NULL,
  `AM_TH+IA` int(5) NOT NULL,
  `AM_TW` int(5) NOT NULL,
  `AM_GRADE_POINTER` int(5) NOT NULL,
  `AM_CREDITS` int(5) NOT NULL,
  `AM_C*GP` int(3) NOT NULL,
  `AM_REMARK` enum('P','F') NOT NULL,
  `AM_FINAL_GP` int(3) NOT NULL,
  `COA_TH` int(3) NOT NULL,
  `COA_IA` int(3) NOT NULL,
  `COA_TH+IA` int(3) NOT NULL,
  `COA_TW` int(3) NOT NULL,
  `COA_GRADE_POINTER` int(3) NOT NULL,
  `COA_CREDITS` int(3) NOT NULL,
  `COA_C*GP` int(3) NOT NULL,
  `COA_REMARK` enum('P','F') NOT NULL,
  `COA_FINAL_GP` int(3) NOT NULL,
  `DBMS_TH` int(3) NOT NULL,
  `DBMS_IA` int(3) NOT NULL,
  `DBMS_TH+IA` int(3) NOT NULL,
  `DBMS_TW` int(3) NOT NULL,
  `DBMS_GRADE_POINTER` int(3) NOT NULL,
  `DBMS_CREDITS` int(3) NOT NULL,
  `DBMS_C*GP` int(3) NOT NULL,
  `DBMS_REMARK` enum('P','F') NOT NULL,
  `DBMS_FINAL_GP` int(3) NOT NULL,
  `AOA_TH` int(3) NOT NULL,
  `AOA_IA` int(3) NOT NULL,
  `AOA_TH+IA` int(3) NOT NULL,
  `AOA_TW` int(4) NOT NULL,
  `AOA_GRADE_POINTER` int(4) NOT NULL,
  `AOA_CREDITS` int(4) NOT NULL,
  `AOA_C*GP` int(4) NOT NULL,
  `AOA_REMARK` enum('P','F') NOT NULL,
  `AOA_FINAL_GP` int(4) NOT NULL,
  `TCS_TH` int(4) NOT NULL,
  `TCS_IA` int(4) NOT NULL,
  `TCS_TH+IA` int(4) NOT NULL,
  `TCS_TW` int(4) NOT NULL,
  `TCS_GRADE_POINTER` int(4) NOT NULL,
  `TCS_CREDITS` int(4) NOT NULL,
  `TCS_C*GP` int(4) NOT NULL,
  `TCS_REMARK` enum('P','F') NOT NULL,
  `TCS_FINAL_GP` int(4) NOT NULL,
  `CG_TH` int(4) NOT NULL,
  `CG_IA` int(4) NOT NULL,
  `CG_TH+IA` int(4) NOT NULL,
  `CG_TW` int(4) NOT NULL,
  `CG_GRADE_POINTER` int(4) NOT NULL,
  `CG_CREDITS` int(4) NOT NULL,
  `CG_C*GP` int(4) NOT NULL,
  `CG_REMARK` enum('P','F') NOT NULL,
  `CG_FINAL_GP` int(4) NOT NULL,
  `STATUS` enum('P','F') NOT NULL,
  `CGPI` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`SEAT_NUMBER`, `F_NAME`, `M_NAME`, `L_NAME`, `AM_TH`, `AM_IA`, `AM_TH+IA`, `AM_TW`, `AM_GRADE_POINTER`, `AM_CREDITS`, `AM_C*GP`, `AM_REMARK`, `AM_FINAL_GP`, `COA_TH`, `COA_IA`, `COA_TH+IA`, `COA_TW`, `COA_GRADE_POINTER`, `COA_CREDITS`, `COA_C*GP`, `COA_REMARK`, `COA_FINAL_GP`, `DBMS_TH`, `DBMS_IA`, `DBMS_TH+IA`, `DBMS_TW`, `DBMS_GRADE_POINTER`, `DBMS_CREDITS`, `DBMS_C*GP`, `DBMS_REMARK`, `DBMS_FINAL_GP`, `AOA_TH`, `AOA_IA`, `AOA_TH+IA`, `AOA_TW`, `AOA_GRADE_POINTER`, `AOA_CREDITS`, `AOA_C*GP`, `AOA_REMARK`, `AOA_FINAL_GP`, `TCS_TH`, `TCS_IA`, `TCS_TH+IA`, `TCS_TW`, `TCS_GRADE_POINTER`, `TCS_CREDITS`, `TCS_C*GP`, `TCS_REMARK`, `TCS_FINAL_GP`, `CG_TH`, `CG_IA`, `CG_TH+IA`, `CG_TW`, `CG_GRADE_POINTER`, `CG_CREDITS`, `CG_C*GP`, `CG_REMARK`, `CG_FINAL_GP`, `STATUS`, `CGPI`) VALUES
(40004, 'SIDDESH', 'PARSHURAM', 'ADLIKAR', 35, 14, 49, 21, 5, 4, 10, 'P', 5, 41, 15, 56, 23, 6, 4, 24, 'P', 6, 39, 18, 57, 24, 6, 4, 24, 'P', 6, 39, 19, 58, 21, 6, 4, 24, 'P', 6, 48, 15, 63, 0, 7, 4, 28, 'P', 7, 48, 15, 63, 21, 7, 3, 21, 'P', 7, 'P', 6.64),
(40005, 'SAGAR', 'JITENDRA', 'AHUJA', 32, 10, 42, 18, 4, 4, 16, 'P', 4, 999, 12, 0, 14, 0, 0, 0, 'F', 0, 32, 9, 41, 17, 4, 4, 16, 'P', 4, 32, 9, 41, 20, 4, 4, 16, 'P', 4, 999, 8, 0, 0, 0, 0, 0, '', 0, 50, 10, 60, 18, 7, 3, 21, 'P', 7, 'F', 0),
(40006, 'AMITKUMAR', 'CHHEDILA', 'BAURIA', 24, 10, 34, 20, 4, 4, 16, 'P', 4, 32, 9, 41, 20, 4, 4, 16, 'P', 4, 33, 18, 51, 21, 6, 4, 24, 'P', 6, 32, 11, 43, 20, 4, 4, 16, 'P', 4, 32, 11, 43, 0, 4, 4, 16, 'P', 4, 35, 11, 46, 15, 5, 3, 15, 'P', 5, 'P', 5.11),
(40007, 'AKSHAY', 'SURYAKANT', 'BIRAJDAR', 22, 8, 0, 12, 0, 0, 0, 'F', 0, 41, 14, 55, 16, 6, 4, 24, 'P', 6, 42, 16, 58, 19, 6, 4, 24, 'P', 6, 35, 15, 50, 14, 6, 4, 24, 'P', 6, 2, 9, 0, 0, 0, 0, 0, '', 0, 42, 8, 50, 18, 6, 3, 18, 'P', 6, 'F', 0),
(40008, 'SHITAL', 'HEMRAJ', 'JADHAV', 35, 12, 47, 5, 0, 0, 0, 'F', 0, 43, 18, 61, 20, 7, 4, 28, 'P', 7, 39, 15, 54, 23, 6, 4, 24, 'P', 6, 56, 16, 72, 21, 8, 4, 32, 'P', 8, 46, 12, 58, 0, 0, 0, 0, 'P', 6, 42, 10, 52, 20, 6, 3, 18, 'P', 0, 'F', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
