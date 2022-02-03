-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2022 at 12:51 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int NOT NULL,
  `name_genre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `name_genre`) VALUES
(1, 'Classique'),
(2, 'Electro'),
(3, 'Jazz'),
(4, 'Pop'),
(5, 'Rap'),
(6, 'Reggae'),
(7, 'Rock');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id_track` int NOT NULL,
  `name_track` varchar(50) DEFAULT NULL,
  `url_track` text,
  `id_genre` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id_track`, `name_track`, `url_track`, `id_genre`) VALUES
(1, 'Vivaldi - Les quatres saisons', 'GRxofEmo3HA', 1),
(2, 'Beethoven - Symphonie au clair de lune', '4Tr0otuiQuU', 1),
(3, 'Chopin - Nocturne n°9', '9E6b3swbnWg', 1),
(4, 'Mozart - Rondo Alla Turca', 'quxTnEEETbo', 1),
(5, 'Liszt - La Campanella', 'H1Dvg2MxQn8', 1),
(6, 'Daft Punk - Around the world', 'K0HSD_i2DvA', 2),
(7, 'Liquido - Narcotic', 'PJ7E40Ec5ec', 2),
(8, 'Stromae - Alors on danse', 'VHoT4N43jK8', 2),
(9, 'Darude - Sandstorm', 'y6120QOlsfU', 2),
(10, 'Tiesto - Traffic!', '-qgzNwdkV4s', 2),
(11, 'Lucky Peterson - Honey Bee', 'UqY1lqrD5Ws', 3),
(12, 'Hiromi Uehara - Desire', 'EFeouD2IWSA', 3),
(13, 'Sing Sing Sing - Sing Sing Sing', '_napNH0D0Ws', 3),
(14, 'Newen Afrobeat - Opposite People ', 'mFSRCG4DrmI', 3),
(15, 'Gary B.B. Coleman - The Sky is Crying', '71Gt46aX9Z4', 3),
(16, 'Michael Jackson - Billie Jean', 'Zi_XLOBDo_Y', 4),
(17, 'Madonna - La Isla Bonita', 'zpzdgmqIHOQ', 4),
(18, 'Amy Winehouse - Back To Black', 'TJAfLE39ZZ8', 4),
(19, 'Lady Gaga - Bad Romance', 'qrO4YZeyl0I', 4),
(20, 'Ed Sheeran - Shape of You', 'JGwWNGJdvx8', 4),
(21, 'IAM - Demain c\'est loin', 'JaqLOsO6dTw', 5),
(22, 'NTM - Qu\'est ce qu\'on attends', 'duZh2lOgl5s', 5),
(23, 'Tupac - All Eyez on me', 'H1HdZFgR-aA', 5),
(24, 'Eminem - Lose Yourself', '_Yhyp-_hX2s', 5),
(25, 'Dr. Dre - Puppet Master', 'eTPjOgOaOl8', 5),
(26, 'Bob Marley - Could You Be Loved', 'pOm4MYha9jg', 6),
(27, 'Max Romeo - Chase The Devil', 'XcMNfX5yh28', 6),
(28, 'Groudation - Babylon Rule Dem', 'cUv4f3Bw73M', 6),
(29, 'Alpha Blondy - Jérusalem', 'WcqK9Ls7Eos', 6),
(30, 'Black Uhuru - Puff She Puff', 'DSRIxnLx-hs', 6),
(31, 'Leo Moracchioli - Dance Monkey ', 'rl9FFZZnWWo', 7),
(32, 'Dire Straits - Walk of life', 'kd9TlGDZGkI', 7),
(33, 'George Thorogood - Bad to the bone', 'dt_8aDOJvtM', 7),
(34, 'Metallica - Master Of Puppets', 'kV-2Q8QtCY4', 7),
(35, 'Genesis - Jesus he knows me', 'JXFXZGDMtqA', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `name_user` varchar(50) DEFAULT NULL,
  `first_name_user` varchar(50) DEFAULT NULL,
  `login_user` varchar(50) DEFAULT NULL,
  `pw_user` varchar(150) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `id_genre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `first_name_user`, `login_user`, `pw_user`, `email_user`, `id_genre`) VALUES
(1, 'root', 'root', 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'root@root.root', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id_track`),
  ADD KEY `fk_id_genre_track` (`id_genre`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_genre_user` (`id_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id_track` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `fk_id_genre_track` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_id_genre_user` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
