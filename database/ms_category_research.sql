-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 08:04 PM
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
-- Dumping data for table `ms_category_research`
--

INSERT INTO `ms_category_research` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('R01', 'Kelamaan Tidur', '2019-04-15', 'Wira Utama', 'https://dummyimage.com/600x400/000/fff.png', 'Kelamaan tidur membuat kita ngantuk dan mungkin akan membuat kita malas bergerak', NULL),
('R02', 'Makan Kebanyakan', '2019-07-02', 'Hitomi Mage', 'https://dummyimage.com/600x400/f00cf0/00ff99.png', 'Makan kebanyakan membuat kita menjadi gendut tetapi kadang ada yang tetap kurus.', NULL),
('R03', 'Kurang Minum', '2019-05-06', 'Mikhail Boris', 'https://dummyimage.com/1280x720/423542/00ff99.png', 'Kurang minum membuat manusia pasti menjadi dehidrasi', NULL),
('R04', 'Insomnia', '2019-08-14', 'Vito Naruta', 'https://dummyimage.com/1280x720/0dd8db/c94646.png', 'Kurangnya tidur membuat manusia semakin rentan, dan menjadi tidak fit', NULL),
('R05', 'Junk Food', '2019-07-10', 'Musashi', 'https://dummyimage.com/1280x720/0dd8db/bbc416.png', 'Junk Food enak tapi tidak sehat.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_category_research`
--
ALTER TABLE `ms_category_research`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
