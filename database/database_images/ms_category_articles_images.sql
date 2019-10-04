-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


DROP TABLE IF EXISTS `ms_category_articles_images`;
CREATE TABLE `ms_category_articles_images` (
  `image_id` varchar(10) COLLATE ascii_bin NOT NULL,
  `page_id` varchar(10) COLLATE ascii_bin NOT NULL,
  `imageUrl` varchar(75) COLLATE ascii_bin NOT NULL,
  `content` varchar(2000) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;


-- 2019-10-04 05:06:34
