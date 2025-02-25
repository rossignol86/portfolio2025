-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 juin 2024 à 14:16
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `societe` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `societe`, `telephone`, `email`, `message`) VALUES
(21, 'Franck Rossignollette', 'oiseau', '0662939679', 'ff.rossignol@yahoo.fr', 'essai envoie'),
(22, 'franck Rossignol', 'oiseau', '0662939679', 'ff.rossignol@yahoo.fr', 'test'),
(23, 'Jean-Francois LEMANCEAU', 'LEMANCEAU', '0662939679', 'jean-francois@yahoo.fr', 'Bonjour,\r\nje souhaiterais avoir un RDV avec vous concernant plusieurs projets : site internet, logo, plaquette. Pouvez-vous me preciser une date et une heure .\r\nCordialement\r\nJF Lemanceau'),
(24, 'Francois Rossignollette', 'OISEAU AND CO', '00 00 00 00 00 ', 'ff.rossignol@yahoo.fr', 'Bonjour,\r\nPouvez-vous me contacter, pour un RDV.\r\nCordialement\r\nF. Rossignollette'),
(25, 'Gilles DURAND', 'GROUPE LVMH', '00 11 22 33 44 55 ', 'gilles@yahoo.fr', 'Bonjour M. Rossignol,\r\nJe viens de voir votre site.\r\nCordialement\r\nGilles Durand'),
(26, 'Gilles DURAND', 'GROUPE LVMH', '00 11 22 33 44 55 ', 'gilles@yahoo.fr', 'Bonjour M. Rossignol\r\nJe viens de voir votre site internet.\r\nCordialement\r\nGilles'),
(27, 'lAURENT DUFFOURC', 'PUBLIONS', '22 33 44 55 66 77 ', 'laurent@yahoo.fr', 'Salut Franck,\r\nContact moi pour un RDV.\r\nLaurent'),
(28, 'Jeremy', 'ECOLE ATYPIQUE', '33 44 55 66 77', 'jeremy@yahoo.fr', 'Modification et corrections du PHP');

-- --------------------------------------------------------

--
-- Structure de la table `creations`
--

CREATE TABLE `creations` (
  `id` int(10) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `photolegende` text NOT NULL,
  `photo1` varchar(40) NOT NULL,
  `texte` text NOT NULL,
  `phototexte` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `creations`
--

INSERT INTO `creations` (`id`, `titre`, `photolegende`, `photo1`, `texte`, `phototexte`) VALUES
(1, 'Emailing & Newsletter', 'En tant qu\'intégrateur d\'emailing, je crée des templates d\'emails attractifs et optimisés pour divers clients de messagerie. Je m\'assure que les emails sont bien codés, s\'affichent correctement sur toutes les plateformes et atteignent leur cible sans passer par les filtres de spam.', '../images/emailing.jpg', '<p>Concevoir un emailing efficace et moderne nécessite une planification minutieuse et une compréhension claire de vos objectifs et de votre audience. Voici les étapes essentielles à suivre :</p><br>\r\n<br>\r\n\r\n<h2>1. définir les Objectifs</h2><br>\r\n<p>Avant de commencer, déterminez ce que vous voulez accomplir avec votre emailing :<br>\r\n- Augmenter les ventes ?<br>\r\n- Générer des leads ?<br>\r\n- Fidéliser les clients ?<br>\r\n- Promouvoir un événement ?</p><br>\r\n<br>\r\n\r\n<h2>2. Identifier la Cible</h2><br>\r\n<p>Segmentez votre liste de contacts pour personnaliser votre message en fonction des intérêts, du comportement ou des données démographiques de vos destinataires.</p><br>\r\n<br>\r\n\r\n<h2>3. Choisir le bon outil</h2><br>\r\n<p>Utilisez une plateforme d\'email marketing fiable (par exemple, Mailchimp, Sendinblue, HubSpot) qui offre des fonctionnalités adaptées à vos besoins (gestion de listes, segmentation, A/B testing, etc.).</p><br>\r\n<br>\r\n\r\n<h2>4. Créer un contenu pertinent</h2><br>\r\n<p>- Objet de l\'email : Rédigez un objet accrocheur et pertinent. Il doit inciter à l\'ouverture de l\'email.<br>\r\n- Corps de l\'email : Assurez-vous que le contenu est clair, concis et engageant. Utilisez des images et des éléments visuels de qualité.<br>\r\n- Call to Action (CTA) : Incluez des appels à l\'action clairs et visibles, incitant le lecteur à agir (cliquer, s\'inscrire, acheter).<:p><br>\r\n<br>\r\n\r\n<h2>5. Personnaliser le message</h2><br>\r\n<p>Utilisez les informations disponibles sur vos destinataires pour personnaliser les emails (nom, historique d\'achats, préférences).</p><br>\r\n<br>\r\n\r\n<h2>6. Assurer la Conformité Légale</h2><br>\r\n<p>RGPD : Assurez-vous que votre campagne respecte les réglementations en matière de protection des données (par exemple, obtenir le consentement explicite des destinataires).<br>\r\nDésinscription : Incluez toujours une option facile de désinscription.</p><br>\r\n<br>\r\n\r\n<h2>7. Testeur avant l\'Envoi</h2><br>\r\n<p>A/B Testing : Testez différentes versions de votre email (objet, contenu, CTA) pour voir ce qui fonctionne le mieux. Prévisualisation : Vérifiez comment l\'email s\'affiche sur différents appareils et clients de messagerie.</p><br>\r\n<br>\r\n\r\n<h2>8. Planifier l\'Envoi</h2><br>\r\n<p>Choisissez le moment optimal pour envoyer votre email. Cela peut varier en fonction de votre audience et du type de contenu.</p><br>\r\n<br>\r\n\r\n<h2>9. Analyser les résultats</h2><br>\r\n<p>Après l\'envoi, analysez les performances de votre campagne :<br>\r\n- Taux d\'ouverture<br>\r\n- Taux de clics<br>\r\n- Taux de conversion<br>\r\n- Taux de désinscription<br>\r\nUtilisez ces données pour affiner vos futures campagnes.</p><br>\r\n<br>\r\n\r\n<h2>10. Optimiseur en Continu</h2><br>\r\n<p>Découvrez chaque campagne et ajustez votre stratégie en fonction des retours et des résultats obtenus. La clé d\'un emailing efficace réside dans l\'amélioration continue basée sur les données collectées.</p><br>\r\n<br>\r\n\r\n<h2>Conclusion</h2><br>\r\n<p>En suivant ces étapes, vous pourrez créer des campagnes d\'emailing plus efficaces et mieux adaptées à votre audience. Bonne chance !</p><br><br>', '../images/emailing.jpg'),
(2, 'Site internet', 'Mon rôle consiste à transformer des designs en sites web fonctionnels et responsives, tout en assurant une expérience utilisateur optimale. Je maîtrise les langages de programmation tels que HTML, CSS, JavaScript, et je m\'assure que chaque site est compatible avec différents navigateurs et appareils.', '../images/site.jpg', '<p>Ces étapes vous guideront dans la création d\'un site internet complet et fonctionnel, en assurant une bonne expérience utilisateur et une visibilité optimale.</p><br>\r\n<br>\r\n\r\n<h2>1. définir les objectifs et le public cible</h2><br>\r\n<p>• Objectifs : Clarifiez ce que vous souhaitez accomplir avec votre site (ex : vendre des produits, fournir des informations, offrir des services).<br>\r\n• Public cible : Déterminez votre audience (âge, sexe, intérêts, profession) pour adapter le contenu et le design à leurs besoins et préférences.</p><br>\r\n<br>\r\n\r\n<h2>2. Choisir un nom de domaine</h2><br>\r\n<p>• Recherche : Utilisez des outils comme GoDaddy, Namecheap ou Google Domains pour vérifier la disponibilité du nom de domaine souhaité.<br>\r\n• Extension : Choisissez l\'extension appropriée (.com, .fr, .org, etc.) en fonction de votre public et de votre secteur d\'activité.<br>\r\n• Achat : Achetez le nom de domaine et configurez-le avec votre hébergeur.</p><br>\r\n<br>\r\n\r\n<h2>3. Sélectionnez un hébergeur web</h2><br>\r\n<p>• Types d\'hébergement :<br>\r\n- Partagé : Idéal pour les petits sites, coûteux moins.<br>\r\n- VPS : Offre plus de ressources et de contrôle, bon pour les sites en croissance.<br>\r\n- Dédié : Serveur entier dédié à votre site, idéal pour les sites à fort trafic.\r\n• Critères : Considérez la vitesse, la fiabilité, le support client, et les coûts.<br>\r\n• Hébergeurs populaires : Bluehost, SiteGround, OVH, HostGator.</p><br>\r\n<br>\r\n\r\n<h2>4. Planifier la structure du site</h2><br>\r\n<p>• Arborescence : Créez une hiérarchie claire des pages (Accueil, À propos, Services, Blog, Contact).<br>\r\n• Wireframes : Dessinez des esquisses ou utilisez des outils comme Balsamiq ou Wireframe.cc pour visualiser la disposition des pages.<br>\r\n• Navigation : Assurez-vous que la navigation est intuitive, avec des menus clairs et des liens internes cohérents.</p><br><br>\r\n\r\n<h2>5. Concevoir le design du site</h2><br>\r\n<p>• UX/UI : Concevez une expérience utilisateur agréable et une interface utilisateur attrayante.<br>\r\n• Design responsable : Assurez-vous que le site est adapté aux mobiles et tablettes.<br>\r\n• Couleurs et typographie : Choisissez une palette de couleurs et des polices qui correspondent à votre marque.<br>\r\n• Outils de conception : Utilisez Adobe XD, Figma, Sketch pour créer des maquettes détaillées.</p><br>\r\n<br>\r\n\r\n<h2>6. Développer le site</h2><br>\r\n<p>• HTML/CSS : Utilisez HTML pour structurer le contenu et CSS pour le styliser.<br>\r\n• JavaScript : Ajoutez des fonctionnalités interactives avec JavaScript ou des frameworks comme React, Angular, ou Vue.js.<br>\r\n• Frameworks CSS : Bootstrap, Tailwind CSS pour accélérer le développement et garantir une bonne apparence.<br>\r\n• Contrôle de version : Utilisez Git pour suivre les modifications de code et collaborer avec d\'autres développeurs.</p><br>\r\n<br>\r\n\r\n<h2>7. Ajouter un système de gestion de contenu (CMS)</h2><br>\r\n<p>• Choix du CMS :<br>\r\n- WordPress : Le plus populaire, idéal pour les blogs, sites vitrines, e-commerce avec des plugins comme WooCommerce.<br>\r\n- Joomla : Flexible et puissant, adapté aux sites communautaires.<br>\r\n- Drupal : Très flexible, idéal pour les sites complexes avec des exigences spécifiques.<br>\r\n• Installation et configuration : Suivez les guides d\'installation de votre CMS choisi, configurez les paramètres de base, et sélectionnez un thème approprié.</p><br><br>\r\n\r\n<h2>8. Optimiser le site pour le référencement (SEO)</h2><br>\r\n<p>• Balises HTML : Utilisez les balises de titre (h1, h2, etc.), les balises méta et les descriptions pertinentes.<br>\r\n• Mots-clés : Intégrez des mots-clés pertinents dans le contenu, les titres et les descriptions.<br>\r\n• Liens internes et externes : Créez des liens vers d\'autres pages de votre site et des sites externes de qualité.<br>\r\n• Performances : Optimisez la vitesse de chargement des pages avec des techniques comme la compression d\'images et l\'utilisation d\'un CDN.</p><br><br>\r\n\r\n<h2>9. Ajouter du contenu</h2><br>\r\n<p>• Pages statiques : Créez et publiez du contenu pour les pages fixes comme l\'Accueil, À propos, Services.<br>\r\n• Blog : Si pertinent, publiez régulièrement des articles de blog pour attirer et engager les visiteurs.<br>\r\n• Médias : Utilisez des images, vidéos, infographies pour enrichir le contenu et le rendre plus attractif.<br>\r\n• Rédaction : Rédigez un contenu clair, concis et engageant, adapté à votre public cible.</p><br><br>\r\n\r\n<h2>10. Tester et lancer le site</h2><br>\r\n<p>• Tests fonctionnels : Vérifiez que toutes les fonctionnalités (formulaires, boutons, liens) fonctionnent correctement.<br>\r\n• Compatibilité : Assurez-vous que le site est compatible avec différents navigateurs (Chrome, Firefox, Safari) et appareils (ordinateurs, tablettes, mobiles).<br>\r\n• Performance : Utilisez des outils comme Google PageSpeed Insights pour tester et optimiser la vitesse de chargement.<br>\r\n• Lancement : Une fois les tests terminés, lancez le site en le rendant accessible au public. Assurez-vous que les redirections sont correctement configurées et que le site est indexé par les moteurs de recherche.</p><br><br>\r\n', '../images/site.jpg'),
(3, 'Infographiste', 'Mon rôle principal est de concevoir et de réaliser des supports visuels tels que des affiches, des logos, des flyers, des brochures, des catalogues, des campagnes d\'affichage etc., en utilisant des logiciels de création graphique.', '../images/graphisme.jpg', '<p>Voici les 10 points clés qui caractérisent mon métier d\'infographiste, en mettant en avant mes compétences techniques, créatives et organisationnelles requises.</p><br><br>\r\n\r\n<h2>1 Création Visuelle :</h2>\r\n<p>Conception et production de graphismes visuels pour divers supports comme les sites web, les brochures, les affiches, les publicités, etc.</p><br><br>\r\n\r\n<h2>2. Maîtrise des Logiciels :</h2>\r\n<p>Utilisation de logiciels de conception graphique tels que Adobe Photoshop, Illustrator, InDesign, et autres outils de CAO (conception assistée par ordinateur).</p><br><br>\r\n\r\n<h2>3. Direction Artistique :</h2>\r\n<p>Suivi des directives de design et des cahiers des charges pour s\'assurer que les créations respectent l\'identité visuelle de la marque ou du projet.</p><br><br>\r\n\r\n<h2>4. Travail Collaboratif :</h2>\r\n<p>Collaboration avec d\'autres professionnels comme les directeurs artistiques, les développeurs web, les spécialistes du marketing et les clients pour comprendre leurs besoins et attentes.</p><br><br>\r\n\r\n<h2>5. Créativité et Innovation :</h2>\r\n<p>Proposition d\'idées innovantes et créatives pour des campagnes publicitaires, des identités visuelles, et d\'autres projets de communication visuelle.</p><br><br>\r\n\r\n<h2>6. Gestion du Temps et des Projets :</h2>\r\n<p>Gestion des délais et des priorités pour livrer les projets en temps voulu tout en assurant une haute qualité de production.</p><br><br>\r\n\r\n<h2>7. Préparation des Fichiers pour l\'Impression :</h2>\r\n<p>Préparation et ajustement des fichiers pour l\'impression en respectant les normes techniques des imprimeurs (résolution, marges, couleurs).</p><br><br>\r\n\r\n<h2>Retouche et Modification :</h2>\r\n<p>Retouche d’images et modifications des projets en fonction des retours clients et des corrections demandées.</p><br><br>\r\n\r\n<h2>9. Connaissance des Tendances :</h2>\r\n<p>Veille permanente sur les tendances du design et les nouvelles technologies pour rester à jour et proposer des concepts modernes et attrayants.</p><br><br>\r\n\r\n<h2>10. Éthique et Responsabilité :</h2>\r\n<p>Respect des droits d’auteur, des licences et des normes de confidentialité lors de l\'utilisation de contenus et de la création de designs.</p><br><br>\r\n', '../images/graphisme.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creations`
--
ALTER TABLE `creations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `creations`
--
ALTER TABLE `creations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
