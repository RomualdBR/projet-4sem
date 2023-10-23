-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2019 at 03:43 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safari`
--

-- --------------------------------------------------------

--
-- Table structure for table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `espece` varchar(40) NOT NULL,
  `taille` int(11) NOT NULL,
  `sexe` enum('M','F') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `enclos`;
CREATE TABLE IF NOT EXISTS `enclos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(400) NOT NULL,
  `niveau` enum('faible','moyen','haut') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `enclos_animaux`;
CREATE TABLE IF NOT EXISTS `enclos_animaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `id_enclot` int(11) NOT NULL,
  `date_entree` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `montant` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `espece`, `taille`, `sexe`) VALUES
(1, 'Ciara', 'Girafe', 287, 'M'),
(2, 'Yesenia', 'Girafe', 171, 'F'),
(3, 'Athena', 'Girafe', 262, 'M'),
(4, 'Cletus', 'Girafe', 102, 'M'),
(5, 'Clemmie', 'Girafe', 275, 'F'),
(6, 'Grace', 'Lion', 214, 'M'),
(7, 'Marco', 'Lion', 94, 'M'),
(8, 'Destinee', 'Lion', 144, 'F'),
(9, 'Garth', 'Lion', 222, 'F'),
(10, 'Missouri', 'Chèvre', 217, 'F'),
(11, 'Aidan', 'Chèvre', 138, 'M'),
(12, 'Margarett', 'Chèvre', 207, 'F'),
(13, 'Nickolas', 'Chèvre', 224, 'M'),
(14, 'Llewellyn', 'Orang-Outan', 70, 'M'),
(15, 'Cecile', 'Orang-Outan', 232, 'F'),
(16, 'Chadd', 'Orang-Outan', 134, 'F'),
(17, 'Brain', 'Faucon', 95, 'F'),
(18, 'Audie', 'Faucon', 267, 'F'),
(19, 'Billie', 'Faucon', 277, 'F'),
(20, 'Daryl', 'Faucon', 157, 'M'),
(21, 'Casimer', 'Léopard', 287, 'M'),
(22, 'Jazmyn', 'Léopard', 91, 'F'),
(23, 'Allene', 'Léopard', 183, 'F'),
(24, 'Jazlyn', 'Léopard', 226, 'M'),
(25, 'Monserrate', 'Pinguin', 228, 'M'),
(26, 'Muriel', 'Pinguin', 136, 'F'),
(27, 'Abelardo', 'Pinguin', 108, 'F'),
(28, 'Zackary', 'Pinguin', 283, 'F'),
(29, 'Kamron', 'Pinguin', 85, 'F'),
(30, 'Bessie', 'Elephant', 272, 'F'),
(31, 'May', 'Elephant', 196, 'M'),
(32, 'Libby', 'Elephant', 202, 'F'),
(33, 'Ebba', 'Elephant', 255, 'F'),
(34, 'Terrance', 'Hippopotame', 279, 'F'),
(35, 'Austen', 'Hippopotame', 271, 'M'),
(36, 'Raleigh', 'Hippopotame', 97, 'M'),
(37, 'Casimir', 'Hippopotame', 151, 'M'),
(38, 'Brenden', 'Hippopotame', 204, 'F'),
(39, 'Danial', 'Ours', 273, 'M'),
(40, 'Ettie', 'Ours', 247, 'M'),
(41, 'Kellie', 'Ours', 263, 'F'),
(42, 'Lyda', 'Ours', 288, 'F'),
(43, 'Zachariah', 'Ours', 273, 'M'),
(44, 'Barry', 'Ours', 289, 'M'),
(45, 'Adrain', 'Ours', 285, 'M'),
(46, 'Pat', 'T-Rex', 287, 'F'),
(47, 'Audie', 'T-Rex', 220, 'F'),
(48, 'Godfrey', 'T-Rex', 91, 'F'),
(49, 'Helena', 'T-Rex', 118, 'F'),
(50, 'Francesca', 'Biche', 168, 'M'),
(51, 'Hattie', 'Biche', 223, 'F'),
(52, 'Tyra', 'Biche', 190, 'M'),
(53, 'Maximilian', 'Biche', 72, 'M'),
(54, 'Casimer', 'Biche', 238, 'M'),
(55, 'Geovany', 'Biche', 217, 'M'),
(56, 'Gillian', 'Zèbre', 263, 'F'),
(57, 'Kristina', 'Zèbre', 195, 'M'),
(58, 'Trudie', 'Zèbre', 133, 'F'),
(59, 'Joaquin', 'Zèbre', 249, 'M'),
(60, 'Libby', 'Zèbre', 180, 'F'),
(61, 'Christina', 'Zèbre', 267, 'M'),
(62, 'Wilhelmine', 'Hyène', 196, 'F'),
(63, 'Norma', 'Hyène', 106, 'M'),
(64, 'Wilburn', 'Hyène', 105, 'F'),
(65, 'Ashton', 'Hyène', 115, 'F'),
(66, 'Juliana', 'Hyène', 131, 'M'),
(67, 'Leone', 'Hyène', 178, 'F'),
(68, 'Edyth', 'Crocodile', 284, 'F'),
(69, 'Dillon', 'Crocodile', 238, 'M'),
(70, 'Adrianna', 'Crocodile', 193, 'F'),
(71, 'Christy', 'Crocodile', 74, 'F'),
(72, 'Rosalia', 'Crocodile', 252, 'F'),
(73, 'Cassandre', 'Crocodile', 263, 'F'),
(74, 'Nelda', 'Anaconda', 83, 'F'),
(75, 'Hertha', 'Anaconda', 241, 'F'),
(76, 'Ross', 'Anaconda', 179, 'F'),
(77, 'Alyson', 'Anaconda', 273, 'F'),
(78, 'Clare', 'Anaconda', 120, 'F'),
(79, 'Milo', 'Anaconda', 150, 'F'),
(80, 'Elroy', 'Rhinocéros', 258, 'M'),
(81, 'Paige', 'Rhinocéros', 113, 'F'),
(82, 'Kaia', 'Rhinocéros', 81, 'F'),
(83, 'Francesco', 'Rhinocéros', 91, 'M'),
(84, 'Ignatius', 'Rhinocéros', 97, 'F'),
(85, 'Gina', 'Chimpanzé', 253, 'F'),
(86, 'Esta', 'Chimpanzé', 219, 'F'),
(87, 'Brannon', 'Chimpanzé', 185, 'M'),
(88, 'Arnold', 'Chimpanzé', 114, 'M'),
(89, 'Kristoffer', 'Chimpanzé', 77, 'M'),
(90, 'Hope', 'Chimpanzé', 63, 'F'),
(91, 'Shanon', 'Loup', 247, 'F'),
(92, 'Sydnie', 'Loup', 131, 'M'),
(93, 'Irma', 'Loup', 67, 'F'),
(94, 'Amy', 'Loup', 171, 'F'),
(95, 'Murphy', 'Loup', 102, 'M'),
(96, 'Emerald', 'Lapin', 70, 'M'),
(97, 'Lessie', 'Aigle', 248, 'M'),
(98, 'Keith', 'Lapin', 80, 'F'),
(99, 'Darron', 'Lapin', 70, 'F'),
(100, 'Saul', 'Aigle', 106, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `enclos`
--


--
-- Dumping data for table `enclos`
--

INSERT INTO `enclos` (`id`, `nom`, `niveau`) VALUES
(1, 'Brown', 'haut'),
(2, 'Bernier', 'haut'),
(3, 'Pfannerstill', 'moyen'),
(4, 'Bayer', 'faible'),
(5, 'Goyette', 'faible'),
(6, 'Haag', 'faible'),
(7, 'Veum', 'faible'),
(8, 'VonRueden', 'faible'),
(9, 'Jerde', 'haut'),
(10, 'Gusikowski', 'faible');

-- --------------------------------------------------------

--
-- Table structure for table `enclos_animaux`
--
--
-- Dumping data for table `enclos_animaux`
--

INSERT INTO `enclos_animaux` (`id`, `id_animal`, `id_enclot`, `date_entree`) VALUES
(1, 51, 9, '1999-10-18 00:21:54'),
(2, 23, 8, '2014-06-15 11:53:37'),
(3, 80, 7, '1998-12-21 21:56:08'),
(4, 17, 8, '2009-09-10 13:36:06'),
(5, 81, 6, '2012-12-03 02:09:20'),
(6, 18, 6, '2009-11-02 21:56:53'),
(7, 64, 10, '2012-09-04 03:24:43'),
(8, 69, 1, '2012-06-19 08:45:08'),
(9, 27, 10, '1988-03-19 23:00:07'),
(10, 71, 2, '1984-03-05 07:12:46'),
(11, 26, 3, '2011-08-08 22:59:26'),
(12, 70, 4, '1996-03-23 23:54:40'),
(13, 12, 8, '1992-07-03 13:37:40'),
(14, 39, 4, '1974-05-17 03:40:38'),
(15, 93, 6, '1985-03-27 18:30:56'),
(16, 95, 10, '1987-07-06 13:21:12'),
(17, 32, 5, '1978-09-05 01:24:14'),
(18, 33, 4, '1984-10-21 12:39:20'),
(19, 19, 9, '1973-04-18 23:51:23'),
(20, 3, 7, '2017-09-14 05:01:50'),
(21, 100, 2, '1991-04-18 12:49:51'),
(22, 91, 7, '1997-02-03 01:14:11'),
(23, 94, 10, '1988-05-22 07:37:31'),
(24, 28, 6, '2008-01-19 16:39:51'),
(25, 10, 9, '2016-04-01 21:08:23'),
(26, 54, 3, '2018-09-11 22:59:31'),
(27, 73, 2, '1973-12-26 09:34:05'),
(28, 44, 3, '1981-08-09 20:51:23'),
(29, 35, 3, '1973-12-23 23:18:55'),
(30, 75, 10, '1996-10-09 12:52:12'),
(31, 46, 10, '2011-12-02 04:26:25'),
(32, 37, 4, '1974-05-01 23:02:47'),
(33, 14, 5, '1990-12-27 00:22:16'),
(34, 29, 4, '2012-11-17 08:50:08'),
(35, 36, 1, '1979-08-18 09:27:50'),
(36, 21, 4, '1970-06-12 05:46:57'),
(37, 85, 1, '1989-02-08 04:40:45'),
(38, 52, 3, '1994-03-12 13:52:05'),
(39, 30, 2, '2007-11-02 10:28:56'),
(40, 72, 2, '1984-11-17 02:17:46'),
(41, 55, 10, '2004-04-24 00:21:03'),
(42, 79, 5, '2013-02-09 17:51:11'),
(43, 97, 4, '2012-01-12 15:13:10'),
(44, 86, 9, '2002-10-07 08:58:15'),
(45, 13, 9, '1979-06-24 21:17:06'),
(46, 59, 3, '2007-08-03 15:46:36'),
(47, 66, 1, '2013-06-11 02:49:23'),
(48, 40, 4, '2001-01-10 18:42:18'),
(49, 34, 4, '2004-07-17 21:09:55'),
(50, 42, 1, '2014-08-20 13:05:21'),
(51, 20, 2, '1988-01-03 01:30:23'),
(52, 7, 8, '1991-12-30 00:30:09'),
(53, 38, 10, '2018-05-09 23:24:59'),
(54, 4, 6, '2017-04-17 10:15:38'),
(55, 15, 7, '1975-02-12 16:31:42'),
(56, 9, 2, '1978-10-26 12:03:54'),
(57, 77, 6, '1979-10-23 10:08:03'),
(58, 5, 10, '2013-08-23 09:56:16'),
(59, 45, 7, '2016-08-04 04:42:38'),
(60, 49, 1, '1982-08-28 19:17:02'),
(61, 99, 4, '2001-06-20 10:57:51'),
(62, 78, 9, '2017-03-18 15:05:54'),
(63, 50, 4, '1982-12-06 22:13:03'),
(64, 83, 6, '2013-11-26 10:07:54'),
(65, 1, 2, '1995-07-20 01:06:34'),
(66, 41, 8, '1986-02-07 23:28:36'),
(67, 61, 1, '1976-09-09 17:20:30'),
(68, 58, 10, '2002-06-20 20:24:31'),
(69, 84, 7, '2015-02-28 09:55:02'),
(70, 89, 9, '2002-10-09 17:04:26'),
(71, 60, 4, '1975-10-26 13:06:09'),
(72, 31, 8, '2009-12-24 20:49:58'),
(73, 22, 10, '1972-07-30 14:15:51'),
(74, 88, 6, '1997-07-19 06:18:51'),
(75, 48, 5, '1994-05-14 09:07:19'),
(76, 92, 9, '1980-08-02 04:32:22'),
(77, 25, 5, '2005-07-07 05:32:25'),
(78, 6, 10, '2006-01-15 11:38:05'),
(79, 53, 10, '1997-12-23 14:39:09'),
(80, 16, 5, '1978-08-21 10:39:01'),
(81, 56, 4, '1974-10-18 00:35:01'),
(82, 65, 4, '1976-03-17 19:13:16'),
(83, 43, 8, '1985-06-26 00:34:53'),
(84, 47, 2, '1974-05-19 19:48:13'),
(85, 90, 4, '2017-04-23 04:26:51'),
(86, 87, 9, '1971-02-16 22:08:24'),
(87, 62, 7, '2017-12-16 22:12:20'),
(88, 68, 2, '1997-07-04 16:58:08'),
(89, 74, 5, '2016-09-30 03:01:43'),
(90, 67, 9, '1987-04-30 20:53:50'),
(91, 96, 5, '2011-04-01 13:56:51'),
(92, 11, 4, '1994-12-10 17:32:39'),
(93, 98, 10, '1984-03-06 00:00:52'),
(94, 82, 2, '1988-10-20 22:02:17'),
(95, 24, 3, '1979-04-09 19:59:30'),
(96, 63, 6, '1986-08-21 23:37:53'),
(97, 57, 10, '1982-02-14 17:42:11'),
(98, 76, 3, '1971-11-17 06:41:42'),
(99, 8, 4, '2009-05-08 15:50:21'),
(100, 2, 7, '1982-04-08 02:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `historique`
--


--
-- Dumping data for table `historique`
--

INSERT INTO `historique` (`id`, `date`, `montant`) VALUES
(1, '2007-01-04', 13.91),
(2, '1987-05-23', 42.37),
(3, '2018-05-17', 35.25),
(4, '2015-07-16', 40.46),
(5, '1982-01-05', 27.73),
(6, '1996-02-14', 36.41),
(7, '2001-09-12', 48.55),
(8, '2001-05-13', 49.81),
(9, '1992-01-25', 53.70),
(10, '2011-01-06', 47.60),
(11, '2009-07-14', 55.98),
(12, '1982-11-12', 21.75),
(13, '2006-08-04', 73.35),
(14, '1975-04-15', 42.86),
(15, '1999-06-10', 78.82),
(16, '1991-10-25', 20.98),
(17, '2011-10-16', 43.87),
(18, '1984-08-09', 68.89),
(19, '1999-07-31', 20.38),
(20, '1975-07-15', 59.91),
(21, '1972-03-15', 27.80),
(22, '1988-11-21', 62.15),
(23, '2015-05-17', 64.54),
(24, '1996-07-12', 89.65),
(25, '2000-09-18', 60.03),
(26, '1993-08-20', 68.83),
(27, '1973-03-22', 30.49),
(28, '1975-05-16', 30.80),
(29, '1980-01-11', 67.91),
(30, '1993-11-21', 27.18),
(31, '1990-04-10', 63.57),
(32, '1995-10-03', 56.14),
(33, '1980-01-20', 75.46),
(34, '1987-09-02', 37.60),
(35, '2016-08-15', 31.84),
(36, '1972-12-10', 76.33),
(37, '1980-03-28', 39.96),
(38, '2000-04-25', 27.43),
(39, '2006-03-28', 39.09),
(40, '1994-05-28', 85.23),
(41, '1990-06-28', 48.86),
(42, '2016-01-06', 64.44),
(43, '2013-09-14', 20.74),
(44, '2002-11-11', 63.58),
(45, '1979-05-22', 79.52),
(46, '2007-12-25', 16.63),
(47, '2012-04-01', 78.00),
(48, '2014-02-24', 46.81),
(49, '1991-06-12', 64.62),
(50, '1999-10-20', 55.00),
(51, '2003-01-31', 25.98),
(52, '1992-01-28', 41.91),
(53, '2015-10-21', 80.95),
(54, '2011-11-11', 79.36),
(55, '1997-07-18', 17.79),
(56, '1975-10-09', 70.70),
(57, '2001-01-16', 83.33),
(58, '2015-03-18', 63.63),
(59, '1978-12-31', 65.91),
(60, '1990-05-01', 42.57),
(61, '2001-05-03', 72.60),
(62, '1990-06-01', 25.29),
(63, '1974-02-24', 35.35),
(64, '2006-06-28', 30.92),
(65, '1989-10-25', 42.91),
(66, '1985-12-20', 72.12),
(67, '2016-03-19', 63.37),
(68, '2002-09-02', 19.34),
(69, '1976-01-16', 57.09),
(70, '2013-01-30', 52.32),
(71, '2009-12-06', 46.14),
(72, '1977-10-01', 61.66),
(73, '1997-06-15', 44.08),
(74, '1974-07-22', 74.94),
(75, '1996-09-27', 81.58),
(76, '2016-11-02', 14.19),
(77, '2008-07-01', 61.74),
(78, '2012-12-05', 79.59),
(79, '1992-07-12', 15.28),
(80, '2014-09-06', 68.83),
(81, '2011-12-23', 88.97),
(82, '1979-09-11', 79.65),
(83, '2013-05-13', 42.19),
(84, '2016-07-16', 10.30),
(85, '1976-06-06', 83.60),
(86, '2009-07-10', 64.89),
(87, '1977-10-30', 23.06),
(88, '1970-11-15', 66.41),
(89, '1982-01-23', 51.29),
(90, '1983-05-22', 51.45),
(91, '1974-07-02', 51.48),
(92, '1987-12-12', 15.49),
(93, '2001-08-10', 73.20),
(94, '1982-04-18', 43.35),
(95, '1983-05-27', 73.91),
(96, '2002-02-14', 28.13),
(97, '1982-05-17', 84.91),
(98, '2000-11-24', 47.79),
(99, '1991-12-12', 24.54),
(100, '2014-05-22', 52.64);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Story 1

SELECT A.nom, H.date
FROM historique AS H
LEFT JOIN animaux AS A
ON A.nom = H.id
WHERE H.date < 2003-01-01;

-- Story 2 

SELECT A.espece, E.nom
FROM animaux AS A
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
LEFT JOIN enclos AS E
ON EA.id_enclot = E.id
WHERE A.espece = "Girafe";

-- Story 3 

SELECT A.espece, E.niveau
FROM animaux AS A 
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
LEFT JOIN enclos AS E 
ON EA.id_enclot = E.id
WHERE A.espece = "Lion" OR A.espece = "Orang-Outan";

-- Story 4 

SELECT A.espece, A.taille, H.date
FROM animaux AS A 
LEFT JOIN historique AS H
ON A.id = H.id
WHERE A.espece = "Elephant" AND A.taille >= "130" AND H.date < "2010-12-01";

-- Story 5 

SELECT E.niveau, COUNT(EA.id_animal) AS nombre_animal
FROM enclos AS E
LEFT JOIN enclos_animaux AS EA
ON E.id = EA.id_enclot
WHERE E.niveau = "Moyen";

-- Story 6 

SELECT A.espece, A.sexe
FROM animaux AS A
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
WHERE A.espece = "Faucon" AND A.sexe = "M"
ORDER BY EA.date_entree ASC;

-- Story 7 

SELECT A.espece,EA.date_entree, TIMESTAMPDIFF(month,EA.date_entree,NOW()) AS nombre_mois
FROM animaux AS A 
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
WHERE A.espece = "Chevre" OR A.espece = "Pinguin" 
ORDER BY EA.date_entree DESC;

-- Story 8 

SELECT A.espece, SUM(A.taille)
FROM animaux AS A
WHERE A.espece = "Zebre" OR A.espece = "Lion" OR A.espece = "Pinguin"
GROUP BY A.espece;

-- Story 9 

SELECT YEAR(H.date) AS years, SUM(H.montant)
FROM historique AS H
GROUP BY years
ORDER BY h.date ASC;

-- Story 10

SELECT YEAR(EA.date_entree) AS years,CONCAT(COUNT(A.id)) AS nombre_animal 
FROM enclos_animaux AS EA 
LEFT JOIN animaux AS A
ON EA.id_animal = A.id
GROUP BY years
ORDER BY EA.date_entree; 


-- Story 11

SELECT A.nom,TIMESTAMPDIFF(YEAR,EA.date_entree,NOW()) AS Age_animal, A.sexe, A.espece, E.nom
FROM animaux AS A
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
LEFT JOIN enclos AS E
ON EA.id_enclot = E.id
GROUP BY Age_animal DESC limit 1;

-- Story 12 

SELECT A.nom,TIMESTAMPDIFF(YEAR,EA.date_entree,NOW()) AS Age_animal, A.sexe, A.espece, E.nom
FROM animaux AS A
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
LEFT JOIN enclos AS E
ON EA.id_enclot = E.id
GROUP BY Age_animal ASC limit 1;

-- Story 13

SELECT A.*, TIMESTAMPDIFF(YEAR,EA.date_entree,NOW()) AS Age_animal
FROM animaux AS A
LEFT JOIN enclos_animaux AS EA
ON A.id = EA.id_animal
LEFT JOIN enclos AS E
ON EA.id_enclot = E.id
WHERE E.nom = "VonRueden" AND A.sexe = "F" AND YEAR(EA.date_entree) > 4
ORDER BY A.espece ASC, YEAR(EA.date_entree) DESC;

-- Story 14

SELECT MAX(H.montant) AS Gains, H.date,
        SUM(CASE WHEN A.espece = 'Girafe' THEN 1 ELSE 0 END) AS NombreGirafes,
           SUM(CASE WHEN A.espece = 'Lion' THEN 1 ELSE 0 END) AS NombreLions,
           SUM(CASE WHEN A.espece = 'Chevre' THEN 1 ELSE 0 END) AS NombreChèvres,
           SUM(CASE WHEN A.espece = 'Hippopotame' THEN 1 ELSE 0 END) AS NombbreHippo
FROM animaux AS A
LEFT JOIN historique AS H
ON H.id = A.id
group by year(h.date)
order by Gains desc limit 1;

SELECT MIN(H.montant) AS Gains, H.date,
        SUM(CASE WHEN A.espece = 'Girafe' THEN 1 ELSE 0 END) AS NombreGirafes,
           SUM(CASE WHEN A.espece = 'Lion' THEN 1 ELSE 0 END) AS NombreLions,
           SUM(CASE WHEN A.espece = 'Chevre' THEN 1 ELSE 0 END) AS NombreChèvres,
           SUM(CASE WHEN A.espece = 'Hippopotame' THEN 1 ELSE 0 END) AS NombbreHippo
FROM animaux AS A
LEFT JOIN historique AS H
ON H.id = A.id
group by year(h.date)
order by Gains ASC limit 1