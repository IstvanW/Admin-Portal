-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2020 at 03:09 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
CREATE TABLE IF NOT EXISTS `link` (
  `url` varchar(200) NOT NULL,
  `department` int(1) NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`url`, `department`) VALUES
('supportDptLinks/manage_user_acct.html', 1),
('supportDptLinks/assign_roles.html', 1),
('supportDptLinks/help_desk.html', 1),
('financeDptLinks/finance_reports.html', 2),
('financeDptLinks/accounts_payable.html', 2),
('financeDptLinks/accounts_receivable.html', 2),
('financeDptLinks/tax.html', 2),
('salesDptLinks/sales_report.html', 3),
('salesDptLinks/sales_leads.html', 3),
('salesDptLinks/sales_demo.html', 3),
('hrDptLinks/new_hire.html', 4),
('hrDptLinks/benefits.html', 4),
('hrDptLinks/payroll.html', 4),
('hrDptLinks/off_boarding.html', 4),
('hrDptLinks/hr_reports.html', 4),
('techDptLinks/app_monitoring.html', 5),
('techDptLinks/tech_support.html', 5),
('techDptLinks/app_dev.html', 5),
('techDptLinks/app_admin.html', 5),
('techDptLinks/release_management.html', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `department` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `department`) VALUES
(1, 'support', 'password', 1),
(3, 'finance', 'password', 2),
(4, 'sales', 'password', 3),
(5, 'hr', 'password', 4),
(6, 'technology', 'password', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
