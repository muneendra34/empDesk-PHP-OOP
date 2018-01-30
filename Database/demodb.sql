-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 06:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `l_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `id` varchar(20) NOT NULL,
  PRIMARY KEY (`l_id`),
  KEY `fk_foreign` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`l_id`, `username`, `date`, `in_time`, `out_time`, `id`) VALUES
(5, 'muni', '2015-12-25', '09:30:00', '18:30:00', 'EMP580352'),
(6, 'muni', '2015-12-26', '09:30:00', '18:30:00', 'EMP580352'),
(7, 'muni', '2015-12-28', '09:30:00', '19:00:00', 'EMP580352'),
(8, 'muni', '2015-12-27', '09:30:00', '19:30:00', 'EMP580352'),
(9, 'muni', '2015-12-21', '09:30:00', '19:00:00', 'EMP580352'),
(10, 'muni', '2015-12-20', '09:30:00', '06:30:00', 'EMP580352'),
(11, 'muni', '2015-12-19', '09:30:00', '19:00:00', 'EMP580352'),
(12, 'muni', '2015-12-18', '09:30:00', '19:00:00', 'EMP580352'),
(13, 'muni', '2015-12-17', '09:30:00', '19:00:00', 'EMP580352'),
(14, 'kars', '2015-12-28', '09:30:00', '19:30:00', 'EMP620758'),
(15, 'kars', '2015-12-26', '09:30:00', '19:00:00', 'EMP620758'),
(16, 'muni', '2015-12-15', '09:30:00', '19:00:00', 'EMP580352'),
(17, 'muni', '2015-12-14', '09:00:00', '19:00:00', 'EMP580352'),
(18, 'muni', '2015-12-16', '09:30:00', '19:00:00', 'EMP580352'),
(19, 'muni', '2015-12-13', '09:30:00', '19:00:00', 'EMP580352'),
(20, 'muni', '2015-12-12', '09:30:00', '19:00:00', 'EMP580352'),
(21, 'muni', '2015-12-11', '09:30:00', '19:00:00', 'EMP580352'),
(22, 'muni', '2015-12-10', '09:30:00', '19:00:00', 'EMP580352'),
(23, 'muni', '2015-12-09', '09:30:00', '18:30:00', 'EMP580352'),
(24, 'muni', '2015-12-08', '09:30:00', '19:00:00', 'EMP580352'),
(25, 'muni', '2015-12-07', '09:30:00', '19:00:00', 'EMP580352'),
(26, 'muni', '2015-12-06', '09:30:00', '19:00:00', 'EMP580352'),
(27, 'manish', '2015-12-29', '09:30:00', '19:00:00', 'EMP940887'),
(28, 'manish', '2015-12-27', '09:30:00', '19:30:00', 'EMP940887'),
(29, 'manish', '2015-12-28', '09:30:00', '19:00:00', 'EMP940887'),
(30, 'pradeep', '2015-12-29', '09:30:00', '19:00:00', 'EMP119567'),
(31, 'pradeep', '2015-12-28', '09:30:00', '19:00:00', 'EMP119567'),
(32, 'pradeep', '2015-12-27', '09:30:00', '19:00:00', 'EMP119567'),
(33, 'pradeep', '2015-12-26', '09:30:00', '19:00:00', 'EMP119567');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(15) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `username`, `password`) VALUES
('EMP119567', 'Pradeep Rallapalli', 'pradeep@lws.com', 'pradeep', 'pradeep'),
('EMP171936', 'Kudeep', 'kudeep@lws.com', 'kudeep', 'kudeep'),
('EMP219451', 'Kranthi', 'kranthi@lws.com', 'kranthi', 'kranthi'),
('EMP238006', 'Aslam', 'aslam@lws.com', 'aslam', 'aslam'),
('EMP280975', 'Ashok', 'ashok@lws.com', 'ashok', 'ashok'),
('EMP336517', 'Bhanu', 'bhanu@lws.com', 'bhanu', 'bhanu'),
('EMP338287', 'Rahul Dravid', 'rahul@lws.com', 'rahul', 'rahul'),
('EMP45837', 'Naveen', 'naveen@lws.com', 'naveen', 'naveen'),
('EMP476501', 'Indra', 'indra@lws.com', 'indra', 'indra'),
('EMP508575', 'MuniSai', 'sai@lws.com', 'sai', 'sai'),
('EMP527435', 'Admin', 'admin@lws.com', 'admin', 'admin'),
('EMP574096', 'Murari', 'murari@lws.com', 'murari', 'murari'),
('EMP580352', 'Muneendra', 'muni@lws.com', 'muni', 'muni'),
('EMP620758', 'karthik V', 'kars@lws.com', 'kars', 'kars'),
('EMP683197', 'Gowtham Gambir', 'gowtham@lws.com', 'gowtham', 'gowtham'),
('EMP686584', 'Chandana', 'chandana@lws.com', 'chandana', 'chandana'),
('EMP701873', 'Sridhar Kommi', 'sridhar@lws.com', 'sridhar', 'sridhar'),
('EMP764312', 'Thulasi', 'thulasi@lws.com', 'thulasi', 'thulasi'),
('EMP764587', 'Chaitanya', 'chai@lws.com', 'chai', 'chai'),
('EMP766693', 'HR', 'hr@lws.com', 'hr', 'hr'),
('EMP802124', 'AdemGilchrist', 'adam@lws.com', 'adem', 'adem'),
('EMP835083', 'John Anderson', 'john@lws.com', 'john', 'john'),
('EMP875152', 'SouravGanguly', 'sourav@lws.com', 'sourav', 'sourav'),
('EMP922912', 'Sujith', 'sujith@lws.com', 'sujith', 'sujith'),
('EMP923339', 'Alok', 'alok@lws.com', 'alok', 'alok'),
('EMP925262', 'Sachin', 'sachin@lws.com', 'sachin', 'sachin'),
('EMP940887', 'Manish Varma', 'manish@lws.com', 'manish', 'manish'),
('EMP96649', 'Sony', 'sony@lws.com', 'sony', 'sony');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_foreign` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
