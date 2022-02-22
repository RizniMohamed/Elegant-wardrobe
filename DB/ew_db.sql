-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2022 at 10:49 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ew_db`
--
CREATE DATABASE IF NOT EXISTS `ew_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ew_db`;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `auth_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`auth_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`auth_id`, `email`, `password`, `role_id`) VALUES
(1, 'mnriznimohamed@gmail.com', '0775824807', 1),
(2, 'mnrazamohamed@gmail.com', '0777515721', 2),
(10, 'a@a.com', 'a', 2);

--
-- Triggers `auth`
--
DROP TRIGGER IF EXISTS `setUser`;
DELIMITER $$
CREATE TRIGGER `setUser` AFTER INSERT ON `auth` FOR EACH ROW INSERT INTO user(auth_id) VALUES (NEW.auth_id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'women'),
(2, 'men'),
(3, 'kid');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `total_price` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `op_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `size` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`op_id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Triggers `order_product`
--
DROP TRIGGER IF EXISTS `setQuantity`;
DELIMITER $$
CREATE TRIGGER `setQuantity` BEFORE INSERT ON `order_product` FOR EACH ROW UPDATE product SET quantity=( quantity - NEW.quantity) WHERE product_id=NEW.product_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `unit_price` double NOT NULL,
  `quantity` int NOT NULL,
  `cat_id` int NOT NULL,
  `subcat_id` int NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `subcat_id` (`subcat_id`),
  KEY `category_id` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `image`, `unit_price`, `quantity`, `cat_id`, `subcat_id`) VALUES
(1, 'HUF & DEE Crew Neck Plain Women\'s T-shirt', '../Resource/product/women/clothing/wc1.jpg', 1590, 34, 1, 1),
(2, 'KANISHKA Casual Cotton Shalwar Material', '../Resource/product/women/clothing/wc2.jpg', 1690, 47, 1, 1),
(3, 'DEE ESSENTIAL Women\'s Hooded Jacket', '../Resource/product/women/clothing/wc3.jpg', 3990, 48, 1, 1),
(4, 'Casual Fusion Saree', '../Resource/product/women/clothing/wc4.jpg', 5890, 50, 1, 1),
(5, 'HUF & DEE V Neck Plain Ladies T-Shirt', '../Resource/product/women/clothing/wc5.jpg', 1190, 48, 1, 1),
(6, 'HUF & DEE Crew Neck Plain Women\'s T-shirt', '../Resource/product/women/clothing/wc6.jpg', 1590, 46, 1, 1),
(46, 'PINK ELEPHANT Women\'s Casual Bag', '../Resource/product/women/accessories/wa1.jpg', 1490, 50, 1, 3),
(47, 'FOREVER SKIN NATURALS Aloe vera 95%', '../Resource/product/women/accessories/wa2.jpg', 500, 50, 1, 3),
(48, 'NIKE GOLD EDITION Women\'s Perfume - 100ml', '../Resource/product/women/accessories/wa3.jpg', 2490, 50, 1, 3),
(49, 'Women\'s Hair Brush', '../Resource/product/women/accessories/wa4.jpg', 490, 50, 1, 3),
(50, 'Women\'s Hats', '../Resource/product/women/accessories/wa5.jpg', 450, 50, 1, 3),
(51, 'RASASI BLUE LADY Women\'s Body Spray - 200ML', '../Resource/product/women/accessories/wa6.jpg', 1390, 50, 1, 3),
(52, 'SINGING FISH Women\'s Flip Flop', '../Resource/product/women/footwear/wf1.jpg', 990, 50, 1, 2),
(53, 'Givo stylish flats', '../Resource/product/women/footwear/wf2.jpg', 2390, 50, 1, 2),
(54, 'Faux Leather Heels', '../Resource/product/women/footwear/wf3.jpeg', 5950, 50, 1, 2),
(55, 'Aldo Wicoethiel Light Pink  Satin Heels', '../Resource/product/women/footwear/wf4.jpeg', 17950, 50, 1, 2),
(56, 'Women\'s Printed Sandal', '../Resource/product/women/footwear/wf5.jpg', 1550, 50, 1, 2),
(57, 'Beira Rio Womens Rose Gold Heels', '../Resource/product/women/footwear/wf6.jpeg', 6950, 50, 1, 2),
(58, ' DEEDAT Crew Neck Printed Men\'s T-shirt', '../Resource/product/men/clothing/mc1.jpg', 2490, 50, 2, 1),
(59, 'DEEDAT Crew Neck Plain Men\'s T-shirt', '../Resource/product/men/clothing/mc2.jpg', 2790, 50, 2, 1),
(60, 'TOM DAVID Printed Casual Shirt  ', '../Resource/product/men/clothing/mc3.jpg', 2190, 50, 2, 1),
(61, 'BLACK JACK Check Men\'s Casual Shirt', '../Resource/product/men/clothing/mc4.jpg', 1690, 50, 2, 1),
(62, 'DEEDAT Plain Men\'s Kurta', '../Resource/product/men/clothing/mc5.jpg', 2990, 50, 2, 1),
(63, 'DEEDAT Long Sleeve Plain Men\'s Hoodie', '../Resource/product/men/clothing/mc6.jpg', 3990, 50, 2, 1),
(64, 'SINGING FISH Men\'s Flip Flop', '../Resource/product/men/footwear/mf1.jpg', 590, 50, 2, 2),
(65, ' PINK ELEPHANT Men\'s Printed Flip Flop', '../Resource/product/men/footwear/mf2.jpg', 690, 50, 2, 2),
(66, 'SINGING FISH Men\'s Flip-Flop', '../Resource/product/men/footwear/mf3.jpg', 1190, 50, 2, 2),
(67, 'DEEDAT Men\'s Flip-Flop', '../Resource/product/men/footwear/mf4.jpg', 1690, 50, 2, 2),
(68, 'Black Colour Shoe', '../Resource/product/men/footwear/mf5.jpeg', 4500, 50, 2, 2),
(69, 'DEEDAT Men\'s Flip-Flop', '../Resource/product/men/footwear/mf6.jpg', 1690, 50, 2, 2),
(70, 'BLACK KNIGHT Hair Gel - 100ml', '../Resource/product/men/accessories/ma1.jpg', 225, 50, 2, 3),
(71, 'NIKE THE PERFUME Men - 75ml', '../Resource/product/men/accessories/ma2.jpg', 2290, 50, 2, 3),
(72, 'DEEDAT Men\'s Wallet', '../Resource/product/men/accessories/ma3.jpg', 1790, 50, 2, 3),
(73, ' MBRK Formal Men\'s Belt', '../Resource/product/men/accessories/ma4.jpg', 2690, 50, 2, 3),
(74, 'Rexona Men Ice Cool Roll On', '../Resource/product/men/accessories/ma5.jpeg', 470, 50, 2, 3),
(75, 'YACHT MAN Blue Perfume', '../Resource/product/men/accessories/ma6.jpg', 1490, 50, 2, 3),
(76, 'Crew Neck Plain Boy\'s T-Shirt', '../Resource/product/kid/clothing/kc1.jpg', 890, 50, 3, 1),
(77, 'Crew Neck Printed Girls Dress', '../Resource/product/kid/clothing/kc2.jpg', 1190, 50, 3, 1),
(78, 'Short Sleeve Plain Boy\'s Pijama Set', '../Resource/product/kid/clothing/kc3.jpg', 1290, 50, 3, 1),
(79, 'FIA MARIA Crew Neck Printed Girls Dress', '../Resource/product/kid/clothing/kc4.jpg', 890, 50, 3, 1),
(80, ' Short Sleeve Printed Boys Pijama Set', '../Resource/product/kid/clothing/kc5.jpg', 1790, 50, 3, 1),
(81, 'LIL COP Crew Neck Printed Baby Girls T-Shirt', '../Resource/product/kid/clothing/kc6.jpg', 490, 50, 3, 1),
(82, 'Children\'s Casual Girl\'s Shoe', '../Resource/product/kid/footwear/kf1.jpg', 990, 50, 3, 2),
(83, 'Children\'s Casual Shoe', '../Resource/product/kid/footwear/kf2.jpg', 1490, 50, 3, 2),
(84, 'PINK ELEPHANT Kid\'s Flip Flop', '../Resource/product/kid/footwear/kf3.jpg', 450, 50, 3, 2),
(85, 'Girl\'s Casual Shoe', '../Resource/product/kid/footwear/kf4.jpg', 1590, 50, 3, 2),
(86, 'SINGING FISH Kid\'s Flip Flop', '../Resource/product/kid/footwear/kf5.jpg', 450, 50, 3, 2),
(87, 'Boy\'s Shoe', '../Resource/product/kid/footwear/kf6.jpg', 1490, 50, 3, 2),
(88, 'Rocking Chair', '../Resource/product/kid/accessories/ka1.jpg', 8990, 50, 3, 3),
(89, 'Nursery Back Pack Purple', '../Resource/product/kid/accessories/ka2.jpg', 1790, 50, 3, 3),
(90, 'Red Alice Band', '../Resource/product/kid/accessories/ka3.jpg', 190, 50, 3, 3),
(91, 'Activities Books', '../Resource/product/kid/accessories/ka4.jpg', 850, 50, 3, 3),
(92, 'Kid\'s Gold Bangle', '../Resource/product/kid/accessories/ka5.jpg', 690, 50, 3, 3),
(93, 'Plastic Water Bottle - 350ml', '../Resource/product/kid/accessories/ka6.jpg', 690, 50, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `subcat_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `name`) VALUES
(1, 'clothing'),
(2, 'footwear'),
(3, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `auth_id` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `auth_id` (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `image`, `auth_id`) VALUES
(1, 'Rizni Riz', '../Resource/dp/baby.jpg', 1),
(2, 'Raza', NULL, 2),
(3, 'new baby', '../Resource/dp/new baby.png', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `sub_category` (`subcat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`auth_id`) REFERENCES `auth` (`auth_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
