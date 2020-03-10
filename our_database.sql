-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sagar', 'sagar@yahoo.com', '$2y$10$edCOyhkp7E6xJendonRHzu0dcWejSr6aeHONmGNyUGt5N46SKj2Ue', NULL, '2019-04-11 15:08:57', '2019-04-11 15:08:57'),
(2, 'new boy', 'newboy@gmail.com', '$2y$10$TA/q6i3QfQFNHKyMKyJmxehMgx4iOKmbpoPyG8g6hxvwg8fVnyqRC', NULL, '2019-05-22 05:06:47', '2019-05-22 05:06:47'),
(3, 'admin', 'admin@gmail.com', '$2y$10$k.O/Wv0eOl/e/LfSLoNyY.LjxAK/hzY/oiR5BiEvkh1X.1E8DwCZe', NULL, '2019-05-26 23:59:09', '2019-05-26 23:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `c_s_e__societies`
--

CREATE TABLE `c_s_e__societies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` mediumblob,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_s_e__societies`
--

INSERT INTO `c_s_e__societies` (`id`, `img`, `name`, `batch`, `designation`, `email`, `contact_number`, `created_at`, `updated_at`) VALUES
(1, 0x313535353031373135322e6a7067, 'pranto', '9th', 'Law affairs', 'dsas@yahoo.com', '+8801111111111', '2019-04-11 15:12:32', '2019-04-11 15:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `img`, `created_at`, `updated_at`) VALUES
(1, '1555017418.jpg', '2019-04-11 15:16:58', '2019-04-11 15:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_03_06_064206_create_researches_table', 1),
(3, '2019_03_06_110056_create_others_table', 1),
(4, '2019_03_06_173109_create_c_s_e__societies_table', 1),
(5, '2019_03_08_175355_create_logins_table', 1),
(6, '2019_03_10_114440_create_teachers_table', 1),
(7, '2019_03_10_142454_create_staff_table', 1),
(8, '2019_03_10_153404_create_notices_table', 1),
(9, '2019_03_10_191901_create_gallaries_table', 1),
(10, '2019_03_13_060722_create_result_1_1s_table', 1),
(11, '2019_03_13_060810_create_result_1_2s_table', 1),
(12, '2019_03_13_060840_create_result_2_1s_table', 1),
(13, '2019_03_13_060908_create_result_2_2s_table', 1),
(14, '2019_03_13_060937_create_result_3_1s_table', 1),
(15, '2019_03_13_061008_create_result_3_2s_table', 1),
(16, '2019_03_13_061052_create_result_4_1s_table', 1),
(17, '2019_03_13_061119_create_result_4_2s_table', 1),
(18, '2019_03_15_190836_create_users_table', 1),
(19, '2019_03_18_064126_create_admins_table', 1),
(20, '2019_03_31_174926_create_programming_controllers_table', 1),
(21, '2019_04_09_190329_change_c_s_e__societies_time_column_type', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Exam is knocking at the door. So be carefull', '2019-04-11 15:14:41', '2019-04-11 15:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `img`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1555017329.jpg', 'Barby Queue Party', 'arranged by CSE 10th batch', '2019-04-11 15:15:30', '2019-04-11 15:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programming_controllers`
--

CREATE TABLE `programming_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `researches`
--

CREATE TABLE `researches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authors` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `researches`
--

INSERT INTO `researches` (`id`, `authors`, `publication_link`, `linkName`, `created_at`, `updated_at`) VALUES
(1, 'Tarequzzaman Khan Tajul (6th batch), Saifur Rahman Bhuiyan (6th batch)', 'https://ieeexplore.ieee.org/document/8628148', 'Enhancement of LZAP (Lempel Ziv All Prefixes) Compression Algorithm', '2019-04-11 15:14:02', '2019-04-11 15:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `result_1_1s`
--

CREATE TABLE `result_1_1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE101` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE101` double(8,2) DEFAULT NULL,
  `LG_CSE102` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE102` double(8,2) DEFAULT NULL,
  `LG_EEE105` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE105` double(8,2) DEFAULT NULL,
  `LG_EEE106` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE106` double(8,2) DEFAULT NULL,
  `LG_ME100` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_ME100` double(8,2) DEFAULT NULL,
  `LG_ME101` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_ME101` double(8,2) DEFAULT NULL,
  `LG_ME102` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_ME102` double(8,2) DEFAULT NULL,
  `LG_MATH101` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_MATH101` double(8,2) DEFAULT NULL,
  `LG_PHY101` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_PHY101` double(8,2) DEFAULT NULL,
  `LG_PHY102` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_PHY102` double(8,2) DEFAULT NULL,
  `LG_SS101` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS101` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_1_1s`
--

INSERT INTO `result_1_1s` (`id`, `Registration_no`, `LG_CSE101`, `GP_CSE101`, `LG_CSE102`, `GP_CSE102`, `LG_EEE105`, `GP_EEE105`, `LG_EEE106`, `GP_EEE106`, `LG_ME100`, `GP_ME100`, `LG_ME101`, `GP_ME101`, `LG_ME102`, `GP_ME102`, `LG_MATH101`, `GP_MATH101`, `LG_PHY101`, `GP_PHY101`, `LG_PHY102`, `GP_PHY102`, `LG_SS101`, `GP_SS101`, `GPA`, `CGPA`, `created_at`, `updated_at`) VALUES
(1, '2021', 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 'A+', 4.00, 4.00, 4.00, '2019-04-11 15:16:30', '2019-04-11 15:16:30'),
(2, '2016', 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 'A', 3.75, 3.75, 3.75, '2020-03-10 11:35:55', '2020-03-10 11:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `result_1_2s`
--

CREATE TABLE `result_1_2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE201` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE201` double(8,2) DEFAULT NULL,
  `LG_CSE202` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE202` double(8,2) DEFAULT NULL,
  `LG_CSE203` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE203` double(8,2) DEFAULT NULL,
  `LG_MATH201` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_MATH201` double(8,2) DEFAULT NULL,
  `LG_CHEM201` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CHEM201` double(8,2) DEFAULT NULL,
  `LG_CHEM202` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CHEM202` double(8,2) DEFAULT NULL,
  `LG_ENG201` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_ENG201` double(8,2) DEFAULT NULL,
  `LG_ENG202` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_ENG202` double(8,2) DEFAULT NULL,
  `LG_SS201` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS201` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_2_1s`
--

CREATE TABLE `result_2_1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE301` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE301` double(8,2) DEFAULT NULL,
  `LG_CSE302` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE302` double(8,2) DEFAULT NULL,
  `LG_CSE303` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE303` double(8,2) DEFAULT NULL,
  `LG_CSE304` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE304` double(8,2) DEFAULT NULL,
  `LG_CSE305` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE305` double(8,2) DEFAULT NULL,
  `LG_CSE306` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE306` double(8,2) DEFAULT NULL,
  `LG_EEE309` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE309` double(8,2) DEFAULT NULL,
  `LG_EEE310` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE310` double(8,2) DEFAULT NULL,
  `LG_MATH301` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_MATH301` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_2_2s`
--

CREATE TABLE `result_2_2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE401` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE401` double(8,2) DEFAULT NULL,
  `LG_CSE402` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE402` double(8,2) DEFAULT NULL,
  `LG_CSE403` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE403` double(8,2) DEFAULT NULL,
  `LG_CSE404` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE404` double(8,2) DEFAULT NULL,
  `LG_CSE405` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE405` double(8,2) DEFAULT NULL,
  `LG_EEE407` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE407` double(8,2) DEFAULT NULL,
  `LG_EEE408` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_EEE408` double(8,2) DEFAULT NULL,
  `LG_MATH401` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_MATH401` double(8,2) DEFAULT NULL,
  `LG_SS401` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS401` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_3_1s`
--

CREATE TABLE `result_3_1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE501` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE501` double(8,2) DEFAULT NULL,
  `LG_CSE502` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE502` double(8,2) DEFAULT NULL,
  `LG_CSE503` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE503` double(8,2) DEFAULT NULL,
  `LG_CSE505` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE505` double(8,2) DEFAULT NULL,
  `LG_CSE506` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE506` double(8,2) DEFAULT NULL,
  `LG_CSE507` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE507` double(8,2) DEFAULT NULL,
  `LG_CSE508` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE508` double(8,2) DEFAULT NULL,
  `LG_CSE509` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE509` double(8,2) DEFAULT NULL,
  `LG_SS501` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS501` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_3_2s`
--

CREATE TABLE `result_3_2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE601` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE601` double(8,2) DEFAULT NULL,
  `LG_CSE603` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE603` double(8,2) DEFAULT NULL,
  `LG_CSE604` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE604` double(8,2) DEFAULT NULL,
  `LG_CSE605` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE605` double(8,2) DEFAULT NULL,
  `LG_CSE607` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE607` double(8,2) DEFAULT NULL,
  `LG_CSE608` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE608` double(8,2) DEFAULT NULL,
  `LG_CSE609` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE609` double(8,2) DEFAULT NULL,
  `LG_CSE610` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE610` double(8,2) DEFAULT NULL,
  `LG_CSE612` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE612` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_4_1s`
--

CREATE TABLE `result_4_1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE700` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE700` double(8,2) DEFAULT NULL,
  `LG_CSE701` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE701` double(8,2) DEFAULT NULL,
  `LG_CSE702` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE702` double(8,2) DEFAULT NULL,
  `LG_CSE703` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE703` double(8,2) DEFAULT NULL,
  `LG_CSE704` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE704` double(8,2) DEFAULT NULL,
  `LG_IPE701` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_IPE701` double(8,2) DEFAULT NULL,
  `LG_SS703` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS703` double(8,2) DEFAULT NULL,
  `LG_SS705` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_SS705` double(8,2) DEFAULT NULL,
  `OptionalSubCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LG_Optional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_Optional` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_4_2s`
--

CREATE TABLE `result_4_2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LG_CSE800` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE800` double(8,2) DEFAULT NULL,
  `LG_CSE801` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE801` double(8,2) DEFAULT NULL,
  `LG_CSE802` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE802` double(8,2) DEFAULT NULL,
  `LG_CSE803` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_CSE803` double(8,2) DEFAULT NULL,
  `OptionalTheoryCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LG_OptionalTheory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_OptionalTheory` double(8,2) DEFAULT NULL,
  `OptionalLabCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LG_OptionalLab` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GP_OptionalLab` double(8,2) DEFAULT NULL,
  `GPA` double(8,2) NOT NULL,
  `CGPA` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `img`, `name`, `designation`, `email`, `contact_number`, `created_at`, `updated_at`) VALUES
(1, '1555017078.jpg', 'Abu Naser Majumdar', 'Assistant Professor', 'naser@yahoo.com', '+88017000000000', '2019-04-11 15:11:18', '2019-04-11 15:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Registration_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Registration_no`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sd', '2015331520', 'demo@gmail.com', NULL, '$2y$10$CDzRI2NjNqZtJCpgGhi/0eSOczUsJlXsWdhsTxo6IAoGigB8eGcwK', NULL, '2019-10-23 12:00:59', '2019-10-23 12:00:59'),
(2, 'SS', '2016', 'sagarsiam@gmail.com', NULL, '$2y$10$xuhiHrh9zq/6ZjqXsEe1bezuh38vYccwGOOq0ooP/XtEqwqfdusky', NULL, '2020-03-10 11:33:51', '2020-03-10 11:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `c_s_e__societies`
--
ALTER TABLE `c_s_e__societies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programming_controllers`
--
ALTER TABLE `programming_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researches`
--
ALTER TABLE `researches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_1_1s`
--
ALTER TABLE `result_1_1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_1_2s`
--
ALTER TABLE `result_1_2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_2_1s`
--
ALTER TABLE `result_2_1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_2_2s`
--
ALTER TABLE `result_2_2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_3_1s`
--
ALTER TABLE `result_3_1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_3_2s`
--
ALTER TABLE `result_3_2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_4_1s`
--
ALTER TABLE `result_4_1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_4_2s`
--
ALTER TABLE `result_4_2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_registration_no_unique` (`Registration_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `c_s_e__societies`
--
ALTER TABLE `c_s_e__societies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programming_controllers`
--
ALTER TABLE `programming_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `researches`
--
ALTER TABLE `researches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result_1_1s`
--
ALTER TABLE `result_1_1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result_1_2s`
--
ALTER TABLE `result_1_2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_2_1s`
--
ALTER TABLE `result_2_1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_2_2s`
--
ALTER TABLE `result_2_2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_3_1s`
--
ALTER TABLE `result_3_1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_3_2s`
--
ALTER TABLE `result_3_2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_4_1s`
--
ALTER TABLE `result_4_1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_4_2s`
--
ALTER TABLE `result_4_2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
