-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 17. 09 2021 kl. 13:00:14
-- Serverversion: 5.7.31
-- PHP-version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rock_finder`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `info_om_musikerne`
--

DROP TABLE IF EXISTS `info_om_musikerne`;
CREATE TABLE IF NOT EXISTS `info_om_musikerne` (
  `rockId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `muArtist` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `muTrack` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `muAlbum` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `muRelease` datetime NOT NULL,
  `muGenre` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `muDuration` time NOT NULL,
  `muStyles` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `muMembers` text COLLATE utf8_danish_ci,
  `muPrice` decimal(45,0) DEFAULT NULL,
  PRIMARY KEY (`rockId`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `info_om_musikerne`
--

INSERT INTO `info_om_musikerne` (`rockId`, `muArtist`, `muTrack`, `muAlbum`, `muRelease`, `muGenre`, `muDuration`, `muStyles`, `muMembers`, `muPrice`) VALUES
(12, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-30 00:00:00', 'Heavy Metal', '20:00:00', '', '<p>Hennig</p>', '20'),
(13, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-03 00:00:00', 'Heavy Metal', '14:18:55', '', '', '12'),
(14, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-15 00:00:00', 'Heavy Metal', '17:25:05', '', '', '20'),
(11, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-30 00:00:00', 'Heavy Metal', '20:00:00', '', '<p>Hennig</p>', '20'),
(15, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-15 00:00:00', 'Heavy Metal', '17:25:05', '', '', '20'),
(16, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-04 00:00:00', 'Heavy Metal', '17:25:58', '', '', '12'),
(17, 'Five Finger Death Punch', 'Wrong Side of Heaven', 'The Wrong Side of Heaven and The Righteous Side of Hell', '2021-09-04 00:00:00', 'Heavy Metal', '17:25:58', '', '', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
