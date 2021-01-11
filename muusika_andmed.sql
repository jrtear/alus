-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Loomise aeg: Jaan 11, 2021 kell 07:28 PL
-- Serveri versioon: 5.7.24
-- PHP versioon: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `muusika_andmed`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `muusika_andmed`
--

CREATE TABLE `muusika_andmed` (
  `answer_id` int(28) NOT NULL,
  `play_intsrument` varchar(255) NOT NULL,
  `fav_instrument` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `location` varchar(40) NOT NULL,
  `fav_style` varchar(255) NOT NULL,
  `fav_artist` varchar(255) NOT NULL,
  `fav_plat` varchar(255) NOT NULL,
  `grade_estradio` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `muusika_andmed`
--

INSERT INTO `muusika_andmed` (`answer_id`, `play_intsrument`, `fav_instrument`, `age`, `gender`, `location`, `fav_style`, `fav_artist`, `fav_plat`, `grade_estradio`) VALUES
(1, 'Ei', 'Trummid,Parmupill,Klaver', 'alla 18', 'Mees', 'Saaremaa', 'Hiphop', ' ', 'Spotify,Soundcloud', '2'),
(2, 'Jah', 'Kitarr', '21+', 'Naine', 'Saaremaa', 'Pop,Bluus', ' ', 'Spotify,Youtube', '5'),
(3, 'Jah', 'Trummid,Flööt,Parmupill,Saksofon,Akordion', 'alla 18', 'Mees', 'Tallinn', 'EDM,Eesti räpp,House,Future House', 'Syn Cole', 'Spotify,Google Play,Raadio,Kontsert', '2'),
(4, 'Jah', 'Kitarr,Parmupill,Saksofon', '21+', 'Mees', 'Saaremaa', 'Hiphop,Eesti räpp,House,Kantri,Bluus', 'Keeruline õelda', 'Youtube', '1'),
(5, 'Ei', 'Kitarr', '21+', 'Mees', 'Tallinn', 'Hiphop,EDM,Eesti räpp', 'Kygo,One Republic', 'Spotify,Youtube', '4'),
(6, 'Ei', 'Parmupill', '21+', 'Mees', 'Muu', 'Kantri', 'Meister Jaan', 'Youtube', '3'),
(7, 'Ei', 'Kitarr,Trummid,Parmupill,Klaver', '21+', 'Mees', 'Tallinn', 'Pop', 'Üllar Jõrberg', 'Spotify,Youtube,Raadio', '4'),
(8, 'Ei', 'Kitarr,Klaver', '21+', 'Mees', 'Saaremaa', 'EDM,House,Kantri', 'R3hab', 'Soundcloud,Youtube', '4'),
(9, 'Ei', 'Kitarr', '21+', 'Naine', 'Saaremaa', 'Eesti räpp', 'Pole', 'Youtube,Raadio,Kontsert', '4'),
(10, 'Ei', 'Kitarr,Kontrabass', '21+', 'Mees', 'Pärnu', 'Hiphop,EDM,Eesti räpp,House,Dubstep', 'Skrillex', 'Spotify,Soundcloud,Mixcloud', '3'),
(11, 'Jah', 'Kitarr', '21+', 'Naine', 'Tallinn', 'Pop,Kantri,Bluus', 'Beyonce', 'Spotify,Youtube,Raadio,Kontsert', '5'),
(12, 'Jah', 'Trummid', 'alla 18', 'Mees', 'Tallinn', 'Hiphop,Rock,Bluus', 'Tyler the Creator', 'Spotify,Soundcloud', '2'),
(13, 'Jah', 'Kitarr,Klaver', 'alla 18', 'Mees', 'Pärnu', 'Eesti räpp', 'Nublu', 'Spotify,Soundcloud', '3'),
(14, 'Ei', 'Trummid', 'alla 18', 'Naine', 'Muu', 'Hiphop,EDM,Eesti räpp', '5miinust', 'Spotify,Youtube', '4'),
(15, 'Jah', 'Trummid', '18-21', 'Mees', 'Pärnu', 'House,Rock', 'Metallica', 'Spotify', '2'),
(16, 'Ei', 'Kitarr', '21+', 'Naine', 'Tallinn', 'Bluus', 'Amy Winehouse', 'Spotify', '3'),
(17, 'Ei', 'Klaver', '18-21', 'Naine', 'Tallinn', 'Hiphop,Techno,Funk', 'Lexsoul Dancemachine,Kanye West', 'Spotify,Soundcloud', '3'),
(18, 'Ei', 'Klaver', '18-21', 'Mees', 'Muu', 'Pop,Kantri,Bluus', 'Shawn Mendes', 'Spotify,Kontsert', '2'),
(19, 'Ei', 'Kitarr,Klaver', '21+', 'Naine', 'Muu', 'Rock', 'Pink', 'Kontsert', '5'),
(20, 'Ei', 'Kitarr', '21+', 'Mees', 'Tallinn', 'Rock', 'Red Hot Chili Peppers', 'Spotify', '4'),
(21, 'Jah', 'Kitarr,Trummid,Parmupill', '21+', 'Mees', 'Saaremaa', 'Hiphop,EDM,Eesti räpp,House', 'Nublu', 'Spotify,Youtube', '3'),
(22, 'Jah', 'Kitarr,Klaver,Saksofon', '21+', 'Mees', 'Saaremaa', 'Pop', 'Ivo Linna', 'Youtube,Raadio,Kontsert', '5'),
(23, 'Ei', 'Parmupill', '21+', 'Mees', 'Saaremaa', 'Eesti räpp', 'Nublu', 'Youtube', '4'),
(24, 'Jah', 'Kitarr,Trummid,Flööt', '21+', 'Mees', 'Saaremaa', 'Hiphop,EDM,Eesti räpp,House', 'Nublu', 'Spotify,Soundcloud,Youtube,Raadio,Kontsert', '2'),
(25, 'Ei', 'Kitarr,Flööt,Klaver', '18-21', 'Naine', 'Tallinn', 'Hiphop,Pop,House,Rock', 'Selena Gomez', 'Spotify,Youtube', '3'),
(26, 'Ei', 'Kitarr', '21+', 'Mees', 'Tallinn', 'EDM,Pop,Rock', 'Tame Impala', 'Spotify', '3');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `pill`
--

CREATE TABLE `pill` (
  `id` int(28) NOT NULL,
  `intstrument` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `pill`
--

INSERT INTO `pill` (`id`, `intstrument`) VALUES
(1, 'kitarr'),
(2, 'kitarr'),
(3, 'kitarr'),
(4, 'kitarr'),
(5, 'kitarr'),
(6, 'kitarr'),
(7, 'kitarr'),
(8, 'kitarr'),
(9, 'kitarr'),
(10, 'kitarr'),
(11, 'kitarr'),
(12, 'kitarr'),
(13, 'kitarr'),
(14, 'kitarr'),
(15, 'kitarr'),
(16, 'kitarr'),
(17, 'kitarr'),
(18, 'trummid'),
(19, 'trummid'),
(20, 'trummid'),
(21, 'trummid'),
(22, 'trummid'),
(23, 'trummid'),
(24, 'trummid'),
(25, 'trummid'),
(26, 'trummid'),
(27, 'flööt'),
(28, 'flööt'),
(29, 'flööt'),
(30, 'parmupill'),
(31, 'parmupill'),
(32, 'parmupill'),
(33, 'parmupill'),
(34, 'parmupill'),
(35, 'parmupill'),
(36, 'parmupill'),
(37, 'klaver'),
(38, 'klaver'),
(39, 'klaver'),
(40, 'klaver'),
(41, 'klaver'),
(42, 'klaver'),
(43, 'klaver'),
(44, 'klaver'),
(45, 'parmupill'),
(46, 'parmupill'),
(47, 'parmupill');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `platvorm`
--

CREATE TABLE `platvorm` (
  `id` int(28) NOT NULL,
  `platvorm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `platvorm`
--

INSERT INTO `platvorm` (`id`, `platvorm`) VALUES
(1, 'Spotify'),
(2, 'Spotify'),
(3, 'Spotify'),
(4, 'Spotify'),
(5, 'Spotify'),
(6, 'Spotify'),
(7, 'Spotify'),
(8, 'Spotify'),
(9, 'Spotify'),
(10, 'Spotify'),
(11, 'Spotify'),
(12, 'Spotify'),
(13, 'Spotify'),
(14, 'Spotify'),
(15, 'Spotify'),
(16, 'Spotify'),
(17, 'Spotify'),
(18, 'Spotify'),
(19, 'Spotify'),
(20, 'Youtube'),
(21, 'Youtube'),
(22, 'Youtube'),
(23, 'Youtube'),
(24, 'Youtube'),
(25, 'Youtube'),
(26, 'Youtube'),
(27, 'Youtube'),
(28, 'Youtube'),
(29, 'Youtube'),
(30, 'Youtube'),
(31, 'Youtube'),
(32, 'Youtube'),
(33, 'Youtube'),
(34, 'Soundcloud'),
(35, 'Soundcloud'),
(36, 'Soundcloud'),
(37, 'Soundcloud'),
(38, 'Soundcloud'),
(39, 'Soundcloud'),
(40, 'Soundcloud'),
(41, 'Raadio'),
(42, 'Raadio'),
(43, 'Raadio'),
(44, 'Raadio'),
(45, 'Raadio'),
(46, 'Raadio'),
(47, 'Kontsert'),
(48, 'Kontsert'),
(49, 'Kontsert'),
(50, 'Kontsert'),
(51, 'Kontsert'),
(52, 'Kontsert'),
(53, 'Kontsert');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `stiil`
--

CREATE TABLE `stiil` (
  `id` int(28) NOT NULL,
  `stiil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `stiil`
--

INSERT INTO `stiil` (`id`, `stiil`) VALUES
(1, 'Hipop'),
(2, 'Hipop'),
(3, 'Hipop'),
(4, 'Hipop'),
(5, 'Hipop'),
(6, 'Hipop'),
(7, 'Hipop'),
(8, 'Hipop'),
(9, 'Hipop'),
(10, 'Hipop'),
(11, 'Eesti räpp'),
(12, 'Eesti räpp'),
(13, 'Eesti räpp'),
(14, 'Eesti räpp'),
(15, 'Eesti räpp'),
(16, 'Eesti räpp'),
(17, 'Eesti räpp'),
(18, 'Eesti räpp'),
(19, 'Eesti räpp'),
(20, 'Eesti räpp'),
(21, 'Edm'),
(22, 'Edm'),
(23, 'Edm'),
(24, 'Edm'),
(25, 'Edm'),
(26, 'Edm'),
(27, 'Edm'),
(28, 'Edm'),
(29, 'House'),
(30, 'House'),
(31, 'House'),
(32, 'House'),
(33, 'House'),
(34, 'House'),
(35, 'House'),
(36, 'House'),
(37, 'pop'),
(38, 'pop'),
(39, 'pop'),
(40, 'pop'),
(41, 'pop'),
(42, 'pop'),
(43, 'pop'),
(44, 'rock'),
(45, 'rock'),
(46, 'rock'),
(47, 'rock'),
(48, 'rock'),
(49, 'rock'),
(50, 'kantri'),
(51, 'kantri'),
(52, 'kantri'),
(53, 'kantri'),
(54, 'kantri'),
(55, 'bluus'),
(56, 'bluus'),
(57, 'bluus'),
(58, 'bluus'),
(59, 'bluus'),
(60, 'bluus');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `muusika_andmed`
--
ALTER TABLE `muusika_andmed`
  ADD KEY `answer_id` (`answer_id`);

--
-- Indeksid tabelile `pill`
--
ALTER TABLE `pill`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `platvorm`
--
ALTER TABLE `platvorm`
  ADD PRIMARY KEY (`id`);

--
-- Indeksid tabelile `stiil`
--
ALTER TABLE `stiil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `muusika_andmed`
--
ALTER TABLE `muusika_andmed`
  MODIFY `answer_id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT tabelile `pill`
--
ALTER TABLE `pill`
  MODIFY `id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT tabelile `platvorm`
--
ALTER TABLE `platvorm`
  MODIFY `id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT tabelile `stiil`
--
ALTER TABLE `stiil`
  MODIFY `id` int(28) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
