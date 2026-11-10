-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 07 Mai 2024 à 20:40
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_utilisateur`, `contenu`, `id_produit`) VALUES
(1, 1, ' JOLI', 1),
(2, 2, ' k', 1),
(3, 1, ' utile', 1),
(4, 1, ' et beau', 1),
(5, 1, ' K', 1),
(6, 1, ' TRES JOLI', 1),
(7, 1, ' gggg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement_astronomique`
--

CREATE TABLE `evenement_astronomique` (
  `num_evenement` int(11) NOT NULL,
  `nom_event` varchar(100) NOT NULL,
  `date_event` date NOT NULL,
  `description_event` text NOT NULL,
  `image_even` varchar(50) NOT NULL,
  `num_planete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `evenement_astronomique`
--

INSERT INTO `evenement_astronomique` (`num_evenement`, `nom_event`, `date_event`, `description_event`, `image_even`, `num_planete`) VALUES
(1, 'Passage de Mercure devant le Soleil', '2003-05-07', 'Le passage de Mercure devant le disque solaire, connu sous le nom de transit de Mercure, est un événement rare et fascinant où la petite planète Mercure traverse le disque du Soleil, apparaissant comme un petit point sombre se déplaçant lentement sur la surface brillante du Soleil.', 'even1.jpg', 1),
(2, 'Transit de Vénus', '2012-06-06', 'Le transit de Vénus est un phénomène rare et périodique où la planète Vénus passe directement entre la Terre et le Soleil, apparaissant comme un petit disque noir se déplaçant lentement sur la surface lumineuse du Soleil.', 'even2.jpg', 2),
(3, 'Éclipse solaire totale', '2015-03-20', 'L\'éclipse solaire totale est un événement spectaculaire où la Lune passe directement entre la Terre et le Soleil, obscurcissant complètement la lumière du Soleil et plongeant temporairement certaines régions de la Terre dans l\'obscurité totale.', 'even3.jpg', 3),
(4, 'Opposition de Mars', '2018-07-27', 'L\'opposition de Mars est un événement astronomique où Mars et le Soleil sont à l\'opposé l\'un de l\'autre dans le ciel vu depuis la Terre, avec la Terre entre les deux. Lors de cette configuration, Mars est à son point le plus proche de la Terre et apparaît plus brillante dans le ciel nocturne.', 'even4.jpg', 4),
(5, 'Occultation de Ganymède', '2022-09-29', 'Une occultation est un événement où un objet céleste est temporairement obscurci par un autre, créant un spectacle fascinant pour les observateurs sur Terre. L\'occultation de Ganymède par Jupiter est un exemple impressionnant de ce phénomène, offrant une opportunité unique d\'étudier ces deux corps célestes en même temps.', 'even5.jpg', 5),
(6, 'Opposition de Saturne', '2005-01-15', 'L\'opposition de Saturne est un événement où Saturne et le Soleil sont à l\'opposé l\'un de l\'autre dans le ciel vu depuis la Terre. Lors de cette configuration, Saturne est plus proche de la Terre et apparaît plus brillante dans le ciel nocturne, offrant une occasion idéale pour observer ses anneaux caractéristiques.', 'even6.jpg', 6),
(7, 'Opposition d\'Uranus', '2022-10-03', 'L\'opposition d\'Uranus est un événement astronomique où Uranus et le Soleil sont à l\'opposé l\'un de l\'autre dans le ciel vu depuis la Terre, avec la Terre entre les deux. Lors de cette configuration, Uranus est plus proche de la Terre et apparaît plus lumineuse dans le ciel nocturne.', 'even7.jpg', 7),
(8, 'Conjonction de Neptune avec la Lune', '2018-09-10', 'Une conjonction est un événement astronomique où deux objets célestes apparaissent proches les uns des autres dans le ciel vu depuis la Terre. La conjonction de Neptune avec la Lune offre une occasion unique d\'observer ces deux corps célestes dans le même champ de vision, ce qui permet aux astronomes d\'étudier leur position et leur mouvement relatif.', 'even8.jpg', 8),
(9, 'Passage de Mercure devant le Soleil', '2003-05-07', '2222Le passage de Mercure devant le disque solaire, connu sous le nom de transit de Mercure, est un événement rare et fascinant où la petite planète Mercure traverse le disque du Soleil, apparaissant comme un petit point sombre se déplaçant lentement sur la surface brillante du Soleil.', 'even1.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_fourn` int(11) NOT NULL,
  `nom_four` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_fourn`, `nom_four`, `adresse`, `contact`, `email`) VALUES
(1, 'Cosmic Creations Co.', '789 Rue de la Galaxie', 'Emily Brown', 'sales@cosmiccreations.com'),
(2, 'Celestial Décor Enterprises', '101 Rue des Constellations', 'Michael Wilson', 'info@celestialdecor.com'),
(3, 'Astronomy Apparel', '202 Boulevard des Astres', 'Sophia Lee', 'sales@astronomyapparel.com');

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `num_planete` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `diametre` float NOT NULL,
  `masse` varchar(20) NOT NULL,
  `distance_soleil` float NOT NULL,
  `periode_orbitale` float NOT NULL,
  `nombre_lunes` int(11) DEFAULT NULL,
  `gravite` float NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `planetes`
--

INSERT INTO `planetes` (`num_planete`, `nom`, `diametre`, `masse`, `distance_soleil`, `periode_orbitale`, `nombre_lunes`, `gravite`, `description`, `image`) VALUES
(1, 'Mercure', 4879, '3.30*10^23', 57910000, 88, 0, 3.7, 'Mercure est la planète la plus proche du Soleil et la plus petite du système solaire.', ' Mercure.jpg.jpg'),
(2, 'Venus', 12104, '4.87*10^24', 108200000, 225, 0, 8.9, 'Venus est la deuxième planète du système solaire et est souvent appelée la "soeur jumelle" de la Terre en raison de leur taille et de leur masse similaires.', 'vénus.jpg'),
(3, 'Terre', 12742, '5.97*10^24', 149600000, 365.25, 1, 9.8, 'La Terre est la troisième planète du système solaire et est le seul corps céleste connu pour abriter la vie.', 'terre.jpeg'),
(4, 'Mars', 6779, '6.42*10^23', 227900000, 687, 2, 3.7, 'Mars est la quatrième planète du système solaire et est souvent appelée la "planète rouge" en raison de la couleur de sa surface.', ' mars.jpg'),
(5, 'Jupiter', 139822, '1.90*10^27', 778500000, 4333, 79, 24.8, 'Jupiter est la plus grande planète du système solaire et est principalement composée de gaz.', 'jupiter.jpg'),
(6, 'Saturne', 116464, '5.68*10^26', 1433000000, 10759, 82, 10.4, 'Saturne est connue pour ses impressionnants anneaux composés de glace et de roche.', 'saturne.jpeg'),
(7, 'Uranus', 50724, '8.68*10^25', 2877000000, 30687, 27, 8.9, 'Uranus est une planète géante de glace et est la seule planète du système solaire à avoir un axe de rotation presque horizontal.', 'uranus.jpg'),
(8, 'Neptune', 49244, '1.02*10^26', 4503000000, 60190, 14, 11.2, 'Neptune est la huitième planète du système solaire et est principalement composée de gaz.', 'neptune.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `image_produit` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_fourn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `prix`, `image_produit`, `stock`, `id_fourn`) VALUES
(1, 'SMART MOON LAMP : LAMPE LUNE ', 178.95, 'article1.jpg', 10, 1),
(2, 'T-shirt imprimé YOU ARE HERE taille satndard', 19.99, 'article2.jpg', 15, 3),
(3, 'T-shirt pour filles', 23.99, 'article3.jpg', 18, 3),
(4, 'sac système solaire', 45.89, 'article4.jpg', 20, 2),
(5, 'Tote bag astronomie', 13.99, 'article5.jpg', 16, 2),
(6, 'T-shirt pour garçons', 16.99, 'article6.jpg', 19, 3),
(7, 'Lampe Lune Tacltile à poser', 90.99, 'article7.jpg', 20, 1),
(8, 'Téléscope astronomique', 119.89, 'article8.jpg', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `num_question` int(11) NOT NULL,
  `texte_question` text NOT NULL,
  `difficulte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`num_question`, `texte_question`, `difficulte`) VALUES
(1, 'Quelle est la plus petite planète du système solaire ?', 'debutant'),
(2, 'Quelle événement astronomique s\'est produit le 7 mai 2003 ?', 'debutant'),
(3, 'Quelle planète est surnommée la planète rouge ?', 'debutant'),
(4, 'Quel événement a offert une occasion unique d\'observer Uranus plus lumineuse dans le ciel nocturne ?', 'debutant'),
(5, 'Quelle planète est la plus proche du Soleil ?', 'debutant'),
(6, 'Quelle événement implique la planète Vénus ?', 'debutant'),
(7, 'Quelle planète est principalement composée de gaz ?', 'debutant'),
(8, 'Quel événement a eu lieu le 15 janvier 2005 ?', 'debutant'),
(9, 'Quelle planète est la deuxième du système solaire ?', 'debutant'),
(10, 'Quel événement a plongé certaines régions de la Terre dans l\'obscurité totale le 20 mars 2015 ?', 'debutant'),
(21, 'Quelle est la distance moyenne de la Terre au Soleil ?', 'avancé'),
(22, 'Quelle est la masse de Jupiter ?', 'avancé'),
(23, 'Quelle est la période orbitale de Mars ?', 'avancé'),
(24, 'Quelle est le nombre de lunes de Saturne ?', 'avancé'),
(25, 'Quelle est la gravité sur Vénus ?', 'avancé'),
(26, 'Quel événement a eu lieu le 29 mai 1919 ?', 'avancé'),
(27, 'Quelle est la distance moyenne de Mars au Soleil ?', 'avancé'),
(28, 'Quelle est la période orbitale de Neptune ?', 'avancé'),
(29, 'Combien de temps dure une journée sur Mercure ?', 'avancé'),
(30, 'Combien de lunes a Uranus ?', 'avancé');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `num_reponse` int(11) NOT NULL,
  `texte` text NOT NULL,
  `est_correcte` tinyint(1) NOT NULL,
  `num_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reponses`
--

INSERT INTO `reponses` (`num_reponse`, `texte`, `est_correcte`, `num_question`) VALUES
(1, 'Vénus', 0, 1),
(2, 'Terre', 0, 1),
(3, 'Mars', 1, 1),
(4, 'Passage de Mercure devant le Soleil', 0, 2),
(5, 'Transit de Vénus', 1, 2),
(6, 'Occultation de Ganymède', 0, 2),
(7, 'Mars', 0, 3),
(8, 'Vénus', 0, 3),
(9, 'Mercure', 1, 3),
(10, 'Opposition de Mars', 1, 4),
(11, 'Conjonction de Neptune avec la Lune', 0, 4),
(12, 'Transit de Vénus', 0, 4),
(13, 'Mercure', 1, 5),
(14, 'Vénus', 0, 5),
(15, 'Mars', 0, 5),
(16, 'Transit de Vénus', 0, 6),
(17, 'Éclipse solaire totale', 1, 6),
(18, 'Opposition de Saturne', 0, 6),
(19, 'Jupiter', 1, 7),
(20, 'Saturne', 0, 7),
(21, 'Neptune', 0, 7),
(22, 'Opposition de Saturne', 1, 8),
(23, 'Transit de Vénus', 0, 8),
(24, 'Opposition d\'Uranus', 0, 8),
(25, 'Vénus', 0, 9),
(26, 'Mercure', 1, 9),
(27, 'Mars', 0, 9),
(28, 'Éclipse solaire totale', 1, 10),
(29, 'Opposition de Mars', 0, 10),
(30, 'Conjonction de Neptune avec la Lune', 0, 10),
(31, '150 millions de kilomètres', 1, 21),
(32, '250 millions de kilomètres', 0, 21),
(33, '200 millions de kilomètres', 0, 21),
(34, '318 fois la masse de la Terre', 1, 22),
(35, '218 fois la masse de la Terre', 0, 22),
(36, '418 fois la masse de la Terre', 0, 22),
(37, '687 jours terrestres', 1, 23),
(38, '587 jours terrestres', 0, 23),
(39, '787 jours terrestres', 0, 23),
(40, '82 satellites naturels', 1, 24),
(41, '72 satellites naturels', 0, 24),
(42, '92 satellites naturels', 0, 24),
(43, '9,81 m/s²', 1, 25),
(44, '8,81 m/s²', 0, 25),
(45, '10,81 m/s²', 0, 25),
(46, 'La période orbitale de Neptune est d\'environ 165 ans.', 1, 26),
(47, 'La période orbitale de Neptune est d\'environ 265 ans.', 0, 26),
(48, 'La période orbitale de Neptune est d\'environ 365 ans.', 0, 26),
(49, '58 jours terrestres', 1, 27),
(50, '68 jours terrestres', 0, 27),
(51, '48 jours terrestres', 0, 27),
(52, '227,9 millions de kilomètres', 1, 28),
(53, '127,9 millions de kilomètres', 0, 28),
(54, '327,9 millions de kilomètres', 0, 28),
(55, '24 heures terrestres', 1, 29),
(56, '20 heures terrestres', 0, 29),
(57, '28 heures terrestres', 0, 29),
(58, '14 lunes', 1, 30),
(59, '10 lunes', 0, 30),
(60, '18 lunes', 0, 30);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `password`) VALUES
(1, 'lynda', 'Lynda2?'),
(2, 'lll', 'Mm9?'),
(3, 'jjj', 'Jj9?'),
(4, 'lynda', 'Hh8?'),
(5, 'lynda', 'hhhhhhHH8?'),
(6, 'rrr', 'Rr3?');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `evenement_astronomique`
--
ALTER TABLE `evenement_astronomique`
  ADD PRIMARY KEY (`num_evenement`),
  ADD KEY `evenement_astronomique_planetes_FK` (`num_planete`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_fourn`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`num_planete`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `produits_fournisseur_FK` (`id_fourn`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`num_question`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`num_reponse`),
  ADD KEY `reponses_question_FK` (`num_question`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `evenement_astronomique`
--
ALTER TABLE `evenement_astronomique`
  MODIFY `num_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_fourn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `num_planete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `num_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `num_reponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `evenement_astronomique`
--
ALTER TABLE `evenement_astronomique`
  ADD CONSTRAINT `evenement_astronomique_planetes_FK` FOREIGN KEY (`num_planete`) REFERENCES `planetes` (`num_planete`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_fournisseur_FK` FOREIGN KEY (`id_fourn`) REFERENCES `fournisseur` (`id_fourn`);

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_question_FK` FOREIGN KEY (`num_question`) REFERENCES `question` (`num_question`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
