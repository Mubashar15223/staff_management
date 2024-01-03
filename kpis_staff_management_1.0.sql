-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 09:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpis_staff_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_pay`
--

CREATE TABLE `ads_pay` (
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `adsWebsite` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `paidMonth` int(11) DEFAULT NULL,
  `engagedTraffic` int(11) DEFAULT NULL,
  `promotedWebsite` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ads_pay`
--

INSERT INTO `ads_pay` (`id`, `created_at`, `updated_at`, `company`, `adsWebsite`, `month`, `paidMonth`, `engagedTraffic`, `promotedWebsite`, `description`) VALUES
(1, '2023-12-07 09:17:51', '2023-12-07 09:17:51', 'company', 'website', '2023-12', 12, 12, '121', '<div>des</div>');

-- --------------------------------------------------------

--
-- Table structure for table `api_server`
--

CREATE TABLE `api_server` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `packageName` varchar(255) DEFAULT NULL,
  `purchaseDate` datetime DEFAULT NULL,
  `months` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `renewalAmount` varchar(255) DEFAULT NULL,
  `allowed` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `api_server`
--

INSERT INTO `api_server` (`id`, `name`, `company`, `created_at`, `updated_at`, `packageName`, `purchaseDate`, `months`, `amount`, `renewalAmount`, `allowed`, `description`, `website`) VALUES
(5, 'Name 2', 'company', '2023-12-06 04:08:59', '2023-12-06 04:08:59', 'package', '2023-12-06 00:00:00', '13', '1000', NULL, 'Unlimited', '<div><br></div>', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  `new_users` varchar(255) NOT NULL,
  `average_engagement_time` varchar(255) NOT NULL,
  `engagement_rate` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `mobile_uers` varchar(255) NOT NULL,
  `desktop_users` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `claim_status`
--

CREATE TABLE `claim_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `country_audience`
--

CREATE TABLE `country_audience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_01_174619_create_categories_table', 2),
(6, '2023_12_01_175513_create_servers_table', 2),
(7, '2023_12_01_175904_create_themes_table', 2),
(8, '2023_12_01_180102_create_plugins_table', 2),
(9, '2023_12_01_180945_create_claims_table', 2),
(10, '2023_12_01_182038_create_country_audience_table', 2),
(11, '2023_12_01_182252_create_teams_table', 2),
(12, '2023_12_01_182253_create_projects_table', 2),
(13, '2023_12_01_191220_create_staffs_table', 2),
(14, '2023_12_01_191746_create_claim_status_table', 2),
(15, '2023_12_01_192211_create_expenses_table', 2),
(16, '2023_12_01_192356_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platformName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `platformWebsite` varchar(255) DEFAULT NULL,
  `pluginName` varchar(255) DEFAULT NULL,
  `priceType` varchar(255) DEFAULT NULL,
  `purchaseDate` datetime DEFAULT NULL,
  `months` int(11) DEFAULT NULL,
  `supportPeriod` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `renewalAmount` int(11) DEFAULT NULL,
  `allowed` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `plugins`
--

INSERT INTO `plugins` (`id`, `platformName`, `created_at`, `updated_at`, `platformWebsite`, `pluginName`, `priceType`, `purchaseDate`, `months`, `supportPeriod`, `amount`, `renewalAmount`, `allowed`, `description`) VALUES
(1, 'pgmm', '2023-12-07 14:07:06', '2023-12-07 14:16:53', 'a', 'GH', 'onetime', '2023-12-14 00:00:00', 2, 2, 22, 22, 'Unlimited', '<div>eqeeq</div>');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tital` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `catogory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `key_features` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `server_id` bigint(20) UNSIGNED DEFAULT NULL,
  `theme_id` bigint(20) UNSIGNED DEFAULT NULL,
  `plugin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `claim_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_audience_id` bigint(20) UNSIGNED DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `code`, `catogory_id`, `description`, `key_features`, `image`, `server_id`, `theme_id`, `plugin_id`, `team_id`, `claim_id`, `country_audience_id`, `review`, `created_at`, `updated_at`) VALUES
(5, 'Test Project One', '9999', NULL, '<div>A</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-02 03:11:48', '2023-12-02 03:11:48'),
(6, 'abv', '7887', NULL, '<div>jh</div>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-02 20:13:08', '2023-12-02 20:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `website` varchar(255) DEFAULT NULL,
  `packageName` varchar(255) DEFAULT NULL,
  `storage` varchar(255) DEFAULT NULL,
  `purchaseDate` datetime DEFAULT NULL,
  `months` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `renewalAmount` varchar(255) DEFAULT NULL,
  `allowed` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `name`, `company`, `created_at`, `updated_at`, `website`, `packageName`, `storage`, `purchaseDate`, `months`, `amount`, `renewalAmount`, `allowed`, `location`, `description`) VALUES
(5, 'Name', 'company', '2023-12-05 06:26:10', '2023-12-06 04:13:01', 'web', 'package', 'storage', '2023-12-05 00:00:00', '15', '1000', '10', '1-100', 'location', '<div>test description</div>');

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE `softwares` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `packageName` varchar(255) DEFAULT NULL,
  `platformWebsite` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `priceType` varchar(255) DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL,
  `months` int(11) DEFAULT NULL,
  `supportPeriod` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `renewalAmount` int(11) DEFAULT NULL,
  `allowed` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`id`, `companyName`, `packageName`, `platformWebsite`, `created_at`, `updated_at`, `priceType`, `purchaseDate`, `months`, `supportPeriod`, `amount`, `renewalAmount`, `allowed`, `description`, `tags`) VALUES
(2, 'kk', 'q', 'qw', '2023-12-07 15:00:54', '2023-12-07 15:05:47', 'onetime', '2024-01-06', 5, 3, 3, 33, '1-100', '<div>asdddddd</div>', NULL),
(3, 'c', 's', '2', '2023-12-07 15:16:32', '2023-12-07 15:16:32', 'subscribe', '2023-12-23', 2, 2, 2, 2, '1-100', '<div>asd</div>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `c_points` varchar(255) NOT NULL,
  `cpc` varchar(255) NOT NULL,
  `cpr` varchar(255) NOT NULL,
  `cps` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `trafic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `stack` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `platformName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `platformWebsite` varchar(255) DEFAULT NULL,
  `themeName` varchar(255) DEFAULT NULL,
  `priceType` enum('subscribe','onetime') DEFAULT 'subscribe',
  `purchaseDate` datetime DEFAULT NULL,
  `months` int(11) DEFAULT NULL,
  `supportPeriod` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `renewalAmount` int(11) DEFAULT NULL,
  `allowed` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `platformName`, `created_at`, `updated_at`, `platformWebsite`, `themeName`, `priceType`, `purchaseDate`, `months`, `supportPeriod`, `amount`, `renewalAmount`, `allowed`, `description`) VALUES
(1, 'platfrom Name', '2023-12-07 01:52:33', '2023-12-07 08:13:20', 'platform Website', 'Theme', 'onetime', '2023-12-07 00:00:00', 20, 20, 200, 10, 'Unlimited', '<div>test</div>'),
(3, 'platfrom Name', '2023-12-07 08:12:06', '2023-12-07 08:12:06', 'platform Website', 'Theme', 'subscribe', '2023-12-07 00:00:00', 100, 10, 12, NULL, 'Unlimited', '<div>aaa</div>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$lEgTEuXXbHF.ijQYFNoLZuuMYJfC84ij2QxTOQufR50.RQ5wV33GG', NULL, NULL, '2023-11-30 00:44:41', '2023-11-30 00:44:41'),
(5, NULL, 'raheelaslam1136@gmail.com', NULL, '$2y$10$UXOO2WL2s.B4o2SBpHJyteG48DFbIQ8y5DVov1Jc0OwFYgEvBhnZ2', NULL, NULL, '2023-12-01 18:06:07', '2023-12-01 18:06:07'),
(6, NULL, 'tacticssoft99@gmail.com', NULL, '$2y$10$6xLugCVaQT1tWw88n5lPr.iyQ4D9FMe/UvO.m51QYpuCrTPlt4vjG', NULL, NULL, '2023-12-03 10:25:19', '2023-12-03 10:25:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_pay`
--
ALTER TABLE `ads_pay`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `api_server`
--
ALTER TABLE `api_server`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `claim_status`
--
ALTER TABLE `claim_status`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `country_audience`
--
ALTER TABLE `country_audience`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `projects_server_id_foreign` (`server_id`) USING BTREE,
  ADD KEY `projects_theme_id_foreign` (`theme_id`) USING BTREE,
  ADD KEY `projects_plugin_id_foreign` (`plugin_id`) USING BTREE,
  ADD KEY `projects_team_id_foreign` (`team_id`) USING BTREE,
  ADD KEY `projects_claim_id_foreign` (`claim_id`) USING BTREE;

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_pay`
--
ALTER TABLE `ads_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `api_server`
--
ALTER TABLE `api_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `claim_status`
--
ALTER TABLE `claim_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_audience`
--
ALTER TABLE `country_audience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plugins`
--
ALTER TABLE `plugins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
