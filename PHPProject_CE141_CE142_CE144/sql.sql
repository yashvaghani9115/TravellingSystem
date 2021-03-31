-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 11:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

CREATE TABLE `bookpackage` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `package_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`id`, `user_id`, `price`, `departure_date`, `package_id`, `created_at`, `updated_at`) VALUES
(2, 1, 16750, '2021-03-31', 1, '2021-03-30 22:22:37', '2021-03-30 22:22:37'),
(3, 1, 8499, '2021-03-31', 2, '2021-03-30 22:53:55', '2021-03-30 22:53:55'),
(4, 1, 17999, '2021-04-29', 5, '2021-03-30 23:09:01', '2021-03-30 23:09:01'),
(5, 1, 17999, '2021-04-22', 5, '2021-03-30 23:28:43', '2021-03-30 23:28:43'),
(6, 2, 10896, '2021-03-31', 3, '2021-03-30 23:31:00', '2021-03-30 23:31:00'),
(7, 1, 16750, '2021-03-31', 1, '2021-03-31 00:21:18', '2021-03-31 00:21:18'),
(8, 1, 10000, '2021-04-30', 7, '2021-03-31 00:22:15', '2021-03-31 00:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `img_path`, `cover_img`, `description`) VALUES
(1, 'kashmir', 'lWfv0o9t52b2rjEl3YhRpUj9A9dmfsPw9BWiLNeh.jpg', 'xtR7HEcbbHmsddZ6uCnmRMQblH9mx2HUEyGy5sFH.jpg', 'Kashmir is a state which is equally rich in cultural and natural wonders along with the myriad of history and political past that this state is home to.'),
(2, 'srinagar', 'veyPCi9swk6vKpfZ1An9k3Ks7PZOJfggV62nQbLL.jpg', 'JcmKsbDYNbBDdfUKau7zh586oz3vac140qHsUuT0.jpg', 'Srinagar, the summer seat of the government of the state of Jammu and Kashmir has long been one of Indiaâs most popular tourist destinations'),
(3, 'munnar', 'EaCcqBoG1RQ8ojvMJcD7raM11ZvWqLL2qomyeiCp.jpg', 'JODywd011KYmvdQ0XPNMeWqeNXa2pJUS0fWymMi2.jpg', 'Welcome to Munnar- the gem of God’s own country-Kerala. It is South India’s largest tea-growing region, so once you set foot on its lovely terrain, you will be greeted with emerald tea-green plantations on lustrous rolling hills. Munnar is a picturesque piece of land, always fresh and welcoming.'),
(4, 'Himachal Pradesh', 'aWUrphwA9iKQQkZlbPwL5o4d7D2Y5xkTUwMeE5FH.jpg', 'PuLr0EvCvAVZWTuUfP5AWrIEV5DBl5X1CRttwzXY.jpg', 'With Himachal tour packages one can experience the best of adventure, honeymoon, holidaymaking and more in one of India\'s coveted tourist destination - Himachal Pradesh. Thanks to its stunning countryside, lush green meadows, rich flora and fauna, unexplored areas, unique cultural heritage, chaotic bazaars and a score of adventure activities. Enchanting shrines and temples dot the valley of Kangra while colonial architecture adorns the landscape of Shimla and Dalhousie.'),
(5, 'surat', '5l9cZNYi1SaRWrI9D3eDBfeIO4Qkx4Zsr1i4WZyQ.jpg', 'gpd9uUnlee8vQLLqcSGbHHn7eW3bw3h8PWSbirvZ.jpg', 'From majestic mountains of the Himalayas to the peaceful lakes and rivers. The awe-inspiring natural beauty of the valleys to exciting adventure activities and serene mornings with pleasant nights'),
(6, 'goa', '6tIIMHXGRuHC98EqN4Yko6jjJ5Q9cThs96DGP12t.jpg', 'LF57aC2HTRheA4U4g7Zx6nDQ68V5LvCU3wm7AGhT.jpg', 'With the seemingly unending expanse of tea estates that cover the rolling hills and valleys wreathed in a cool mist, Munnar is a favored vacation spot in South India.');

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
(4, '2021_03_29_082021_city', 1),
(5, '2021_03_30_042808_package', 1),
(6, '2021_03_30_111553_book_package', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `inclusions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `price`, `nights`, `inclusions`, `img`, `description`, `city_id`) VALUES
(1, 'Family Getaway Kashmir Experience', 16750, 4, 'Meals , Accommodation , Transfer , Sightseeing', 's6JUe0t5QBxy2JOXJKtTZZEYoULvWdGABGMPciPn.jpg', 'From majestic mountains of the Himalayas to the peaceful lakes and rivers. The awe-inspiring natural beauty of the valleys to exciting adventure activities and serene mornings with pleasant nights', 1),
(2, 'Short Trip to Munnar - Weekend Getaway (Ex - Cochin)', 8499, 2, 'Meals , Accommodation', 'BzzD6Iwajle33kGv0D9jCx42qpgaULPIhISwKxJ8.jpg', 'With the seemingly unending expanse of tea estates that cover the rolling hills and valleys wreathed in a cool mist, Munnar is a favored vacation spot in South India.', 3),
(3, 'A Weekend in Gulmarg - Standard', 10896, 2, 'Meals , Accommodation , Transfer , Sightseeing', '805Ipm4mf2R5OIlSWx4KqihlEyyP8gjbeI08OLOy.jpg', 'Twisting undulations, vibrant flower blooms, pine-fringed hillocks and the outstanding backdrop of Western Himalayas make Gulmarg a paradisiacal place to tread in.', 2),
(4, 'Apple Bud Hotel, Manali - Volvo Package', 10000, 4, 'Meals , Accommodation , Transfer , Sightseeing', 'r0OU9HZBn7BzjBrLaN3nvhgLGfStybIxnNWRglr7.jpg', 'Referred to as the Queen of Himachal Pradesh, Manali is an ancient town that is located at an altitude of nearly 2050 meters in Kullu district. Manali is blessed with breathtaking natural beauty that comprises lofty snow-capped peaks of Dhauladhar and Pir Panjal, thick forests,', 4),
(5, 'Kashmir - Honeymoon Delight', 17999, 5, 'Meals , Accommodation , Transfer , Sightseeing', 'KyDBPqoTURW6cq3FcB1aVGLJ4GFhZTmhwr1t9vSF.jpg', 'Twisting undulations, vibrant flower blooms, pine-fringed hillocks and the outstanding backdrop of Western Himalayas make Gulmarg a paradisiacal place to tread in.', 1),
(6, 'short surat visit', 4000, 2, 'Meals , Accommodation', 'Krh4tbTxU9fLs4CcMDhzBAyS1FX9UF5PJzOUkCSq.jpg', 'Twisting undulations, vibrant flower blooms, pine-fringed hillocks and the outstanding backdrop of Western Himalayas make Gulmarg a paradisiacal place to tread in.', 5),
(7, 'short package', 10000, 5, 'Meals , Accommodation , Transfer , Sightseeing', 'wlHvxpmnxykGcToanxzwzGIAw3EwaJ293M9KiFWZ.jpg', 'With the seemingly unending expanse of tea estates that cover the rolling hills and valleys wreathed in a cool mist, Munnar is a favored vacation spot in South India.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yashvaghani9115@gmail.com', '$2y$10$G3VFGZc59XH2OR7wrwv2oOlpcplAc1Autllk3/dfjIbwPdBteolfu', '2021-03-30 22:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userType`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yash', 'yashvaghani9115@gmail.com', 'admin', NULL, '$2y$10$NemSD5aNE1TyoXF1pnZgaOy9/t43PGrfjbW0qsk1cbwtm/3fYZsaW', 'unXyyYec5e6q9iKrg2PSZoJuRwp46KYd6UGkbs53m5ft4ssGHrTul3eDm2up', '2021-03-30 08:30:38', '2021-03-30 08:30:38'),
(2, 'user1', 'test@test.com', 'admin', NULL, '$2y$10$lloYLV0lStn.JmHAxKDyS.OoeYlyCwmhXKRFctPuj1PoqFu9nrt06', NULL, '2021-03-30 23:12:38', '2021-03-30 23:14:01'),
(3, 'yash vaghani', 'yashvaghanipatel@gmail.com', 'normal', NULL, '$2y$10$d8im9q4zFQbeQIh3kRXyA.x//6we4XXavU6YmTu4AsorXsUp6FcJ.', NULL, '2021-03-30 23:24:11', '2021-03-30 23:25:29'),
(4, 'hit vaghani', 'test1@test.com', 'admin', NULL, '$2y$10$UhX8nkQ/chTQX4bd4LM/AuETitHgeo2lqI9sJ/v73tTq2uRVGGv6i', NULL, '2021-03-31 00:16:26', '2021-03-31 00:18:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookpackage_package_id_foreign` (`package_id`),
  ADD KEY `bookpackage_user_id_foreign` (`user_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_city_id_foreign` (`city_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpackage`
--
ALTER TABLE `bookpackage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD CONSTRAINT `bookpackage_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookpackage_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
