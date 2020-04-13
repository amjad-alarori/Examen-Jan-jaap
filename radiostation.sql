-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 04:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radiostation`
--

-- --------------------------------------------------------

--
-- Table structure for table `artiest`
--

CREATE TABLE `artiest` (
  `idartiest` int(11) NOT NULL,
  `artiestennaam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artiest`
--

INSERT INTO `artiest` (`idartiest`, `artiestennaam`) VALUES
(1, 'AC/DC'),
(2, 'Rolling Stone'),
(3, 'Blue Öyster Cult'),
(4, 'Rush'),
(5, 'Saga'),
(6, 'Beatles'),
(7, 'Joe Cocker'),
(8, 'Alice Cooper'),
(9, 'Sex Pistols'),
(10, 'David Bowie');

-- --------------------------------------------------------

--
-- Table structure for table `artiest_has_song`
--

CREATE TABLE `artiest_has_song` (
  `artiest_idartiest` int(11) NOT NULL,
  `song_idsong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medewerker`
--

CREATE TABLE `medewerker` (
  `idmedewerker` int(11) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `tussenvoegsels` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medewerker`
--

INSERT INTO `medewerker` (`idmedewerker`, `voornaam`, `tussenvoegsels`, `achternaam`, `login`, `password`, `nickname`) VALUES
(1, 'Craig', NULL, 'Crashhead', NULL, NULL, 'DJ Parker'),
(2, 'Buster ', NULL, 'Keaton', NULL, NULL, 'Tiricia Macdonalds'),
(3, 'Colin ', NULL, 'Burnfield', NULL, NULL, 'Colin Bunkers'),
(4, 'Tricia ', NULL, 'Diamond', NULL, NULL, NULL),
(5, 'Bert ', NULL, 'Breckerbrother', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `song-idsong` int(11) NOT NULL,
  `programma_idprogramma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `programma`
--

CREATE TABLE `programma` (
  `idprogramma` int(11) NOT NULL,
  `omschrijving` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programma`
--

INSERT INTO `programma` (`idprogramma`, `omschrijving`) VALUES
(1, 'Soulshow'),
(2, 'Funkin'),
(3, 'Streetlife');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `idsong` int(11) NOT NULL,
  `duur` varchar(45) DEFAULT NULL,
  `titel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`idsong`, `duur`, `titel`) VALUES
(1, '4:31', 'Whole lotta Rosie'),
(2, '4:12', 'Start me up'),
(3, '2:21', 'Why me'),
(4, '5:21', 'Mountain'),
(5, '7:31', 'Let’s go'),
(6, '4:31', 'Hey Jude'),
(7, '4:12', 'With a little help from my friends'),
(8, '2:21', 'School’s out'),
(9, '5:21', 'God save the queen'),
(10, '7:31', 'Heroes');

-- --------------------------------------------------------

--
-- Table structure for table `uitzending`
--

CREATE TABLE `uitzending` (
  `idprogramma` int(11) NOT NULL,
  `datum` date NOT NULL,
  `begintijd` time NOT NULL,
  `eindtijd` time DEFAULT NULL,
  `presentator` int(11) DEFAULT NULL,
  `idzender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uitzending`
--

INSERT INTO `uitzending` (`idprogramma`, `datum`, `begintijd`, `eindtijd`, `presentator`, `idzender`) VALUES
(1, '2020-02-21', '10:00:00', '12:00:00', 1, 1),
(2, '2020-02-21', '11:00:00', '14:00:00', 2, 1),
(3, '2020-02-22', '15:00:00', '18:00:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zender`
--

CREATE TABLE `zender` (
  `idzender` int(11) NOT NULL,
  `omschrijving` varchar(45) DEFAULT NULL,
  `slogan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zender`
--

INSERT INTO `zender` (`idzender`, `omschrijving`, `slogan`) VALUES
(1, 'KKSoul ', 'Soulmusic from the seventies'),
(2, 'KKRock', 'Rock en Metal'),
(3, 'KKLounge', 'Relax en chill music'),
(4, 'KKAlternative', 'Get strange'),
(5, 'KKCountry', 'All your country & western '),
(6, 'KKGrasshopper', 'De beste bluegrass songs ever!'),
(7, 'KKHiphop', 'And you don\'t stop rockin till the bang bang '),
(8, 'KKMetal', 'Heavy Duty Metal of the first kind'),
(9, 'KKWorkout', 'Get fit on music');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artiest`
--
ALTER TABLE `artiest`
  ADD PRIMARY KEY (`idartiest`);

--
-- Indexes for table `artiest_has_song`
--
ALTER TABLE `artiest_has_song`
  ADD PRIMARY KEY (`artiest_idartiest`,`song_idsong`),
  ADD KEY `fk_artiest_has_song_song1_idx` (`song_idsong`),
  ADD KEY `fk_artiest_has_song_artiest_idx` (`artiest_idartiest`);

--
-- Indexes for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`idmedewerker`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`song-idsong`,`programma_idprogramma`),
  ADD KEY `fk_playlist_uitzending1_idx` (`programma_idprogramma`);

--
-- Indexes for table `programma`
--
ALTER TABLE `programma`
  ADD PRIMARY KEY (`idprogramma`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`idsong`);

--
-- Indexes for table `uitzending`
--
ALTER TABLE `uitzending`
  ADD PRIMARY KEY (`idprogramma`,`datum`),
  ADD KEY `fk_uitzending_prgramma1_idx` (`idprogramma`),
  ADD KEY `fk_uitzending_zender1_idx` (`idzender`),
  ADD KEY `fk_uitzending_medewerker1_idx` (`presentator`);

--
-- Indexes for table `zender`
--
ALTER TABLE `zender`
  ADD PRIMARY KEY (`idzender`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artiest_has_song`
--
ALTER TABLE `artiest_has_song`
  ADD CONSTRAINT `fk_artiest_has_song_artiest` FOREIGN KEY (`artiest_idartiest`) REFERENCES `artiest` (`idartiest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_artiest_has_song_song1` FOREIGN KEY (`song_idsong`) REFERENCES `song` (`idsong`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `fk_playlist_song1` FOREIGN KEY (`song-idsong`) REFERENCES `song` (`idsong`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_playlist_uitzending1` FOREIGN KEY (`programma_idprogramma`) REFERENCES `uitzending` (`idprogramma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uitzending`
--
ALTER TABLE `uitzending`
  ADD CONSTRAINT `fk_uitzending_medewerker1` FOREIGN KEY (`presentator`) REFERENCES `medewerker` (`idmedewerker`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_uitzending_prgramma1` FOREIGN KEY (`idprogramma`) REFERENCES `programma` (`idprogramma`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_uitzending_zender1` FOREIGN KEY (`idzender`) REFERENCES `zender` (`idzender`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
