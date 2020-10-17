-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 sep. 2020 à 23:56
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `port3`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `objet` varchar(60) NOT NULL,
  `message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contct`
--

CREATE TABLE `contct` (
  `id` int(30) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contct`
--

INSERT INTO `contct` (`id`, `date`, `name`, `email`, `objet`, `message`) VALUES
(8, '0000-00-00', 'MOUHSINE ECH CHOUFI', 'ech.mouhsine@gmail.com', 'ffffff', 'dqCCDCD'),
(9, '0000-00-00', 'name', 'echmouhsine1994@gmail.com', 'demande', ''),
(10, '0000-00-00', 'abdsamade', 'echmouhsine1994@gmail.com', 'demande', 'frfrfrzfzr'),
(11, '0000-00-00', 'ECH-CHOUFI Mouhsine', 'echmouhsine1994@gmail.com', 'demande', 'lknlfkv,mfd'),
(12, '0000-00-00', 'ECH-CHOUFI Mouhsine', 'echmouhsine1994@gmail.com', 'demande', 'lknlfkv,mfd'),
(13, '0000-00-00', 'mery', 'mery@gmail.com', 'demande', 'mmdl,qdmlk,cklfnklerngtlknbtrb'),
(14, '2020-09-03', 'mouhsinr', 'echmouhsine1994@gmail.com', 'congé', 'lvlefg,refre rpfokrgfrmkf erge');

-- --------------------------------------------------------

--
-- Structure de la table `experience_professionelle`
--

CREATE TABLE `experience_professionelle` (
  `id` int(20) NOT NULL,
  `post` varchar(100) NOT NULL,
  `anne` varchar(50) NOT NULL,
  `experience1` varchar(200) NOT NULL,
  `experience2` varchar(200) NOT NULL,
  `experience3` varchar(200) NOT NULL,
  `experience4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience_professionelle`
--

INSERT INTO `experience_professionelle` (`id`, `post`, `anne`, `experience1`, `experience2`, `experience3`, `experience4`) VALUES
(1, 'Stage d’observation au sein d’OCP de youssoufia (l\' usine séchage)', '01/04/2018 – 31/05/ 2018', 'Cablage d\'un moteur asynchrone triphasé.', 'Programmation et supervision de la table tournante C402.', 'Programmation et supervision des convoyeurs par automate Allen Bradley.', 'Réparation bobinage moteur électrique.'),
(2, 'Stage d’observation au sein d’OCP (l\' usine calcination)', '01/07/2017 – 30/07/ 2017', 'Cablage d\'un moteur asynchrone triphasé.', 'Programmation et supervision de la table tournante C402.', 'Programmation et supervision des convoyeurs par automate Allen Bradley.', 'Réparation bobinage moteur électrique.');

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(20) NOT NULL,
  `specialiste` varchar(50) NOT NULL,
  `anne` varchar(50) NOT NULL,
  `ecole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `specialiste`, `anne`, `ecole`) VALUES
(1, 'WEB DÉVELOPPEUR', '2019 - à nos jours', 'Youcode Youssofia'),
(2, 'DUT en Génie Industrielle  & Maintenance', '2015-2018', 'Ecole supérieur de technologie de Meknès'),
(5, 'Diplôme Baccalauréat Sciences  & Technologies', '2014-2015', 'Jaber Ibn Hayan');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `ecole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`ecole`) VALUES
('Youcode Youssofia'),
('Faculté hassan II Mo'),
('Youcode Youssofia'),
('Faculté hassan II Mo');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'mouhsine', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(30) NOT NULL,
  `image` varchar(80) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `lien_github` varchar(80) NOT NULL,
  `lien_site` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `titre`, `lien_github`, `lien_site`) VALUES
(1, 'assets/img/portfolio/portfolio-1.jpg', 'gestion de congé', 'https://github.com/ech-mou/gestion-de-cong-', 'https://www.youtube.com/'),
(2, 'assets/img/portfolio/portfolio-2.jpg', 'green fondation', 'https://github.com/Ned-med/Green_Foundation_dev', 'https://greenfound.ml/'),
(3, 'assets/img/portfolio/portfolio-1.jpg', 'gestion de congé', 'https://github.com/ech-mou/gestion-de-cong-', 'https://www.google.com/'),
(4, 'assets/img/portfolio/portfolio-2.jpg', 'green fondation', 'https://github.com/Ned-med/Green_Foundation_dev', 'https://greenfound.ml/'),
(6, 'assets/img/portfolio/portfolio-6.jpg', 'portfolio_test', 'https://github.com/', 'https://github.com/'),
(7, 'assets/img/portfolio/portfolio-8.jpg', 'abdo', 'https://github.com/', 'https://github.com/'),
(8, 'assets/img/portfolio/portfolio-9.jpg', 'fayaze', 'https://github.com/', 'https://github.com/');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(30) NOT NULL,
  `competent` varchar(40) NOT NULL,
  `pourcentage` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `competent`, `pourcentage`) VALUES
(1, 'HTML', '100'),
(2, 'CSS', '80'),
(3, 'JS', '50'),
(8, 'PHP', '80'),
(16, 'laravel', '20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contct`
--
ALTER TABLE `contct`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience_professionelle`
--
ALTER TABLE `experience_professionelle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `contct`
--
ALTER TABLE `contct`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `experience_professionelle`
--
ALTER TABLE `experience_professionelle`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
