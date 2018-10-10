-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2018 lúc 12:19 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sieuthibds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `order`, `is_active`, `created_at`, `updated_at`, `seo_id`, `locale_id`, `translation_id`) VALUES
(1, 'Thảo Điền', 'thao-dien', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 02:56:35', '2018-10-10 04:27:01', NULL, 1, 1),
(2, 'Thao Dien', 'thao-dien', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 03:14:32', '2018-10-10 03:14:32', NULL, 2, 1),
(3, 'An Phú', 'an-phu', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 03:19:50', '2018-10-10 03:19:50', NULL, 1, 2),
(4, 'An Phu', 'an-phu', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 03:20:05', '2018-10-10 03:20:05', NULL, 2, 2),
(5, 'Tin Tức', 'tin-tuc', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 1, 1, '2018-10-10 03:40:22', '2018-10-10 03:40:22', NULL, 1, 3),
(6, 'News', 'news', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 1, 1, '2018-10-10 03:42:12', '2018-10-10 03:42:12', NULL, 2, 3),
(7, 'Dự Án', 'du-an', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 1, 1, '2018-10-10 04:03:57', '2018-10-10 04:03:57', NULL, 1, 4),
(8, 'Project', 'project', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 0, 1, 1, '2018-10-10 04:04:09', '2018-10-10 04:04:09', NULL, 2, 4),
(11, 'Gateway', 'gateway', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 04:29:16', '2018-10-10 04:29:16', NULL, 1, 6),
(12, 'Gateway', 'gateway', NULL, 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 04:29:39', '2018-10-10 04:29:39', NULL, 2, 6),
(14, 'Nasim', 'nasim', '<p>\r\n	Nasim\r\n</p>', 'images/uploads/images/gt_1.jpg', NULL, 0, NULL, 1, 1, 1, '2018-10-10 04:30:19', '2018-10-10 04:30:19', NULL, 1, 7),
(15, 'Nasim', 'nasim', NULL, NULL, NULL, 0, NULL, 1, 1, 1, '2018-10-10 04:30:27', '2018-10-10 04:30:27', NULL, 2, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_many`
--

CREATE TABLE `category_many` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_many`
--

INSERT INTO `category_many` (`category_id`, `item_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-10-10 08:50:36', '2018-10-10 09:14:25'),
(1, 5, 1, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(2, 2, 1, '2018-10-10 08:53:14', '2018-10-10 09:14:40'),
(2, 6, 1, '2018-10-10 09:59:04', '2018-10-10 10:10:06'),
(3, 3, 1, '2018-10-10 08:53:50', '2018-10-10 08:55:18'),
(4, 4, 1, '2018-10-10 08:55:10', '2018-10-10 08:55:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p>\r\n	<strong><em><span style=\"background-color:#f1c40f;\">Hotline đặt hàng</span>:</em></strong><em>&nbsp;&nbsp;<strong>097.388.9336 - 0914.675.777</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;&nbsp;<strong>097.388.9336</strong></em>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong>\r\n</p>\r\n\r\n<p>\r\n	<strong><em>Thông tin liên hệ với chúng tôi:</em></strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<strong>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ THÉP KHÁNH NAM</strong>\r\n</p>\r\n\r\n<p>\r\n	<strong>TRỤ SỞ CHÍNH:</strong>&nbsp;<em>201 Bình Thành, KP 4, P. Bình Hưng Hòa, Q. Bình Tân, thành phố Hồ Chí Minh</em>\r\n</p>\r\n\r\n<p>\r\n	<strong>Di động:</strong><em>&nbsp;097.388.9336 - 0914.675.777</em>\r\n</p>', NULL, NULL, 1, NULL, '2018-03-30 09:07:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `icon`, `locale_id`, `translation_id`, `created_at`, `updated_at`) VALUES
(1, '24H Electric backup', 'fas fa-bolt', 2, 6, '2018-10-08 07:37:01', '2018-10-08 07:37:01'),
(2, 'Máy Phát Điện 24/24', 'fas fa-bolt', 1, 6, '2018-10-08 07:47:01', '2018-10-08 07:47:01'),
(3, 'Parking', 'fas fa-parking', 2, 7, '2018-10-08 07:47:37', '2018-10-08 07:47:37'),
(4, 'Chỗ Đậu Xe', 'fas fa-parking', 1, 7, '2018-10-08 07:47:50', '2018-10-08 07:47:50'),
(5, 'Mainternance staff', 'fas fa-screwdriver', 2, 8, '2018-10-08 07:48:10', '2018-10-08 07:48:10'),
(6, 'Nhân Viên Bảo Trì', 'fas fa-screwdriver', 1, 8, '2018-10-08 07:48:47', '2018-10-08 07:48:47'),
(7, 'Club House', 'fas fa-users', 2, 9, '2018-10-08 07:49:41', '2018-10-08 07:49:41'),
(8, 'Quán bar', 'fas fa-users', 1, 9, '2018-10-08 07:49:51', '2018-10-08 07:49:51'),
(9, 'Community Hall', 'fas fa-chalkboard-teacher', 2, 10, '2018-10-08 07:50:28', '2018-10-08 07:50:28'),
(10, 'Hội Trường', 'fas fa-chalkboard-teacher', 1, 10, '2018-10-08 07:50:44', '2018-10-08 07:50:44'),
(11, 'Banking/ATM', 'fas fa-money-check-alt', 2, 11, '2018-10-08 07:51:01', '2018-10-08 07:51:01'),
(12, 'Ngân Hàng/ATM', 'fas fa-money-check-alt', 1, 11, '2018-10-08 07:51:16', '2018-10-08 07:51:16'),
(13, 'Swimming', 'fas fa-swimmer', 2, 12, '2018-10-08 07:51:34', '2018-10-08 07:51:34'),
(14, 'Hồ Bơi', 'fas fa-swimmer', 1, 12, '2018-10-08 07:51:55', '2018-10-08 07:51:55'),
(15, 'Restaurance', 'fas fa-utensils', 2, 13, '2018-10-08 07:52:17', '2018-10-08 07:52:17'),
(16, 'Nhà Hàng', 'fas fa-utensils', 1, 13, '2018-10-08 07:52:28', '2018-10-08 07:52:28'),
(17, 'Pharmacy', 'fas fa-pills', 2, 14, '2018-10-08 07:52:45', '2018-10-08 07:52:45'),
(18, 'Nhà Thuốc', 'fas fa-pills', 1, 14, '2018-10-08 07:52:57', '2018-10-08 07:52:57'),
(19, 'Shopping mall', 'fas fa-shopping-basket', 2, 15, '2018-10-08 07:53:17', '2018-10-08 07:53:17'),
(20, 'Khu Mua Sắm', 'fas fa-shopping-basket', 1, 15, '2018-10-08 07:53:33', '2018-10-08 07:53:33'),
(21, 'Super Market', 'fas fa-cart-plus', 2, 16, '2018-10-08 07:53:51', '2018-10-08 07:53:51'),
(22, 'Siêu Thị', 'fas fa-cart-plus', 1, 16, '2018-10-08 07:54:02', '2018-10-08 07:54:02'),
(23, 'Coffee Shop', 'fas fa-coffee', 2, 17, '2018-10-08 07:54:22', '2018-10-08 07:54:22'),
(24, 'Quán Cà Phê', 'fas fa-coffee', 1, 17, '2018-10-08 07:54:32', '2018-10-08 07:54:32'),
(25, 'Gymnasium', 'fas fa-dumbbell', 2, 18, '2018-10-08 07:54:48', '2018-10-08 07:54:48'),
(26, 'Phòng Gym', 'fas fa-dumbbell', 1, 18, '2018-10-08 07:54:58', '2018-10-08 07:54:58'),
(27, 'Wifi', 'fas fa-wifi', 2, 19, '2018-10-08 07:55:13', '2018-10-08 07:55:13'),
(28, 'Wifi', 'fas fa-wifi', 1, 19, '2018-10-08 07:55:20', '2018-10-08 07:55:20'),
(29, 'Yoga', 'fab fa-yoast', 2, 20, '2018-10-08 07:57:31', '2018-10-08 07:57:31'),
(30, 'Yoga', 'fab fa-yoast', 1, 20, '2018-10-08 07:57:46', '2018-10-08 07:57:46'),
(31, 'Security', 'fas fa-user-secret', 2, 21, '2018-10-08 07:58:01', '2018-10-08 07:58:01'),
(32, 'Bảo Vệ', 'fas fa-user-secret', 1, 21, '2018-10-08 07:58:12', '2018-10-08 07:58:12'),
(33, 'Access Card', 'fas fa-id-card-alt', 2, 22, '2018-10-08 07:58:30', '2018-10-08 07:58:30'),
(34, 'Thẻ Ra Vào', 'fas fa-id-card-alt', 1, 22, '2018-10-08 07:58:45', '2018-10-08 07:58:45'),
(35, 'Playground', 'fas fa-child', 2, 23, '2018-10-08 07:59:12', '2018-10-08 07:59:12'),
(36, 'Khu Vui Chơi', 'fas fa-child', 1, 23, '2018-10-08 07:59:24', '2018-10-08 07:59:24'),
(37, 'Internet', 'fab fa-internet-explorer', 2, 24, '2018-10-08 07:59:39', '2018-10-08 07:59:39'),
(38, 'Internet', 'fab fa-internet-explorer', 1, 24, '2018-10-08 07:59:51', '2018-10-08 07:59:51'),
(39, 'Indoor games', 'fas fa-gamepad', 2, 25, '2018-10-08 08:00:05', '2018-10-08 08:00:05'),
(40, 'Trò Chơi Trong Nhà', 'fas fa-gamepad', 1, 25, '2018-10-08 08:00:27', '2018-10-08 08:00:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `facilities_products`
--

CREATE TABLE `facilities_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `facility_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `facilities_products`
--

INSERT INTO `facilities_products` (`product_id`, `facility_id`, `created_at`, `updated_at`) VALUES
(6, 1, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(3, 2, '2018-10-10 08:53:50', '2018-10-10 08:53:50'),
(5, 2, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 3, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 4, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 5, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 6, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 7, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 8, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 9, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(3, 10, '2018-10-10 08:53:50', '2018-10-10 08:53:50'),
(5, 10, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(4, 11, '2018-10-10 08:55:10', '2018-10-10 08:55:10'),
(6, 11, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(1, 12, '2018-10-10 08:50:36', '2018-10-10 08:50:36'),
(5, 12, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 13, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 14, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 15, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 16, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 17, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 18, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(2, 19, '2018-10-10 08:53:14', '2018-10-10 08:53:14'),
(4, 19, '2018-10-10 08:55:10', '2018-10-10 08:55:10'),
(6, 19, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(1, 20, '2018-10-10 08:50:36', '2018-10-10 08:50:36'),
(5, 20, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 21, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 22, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 23, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 24, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 25, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 26, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(2, 27, '2018-10-10 08:53:14', '2018-10-10 08:53:14'),
(6, 27, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(1, 28, '2018-10-10 08:50:36', '2018-10-10 08:50:36'),
(5, 28, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 29, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 30, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 31, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 32, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 33, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 34, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(2, 35, '2018-10-10 08:53:14', '2018-10-10 08:53:14'),
(4, 35, '2018-10-10 08:55:10', '2018-10-10 08:55:10'),
(6, 35, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 36, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 37, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 38, '2018-10-10 09:58:32', '2018-10-10 09:58:32'),
(6, 39, '2018-10-10 09:59:04', '2018-10-10 09:59:04'),
(5, 40, '2018-10-10 09:58:32', '2018-10-10 09:58:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locales`
--

CREATE TABLE `locales` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `locales`
--

INSERT INTO `locales` (`id`, `icon`, `name`, `short`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'images/uploads/images/ngonngu/flag-400.png', 'Tiếng Việt', 'vi', 1, '2018-10-07 12:01:09', '2018-10-07 12:04:31'),
(2, 'images/uploads/images/ngonngu/flag-401.png', 'English', 'en', 2, '2018-10-07 12:05:34', '2018-10-07 15:04:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `level` tinyint(1) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`id`, `name`, `path`, `is_active`, `level`, `order`, `parent_id`, `locale_id`, `translation_id`, `created_at`, `updated_at`) VALUES
(1, 'TP.Hồ Chí Minh', 'tpho-chi-minh', 0, 0, 1, NULL, 1, 28, '2018-10-09 03:12:11', '2018-10-09 03:12:11'),
(2, 'Ho Chi Minh City', 'ho-chi-minh-city', 1, 0, 1, NULL, 2, 28, '2018-10-09 03:33:19', '2018-10-09 03:33:19'),
(3, 'Quận 1', 'quan-1', 1, 1, 1, 1, 1, 29, '2018-10-09 03:34:02', '2018-10-09 03:44:49'),
(4, 'District 1', 'district-1', 1, 1, 1, 2, 2, 29, '2018-10-09 03:34:21', '2018-10-09 04:12:31'),
(5, 'Quận 2', 'quan-2', 1, 1, 1, 1, 1, 38, '2018-10-09 12:45:21', '2018-10-09 12:45:21'),
(6, 'District 2', 'district-2', 1, 1, 1, 2, 2, 38, '2018-10-09 12:48:52', '2018-10-09 12:48:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 'quang test 2 as', '', '_self', NULL, '#000000', NULL, 1, '2018-09-14 04:10:33', '2018-09-14 08:38:13', 'menu.index', NULL),
(2, 'Thư Test', '', '_self', NULL, '#000000', NULL, 2, '2018-09-14 04:48:02', '2018-09-14 08:25:26', 'menu.index', NULL),
(3, 'Chip Test', '', '_self', NULL, '#000000', NULL, 3, '2018-09-14 04:49:28', '2018-09-14 08:25:47', 'menu.index', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_140923_create_entrust_setup_tables', 1),
(4, '2018_07_12_085612_create_seos_table', 2),
(5, '2018_07_12_090313_add_seo_id_to_posts_table', 3),
(6, '2018_07_12_091007_add_seo_id_to_products_table', 4),
(7, '2018_07_12_091116_add_seo_id_to_category_items_table', 5),
(8, '2018_07_17_084914_create_category_many_table', 6),
(9, '2018_10_07_162852_create_translations_table', 7),
(11, '2018_10_07_163616_add_foreign_key_translation_to_posts_table', 8),
(12, '2018_10_07_171956_create_locales_table', 9),
(13, '2018_10_07_172615_add_foreign_key_translation_id_to_posts_table', 10),
(14, '2018_10_08_112552_create_facilities_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_image` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `num_bath` tinyint(4) DEFAULT NULL,
  `num_bed` tinyint(4) DEFAULT NULL,
  `location_district` tinyint(1) NOT NULL DEFAULT '0',
  `num_member` tinyint(4) DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furniture_full` tinyint(1) NOT NULL DEFAULT '0',
  `map` longtext COLLATE utf8mb4_unicode_ci,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `path`, `is_active`, `image`, `sub_image`, `description`, `content`, `num_bath`, `num_bed`, `location_district`, `num_member`, `area`, `furniture_full`, `map`, `code`, `price`, `order`, `user_id`, `created_at`, `updated_at`, `unit_id`, `location_id`, `locale_id`, `translation_id`, `seo_id`) VALUES
(1, 'Sản Phẩm 1', 'san-pham-1', 1, 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg', '<p>\r\n	Sản Phẩm 1\r\n</p>', '<p>\r\n	Sản Phẩm 1\r\n</p>', NULL, NULL, 0, NULL, NULL, 0, 'Sản Phẩm 1', NULL, NULL, 1, 1, '2018-10-10 08:50:36', '2018-10-10 09:14:25', NULL, 3, 1, 8, NULL),
(2, 'Product 1', 'product-1', 1, 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg', '<p>\r\n	Product 1\r\n</p>', '<p>\r\n	Product 1\r\n</p>', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2018-10-10 08:53:14', '2018-10-10 09:14:40', NULL, 4, 2, 8, NULL),
(3, 'Sản Phẩm 2', 'san-pham-2', 1, 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg', '<p>\r\n	Sản Phẩm 2\r\n</p>', '<p>\r\n	Sản Phẩm 2\r\n</p>', NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2018-10-10 08:53:50', '2018-10-10 08:53:50', NULL, 5, 1, 9, NULL),
(4, 'Product 2', 'product-2', 1, 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg', '<p>\r\n	Product 2\r\n</p>', '<p>\r\n	Product 2\r\n</p>', NULL, NULL, 0, NULL, NULL, 0, NULL, 'asd', NULL, 1, 1, '2018-10-10 08:55:10', '2018-10-10 08:55:10', NULL, 6, 2, 9, NULL),
(5, 'Sản Phẩm 3', 'san-pham-3', 1, 'images/uploads/images/gt_1.jpg', 'images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg;images/uploads/images/gt_1.jpg', '<p>\r\n	Sản Phẩm 3\r\n</p>', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, NULL, 1, 1, '2018-10-10 09:58:32', '2018-10-10 09:58:32', NULL, 3, 1, 10, NULL),
(6, 'Product 3', 'product-3', 1, 'images/uploads/images/gt_1.jpg', '', '<p>\r\n	Product 3\r\n</p>', '<p>\r\n	Product 3\r\n</p>', NULL, NULL, 0, NULL, NULL, 0, NULL, 'dsdsd', NULL, 1, 1, '2018-10-10 09:59:04', '2018-10-10 10:10:05', NULL, 6, 2, 10, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `type` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `translations`
--

INSERT INTO `translations` (`id`, `is_active`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2018-10-10 02:56:35', '2018-10-10 02:56:35'),
(2, 1, 5, '2018-10-10 03:19:50', '2018-10-10 03:19:50'),
(3, 1, 6, '2018-10-10 03:40:22', '2018-10-10 03:40:22'),
(4, 1, 6, '2018-10-10 04:03:57', '2018-10-10 04:03:57'),
(6, 1, 5, '2018-10-10 04:29:16', '2018-10-10 04:29:16'),
(7, 1, 5, '2018-10-10 04:30:19', '2018-10-10 04:30:19'),
(8, 1, 1, '2018-10-10 08:50:36', '2018-10-10 08:50:36'),
(9, 1, 1, '2018-10-10 08:53:49', '2018-10-10 08:53:49'),
(10, 1, 1, '2018-10-10 09:58:32', '2018-10-10 09:58:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`, `locale_id`, `translation_id`) VALUES
(1, 'per month', '2018-10-08 09:36:03', '2018-10-08 09:36:03', 2, 26),
(2, '/ tháng', '2018-10-08 09:36:14', '2018-10-08 09:36:14', 1, 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', NULL, '2018-03-14 07:24:10', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_items_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `category_items_seo_id_foreign` (`seo_id`),
  ADD KEY `category_items_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `category_many`
--
ALTER TABLE `category_many`
  ADD PRIMARY KEY (`category_id`,`item_id`);

--
-- Chỉ mục cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `facilities_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `facilities_products`
--
ALTER TABLE `facilities_products`
  ADD PRIMARY KEY (`facility_id`,`product_id`) USING BTREE;

--
-- Chỉ mục cho bảng `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `locations_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_seo_id_foreign` (`seo_id`),
  ADD KEY `posts_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_seo_id_foreign` (`seo_id`),
  ADD KEY `products_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_translation_id_locale_id_unique` (`translation_id`,`locale_id`),
  ADD KEY `units_locale_id_foreign` (`locale_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `facilities_products`
--
ALTER TABLE `facilities_products`
  MODIFY `facility_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD CONSTRAINT `category_items_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_items_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `category_items_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facilities_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locations_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `units_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
