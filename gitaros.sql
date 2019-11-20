-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2019 at 10:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitaros`
--

-- --------------------------------------------------------

--
-- Table structure for table `padalinys`
--

DROP TABLE IF EXISTS `padalinys`;
CREATE TABLE IF NOT EXISTS `padalinys` (
  `padalinio_ID` int(4) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(20) NOT NULL,
  `adresas` varchar(30) NOT NULL,
  `telefonas` varchar(10) NOT NULL,
  `epastas` varchar(30) NOT NULL,
  PRIMARY KEY (`padalinio_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `padalinys`
--

INSERT INTO `padalinys` (`padalinio_ID`, `pavadinimas`, `adresas`, `telefonas`, `epastas`) VALUES
(1, 'Kaunas', 'Kauno g. 20', '86868686', 'kaunas@gitaros.lt'),
(2, 'Siauliai', 'Siauliu g. 21', '87878787', 'siauliai@gitaros.lt'),
(3, 'Klaipeda', 'Klaipedos g. 22', '88888888', 'klaipeda@gitaros.lt'),
(4, 'Vilnius', 'Vilniaus g. 23', '89898989', 'vilnius@gitaros.lt');

-- --------------------------------------------------------

--
-- Table structure for table `produktas`
--

DROP TABLE IF EXISTS `produktas`;
CREATE TABLE IF NOT EXISTS `produktas` (
  `produkto_ID` int(5) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(20) NOT NULL,
  `tipas` int(3) NOT NULL,
  `spalva` int(3) NOT NULL,
  `kaina` decimal(7,2) NOT NULL,
  `aprasas` text NOT NULL,
  PRIMARY KEY (`produkto_ID`),
  UNIQUE KEY `pavadinimas` (`pavadinimas`),
  KEY `tipas` (`tipas`),
  KEY `spalva` (`spalva`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produktas`
--

INSERT INTO `produktas` (`produkto_ID`, `pavadinimas`, `tipas`, `spalva`, `kaina`, `aprasas`) VALUES
(1, 'AQ1234', 1, 5, '69.99', 'Labai gera zalia gitara etc.'),
(2, 'BQ1234', 3, 3, '99.99', 'Labai gera juoda gitara etc.'),
(3, 'BQ1235', 3, 6, '99.99', 'Labai gera melyna gitara etc.'),
(4, 'AQ1237', 1, 1, '69.99', 'Labai gera ruda gitara etc.'),
(5, 'BQ1236', 3, 2, '99.99', 'Labai gera balta gitara etc.'),
(6, 'EQ1234', 2, 4, '109.99', 'Labai gera raudona gitara etc.'),
(7, 'EQ1235', 2, 6, '109.99', 'Labai gera melyna gitara etc.'),
(8, 'EQ1236', 2, 1, '109.99', 'Labai gera ruda gitara etc.'),
(9, 'EQ1237', 2, 3, '109.99', 'Labai gera juoda gitara etc.'),
(10, 'EQ1238', 2, 7, '109.99', 'Labai gera geltona gitara etc.'),
(11, 'AQ1235', 1, 4, '69.99', 'Labai gera raudona gitara etc.'),
(12, 'AQ1236', 1, 6, '69.99', 'Labai gera melyna gitara etc.'),
(13, 'AQ1238', 1, 2, '69.99', 'Labai gera balta gitara etc.');

-- --------------------------------------------------------

--
-- Table structure for table `produkto_likutis`
--

DROP TABLE IF EXISTS `produkto_likutis`;
CREATE TABLE IF NOT EXISTS `produkto_likutis` (
  `likucio_ID` int(7) NOT NULL AUTO_INCREMENT,
  `sandelys` int(5) NOT NULL,
  `produktas` int(5) NOT NULL,
  `likutis` int(4) NOT NULL,
  PRIMARY KEY (`likucio_ID`),
  KEY `sandelys` (`sandelys`),
  KEY `produktas` (`produktas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produkto_likutis`
--

INSERT INTO `produkto_likutis` (`likucio_ID`, `sandelys`, `produktas`, `likutis`) VALUES
(1, 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sandelys`
--

DROP TABLE IF EXISTS `sandelys`;
CREATE TABLE IF NOT EXISTS `sandelys` (
  `sandelio_ID` int(5) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(20) NOT NULL,
  `adresas` varchar(30) NOT NULL,
  PRIMARY KEY (`sandelio_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sandelys`
--

INSERT INTO `sandelys` (`sandelio_ID`, `pavadinimas`, `adresas`) VALUES
(1, 'Kauno', 'Kauno g. 20'),
(2, 'Siauliu', 'Siauliu g. 21'),
(3, 'Klaipedos', 'Klaipedos g. 22');

-- --------------------------------------------------------

--
-- Table structure for table `spalvos`
--

DROP TABLE IF EXISTS `spalvos`;
CREATE TABLE IF NOT EXISTS `spalvos` (
  `spalvos_ID` int(3) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(20) NOT NULL,
  PRIMARY KEY (`spalvos_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spalvos`
--

INSERT INTO `spalvos` (`spalvos_ID`, `pavadinimas`) VALUES
(1, 'Ruda'),
(2, 'Balta'),
(3, 'Juoda'),
(4, 'Raudona'),
(5, 'Zalia'),
(6, 'Melyna'),
(7, 'Geltona');

-- --------------------------------------------------------

--
-- Table structure for table `tipai`
--

DROP TABLE IF EXISTS `tipai`;
CREATE TABLE IF NOT EXISTS `tipai` (
  `tipo_ID` int(3) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(20) NOT NULL,
  PRIMARY KEY (`tipo_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipai`
--

INSERT INTO `tipai` (`tipo_ID`, `pavadinimas`) VALUES
(1, 'Akustine'),
(2, 'Elektrine'),
(3, 'Bosine');

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymas`
--

DROP TABLE IF EXISTS `uzsakymas`;
CREATE TABLE IF NOT EXISTS `uzsakymas` (
  `uzsakymo_ID` int(7) NOT NULL AUTO_INCREMENT,
  `kaina` decimal(7,2) NOT NULL,
  `padalinys` int(4) NOT NULL,
  PRIMARY KEY (`uzsakymo_ID`),
  KEY `padalinys` (`padalinys`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymas`
--

INSERT INTO `uzsakymas` (`uzsakymo_ID`, `kaina`, `padalinys`) VALUES
(1, '200.00', 2),
(2, '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymo_prekes`
--

DROP TABLE IF EXISTS `uzsakymo_prekes`;
CREATE TABLE IF NOT EXISTS `uzsakymo_prekes` (
  `uzsakymo_id` int(7) NOT NULL,
  `preke` int(5) NOT NULL,
  `kiekis` int(3) NOT NULL DEFAULT '0',
  `kaina` decimal(7,2) NOT NULL DEFAULT '0.00',
  KEY `uzsakymo_id` (`uzsakymo_id`),
  KEY `preke` (`preke`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymo_prekes`
--

INSERT INTO `uzsakymo_prekes` (`uzsakymo_id`, `preke`, `kiekis`, `kaina`) VALUES
(1, 1, 2, '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

DROP TABLE IF EXISTS `vartotojai`;
CREATE TABLE IF NOT EXISTS `vartotojai` (
  `vartotojo_ID` varchar(32) NOT NULL,
  `prisijungimas` varchar(30) NOT NULL,
  `slaptazodis` varchar(32) NOT NULL,
  `role` int(1) NOT NULL,
  `epastas` varchar(50) NOT NULL,
  `nuolaida` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vartotojo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produktas`
--
ALTER TABLE `produktas`
  ADD CONSTRAINT `produktas_ibfk_1` FOREIGN KEY (`tipas`) REFERENCES `tipai` (`tipo_ID`),
  ADD CONSTRAINT `produktas_ibfk_2` FOREIGN KEY (`spalva`) REFERENCES `spalvos` (`spalvos_ID`);

--
-- Constraints for table `produkto_likutis`
--
ALTER TABLE `produkto_likutis`
  ADD CONSTRAINT `produkto_likutis_ibfk_1` FOREIGN KEY (`sandelys`) REFERENCES `sandelys` (`sandelio_ID`),
  ADD CONSTRAINT `produkto_likutis_ibfk_2` FOREIGN KEY (`produktas`) REFERENCES `produktas` (`produkto_ID`);

--
-- Constraints for table `uzsakymas`
--
ALTER TABLE `uzsakymas`
  ADD CONSTRAINT `uzsakymas_ibfk_1` FOREIGN KEY (`padalinys`) REFERENCES `padalinys` (`padalinio_ID`);

--
-- Constraints for table `uzsakymo_prekes`
--
ALTER TABLE `uzsakymo_prekes`
  ADD CONSTRAINT `uzsakymo_prekes_ibfk_1` FOREIGN KEY (`preke`) REFERENCES `produktas` (`produkto_ID`),
  ADD CONSTRAINT `uzsakymo_prekes_ibfk_2` FOREIGN KEY (`uzsakymo_id`) REFERENCES `uzsakymas` (`uzsakymo_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
