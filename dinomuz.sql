-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2018 at 08:10 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinomuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'open',
  `description` varchar(700) NOT NULL,
  `owner` varchar(300) NOT NULL,
  `assignto` varchar(300) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmodify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen` varchar(30) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `status`, `description`, `owner`, `assignto`, `creationdate`, `lastmodify`, `seen`) VALUES
(3, 'Modify existing software ', 'open', 'Modify existing software to correct errors, to adapt it to new hardware or to upgrade interfaces and improve performance.\r\n', 'admin', 'sara', '2018-10-21 12:08:27', '2018-10-23 15:47:31', 'no'),
(4, 'â€‹build registration page', 'close', 'the user should have a page to enter there info.\r\nthe info contain: first name, last name,email, password,password confirm,\r\naddress(country,city,street name) , birthday,gender.\r\nThere is a submit button, when the user click the system should get this\r\ndata and save it on the database, then make the user logged in. ', 'admin', 'Deaa ', '2018-10-23 10:38:42', '2018-10-23 19:05:00', 'no'),
(5, 'analysing user requirements.', 'close', 'User personas and usage scenarios â€“ concrete and illustrative data about typical users, their characteristics, usage situation, tasks and goals. Particularly useful in supporting early user interface design work.', 'Jone', 'Salam', '2018-10-23 18:51:52', '2018-11-02 19:15:17', 'no'),
(6, 'User Req.', 'open', 'Understanding user requirements is an integral part of information systems\r\ndesign and is critical to the success of interactive systems. However specifying\r\nthese requirements is not so simple to achieve', 'Jone', 'Deaa', '2018-10-23 19:03:57', '2018-10-23 19:03:57', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `tasks` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `lastname`, `password`, `type`, `tasks`, `email`) VALUES
('1', 'admin', '', 'admin', 'admin', '', ''),
('a2f0feb29', 'Salam', 'Ahmad', 'a2f0feb2', 'qa', '', 'someone.sa96@outlook.sa'),
('309f06956', 'Jone', 'Jone', '309f0695', 'pm', '', 'saraismailse@gmail.com'),
('ab535bf6d', 'â€‹Deaa', 'zoubi', 'ab535bf6', 'dev', '', 'someone.sa96@outlook.sa ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
