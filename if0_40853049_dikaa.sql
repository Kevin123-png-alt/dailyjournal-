-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.infinityfree.com
-- Generation Time: Jan 14, 2026 at 01:44 PM
-- Server version: 11.4.9-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_40853049_dikaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Akuisisi Saham', 'pt.barito grup akan mengakusisi saham', 'cbre.png', '2026-01-14', 'admin'),
(7, 'Strategi Investasi 2026', 'Menghadapi dinamika pasar global, diversifikasi portofolio ke sektor teknologi hijau dan energi terbarukan menjadi kunci pertumbuhan aset jangka panjang.', '', '2026-01-14', 'admin'),
(8, 'Manfaat Jurnal Harian', 'Menulis jurnal setiap hari terbukti mampu menurunkan tingkat stres, meningkatkan fokus, dan membantu seseorang melacak progres pertumbuhan diri secara berkala.', '', '2026-01-14', 'admin'),
(9, 'Eksplorasi Kuliner Lokal', 'Menelusuri kekayaan cita rasa tradisional di Jawa Tengah, mulai dari teknik memasak pengasapan hingga penggunaan rempah autentik yang diwariskan turun-temurun.', '', '2026-01-14', 'admin'),
(10, 'Tips Produktivitas Remote', 'Bekerja dari rumah membutuhkan disiplin tinggi. Penggunaan teknik Pomodoro dan pengaturan ruang kerja yang ergonomis sangat membantu menjaga performa kerja.', '', '2026-01-14', 'admin'),
(11, 'Pentingnya Literasi Digital', 'Di era banjir informasi, kemampuan memvalidasi sumber data dan menjaga keamanan privasi data pribadi di internet adalah keterampilan wajib bagi setiap individu.', '', '2026-01-14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama`, `gambar`, `tanggal`, `username`) VALUES
(5, 'foto1', '20260114222151.jpg', '2026-01-14', 'admin'),
(9, 'foto2', '20260114222203.png', '2026-01-14', 'admin'),
(10, 'foto3', '20260114222213.jpg', '2026-01-14', 'admin'),
(11, 'foto4', '20260114222227.png', '2026-01-14', 'admin'),
(12, 'foto5', '20260114222238.png', '2026-01-14', 'admin'),
(13, 'foto6', '20260114222250.jpg', '2026-01-14', 'admin'),
(15, 'foto7', '20260114223011.jpg', '2026-01-14', 'admin'),
(17, 'foto8', '20260114233257.jpg', '2026-01-14', 'admin'),
(22, 'foto999', '20260115005412.jpg', '2026-01-15', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20260114222605.jpg'),
(13, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20260114222550.jpg'),
(14, 'kepin', '111875efb728b2b778b49df6c4edae3d', '20260114222449.jpg'),
(15, 'karmaa', '32df310a5a495171fad3d8a29850ae45', '20260114222429.jpg'),
(16, 'perjuu', '827ccb0eea8a706c4c34a16891f84e7b', '20260114222418.jpg'),
(17, 'owo', '827ccb0eea8a706c4c34a16891f84e7b', '20260114223946.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
