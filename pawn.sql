-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2024 at 09:48 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawn`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
CREATE TABLE IF NOT EXISTS `apps` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` char(8) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tiktok` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `name`, `type`, `phone`, `facebook`, `tiktok`, `logo`, `detail`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Somphone', NULL, '+8562097778889', NULL, NULL, 'upload/app/logo-pawn.png', 'kk2', 1, NULL, '2024-05-12 02:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
CREATE TABLE IF NOT EXISTS `branches` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` char(5) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sig1` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sig2` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sig3` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sig4` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `code`, `name`, `tel`, `address`, `location`, `sig1`, `sig2`, `sig3`, `sig4`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'TX', 'ສຳນັກງານໃຫຍ່', '02097778889', 'ບ້ານທ່າພະລານໄຊ, ເມືອງສີສັດຕະນາ, ນະຄອນຫຼວງວຽງຈັນ', NULL, NULL, NULL, NULL, NULL, 'upload/branchs/240403040944.png', NULL, '2024-04-03 09:09:44'),
(2, 'DD', 'ສາຂາດົງໂດກ', '02096667779', 'ບ້ານດົງໂດກ, ເມືອງໄຊທານີ, ນະຄອນຫຼວງວຽງຈັນ', NULL, NULL, NULL, NULL, NULL, 'upload/branchs/240403041349.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1715502703;', 1715502703),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1715502703);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `unit_name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'ມືຖື', 'ໜ່ວຍ', NULL, NULL),
(2, 'ຄອມພິວເຕີ', 'ໜ່ວຍ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `valuedt` date NOT NULL,
  `code` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `rate` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `valuedt`, `code`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, '2024-04-04', 'THB', 'ບາດ', 652.00, NULL, '2024-04-26 01:15:39'),
(2, '2024-04-26', 'LAK', 'ກີບ', 0.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `count_sv` int DEFAULT '0',
  `gender` char(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'm',
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `vill_id` int DEFAULT NULL,
  `dis_name` int DEFAULT NULL,
  `pro_name` int DEFAULT NULL,
  `detail` text COLLATE utf8mb3_unicode_ci,
  `image` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `count_sv`, `gender`, `name`, `lname`, `phone`, `address`, `vill_id`, `dis_name`, `pro_name`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'm', 'ພົງສະຫວັນ', 'ບຸບຜາຈັນ', '020 55588662', 'ທ່າພະລານໄຊ, ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ', 1, 3, 1, NULL, 'upload/customers/240424023015.jpg', NULL, '2024-04-23 19:45:29'),
(5, 0, 'f', 'ສຸລິຍາ', 'ອິນທະວົງ', '020 54243733', 'ທ່າພະລານໄຊ, ໄຊເສດຖາ, ນະຄອນຫຼວງວຽງຈັນ', 1, 3, 1, NULL, NULL, '2024-04-28 01:48:08', '2024-04-28 01:48:55'),
(4, 0, 'm', 'ຄຳພຸດ', 'ຜາທອງ', '020 59829169', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-26 03:19:57', '2024-04-26 03:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `pro_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ສີສັດຕະນາກ', '2024-04-03 18:07:45', '2024-04-03 18:07:46'),
(2, 2, 'ຂວາ', NULL, NULL),
(3, 1, 'ໄຊເສດຖາ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb3_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_03_142534_create_branches_table', 2),
(5, '2024_04_03_161622_create_roles_table', 3),
(6, '2024_04_03_173245_create_provinces_table', 4),
(7, '2024_04_03_173259_create_districts_table', 4),
(8, '2024_04_03_173306_create_villages_table', 4),
(9, '2024_04_04_064503_create_muads_table', 5),
(10, '2024_04_04_064512_create_categories_table', 5),
(11, '2024_04_04_064523_create_customers_table', 5),
(12, '2024_04_04_064545_create_products_table', 5),
(13, '2024_04_04_081430_create_currencies_table', 6),
(14, '2024_04_25_074011_create_pawns_table', 7),
(15, '2024_04_25_074018_create_pawn_details_table', 7),
(16, '2024_04_29_040001_create_socosts_table', 8),
(17, '2024_05_12_085816_create_apps_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `muads`
--

DROP TABLE IF EXISTS `muads`;
CREATE TABLE IF NOT EXISTS `muads` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `muads`
--

INSERT INTO `muads` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'ວັດຖຸມີຄ່າ', NULL, '2024-04-04 00:43:44'),
(3, 'ເຄື່ອງໃຊ້ໄຟຟ້າ', NULL, NULL),
(4, 'ເຄື່ອງດົນຕີ', NULL, NULL),
(5, 'ຄຳ', NULL, NULL),
(6, 'ເຄື່ອງມືກໍ່ສ້າງ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `user_id` int NOT NULL,
  `token` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pawns`
--

DROP TABLE IF EXISTS `pawns`;
CREATE TABLE IF NOT EXISTS `pawns` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `cus_id` int NOT NULL,
  `crc_id` int NOT NULL,
  `rate` decimal(15,2) NOT NULL DEFAULT '0.00',
  `money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `money_name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `interest_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `interest` decimal(15,2) NOT NULL DEFAULT '0.00',
  `balance` decimal(15,2) NOT NULL DEFAULT '0.00',
  `balance_int` decimal(15,2) NOT NULL DEFAULT '0.00',
  `interestType` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `pay_money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `pay_int` decimal(15,2) NOT NULL DEFAULT '0.00',
  `adj_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `adj_money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `fees_percent` decimal(15,2) NOT NULL DEFAULT '0.00',
  `fees_money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(15,2) NOT NULL DEFAULT '0.00',
  `detail` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `count_date` int NOT NULL,
  `nguad` int NOT NULL DEFAULT '0',
  `created_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `count_expire_date` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pawns`
--

INSERT INTO `pawns` (`id`, `code`, `product_id`, `cus_id`, `crc_id`, `rate`, `money`, `money_name`, `interest_percent`, `interest`, `balance`, `balance_int`, `interestType`, `pay_money`, `pay_int`, `adj_percent`, `adj_money`, `fees_percent`, `fees_money`, `discount`, `detail`, `status`, `user_id`, `branch_id`, `count_date`, `nguad`, `created_date`, `expire_date`, `count_expire_date`, `created_at`, `updated_at`) VALUES
(1, 'TX-1', 1, 1, 1, 0.00, 3000000.00, 'ສາມລ້ານກິບຖ້ວນ', 3.00, 90000.00, 3000000.00, 90000.00, 'less', 0.00, 0.00, 1.50, 0.00, 1.00, 0.00, 0.00, NULL, 'p', 1, 1, 90, 3, '2024-04-25', '2024-07-24', 0, '2024-04-25 10:16:35', '2024-04-25 10:16:35'),
(2, 'TX-2', 1, 1, 1, 0.00, 3000000.00, 'ສາມລ້ານກິບຖ້ວນ', 3.00, 90000.00, 3000000.00, 90000.00, 'less', 0.00, 0.00, 1.00, 0.00, 1.00, 0.00, 0.00, NULL, 'p', 1, 1, 90, 3, '2024-04-25', '2024-07-24', 0, '2024-04-25 10:17:58', '2024-04-25 10:17:58'),
(3, 'TX-3', 1, 1, 1, 0.00, 1000000.00, 'ໜຶ່ງລ້ານກິບຖ້ວນ', 3.00, 30000.00, 0.00, 0.00, 'constant', 1000000.00, 30000.00, 1.50, 0.00, 1.00, 10000.00, 0.00, NULL, 'f', 1, 1, 60, 2, '2024-04-26', '2024-06-25', 0, '2024-04-25 19:44:55', '2024-04-28 09:45:26'),
(4, 'TX-4', 1, 4, 1, 0.00, 1000000.00, 'ໜຶ່ງລ້ານກິບຖ້ວນ', 0.00, 30000.00, 0.00, 0.00, 'constant', 1000000.00, 90000.00, 21.00, 0.00, 1.00, 10000.00, 3333.34, NULL, 'f', 1, 1, 90, 3, '2024-04-26', '2024-07-25', 0, '2024-04-26 03:20:37', '2024-04-28 09:42:57'),
(5, 'TX-5', 1, 4, 1, 0.00, 1000000.00, 'ໜຶ່ງລ້ານກິບຖ້ວນ', 0.00, 10000.00, 1000000.00, 0.00, 'constant', 0.00, 0.00, 1.00, 0.00, 1.00, 0.00, 0.00, NULL, 'r', 1, 1, 10, 10, '2024-04-29', '2024-05-09', 0, '2024-04-28 19:24:25', '2024-04-28 20:18:18'),
(6, 'TX-6', 1, 4, 1, 0.00, 1000000.00, 'ໜຶ່ງລ້ານກິບຖ້ວນ', 0.00, 10000.00, 1000000.00, 100000.00, 'constant', 0.00, 0.00, 1.00, 0.00, 1.00, 0.00, 0.00, NULL, 'r', 1, 1, 10, 10, '2024-04-29', '2024-05-09', 0, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(7, 'TX-7', 1, 1, 1, 0.00, 1000000.00, 'ໜຶ່ງລ້ານກິບຖ້ວນ', 0.00, 10000.00, 1000000.00, 55000.00, 'less', 0.00, 0.00, 1.00, 0.00, 1.00, 0.00, 0.00, NULL, 'p', 1, 1, 10, 10, '2024-04-29', '2024-05-09', 0, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(8, 'TX-8', 1, 1, 1, 0.00, 2000000.00, 'ສອງລ້ານກິບຖ້ວນ', 0.00, 20000.00, 0.00, 0.00, 'constant', 2000000.00, 40000.00, 1.00, 0.00, 1.00, 20000.00, 0.00, NULL, 't', 1, 1, 20, 2, '2024-04-29', '2024-05-19', 0, '2024-04-28 19:51:41', '2024-05-08 20:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `pawn_code`
--

DROP TABLE IF EXISTS `pawn_code`;
CREATE TABLE IF NOT EXISTS `pawn_code` (
  `name` char(5) COLLATE utf8mb3_unicode_ci NOT NULL,
  `number` int NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`name`,`number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pawn_code`
--

INSERT INTO `pawn_code` (`name`, `number`, `created_at`, `updated_at`) VALUES
('TX', 1, '2024-04-25 10:16:35', '2024-04-25 10:16:35'),
('TX', 2, '2024-04-25 10:17:58', '2024-04-25 10:17:58'),
('TX', 3, '2024-04-25 19:44:55', '2024-04-25 19:44:55'),
('TX', 4, '2024-04-26 03:20:37', '2024-04-26 03:20:37'),
('TX', 5, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
('TX', 6, '2024-04-28 19:24:49', '2024-04-28 19:24:49'),
('TX', 7, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
('TX', 8, '2024-04-28 19:51:41', '2024-04-28 19:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `pawn_details`
--

DROP TABLE IF EXISTS `pawn_details`;
CREATE TABLE IF NOT EXISTS `pawn_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pawn_id` int NOT NULL,
  `apm_count` int NOT NULL,
  `apm_date` date NOT NULL,
  `apm_money` decimal(15,2) NOT NULL DEFAULT '0.00',
  `apm_int` decimal(15,2) NOT NULL DEFAULT '0.00',
  `apm_fees` decimal(15,2) NOT NULL DEFAULT '0.00',
  `pay_date` date DEFAULT NULL,
  `expire_day` int NOT NULL DEFAULT '0',
  `pay` decimal(15,2) NOT NULL DEFAULT '0.00',
  `int` decimal(15,2) NOT NULL DEFAULT '0.00',
  `fees` decimal(15,2) NOT NULL DEFAULT '0.00',
  `int_adj` decimal(15,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(15,2) NOT NULL DEFAULT '0.00',
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `detail` text COLLATE utf8mb3_unicode_ci,
  `image` text COLLATE utf8mb3_unicode_ci,
  `status` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pawn_details`
--

INSERT INTO `pawn_details` (`id`, `pawn_id`, `apm_count`, `apm_date`, `apm_money`, `apm_int`, `apm_fees`, `pay_date`, `expire_day`, `pay`, `int`, `fees`, `int_adj`, `discount`, `total`, `detail`, `image`, `status`, `user_id`, `branch_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-05-25', 1000000.00, 90000.00, 30000.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'x', 1, 1, '2024-04-25 10:16:35', '2024-04-25 10:16:35'),
(2, 1, 2, '2024-06-24', 1000000.00, 30000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 10:16:35', '2024-04-25 10:16:35'),
(3, 1, 3, '2024-07-24', 1000000.00, 0.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 10:16:35', '2024-04-25 10:16:35'),
(4, 2, 1, '2024-05-25', 1000000.00, 90000.00, 30000.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 10:17:58', '2024-04-25 10:17:58'),
(5, 2, 2, '2024-06-24', 1000000.00, 60000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 10:17:58', '2024-04-25 10:17:58'),
(6, 2, 3, '2024-07-24', 1000000.00, 30000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 10:17:58', '2024-04-25 10:17:58'),
(7, 3, 1, '2024-05-26', 500000.00, 30000.00, 10000.00, '2024-04-28', 0, 1000000.00, 30000.00, 10000.00, 0.00, 0.00, 1040000.00, NULL, NULL, 'f', 1, 1, '2024-04-25 19:44:55', '2024-04-28 09:45:26'),
(8, 3, 2, '2024-06-25', 500000.00, 30000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-25 19:44:55', '2024-04-25 19:44:55'),
(9, 4, 1, '2024-05-26', 333333.33, 30000.00, 10000.00, '2024-04-28', 0, 333333.33, 30000.00, 10000.00, 0.00, 0.00, 373333.33, NULL, NULL, 'f', 1, 1, '2024-04-26 03:20:37', '2024-04-28 08:53:57'),
(10, 4, 2, '2024-06-25', 333333.33, 30000.00, 0.00, '2024-04-28', 0, 333333.33, 30000.00, 0.00, 0.00, 0.00, 363333.33, NULL, NULL, 'f', 1, 1, '2024-04-26 03:20:37', '2024-04-28 08:55:51'),
(11, 4, 3, '2024-07-25', 333333.33, 30000.00, 0.00, '2024-04-28', 0, 333333.34, 30000.00, 0.00, 0.00, 3333.34, 360000.00, NULL, NULL, 'f', 1, 1, '2024-04-26 03:20:37', '2024-04-28 09:42:57'),
(12, 5, 1, '2024-04-30', 100000.00, 10000.00, 10000.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(13, 5, 2, '2024-05-01', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(14, 5, 3, '2024-05-02', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(15, 5, 4, '2024-05-03', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(16, 5, 5, '2024-05-04', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(17, 5, 6, '2024-05-05', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(18, 5, 7, '2024-05-06', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(19, 5, 8, '2024-05-07', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(20, 5, 9, '2024-05-08', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(21, 5, 10, '2024-05-09', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:24:25', '2024-04-28 19:24:25'),
(22, 6, 1, '2024-04-30', 100000.00, 10000.00, 10000.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(23, 6, 2, '2024-05-01', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(24, 6, 3, '2024-05-02', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(25, 6, 4, '2024-05-03', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(26, 6, 5, '2024-05-04', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(27, 6, 6, '2024-05-05', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(28, 6, 7, '2024-05-06', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(29, 6, 8, '2024-05-07', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(30, 6, 9, '2024-05-08', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(31, 6, 10, '2024-05-09', 100000.00, 10000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 'r', 1, 1, '2024-04-28 19:24:49', '2024-04-28 20:18:58'),
(32, 7, 1, '2024-04-30', 100000.00, 10000.00, 10000.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(33, 7, 2, '2024-05-01', 100000.00, 9000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(34, 7, 3, '2024-05-02', 100000.00, 8000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(35, 7, 4, '2024-05-03', 100000.00, 7000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(36, 7, 5, '2024-05-04', 100000.00, 6000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(37, 7, 6, '2024-05-05', 100000.00, 5000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(38, 7, 7, '2024-05-06', 100000.00, 4000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(39, 7, 8, '2024-05-07', 100000.00, 3000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(40, 7, 9, '2024-05-08', 100000.00, 2000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(41, 7, 10, '2024-05-09', 100000.00, 1000.00, 0.00, NULL, 0, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, 't', 1, 1, '2024-04-28 19:26:16', '2024-04-28 19:26:16'),
(42, 8, 1, '2024-05-09', 1000000.00, 20000.00, 20000.00, '2024-04-29', 0, 1000000.00, 20000.00, 20000.00, 0.00, 0.00, 1040000.00, NULL, NULL, 'f', 1, 1, '2024-04-28 19:51:41', '2024-04-29 01:00:40'),
(43, 8, 2, '2024-05-19', 1000000.00, 20000.00, 0.00, '2024-05-09', 0, 1000000.00, 20000.00, 0.00, 0.00, 0.00, 1020000.00, NULL, NULL, 'f', 1, 1, '2024-04-28 19:51:41', '2024-05-08 20:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` char(5) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `muad_id` int NOT NULL,
  `cate_id` int NOT NULL,
  `unit` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb3_unicode_ci,
  `image` text COLLATE utf8mb3_unicode_ci,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `muad_id`, `cate_id`, `unit`, `location`, `note`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'gen', 'iphone 12 pro max', 3, 2, 'ໜ່ວຍ', NULL, 'ໜ້າຈໍແຕກ', 'upload/products/240424043034.png', 1, NULL, '2024-04-23 21:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ນະຄອນຫຼວງວຽງຈັນ', NULL, '2024-04-03 11:10:54'),
(2, 'ຜົ້ງສາລີ', NULL, NULL),
(3, 'ອຸດົມໄຊ', NULL, NULL),
(4, 'ຫຼວງນ້ຳທາ', NULL, NULL),
(5, 'ບໍ່ແກ້ວ', NULL, NULL),
(6, 'ໄຊຍະບຸລີ', NULL, NULL),
(7, 'ຫົວພັນ', NULL, NULL),
(8, 'ຊຽງຂວາງ', NULL, NULL),
(9, 'ຫຼວງພະບາງ', NULL, NULL),
(10, 'ວຽງຈັນ', NULL, NULL),
(11, 'ບໍລິຄຳໄຊ', NULL, NULL),
(12, 'ຄຳມ່ວນ', NULL, NULL),
(13, 'ສະຫວັນນະເຂດ', NULL, NULL),
(14, 'ສາລະວັນ', NULL, NULL),
(15, 'ເຊກອງ', NULL, NULL),
(16, 'ອັດຕະປື', NULL, NULL),
(17, 'ຈຳປາສັກ', NULL, NULL),
(18, 'ໄຊສົມບູນ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `permission` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permission`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb3_unicode_ci,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('37Sw2Ly8kieaBzs5L3M3gQm2fkRsVRFOuITPkmOC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMmlRekYyUlBJbXJValdsb3ZjNzdtS1kyQjJZT1UxYlJTRVlQRnVVNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHBzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1715506189);

-- --------------------------------------------------------

--
-- Table structure for table `socosts`
--

DROP TABLE IF EXISTS `socosts`;
CREATE TABLE IF NOT EXISTS `socosts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` char(8) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` char(8) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `detail` text COLLATE utf8mb3_unicode_ci,
  `image` text COLLATE utf8mb3_unicode_ci,
  `user_id` int NOT NULL,
  `branch_id` int NOT NULL,
  `created_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `socosts`
--

INSERT INTO `socosts` (`id`, `code`, `name`, `type`, `total`, `detail`, `image`, `user_id`, `branch_id`, `created_date`, `created_at`, `updated_at`) VALUES
(2, 'C001', 'ເອົາເງິນເຂົ້າ', 'more', 10000000.00, 'ເງິນຈາກການຂາຍ', NULL, 1, 1, '2024-04-29', NULL, '2024-04-28 23:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role_id` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_id` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `role_id`, `branch_id`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$m3OTKJrraRIcOR0/6///1.1ksZDu68VSVyOayqRIt1oaOlAzzvOMW', '+8562055588663', '1', '1', 'upload/users/240512083044.jpg', NULL, '2024-03-22 04:14:22', '2024-05-12 01:31:15'),
(3, 'phong2', '$2y$12$5t2Ow5x8DLPQsBAT6hZpTexkSCqheZctP6LEinCvjt1ngTSqTaW0u', NULL, '1', '1', 'upload/users/240512083044.jpg', NULL, NULL, '2024-03-25 23:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

DROP TABLE IF EXISTS `villages`;
CREATE TABLE IF NOT EXISTS `villages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `dis_id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`id`, `pro_id`, `dis_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'ທ່າພະລານໄຊ', NULL, '2024-04-03 23:33:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
