-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2022 at 06:58 AM
-- Server version: 10.3.34-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boffoweb_gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `email_verified_at`, `approved`, `verified`, `verified_at`, `verification_token`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gaming.com', '$2y$10$Phq5VMDVoliTezARpj9mD.PJy8NM2/13OFgIl7aKuVsQlOnMJMMDq', NULL, 1, 1, '2022-02-09 10:53:04', '', NULL, NULL, NULL, NULL),
(2, 'Demo', 'demo@gaming.com', '$2y$10$Phq5VMDVoliTezARpj9mD.PJy8NM2/13OFgIl7aKuVsQlOnMJMMDq', NULL, 1, 1, '2022-02-09 10:53:04', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attempts`
--

CREATE TABLE `attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puzzle_id` bigint(20) UNSIGNED NOT NULL,
  `attempt` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attempts`
--

INSERT INTO `attempts` (`id`, `user_id`, `puzzle_id`, `attempt`, `token`, `created_at`, `updated_at`) VALUES
(1, 31, 3, 2, '1644999630', '2022-02-09 08:04:11', '2022-02-16 08:23:32'),
(2, 31, 28, 1, '1644568643', '2022-02-09 08:04:54', '2022-02-11 08:37:27'),
(3, 32, 3, 1, '1644395293', '2022-02-09 08:28:13', '2022-02-09 08:28:21'),
(4, 32, 28, 2, '1644395312', '2022-02-09 08:28:32', '2022-02-09 08:28:41'),
(5, 32, 29, 2, '1644395325', '2022-02-09 08:28:45', '2022-02-09 08:28:56'),
(6, 32, 36, 1, '1644395341', '2022-02-09 08:29:01', '2022-02-09 08:29:05'),
(7, 32, 37, 1, '1644395348', '2022-02-09 08:29:07', '2022-02-09 08:29:13'),
(8, 32, 38, 2, '1644395355', '2022-02-09 08:29:15', '2022-02-09 08:29:28'),
(9, 31, 29, 2, '1644481101', '2022-02-10 08:18:21', '2022-02-10 08:18:37'),
(10, 31, 36, 1, '1645000808', '2022-02-10 08:18:40', '2022-02-16 08:40:19'),
(11, 33, 3, 1, '1644491155', '2022-02-10 11:05:15', '2022-02-10 11:06:03'),
(12, 33, 28, 1, '1644491171', '2022-02-10 11:06:08', '2022-02-10 11:08:06'),
(13, 33, 29, 0, '1644491288', '2022-02-10 11:08:08', '2022-02-10 11:08:08'),
(14, 33, 36, 0, '1644491296', '2022-02-10 11:08:16', '2022-02-10 11:08:16'),
(15, 34, 3, 1, '1645014954', '2022-02-10 15:54:16', '2022-02-16 12:35:57'),
(16, 34, 28, 2, '1645014961', '2022-02-10 15:54:33', '2022-02-16 12:36:08'),
(17, 34, 29, 1, '1645015276', '2022-02-10 15:54:44', '2022-02-16 12:41:21'),
(18, 34, 36, 1, '1644508491', '2022-02-10 15:54:51', '2022-02-10 15:54:55'),
(19, 34, 37, 2, '1644508497', '2022-02-10 15:54:57', '2022-02-10 15:55:04'),
(20, 34, 38, 3, '1644508507', '2022-02-10 15:55:07', '2022-02-10 15:55:17'),
(21, 34, 39, 2, '1644508539', '2022-02-10 15:55:20', '2022-02-10 15:55:51'),
(22, 36, 3, 1, '1645000692', '2022-02-11 06:41:16', '2022-02-16 08:38:15'),
(23, 36, 28, 2, '1645000951', '2022-02-11 06:41:25', '2022-02-16 08:42:50'),
(24, 36, 29, 1, '1644561696', '2022-02-11 06:41:36', '2022-02-11 06:41:40'),
(25, 36, 36, 1, '1644561721', '2022-02-11 06:41:43', '2022-02-11 06:42:04'),
(26, 36, 37, 2, '1644561728', '2022-02-11 06:42:08', '2022-02-11 06:42:15'),
(27, 36, 38, 1, '1644561738', '2022-02-11 06:42:18', '2022-02-11 06:42:25'),
(28, 36, 39, 2, '1644561747', '2022-02-11 06:42:27', '2022-02-11 06:42:33'),
(29, 31, 37, 2, '1644999831', '2022-02-16 08:23:51', '2022-02-16 08:24:08'),
(30, 31, 38, 1, '1644999856', '2022-02-16 08:24:16', '2022-02-16 08:24:21'),
(31, 31, 39, 1, '1644999867', '2022-02-16 08:24:27', '2022-02-16 08:24:33'),
(32, 36, 4, 0, '1645000910', '2022-02-16 08:41:50', '2022-02-16 08:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\Puzzle', 3, 'e3f0825f-6825-40b9-9ff4-4e881ebd5935', 'questions', '620373d18350f_Image 1', '620373d18350f_Image-1.png', 'image/png', 'public', 'public', 1366444, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-02-09 07:57:49', '2022-02-09 07:58:03'),
(11, 'App\\Models\\Puzzle', 3, 'fd2b6fb1-2687-4f71-9530-3799a88b9e2d', 'solutions', '620373d5bc155_Image 1 (1)', '620373d5bc155_Image-1-(1).png', 'image/png', 'public', 'public', 1769775, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 2, '2022-02-09 07:58:03', '2022-02-09 07:58:40'),
(19, 'App\\Models\\Puzzle', 28, '99083921-ac25-4fe6-936f-f00f2b4773a7', 'questions', '620374df5fc10_1', '620374df5fc10_1.PNG', 'image/png', 'public', 'public', 268689, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 3, '2022-02-09 08:02:21', '2022-02-09 08:02:21'),
(20, 'App\\Models\\Puzzle', 28, '6cb699ee-25b4-44ec-8a29-7676924a5192', 'solutions', '620374e9972d6_1', '620374e9972d6_1.PNG', 'image/png', 'public', 'public', 268689, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 4, '2022-02-09 08:02:21', '2022-02-09 08:02:21'),
(21, 'App\\Models\\Puzzle', 29, 'eb8ccb82-1c99-4529-933c-c3c4ddd651e5', 'questions', '62037658890fb_2', '62037658890fb_2.PNG', 'image/png', 'public', 'public', 484599, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 5, '2022-02-09 08:09:53', '2022-02-09 08:09:55'),
(27, 'App\\Models\\Puzzle', 29, '3ed03153-cb23-46f4-a678-5c9fe2954e6f', 'solutions', '6203765b65564_2', '6203765b65564_2.PNG', 'image/png', 'public', 'public', 484599, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 6, '2022-02-09 08:09:55', '2022-02-09 08:09:56'),
(28, 'App\\Models\\Puzzle', 36, '8a2953e8-f480-4489-b56c-edf84e3c8c2a', 'questions', '620376e5039d8_3', '620376e5039d8_3.PNG', 'image/png', 'public', 'public', 558506, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 7, '2022-02-09 08:11:56', '2022-02-09 08:11:57'),
(29, 'App\\Models\\Puzzle', 36, '7d229721-ad4f-49bd-9653-280b968a12d6', 'solutions', '620376e9a7ae2_3', '620376e9a7ae2_3.PNG', 'image/png', 'public', 'public', 558506, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 8, '2022-02-09 08:11:57', '2022-02-09 08:11:57'),
(30, 'App\\Models\\Puzzle', 37, 'da17fdd8-4431-496a-a4cf-cf7a734b2201', 'questions', '620377804802b_4', '620377804802b_4.PNG', 'image/png', 'public', 'public', 259898, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 9, '2022-02-09 08:14:11', '2022-02-09 08:14:12'),
(31, 'App\\Models\\Puzzle', 37, '260abe75-7a31-4688-bc0c-1d5e9b5bb0d6', 'solutions', '620377835be6f_4', '620377835be6f_4.PNG', 'image/png', 'public', 'public', 259898, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 10, '2022-02-09 08:14:12', '2022-02-09 08:14:12'),
(32, 'App\\Models\\Puzzle', 38, 'a95b6b42-83b6-425d-b3ba-7d021d55247f', 'questions', '6203781d758a1_5', '6203781d758a1_5.PNG', 'image/png', 'public', 'public', 236772, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 11, '2022-02-09 08:16:02', '2022-02-09 08:16:03'),
(33, 'App\\Models\\Puzzle', 38, '0c47cc79-411e-4a27-9a8e-b5c23f6994cf', 'solutions', '6203781f39b01_5', '6203781f39b01_5.PNG', 'image/png', 'public', 'public', 236772, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 12, '2022-02-09 08:16:03', '2022-02-09 08:16:03'),
(34, 'App\\Models\\Puzzle', 39, 'aa3bdb47-dda1-4a12-9300-1952cd53df42', 'questions', '62037864c4a0c_6', '62037864c4a0c_6.PNG', 'image/png', 'public', 'public', 523909, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 13, '2022-02-09 08:17:52', '2022-02-09 08:17:53'),
(35, 'App\\Models\\Puzzle', 39, 'a39cc6c4-2394-4a16-bde0-0c3f2ec8ee5d', 'solutions', '620378673d012_6', '620378673d012_6.PNG', 'image/png', 'public', 'public', 523909, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 14, '2022-02-09 08:17:53', '2022-02-09 08:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_23_045748_create_puzzles_table', 1),
(6, '2022_01_23_045821_create_options_table', 1),
(7, '2022_01_23_045838_create_solutions_table', 1),
(8, '2022_01_23_050014_create_scores_table', 1),
(9, '2022_01_23_050817_create_admins_table', 1),
(10, '2022_01_31_135713_create_media_table', 1),
(11, '2022_02_03_083313_create_user_puzzle_table', 1),
(12, '2022_02_07_142303_create_attempts_table', 1),
(13, '2022_02_07_184417_create_social_logins_table', 1),
(14, '2022_02_11_113128_add_column_to_puzzles_table', 2),
(15, '2022_02_15_113604_add_link_to_puzzles_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `puzzle_id` bigint(20) UNSIGNED NOT NULL,
  `key` int(11) DEFAULT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `puzzle_id`, `key`, `option`, `created_at`, `updated_at`) VALUES
(9, 3, 0, 'Rabbit', '2022-02-09 07:57:49', '2022-02-09 20:03:12'),
(10, 3, 1, 'Dog', '2022-02-09 07:57:49', '2022-02-09 20:03:12'),
(11, 3, 2, 'Wolf', '2022-02-09 07:57:49', '2022-02-09 20:03:12'),
(12, 3, 3, 'Rat', '2022-02-09 07:57:49', '2022-02-09 20:03:12'),
(109, 28, 0, 'ΟΙΚΟΓΕΝΕΙΑ Siluridae', '2022-02-09 08:02:21', '2022-02-11 08:36:19'),
(110, 28, 1, 'Atherina boyeri', '2022-02-09 08:02:21', '2022-02-11 08:36:19'),
(111, 28, 2, 'Cyprinus carpio', '2022-02-09 08:02:21', '2022-02-11 08:36:19'),
(112, 28, 3, 'Carassius auratus gibelio', '2022-02-09 08:02:21', '2022-02-11 08:36:19'),
(113, 29, 0, 'ΟΙΚΟΓΕΝΕΙΑ Siluridae', '2022-02-09 08:09:53', '2022-02-09 08:09:53'),
(114, 29, 1, 'Dog', '2022-02-09 08:09:53', '2022-02-09 08:09:53'),
(115, 29, 2, 'Silurus aristotelis', '2022-02-09 08:09:53', '2022-02-09 08:09:53'),
(116, 29, 3, 'Rat', '2022-02-09 08:09:53', '2022-02-09 08:09:53'),
(141, 36, 0, 'ΟΙΚΟΓΕΝΕΙΑ Siluridae', '2022-02-09 08:11:56', '2022-02-16 08:39:54'),
(142, 36, 1, 'Atherina boyeri', '2022-02-09 08:11:56', '2022-02-16 08:39:54'),
(143, 36, 2, 'Cyprinus carpio', '2022-02-09 08:11:56', '2022-02-16 08:39:54'),
(144, 36, 3, 'Carassius auratus gibelio', '2022-02-09 08:11:56', '2022-02-16 08:39:54'),
(145, 37, 0, 'Rabbit', '2022-02-09 08:14:11', '2022-02-09 08:14:11'),
(146, 37, 1, 'Dog', '2022-02-09 08:14:11', '2022-02-09 08:14:11'),
(147, 37, 2, 'Silurus aristotelis', '2022-02-09 08:14:11', '2022-02-09 08:14:11'),
(148, 37, 3, 'Scardinius acarnanicus', '2022-02-09 08:14:11', '2022-02-09 08:14:11'),
(149, 38, 0, 'ΟΙΚΟΓΕΝΕΙΑ Siluridae', '2022-02-09 08:16:02', '2022-02-09 08:16:02'),
(150, 38, 1, 'Rutilus ylikiensis', '2022-02-09 08:16:02', '2022-02-09 08:16:02'),
(151, 38, 2, 'Silurus aristotelis', '2022-02-09 08:16:02', '2022-02-09 08:16:02'),
(152, 38, 3, 'Scardinius acarnanicus', '2022-02-09 08:16:02', '2022-02-09 08:16:02'),
(153, 39, 0, 'Leuciscus cephalus', '2022-02-09 08:17:52', '2022-02-09 08:17:52'),
(154, 39, 1, 'Atherina boyeri', '2022-02-09 08:17:52', '2022-02-09 08:17:52'),
(155, 39, 2, 'Cyprinus carpio', '2022-02-09 08:17:52', '2022-02-09 08:17:52'),
(156, 39, 3, 'Scardinius acarnanicus', '2022-02-09 08:17:52', '2022-02-09 08:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `puzzles`
--

CREATE TABLE `puzzles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_limit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `solution_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puzzles`
--

INSERT INTO `puzzles` (`id`, `level`, `description`, `time_limit`, `created_at`, `updated_at`, `solution_description`, `link`) VALUES
(3, 1, 'Small animals with fur and long ears.', 6, '2022-02-09 07:57:49', '2022-02-09 07:57:49', NULL, NULL),
(28, 2, 'Mediterranean and pericardial species. In Greece it lives in coastal waters, mainly bays, harbors, and estuaries. He entered Lake Trichonida through him Acheloou creating an independently reproducing population.', 6, '2022-02-09 08:02:21', '2022-02-11 08:36:19', 'Ecology: It is a broad species, of marine origin, pelagic. Lives in a group way and shows great abundance in Trichonida. It is a species with excellent plasticity, which enables it to colonize a wide range of habitats and survive under extreme environmental conditions.', NULL),
(29, 3, 'Mediterranean and pericardial species. In Greece it lives in coastal waters, mainly bays, harbors, and estuaries. He entered Lake Trichonida through him Acheloou creating an independently reproducing population.', 6, '2022-02-09 08:09:53', '2022-02-09 08:09:53', NULL, NULL),
(36, 4, 'Thessaly, Macedonia,\r\nAcheloos, Trichonida, Lysimachia,\r\nAmvrakia.\r\nEcology: Lake-loving species,\r\nbenthic, polycyclic, broad-leaved, with\r\nindividual way of life and a lot\r\nsmall population presence in\r\nΤριχωνίδα', 6, '2022-02-09 08:11:56', '2022-02-16 08:39:54', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', 'www.abctest.com'),
(37, 5, 'It is a lake-loving species and maintains populations in its natural lakes Etoloakarnania, but is also found in lower part of Acheloos, in areas with deep and calm waters. It is intense dependence on the presence of vegetation, both for food acquisition and for reproduction.', 6, '2022-02-09 08:14:11', '2022-02-09 08:14:11', NULL, NULL),
(38, 6, 'Lake-loving species, with a fairly large population presence in the lake\r\nΤριχωνίδα. It forms small herds and stays there during the winter in the deeper areas of the lake, while in other seasons it is found near coasts. Prefers areas with aquatic vegetation for food reasons.', 6, '2022-02-09 08:16:02', '2022-02-09 08:16:02', NULL, NULL),
(39, 7, 'Its typical habitat is rocky or sandy streams and rivers. Primarily the species is rheophilic, but is found in natural (low abundance) and technical lakes (larger abundance due to heavy water circulation).', 6, '2022-02-09 08:17:52', '2022-02-09 08:17:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `puzzle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `puzzle_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 31, 3, 3, '2022-02-09 08:04:40', '2022-02-09 08:04:40'),
(2, 31, 28, 3, '2022-02-09 08:05:08', '2022-02-09 08:05:08'),
(3, 32, 3, 3, '2022-02-09 08:28:21', '2022-02-09 08:28:21'),
(4, 32, 28, 3, '2022-02-09 08:28:39', '2022-02-09 08:28:39'),
(5, 32, 29, 3, '2022-02-09 08:28:56', '2022-02-09 08:28:56'),
(6, 32, 36, 3, '2022-02-09 08:29:05', '2022-02-09 08:29:05'),
(7, 32, 37, 3, '2022-02-09 08:29:13', '2022-02-09 08:29:13'),
(8, 31, 29, 3, '2022-02-10 08:18:37', '2022-02-10 08:18:37'),
(9, 31, 36, 3, '2022-02-10 08:18:48', '2022-02-10 08:18:48'),
(10, 31, 36, 0, '2022-02-10 08:18:55', '2022-02-10 08:18:55'),
(11, 33, 3, 3, '2022-02-10 11:05:21', '2022-02-10 11:05:21'),
(12, 33, 28, 3, '2022-02-10 11:08:06', '2022-02-10 11:08:06'),
(13, 34, 3, 3, '2022-02-10 15:54:29', '2022-02-10 15:54:29'),
(14, 34, 28, 3, '2022-02-10 15:54:41', '2022-02-10 15:54:41'),
(15, 34, 29, 3, '2022-02-10 15:54:49', '2022-02-10 15:54:49'),
(16, 34, 36, 3, '2022-02-10 15:54:55', '2022-02-10 15:54:55'),
(17, 34, 37, 3, '2022-02-10 15:55:04', '2022-02-10 15:55:04'),
(18, 34, 38, 3, '2022-02-10 15:55:17', '2022-02-10 15:55:17'),
(19, 34, 39, 3, '2022-02-10 15:55:35', '2022-02-10 15:55:51'),
(20, 36, 3, 3, '2022-02-11 06:41:21', '2022-02-11 06:41:21'),
(21, 36, 28, 3, '2022-02-11 06:41:30', '2022-02-11 06:41:30'),
(22, 36, 29, 3, '2022-02-11 06:41:40', '2022-02-11 06:41:40'),
(23, 36, 36, 3, '2022-02-11 06:41:57', '2022-02-11 06:42:04'),
(24, 36, 37, 3, '2022-02-11 06:42:15', '2022-02-11 06:42:15'),
(25, 36, 38, 3, '2022-02-11 06:42:25', '2022-02-11 06:42:25'),
(26, 36, 39, 3, '2022-02-11 06:42:33', '2022-02-11 06:42:33'),
(27, 31, 37, 3, '2022-02-16 08:24:08', '2022-02-16 08:24:08'),
(28, 31, 38, 3, '2022-02-16 08:24:21', '2022-02-16 08:24:21'),
(29, 31, 39, 3, '2022-02-16 08:24:33', '2022-02-16 08:24:33'),
(30, 36, 3, 0, '2022-02-16 08:36:07', '2022-02-16 08:36:07'),
(31, 31, 36, 0, '2022-02-16 08:37:25', '2022-02-16 08:37:25'),
(32, 31, 36, 0, '2022-02-16 08:37:25', '2022-02-16 08:37:25'),
(33, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(34, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(35, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(36, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(37, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(38, 31, 36, 0, '2022-02-16 08:37:26', '2022-02-16 08:37:26'),
(39, 36, 28, 0, '2022-02-16 08:42:27', '2022-02-16 08:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `puzzle_id` bigint(20) UNSIGNED DEFAULT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `puzzle_id`, `option_id`, `created_at`, `updated_at`) VALUES
(3, 3, 9, '2022-02-09 07:57:49', '2022-02-09 20:03:12'),
(28, 28, 110, '2022-02-09 08:02:21', '2022-02-11 08:36:19'),
(29, 29, 115, '2022-02-09 08:09:53', '2022-02-09 08:09:53'),
(36, 36, 143, '2022-02-09 08:11:56', '2022-02-16 08:39:54'),
(37, 37, 148, '2022-02-09 08:14:11', '2022-02-09 08:14:11'),
(38, 38, 150, '2022-02-09 08:16:02', '2022-02-09 08:16:02'),
(39, 39, 153, '2022-02-09 08:17:52', '2022-02-09 08:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `approved`, `verified`, `verified_at`, `verification_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vickie Torphy', 'yasmine.rutherford@example.net', '+1-217-575-7326', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'swLEmuKfnA', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(2, 'Mr. Davonte Hickle III', 'runte.jamel@example.org', '559-372-6280', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ucf2Fach4EigZaMMht2a7W6esey6a0I1ccAzJNay54ZOMwtvTviwijm1JcTo', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(3, 'Mr. Davion Abernathy III', 'kuvalis.lukas@example.org', '+1 (610) 850-3656', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JPPtwY4gsk', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(4, 'Mr. Emile Heaney', 'larkin.carlie@example.net', '212-483-8755', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TxVQ2PZ4tS', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(5, 'Ms. Reyna Haley IV', 'christine.romaguera@example.net', '+1.978.720.6246', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IODhgdDYuH', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(6, 'Stewart Goodwin', 'lilliana45@example.org', '+1-303-991-9941', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ww3kCkyqw6', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(7, 'Graham Jast', 'vonrueden.sammie@example.com', '+1-860-526-8174', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E5OJHCzvzH', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(8, 'Pete Leffler', 'adell.klein@example.net', '+1-248-295-9865', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E4SbgGqG0x', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(9, 'Annette Haley', 'lebsack.claire@example.net', '678-218-7738', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jM8oPvORWg', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(10, 'Sidney Ortiz', 'aaron.wiegand@example.com', '646-278-9426', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LrwvhXgees', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(11, 'Orval Bode', 'kfay@example.net', '703-295-5545', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cc3NxFRRYy', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(12, 'Marlee Hermann', 'kdicki@example.org', '+17406754405', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ylrks0Q1ZV', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(13, 'Mr. Wilburn Kassulke', 'kristian.mcdermott@example.com', '1-530-738-9849', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cMpKWUKuGS', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(14, 'Johanna Schowalter', 'hamill.dorthy@example.org', '1-726-549-5186', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VrkoL7AyaS', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(15, 'Carolina Grady', 'ruthie77@example.org', '+1 (931) 994-1942', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Kz1ODAp9BJ', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(16, 'Sonya Goldner', 'cecile53@example.org', '469.694.7460', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2QLzUOR77H', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(17, 'Sabrina Davis', 'nienow.jed@example.org', '+14586406723', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8K8uMHY5lu', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(18, 'Norris Cremin', 'ona55@example.com', '757.708.8844', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jp8Ztvqua7', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(19, 'Dr. Nathan Lehner', 'hilpert.danyka@example.org', '828.855.4691', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gsxvHx4pGO', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(21, 'Prof. Ricardo McKenzie Sr.', 'lolita.krajcik@example.net', '+1-986-532-3934', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iNVQUEKPDJ', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(22, 'Prof. Horacio Rath MD', 'eveline01@example.com', '319.562.9869', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yTqxD2u65N', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(23, 'Miss Samara Zemlak', 'porter48@example.com', '+1.423.695.9503', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cV5ANbDwvk', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(24, 'Thomas Hirthe', 'emily44@example.com', '463-623-9345', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dGDrwUag4b', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(25, 'Dr. Laurie Pfannerstill', 'kemmer.laverne@example.com', '1-617-316-8750', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mgADmxi7Vf', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(26, 'Tess Medhurst', 'alexandrea87@example.org', '681.941.8774', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'C7VLtrPQWr', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(27, 'Mr. Allan Bruen II', 'mhoeger@example.com', '1-734-920-2832', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dpadI7vb8E', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(28, 'Cary Emard', 'bbrown@example.net', '(781) 962-9077', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MHtU7eHAch', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(29, 'Letitia Barton', 'bshanahan@example.org', '380.336.8657', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D2HMkgXokk', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(30, 'Dr. Garnet Wiza', 'vincenza30@example.com', '1-480-963-5389', '2022-02-09 10:53:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7HVg8Qux2N', 0, 0, NULL, NULL, '2022-02-09 05:23:04', '2022-02-09 05:23:04', NULL),
(31, 'chitra', 'chitrarustogi@gmail.com', NULL, NULL, '$2y$10$oBLt6aYTpKR/KJMLTdBvXOwRYWnd.oB9vCRFWgvS211KtnxLW39SK', NULL, 0, 0, NULL, NULL, '2022-02-09 08:03:54', '2022-02-09 08:03:54', NULL),
(32, 'Tasos', 'tasos.tsikriteas@gmail.com', NULL, NULL, '$2y$10$TK7UBuxDD0IRP1xDoFnDveCEpUD5a40nRDV1QTmY/lSQHjBLGb3Si', NULL, 0, 0, NULL, NULL, '2022-02-09 08:27:56', '2022-02-09 08:27:56', NULL),
(33, 'Aman Raj', 'amanrajtoppoart@ovi.com', NULL, NULL, '$2y$10$10vmPIn2AJp2oA5Ro6iUyOKon4rOfPvJhLyXfQ.SmcZiVM7as8Jq.', NULL, 0, 0, NULL, NULL, '2022-02-10 10:54:09', '2022-02-10 10:54:09', NULL),
(34, 'Τάσος Τσικριτέας', 'info.oneplusdesign@gmail.com', NULL, NULL, '$2y$10$2lovO7rO0AOqZYTCEwlY0uc41tiAFl60qp8jBwk1qPkGlls98itja', NULL, 0, 0, NULL, NULL, '2022-02-10 15:53:49', '2022-02-10 15:53:49', NULL),
(35, 'AMAN RAJ TOPPO', 'office.amanraj@gmail.com', NULL, NULL, '$2y$10$nC5IZJa3dPlyin3f0NyQuOdYwjEgj.izgPm6z3Dp3ZAUdH9jt/STO', NULL, 0, 0, NULL, NULL, '2022-02-11 03:27:18', '2022-02-11 03:27:18', NULL),
(36, 'Amanraj Toppo', 'amanrajtoppoart@gmail.com', NULL, NULL, '$2y$10$Tu9j6LD4HfUJZt7VwyiMKeuWMlyw/vXVEs.DGkPONmUJ4zDZGk3CW', NULL, 0, 0, NULL, NULL, '2022-02-11 06:41:05', '2022-02-11 06:41:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_puzzle`
--

CREATE TABLE `user_puzzle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `puzzle_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attempts` int(11) DEFAULT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `completed_at` timestamp NULL DEFAULT NULL,
  `time_taken` double(8,2) DEFAULT NULL,
  `is_solved` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_puzzle`
--

INSERT INTO `user_puzzle` (`id`, `user_id`, `puzzle_id`, `option_id`, `attempts`, `started_at`, `completed_at`, `time_taken`, `is_solved`, `created_at`, `updated_at`) VALUES
(1, 31, 3, 9, 6, '2022-02-16 08:23:32', '2022-02-16 08:23:32', 0.00, '1', '2022-02-09 08:04:11', '2022-02-16 08:23:32'),
(2, 31, 28, 110, 2, '2022-02-11 08:37:27', '2022-02-11 08:37:27', 0.00, '1', '2022-02-09 08:04:54', '2022-02-11 08:37:27'),
(3, 32, 3, 9, 1, '2022-02-09 08:28:21', '2022-02-09 08:28:21', 0.00, '1', '2022-02-09 08:28:13', '2022-02-09 08:28:21'),
(4, 32, 28, 110, 1, '2022-02-09 08:28:41', '2022-02-09 08:28:41', 0.00, '1', '2022-02-09 08:28:32', '2022-02-09 08:28:41'),
(5, 32, 29, 115, 1, '2022-02-09 08:28:56', '2022-02-09 08:28:56', 0.00, '1', '2022-02-09 08:28:45', '2022-02-09 08:28:56'),
(6, 32, 36, 143, 1, '2022-02-09 08:29:05', '2022-02-09 08:29:05', 0.00, '1', '2022-02-09 08:29:01', '2022-02-09 08:29:05'),
(7, 32, 37, 148, 2, '2022-02-09 08:29:13', '2022-02-09 08:29:13', 0.00, '1', '2022-02-09 08:29:07', '2022-02-09 08:29:13'),
(8, 32, 38, 152, 1, '2022-02-09 08:29:28', '2022-02-09 08:29:28', NULL, '0', '2022-02-09 08:29:15', '2022-02-09 08:29:28'),
(9, 31, 29, 115, 1, '2022-02-10 08:18:37', '2022-02-10 08:18:37', 0.00, '1', '2022-02-10 08:18:21', '2022-02-10 08:18:37'),
(10, 31, 36, 143, 4, '2022-02-16 08:40:19', '2022-02-16 08:40:19', 0.00, '1', '2022-02-10 08:18:40', '2022-02-16 08:40:19'),
(11, 33, 3, 9, 2, '2022-02-10 11:06:03', '2022-02-10 11:06:03', 0.00, '1', '2022-02-10 11:05:15', '2022-02-10 11:06:03'),
(12, 33, 28, 110, 2, '2022-02-10 11:08:06', '2022-02-10 11:08:06', 0.00, '1', '2022-02-10 11:06:08', '2022-02-10 11:08:06'),
(13, 33, 29, NULL, 1, '2022-02-10 11:08:08', NULL, NULL, '0', '2022-02-10 11:08:08', '2022-02-10 11:08:08'),
(14, 33, 36, NULL, 1, '2022-02-10 11:08:16', NULL, NULL, '0', '2022-02-10 11:08:16', '2022-02-10 11:08:16'),
(15, 34, 3, 9, 7, '2022-02-16 12:35:57', '2022-02-16 12:35:57', 0.00, '1', '2022-02-10 15:54:16', '2022-02-16 12:35:57'),
(16, 34, 28, 110, 5, '2022-02-16 12:36:08', '2022-02-16 12:36:08', 0.00, '1', '2022-02-10 15:54:33', '2022-02-16 12:36:08'),
(17, 34, 29, 114, 2, '2022-02-16 12:41:21', '2022-02-16 12:41:21', 0.00, '1', '2022-02-10 15:54:44', '2022-02-16 12:41:21'),
(18, 34, 36, 143, 1, '2022-02-10 15:54:55', '2022-02-10 15:54:55', 0.00, '1', '2022-02-10 15:54:51', '2022-02-10 15:54:55'),
(19, 34, 37, 148, 1, '2022-02-10 15:55:04', '2022-02-10 15:55:04', 0.00, '1', '2022-02-10 15:54:57', '2022-02-10 15:55:04'),
(20, 34, 38, 150, 1, '2022-02-10 15:55:17', '2022-02-10 15:55:17', 0.00, '1', '2022-02-10 15:55:07', '2022-02-10 15:55:17'),
(21, 34, 39, 153, 2, '2022-02-10 15:55:51', '2022-02-10 15:55:51', 0.00, '1', '2022-02-10 15:55:20', '2022-02-10 15:55:51'),
(22, 36, 3, 9, 4, '2022-02-16 08:38:15', '2022-02-16 08:38:15', 0.00, '1', '2022-02-11 06:41:16', '2022-02-16 08:38:15'),
(23, 36, 28, 110, 4, '2022-02-16 08:42:50', '2022-02-16 08:42:50', 0.00, '1', '2022-02-11 06:41:25', '2022-02-16 08:42:50'),
(24, 36, 29, 115, 1, '2022-02-11 06:41:40', '2022-02-11 06:41:40', 0.00, '1', '2022-02-11 06:41:36', '2022-02-11 06:41:40'),
(25, 36, 36, 143, 2, '2022-02-11 06:42:04', '2022-02-11 06:42:04', 0.00, '1', '2022-02-11 06:41:43', '2022-02-11 06:42:04'),
(26, 36, 37, 148, 1, '2022-02-11 06:42:15', '2022-02-11 06:42:15', 0.00, '1', '2022-02-11 06:42:08', '2022-02-11 06:42:15'),
(27, 36, 38, 150, 1, '2022-02-11 06:42:25', '2022-02-11 06:42:25', 0.00, '1', '2022-02-11 06:42:18', '2022-02-11 06:42:25'),
(28, 36, 39, 153, 1, '2022-02-11 06:42:33', '2022-02-11 06:42:33', 0.00, '1', '2022-02-11 06:42:27', '2022-02-11 06:42:33'),
(29, 31, 37, 148, 1, '2022-02-16 08:24:08', '2022-02-16 08:24:08', 0.00, '1', '2022-02-16 08:23:51', '2022-02-16 08:24:08'),
(30, 31, 38, 150, 1, '2022-02-16 08:24:21', '2022-02-16 08:24:21', 0.00, '1', '2022-02-16 08:24:16', '2022-02-16 08:24:21'),
(31, 31, 39, 153, 1, '2022-02-16 08:24:33', '2022-02-16 08:24:33', 0.00, '1', '2022-02-16 08:24:27', '2022-02-16 08:24:33'),
(32, 36, 4, NULL, 1, '2022-02-16 08:41:50', NULL, NULL, '0', '2022-02-16 08:41:50', '2022-02-16 08:41:50');

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
-- Indexes for table `attempts`
--
ALTER TABLE `attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `puzzles`
--
ALTER TABLE `puzzles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `user_puzzle`
--
ALTER TABLE `user_puzzle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attempts`
--
ALTER TABLE `attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `puzzles`
--
ALTER TABLE `puzzles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_puzzle`
--
ALTER TABLE `user_puzzle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
