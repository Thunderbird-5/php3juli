-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 15 aug 2021 om 13:21
-- Serverversie: 5.7.35
-- PHP-versie: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qndrs_speeltuin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evengetallen`
--

CREATE TABLE `evengetallen` (
  `getal` int(11) NOT NULL,
  `getalnaam` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evengetallen`
--

INSERT INTO `evengetallen` (`getal`, `getalnaam`) VALUES
(2, 'twee'),
(4, 'vier'),
(6, 'zes'),
(8, 'acht'),
(10, 'tien'),
(12, 'twaalf'),
(14, 'veertien'),
(16, 'zestien'),
(18, 'achtien'),
(20, 'twintig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `getallen`
--

CREATE TABLE `getallen` (
  `getal` int(11) NOT NULL,
  `getalnaam` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `getallen`
--

INSERT INTO `getallen` (`getal`, `getalnaam`) VALUES
(2, 'twee'),
(4, 'vier'),
(6, 'zes'),
(8, 'acht'),
(1, 'een'),
(3, 'drie'),
(5, 'vijf'),
(7, 'zeven');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `onevengetallen`
--

CREATE TABLE `onevengetallen` (
  `getal` int(11) NOT NULL,
  `getalnaam` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `onevengetallen`
--

INSERT INTO `onevengetallen` (`getal`, `getalnaam`) VALUES
(1, 'een'),
(3, 'drie'),
(5, 'vijf'),
(7, 'zeven'),
(9, 'negen'),
(11, 'elf'),
(13, 'dertien'),
(15, 'vijftien'),
(17, 'zeventien'),
(19, 'negentien');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `evengetallen`
--
ALTER TABLE `evengetallen`
  ADD PRIMARY KEY (`getal`);

--
-- Indexen voor tabel `getallen`
--
ALTER TABLE `getallen`
  ADD PRIMARY KEY (`getal`);

--
-- Indexen voor tabel `onevengetallen`
--
ALTER TABLE `onevengetallen`
  ADD PRIMARY KEY (`getal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
