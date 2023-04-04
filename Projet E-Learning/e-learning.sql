-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2021 at 08:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Web Development'),
(3, 'Architecture ordinateurs'),
(5, 'Security'),
(6, 'Base de donneés');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `published_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `state` tinyint(1) NOT NULL,
  `youtube_link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_169E6FB912469DE2` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `category_id`, `image`, `title`, `description`, `published_at`, `state`, `youtube_link`) VALUES
(3, 2, '5b875e071aaf20cc5a6c4e2dae36d8c6284197ec', 'learn html', 'The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', '2021-12-07 14:37:00', 0, 'pQN-pnXPaVg'),
(4, 2, '1088f718b348b3ab3db1500b4e07e772ae1b892f', 'learn symfony', 'Symfony is a PHP web application framework and a set of reusable PHP components/libraries. It was published as free software on October 18, 2005 and released under the MIT license.', '2021-12-07 14:39:00', 0, 'Bo0guUbL5uo'),
(5, 5, '2e29b388d1d3b6d4a4b7ed010791ae07251431ed', 'Le protocole sécurisé SSL', 'SSL est un protocole de communication sécurisé qui supporte plusieurs services de sécurité. C\'est un protocole utilisé par les systèmes de paiement et de transaction en ligne se situant entre le protocole d\'application HTTP pour le Web et le protocole TCP/IP.', '2021-12-07 14:43:00', 0, 'cuR05y_2Gxc'),
(6, 3, 'a59ef8fc4d58a0b039fd145cd82faab5853c6a61', 'Arduino : premiers pas en informatique embarquée', 'Arduino is an open-source hardware and software company, project, and user community that designs and manufactures single-board microcontrollers and microcontroller kits for building digital devices.', '2021-12-08 14:48:00', 0, 'fJWR7dBuc18'),
(7, 6, '486341db7429898819dfefe92d6c597c3c48f0f9', 'SQL', 'SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system.', '2021-12-09 14:50:00', 0, 'HXV3zeQKqGY');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211225152021', '2021-12-25 15:20:37', 2673);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
CREATE TABLE IF NOT EXISTS `instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_blocked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `first_name`, `last_name`, `email`, `is_blocked`) VALUES
(1, 'maha', 'maalaoui', 'maalaouimaha@gmail.com', 0),
(2, 'Intissar', 'ElAhmer', 'elahmerintissar@gmail.com', 0),
(3, 'Tassnim', 'Hamouda', 'hamoudatassnim@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `learning_path`
--

DROP TABLE IF EXISTS `learning_path`;
CREATE TABLE IF NOT EXISTS `learning_path` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_path`
--

INSERT INTO `learning_path` (`id`, `title`) VALUES
(1, 'Devenir un data scientist');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(4, 'admin', '[\"ROLE_ADMIN\"]', '$2y$13$rlnCQ09LkfqaJI4BnHim3eziOY5Wi1.eLkolvpReLjti905BWIX6m');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `FK_169E6FB912469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
