-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 04, 2020 alle 18:48
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winerydatabase`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bottle`
--

CREATE TABLE `bottle` (
  `id_bottle` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `bottle`
--

INSERT INTO `bottle` (`id_bottle`, `name`, `year`) VALUES
(11, 'Lambrusco', 1980),
(387, 'Franciacorta', 2014),
(10, 'Lambrusco', 1980),
(9, 'Lambrusco', 1980),
(386, 'Franciacorta', 2014),
(367, 'Malvasia', 2003),
(366, 'Malvasia', 2003),
(365, 'Malvasia', 2002),
(352, 'Bonarda', 2002),
(351, 'Bonarda', 2002),
(350, 'Bonarda', 2002),
(347, 'Chianti', 2009),
(346, 'Chianti', 2009),
(345, 'Chianti', 2009),
(344, 'Chianti', 2009),
(27, 'Lambrusco', 2000),
(28, 'Lambrusco', 2000),
(364, 'Malvasia', 2002),
(363, 'Malvasia', 2002),
(362, 'Malvasia', 2002),
(361, 'Malvasia', 2002),
(360, 'Malvasia', 2002),
(359, 'Malvasia', 2002),
(358, 'Malvasia', 2002),
(357, 'Malvasia', 2002),
(337, 'Lambrusco', 2009),
(336, 'Lambrusco', 2009),
(322, 'Lambrusco', 2003),
(321, 'Lambrusco', 2003),
(318, 'Malvasia', 2003),
(316, 'Malvasia', 2003),
(314, 'Malvasia', 2002),
(44, 'Chianti', 2010),
(45, 'Chianti', 2010),
(46, 'Chianti', 2010),
(385, 'Franciacorta', 2014),
(384, 'Franciacorta', 2014),
(343, 'Chianti', 2009),
(342, 'Chianti', 2009),
(341, 'Chianti', 2009),
(340, 'Chianti', 2009),
(339, 'Lambrusco', 2009),
(338, 'Lambrusco', 2009),
(312, 'Malvasia', 2002),
(311, 'Malvasia', 2002),
(310, 'Malvasia', 2002),
(309, 'Malvasia', 2002),
(308, 'Malvasia', 2002),
(62, 'Gutturnio', 2008),
(63, 'Gutturnio', 2008),
(64, 'Gutturnio', 2008),
(65, 'Gutturnio', 2008),
(66, 'Gutturnio', 2008),
(371, 'Lambrusco', 2003),
(370, 'Lambrusco', 2003),
(369, 'Malvasia', 2003),
(368, 'Malvasia', 2003),
(71, 'Chianti', 2016),
(72, 'Chianti', 2016),
(73, 'Chianti', 2016),
(74, 'Chianti', 2016),
(75, 'Chianti', 2016),
(76, 'Chianti', 2016),
(77, 'Chianti', 2016),
(78, 'Chianti', 2016),
(79, 'Chianti', 2016),
(80, 'Chianti', 2016),
(81, 'Chianti', 2016),
(82, 'Chianti', 2016),
(83, 'Chianti', 2016),
(84, 'Chianti', 2016),
(85, 'Chianti', 2016),
(86, 'Chianti', 2016),
(335, 'Lambrusco', 2007),
(334, 'Lambrusco', 2007),
(333, 'Lambrusco', 2007),
(332, 'Lambrusco', 2007),
(331, 'Lambrusco', 2007),
(320, 'Lambrusco', 2003),
(319, 'Malvasia', 2003),
(317, 'Malvasia', 2003),
(315, 'Malvasia', 2002),
(313, 'Malvasia', 2002),
(99, 'Chianti', 2015),
(100, 'Chianti', 2015),
(101, 'Chianti', 2015),
(383, 'Bonarda', 2007),
(382, 'Bonarda', 2007),
(107, 'Gutturnio', 2016),
(108, 'Gutturnio', 2016),
(109, 'Gutturnio', 2016),
(110, 'Gutturnio', 2016),
(111, 'Gutturnio', 2016),
(356, 'Bonarda', 2002),
(307, 'Malvasia', 2002),
(306, 'Malvasia', 2002),
(118, 'Lambrusco', 2005),
(119, 'Lambrusco', 2005),
(120, 'Lambrusco', 2005),
(121, 'Lambrusco', 2005),
(122, 'Lambrusco', 2005),
(123, 'Lambrusco', 2005),
(330, 'Lambrusco', 2007),
(329, 'Lambrusco', 2003),
(326, 'Lambrusco', 2003),
(325, 'Lambrusco', 2003),
(305, 'Malvasia', 2002),
(304, 'Malvasia', 2002),
(303, 'Malvasia', 2002),
(302, 'Malvasia', 2002),
(301, 'Malvasia', 2002),
(300, 'Malvasia', 2002),
(134, 'Lambrusco', 2011),
(135, 'Lambrusco', 2011),
(136, 'Lambrusco', 2011),
(137, 'Lambrusco', 2011),
(138, 'Lambrusco', 2011),
(139, 'Lambrusco', 2011),
(140, 'Lambrusco', 2011),
(141, 'Lambrusco', 2011),
(142, 'Lambrusco', 2011),
(143, 'Lambrusco', 2011),
(381, 'Bonarda', 2007),
(380, 'Bonarda', 2007),
(378, 'Bonarda', 2003),
(377, 'Bonarda', 2003),
(376, 'Bonarda', 2003),
(375, 'Bonarda', 2003),
(374, 'Bonarda', 2003),
(328, 'Lambrusco', 2003),
(327, 'Lambrusco', 2003),
(324, 'Lambrusco', 2003),
(323, 'Lambrusco', 2003),
(156, 'Lambrusco', 2016),
(157, 'Lambrusco', 2016),
(158, 'Lambrusco', 2016),
(159, 'Lambrusco', 2016),
(160, 'Lambrusco', 2016),
(161, 'Lambrusco', 2016),
(233, 'Malvasia', 1980),
(388, 'Franciacorta', 2014),
(389, 'Franciacorta', 2014),
(390, 'Franciacorta', 2016),
(391, 'Franciacorta', 2016),
(392, 'Franciacorta', 2016),
(393, 'Franciacorta', 2016),
(394, 'Franciacorta', 2016),
(395, 'Franciacorta', 2016),
(396, 'Franciacorta', 2016),
(397, 'Franciacorta', 2016),
(398, 'Franciacorta', 2018),
(399, 'Franciacorta', 2018);

-- --------------------------------------------------------

--
-- Struttura della tabella `history`
--

CREATE TABLE `history` (
  `mail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `history`
--

INSERT INTO `history` (`mail`, `name`, `year`, `date`, `quantity`) VALUES
('dariocavalli@gmail.com', 'Malvasia', '1998', '2020-03-04 14:06:06', 2),
('m@gmail.com', 'Chianti', '2010', '2020-03-04 14:06:10', 3),
('m@gmail.com', 'Chianti', '2010', '2020-03-04 14:12:37', 1),
('m@gmail.com', 'Chianti', '2015', '2020-03-04 14:12:37', 1),
('m@gmail.com', 'Gutturnio', '2008', '2020-03-04 14:25:58', 5),
('m@gmail.com', 'Lambrusco', '1990', '2020-03-04 14:06:38', 3),
('m@gmail.com', 'Lambrusco', '2011', '2020-03-04 14:25:58', 6),
('m@gmail.com', 'Malvasia', '1995', '2020-03-04 14:25:58', 2),
('prova@finale.it', 'Bonarda', '2002', '2020-03-04 17:42:50', 3),
('prova@finale.it', 'Bonarda', '2003', '2020-03-04 17:42:50', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `mail` varchar(250) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`mail`, `password`) VALUES
('dariocavalli@gmail.com', '03111710'),
('uy@gmail.com', 'uypassw'),
('uz@gmail.com', 'uzpassw'),
('a@a.aa', 'aaaa'),
('sdc@gmail.com', 'sdcm'),
('m@gmail.com', 'mmmm'),
('stefano.cagnoni@unipr.it', 'basididati'),
('damianocavalli@gmail.com', 'pingu'),
('danielecavalli@gmail.com', 'nenne'),
('asdf@gmail.com', 'asdf'),
('prova@finale.it', 'provafinale');

-- --------------------------------------------------------

--
-- Struttura della tabella `winery`
--

CREATE TABLE `winery` (
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `winery`
--

INSERT INTO `winery` (`name`) VALUES
('La Vineria');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bottle`
--
ALTER TABLE `bottle`
  ADD PRIMARY KEY (`id_bottle`);

--
-- Indici per le tabelle `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`mail`,`name`,`year`,`date`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`);

--
-- Indici per le tabelle `winery`
--
ALTER TABLE `winery`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
