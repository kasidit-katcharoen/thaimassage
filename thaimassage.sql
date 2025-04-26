-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 02:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thaimassage`
--

-- --------------------------------------------------------

--
-- Table structure for table `dateoff`
--

CREATE TABLE `dateoff` (
  `dateoff_id` int(11) NOT NULL,
  `dateoff_date` date NOT NULL,
  `dateoff_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dateroundlimit`
--

CREATE TABLE `dateroundlimit` (
  `dateroundlimit_id` int(10) NOT NULL,
  `datelimit` varchar(10) NOT NULL COMMENT 'จำกัดจำนวนวันจองล่วงหน้า',
  `roundlimit` varchar(10) NOT NULL COMMENT 'จำกัดจำนวนคนต่อรอบ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dateroundlimit`
--

INSERT INTO `dateroundlimit` (`dateroundlimit_id`, `datelimit`, `roundlimit`) VALUES
(0, '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL COMMENT 'รหัสหมอ',
  `doctor_img` varchar(255) NOT NULL COMMENT 'รูปภาพหมอ',
  `doctor_prefix_name` varchar(20) NOT NULL COMMENT 'คำนำหน้า',
  `doctor_fname` varchar(50) NOT NULL COMMENT 'ชื่อจริง',
  `doctor_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `doctor_rank` varchar(255) NOT NULL COMMENT 'ตำแหน่ง\r\n',
  `doctor_professional_license` varchar(255) NOT NULL COMMENT 'ใบประกอบวิชาชีพ',
  `doctor_transcript` varchar(255) NOT NULL COMMENT 'วุฒิการศึกษา',
  `doctor_sort` varchar(10) NOT NULL DEFAULT '999' COMMENT 'ลำดับการเรียง',
  `doctor_allow` varchar(30) NOT NULL DEFAULT 'อนุญาต' COMMENT 'การอนุญาต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_img`, `doctor_prefix_name`, `doctor_fname`, `doctor_lname`, `doctor_rank`, `doctor_professional_license`, `doctor_transcript`, `doctor_sort`, `doctor_allow`) VALUES
(1, '20220321045617fulldoctorimg06.png', 'พท.', 'พนิดา', 'แก้วใส', 'แพทย์แผนไทยปฏิบัติการ', 'พท.ป.1253', 'ปริญญาตรี : แพทย์แผนไทยประยุกต์บัณฑิต', '4', 'อนุญาต'),
(2, '20220321045451fulldoctorimg05.png', 'พท.', 'วัชราภรณ์', 'สระสันเทียะ', 'แพทย์แผนไทยปฏิบัติการ', 'พท.ป.2599', 'แพทย์แผนไทยประยุกต์บัณฑิต', '5', 'อนุญาต'),
(3, '20220317065535fulldoctorimg04.png', 'พท.', 'ทศพิธ', 'วรธรรมพิทักษ์', 'แพทย์แผนไทยปฏิบัติการ', 'บ.ป. 327', 'ปริญาตรี  : วิทยาศาสตร์บัณฑิต สาขาการแพทย์แผนไทยประยุกต์ \nปริญญาโท  : ศึกษาศาสตร์มหาบัณฑิต สาขาจิตวิทยาการศึกษาและแนะแนว', '4', 'อนุญาต'),
(4, '20220317065529fulldoctorimg03.png', 'พท.', 'เอ็นดู', 'ภักดีจอหอ', 'แพทย์แผนไทยปฏิบัติการ', 'พท.ป.1644', 'แพทย์แผนไทยบัณฑิต', '3', 'อนุญาต'),
(5, '20220317065524fulldoctorimg02.png', 'พท.', 'อัญชลี', 'ชลเมธีกุล', 'แพทย์แผนไทยชำนาญการ', 'พท.ป.1188', 'แพทย์แผนไทยประยุกต์บัณฑิต', '2', 'อนุญาต'),
(9, '20220317065519fulldoctorimg01.png', 'พญ.', 'นงนาถ', 'จวงเเจ้ง', 'นายแพทย์ชำนาญการพิเศษ', 'ยังไม่ระบุ', 'ยังไม่ระบุ', '1', 'อนุญาต');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_date` date NOT NULL,
  `news_time` varchar(100) NOT NULL,
  `news_content` text NOT NULL,
  `news_img` text NOT NULL,
  `news_allow` varchar(30) NOT NULL DEFAULT 'อนุญาต'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(10) NOT NULL COMMENT 'รหัสรายการจอง',
  `reserve_prefixname` varchar(20) NOT NULL COMMENT 'คำนำหน้าผู้จอง',
  `reserve_fname` varchar(30) NOT NULL COMMENT 'ชื่อผู้จอง',
  `reserve_lname` varchar(30) NOT NULL COMMENT 'นามสกุลผู้จอง',
  `reserve_card_id` varchar(13) NOT NULL COMMENT 'เลขบัตร ปชช. ผู้จอง',
  `reserve_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรผุ้จอง',
  `reserve_age` varchar(3) NOT NULL COMMENT 'อายุผุ้จอง',
  `reserve_sex` varchar(20) NOT NULL COMMENT 'เพศผู้จอง ชาย, หญิง',
  `reserve_address` varchar(200) NOT NULL COMMENT 'ที่อยู่ผู้จอง',
  `reserve_stm` varchar(100) NOT NULL COMMENT 'อาการ',
  `reserve_stm_other` varchar(100) NOT NULL COMMENT 'อาการอื่น ๆ',
  `reserve_date` date NOT NULL COMMENT 'วันที่จอง',
  `reserve_time` varchar(30) NOT NULL COMMENT 'เวลาจอง',
  `reserve_status` varchar(30) NOT NULL DEFAULT 'รอการอนุมัติ' COMMENT 'สถานะการจอง รอการอนุมัติ, อนุมัติเเล้ว, ไม่ได้รับบริการ',
  `reserve_congenital_disease` varchar(50) NOT NULL COMMENT 'โรคประจำตัว',
  `reserve_drug_allergy` varchar(50) NOT NULL COMMENT 'ประวัติการเเพ้ยา',
  `reserve_vaccine_covid_19` varchar(20) NOT NULL COMMENT 'ประวัติการฉีดวัคฉีน ยังไม่ฉีด, ฉีด 1 เข็ม, ฉีด 2 เข็ม, ฉีดมากว่า 2 เข็ม',
  `user_id` int(10) NOT NULL COMMENT 'รหัสผู้ใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `times_id` int(11) NOT NULL,
  `times_timesoff` varchar(150) NOT NULL,
  `times_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้งาน',
  `user_name_prefix` varchar(10) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `user_fname` varchar(50) NOT NULL COMMENT 'ชื่อจริง',
  `user_lname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `user_sex` varchar(20) NOT NULL COMMENT 'เพศผู้ใช้งาน ชาย, หญิง',
  `user_age` varchar(10) NOT NULL COMMENT 'อายุผู้ใช้งาน',
  `user_card_id` varchar(13) NOT NULL COMMENT 'รหัสบัตรประชาชน',
  `user_tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `user_address` varchar(100) NOT NULL COMMENT 'ที่อยู่ผู้ใช้งาน',
  `user_type` varchar(20) NOT NULL DEFAULT 'ผู้ใช้งานทั่วไป' COMMENT 'ประเภทผู้ใช้งาน 1=ผู้ใช้งานทั่วไป 2=ผู้ดูแลระบบ\r\n',
  `user_allow` varchar(20) NOT NULL DEFAULT 'อนุญาต' COMMENT 'การอนุญาตการใช้งาน 0=ไม่อนุญาต 1=อนุญาต\r\n',
  `user_congenital_disease` varchar(50) NOT NULL COMMENT 'โรคประจำตัวผู้ใช้งาน',
  `user_drug_allergy` varchar(50) NOT NULL COMMENT 'ประวัติการแพ้ยาผู้ใช้งาน',
  `user_vaccine_covid_19` varchar(30) NOT NULL COMMENT 'ประวัติการฉีดวัคฉีน ยังไม่ฉีด, ฉีด 1 เข็ม, ฉีด 2 เข็ม, ฉีดมากว่า 2 เข็ม\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dateoff`
--
ALTER TABLE `dateoff`
  ADD PRIMARY KEY (`dateoff_id`);

--
-- Indexes for table `dateroundlimit`
--
ALTER TABLE `dateroundlimit`
  ADD PRIMARY KEY (`dateroundlimit_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`times_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dateoff`
--
ALTER TABLE `dateoff`
  MODIFY `dateoff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหมอ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserve_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรายการจอง', AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `times_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ใช้งาน', AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
