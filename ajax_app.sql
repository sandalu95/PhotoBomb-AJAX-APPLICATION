-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 09:56 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `admissiondate` date NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `pname`, `profile`, `admissiondate`, `image`) VALUES
(1, 'Sandalu Kalpanee', 'HTML | CSS | JS | PHP ', '2018-05-01', 'sandalu.jpg'),
(2, 'Pasan Peiris', 'HTML | CSS | JS | PHP', '2018-05-02', 'pasan.jpg'),
(3, 'Charinda Dissanayake', 'HTML | CSS | JS | PHP', '2018-05-03', 'charinda.jpg'),
(4, 'Upulee Pabasara', 'HTML | CSS | JS | PHP', '2018-05-05', 'upulee.jpg'),
(5, 'Akalanka Jayalath', 'HTML | CSS | JS | PHP', '2018-05-07', 'akalanka.jpg'),
(6, 'Dharshitha Srimal', 'HTML | CSS | JS', '2018-04-14', 'dharshitha.jpg'),
(7, 'Chathura Dayananda', 'HTML | CSS', '2018-05-27', 'chathura.jpg'),
(8, 'Aneesha Fernando', 'HTML | CSS | JS', '2018-04-10', 'aneesha.jpg'),
(9, 'Rasitha Gamage', 'HTML | CSS | PHP', '2018-05-27', 'rasitha.jpg'),
(10, 'Benuka Withanage', 'HTML | CSS | JS', '2018-05-12', 'benuka.jpg'),
(21, 'Hasini Nayanathara', 'HTML | CSS | JS', '2018-05-05', 'hasini.jpg'),
(22, 'Dumindu Silva', 'HTML | CSS | PHP', '2018-04-22', 'dumindu.jpg'),
(23, 'Sithara Madhushan', 'HTML | CSS | JS | PHP', '2018-08-18', 'sithara.jpg'),
(24, 'Ishara Malawiarachchi', 'HTML | CSS', '2018-05-13', 'ishara.jpg'),
(25, 'Maljinee Dayananda', 'HTML | CSS', '2018-04-09', 'maljinee.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
