-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2015 at 02:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `youthleadphildatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attendance_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delegates_id` int(10) unsigned NOT NULL,
  `session_id` int(10) unsigned NOT NULL,
  `session_date` varchar(45) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `delegates_id`, `session_id`, `session_date`) VALUES
(1, 6, 2, '2015-09-05 16:00:47'),
(2, 6, 2, '2015-09-05 16:02:13'),
(3, 5, 2, '2015-09-05 17:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delegates_barcode`
--

CREATE TABLE IF NOT EXISTS `tbl_delegates_barcode` (
  `del_barcode_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delegates_id` int(10) unsigned NOT NULL,
  `delegates_barcode` int(10) unsigned NOT NULL,
  PRIMARY KEY (`del_barcode_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_delegates_barcode`
--

INSERT INTO `tbl_delegates_barcode` (`del_barcode_id`, `delegates_id`, `delegates_barcode`) VALUES
(1, 1, 19000),
(2, 3, 180000),
(3, 4, 17000),
(4, 2, 16000),
(5, 5, 15000),
(6, 6, 14000),
(7, 7, 13000),
(8, 8, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delegates_info`
--

CREATE TABLE IF NOT EXISTS `tbl_delegates_info` (
  `del_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `del_delegation` varchar(45) NOT NULL,
  `del_fname` varchar(45) NOT NULL,
  `del_lname` varchar(45) NOT NULL,
  `del_bdate` date NOT NULL,
  `del_sex` varchar(45) NOT NULL,
  `del_contact` varchar(45) NOT NULL,
  PRIMARY KEY (`del_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_delegates_info`
--

INSERT INTO `tbl_delegates_info` (`del_id`, `del_delegation`, `del_fname`, `del_lname`, `del_bdate`, `del_sex`, `del_contact`) VALUES
(1, '', 'Josette ', '', '1991-11-11', 'female', '09097111790'),
(2, 'ACLC-TAGBILARAN', 'Josette ', '', '1994-07-24', 'female', '09097111790'),
(3, 'BISU-BILAR', 'Clifford', '', '1994-07-21', 'male', '09097111791'),
(4, 'BISU-BALILIHAN', 'Jackie', '', '0000-00-00', 'male', '09097111791'),
(5, 'ACLC-TAGBILARAN', 'Jackie', 'Pondoc', '1994-07-24', 'female', '09097111791'),
(6, 'University of Bohol', 'Chiquito', 'Chatto', '1994-07-12', 'male', '09097111794'),
(7, 'BISU-MC', 'Braiel', 'Tapdasan', '1994-07-21', 'male', '09097111791'),
(8, 'BISU-MC', 'Leonard', 'Sumaoy', '1991-11-11', 'male', ''),
(9, 'BISU-MC', 'Charlene', 'Penaroya', '1994-07-12', 'female', '09097111794');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbl_delegate_attendance`
--
CREATE TABLE IF NOT EXISTS `tbl_delegate_attendance` (
`session_id` int(10) unsigned
,`attendance_id` int(10) unsigned
,`del_id` int(10) unsigned
,`barcode` varchar(15)
,`session_date` varchar(45)
,`del_delegation` varchar(45)
,`del_fname` varchar(45)
,`del_lname` varchar(45)
,`del_bdate` date
,`del_sex` varchar(45)
,`del_contact` varchar(45)
);
-- --------------------------------------------------------

--
-- Table structure for table `tbl_delegations`
--

CREATE TABLE IF NOT EXISTS `tbl_delegations` (
  `delegation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delegation_name` varchar(45) NOT NULL,
  `delegation_add` varchar(45) NOT NULL,
  `delegation_contact` varchar(45) NOT NULL,
  PRIMARY KEY (`delegation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_delegations`
--

INSERT INTO `tbl_delegations` (`delegation_id`, `delegation_name`, `delegation_add`, `delegation_contact`) VALUES
(1, 'BISU-MC', 'Tagbilaran City', '09091-1221-11'),
(2, 'BISU-BILAR', 'BILAR, BOHOL', '09121112-1'),
(3, 'BISU-BALILIHAN', 'BALILIHAN, BOHOL', '09121112-1'),
(4, 'ACLC-TAGBILARAN', 'TAGBILRAN CITY', '09121112-1'),
(5, 'University of Bohol', 'Tagbilaran City', '501-15616');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_del_delegation`
--

CREATE TABLE IF NOT EXISTS `tbl_del_delegation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `delegates_id` int(11) unsigned NOT NULL,
  `delegation_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `session_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_name` varchar(45) NOT NULL,
  `day_no` varchar(45) NOT NULL,
  `session_start` time NOT NULL,
  `session_end` time NOT NULL,
  `is_active` int(11) unsigned NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`session_id`, `session_name`, `day_no`, `session_start`, `session_end`, `is_active`) VALUES
(2, 'AM SESSION IN', '1', '15:00:00', '19:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_account`
--

CREATE TABLE IF NOT EXISTS `tbl_user_account` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user_account`
--

INSERT INTO `tbl_user_account` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'admin', 'admin', 'checker');

-- --------------------------------------------------------

--
-- Structure for view `tbl_delegate_attendance`
--
DROP TABLE IF EXISTS `tbl_delegate_attendance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbl_delegate_attendance` AS select `at`.`session_id` AS `session_id`,`at`.`attendance_id` AS `attendance_id`,`di`.`del_id` AS `del_id`,if(isnull(`db`.`delegates_barcode`),'Not yet entered',`db`.`delegates_barcode`) AS `barcode`,`at`.`session_date` AS `session_date`,`di`.`del_delegation` AS `del_delegation`,`di`.`del_fname` AS `del_fname`,`di`.`del_lname` AS `del_lname`,`di`.`del_bdate` AS `del_bdate`,`di`.`del_sex` AS `del_sex`,`di`.`del_contact` AS `del_contact` from ((`tbl_delegates_info` `di` left join `tbl_delegates_barcode` `db` on((`di`.`del_id` = `db`.`delegates_id`))) join `tbl_attendance` `at` on((`di`.`del_id` = `at`.`delegates_id`))) group by `di`.`del_id` order by `at`.`session_date`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
