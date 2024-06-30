-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2024 at 12:36 PM
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
-- Database: `omar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Women\'s Clothing', 'Category for women\'s clothing items', '2024-05-09 05:53:35', '2024-05-09 05:53:35'),
(2, 'Men\'s Clothing', 'Category for men\'s clothing items', '2024-05-09 05:53:35', '2024-05-09 05:53:35'),
(3, 'Accessories', 'Category for fashion accessories', '2024-05-09 05:53:35', '2024-05-09 05:53:35'),
(4, 'Footwear', 'Category for shoes and footwear', '2024-05-09 05:53:35', '2024-05-09 05:53:35'),
(5, 'Kids\' Clothing', 'Category for children\'s clothing items', '2024-05-09 05:53:35', '2024-05-09 05:53:35'),
(6, 'Makeup', 'Category for Makeup products', '2024-05-09 05:53:35', '2024-05-09 05:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_19_151434_create_categories_table', 1),
(6, '2024_04_19_152233_create_products_table', 1),
(7, '2024_04_19_152328_create_reviews_table', 1),
(8, '2024_04_19_152425_create_orders_table', 1),
(9, '2024_04_19_152526_create_order_details_table', 1),
(10, '2024_04_19_152618_create_user_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `checkout_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `checkout_at`, `created_at`, `updated_at`) VALUES
(1, 1, 269.96, NULL, '2024-05-09 03:27:33', '2024-05-09 04:26:23'),
(2, 2, 0.00, NULL, '2024-05-09 05:00:11', '2024-05-09 05:00:36'),
(3, 2, 0.00, NULL, '2024-05-09 05:00:40', '2024-05-09 05:00:40'),
(4, 2, 0.00, NULL, '2024-05-09 05:00:42', '2024-05-09 05:00:42'),
(5, 2, 0.00, NULL, '2024-05-09 05:01:18', '2024-05-09 05:01:18'),
(6, 2, 69.99, NULL, '2024-05-09 05:01:20', '2024-05-09 05:01:43'),
(7, 2, 139.97, NULL, '2024-05-09 05:01:45', '2024-05-09 05:16:42'),
(8, 3, 0.00, NULL, '2024-05-12 05:34:14', '2024-05-12 05:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_details_order_id_foreign` (`order_id`),
  KEY `order_details_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 1, '2024-05-09 03:27:33', '2024-05-09 03:27:33'),
(2, 1, 2, 3, '2024-05-09 04:26:23', '2024-05-09 04:26:23'),
(5, 6, 2, 1, '2024-05-09 05:01:43', '2024-05-09 05:01:43'),
(6, 7, 6, 1, '2024-05-09 05:15:54', '2024-05-09 05:15:54'),
(7, 7, 7, 1, '2024-05-09 05:16:23', '2024-05-09 05:16:23'),
(8, 7, 6, 1, '2024-05-09 05:16:42', '2024-05-09 05:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tokenable_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Pink Oversized Hoodie', 'A chic and trendy Hoodie for any occasion.', 49.99, 1, 'images\\products\\w1.jpg', NULL, NULL),
(2, 'Printed Black Oversized Hoodie', 'Flowy Hoodie with a floral pattern, perfect for winter days.', 69.99, 1, 'images\\products\\w2.jpg', NULL, NULL),
(3, 'Wide Leg Sweatpants', 'A versatile denim sweatpants for a laid-back yet Cool look.', 89.99, 1, 'images\\products\\w3.jpg', NULL, NULL),
(4, 'Lace Cocktail Dress', 'Charming lace dress for cocktail parties and special occasions.', 79.99, 1, 'images\\products\\w4.jpg', NULL, NULL),
(5, 'Bohemian Maxi Dress', 'Flowy and bohemian-style maxi dress for a relaxed look.', 99.99, 1, 'images\\products\\w5.jpg', NULL, NULL),
(6, 'Denim Shorts', 'Stylish denim shorts for a casual summer look.', 49.99, 1, 'images\\products\\w6.jpg', NULL, NULL),
(7, 'Vintage Sunglasses', 'Classic sunglasses with a vintage touch.', 39.99, 1, 'images\\products\\w7.jpg', NULL, NULL),
(8, 'Chic Scarf', 'Soft and stylish scarf to add a touch of elegance to your outfit.', 24.99, 1, 'images\\products\\w8.jpg', NULL, NULL),
(9, 'Formal Tie', 'Classic silk tie for a sophisticated look.', 29.99, 1, 'images\\products\\w9.jpg', NULL, NULL),
(10, 'Black Oversized Sweatshirt', 'Elegant Sweatshirt perfect for casual events and family meetings.', 299.99, 2, 'images\\products\\man1.jpg', NULL, NULL),
(11, 'White Oversized Sweatshirt', 'Crisp and stylish casual shirt for cool settings.', 59.99, 2, 'images\\products\\man5.jpg', NULL, NULL),
(12, 'Beige Oversized Sweatshirt', 'Cool and comfortable t-shirt for everyday wear.', 19.99, 2, 'images\\products\\man3.jpg', NULL, NULL),
(13, 'Tailored Blazer', 'Tailored blazer to add a touch of sophistication to your outfit.', 179.99, 2, 'images\\products\\man4.jpg', NULL, NULL),
(14, 'Men\'s Casual Pants', 'Versatile pants for a relaxed yet stylish look.', 69.99, 2, 'images\\products\\man2.jpg', NULL, NULL),
(15, 'Classic Leather Belt', 'Stylish leather belt to complete your outfit.', 34.99, 2, 'images\\products\\man6.jpg', NULL, NULL),
(16, 'Designer Handbag', 'Luxurious handbag crafted with premium materials.', 199.99, 3, 'images\\products\\acc1.png', NULL, NULL),
(17, 'Evening Clutch', 'Elegant clutch bag to complement your evening attire.', 59.99, 3, 'images\\products\\acc2.png', NULL, NULL),
(18, 'Statement Necklace', 'Bold statement necklace to accessorize your look.', 44.99, 3, 'images\\products\\acc3.png', NULL, NULL),
(19, 'Fashion Backpack', 'Stylish backpack for carrying your essentials in style.', 89.99, 3, 'images\\products\\acc4.png', NULL, NULL),
(20, 'Leather Crossbody Bag', 'Chic and practical leather crossbody bag for everyday use.', 129.99, 3, 'images\\products\\acc5.png', NULL, NULL),
(21, 'Watch', 'Classic wristwatch for a timeless look.', 149.99, 3, 'images\\products\\acc6.png', NULL, NULL),
(22, 'High-Heel Shoes', 'Fashionable high-heel shoes to elevate your style.', 79.99, 4, 'images\\products\\foot1.jpg', NULL, NULL),
(23, 'Sneakers', 'Versatile sneakers suitable for everyday wear.', 59.99, 4, 'images\\products\\foot2.jpg', NULL, NULL),
(24, 'Canvas Sneakers', 'Classic canvas sneakers for a casual and sporty look.', 39.99, 4, 'images\\products\\foot3.jpg', NULL, NULL),
(25, 'Leather Boots', 'Stylish leather boots for a rugged yet refined look.', 149.99, 4, 'images\\products\\foot4.jpg', NULL, NULL),
(26, 'Ankle Boots', 'Trendy ankle boots to elevate your everyday outfits.', 119.99, 4, 'images\\products\\foot5.jpg', NULL, NULL),
(27, 'Flip-Flops', 'Comfortable flip-flops for beach days and casual outings.', 19.99, 4, 'images\\products\\foot6.jpg', NULL, NULL),
(28, 'Kids\' Printed T-Shirt', 'Fun and colorful printed t-shirt for kids.', 14.99, 5, 'images\\products\\kid1.jpg', NULL, NULL),
(29, 'Girls\' Party Dress', 'Adorable party dress for girls to sparkle at any occasion.', 39.99, 5, 'images\\products\\kid2.jpg', NULL, NULL),
(30, 'Boys\' Denim Shorts', 'Stylish denim shorts for boys to stay cool in summer.', 24.99, 5, 'images\\products\\kid3.jpg', NULL, NULL),
(31, 'Kids\' Hoodie', 'Warm and cozy hoodie for kids on chilly days.', 29.99, 5, 'images\\products\\kid4.jpg', NULL, NULL),
(32, 'Girls\' Ballet Flats', 'Cute ballet flats for girls to dance with elegance.', 19.99, 5, 'images\\products\\kid5.jpg', NULL, NULL),
(33, 'Boys\' Graphic T-Shirt', 'Cool graphic t-shirt for boys to express their style.', 17.99, 5, 'images\\products\\kid6.png', NULL, NULL),
(34, 'Lipstick', 'Long-lasting lipstick in vibrant colors.', 12.99, 6, 'images\\products\\make1.png', NULL, NULL),
(35, 'Mascara', 'Lengthening and volumizing mascara for dramatic lashes.', 9.99, 6, 'images\\product\\pexels-828860-2688992.jpg', NULL, NULL),
(36, 'Foundation', 'Flawless foundation for a smooth and even complexion.', 14.99, 6, 'images\\products\\make3.png', NULL, NULL),
(37, 'Eyeshadow Palette', 'Versatile eyeshadow palette with a range of colors for endless looks.', 19.99, 6, 'images\\products\\make4.png', NULL, NULL),
(38, 'Blush', 'Natural-looking blush for a healthy flush of color.', 11.99, 6, 'images\\products\\make5.png', NULL, NULL),
(39, 'Makeup Brushes Set', 'Complete set of makeup brushes for precise application.', 24.99, 6, 'images\\products\\make6.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_foreign` (`product_id`),
  KEY `reviews_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amin', 'Amin@gmail.com', '$2y$10$TVJ11iz50U5nZksuvO99KeDamNh1Twv4W2vAwMWofppJ5SMDEkj0e', NULL, NULL, '2024-05-09 03:27:05', '2024-05-09 03:27:05'),
(2, 'asma', 'asma@gmail.com', '$2y$10$dEB/L/ITxkSQHBgjFR6K1.tZUKMG4CKwQ1kS5s/7F/k1LUezDZ9aC', NULL, NULL, '2024-05-09 04:56:59', '2024-05-09 04:56:59'),
(3, 'Abdo', 'wdefdvrrbvfc@gmail.com', '$2y$10$YVwJ4yRvz/qJJhkquPOKm.v1D0J2aitcuA0inbd64LY9lFJmMK3oS', NULL, NULL, '2024-05-12 05:31:17', '2024-05-12 05:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `full_name`, `e_mail`, `address`, `birthdate`, `phone_number`, `gender`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abdo', 'wddedcererrbvfc@gmail.com', 'mansoriaaaawecwe', '2024-05-10', '01234671324', 'Male', '2024-05-09 04:57:40', '2024-05-09 04:57:40'),
(2, 2, 'Abdo', 'wddedcererrbvfc@gmail.com', 'mansoriaaaawecwe', '2024-05-03', '01234671324', 'Male', '2024-05-09 04:59:22', '2024-05-09 04:59:22'),
(3, 3, 'Abdelrahman Mohamed', 'abdo@cic-cairo.com', 'Mansoria - Giza', '2002-12-12', '01061740347', 'Male', '2024-05-12 05:31:30', '2024-05-12 05:31:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
