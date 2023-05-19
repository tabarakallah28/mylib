/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `db_mylib` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_mylib`;

CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publication_year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_publisher` int NOT NULL,
  `id_category` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_publisher` (`id_publisher`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `book` (`id`, `title`, `author`, `publication_year`, `id_publisher`, `id_category`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'Pelajaran', 'ahmad fuad', '2021', 1, 2, 23, NULL, '2023-05-19 12:32:41', NULL),
	(3, 'Novel', 'ahmad', '23', 1, 2, 12, '2023-05-16 11:14:03', '2023-05-19 12:32:52', NULL),
	(13, 'Majalah', 'ahmad', '23', 3, 2, 24, '2023-05-19 12:33:28', '2023-05-19 12:33:28', NULL),
	(14, 'kejuruan', 'ahmad fuadia', '22', 1, 2, 24, '2023-05-19 12:33:49', '2023-05-19 12:33:49', NULL),
	(15, 'Horror', 'ahmad fuadi', '43', 1, 3, 12, '2023-05-19 12:34:29', '2023-05-19 12:34:29', NULL);

CREATE TABLE IF NOT EXISTS `borrow` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_borrower` int NOT NULL,
  `id_book` int NOT NULL,
  `id_staff` int NOT NULL,
  `release_date` date NOT NULL,
  `due_date` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_borrower` (`id_borrower`),
  KEY `id_book` (`id_book`),
  KEY `id_staff` (`id_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `borrow` (`id`, `id_borrower`, `id_book`, `id_staff`, `release_date`, `due_date`, `note`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 6, 1, '2023-05-17', '2020-05-17', 'Selesai pinjam', NULL, '2023-05-19', NULL),
	(2, 3, 9, 2, '2023-05-25', '2023-05-24', 'Selesai pinjam', '2023-05-17', '2023-05-19', NULL),
	(3, 1, 2, 1, '2023-05-26', '2023-06-10', 'Selesai pinjam', '2023-05-19', '2023-05-19', NULL);

CREATE TABLE IF NOT EXISTS `borrower` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `borrower` (`id`, `name`, `birthdate`, `address`, `gender`, `contact`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'ally', '2023-05-11', 'jp.konci', 'P', '12351653757263', 'zfxtd2@gmail.com', '2023-05-15 12:53:11', '2023-05-16 08:22:31', NULL),
	(2, 'agiw', '2023-05-25', 'kp cihuunu', 'P', '098752365625374', 'agi@gmail.com', '2023-05-15 12:55:34', '2023-05-15 12:56:12', '2023-05-15 12:56:12'),
	(3, 'ahmad cihuni', '2023-05-12', 'kp cihuunu jauhh', 'L', '121334343212', 'agiw@gmail.com', '2023-05-15 13:04:34', '2023-05-15 13:04:57', NULL),
	(4, 'ADAM', '2023-05-17', 'kp cihuunu jauhh', 'P', '123243433465', 'zfxtd2@gmail.com', '2023-05-16 08:26:14', '2023-05-16 08:26:34', '2023-05-16 08:26:34');

CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `category` (`id`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'majalah 1', '2023-05-15', '2023-05-15', '2023-05-15'),
	(2, 'Majalah', '2023-05-15', '2023-05-19', NULL),
	(3, 'horror 1', '2023-05-15', '2023-05-16', NULL);

CREATE TABLE IF NOT EXISTS `publisher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `publisher` (`id`, `name`, `address`, `contact`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Pt bandung raya', 'Bandung barat', '09876545755', '2023-05-15', '2023-05-19', NULL),
	(2, 'ally', 'qwqw', '123245645667', '2023-05-15', '2023-05-15', '2023-05-15'),
	(3, 'Pt Alim Rugi', 'garut', '0978567586747', '2023-05-19', '2023-05-19', NULL);

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'ally', 'aa@aa.gmail', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2023-05-16 12:26:55', NULL),
	(2, 'ally', 'ah@asg', 'b472ff6dc2dd3dc016fab1d7bf41e0eb', '2023-05-12 11:27:52', '2023-05-12 11:27:52', NULL),
	(3, 'Aiw', 'AS@gms.co', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-15 09:27:48', '2023-05-15 09:31:23', '2023-05-15 09:31:23'),
	(4, 'user1', 'user1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-15 09:32:56', '2023-05-15 09:33:08', '2023-05-15 09:33:08');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
