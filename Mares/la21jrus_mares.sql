-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 12:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la21jrus_mares`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `BackgroundColor` varchar(50) DEFAULT NULL,
  `BackgroundImage` mediumtext,
  `TextColor` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `BackgroundColor`, `BackgroundImage`, `TextColor`) VALUES
(1, 'Yellow', 'waves.gif', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `terra` varchar(50) NOT NULL,
  `regiao` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `v1diascript` mediumtext,
  `v3diasscript` mediumtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cidades`
--

INSERT INTO `cidades` (`id`, `terra`, `regiao`, `cidade`, `locale`, `longitude`, `latitude`, `v1diascript`, `v3diasscript`) VALUES
(1, 'Portugal', 'Regiao de Lisboa', 'Lisboa', 'Lisboa', -9.139, 38.722, '<iframe frameborder="0" width="680px" height="320px" src="index.php?country=Portugal&state=Regiao de Lisboa&city=Lisboa&dias=1&longitude=-9.139&latitude=38.722&hidemenu=1">Your browser does not support iframes!</iframe>', '<iframe frameborder="0" width="1150px" height="320px" src="index.php?country=Portugal&state=Regiao de Lisboa&city=Lisboa&dias=3&longitude=-9.139&latitude=38.722&hidemenu=1">Your browser does not support iframes!</iframe>'),
(2, 'Portugal', 'Regiao do Porto', 'Porto', '', 2.222, 3.333, NULL, NULL),
(3, 'Portugal', 'Regiao de Lisboa', 'Seixal', '', 11.111, 22.222, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mares`
--

CREATE TABLE `mares` (
  `id` int(11) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `tempo` time DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `dia` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mares`
--

INSERT INTO `mares` (`id`, `cidade`, `tempo`, `altura`, `dia`) VALUES
(43, 'Lisboa', '00:00:00', 1, '2017-01-21'),
(44, 'Lisboa', '02:00:00', 3, '2017-01-21'),
(45, 'Lisboa', '04:00:00', 1, '2017-01-21'),
(46, 'Lisboa', '06:00:00', 3, '2017-01-21'),
(47, 'Lisboa', '08:00:00', 1, '2017-01-21'),
(48, 'Lisboa', '10:00:00', 3, '2017-01-21'),
(49, 'Lisboa', '12:00:00', 1, '2017-01-21'),
(50, 'Lisboa', '14:00:00', 3, '2017-01-21'),
(51, 'Lisboa', '16:00:00', 1, '2017-01-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mares`
--
ALTER TABLE `mares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UniqueDatum` (`cidade`,`dia`,`tempo`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mares`
--
ALTER TABLE `mares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
