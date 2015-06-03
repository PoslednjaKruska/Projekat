-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 06:32 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`IDKorisnik`, `Username`, `Password`, `Email`, `Adresa`, `ImePrezime`, `Kategorija`, `Grad`, `DatumReg`, `DatumIzmene`) VALUES
(1, 'mn120110', 'nensicao', 'mn120110d@student.etf.rs', '', 'Nevena Milinkovic', 0, 'Banjica City', '20/05/2015', '27/05/2015'),
(2, 'muzicari', 'music123', 'muzicari@gmail.com', '', 'Muzicari Koji Piju', 4, 'Beograd', '20/05/2015', '27/05/2015'),
(4, 'srceBgd', 'cesrcesr', 'srceBg@hotmail.com', 'Terazije 9', 'Poslasticarnica Srce', 3, 'Beograd', '20/05/2015', '20/05/2015'),
(5, 'restoran', 'restgajic', 'gajici@gmail.com', 'Zaobilazni put', 'Restoran Gajic', 7, 'Lozana City', '21/05/2015', '21/05/2015'),
(6, 'salon123', 'bubamara', 'bubamara@gmail.com', 'Bulevar Kralja Aleksandra bb', 'Salon Vencanica Bubamara', 5, 'Beli', '22/05/2015', '29/05/2015'),
(7, '123123', 'nesto', 'restoran@gmail.com', NULL, 'Restoran Majdan', 7, 'Beograd', '22/05/2015', '22/05/2015'),
(8, 'markoMarko', 'marko123', 'marko@gmail.com', '', 'Marko Markovic', 2, 'Beograd', '23/05/2015', '23/05/2015'),
(9, 'ljepotica', 'rosalinda', 'rosa@gmail.com', '', 'Rosalinda Rosic', 1, 'Novi Sad', '23/05/2015', '23/05/2015'),
(10, 'tiksiMacka', 'tijana', 'tiksi@gmail.com', '', 'Tijana Trifunovic', 1, 'Kragujevac', '23/05/2015', '23/05/2015'),
(12, 'galinda', 'galeta', 'gale@gmail.com', '', 'Galinda Galindic', 2, 'Munze Konza', '25/05/2015', '25/05/2015'),
(13, 'svadba', 'mojasvadba', 'zdravo@hotmail.com', '', 'Purka Purkic', 1, 'Lozana', '25/05/2015', '25/05/2015'),
(14, 'udavaca', 'cucili', 'teodora.nema@hotmail.com', 'Deponijaaa', 'Teodora Aleksic', 1, 'Sibac', '26/05/2015', '28/05/2015'),
(15, 'macka2', 'macka2', 'maki@gmail.com', '', 'Marija', 1, 'Belgrade', '29/05/2015', '02/06/2015'),
(16, 'pozivn', 'pozivnice', 'poziv@gmail.com', 'Bulevar bb', 'Stamparija pozivnica', 8, 'Beograd', '03/06/2015', '03/06/2015');

-- --------------------------------------------------------

--
-- Table structure for table `koristi`
--

DROP TABLE IF EXISTS `koristi`;
CREATE TABLE IF NOT EXISTS `koristi` (
  `IDKorisnik` int(11) NOT NULL,
  `IDUsluga` int(11) NOT NULL,
  `DatumRezervacije` varchar(11) NOT NULL,
  `DatumUnosa` varchar(11) NOT NULL,
  PRIMARY KEY (`IDKorisnik`,`IDUsluga`),
  KEY `IDUsluga` (`IDUsluga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koristi`
--

INSERT INTO `koristi` (`IDKorisnik`, `IDUsluga`, `DatumRezervacije`, `DatumUnosa`) VALUES
(8, 5, '11/12/2015', '02/06/2015'),
(10, 13, '07/15/2015', '03/06/2015'),
(12, 5, '06/17/2015', '03/06/2015'),
(12, 16, '06/18/2015', '03/06/2015'),
(13, 12, '06/27/2015', '03/06/2015'),
(13, 14, '06/27/2015', '03/06/2015'),
(14, 3, '08/09/2015', '01/06/2015'),
(14, 10, '06/20/2015', '02/06/2015');

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
(1, '03/06/2015');

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
  `Ocena` double DEFAULT NULL,
  `IDPruzalac` int(11) NOT NULL,
  `Velicina` int(11) DEFAULT NULL,
  `BrojSlika` int(11) DEFAULT NULL,
  `DatumReg` varchar(11) NOT NULL,
  `DatumIzmene` varchar(11) NOT NULL,
  PRIMARY KEY (`IDUsluga`),
  KEY `IDPruzalac` (`IDPruzalac`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `usluga`
--

INSERT INTO `usluga` (`IDUsluga`, `Naziv`, `Opis`, `Cena`, `Ocena`, `IDPruzalac`, `Velicina`, `BrojSlika`, `DatumReg`, `DatumIzmene`) VALUES
(3, 'Torta1', 'cokoladaaaa', 200, 10, 4, 10, NULL, '20/05/2015', '20/05/2015'),
(5, 'Iznajmljivanje sale', 'vel''ka je...', 200, 7.8, 5, 200, NULL, '21/05/2015', '21/05/2015'),
(10, 'Vencanica45', 'nova', 100, NULL, 6, 38, NULL, '02/06/2015', '02/06/2015'),
(11, 'Vencanica2', 'nova', 100, NULL, 6, 38, NULL, '02/06/2015', '02/06/2015'),
(12, 'Vencanica3', 'Stara kolekcija', 150, NULL, 6, 38, NULL, '02/06/2015', '02/06/2015'),
(13, 'Sviranje', 'Uzivo', 150, NULL, 2, 10, NULL, '03/06/2015', '03/06/2015'),
(14, 'Torta2', 'Biskvit karamela', 150, NULL, 4, 10, NULL, '03/06/2015', '03/06/2015'),
(15, 'Izrada pozivnica', 'Kvalitetni papir', 100, NULL, 16, NULL, NULL, '03/06/2015', '03/06/2015'),
(16, 'Torta3', 'Nova torta', 200, NULL, 4, 12, NULL, '03/06/2015', '03/06/2015');

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
