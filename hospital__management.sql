-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 03:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital _management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `number`, `type`) VALUES
(1, 'reyad', 'imam.reyad93@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0),
(2, 'reyad', 'reyad@gmail.com', '202cb962ac59075b964b07152d234b70', '', 1),
(3, 'reyad', 'uadayghosh@gmail.com', '123', '123', 1),
(4, 'aaaaaa', 'uadayghosh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01856228495', 1),
(5, 'aaaaaa', 'uadayghosh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01856228495', 1),
(6, 'aaaaaa', 'uadayghosh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01856228495', 1),
(7, 'IMAM Hossain', 'imam.reyad93d@gmail.com', '202cb962ac59075b964b07152d234b70', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`) VALUES
(1, 'Gastroenterology'),
(2, 'Haematology'),
(4, 'General Surgeon'),
(9, 'Haematology'),
(11, 'Specialty'),
(12, ' Philosophy'),
(13, 'Urology');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `number1` varchar(20) NOT NULL,
  `number2` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `address`, `number1`, `number2`, `email`) VALUES
(1, 'Hoffmanm Parkway, P.o Box 353 Mountain View. United States of America.', '01556228956', '01756525662', 'imam.reyad933@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(5) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `education` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `name`, `category`, `number`, `address`, `education`, `description`, `image`) VALUES
(1, 'anowar hossain', 13, '01856228495', 'dddddddd', 'aaaaaaaaaa', 'vv', 'profile-pic.jpg'),
(2, 'poly akter', 2, '018562284955', 'dddddddddddddd', 'ssssssssssssss', 'gggggggggg', 'cute-woman-pharmacist-with-clipboard_149228216.jpg'),
(3, 'joshim khan', 9, '01856228495', 'dhaka tejkunipara farmgat', 'bsc and msc', 'dddddddddddddddddd', 'HealthCare_Doctors-2.png'),
(6, 'palash khan', 2, '01856228495', 'pppss', 'SADFA d', 'When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.', 'HealthCare_Doctors-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `footer_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `footer_name`) VALUES
(1, 'copyright 2016 all rights reserved'),
(2, 'Copyright 2014 Lincoln High School. All rights reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `photo`, `description`) VALUES
(1, '13335599_507267599479280_4481579876176587163_n.jpg', 'sssss'),
(2, '13559209_1697878247128665_4878892509585915167_o.jpg', 'your name is reyad'),
(3, 'doctor-stethoscope-hospital-high-resolution-d-render-49539999.jpg', 'doctore name cane dkal am asdf'),
(4, 'profile-pic.jpg', 'sdd'),
(5, 'IMAM HOSSAIN - Copy.jpg', 'reyad picture\r\n'),
(6, 'eid-mubarak.jpg', 'eid mubarak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nurse`
--

CREATE TABLE `tbl_nurse` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serial`
--

CREATE TABLE `tbl_serial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `old` int(2) NOT NULL,
  `number` int(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `your_time` varchar(100) NOT NULL,
  `your_date` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_serial`
--

INSERT INTO `tbl_serial` (`id`, `name`, `old`, `number`, `category`, `doctor_name`, `address`, `your_time`, `your_date`, `status`) VALUES
(3, 'abdul hakim', 33, 1587452221, '11', 'joynal khan', 'ddd', '1:15 PM', '07-24-2016', 1),
(4, 'jinan', 22, 1856228495, '4', 'palash khan', 'dfd', '2:00 AM', '02/16/12', 1),
(6, 'anowar hossain', 22, 1856228495, '4', 'joshim khan', 'dddddddddd', '2:30 PM', '02/16/12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `slider` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `slider`, `description`) VALUES
(1, '150903-D-FW736-001.JPG', 'dsdfds'),
(2, 'Hydrangeas.jpg', 'sssssssss'),
(3, 'doctor-stethoscope-hospital-high-resolution-d-render-49539999.jpg', 'sdddddddddddddd'),
(4, 'sultan-Erdogan.jpg', 'dsdsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nurse`
--
ALTER TABLE `tbl_nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_nurse`
--
ALTER TABLE `tbl_nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
