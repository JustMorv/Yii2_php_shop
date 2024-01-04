-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `shopPlanel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `shopPlanel`;

CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(1,	'0',	'SPORTSWEAR',	NULL,	NULL),
(2,	'0',	'WOMENS',	NULL,	NULL),
(3,	'0',	'KIDS',	NULL,	NULL),
(4,	'0',	'MENS',	NULL,	NULL),
(5,	'0',	'FASHION',	NULL,	NULL),
(6,	'0',	'HOUSEHOLDS',	NULL,	NULL),
(7,	'0',	'INTERIORS',	NULL,	NULL),
(8,	'0',	'CLOTHING',	NULL,	NULL),
(9,	'0',	'BAGS',	NULL,	NULL),
(10,	'0',	'SHOES',	NULL,	NULL),
(11,	'0',	'NIKE',	NULL,	NULL),
(12,	'1',	'UNDER ARMOUR',	NULL,	NULL),
(13,	'1',	'ADIDAS',	NULL,	NULL),
(14,	'1',	'PUMA',	NULL,	NULL),
(15,	'1',	'ASICS',	NULL,	NULL),
(16,	'2',	'FENDI',	NULL,	NULL),
(17,	'2',	'GUESS',	NULL,	NULL),
(18,	'2',	'VALENTINO',	NULL,	NULL),
(19,	'2',	'DIOR',	NULL,	NULL),
(20,	'2',	'VERSACE',	NULL,	NULL),
(21,	'4',	'ARMANI',	'',	''),
(22,	'4',	'PRADA',	NULL,	NULL),
(23,	'4',	'DOLCE AND GABBANA',	NULL,	NULL),
(24,	'4',	'CHANEL',	NULL,	NULL),
(25,	'4',	'GUCCI',	NULL,	NULL),
(26,	'3',	'FENDI',	NULL,	NULL),
(27,	'3',	'GUESS',	NULL,	NULL),
(28,	'3',	'VALENTINO',	NULL,	NULL),
(29,	'3',	'DIOR',	NULL,	NULL),
(30,	'3',	'VERSACE',	'',	''),
(33,	'0',	'1212',	'',	'');

CREATE TABLE `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime(6) NOT NULL,
  `update_at` datetime(6) NOT NULL,
  `qty` int NOT NULL,
  `sum` double NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `order` (`id`, `created_at`, `update_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `adress`) VALUES
(1,	'2023-09-24 19:26:14.000000',	'2023-09-24 19:26:14.000000',	40,	972,	1,	'asdasdas',	'e@gmail.com',	'123123',	'12312321'),
(2,	'2023-09-24 19:43:23.000000',	'2023-09-24 19:43:23.000000',	40,	972,	0,	'asdasdas',	'e@gmail.com',	'123123',	'12312321123'),
(3,	'2023-09-24 19:48:41.000000',	'2023-09-24 19:48:41.000000',	40,	972,	0,	'weqw',	'w@gmail.com',	'12312312',	'weqw'),
(4,	'2023-09-25 13:16:18.000000',	'2023-09-25 13:16:18.000000',	8,	212,	0,	'вася',	'themorvol@gmail.com',	'12312312',	'какой-то'),
(5,	'2023-09-25 13:30:16.000000',	'2023-09-25 13:30:16.000000',	6,	172,	0,	'weqw',	'themorvol@gmail.com',	'123123',	'какой-то'),
(6,	'2023-09-25 13:31:24.000000',	'2023-09-25 13:31:24.000000',	6,	172,	0,	'weqw',	'themorvol@gmail.com',	'123123212312321',	'какой-то'),
(7,	'2023-09-25 13:34:38.000000',	'2023-09-25 13:34:38.000000',	2,	112,	0,	'asdasdas',	'e@gmail.com',	'123123212312321',	'12312321123'),
(8,	'2023-09-25 13:39:26.000000',	'2023-09-25 13:39:26.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(9,	'2023-09-25 13:43:13.000000',	'2023-09-25 13:43:13.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(10,	'2023-09-25 13:46:30.000000',	'2023-09-25 13:46:30.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(11,	'2023-09-25 13:46:48.000000',	'2023-09-25 13:46:48.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(12,	'2023-09-26 08:29:08.000000',	'2023-09-26 08:29:08.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(13,	'2023-09-26 08:29:13.000000',	'2023-09-26 08:29:13.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(14,	'2023-09-26 08:30:10.000000',	'2023-09-26 08:30:10.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(15,	'2023-09-26 08:32:02.000000',	'2023-09-26 08:32:02.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(16,	'2023-09-26 08:32:07.000000',	'2023-09-26 08:32:07.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(17,	'2023-09-26 08:35:03.000000',	'2023-09-26 08:35:03.000000',	6,	172,	0,	'николай',	'themorvol@gmail.com',	'0000000000000000000',	'anything'),
(18,	'2023-09-26 08:40:12.000000',	'2023-09-26 08:40:12.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(19,	'2023-09-26 08:40:25.000000',	'2023-09-26 08:40:25.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(20,	'2023-09-26 08:48:35.000000',	'2023-09-26 08:48:35.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(21,	'2023-09-26 08:51:32.000000',	'2023-09-26 08:51:32.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(22,	'2023-09-26 08:52:17.000000',	'2023-09-26 08:52:17.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(23,	'2023-09-26 08:53:34.000000',	'2023-09-26 08:53:34.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(24,	'2023-09-26 08:56:52.000000',	'2023-09-26 08:56:52.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(25,	'2023-09-26 08:58:11.000000',	'2023-09-26 08:58:11.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(26,	'2023-09-26 09:18:53.000000',	'2023-09-26 09:18:53.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(27,	'2023-09-26 12:58:50.000000',	'2023-09-26 12:58:50.000000',	4,	132,	0,	'asdasdas',	'themorvol@gmail.com',	'12312312',	'weqw'),
(28,	'2023-10-31 19:36:12.000000',	'2023-10-31 19:36:12.000000',	5,	188,	0,	'asdasdas',	'themorvol@gmail.com',	'123123',	'anything'),
(29,	'2023-12-07 16:09:03.000000',	'2023-12-07 16:09:03.000000',	4,	132,	0,	'12312`',	'themorvol@gmail.com',	'123123',	'какой-то');

CREATE TABLE `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int NOT NULL,
  `sum_item` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1,	2,	3,	'Easy Polo Black Edition',	10,	26,	260),
(2,	2,	1,	'Easy Polo Black Edition',	56,	12,	672),
(3,	2,	5,	'Easy Polo Black Edition',	20,	2,	40),
(4,	3,	3,	'Easy Polo Black Edition',	10,	26,	260),
(5,	3,	1,	'Easy Polo Black Edition',	56,	12,	672),
(6,	3,	5,	'Easy Polo Black Edition',	20,	2,	40),
(7,	4,	1,	'Easy Polo Black Edition',	56,	2,	112),
(8,	4,	3,	'Easy Polo Black Edition',	10,	2,	20),
(9,	4,	5,	'Easy Polo Black Edition',	20,	4,	80),
(10,	5,	1,	'Easy Polo Black Edition',	56,	2,	112),
(11,	5,	3,	'Easy Polo Black Edition',	10,	2,	20),
(12,	5,	5,	'Easy Polo Black Edition',	20,	2,	40),
(13,	6,	1,	'Easy Polo Black Edition',	56,	2,	112),
(14,	6,	3,	'Easy Polo Black Edition',	10,	2,	20),
(15,	6,	5,	'Easy Polo Black Edition',	20,	2,	40),
(16,	7,	1,	'Easy Polo Black Edition',	56,	2,	112),
(17,	8,	1,	'Easy Polo Black Edition',	56,	2,	112),
(18,	8,	3,	'Easy Polo Black Edition',	10,	2,	20),
(19,	8,	5,	'Easy Polo Black Edition',	20,	2,	40),
(20,	9,	1,	'Easy Polo Black Edition',	56,	2,	112),
(21,	9,	3,	'Easy Polo Black Edition',	10,	2,	20),
(22,	9,	5,	'Easy Polo Black Edition',	20,	2,	40),
(23,	10,	1,	'Easy Polo Black Edition',	56,	2,	112),
(24,	10,	3,	'Easy Polo Black Edition',	10,	2,	20),
(25,	10,	5,	'Easy Polo Black Edition',	20,	2,	40),
(26,	11,	1,	'Easy Polo Black Edition',	56,	2,	112),
(27,	11,	3,	'Easy Polo Black Edition',	10,	2,	20),
(28,	11,	5,	'Easy Polo Black Edition',	20,	2,	40),
(29,	12,	1,	'Easy Polo Black Edition',	56,	2,	112),
(30,	12,	3,	'Easy Polo Black Edition',	10,	2,	20),
(31,	12,	5,	'Easy Polo Black Edition',	20,	2,	40),
(32,	13,	1,	'Easy Polo Black Edition',	56,	2,	112),
(33,	13,	3,	'Easy Polo Black Edition',	10,	2,	20),
(34,	13,	5,	'Easy Polo Black Edition',	20,	2,	40),
(35,	14,	1,	'Easy Polo Black Edition',	56,	2,	112),
(36,	14,	3,	'Easy Polo Black Edition',	10,	2,	20),
(37,	14,	5,	'Easy Polo Black Edition',	20,	2,	40),
(38,	15,	1,	'Easy Polo Black Edition',	56,	2,	112),
(39,	15,	3,	'Easy Polo Black Edition',	10,	2,	20),
(40,	15,	5,	'Easy Polo Black Edition',	20,	2,	40),
(41,	16,	1,	'Easy Polo Black Edition',	56,	2,	112),
(42,	16,	3,	'Easy Polo Black Edition',	10,	2,	20),
(43,	16,	5,	'Easy Polo Black Edition',	20,	2,	40),
(44,	17,	1,	'Easy Polo Black Edition',	56,	2,	112),
(45,	17,	3,	'Easy Polo Black Edition',	10,	2,	20),
(46,	17,	5,	'Easy Polo Black Edition',	20,	2,	40),
(47,	18,	1,	'Easy Polo Black Edition',	56,	2,	112),
(48,	18,	3,	'Easy Polo Black Edition',	10,	2,	20),
(49,	19,	1,	'Easy Polo Black Edition',	56,	2,	112),
(50,	19,	3,	'Easy Polo Black Edition',	10,	2,	20),
(51,	20,	1,	'Easy Polo Black Edition',	56,	2,	112),
(52,	20,	3,	'Easy Polo Black Edition',	10,	2,	20),
(53,	21,	1,	'Easy Polo Black Edition',	56,	2,	112),
(54,	21,	3,	'Easy Polo Black Edition',	10,	2,	20),
(55,	22,	1,	'Easy Polo Black Edition',	56,	2,	112),
(56,	22,	3,	'Easy Polo Black Edition',	10,	2,	20),
(57,	23,	1,	'Easy Polo Black Edition',	56,	2,	112),
(58,	23,	3,	'Easy Polo Black Edition',	10,	2,	20),
(59,	24,	1,	'Easy Polo Black Edition',	56,	2,	112),
(60,	24,	3,	'Easy Polo Black Edition',	10,	2,	20),
(61,	25,	1,	'Easy Polo Black Edition',	56,	2,	112),
(62,	25,	3,	'Easy Polo Black Edition',	10,	2,	20),
(63,	26,	1,	'Easy Polo Black Edition',	56,	2,	112),
(64,	26,	3,	'Easy Polo Black Edition',	10,	2,	20),
(65,	27,	1,	'Easy Polo Black Edition',	56,	2,	112),
(66,	27,	3,	'Easy Polo Black Edition',	10,	2,	20),
(67,	28,	1,	'Easy Polo Black Edition',	56,	3,	168),
(68,	28,	3,	'Easy Polo Black Edition',	10,	2,	20),
(69,	29,	3,	'Easy Polo Black Edition',	10,	2,	20),
(70,	29,	1,	'Easy Polo Black Edition',	56,	2,	112);

CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `price` int NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `hit` int DEFAULT NULL,
  `new` int DEFAULT NULL,
  `sale` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(1,	4,	'Easy Polo Black Edition',	'Великолепные джинсы',	56,	'',	'',	'product1.jpg',	1,	0,	0),
(2,	4,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	0,	0,	1),
(3,	4,	'Easy Polo Black Edition',	'фвфывфывфывфы',	10,	'loremasdkasdasdj',	'papapapapapap',	'no-image.png',	1,	NULL,	0),
(4,	9,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	0,	0,	1),
(5,	9,	'Easy Polo Black Edition',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	1,	1,	0),
(6,	9,	'трико',	'фвфывфывфывфы',	10,	'',	'',	'product1.jpg',	1,	NULL,	1),
(7,	29,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	0,	1,	0),
(8,	29,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	1,	0,	1),
(9,	29,	'трико',	'фвфывфывфывфы',	10,	'',	'',	'product1.jpg',	0,	NULL,	0),
(10,	29,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	1,	1,	0),
(11,	29,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	0,	0,	0),
(12,	29,	'трико',	'фвфывфывфывфы',	10,	'',	'',	'product1.jpg',	1,	NULL,	1),
(14,	4,	'Easy Polo Black Edition',	'Великолепные джинсы',	56,	'',	'',	'product1.jpg',	1,	0,	0),
(15,	4,	'джинсы',	'Великолепные джинсы',	20,	'',	'',	'product1.jpg',	0,	0,	1),
(16,	4,	'Easy Polo Black Edition',	'фвфывфывфывфы',	10,	'',	'',	'no-image.png',	1,	NULL,	0);

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `authKey` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `user` (`id`, `username`, `password`, `authKey`) VALUES
(1,	'admin',	'$2y$13$5Oxupj1vHa0gLu75JO7DTuO6/UiEiMs2bUVI1mPNblpz1UJm.W7Ru',	'hl6Dsd6LVjBzD1ur6JKxDlO3x7D1X5Ii');

-- 2024-01-04 05:18:58
