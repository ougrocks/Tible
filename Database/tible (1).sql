-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 08:41 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tible`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
`id` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alloted` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `subid`, `name`, `alloted`) VALUES
(1, 1, 'Dr. Deepa Chaudhary', 1),
(2, 1, 'Ms Neeta Verma', 1),
(3, 2, 'Aparna Jhoshi', 1),
(4, 2, 'Richa Joshi', 1),
(5, 3, 'Ms Prachi Vats', 1),
(6, 3, 'Mr Alok', 1),
(7, 4, 'SPM - Ms Amrita Bhatnagar / CNS - Ms Diksha', 1),
(8, 4, 'SPM - Ms Aanchal Jain / CNS - Ms Diksha', 1),
(9, 7, 'Ms Aruna', 0),
(10, 8, 'Ms Sweeta Bansal ', 0),
(11, 9, 'Dr . K C Tripathi', 0),
(12, 7, 'Ms Anchal', 0),
(13, 8, 'Ms Shweta Chaku ', 0),
(14, 9, 'Ms Prachi', 0),
(15, 7, 'Ms Alka', 0),
(16, 8, 'Ms Nidhi Agg ', 0),
(17, 9, 'Mr Harinder', 0),
(18, 7, 'Ms Aruna', 0),
(19, 8, 'Shraddha Srivastava', 0),
(20, 9, 'Mr Ashwini', 0),
(21, 15, 'Mr Pranshu', 1),
(22, 16, 'Gaurav Agg', 1),
(23, 17, 'Neeta Verma', 0),
(24, 18, 'Mr Harinder', 0),
(25, 19, 'Tripti', 1),
(26, 15, 'Ms Kamna', 0),
(27, 16, 'Diksha', 1),
(28, 17, 'Pooja Tripathi', 1),
(29, 18, 'Shweta Juneja', 1),
(30, 19, 'Tripti', 1),
(31, 15, 'Prof Ram Gopal', 1),
(32, 16, 'Gaurav Agg', 0),
(33, 17, 'Ms Anjali Singhal', 1),
(34, 18, 'Aditya', 1),
(35, 19, 'Ms Kamna', 0),
(36, 1, 'Dr Pooja Tripathi', 1),
(37, 3, 'Ms Sneh Prabha', 1),
(38, 4, 'SPM - Ms Anjali Singhal / CNS - Ms Diksha', 1),
(39, 2, 'Temp Name', 1),
(40, 20, 'Dr. Arunima Mishra', 1),
(41, 20, 'Mr. Mukul Jain', 1),
(42, 21, 'TEMP LAB A', 0),
(43, 21, 'TEMP LAB B', 0),
(44, 22, 'Diksha / Gaurav Agg', 0),
(45, 22, 'Diksha / Gaurav Agg', 0),
(46, 23, 'Mr Harinder / Shweta Juneja', 0),
(47, 23, ' Shweta Juneja / Aditya', 0),
(48, 24, 'TEMP M', 0),
(49, 24, 'TEMP N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fixslot`
--

CREATE TABLE IF NOT EXISTS `fixslot` (
`id` int(11) NOT NULL,
  `section` varchar(100) NOT NULL,
  `fid` int(11) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `fixslot`
--

INSERT INTO `fixslot` (`id`, `section`, `fid`, `subid`) VALUES
(1, 'CS A', 1, 1),
(2, 'CS A', 3, 2),
(3, 'CS A', 6, 3),
(4, 'CS A', 8, 4),
(5, 'CS A', 31, 15),
(6, 'CS A', 27, 16),
(7, 'CS A', 33, 17),
(8, 'CS A', 34, 18),
(9, 'CS A', 25, 19),
(10, 'CS A', 41, 20),
(11, 'CS A', 21, 15),
(12, 'CS A', 22, 16),
(13, 'CS A', 28, 17),
(14, 'CS A', 29, 18),
(15, 'CS A', 30, 19),
(16, 'CS A', 40, 20),
(17, 'CS A', 36, 1),
(18, 'CS A', 39, 2),
(19, 'CS A', 5, 3),
(20, 'CS A', 7, 4),
(21, 'CS A', 2, 1),
(22, 'CS A', 4, 2),
(23, 'CS A', 37, 3),
(24, 'CS A', 38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
`id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `6` varchar(100) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`id`, `year`, `semester`, `section`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
(1, '2016', 6, 'CS A', 'CD', 'ISCL', 'IM', 'WT', 'SE', 'CD', 'SE', 'CN'),
(2, '2016', 6, 'CS A', 'CD', 'IM', 'IM', 'CN', 'SE', 'CD', 'ISCL', 'WT'),
(3, '2015', 1, 'CS C', 'ISCL', 'WT', 'CD', 'CN', 'IM', 'CN', 'WT Lab', 'WT Lab'),
(4, '2015', 3, 'CS D', 'J', 'J', 'A', 'C', 'C', 'H', 'J', 'A'),
(5, '2016', 1, 'CS A', 'K', 'A', 'Lab1', 'Lab1', 'G', 'I', 'A', 'A'),
(6, '2018', 1, 'CS A', 'A', 'G', 'C', 'A', 'LAB 1', 'LAB 1', 'A', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'rdxshubham', '07shubhamg@gmail.com', '3de5de3743a5d25bccd4519dca7164b0a722b8efef684187ea690262e084d23022aa5901a686092cd81dda60bac00091f068f381c4fd593a0cba8fe9b28d3489', '5b2dcfdc9c2017952a89473cb46aee76d07f6599caeb8bc0c2241f0717f50baaf4dc8917e6a4dfb3e319ee99884039d55b0d8063f3c839e4c1c2bc0dc19db7a5'),
(2, 'demo', 'demo@tible.com', '4fa91b48c42a08cc209f8d9f0e78de3ae06b38ff1254266645fed31317e6803fa6b76f09ce6dbdc6e9118ae45a2eb83e94f8e306e2ded2dc52fe31a22b38d41e', 'f42773655cdabf0ac24dfc7b418ddd810803f922ecb3ee6583adf119fd9fa5cf948b56dd6eccdd3a6695a4892e6a15dfbeb2ec6253788dab15eba1f888a46031'),
(3, 'priyanka', 'priyanka@gmail.com', '44e44510325e59a50b7a0508c2713be511909459acabd5553a176bb95cb8491e701c71038c7d21554da818fa42dcc801ef6b101d5c15f40e638d6c42963a5b6f', '4656b7a0bb71934c81b9c0828f6acde82c1ff9d26bee5d33762b4821e8456331347dc96189e3293b683e512cf2fa923fc8adbe2c9d47277d61864fea5a334dc7'),
(4, 'sidheart', 'siddharth@tible.com', '831413e1bc110d358ec788bec6ffed7031f4566f68d87d1019d52e18a1adb5d7bec6fa06972f0f924393e9201116fddefe7adb6076a00fffa5d95c6f5b93e452', 'ce6e8ae33ad56a52548f150b8e5914424700dbba422a236c18abe16b280a061bbd69411ce47a7026d6e5786b4988189020c46b670e53822e7fa76fa0e4509c66'),
(5, 'vishu', 'vshkadiyan@gmail.com', '60aed76422b04ffa56a224461e6dd37a14e90a38581e458995df92f80be946b890fc098f6881932bb1718d77f24e1cffe731636e3d242918109d368858623cba', 'c42998b47c102e41b3feb0f999f131f59702bce729c13f9870fc15264003b9a7961ba78388be157fc0a70bb04c2ecd33bbdae7716315de3f3636525c30f18f90'),
(6, 'shubham', 'shubham@gmail.com', '6a072653a8fbf13cc0107eeb65842f1f037caa56b30c9922f0dfaa27e9423cada8c1b9d510c50c2b47130b83ed64951cbed63220e23ad52bfc6674c59c22b8ab', '0e0e251298fcb71cc548d4e782cb1197fd60b084cab6334b36ed9933cc59a1246f4adbb9ecf68fae261c3e80f534a9c8021d48ce6ac55fa2f344653b15697397'),
(7, 'funt', 'fun@gmail.com', '9edb6d58d6eddb2322680065fd6fa20836e559888b0281752ffe63a328f87289a39ae1988d6a4c2ae7eb1d261e1e819a4c1e60c87fbcca5179e0a588946a5f20', 'b56b963bab288b8eaea61abe2afb63d7bc96e163d1527afc49fa80aa307de7aa6cbb7e5a6e163c5de056c9a42570b9aa802f6e70d128a9d65b076e2e3eae8ba0'),
(8, 'tible', 'tible@ipec.org.in', '2b1358ad4b073650dd48f83f66a2dd59fab046ec82cf623895d40434f593025807505888e326ebe943ad25ce47802833021bf0ffe65ea9d22ff6cae0b6eff398', 'ec6d4560db3adbd4cc1c4294ffe236aeecae837e7712dfcf7b84d9fb0e26a713b16533b87f11f11e1d6c671358b67dded3d548fb6771b9036953939785131c9b');

-- --------------------------------------------------------

--
-- Table structure for table `mondey`
--

CREATE TABLE IF NOT EXISTS `mondey` (
`id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `6` varchar(100) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mondey`
--

INSERT INTO `mondey` (`id`, `year`, `semester`, `section`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
(1, '2016', 6, 'CS A', 'ISCL', 'SE', 'WT Lab', 'WT Lab', 'CN', 'CD', 'CN Lab', 'CN Lab'),
(2, '2016', 6, 'CS A', 'CN', 'WT', 'WT Lab', 'WT Lab', 'ISCL', 'CN', 'ISCL', 'SE'),
(3, '2015', 1, 'CS C', 'ISCL', 'IM', 'WT', 'SE', 'CD', 'CN', 'CD', 'IM'),
(4, '2015', 3, 'CS D', 'H', 'E', 'A', 'L', 'P', 'P', 'J', 'C'),
(5, '2016', 1, 'CS A', 'A', 'I', 'I', 'K', 'A', 'C', 'E', 'G'),
(6, '2018', 1, 'CS A', 'I', 'I', 'L', 'C', 'LAB 2', 'LAB 2', 'E', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
`sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sid`, `name`) VALUES
(8, '8th Semester');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`subid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `sid`, `sname`) VALUES
(1, 8, 'AI'),
(2, 8, 'OE'),
(3, 8, 'E-IV'),
(4, 8, 'E-III'),
(5, 4, 'MIII'),
(6, 4, 'MP'),
(7, 4, 'OS'),
(8, 4, 'CG'),
(9, 4, 'TAFL'),
(10, 4, 'HV'),
(11, 4, 'IP'),
(12, 4, 'MP Lab'),
(13, 4, 'CG Lab'),
(14, 4, 'OS Lab'),
(15, 6, 'CN'),
(16, 6, 'WT'),
(17, 6, 'ISCL'),
(18, 6, 'CD'),
(19, 6, 'SE'),
(20, 6, 'IM');

-- --------------------------------------------------------

--
-- Table structure for table `sublab`
--

CREATE TABLE IF NOT EXISTS `sublab` (
`labid` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `labname` varchar(255) NOT NULL,
  `labfac` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sublab`
--

INSERT INTO `sublab` (`labid`, `sem`, `labname`, `labfac`) VALUES
(1, 6, 'CD Lab', 'TEMP A'),
(2, 6, 'WT Lab', 'TEMP B'),
(3, 6, 'CN Lab', 'TEMP C');

-- --------------------------------------------------------

--
-- Table structure for table `temp_labs`
--

CREATE TABLE IF NOT EXISTS `temp_labs` (
`id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `temp_labs`
--

INSERT INTO `temp_labs` (`id`, `year`, `semester`, `section`, `lab`, `faculty`) VALUES
(1, 2018, 1, 'CS A', 'LAB 1', 'A'),
(2, 2018, 1, 'CS A', 'LAB 2', 'X'),
(3, 2018, 1, 'CS A', 'LAB 3', 'Z');

-- --------------------------------------------------------

--
-- Table structure for table `temp_subjects`
--

CREATE TABLE IF NOT EXISTS `temp_subjects` (
`id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `temp_subjects`
--

INSERT INTO `temp_subjects` (`id`, `year`, `semester`, `section`, `subject`, `faculty`) VALUES
(1, 2018, 1, 'CS A', 'A', 'B'),
(2, 2018, 1, 'CS A', 'C', 'D'),
(3, 2018, 1, 'CS A', 'E', 'F'),
(4, 2018, 1, 'CS A', 'G', 'H'),
(5, 2018, 1, 'CS A', 'I', 'K'),
(6, 2018, 1, 'CS A', 'L', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE IF NOT EXISTS `thursday` (
`id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `6` varchar(100) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`id`, `year`, `semester`, `section`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
(1, '2016', 6, 'CS A', 'ISCL', 'IM', 'CD', 'WT', 'WT Lab', 'WT Lab', 'CN Lab', 'CN Lab'),
(2, '2016', 6, 'CS A', 'CD', 'IM', 'SE', 'CD', 'WT', 'CN', 'CN Lab', 'CN Lab'),
(3, '2015', 1, 'CS C', 'SE', 'IM', 'ISCL', 'CN', 'CD', 'WT', 'SE', 'IM'),
(4, '2015', 3, 'CS D', 'J', 'C', 'Z', 'Z', 'J', 'C', 'L', 'A'),
(5, '2016', 1, 'CS A', 'I', 'G', 'A', 'I', 'K', 'A', 'Lab2', 'Lab2'),
(6, '2018', 1, 'CS A', 'G', 'G', 'A', 'L', 'C', 'A', 'LAB 3', 'LAB 3');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE IF NOT EXISTS `tuesday` (
`id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `6` varchar(100) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`id`, `year`, `semester`, `section`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
(1, '2016', 6, 'CS A', 'CD', 'IM', 'CN', 'SE', 'CD Lab', 'CD Lab', 'ISCL', 'CD'),
(2, '2016', 6, 'CS A', 'IM', 'CD', 'WT', 'IM', 'CD Lab', 'CD Lab', 'CD', 'ISCL'),
(3, '2015', 1, 'CS C', 'SE', 'ISCL', 'IM', 'CN', 'IM', 'WT', 'CD Lab', 'CD Lab'),
(4, '2015', 3, 'CS D', 'E', 'C', 'L', 'E', 'A', 'A', 'M', 'M'),
(5, '2016', 1, 'CS A', 'I', 'K', 'I', 'C', 'K', 'A', 'A', 'A'),
(6, '2018', 1, 'CS A', 'L', 'G', 'C', 'A', 'G', 'I', 'L', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'test', 'test@test.com', 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE IF NOT EXISTS `wednesday` (
`id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `1` varchar(100) NOT NULL,
  `2` varchar(100) NOT NULL,
  `3` varchar(100) NOT NULL,
  `4` varchar(100) NOT NULL,
  `5` varchar(100) NOT NULL,
  `6` varchar(100) NOT NULL,
  `7` varchar(100) NOT NULL,
  `8` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`id`, `year`, `semester`, `section`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES
(1, '2016', 6, 'CS A', 'CN', 'SE', 'WT', 'CD', 'IM', 'ISCL', 'SE', 'CD'),
(2, '2016', 6, 'CS A', 'IM', 'SE', 'ISCL', 'WT', 'CN', 'CD', 'CN', 'IM'),
(3, '2015', 1, 'CS C', 'IM', 'CN', 'ISCL', 'IM', 'CN Lab', 'CN Lab', 'IM', 'CD'),
(4, '2015', 3, 'CS D', 'A', 'L', 'C', 'J', 'A', 'A', 'E', 'E'),
(5, '2016', 1, 'CS A', 'I', 'C', 'A', 'G', 'Lab3', 'Lab3', 'C', 'K'),
(6, '2018', 1, 'CS A', 'A', 'G', 'C', 'L', 'G', 'A', 'I', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixslot`
--
ALTER TABLE `fixslot`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friday`
--
ALTER TABLE `friday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mondey`
--
ALTER TABLE `mondey`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
 ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `sublab`
--
ALTER TABLE `sublab`
 ADD PRIMARY KEY (`labid`);

--
-- Indexes for table `temp_labs`
--
ALTER TABLE `temp_labs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_subjects`
--
ALTER TABLE `temp_subjects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thursday`
--
ALTER TABLE `thursday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuesday`
--
ALTER TABLE `tuesday`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wednesday`
--
ALTER TABLE `wednesday`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `fixslot`
--
ALTER TABLE `fixslot`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `friday`
--
ALTER TABLE `friday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mondey`
--
ALTER TABLE `mondey`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sublab`
--
ALTER TABLE `sublab`
MODIFY `labid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `temp_labs`
--
ALTER TABLE `temp_labs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `temp_subjects`
--
ALTER TABLE `temp_subjects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `thursday`
--
ALTER TABLE `thursday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tuesday`
--
ALTER TABLE `tuesday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wednesday`
--
ALTER TABLE `wednesday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
