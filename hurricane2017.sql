-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 21. Jun 2017 um 21:20
-- Server Version: 5.5.55-0ubuntu0.14.04.1
-- PHP-Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `hurricane2017`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `abgang`
--

CREATE TABLE IF NOT EXISTS `abgang` (
  `AbgangID` int(11) NOT NULL DEFAULT '0',
  `Beschreibung` varchar(30) NOT NULL,
  PRIMARY KEY (`AbgangID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `abgang`
--

INSERT INTO `abgang` (`AbgangID`, `Beschreibung`) VALUES
(1, 'zurück in die Veranstaltung'),
(2, 'nach Hause'),
(3, 'Übergabe an');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aufnahme`
--

CREATE TABLE IF NOT EXISTS `aufnahme` (
  `AufnahmeID` int(11) NOT NULL DEFAULT '0',
  `Beschreibung` varchar(20) NOT NULL,
  PRIMARY KEY (`AufnahmeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `aufnahme`
--

INSERT INTO `aufnahme` (`AufnahmeID`, `Beschreibung`) VALUES
(1, 'BHP'),
(2, 'BS „Green“'),
(3, 'BS „Blue“'),
(4, 'BS „Red“'),
(5, 'BS „White“'),
(6, 'Fußstreife'),
(7, 'Infield „Green“'),
(8, 'Infield „Blue“'),
(9, 'KTW');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `diagnoseschluessel`
--

CREATE TABLE IF NOT EXISTS `diagnoseschluessel` (
  `DiagnoseID` int(2) NOT NULL DEFAULT '0',
  `Stichwort` varchar(20) NOT NULL,
  `Diagnose` varchar(50) NOT NULL,
  PRIMARY KEY (`DiagnoseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `diagnoseschluessel`
--

INSERT INTO `diagnoseschluessel` (`DiagnoseID`, `Stichwort`, `Diagnose`) VALUES
(1, 'Cäsar 1', 'kleine Wunde'),
(2, 'Cäsar 2', 'große Verletzung'),
(3, 'Cäsar 3', 'Fuß- oder Knöchelverletzung'),
(4, 'Cäsar 4', 'Sonstige Fraktur'),
(5, 'Cäsar S', ''),
(6, 'Anna', 'Allergische Reaktion'),
(7, 'Apo', 'Schlaganfall'),
(8, 'Ärger 1', 'Gewalteinwirkung'),
(9, 'Ärger 2', 'Schlägerei'),
(10, 'Ärger 3', 'Messerstecherei'),
(11, 'Ärger 4', 'Vergewaltigung'),
(12, 'Ärger S', ''),
(13, 'Rea', 'Reanimation'),
(14, 'Cardia 1', 'ACS'),
(15, 'Cardia 2', 'bewusstlose Person'),
(16, 'Cardia 3', 'Kollaps / Synkope'),
(17, 'Hitze 1', 'Blasen, Sonnenbrand'),
(18, 'Hitze 2', 'Verbrennungen, Verbrühungen'),
(19, 'Hitze 3', 'Hitzschlag'),
(20, 'Hitze 4', 'Unterkühlung'),
(21, 'Ida', 'Nervenleiden / akute Psychose'),
(22, 'Infekt', 'Infektionserkrankung'),
(23, 'Moritz 1', 'unklare Intoxikation'),
(24, 'Moritz 2', 'Medikamentenintoxikation'),
(25, 'Moritz 3', 'Alkoholintoxikation'),
(26, 'Moritz 4', 'Drogenintoxikation'),
(27, 'Ventruculi', 'Magenerkrankung'),
(28, 'Sonja', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `geschlecht`
--

CREATE TABLE IF NOT EXISTS `geschlecht` (
  `GeschlechtID` int(2) NOT NULL AUTO_INCREMENT,
  `Beschreibung` varchar(15) NOT NULL,
  PRIMARY KEY (`GeschlechtID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `geschlecht`
--

INSERT INTO `geschlecht` (`GeschlechtID`, `Beschreibung`) VALUES
(1, 'weiblich'),
(2, 'männlich');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patientID` int(11) NOT NULL AUTO_INCREMENT,
  `Vorname` varchar(100) NOT NULL,
  `Geburtsdatum` date NOT NULL,
  `Strasse` varchar(100) NOT NULL,
  `PLZ` varchar(10) NOT NULL,
  `Ort` varchar(100) NOT NULL,
  `GeschlechtID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `EingangsDatum` date NOT NULL,
  `PatientenNummer` varchar(5) NOT NULL,
  `AufnahmeZeit` time NOT NULL,
  `AufnahmeID` int(11) NOT NULL,
  `AufnahmeKTW` varchar(10) NOT NULL,
  `AbgangZeit` time NOT NULL,
  `AbgangID` int(11) NOT NULL,
  `AbgangUebergabe` varchar(10) NOT NULL,
  `AbgangZiel` varchar(20) NOT NULL,
  `DiagnoseID` int(11) NOT NULL,
  `DiagnoseSonstiges` varchar(50) NOT NULL,
  `HelferNr1` int(11) NOT NULL,
  `HelferNr2` int(11) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `patient`
--

INSERT INTO `patient` (`patientID`, `Vorname`, `Geburtsdatum`, `Strasse`, `PLZ`, `Ort`, `GeschlechtID`, `Name`, `EingangsDatum`, `PatientenNummer`, `AufnahmeZeit`, `AufnahmeID`, `AufnahmeKTW`, `AbgangZeit`, `AbgangID`, `AbgangUebergabe`, `AbgangZiel`, `DiagnoseID`, `DiagnoseSonstiges`, `HelferNr1`, `HelferNr2`) VALUES

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


# Rechte für `hurricane`@`localhost`

CREATE USER 'hurricane'@'localhost' IDENTIFIED BY PASSWORD '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9';

GRANT ALL PRIVILEGES ON *.* TO 'hurricane'@'localhost' IDENTIFIED BY PASSWORD '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `hurricane2017`.* TO 'hurricane'@'localhost';
