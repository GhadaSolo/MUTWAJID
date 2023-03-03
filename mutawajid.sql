-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2023 at 07:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutawajid`
--

-- --------------------------------------------------------

--
-- Table structure for table `connection_table`
--

DROP TABLE IF EXISTS `connection_table`;
CREATE TABLE IF NOT EXISTS `connection_table` (
  `attendance_mac` varchar(200) NOT NULL,
  `attendance_dtime` text NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connection_table`
--

INSERT INTO `connection_table` (`attendance_mac`, `attendance_dtime`, `id`) VALUES
('74DADA20', '19', 21),
('D80F996A', '19', 22),
('9CA3A92F', '19', 23),
('C0395AB2', '19', 24);

-- --------------------------------------------------------

--
-- Table structure for table `mac`
--

DROP TABLE IF EXISTS `mac`;
CREATE TABLE IF NOT EXISTS `mac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mac` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `counter` int(11) NOT NULL,
  `device` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mac`
--

INSERT INTO `mac` (`id`, `mac`, `name`, `counter`, `device`) VALUES
(1, '74DADA20', 'Reem ALmutairi', 0, '0'),
(2, '18:FA:B7:5F:7F:C7', 'Shahad alrasheed', 0, '0'),
(3, '1617637792', 'Atheer Bajukhaif', 0, '0'),
(4, '4C:B9:10:E5:B6:73', 'Hanan Alotaibi', 0, '0'),
(5, 'A8:81:7E:DD:8D:63', 'Reem ALmutairi', 0, '0'),
(8, '123213', 'm', 0, 'samsung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `username`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin');

DELIMITER $$
--
-- Events
--
DROP EVENT `reset`$$
CREATE DEFINER=`root`@`localhost` EVENT `reset` ON SCHEDULE EVERY 24 HOUR STARTS '2023-01-31 00:00:00' ENDS '2023-03-31 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO Update `mac` SET `counter`='0'$$

DROP EVENT `reset conter`$$
CREATE DEFINER=`root`@`localhost` EVENT `reset conter` ON SCHEDULE EVERY 1 DAY STARTS '2023-02-15 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE `mac` SET `counter`='0'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
