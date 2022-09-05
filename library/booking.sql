-- Adminer 4.8.1 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `library_booking` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `library_booking`;

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `booking_name` varchar(45) NOT NULL,
  `booking_computer` varchar(45) NOT NULL,
  `booking_start_time` datetime NOT NULL,
  `booking_end_time` datetime NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `booking` (`booking_id`, `booking_name`, `booking_computer`, `booking_start_time`, `booking_end_time`) VALUES
(2,	'Dave',	'freeComputer2',	'2022-05-09 08:00:00',	'2022-10-25 08:00:00');

-- 2022-09-05 14:31:13
