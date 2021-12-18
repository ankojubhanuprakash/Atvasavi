
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2016 at 02:12 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u283889250_vasav`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `Date of upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `filename`, `branch`, `faculty`, `Date of upload`) VALUES
(17, 'untitled.png', 'me2a', 'vinith', '2016-12-11 08:06:05'),
(16, '02_-_Choosa_Choosa_[www.AtoZmp3.in].mp3', 'me1a', 'vinith', '2016-12-11 07:33:11'),
(19, 'untitled.png', 'ee3a', 'bhanu', '2016-12-11 08:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `serverlist`
--

CREATE TABLE IF NOT EXISTS `serverlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL DEFAULT 'changeme',
  `emailid` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `serverlist`
--

INSERT INTO `serverlist` (`id`, `name`, `username`, `password`, `emailid`, `status`) VALUES
(1, 'bhanu prakash', 'bhanu', 'keerthi', 'ankojubhanuprakash@gmail.com', 1),
(2, 'vinith reddy', 'vinith', 'changeme', 'dvsvinith@gmail.com', 1),
(3, 'Dr. G.V. Ramana Murthy', 'ramanamurty', 'changeme', 'ramanamurty.govindaraju@gmail.com', 0),
(4, 'Dr. K.Kishore', 'kishore.k', 'changeme', 'placements@staff.vce.ac.in ', 0),
(5, 'Dr. A.Srinivas', 'a.srinivas', 'changeme', 'srinivas_a65@yahoo.com', 0),
(6, 'Dr. T.Ramamohan Rao    ', 'trmrao', 'changeme', 'trmrao@yahoo.com', 0),
(7, 'Mr.K. Srinivasa Rao', 'koppusr', 'changeme', 'koppusri@yahoo.com', 0),
(8, 'Mr. S.Venkataiah', 'surisettyvv', 'changeme', 'surisettyvv@rediffmail.com', 0),
(9, 'Mr. P. Venkateswara Rao', 'pvrao', 'changeme', 'pvrao_vce@yahoo.co.in', 0),
(10, 'Mr. P.V.Gopal Krishna', 'gopal_pola', 'changeme', 'gopal_pola@yahoo.co.uk', 0),
(11, 'Mr. K.Veladri', 'k.veladri', 'changeme', 'kvdri2001@yahoo.com', 0),
(12, 'Mr. V.B.S. Rajendra Prasad', 'vbsrp', 'changeme', 'vbsrp@yahoo.com', 0),
(13, 'Mr. B.Radha Krishna', 'b.radhakrishna', 'changeme', 'rkbalijepalli1@rediffmail.com', 0),
(14, 'Mr. J. Anjaneyulu', 'anjaneyulu_jalleda', 'changeme', 'anjaneyulu_jalleda@yahoo.co.in', 0),
(15, 'Mr. S. Sreekrishna', 's.sreekrishna', 'changeme', 's.sreekrishna79@gmail.com', 0),
(16, 'Ms. P.V.S.Subhashini', ' pvs.subhashini', 'changeme', ' pvs.subhashini@staff.vce.ac.in', 0),
(17, 'Mr. M. Sudhakar', 'sudhakar212003', 'changeme', 'sudhakar212003@yahoo.co.in ', 0),
(18, 'Mr. K. I. Spurgeon', 'spurgeonkodavaty', 'changeme', 'spurgeonkodavaty@gmail.com', 0),
(19, 'Mr. D. Govinda Rao', 'dgovindarao', 'changeme', 'dgovindarao@staff.vce.ac.in', 0),
(20, 'Mr. B. Naga Manohar', 'b_n_manohar', 'changeme', 'b_n_manohar@yahoo.co.in ', 0),
(21, 'Mr. M. Harish', 'hareshkm', 'changeme', 'hareshkm83@gmail.com', 0),
(22, 'Mr. B. Sandeep', 'bsandeep', 'changeme', 'bsandeep225@gmail.com', 0),
(23, 'Mr. N.B. Samba Murthy', 'nbsmurthy', 'changeme', 'nbsmurthy@gmail.com', 0),
(24, 'Mr. M. Venugopal Reddy', 'venu.gnana', 'changeme', 'venu.gnana@gmail.com', 0),
(25, 'Mr. K. Santosh Kumar', 'ksantosh', 'changeme', 'santoshmech09@gmail.com', 0),
(26, 'Mr. S. Venkateswarulu', 'venkateswarulu', 'changeme', 'venkysuda@yahoo.com', 0),
(27, 'Mr. S. Kirthana', 'kirthana', 'changeme', 'kirthana6831@gmail.co', 0),
(28, 'Mr. N. Jithender Goud', 'jithender', 'changeme', '', 0),
(29, 'Mr. R. Sandeep', 'rsandeep', 'changeme', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch` varchar(10) NOT NULL,
  `password` varchar(4) NOT NULL,
  `year` int(11) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `branch`, `password`, `year`, `section`) VALUES
(1, 'mechanical', 'me1a', 1, 'a'),
(2, 'mechanical', 'me1b', 1, 'b'),
(3, 'mechanical', 'me2a', 2, 'a'),
(4, 'mechanical', 'me2b', 2, 'b'),
(5, 'mechanical', 'me3a', 3, 'a'),
(6, 'mechanical', 'me3b', 3, 'b'),
(7, 'mechanical', 'me4a', 4, 'a'),
(8, 'mechanical', 'me4b', 4, 'b'),
(9, 'eee', 'ee1a', 1, 'a'),
(10, 'eee', 'ee2a', 2, 'a'),
(11, 'eee', 'ee3a', 3, 'a'),
(12, 'eee', 'ee4a', 4, 'a'),
(13, 'civil', 'ci1a', 1, 'a'),
(14, 'civil', 'ci2a', 2, 'a'),
(15, 'civil', 'ci3a', 3, 'a'),
(16, 'civil', 'ci4a', 4, 'a'),
(17, 'ece', 'ec1a', 1, 'a'),
(18, 'ece', 'ec1b', 1, 'b'),
(19, 'ece', 'ec2a', 2, 'a'),
(20, 'ece', 'ec2b', 2, 'b'),
(21, 'ece', 'ec3a', 3, 'a'),
(22, 'ece', 'ec3b', 3, 'b'),
(23, 'ece', 'ec4a', 4, 'a'),
(24, 'ece', 'ec4b', 4, 'b'),
(25, 'it', 'it1a', 1, 'a'),
(26, 'it', 'it1b', 1, 'b'),
(27, 'it', 'it2a', 2, 'a'),
(28, 'it', 'it2b', 2, 'b'),
(29, 'it', 'it3a', 3, 'a'),
(30, 'it', 'it3b', 3, 'b'),
(31, 'it', 'it4a', 4, 'a'),
(32, 'it', 'it4b', 4, 'b'),
(33, 'cse', 'cs1a', 1, 'a'),
(34, 'cse', 'cs1b', 1, 'b'),
(35, 'cse', 'cs2a', 2, 'a'),
(36, 'cse', 'cs2b', 2, 'b'),
(37, 'cse', 'cs3a', 3, 'a'),
(38, 'cse', 'cs3b', 3, 'b'),
(39, 'cse', 'cs4a', 4, 'a'),
(40, 'cse', 'cs4b', 4, 'b'),
(41, 'mechanical', 'bhan', 1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
