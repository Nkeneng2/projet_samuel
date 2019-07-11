-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 11. Jul 2019 um 20:46
-- Server-Version: 5.7.23
-- PHP-Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `shoe`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `book`
--

CREATE TABLE `book` (
                        `id` int(11) NOT NULL,
                        `article` varchar(255) NOT NULL,
                        `nom` varchar(255) NOT NULL,
                        `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `book`
--

INSERT INTO `book` (`id`, `article`, `nom`, `message`) VALUES
(2, ' sandalin', 'Rakeal', 'Sombre et cool'),
(3, ' vulc', 'bran', 'Tres jolie'),
(4, ' Redbids', 'berlin', 'cool'),
(5, ' Redbids', 'dededeededed', 'dddedeeddededededededededededede');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
                            `id` int(11) NOT NULL,
                            `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`id`, `nom`) VALUES
(27, 'schuhe'),
(28, 'armband'),
(29, 'ketten');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `loginn`
--

CREATE TABLE `loginn` (
                          `id` int(11) NOT NULL,
                          `nom` varchar(255) NOT NULL,
                          `passworde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `loginn`
--

INSERT INTO `loginn` (`id`, `nom`, `passworde`) VALUES
(1, '0', '63'),
(2, 'jane', '63a9f0ea7bb98050796b649e85481845'),
(3, 'kelly', 'ae074a5692dfb7c26aae5147e52ceb40'),
(4, 'you', '639bae9ac6b3e1a84cebb7b403297b79'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'junior', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
                           `id` int(11) NOT NULL,
                           `nom` varchar(255) NOT NULL,
                           `prix` varchar(255) NOT NULL,
                           `pic` varchar(255) NOT NULL,
                           `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `nom`, `prix`, `pic`, `cat`) VALUES
(9, 'bale', '300', 'photo.jpeg', 'luxx'),
(14, 'sandis', '250', 'photo2.jpeg', 'Simple'),
(15, 'luxx', '467', '9.jpg', 'classic,luxx'),
(16, 'junn', '735', 'photo4.jpeg', 'simple, luxx'),
(20, 'sandalin', '500', '13.jpg', 'simple'),
(21, 'suss', '690', '5.jpeg', 'luxx'),
(22, 'vulc', '290', '11.jpg', 'simple,luxx'),
(23, 'hj', '89', '21.jpg', 'classic'),
(24, 'Redbids', '230', '12.jpg', 'luxx,classic,simple'),
(37, 'saba ', '200', '3.jpg', 'kette'),
(38, 'golden kette', '250', '6.jpg', 'kette'),
(50, 'soleil80', '471', '80.jpg', 'schuhe'),
(51, 'soleil81', '361', '81.jpg', 'kette'),
(52, 'soleil82', '490', '82.jpg', 'kette'),
(53, 'soleil83', '205', '83.jpg', 'arm'),
(54, 'soleil84', '345', '84.jpg', 'schuhe'),
(55, 'soleil85', '374', '85.jpg', 'schuhe'),
(56, 'soleil86', '468', '86.jpg', 'schuhe');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `book`
--
ALTER TABLE `book`
    ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `loginn`
--
ALTER TABLE `loginn`
    ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `book`
--
ALTER TABLE `book`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `loginn`
--
ALTER TABLE `loginn`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
