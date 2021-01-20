-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2021 at 10:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'PC portables'),
(2, 'PC desktop'),
(3, 'Ecran'),
(4, 'Périphériques'),
(5, 'Soutien à SuperGoat');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
(1, 'Jonathan', 'Fructus', 'funkydudy@gmail.com', 'poutine132', ''),
(4, 'jojo', 'fruit', 'bite@mail.fr', '$2y$10$yPAT2VcvaMXYBJNz9TFgWe7Y2Jat9PvRsPgrYHhij4qqdyJ6fChlK', '0114141414'),
(5, 'Jonathan', 'Fructus', 'j.fructus69@gmail.com', '$2y$10$KeA3NwKNaLTb9KQLauKSYewy0vHsHTjbA3o2AdqdA0NMEGT45ZbZS', '0637808687');

-- --------------------------------------------------------

--
-- Table structure for table `content_order`
--

CREATE TABLE `content_order` (
  `id_command` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item`, `name`, `description`, `image`, `id_category`, `price`) VALUES
(1, 'IBM 5170', 'Avec ce PC de bureau surpuissant, vous pourrez faire tourner vos jeux préférés (Démineur, Solitaire) en Ultra LowLD 0.3K à plus de 10 FPS! Lecteur de disquette intégré, son 2.0 THX Dolby Atmos du turfu, et surtout... Un CLAVIER!', ' http://www.le-grenier-informatique.fr/medias/album/ibm-5170-1-2.jpg', 2, 999),
(2, 'Toshiba T3100e', 'Pc portable ultra fin et léger, idéal pour le télétravail. Processeur simple coeur 200Mhz pour faire du Git bash comme un pro, 64Mo de RAM qui rame, écran monochrome ultra rouge, clavier mécanique à switches en tantalium. Livré sans souris ni batterie, parce que de toute façon y\'en a pas besoin', 'http://www.le-grenier-informatique.fr/medias/album/toshiba-t3100e-1.jpg', 1, 699),
(3, 'Samsung Syncmaster 1722W', 'On ne présente plus ce fameux CRT display, plus connu sous le nom de \"cat heater\"! Avec lui, vous pourrez faire profiter votre quadrupède préféré d\'une vraie user experience, tout en prenant soin de vos petits yeux. Avec en featuring un poids de 21kgs, un encombrement réduit pour son immense taille de 17\", une dalle CRT QuadLD et un rétroéclairage néon pour une luminosité incomparable! Le pied ne se règle pas.', 'https://pbs.twimg.com/media/EDqqQToXsAASwaT?format=jpg&name=900x900', 3, 199),
(4, 'Clavier IBM modèle M', 'Un clavier qu\'il est bien pour taper des trucs.', 'https://i.ebayimg.com/images/g/liUAAOSwOVJf6rqf/s-l1600.jpg', 4, 1),
(5, 'Souris MouseTrak X202064548 v1.0', 'Les souris, c\'est pour les mecs qui ont pas de talent, donc on te propose un truc de bonhomme, un vrai. Peut aussi servir d\'arme blanche en cas d\'agression. Si tu fais top 1 à Warzone avec, on te la rembourse!', 'https://i.ebayimg.com/images/g/xDgAAOSwM1Ff-hIw/s-l1600.jpg', 4, 99),
(6, 'Caaaaaaasque Sennheiser HD 414X ', 'Tellement plus classe que le RGB tuning des plages, il y a la mousse jaune. En plus, elle tient chaud aux oreilles. Et encore en plus, il sera assorti à ton walkman k7 Fony. Oui, on le sait que tu en possède un, nous mitonne pas.', 'https://i.ebayimg.com/images/g/T6wAAOSwTwxffTfD/s-l1600.jpg', 4, 10),
(7, 'Soutien à SuperGoat', 'Si tu aimes notre super site, et que tu veux qu\'on te propose plus de matos de fifou pour atomiser la concurrence sur Pong, tu peux nous faire un don. Bon, il se peut qu\'on utilise ton Paypal pour se boire un café, on va pas se mentir. Mais avoue qu\'on est sympas, et qu\'on le vaut bien! Keur sur toi, cher donateur! :heart:', 'https://i.ytimg.com/vi/-qwJ9R8m5OE/maxresdefault.jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `paid` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `content_order`
--
ALTER TABLE `content_order`
  ADD PRIMARY KEY (`id_command`,`id_item`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content_order`
--
ALTER TABLE `content_order`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content_order`
--
ALTER TABLE `content_order`
  ADD CONSTRAINT `content_order_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`item`),
  ADD CONSTRAINT `content_order_ibfk_2` FOREIGN KEY (`id_command`) REFERENCES `order` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
