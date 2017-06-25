-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 05:32 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_intern`
--

CREATE TABLE `applied_intern` (
  `id` int(12) NOT NULL,
  `intern_id` int(12) NOT NULL,
  `internship_details_id` int(12) NOT NULL,
  `compnay_id` int(12) NOT NULL,
  `intern_name` varchar(100) NOT NULL,
  `intern_cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_intern`
--

INSERT INTO `applied_intern` (`id`, `intern_id`, `internship_details_id`, `compnay_id`, `intern_name`, `intern_cv`) VALUES
(16, 5, 12, 1, 'Alex Garret', '52295-demo.pdf'),
(17, 5, 11, 6, 'Alex Garret', '4441-demo.pdf'),
(18, 2, 12, 1, 'Bob', '70165-demo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` int(12) NOT NULL,
  `empl_name` varchar(255) NOT NULL,
  `empl_mobile` bigint(12) NOT NULL,
  `empl_mail` varchar(255) NOT NULL,
  `empl_pass` varchar(32) NOT NULL,
  `empl_key` varchar(255) NOT NULL,
  `empl_organisation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`id`, `empl_name`, `empl_mobile`, `empl_mail`, `empl_pass`, `empl_key`, `empl_organisation`) VALUES
(1, 'Koushik Dutta', 9090876543, 'kou@gmail.com', '296506902c693b458707ad6f7e24a544', 'oeq83IpMTA', 'Chariot'),
(2, 'Bob', 9090876543, 'muvi@gmail.com', '296506902c693b458707ad6f7e24a544', 'QmYC0EHMn2', 'Muvi Entertainment'),
(3, 'Billy', 9090987654, 'oxi@gmail.com', '296506902c693b458707ad6f7e24a544', 'zGVaw7bNK0', 'Oxi'),
(4, 'Mav', 9090098765, 'mav@gmail.com', '296506902c693b458707ad6f7e24a544', 'YmneqlEapa', 'Mavrik'),
(5, 'Adi', 9090876543, 'oyo@gmail.com', '296506902c693b458707ad6f7e24a544', '3WOJSIqTJw', 'Oyo'),
(6, 'kiit', 99999, 'kiit@gmail.com', '296506902c693b458707ad6f7e24a544', '3y1cSh7ytD', 'kiit'),
(7, 'kiit', 99999, 'kiit@gmail.com', '296506902c693b458707ad6f7e24a544', 'FL6uFtsbyJ', 'kiit');

-- --------------------------------------------------------

--
-- Table structure for table `internship_details`
--

CREATE TABLE `internship_details` (
  `aid` int(12) NOT NULL,
  `userId` int(12) NOT NULL,
  `compDescription` text NOT NULL,
  `internArea` varchar(100) NOT NULL,
  `jobDetails` text NOT NULL,
  `stipend` varchar(100) NOT NULL,
  `availablity` int(12) NOT NULL,
  `status` varchar(10) NOT NULL,
  `postDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_details`
--

INSERT INTO `internship_details` (`aid`, `userId`, `compDescription`, `internArea`, `jobDetails`, `stipend`, `availablity`, `status`, `postDate`) VALUES
(1, 0, 'Big Company Like MNC', 'PHP', 'need have basic idea in php', '15000', 5, '1', '2017-06-16'),
(2, 2, 'VOD Platfrm depends', 'PHP Developer', 'Php,css,Html', '15000', 3, '1', '2017-06-16'),
(3, 0, 'dvxvd', 'Java', 'sdfsd', '5000', 10, '1', '2017-06-16'),
(4, 0, 'adasda', 'Java', 'sdadasda', '10000', 7, '1', '2017-06-17'),
(5, 5, 'asdasd', 'adasda', 'dssd', '16000', 0, '1', '2017-06-17'),
(6, 1, 'dasdasdasd', 'Java', 'ajdasd', '5000', 4, '1', '2017-06-17'),
(7, 2, 'dasdasdasd', 'IOS', 'adada', '6000', 5, '1', '2017-06-17'),
(8, 1, 'Its good company', 'C++', 'sshagsghags', '10000', 5, '1', '2017-06-17'),
(9, 2, 'Big Company', 'Android', 'know android', '10000', 4, '1', '2017-06-17'),
(10, 1, 'adhasjd', 'JAVA', 'asdasd', '6000', 6, '1', '2017-06-17'),
(11, 6, 'kiit', 'webdevelopment', 'frfkkl', '9999', 1, '1', '2017-06-17'),
(12, 1, 'sas', 'SAS', 'dasdasd', '1000', 3, '1', '2017-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

CREATE TABLE `stu_details` (
  `id` int(12) NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(32) NOT NULL,
  `stu_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_details`
--

INSERT INTO `stu_details` (`id`, `stu_name`, `stu_email`, `stu_pass`, `stu_key`) VALUES
(1, 'Koushik Dutta', 'koushik@gmail.com', '296506902c693b458707ad6f7e24a544', ''),
(2, 'Bob', 'bob@gmail.com', '296506902c693b458707ad6f7e24a544', '3rzmtmrEUM'),
(3, 'Billy', 'billy@gmail.com', '296506902c693b458707ad6f7e24a544', 'Q6Q8amXOwG'),
(4, 'Dev Patel', 'devp@gmail.com', '296506902c693b458707ad6f7e24a544', 'QA5CJqYhrB'),
(5, 'Alex Garret', 'alex@gmail.com', '296506902c693b458707ad6f7e24a544', 'TJwVMJBbmr'),
(6, 'kiit', 'kiit1@gmail.com', '296506902c693b458707ad6f7e24a544', 'nMdKUqmtFo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_intern`
--
ALTER TABLE `applied_intern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship_details`
--
ALTER TABLE `internship_details`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_intern`
--
ALTER TABLE `applied_intern`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `internship_details`
--
ALTER TABLE `internship_details`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stu_details`
--
ALTER TABLE `stu_details`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
