-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 okt 2016 om 16:14
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
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(100) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'Hoe kan ik weddenschappen plaatsen?', 'Allereerst moet u ingelogd zijn. Vervolgens gaat u naar ''Competities'' en klikt u op een willekeurige competitie. U komt dan op de wedstrijdenpagina. Hier kunt u kiezen tussen actuele wedstrijden.'),
(2, 'Kan ik op meerdere wedstrijden tegelijk wedden?', 'Ja, dat kan zeker! Let u wel op dat u voldoende credits heeft eer u een weddenschap plaatst. Kijk voor meer informatie over credits op <a href="#">deze pagina</a>.'),
(3, 'Hoe verdien ik credits?', 'Credits kunt u verdienen door wedstrijduitslagen goed te raden. Hoeveel credtis u krijgt is afhankelijk van de wedstrijd. Zo kan de notering bij een wedstrijd tussen een grote en een kleine ploeg flink verschillen dan bijvoorbeeld een wedstrijd tussen gelijke ploegen.'),
(4, 'Kan ik de credits ook kopen?', 'Dat kan uiteraard ook. Iedere gebruiker begint standaard met 25 credits. Heeft u geen credits meer? Dan kunt u heel eenvoudig uw saldo opwaarderen door middel van iDEAL. PayPal en creditcards worden (nog) niet ondersteund.'),
(16, 'Ik heb een account aangemaakt, maar ik kan niet inloggen. Wat nu?', 'Als u geen toegang heeft tot uw account, dan kan dat verschillende redenen hebben. Stuur in dit geval dat een mail naar <a href="mailto:accountbeheer@soccergamble.nl"> dit mailadres</a> voor nadere informatie.'),
(17, 'Kan ik mijn gebruikersnaam veranderen?', 'Dit is momenteel (nog) niet mogelijk. Denk daarom goed na over uw gebruikersnaam!'),
(18, 'Hoe lang duurt het voordat mijn credits op mijn account staat als ik online heb gewonnen?', 'Zodra u een wedstrijd/weddenschap heeft gewonnen worden de credits er gelijk aan het eind van de desbetreffende website bijgeschreven.'),
(19, 'Hoeveel zijn credits waard?', '1 credit = €1,-'),
(21, ' Onlangs heb ik geld overgemaakt van mijn account naar mijn rekening. Wanneer ontvang ik mijn geld?', 'De overboeking kan tot 10 werkdagen duren. Wij streven er naar om het bedrag eerder aan je uit te keren.'),
(23, 'Vraag?', 'Antwoord!'),
(24, 'test', 'jibberishhh'),
(25, 'sdfsadfsdfs', 'sdfdsfdsfdsfsdf');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fp_competitions`
--

CREATE TABLE `fp_competitions` (
  `id` int(100) NOT NULL,
  `division` varchar(255) NOT NULL,
  `division_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fp_competitions`
--

INSERT INTO `fp_competitions` (`id`, `division`, `division_logo`) VALUES
(1, 'Champions League', 'ucl.png'),
(2, 'Europa League', 'uel.png'),
(3, 'Eredivisie', 'eredivisie3.png'),
(4, 'Jupiler League', 'jupiler.png');

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
(2, 'Richinel', 'Richinel', 'Jarbandhan', 'banaan1', 'rj_1993@live.nl', 25, 3),
(3, 'swaggerboyjeremy', 'Jeremy', 'van de Velden', 'banaan1', 'jrn@werkwle.nl', 25, 1),
(6, '', '', '', '', '', 25, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `backgroundimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `slider`
--

INSERT INTO `slider` (`id`, `title`, `subtitle`, `backgroundimg`) VALUES
(1, 'Manchester United - Manchester City', 'Mourinho of Guardiola? Wed nu op de Manchester Derby!', './assets/images/manutdcity.jpg'),
(2, 'FC Bayern M&uuml;nchen - Borussia Dortmund', 'De kraker van de Bundesliga! Wed nu op deze wedstrijd en maak kans op een geheel verzorgd arrangement van een van de clubs naar keuze!', './assets/images/baybor2.jpg'),
(3, 'Feyenoord - Ajax', 'De klassieker komt er weer aan! Welke club zal volgens jou winnen? Waag een gok!', './assets/images/feyaja1.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wedstrijden`
--

CREATE TABLE `wedstrijden` (
  `id` int(11) NOT NULL,
  `thuisploeg` varchar(100) NOT NULL,
  `thuis_score` int(11) NOT NULL,
  `uitploeg` varchar(100) NOT NULL,
  `uit_score` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `division_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `wedstrijden`
--

INSERT INTO `wedstrijden` (`id`, `thuisploeg`, `thuis_score`, `uitploeg`, `uit_score`, `division`, `division_logo`) VALUES
(1, 'Manchester City', 4, 'Club Brugge', 0, 'Champions League', 'ucl.png'),
(3, 'Feyenoord', 1, 'Manchester United', 0, 'Europa League', 'uel.png'),
(4, 'Vitesse', 2, 'Roda JC', 3, 'Eredivisie', 'eredivisie.png'),
(5, 'VVV Venlo', 1, 'NAC Breda', 1, 'Jupiler League', 'jupiler.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `fp_competitions`
--
ALTER TABLE `fp_competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT voor een tabel `fp_competitions`
--
ALTER TABLE `fp_competitions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `wedstrijden`
--
ALTER TABLE `wedstrijden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
