-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 02:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `ms_category_accountingupdate`
--

CREATE TABLE `ms_category_accountingupdate` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_articles`
--

CREATE TABLE `ms_category_articles` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `ms_category_articles`
--

INSERT INTO `ms_category_articles` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('br01', 'AUDIT DELAY DAN DAMPAKNYA BAGI PENGGUNA LAPORAN KEUANGAN', '2019-09-09', 'A', 'https://dummyimage.com/600x400/000/fff', 'Delay, atau penundanaan, bisa juga diartikan sebagai keterlambatan. Kapan dan dimana biasanya Anda mendengar istilah tersebut? Mungkin Anda mendengarnya di bandara, ketika Anda hendak bepergian menggunakan pesawat udara. Bagaimana perasaan Anda ketika mendengar tentang delay ini? Kesal, tentu saja, karena penerbangan Anda menjadi tertunda, waktu Anda menjadi terbuang percuma, terlebih lagi bila Anda mengejar waktu, Anda harus tiba di suatu tempat untuk tujuan bisnis atau pekerjaan.\r\n\r\nTahukah Anda, dalam dunia audit juga sering terjadi delay. Delay dalam audit, adalah keterlambatan penyelesaian laporan auditor independen oleh auditor yang mengaudit laporan keuangan klien. Apa dampak audit delay ini? Sebelum menjawab pertanyaan tersebut, kita pahami dahulu, fungsi dari laporan auditor independen. Laporan auditor independen merupakan laporan yang diberikan auditor sehubungan dengan penilaian atas laporan keuangan klien yang diaudit. Laporan auditor independen idealnya diselesaikan auditor paling lambat 90 hari setelah tanggal tutup buku laporan keuangan klien. Ketika klien (perusahaan) ingin mempublikasikan laporan keuangan, maka yang harus dipublikasi adalah laporan keuangan dan laporan auditor independen. Sehingga ketika laporan auditor independen mengalami keterlambatan, akan berdampak pada keterlambatan publikasi laporan keuangan. Bila laporan keuangan terlambat dipublikasi, maka dampaknya para pengguna laporan keuangan menjadi terlambat untuk menerima laporan keuangan. Padahal para pengguna, akan menggunakan laporan keuangan sebagai salah satu dasar dalam pengambilan keputusan, seperti keputusan investasi oleh investor atau pemberian kredit bagi kreditor.\r\n\r\nLantas apakah yang menyebabkan audit delay ini? Audit delay bisa disebabkan banyak hal, dan tidak dapat digeneralisir. Penyebabnya bisa jadi di pihak klien, maupun di pihak auditor. Misalnya klien yang kurang kooperatif, sehingga proses audit menjadi berjalan sangat lama. Auditor meminta klien untuk melakukan penyajian kembali atau restatement, karena banyak salah saji material yang ditemukan, dan klien merespon dengan lambat. Alasan lain, auditor menerima terlalu banyak klien, sehingga beban kerja menjadi menumpuk dan kerja auditor menjadi lama.\r\n\r\nDemikian kerugian dari audit delay. Bagaimana meminimalisir audit delay? Meminimalisir audit delay dapat dilakukan dengan komunikasi yang baik dengan klien. Auditor mengumpulkan bukti yang cukup ketika proses audit, sehingga ketika harus meminta klien melakukan revisi atau penyajian kembali laporan keuangan, buktinya lengkap, dan mengurangi waktu berdebat dengan klien. Auditor juga harus mengukur kemampuan diri sendiri dan tim auditnya, auditor menerima klien nya memang ruang lingkupnya merupakan keahlian dari auditor, menerima klien dengan jumlah yang dapat diselesaikan tepat waktu, tidak terlalu banyak, sampai menyebabkan work overload.\r\n\r\nTerima kasih semoga bermanfaat\r\n\r\nBLH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_bookreview`
--

CREATE TABLE `ms_category_bookreview` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_events`
--

CREATE TABLE `ms_category_events` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_featured`
--

CREATE TABLE `ms_category_featured` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

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

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_photos`
--

CREATE TABLE `ms_category_photos` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ms_category_research`
--

CREATE TABLE `ms_category_research` (
  `id` varchar(10) COLLATE ascii_bin NOT NULL,
  `title` varchar(100) COLLATE ascii_bin NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(20) COLLATE ascii_bin NOT NULL,
  `cover_img` varchar(75) COLLATE ascii_bin DEFAULT NULL,
  `content` varchar(5000) COLLATE ascii_bin NOT NULL,
  `updated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_category_accountingupdate`
--
ALTER TABLE `ms_category_accountingupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_articles`
--
ALTER TABLE `ms_category_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_bookreview`
--
ALTER TABLE `ms_category_bookreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_events`
--
ALTER TABLE `ms_category_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_featured`
--
ALTER TABLE `ms_category_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_news`
--
ALTER TABLE `ms_category_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_photos`
--
ALTER TABLE `ms_category_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_category_research`
--
ALTER TABLE `ms_category_research`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
