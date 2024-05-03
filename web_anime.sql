-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 12:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime_list`
--

CREATE TABLE `anime_list` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `japanese_title` varchar(50) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `videos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime_list`
--

INSERT INTO `anime_list` (`id`, `title`, `japanese_title`, `sinopsis`, `image`, `videos`) VALUES
(1, 'Wind Breaker', 'Wind Breaker', 'Where the average scores are the lowest, but the fights are the strongest. Furin High School is renowned as a super school of delinquents. Haruka Sakura, a first-year student, came from outside the city to fight to the top. However, Furin High School has become a group that protects the town called the “Chime of the Wind Breaker” – Bofurin. The heroic legend of high school delinquent Sakura begins here!', 'image_1.png', ''),
(2, 'Viral Hit', 'Kenka Dokugaku', 'Scrawny high school student Hobin Yu is probably the last guy you’d expect to star in a NewTube channel that revolves around fighting. But after following some advice from a mysterious NewTube channel, Hobin is soon knocking out guys stronger than him and raking in more money than he could have ever dreamed of. Can Hobin keep this up, or will he eventually meet his match?', '6fe9673824ff84244584ba2b055e188238eb9a34423a76eee316b6b7f63e25b6.png', 'asd'),
(5, 'The Many Sides of Voice Actor Radio', 'Seiyuu Radio no Uraomote', 'Yuuhi Yuugure and Yasumi Utatane, both enthusiasts of voice acting and high school students, find themselves in the same class and begin to collaborate on a radio program every week. Although they exhibit effortless compatibility on-air, their rapport outside of the recording studio is far from friendly. Chika, a reserved individual, and the outgoing Yumiko often engage in arguments and hurl insults when not on the air. The evolution of their association is unpredictable, leaving its outcome unclear.', '46a5d6fa6daf66a4a5ecc372517c82ba7ecf4d19e3ee57c2e2afea82e3e13623.png', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime_list`
--
ALTER TABLE `anime_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime_list`
--
ALTER TABLE `anime_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
