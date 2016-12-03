-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2014 at 02:43 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reverse_auctions`
--
CREATE DATABASE IF NOT EXISTS `reverse_auctions` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reverse_auctions`;

-- --------------------------------------------------------

--
-- Table structure for table `ra_company`
--

CREATE TABLE IF NOT EXISTS `ra_company` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `_company_name` varchar(200) NOT NULL,
  `_description` text NOT NULL,
  `_logo` varchar(100) NOT NULL,
  `_email` varchar(200) NOT NULL,
  `_password` varchar(50) NOT NULL,
  `_type` varchar(10) NOT NULL,
  `_parents_id` int(10) NOT NULL,
  `_status` varchar(10) NOT NULL,
  `_create_date` datetime NOT NULL,
  `_update_date` datetime NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ra_company`
--

INSERT INTO `ra_company` (`_id`, `_company_name`, `_description`, `_logo`, `_email`, `_password`, `_type`, `_parents_id`, `_status`, `_create_date`, `_update_date`) VALUES
(1, 'foodpanda bd', 'COMPANY NAME : FORTUNE TECH\r\n\r\nFOR DETAILS PLS CALL : RUMMON JMAIL\r\n\r\nMOBILE : 01716 243 830,\r\n\r\n                   01911 321 099,\r\n\r\n                   01611 321 099,\r\n\r\n                   01842 321 099.\r\n\r\n \r\n\r\nemail : fortune.tech@ymail.com\r\n\r\nOPEN : EVERY DAY (7 day)\r\n\r\nBUSINESS TIME : 9:30 a.m TO 8:30 p.m\r\n\r\n \r\nPLEASE CALL FOR ANY OTHER LAPTOP WE HAVE\r\nCORE I 5, CORE I 3, CORE 2 DUO, DUAL CORE, NET BOOK\r\nEXCHANGE YOUR OLD PC OR ANY OTHER PC ACCESSORIES  AND GET LESS UP TO + - 25%\r\n\r\n \r\n\r\n1.  DELL VOSTRO 1014 CORE 2 DUO TK 18,000 \r\nMODEL                        : DELL\r\n\r\nPROCESSOR             : INTELï¿½ CORE 2 DUO T6570   @ 2.10 GHZ  \r\n\r\nSCREEN                      : 14.1"  LED HIGHCOLOR\r\n\r\nGRAPHICS                 : INTELï¿½ GRAPHICS MEDIA ACCELERATOR SERIES\r\n\r\nMEMORY                    : 2 GB DDR2\r\n\r\nSTORAGE                   : 320 GB\r\n\r\nCARD READER        : MULTI / SD / PRO\r\n\r\nWLAN                           : 80211A/B/G\r\n\r\nWEBCAM                    : YES\r\n\r\nFINGERPRINT         : N0\r\n\r\nBATTERY                   : 6-CELL LI-ION BATTERY (2 HOUR + - )\r\n\r\nCHARGER                  : ORIGINAL\r\n\r\nWARRANTY              : 12 MONTH SERVICE\r\n\r\nOS                                   : WINDOWS', '535e0516ba7be.jpeg', 'b.bairagi@foodpanda.com.bd', '4297f44b13955235245b2497399d7a93', 'buyer', 3, 'yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'foodpanda', 'admin', '', 'bijon@gmail.com', '4297f44b13955235245b2497399d7a93', 'admin', 0, 'yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'E edu bd', 'education website', '535e04936ab2c.jpeg', 'e-edubd@gmail.com', '4297f44b13955235245b2497399d7a93', 'buyer', 0, 'yes', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ra_company_attach`
--

CREATE TABLE IF NOT EXISTS `ra_company_attach` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `_cid` int(10) NOT NULL,
  `_file` varchar(100) NOT NULL,
  `_time` datetime NOT NULL,
  `_title` varchar(200) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_company` (`_cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ra_company_attach`
--

INSERT INTO `ra_company_attach` (`_id`, `_cid`, `_file`, `_time`, `_title`) VALUES
(2, 1, '535e24259d892Due to unavoidable reasons delivery won.docx', '0000-00-00 00:00:00', 'doc'),
(3, 1, '535e24a91999bSpicy Grill.xls', '0000-00-00 00:00:00', 'company profile'),
(4, 1, '535e25fccd071Due to unavoidable reasons delivery won.docx', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ra_score`
--

CREATE TABLE IF NOT EXISTS `ra_score` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `_tender_id` int(10) NOT NULL,
  `_company_id` int(10) NOT NULL,
  `_time` datetime NOT NULL,
  `_price` int(10) NOT NULL,
  `_comments` varchar(200) NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_tender` (`_tender_id`),
  KEY `fk_company_score` (`_company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ra_tender`
--

CREATE TABLE IF NOT EXISTS `ra_tender` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `_c_id` int(10) NOT NULL,
  `_title` varchar(200) NOT NULL,
  `_description` text NOT NULL,
  `_attach_file` varchar(100) NOT NULL,
  `_defult_price` int(10) NOT NULL,
  `_start_time` datetime NOT NULL,
  `_end_time` datetime NOT NULL,
  `_create_date` datetime NOT NULL,
  `_update_date` datetime NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `fk_tender_company` (`_c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ra_tender`
--

INSERT INTO `ra_tender` (`_id`, `_c_id`, `_title`, `_description`, `_attach_file`, `_defult_price`, `_start_time`, `_end_time`, `_create_date`, `_update_date`) VALUES
(1, 3, 'road for construction', 'sdf hsakjgadgsklgdglksagsmad/skgsd/lg', '', 500, '0000-00-00 00:00:00', '2014-04-03 17:24:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 'road for construction color', 'xg ,djgalkdgj', '', 50000, '2014-04-29 17:26:50', '2014-05-01 17:26:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ra_company_attach`
--
ALTER TABLE `ra_company_attach`
  ADD CONSTRAINT `fk_company` FOREIGN KEY (`_cid`) REFERENCES `ra_company` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ra_score`
--
ALTER TABLE `ra_score`
  ADD CONSTRAINT `fk_company_score` FOREIGN KEY (`_company_id`) REFERENCES `ra_company` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tender` FOREIGN KEY (`_tender_id`) REFERENCES `ra_tender` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ra_tender`
--
ALTER TABLE `ra_tender`
  ADD CONSTRAINT `fk_tender_company` FOREIGN KEY (`_c_id`) REFERENCES `ra_company` (`_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
