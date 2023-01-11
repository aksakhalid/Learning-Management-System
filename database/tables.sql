-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 01:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` char(15) DEFAULT NULL,
  `aname` char(30) DEFAULT NULL,
  `apsd` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aname`, `apsd`) VALUES
('101', 'ayesha', 'ayesha');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
  

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `attendence`
--


-- --------------------------------------------------------

--
-- Table structure for table `classtimetable`
--

CREATE TABLE IF NOT EXISTS `classtimetable` (
`number` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(30) ,
  `monday` varchar(30) ,
  `tuesday` varchar(30),
  `wednesday` varchar(30) ,
  `thursday` varchar(30),
  `friday` varchar(30) ,
  `saturday` varchar(30),
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtimetable`
--




-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empname` varchar(20) NOT NULL,
  `emplname` varchar(20) NOT NULL,
  `empdob` varchar(12) ,
  `emppbirth` varchar(50) ,
  `empcnic` varchar(15) ,
  `gender` varchar(10) ,
  `fid` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `fmob` varchar(20) ,
  `emppho` varchar(30) ,
  `empmob` varchar(30) ,
  `empemail` varchar(30) ,
  `empaddress` varchar(100) ,
  `regdate` varchar(20) NOT NULL,
  `qual` varchar(20) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `desgn` varchar(20) NOT NULL,
  `exp` varchar(50),
  `salary` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------



--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `number` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `fee` int(20) ,
  `pay` int(20) ,
  `fine` int(20) ,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `expenses`
--




-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `code` char(15) DEFAULT NULL,
  `iname` char(30) DEFAULT NULL,
  `address` char(30) DEFAULT NULL,
  `city` char(30) DEFAULT NULL,
  `otime` char(30) DEFAULT NULL,
  `ctime` char(30) DEFAULT NULL,
  `pno` int(30) DEFAULT NULL,
  `mno` int(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--


-- --------------------------------------------------------

--
-- Table structure for table `prooffered`
--

CREATE TABLE IF NOT EXISTS `prooffered` (
  `cid` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `subj` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prooffered`
--



-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `sid` char(15) NOT NULL,
  `sub` varchar(30) NOT NULL DEFAULT '',
  `term` char(30) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `obtain` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`,`sub`),

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stdname` varchar(20) NOT NULL,
  `stdlname` varchar(20) NOT NULL,
  `stddob` varchar(12),
  `stdpbirth` varchar(50),
  `stdcnic` varchar(15) NOT NULL,
  `gender` varchar(10),
  `fid` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `flname` varchar(20) NOT NULL,
  `fmob` varchar(20),
  `fpro` varchar(30),
  `fincome` int(11) ,
  `fqua` varchar(30) ,
  `stdpho` varchar(30) ,
  `stdmob` varchar(30) ,
  `stdemail` varchar(30) ,
  `stdaddress` varchar(100) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `reqclass` varchar(20) NOT NULL,
  `stdsch` varchar(50) NOT NULL,
  `fee` int(15) NOT NULL,
  `grno` varchar(20) NOT NULL,
  PRIMARY KEY (`grno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--



-- --------------------------------------------------------

--
-- Table structure for table `teachertimetable`
--

CREATE TABLE IF NOT EXISTS `teachertimetable` (
  `tid` varchar(30) ,
  `tname` varchar(30) ,
  `monday` varchar(30) ,
  `tuesday` varchar(30) ,
  `wednesday` varchar(30) ,
  `thursday` varchar(30) ,
  `friday` varchar(30) ,
  `saturday` varchar(30) ,
  PRIMARY KEY (`tid`)
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachertimetable`
--



-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `period` varchar(30) NOT NULL,
  `stime` varchar(30) NOT NULL,
  `etime` varchar(30) NOT NULL'
  PRIMARY KEY(`period`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--



-- --------------------------------------------------------