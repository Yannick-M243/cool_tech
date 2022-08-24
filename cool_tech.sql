-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 août 2022 à 14:35
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cool_tech`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `article_name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `creation_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `category_id`, `article_name`, `content`, `creation_date`) VALUES
(1, 1, 'Samsung Next exec argues Web3 projects must face the challenge of utility', 'While Web3 has shown a lot of potential since its inception, some still believe utility is a challenge that players in the space must face, according to a Samsung Next executive. \r\n\r\nIn an interview, Raymond Liao, managing director at Samsung Next, talked about the company’s move to dive into Web3 by investing in “MachineFi,” a term coined by IoTeX to describe a futuristic paradigm in which machines become the primary workforce and are powered by Web3 technologies.\r\n\r\nAccording to Liao, Samsung Next focuses on investing in blockchain, artificial intelligence and the Metaverse, to name a few, and this is why MachineFi has become an area of interest. He explained:\r\n\r\n\"So, you can see that what IoTeX is going after fits into several of our focus areas. [...] And I hope we can contribute to the further success of the MachineFi vision. It is very exciting.\"\r\nApart from MachineFi, the Samsung executive also talked about Web3 and how the crypto winter is an opportunity for investors. Liao said that this year is better than the last and is good for investors and product builders. In the past, the executive believed that market returns were “too inflated.\"\r\n\r\nIn addition to that, the executive also highlighted that instead of focusing on 10x returns, the industry should concentrate on implementation and face the challenge of utility to expand the Web3 ecosystem. He said:\r\n\r\n“It’s now time to sit down and implement. We need more utility out of this Web3 amazing infrastructure.\"', '2022-08-02'),
(2, 3, 'AMD Radeon RX 6600 XT Review', 'The AMD Radeon RX 6600 XT is AMD’s latest attempt to create the ultimate GPU for 1080p gaming. This puts it in the same price bracket as Nvidia’s stellar RTX 3060 Ti.\r\n\r\nFeaturing RDNA 2 architecture, the RX 6600 XT supports some high-end features despite its low price, with the most noticeable being ray tracing.\r\n\r\nHaving thoroughly tested and benchmarked the card, I can confirm the AMD RX 6600 XT is an excellent value GPU, and an ideal choice for any gamer on a budget. The only downside is that, despite only costing $30 more, the Nvidia RTX 3060 Ti offers better performance in a few key titles.\r\n\r\nThe AMD Radeon RX 6600 XT is currently at the bottom of AMD’s current generation of GPUs, sitting below the more expensive RX 6800 I tested last year.\r\n\r\nThis means it retains the core selling points of RDNA 2, which is the same architecture used to run the PS5 and Xbox Series X/S games consoles. These include support for ray tracing light effects on compatible games, Smart Access Memory technology, Infinity Cache tech, plus support for the newly added FidelityFX Super Resolution.\r\n\r\nRay tracing is an advanced technology Nvidia took mainstream when it launched its 20-series graphics cards in 2018. The tech lets GPUs render significantly more realistic lighting effects, such as real-time reflections and shadows. It may not sound exciting on paper, but in reality it makes games feel far more immersive.\r\n\r\nThe only downside is that ray tracing is super-demanding. To the point the tech can halve frame rates if settings are maxed out in compatible games.\r\n\r\nsource: https://www.trustedreviews.com/reviews/amd-radeon-rx-6600-xt', '2022-08-09'),
(3, 2, 'What Is Instagram, and Why Should You Be Using It?', 'On Instagram, the main intention is to share and find the best photos and videos. Every user profile has follower and following counts, representing how many people they follow and how many other users are following them.\r\n\r\nIf you want to follow someone, go to their user profile and tap Follow. If a user has their profile set to private, they must first approve your request.\r\n\r\nIf you create a public account, anyone can find and view your profile, along with your photos and videos. Set your Instagram profile to private if you want only the people you approve to see your posts. If you\'re under 16 when you create your profile, it will start as private by default. You can still make it public afterward, however.\r\n\r\nInteracting on posts is fun and easy. Double-tap any post to like it, or tap the speech bubble to add a comment. Click the arrow button to share a post with someone using Instagram Direct. Facebook Messenger has been integrated into Instagram\'s direct messaging, so you can direct message Facebook contacts from Instagram.\r\n\r\nIf you want to find or add more friends or interesting accounts, tap Search (magnifying glass icon) to browse through tailored posts recommended to you. Or, tap Search, then add a user, subject, or hashtag to the search field to search for that term.\r\n\r\nApply Filters and Edit Your Instagram Posts\r\nInstagram has come a long way since its early days in terms of posting options. When it launched in 2010, users could only post photos through the app, and then add filters without any extra editing features.\r\n\r\nToday, you can post through the app or website, or you can post existing photos or videos from your device. Depending on the video post type, an Instagram video can be anywhere from three seconds to 60 minutes in length. For your photos, you have many filter options, plus the ability to tweak and edit.\r\n\r\nsource: https://www.lifewire.com/what-is-instagram-3486316', '2022-08-16'),
(4, 4, 'The metaverse could actually help people', 'The first person to write about the “metaverse” was Neal Stephenson in his 1992 novel Snow Crash, but the concept of alternative electronic realms, including the “cyberspace” of William Gibson’s 1984 novel Neuromancer, was already well established.\r\n\r\nIn contrast to what we typically think of as the internet, a metaverse is a 3D immersive environment shared by multiple users, in which you can interact with others via avatars. A metaverse can, with the support of the right technology, feel like real life, with all the usual elements of work, play, trade, friendship, love—a world of its own.\r\n\r\nPerhaps the best-known prototype metaverse is the online virtual world Second Life, whose very name implies an alternate existence. Other games might also be said to be metaverses in their own right: World of Warcraft, Everquest, Fortnite, Animal Crossing. Each of these offers its own version of an immersive world, although they don’t quite have the ability to completely take over your senses. Most users experience these games from the outside looking in: screens front and center, with speakers on the sides. Actions are mediated by a keyboard, mouse, trackpad, or game controller instead of players’ hands and feet.\r\n\r\nTechnology is starting to change that. High-density screens, virtual-­reality goggles and glasses, surround sound, and spatial audio are putting more genuinely immersive experiences within reach. Cameras are gaining 3D capabilities, and single microphones are giving way to microphone arrays that capture sound with better depth and position. Augmented reality, which overlays virtual objects onto a video feed of the real world, provides a bridge between purely virtual and analog or real experiences. There is progress toward adding a sense of touch, too, in the form of multi­touch screens, haptic technologies, control gloves, and other wearables. Wraparound environments like Industrial Light and Magic’s Stagecraft are within reach only to certain industries for now but may see wider use as technology follows the typical curve of adoption and commoditization.\r\n\r\nsource: https://www.technologyreview.com/2021/10/27/1036817/metaverse-facebook-virtual-reality-augmented/', '2022-08-18'),
(5, 2, 'Intel Core i9-12900K Review', '\"Alder Lake,\" Intel\'s family of 12th Generation processors, has arrived—and with it, a new CPU paradigm. Intel\'s Core i9-12900K desktop CPU ($589) leads the pack of the company\'s 12th Generation processors, and brings with it a whole host of upgrades and innovations to the desktops of now and tomorrow. These tick-ups include support for the new, high-speed DDR5 RAM standard, as well as an upgrade to PCI Express 5.0, on the first new motherboard platform to support the latest chips, the Intel Z690. Intel also worked closely with Microsoft to optimize the new CPUs for Windows 11, adding new scheduling features that intelligently load up the Core i9-12900K depending on which cores are being used where, and for what.\r\n\r\nAlder Lake and the Core i9-12900K indeed impress, but our relationship with the CPU...is complicated. For all the outright wins we saw in our benchmarks (and there were many), the added cost of upgrading to yet another new motherboard platform won\'t outweigh the win percentages for many shoppers. Intel\'s older-yet-still-reliable \"Comet Lake\" Core i9-10900K kept itself in the race during several benchmarks, while the eight-core, rather cheaper AMD Ryzen 7 5800X ($449 list price, but currently snipe-discounted to $386 on Amazon and Newegg) proves itself a worthy contender on performance-versus-price in PC gaming.\r\n\r\nsource:https://www.pcmag.com/reviews/intel-core-i9-12900k', '2022-08-29');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Tech news'),
(2, 'Software reviews'),
(3, 'Hardware reviews'),
(4, 'Opinion pieces');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `tag_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`tag_id`, `article_id`, `tag_name`) VALUES
(40, 4, 'AI'),
(41, 4, 'Google'),
(42, 4, 'Yellow'),
(52, 1, 'AI'),
(53, 1, 'Yellow'),
(54, 1, 'Singularity'),
(66, 2, 'High-Performance Computing'),
(67, 2, 'AI'),
(68, 2, 'Yellow'),
(69, 3, 'AI'),
(70, 3, 'Singularity'),
(73, 5, 'High-Performance Computing'),
(74, 5, 'Google');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `article_id` (`article_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Contraintes pour la table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
