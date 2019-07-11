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
# Datenbank: `junior2_shoe`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `book`
--

CREATE TABLE `junior2_book` (
                        `junior2_id` int(11) NOT NULL,
                        `junior2_article` varchar(255) NOT NULL,
                        `junior2_nom` varchar(255) NOT NULL,
                        `junior2_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `junior2_book`
--

INSERT INTO `junior2_book` (`junior2_id`, `junior2_article`, `junior2_nom`, `junior2_message`) VALUES
(2, ' sandalin', 'Rakeal', 'Sombre et cool'),
(3, ' vulc', 'bran', 'Tres jolie'),
(4, ' Redbids', 'berlin', 'cool'),
(5, ' Redbids', 'dededeededed', 'dddedeeddededededededededededede');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `junior2_category`
--

CREATE TABLE `junior2_category` (
                            `junior2_id` int(11) NOT NULL,
                            `junior2_nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `junior2_category`
--

INSERT INTO `junior2_category` (`junior2_id`, `junior2_nom`) VALUES
(27, 'schuhe'),
(28, 'armband'),
(29, 'ketten');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `loginn`
--

CREATE TABLE `junior2_login` (
                          `junior2_id` int(11) NOT NULL,
                          `junior2_nom` varchar(255) NOT NULL,
                          `junior2_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `junior2_login`
--

INSERT INTO `junior2_login` (`junior2_id`, `junior2_nom`, `junior2_password`) VALUES
(1, '0', '63'),
(2, 'jane', '63a9f0ea7bb98050796b649e85481845'),
(3, 'kelly', 'ae074a5692dfb7c26aae5147e52ceb40'),
(4, 'you', '639bae9ac6b3e1a84cebb7b403297b79'),
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'junior', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `junior2_product`
--

CREATE TABLE `junior2_product` (
                           `junior2_id` int(11) NOT NULL,
                           `junior2_nom` varchar(255) NOT NULL,
                           `junior2_prix` varchar(255) NOT NULL,
                           `junior2_pic` varchar(255) NOT NULL,
                           `junior2_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `product`
--

INSERT INTO `junior2_product` (`junior2_id`, `junior2_nom`, `junior2_prix`, `junior2_pic`, `junior2_cat`) VALUES
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
-- Indizes für die Tabelle `junior2_book`
--
ALTER TABLE `junior2_book`
    ADD PRIMARY KEY (`junior2_id`);

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `junior2_category`
    ADD PRIMARY KEY (`junior2_id`);

--
-- Indizes für die Tabelle `loginn`
--
ALTER TABLE `junior2_login`
    ADD PRIMARY KEY (`junior2_id`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `junior2_product`
    ADD PRIMARY KEY (`junior2_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `book`
--
ALTER TABLE `junior2_book`
    MODIFY `junior2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `junior2_category`
    MODIFY `junior2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `loginn`
--
ALTER TABLE `junior2_login`
    MODIFY `junior2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `junior2_product`
    MODIFY `junior2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
