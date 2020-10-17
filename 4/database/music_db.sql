-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 04:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre_tb`
--

CREATE TABLE `genre_tb` (
  `id` int(3) NOT NULL,
  `name_genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre_tb`
--

INSERT INTO `genre_tb` (`id`, `name_genre`) VALUES
(1, 'Pop'),
(2, 'Jazz'),
(3, 'Koplo');

-- --------------------------------------------------------

--
-- Table structure for table `music_tb`
--

CREATE TABLE `music_tb` (
  `id` int(3) NOT NULL,
  `title` varchar(30) NOT NULL,
  `durasi` time NOT NULL,
  `id_genre` int(3) NOT NULL,
  `id_singer` int(3) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music_tb`
--

INSERT INTO `music_tb` (`id`, `title`, `durasi`, `id_genre`, `id_singer`, `photo`, `deskripsi`) VALUES
(1, 'Before You Go', '00:04:46', 1, 1, 'gambar1.jpg', 'I fell by the wayside like everyone else\r\nI hate you, I hate you, I hate you, but I was just kidding myself\r\nOur every moment, I start to replace\r\n\'Cause now that they\'re gone, all I hear are the words that I needed to say\r\nWhen you hurt under the surface\r\nLike troubled water running cold\r\nWell, time can heal, but this won\'t\r\nSo, before you go\r\nWas there something I could\'ve said to make your heart beat better?\r\nIf only I\'d have known you had a storm to weather\r\nSo, before you go\r\nWas there something I could\'ve said to make it all stop hurting?\r\nIt kills me how your mind can make you feel so worthless\r\nSo, before you go\r\nWas never the right time, whenever you called\r\nWent little by little by little until there was nothing at all\r\nOur every moment, I start to replay\r\nBut all…'),
(2, 'Let Her Go', '00:03:26', 2, 2, 'gambar2.jpg', 'Well you only need the light when it\'s burning low\r\nOnly miss the sun when it starts to snow\r\nOnly know you love her when you let her go\r\nOnly know you\'ve been high when you\'re feeling low\r\nOnly hate the road when you\'re missing home\r\nOnly know you love her when you let her go\r\nAnd you let her go\r\nStaring at the bottom of your glass\r\nHoping one day you\'ll make a dream last\r\nBut dreams come slow and they go so fast\r\nYou see her when you close your eyes\r\nMaybe one day you\'ll understand why\r\nEverything you touch surely dies\r\n\'Cause you only need the light when it\'s burning low\r\nOnly miss the sun when it starts to snow\r\nOnly know you love her when you let her go\r\nOnly know you\'ve been high when you\'re feeling low\r\nOnly hate the road when you\'re missing home\r\nOnly know you love…'),
(3, 'Keong Racun', '00:04:12', 2, 3, 'FOTO.jpg', 'dasar kau keong racun'),
(4, 'Darah Muda', '00:03:59', 1, 4, '112-1124968_samurai-tattoo-designs-kazuma-kiryu-dragon-tattoo-hd.png', ''),
(5, 'Semongko', '00:52:54', 3, 4, '129-1295001_custom-japanese-tattoo-you-are-my-life-by.png', 'Tarik sis... Semongko');

-- --------------------------------------------------------

--
-- Table structure for table `singers_tb`
--

CREATE TABLE `singers_tb` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singers_tb`
--

INSERT INTO `singers_tb` (`id`, `name`) VALUES
(1, 'Lewis Capaldi'),
(2, 'Passenger'),
(3, 'Nela Karisma'),
(4, 'H. Roma Irama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre_tb`
--
ALTER TABLE `genre_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music_tb`
--
ALTER TABLE `music_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singers_tb`
--
ALTER TABLE `singers_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre_tb`
--
ALTER TABLE `genre_tb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music_tb`
--
ALTER TABLE `music_tb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `singers_tb`
--
ALTER TABLE `singers_tb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
