-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 avr. 2021 à 14:27
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rdk_financial`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`) VALUES
(2, 'RADIDAT', 'oumrane', 'radidatoumrane97605@hotmail.fr', '7c7b84eeaec18233e982d101637ab2a4033c6fb0');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `numero_de_siret` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numero_de_telephone` int(11) NOT NULL,
  `id_vehicules` int(11) NOT NULL,
  `permis_de_conduire` varchar(255) NOT NULL,
  `lieu_d_obtention` varchar(255) NOT NULL,
  `date_d_obtention` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `societe`, `numero_de_siret`, `adresse`, `numero_de_telephone`, `id_vehicules`, `permis_de_conduire`, `lieu_d_obtention`, `date_d_obtention`, `image`) VALUES
(5, 'jean', 'robert', 'jeanrobert@gmail.com', 'transportEasy', 2147483647, '', 645102545, 0, 'B', 'Nantes ', '2021-04-30', ''),
(6, 'axel', 'braun', 'axelbraun@hotmail.fr', 'boulanger-service', 2147483647, '', 785452015, 0, 'B', 'lyon', '1999-08-15', ''),
(7, 'mark', 'fredo', 'fredo@live.fr', 'livraison-express', 2147483647, '', 689520344, 0, 'BE', 'angers', '2000-10-05', ''),
(8, 'maxime', 'torat', 'torat26@gmail.com', 'lili-transport', 2147483647, '', 678204586, 0, 'D1', 'marseille', '2010-04-25', ''),
(9, 'patrick', 'hakim', 'hakim976@gmail.com', 'voyage-extraordinaire ', 2147483647, '', 565547810, 0, 'B', 'paris', '2017-11-23', ''),
(11, 'claire', 'clarat', 'clarat56claire@hotmail.fr', 'myMode', 2147483647, '', 878542103, 0, 'B', 'saint-nazaire', '2019-06-15', ''),
(12, 'wilfred', 'windy', 'wwindy@live.fr', 'shin sekaï', 2147483647, '', 564168545, 0, 'B', 'bordeaux', '2015-05-15', ''),
(13, 'bilza', 'sophia', 'bilza96@gmail.com', 'bilza&amp;fils', 2147483647, '', 545120250, 0, 'B', 'nantes', '2020-02-06', ''),
(14, 'oumrane', '', '', '', 0, '', 0, 0, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Structure de la table `etat_du_vehicule`
--

CREATE TABLE `etat_du_vehicule` (
  `id` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `kilometrage_depart` int(11) DEFAULT NULL,
  `niveau_carburant_depart` int(11) DEFAULT NULL,
  `observation_depart` text DEFAULT NULL,
  `kilometrage_retour` int(11) DEFAULT NULL,
  `niveau_carburant_retour` int(11) DEFAULT NULL,
  `observation_retour` text DEFAULT NULL,
  `contravention` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images_vehicules`
--

CREATE TABLE `images_vehicules` (
  `id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `image_5` varchar(255) NOT NULL,
  `image_6` varchar(255) NOT NULL,
  `image_7` varchar(255) NOT NULL,
  `image_8` varchar(255) NOT NULL,
  `image_9` varchar(255) NOT NULL,
  `image_10` varchar(255) NOT NULL,
  `image_11` varchar(255) NOT NULL,
  `image_12` varchar(255) NOT NULL,
  `id_vehicules` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images_vehicules`
--

INSERT INTO `images_vehicules` (`id`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `image_7`, `image_8`, `image_9`, `image_10`, `image_11`, `image_12`, `id_vehicules`) VALUES
(1, '607d9dc790e749.47810496.jpg', '607d9dc790e851.49554445.jpg', '607d9dc790e8a2.10294430.jpg', '607d9dc790e8e9.79575502.jpg', '607d9dc790e919.14233967.jpg', '', '', '', '', '', '', '', 1),
(2, '607d9e465dcfd5.25263265.jpg', '607d9e465dd0c7.18038385.jpg', '607d9e465dd125.03341581.jpg', '607d9e465dd162.39883524.jpg', '607d9e465dd1b0.35552552.jpg', '', '', '', '', '', '', '', 2),
(3, '607d9fc737e055.62392551.jpg', '607d9fc737e170.67916459.jpg', '607d9fc737e1c5.98690389.jpg', '607d9fc737e212.19765442.jpg', '607d9fc737e259.19086330.jpg', '', '', '', '', '', '', '', 3),
(4, '607da069bdae46.22843251.jpg', '607da069bdaf48.21421067.jpg', '607da069bdafa9.94524411.jpg', '607da069bdafe0.89679998.jpg', '607da069bdb039.41484111.jpg', '', '', '', '', '', '', '', 4),
(5, '607da0e4c5b226.48847358.jpg', '607da0e4c5b2c6.68958902.jpg', '607da0e4c5b2f7.50903536.jpg', '607da0e4c5b313.52445554.jpg', '607da0e4c5b335.21994659.jpg', '', '', '', '', '', '', '', 5),
(6, '607da12acdec72.88655428.jpg', '607da12acded46.11176942.jpg', '607da12acded96.12827259.jpg', '607da12acdedd0.12225841.jpg', '607da12acdee12.66766579.jpg', '', '', '', '', '', '', '', 6),
(7, '607da18be17d75.06525461.jpg', '607da18be17e74.43340351.jpg', '607da18be17ec8.94952911.jpg', '607da18be17f13.85153300.jpg', '607da18be17f54.75257667.jpg', '', '', '', '', '', '', '', 7),
(8, '607da201714223.43017770.jpg', '607da2017142e6.96971483.jpg', '607da201714318.04060668.jpg', '607da201714349.45548196.jpg', '607da201714366.39052837.jpg', '', '', '', '', '', '', '', 8),
(9, '607da25a79ac54.50061187.jpg', '607da25a79ad16.43317601.jpg', '607da25a79ad63.02700604.jpg', '607da25a79ad99.12063106.jpg', '607da25a79adc9.24609209.jpg', '', '', '', '', '', '', '', 9),
(10, '607da2a265e6e3.90571580.jpg', '607da2a265e7d2.86613094.jpg', '607da2a265e819.45535564.jpg', '607da2a265e845.35926906.jpg', '607da2a265e875.17022947.jpg', '', '', '', '', '', '', '', 10),
(11, '607e88e8490ba2.28603912.jpg', '607e88e8490d32.58541673.jpg', '607e88e8490d88.81021211.jpg', '607e88e8490dc2.23595724.jpg', '607e88e8490df2.76639357.jpg', '', '', '', '', '', '', '', 11);

-- --------------------------------------------------------

--
-- Structure de la table `image_etat_vehicule_depart`
--

CREATE TABLE `image_etat_vehicule_depart` (
  `id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `id_etat_du_vehicule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `image_etat_vehicule_retour`
--

CREATE TABLE `image_etat_vehicule_retour` (
  `id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `id_etat_du_vehicule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_vehicules` int(11) NOT NULL,
  `date_de_depart` date NOT NULL,
  `date_de_retour` date NOT NULL,
  `montant_de_garantie` int(11) NOT NULL,
  `montant_de_la_location` int(11) NOT NULL,
  `garantie_vol` tinyint(4) NOT NULL DEFAULT 0,
  `montant_garantie_vol` int(11) NOT NULL DEFAULT 0,
  `assurance` varchar(255) NOT NULL,
  `type_de_paiement` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `garantie_accident` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`id`, `id_client`, `id_vehicules`, `date_de_depart`, `date_de_retour`, `montant_de_garantie`, `montant_de_la_location`, `garantie_vol`, `montant_garantie_vol`, `assurance`, `type_de_paiement`, `fichier`, `garantie_accident`) VALUES
(81, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(82, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(83, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(84, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(85, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(86, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(87, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(88, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(89, 7, 2, '2021-04-11', '2021-04-29', 258, 258, 1, 258, '0', 'carte bancaire', '', 1),
(90, 11, 1, '2021-04-16', '2021-04-23', 452562, 78451, 1, 78452, '0', 'especes', '', 1),
(91, 11, 1, '2021-04-16', '2021-04-23', 452562, 78451, 1, 78452, '0', 'especes', '', 1),
(92, 13, 8, '2021-04-15', '2021-04-29', 51441, 0, 0, 74, '0', 'carte bancaire', '', 1),
(93, 11, 1, '2021-04-09', '2021-04-28', 1565, 852586, 1, 85252, '0', 'especes', '', 1),
(94, 13, 1, '2021-04-22', '2021-04-23', 552552, 75452, 1, 75452, '0', 'carte bancaire', '', 1),
(95, 5, 10, '2021-04-16', '2021-04-24', 754454, 78541, 1, 75421, '0', 'carte bancaire', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `permis_de_conduire`
--

CREATE TABLE `permis_de_conduire` (
  `id` int(11) NOT NULL,
  `date_d_obtention` varchar(255) NOT NULL,
  `lieu_d_obtention` varchar(255) NOT NULL,
  `validite_du_permis` tinyint(1) NOT NULL,
  `type_de_permis` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `immatriculation` varchar(11) NOT NULL,
  `carburant` varchar(255) NOT NULL,
  `kilometrage` int(11) DEFAULT NULL,
  `boite_de_vitesse` varchar(255) NOT NULL,
  `prix_d_achat` int(11) NOT NULL,
  `date_d_achat` date NOT NULL,
  `prix_lld` int(11) DEFAULT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `louee` tinyint(1) NOT NULL,
  `entretien` tinyint(1) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `marque`, `type`, `categorie`, `immatriculation`, `carburant`, `kilometrage`, `boite_de_vitesse`, `prix_d_achat`, `date_d_achat`, `prix_lld`, `disponible`, `louee`, `entretien`, `id_client`) VALUES
(1, 'bmw', 'type-1', 'super-auto', 'AD-285-DF', 'sans-plomb 98', 45000, 'manuelle', 10000, '2021-04-22', NULL, 1, 0, 0, 0),
(2, 'ferrari', 'type-2', 'super-auto', 'KL-45-SD', 'sans-plomb 95', 630000, 'automatique', 450000, '2021-04-22', NULL, 1, 0, 0, 0),
(3, 'mercredes ', 'type-4', 'auto', 'QM-156-ML', 'sans-plomb 95', 85562, 'manuelle', 14522525, '2021-04-23', NULL, 1, 0, 0, 0),
(4, 'aston martin', 'type-6', 'super-auto', 'ML-462-CD', 'sans-plomb 95', 452993, 'automatique', 255222, '2021-04-23', NULL, 1, 0, 0, 0),
(5, 'renault', 'type-5', 'voiture-simple', 'OP-96-FR', 'sans-plomb 95', 5552339, 'manuelle', 489256, '2021-04-23', NULL, 1, 0, 0, 0),
(6, 'mustang', 'type-9', 'auto-moyen', 'FY-456-ML', 'sans-plomb 98', 4232522, 'manuelle', 152555, '2021-04-22', NULL, 1, 0, 0, 0),
(7, 'toyota', 'type-8', 'moyen de gamme ', 'JK-6396-VB', 'sans-plomb 95', 46936366, 'automatique', 25255636, '2021-05-20', NULL, 1, 0, 0, 0),
(8, 'aston martin ', 'type-552', 'super-auto', 'GH-967-SE', 'hybride', 2585258, 'automatique', 433685, '2021-04-14', NULL, 1, 0, 0, 0),
(9, 'lamborgini', 'type-56', 'super-auto', 'SR-782-BG', 'sans-plomb 95', 12586963, 'manuelle', 8525636, '2021-04-29', NULL, 1, 0, 0, 0),
(10, 'ford', 'type-425', 'moyen de gamme ', 'TY-369-PL', 'hybride', 25256369, 'manuelle', 8525, '2021-04-14', NULL, 1, 0, 0, 0),
(11, 'audi ', 'type_1', 'super-auto', 'AR-452-FG', 'sans-plomb 98', 36955, 'automatique', 52154, '2021-04-22', NULL, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `vente_vehicule`
--

CREATE TABLE `vente_vehicule` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_vehicules` int(11) NOT NULL,
  `prix_de_vente` int(11) NOT NULL,
  `date_de_vente` int(11) NOT NULL,
  `type_de_paiement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etat_du_vehicule`
--
ALTER TABLE `etat_du_vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etat_du_vehicule` (`id_location`);

--
-- Index pour la table `images_vehicules`
--
ALTER TABLE `images_vehicules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicule_image` (`id_vehicules`);

--
-- Index pour la table `image_etat_vehicule_depart`
--
ALTER TABLE `image_etat_vehicule_depart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_etat_depart` (`id_etat_du_vehicule`);

--
-- Index pour la table `image_etat_vehicule_retour`
--
ALTER TABLE `image_etat_vehicule_retour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_image_etat_retour` (`id_etat_du_vehicule`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_location_client` (`id_client`),
  ADD KEY `fk_location_vehicule` (`id_vehicules`);

--
-- Index pour la table `permis_de_conduire`
--
ALTER TABLE `permis_de_conduire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_client_permis_de_conduire` (`id_client`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vente_vehicule`
--
ALTER TABLE `vente_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `etat_du_vehicule`
--
ALTER TABLE `etat_du_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images_vehicules`
--
ALTER TABLE `images_vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `image_etat_vehicule_depart`
--
ALTER TABLE `image_etat_vehicule_depart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image_etat_vehicule_retour`
--
ALTER TABLE `image_etat_vehicule_retour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `permis_de_conduire`
--
ALTER TABLE `permis_de_conduire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vente_vehicule`
--
ALTER TABLE `vente_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etat_du_vehicule`
--
ALTER TABLE `etat_du_vehicule`
  ADD CONSTRAINT `fk_etat_du_vehicule` FOREIGN KEY (`id_location`) REFERENCES `location` (`id`);

--
-- Contraintes pour la table `images_vehicules`
--
ALTER TABLE `images_vehicules`
  ADD CONSTRAINT `fk_vehicule_image` FOREIGN KEY (`id_vehicules`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `image_etat_vehicule_depart`
--
ALTER TABLE `image_etat_vehicule_depart`
  ADD CONSTRAINT `fk_image_etat_depart` FOREIGN KEY (`id_etat_du_vehicule`) REFERENCES `etat_du_vehicule` (`id`);

--
-- Contraintes pour la table `image_etat_vehicule_retour`
--
ALTER TABLE `image_etat_vehicule_retour`
  ADD CONSTRAINT `fk_image_etat_retour` FOREIGN KEY (`id_etat_du_vehicule`) REFERENCES `etat_du_vehicule` (`id`);

--
-- Contraintes pour la table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_location_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_location_vehicule` FOREIGN KEY (`id_vehicules`) REFERENCES `vehicules` (`id`);

--
-- Contraintes pour la table `permis_de_conduire`
--
ALTER TABLE `permis_de_conduire`
  ADD CONSTRAINT `fk_client_permis_de_conduire` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
