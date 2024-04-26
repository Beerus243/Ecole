-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 25 juin 2023 à 13:38
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kelasi`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id_application` int(11) NOT NULL AUTO_INCREMENT,
  `id_eleve` int(11) NOT NULL,
  `nom_application` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_installation` date NOT NULL,
  PRIMARY KEY (`id_application`),
  KEY `id_eleve` (`id_eleve`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`id_application`, `id_eleve`, `nom_application`, `description`, `date_installation`) VALUES
(1, 1, 'Application 1', 'Description Application 1', '2022-10-10'),
(2, 2, 'Application 2', 'Description Application 2', '2022-10-11'),
(3, 3, 'Application 3', 'Description Application 3', '2022-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cours` varchar(255) NOT NULL,
  `horaire_debut` time NOT NULL,
  `horaire_fin` time NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `niveau_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `coefficient_interro` float DEFAULT NULL,
  `coefficient_devoir` float DEFAULT NULL,
  `coefficient_examen` float DEFAULT NULL,
  PRIMARY KEY (`id_cours`),
  KEY `id_enseignant` (`id_enseignant`),
  KEY `niveau_id` (`niveau_id`),
  KEY `option_id` (`option_id`),
  KEY `section_id` (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nom_cours`, `horaire_debut`, `horaire_fin`, `id_enseignant`, `niveau_id`, `option_id`, `section_id`, `coefficient_interro`, `coefficient_devoir`, `coefficient_examen`) VALUES
(1, 'Mathématiques', '08:00:00', '09:30:00', 1, 1, 1, 1, 0.3, 0.4, 0.3),
(2, 'Sciences', '10:00:00', '11:30:00', 2, 2, 2, 2, 0.3, 0.4, 0.3),
(3, 'Littérature', '13:00:00', '14:30:00', 3, 3, 3, 3, 0.3, 0.4, 0.3);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id_eleve` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_el` varchar(255) NOT NULL,
  `nom_el` varchar(255) NOT NULL,
  `postnom_el` varchar(255) NOT NULL,
  `prenom_el` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `lieu_de_naissance` varchar(255) NOT NULL,
  `nom_du_pere` varchar(255) NOT NULL,
  `nom_de_la_mere` varchar(255) NOT NULL,
  `contact_parent` varchar(255) NOT NULL,
  `contact_eleve` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  PRIMARY KEY (`id_eleve`),
  UNIQUE KEY `email` (`email`),
  KEY `promotion_id` (`promotion_id`),
  KEY `option_id` (`option_id`),
  KEY `section_id` (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `matricule_el`, `nom_el`, `postnom_el`, `prenom_el`, `sexe`, `adresse`, `nationalite`, `lieu_de_naissance`, `nom_du_pere`, `nom_de_la_mere`, `contact_parent`, `contact_eleve`, `email`, `mot_de_passe`, `promotion_id`, `option_id`, `section_id`, `niveau`) VALUES
(1, '001', 'Doe', 'John', 'John', 'M', 'Adresse 1', 'Nationalité 1', 'Lieu 1', 'Père 1', 'Mère 1', 'Contact 1', 'Contact 1', 'john.doe@example.com', 'password1', 1, 1, 1, 'Primaire'),
(2, '002', 'Smith', 'Jane', 'Jane', 'F', 'Adresse 2', 'Nationalité 2', 'Lieu 2', 'Père 2', 'Mère 2', 'Contact 2', 'Contact 2', 'jane.smith@example.com', 'password2', 2, 2, 2, 'Secondaire'),
(3, '003', 'Johnson', 'Robert', 'Robert', 'M', 'Adresse 3', 'Nationalité 3', 'Lieu 3', 'Père 3', 'Mère 3', 'Contact 3', 'Contact 3', 'robert.johnson@example.com', 'password3', 3, 3, 3, 'Universitaire');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `id_enseignant` int(11) NOT NULL AUTO_INCREMENT,
  `matricule_ens` varchar(255) NOT NULL,
  `nom_ens` varchar(255) NOT NULL,
  `postnom_ens` varchar(255) NOT NULL,
  `prenom_ens` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `lieu_de_naissance` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  PRIMARY KEY (`id_enseignant`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_enseignant`, `matricule_ens`, `nom_ens`, `postnom_ens`, `prenom_ens`, `sexe`, `adresse`, `contact`, `lieu_de_naissance`, `nationalite`, `email`, `mot_de_passe`) VALUES
(1, '1001', 'Dupont', 'Jean', 'Jean', 'M', 'Adresse Enseignant 1', 'Contact Enseignant 1', 'Lieu Enseignant 1', 'Nationalité Enseignant 1', 'enseignant1@example.com', 'password1'),
(2, '1002', 'Martin', 'Marie', 'Marie', 'F', 'Adresse Enseignant 2', 'Contact Enseignant 2', 'Lieu Enseignant 2', 'Nationalité Enseignant 2', 'enseignant2@example.com', 'password2'),
(3, '1003', 'Tremblay', 'Michel', 'Michel', 'M', 'Adresse Enseignant 3', 'Contact Enseignant 3', 'Lieu Enseignant 3', 'Nationalité Enseignant 3', 'enseignant3@example.com', 'password3');

-- --------------------------------------------------------

--
-- Structure de la table `niveau_etudes`
--

DROP TABLE IF EXISTS `niveau_etudes`;
CREATE TABLE IF NOT EXISTS `niveau_etudes` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `nom_niveau` varchar(255) NOT NULL,
  PRIMARY KEY (`id_niveau`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau_etudes`
--

INSERT INTO `niveau_etudes` (`id_niveau`, `nom_niveau`) VALUES
(1, 'Primaire'),
(2, 'Secondaire'),
(3, 'Universitaire');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(11) NOT NULL AUTO_INCREMENT,
  `id_eleve` int(11) DEFAULT NULL,
  `id_cours` int(11) DEFAULT NULL,
  `note_interrogation` int(11) DEFAULT NULL,
  `note_devoir` int(11) DEFAULT NULL,
  `note_examen` int(11) DEFAULT NULL,
  `coefficient` int(11) DEFAULT NULL,
  `type_evaluation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_note`),
  KEY `id_eleve` (`id_eleve`),
  KEY `id_cours` (`id_cours`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `id_eleve`, `id_cours`, `note_interrogation`, `note_devoir`, `note_examen`, `coefficient`, `type_evaluation`) VALUES
(1, 1, 1, 15, 17, 14, 1, 'Interrogation'),
(2, 2, 2, 12, 13, 16, 1, 'Interrogation'),
(3, 3, 3, 18, 19, 20, 1, 'Interrogation');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id_option` int(11) NOT NULL AUTO_INCREMENT,
  `nom_option` varchar(255) NOT NULL,
  `duree_option` int(11) NOT NULL,
  PRIMARY KEY (`id_option`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `options`
--

INSERT INTO `options` (`id_option`, `nom_option`, `duree_option`) VALUES
(1, 'Mathématiques', 3),
(2, 'Sciences', 3),
(3, 'Littérature', 2);

-- --------------------------------------------------------

--
-- Structure de la table `pourcentages`
--

DROP TABLE IF EXISTS `pourcentages`;
CREATE TABLE IF NOT EXISTS `pourcentages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eleve_id` int(11) DEFAULT NULL,
  `cours_id` int(11) DEFAULT NULL,
  `pourcentage` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eleve_id` (`eleve_id`),
  KEY `cours_id` (`cours_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pourcentages`
--

INSERT INTO `pourcentages` (`id`, `eleve_id`, `cours_id`, `pourcentage`) VALUES
(1, 1, 1, 80),
(2, 2, 2, 75),
(3, 3, 3, 90);

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

DROP TABLE IF EXISTS `presence`;
CREATE TABLE IF NOT EXISTS `presence` (
  `id_presence` int(11) NOT NULL AUTO_INCREMENT,
  `id_eleve` int(11) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `date_presence` date NOT NULL,
  `heure_arrivee` time NOT NULL,
  PRIMARY KEY (`id_presence`),
  KEY `id_eleve` (`id_eleve`),
  KEY `id_cours` (`id_cours`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presence`
--

INSERT INTO `presence` (`id_presence`, `id_eleve`, `id_cours`, `date_presence`, `heure_arrivee`) VALUES
(1, 1, 1, '2022-10-10', '08:00:00'),
(2, 2, 2, '2022-10-11', '10:00:00'),
(3, 3, 3, '2022-10-12', '13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promotion` int(11) NOT NULL AUTO_INCREMENT,
  `nom_promotion` varchar(255) NOT NULL,
  `niveau_id` int(11) NOT NULL,
  `annee_scolaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id_promotion`),
  KEY `niveau_id` (`niveau_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `nom_promotion`, `niveau_id`, `annee_scolaire`) VALUES
(1, 'Promotion A', 1, '2022-2023'),
(2, 'Promotion B', 2, '2022-2023'),
(3, 'Promotion C', 2, '2023-2024');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id_section` int(11) NOT NULL AUTO_INCREMENT,
  `nom_section` varchar(255) NOT NULL,
  `enseignant_responsable` varchar(255) NOT NULL,
  PRIMARY KEY (`id_section`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id_section`, `nom_section`, `enseignant_responsable`) VALUES
(1, 'Section A', 'M. Dupont'),
(2, 'Section B', 'Mme. Martin'),
(3, 'Section C', 'M. Tremblay');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
