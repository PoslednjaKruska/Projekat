-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 01:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ludikamenbaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `IDKorisnik` int(10) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDKorisnik`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `bend`
--

DROP TABLE IF EXISTS `bend`;
CREATE TABLE IF NOT EXISTS `bend` (
  `IDKorisnik` int(10) NOT NULL,
  `Cena` varchar(10) NOT NULL,
  `Kategorija` varchar(40) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bend`
--

INSERT INTO `bend` (`IDKorisnik`, `Cena`, `Kategorija`) VALUES
(2, '1000', 'pop/rock');

-- --------------------------------------------------------

--
-- Table structure for table `burma`
--

DROP TABLE IF EXISTS `burma`;
CREATE TABLE IF NOT EXISTS `burma` (
  `IDUsluga` int(10) NOT NULL,
  `Velicina` varchar(10) NOT NULL,
  `Dostupnost` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burma`
--

INSERT INTO `burma` (`IDUsluga`, `Velicina`, `Dostupnost`) VALUES
(1, 'sve', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `IDKorisnik` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Ime i Prezime` varchar(50) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IDKorisnik`, `Username`, `Password`, `Email`, `Ime i Prezime`) VALUES
(1, 'nensi119', 'nensiNensi', 'mn120110d@student.etf.rs', 'Nevena Milinkovic'),
(2, 'muzicari', 'music123', 'muzicari@gmail.com', 'Muzicari koji piju'),
(3, 'zlato', 'srebroDukati', 'zlatara@gmail.com', 'Zlatara Safir'),
(4, 'udavaca', 'cucaSibac', 'teodora.nema.hotmail@gmail.com', 'Teodora Aleksic'),
(5, 'srceBgd', 'cesrCesr', 'srceBg@hotmail.com', 'Poslasticarnica Srce'),
(6, 'restoran', 'restGajic', 'gajici@gmail.com', 'Restoran Gajic'),
(7, 'salon123', 'bubamara', 'bubamara@gmail.com', 'Salon vencanica Bubamara');

-- --------------------------------------------------------

--
-- Table structure for table `korisnikusluga`
--

DROP TABLE IF EXISTS `korisnikusluga`;
CREATE TABLE IF NOT EXISTS `korisnikusluga` (
  `IDKorisnik` int(10) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnikusluga`
--

INSERT INTO `korisnikusluga` (`IDKorisnik`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `koristi`
--

DROP TABLE IF EXISTS `koristi`;
CREATE TABLE IF NOT EXISTS `koristi` (
  `IDKorisnik` int(10) NOT NULL,
  `IDUsluga` int(10) NOT NULL,
  `DatumRezervacije` varchar(11) NOT NULL,
  PRIMARY KEY (`IDKorisnik`,`IDUsluga`),
  KEY `IDUsluga` (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koristi`
--

INSERT INTO `koristi` (`IDKorisnik`, `IDUsluga`, `DatumRezervacije`) VALUES
(4, 1, '18.5.2015.');

-- --------------------------------------------------------

--
-- Table structure for table `poslasticarnica`
--

DROP TABLE IF EXISTS `poslasticarnica`;
CREATE TABLE IF NOT EXISTS `poslasticarnica` (
  `IDKorisnik` int(10) NOT NULL,
  `RadnoVreme` varchar(30) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poslasticarnica`
--

INSERT INTO `poslasticarnica` (`IDKorisnik`, `RadnoVreme`) VALUES
(5, '08:00-20:00');

-- --------------------------------------------------------

--
-- Table structure for table `pruzalacusluga`
--

DROP TABLE IF EXISTS `pruzalacusluga`;
CREATE TABLE IF NOT EXISTS `pruzalacusluga` (
  `IDKorisnik` int(10) NOT NULL,
  `Opis` varchar(200) NOT NULL,
  `Adresa` varchar(50) NOT NULL,
  `Grad` varchar(50) NOT NULL,
  `Ocena` varchar(4) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pruzalacusluga`
--

INSERT INTO `pruzalacusluga` (`IDKorisnik`, `Opis`, `Adresa`, `Grad`, `Ocena`) VALUES
(2, 'Sviramo muz''ku za pare...', 'Bulevar Kralja Aleksandra 73', 'Beograd', '5+'),
(3, 'Zlato, srebro, dukatii, za njih ces se prodatiiii', 'Marsala Tita bb', 'Loznica', '5'),
(5, 'Duga tradicija ...', 'Terazije 41', 'Beograd', '9'),
(6, 'Odrzavanje slavlja, ovog, onog...', 'Zaobilazni put', 'Lozana City', '10'),
(7, 'Vencanice ...', 'Vitezova Karadjordjeve zvezde', 'Beograd', '8');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

DROP TABLE IF EXISTS `restoran`;
CREATE TABLE IF NOT EXISTS `restoran` (
  `IDKorisnik` int(10) NOT NULL,
  `Cena` varchar(10) NOT NULL,
  `Kapacitet` varchar(10) NOT NULL,
  `Kategorija` varchar(20) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`IDKorisnik`, `Cena`, `Kapacitet`, `Kategorija`) VALUES
(6, '100', '200', 'Ich kenne nichts');

-- --------------------------------------------------------

--
-- Table structure for table `salonvencanica`
--

DROP TABLE IF EXISTS `salonvencanica`;
CREATE TABLE IF NOT EXISTS `salonvencanica` (
  `IDKorisnik` int(10) NOT NULL,
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salonvencanica`
--

INSERT INTO `salonvencanica` (`IDKorisnik`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `torta`
--

DROP TABLE IF EXISTS `torta`;
CREATE TABLE IF NOT EXISTS `torta` (
  `IDUsluga` int(10) NOT NULL,
  `Tezina` varchar(10) NOT NULL,
  PRIMARY KEY (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `torta`
--

INSERT INTO `torta` (`IDUsluga`, `Tezina`) VALUES
(9, '10');

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

DROP TABLE IF EXISTS `usluga`;
CREATE TABLE IF NOT EXISTS `usluga` (
  `IDUsluga` int(10) NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(50) NOT NULL,
  `Opis` varchar(100) NOT NULL,
  `Cena` varchar(10) NOT NULL,
  `Ocena` varchar(4) NOT NULL,
  `IDKorisnik` int(10) NOT NULL,
  PRIMARY KEY (`IDUsluga`),
  KEY `IDKorisnik` (`IDKorisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`IDUsluga`, `Naziv`, `Opis`, `Cena`, `Ocena`, `IDKorisnik`) VALUES
(1, 'Zlatne i srebrne burme', 'Sekundarne sirovine i ostale nepotrebne stvari...', '100-200', '8', 3),
(8, 'Iznajmljivanje vencanica', 'Razne vrste...', '100-200', '8', 7),
(9, 'Svadbena torta', 'Biskvit, karamela, cokoladaaaa', '100-200', '5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `vencanica`
--

DROP TABLE IF EXISTS `vencanica`;
CREATE TABLE IF NOT EXISTS `vencanica` (
  `IDUsluga` int(10) NOT NULL,
  `Velicina` varchar(5) NOT NULL,
  `Dostupnost` tinyint(1) NOT NULL,
  PRIMARY KEY (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vencanica`
--

INSERT INTO `vencanica` (`IDUsluga`, `Velicina`, `Dostupnost`) VALUES
(8, 'sve', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bend`
--
ALTER TABLE `bend`
  ADD CONSTRAINT `bend_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `pruzalacusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `burma`
--
ALTER TABLE `burma`
  ADD CONSTRAINT `burma_ibfk_1` FOREIGN KEY (`IDUsluga`) REFERENCES `usluga` (`IDUsluga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korisnikusluga`
--
ALTER TABLE `korisnikusluga`
  ADD CONSTRAINT `korisnikusluga_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koristi`
--
ALTER TABLE `koristi`
  ADD CONSTRAINT `koristi_ibfk_3` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnikusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koristi_ibfk_4` FOREIGN KEY (`IDUsluga`) REFERENCES `usluga` (`IDUsluga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poslasticarnica`
--
ALTER TABLE `poslasticarnica`
  ADD CONSTRAINT `poslasticarnica_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `pruzalacusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pruzalacusluga`
--
ALTER TABLE `pruzalacusluga`
  ADD CONSTRAINT `pruzalacusluga_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restoran`
--
ALTER TABLE `restoran`
  ADD CONSTRAINT `restoran_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `pruzalacusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salonvencanica`
--
ALTER TABLE `salonvencanica`
  ADD CONSTRAINT `salonvencanica_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `pruzalacusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `torta`
--
ALTER TABLE `torta`
  ADD CONSTRAINT `torta_ibfk_1` FOREIGN KEY (`IDUsluga`) REFERENCES `usluga` (`IDUsluga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usluga`
--
ALTER TABLE `usluga`
  ADD CONSTRAINT `usluga_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `pruzalacusluga` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vencanica`
--
ALTER TABLE `vencanica`
  ADD CONSTRAINT `vencanica_ibfk_1` FOREIGN KEY (`IDUsluga`) REFERENCES `usluga` (`IDUsluga`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
