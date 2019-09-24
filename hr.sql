-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 24, 2019 lúc 06:52 AM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'new', NULL, NULL),
(2, 'commend', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idNews` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `idUser`, `idNews`, `content`, `created_at`, `updated_at`) VALUES
(1, 54, 6, 'retergergher', '2019-09-22 21:17:51', '2019-09-22 21:17:51'),
(2, 54, 6, 'ergher hrth rth', '2019-09-22 21:17:57', '2019-09-22 21:17:57'),
(3, 54, 5, 'greger thrt hrth', '2019-09-22 21:18:20', '2019-09-22 21:18:20'),
(4, 54, 7, 'fsdfdsfdsf', '2019-09-23 00:09:54', '2019-09-23 00:09:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'BOD', '2019-09-16 19:51:44', '2019-09-16 19:51:44'),
(4, 'Strategy Group', '2019-09-20 19:29:03', '2019-09-20 19:29:03'),
(5, 'School Partner', '2019-09-20 19:30:19', '2019-09-20 19:30:19'),
(6, 'Center', '2019-09-20 19:30:25', '2019-09-20 19:30:25'),
(7, 'Marketing', '2019-09-20 19:30:31', '2019-09-20 19:30:31'),
(8, 'Event', '2019-09-20 19:30:35', '2019-09-20 19:30:35'),
(9, 'Design', '2019-09-20 19:30:39', '2019-09-20 19:30:39'),
(10, 'HR - AD', '2019-09-20 19:30:47', '2019-09-20 19:30:47'),
(11, 'IT', '2019-09-20 19:30:52', '2019-09-20 19:30:52'),
(12, 'Finance', '2019-09-20 19:30:59', '2019-09-20 19:30:59'),
(13, 'KMC', '2019-09-20 19:31:04', '2019-09-20 19:31:04'),
(14, 'Product R&D ESL', '2019-09-20 19:31:09', '2019-09-20 19:31:09'),
(15, 'Product R&D Schooling', '2019-09-20 19:31:16', '2019-09-20 19:31:16'),
(16, 'Product R&D ScM', '2019-09-20 19:31:20', '2019-09-20 19:31:20'),
(17, 'Product Test Prep', '2019-09-20 19:31:25', '2019-09-20 19:31:25'),
(18, 'Academic', '2019-09-20 19:31:28', '2019-09-20 19:31:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_16_103130_create_departments_table', 2),
(4, '2019_09_16_103241_create_positions_table', 3),
(5, '2019_09_17_082452_create_roles_table', 4),
(6, '2019_09_17_082831_add_role_in_users_table', 5),
(7, '2019_09_17_084630_add_id_position_in_users_table', 6),
(8, '2019_09_18_090254_create_categories_table', 7),
(9, '2019_09_18_090405_create_news_table', 7),
(11, '2019_09_23_022904_create_comments_table', 8),
(12, '2019_09_23_045521_add_id_user_in_news_table', 9),
(13, '2019_09_23_050649_add_id_user_in_news_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `titlenone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hightlight` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 54
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `id_category`, `titlenone`, `description`, `content`, `image`, `hightlight`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Juventus ra mắt sao 0 đồng: Lương 400.000 bảng/tuần, quyết giành cúp C1', 1, 'juventus-ra-mat-sao-0-dong-luong-400000-bangtuan-quyet-gianh-cup-c1', 'Đây là tóm tắt', '<p>dsafsdfsdsdfsd&nbsp;Juventus ra mắt sao 0 đồng: Lương 400.000 bảng/tuần, quyết giành cúp C1</p><p>Juventus ra mắt sao 0 đồng: Lương 400.000 bảng/tuần, quyết giành cúp C1</p><p>Juventus ra mắt sao 0 đồng: Lương 4fefefe00.000 bảng/tuần, quyết giành cúp C1</p><p>Juventus ra mắt sao 0 đồng: Lương 400.000 bảng/tuần, quyết giành cúp C1<br></p>', 'WFro-1563264250-535-vu-lat-xe-khach-14-nguoi-thuong-vong-tai-nan-1-1563263813-width660height439.jpg', 1, '2019-09-18 02:59:32', '2019-09-18 03:52:48', 54),
(3, 'day la tieu de', 2, 'day-la-tieu-de', 'tểtrtertretertertre', 'hgtrh rbrtj tỵ tjk uyujk&nbsp;', 'l2Ta-64706417_2577779982235008_7813566128797515776_n.png', 0, '2019-09-18 19:20:17', '2019-09-18 19:20:17', 54),
(4, 'Second divided from form fish beast made every of seas all gathered us saying he our', 2, 'second-divided-from-form-fish-beast-made-every-of-seas-all-gathered-us-saying-he-our', 'MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower', '<p class=\"excert\" style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p><div class=\"quote-wrapper\" style=\"box-sizing: border-box; background: rgba(130, 139, 178, 0.1); padding: 30px; line-height: 1.733; color: rgb(136, 136, 136); font-style: italic; margin-top: 25px; margin-bottom: 25px;\"><div class=\"quotes\" style=\"box-sizing: border-box; background: rgb(255, 255, 255); padding: 25px 25px 25px 30px; border-left: 2px solid;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</div></div><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p>', 'WIV8-single_blog_1.png', 1, '2019-09-18 20:44:28', '2019-09-18 20:44:28', 54),
(5, 'Google inks pact for new 35-storey office', 1, 'google-inks-pact-for-new-35-storey-office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '<p class=\"excert\" style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p><div class=\"quote-wrapper\" style=\"box-sizing: border-box; background: rgba(130, 139, 178, 0.1); padding: 30px; line-height: 1.733; color: rgb(136, 136, 136); font-style: italic; margin-top: 25px; margin-bottom: 25px;\"><div class=\"quotes\" style=\"box-sizing: border-box; background: rgb(255, 255, 255); padding: 25px 25px 25px 30px; border-left: 2px solid;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</div></div><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p>', 'QXq5-single_blog_2.png', 0, '2019-09-18 21:41:37', '2019-09-18 21:41:37', 54),
(6, 'test Google inks pact for new 35-storey office', 1, 'test-google-inks-pact-for-new-35-storey-office', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '<p class=\"excert\" style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">fefefeMCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p><div class=\"quote-wrapper\" style=\"box-sizing: border-box; background: rgba(130, 139, 178, 0.1); padding: 30px; line-height: 1.733; color: rgb(136, 136, 136); font-style: italic; margin-top: 25px; margin-bottom: 25px;\"><div class=\"quotes\" style=\"box-sizing: border-box; background: rgb(255, 255, 255); padding: 25px 25px 25px 30px; border-left: 2px solid;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</div></div><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p><p style=\"box-sizing: border-box; margin-bottom: 20px; color: rgb(162, 162, 162); line-height: 28px; font-size: 15px;\">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually</p>', 'HCor-single_blog_3.png', 0, '2019-09-18 21:43:47', '2019-09-19 00:29:18', 54),
(7, 'Speark', 2, 'speark', 'That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.', '<p>That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.</p><p>That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.</p><p>That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.</p><p>That dominion stars lights dominion divide years for fourth have don\'t stars is that he earth it first without heaven in place seed it second morning saying.</p><p><br></p>', 'l0yC-services_3.png', 0, '2019-09-22 21:42:40', '2019-09-22 21:42:40', 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `positions`
--

INSERT INTO `positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nhân viên', NULL, NULL),
(2, 'Lead', NULL, NULL),
(3, 'BOD', NULL, NULL),
(4, 'CEO', NULL, NULL),
(5, 'General Director, CFO', NULL, NULL),
(6, 'Product Manager', NULL, NULL),
(7, 'Manager, COO', NULL, NULL),
(8, 'Strategy Group', NULL, NULL),
(9, 'Lead Foudation', NULL, NULL),
(10, 'Foudation', NULL, NULL),
(11, 'School Partner Assistant Manager', NULL, NULL),
(12, 'CC', NULL, NULL),
(13, 'AC', NULL, NULL),
(14, 'Center Manager', NULL, NULL),
(15, 'EC', NULL, NULL),
(16, 'Marketing Manager', NULL, NULL),
(17, 'Marketing Manager', NULL, NULL),
(18, 'Staff', NULL, NULL),
(19, 'Event Coordinator', NULL, NULL),
(20, 'Design Lead', NULL, NULL),
(21, 'Design', NULL, NULL),
(22, 'HR - AD Manager', NULL, NULL),
(23, 'HR', NULL, NULL),
(24, 'AD', NULL, NULL),
(25, 'LIB', NULL, NULL),
(26, 'IT', NULL, NULL),
(27, 'Chef Accountant', NULL, NULL),
(28, 'Treasurer', NULL, NULL),
(29, 'KMC Lead', NULL, NULL),
(30, 'KMC', NULL, NULL),
(31, 'Input Staff', NULL, NULL),
(32, 'R&D ESL Manager', NULL, NULL),
(33, 'R&D ESL', NULL, NULL),
(34, 'ESL Designer', NULL, NULL),
(35, 'R&D Schooling Manager', NULL, NULL),
(36, 'R&D Schooling', NULL, NULL),
(37, 'R&D ScM Manager ', NULL, NULL),
(38, 'R&D ScM', NULL, NULL),
(39, 'Test Prep Lead', NULL, NULL),
(40, 'Test Prep', NULL, NULL),
(41, 'Academic Manager', NULL, NULL),
(42, 'Academic Assistant Manager', NULL, NULL),
(43, 'Academic Assistant', NULL, NULL),
(44, 'Academic Management Trainee', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'members', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usersname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dayin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_department` int(10) UNSIGNED DEFAULT NULL,
  `id_position` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `usersname`, `staff_code`, `lead`, `email`, `role`, `email_verified_at`, `password`, `image`, `birthday`, `dayin`, `vacation`, `remember_token`, `created_at`, `updated_at`, `id_department`, `id_position`) VALUES
(7, 'Nguyễn Tiến Đạt', 'ieg11111', '11111', NULL, 'dawfft1@gmail.com', 2, NULL, '$2y$10$vKRJlTUOiTJOKa7dVSOBTeBbifnilpl9asBI32cZ4X35IfSE5q98K', 'ChSQ-1563264250-535-vu-lat-xe-khach-14-nguoi-thuong-vong-tai-nan-1-1563263813-width660height439.jpg', '04/16/2017', '0000-00-00 00:00:00', '1111', NULL, '2019-09-17 04:06:33', '2019-09-17 04:06:33', 3, 1),
(45, 'Nguyễn Tiến', 'iegfff', 'fff', NULL, 'datfdf1@gmail.com', 1, NULL, '$2y$10$ZNppgZ8jo7S043dSEn/hseEzsDccqPHHTB16fQ.MJB.Kq7Gd8hnuK', 'y8wm-4.jpg', '21/09/1995', NULL, NULL, NULL, '2019-09-18 01:41:14', '2019-09-18 01:41:14', 3, 1),
(46, 'ffff', 'ieg11111', '11111', NULL, 'dffadt1@gmail.com', 1, NULL, '$2y$10$7YrblBCHj.5uqbJe5pDGje95hMeSkikmx47q7zki7p.DWEKRzqySi', 'y8wm-4.jpg', '21/09/1995', NULL, NULL, NULL, '2019-09-18 01:41:14', '2019-09-18 01:41:14', 6, 1),
(47, 'Trần Văn Mùi', 'ieg432', '432', NULL, 'datd1@gmail.com', 1, NULL, '$2y$10$0UIc/44qoW8ia6HR9MpCmO2ov2wDX44hBa04qerJCx8Np56wbmejq', 'y8wm-4.jpg', '21/09/1995', NULL, NULL, NULL, '2019-09-18 01:41:14', '2019-09-18 01:41:14', 3, 1),
(48, 'Nguyễn Tiến Đạt', 'ieg11111', '11111', NULL, 'dadwfft1@gmail.com', 1, NULL, '$2y$10$bCodxIxG9wEOhcNA/g5DDu/HtbFU7fKw13T31cDQmDIlFXTwU6LTS', 'y8wm-4.jpg', '21/09/1995', NULL, NULL, NULL, '2019-09-18 01:41:14', '2019-09-18 01:41:14', 3, 1),
(54, 'Nguyễn Tiến Đạt', 'ieg1043', '1043', '4343432432', 'datnt@ieg.vn', 1, NULL, '$2y$10$zD/FspVV9.knyCOzz8bRd.dg0cr4Zj/QOsvge.vobelxHLZZDvEHe', 'Vohn-about_img.png', '04/25/2017', '03/26/2017', '12', NULL, '2019-09-20 20:23:58', '2019-09-23 19:44:54', 11, 1),
(61, 'Nergergguyễn Tiến Đạt', 'ieg11111', '11111', NULL, 'dawgrgrefft1@gmail.com', 1, NULL, '$2y$10$kg7tIMzLBwqeNJqrJSqmjuWFrGHTAoyaCJsirhpt4gIeI4myctxw.', 'n0na-4.jpg', '04/16/2017', '03/26/2017', '1111', NULL, '2019-09-20 21:56:55', '2019-09-20 21:56:55', 3, 1),
(62, 'Nguyễn Tiến', 'iegfff', 'fff', NULL, 'datfgregerdf1@gmail.com', 1, NULL, '$2y$10$5VA5MQny1DypCm7r/QUrfeTvKgznqjHmf6OIW1.vnA.c.bFuI.WLO', 'n0na-4.jpg', '21/09/1995', '03/26/2017', '4', NULL, '2019-09-20 21:56:55', '2019-09-20 21:56:55', 5, 1),
(63, 'ffff', 'ieg11111', '11111', NULL, 'dffagergredt1@gmail.com', 1, NULL, '$2y$10$yKugFCFHLLDyq5yUEPqSPO5GqMEou7sAM/V0ntOJeDU2jcewP54OC', 'n0na-4.jpg', '21/09/1995', '03/26/2017', '5', NULL, '2019-09-20 21:56:56', '2019-09-20 21:56:56', 6, 1),
(64, 'Trần ergergVăn Mùi', 'ieg432', '432', NULL, 'datergrd1@gmail.com', 1, NULL, '$2y$10$piyTYvkV/ltaxaflwyn8S.ygeAiY4UkGTHx239pDOxObtG1bquQd.', 'n0na-4.jpg', '21/09/1995', '42820', '5', NULL, '2019-09-20 21:56:56', '2019-09-20 21:56:56', 7, 1),
(65, 'Ngugeryễn Tiến Đạt', 'ieg11111', '11111', NULL, 'dadegrergrwfft1@gmail.com', 1, NULL, '$2y$10$Sen.kedgcvkdcOU8/KKTMO/IDZpqPrXF5L1UBeTfKnA65dshQPXs.', 'n0na-4.jpg', '21/09/1995', '03/26/2017', '4', NULL, '2019-09-20 21:56:56', '2019-09-20 21:56:56', 4, 1),
(66, 'Nguyễn Tiến Đạt', 'ieg1043', '1043', NULL, 'daftnt@ieg.vn', 1, NULL, '$2y$10$X1EDOFS7IHgGZX8H0Tk2IeozwuKPT62TxGWaXYmzjXmxiUBlf.fY2', 'n0na-4.jpg', '04/25/2017', '03/26/2017', '12', NULL, '2019-09-20 21:56:56', '2019-09-20 21:56:56', 6, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_iduser_foreign` (`idUser`),
  ADD KEY `comments_idnews_foreign` (`idNews`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id_catagory_foreign` (`id_category`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_foreign` (`role`),
  ADD KEY `users_id_position_foreign` (`id_position`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_idnews_foreign` FOREIGN KEY (`idNews`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `comments_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_id_catagory_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_position_foreign` FOREIGN KEY (`id_position`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `users_role_foreign` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
