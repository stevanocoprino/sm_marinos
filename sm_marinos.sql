-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 01:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm_marinos`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_nm` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `deskripsi_en` varchar(255) NOT NULL,
  `about_nm_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_nm`, `deskripsi`, `gambar`, `tahun`, `deskripsi_en`, `about_nm_en`) VALUES
(3, 'Perlengkapan Kelautan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '202302210809227005-3483794198b80fc3746a76760cde6966.jpeg', '2009-2011', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', 'Marine Equipment');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `welcome_text` varchar(255) NOT NULL,
  `beranda_id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `link_in` varchar(255) NOT NULL,
  `deskripsi_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`welcome_text`, `beranda_id`, `deskripsi`, `banner`, `link_fb`, `link_twitter`, `link_in`, `deskripsi_en`) VALUES
('MSM MARINOS', 1, 'INDONESIA', 'banner.png', 'https://facebook.com', 'https://twitter.com', 'https://linkedin.com', 'ENGLISH');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level_id`, `level_name`, `aktif`) VALUES
(99, 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `nama`, `username`, `userpass`, `email`, `aktif`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@sm-marinos.com', 1, 99);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_nm` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi_en` varchar(255) NOT NULL,
  `portfolio_nm_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_nm`, `deskripsi`, `gambar`, `kategori`, `deskripsi_en`, `portfolio_nm_en`) VALUES
(1, 'Pemilik Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260203117683-service1.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Vessel Owner'),
(3, 'Piagam Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260203255854-service2.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Vessel Charter'),
(4, 'Kru Marinir', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260203393693-service3.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Marine Crew'),
(5, 'Manajer Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260203525257-service4.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Vessel Manager'),
(6, 'Perbaikan Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260204072604-service5.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Vessel Repair'),
(7, 'Katering Laut', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260204206827-service6.PNG', 'services', 'We will provice the best service for customer satisfaction', 'Marine Catering');

-- --------------------------------------------------------

--
-- Table structure for table `previlege`
--

CREATE TABLE `previlege` (
  `previlege_id` int(11) NOT NULL,
  `controller_name` varchar(255) NOT NULL,
  `function_name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `previlege`
--

INSERT INTO `previlege` (`previlege_id`, `controller_name`, `function_name`, `level_id`, `aktif`) VALUES
(1, 'ALL', 'ALL', 99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_nm` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi_en` varchar(255) NOT NULL,
  `service_nm_en` varchar(255) NOT NULL,
  `title_ind` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_nm`, `deskripsi`, `logo`, `deskripsi_en`, `service_nm_en`, `title_ind`, `title_en`) VALUES
(2, 'Perlengkapan Kelautan', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260152473274-Capture.PNG', 'We will provide the best service for customer satisfaction', 'Marine Equipment', '', ''),
(5, 'Pencarteran Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260153516698-Capture2.PNG', 'We will provide the best service for customer satisfaction', 'Ship Chartering', '', ''),
(6, 'Penyewaan Makanan', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260154268832-Capture3.PNG', 'We will provide the best service for customer satisfaction', 'Food Chartering', '', ''),
(7, 'Logistik Kelautan', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260157032280-Capture4.PNG', 'We will provide the best service for customer satisfaction', 'Marine Logistics', '', ''),
(8, 'Bunker-Air Tawar', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260157233681-Capture5.PNG', 'We will provide the best service for customer satisfaction', 'Bunker-Fresh Water', '', ''),
(9, 'Konsultan', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260157373121-Capture6.PNG', 'We will provide the best service for customer satisfaction', 'Consultant', '', ''),
(10, 'Chandling Kapal', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260157488128-Capture7.PNG', 'We will provide the best service for customer satisfaction', 'Ship Chandling', '', ''),
(11, 'Ship Building', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260158016991-Capture8.PNG', 'We will provide the best service for customer satisfaction', 'Bangunan Kapal', '', ''),
(12, 'Perbaikan Teknis', 'Kami akan memberikan pelayanan yang terbaik demi kepuasan pelanggan', '202302260158149105-Capture9.PNG', 'We will provide the best service for customer satisfaction', 'Tecnical Repair', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `link_in` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `nama`, `profesi`, `link_fb`, `link_twitter`, `link_in`, `foto`) VALUES
(1, 'PENGAYOMAN', 'Administrasi Hukum Umum', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '202302260208101470-legal1.PNG'),
(2, 'OSS Kementerian Investasi/BKPM', 'Online Single Submission', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '202302260208455191-legal2.PNG'),
(3, 'Kementerian Perdagangan Republik Indonesia', 'Kementrian Perdagangan', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', '202302260209173971-legal3.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`beranda_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `previlege`
--
ALTER TABLE `previlege`
  ADD PRIMARY KEY (`previlege_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `beranda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `previlege`
--
ALTER TABLE `previlege`
  MODIFY `previlege_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
