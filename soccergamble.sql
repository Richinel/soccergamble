-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 sep 2016 om 15:57
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccergamble`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `credits` int(11) NOT NULL,
  `rights` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `credits`, `rights`) VALUES
(1, 'swaggerboyjoey', 'Richinel', 'Jarbandhan', '1234567', 'rj_1993@live.nl', 25, 3),
(2, 'Richinel', 'Richinel', 'Jarbandhan', 'banaan1', 'rj_1993@live.nl', 25, 1),
(3, 'swaggerboyjeremy', 'Jeremy', 'van de Velden', 'banaan1', 'jrn@werkwle.nl', 25, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden_ed`
--

CREATE TABLE `wedstrijden_ed` (
  `id` int(11) NOT NULL,
  `thuisploeg` varchar(100) NOT NULL,
  `uitploeg` varchar(100) NOT NULL,
  `stand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden_ed`
--

INSERT INTO `wedstrijden_ed` (`id`, `thuisploeg`, `uitploeg`, `stand`) VALUES
(1, 'ADO Den Haag', 'Heracles Almelo', '2 - 2'),
(2, 'Sparta Rotterdam', 'Excelsior', '0 - 4');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden_ucl`
--

CREATE TABLE `wedstrijden_ucl` (
  `id` int(11) NOT NULL,
  `thuisploeg` varchar(100) NOT NULL,
  `uitploeg` varchar(100) NOT NULL,
  `stand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden_ucl`
--

INSERT INTO `wedstrijden_ucl` (`id`, `thuisploeg`, `uitploeg`, `stand`) VALUES
(1, 'Manchester CIty', 'Club Brugge', '2 - 1'),
(2, 'Feyenoord', 'PSV', '4 - 0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden_uel`
--

CREATE TABLE `wedstrijden_uel` (
  `id` int(11) NOT NULL,
  `thuisploeg` varchar(100) NOT NULL,
  `uitploeg` varchar(100) NOT NULL,
  `stand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden_uel`
--

INSERT INTO `wedstrijden_uel` (`id`, `thuisploeg`, `uitploeg`, `stand`) VALUES
(1, 'Manchester United', 'Zohrya', '2 - 1'),
(2, 'FenerBahce', 'Feyenoord', '3 - 0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wedstrijden_ed`
--
ALTER TABLE `wedstrijden_ed`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wedstrijden_ucl`
--
ALTER TABLE `wedstrijden_ucl`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wedstrijden_uel`
--
ALTER TABLE `wedstrijden_uel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden_ed`
--
ALTER TABLE `wedstrijden_ed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden_ucl`
--
ALTER TABLE `wedstrijden_ucl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden_uel`
--
ALTER TABLE `wedstrijden_uel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
