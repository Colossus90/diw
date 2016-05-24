-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 01:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diw`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `fk_createpost_id` int(11) NOT NULL,
  `fk_users_id` int(11) NOT NULL,
  `fk_comment_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createpost`
--

CREATE TABLE `createpost` (
  `id` int(100) NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titel` varchar(100) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `inleiding` varchar(300) NOT NULL,
  `paragraaf` varchar(3000) NOT NULL,
  `fk_user_id` int(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `createpost`
--

INSERT INTO `createpost` (`id`, `pdate`, `titel`, `categorie`, `inleiding`, `paragraaf`, `fk_user_id`, `photo`) VALUES
(1, '2016-05-23 21:21:46', 'sdfsdfsdf', 'binnenland', 'sdfsdffsd', 'sdfsdfsdf', 10, '10-1464038506-'),
(2, '2016-05-23 21:49:57', 'sdfsdfsdf', 'binnenland', 'sdfsdffsd', 'sdfsdfsdf', 10, '10-1464040197-'),
(3, '2016-05-23 21:50:23', 'sdfsdfsdf', 'binnenland', 'sdfsdffsd', 'sdfsdfsdf', 10, '10-1464040223-'),
(4, '2016-05-23 21:50:34', 'fddfdf', 'binnenland', 'dfdfd', 'dfdffd', 10, '10-1464040234-'),
(5, '2016-05-23 21:52:43', 'dfdfdf', 'binnenland', 'dfdfdf', 'dffddf', 10, '10-1464040363-'),
(6, '2016-05-23 21:56:08', 'dfdfdf', 'binnenland', 'dfdfdf', 'dfdffd', 10, '10-1464040568-MUFm4xN.jpg'),
(7, '2016-05-24 17:53:07', 'Dit is een aa', 'wetenschap', 'Ik meen het', 'echt een aap', 10, '10-1464112387-monkey-smile.jpg'),
(8, '2016-05-24 19:27:36', 'Project', 'technologie', 'Ik ben blij dat jij in mijn team zit', 'Echt waar hoor', 10, '10-1464118056-Guidopall.jpg'),
(9, '2016-05-24 22:21:04', 'de ideale wereld -Dinsdag 24 mei 2016', 'afleveringen', 'Hoog bezoek: vicepremier en minister van Werk en Economie Kris Peeters (CD&V) is te gast in De Ideale Wereld met Otto-Jan Ham, Jelle De Beule en Sven De Leijer.', 'VIDEO', 10, '10-1464128330-319ca695-21f6-11e6-8682-00163edf843f.jpg'),
(10, '2016-05-24 22:23:54', 'de ideale wereld -Donderdag 19 mei 2016', 'afleveringen', 'Hij is journalist, hoofdredacteur van de Nederlandse krant NRC Handelsblad, columnist, ... U raadt het: Peter Vandermeersch is te gast in De Ideale Wereld.', 'VIDEO', 10, '10-1464128563-e1a7a319-1dfd-11e6-8682-00163edf843f.jpg'),
(11, '2016-05-24 22:28:37', 'de ideale wereld - Dinsdag 17 mei 2016', 'afleveringen', 'Actrice Chris Lomme, bekend van de film Achter De Wolken is te gast in De Ideale Wereld. Otto-Jan Ham en Jelle De Beule schotelen haar onder andere de staking van de cipiers en de Belgische fraudebestrijding voor.', 'VIDEO', 10, '10-1464128841-945c4e50-1c74-11e6-8682-00163edf843f.jpg'),
(12, '2016-05-24 22:38:58', 'fghhfgfgh', 'binnenland', 'fghfghfgh', 'fghfghfgh', 10, '10-1464129538-e1a7a319-1dfd-11e6-8682-00163edf843f.jpg'),
(13, '2016-05-24 22:43:06', 'dfdfdf', 'binnenland', 'dfdfdffddf', 'dffddfdf', 10, '10-1464129786-Capture.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `upvote`
--

CREATE TABLE `upvote` (
  `id` int(11) NOT NULL,
  `fk_post_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `uptime` datetime NOT NULL,
  `upvotes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `photo`) VALUES
(1, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'jens.mollen@gmail.com', '/'),
(2, 'DIW', '5f4dcc3b5aa765d61d8327deb882cf99', 'contact@vrt.be', '/'),
(8, 'dfdfdf', '$2y$12$xNCO3hUcEres6h5laJlbmu1V/8DhXWYcpl/2CGRsw6NjRZCIgkXU.', 'dfg@gmail.com', ''),
(9, 'Jens', '$2y$12$5IDkDd863TqT8iukIqBjXu4PWSTAMSx0eMQZdN13Hd5unTkIVxhHq', 'jens.mollen@gmail.com', ''),
(10, 'Jens2', '$2y$12$454QHxyJEZeOS48NYQX0S.p/onD0r2i8RHmq0G0ZDHUBI/aEjJx5S', 'jens.mollen@gmail.com', ''),
(11, 'dfdf', '$2y$12$RYPGymxmy8IMumD2m4t6cueY5OC/eIaEZXFsVWolclA5BIzR5Teoq', 'dfg@gmail.com', ''),
(12, '207', '$2y$12$zgZQyjIQOMCqSGaBFmYhleLG752N4zw7.KjSelJGVejyONZ0G01cu', 'fdfd@dd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createpost`
--
ALTER TABLE `createpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upvote`
--
ALTER TABLE `upvote`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `createpost`
--
ALTER TABLE `createpost`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `upvote`
--
ALTER TABLE `upvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
