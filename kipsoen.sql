-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2015 at 12:48 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kipsoen`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_20_091946_create_students_table', 1),
('2015_02_20_134909_create_teachers_table', 1),
('2015_02_20_141034_create_parents_table', 1),
('2015_02_26_190105_create_results_table', 1),
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 2),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 2),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 2),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parenity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `first_name`, `second_name`, `last_name`, `phone_number`, `id_number`, `occupation`, `student`, `parenity`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 0, 0, '', '', '', '2015-06-24 09:02:47', '2015-06-24 09:02:47'),
(2, 'new', 'new', 'new', 0, 0, '', '', '', '2015-06-24 12:21:40', '2015-07-18 06:02:04'),
(3, 'ayako', 'name', '', 56789, 0, '', '', '', '2015-06-25 10:07:52', '2015-06-25 10:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
`id` int(10) unsigned NOT NULL,
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `examination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mathematics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kiswahili` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `biology` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chemistry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `physics` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `history` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `religious_education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angriculture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_studies` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `principles_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_teacher_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration_number` int(11) NOT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `second_name`, `last_name`, `registration_number`, `parent`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'dennis', 'bonche', 'chebon', 5678, 'parop', '0000-00-00', '2015-06-24 09:01:43', '2015-07-18 05:53:58'),
(31, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-01 18:52:05', '2015-07-01 18:52:05'),
(33, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-01 18:52:06', '2015-07-01 18:52:06'),
(34, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:19:59', '2015-07-17 20:19:59'),
(35, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:01', '2015-07-17 20:20:01'),
(36, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:01', '2015-07-17 20:20:01'),
(37, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:01', '2015-07-17 20:20:01'),
(38, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:01', '2015-07-17 20:20:01'),
(39, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:01', '2015-07-17 20:20:01'),
(40, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:02', '2015-07-17 20:20:02'),
(41, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:02', '2015-07-17 20:20:02'),
(42, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:02', '2015-07-17 20:20:02'),
(43, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:02', '2015-07-17 20:20:02'),
(44, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:02', '2015-07-17 20:20:02'),
(45, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(46, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(47, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(48, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(49, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(50, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:03', '2015-07-17 20:20:03'),
(51, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:04', '2015-07-17 20:20:04'),
(52, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:04', '2015-07-17 20:20:04'),
(53, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(54, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(55, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(56, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(57, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(58, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:05', '2015-07-17 20:20:05'),
(59, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(60, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(61, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(62, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(63, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(64, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:06', '2015-07-17 20:20:06'),
(65, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:07', '2015-07-17 20:20:07'),
(66, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:07', '2015-07-17 20:20:07'),
(67, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:07', '2015-07-17 20:20:07'),
(68, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:07', '2015-07-17 20:20:07'),
(69, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:07', '2015-07-17 20:20:07'),
(70, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:08', '2015-07-17 20:20:08'),
(71, 'yu', 'joh', 'mich', 0, '', '0000-00-00', '2015-07-17 20:20:08', '2015-07-17 20:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_number` int(11) NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_one` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_two` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major_three` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '127.0.0.1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'bonche@bonch.com', '$2y$10$tR8STIJ4SCIxC2h.Y5thguvokMufbG.R9njXVwVTUm5BKxBpXq5J6', NULL, 1, NULL, NULL, '2015-07-01 18:48:42', '$2y$10$/2pbpu7yNjdeA.Q0/3HUgONpfBILczL/ugAgMZa3VtwQ6GL9ux876', NULL, NULL, NULL, '2015-06-24 06:59:19', '2015-07-01 18:48:42'),
(2, 'parent@kipsoen.ac.ke', '$2y$10$Je6XuK.ncyh.f4kIMx.yDOZabQ81YoWiPU14ugA3HUY/7oSfCIKxG', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-06-24 09:02:47', '2015-06-24 09:02:47'),
(3, 'bonche@gmails.com', '$2y$10$b3FTGBL5Lhnyih517S.PleX5dKoBRr1sI2fczAX2QwSKRnDINE8JW', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-06-24 12:21:40', '2015-06-24 12:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
