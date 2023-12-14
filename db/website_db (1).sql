-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'Admin123'),
(2, '2', '2'),
(3, '4', '4'),
(4, '4234', '4234'),
(5, '123', '123'),
(6, '8', '8'),
(7, 'red', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_db`
--

CREATE TABLE `pwd_db` (
  `pwd_id` int(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `blood_type` varchar(50) NOT NULL,
  `ph_id` varchar(255) NOT NULL,
  `tin_id` varchar(255) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city_town` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `educational_attainment` varchar(100) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_person_no` varchar(255) NOT NULL,
  `valid_id` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(233) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwd_db`
--

INSERT INTO `pwd_db` (`pwd_id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `birth_place`, `civil_status`, `blood_type`, `ph_id`, `tin_id`, `religion`, `contact_number`, `email_address`, `province`, `city_town`, `address`, `educational_attainment`, `employment_status`, `contact_person`, `contact_person_no`, `valid_id`, `id_number`, `disability`, `images`, `username`, `password`, `status`) VALUES
(1, 'Reiniel', 'Pradez', 'Lagman', '1994-10-06', '29', 'Male', 'Jaen, Nueva Ecija', 'Married', 'O+', '', '1231321', 'Catholic', '09510967511', 'reiniellagman@gmail.com', 'Others', 'others', 'B7 L8 Ph1 Dela Costa V, Burgos', 'College Graduate', 'Employed', 'Apple Joy Cabuquin', '0951096751', 'SSS', '123132123123', 'Leg', '', 'reiniellagman', 'Aphio1925**', 'Approved'),
(3, '1', '1', '1', '2023-11-08', '1', 'Male', '1', 'Single', 'O -', '', '1', '1', '1', '1@yahoo.com', 'Bohol', 'Quezon City', '1', '1', 'Full-Time Employee', '1', '1', 'SSS', '1', '', '', 'hannah', 'hannah', 'Declined'),
(4, 'ann', 'ann', 'ann', '2023-11-16', '23', 'Female', 'ann', 'Married', 'A +', '', 'eaf', 'dsad', '4', 'ann@yahoo.com', 'Aklan', 'Zamboanga City', 'ann', 'ann', 'Full-Time Employee', 'ann', 'ann', 'PHILHEALTH', 'ann', '', '', 'ann101100', 'ann101100', 'Pending'),
(5, '2', '2', '2', '2023-11-08', '23', 'Male', '2', 'Married', 'A -', '', '2', '2', '2', '223@yahoo.com', 'Aklan', 'Davao City', '2', '2', 'Part-Time Employee', '2', '2', 'UMID', '2', '', '', '23', '23', 'Approved'),
(6, '23', '23', '23', '2023-11-01', '23', 'Female', '23', 'Married', 'O -', '', '23', '23', '23', '23@yahoo.com', 'Biliran', 'Manila', '23', '23', 'Part-Time Employee', '23', '23', 'UMID', '23', '', '', '56', '56', 'Pending'),
(7, '343', '34', '324', '2023-11-11', '324', 'Male', '324', 'Seperated', 'A +', '', '432', '324', '34', '34@yahoo.com', 'Albay', 'Pasig', '34', '324', 'Part-Time Employee', '34', '324', 'Pag-ibig', '34', '', '', '34', '34', 'Pending'),
(8, '4354', '35435', '4354', '2023-11-13', '45', 'Female', '435', 'Married', 'A -', '', '43543', '43543', '4534', '43543@yahoo.com', 'Biliran', 'Davao City', '5435', '435435', 'Self-Employed', '43543', '435', 'Pag-ibig', '435', '', '', '454', '454', 'Pending'),
(9, '4354', '35435', '4354', '2023-11-13', '45', 'Female', '435', 'Married', 'A -', '', '43543', '43543', '4534', '43543@yahoo.com', 'Biliran', 'Davao City', '5435', '435435', 'Self-Employed', '43543', '435', 'Pag-ibig', '435', '', '', '45434', '45434', 'Pending'),
(10, '4354', '35435', '4354', '2023-11-13', '45', 'Female', '435', 'Married', 'A -', '', '43543', '43543', '4534', '43543@yahoo.com', 'Biliran', 'Davao City', '5435', '435435', 'Self-Employed', '43543', '435', 'Pag-ibig', '435', '', '', '45434sdaf', '45434sdaf', 'Pending'),
(11, '123', '123', '123', '2023-11-10', '123', 'Male', '123', 'Widow', 'A +', '', '213', '123', '213', '123@yahoo.com', 'Bohol', 'Pasig', '123', '123', 'Independent Contractor', '123', '213', 'UMID', '123', '', '', '123', '123', 'Pending'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Employment Status', '', '', '', '', '', '', '', '', 'Pending'),
(13, '123', '123123', '21312', '2023-12-07', '123', 'Female', '123', 'Married', 'A -', '213', '213', '213', '213', '213@yahoo.com', 'Bukidnon', 'Manila', '213', '213', 'Retired', '21', '213', 'PHILHEALTH', '213', '', '', 'lala', 'lala', 'Pending'),
(14, '213', '12321', '3213', '2023-11-30', '3213', 'Female', '12321', 'Widow', 'O -', '213', '213', '213', '213', '34@yahoo.com', 'Bulacan', 'Caloocan', '213', '2132', 'Unemployed', '132132', '13213', 'Pag-ibig', '21321', '', 'ArrayArray', '12321321', '12321321', 'Pending'),
(15, 'test', 'test', 'test', '2023-12-07', '12', 'Male', 'test', 'Single', 'O +', 'tesa', 'teasr', 'test', '123423', 'test1@gmaill.com', 'Camarines Norte', 'others', 'test', 'test', 'Contract Employee', 'eretet', 'teast', 'SSS', 'asresrtr', '', '', 'test1', 'admin123', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sc_db`
--

CREATE TABLE `sc_db` (
  `sc_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `blood_type` varchar(255) NOT NULL,
  `ph_id` varchar(255) NOT NULL,
  `tin_id` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city_town` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `educational_attainment` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_person_no` varchar(255) NOT NULL,
  `valid_id` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc_db`
--

INSERT INTO `sc_db` (`sc_id`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `birth_place`, `civil_status`, `blood_type`, `ph_id`, `tin_id`, `religion`, `contact_number`, `email_address`, `province`, `city_town`, `address`, `educational_attainment`, `employment_status`, `contact_person`, `contact_person_no`, `valid_id`, `id_number`, `username`, `password`, `status`) VALUES
(1, 'Ramon', 'Santos', 'Lagman', '1964-01-01', '60', 'Male', 'Jaen, Nueva Ecija', 'Married', 'O+', '', '1231321', 'Catholic', '09510967511', 'ramonlagman@gmail.com', 'Others', 'others', 'B7 L8 Ph1 Dela Costa V, Burgos', 'College Graduate', 'Employed', 'Apple Joy Cabuquin', '0951096751', 'SSS', '123132123123', 'ramonlagman', 'Aphio1925**', 'Approved'),
(2, '2', '2', '2', '2023-11-03', '2', 'Male', '2', 'Married', 'O -', '2', '2', '2', '2', '2@yahoo.com', 'Abra', 'Davao City', '2', '2', 'Self-Employed', '2', '2', 'Pag-ibig', '2', '2', '2', 'Approved'),
(3, '5', '5', '5', '2023-11-01', '5', 'Female', '5', 'Married', 'A +', '5', '5', '5', '5', '5@yahoo.com', 'Bukidnon', 'Manila', '5', '5', 'Part-Time Employee', '5', '5', 'UMID', '5', '5', '5', 'Declined'),
(4, 'f', 'f', 'f', '2023-11-02', '3', 'Male', 'f', 'Married', 'A -', 'f', 'f', 'f', '3', 'f@yahoo.com', 'Bukidnon', 'Davao City', 'f', 'f', 'Independent Contractor', 'f', 'f', 'UMID', 'f', 'f', 'f', 'Approved'),
(5, 'sadsad', 'sadsad', 'sadsad', '2023-11-07', '21', 'Male', 'sdsa', 'Seperated', 'O -', 'sadsa', 'dsad', 'sadsa', '2321', 'dsa@yahoo.com', 'Aklan', 'Davao City', '321sad', 'sadas', 'Independent Contractor', 'dsad', 'sad', 'SSS', 'sa', 'asdsa', 'asdsa', 'Pending'),
(6, 'ret', 'rt', 'rt', '2023-11-03', '2', 'Male', 'rt', 'Married', 'A +', '4', '4', '4', '2', '4@yahoo.com', 'Benguet', 'Zamboanga City', '3', '4', 'Independent Contractor', '4', '4', 'Pag-ibig', '4', '45', '45', 'Pending'),
(7, 'dsff', 'dsf', 'dsf', '2023-11-01', '344', 'Female', 'ds', 'Married', 'A +', 'dfd', 'fdsf', 'dfdfd', '43543', 'dsf@yahoo.com', 'Dinagat Islands', 'Manila', 'sdfdsf', 'dfsdf', 'Self-Employed', 'ann', 'dsfds', 'Pag-ibig', 'dfdsf', 'asd', 'asd', 'Pending'),
(8, 'sad', 'asd', 'asdsad', '2023-11-04', '123', 'Male', 'sad', 'Married', 'O -', 'sads', 'adsa', 'sadsa', '232', '3432@yahoo.com', 'Bataan', 'Caloocan', 'sadsa', 'sad', 'Full-Time Employee', 'sad', 'sadsa', 'PHILHEALTH', 'asd', '54', '54', 'Pending'),
(9, 'test', 'test', 'test', '2023-12-07', '60', 'Male', 'test', 'Single', 'O +', '12324324', '213124234', 'test', '091223123', 'test@gmail.com', 'Camarines Norte', 'Quezon City', 'nrbs hkbgskabb', '345wer', 'Retired', 'test', '1233423', 'SSS', '1233543w4e', 'test', 'test1234', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_file`
--

CREATE TABLE `uploaded_file` (
  `file_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `file_name` text NOT NULL,
  `file_directory` text NOT NULL,
  `file_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_file`
--

INSERT INTO `uploaded_file` (`file_id`, `username`, `file_name`, `file_directory`, `file_type`) VALUES
(1, '', 'ADBS.pdf', '../uploaded_file/File/ADBS.pdf', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pwd_db`
--
ALTER TABLE `pwd_db`
  ADD PRIMARY KEY (`pwd_id`);

--
-- Indexes for table `sc_db`
--
ALTER TABLE `sc_db`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `uploaded_file`
--
ALTER TABLE `uploaded_file`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pwd_db`
--
ALTER TABLE `pwd_db`
  MODIFY `pwd_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sc_db`
--
ALTER TABLE `sc_db`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploaded_file`
--
ALTER TABLE `uploaded_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
