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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
  `image_2` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_2` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_3` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_3` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_4` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_4` varchar(5000) COLLATE ascii_bin NOT NULL,
  `image_5` varchar(75) COLLATE ascii_bin NOT NULL,
  `content_5` varchar(5000) COLLATE ascii_bin NOT NULL,
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
INSERT INTO `ms_category_articles` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('A01', 'AUDIT DELAY DAN DAMPAKNYA BAGI PENGGUNA LAPORAN KEUANGAN', '2019-09-09', 'A', 'https://dummyimage.com/600x400/000/fff', 'Delay, atau penundanaan, bisa juga diartikan sebagai keterlambatan. Kapan dan dimana biasanya Anda mendengar istilah tersebut? Mungkin Anda mendengarnya di bandara, ketika Anda hendak bepergian menggunakan pesawat udara. Bagaimana perasaan Anda ketika mendengar tentang delay ini? Kesal, tentu saja, karena penerbangan Anda menjadi tertunda, waktu Anda menjadi terbuang percuma, terlebih lagi bila Anda mengejar waktu, Anda harus tiba di suatu tempat untuk tujuan bisnis atau pekerjaan.\r\n\r\nTahukah Anda, dalam dunia audit juga sering terjadi delay. Delay dalam audit, adalah keterlambatan penyelesaian laporan auditor independen oleh auditor yang mengaudit laporan keuangan klien. Apa dampak audit delay ini? Sebelum menjawab pertanyaan tersebut, kita pahami dahulu, fungsi dari laporan auditor independen. Laporan auditor independen merupakan laporan yang diberikan auditor sehubungan dengan penilaian atas laporan keuangan klien yang diaudit. Laporan auditor independen idealnya diselesaikan auditor paling lambat 90 hari setelah tanggal tutup buku laporan keuangan klien. Ketika klien (perusahaan) ingin mempublikasikan laporan keuangan, maka yang harus dipublikasi adalah laporan keuangan dan laporan auditor independen. Sehingga ketika laporan auditor independen mengalami keterlambatan, akan berdampak pada keterlambatan publikasi laporan keuangan. Bila laporan keuangan terlambat dipublikasi, maka dampaknya para pengguna laporan keuangan menjadi terlambat untuk menerima laporan keuangan. Padahal para pengguna, akan menggunakan laporan keuangan sebagai salah satu dasar dalam pengambilan keputusan, seperti keputusan investasi oleh investor atau pemberian kredit bagi kreditor.\r\n\r\nLantas apakah yang menyebabkan audit delay ini? Audit delay bisa disebabkan banyak hal, dan tidak dapat digeneralisir. Penyebabnya bisa jadi di pihak klien, maupun di pihak auditor. Misalnya klien yang kurang kooperatif, sehingga proses audit menjadi berjalan sangat lama. Auditor meminta klien untuk melakukan penyajian kembali atau restatement, karena banyak salah saji material yang ditemukan, dan klien merespon dengan lambat. Alasan lain, auditor menerima terlalu banyak klien, sehingga beban kerja menjadi menumpuk dan kerja auditor menjadi lama.\r\n\r\nDemikian kerugian dari audit delay. Bagaimana meminimalisir audit delay? Meminimalisir audit delay dapat dilakukan dengan komunikasi yang baik dengan klien. Auditor mengumpulkan bukti yang cukup ketika proses audit, sehingga ketika harus meminta klien melakukan revisi atau penyajian kembali laporan keuangan, buktinya lengkap, dan mengurangi waktu berdebat dengan klien. Auditor juga harus mengukur kemampuan diri sendiri dan tim auditnya, auditor menerima klien nya memang ruang lingkupnya merupakan keahlian dari auditor, menerima klien dengan jumlah yang dapat diselesaikan tepat waktu, tidak terlalu banyak, sampai menyebabkan work overload.\r\n\r\nTerima kasih semoga bermanfaat\r\n\r\nBLH', 0),
('A02', 'KWOKWOKW', '2019-02-02', 'KAKAKWK', 'https://dummyimage.com/600x400/000/fff', 'WKWKWKW', 0),
('A03', 'WKWKWK', '2016-10-10', 'WOWKOWW', 'https://dummyimage.com/600x400/000/fff', 'WOWOWOW', 0),
('A04', 'REKTREKT', '2015-12-02', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'REKT', 0),
('A05', 'AKWAKWK', '2015-10-02', 'Alvin Valenciano', 'https://dummyimage.com/600x400/000/fff', 'test123', 0),
('A06', 'UMNTV BERGABUNG DENGAN UMN RADIO', '2017-02-01', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'UMNTV', 0),
('A07', 'UMNRADIO BERGABUNG DENGAN ULTIMAGZ', '2010-06-02', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'UMNRADIO', 0),
('A08', 'CEH UMN BEKERJA SAMA DENGAN OSCP', '2016-05-05', 'Alvin Valenciano', 'https://dummyimage.com/600x400/000/fff', 'CEH', 0),
('A09', 'KRUNKER.IO BEKERJA SAMA DENGAN CSGO', '2017-02-05', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'CS', 0),
('A10', 'ALIVE UMN DIIKUTI OLEH 2000 ORANG', '2015-02-20', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'ALIVE', 0);

INSERT INTO `ms_category_accountingupdate` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('U01',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U02',	'Sword Art Online : Memory Defrag Menjadi Game #2 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U03',	'Sword Art Online : Memory Defrag Menjadi Game #3 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U04',	'Sword Art Online : Memory Defrag Menjadi Game #4 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U05',	'Sword Art Online : Memory Defrag Menjadi Game #5 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U06',	'Sword Art Online : Memory Defrag Menjadi Game #6 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U07',	'Sword Art Online : Memory Defrag Menjadi Game #7 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U08',	'Sword Art Online : Memory Defrag Menjadi Game #19 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U09',	'Sword Art Online : Memory Defrag Menjadi Game #32 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U10',	'Sword Art Online : Memory Defrag Menjadi Game #12 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U11',	'Sword Art Online : Memory Defrag Menjadi Game #2342 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('U12',	'Sword Art Online : Memory Defrag Menjadi Game #sadsa di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0);

INSERT INTO `ms_category_bookreview` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('B01',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B02',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B03',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B04',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B05',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B06',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B07',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B08',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B09',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B10',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B11',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('B12',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0);

INSERT INTO `ms_category_events` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('E01',	'KENNYC MENCAPAI SILVER 2 SETELAH 3 TAHUN BERMAIN CS:GO',	'2019-09-13',	'Alvin J',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E02',	'MBAKMAWAR BERHASIL MERAIH SKOR 5 - 0 MELAWAN KENNYC DALAM EVENT 1V1 AWP',	'2019-09-13',	'Alvin J',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E03',	'INTERNATIONAL CONFERENCE ON ACCOUNTING & MANAGEMENT 2019',	'2018-12-25',	'Kenny Cornelius',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E04',	'Singkirkan Avangar, Astralis Juara Turnamen CS:GO Berlin Major 2019',	'2019-09-05',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E05',	'OG Berhasil Merebut Title Back-To-Back TI Champion Setelah Mengalahkan Liquid di Grand Final TI 2019',	'2019-08-25',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E06',	'Apple Inc. Merilis Smart Car Berbasis C# Menggunakan Directional Light',	'2018-12-23',	'Alvin J',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E07',	'Aksi Demo Mahasiswa Indonesia Memilih E-Sports Sebagai Jalur Hidup Mereka',	'2019-09-20',	'Kenny Cornelius',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E08',	'Mahasiswa UMN Meraih Juara Lombat Panjat Pinang di Moscow',	'2018-10-23',	'Alvin J',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E09',	'Ence Mengundang Mbak Mawar, Salah Satu Player Naik Daun di Tangerang',	'2018-12-30',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'EZ4ENCE',	0),
('E10',	'BlackPink Datang ke UMN Mengikuti Acara Technofest 2019',	'2018-12-31',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E11',	'Sword Art Online : War Of The Underworld dikonfirmasi untuk rilin Bulan Oktober 2019',	'2019-08-25',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('E12',	'UMN Mengadakan Giveaway ASUS ROG',	'2018-12-23',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0);

INSERT INTO `ms_category_featured` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('F01',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F02',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F03',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F04',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F05',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F06',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F07',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F08',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F09',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F10',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F11',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0),
('F12',	'Sword Art Online : Memory Defrag Menjadi Game #1 di Play Store',	'2019-09-13',	'Alvin V',	'https://dummyimage.com/600x400/000/fff',	'Ini konten',	0);


INSERT INTO `ms_category_news` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('N01', 'MBAK JISOO MENGALAHKAN MBAK SUNBIN DENGAN SKOR 3-0 DI ESL MAJOR CSGO 2019', '2019-01-01', 'Mamang Rojak', 'https://dummyimage.com/600x400/000/fff', 'MBAK SUNBIN CUPU', 0),
('N02', 'CAPSA REBORN MENANG MELAWAN ASTRALIS DENGAN SKOR TELAK', '2017-09-09', 'Alvin Julian', 'https://dummyimage.com/600x400/000/fff', 'EZ', 0),
('N03', 'PEMINATAN ETHICAL HACKER DI UMN DIMINATI BANYAK MAHASISWA BARU', '2019-07-07', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'Mantap bois', 0),
('N04', 'ASUS MERILIS SMART CAR BERBASIS ANDROID', '2019-09-10', 'Miguel Gouwardi', 'https://dummyimage.com/600x400/000/fff', 'Asus', 0),
('N05', 'MAHASISWA INFORMATIKA UMN MERAIH GELAR SARJANA DKV', '2001-01-12', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'Minasan Konijiwa', 0),
('N06', 'INDONESIA MEMBUAT SENJATA NUKLIR PERTAMANYA', '2017-02-02', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'NUKLIR', 0),
('N07', 'ALVIN JULIAN BERENANG DARI SUNGAI CISADANE SAMPAI ANCOL', '2018-08-08', 'Kenny Cornelius', 'https://dummyimage.com/600x400/000/fff', 'JUL', 0),
('N08', 'KTM UMN KINI DAPAT DIGUNAKAN SEBAGAI E-WALLET', '2018-06-06', 'Alvin Valenciano', 'https://dummyimage.com/600x400/000/fff', 'ASDADASDSASA', 0),
('N09', 'ASDDADADSADASASDSAA', '2016-06-05', 'Indra Gunawan', 'https://dummyimage.com/600x400/000/fff', 'DSADASASDASADA', 0),
('N10', 'KWAOWAKAWKOWAOK', '2018-02-02', 'KWOWKOKWO', 'https://dummyimage.com/600x400/000/fff', 'WKOWKWKO', 0);

INSERT INTO `ms_category_research` (`id`, `title`, `date`, `publisher`, `cover_img`, `content`, `updated`) VALUES
('R01', 'Kelamaan Tidur', '2019-04-15', 'Wira Utama', 'https://dummyimage.com/600x400/000/fff.png', 'Kelamaan tidur membuat kita ngantuk dan mungkin akan membuat kita malas bergerak', NULL),
('R02', 'Makan Kebanyakan', '2019-07-02', 'Hitomi Mage', 'https://dummyimage.com/600x400/f00cf0/00ff99.png', 'Makan kebanyakan membuat kita menjadi gendut tetapi kadang ada yang tetap kurus.', NULL),
('R03', 'Kurang Minum', '2019-05-06', 'Mikhail Boris', 'https://dummyimage.com/1280x720/423542/00ff99.png', 'Kurang minum membuat manusia pasti menjadi dehidrasi', NULL),
('R04', 'Insomnia', '2019-08-14', 'Vito Naruta', 'https://dummyimage.com/1280x720/0dd8db/c94646.png', 'Kurangnya tidur membuat manusia semakin rentan, dan menjadi tidak fit', NULL),
('R05', 'Junk Food', '2019-07-10', 'Musashi', 'https://dummyimage.com/1280x720/0dd8db/bbc416.png', 'Junk Food enak tapi tidak sehat.', NULL);
