-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 01:06 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rform`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `college` varchar(8) NOT NULL,
  `course` varchar(8) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `year` int(2) NOT NULL,
  `stno` int(8) NOT NULL,
  `rollno` varchar(11) NOT NULL,
  `hostel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `mobile`, `gender`, `college`, `course`, `branch`, `year`, `stno`, `rollno`, `hostel`) VALUES
(1, 'Vibhu', 'vibhu98mishra@gmail.com', '9560274725', 'M', 'Akg', 'B', 'EC', 2, 1631175, '1602731172', 'Y'),
(2, 'Vipul Pathak', 'vipulpathakgps@gmail.com', '9818875972', 'M', 'Akg', 'B.Tech', 'EC', 2, 1631177, '1602731176', 'Y'),
(3, 'Shashwat Vats', 'vats88@gmail.com', '9818875973', 'M', 'Akg', 'B.Tech', 'EC', 2, 1610045, '1602731163', 'Y'),
(4, 'Shashwat', 'shashwatvats10@gmail.com', '8004900004', 'M', 'Akg', 'M.tech', 'EN', 3, 1610175, '1602710134', 'Y'),
(5, 'upper', 'upper@gmail.com', '9870000000', 'M', 'Akg', 'B.Tech', 'IT', 2, 1631177, '1602731165', 'N'),
(6, 'upper', 'upper1234@gmail.com', '9818800000', 'M', 'Other', 'M.tech', 'EC', 2, 0, '', 'N'),
(7, 'Vatsal Rai', 'vs123@gmail.com', '9875000000', 'M', 'Akg', 'B.Tech', 'CS', 2, 1631183, '1602731174', 'Y'),
(8, 'Vibhu', 'zzz123@gmail.com', '9818800001', 'M', 'Other', 'MBA/MCA', 'Defa', 2, 0, '', 'N'),
(9, 'Vinayak Mishra', 'vm12345@gmail.com', '9560274726', 'M', 'Akg', 'MBA/MCA', 'Defa', 2, 1631149, '1602731155', 'N'),
(10, 'Vibhu', 'bolbachan123@gmail.com', '9898000000', 'M', 'Other', 'MBA/MCA', 'Defa', 1, 0, '', 'N'),
(11, 'Vibhu', 'rohan12345@gmail.com', '9800900000', 'M', 'Other', 'MBA/MCA', 'Defa', 1, 0, '', 'N'),
(12, 'Yashaswi', 'yash123@gmail.com', '9899900000', 'M', 'Other', 'B.Tech', 'EC', 2, 0, '', 'Y'),
(13, 'Vibhu Mishra', 'vib999@gmail.com', '9999907777', 'M', 'Akg', 'MBA/MCA', 'Defa', 1, 1631008, '1602731177', 'N'),
(14, 'sssdvklss', 'kljnlnjljn@gmail.com', '8797977887', 'M', 'Other', 'B.Tech', 'EC', 3, 0, '', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
