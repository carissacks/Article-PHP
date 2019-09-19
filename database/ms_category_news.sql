-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2019 at 05:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accumn`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_news`
--

CREATE TABLE `ms_category_news` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `ms_category_news`
--

INSERT INTO `ms_category_news` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('N01', 'MBAK JISOO MENGALAHKAN MBAK SUNBIN DENGAN SKOR 3-0 DI ESL MAJOR CSGO 2019', '2019-01-01', 'Mamang Rojak', 'https://dummyimage.com/600x400/000/fff', 'MBAK SUNBIN CUPU', 0),
('N02', 'CAPSA REBORN MENANG MELAWAN ASTRALIS DENGAN SKOR TELAK', '2017-09-09', 'Alvin Julian', 'https://dummyimage.com/600x400/000/fff', 'EZ', 0),
('N03', 'PEMINATAN ETHICAL HACKER DI UMN DIMINATI BANYAK MAHASISWA BARU', '2019-07-07', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'Mantap bois', 0),
('N04', 'ASUS MERILIS SMART CAR BERBASIS ANDROID', '2019-09-10', 'Miguel Gouwardi', 'https://dummyimage.com/600x400/000/fff', 'Asus', 0),
('N05', 'MAHASISWA INFORMATIKA UMN MERAIH GELAR SARJANA DKV', '2001-01-12', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', '<script>alert(\'rektbois\');</script>', 0),
('N06', 'INDONESIA MEMBUAT SENJATA NUKLIR PERTAMANYA', '2017-02-02', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'NUKLIR', 0),
('N07', 'ALVIN JULIAN BERENANG DARI SUNGAI CISADANE SAMPAI ANCOL', '2018-08-08', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'JUL', 0),
('N08', 'KTM UMN KINI DAPAT DIGUNAKAN SEBAGAI E-WALLET', '2018-06-06', 'Alvin Valenciano', 'https://dummyimage.com/600x400/000/fff', 'ASDADASDSASA', 0),
('N09', 'ASDDADADSADASASDSAA', '2016-06-05', 'Indra Gunawan', 'https://dummyimage.com/600x400/000/fff', 'DSADASASDASADA', 0),
('N10', 'KWAOWAKAWKOWAOK', '2018-02-02', 'KWOWKOKWO', 'https://dummyimage.com/600x400/000/fff', 'WKOWKWKO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_category_news`
--
ALTER TABLE `ms_category_news`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
