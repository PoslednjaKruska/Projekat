-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2015 at 04:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ludikamen`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `IDKorisnik` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Adresa` varchar(50) DEFAULT NULL COMMENT 'Moze biti null',
  `ImePrezime` varchar(50) NOT NULL COMMENT 'ili naziv pruzaoca usluge',
  `Kategorija` int(11) NOT NULL,
  `Grad` varchar(30) NOT NULL,
  `DatumReg` varchar(11) NOT NULL,
  `DatumIzmene` varchar(11) NOT NULL COMMENT 'poslednja izmena naloga',
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IDKorisnik`, `Username`, `Password`, `Email`, `Adresa`, `ImePrezime`, `Kategorija`, `Grad`, `DatumReg`, `DatumIzmene`) VALUES
(1, 'mn120110', 'nensiCaoPoz', 'mn120110d@student.etf.rs', NULL, 'Nevena Milinkovic', 1, 'Banjica City', '19/05/2015', '19/05/2015'),
(2, 'muzicari', 'music123', 'muzicari@gmail.com', NULL, 'Muzicari koji piju', 4, 'Beograd', '20/05/2015', '20/05/2015'),
(3, 'udavaca', 'cucaSibac', 'teodora.nema.hotmail@gmail.com', 'Pored sabacke deponije', 'Teodora Aleksic', 2, 'Sibac', '20/05/2015', '20/05/2015'),
(4, 'srceBgd', 'cesrCesr', 'srceBg@hotmail.com', 'Terazije 9', 'Poslasticarnica Srce', 3, 'Beograd', '20/05/2015', '20/05/2015'),
(5, 'restoran', 'restGajic', 'gajici@gmail.com', 'Zaobilazni put', 'Restoran Gajic', 7, 'Lozana City', '21/05/2015', '21/05/2015'),
(6, 'salon123', 'bubamara', 'bubamara@gmail.com', 'Bulevar Kralja Aleksandra bb', 'Salon vencanica Bubamara', 5, 'Beli grad', '22/05/2015', '22/05/2015');

-- --------------------------------------------------------

--
-- Table structure for table `koristi`
--

DROP TABLE IF EXISTS `koristi`;
CREATE TABLE IF NOT EXISTS `koristi` (
  `IDKorisnik` int(11) NOT NULL,
  `IDUsluga` int(11) NOT NULL,
  `DatumRezervacije` varchar(11) NOT NULL,
  PRIMARY KEY (`IDKorisnik`,`IDUsluga`),
  KEY `IDUsluga` (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koristi`
--

INSERT INTO `koristi` (`IDKorisnik`, `IDUsluga`, `DatumRezervacije`) VALUES
(3, 2, '20/05/2015'),
(3, 5, '19/05/2015');

-- --------------------------------------------------------

--
-- Table structure for table `logovanjeadmina`
--

DROP TABLE IF EXISTS `logovanjeadmina`;
CREATE TABLE IF NOT EXISTS `logovanjeadmina` (
  `IDKorisnik` int(11) NOT NULL,
  `Datum` varchar(11) NOT NULL COMMENT 'zadnji log admina',
  PRIMARY KEY (`IDKorisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logovanjeadmina`
--

INSERT INTO `logovanjeadmina` (`IDKorisnik`, `Datum`) VALUES
(1, '19/05/2015');

-- --------------------------------------------------------

--
-- Table structure for table `usluga`
--

DROP TABLE IF EXISTS `usluga`;
CREATE TABLE IF NOT EXISTS `usluga` (
  `IDUsluga` int(11) NOT NULL AUTO_INCREMENT,
  `Naziv` varchar(40) NOT NULL,
  `Opis` varchar(150) NOT NULL,
  `Cena` double NOT NULL,
  `Ocena` double NOT NULL,
  `IDPruzalac` int(11) NOT NULL,
  `Velicina` int(11) DEFAULT NULL,
  `BrojSlika` int(11) DEFAULT NULL,
  `DatumReg` varchar(11) NOT NULL,
  `DatumIzmene` varchar(11) NOT NULL,
  PRIMARY KEY (`IDUsluga`),
  KEY `IDPruzalac` (`IDPruzalac`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`IDUsluga`, `Naziv`, `Opis`, `Cena`, `Ocena`, `IDPruzalac`, `Velicina`, `BrojSlika`, `DatumReg`, `DatumIzmene`) VALUES
(1, 'Vencanica1', 'Iznajmljujemo ....', 150.3, 5, 6, 38, NULL, '22/05/2015', '22/05/2015'),
(2, 'Vencanica2', 'i ovu iznajmljujemo...', 200.12, 8.7, 6, 40, NULL, '22/05/2015', '22/05/2015'),
(3, 'Torta1', 'cokoladaaaa', 200, 10, 4, 10, NULL, '20/05/2015', '20/05/2015'),
(4, 'Sviranje', 'do zore!!!', 200, 6.7, 2, NULL, NULL, '20/05/2015', '20/05/2015'),
(5, 'Iznajmljivanje sale', 'vel''ka je...', 200, 7.8, 5, 200, NULL, '21/05/2015', '21/05/2015');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `koristi`
--
ALTER TABLE `koristi`
  ADD CONSTRAINT `koristi_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `koristi_ibfk_2` FOREIGN KEY (`IDUsluga`) REFERENCES `usluga` (`IDUsluga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logovanjeadmina`
--
ALTER TABLE `logovanjeadmina`
  ADD CONSTRAINT `logovanjeadmina_ibfk_1` FOREIGN KEY (`IDKorisnik`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usluga`
--
ALTER TABLE `usluga`
  ADD CONSTRAINT `usluga_ibfk_1` FOREIGN KEY (`IDPruzalac`) REFERENCES `korisnik` (`IDKorisnik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
