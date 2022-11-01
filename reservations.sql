-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 nov 2022 om 23:55
-- Serverversie: 10.4.19-MariaDB
-- PHP-versie: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_date` date DEFAULT NULL,
  `res_slot` varchar(32) DEFAULT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`res_id`, `res_date`, `res_slot`, `res_name`, `res_email`, `res_tel`, `res_notes`) VALUES
(1, '2022-11-10', 'AM', 'John Doe', 'john@doe.com', '123456789', 'Testing'),
(2, '2022-11-03', 'AM', 'tim', 'tim@doe.com', '123456789', 'Testing'),
(3, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(4, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(5, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(6, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(7, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(8, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(9, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(10, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(11, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(12, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(13, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(14, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(15, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(16, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(17, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(18, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(19, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(20, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(21, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing'),
(22, '2022-11-17', 'AM', 'robin Doe', 'rohn@doe.com', '123456789', 'Testing');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
