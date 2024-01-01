-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 12:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT 'banner/default.jpg',
  `video` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Reception of', 'We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.', 'banner/bH97FxGrCVllBHpjsxbqi2dw2i2apcqozFnTNGIe.jpg', NULL, 1, '2023-08-13 06:15:22', '2024-01-01 10:11:57'),
(2, 'Building Dreams, Creating Spaces', 'Transforming your vision into reality with our expert construction solutions.', 'banner/cbvEX1oAhfKTapwaOip5NfMdftpnbUyWvghaVzAk.jpg', 'https://youtu.be/khnr4-ehwKA', 1, '2023-08-13 11:24:13', '2023-08-13 12:50:03'),
(3, 'Your Trusted Construction Partner', 'Reliable construction services tailored to meet your project\'s needs.', 'banner/4kDokZ1QFrRg5WNA7nxtl1euwCfsk5pbidd4AnZC.jpg', 'https://youtu.be/hGjeETM24rk', 1, '2023-08-13 11:26:05', '2023-08-13 14:37:50'),
(4, 'Builders of Sustainable Futures', 'Focusing on eco-friendly construction practices for a greener tomorrow.', 'banner/qadhi3zRPLFXKO7h50pe0ja6DQRcpQgvGlPsS6xi.jpg', NULL, 0, '2023-08-13 14:18:30', '2023-12-31 15:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bangla` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'category/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_bangla`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Miscellaneous', NULL, 'category/GysMd7j45eTtajUKSMLd1XpssriAdvRAhfbiKvDV.jpg', '2023-08-16 12:31:23', '2023-11-03 16:35:45'),
(9, 'Artificial Tree', NULL, 'category/9UIBuWXHrbpiTlXLN1CQYsxkvabyNSNY08Aj66bl.png', '2023-09-25 18:42:55', '2023-11-03 16:10:33'),
(10, 'Centre Piece', NULL, 'category/TSFQwayd1IHjiwqU4JoWBKk1JpIy7Ap6MTsAPVTO.png', '2023-09-25 18:42:55', '2023-11-03 16:10:47'),
(12, 'Chair Ribbon & Cover', NULL, 'category/0lS8oHyKU8HqagAQQvocNI0MyevM6uRqZaIQrKXh.png', '2023-09-25 18:42:55', '2023-11-03 16:11:03'),
(13, 'Chandelier', NULL, 'category/ZBLAUI43rg9QDFSAZ1tqeLAacDVptHhDId30xkzn.png', '2023-09-25 18:42:55', '2023-11-03 16:11:23'),
(14, 'Cloth', NULL, 'category/qsg04AkbOgKzEp93Wi3YuqXgYVvBpdsHpuaJLzdC.png', '2023-09-25 18:42:55', '2023-11-03 16:13:12'),
(15, 'Extra Product', NULL, 'category/EZDUjBTSiR3TgMgSFA8a2PTT66Q6fYUqtn3os4jV.png', '2023-09-25 18:42:55', '2023-11-03 16:13:36'),
(16, 'Flower Vase', NULL, 'category/xnG2V8BbHDIoqWkAV12dPGzAFipVEO0B6F2EW0Sh.png', '2023-09-25 18:42:55', '2023-11-03 16:13:54'),
(17, 'Fountain', NULL, 'category/bWet27IgMNxHKNPB3KC3Rq9jZzrhpvc8TDD6vIT8.png', '2023-09-25 18:42:55', '2023-11-03 16:14:10'),
(18, 'Hanging Item', NULL, 'category/1Exh63BX0AeV6JtTni8whNECT7hXNXJUpBjFqgZZ.png', '2023-09-25 18:42:55', '2023-11-03 16:14:28'),
(19, 'Head Table', NULL, 'category/8yoc8w8sg3hle6xJoDsrWRdAHbG8cz3qn512rcMK.png', '2023-09-25 18:42:55', '2023-11-03 16:21:26'),
(20, 'Lighting', NULL, 'category/7wdIGRYqHszJ4bCyUX3kMYvo6UUHhIRm8KvuQYCO.png', '2023-09-25 18:42:55', '2023-11-03 16:22:39'),
(21, 'Metal', NULL, 'category/Yb5JnbWQjt9jEE9izrLvNmxht8SFUAgj0YkGdoz0.png', '2023-09-25 18:42:55', '2023-11-03 16:25:12'),
(23, 'Show-piece', NULL, 'category/QAvuG7e0nu2fNUX3T1e0iSX91Kjaz56pdfBgCDTx.png', '2023-09-25 18:42:55', '2023-11-03 16:25:33'),
(24, 'Sofaset', NULL, 'category/ffTGRlFFr3zRkWI8EDf84qfNitN5mdZ5af9kSPtb.png', '2023-09-25 18:42:55', '2023-11-03 16:26:19'),
(25, 'Table & Tool', NULL, 'category/iY20E1CJObIgNZ1sI7oyIRW3r6hZOXHbtRMloU1i.png', '2023-09-25 18:42:55', '2023-11-03 16:30:46'),
(26, 'Table Runner', NULL, 'category/cJdmIB64qBga1OLsjtatp2YcMwyQFLoOPX9y6td6.png', '2023-09-25 18:42:55', '2023-11-03 16:31:28'),
(27, 'Table Top', NULL, 'category/3yeY3IVBAwsvbgYPcKqBNYrQDdOKcS28YkoBGyO0.png', '2023-09-25 18:42:55', '2023-11-03 16:32:11'),
(28, 'Umbrella', NULL, 'category/vYpMn3pzHrECZ2iUw7fJkUSb2a52jZ2j8eqdVtdx.png', '2023-09-25 18:42:55', '2023-11-03 16:32:44'),
(29, 'Walkway', NULL, 'category/5nowviQjmaj4rdt4RuSH4fgm62DruGZZfjAGWI5U.png', '2023-09-25 18:42:55', '2023-11-03 16:31:02'),
(30, 'Wooden Products', NULL, 'category/li0mAee7UZrSUH7zOJYhpIB8nqRS4SD6u8vM4e9d.jpg', '2023-09-25 18:42:55', '2023-11-04 17:20:43'),
(34, 'Chair', NULL, 'category/6cqXnwcypcsKawm1mVJAjwvoJXaONWPV7oWbyd8j.jpg', '2023-10-15 07:51:34', '2023-11-03 16:29:33'),
(35, 'Platform', NULL, 'category/fGMEZpmWrlpa0YG51gy2lbkVJEQSUpH2I1PR94ph.jpg', '2023-10-18 05:47:50', '2023-11-03 16:28:26'),
(36, 'Food Court', NULL, 'category/PM96KRDEYuL5o36XUzbN2GzzLizaHHJC2dlJ6zGi.jpg', '2023-10-27 16:37:54', '2023-11-03 16:27:20'),
(37, 'Carpet', NULL, 'category/IbT4V2GhAUYdSmqjUb6LmRjbkmb5hgFIOGEBVxsy.jpg', '2023-11-02 14:58:55', '2023-11-03 16:23:08'),
(38, 'Wooden Ready Setup', NULL, 'category/AYgZ53FIvUSpuYia3cb2QS7P6rVCEYOtJJIKDe2D.jpg', '2023-11-02 15:11:21', '2023-11-05 21:31:58'),
(39, 'Metal Ready Setup', NULL, 'category/ASVB585KEoTYe39Ju8ezIRiDzfQGe3Xrt7TqgF8w.jpg', '2023-11-02 15:11:40', '2023-11-05 21:34:07'),
(40, 'CNC Wooden Design', NULL, 'category/oBju4g62ZEVVJV72HZaIRBM3RacHrpOOrVKbelDD.jpg', '2023-11-02 18:40:36', '2023-11-03 16:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `subject` varchar(255) DEFAULT '[No subject]',
  `message` text NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_important` tinyint(1) NOT NULL DEFAULT 0,
  `is_unread` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) NOT NULL,
  `detail_name` varchar(255) NOT NULL,
  `detail_value` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `detail_name`, `detail_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'name', 'maaevent.com', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(2, 'email', 'maaeventmanagementbd@gmail.com', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(3, 'phone', '+880 1671-711933', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(4, 'address', 'Ka-44/2, Kalachandpur Gulshan-2, Dhaka-1212', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(5, 'logo', 'other/bYB8OvhDDTXvgxaV2CHcdyd2QxooD3hBRn6HaHCJ.png', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(6, 'favicon', 'favicon.png', 1, '2023-08-19 07:54:35', '2023-08-19 07:54:35'),
(7, 'facebook', 'https://www.facebook.com/maaeventmanagamentcatering', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(8, 'twitter', 'https://twitter.com/@event_maa', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(9, 'linkedin', 'https://www.linkedin.com/', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(10, 'youtube', 'https://www.youtube.com/@maaeventmanagementandcatering', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(11, 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.259504026561!2d90.41494447533775!3d23.809369478630117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c715f2121e7d%3A0xf7d351b7edb1d903!2sMaa%20Event%20Management%20and%20Catering!5e0!3m2!1sen!2sbd!4v1695360704361!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(12, 'CEO_name', 'MD Sumon Baly', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(13, 'CEO_image', 'other/r17jUK5WcPa7R8TCgAj0qm2Bqn7dnmctHmrxuaMP.jpg', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(14, 'CEO_message', 'Maaevent.com is the Largest & Most Loved 360 degree wedding solution provider’s platform in Bangladesh. Starting in 2021, we are running our operations with a view to serving our clients as an all-in-one purchasing platform. Where you can find the best wedding vendors with their Creation, Idea and tons of trusted reviews at the click of a Reviews Description. Whether you are looking for hiring wedding planners or top photographers or for just some ideas and inspirations for your upcoming wedding, Maaevent.com can help you solve your wedding planning tasks through its unique features. With a shortlist feature, a unique checklist facility, inspirational photo gallery, blog and many more- you won’t need to spend hours planning a great wedding. We help our customers to purchase their desired products from the most renowned brands from both home and abroad at most affordable rates. You are able to compare and choose suitable products from thousands of options, depending on quality, style, design and cost, just in a few clicks. Moreover, we help wedding planners and businesses to reach their customers for maximum sales. Be it pre-wedding occasions like engagement, Holud, Mehedi Night, Gala Night or post-wedding reception ceremonies, we got it all covered.', 1, '2023-08-19 07:54:35', '2023-11-13 20:43:19'),
(15, 'whatsapp', '+880 1671-711933', 1, '2023-08-20 13:21:48', '2023-11-13 20:43:19'),
(16, 'product_VAT', '0', 1, NULL, '2023-10-23 06:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `company_histories`
--

CREATE TABLE `company_histories` (
  `id` bigint(20) NOT NULL,
  `milestone` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'gallery/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_histories`
--

INSERT INTO `company_histories` (`id`, `milestone`, `description`, `date`, `image`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Started Company', 'Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique.\r\n\r\nAliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique. Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique.', '2018-07-25', 'gallery/pgdnjtLiUPaVH8Pq4cFCLDQdNrrLRVz3TXVikuEN.jpg', 1, '2023-08-18 12:05:23', '2023-08-18 11:45:07'),
(2, 'Opening Office', 'Aliquam sit amet massa quis augue porta consequat eu eu lectus. Praesent a ipsum a sem tristique', '2020-08-12', 'gallery/default.webp', 1, '2023-08-18 12:06:51', '2023-08-18 12:06:51'),
(3, 'Some Milestone', NULL, '2020-07-30', 'gallery/3Y98bWowDgOt6LEVw9icniFymfov15544jCwLaze.jpg', 1, '2023-08-21 12:52:07', '2023-08-18 12:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'customers/default.png',
  `deposit` int(11) DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `company`, `address`, `image`, `deposit`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rakibul Hasan Kakon', 'kakon.3409@gmail.com', '01318322742', 'Maa Event Management & Catering', 'Ka-44/2, Kalachandpur, Gulshan-2, Dhaka-1212', 'customers/XtVfqF3jLEJAINWHo6KTDgQBd7SB8dKRFUTThV5I.jpg', 1000, NULL, '$2y$10$ZiOM.sV1GpGRQ1UPsbljHOJ7hJglaRKzvrHsF0Z38DMMgKJoqNxiK', 'xm7eLLX1tz91tDmssZ14dnbDsAU71kcxna48KWFimHdg1Wkhzul1JJdTUUMx', '2023-10-26 17:51:58', '2023-11-08 00:48:31'),
(2, 'Azizul Hakim Apu', 'maaeventmanagementbd@gmail.com', '01318322747', 'Maa Event Management', 'Ka-44/2, Kalachandpur, Gulshan-2, Dhaka, Bangladesh, 1212', 'customers/GsRE5tuRIwn95Ub1AaRviirDBUYkr3dig9wgtaZ9.png', 96500, NULL, '$2y$10$41knzUs9QmsvPqTPCTjYK.dO89XsMiFkjtECF3KSIXpK2YJXLnKBO', NULL, '2023-10-27 13:03:44', '2023-11-02 20:55:10'),
(3, 'Razia Haque Konok', 'elegant_konok@yahoo.com', '01675694452', 'Elegant Event solutions', '3/1, Block-F, Lyceum School building, lift-4, Flat-5B, Opposite of Lalmatia Mohila College, Dhaka 1207, Dhaka, Bangladesh', 'customers/2uVBo0jepNzRBQC2Ft3Pv9ejXo7Vj2XFuHH3r4gd.jpg', 0, NULL, '$2y$10$PGkfj5lfI.doh78X36GQ5uz2KAVOsBAWvXfzC/qN1XvC4D/fmzLPy', NULL, '2023-10-27 14:34:36', '2023-11-02 20:47:12'),
(4, 'Asadullah Babu', 'customer04@admin.com', '01711189759', 'Elysian Events', 'Road: 104, House: 02, Gulshan 02, Dhaka, Bangladesh', 'customers/gwFYd3SkeO7paCzyBCLPyZOOxkJuaThPZyVSJDoc.jpg', 0, NULL, '$2y$10$mmEDte9pjesQzbtznGOipeuHz4VAPCi2psYJUBEr777QD9GCowg8a', NULL, '2023-10-28 22:30:36', '2023-11-07 17:38:50'),
(5, 'Saimul Karim', 'saimul_karim2000@yahoo.com', '01713109065', 'Eskay Eventz', 'Al-Hajj Abdus Subhan Road, House# 15, (3rd Floor), Block # A, Advance Glory, Bashundhara Main Road, Bashundhara R/A, Dhaka, Bangladesh', 'customers/Q2YR8n9NKoNrIILAzrdmIyxEPyBlt1C3HTWSuHxr.jpg', 0, NULL, '$2y$10$MZoJla37XWRyskuZgU5ApuO7ehUBdgnPiIjuyD1Vw4AI912LQ11o.', NULL, '2023-10-29 16:00:47', '2023-11-02 20:47:12'),
(6, 'Md. Kamal Hossain', 'customer06@admin.com', '01734948674', 'Tisha Decoration', '4', 'customers/bwwaoGh4UYjxBwVBElw99Jn6Wc7WE6JInBaGMbPo.jpg', 0, NULL, '$2y$10$mhZ4QMCsK2xe1tFJE3WCTud11brt2J0/L4kjsfvHjX.TrB..F3Cz2', NULL, '2023-10-29 16:06:23', '2023-11-04 17:10:03'),
(7, 'Anika Azam', 'kri.events@gmail.com', '01819042550', 'Kri - Events', 'Dhaka', 'customers/1JuLUTZcjWMhKjysFMSuN4fKSi4K7dohMt2k9B36.jpg', 0, NULL, '$2y$10$ipHNPHulMdA/tRhdv33ZSeMrEYOdbfxb9Q7tat8/Pv229dChJEdEu', NULL, '2023-10-29 16:26:25', '2023-10-29 16:26:25'),
(8, 'Sanila', 'ttrivents@gmail.com', '01969272675', 'Trivent', 'Dhaka', 'customers/tUK1RWuXnXlKP2gZA7PeglEeC1HpiBWmtBnQYoic.png', 0, NULL, '$2y$10$/HYBdO9UBKGvYHQBbREUHO1eG8j5LFjzwGhKuFKWFEkApj9tGf3ka', NULL, '2023-10-29 16:30:05', '2023-11-07 21:54:25'),
(9, 'Lamisa', 'customer09@admin.com', '01979520886', 'Trievent', 'Dhaka', 'customers/1EDAX44hUOjDI5aoDYgqSdESdFHo9BYivcPrAfSL.png', 0, NULL, '$2y$10$2nfCAcTJ.a29LkzQiS2D8uV7jCAsBGLq0Wffdtf89IAIsZ56MxU96', NULL, '2023-10-29 16:33:46', '2023-10-29 18:38:39'),
(10, 'Nipun', 'alpona.event@gmail.com', '01766766368', 'Alpona Event', '26/7/C, Moulovirtek, Rampura-1219, Dhaka', 'customers/jRbAPYE7qS9ai6MFOsU7WszO6ZWmATb90a27RXIB.png', 0, NULL, '$2y$10$ui1ykK2mC7IAg1bQ9k3FgOEhh7PMdr9idJ6CyU5dmlU3u2IzKGkWi', NULL, '2023-10-29 16:34:30', '2023-11-07 21:56:49'),
(11, 'Nasrin Apa', 'indooroutdoor.bd@hotmail.com', '01715042147', 'Indoor & Outdoor Event Management & Wedding Planner', 'R#3, B#F, Banani, Dhaka-1213', 'customers/UaQ7M8GZyblGnSMCHdNBhvHuTl5KLCnENRZslUFw.png', 0, NULL, '$2y$10$Lx3W5BU2PFGk3l47zpTlVeRLjWdLdGZtW8ZLmdQ7Ft2rcUPmNh9eS', NULL, '2023-10-29 16:35:17', '2023-11-07 21:58:53'),
(12, 'Afrida Binte Mirza', 'enquiries@stellatoevents.com', '01610227273', 'Stellato Event Planners', 'Road-7(west), House-408/9, Baridhara DOHS, Dhaka, Bangladesh', 'customers/ppIXuLLHMnTHHWdczOr0y179ek9ShSKz17zmNjvh.jpg', 0, NULL, '$2y$10$lY/AxDIUBq9G6Prox.iVhefOZ5VYXAYdeTJGEvPr7Tqo1AvOMR9O6', NULL, '2023-10-29 16:40:14', '2023-10-29 16:43:54'),
(13, 'Sausan Khan Moyeen', 'enchantedBD@gmail.com', '01685914139', 'Enchanted Events & Prints', 'Dhaka, Bangladesh', 'customers/nucmdP6H1O7ZNKHKm5vyHyd8NNP2RlNxv4Nm6vAY.jpg', 0, NULL, '$2y$10$0K4jP1T48YLIxU2UMh71QOsMNjua.iwDdCoB3Wow.wLMkYlx55KUO', NULL, '2023-10-29 17:17:13', '2023-11-07 20:15:27'),
(14, 'Bitasta Ahmed', 'bitasta.ahmed@yahoo.com', '01799265481', 'Wedding Bees', 'House#75,block#B,Road#4,Niketon,Gulshan, Dhaka, Bangladesh', 'customers/nwnVANJyY4MysKm0RlIChZafSabJMXlZv4cOkWjy.jpg', 0, NULL, '$2y$10$nBXCzPC/skwVkAwF9Oxw/uTJFkMfTmLtE4FYOdiKfpx/YgEnpRKwu', NULL, '2023-10-29 17:21:18', '2023-11-07 22:02:10'),
(15, 'Israt Amin', 'ir.epic@yahoo.com', '01720304002', 'IR Epic-Wedding & Event', 'R#121, H#25, Gulshan-01, Dhaka, Bangladesh', 'customers/W8rJ2GmVqELPX8RunV7aCNYKyvlgS7DwefBZEgtU.jpg', 0, NULL, '$2y$10$1xjRE27MieqhgOrs449uROeqJ3Zf02adf3Ukb4woX7Z4bKvJnuK2i', 'qjpDEB36PC91oVJZbVnR9Mqkultij9NPUN9ly8GWiiy10ncdmv1eBwy71TMY', '2023-10-29 17:27:20', '2023-11-07 22:03:55'),
(16, 'Nadiya Khan', 'uttaraeventmanagement@gmail.com', '01886788881', 'Uttara Event Management', 'House # 44, Rabindra Sarani Road,Sector-07., Dhaka, Bangladesh', 'customers/uBVthP6yNiNarK8TMU8sYi0tKogUFVx6sLM57Um1.jpg', 0, NULL, '$2y$10$4ZRqaiKmdd0bzQ/K3pPrdu2jR2Bgk8YEPwNAPcUn0atuyXPVMR1G2', NULL, '2023-10-29 17:30:57', '2023-10-29 18:06:35'),
(17, 'Shahjahan', 'customer17@admin.com', '01837094163', 'Shahjahan Lighting', 'Dhaka, Bangladesh', 'customers/hfZ7EI0zMXOgLCzEHp0gwnOzoo0Y0b8hNZocHtj2.png', 0, NULL, '$2y$10$z91hGTmz1ai8FAJ19q6r9.isD1oy2oBgsQctSeTyjr1MEAsNKQ/WG', NULL, '2023-10-29 18:19:33', '2023-11-09 16:55:41'),
(18, 'Nusrat Jahan', 'ajnelicaeventsolution@gmail.com', '01680564463', 'Anjelica Event Solution', '399/B, Malibag, Chowdhurypara, Khilgaon, Dhaka-1219', 'customers/vSyn2xoRDEc56HMJ9lDe4sDkbgsJt7VZbECR7sZK.png', 0, NULL, '$2y$10$X/x3Byt69B3AYh8EVn9jRuym7yG1DYwSOq6n7dOd96qenZtuux.im', NULL, '2023-10-29 18:20:34', '2023-11-13 22:45:01'),
(19, 'Afsana', 'customer19@admin.com', '01776000206', 'Anchor deco', 'Dhaka, Bangladesh', 'customers/E9Y1AbLSvA6wxwdm5bDng481ak5eNuLHr3SUbINM.png', 0, NULL, '$2y$10$Zxw.STrqv.wrzgv0dAx9D.2BxmSgNaJvNkaYqzAg5v1ZiZTWBGX9a', NULL, '2023-10-29 18:27:05', '2023-10-29 18:41:22'),
(20, 'Afsana Shahriar', 'customer20@admin.com', '01706310817', 'Afsana\'s Flair Event Planner', 'Dhaka, Bangladesh', 'customers/qPBYdqFjTEK5n37wVBG3j0mBZkXVvevyFZfoPPxh.png', 0, NULL, '$2y$10$f0wFwe0BPB9DWy4zowRIl.eYFJ9QjV1mrLCaqK21WAvLMn6qKppum', NULL, '2023-10-29 18:43:44', '2023-10-29 18:43:44'),
(21, 'Nusrat Jahan', 'customer21@gmail.com', '01798771049', 'Nilavro', 'Dhaka, Bangladesh', 'customers/VCODIdjUWSvrIikgynnkSSVRxyHIgm3wvJg8GbqJ.jpg', 0, NULL, '$2y$10$NFdtBsk4YJguLJiqHPkM6.veBhJMJUtnBjAmFhxBGq577Fe9KqAWi', 'JMKclfP5vW7A0IG2BrkklFZYr7InkwcfIPGjmlcHVO0iWm6i9FTBN91J6A1W', '2023-10-29 18:44:41', '2023-10-29 19:22:15'),
(22, 'MA Razzak', 'customer22@gmail.com', '01613370888', 'Shawpnorong Event', 'Dhaka, Bangladesh', 'customers/z3sYsJn6hG9ML5qUiTDJHJLVxc1p1VdrZX0oPahe.png', 0, NULL, '$2y$10$U.EVxbl4RTBljYEl.xsJwOIQ.f602766KfApDGvtTTJl1jGHdyxGK', NULL, '2023-10-29 18:45:25', '2023-10-29 18:45:25'),
(23, 'Manzur Hossain', 'customer23@gmail.com', '01721420057', 'Details Event', 'Dhaka, Bangladesh', 'customers/wzTxaancqnqxxau6VbMm7RiHqi1XbTdyowvy6rzU.png', 0, NULL, '$2y$10$TOdrGiO9L3gN3VZjq8wvj.TJxcMNvXjk3l.T5T61Cz/FUz0lAvUTa', NULL, '2023-10-29 18:46:14', '2023-10-29 18:46:14'),
(24, 'MD. Ibrahim Khalil', 'customer24@gmail.com', '01726416843', 'Fairy Lights', 'Dhaka, Bangladesh', 'customers/YmxmI9chDxo4nFdfLfYcLvI1ekDAEZKtIGMFO6eG.png', 0, NULL, '$2y$10$pe3h23LamFQWcLoiE0hOBuOREO1jTeHeYPkEwBoRnxd6VUCCcFewS', NULL, '2023-10-29 18:46:59', '2023-10-29 18:46:59'),
(25, 'Md. Shahid', 'customer25@gmail.com', '01716864808', NULL, 'Dhaka, Bangladesh', 'customers/RwwOtDkdmxZeTSw6DQqcuIV1akDU8KNBoXyS7xYy.png', 0, NULL, '$2y$10$40uStU8g7ySz1D6izwJ0wO2o0EPR/GPCNz9YYUbsYnaBnhp0oQsnu', NULL, '2023-10-29 18:47:46', '2023-10-29 18:47:46'),
(26, 'Md. Idris Mia', 'customer26@gmail.com', '01715691461', 'Sadiana Event', 'Dhaka, Bangladesh', 'customers/2wUZHNsriiN6lgnORIjQjGV2nOWQkl1eNKzo4kz7.png', 0, NULL, '$2y$10$I8gwa5mpGnr1Qzk1/CzxuOSIoNCddseb8xFdSuYZBM5ElBCCChYJK', NULL, '2023-10-29 18:48:43', '2023-10-29 18:48:43'),
(27, 'Sohag', 'customer27@gmail.com', '01918983555', 'Sikder Event', 'Dhaka, Bangladesh', 'customers/6FukDEL3E1flOVTlyq8ustMg73LTW9XpIlAB9HFg.png', 0, NULL, '$2y$10$DpkYqpcxa9Y/d2tn2VqaU.vUZ8ZGXv7MjhZtPFOljzz.yPLdykebW', NULL, '2023-10-29 18:49:27', '2023-10-29 18:49:27'),
(28, 'Md. Shawon', 'customer28@gmail.com', '01711082169', 'EL Event', 'Dhaka, Bangladesh', 'customers/2aq3StGwnPheQykBGkFy2gSLRqk97gY17ciWSlLZ.png', 0, NULL, '$2y$10$FA855DYRLXoKOfpDQ9IG2ebpPHGjsnPzXuKK4sJrp25GVDhaPfttW', NULL, '2023-10-29 18:50:10', '2023-10-29 18:50:10'),
(29, 'Md. Bashir Hossen', 'customer29@gmail.com', '01716923331', 'Anik Decorator', 'Dhaka, Bangladesh', 'customers/Tx1yyxDfgTbfI5LrXsBGND8SMyoIZ4LX6tIj7bJy.png', 0, NULL, '$2y$10$tS1Rt3/O8mcTkVyoaY.hhedseRaq2tErgxmSkFWU0Nsp3cizFUxT.', NULL, '2023-10-29 18:50:47', '2023-10-29 18:50:47'),
(30, 'Rakibul Islam Rockey', 'customer30@gmail.com', '01673017002', 'Ayaat Event', 'Dhaka, Bangladesh', 'customers/sXybcbxdYmvvLZuBPTugKNOr2uJtI3tNubgkduxi.png', 0, NULL, '$2y$10$MmBU.62CEojtZaUA935/q.Uho0Vi9KrJ/8frr9BUpAVifepceAqPu', NULL, '2023-10-29 18:52:47', '2023-10-29 18:52:47'),
(31, 'Shantona', 'customer31@admin.com', '01987790383', 'Best Wedding Soulution', 'Dhanmondi 6/A, Dhaka, Bangladesh', 'customers/1ij8nKUf4LCvORYLQLiQRj3c4CQQOUFUFm0KMUdi.jpg', 0, NULL, '$2y$10$iQNdbyXDl0jK7mFDfhMa1upmHLtySaNf0lw/04z92R8rLpv7lA2L.', NULL, '2023-10-29 19:33:42', '2023-10-29 20:17:13'),
(32, 'Rabby Anik', 'customer28@admin.com', '01819226277', NULL, 'Dhaka, Bangladesh', 'customers/L1olOcvjzg7IDGHHdct60TXPz2UGkGFKBa7RWdYh.png', 0, NULL, '$2y$10$XkXgLwBOSOGXH/f4RCF0AO4l59sZRxMc1hEPRsDPctHTe5zWWzUEC', NULL, '2023-10-30 14:05:33', '2023-10-30 14:05:33'),
(33, 'Bappy', 'customer030@gmail.com', '01636192612', 'Ikebana', 'Dhaka, Bangladesh', 'customers/sF48R7ouLfmtKQpL8zMssqNcDOqQDZqd9zAIlhKY.png', 0, NULL, '$2y$10$gUfDyXQM7950Nlg/zRuDjOVQSQt6maZCkbfpInjxniYiKqf4cpQE.', NULL, '2023-10-30 14:10:25', '2023-10-30 14:10:25'),
(34, 'Joya', 'customer32@admin.com', '01715940823', 'Stiched Rose', 'Dhaka, Bangladesh', 'customers/zrtdLPygXEACFIYsKcvzECOa0SMlIVyLN2GjVHXF.png', 0, NULL, '$2y$10$K/xKjg1byGzwSR8W8sth6uAOn/FoIKOZkwR1BiVl1xUze3m.s5rVq', NULL, '2023-10-30 14:12:18', '2023-10-30 14:12:18'),
(35, 'Amjad Hosen', 'customer35@admin.com', '01788681860', 'Flower Gallery', 'Dhaka, Bangladesh', 'customers/neApkOGzGI154JCN1ldqPkfHAJlotqOvT0fmhTST.png', 0, NULL, '$2y$10$mHLeak6Su3PQk3xSzbET5uJp63EhXUngaEKJSDYsqgaMiYwvwjgjy', NULL, '2023-10-30 14:13:33', '2023-10-30 14:13:33'),
(36, 'Ifaz', 'customer36@gmail.com', '01787470997', 'Royal Bangle Event', 'Dhaka, Bangladesh', 'customers/USSJgNaNknxbNUsN4UqyVwzjHvPGdcWXomOGPl9e.png', 0, NULL, '$2y$10$gB2t.LBLZxgCq.3d1LycnOr2payjihZZnYnRhtOQAn4fp0HajiZAS', NULL, '2023-10-30 14:14:46', '2023-10-30 14:14:46'),
(37, 'Faruque', 'customer37@admin.com', '01735351188', 'Moghol Planner', 'Dhaka, Bangladesh', 'customers/Aekw15y4SGMiESqzl7fCVKjSsYEy5xEOSLX5kyog.png', 0, NULL, '$2y$10$3j63kyeOpTrSjOf0WTYYhOPiVQPV0Vpp6DPy4oZwVnyJ9.eg672QS', NULL, '2023-10-30 14:15:52', '2023-10-30 14:15:52'),
(38, 'Rafat', 'customer38@admin.com', '01799888222', 'Make My Event', 'Dhaka, Bangladesh', 'customers/iAInEmrQ2nsdjaLkLKhrLKXXYZg47qyHHyyAzhIz.png', 0, NULL, '$2y$10$IQGgOz1Jvr3i7cHnoGVnAeUB78K2RCzLXok/2vCA1MacfZ.RzCAUW', NULL, '2023-10-30 14:16:42', '2023-10-30 14:16:42'),
(39, 'Rafi Ibrahim', 'customer39@admin.com', '01731315260', 'Biyer Bari Event', 'Dhaka, Bangladesh', 'customers/HpKwNiGoc8pco9HEAfmuvpDzpM9sVwz4kbSD8U7s.png', 0, NULL, '$2y$10$jR8v5KypUu9w/psV87FzkeArqXcXf/n..EC8cGuyBMztacs1SCouy', NULL, '2023-10-30 14:17:32', '2023-11-10 15:42:31'),
(40, 'Shuvo', 'customer40@admin.com', '01819481234', 'Anarja Event', 'Dhaka, Bangladesh', 'customers/l1igHjH3Vwyn2HFm0HsNY5iN60U3o5q9QLd41tXI.png', 0, NULL, '$2y$10$3030vrzwBEEmu3lNx0IE9OPCHaOtY.U3w9xMTyEcfSE.cwdVC44re', NULL, '2023-10-30 14:18:23', '2023-10-30 14:18:23'),
(41, 'Mahim Ahmed Mrinmoy', 'customer41@admin.com', '01673724568', 'Color Inland Event', 'Dhaka, Bangladesh', 'customers/bAyIaoFKEPMuog8e8iWtEkfeHbepo4fUhkpQ5MR2.png', 0, NULL, '$2y$10$iGKpC9ih5De3bl8kLvZPnex9wYwZGB2X/zruMhpIowWufzguYsMFW', NULL, '2023-10-30 14:19:14', '2023-10-30 14:19:14'),
(42, 'Shawon', 'customer42@admin.com', '017123579924', 'Parasute Event', 'Dhaka, Bangladesh', 'customers/ZabKfVSaSKxQGgYFNpwe2kK8RxZmoLOd3BAju52W.png', 0, NULL, '$2y$10$S39Yk7UtlGn1D9xb5muheOY3.hUyN5KkodOB3/DM/5.TKJ9PlKuEW', NULL, '2023-10-30 14:19:52', '2023-10-30 14:19:52'),
(43, 'Touhidul', 'touhidonlyone@gmail.com', '01715487298', 'New Create Event Management', 'Mohanagar Project, Rampura, Dhaka', 'customers/dI9DxdrI0fAlpSAkElUpfr0FeoiWVunUnfzF9T6E.png', 0, NULL, '$2y$10$lPRrkW71EAWGnYp12xBYsO2y1nNJK1tmTcacTOp/tSH8g/CglbJcO', NULL, '2023-10-30 14:20:33', '2023-11-03 15:37:19'),
(44, 'Monir Hossen', 'customer44@admin.com', '01982033274', 'Joint Touch', 'Dhaka, Bangladesh', 'customers/qpfFTwDJCYT3eDN7oZOvCOcCh5atlEcmlaCP3Vhd.png', 0, NULL, '$2y$10$P5ZnZSARNzqgnNFFvlnwTu8VGbAcv1tFZpeiLm2MaZO1P5fjlXH1y', NULL, '2023-10-30 14:21:34', '2023-10-30 14:21:34'),
(45, 'Rabby', 'customer45@admin.com', '01711533503', 'Tarek Catering', 'Dhaka, Bangladesh', 'customers/jacUAZTFib0hlzKF67JjVGUckrLLUnI5IslHKW6Y.png', 0, NULL, '$2y$10$FqwXlXKreeWdLvVemNzVz.l/agkMqvjLkvFplpTCskaJQS6h8wSVm', NULL, '2023-10-30 14:24:19', '2023-10-30 14:24:19'),
(46, 'Sujan', 'customer46@admin.com', '01816035997', 'Shahjahan Wedding Planner', 'Dhaka, Bangladesh', 'customers/yzdEfUkQgaINCexcNh0HeZz2ukhW4P1RcJDHkmq1.png', 0, NULL, '$2y$10$frFLkjfXc1taeBpQlibJkuyqbmS9Poijmj9dT42f91fKEiZessAVa', NULL, '2023-10-30 14:24:59', '2023-10-30 14:24:59'),
(47, 'Sajib', 'customer47@admin.com', '01601954189', 'The Planning Paradise', 'Dhaka, Bangladesh', 'customers/a46k26R8r1azzmwE5Cfw18KDHIpLUVqYXMGeXBtK.png', 0, NULL, '$2y$10$0ur2p.XUUICmEcWzEOxsCudIPDbz/vclVvgDuvvlJDKCp5wHnvyoS', NULL, '2023-10-30 14:25:50', '2023-10-30 14:25:50'),
(48, 'Rajon', 'customer48@admin.com', '01618353518', 'The Sarothi', 'Dhaka, Bangladesh', 'customers/8ECYYbGKfN0Ul9zFObXxLVCVbwxOZgd3aM0V5BKB.png', 0, NULL, '$2y$10$/Oq.iSA1q0iwqYfmXSAsF.ePUrGdjebsRXGZaKGqmPtHQaWkGPeQi', NULL, '2023-10-30 14:26:37', '2023-10-30 14:26:37'),
(49, 'Md. Dulal Fakir', 'customer49@admin.com', '01614137700', 'Fahim Flower', 'Dhaka, Bangladesh', 'customers/YPbpd1RP5kUYZ8I0X9y3fDBQWVq6BJqEuOMiUKk6.png', 0, NULL, '$2y$10$qylG/8TsgC3kiG4bo/2G9eLIps8pV5xQ/bqrmD7Mvsj2mFvi2deSW', NULL, '2023-10-30 14:28:15', '2023-10-30 14:28:15'),
(50, 'Moslem', 'customer50@admin.com', '01791244153', 'Moslem & Sons', 'Dhaka, Bangladesh', 'customers/epPZCA88i3eeoaSMLupRTiEQanrJY8CLtEenbAwg.png', 0, NULL, '$2y$10$KL7.SdTDOI3EJJYiHZHQMupm5I3j0fPJeO1Bo3ms1gHpYaoZyPtDG', NULL, '2023-10-30 14:29:04', '2023-10-30 14:29:04'),
(51, 'Saiful Islam', 'customer51@admin.com', '01794009567', 'Candy Flower', 'Dhaka, Bangladesh', 'customers/70ocLlWmcbHvs7jLqLQJyvudkKvWA9PW5mwJHQFc.png', 0, NULL, '$2y$10$kFU0bYfr2erKwTD.ddV.MOTfo7NRt8WbqpPof0QvlzLzNlABSYp5O', NULL, '2023-10-30 14:29:56', '2023-10-30 14:29:56'),
(52, 'Kazi Rafsan Shanto', 'customer52@admin.com', '01844509961', 'Event Sajai', 'Dhaka, Bangladesh', 'customers/nSl7VGYmsvVrkQLn6PE3DqGWwIXWrkhdeSyNGGoY.png', 0, NULL, '$2y$10$vzLBpGk0vk9MerPwmGD1pea76wk1..awmT3dtHaFYxVKW8YhzKly.', NULL, '2023-10-30 14:30:36', '2023-10-30 14:30:36'),
(53, 'Mainuddin', 'customer53@admin.com', '01636192611', 'Ikebana', 'Dhaka, Bangladesh', 'customers/bhqsHeOErqBKgKZVe9CyBQBTTYNELUtYHRaB9xEw.png', 0, NULL, '$2y$10$UdOVHgJmTRZDJPT.GynKH.sbWigDfH8XhypgqvseO3RTLPIDo4Fyq', NULL, '2023-10-30 14:31:26', '2023-10-30 14:31:26'),
(54, 'Arif Hossen', 'customer54@admin.com', '01940292729', 'Asthetic Event', 'Dhaka, Bangladesh', 'customers/RBNiqKFUUqugLrvbiDKwxEDTLJuHwY4YPLoqVw38.png', 0, NULL, '$2y$10$89wDKIkweZs0Xa5SEN3j2ukzfGeb7HBwt3ImLBdcEth3ORH0Ahjoi', NULL, '2023-10-30 14:32:09', '2023-10-30 14:32:09'),
(55, 'Sarwar', 'customer55@admin.com', '01711307772', 'Bangla Event', 'Dhaka, Bangladesh', 'customers/ek6j8hMbh4zXdmSmR5yYaT9acxU9nUoiuOXZNxzX.png', 0, NULL, '$2y$10$rMVtzFhyYzKg8XGUnO..Lu3OgGQY4GTUnHBta6.2EbLPVxuc0s8P2', NULL, '2023-10-30 14:32:47', '2023-10-30 14:32:47'),
(56, 'Sohel Shafique', 'customer56@admin.com', '01977170762', 'Green Event', 'Dhaka, Bangladesh', 'customers/IFORXeFnuwJ56MBZ6DFayYuavyhicq1IZWt80BJD.png', 0, NULL, '$2y$10$1Wy1oFYqcn9mogHJd86dDOWn1D/tW0mxs/j4kAbfT3.ozlWEW.Rf.', NULL, '2023-10-30 14:33:27', '2023-10-30 14:33:27'),
(57, 'Sunny', 'customer57@admin.com', '01673995289', 'Sound Feel', 'Dhaka, Bangladesh', 'customers/2J4rNKH52zcddNJMU4ezIzNlkG5Ymsa2uPb4VTaq.png', 0, NULL, '$2y$10$IWCf4gzc.2cTk89hPzQQH.916tNh8gNfgmZ/S6l0y2Tg0zmXGez4C', NULL, '2023-10-30 14:34:38', '2023-10-30 14:34:38'),
(58, 'Aslam', 'customer58@admin.com', '01713016670', 'Pushpo Velley', 'Dhaka, Bangladesh', 'customers/SxcOWlDvwP4EYd7pGUmnVIlY05qziNYCntyah15J.png', 0, NULL, '$2y$10$zacgtcgraHqC8NvU/FaK5.ClHKSosGcHWeW3OGHnLL4Ruae1iNuxC', NULL, '2023-10-30 14:35:23', '2023-10-30 14:35:23'),
(59, 'Md. Mamun', 'customer59@admin.com', '01964522425', 'Nilachal Event', 'Dhaka, Bangladesh', 'customers/lD9er351LvCAz9PsHHHkIwHbc9zzTpIp1iCcU5XA.png', 0, NULL, '$2y$10$/PtiPYwxcCkQmzueIuSjben89tzrfTxs7a9t36m/EEb1L3wrGF3DO', NULL, '2023-10-30 14:36:09', '2023-10-30 14:36:09'),
(60, 'Mithun Paul', 'customer60@admin.com', '01977287627', 'Paul Event', 'Dhaka, Bangladesh', 'customers/sDBN4ecVhDHriKxtRai4sFVak4usxH89k9cwz7RE.png', 0, NULL, '$2y$10$4H1hf7SrYCvHtAjLAzMkaO6qOuCiGTmMCFANlI2sHvVil1Qdqzll2', NULL, '2023-10-30 14:36:52', '2023-10-30 14:36:52'),
(61, 'Akas', 'customer61@admin.com', '01756951950', 'Flower Design', 'Dhaka, Bangladesh', 'customers/upSMhmfyphPw5njubIX94VZUbg9QlYhio6OFK2mz.png', 0, NULL, '$2y$10$7U5/YAUW/6kruJ9OHwu7eeCOW4UJ0JwMt1K/ZTNXHBzibFdZhfJNm', NULL, '2023-10-30 14:42:49', '2023-10-30 14:42:49'),
(62, 'Rony', 'customer62@admin.com', '01879997690', 'Red Event', 'Dhaka, Bangladesh', 'customers/m3aZtOvyIsskd3PWxPkzhXxXRKbRuA4DeED9RQwu.png', 0, NULL, '$2y$10$g6.iY3u323t3prb5jW1HBe1rdF8V0keuDdiynHaJcIghj9q6NVuBW', NULL, '2023-10-30 14:43:31', '2023-10-30 14:43:31'),
(63, 'Ajmal', 'customer63@admin.com', '01712947408', 'Print Station', 'Dhaka, Bangladesh', 'customers/Ndae1izFtjhM4fMvI0vXHoHToIKznfVBWUlcfeUc.png', 0, NULL, '$2y$10$Hcr3DqLzxAS4RGGsRJCSk.fEmOBIv30Q2m04WhmNq1HZ97drrsdEG', NULL, '2023-10-30 14:45:09', '2023-10-30 14:45:09'),
(64, 'Tasbir Ahmed', 'customer64@admin.com', '01712833741', 'Event Gallery', 'Dhaka, Bangladesh', 'customers/p90glhxif51PvSe637EDZrU9CFeXlqiIxNtcSlSY.png', 0, NULL, '$2y$10$ZBmc8.0c7Naj7GGJbUJa.O1Kaad5QSUMlDOaTxDzEEcPJ3bIItYrG', NULL, '2023-10-30 14:53:56', '2023-10-30 14:53:56'),
(65, 'Akter Hossen', 'customer65@admin.com', '01728040694', 'Bengle Event', 'Dhaka, Bangladesh', 'customers/T86FkmTWuYvxDUVBrCEz61rpCZnBOXnJ41gkXyXp.png', 0, NULL, '$2y$10$Rs6SO.WOUAQVjNN8BMRNNO8/MfCeKNpSL1marJCyhLrWoEZxvHpOC', NULL, '2023-10-30 14:54:45', '2023-10-30 14:54:45'),
(66, 'Zakir Hossen', 'customer66@admin.com', '01712948749', 'Focus Decorator', 'Dhaka, Bangladesh', 'customers/9FJ9r0Gg3t50cTe4x4GP0niySfvMoSvSH79LLFUn.png', 0, NULL, '$2y$10$Bk9HRWT/9ouAiCVMoC0RHun13vsU4qRkMFoOf6bNSp5THvkagaM52', NULL, '2023-10-30 14:55:34', '2023-10-30 14:55:34'),
(67, 'Nur-e-Alom', 'customer67@admin.com', '01715885021', 'Sadia Decor', 'Dhaka, Bangladesh', 'customers/3zSAmrEZPqbiMllx8TwxH6ezPqIhaPSgo8bmaPDY.png', 0, NULL, '$2y$10$1XyCvvEphOfOTEFJ9zR8VOmbhssec2nMM2Whf5F2qwevtwf2QzSMO', NULL, '2023-10-30 14:56:21', '2023-10-30 14:56:21'),
(68, 'Saddam Hossen', 'customer68@admin.com', '01680356242', 'Pushpo Creative', 'Dhaka, Bangladesh', 'customers/G5gfkqHKX6d4jEpopQ0U6hmURFnCG99SNz8Ecqp8.png', 0, NULL, '$2y$10$rvreDfc6wzN2NQCxFm.dN.2.QozjW6qFmZT3gjbdhDKytzQbaOosS', NULL, '2023-10-30 14:57:06', '2023-10-30 14:57:06'),
(69, 'Gias Uddin', 'customer69@admin.com', '01721128840', 'Sabol Decor', 'Dhaka, Bangladesh', 'customers/D4wHc5q6IkFkRPIjT0s5ZXL15dk0x4akZZalRXF8.png', 0, NULL, '$2y$10$dn42cLS2z6Tg8i/UhX/zqukiCbp9MNViadb5wvT.HgftpU9RLbLuy', NULL, '2023-10-30 14:59:13', '2023-10-30 14:59:13'),
(70, 'Saiful', 'customer70@admin.com', '01921672020', 'Magpie', 'Dhaka, Bangladesh', 'customers/nORkDlqwtx1zjuO9LrRK1XgL5eFPwB1P5tGcr1ox.png', 0, NULL, '$2y$10$7jBCHrzpfF3X8BS5p1AQeOSwL.DKdkiLNbZfB36g5JA0fsyY/mHpO', NULL, '2023-10-30 15:02:55', '2023-10-30 15:02:55'),
(71, 'Nirjhor', 'customer71@admin.com', '01568846069', 'Unique Creation', 'Dhaka, Bangladesh', 'customers/J4TwkbUpRBAQ5qApa3hqbC4ooIlIuY0lgQOxhUF0.png', 0, NULL, '$2y$10$qFVqTLVd1zJ3DvZsFzBmg.kkcFO4E0gl1Z9Xz4k7ydieRP56Pi4Ra', NULL, '2023-10-30 15:03:56', '2023-10-30 15:03:56'),
(72, 'Abir Wasiful', 'dmirror1155@gmail.com', '01630988912', 'D\'Mirror Event', 'H#13, R#9, B#L, South Banashree, Dhaka', 'customers/9adC1v9KFVgYhCuIJcP4Y0YbvMZe6f9DNeS97KAu.jpg', 0, NULL, '$2y$10$Zkgo30jUBM6hXNMXqp0cuuixeMtkKQ0IBb0Ph4sIBkXgp0GpmigE2', 'Jeqf0y2Ah89PDGxctAVt9EUczUbMoNVYmDkWDXkagOpwztCzTltEMYi0ICZh', '2023-10-30 15:04:54', '2023-11-08 19:27:23'),
(73, 'Sohel Aslam', 'customer73@admin.com', '01713506705', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/SsPBm8wbg6XyAIv0mkBgpppJz9iOHpZ7cpF5Vt7W.png', 0, NULL, '$2y$10$dRYYfcNUbbdq12VD0KpDleDg3Vop3zOpgm99GTTryrhHP4VFIMIdq', NULL, '2023-10-30 15:05:38', '2023-10-30 15:05:38'),
(74, 'Md. Jewel', 'customer74@admin.com', '01865333235', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/A7NNU8jauB1UvK6blbg6efVzlESy59E1I4LeUNC1.png', 0, NULL, '$2y$10$6aSM5mjsEPL2KC8jlHstgOFNBLb6GCQvgh7eSkMBQuyy9fCVXALtG', NULL, '2023-10-30 15:06:17', '2023-10-30 15:06:17'),
(75, 'Rafique', 'customer75@admin.com', '01733346787', 'Friends Event', 'Dhaka, Bangladesh', 'customers/3ecte2eDsqQTfQzFEUMYCqf78YdKEIFn6FhmOF0E.png', 0, NULL, '$2y$10$KF7GPc5AksZw2LbbyJ3MC.wJOCTIT0XCKZ18QYxrHdvflf67h8r2C', NULL, '2023-10-30 15:07:19', '2023-10-30 15:07:19'),
(76, 'Jafor', 'customer76@admin.com', '01710697477', 'Nafis Decorator', 'Dhaka, Bangladesh', 'customers/0r1cwHsWNgTEOc6lNEDqHMsVIt5K4EN2vSXjfVcr.png', 0, NULL, '$2y$10$TwYY02TBKKvDRlhn2Gvfgu9nECXcS4AZU3Z.t5FPCHGefwyZgiiMO', NULL, '2023-10-30 15:08:00', '2023-10-30 15:08:00'),
(77, 'Sajjad Hossen', 'customer77@admin.com', '01917278990', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/3Fx8E7oXXKAg5QEP3TBfn49SWR5KrcfOUC40Qdqn.png', 0, NULL, '$2y$10$JgchB9FHcDD6rYhG6oM6p.l.O4vY6xvj/GW7ztLkkrFjUp9C4mFcu', NULL, '2023-10-30 15:08:56', '2023-10-30 15:08:56'),
(78, 'Akas', 'customer78@admin.com', '01821662338', 'Signature Event', 'Dhaka, Bangladesh', 'customers/sMMZHCOy7zcyekGOv2wnBgf0JFKTzsaAlccvIp9s.png', 0, NULL, '$2y$10$IzJDkJ0hsDRzROaJQYr0C.1Syuu.XWinqXZXyktrBLoLmGJZwlnZi', NULL, '2023-10-30 15:09:31', '2023-10-30 15:09:31'),
(79, 'Emtiaz', 'customer79@admin.com', '01917871438', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/YyB0JKohcz3uSE5XdWdJtSjZgz5q2xSkOJ91LQQG.png', 0, NULL, '$2y$10$eeNLAryKNF4hzioE2E7U3usF5MTVfI.zdcJFfiWLzEX7vmAOQmZQe', NULL, '2023-10-30 15:10:25', '2023-10-30 15:10:25'),
(80, 'Dipto', 'customer80@admin.com', '01642106493', 'Utshab Event', 'Dhaka, Bangladesh', 'customers/fRwWzFzY5KiQiVju6GZnGA8Smq8cr8IaXlS5XIDV.png', 0, NULL, '$2y$10$58velRC5.8rwrV57TNlNteUcAeuzJVyaY6WW4hdoRj7wrNwDGlq6e', NULL, '2023-10-30 15:11:04', '2023-10-30 15:11:04'),
(81, 'Imrul Alam', 'customer81@admin.com', '01711538199', 'Exclusive Event', 'Dhaka, Bangladesh', 'customers/J3BWOuYxcEI7f0P0ZRwH3Jl0phGVl3KcWV2LE0l1.png', 0, NULL, '$2y$10$Ikx4Q4FXovCOU2oL9S0Xs.I.44zEL36spXbB8a2gcaJeIQtWFvIUq', NULL, '2023-10-30 15:12:48', '2023-10-30 15:12:48'),
(82, 'Bulbul Ahmed', 'customer82@admin.com', '01401714010', 'Mirror Event', 'Dhaka, Bangladesh', 'customers/5G6Uf5nRsEk704s00S7SuUTCoOztxhJHa70fVmeq.png', 0, NULL, '$2y$10$tuMbMoTmF0JIr7Zyi/CdkeH/U2diErOJ09nrL8iJIp06wOcBfAq2m', NULL, '2023-10-30 15:13:35', '2023-10-30 15:13:35'),
(83, 'Emon', 'customer83@admin.com', '01764188085', 'Butterfly Garden', 'Dhaka, Bangladesh', 'customers/FczY4F3txrEnYLmyyBRBwfiZBH13hQ8LgGSZyhIh.png', 0, NULL, '$2y$10$u9RGnmdwcmFHWqVznWiI4e4t/4BWDtMrEvcD6J0olIRUiJFnlfr1m', NULL, '2023-10-30 15:16:28', '2023-10-30 15:16:28'),
(84, 'Rudra', 'customer84@admin.com', '01674370181', 'Fishman Event', 'Dhaka, Bangladesh', 'customers/spjyhl7BipDhp5CZeb903wW6mW3isrNELShU1htm.png', 0, NULL, '$2y$10$xnAWcNaXTrXv4nS2PsrvfeKbT7z4ywLfV/65/xYKyB2EV777wWpeO', NULL, '2023-10-30 15:17:10', '2023-10-30 15:17:10'),
(85, 'Rafin', 'customer85@admin.com', '01712654583', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/0XejTMHeVbtAnyD9Gd9TdNquUtrMfZyG1XHulJrK.png', 0, NULL, '$2y$10$.Fwxf84ocqhtICIIfoqf4uxLM00lVurOtQT7IEzx9FaQ/pyw58QWi', NULL, '2023-10-30 15:17:59', '2023-10-30 15:17:59'),
(86, 'Faysal Anik', 'customer86@admin.com', '01761418429', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/Y72TrI4IFkmYDlSkvaxg1m63nKrJSgSBah8iWwnc.png', 0, NULL, '$2y$10$5KySP9jnGEJvR5ditFa.TO3Ni93lrF/JrPP1owBiXblgJJPnEwmmS', NULL, '2023-10-30 15:18:42', '2023-10-30 15:18:42'),
(87, 'Kowsik', 'customer87@admin.com', '01722753615', 'Trimatra', 'Dhaka, Bangladesh', 'customers/SZuSif0YmrUZvsp2Re2ZqVkDKj9ILyVSZXeooK02.png', 0, NULL, '$2y$10$KE7QySct.eeYR2etPaWAhOWbnJeQUVFi0lx9tClV/6S0NzxEeX72.', NULL, '2023-10-30 15:19:27', '2023-10-30 15:19:27'),
(88, 'Tanbir Ahmed Younus', 'customer88@admin.com', '01728093952', 'Nobab Wedding Planner', 'Dhaka, Bangladesh', 'customers/OsfSiK4feaGz4qWYjAZDJ2PplFey6OtlgGyQH1X4.png', 0, NULL, '$2y$10$.SVSTnunAE/T8sNfazZMqOS/XyNTO7bZNILT.g9eZIq13JZ9vhV9q', NULL, '2023-10-30 15:20:15', '2023-10-30 15:20:15'),
(89, 'Md. Riaz Hossen', 'customer89@admin.com', '01687840143', 'Sky Event', 'Dhaka, Bangladesh', 'customers/llT1ynyRfpGOwvSbfXKDwJvT9PiwCfqMUXY3TiyW.png', 0, NULL, '$2y$10$nMop0EKBkWb0s3smpHGmj.xXx8/NnkBTZeY3K5207UbefXjdkOVHS', NULL, '2023-10-30 15:21:02', '2023-10-30 15:21:02'),
(90, 'Rubel Borua', 'customer90@admin.com', '01910007283', 'Rubel Lighting', 'Dhaka, Bangladesh', 'customers/default.png', 0, NULL, '$2y$10$4xgOs6AT6jgszb4cIHV3gu70e3G220XYSy.vA38AW5FYCqVYBtxWW', NULL, '2023-10-30 15:21:43', '2023-10-30 15:21:43'),
(91, 'Sayem', 'customer91@admin.com', '01741039990', 'Imperial Event', 'Dhaka, Bangladesh', 'customers/GGLdnUQnRAewX8sJrtcNbYh93GRHNdIdpj6ICz0o.png', 0, NULL, '$2y$10$sOsD87iXVG7w24shamihTOrLHgOM27ErcPoQkWUyhybgjLbYbcGHu', NULL, '2023-10-30 15:22:47', '2023-10-30 15:22:47'),
(92, 'Md. Shah Khalilullah', 'customer92@admin.com', '01711984208', 'Shajghor Event', 'Dhaka, Bangladesh', 'customers/2D7h4zRJSPmr5r6DigVRiDv5QssJEpkHHWlHD4Sv.png', 0, NULL, '$2y$10$XkDvbx7i1.8SZ.xls2g3oOMyfjsgR4ubPjh587JKlT.vfIGyuVBPe', NULL, '2023-10-30 15:23:53', '2023-10-30 15:23:53'),
(93, 'Sajhghor Manager', 'customer93@admin.com', '01322922810', 'Sajhghor Event', 'Dhaka, Bangladesh', 'customers/t1AFKduD4p4XzAKF5tfetTiyy7JdGyqD0OFEgYLi.png', 0, NULL, '$2y$10$yVx.ucTS6AnDhC/BRL3j6euOvQzVZxleaqxNrmS801ubzXFhNpk/a', NULL, '2023-10-30 16:20:16', '2023-10-30 16:20:16'),
(94, 'Md. Fajlur Rahman', 'customer94@admin.com', '01746882278', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/8onsQSBxHF4Pjx1oMjTF8ZkkOSEtOwFALVX4MS3O.png', 0, NULL, '$2y$10$x0.AqWRO2SHFPgSp4J5hNeTjcwIm26HIW0UoajeTDSl./472FU.su', NULL, '2023-10-30 16:21:13', '2023-10-30 16:21:13'),
(95, 'Aminul Islam', 'customer95@admin.com', '01741688551', 'Set Function', 'Dhaka, Bangladesh', 'customers/gpNhAen0aczk3AfAaaDImOG3hPrQTnkyTDZs7J0B.jpg', 0, NULL, '$2y$10$zE1LQOPB58zVHlNFXtwjNeFE/Z3tqBQJNsbDIm4fyEHEWC/nVD1Pm', NULL, '2023-10-30 16:21:59', '2023-10-30 16:59:11'),
(96, 'Mostafizur Rahman Rana', 'customer96@admin.com', '01682658511', 'Jamal Decorator', 'Dhaka, Bangladesh', 'customers/Na8I7dXJJxohDGpTR7dpMZyhFSb0MZQKqy2oVxGP.png', 0, NULL, '$2y$10$ofFikBLyu3DeGkBpO7nTGuiCmml0UVHrUPwORMs9ydAoH7iZmfvy.', NULL, '2023-10-30 16:22:37', '2023-10-30 16:22:37'),
(97, 'Tahsin', 'mailme.aakar@gmail.com', '01642399716', 'AAKAR', 'Dhaka, Bangladesh', 'customers/tJ3o5L4KzYGx2tEGoXpfTvWWD8TlAfLO60Brd26S.jpg', 0, NULL, '$2y$10$ETABGcwCo/EN/mhxwe3tgO9UjLQLY9/NdGkNnxu36X3nEhUeG8kRG', NULL, '2023-10-30 16:23:09', '2023-10-30 16:53:12'),
(98, 'Solaymen DJ', 'customer98@admin.com', '01928120005', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/AHWu1mD37YzsQKgd1Nzbua25K7jJfeXWTrBxis6L.png', 0, NULL, '$2y$10$OcKcUY86geRpSA0yi.Fqguka/AQKfYz1Im61PWGZv5.kxSouBraZm', NULL, '2023-10-30 16:23:43', '2023-10-30 16:23:43'),
(99, 'DJ Shanto', 'customer99@admin.com', '01854377178', 'Pls enter your company name', 'Dhaka, Bangladesh', 'customers/tT0nm3J8m7uXO3pjLC5OAVHqMPvVdr9FwwF2o3SC.png', 0, NULL, '$2y$10$R7nK.Al.5nPxZey/FOXFs.PWrpkKbMZgtJ38FOWxLif1lvdR88kzO', NULL, '2023-10-30 16:24:22', '2023-10-30 16:24:22'),
(100, 'Chandra', 'cpluss2003@yahoo.com', '01716301000', 'BB Logistics', 'Mohammadpur, Dhaka', 'customers/ulCD8EsBVUTuk10dB1PV8SZlGjx1kuy2VL9m0C94.jpg', 0, NULL, '$2y$10$JDxyrdKj8YWQW96nr8jZc.AvuIRVwQf8BPw0n3OTeLrzbE4FeL646', NULL, '2023-10-30 16:35:33', '2023-10-30 18:37:06'),
(101, 'Ikebana', 'ikebanabd@gmail.com', '01877342616', 'Ikebana Ltd', 'H-101, R-12, Gulshan-2, Dhaka-1212', 'customers/vJTyGwyeTK0tDxAEyIj8PB8iuBSANsyyG4RLW0DM.png', 0, NULL, '$2y$10$47qQuwRiCWxGFG0ZhtfX6ut7FAeQYZK6zU/h3wL64mqjlLFG2WNmq', NULL, '2023-10-31 22:13:59', '2023-11-02 20:47:12'),
(102, 'Md. Sumon Baly', 'sumonbalybds@gmail.com', '01671711933', 'Maa Event Management & Catering', 'Ka-44/2, Kalachandpur, Gulshan-2, Dhaka-1212', 'customers/C7P2zcrYNoHcmMNa0B2n5xFNX7FNwJ02AF3IhcSO.jpg', 0, NULL, '$2y$10$w4AZ45MXy3naDPgx3DQhyOEByJzTVn6wRFJqoclY1siwOYqQFqtei', 'wQyU2WPzYvmgIFUp9jHRDoEQIEZp365dH9YXibKRKakBY4mL9ylsznOTPM0g', '2023-11-02 15:32:09', '2023-11-02 17:10:56'),
(103, 'Opu Hasan', 'customer103@admin.com', '01832612519', 'Garden Event Management', 'Dhaka, Bangladesh', 'customers/FEbOiSWa26htWcUjK4otIqi9Wrks93HbbHFo5Ebd.jpg', 0, NULL, '$2y$10$3p8NA7r/wZhrspDphroOxeV1F1vuqcdQ70F3FQFFIDf8zV8EYj9eC', NULL, '2023-11-03 14:18:58', '2023-11-05 17:33:42'),
(104, 'Imtiaz Ahmed', 'customer104@admin.com', '01941320214', 'Fuler Karigor', 'Notun Bazar, Bhatara, Dhaka', 'customers/zCg7CPjygodFXSoCxC5I3B3wFcwDtK68FXjsKEEq.png', 0, NULL, '$2y$10$TfhmoTT965b0YKlAq.eqR.HsgUGXCTTCmewmAtGOcz7xmU/pL/CH6', NULL, '2023-11-03 18:08:38', '2023-11-03 18:08:38'),
(105, 'Jahid Hasan Manager', 'weddingbuzz2021@gmail.com', '01836281193', 'Wedding Buzz', '61/1, North Pirerbug, 60 feet, Mirpur 2,Dhaka., Dhaka, Bangladesh', 'customers/ICWoz0Rs7GxzdquLMsw9aqgeL3DNkwjtcMrJho2s.jpg', 0, NULL, '$2y$10$RqWw2v7qf.2tiOd03BYb/O4BbhCeFbxJG6IJVNi72uwDqju9jbzrO', NULL, '2023-11-05 19:03:04', '2023-11-05 19:05:06'),
(106, 'Pepplo Test', 'pepplo@admin.com', '01766555213', 'Pepplo BD', 'Chowmatha, Barishal', 'customers/W9xJYtxJn3izqJ1FZsM8GgE5MnsBHqLrnWlcY0Sq.jpg', 0, NULL, '$2y$10$m811Bu2eYaMWwXDXYF.eweaxVM14QFF5Xhk/DZ1u62pp7aE6D9XjW', NULL, '2023-11-07 21:04:18', '2023-11-07 21:06:50'),
(107, 'Md. Liton', 'customer107@admin.com', '01821693303', 'Creative Corner BD', '327 Morolbari, Nayatola, Hatijheel, Modhubagh, Mogbazar, Dhaka', 'customers/default.png', 0, NULL, '$2y$10$EWv1FAL/gKKKhjLtBf1E5uN45Dg93G7NLPoLkfagFzlCp26xH0H.C', NULL, '2023-11-10 04:24:08', '2023-11-10 16:55:25'),
(108, 'Shafin Khan', 'nafiulmomits@gmail.com', '01621737497', 'Eventson', 'Delpara, Narayangonj', 'customers/fLenZIxXsrMk1fio5YZZIqXyQXd2k27R1lBjAH6G.jpg', 0, NULL, '$2y$10$jSYIBMIMAhOgmAv6yCaWhudqvJPJhmyXcNb04jlen6JmZbcZK1dTC', NULL, '2023-11-17 23:17:58', '2023-11-17 23:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `damaged_products`
--

CREATE TABLE `damaged_products` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `rental_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `cost` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `damaged_products`
--

INSERT INTO `damaged_products` (`id`, `product_id`, `rental_id`, `quantity`, `cost`, `created_at`, `updated_at`) VALUES
(1, 477, 14, 1, 15000, '2023-11-04 16:21:22', '2023-11-04 16:21:22'),
(2, 413, 44, 1, 1500, '2023-11-08 00:47:25', '2023-11-08 00:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL DEFAULT 'Member',
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `social_media` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'employee/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `email`, `phone_number`, `social_media`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Galib Jaman', 'Co-founder & CEO', 'gj.emon35@gmail.com', '01766555213', 'https://www.facebook.com/gj.emon35', 'employee/iujWdbYjcnayd0a3cKw33EjG7LyzlVxTEXN7VkyX.jpg', 1, '2023-08-17 08:18:48', '2023-08-19 06:31:30', NULL),
(2, 'Farhana Akter', 'Co-founder & Spouse', 'farhanaakter8@gmail.com', '01747371076', 'https://www.facebook.com/farhanaakter.richa', 'employee/Ca7RhLsETWQztUZQR1icoLBvbxTCBOGbKfsDN8Bp.png', 1, '2023-08-17 08:27:52', '2023-08-17 08:37:23', NULL),
(3, 'Faatimah al Fihri', 'Thundercloud', 'fatimah.fihri@gmail.com', '01766555211', NULL, 'employee/CW4hpr0FnnLp2hkYLGSfbqOYhxKtRRRwes8gnMez.png', 1, '2023-08-17 08:34:48', '2023-08-21 05:31:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_cards`
--

CREATE TABLE `event_cards` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT 'event-cards/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_cards`
--

INSERT INTO `event_cards` (`id`, `title`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Reception', 'We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.', 1, 'event-cards/VCClTcb8ReR68YuVx22OBzdMe6Cn1m6zAXXZvqSr.jpg', '2024-01-01 09:44:14', '2024-01-01 10:23:53'),
(2, 'Lifestyle Occasions', 'We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.', 1, 'event-cards/9YnGkcMYb76nqlnHO69BxDugDBaiF1HXVqnZqWdZ.jpg', '2024-01-01 09:44:14', '2024-01-01 10:24:13'),
(3, 'Corporate Events', 'We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.', 1, 'event-cards/k6mTdpeRZ6XRwwrISkZzEh9VPVmkAX7PuVhJ4yjr.jpg', '2024-01-01 09:44:14', '2024-01-01 10:24:42');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What do we do?', 'We build dreams :)', 1, '2023-08-17 17:51:30', '2023-08-18 11:01:06'),
(2, 'How can I contact you?', 'Enter the most asked questions and answers to them. This will help your clients to find the answers they need without contacting you.', 1, '2023-08-17 17:57:10', '2023-08-18 11:01:02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `rating` int(2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT 'avatar/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `feedback`, `rating`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Doe', 'The best web on the site', NULL, 1, 'avatar/default.png', '2023-08-16 12:01:17', '2023-08-17 07:01:33'),
(2, 'Galib Jaman', 'The more you can imagine, the better it is to assume for us to set the rules and regulations and some other things to set aside our differences  and also to note down and to be devoide of logical and analytical fragments that.', NULL, 1, 'avatar/default.png', '2023-08-17 07:03:26', '2023-08-17 07:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `imageable_id` bigint(20) NOT NULL,
  `imageable_type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `subtotal` int(11) NOT NULL,
  `vat_percentage` float DEFAULT 0,
  `paid` int(11) DEFAULT 0,
  `discount` float DEFAULT 0,
  `grand_total` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT '''pending approval''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `user_id`, `subtotal`, `vat_percentage`, `paid`, `discount`, `grand_total`, `due`, `venue`, `status`, `created_at`, `updated_at`) VALUES
(1301, 1, 1, 26500, 0, 52000, 500, 26000, 0, NULL, 'returned', '2023-11-02 20:46:00', '2023-11-03 23:01:17'),
(1302, 2, 1, 3500, 0, 3500, 0, 3500, 0, NULL, 'returned', '2023-11-02 20:53:07', '2023-11-03 23:01:57'),
(1303, 41, 1, 12500, 0, 0, 0, 12500, 12500, NULL, 'returned', '2023-11-03 04:16:44', '2023-11-04 20:35:56'),
(1304, 11, 1, 600, 0, 0, 0, 600, 16600, NULL, 'returned', '2023-11-03 13:15:01', '2023-11-04 16:21:22'),
(1305, 104, 1, 4720, 0, 0, 0, 4720, 4720, NULL, 'returned', '2023-11-03 18:29:41', '2023-11-04 20:36:29'),
(1306, 103, 1, 26806, 0, 18000, 2000, 24806, 6806, NULL, 'returned', '2023-11-04 00:04:44', '2023-11-05 17:33:42'),
(1307, 105, 1, 4000, 0, 4000, 0, 4000, 0, NULL, 'returned', '2023-11-05 19:04:24', '2023-11-07 17:55:21'),
(1308, 1, 1, 1000, 0, 1000, 0, 1000, 0, 'Sena Malancha', 'returned', '2023-11-07 17:49:27', '2023-11-08 00:45:28'),
(1309, 13, 1, 2000, 0, 2000, 0, 2000, 0, 'Army Golf', 'returned', '2023-11-07 20:15:13', '2023-11-09 03:28:57'),
(1310, 1, 1, 17000, 0, 18000, 1000, 18000, 0, 'Shana Kunja', 'returned', '2023-11-08 00:37:53', '2023-11-08 00:48:31'),
(1311, 66, 1, 250, 0, 0, 0, 250, 250, 'Banani Club', 'returned', '2023-11-08 16:59:46', '2023-11-11 16:04:11'),
(1312, 66, 1, 450, 0, 0, 0, 450, 450, 'Banani Club', 'returned', '2023-11-08 22:14:35', '2023-11-11 16:04:22'),
(1313, 104, 1, 2760, 0, 0, 819, 1941, 1941, 'Gulshan', 'returned', '2023-11-09 15:56:50', '2023-11-11 16:04:47'),
(1314, 17, 1, 1500, 0, 1500, 0, 1500, 0, NULL, 'returned', '2023-11-09 16:36:29', '2023-11-11 16:05:02'),
(1315, 6, 1, 3000, 0, 0, 0, 3000, 3000, NULL, 'approved', '2023-11-10 02:39:39', '2023-11-10 16:41:58'),
(1316, 107, 1, 11800, 0, 2600, 0, 11800, 9200, NULL, 'approved', '2023-11-10 04:30:40', '2023-11-10 16:55:25'),
(1317, 39, 1, 12000, 0, 0, 0, 12000, 12000, 'Sena Malancha', 'returned', '2023-11-10 15:43:39', '2023-11-11 16:05:10'),
(1318, 104, 1, 1760, 0, 0, 352, 1408, 1408, 'Baridhara', 'returned', '2023-11-10 15:48:15', '2023-11-11 16:05:33'),
(1319, 5, 1, 7180, 0, 0, 0, 7180, 7180, 'Gulshan-02', 'approved', '2023-11-12 19:54:50', '2023-11-13 19:51:58'),
(1323, 5, 1, 20200, 0, 0, 0, 20200, 20200, NULL, 'returned', '2023-11-16 19:39:22', '2023-11-16 19:42:45'),
(1324, 66, 1, 3300, 0, 0, 0, 3300, 3300, NULL, 'approved', '2023-11-17 14:46:52', '2023-11-17 16:31:23'),
(1325, 18, 1, 2300, 0, 0, 0, 2300, 2300, NULL, 'approved', '2023-11-17 14:52:36', '2023-11-19 22:50:33'),
(1326, 24, 1, 200, 0, 0, 0, 200, 200, NULL, 'approved', '2023-11-17 15:36:00', '2023-11-19 22:51:03'),
(1327, 5, 1, 7500, 0, 0, 0, 7500, 7500, NULL, 'approved', '2023-11-17 16:18:14', '2023-11-19 22:51:28'),
(1328, 11, 1, 2000, 0, 0, 0, 2000, 2000, NULL, 'pending approval', '2023-11-19 23:07:05', '2023-11-19 23:07:05'),
(1329, 24, 1, 14000, 0, 0, 0, 14000, 14000, NULL, 'pending approval', '2023-11-19 23:14:28', '2023-11-19 23:14:28'),
(1330, 16, 3, 6200, 0, 0, 0, 6200, 6200, NULL, 'pending approval', '2023-11-20 15:13:12', '2023-11-20 15:13:12'),
(1331, 16, 3, 2000, 0, 0, 0, 2000, 2000, NULL, 'pending approval', '2023-11-20 15:22:05', '2023-11-20 15:22:05');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_17_164741_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(23, 'App\\Models\\User', 2),
(23, 'App\\Models\\User', 3),
(24, 'App\\Models\\User', 2),
(24, 'App\\Models\\User', 3),
(25, 'App\\Models\\User', 2),
(25, 'App\\Models\\User', 3),
(26, 'App\\Models\\User', 2),
(27, 'App\\Models\\User', 2),
(28, 'App\\Models\\User', 2),
(29, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_image` varchar(255) NOT NULL DEFAULT 'page/default.webp',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `page_title`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home - Pepplo Builder', 'Welcome to Maaevent.com - Your Ultimate Wedding Solution Provider in Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction company,Planning,Wedding,Reception', 'page/7x8Z5Boye1hQyjLEAKPBwjsWI4S1v1BdOquoNOLq.jpg', 1, '2023-08-10 04:02:23', '2023-12-31 07:26:42'),
(2, 'About', 'About - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:33'),
(3, 'Catering', 'Services - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction,renovation,interior design,construction company,construction company in the Bangladesh,Consultation in Barishal', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:34'),
(4, 'Logistics', 'Service Single - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-11 06:23:56'),
(5, 'Contact', 'Contact - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `page_section`
--

CREATE TABLE `page_section` (
  `id` bigint(20) NOT NULL,
  `page_id` bigint(20) NOT NULL,
  `section_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_section`
--

INSERT INTO `page_section` (`id`, `page_id`, `section_id`, `status`, `created_at`, `updated_at`) VALUES
(53, 1, 16, 1, NULL, NULL),
(54, 1, 17, 1, NULL, NULL),
(55, 1, 18, 1, NULL, NULL),
(56, 1, 19, 1, NULL, NULL),
(57, 1, 20, 1, NULL, NULL),
(58, 1, 21, 1, NULL, NULL),
(59, 1, 22, 1, NULL, NULL),
(60, 4, 23, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `primary_number` varchar(50) NOT NULL,
  `secondary_number` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `primary_number`, `secondary_number`, `created_at`, `updated_at`) VALUES
(1, 'bkash', '01711111112', '01711111112', NULL, '2023-10-23 06:05:35'),
(2, 'nagad', '01711111113', '01711111114', NULL, '2023-10-23 06:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create customer', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(2, 'update customer', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(3, 'delete customer', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(4, 'create product', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(5, 'update product', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(6, 'delete product', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(7, 'create category', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(8, 'update category', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(9, 'delete category', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(10, 'create order', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(11, 'update order', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(12, 'delete order', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(13, 'dispatch rentals', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(14, 'accept returns', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(15, 'view customers', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(16, 'update customers', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(17, 'update vat', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(18, 'view company profile', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(19, 'update company profile', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(20, 'update products', 'web', '2023-10-23 04:23:37', '2023-10-23 04:23:37'),
(21, 'approve rentals', 'web', '2023-10-23 04:28:13', '2023-10-23 04:28:13'),
(22, 'create rentals', 'web', '2023-10-23 04:36:38', '2023-10-23 04:36:38'),
(23, 'collect due', 'web', '2023-10-23 15:19:33', '2023-10-23 15:19:33'),
(24, 'update deposit', 'web', '2023-10-29 21:18:55', '2023-10-29 21:18:55'),
(25, 'view customer', 'web', '2023-10-29 21:18:55', '2023-10-29 21:18:55'),
(26, 'create theme', 'web', '2023-12-22 13:03:20', '2023-12-22 13:03:20'),
(27, 'update theme', 'web', '2023-12-22 13:03:20', '2023-12-22 13:03:20'),
(28, 'delete theme', 'web', '2023-12-22 13:03:20', '2023-12-22 13:03:20'),
(29, 'view theme', 'web', '2023-12-22 13:03:20', '2023-12-22 13:03:20');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bangla` varchar(255) DEFAULT NULL,
  `dimension` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `stock` float NOT NULL DEFAULT 0,
  `measurement_unit` varchar(100) NOT NULL DEFAULT 'pcs',
  `rental_price` float NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'product/default.png',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `name_bangla`, `dimension`, `color`, `stock`, `measurement_unit`, `rental_price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 10, 'CP-01', 'Golden Candle Centre Piece', 'গোল্ডেন ক্যান্ডেল সেন্টার পিস', 'W-1.25 x H-2.5', 'Golden', 4, 'pcs', 500, 'product/wvmxBoEAmTmWJa8VuVdSAUrCZqsVSCf4sm3QYIVR.jpg', 1, '2023-10-12 04:45:31', '2023-11-09 03:31:22', NULL),
(22, 10, 'CP-02', 'Silver Candle Centre Piece', 'সিলভার ক্যান্ডেল সেন্টার পিস', 'W-1.25 x H-2.5', 'Silver', 9, 'pcs', 500, 'product/5bip4J0jF7cO2yGrBVPXZKIQGv1BrRjaCkrA2hK5.jpg', 1, '2023-10-12 04:54:15', '2023-11-09 03:31:56', NULL),
(23, 10, 'CP-03', 'China Glass Centre Piece', 'চায়না গ্লাস সেন্টার পিস', 'W-1.25 x H-3', 'Glass', 8, 'pcs', 1500, 'product/iiSDpIgm2SMEZjEe578nLkovhSBPtCib9AzCXYdc.jpg', 1, '2023-10-12 04:56:07', '2023-11-13 19:20:12', NULL),
(24, 10, 'CP-04', 'Table Chandelier Centre Piece', 'টেবিল স্যান্ডেলিয়ার সেন্টার পিস', 'W-2 x H-2.5', 'Silver', 8, 'pcs', 1000, 'product/gXkhYqegdH5WDMrItubU0GHti3clGgRWboQnqC6q.jpg', 1, '2023-10-12 04:57:45', '2023-11-13 19:21:04', NULL),
(25, 10, 'CP-05', 'Wooden Centre Piece', 'কাঠের সেন্টার পিস', 'H-1.5 x W-1', 'Wooden', 40, 'pcs', 300, 'product/EmMfPw562dIp1eBCQGs2fiZocXhw8nkn2iceKCOq.jpg', 1, '2023-10-12 05:16:43', '2023-11-13 19:22:35', NULL),
(26, 10, 'CP-06', 'Mini Cristal Centre Piece', 'ছোট ক্রিস্টাল সেন্টার পিস', 'H-1.5', 'Silver', 30, 'pcs', 200, 'product/REI2j3qhYRRCh6PYPlJ1jW5JTeOGOGPo2eXdUOCD.jpg', 1, '2023-10-12 05:19:27', '2023-11-13 19:22:59', NULL),
(27, 10, 'CP-07', 'Candle SS Centre Piece', 'ক্যান্ডেল এসএস সেন্টার পিস', 'H-1.5\'', 'SS', 19, 'pcs', 100, 'product/msDimzKfxHmC5a7LpxtgEVPVRynXvvOLFlDM7Hl6.jpg', 1, '2023-10-12 05:20:13', '2023-11-13 19:23:37', NULL),
(28, 10, 'CP-08', 'Clear Acrylic Centre Piece', 'ক্লিয়ার এক্রেলিক সেন্টার পিস', '2 x 2', NULL, 4, 'pcs', 2000, 'product/pSOdrjwR90CdIeDgb4uXDSUFwAzZSJNejdcCSprS.jpg', 1, '2023-10-12 05:25:14', '2023-11-14 15:14:56', NULL),
(29, 10, 'CP-09', 'Patch Small Centre Piece', 'প্যাচের ছোট সেন্টার পিস', '2.5', 'SS', 10, 'pcs', 300, 'product/wLvBCDKDYotrV0gAa8hJi52Lf8VkzR7tGXTosLUn.jpg', 1, '2023-10-12 05:26:41', '2023-11-14 15:15:51', NULL),
(30, 10, 'CP-10', 'Straight Round Small Centre Piece', 'সোজা গোল সেন্টার পিস', '1.5feet x 8inch', NULL, 19, 'pcs', 300, 'product/51GQu4jJwNOIzreoOkBuznC3SVbGF5IQZdDUtWc1.jpg', 1, '2023-10-12 07:34:35', '2023-11-14 15:26:05', NULL),
(31, 10, 'CP-11', 'Patch Medium Centre Piece', NULL, '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/dv5DLstMb2NJOgnF4DWp48JDuRtrt2yRSeNglVZu.jpg', 1, '2023-10-12 07:36:04', '2023-10-29 19:54:31', NULL),
(32, 10, 'CP-', 'Patch Medium Centre Piece', NULL, '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/klUL7s7PQGRbtf6qlMklsmcz7q4XVMOE6tMurCFI.jpg', 1, '2023-10-12 07:36:44', '2023-10-12 07:39:09', '2023-10-12 07:39:09'),
(33, 10, 'CP-11', 'Patch Medium Centre Piece', NULL, '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/wPmPkMRLqDxxh2qX4zF9hBYn3cTIxsprcUrgT9Kk.jpg', 1, '2023-10-12 07:37:57', '2023-10-12 07:39:22', '2023-10-12 07:39:22'),
(34, 10, 'CP-12', 'Straight Box Medium Centre Piece 3 Layer', 'মাঝারি বক্স সেন্টার পিস ৩ লেয়ার', '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/WO0zjFHBTkxJ8Py8yhOK4Vy6xBXwfZ2F0GdeOJvB.jpg', 1, '2023-10-12 07:40:49', '2023-11-14 15:27:04', NULL),
(35, 10, 'CP-13', 'Round Medium Centre Piece 3 Layer', 'মাঝারি গোল সেন্টার পিস ৩ লেয়ার', '2 feet x 8 inch', 'Golden', 4, 'pcs', 500, 'product/Bj27U4XYyZSdOyM7a78TxXJjSmmcw0o5k4JrLDYQ.jpg', 1, '2023-10-12 07:41:51', '2023-11-14 15:29:54', NULL),
(36, 10, 'CP-14', 'Round Centre Piece 3 Layer', 'গোল সেন্টার পিস ৩ লেয়ার', '2 feet x 10 in', 'Golden', 5, 'pcs', 1000, 'product/grEcX1zDKaPoNFHOsTmiwkVt1WVeTYXKnWAR2tnR.jpg', 1, '2023-10-12 07:42:55', '2023-11-14 15:30:39', NULL),
(37, 10, 'CP-15', 'Straight Centre Piece 3 Layer', NULL, '2 feet x 11 in', NULL, 8, 'pcs', 1000, 'product/uSRKpyllkPGPmlYfWQw8Vq1HNmL3KlLIzLwhEPHo.jpg', 1, '2023-10-12 07:46:10', '2023-11-02 13:25:16', NULL),
(38, 10, 'CP-16', 'Patch Big Centre Piece', NULL, '2 feet x 10 in', 'Golden', 6, 'pcs', 1000, 'product/T3ie7ij4v5mZLg1uOEGOGkYsTEYj3mBhHOmwuIzN.jpg', 1, '2023-10-12 07:47:52', '2023-10-29 19:54:16', NULL),
(39, 10, 'CP-17', 'Straight Box Large Centre Piece 4 Layer', NULL, '2 feet x 13 in', 'Crystal Silver', 6, 'pcs', 1200, 'product/MO0ClyVXZaaBMPlhqpa4iIW0ORvRMWF19Xiu5EDX.jpg', 1, '2023-10-12 08:15:14', '2023-10-29 19:54:21', NULL),
(40, 10, 'CP-18', 'China Crystal Round Centre Piece', NULL, '2.5 feet x 14 inch', 'Crystal Silver', 40, 'pcs', 1000, 'product/pEVNNfWi6rEtPoEQbSfqhHUy5nhuPPdNQaQiKhNR.jpg', 1, '2023-10-12 08:39:21', '2023-10-29 19:54:24', NULL),
(41, 10, 'CP-19', 'China Crystal Ball Round Centre Piece', NULL, '2 feet', 'Crystal Silver', 10, 'pcs', 600, 'product/PQV59n25YeIulvvvay78j9fZtufNrADO99arY3vO.jpg', 1, '2023-10-12 08:40:24', '2023-11-02 13:25:20', NULL),
(42, 10, 'CP-20', 'China Centre Piece', NULL, '1.4 feet', 'Crystal Silver', 19, 'pcs', 150, 'product/y0HNLjsiHuqAgCfMbX0SnuEF7x9Til7X16HFzq3W.jpg', 1, '2023-10-12 08:42:32', '2023-11-02 13:25:23', NULL),
(43, 10, 'CP-20.1', 'China Centre Piece', NULL, '1.8 feet', 'Crystal Silver', 20, 'pcs', 200, 'product/AquZSUZmwRkTq0GkNVCr0SiXMSui8VwAPqqH54Y6.jpg', 1, '2023-10-12 08:45:01', '2023-11-14 16:02:35', NULL),
(44, 10, 'CP-20.2', 'China Round Centre Piece', NULL, '2.2 feet', 'Crystal Silver', 18, 'pcs', 250, 'product/jFdbldOWlRhDv4QPMF6mmP07NWj5JHqAFmwOkvlh.jpg', 1, '2023-10-12 09:21:34', '2023-11-14 16:02:49', NULL),
(45, 10, 'CP-21', 'China Crystal Small Centre Piece', NULL, '7 inch', NULL, 2, 'pcs', 100, 'product/eSw2YLD0jZUSzTKJHo9aKIgIapnLQbJrVPXusFRd.jpg', 1, '2023-10-12 09:24:03', '2023-11-02 13:30:30', NULL),
(46, 10, 'CP-22', 'China Crystal Ceramic Round Centre Piece', 'ক্রিস্টাল সিরামিক সেন্টার পিস', '2.5 feet & 2 feet', 'Crystal & White', 4, 'pcs', 600, 'product/Wvwpo93L7rLS48BDQ9fSjUqJYgpnKRxctT4IVsqS.jpg', 1, '2023-10-12 09:26:13', '2023-11-14 16:01:58', NULL),
(47, 10, 'CP-23', 'China Glass Single Candle Centre Piece', 'সিঙ্গেল ক্যান্ডেল সেন্টার পিস', 'Large 1 pc & Small 6 pcs', 'Antique Golden', 7, 'pcs', 200, 'product/P6wUDofNyzdtlePkWspth2vXbSWONOzpiA9vezsg.jpg', 1, '2023-10-12 09:28:04', '2023-11-14 16:01:31', NULL),
(48, 10, 'CP-24', 'Lace Centre Piece', 'লম্বা লেইস সেন্টার পিস', '2.5 feet', 'Golden', 9, 'pcs', 100, 'product/aj9BA4hkOOCVYzCqWbyBkP4tc15jWoE4KZZLUHhv.jpg', 1, '2023-10-12 09:30:41', '2023-11-14 16:00:29', NULL),
(49, 10, 'CP-25', 'China Candle Centre Piece', 'চায়না ক্যান্ডেল সেন্টার পিস', '2 feet', 'Silver', 2, 'pcs', 500, 'product/Y6sZ71d5umlKMyCIfeTUiP9P7F6q6BW6LPSAaSwU.jpg', 1, '2023-10-12 09:31:53', '2023-11-14 15:59:51', NULL),
(50, 10, 'CP-26', 'China Big Wine Glass Centre Piece', 'চায়না বড় কাচের ওয়াইন গ্লাস সেন্টার পিস', '2 feet', 'Glass', 9, 'pcs', 500, 'product/gDcHmGEzRa5D9432SqSTAmvSQdBOqHG84t8x8vKk.jpg', 1, '2023-10-12 09:33:14', '2023-11-14 15:59:27', NULL),
(51, 10, 'CP-27', 'China Big Tall Glass Centre Piece', 'চায়না কাচের সেন্টার পিস', NULL, 'Glass', 3, 'pcs', 200, 'product/xyMm7lPoo5A32Q7JGthWPr8bVHAwkKeF43Oa6xX9.jpg', 1, '2023-10-12 09:35:11', '2023-11-14 15:58:39', NULL),
(52, 10, 'CP-28', 'China Big Tall Glass Centre Piece', 'চায়না বড় লম্বা কাচের সেন্টার পিস', '2 feet', 'Glass', 25, 'pcs', 500, 'product/gw1TitKOY4H0rriXQ1W3FIG60pfIp0MphoQ0oits.jpg', 1, '2023-10-12 09:37:12', '2023-11-14 15:58:08', NULL),
(53, 10, 'CP-29', 'China Big Tall Glass Centre Piece', 'চায়না বড় কাচের সেন্টার পিস', '2 feet', 'Glass', 15, 'pcs', 500, 'product/0kcKKQu7fN03YJZMRJjoPaTGe8FlvJByaWhk5M8C.jpg', 1, '2023-10-12 09:45:31', '2023-11-16 19:42:45', NULL),
(54, 10, 'CP-30', 'China Glass Tall Centre Piece', 'লম্বা কাচের সেন্টার পিস', '2 feet', 'Glass', 2, 'pcs', 500, 'product/OdZqOTGyoboHBVSrlBPtvcn8JWaQdnvx8HWpDNfC.jpg', 1, '2023-10-12 09:50:51', '2023-11-14 15:56:23', NULL),
(55, 10, 'CP-31', 'China Glass Candle Centre Piece', 'চায়না কাচের ক্যান্ডেল সেন্টার পিস', NULL, 'Frosted', 70, 'pcs', 100, 'product/Yk9G1kAOWwVA51bwMKQOeWMC82GJ55oX8Fx4SUqh.jpg', 1, '2023-10-12 09:52:37', '2023-11-14 15:55:22', NULL),
(56, 10, 'CP-32', 'Wine Glass Centre Piece', 'কাচের বড় ওয়াইন সেন্টার পিস', NULL, 'Glass', 2, 'pcs', 200, 'product/tzcXRyGt3smlXRyqpTlLJNofG6vuOMecM01VO1KY.jpg', 1, '2023-10-12 09:55:49', '2023-11-14 15:50:15', NULL),
(57, 10, 'CP-33', 'Glass Bawl Centre Piece', 'চায়না কাচের রাউন্ড সেন্টার পিস', NULL, 'Glass', 24, 'pcs', 200, 'product/VB23fW2QaZasl86NayxAOu3Zdt5qDSYUBp3YMbjT.jpg', 1, '2023-10-12 09:56:52', '2023-11-14 15:49:38', NULL),
(58, 10, 'CP-34', 'Metal Box Centre Piece', NULL, '1.5 feet', 'Golden', 25, 'pcs', 100, 'product/GKUfvvJNB6QAuSqXgIhcKwHWTxq4ihstjzi0TFSI.jpg', 1, '2023-10-12 10:00:43', '2023-10-12 10:00:43', NULL),
(59, 10, 'CP-34a', 'Metal Box Centre Piece', 'মেটাল বক্স সেন্টার পিস', '2 feet', 'Golden', 25, 'pcs', 150, 'product/JDNyUKS6OnI3xwYJnDgTaqMZHksk8XWrtGZ1yrwz.jpg', 1, '2023-10-12 10:01:30', '2023-11-14 15:49:12', NULL),
(60, 10, 'CP-35', 'Tetul Gacher Guri', 'তেতুল গাছের গুঢ়ি', NULL, 'Wooden', 32, 'pcs', 100, 'product/ZqOahUaxHZh2D3zKbx6uycv4EyYyrPAEMzmj8IBl.jpg', 1, '2023-10-12 10:04:57', '2023-11-14 15:48:52', NULL),
(61, 10, 'CP-36', 'Ring Centre Piece', 'মেটাল রিং সেন্টার পিস', NULL, 'White', 24, 'pcs', 100, 'product/9EbjzLGAFp5DdJOUybG68QnxGLn2XU4I5aiQiin2.jpg', 1, '2023-10-12 10:06:37', '2023-11-14 15:48:18', NULL),
(62, 10, 'CP-37', 'Double Ring Centre Piece', 'মেটাল রিং সেন্টার পিস', NULL, 'White', 24, 'pcs', 100, 'product/aSzcGBGp346lzHaVGPxFpnRmwFiyeoCiSboic9o6.jpg', 1, '2023-10-12 10:08:20', '2023-11-14 15:47:34', NULL),
(63, 10, 'CP-38', 'China White Crystal', 'চায়না সাদা ক্রিস্টাল সেন্টার পিস', NULL, 'White', 36, 'pcs', 200, 'product/SnspFhE3xawaIoKxTnA8hXzdtaL9DRQeZ5LwTqMK.jpg', 1, '2023-10-12 10:09:46', '2023-11-14 15:47:16', NULL),
(64, 10, 'CP-39', 'China Glass Round Centre Piece', 'কাচের গোল সেন্টার পিস', NULL, 'Glass', 20, 'pcs', 200, 'product/z6UCJHf0SuuWDnJETgouMmcKyra77vzepy8M6SdW.jpg', 1, '2023-10-12 10:32:03', '2023-11-14 15:46:22', NULL),
(65, 10, 'CP-40', 'Glass Fish Bawl', 'ছোট কাচের ফিস বল', 'Big & Small', 'Glass', 89, 'pcs', 50, 'product/qoWYTNojJ41HqAvgZydbWUdlD84qNExvhvIsmwSd.jpg', 1, '2023-10-12 10:33:09', '2023-11-14 15:46:00', NULL),
(66, 10, 'CP-41', 'Glass Fish Bawl', 'বড় কাচের ফিস বল', 'Big', 'Glass', 26, 'pcs', 300, 'product/0JZvGTGdWSZdcq5T2aQLBn7V0wvp762hOzgDFDJt.jpg', 1, '2023-10-12 10:34:42', '2023-11-14 15:44:59', NULL),
(67, 10, 'CP-42', 'Round Mirror Vase', 'গোল মিরর বেস', NULL, 'Mirror', 59, 'pcs', 50, 'product/FdhXg2i0rM7a1WMjbVAYtSQcQYpRcSuu5lzKqo7h.jpg', 1, '2023-10-12 10:39:26', '2023-11-14 15:44:08', NULL),
(68, 10, 'CP-43', 'Square Base Mirror', 'চারকোনা মিরর বেস', '1.5 x 1.5', 'Mirror', 32, 'pcs', 200, 'product/GqWKulQi65bRE1jI4MvtQAnkhabJtmDNIKoSRw2x.jpg', 1, '2023-10-12 10:48:45', '2023-11-14 15:43:46', NULL),
(69, 10, 'CP-44', 'Metal Hexagon Centre Piece', 'মেটাল ষড়ভুজ সেন্টার পিস', '10 inch', 'White', 10, 'pcs', 150, 'product/BAv8MM6vwvhGsYtglNKI01pFh3gsGDG6Eu0qkJSb.jpg', 1, '2023-10-12 10:53:52', '2023-11-13 19:21:56', NULL),
(70, 10, 'CP-45', 'Metal Round Centre Piece', 'মেটাল রাউন্ড সেন্টার পিস', '10 inch', 'White', 15, 'pcs', 150, 'product/8uhWgrwXpjxQLZamw2GMEiTMvWq9fiRBwJ89VZrF.jpg', 1, '2023-10-12 10:54:57', '2023-11-14 15:36:06', NULL),
(71, 9, 'AT-01', 'Bamboo Tree', 'বাঁশ গাছ', '6 feet', 'Green', 2, 'pcs', 500, 'product/201RG2NtZej61LcEgehESVhEwaatSRxuLwo5kuWE.jpg', 1, '2023-10-12 11:04:53', '2023-11-12 19:08:50', NULL),
(72, 9, 'AT-02', 'Palm Tree', 'পাম গাছ', '5 feet', 'Green', 4, 'pcs', 1000, 'product/HYFCOOYPRkXf6BntYK3TQ1SkuBlxYlQlSm7Y1brd.jpg', 1, '2023-10-12 11:09:53', '2023-11-12 19:46:41', NULL),
(73, 9, 'AT-03', 'Date Tree', 'খেজুর গাছ', '4 feet', 'Green', 20, 'pcs', 100, 'product/3DMsdZnM5QDStaXYea6DaDxFat2K66VBFUPwPIzy.jpg', 1, '2023-10-12 11:10:50', '2023-11-12 19:47:00', NULL),
(74, 9, 'AT-04', 'Bat Gach', 'বট গাছ', '3.5 feet', 'Green', 10, 'pcs', 100, 'product/ieygIv4BLbPr1kIRWzXnVkCocNYwtJJxY1QfVFTA.jpg', 1, '2023-10-12 11:12:09', '2023-11-12 19:47:23', NULL),
(75, 9, 'AT-05', 'Golden Jhau Gach', 'সোনালী ঝাউ গাছ', '3 feet', 'Golden', 40, 'pcs', 500, 'product/6BX7Yj2MQGjd7P4ZvJ4QweBYuRtUDLcI3Xv03d1y.jpg', 1, '2023-10-12 11:14:13', '2023-11-12 19:47:47', NULL),
(76, 9, 'AT-06', 'Kashful', 'কাঁশফুল', '2 feet', 'Green', 30, 'pcs', 20, 'product/1rnczUGnsHx5PdvHDciPgZHwyajBbwGS8JTRhdGz.jpg', 1, '2023-10-12 11:24:16', '2023-11-12 19:48:23', NULL),
(77, 9, 'AT-07', 'Local Tree Branch', 'দেশী শুকনা ডাল', '4 feet', NULL, 250, 'pcs', 20, 'product/MPfYD3ZnHZntSU7ZoYx3VMeFnIZZ3xNFAbRSXBd0.jpg', 1, '2023-10-12 11:28:29', '2023-11-12 19:49:15', NULL),
(78, 9, 'AT-08', 'China White Tree Branch', 'চায়না সাদা ডাল', '4 feet', NULL, 120, 'pcs', 50, 'product/57vNnYpBwrZf8H84AEZnylaeMuxOEcK6hirskCdz.jpg', 1, '2023-10-12 11:29:50', '2023-11-12 21:00:12', NULL),
(79, 9, 'AT-09', 'China Dry Tree Branch', 'চায়না শুকনা সাদা ডাল', '4 feet', NULL, 200, 'pcs', 50, 'product/KlbHNmUs1thVMy21fXooTXgkbjXBkyBgfVqC2Omk.jpg', 1, '2023-10-12 11:30:24', '2023-11-12 21:00:44', NULL),
(80, 9, 'AT-10', 'Ginger Leaf', 'আদা পাতা', '3 feet', 'Green', 10, 'pcs', 100, 'product/JJOJ1FtSLKB7ohx41WAvI6SUUQmAkOcE6lsxLVkq.jpg', 1, '2023-10-12 11:31:20', '2023-11-12 21:01:09', NULL),
(81, 13, 'CND-01', 'Glass Chandelier Large', 'বড় কাচের স্যান্ডেলিয়ার', 'Large', NULL, 1, 'pcs', 2500, 'product/ooRh6ONQLXbls8BWkz8ATUyM4IqsipymxJ3AzNZR.jpg', 1, '2023-10-12 13:31:02', '2023-11-13 19:00:33', NULL),
(82, 13, 'CND-1a', 'Glass Chandelier Small', NULL, 'Single Layer', NULL, 1, 'pcs', 2000, 'product/e0YIsBrwbt7n4G7mW8XER2cDRgtR2zuJJKbK4k8H.jpg', 1, '2023-10-12 13:32:24', '2023-10-12 13:32:24', NULL),
(83, 13, 'CND-02', 'Glass Chandelier Small', 'ছোট কাচের স্যান্ডেলিয়ার', 'Large', NULL, 0, 'pcs', 700, 'product/HONZPFLmgrpSMLlh2764Hgl0hyZww6xa6SG9PNPZ.jpg', 1, '2023-10-12 13:34:50', '2023-11-13 19:01:23', NULL),
(84, 13, 'CND-03', 'Silver Chandelier', 'এস এস স্যান্ডেলিয়ার', NULL, 'Silver', 58, 'pcs', 500, 'product/sZ7BCW1AYngwc6Gt7iNWZUIX2Qx6YK0JnckcgYUT.jpg', 1, '2023-10-13 04:37:52', '2023-11-16 19:42:39', NULL),
(85, 13, 'CND-04', 'Golden Chandelier', 'গোল্ডেন স্যান্ডেলিয়ার', NULL, 'Golden', 12, 'pcs', 700, 'product/m9T6UZQCHIuPXKhVPWzNf0m5yTvnAbg2uh2l8Yd2.jpg', 1, '2023-10-13 04:38:46', '2023-11-13 19:03:30', NULL),
(86, 13, 'CND-05', 'Ball Chandelier', 'বল স্যান্ডেলিয়ার', '2 feet Dia', 'Golden', 10, 'pcs', 1000, 'product/Fq6NArowwIIbAGo5RvpW4c3FROdC545YjrtEj6BM.jpg', 1, '2023-10-13 04:40:27', '2023-11-13 19:04:34', NULL),
(87, 13, 'CND-06', 'Round Crystal Chandelier', 'রাউন্ড ক্রিস্টাল স্যান্ডেলিয়ার', 'Round', 'Silver Crystal', 65, 'pcs', 500, 'product/etVxERNRa1P3zbx976VdOhmOFlm5WbcwEBrTXq2p.jpg', 1, '2023-10-13 04:45:23', '2023-11-13 19:05:16', NULL),
(88, 13, 'CND-07', 'Metal Chandelier', 'মেটাল স্যান্ডেলিয়ার', NULL, 'Golden', 2, 'pcs', 1000, 'product/dl0eR0uz8l4iD8yDoJRjccrlObc4jWPrLGQl3D7L.png', 1, '2023-10-13 04:46:21', '2023-11-13 19:05:40', NULL),
(89, 13, 'CND-08', 'Spiral Chandelier', 'স্পাইরাল স্যান্ডেলিয়ার', NULL, NULL, 30, 'pcs', 500, 'product/QkvVgDYBCA21I1OAU0NpnIKoeEfMsMt215S9voZt.jpg', 1, '2023-10-13 04:47:32', '2023-11-13 18:59:16', NULL),
(90, 13, 'CND-09', 'Corona Chandelier', 'করোনা স্যান্ডেলিয়ার', NULL, NULL, 30, 'pcs', 800, 'product/1O7OttQVyIsavGbyg24puXsG45mF5E8VJcH933GC.jpg', 1, '2023-10-13 04:48:15', '2023-11-16 19:42:36', NULL),
(91, 13, 'CND-10', 'Crystal Chandelier', 'ক্রিস্টাল স্যান্ডেলিয়ার', NULL, 'Red, Pink, Blue, Purple', 81, 'pcs', 200, 'product/WsONrLRMxFwAxWftavQed7gmceAGKv4NMLtSuJGt.jpg', 1, '2023-10-13 04:50:22', '2023-11-13 19:06:33', NULL),
(92, 13, 'CND-11', 'Anbas Chandelier', 'আনবাস স্যান্ডেলিয়ার', 'Large 21 pcs & Small 9 pcs', 'Blue', 30, 'pcs', 200, 'product/mLlw7iXni9zEUukzcEM5w25K4RAVf3amiJJqxgOB.jpg', 1, '2023-10-13 04:52:19', '2023-11-13 19:07:07', NULL),
(93, 13, 'CND-12', 'Anbas Chandelier', 'আকাশি আনবাস স্যান্ডেলিয়ার', 'Medium', 'Sky', 7, 'pcs', 200, 'product/X7TnggmdXeBoF4qtGyDHpEpdkxdvOx7GOfncZEdI.jpg', 1, '2023-10-13 04:53:01', '2023-11-13 19:07:47', NULL),
(94, 13, 'CND-13', 'Anbas Chandelier', 'সোনালি আনবাস স্যান্ডেলিয়ার', 'Large', 'Golden', 18, 'pcs', 200, 'product/8cPf5WYZbhCHoOid6HS0nOtsfFFH55LC3bIf9sJO.jpg', 1, '2023-10-13 04:53:41', '2023-11-13 19:08:16', NULL),
(95, 13, 'CND-14', 'Anbas Chandelier', 'সবুজ আনবাস স্যান্ডেলিয়ার', 'Large 23 pcs, Small 9 pcs', 'Green', 27, 'pcs', 200, 'product/WKM5Pn8IiA5ogRbxGk34jUgo6LMP7Egrhnzukixa.jpg', 1, '2023-10-13 04:54:34', '2023-11-13 19:08:38', NULL),
(96, 13, 'CND-15', 'Anbas Chandelier', 'লাল আনবাস স্যান্ডেলিয়ার', 'Large 31 pcs, Small 9 pcs', 'Red', 40, 'pcs', 200, 'product/JVRUqv7kSNUK8bXtaYchTv0PgKRckllge1Ccm2re.jpg', 1, '2023-10-13 04:55:40', '2023-11-13 19:09:05', NULL),
(97, 13, 'CND-16', 'Case Chandelier', 'খাচা স্যান্ডেলিয়ার', NULL, 'White', 50, 'pcs', 100, 'product/gVKX4uysZVfT8aQoKXYrehXhf15XDEyE6JAC8Hnc.jpg', 1, '2023-10-13 04:58:07', '2023-11-13 19:09:32', NULL),
(98, 13, 'CND-17', 'Mic Chandelier', 'মাইক স্যান্ডেলিয়ার', NULL, NULL, 8, 'pcs', 200, 'product/lbRowjxAlhnbN2n2M99Qmbye1Cq086rUxuQKn9ap.jpg', 1, '2023-10-13 04:59:19', '2023-11-13 19:10:00', NULL),
(99, 13, 'CND-18', 'Hanging Chandelier', 'হ্যাংগিং স্যান্ডেলিয়ার', NULL, 'White', 6, 'pcs', 200, 'product/5R83ZgFzCl9itHvMZN6SzcPSp7gdt4UNvqHPpR9n.jpg', 1, '2023-10-13 05:00:32', '2023-11-13 19:10:42', NULL),
(100, 13, 'CND-19', 'Bulb Chandelier', 'বাল্ব স্যান্ডেলিয়ার', 'Set', 'Golden', 2, 'pcs', 8000, 'product/TLssgVzPDp45dCLqs3PywSuZHbOXaWogY1SKtmmL.jpg', 1, '2023-10-13 05:01:44', '2023-11-13 19:11:08', NULL),
(101, 13, 'CND-20', 'Large Crystal Chandelier', 'বড় ক্রিস্টাল স্যান্ডেলিয়ার', 'Large', 'Silver Crystal', 1, 'pcs', 2000, 'product/7bYBNNkDFuoxkXL34WUOaMqMB31lHUY3CjgIye1Z.jpg', 1, '2023-10-13 05:03:01', '2023-11-13 19:11:34', NULL),
(102, 13, 'CND-21', 'Glass Crystal Chandelier', 'কাঁচের ক্রিস্টাল স্যান্ডেলিয়ার', '10 gang', 'Crystal', 11, 'pcs', 2000, 'product/1ApHQlvHaA849xPAbImL5LL0osJDJQLsK2yb9ZeK.jpg', 1, '2023-10-13 05:06:39', '2023-11-13 19:12:30', NULL),
(103, 13, 'CND-22', 'Glass Crystal Chandelier', 'কাঁচের ক্রিস্টাল স্যান্ডেলিয়ার ১৫ গ্যাং', '15 Gang', 'Crystal', 15, 'pcs', 3000, 'product/jUmh6eZIvCIjanwNypZ3xftdEHFvvyR45zZdydH6.jpg', 1, '2023-10-13 05:07:25', '2023-11-13 19:13:06', NULL),
(104, 13, 'CND-23', 'Modern Crystal Chandelier', 'আধুনিক ক্রিস্টাল স্যান্ডেলিয়ার', 'Round', 'Crystal Golden', 6, 'pcs', 1500, 'product/Lk23hJ9Th8Gnf8NQhGjKj0C3lJJBcTl8tWsyIR7s.jpg', 1, '2023-10-13 05:13:36', '2023-11-13 19:15:19', NULL),
(105, 13, 'CND-24', 'Pineapple Chandelier', 'আনারস লাইট স্যান্ডেলিয়ার', NULL, 'Glass', 8, 'pcs', 300, 'product/o93Ih8U9hnWtiwbAhETVH9JM2jmdnQeAFGxWiSYo.jpg', 1, '2023-10-13 05:15:18', '2023-11-13 19:16:00', NULL),
(106, 13, 'CND-25', 'Hanging Chandelier', 'হ্যাংগিং স্যান্ডেলিয়ার', NULL, 'White', 20, 'pcs', 300, 'product/FRVURZCJaJVUuploIPtBsr9ruR18fp7zQtSlb9tp.jpg', 1, '2023-10-13 05:18:26', '2023-11-13 19:16:23', NULL),
(107, 17, 'FT-1', 'Large Stone Chandelier', NULL, 'H-7feet, D-8feet', 'White', 1, 'pcs', 25000, 'product/default.webp', 1, '2023-10-13 06:28:00', '2023-11-04 15:41:25', '2023-11-04 15:41:25'),
(108, 17, 'FT-1', 'Large Stone Chandelier', NULL, 'H-7feet, D-8feet', 'Antique White', 1, 'pcs', 25000, 'product/2aCqWJRMsAj7vJkqKIaKCslMS2GRj89s3uL4zsWQ.png', 1, '2023-10-13 06:28:30', '2023-10-29 19:54:02', NULL),
(109, 17, 'FT-2', 'Small Stone Fountain', NULL, 'H-4 feet, D-3.5 feet', 'Marvel', 2, 'pcs', 6000, 'product/0PQnOBIrYMZQPy4IxqhqxhSwvtc8cfeA8zkR0c6Y.png', 1, '2023-10-13 06:29:39', '2023-11-03 23:01:13', NULL),
(110, 17, 'FT-3', 'Rectangle Metal Fountain', NULL, 'H-5 feet, L-4 feet, W-4 feet', 'White', 2, 'pcs', 7000, 'product/Lgj33WkmBMG8D2s7JiQIyM0vGbSMcLhBtFOFFRoU.jpg', 1, '2023-10-13 06:30:40', '2023-11-03 23:01:17', NULL),
(111, 17, 'FT-4', 'Round Large Metal Fountain', NULL, 'H-7 feet', 'White', 3, 'pcs', 5000, 'product/PPy2KCV08P9qdPSmv0qDBK9ujDFajEuGl0YSzd1m.jpg', 1, '2023-10-13 06:31:24', '2023-10-13 06:31:24', NULL),
(112, 17, 'FT-5', 'SS Mini Fountain', NULL, 'H-4 feet, W+L-1 feet', 'Steel', 12, 'pcs', 1500, 'product/So6ZS9In7b41E2ZtcSvqn2d36CiUNKC3YST11f3M.jpg', 1, '2023-10-13 06:34:56', '2023-11-04 20:35:39', NULL),
(113, 17, 'FT-6', 'Stone Medium Fountain', NULL, 'H-4 feet, D-4 feet', 'Antique White', 1, 'pcs', 10000, 'product/VDHaPL964YR2WeLCiN41TraCr422UntDdqahniKq.jpg', 1, '2023-10-13 08:21:28', '2023-10-13 08:21:28', NULL),
(114, 16, 'FV-02', 'Flower Vase with Base', 'ফাইবার ফ্লাওয়ার ভাস বেস সহ', 'H-3 feet', 'Customize', 4, 'pcs', 600, 'product/N0jE91nbnYUiC3Ffczr7UcRfowPDHg8OptcJohzx.jpg', 1, '2023-10-13 08:36:49', '2023-11-17 15:53:18', NULL),
(115, 16, 'FV-2', 'Flower Vase with Base', NULL, 'H-3 feet', 'Customize', 4, 'pcs', 600, 'product/7e1d49Ea5XKd5UV0fbJfSWGPeY2HRFCgdv0o5BDU.jpg', 1, '2023-10-13 08:36:52', '2023-10-13 08:37:22', '2023-10-13 08:37:22'),
(116, 16, 'FV-2', 'Flower Vase with Base', NULL, 'H-3 feet', 'Customize', 4, 'pcs', 600, 'product/YvHfGDmJDRrrb9xUn9y4HWrA9HhXsgmFSF8xCzcr.jpg', 1, '2023-10-13 08:36:53', '2023-10-13 08:38:04', '2023-10-13 08:38:04'),
(117, 16, 'FV-01', 'Crystal Flower Vase', 'ক্রিস্টাল ফ্লাওয়ার ভাস', 'H-2 feet, 1 feet', 'Crystal Silver', 12, 'pcs', 1000, 'product/GcXVGQLIYLySM5YxJRXfqWBYAgNBdBzo8D3omzjW.jpg', 1, '2023-10-13 09:12:44', '2023-11-17 15:46:20', NULL),
(118, 16, 'FV-03', 'Medium Flower Vase', 'মাঝারি ফ্লাওয়ার ভাস', 'H-3 feet', 'Customize', 6, 'pcs', 500, 'product/2PUSQj3btRBdodGH8eT6aRRcAlqrUVQPItOuich0.jpg', 1, '2023-10-13 09:18:03', '2023-11-17 15:53:42', NULL),
(119, 16, 'FV-04', 'Fiber Flower Vase', 'ফাইবার ফ্লাওয়ার ভাস', 'H-2.5 feet', NULL, 16, 'pcs', 500, 'product/3uzDDlSeGNtswaT1HL3Y7RC6KQwUXinBoIanwjgk.jpg', 1, '2023-10-13 09:29:36', '2023-11-17 15:54:46', NULL),
(120, 16, 'FV-05', 'Plastic Flower Vase', 'প্লাস্টিক ফ্লাওয়ার ভাস', NULL, 'White', 6, 'pcs', 300, 'product/1iwDylrlh9K3sqap6LagyVKZllC2e6rc6iYCCaCk.jpg', 1, '2023-10-13 09:30:18', '2023-11-17 15:55:25', NULL),
(121, 16, 'FV-06', 'Roman Flower Vase', 'রোমান ফ্লাওয়ার ভাস', NULL, 'White', 9, 'pcs', 500, 'product/CqTQQLOvP4M27MesAmZMxw69tkzsLFqMXSxVG5jD.jpg', 1, '2023-10-13 09:35:00', '2023-11-17 15:55:48', NULL),
(122, 16, 'FV-07', 'Thin Fiber Flower Vase', 'চিকন ফ্লাওয়ার ভাস', NULL, 'Golden', 16, 'pcs', 500, 'product/ap21wYCaUqe7eSAaEUVDRLbBAuARhh6hUBbup5fr.jpg', 1, '2023-10-15 03:52:35', '2023-11-17 15:56:14', NULL),
(123, 16, 'FV-08', 'Jar Shape Flower Vase', 'লম্বা ফ্লাওয়ার ভাস', NULL, 'Golden', 6, 'pcs', 500, 'product/HP3shoSHmDdZyrw3ugrWxqLTnUdggu6Tt6nzR3dM.jpg', 1, '2023-10-15 03:53:35', '2023-11-17 15:58:02', NULL),
(124, 16, 'FV-09', 'Elephant Teeth Flower Vase', 'হাতির দাত ফ্লাওয়ার ভাস', NULL, 'Golden', 2, 'pcs', 1000, 'product/FknqWB0j5ukYxGj6SFSwRCM6OqLhLMvoaDQWNLMV.jpg', 1, '2023-10-15 03:54:24', '2023-11-17 15:58:31', NULL),
(125, 16, 'FV-11', 'Wooden Flower Vase', 'কাঠের ফ্লাওয়ার ভাস', 'Tall & Short', 'White', 7, 'pcs', 200, 'product/3i5ZzWJzr6F5phymlJSfru7KI8B5gXlAaSPpIcDL.png', 1, '2023-10-15 03:55:52', '2023-11-17 16:00:57', NULL),
(126, 16, 'FV-12', 'Wooden Flower Vase', 'কাঠের ফ্লাওয়ার ভাস', 'Tall & Short', 'White', 3, 'pcs', 100, 'product/Phf6jt1HmET6BkN1Lz9EI1Jhe5bzu0q2kvl5EHif.jpg', 1, '2023-10-15 03:57:13', '2023-11-17 16:09:13', NULL),
(127, 16, 'FV-13', 'Wooden Box Flower Vase', 'কাঠের বক্স ফ্লাওয়ার ভাস', 'Large, Medium & Small', 'Wooden', 5, 'pcs', 200, 'product/Z6D2TUpmBvLwJfgnZhfdPzijR8VLgyco2OPhsS84.png', 1, '2023-10-15 03:58:12', '2023-11-17 16:09:48', NULL),
(128, 16, 'FV-14a', 'Round Flower Vase', NULL, 'Large', 'White', 2, 'pcs', 300, 'product/6ChNnc1dDL6xpfwsXT24cGJkktLoNMSMdlnVuAMX.jpg', 1, '2023-10-15 04:00:00', '2023-10-15 04:00:00', NULL),
(129, 16, 'FV-14b', 'Round Flower Vase', NULL, 'Medium', 'White', 2, 'pcs', 250, 'product/sofm28OAPBfsGjnktfpksnGA8nphc6mGS4NGXVBf.jpg', 1, '2023-10-15 04:00:35', '2023-10-15 04:00:35', NULL),
(130, 16, 'FV-14c', 'Round Flower Vase', NULL, 'Small', 'White', 5, 'pcs', 250, 'product/YcEo6o5R5sVGTfIE3ir09tqe3crcRNTH6MfFC0WA.jpg', 1, '2023-10-15 04:01:00', '2023-10-15 04:01:00', NULL),
(131, 16, 'FV-15a', 'Mirror Flower Vase', NULL, 'Large', NULL, 1, 'pcs', 500, 'product/etFRvy99ZhSTifDHzHDj1gWKIvobgqGiCdZwFmj9.jpg', 1, '2023-10-15 04:02:14', '2023-10-19 12:23:54', NULL),
(132, 16, 'FV-15b', 'Mirror Flower Vase', NULL, 'Medium', NULL, 4, 'pcs', 300, 'product/K60x4r0APPpqjQL6P8FoHtmAFKCOVn4inLGf13z3.jpg', 1, '2023-10-15 04:02:53', '2023-10-15 04:02:53', NULL),
(133, 16, 'FV-15c', 'Mirror Flower Vase', NULL, 'Small', NULL, 2, 'pcs', 200, 'product/f3MmSzjqexmVFAr64kqcCwcDKbc1Bj1xdFcyHhaK.jpg', 1, '2023-10-15 04:04:38', '2023-10-15 04:04:38', NULL),
(134, 16, 'FV-16', 'Metal Flower Vase', NULL, NULL, 'Customize', 4, 'pcs', 300, 'product/MfsJqYh2QG4uw9TH4afdR7Ubg7YpBFXbVFIwgdrW.jpg', 1, '2023-10-15 04:05:46', '2023-10-15 04:05:46', NULL),
(135, 16, 'FV-17', 'Metal Flower Vase', 'মেটাল ফ্লাওয়ার ভাস', NULL, 'Customize', 19, 'pcs', 300, 'product/UePS6Zl8y62mKbe0986mLCuuRFmjtD1ttj1W40CM.jpg', 1, '2023-10-15 04:06:20', '2023-11-17 15:47:21', NULL),
(136, 16, 'FV-18', 'Coper Flower Vase', 'পিতলের পাত্র', 'Large, Medium & Small', 'Coper', 10, 'pcs', 1000, 'product/gVnxcMViuXEonmKsyD02Zi6sGJdbwk5kjqtHa6P8.jpg', 1, '2023-10-15 04:07:21', '2023-11-19 22:50:33', NULL),
(137, 18, 'HI-01', 'Yarn Lace', 'সাদা সুতার লেস', NULL, 'Blue & Yellow', 7, 'pcs', 200, 'product/dqbMc0m8V5eEn3WaIk35z7588uLUgWAWCWxFe6oe.jpg', 1, '2023-10-15 04:26:50', '2023-11-12 19:11:23', NULL),
(138, 18, 'HI-02', 'Golden Yarn Lace', 'গোল্ডেন সুতার লেস', 'Large, Medium & Small', 'Golden', 18, 'pcs', 200, 'product/VVxkqN7XmquLW8FzLbx9TRy2UG2Y61TFift0XPir.jpg', 1, '2023-10-15 04:27:42', '2023-11-12 19:10:52', NULL),
(139, 18, 'HI-03', 'Red Yarn Lace', 'লাল সুতার লেস', NULL, 'Red', 5, 'pcs', 200, 'product/aDblZrtsGWsGKFR77ozp47kYrLliGUa8jguLFQVn.jpg', 1, '2023-10-15 04:29:52', '2023-11-12 19:11:38', NULL),
(140, 18, 'HI-04', 'Pink Yarn Lace', 'গোলাপি সুতার লেস', NULL, 'Pink', 8, 'pcs', 200, 'product/Q8oMdSb57dwurdO6Nz3uJkzz8D61pAC7lmqUC0ot.jpg', 1, '2023-10-15 04:30:23', '2023-11-12 19:12:19', NULL),
(141, 18, 'HI-05', 'Silver Yarn Lace', 'সিলভার সুতার লেস', NULL, 'Silver', 10, 'pcs', 200, 'product/y20bdqW1V2zWvqHZFhwmzXRAXvWlhsZvYX2LhDs5.jpg', 1, '2023-10-15 04:31:06', '2023-11-12 19:10:15', NULL),
(142, 18, 'HI-06', 'Silver Beads Lace', 'সিলভার পুতির লেস', NULL, 'Crystal Silver', 7, 'pcs', 500, 'product/70Z9MpzmjPpojFV9A5Sf0zRAJNBvKFEIOCrVCeXo.jpg', 1, '2023-10-15 04:39:01', '2023-11-13 15:45:31', NULL),
(143, 18, 'HI-07', 'Silver Beads Lace', 'সিলভার পুতির লেস', NULL, 'Crystal Silver', 5, 'pcs', 500, 'product/EDyHTRhTpwdnWWnVc7vyH73IWq7lmgK0qyTRggj6.jpg', 1, '2023-10-15 04:40:14', '2023-11-13 15:46:08', NULL),
(144, 18, 'HI-08', 'Golden Beads Lace', 'গোল্ডেন পুতির লেস', NULL, 'Golden', 4, 'pcs', 500, 'product/QVMi1Lj6UHFQtkluqdsfpZE4An0tOmpdzWn8Ij4t.jpg', 1, '2023-10-15 04:40:45', '2023-11-13 15:47:14', NULL),
(145, 18, 'HI-09', 'Transparent Beads Lace', NULL, NULL, 'Transparent', 6, 'pcs', 500, 'product/TGdqzg4QkPfx4H9F0q3grpWGDkPQTkCgo3PGNO48.jpg', 1, '2023-10-15 04:41:32', '2023-10-15 04:41:32', NULL),
(146, 18, 'HI-10', 'Ring Lace', NULL, NULL, 'White & Cream', 20, 'pcs', 200, 'product/wnAgnIwqMWFU66WowplBGIuIHZY4xTMWBMPH2Fs4.jpg', 1, '2023-10-15 04:42:31', '2023-10-15 04:42:31', NULL),
(147, 18, 'HI-11', 'Yarn Glitter Lace Square', NULL, 'Large & Medium', 'Red & Silver', 22, 'pcs', 300, 'product/lgPFiwx1jtGptk4ipV8Mrmob9mLixVsXi6m43ncX.jpg', 1, '2023-10-15 04:43:53', '2023-10-15 04:43:53', NULL),
(148, 18, 'HI-12', 'Yarn Glitter Lace Ring', NULL, NULL, 'Red & Yellow', 9, 'pcs', 300, 'product/dSAJZAgF43JJgZrcAYeA40Is6sMRkrevnCJmQyqb.jpg', 1, '2023-10-15 04:44:39', '2023-10-15 04:44:39', NULL),
(149, 18, 'HI-13', 'Yarn Lace', NULL, NULL, 'White, Silver & Golden', 72, 'pcs', 100, 'product/21mMtdOtA4IMJKz3NbbnR1mexzn5oqLhDOBo4vlH.jpg', 1, '2023-10-15 04:45:47', '2023-10-15 04:45:47', NULL),
(150, 18, 'HI-14', 'Beads Lace', NULL, 'Dhan-5 pcs, Flat-5 pcs', NULL, 10, 'pcs', 500, 'product/0neG4M81h3aZCEWGsOo10AXJII7ufiYil0v8BLte.jpg', 1, '2023-10-15 04:50:54', '2023-10-15 04:50:54', NULL),
(151, 18, 'HI-15', 'Love Beads Lace', NULL, NULL, NULL, 4, 'pcs', 500, 'product/Wg2zO4HwVKgQRKtpnMWQkZSWQVjQR87J5fukl7fH.jpg', 1, '2023-10-15 05:06:00', '2023-10-15 05:06:00', NULL),
(152, 18, 'HI-16', 'Beads Lace', NULL, NULL, 'Silver & Golden', 20, 'pcs', 500, 'product/8PnN7c7Dh3zfYl4i1mbqrGZI3aofsnrdXkUa7Iqs.jpg', 1, '2023-10-15 05:07:39', '2023-10-15 05:07:39', NULL),
(153, 18, 'HI-17', 'Beads Lace', NULL, NULL, 'Golden', 10, 'pcs', 500, 'product/TyBF8l8ktsRgoep1NXSedaFIbhCHWeyX2KyKZCyv.jpg', 1, '2023-10-15 05:08:31', '2023-10-15 05:08:31', NULL),
(154, 18, 'HI-18', 'Beads Lace', NULL, NULL, 'Blue, Pink & Purple', 7, 'pcs', 400, 'product/VV0juMoUxAYoJyIhwlSd1SVK6ekH25Gl8C9gxylx.jpg', 1, '2023-10-15 05:11:35', '2023-10-15 05:11:35', NULL),
(155, 18, 'HI-19', 'China Ring', NULL, 'S-14, M-15, L-14', 'Customize', 43, 'pcs', 200, 'product/am9DgHqNW9O1oXb2BGusvvM415KUuOj0ZB75zSKD.jpg', 1, '2023-10-15 05:13:09', '2023-10-15 05:13:09', NULL),
(156, 18, 'HI-20', 'Glass Nest Case', NULL, NULL, 'Glass', 11, 'pcs', 200, 'product/kipAajnOX2w5Ua9xA0tFSRO26elpWW7lLfJaXmle.jpg', 1, '2023-10-15 05:13:49', '2023-10-15 05:13:49', NULL),
(157, 18, 'HI-21', 'Glass Nest Case', NULL, 'Round', 'Glass', 6, 'pcs', 200, 'product/5OrDcrAe1u3SMnniLvA7qWMLYIq2cm4U07B3JfG7.jpg', 1, '2023-10-15 05:14:15', '2023-10-15 05:14:15', NULL),
(158, 18, 'HI-22', 'Glass Nest Case', NULL, NULL, 'Glass', 5, 'pcs', 200, 'product/glhDPJ0eMEkDw8zwsGdmji8af0iqLx8FYOnMZE2j.jpg', 1, '2023-10-15 05:15:12', '2023-10-15 05:15:12', NULL),
(159, 18, 'HI-23', 'Hanging Glass Showpiece', NULL, NULL, NULL, 165, 'pcs', 50, 'product/dLWGxmHVDEDcIYJLXEo9DO0ewAVTa9uwmKQixcJe.jpg', 1, '2023-10-15 05:15:47', '2023-10-15 05:15:47', NULL),
(160, 18, 'HI-24', 'Hanging Showpiece', NULL, NULL, NULL, 1, 'pcs', 1, 'product/wNutZkdNFprwk3RV9WwowLTPwKYBv6P8Y08ljYly.jpg', 1, '2023-10-15 05:16:13', '2023-10-15 05:16:13', NULL),
(161, 18, 'HI-25', 'Hanging Showpiece', NULL, NULL, NULL, 160, 'pcs', 50, 'product/B4Ot8lATxI7C5uT775bTlFSfJCzruSYKeqUlMMgf.jpg', 1, '2023-10-15 05:16:33', '2023-10-15 05:16:33', NULL),
(162, 18, 'HI-26', 'Hanging Triangle', NULL, 'S-30, L-30', NULL, 60, 'pcs', 50, 'product/Mx1Ti7RAp0KueyapQD2lyeNlppWgZY8798ZADNHb.jpg', 1, '2023-10-15 05:17:36', '2023-10-15 05:17:36', NULL),
(163, 18, 'HI-27', 'Trass Hanging Triangle', NULL, NULL, NULL, 22, 'pcs', 50, 'product/LjUDJxVnj9F3f1AfBulnBQMlguur0Pof6v2OHE7A.jpg', 1, '2023-10-15 05:18:04', '2023-10-15 05:18:04', NULL),
(164, 18, 'HI-28', 'Wooden Kashmiri Fan', NULL, NULL, 'Golden', 26, 'pcs', 300, 'product/C9gQVH3WsfrlRzaI2i4rk3VILCBvR66FsRGLZygP.jpg', 1, '2023-10-15 05:39:05', '2023-10-15 05:39:05', NULL),
(165, 18, 'HI-29', 'Mirror Fram', NULL, NULL, 'Golden', 3, 'pcs', 100, 'product/liHAypdF66iVj0Aa6WkawCjENg3JsEYTwMXv1N5Q.jpg', 1, '2023-10-15 05:39:36', '2023-10-15 05:39:36', NULL),
(166, 18, 'HI-30', 'Mirror Frame Rectangle', NULL, NULL, 'Golden', 3, 'pcs', 100, 'product/0d0x8uy9er1oVxwBRcDHbGP9JMgeHfkD4mwKQNZS.jpg', 1, '2023-10-15 05:40:04', '2023-10-15 05:40:04', NULL),
(167, 18, 'HI-31', 'Mirror Frame Round', NULL, NULL, 'White', 36, 'pcs', 100, 'product/cuqDXNr8iFuSPgXXUSUCFxgcoS9hHECTggvp404G.jpg', 1, '2023-10-15 05:40:35', '2023-10-15 05:40:35', NULL),
(168, 18, 'HI-32', 'Picture Frame', NULL, '30 in x 36 in', NULL, 5, 'pcs', 200, 'product/o4L99aggRC6qEqWWYJjfchpCuErTzdj4y2PnlDRf.jpg', 1, '2023-10-15 05:42:07', '2023-10-15 05:42:07', NULL),
(169, 18, 'HI-33', 'Crystal Fat Chain', NULL, '10 feet', 'Crystal', 48, 'pcs', 30, 'product/ELAfND5BGMqaQKY648B71BlrvRHtI8t2aebPiO4n.jpg', 1, '2023-10-15 05:43:22', '2023-10-15 05:43:37', NULL),
(170, 18, 'HI-34', 'Crystal Thin Chain', NULL, '10 feet', NULL, 20, 'pcs', 30, 'product/vBhY4kMYBRETX9JstWWsgDAen67zSaPH9wZmeu5D.jpg', 1, '2023-10-15 05:44:14', '2023-10-15 05:44:14', NULL),
(171, 18, 'HI-35', 'Crystal Chain', NULL, '2 feet', 'White', 300, 'pcs', 10, 'product/9w5ceHgoGTMoUHKJqT6kIrkXLwMkXXcWeGZK08oO.jpg', 1, '2023-10-15 05:45:05', '2023-10-15 05:45:05', NULL),
(172, 18, 'HI-36', 'Crystal Lohor', NULL, '3 feet', 'Crystal', 2000, 'pcs', 50, 'product/ZHylLrEoErlHBBobmCfOHvz6CfmJkQJ4QpQoUN4D.jpg', 1, '2023-10-15 05:47:03', '2023-10-22 05:21:36', NULL),
(173, 18, 'HI-37', 'Pearl Lohor', NULL, '3 feet', NULL, 0, 'pcs', 20, 'product/JDaVRlw2xQ49HewU3QRth0KWOMWWgrs0Nzb9cwTv.jpg', 1, '2023-10-15 05:50:11', '2023-10-15 05:50:11', NULL),
(174, 18, 'HI-37', 'Crystal Ball', NULL, NULL, NULL, 34, 'pcs', 50, 'product/GDKSGzC4z6HcTVxAHkDMPM3u2QPqbbw0qOn0e1oV.jpg', 1, '2023-10-15 05:50:39', '2023-10-15 05:50:39', NULL),
(175, 18, 'HI-38', 'Glass Snail', 'কাঁচের শামুক', 'Tall', NULL, 34, 'pcs', 200, 'product/tzvIX1JoFcjOVldxFO9VkbY7MGzv4tMrr7zKSyRl.jpg', 1, '2023-10-15 05:51:35', '2023-11-13 15:44:09', NULL),
(176, 18, 'HI-39', 'Plastic Oysters', 'প্লাস্টিক ওয়েস্টার', NULL, NULL, 34, 'pcs', 20, 'product/ytpyBIP7tKFEwukhthFLQqTGx7NUtGA3EPPe7ved.jpg', 1, '2023-10-15 05:52:27', '2023-11-13 15:43:30', NULL),
(177, 18, 'HI-40', 'Glass Ball', 'গ্লাস বল', NULL, NULL, 28, 'pcs', 200, 'product/1Ix7PQU48o4KaBZX4NCukJRyu772NzczS3daBx1D.jpg', 1, '2023-10-15 05:53:37', '2023-11-13 15:43:05', NULL),
(178, 18, 'HI-41', 'Mirror Ball', 'মিরর বল', NULL, 'Mirror', 18, 'pcs', 200, 'product/yPQULXvwOddU8c79mSd19xpSzGhfRdMzvzz0ivUS.jpg', 1, '2023-10-15 05:54:18', '2023-11-13 15:42:46', NULL),
(179, 18, 'HI-42', 'Plastic Ball', 'প্লাস্টিক বল', NULL, NULL, 25, 'pcs', 20, 'product/fO79rUR6HnyAzIzCCHvS10jwVHXS3dzw3TkHJnFQ.jpg', 1, '2023-10-15 05:54:51', '2023-11-13 15:42:13', NULL),
(180, 18, 'HI-43', 'Small Disco Ball', 'ছোট ডিসকো বল', NULL, NULL, 27, 'pcs', 50, 'product/4fVwykiRqLtyboLBp3mgLIDDYR6F21vRpUnM9kWH.jpg', 1, '2023-10-15 05:56:02', '2023-11-13 15:41:29', NULL),
(181, 18, 'HI-44', 'Small Disco Ball', 'ছোট ডিসকো বল', NULL, NULL, 21, 'pcs', 20, 'product/z6mmvisNHMwqq6QGpnZYy5oDRCQXCzA9LIqyqz9H.jpg', 1, '2023-10-15 05:56:26', '2023-11-13 15:41:06', NULL),
(182, 18, 'HI-45', 'Butterfly', 'প্রজাপতি হ্যাংগিং', NULL, NULL, 42, 'pcs', 100, 'product/ILvKEV3utx4ivaNSUiBc1gW1YRys9BowUK1SprPP.jpg', 1, '2023-10-15 05:56:51', '2023-11-13 15:40:38', NULL),
(183, 18, 'HI-46', 'Trass SS CNC Cutting', 'ট্রাস এসএস সিএনসি কাটিং', NULL, NULL, 15, 'pcs', 200, 'product/u92zAqahJT7449a8S3nVzRk4iPEuidnTV1QEnTHk.jpg', 1, '2023-10-15 05:58:00', '2023-11-13 15:39:54', NULL),
(184, 18, 'HI-47', 'Metal Round Ball', 'মেটাল রাউন্ড বল', NULL, NULL, 6, 'pcs', 100, 'product/xE4XB3jLYjkWKPO0g6APorhN3WAISilLBg8vtifH.jpg', 1, '2023-10-15 05:59:51', '2023-11-13 15:39:10', NULL),
(185, 35, 'P-01', 'Wooden Platform', 'কাঠের প্লাটফর্ম ৪ x ৪', '16 sft', 'Wooden', 100, 'pcs', 300, 'product/BTnLpkyDGw8xkXIX6UFN1IyuliDqmDEAD0yLgSMi.jpg', 1, '2023-10-18 05:53:04', '2023-11-12 20:19:21', NULL),
(186, 35, 'P-2', 'Wooden Platform 3.5 x 5', NULL, '17.5 sft Per SFT-30tk', 'Wooden', 16, 'pcs', 350, 'product/YCAwiH6HZgGzFynjRUSKp6f5TC9zzpMQM1keZnox.jpg', 1, '2023-10-18 05:56:22', '2023-11-10 15:32:05', NULL),
(187, 35, 'P-03', 'Wooden Platform Round', 'কাঠের প্লাটফর্ম গোল', '12feet x 12feet', 'Wooden', 1, 'pcs', 10000, 'product/o1Dbset27146lwMwoZVyKUZnrSfpx1YdhnE7kT0r.jpg', 1, '2023-10-18 06:00:46', '2023-11-13 23:10:21', NULL),
(188, 35, 'P-04', 'Mirror Platform', NULL, 'Per Platform 17.5 sft (3.5 feet x 5 feet)', 'Silver', 86, 'pcs', 1225, 'product/hNULdaOlFThmxmOyLDCpSoQA5ynOJONhAATQPeUs.jpg', 1, '2023-10-18 06:11:08', '2023-11-10 15:32:05', NULL),
(189, 35, 'P-05', 'Mirror Platform Golden', NULL, 'Per Platform 17.5 sft (3.5 feet x 5 feet)', 'Golden', 40, 'pcs', 130, 'product/9sFX0bO84Pgju8c9rdTlOdCVPTwsZn6Wev5aocgi.jpg', 1, '2023-10-18 06:14:22', '2023-11-03 14:33:55', NULL),
(190, 35, 'P-06', 'Glass Platform', NULL, 'Per Platform 16 sft (4 feet x 4 feet)', 'Transparent Glass', 50, 'pcs', 1120, 'product/7DQc786QzHHTivpVpqoaRkESwT1LTOCVjUPKUuay.jpg', 1, '2023-10-18 06:15:55', '2023-10-18 06:15:55', NULL),
(191, 35, 'P-07', 'Aquarium Platform', NULL, 'Per Platform 16 sft (4 feet x 4 feet)', 'Transparent Glass', 2, 'pcs', 4800, 'product/n0KBcaAtkQla85vuUQquDaSb7V56hvmjqOGvZKs0.jpg', 1, '2023-10-18 06:18:39', '2023-10-18 06:18:39', NULL),
(192, 35, 'P-09', 'Water Bed', NULL, 'Per Platform 16 sft (4 feet x 4 feet)', 'LED', 25, 'pcs', 5600, 'product/mqZaxwsUMagaAkUk7aKBx2DQ4MWzvRHSoXSfmrkz.jpg', 1, '2023-10-18 06:24:43', '2023-10-18 06:24:43', NULL),
(193, 35, 'P-10', 'Mirror Stair 3 step', NULL, '1.5 feet x 4 feet', NULL, 1, 'pcs', 1500, 'product/7kF8S2Let3grBl7hjguPzUtlIyuF3hBd9osMOp67.jpg', 1, '2023-10-18 06:25:27', '2023-11-10 15:32:05', NULL),
(194, 35, 'P-11', 'Mirror Stair 2 step', NULL, '1 feet x 4 feet', NULL, 2, 'pcs', 1000, 'product/9qosQNwfXMXNC2o2MiadM5q1YTDnAFSUsQm7iwoF.jpg', 1, '2023-10-18 06:26:04', '2023-11-10 04:28:31', NULL),
(195, 35, 'P-12', 'Mirror Stair 1 step', NULL, '6 feet x 4 feet', NULL, 2, 'pcs', 500, 'product/CyWI5QPmBkJ4gV26qDO2DVV0LtTA6GwS6iAhzjXu.jpg', 1, '2023-10-18 06:26:32', '2023-11-04 20:37:05', NULL),
(196, 35, 'P-16', 'Straight Stair', NULL, '1.5 feet 5pcs & 1 feet 3pcs', 'Wooden', 8, 'pcs', 300, 'product/YkRmum6g0obI6MMHQqjYie35tnM2wVFg6DRbpM6Z.jpg', 1, '2023-10-18 06:52:35', '2023-10-18 06:52:35', NULL),
(197, 34, 'CH-01', 'Golden Round Design Chair', 'গোল্ডেন রাউন্ড ডিজাইন চেয়ার', NULL, 'Golden', 50, 'pcs', 300, 'product/3HAoTiPWFOT11g2qnidzBvs0AmXDmB7i6Xm545Uz.jpg', 1, '2023-10-19 04:05:26', '2023-11-13 15:26:19', NULL),
(198, 34, 'CH-02', 'Golden Stick Chair', 'গোল্ডেন স্টিক চেয়ার', NULL, 'Golden', 50, 'pcs', 300, 'product/kcxBfKccqAPa22Ewv8uBtEaPjxEbTsqtr6oZ7mz7.jpg', 1, '2023-10-19 04:07:08', '2023-11-13 15:27:04', NULL),
(199, 34, 'CH-03', 'Golden Chair', 'গোল্ডেন চেয়ার', NULL, 'Golden', 50, 'pcs', 300, 'product/acmQ9lRErbxNpuHM0VRUltvEhQU4k29bKKGcHpIB.jpg', 1, '2023-10-19 04:09:31', '2023-11-13 15:27:24', NULL),
(200, 34, 'CH-04', 'Golden Chair', 'গোল্ডেন ডাইনিং চেয়ার', NULL, 'Golden', 2, 'pcs', 300, 'product/W2ErSty5FIlpg4NfcBc4msiC0QQtH5025u1Xg6pM.jpg', 1, '2023-10-19 04:09:57', '2023-11-13 15:28:07', NULL),
(201, 34, 'CH-05', 'Garden Chair', 'গার্ডেন চেয়ার', NULL, 'Golden', 200, 'pcs', 80, 'product/034tqd5U89ch3Koh9zQ6CqqS1pmBKFM9yDdv6U6s.jpg', 1, '2023-10-19 04:10:24', '2023-11-13 15:28:32', NULL),
(202, 34, 'CH-06', 'Garden Chair', 'গার্ডেন চেয়ার', NULL, 'White', 200, 'pcs', 80, 'product/mU4HXnMtPjb6WKi4pJuElvvWJ5FAXFIKFb3TQMq1.jpg', 1, '2023-10-19 04:10:53', '2023-11-13 15:28:48', NULL),
(203, 14, 'C-01', 'White Butter', 'সাদা বাটার', '3000 Yards', 'White', 2448, 'pcs', 4, 'product/I0kFBJ9mOvdhVRscP11e4XHcUSeW94R5FQYewP1w.jpg', 1, '2023-10-19 04:43:04', '2023-11-12 15:04:39', NULL),
(204, 14, 'C-02', 'White Georgette', NULL, '3000 Yards', 'White', 3000, 'pcs', 6, 'product/XmXBIxqeK2fXUIPCa57LpX555yiGtJmKZnQExIRR.jpg', 1, '2023-10-19 04:44:46', '2023-10-26 03:51:44', NULL),
(205, 14, 'C-03', 'Black Georgette', 'কালো জর্জেট', '5000 Yards', 'Black', 5000, 'pcs', 6, 'product/ELSxHFjLseUTzOASX7ria4RGpIXDxbxrKoI1xrcX.jpg', 1, '2023-10-19 04:47:24', '2023-11-12 17:28:40', NULL),
(206, 14, 'C-04', 'Piece Butter', 'পিস বাটার', '2100 Yards', 'Piece', 2100, 'pcs', 4, 'product/1USIfK9XbaRMhnBdLHZ9PWEKzg6pZkrn3H3nBNxH.jpg', 1, '2023-10-19 04:51:54', '2023-11-12 17:29:14', NULL),
(207, 14, 'C-05', 'Light Piece Butter', 'হালকা পিস বাটার', '400 Yards', 'Light Piece', 400, 'pcs', 4, 'product/Uq3miEq5FrVY4ArBXNRKAogdMleei7m9fBYVkRo3.png', 1, '2023-10-19 04:52:48', '2023-11-12 17:29:34', NULL),
(208, 14, 'C-06', 'Violet Butter', 'বেগুনি বাটার কাপড়', '1020 Yards', 'Violet', 970, 'pcs', 4, 'product/OaPLrPebwg2LmDrI5ku4rzKpviVECJcmT6NyDnx4.jpg', 1, '2023-10-19 04:54:28', '2023-11-19 22:51:03', NULL),
(209, 14, 'C-07', 'Sky Blue Butter', 'আকাশি নীল বাটার কাপড়', '240 Yards', 'Sky Blue', 240, 'pcs', 4, 'product/X56N5pDEr4zXA8W2q6yzLSZAg6TAFENJ5rG7tlOJ.jpg', 1, '2023-10-19 04:55:06', '2023-11-13 19:17:58', NULL),
(210, 14, 'C-08', 'Blue Butter', 'নীল বাটার কাপড়', '300 Yards', 'Blue', 300, 'pcs', 4, 'product/1BwGPAa0cIx17HorIWv28SFJsEUPaenVQy5HTU2s.jpg', 1, '2023-10-19 05:04:42', '2023-11-12 17:31:44', NULL),
(211, 14, 'C-09', 'Sky Georgete', 'আকাশি জর্জেট কাপড়', '850 Yards', 'Sky', 800, 'pcs', 6, 'product/I1VtMYNxWxZVDXCwiyGHlOhSEZlA7sY7JUVt0aYf.png', 1, '2023-10-19 05:05:31', '2023-11-19 22:50:33', NULL),
(212, 14, 'C-10', 'Firoja Butter', 'ফিরোজা বাটার কাপড়', '400 Yards', 'Firoja', 400, 'pcs', 4, 'product/VhYKSmfdLHKxRdL7ukw8ydY0H0zuyFgMyDDt8e6N.jpg', 1, '2023-10-19 05:08:34', '2023-11-12 17:33:12', NULL),
(213, 14, 'C-11', 'Red Butter', 'লাল বাটার কাপড়', '2700 Yards', 'Red', 2700, 'pcs', 4, 'product/L8eLsyfOVft9huzUmIAqzw5bMgqwY8RZGIv0C1GZ.jpg', 1, '2023-10-19 05:09:06', '2023-11-12 17:33:39', NULL),
(214, 14, 'C-12', 'Golden Butter', 'গোল্ডেন বাটার কাপড়', '3100 Yards', 'Golden', 3100, 'pcs', 4, 'product/3HctzO26Tre3SHnHaBhZvLppHx3yYroF4VVReyzM.jpg', 1, '2023-10-19 05:10:00', '2023-11-12 17:33:56', NULL),
(215, 14, 'C-13', 'Green Butter', 'সবুজ বাটার কাপড়', '550 Yards', 'Green', 550, 'pcs', 4, 'product/id1Aa4bWq4yQL40v5p1MuiX8tIZB0SlGROEAzVIu.jpg', 1, '2023-10-19 05:10:53', '2023-11-12 17:34:12', NULL),
(216, 14, 'C-14', 'Green Butter', 'সবুজ বাটার কাপড়', '650 Yards', 'Green', 4, 'pcs', 4, 'product/TrOuYqNHgzMRF925Wo84oUuJXlrdr4halrr27Bor.png', 1, '2023-10-19 05:11:55', '2023-11-13 19:18:40', NULL),
(217, 14, 'C-15', 'Green Georgette', 'সবুজ জর্জেট কাপড়', '1580 Yards', 'Green', 1580, 'pcs', 6, 'product/x6lSufGTnbU2HXri2hCEtPIScUi2zPHFRfbqzx1i.jpg', 1, '2023-10-19 05:13:58', '2023-11-12 17:35:26', NULL),
(218, 14, 'C-16', 'Parrot Butter', 'টিয়া বাটার কাপড়', '240 Yards', 'Parrot', 240, 'pcs', 4, 'product/l2plPNYAJHjwRKfxdcJQbPOQTu4t6PY3F1RDXGrq.jpg', 1, '2023-10-19 05:14:58', '2023-11-12 17:35:50', NULL),
(219, 14, 'C-17', 'Pink Butter', 'গোলাপী বাটার কাপড়', '1350 Yards', 'Pink', 1350, 'pcs', 4, 'product/2mJ4qcUIwTLCJxHnpEKZS8CS4qWoMhHsJWl9IHAb.jpg', 1, '2023-10-19 05:16:44', '2023-11-12 17:36:12', NULL),
(220, 14, 'C-18', 'Pink Butter', 'রানী গোলাপী বাটার', '750 Yards', 'Dark Pink', 750, 'pcs', 4, 'product/H4kRYKMSmsHR9u2VkaoPGMdy0H7VuH3jRcWMxUlD.jpg', 1, '2023-10-21 05:04:35', '2023-11-12 17:37:28', NULL),
(221, 14, 'C-19', 'Light Pink Butter', 'হালকা গোলাপি বাটার কাপড়', '1920 Yards', 'Light Pink', 1920, 'pcs', 4, 'product/MZkvxYOka7EgQyvsUEnLwHmb5tO8KbKtR6gBv8Yu.jpg', 1, '2023-10-21 05:05:36', '2023-11-12 17:38:03', NULL),
(222, 14, 'C-20', 'Pink Georgette', 'গোলাপী জর্জেট', '900 Yards', 'Pink', 400, 'pcs', 6, 'product/NXLozcsSy8nM9VVcok4E1VXPz0vB9PuOl0P1DHlF.jpg', 1, '2023-10-21 05:06:31', '2023-11-19 22:51:28', NULL),
(223, 14, 'C-21', 'Violet Butter', 'হালকা বেগুনী বাটার কাপড়', '1000 Yards', 'Violet', 4, 'pcs', 4, 'product/seabeaDy9UjRgwDYbc7yCAnYpSZwePY5TJeLEi7N.png', 1, '2023-10-21 05:08:06', '2023-11-12 17:40:08', NULL),
(224, 14, 'C-22', 'Dark Pink Georgette', 'গাঢ়ো গোলাপী জর্জেট', '1860 Yards', 'Dark Pink', 1360, 'pcs', 6, 'product/DY3YL2WHjL1rSRPPQEXh28iOpRfrxxsvnJYHqMx7.jpg', 1, '2023-10-21 05:45:22', '2023-11-19 22:51:28', NULL),
(225, 14, 'C-23', 'Yellow Butter', 'হলুদ বাটার কাপড়', '250 Yads', 'Yellow', 4, 'pcs', 4, 'product/WYCbYLEZZnrs31KmZgxYtLF1YfxNk5shH64ROjom.jpg', 1, '2023-10-21 05:45:59', '2023-11-12 17:41:38', NULL),
(226, 14, 'C-24', 'Turmeric Yellow Butter', 'কাঁচা হলুদ বাটার কাপড়', '420 Yards', 'Turmeric Yellow', 420, 'pcs', 4, 'product/In5gGvXqGockiD7h2c2hMbrnAKkMh6FmfMUdsh7z.jpg', 1, '2023-10-21 05:48:45', '2023-11-12 17:42:24', NULL),
(227, 14, 'C-25', 'Yellow Butter', 'হলুদ বাটার কাপড়', '2250 Yards', 'Yellow', 2250, 'pcs', 4, 'product/a9dprUckSbUqi9LM97YxtN0jgkRC9DiOQPuONNzR.png', 1, '2023-10-21 05:49:23', '2023-11-12 17:43:13', NULL),
(228, 14, 'C-26', 'Ripe Yellow Butter', 'পাকা হলুদ বাটার কাপড়', '250 Yads', 'Ripe Yellow', 250, 'pcs', 4, 'product/LrYfQJKH58q7ZChyWQY4dD42Rpt2axXCYyAzmU25.jpg', 1, '2023-10-21 05:50:42', '2023-11-12 17:43:47', NULL),
(229, 14, 'C-27', 'Orange Butter', 'কমলা বাটার কাপড়', '2250 Yards', 'Orange', 2250, 'pcs', 4, 'product/mmgxww04EQ2xTaCJdDamMBcVM7RAllMZd5oWcjCy.png', 1, '2023-10-21 05:51:20', '2023-11-12 17:44:02', NULL),
(230, 14, 'C-28', 'Dark Ash Butter', 'গাঢ়ো ছাই বাটার', '540 Yards', 'Deep S', 540, 'pcs', 4, 'product/dq6DmUPam2xC93KhI3XG5myujfhPF8zg9OBsEcHS.jpg', 1, '2023-10-21 05:53:37', '2023-11-12 17:45:35', NULL),
(231, 14, 'C-29', 'Maroon Velvet', NULL, '154 Yards', 'Marron', 154, 'pcs', 20, 'product/8e1GdFgJAIrRTiAXyEJv96Lh1cphQyoXUgLyFDWU.jpg', 1, '2023-10-21 05:57:23', '2023-11-14 15:10:32', '2023-11-14 15:10:32'),
(232, 14, 'C-29', 'Maroon Velvet', NULL, '154 Yards', 'Marron', 154, 'pcs', 20, 'product/6Qbezi64X1J94VWBFfSSuO6mZAZgflx3N76Bu7Jh.jpg', 1, '2023-10-21 05:57:25', '2023-10-21 06:38:12', '2023-10-21 06:38:12'),
(233, 14, 'C-30', 'Golden Velvet', 'গোল্ডেন ভেলভেট কাপড়', '112 Yards', 'Golden', 112, 'pcs', 20, 'product/Ifv54czyAJteobHtcoLgBYV6MQC0wXgHjs0rouYy.jpg', 1, '2023-10-21 06:40:07', '2023-11-12 17:46:24', NULL),
(234, 14, 'C-31', 'Orange Velvet', 'কমলা ভেলভেট', '28 Yards', 'Orange', 28, 'pcs', 20, 'product/kJXoDUxOsHV2mtmUMpa22SZ6hZSGQYR7oe7o6TGG.jpg', 1, '2023-10-21 06:41:49', '2023-11-12 17:46:40', NULL),
(235, 14, 'C-32', 'Deep Purple Design Cloth', 'গাঢ়ো বেগুনী নকশা কাপড়', '60 yards', 'Deep Purple', 60, 'pcs', 30, 'product/o8ru7uSVDeov9H3rBf4YospmG7RNWa4LeCXeos79.jpg', 1, '2023-10-21 06:43:17', '2023-11-12 17:47:18', NULL),
(236, 14, 'C-33', 'Paste Design Cloth', 'পেস্ট কালার নকশা কাপড়', '60 yards', 'Paste', 60, 'pcs', 30, 'product/YfB7YfnTwyA7Hb2woIu8J8qT5xQacFzyG4n6IG2s.jpg', 1, '2023-10-21 06:44:32', '2023-11-12 17:47:39', NULL),
(237, 14, 'C-34', 'Golden Design Cloth', 'গোল্ডেন নকশা কাপড়', '60 yards', 'Golden', 30, 'pcs', 30, 'product/C9S5rH8GTAkPNrZmSNucwSAVsaBwVijgfO8XrRBz.jpg', 1, '2023-10-21 06:45:06', '2023-11-12 17:47:58', NULL),
(238, 14, 'C-35', 'Parrot Design Cloth', 'টিয়া কালার নকশা কাপড়', '60 yards', 'Parrot Green', 30, 'pcs', 30, 'product/a449a8ywuNDcxxtZ0OSP279yOWcLakENJqUO78x6.jpg', 1, '2023-10-21 06:45:48', '2023-11-12 17:48:24', NULL),
(239, 14, 'C-36', 'Stage Backdrop Cloth', 'স্টেজ ব্যাকড্রপ কাপড়', '15 feet x 10 feet', 'White', 4, 'pcs', 2000, 'product/nDZIPYSoYctZLcGbVAYesdUaTzYKR1x6jUwWb6wJ.jpg', 1, '2023-10-21 06:47:59', '2023-11-12 15:14:28', NULL),
(240, 14, 'C-37', 'Blue Sequence Cloth', 'নীল সিকুয়েন্স কাপড়', '84 Yards', 'Blue', 84, 'pcs', 30, 'product/N42YE3EDL6kVOGJHYpCpsyTkDR21kjLnPFSNFi4B.jpg', 1, '2023-10-21 06:49:02', '2023-11-12 15:13:56', NULL),
(241, 14, 'C-38', 'Red Sequence Cloth', 'লাল সিকুয়েন্স', '140 Yards', 'Red', 140, 'pcs', 30, 'product/6hAHLnrAQb1YOKClwQAbJMkGJVgxsrts4W8nzShe.jpg', 1, '2023-10-21 06:58:32', '2023-11-12 15:13:18', NULL),
(242, 14, 'C-39', 'Golden Sequence Cloth', 'গোল্ডেন সিকুয়েন্স', '140 Yards', 'Golden', 364, 'pcs', 30, 'product/IqfMp1drn3SXlJAlE722I7SqvR97gESmomawNydX.jpg', 1, '2023-10-21 07:02:36', '2023-11-12 15:12:54', NULL),
(243, 14, 'C-40', 'Rose Golden Sequence Cloth', 'রোজ গোল্ডেন সিকুয়েন্স কাপড়', '140 Yards', 'Rose Golden', 140, 'pcs', 30, 'product/3MqTA2ApfmB5qoZsn0uyL9Madpm5D71dMFDJfJdw.jpg', 1, '2023-10-21 07:03:37', '2023-11-12 15:09:13', NULL),
(244, 14, 'C-41', 'Silver Sequence Cloth', 'সিলভার সিকুয়েন্স কাপড়', '100 Yards', 'Silver', 100, 'pcs', 30, 'product/0S0u03BQZFrChX2eglycePqiZVT75zZp5jOZG3dv.jpg', 1, '2023-10-21 07:04:13', '2023-11-12 15:08:45', NULL),
(245, 14, 'C-42', 'Silver Boquete Cloth', 'সিলভার বুকেট কাপড়', '100 Yards', 'Silver', 100, 'pcs', 10, 'product/YyMCYcaNiVVM7AJerNk02iQgQzFrjB2uZd6Kba96.jpg', 1, '2023-10-21 07:05:16', '2023-11-12 15:08:25', NULL),
(246, 14, 'C-43', 'Golden Thick Tissue Cloth', 'গোল্ডেন মোট টিস্যু কাপড়', '220 Yards', 'Golden', 220, 'pcs', 10, 'product/cxv4sG0fKUrd1qW7dkDD4HRV6LahZwJR4lzDLg1J.jpg', 1, '2023-10-21 07:06:15', '2023-11-12 15:07:52', NULL),
(247, 14, 'C-44', 'Golden Curtain', 'গোল্ডেন সার্টিন', NULL, 'Golden', 87, 'pcs', 200, 'product/JjzJk7Znq47qKTrSSAK6mBFuUYjqdpKCxxqaVWMj.png', 1, '2023-10-21 07:07:44', '2023-11-12 15:06:25', NULL),
(248, 14, 'C-45', 'White Curtain', 'সাদা সার্টিন', NULL, 'White', 80, 'pcs', 200, 'product/kW4tnvJjyMdYYtlHlHlCDQsbPqzKntndBpcThgR2.png', 1, '2023-10-21 07:21:48', '2023-11-12 15:06:05', NULL),
(249, 14, 'C-46', 'Black Curtain', 'কালো সার্টিন', NULL, 'Black', 83, 'pcs', 200, 'product/TP6wDPHmbALMJaraIvY39grLIiSlPwPUjkwOh7G3.png', 1, '2023-10-21 07:22:10', '2023-11-12 15:05:49', NULL),
(250, 12, 'CR-01', 'White Chair Cover', 'সাদা চেয়ার বো', NULL, 'White', 115, 'pcs', 20, 'product/JKXOHhPHAhJLvFEM0NM1UKCAjL1S4UhrrgSivy9J.jpg', 1, '2023-10-21 08:14:00', '2023-11-11 15:02:43', NULL),
(251, 12, 'CR-02', 'Jute Balco Chair Bow', 'পাটের বেলকো চেয়ার বো', NULL, 'Jute', 115, 'pcs', 20, 'product/8cXMaKZOBDQRwtlq9hzqQ5FddSUNCuH8BajGifa2.jpg', 1, '2023-10-21 08:15:22', '2023-11-11 15:07:22', NULL),
(252, 12, 'CR-03', 'Piece Color Chair Tie', 'পিস কালার চেয়ার বো', NULL, 'Piece', 550, 'pcs', 15, 'product/7wkiXWa2Ic0M7UL21avYMzRp996mh1jvBuz132mq.jpg', 1, '2023-10-21 08:16:06', '2023-11-11 15:07:49', NULL),
(253, 12, 'CR-04', 'Purple Color Chair Tie', 'পার্পেল কালার চেয়ার টাই', NULL, 'Purple', 750, 'pcs', 15, 'product/jn3ZNEcQykS7tu4hMk1mGyc8QsYTBnjkIHyENyZa.jpg', 1, '2023-10-21 08:17:48', '2023-11-11 15:08:26', NULL),
(254, 12, 'CR-05', 'Red Color Chair Tie', 'লাল কালার চেয়ার টাই', NULL, 'Red', 780, 'pcs', 15, 'product/sVgJTc5moLJeEcXQYVHMPdodcpEHb8kfNCC6l96L.jpg', 1, '2023-10-21 08:18:26', '2023-11-11 15:08:56', NULL),
(255, 12, 'CR-06', 'Sky Color Chair Tie', 'আকাশি কালার চেয়ার টাই', NULL, 'Sky', 748, 'pcs', 15, 'product/70SUNqIcHmtbPFCjZBzX1bjUvtbYCwQcSltnsGD1.jpg', 1, '2023-10-21 08:21:40', '2023-11-11 15:09:40', NULL),
(256, 12, 'CR-07', 'Silver Boquete Chair Bow', 'সিলভার চেয়ার বো', NULL, 'Silver', 1675, 'pcs', 10, 'product/W5wgpK3zM30VJZUaygxZVelzVU34npSuCy2bFqfZ.jpg', 1, '2023-10-21 08:24:15', '2023-11-11 15:31:21', NULL),
(257, 12, 'CR-08', 'Golden Boquete Chair Bow', 'গোল্ডেন চেয়ার বো', NULL, 'Golden', 400, 'pcs', 20, 'product/UfdCARCgo0FRQpnMOrn7AEribjuQAo4rAA8p4O6J.jpg', 1, '2023-10-21 08:25:23', '2023-11-11 15:31:43', NULL),
(258, 12, 'CR-09', 'Blue Lace Chair Bow', 'নীল চেয়ার বো', NULL, 'Blue', 210, 'pcs', 20, 'product/Moss7lLYES9GZ4E3rvxU1Er4IiMhYTaWbLKijswb.jpg', 1, '2023-10-21 08:25:58', '2023-11-11 15:32:04', NULL),
(259, 12, 'CR-10', 'Sequence Chair Bow', 'সিকোয়েন্স চেয়ার বো', NULL, 'White Golden', 950, 'pcs', 20, 'product/knn792CgmTdvDWdqI7uVGgzE7jUjZbWMQAyqW51h.jpg', 1, '2023-10-21 08:26:48', '2023-11-09 16:00:08', NULL),
(260, 12, 'CR-11', 'Green Color Chair Bow', 'সবুজ চেয়ার বো', NULL, 'Green', 331, 'pcs', 5, 'product/pIsHh117eWsWdWHaNpC1HEVAxrA65SDzGoXY9x2E.jpg', 1, '2023-10-21 08:27:18', '2023-11-11 16:04:18', NULL);
INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `name_bangla`, `dimension`, `color`, `stock`, `measurement_unit`, `rental_price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(261, 12, 'CR-12', 'Red Color Chair Bow', 'লাল চেয়ার বো', NULL, 'Red', 822, 'pcs', 5, 'product/Gg1O0IvFYFJ1bSXDt9Kt7MebIx5btR5R2dGOLC0m.jpg', 1, '2023-10-21 08:27:40', '2023-11-11 15:32:52', NULL),
(262, 12, 'CR-13', 'White Color Chair Bow', 'সাদা চেয়ার বো', NULL, 'White', 330, 'pcs', 5, 'product/udkwPGc67menz4laA8gZSImKs4pEB3wzLHk4eOsN.jpg', 1, '2023-10-21 08:28:07', '2023-11-11 15:33:15', NULL),
(263, 12, 'CR-14', 'Blue Color Chair Bow', 'নীল চেয়ার বো', NULL, 'Blue', 370, 'pcs', 5, 'product/SSVLvABqvSlEzi5inEh3oLJtFofTn1jA4v8BQGv6.jpg', 1, '2023-10-21 08:28:27', '2023-11-11 15:33:56', NULL),
(264, 12, 'CR-15', 'Pink Color Chair Bow', 'গোলাপি চেয়ার বো', NULL, 'Pink', 860, 'pcs', 5, 'product/aFqNEN5ZgMxdW7hZz0y4WRCs0ia6LIivFajFnPdW.jpg', 1, '2023-10-21 08:28:51', '2023-11-11 15:34:16', NULL),
(265, 12, 'CR-16', 'Golden Color Chair Bow', 'গোল্ডেন চেয়ার বো', NULL, 'Golden', 1030, 'pcs', 5, 'product/WHj3wPGRWzokrBMNljpidX0xcQx6Qr96hrSscxRu.jpg', 1, '2023-10-21 08:29:13', '2023-11-11 15:34:37', NULL),
(266, 12, 'CR-17', 'Firoza Color Chair Bow', 'ফিরোজা চেয়ার বো', NULL, 'Firoja', 280, 'pcs', 5, 'product/JkZRDKPqeWIdJ8O1jdM9EfqrRME6ZGYd5hUdrOVm.jpg', 1, '2023-10-21 08:29:48', '2023-11-11 15:34:55', NULL),
(267, 12, 'CR-18', 'White Ball Print Chair Bow', 'সাদা বল চেয়ার বো', NULL, 'Black', 407, 'pcs', 5, 'product/ozDg6Qdb4aJc3cJKyE3M4Ow69NBoNpeMgTqcVRhJ.jpg', 1, '2023-10-21 08:30:32', '2023-11-11 15:35:22', NULL),
(268, 12, 'CR-19', 'Black Ball Print Chair Bow', 'কালো বল চেয়ার বো', NULL, 'White', 350, 'pcs', 5, 'product/jeiFowiqP5bbrczndDliK5CYbikVWh7dF9mulGqv.jpg', 1, '2023-10-21 08:48:50', '2023-11-11 15:35:45', NULL),
(269, 12, 'CR-20', 'Green Chunri Chair Bow', 'সবুজ চুনরি চেয়ার বো', NULL, 'Light Green', 69, 'pcs', 5, 'product/pVw4tbzX640gaLPcLDOpLeerbl15YdzCEAFQT0w0.jpg', 1, '2023-10-21 08:49:52', '2023-11-11 15:36:29', NULL),
(270, 12, 'CR-21', 'Orange Chunri Chair Bow', 'কমলা চুনরি চেয়ার বো', NULL, 'Orange', 79, 'pcs', 5, 'product/ibpFG2L0g3xFbCIj9GGsES2QO81maobe9yiHWMsx.jpg', 1, '2023-10-21 08:50:23', '2023-11-11 15:36:54', NULL),
(271, 12, 'CR-22', 'Yellow Chunri Chair Bow', 'হলুদ চুনরি চেয়ার বো', NULL, 'Yellow', 57, 'pcs', 5, 'product/ggrZuWKKsfZj1pKJvSAH4Apn34pTe2QZt5op4oOp.jpg', 1, '2023-10-21 08:50:46', '2023-11-11 15:37:16', NULL),
(272, 12, 'CR-23', 'Red Chunri', 'লাল চুনরি', NULL, 'Red', 88, 'pcs', 5, 'product/EjX8Lg8f6JE23KLPZ0YNTJfixDplAOk2HVuXpD4u.png', 1, '2023-10-21 08:51:17', '2023-11-11 16:52:47', NULL),
(273, 12, 'CR-24', 'Green Dhamas', 'সবুজ ধামাস', NULL, 'Green', 350, 'pcs', 5, 'product/cEZhmvkSYDs3IHlDYyE8nlx5rtoPV7uZ8OXBS607.png', 1, '2023-10-21 08:52:07', '2023-11-11 16:53:05', NULL),
(274, 12, 'CR-25', 'Green Tissue Lace Bow', 'সবুজ টিস্যু লেস বো', NULL, 'Green', 500, 'pcs', 5, 'product/wvRWAEgEHRJN7xXfBKsOuE0aq24ftkRDUGuvBrmG.png', 1, '2023-10-21 08:52:58', '2023-11-11 16:53:40', NULL),
(275, 12, 'CR-26', 'Cotton Coffey Color Chair Bow', 'সুতির কফি কালার চেয়ার বো', NULL, 'Coffey', 250, 'pcs', 5, 'product/viAF5BjNXRQWiloXsXawb4Bj7sr2oWfpwnybkjlR.png', 1, '2023-10-21 08:53:52', '2023-11-11 16:54:09', NULL),
(276, 12, 'CR-27', 'Black Georgette', 'কালো জর্জেট', NULL, 'Black', 46, 'pcs', 5, 'product/RkOTQAxEN4tNPZSobvEtOVocwjpJoebyod7SSOMj.png', 1, '2023-10-21 08:54:32', '2023-11-11 16:54:27', NULL),
(277, 12, 'CR-28', 'Marking Velco Tie', 'মার্কিং ভেলকো টাই', NULL, 'White', 330, 'pcs', 10, 'product/e005mcje4jtmIlCDP0HpNfyRDNnbPyAlIGxtiYBt.jpg', 1, '2023-10-21 08:55:12', '2023-11-11 16:55:04', NULL),
(278, 12, 'CR-29', 'Piece Butter Chair Bow', 'পিস বাটার চেয়ার বো', NULL, 'Piece', 250, 'pcs', 5, 'product/Z6haizFa2JlIJQtwQVN3PTa8DQQFKzJY4bfsqHsx.png', 1, '2023-10-21 08:55:35', '2023-11-11 16:55:25', NULL),
(279, 26, 'TR-01', 'Red Table Runner', 'লাল টেবিল রানার', NULL, 'Red', 14, 'pcs', 100, 'product/VPxaNTDBjRv1wEUlNyMAKRj3mulHGQI6SNqTNMxe.jpg', 1, '2023-10-21 09:07:06', '2023-11-13 15:36:56', NULL),
(280, 26, 'TR-02', 'Blue Table Runner', 'নীল টেবিল রানার', NULL, 'Blue', 8, 'pcs', 100, 'product/3PNn5CDSBRJzQb1u88v1ZiBWxHZ6d8Bi0tl9HrGw.jpg', 1, '2023-10-21 09:07:39', '2023-11-13 15:37:17', NULL),
(281, 26, 'TR-03', 'Purple Table Runner', 'বেগুনী টেবিল রানার', NULL, 'Purple', 8, 'pcs', 100, 'product/CBYd2a4PRXe6iJ7rRnowA11lwlPIRaisaasW6ZWU.jpg', 1, '2023-10-21 09:08:07', '2023-11-13 15:37:38', NULL),
(282, 26, 'TR-04', 'Green Table Runner', 'সবুজ টেবিল রানার', NULL, 'Green', 10, 'pcs', 100, 'product/3fVX3MWK4KNmzGqOpnZhrhDTVKHKoB3Vc6yOfN3g.jpg', 1, '2023-10-21 09:08:49', '2023-11-13 15:37:58', NULL),
(283, 26, 'TR-05', 'Golden Table Runner', 'গোল্ডেন টেবিল রানার', NULL, 'Golden', 49, 'pcs', 100, 'product/SmfuGrl094LcYW3v1lorIgfbVo41agtT6O0FxbeM.jpg', 1, '2023-10-21 09:09:40', '2023-11-13 15:38:22', NULL),
(284, 26, 'TR-06', 'Firoja Certin Table Runner', 'ফিরোজা সার্টিন টেবিল রানার', NULL, 'Firoja', 7, 'pcs', 100, 'product/f0UX80AMfifAyh3JsHp8SJ2EhbqZaMdPjvMujWd3.jpg', 1, '2023-10-21 09:10:37', '2023-11-13 15:36:18', NULL),
(285, 26, 'TR-07', 'Orange Table Runner', 'কমলা টেবিল রানার', NULL, 'Orange', 26, 'pcs', 100, 'product/FHCg52TYCBLUjbIBHKDoIREoJdsrQoCPrJO1SOwP.jpg', 1, '2023-10-21 09:11:03', '2023-11-13 15:35:42', NULL),
(286, 26, 'TR-08', 'Maroon Table Runner', 'মেরুন টেবিল রানার', NULL, 'Marron', 10, 'pcs', 100, 'product/ykhkN0r3xl4xiawdRe20Mj0ci2xcgrbUfW2OPEij.jpg', 1, '2023-10-21 09:11:27', '2023-11-13 15:34:15', NULL),
(287, 26, 'TR-09', 'Yellow Table Runner', 'হলুদ টেবিল রানার', NULL, 'Yellow', 8, 'pcs', 100, 'product/osy3nim3zlTvz9ViVZ4yHGHvrkkZvFu2O5nshx8X.jpg', 1, '2023-10-21 09:11:48', '2023-11-13 15:33:47', NULL),
(288, 26, 'TR-10', 'Dark Yellow Table Runner', 'গাঢ়ো হলুদ টেবিল রানার', NULL, 'Orange', 26, 'pcs', 100, 'product/4PXmYVQM5O6Jt2UBk5FNzU6A1SXzSpEYeXEh2HSL.jpg', 1, '2023-10-21 09:13:53', '2023-11-13 15:35:11', NULL),
(289, 27, 'TTC-01', 'Sequence Table Top', 'সিকোয়েন্স টেবিল টপ', NULL, 'Rose Golden', 32, 'pcs', 300, 'product/n2kc08WY5iew70fe0LPdD8IN2iM2agOAAo5K0Tql.jpg', 1, '2023-10-21 09:58:48', '2023-11-09 15:59:20', NULL),
(290, 27, 'TTC-02', 'Golden Net Table Top', 'গোল্ডেল নেট টেবিল টপ', NULL, 'Golden', 45, 'pcs', 100, 'product/YJJiYQcTbBSjeWwKBRFhBDm29fKyVM1gdvKA6Pve.jpg', 1, '2023-10-21 10:01:08', '2023-11-11 16:57:08', NULL),
(291, 27, 'TTC-03', 'Cream Net Table Top', 'ক্রিম নেট টেবিল টপ', NULL, 'Cream', 18, 'pcs', 100, 'product/JTj5pmrVkDcWgrY5voMSYc3V4dFkxulusSEPAPxE.jpg', 1, '2023-10-21 10:02:15', '2023-11-11 16:57:26', NULL),
(292, 27, 'TTC-04', 'White Net Table Top', 'সাদা নেট টেবিল টপ', NULL, 'White', 88, 'pcs', 100, 'product/wihHdzSe2lVWegPdC2N4I3zlo6GoGnoCoiYT391s.jpg', 1, '2023-10-21 10:02:49', '2023-11-11 16:59:34', NULL),
(293, 27, 'TTC-06', 'Black Ball Table Top', 'কালো বল টেবিল টপ', NULL, 'White', 36, 'pcs', 100, 'product/v6XoDrPlqgbgVq5rP09jJXVlQiiJOa9sv33okBAs.jpg', 1, '2023-10-21 10:03:37', '2023-11-12 17:30:21', NULL),
(294, 27, 'TTC-07', 'White Ball Table Top', NULL, NULL, 'Black', 19, 'pcs', 100, 'product/ALNruUdbknWM4dUcHhx5cDW9TerqKjU8s3HGBWYi.jpg', 1, '2023-10-21 10:03:57', '2023-10-27 15:27:03', NULL),
(295, 27, 'TTC-08', 'White Dhamas Print Table Top', 'সাদা ধামাস প্রিন্ট টেবিল টপ', NULL, 'White', 50, 'pcs', 100, 'product/cjt3zOUamreykrPA0cKP3hyI6e2Lj8rYT8igB7fY.jpg', 1, '2023-10-21 10:04:29', '2023-11-12 17:31:14', NULL),
(296, 27, 'TT-09', 'Mud Color Dhamas Print Table Top', NULL, NULL, 'Mud Color', 25, 'pcs', 100, 'product/rxsgjoXhrc8x9vZZlPaoxtkeIrDDLVdYPLjdYhNN.jpg', 1, '2023-10-21 10:05:52', '2023-10-27 15:28:39', '2023-10-27 15:28:39'),
(297, 27, 'TTC-09', 'Mud Color Dhamas Print Table Top', NULL, NULL, 'Mud Color', 25, 'pcs', 100, 'product/0qw9mmRvKnhumxWodwst2DntJxYqzz8TScgvRVzA.jpg', 1, '2023-10-21 10:05:53', '2023-10-27 15:28:19', NULL),
(298, 27, 'TTC-10', 'Red  Dhamas Print Table Top', NULL, NULL, 'Red', 19, 'pcs', 100, 'product/CvbMT7Y1zEElvaw0It3F5gDxZcMb40xiy3uSiDme.jpg', 1, '2023-10-21 10:06:19', '2023-10-27 15:28:55', NULL),
(299, 27, 'TTC-11', 'Yellow Cotton Print Table Top', NULL, NULL, 'Yellow', 21, 'pcs', 100, 'product/k1fAD9n1KSlzU00raO0MZHS9TG2fYWDEnAWNjIaF.jpg', 1, '2023-10-21 10:09:29', '2023-10-27 15:29:23', NULL),
(300, 27, 'TTC-12', 'Orange Color Dhamas Print Table Top', NULL, NULL, 'Orange', 8, 'pcs', 100, 'product/luctjjrlKWsMQuOY9Hqv649FTGbE5H5YxmxQMSrV.jpg', 1, '2023-10-21 10:10:19', '2023-10-27 15:29:40', NULL),
(301, 27, 'TTC-13', 'Green Color Dhamas Print Table Top', NULL, NULL, 'Green', 36, 'pcs', 100, 'product/5CBJfQE4oh9Ivei6ZA4TK0NkSjIxgAPTNlWysLHj.jpg', 1, '2023-10-21 10:25:48', '2023-10-27 15:29:55', NULL),
(302, 27, 'TTC-14', 'Red Certin Table Top', NULL, NULL, 'Red', 22, 'pcs', 100, 'product/cDCjNfWSNd1eCnvdYtXNkZKppOAyaG7Rb2gNuvhM.jpg', 1, '2023-10-21 10:26:29', '2023-10-27 15:30:16', NULL),
(303, 27, 'TTC-16', 'Golden Certin Table Top', NULL, NULL, 'Golden', 65, 'pcs', 100, 'product/2xZMvFjDg3WBn07DuaAEeWNZCWo8QASpAn70Jje4.jpg', 1, '2023-10-21 10:27:23', '2023-10-27 15:30:40', NULL),
(304, 27, 'TT-16', 'Orange Certin Table Top', NULL, NULL, 'Orange', 10, 'pcs', 50, 'product/yEa9wbsAKeTUWhQCqnMAnNKUHdjeKx40iBuPAVth.jpg', 1, '2023-10-21 10:28:49', '2023-10-27 16:33:09', '2023-10-27 16:33:09'),
(305, 27, 'TTC-17', 'Violet Certin Table Top', NULL, NULL, 'Violet', 34, 'pcs', 50, 'product/ExfWXVQDde1sBaHITVdq86fetNNRxITTmYPsz7l4.jpg', 1, '2023-10-21 10:29:29', '2023-10-27 15:31:07', NULL),
(306, 27, 'TTC-18', 'Deep Orange Certin Table Top', NULL, NULL, 'Deep Orange', 12, 'pcs', 50, 'product/KDGTPRlkfwQbsYtXEKzeCEuAXnVSGYoemjICLtLY.jpg', 1, '2023-10-21 10:30:24', '2023-10-27 15:31:29', NULL),
(307, 27, 'TTC-19', 'White Certin Table Top', NULL, NULL, 'White', 72, 'pcs', 50, 'product/zbL2jpLnVva7pAUYCgvC3ohsbxjhZT6qVj5MrMwX.jpg', 1, '2023-10-21 10:30:54', '2023-10-27 15:31:50', NULL),
(308, 27, 'TTC-20', 'Coffey Certin Table Top', NULL, NULL, 'Coffey', 25, 'pcs', 50, 'product/ZecZ0X3D6av0rBUwdYi7CgPojLYyZouIzIZHe6Rs.jpg', 1, '2023-10-21 10:31:26', '2023-10-27 15:32:06', NULL),
(309, 27, 'TTC-21', 'Pink Certin Table Top', NULL, NULL, 'Pink', 60, 'pcs', 50, 'product/8KEi4czvktxWiX8ZUbyGHyAIQ1fmZLIPuGO3UYiz.jpg', 1, '2023-10-21 10:32:03', '2023-10-27 15:32:27', NULL),
(310, 27, 'TTC-22', 'Green Certin Table Top', NULL, NULL, 'Green', 8, 'pcs', 50, 'product/nP1gk45OC8QbuJyqfk6fWGa1y7w8lTxxv3IGb7eX.jpg', 1, '2023-10-21 10:32:50', '2023-10-27 15:32:47', NULL),
(311, 27, 'TTC-23a', 'White Cotton Table Top', NULL, 'Large', 'White', 12, 'pcs', 500, 'product/RPFDqHLvm0TVEADsUYeHYlIwYWc9RRuE8COoP7D1.jpg', 1, '2023-10-21 10:34:38', '2023-10-27 15:33:52', NULL),
(312, 27, 'TTC-23b', 'White Cotton Table Top', NULL, 'Medium', 'White', 16, 'pcs', 300, 'product/2kTYtMWdpFhVvVEuXq52NP8iAZMja0SNH79PWK7p.jpg', 1, '2023-10-21 10:35:09', '2023-10-27 15:33:38', NULL),
(313, 27, 'TTC-23c', 'White Cotton Table Top', NULL, 'Small', 'White', 9, 'pcs', 100, 'product/mI5bJlpLN0S99PJ2GkajUZ97jvDY0WpFOfLrqG7t.jpg', 1, '2023-10-21 10:35:30', '2023-10-27 15:33:18', NULL),
(314, 27, 'TTC-24', 'Red Green Table Top', 'লাল সবুজ টেবিল টপ', NULL, 'Red & Green', 17, 'pcs', 100, 'product/ZLwCXU6oXFRTPwJkoKKbWgBqCYwTG8RpI9H3KqqH.jpg', 1, '2023-10-21 10:36:23', '2023-11-11 16:56:42', NULL),
(315, 20, 'LT-01', 'Stick Light', '২১ স্টিক লাইট', NULL, 'Customize', 10, 'pcs', 1500, 'product/DCUf8mXCp48pwzWI03OvjuiSH5syn1NTLXecskWJ.jpg', 1, '2023-10-22 03:28:15', '2023-11-12 17:49:45', NULL),
(316, 20, 'LT-02', 'Leaf Stick Light Walkway', 'পাতা স্টিক লাইট ওয়াকওয়ে', NULL, 'Customize', 20, 'pcs', 1500, 'product/P86Hja9Ofkv5X1zKSOIdTWOEfpsvSG6guxIUH56m.jpg', 1, '2023-10-22 03:30:27', '2023-11-12 17:50:27', NULL),
(317, 20, 'LT-03', 'Patch Stick Light Walkway', 'প্যাঁচ স্টিক লাইট ওয়াকওয়ে', NULL, NULL, 12, 'pcs', 500, 'product/CSRzWdSFiD9JdEzkXwCgO5SppIbqkRyZI030c0rW.jpg', 1, '2023-10-22 03:31:46', '2023-11-12 17:51:01', NULL),
(318, 20, 'LT-04', 'Bulb', 'বাল্ব', NULL, NULL, 700, 'pcs', 20, 'product/teY8eog0pmODGXL7sOnhlsX29nSsoKitR83tdCnj.jpg', 1, '2023-10-22 03:33:20', '2023-11-12 17:51:33', NULL),
(319, 20, 'LT-05', 'Round Bulb', 'গোল বাল্ব', 'Big-70 pcs, Small-258 pcs', NULL, 328, 'pcs', 50, 'product/AOa1O7xCHo9daSJcZN7IzedvtI6mR6t2sVS70MUg.jpg', 1, '2023-10-22 04:22:22', '2023-11-12 17:52:02', NULL),
(320, 20, 'LT-06', 'Star Cloth', 'স্টার ক্লোথ', 'L-20 feet x W-30 feet', 'Black', 9, 'pcs', 2000, 'product/aMGhEtvpPvOH16Nb2YN32fVXaCI22jIoA94iujf4.jpg', 1, '2023-10-22 04:47:02', '2023-11-09 15:15:43', NULL),
(321, 20, 'LT-07', 'Shower Light', 'শাওয়ার লাইট', 'Round Size & S Size', NULL, 5, 'pcs', 10000, 'product/OquhWyvsP8Og7Vl2aJ7SKx7QMq0ecayD0pyBkxev.jpg', 1, '2023-10-22 05:06:15', '2023-11-09 15:15:17', NULL),
(322, 20, 'LT-08', 'Gate Setup Lighting', 'পাতা ওয়াকওেয় লাইট', NULL, NULL, 1000, 'pcs', 1000, 'product/5E8hhDNQAveZ1ZZqfTNNJ0Lp0vBQ42OXCQZpRAnE.jpg', 1, '2023-10-22 05:07:57', '2023-11-09 15:14:52', NULL),
(323, 20, 'LT-09', 'Vertical Stick Light', '11 স্টিক লাইট', NULL, NULL, 10, 'pcs', 1000, 'product/fbNFbmQMV5oZfZIruuGcaY98rk85iXuohzb1mpfE.jpg', 1, '2023-10-22 05:09:10', '2023-11-09 15:11:45', NULL),
(324, 20, 'LT-10', 'Trass Light Stick', 'ট্রাসের স্টিক লাইট', NULL, NULL, 4, 'pcs', 2000, 'product/1beXg0uX206Wd3H4cPA0XzkxPidENwzv2OuBz3qD.png', 1, '2023-10-22 05:11:03', '2023-11-09 15:10:44', NULL),
(325, 20, 'LT-11', 'Corona Light', 'করোনা লাইট', NULL, NULL, 50, 'pcs', 200, 'product/MWYAIqfcCM8icFKWa49DCRc1Z1LPaJBdber63Kt4.jpg', 1, '2023-10-22 05:12:39', '2023-11-09 15:10:14', NULL),
(326, 20, 'LT-12', 'Bird Light', 'পাখি লাইট', NULL, NULL, 60, 'pcs', 200, 'product/YmgPg2Zvox5Ak3cxEImzEFm1QSFKdnrvVMECpCJ9.jpg', 1, '2023-10-22 05:13:14', '2023-11-09 15:09:53', NULL),
(327, 20, 'LT-13', 'Garden Lamp', 'গার্ডেন ল্যাম্প পোস্ট', NULL, NULL, 6, 'pcs', 2000, 'product/B30IUGErMIh52mjg0hfME11rREr0kyp2Pv6gNJn7.jpg', 1, '2023-10-22 05:13:53', '2023-11-09 15:09:30', NULL),
(328, 28, 'UM-01', 'Rajsthan Umbrella', 'রাজস্থান ছাতা', NULL, NULL, 20, 'pcs', 200, 'product/uHd2tqIEoZc9olbuuwdOeLEDDBEo9aNVEsJV3iKB.jpg', 1, '2023-10-22 05:17:58', '2023-11-09 15:19:18', NULL),
(329, 28, 'UM-02', 'Printed Umbrella', 'প্রিন্ট ছাতা', NULL, NULL, 70, 'pcs', 100, 'product/yaqTFYgsKLdRwfTtRAUHXqnUDHNQSWEjbjPIyVcZ.png', 1, '2023-10-22 05:18:30', '2023-11-09 15:18:58', NULL),
(330, 28, 'UM-03', 'Kashmiri Umbrella', 'কাশমেরি ছাতা', NULL, NULL, 3, 'pcs', 1000, 'product/Ti8DseQkCJOpqdRqLWh6DGz1nMEWENA9qaXEJCRC.png', 1, '2023-10-22 05:19:15', '2023-11-09 15:18:28', NULL),
(331, 24, 'S-01', 'VIP Sofa White', 'সাদা ভিআইপি সোফা', '5 Sitter', 'White', 1, 'pcs', 10000, 'product/jLBlyMRDDd6d8QYuP3w2RfemtUdoM9eQ1OxwsUrm.jpg', 1, '2023-10-22 05:24:04', '2023-11-12 17:53:53', NULL),
(332, 24, 'S-02', 'VIP Oval Sofa Velvet', 'ভিআইপি ওভাল সোফা', '5 Sitter', 'Violet', 1, 'pcs', 5000, 'product/z9aNN6vwt5g5N92jvdA0gsCcn21rpWLbUQR8DkfL.jpg', 1, '2023-10-22 05:25:19', '2023-11-12 17:54:29', NULL),
(333, 24, 'S-03', 'VIP Oval Sofa Velvet', 'ভিআইপি ওভাল সোফা', NULL, 'Pink', 1, 'pcs', 5000, 'product/XkKgkTqCdNIv3M20zDac4iUbQ3tev0xSc8NtNvMN.jpg', 1, '2023-10-22 05:26:21', '2023-11-12 17:55:07', NULL),
(334, 24, 'S-04', 'VIP Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '5 Sitter', 'Pink', 1, 'pcs', 5000, 'product/2rC9c37icKF62CPSjOie5qWgv37uyvz6LPeM3ebE.jpg', 1, '2023-10-22 05:27:12', '2023-11-12 18:02:24', NULL),
(335, 24, 'S-05', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', NULL, 'Dark Pink', 1, 'pcs', 5000, 'product/zYgGOpxLR4zDyg3ttMbko8xiiqfTYwRV2i6gG4Bv.jpg', 1, '2023-10-22 05:29:32', '2023-11-12 18:02:44', NULL),
(336, 24, 'S-06', 'VIP Oval Sofa', 'ভিআইপি ওভাল সোফা', NULL, 'Off White', 1, 'pcs', 3000, 'product/jIPsIix0oG30RndnuUSehZZmm70om8xCh8TDpYNH.jpg', 1, '2023-10-22 05:30:14', '2023-11-12 18:03:02', NULL),
(337, 24, 'S-07', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', '5 Sitter', 'Light Golden', 1, 'pcs', 5000, 'product/Ibpe2oksM8uRFiDVGDlB9qbSPkCu4xHmd0mLFXC1.jpg', 1, '2023-10-22 05:32:13', '2023-11-12 18:03:25', NULL),
(338, 24, 'S-08', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', '5 Sitter', 'Golden', 1, 'pcs', 5000, 'product/cEqDJlIaD4COGD4XCbvwZ2V36CeADWd8f0sUQhyM.jpg', 1, '2023-10-22 05:33:49', '2023-11-12 18:03:58', NULL),
(339, 24, 'S-09', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', '5 Sitter', 'Light Golden', 1, 'pcs', 5000, 'product/m9PIRpbiLWUnfRQ79TRQfohM7V0bUkdT6VwjoAwq.jpg', 1, '2023-10-22 05:34:45', '2023-11-10 18:59:14', NULL),
(340, 24, 'S-10', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', '5 Sitter', 'Golden', 1, 'pcs', 4000, 'product/8CTdJ2scr2hthKQIrRSHHdU7RSavtT26y8wZdQfw.jpg', 1, '2023-10-22 05:36:33', '2023-11-12 18:04:54', NULL),
(341, 24, 'S-11', 'VIP Velvet Sofa', 'ভিআইপি ভেলভেট সোফা', '5 Sitter', 'Off White', 1, 'pcs', 4000, 'product/AQ9ARPgehFdTc5s89hUZUMzw39RjIacFcrGZ2pNf.jpg', 1, '2023-10-22 05:37:13', '2023-11-12 18:04:35', NULL),
(342, 24, 'S-12', 'VIP Oval Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '4 Sitter', 'Off White', 1, 'pcs', 5000, 'product/M7MXnHQ58tHnaAXBSjjzdgWQV2FV3dZwq3lTcK5j.jpg', 1, '2023-10-22 05:38:15', '2023-11-12 18:05:20', NULL),
(343, 24, 'S-13', 'VIP Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '8 Sitter', 'White', 1, 'pcs', 5000, 'product/VfTnanz73yQto0FFNSv1d0MbxYNSDTnGyNa39Lzc.jpg', 1, '2023-10-22 05:39:19', '2023-11-12 18:05:45', NULL),
(344, 24, 'S-14', 'VIP Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '5 Sitter', 'Green', 1, 'pcs', 3000, 'product/Nqtp2F9sHqxQjXOY7XWKFdHCKBA9x25XLfErGvLr.jpg', 1, '2023-10-22 05:40:43', '2023-11-10 19:01:20', NULL),
(345, 24, 'S-15', 'VIP Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '5 Sitter', 'Maroon', 1, 'pcs', 3000, 'product/f2Lfazpo3slbn2BkoGWF353XBzZQAaSY4LK4AYJZ.jpg', 1, '2023-10-22 05:41:42', '2023-11-10 19:01:39', NULL),
(346, 24, 'S-16', 'VIP Round Velvet Sofa', 'ভিআইপি রাউন্ড ভেলভেট সোফা', '5 Sitter', 'Brown', 1, 'pcs', 2000, 'product/qpSqu0KwCuuWFIpoP3Z8BIYDCKhGonXo0qXfD5Mc.jpg', 1, '2023-10-22 05:42:23', '2023-11-10 19:01:57', NULL),
(347, 24, 'S-17', 'Lounge Sofa', 'লাউঞ্চ সোফা', '8 Sitter', 'Off White', 4, 'pcs', 2000, 'product/pcJLVo5MKmKiKFY2iqN1nPFuaYyda137OJrOYUv6.jpg', 1, '2023-10-22 05:43:57', '2023-11-10 19:02:12', NULL),
(348, 24, 'S-18', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Light Brown', 1, 'pcs', 4000, 'product/kvRgOyG06XDc503lOeVvX67J1GuwSDctNAcKBPVu.jpg', 1, '2023-10-22 05:48:26', '2023-11-10 19:02:31', NULL),
(349, 24, 'S-19', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Green', 1, 'pcs', 3000, 'product/DvYB1zB4vFncuIrQ4zQf0m0Q6neLsKCIr3qAEtkf.jpg', 1, '2023-10-22 05:49:38', '2023-11-10 19:02:48', NULL),
(350, 24, 'S-20', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Magenta', 1, 'pcs', 3000, 'product/PxEm9i48eIjYzhX0V9eFlgLu2pgcUjllWtrXhg3i.jpg', 1, '2023-10-22 05:51:04', '2023-11-10 19:03:04', NULL),
(351, 24, 'S-21', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', NULL, 'Navy Blue', 1, 'pcs', 3000, 'product/RtC8nNQunoYBiF0daT9EpZwGAFoW8OQKlSeVveKE.jpg', 1, '2023-10-22 06:15:33', '2023-11-10 19:03:21', NULL),
(352, 24, 'S-22', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Light Blue', 1, 'pcs', 3000, 'product/rDAzlGBa9piSg8GQ70UITazo8dll9cPlbUsoNOJe.jpg', 1, '2023-10-22 06:16:15', '2023-11-10 19:03:36', NULL),
(353, 24, 'S-23', 'VIP Box Sofa', 'ভিআইপি ৫ সিটের বক্স সোফা', '5 Sitter', 'Firoja', 1, 'pcs', 3000, 'product/3tLmO7B8NuD4ojxLg6LG2CkybvjICcMZxF2aViOM.jpg', 1, '2023-10-22 06:16:50', '2023-11-10 19:03:56', NULL),
(354, 24, 'S-24', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Light Firoja', 1, 'pcs', 3000, 'product/7MBNKrCbCefabTUEmioqYVAFe8qtjAMXvKiuYoHK.jpg', 1, '2023-10-22 06:17:14', '2023-11-10 19:04:12', NULL),
(355, 24, 'S-25', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Ash', 1, 'pcs', 3000, 'product/P5gByQzQXULkY20jPC64gsgrPTdkFzqi5xNxijni.jpg', 1, '2023-10-22 06:20:21', '2023-11-12 18:06:42', NULL),
(356, 24, 'S-26', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Brown', 2, 'pcs', 2000, 'product/YYYGDgtCIKklI9VKWAzg6USeggx4Z1nOXkmFLFXA.jpg', 1, '2023-10-22 06:20:55', '2023-11-10 19:04:53', NULL),
(357, 24, 'S-27', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '5 Sitter', 'Golden', 1, 'pcs', 3000, 'product/dxxk5aVttcSlcEhcC7bmKXglQHPsWBPSCJyCPD3v.jpg', 1, '2023-10-22 06:21:20', '2023-11-10 19:05:12', NULL),
(358, 24, 'S-28', 'VIP Box Sofa', 'ভিআইপি বক্স সোফা', '4 Sitter', 'Cream', 10, 'pcs', 3000, 'product/nGU9PY6WweensxkZyOR59JuClH0sbEYwNNAytgyd.jpg', 1, '2023-10-22 06:22:49', '2023-11-10 19:05:33', NULL),
(359, 24, 'S-29', 'VIP Single Box Sofa', 'ভিআইপি সিঙ্গেল বক্স সোফা', '1 Sitter', 'Off White', 40, 'pcs', 800, 'product/UEL8T8t33Cf4QJA7Xo1nVrdhrR08p2AMDd5nC2MV.jpg', 1, '2023-10-22 06:24:00', '2023-11-10 19:05:48', NULL),
(360, 24, 'S-30', 'VIP Divan Sofa', 'ভিআইপ ডিভান সোফা', '5 Sitter', 'White Cream', 1, 'pcs', 2000, 'product/7hcwntilcPlXc6VnnPMmxVWy33EOhSL1yzXySp2g.jpg', 1, '2023-10-22 06:24:54', '2023-11-10 19:06:04', NULL),
(361, 24, 'S-31', 'VIP Wooden CNC Design Sofa', 'কাঠের ভিআইপি সিএনসি ডিজাইন সোফা', '5 Sitter', 'White', 2, 'pcs', 4000, 'product/dsClHW2yKSzeZecfIzGEJKkpgCmwCuPgUyhNg3I2.jpg', 1, '2023-10-22 06:26:24', '2023-11-10 19:06:20', NULL),
(362, 24, 'S-32', 'Metal Diamond Design Sofa', 'মেটাল ডিজাইন সোফা', '4 Sitter', 'White', 6, 'pcs', 2000, 'product/P04uSkwV65ThI7d9aDLgGvnTAk7YH0MXpjWYWros.jpg', 1, '2023-10-22 06:31:40', '2023-11-10 17:47:21', NULL),
(363, 24, 'S-33', 'Low Seater', 'লো সিটার', '4 Sitter', NULL, 1, 'pcs', 2000, 'product/34D44cwROxvMa7s4yq5ueHhgPYJ3LJW5NlcP1zlS.jpg', 1, '2023-10-22 06:33:30', '2023-11-10 19:09:16', NULL),
(364, 24, 'S-34', 'Low Seating Sofa', 'লো সিটিং সোফা', '4 Sitter', NULL, 4, 'pcs', 1000, 'product/xhpLwUSWkdzF4DZPuja23V3NAntuiGyASCgqLZIH.jpg', 1, '2023-10-22 06:34:35', '2023-11-10 19:11:13', NULL),
(365, 24, 'S-35', 'Low Tool', NULL, '1 Sitter', NULL, 12, 'pcs', 200, 'product/19UVSGT0l45igjSkn0D1aMdyETDQySsoLFolmPkD.jpg', 1, '2023-10-22 06:35:26', '2023-10-22 06:46:39', '2023-10-22 06:46:39'),
(366, 24, 'S-35', 'Low Tool', NULL, '1 Sitter', NULL, 4, 'pcs', 200, 'product/fKJaLzK2icn9YUtX1eCmT9rE0GdwnR22vUs7jUcV.jpg', 1, '2023-10-22 06:35:31', '2023-11-17 16:31:23', NULL),
(367, 24, 'S-36', 'Golden Laxman Sofa', 'লক্ষন সোফা', '5 Sitter', 'Golden', 6, 'pcs', 4000, 'product/8d5abj11gIomSnVKauudvGhEemiPNy9fGBiSIjMn.jpg', 1, '2023-10-22 06:41:04', '2023-11-10 16:05:49', NULL),
(368, 24, 'S-37', 'Duco Sofa', 'স্কয়ার ডুকো সোফা', '5 Sitter', 'Golden', 1, 'pcs', 10000, 'product/TtUySV5QSHcENy5bn0tsQtLxihiZP9wqyXPyTAbV.jpg', 1, '2023-10-22 06:48:48', '2023-11-10 16:03:48', NULL),
(369, 24, 'S-38', 'Duco Sofa', 'ডুকো সোফা', '5 Sitter', 'Golden & Off White', 1, 'pcs', 10000, 'product/Bif2LUCvYilJAME8wtyT3jTLMhffyi2IG4kciunq.jpg', 1, '2023-10-22 06:49:27', '2023-11-10 16:02:40', NULL),
(370, 24, 'S-39', 'Wooden CNC Sofa', 'কাঠের সিএনসি সোফা', '3 Sitter', 'Customize', 4, 'pcs', 2000, 'product/UA89I8RbTbs8WWhGZT5ftRseL4BmvbKefAasmNVw.jpg', 1, '2023-10-22 06:50:11', '2023-11-10 16:02:11', NULL),
(371, 24, 'S-40', 'MS Sofa', 'মেটাল লাউঞ্চ সোফা', '3 Sitter', 'Customize', 4, 'pcs', 2000, 'product/Iv8NkCAFfjqDMAyFp8e1yciqFvx7nHPRYMtswy04.jpg', 1, '2023-10-22 06:51:10', '2023-11-10 16:01:40', NULL),
(372, 24, 'S-41', 'Tufted Sofa', 'অফহোয়াইট বক্স টাফটেড সোফা', '5 Sitter', 'Off White', 0, 'pcs', 5000, 'product/9TMASFFQ4O4wVTsxPbW3FaCkSTNruiZmJ7dXxr4l.jpg', 1, '2023-10-22 06:54:49', '2023-11-10 16:00:50', NULL),
(373, 24, 'S-42', 'Tufted Sofa', 'পিংক টাফটেড সোফা', '5 Sitter', 'Light Pink', 1, 'pcs', 5000, 'product/04FUuDnwdhPKcQJz7Qkoo84caFBqKv7qfw0PKyEr.jpg', 1, '2023-10-22 06:55:48', '2023-11-10 16:00:21', NULL),
(374, 24, 'S-43', 'Tufted Sofa', 'অফহোয়াইট ফুল বক্স টাফটেড সোফা', '5 Sitter', 'Off White', 1, 'pcs', 5000, 'product/gPH9raMoz4PzwS2GG1Z4TX7DNnGwezyjRDWe7rHj.jpg', 1, '2023-10-22 06:56:22', '2023-11-10 15:59:36', NULL),
(375, 24, 'S-44', 'Tufted Sofa', 'অফহোয়াইট ফুল বক্স টাফটেড সোফা', '5 Sitter', 'Off White', 1, 'pcs', 5000, 'product/m8V7p1oJ6PAUN4YLUOtseZ7T1Z1FNzelGPBJVeiV.jpg', 1, '2023-10-22 06:56:47', '2023-11-10 15:59:05', NULL),
(376, 24, 'S-45', 'Tufted Sofa', 'অফহোয়াইট বক্স টাফটেড সোফা', '5 Sitter', 'Off White', 1, 'pcs', 5000, 'product/jlFXfXrh4jok1Ler2fW6g93jRABdQRdt9dhEPICe.jpg', 1, '2023-10-22 06:57:15', '2023-11-10 15:58:17', NULL),
(377, 24, 'S-46', 'Tufted Sofa', 'অফহোয়াইট স্কয়ার টাফটেড সোফা', '5 Sitter', 'Off White', 1, 'pcs', 5000, 'product/4f5RWmceCpz7fbfePhySbOzmhVft2R9ZnZwjftcq.jpg', 1, '2023-10-22 06:57:36', '2023-11-10 15:57:31', NULL),
(378, 24, 'S-47', 'Tufted Sofa', 'অফহোয়াইট টাফটেড সোফা', '5 Sitter', 'Off White', 1, 'pcs', 5000, 'product/4h6JsskQMZjJWDrDKsUR8G05cgVgr3FlHFNGUED0.jpg', 1, '2023-10-22 06:58:17', '2023-11-10 15:56:42', NULL),
(379, 24, 'S-48', 'Tufted Sofa', 'অফহোয়াইট রাউন্ড টাফটেড সোফা', '3 Sitter', 'Off White', 1, 'pcs', 5000, 'product/iG7gbDyfAALQLAbrg4DQCh82Y0AulUXXkoB3PwGP.jpg', 1, '2023-10-22 06:58:51', '2023-11-10 15:56:07', NULL),
(380, 24, 'S-49', 'Tufted Sofa', 'লাইট পিংক টাফটেড সোফা', '5 Sitter', 'Light Pink', 1, 'pcs', 5000, 'product/kYsDWcKLaMsBIW2Vt1iRjAM2g5rCwh4WbkTJFrUG.jpg', 1, '2023-10-22 06:59:21', '2023-11-10 15:55:13', NULL),
(381, 29, 'WW-01', 'Crystal Tree Walkway', 'ক্রিসটাল গাছের ওয়াকওয়ে', NULL, NULL, 4, 'pcs', 1000, 'product/TXPqTGbNVxjETwPt1ESP7ij7KJJ5DmVTh1SsA4Nb.jpg', 1, '2023-10-22 07:11:43', '2023-11-12 15:56:06', NULL),
(382, 29, 'WW-04', 'Straight Crystal Walkway', 'সোজা ক্রিসটাল ওয়াকওয়ে', NULL, NULL, 15, 'pcs', 400, 'product/fSoPMXUQhw6ql20vClBrKc7daKmANK9NZArVgR6E.jpg', 1, '2023-10-22 07:22:19', '2023-11-12 15:57:52', NULL),
(383, 29, 'WW-02', 'Candle Stand Walkway', 'ক্যান্ডেল স্টান্ড ওয়াকওয়ে', NULL, NULL, 12, 'pcs', 200, 'product/EFQbNVat4abx56Qg52GD5qzy3s4EZpmZ1c5G5mCI.jpg', 1, '2023-10-22 07:23:19', '2023-11-12 15:50:59', NULL),
(384, 29, 'WW-03', 'Patch Crystal Walkway', 'প্যাচ ক্রিসটাল ওয়াকওয়ে', NULL, NULL, 10, 'pcs', 400, 'product/gw9a9aaeVFFefKBYHV6k6flWqlManzBqIQA95YHi.jpg', 1, '2023-10-22 07:40:36', '2023-11-12 15:54:03', NULL),
(385, 29, 'WW-05', 'Silver Crystal Walkway', 'সিলভার ক্রিস্টাল ওয়াকওয়ে', NULL, 'Silver & Crystal', 10, 'pcs', 1000, 'product/o3LClxUahy8oxBwYCht4mAbOvnHADBauaSlKAaeb.jpg', 1, '2023-10-22 07:43:43', '2023-11-12 19:35:09', NULL),
(386, 29, 'WW-06', 'Silver Crystal Walkway', 'সিলভার ক্রিস্টাল ওয়াকওয়ে', NULL, 'Silver & Crystal', 12, 'pcs', 1500, 'product/huhgqX1Jb7nY8n8Pjva9UQyoutH5LS7U8cvIRQFH.jpg', 1, '2023-10-22 07:44:25', '2023-11-13 19:41:00', NULL),
(387, 29, 'WW-07', 'Silver Crystal Walkway', 'সিলভার ক্রিস্টাল ওয়াকওয়ে', 'H-4 feet, H-5 feet', NULL, 4, 'pcs', 1000, 'product/zlHptiLRzekYpdErTRRspUdoJI1rF5bRzDFrSot8.png', 1, '2023-10-22 07:45:20', '2023-11-12 19:36:45', NULL),
(388, 29, 'WW-08', 'Frame Walkway', 'ফ্রেম ওয়াকওয়ে', NULL, 'Customize', 12, 'pcs', 200, 'product/wbPE02Yfxi4OjywrMmIfpufsqxHzEA4gMz3gkmYI.png', 1, '2023-10-22 07:45:59', '2023-11-12 19:37:35', NULL),
(389, 29, 'WW-09', 'Outdoor Hanger Metal Walkway', 'হ্যাংগার মেটাল ওয়াকওয়ে', NULL, 'White', 20, 'pcs', 200, 'product/CUU7sxTGPD5i6brYftFeJvpHCTBXof7FqYTHBkpE.png', 1, '2023-10-22 07:47:26', '2023-11-12 19:38:07', NULL),
(390, 29, 'WW-10', 'Hanging Chandeliar', 'হ্যাংগিং স্যান্ডেলিয়ার ওয়াকওয়ে', 'H-8 feet, 10 feet, 12 feet', NULL, 14, 'pcs', 1500, 'product/emEWyrjmcO5DQ5VOhMiAn1U61usDCYGhVL39uRCS.jpg', 1, '2023-10-22 10:42:32', '2023-11-12 19:38:48', NULL),
(391, 29, 'WW-11', 'Wooden CNC Walkway Box Design', NULL, NULL, NULL, 10, 'pcs', 200, 'product/hzmzQmQ7Boh07w3ezXQiAXn0d5liJdQNgCrP23Ro.jpg', 1, '2023-10-22 10:43:21', '2023-10-22 10:43:21', NULL),
(392, 29, 'WW-12', 'Wooden CNC Walkway Box Design', NULL, NULL, NULL, 14, 'pcs', 300, 'product/Hoy0JVNI4CkzN1OfymdS3HQIcx342We9FwraSLQI.jpg', 1, '2023-10-22 10:44:26', '2023-10-22 10:44:26', NULL),
(393, 29, 'WW-13', 'Metal Flower Stand Walkway', NULL, '3 feet-4pcs, 4 feet-12pcs', NULL, 16, 'pcs', 200, 'product/hFAWBxihN2vQ75bG2Jlqx4lbNwTwsrR8rLsLsDmJ.jpg', 1, '2023-10-22 10:45:56', '2023-10-22 10:45:56', NULL),
(394, 29, 'WW-14', 'Metal Duck Stand Walkway', NULL, NULL, 'Customize', 4, 'pcs', 200, 'product/gLsOx4Y5D5wqM0R4kvDi9bDHyyGEAbALjAbiyv1T.png', 1, '2023-10-22 10:46:39', '2023-10-22 10:46:39', NULL),
(395, 29, 'WW-15', 'Wooden Light Walkway', NULL, 'H-7 feet, W-8 feet', 'Customize', 5, 'pcs', 2000, 'product/lNOHI4rYAERkNx1sjxgi23LumG3Yh3hM3wDcx9RK.jpg', 1, '2023-10-22 10:47:46', '2023-11-12 15:49:27', NULL),
(396, 29, 'WW-16', 'Triangle Light Walkway', NULL, NULL, 'Customize', 10, 'pcs', 1000, 'product/yyJgjpTTJBxXOpS3FHHsCwRojG1mOjHtjMHNzELB.png', 1, '2023-10-22 10:48:43', '2023-10-22 10:48:43', NULL),
(397, 29, 'WW-17a', 'S Metal Light Walkway', NULL, '5 feet', NULL, 12, 'pcs', 500, 'product/SJykSeqpoFK6RWTRUbdurLvm4E1UDIgHlXJZH9GW.jpg', 1, '2023-10-22 10:50:01', '2023-10-22 10:50:01', NULL),
(398, 29, 'WW-17b', 'S Metal Light Walkway', NULL, '8 feet', NULL, 8, 'pcs', 700, 'product/6jZQY5Zsgg5NzX6a8Aag3nWud2KN80YsLPvBWXn6.jpg', 1, '2023-10-22 10:50:25', '2023-10-22 10:50:25', NULL),
(399, 29, 'WW-17c', 'S Metal Light Walkway', NULL, '10 feet', NULL, 10, 'pcs', 800, 'product/adXbfQ0qRft8i9C57AHPNwFLueuUpegBNsKq23MP.jpg', 1, '2023-10-22 10:50:51', '2023-10-22 10:50:51', NULL),
(400, 29, 'WW-18', 'Iron Leaf', NULL, '6\' x 4\'', 'Customize', 2, 'pcs', 500, 'product/5QnuJ3x2qsP3b803pKG0gbwLn6FhVNPdVsrSNtZp.jpg', 1, '2023-10-22 10:53:12', '2023-11-05 19:54:37', NULL),
(401, 29, 'WW-19', 'Golden Chandelier Walkway', 'গোল্ডেন ওয়াকওয়ে স্যান্ডেলিয়ার', 'Small, Medium, Large', 'Silver', 12, 'pcs', 1500, 'product/X9Z8wdoWZCutYwgKnVisaXnn3I9KqOOnrnqhXLtD.png', 1, '2023-10-22 10:55:03', '2023-11-19 23:50:35', NULL),
(402, 29, 'WW-20', 'Lotus Flower Walkway', 'লোটাস ফুলের ওয়াকওয়ে', NULL, NULL, 10, 'pcs', 800, 'product/XVkA0gjXYBSsLGU4mmzhPhs3I8WxuiRTGyHoqKq5.jpg', 1, '2023-10-22 10:56:22', '2023-11-12 15:54:39', NULL),
(403, 29, 'WW-21', 'Lily Flower Walkway', 'লিলি ফুলের ওয়াকওয়ে', NULL, NULL, 20, 'pcs', 1000, 'product/NNy4vW1txFH8MBhj3I71wP0d7VHuQPDNL8doxlKr.jpg', 1, '2023-10-22 10:58:51', '2023-11-12 15:53:33', NULL),
(404, 21, 'MS-01', 'Bird Case Photobooth', 'পাখির খাঁচা ফটোবুথ', '8 feet 1 pc, 10 feet 1 pc', NULL, 2, 'pcs', 8000, 'product/EF29EyuktfjtpS6S2furn84eXYUT8yuAaXk9mpWe.jpg', 1, '2023-10-22 12:41:47', '2023-11-09 16:17:07', NULL),
(405, 21, 'MS-02', 'Bird Case Large', 'মিনার পাখির খাঁচা শো-পিস', 'H-4 feet', 'Customize', 1, 'pcs', 500, 'product/YSwEKfIoBvMGTMhTVUHX4XkyfyZAtOMhNJDCBRsf.jpg', 1, '2023-10-23 03:34:03', '2023-11-09 16:18:29', NULL),
(406, 21, 'MS-03', 'Bird Case Black', 'কালো পাখির খাঁচা', 'Large & Small', 'Black', 12, 'pcs', 500, 'product/z0Mxt9joAsYg4ixgb1ZprnasC20m7B23QiM6uwhK.jpg', 1, '2023-10-23 03:38:20', '2023-11-10 01:08:09', NULL),
(407, 21, 'MS-04', 'Bird Case Medium', 'মাঝারি পাখির খাঁচা', 'Medium', 'White', 9, 'pcs', 200, 'product/rqSxbnEMd7tBlYaoTqztAf5ynC8ZTBHYYoT9iyhn.jpg', 1, '2023-10-23 03:39:36', '2023-11-10 01:09:08', NULL),
(408, 21, 'MS-05', 'Bird Case Small', 'ছোট পাখির খাঁচা', 'Small', 'Golden', 3, 'pcs', 100, 'product/rMnWyklBfPtb03sLQkJaODQlRfG9owgOaasiK5EF.jpg', 1, '2023-10-23 03:40:05', '2023-11-10 01:09:39', NULL),
(409, 21, 'MS-06', 'Bird Case Small', 'ছোট পাখির খাঁচা', 'Small', 'Customize', 35, 'pcs', 50, 'product/5VQcRAHxvvKler3UPAg9JFim2Bfkt4nsHRhUoMGb.jpg', 1, '2023-10-23 03:40:34', '2023-11-10 01:10:12', NULL),
(410, 21, 'MS-07', 'Metal Half Small Case', 'মেটাল হাফ কেস', '6 x 4 Feet', NULL, 2, 'pcs', 2000, 'product/NF9W9slH2AcLXKD24fdgimhSAHbv6sOlYEBmxwed.jpg', 1, '2023-10-24 08:45:24', '2023-11-10 01:11:01', NULL),
(411, 21, 'MS-8', 'Metal Half Large Case', NULL, '8 x 8 Feet', NULL, 1, 'pcs', 2000, 'product/mw7hnEzcAssMqHjyUto48eaVmeiW51s1bearpcq3.jpg', 1, '2023-10-24 08:46:10', '2023-10-24 08:46:10', NULL),
(412, 21, 'MS-09', 'Metal Half Case Set', 'মেটাল হাফ কেস সেট', NULL, NULL, 1, 'pcs', 6000, 'product/QgjkkfBGxC6HfyAi1XBfcmOxdqOVZMhnIrsqwl38.jpg', 1, '2023-10-24 08:48:36', '2023-11-14 17:11:49', NULL),
(413, 21, 'MS-10', 'Metal Half Case', 'মেটাল হাফ কেস', '4x10_4 pcs, 4x8_4 Pcs, 4x6_4pcs, 4x2_2pcs', NULL, 13, 'pcs', 1000, 'product/9aKVe3IDWBTxJu1X3EBkVLch3KI0UbzwNw3Sl6Rh.jpg', 1, '2023-10-24 08:51:51', '2023-11-14 17:18:01', NULL),
(414, 21, 'MS-11', 'Metal Half Case', 'মেটাল হাফ কেস', '12x10x8 feet', NULL, 3, 'pcs', 6000, 'product/JYbt10M8r1zwqBSnRTo8Rc7hkEI1PfR4E3BwNcnK.jpg', 1, '2023-10-24 08:53:39', '2023-11-14 17:18:40', NULL),
(415, 21, 'MS-12', 'Metal Half Case Frame set', 'মেটাল হাফ কেস ফ্রেম সেট', '12x10x8 feet', NULL, 1, 'pcs', 15000, 'product/so6gslI5X3PeDYDw5u9UwIenXr3ddd17UbSi4Xap.jpg', 1, '2023-10-24 08:58:39', '2023-11-14 21:03:34', NULL),
(416, 21, 'MS-13', 'Metal Half Case', 'মেটাল হাফ কেস', '12x10x8 feet', NULL, 1, 'pcs', 3000, 'product/0Ql8v5NlkgCTvD9k7iR93KFMO6UaPaC7WxrQNGhk.jpg', 1, '2023-10-24 09:03:39', '2023-11-14 21:04:00', NULL),
(417, 21, 'MS-14', 'Metal Half Case set', 'মেটাল হাফ কেস সেট', '12x10x8 feet', NULL, 1, 'pcs', 15000, 'product/Bb1zWJ3Kq2KwVIsT9fmIbyR04UvZmf9c5X6vtaBX.jpg', 1, '2023-10-24 09:06:31', '2023-11-14 21:04:18', NULL),
(418, 21, 'MS-15', 'Metal Stage Frame', 'মেটাল স্টেজ ফ্রেম', '4x6_12pcs, 4x8_02pcs, 4x4_4pcs, H-8feet, H-10 feet, H-12 feet', NULL, 18, 'pcs', 1500, 'product/UqFpsA9vm1bAhvIlWsuikzHs0kU8ypZsDIjbhL4v.jpg', 1, '2023-10-24 09:11:58', '2023-11-14 21:04:45', NULL),
(419, 21, 'MS-16', 'Metal Stage Single Frame', 'মেটাল স্টেজ ‍সিঙ্গেল ফ্রেম', '6x8_6pcs, 6x10_6pcs, 6x12_2, 8x10_1pc', NULL, 15, 'pcs', 1000, 'product/2jPgUFhI4dleDqjHHCsTXrbEA5HX2hmVWQ4zhH5A.jpg', 1, '2023-10-24 09:15:11', '2023-11-14 21:05:08', NULL),
(420, 21, 'MS-18', 'Metal Dimond Arch', NULL, '10x6 feet', NULL, 9, 'pcs', 2000, 'product/v7N6YS36LSXTDbwLg8cwHGhVe4908mV29E3BNyG1.jpg', 1, '2023-10-24 09:29:03', '2023-10-24 09:29:03', NULL),
(421, 21, 'MS-19', 'Metal Design Fence', NULL, '4x8_2pcs, 4x10_2pcs', NULL, 4, 'pcs', 1000, 'product/L2Yabio2BHxCglPPOOtUJcHWg5dQzKM6uKp2eei6.jpg', 1, '2023-10-24 09:30:41', '2023-10-24 09:30:41', NULL),
(422, 21, 'MS-20', 'Metal Frame', NULL, '3x8_2pcs, 3x7_2pcs, 3x5_2pcs', NULL, 6, 'pcs', 500, 'product/Pg2HYCGWa3GbUFByDtRodLUg2v9FRWQloeJaiY2D.jpg', 1, '2023-10-24 09:31:45', '2023-10-24 09:31:45', NULL),
(423, 21, 'MS-21', 'Metal Design Fence', NULL, '4x8 feet', NULL, 4, 'pcs', 1000, 'product/bnqoKpqtcu8hvmQ5tyXolrguAH4bxXMspLJZN6lO.jpg', 1, '2023-10-24 09:34:53', '2023-10-24 09:34:53', NULL),
(424, 21, 'MS-22', 'Metal Design Fence', NULL, '4x8_2pcs, 4x10_4pcs', NULL, 6, 'pcs', 1000, 'product/z8J9j9TFKVmxVN0zy0wK3MkZTJRegi1DB7nk7LLa.jpg', 1, '2023-10-24 09:36:43', '2023-10-24 09:36:43', NULL),
(425, 21, 'MS-23', 'Metal Design Fence', NULL, '4x8_2pcs, 4x10_4', NULL, 6, 'pcs', 1000, 'product/t4zLdLqH69uXgCXRgpy3jZk3HkKjtE5Oh16w3E3l.jpg', 1, '2023-10-24 09:37:55', '2023-10-24 09:37:55', NULL),
(426, 21, 'MS-24', 'Metal Window', NULL, '6x10_4pcs, 6x8_4pcs, 5x8_4pcs, 5x10_4pcs', NULL, 16, 'pcs', 1000, 'product/OCznqldFBEHzU2EhMeoz2zoqr2vjOcmjsLYFl42V.jpg', 1, '2023-10-24 09:39:18', '2023-10-24 09:39:18', NULL),
(427, 21, 'MS-25', 'Metal Double Round Frame', NULL, '8x6_1pcs, 7x6_1pcs', NULL, 3, 'pcs', 1000, 'product/RtH95qada3PgkEXL9JH7Ap3zTlN5zoqCLu7ZPXgf.jpg', 1, '2023-10-24 09:40:04', '2023-10-24 09:40:04', NULL),
(428, 21, 'MS-26', 'Metal Design Arch', NULL, '6x8_4pcs, 6x10_4pcs', NULL, 8, 'pcs', 1000, 'product/lwwfsHR8e38jC4sNaFMspsM7WIenp1WPRzyuxQIq.jpg', 1, '2023-10-24 09:40:49', '2023-10-24 09:40:49', NULL),
(429, 21, 'MS-27', 'Metal Half Single Arch', NULL, '3x10_2pcs, 3x8_4pcs, 3x7_4pcs', NULL, 10, 'pcs', 300, 'product/q0AdUfQa7fB6UV9AIYTFWWOBtsve91XOp11FIW3N.jpg', 1, '2023-10-24 09:41:37', '2023-10-24 09:41:37', NULL),
(430, 21, 'MS-28', 'Metal Diamond Design Fence', NULL, '4x8 feet', NULL, 4, 'pcs', 500, 'product/DidEVCg9h1PrqMWI9yXnWktY83HfrchmCP5hMKbh.jpg', 1, '2023-10-24 09:42:21', '2023-10-24 09:42:21', NULL),
(431, 21, 'MS-29', 'Metal Diamond Fence Rod', NULL, '6x10 feet', NULL, 2, 'pcs', 1000, 'product/6DdxUmMar6yUgoAeV4TfZyXZqZOxlTim9vu6oOvq.jpg', 1, '2023-10-24 09:43:13', '2023-10-24 09:43:13', NULL),
(432, 21, 'MS-30', 'Metal Diamond Fence', NULL, '3x7_2pcs, 3x6_4pcs, 3x3_4pcs', NULL, 10, 'pcs', 500, 'product/jijpkmu6qAosT83vW0Eml0vyh34H4It4PPNl9Spt.jpg', 1, '2023-10-24 09:44:25', '2023-10-24 09:44:25', NULL),
(433, 21, 'MS-31', 'Metal Design Fence', NULL, '4x8feet', NULL, 8, 'pcs', 500, 'product/cwaORqA3VhnBa0DDGF9nEeR84k16MQBp7JgM5mh4.jpg', 1, '2023-10-24 09:44:54', '2023-10-24 09:44:54', NULL),
(434, 21, 'MS-32', 'Metal Design', NULL, '4x8 feet', NULL, 2, 'pcs', 1000, 'product/E55miCqqWNgpER60yRks9RYoJEVMZQ1VbR6VQdY8.jpg', 1, '2023-10-24 09:45:29', '2023-10-24 09:45:29', NULL),
(435, 21, 'MS-33', 'Metal Design', NULL, '4x8 feet', NULL, 2, 'pcs', 1000, 'product/BOuLKKnB1dSNjnmSQSANWuzJiODAKkq9D9qTN9G8.jpg', 1, '2023-10-24 09:46:22', '2023-10-24 09:46:22', NULL),
(436, 21, 'MS-34', 'Metal Design Fence', NULL, 'W-6\' x H-8\'', NULL, 4, 'pcs', 1200, 'product/TTAlCdTnBdJtDCzIcbpSyKJuLrLA8JfsGoJNy5ip.jpg', 1, '2023-10-24 09:48:04', '2023-11-08 18:49:25', NULL),
(437, 21, 'MS-35', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1000, 'product/jcQtePdb5fOl556Fl8vhq0I9rrquLHotDF4SPGu6.jpg', 1, '2023-10-24 09:48:35', '2023-10-24 09:48:35', NULL),
(438, 21, 'MS-36', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1000, 'product/VJjpjO4SbaiB5QhZDIh6kOfYL5GB8xX0Uz0dmtDQ.jpg', 1, '2023-10-24 09:49:21', '2023-10-24 09:49:21', NULL),
(439, 21, 'MS-37', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1000, 'product/3xx68eFgBtjl6C97CUwotZx8b9ZdVF8BWHeW5qvf.jpg', 1, '2023-10-24 09:51:05', '2023-10-24 09:51:05', NULL),
(440, 21, 'MS-38', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1200, 'product/qZZNdv9yrsHmBxWtmNr8ZftujilMBr742OGxSjpJ.jpg', 1, '2023-10-24 09:51:48', '2023-10-24 09:51:48', NULL),
(441, 21, 'MS-39', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1200, 'product/LylFbPJENyropoYwqZhbcviidp0udE1MtTCBDmio.jpg', 1, '2023-10-24 09:53:59', '2023-10-24 09:53:59', NULL),
(442, 21, 'MS-40', 'Metal Design Fence', NULL, '6x10 feet', NULL, 4, 'pcs', 1200, 'product/oq4UZ3gQK6TSpnEvEEkPKmEhLTm40bdszHkT9imX.jpg', 1, '2023-10-24 09:55:36', '2023-10-24 09:55:36', NULL),
(443, 21, 'MS-41', 'Metal Box Frame', NULL, 'W-6\' x H-8\'', NULL, 4, 'pcs', 200, 'product/FBDduMk1mU7fk85DnFZmD5tA8oZFC8wlZCZaGNmd.jpg', 1, '2023-10-24 10:12:44', '2023-11-08 18:53:16', NULL),
(444, 21, 'MS-42', 'Metal Arch Stage Frame', NULL, '4x6_6pcs, 5x8_6pcs', NULL, 12, 'pcs', 1000, 'product/dE7yEYkJjUx0PxdgTgnu1EOhROdefAuFoklN53JH.jpg', 1, '2023-10-24 10:19:54', '2023-10-24 10:19:54', NULL),
(445, 21, 'MS-43', 'Metal Arch Stage Frame', 'মেটাল আর্চ স্টেজ ফ্রেম', '10x6_2pcs, 12x6_2pcs', NULL, 4, 'pcs', 1000, 'product/VvjXX7girk47OwJGmBtY0RJnNPBULj9tSY4jeVup.jpg', 1, '2023-10-24 10:22:20', '2023-11-14 17:33:17', NULL),
(446, 21, 'MS-44', 'Metal Wing', 'মেটাল উইং', '4x8 feet', NULL, 2, 'pcs', 2000, 'product/fdoIqIkjwmruoE5KMikZhFhkUcx4qkBk4Tz2drm6.jpg', 1, '2023-10-25 03:53:10', '2023-11-14 17:32:35', NULL),
(447, 21, 'MS-45', 'Metal Wing', NULL, '4x8 feet', NULL, 2, 'pcs', 500, 'product/gscaYPhLqaBg1Hevv7Yl59kozq6McesfBdzIZEp5.jpg', 1, '2023-10-25 03:56:47', '2023-10-25 03:56:47', NULL),
(448, 21, 'MS-46', 'Metal Butterfly', 'মেটাল প্রজাপতি', '5 x 6 feet', NULL, 10, 'pcs', 1000, 'product/1nxmKNiVSyfZ5jkKsehEmge3aT9KWY69xCwcgPoY.jpg', 1, '2023-10-25 03:58:30', '2023-11-12 18:09:48', NULL),
(449, 21, 'MS-47', 'Metal Gate Frame', NULL, '6 x 7.6 feet', NULL, 2, 'pcs', 1000, 'product/bwbmDDGanq2JsXfs9XodttimlttPOgWuVBruVMY0.jpg', 1, '2023-10-25 04:02:48', '2023-10-25 04:02:48', NULL),
(450, 21, 'MS-48', 'Metal Arch Stage Frame', NULL, '6 x 4 feet', NULL, 2, 'pcs', 500, 'product/jrCXOvISl5y8lktYg6ugWlK4aPCNO4YvkS2TFPMB.jpg', 1, '2023-10-25 04:04:27', '2023-10-25 04:04:27', NULL),
(451, 21, 'MS-49', 'Metal Stage Frame', NULL, 'Set', NULL, 1, 'pcs', 4500, 'product/jEqchVXE4eH57qBEEnTFOlOlLF2VGjtKdlJTYLas.jpg', 1, '2023-10-25 04:07:42', '2023-10-25 04:07:42', NULL),
(452, 21, 'MS-50', 'Metal Fence', 'মেটাল বেড়া', '1.5 x 8 feet', NULL, 4, 'pcs', 500, 'product/65JSsSzj2LV08zss0dkiwBNNZ9pa78IpKniyDhad.jpg', 1, '2023-10-25 04:34:59', '2023-11-14 17:41:27', NULL),
(453, 21, 'MS-51', 'Metal Single Arch', 'মেটাল সিঙ্গেল আর্চ', '12x5_6pcs, 10x5_8pcs, 7.5x5_8pcs, 8x5_8pcs', NULL, 30, 'pcs', 500, 'product/dzNcMYMuTR0bA3UP53IBqjFB22jav9RCV2pVkIW4.jpg', 1, '2023-10-25 04:37:23', '2023-11-14 17:41:45', NULL),
(454, 21, 'MS-52', 'Metal Photobooth Ring', 'মেটাল ফটোবুথ রিং', '5 feet 2pcs, 6 feet 3 pcs', NULL, 200, 'pcs', 200, 'product/892H7ACLaDfYBhkgBWeC7nboCdYaClXETS964LtG.jpg', 1, '2023-10-25 04:38:21', '2023-11-14 17:42:11', NULL),
(455, 21, 'MS-53', 'Metal Half Arch', 'মেটাল হাফ আর্চ', '6 feet 3pcs, 14 feet 14 pcs, 9.8 feet 12 pcs, 2 feet 6 pcs', NULL, 35, 'pcs', 200, 'product/XgzF8C8ECmzghWaXBYvjO0p7CUyxLHN3TleRQpbr.jpg', 1, '2023-10-25 04:39:43', '2023-11-14 17:42:33', NULL),
(456, 21, 'MS-54', 'Metal Half Arch', 'মেটাল আর্চ', 'Set', NULL, 1, 'pcs', 1000, 'product/8uSpO8qTE0vSFMgKjkZsnoYZwgqH8UW4WUhXniXf.jpg', 1, '2023-10-25 04:41:09', '2023-11-14 17:42:57', NULL),
(457, 21, 'MS-55', 'Metal Pillar', 'মেটাল পিলার', '9in x 10ft_18pcs,  9inx9ft_4pcs, 9inx5ft_4pcs', NULL, 26, 'pcs', 500, 'product/EvPwvgtzvNAl0DbRXKFRRn5WwIuoSpPVvnnEKktu.jpg', 1, '2023-10-25 04:43:42', '2023-11-14 17:43:15', NULL),
(458, 21, 'MS-56', 'Metal Pillar', 'মেটাল পিলার', '8inx8ft_20pcs, 8inx6ft_20, 8inx4ft_12', NULL, 52, 'pcs', 500, 'product/b8uHDeFVGrDzc43KGIcxDyghTk0q2kbB5pIhexRv.jpg', 1, '2023-10-25 04:46:42', '2023-11-14 17:43:38', NULL),
(459, 21, 'MS-57', 'Round Frame', 'রাউন্ড ফ্রেম', 'H-5ft x L-9ft', NULL, 4, 'pcs', 1000, 'product/JkNrHD7N5ny4NefCPRqn6JJfVPmmMOy5J968S1A8.jpg', 1, '2023-10-25 04:48:04', '2023-11-14 17:43:58', NULL),
(460, 21, 'MS-100', 'Metal Pillar H-5ft', 'মেটাল পিলার ৫ ফিটি', 'w-10\" x l-10\" x H-5\'', NULL, 10, 'pcs', 1000, 'product/algJTr8PwrU1cyrfa42BQqJwvPMCiEtWIf1JAqex.jpg', 1, '2023-10-25 04:55:55', '2023-11-09 16:12:04', NULL),
(461, 21, 'MS-58', 'Base & Pipe', 'বড় তলা পাইপ', '10 feet', NULL, 125, 'pcs', 100, 'product/6yFwnjj4viFnjKJSwdc2QHYPUtTZszhIt9MgAVBD.jpg', 1, '2023-10-25 04:56:55', '2023-11-11 16:04:58', NULL),
(462, 21, 'MS-59', 'Medium Base & Pipe', 'মাঝারি তলা পাইপ', '7 feet', NULL, 104, 'pcs', 100, 'product/En00AVNu1saNTiXAwax3pRub74xhluCNNWreFVdL.jpg', 1, '2023-10-25 04:58:48', '2023-11-19 22:51:28', NULL),
(463, 21, 'MS-60', 'Small Base & Pipe', 'ছোট তলা পাইপ', '5 feet', NULL, 38, 'pcs', 50, 'product/XmjsknhBk4X03Ti3iorG93BHDQwx2o6JDav6esIW.jpg', 1, '2023-10-25 05:00:10', '2023-11-17 16:31:23', NULL),
(464, 21, 'MS-61', 'Bahu', NULL, 'H-4\'', NULL, 20, 'pcs', 20, 'product/V3TMAG1xTWNFzM9Sbezt90Jzc1C05rcKx5DRWMZN.jpg', 1, '2023-10-25 05:02:51', '2023-11-11 16:05:29', NULL),
(465, 21, 'MS-62', 'Metal Leaf Tree', NULL, '8 feet Height', NULL, 4, 'pcs', 1000, 'product/Y9Ew3ocPSzXAwa7yFWd8x6sFAhINJQk9nUpjvrcr.jpg', 1, '2023-10-25 05:06:53', '2023-10-25 05:07:18', NULL),
(466, 21, 'MS-63', 'Round Metal Celling Fence', NULL, '2 x 6 feet', NULL, 16, 'pcs', 300, 'product/KiwufmOiyIONS5q0aB9xx32HLtVu0w8xAn0vgPzn.jpg', 1, '2023-10-25 05:12:40', '2023-10-25 05:12:40', NULL),
(467, 21, 'MS-64', 'Metal Round Frame', NULL, '12 feet', NULL, 4, 'pcs', 1200, 'product/p6kE7xtTzEDpQpIdi46jsAdlsgm5eMwYcmbBNgRu.jpg', 1, '2023-10-25 05:13:59', '2023-10-25 05:13:59', NULL),
(468, 21, 'MS-65', 'Metal Window Design', NULL, '3 x 10 feet', NULL, 10, 'pcs', 1000, 'product/zhQ7z2ogUrVP2ykriB4fQ4S4jO7kgNtjTx7fCgeo.jpg', 1, '2023-10-25 05:31:18', '2023-10-25 05:31:18', NULL),
(469, 21, 'MS-66', 'Metal Arch', NULL, '3.5 x 4_12pcs, 2.5 x 3_12pcs', NULL, 24, 'pcs', 300, 'product/sbro8OWnuzWLx9BV1mieAixQRPrSGyYr64lOq47n.jpg', 1, '2023-10-25 05:33:52', '2023-10-25 05:33:52', NULL),
(470, 21, 'MS-67', 'Metal Peacock tail', NULL, NULL, NULL, 4, 'pcs', 200, 'product/GWFGMRm3wT2Eph2PbP3yv0rpvyKJi7xvQpRtYyQ8.jpg', 1, '2023-10-25 05:34:34', '2023-10-25 05:34:34', NULL),
(471, 21, 'MS-68', 'Metal Peacock tail', NULL, NULL, NULL, 2, 'pcs', 200, 'product/hc4VYnicwmc7LWfmGS04LOimtwAQRlmgUrqK9tPI.jpg', 1, '2023-10-25 05:35:01', '2023-10-25 05:35:01', NULL),
(472, 21, 'MS-69', 'Metal Rickshaw', NULL, NULL, NULL, 1, 'pcs', 3000, 'product/ydWTVyRMeYRuAoyw5H0SLB9WejBdls8MH3jJnYDL.jpg', 1, '2023-10-25 05:36:11', '2023-10-25 05:36:11', NULL),
(473, 21, 'MS-70', 'Metal Cycle', NULL, NULL, NULL, 1, 'pcs', 500, 'product/KOsjq0PMezerdmTdUafz2RGQ1FQ4CJ98V09UiS0s.jpg', 1, '2023-10-25 05:36:45', '2023-10-25 05:36:45', NULL),
(474, 21, 'MS-71', 'Metal Showpiece Rack', NULL, NULL, NULL, 4, 'pcs', 3000, 'product/GHlFwJLWVS7GFPDULgBL089sFn0HZnn6d9uSGXJu.jpg', 1, '2023-10-25 05:38:54', '2023-10-25 05:38:54', NULL),
(475, 21, 'MS-72', 'SS Swing', NULL, NULL, NULL, 1, 'pcs', 2000, 'product/CuF64BuVnxJBW1sKZHl7LnPREdLEZz2O79BzTjIZ.jpg', 1, '2023-10-25 05:39:59', '2023-11-04 20:37:25', NULL),
(476, 21, 'MS-73', 'SS Ladder', NULL, '10 feet 4pcs, 8 feet 4pcs', NULL, 8, 'pcs', 300, 'product/PnTgWu59YJYvd1ocUuGIRxxijPVNI2VVfs8DdeaN.jpg', 1, '2023-10-25 05:41:10', '2023-10-25 05:41:10', NULL),
(477, 21, 'MS-74', 'Metal Ladder', NULL, NULL, NULL, 11, 'pcs', 300, 'product/MuXAbmRkv3wOSQ4xSVBFdGehwdAhf78Kdf2lprKT.jpg', 1, '2023-10-25 05:46:23', '2023-11-19 22:51:28', NULL),
(478, 21, 'MS-75', 'Trolly', NULL, NULL, NULL, 1, 'pcs', 1000, 'product/IJwLFPrhJrlwMHcKu6S54IvQhlnFPsw7wtnjrGLD.jpg', 1, '2023-10-25 05:50:38', '2023-10-25 05:50:38', NULL),
(479, 21, 'MS-76', 'Metal Iron Leaf', NULL, NULL, NULL, 2, 'pcs', 1500, 'product/yzsCq7C6s6KVfggBdQXK2Pdnl2dpVa2MwjStscUh.jpg', 1, '2023-10-25 05:51:19', '2023-10-25 05:51:19', NULL),
(480, 21, 'MS-77', 'Metal Pentagon Stage Frame', 'পাঁচকোনা স্টেজ ফ্রেম', '9 feet 1pc, 7 feet 2pcs, 5 feet 2pcs', NULL, 5, 'pcs', 1500, 'product/1HeE87SJ20lNZgGG4g65tWU7IuD0bJHYP2vUxOmS.jpg', 1, '2023-10-25 05:53:44', '2023-11-10 01:13:43', NULL),
(481, 21, 'MS-79', 'Metal Tree Frame', NULL, '9 feet 2pcs, 7 feet 2pcs, 5 feet 2pcs', NULL, 6, 'pcs', 5000, 'product/X8PWFN5DpKDSWJiQ09Y13Zl7mdGrQXCZETVnWZ2w.jpg', 1, '2023-10-25 06:04:55', '2023-10-25 06:04:55', NULL),
(482, 21, 'MS-80', '1 Feet Half Round', '১ ফিটি হাফ রাউন্ড', '6 feet 10pcs, 8 feet 2pcs', NULL, 12, 'pcs', 1000, 'product/upqyY7HccKv57qlNgURiikWov99v0zdE02FRJrTK.jpg', 1, '2023-10-25 06:06:03', '2023-11-09 16:14:42', NULL),
(483, 21, 'MS-81', 'Metal Ring', NULL, '3.5 feet', NULL, 12, 'pcs', 200, 'product/1O5yxudTiQiYVZKlc393NsRIaWpEqJPYLirgjNPU.jpg', 1, '2023-10-25 06:22:09', '2023-10-25 06:22:09', NULL),
(484, 21, 'MS-82', 'Metal Ring', NULL, '5 feet 2pcs, 6 feet 2pcs', NULL, 4, 'pcs', 200, 'product/6f5CwN4LGME0OyLKratkcE5WluHhykPKASkz1HaR.jpg', 1, '2023-10-25 06:23:08', '2023-10-25 06:23:08', NULL),
(485, 21, 'MS-83', 'Metal Crown', 'মেটাল ক্রাউন', '6 feet', NULL, 1, 'pcs', 500, 'product/tvCL2Kt4Do4QDcnLcaozMxpBCb5unSYjUmms6PY5.jpg', 1, '2023-10-25 06:25:52', '2023-11-14 18:07:11', NULL),
(486, 21, 'MS-84', 'Metal Crown', 'মেটাল ক্রাউন', '8 feet', NULL, 1, 'pcs', 1500, 'product/KTDmueAkSJs8mKfck1nC6v644gzB2VcTWpKGuOkW.jpg', 1, '2023-10-25 06:31:45', '2023-11-14 18:06:49', NULL),
(487, 21, 'MS-85', 'Metal Crown', 'মেটাল ডিজাইন মুকুট', '12 feet', NULL, 1, 'pcs', 2500, 'product/Gk3pWvGtx8J0soddecfxeFefrrT43bUF5DKHIK5L.jpg', 1, '2023-10-25 06:34:35', '2023-11-10 15:53:17', NULL),
(488, 21, 'MS-86', 'Metal Stage', 'মেটাল স্টেজ ফ্রেম', 'W-4\' x H-10\'', NULL, 2, 'pcs', 500, 'product/Y52WUtLtQr2vvmJLh5XZlY3kMkTfC3tA8nTeoeri.jpg', 1, '2023-10-25 07:03:57', '2023-11-09 18:57:24', NULL),
(489, 21, 'MS-87', 'Net Fence', 'মেটাল জালি বেড়া', '8x2_8pcs, 10x2_4pcs, 6x2_9pcs', NULL, 21, 'pcs', 500, 'product/cDO5WfAGPm2LUZVQzMy40BBQJwqo1mbCqdnIJteW.jpg', 1, '2023-10-25 07:05:03', '2023-11-14 18:04:11', NULL),
(490, 21, 'MS-88', 'Qrt Round', 'মেটাল কোয়ার্টার রাউন্ড', '10 feet', NULL, 2, 'pcs', 100, 'product/IJNNf6rHOcjdwY5bu2oDeyfiedjhh0AewIwzjedD.jpg', 1, '2023-10-25 07:19:16', '2023-11-14 18:03:48', NULL),
(491, 21, 'MS-89', 'Half Round Star Box Frame', 'হাফ রাউন্ড স্টার বক্স ফ্রেম', '8 feet 2pcs, 6 feet 10 pcs', NULL, 12, 'pcs', 1000, 'product/lcTc6hr1WSi4keImFC70Mk4o4OlAZHLAwAwg8f9u.jpg', 1, '2023-10-25 09:06:17', '2023-11-14 17:10:11', NULL),
(492, 21, 'MS-90', 'Metal L', 'মেটাল এল সেপ', NULL, NULL, 26, 'pcs', 300, 'product/o9q76rVNAJWNIdbqFAqGc3hs2zAZbUuHCIZxPnoP.jpg', 1, '2023-10-25 09:07:03', '2023-11-14 18:03:16', NULL),
(493, 21, 'MS-92', 'Square Folding', 'স্কয়ার ফোল্ডিং', '2 part = 1set', NULL, 10, 'pcs', 1000, 'product/MP9VrkK96ID4KtHDThlFLlh5uzhzWQ3iJ8iNTWQU.jpg', 1, '2023-10-25 09:13:09', '2023-11-10 01:07:18', NULL),
(494, 23, 'SP-01', 'Gramophone', NULL, NULL, NULL, 2, 'pcs', 2000, 'product/YzMUGwh1jCdNfFEIPNs5CrDau8QDKUWgwBfbVwzh.jpg', 1, '2023-10-25 09:16:24', '2023-10-25 09:16:42', NULL),
(495, 23, 'SP-02', 'Table Lamp', NULL, NULL, NULL, 4, 'pcs', 1000, 'product/69kYFProNY3A6YJcXs69ravBJGGX50sf0fzTWjBL.jpg', 1, '2023-10-25 09:33:54', '2023-11-01 14:42:16', NULL),
(496, 23, 'SP-03', 'Wine Drum', NULL, NULL, NULL, 4, 'pcs', 2000, 'product/S9M66ahUJh7AbNiOL63IKD1HngnlYI9rsTqPYhLT.jpg', 1, '2023-10-25 10:08:40', '2023-11-01 14:42:19', NULL),
(497, 23, 'SP-04', 'China Show piece', NULL, NULL, NULL, 2, 'pcs', 100, 'product/sZFQhhcEFOFOed3NR7IqfZRgXi4GqjjhCgfGDWLH.jpg', 1, '2023-10-25 10:09:15', '2023-10-25 10:09:15', NULL),
(498, 23, 'SP-05', 'China Show piece', NULL, 'Medium', NULL, 2, 'pcs', 100, 'product/WBrPYJwA05xfCsTe0Nqy7UFGHaMLdBZj3w4fdyOZ.jpg', 1, '2023-10-25 10:10:00', '2023-10-25 10:10:26', NULL),
(499, 23, 'SP-06', 'China Show piece', NULL, 'Small', NULL, 2, 'pcs', 100, 'product/IcJiLCgCaPlylLepiHoWOD0f0X70OIEtxdLDcEYS.jpg', 1, '2023-10-25 10:12:00', '2023-10-25 10:12:00', NULL),
(500, 23, 'SP-07', 'SS Show piece', NULL, 'Large', NULL, 10, 'pcs', 100, 'product/zGATl0JZN4NFvTzhxngnQNCyUP6diT1aPRmo00FK.jpg', 1, '2023-10-25 10:12:29', '2023-11-02 13:30:30', NULL),
(501, 23, 'SP-08', 'SS Show piece', NULL, 'Small', NULL, 10, 'pcs', 100, 'product/lv2wfg0jTryfNJlrljmUJqgDShD5HKxCOdAOy7cG.jpg', 1, '2023-10-25 10:12:54', '2023-11-04 20:36:24', NULL),
(502, 23, 'SP-09', 'China Show piece', NULL, NULL, NULL, 4, 'pcs', 100, 'product/sUQ6qPgOXxynYycvC0zbQoUkYJFZcd5oKBzkdvy9.jpg', 1, '2023-10-25 10:13:44', '2023-10-25 10:17:17', NULL),
(503, 23, 'SP-10', 'China Show piece', NULL, NULL, NULL, 5, 'pcs', 100, 'product/20dloer36aYOjqNBlnyoyj9NRn9au7WJ9CORJtsi.jpg', 1, '2023-10-25 10:14:09', '2023-10-25 10:17:43', NULL),
(504, 23, 'SP-11', 'China Show piece', NULL, 'Small-6pcs & Large-9 pcs', NULL, 15, 'pcs', 100, 'product/x22M9m6h5yK4MR9r8G9No51xZmbvvcwtNwf90dbF.jpg', 1, '2023-10-25 10:14:51', '2023-10-25 10:18:13', NULL),
(505, 23, 'SP-12', 'China Show piece', NULL, 'Small-2 pcs, Large 3 pcs', NULL, 0, 'pcs', 100, 'product/FZPUjmr6JsfnaHGg42bKIdsa7KXWvarovGsrYVqP.jpg', 1, '2023-10-25 10:15:48', '2023-11-02 13:30:30', NULL);
INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `name_bangla`, `dimension`, `color`, `stock`, `measurement_unit`, `rental_price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(506, 23, 'SP-13', 'China Show piece with Candle', NULL, NULL, NULL, 0, 'pcs', 300, 'product/Y6SUwO7UguA1sRy7qoO1k1AHTBn0DeApE9ZRLl58.jpg', 1, '2023-10-25 10:19:40', '2023-11-02 13:30:30', NULL),
(507, 23, 'SP-14', 'Candle Show Piece', NULL, NULL, NULL, 12, 'pcs', 50, 'product/udrqzko6uGVXu1p8hPaNKBX7BHQ9VCDqSPALaD0H.jpg', 1, '2023-10-25 10:20:15', '2023-10-25 10:20:15', NULL),
(508, 23, 'SP-15', 'Haricane', NULL, NULL, NULL, 48, 'pcs', 50, 'product/AydrEqPgjvhGNbiZY8jru2k5h0FfyjVUBAqjnCoK.jpg', 1, '2023-10-25 10:21:03', '2023-10-25 10:21:03', NULL),
(509, 23, 'SP-16', 'China Showpiece', NULL, 'Small-2pcs, Large-4pcs', NULL, 6, 'pcs', 200, 'product/UKlc3aY0YgIySVjdc7rxDfjES7YlFlIpnRCzkp3y.jpg', 1, '2023-10-25 10:22:00', '2023-11-02 13:27:47', NULL),
(510, 23, 'SP-17', 'China Glass', NULL, 'Design-15pcs, Silver-13pcs, White-57pcs', NULL, 85, 'pcs', 50, 'product/hRjrxO069aIHxQntX77N5C13FEaUoCpSMCtHsU1o.jpg', 1, '2023-10-25 10:23:35', '2023-11-02 13:27:52', NULL),
(511, 23, 'SP-18', 'China Black Design', NULL, 'Small-4pcs, Large-4pcs', NULL, 8, 'pcs', 200, 'product/0w5l7J7ZRkry8hkklqBGOUMlPhejmSdkoABpuXk3.jpg', 1, '2023-10-25 10:26:17', '2023-11-02 13:27:49', NULL),
(512, 23, 'SP-19', 'China Show piece', NULL, NULL, NULL, 2, 'pcs', 100, 'product/CmASSK7ijD8Lk6S4VNka2z4K4aecdlu21iQIElyt.jpg', 1, '2023-10-25 10:27:56', '2023-10-25 10:27:56', NULL),
(513, 23, 'SP-20', 'China Show piece', NULL, NULL, NULL, 3, 'pcs', 100, 'product/BfSBVmALHOE0M6Cdzu48yOuwOLAvvR7CFepgOYzw.jpg', 1, '2023-10-25 10:28:18', '2023-10-25 10:28:18', NULL),
(514, 23, 'SP-21', 'China Minar Show piece', NULL, NULL, NULL, 0, 'pcs', 500, 'product/ZgEPZilzGl9YahqDaIym5AexQowNhVsYQesQLSNu.jpg', 1, '2023-10-25 10:29:08', '2023-11-02 13:30:30', NULL),
(515, 23, 'SP-22', 'China Show piece', NULL, NULL, NULL, 11, 'pcs', 100, 'product/XjIrF9Crxz16yWjB8UUzpxsfnRjgDu8YoYxQxwtO.jpg', 1, '2023-10-25 10:29:36', '2023-10-25 10:29:36', NULL),
(516, 23, 'SP-23', 'China Show piece', NULL, NULL, NULL, 17, 'pcs', 100, 'product/0HyhsajSblKDBqykPWYa5A80K98UuSKC8abViJ3k.jpg', 1, '2023-10-25 10:30:05', '2023-11-02 13:30:30', NULL),
(517, 23, 'SP-24', 'China Show piece', NULL, 'S-6pcs, M-6pcs, L-1pcs', NULL, 13, 'pcs', 100, 'product/F5qfFNDFq8RRVFYpGMr3gd23Hoa3MSp3ks8kGyeT.jpg', 1, '2023-10-25 10:30:41', '2023-10-25 10:30:41', NULL),
(518, 23, 'SP-25', 'Black Candle Stand', NULL, 'S-2pcs, L-4pcs', NULL, 6, 'pcs', 100, 'product/Bj6cqsdfcNKtL6XTjBgW8hY4rBHZf8JpD8ztTy5P.jpg', 1, '2023-10-25 10:32:12', '2023-10-25 10:32:12', NULL),
(519, 23, 'SP-26', 'China Show piece', NULL, 'S-1pc, M-3pcs, L-1pc', NULL, 5, 'pcs', 100, 'product/cd0OTmFBDplzytUpqHjMLqEbLyc7hT1VkIugLabX.jpg', 1, '2023-10-25 10:32:47', '2023-10-25 10:32:47', NULL),
(520, 23, 'SP-27', 'China Show piece Candle Bird Case', NULL, NULL, NULL, 12, 'pcs', 100, 'product/g2S3Kp9BFdFI8XYwj39IL2ursExov36t5MuJu1E1.jpg', 1, '2023-10-25 10:33:28', '2023-10-25 10:33:28', NULL),
(521, 23, 'SP-28', 'China Show piece Candle Bird Case', NULL, NULL, NULL, 100, 'pcs', 100, 'product/u7RHQxOicZjlXOFGEjD2skN7gMe4T619aypkk94n.jpg', 1, '2023-10-25 13:01:59', '2023-10-25 13:01:59', NULL),
(522, 23, 'SP-29', 'Glass Lace Show piece', NULL, 'L-16pcs, S-8pcs', NULL, 24, 'pcs', 50, 'product/LbpRyoAGlA8xzld23DZ2jumyhUgQbpoTVlTOFtYO.jpg', 1, '2023-10-25 13:03:43', '2023-10-25 13:03:43', NULL),
(523, 23, 'SP-30', 'China Metal Candle Stand', NULL, NULL, NULL, 6, 'pcs', 300, 'product/d5dNOOHRt1RgEAPvwdjkLjIVj0NbkpvTzla4I7qR.jpg', 1, '2023-10-25 13:06:21', '2023-10-25 13:06:21', NULL),
(524, 23, 'SP-31', 'China Metal Candle Stand', NULL, NULL, NULL, 4, 'pcs', 200, 'product/t1inFJImtMGXNhMaf0544vh9pTWmEhsyJNfvOWoc.jpg', 1, '2023-10-25 13:09:43', '2023-10-25 13:09:43', NULL),
(525, 23, 'SP-32', 'Mirror Box Showpiece', NULL, NULL, NULL, 2, 'pcs', 50, 'product/s0a26j1iwXyhM57CvRqKiGI9l4TZmvtb3U6jKFxU.jpg', 1, '2023-10-25 13:10:14', '2023-10-25 13:10:14', NULL),
(526, 23, 'SP-33', 'Mirror Butterfly', NULL, 'Set', NULL, 3, 'pcs', 500, 'product/J6hcOSojlIQ86SEF6n8RmE1moo4MbtnIs5ye98oB.jpg', 1, '2023-10-25 13:10:53', '2023-10-25 13:12:28', NULL),
(527, 23, 'SP-34', 'Metal Cake Stand', NULL, NULL, NULL, 3, 'pcs', 500, 'product/Tw5JFl1iDUywpO7FUcZwVQTA28tKaUJxNwiIXpTy.jpg', 1, '2023-10-25 13:12:55', '2023-10-25 13:12:55', NULL),
(528, 23, 'SP-35', 'Metal Show Piece', NULL, NULL, NULL, 3, 'pcs', 200, 'product/Gw4kKcqDegtFzJmJYHs9Y3hqNInmixUixbJVvf70.jpg', 1, '2023-10-25 13:15:47', '2023-10-25 13:15:47', NULL),
(529, 23, 'SP-36', 'Metal Flower Stand', NULL, NULL, NULL, 80, 'pcs', 50, 'product/hSRd5xxLZzM4wi9hIeosFYsPTFcD88xR1jjbldBt.jpg', 1, '2023-10-25 13:16:10', '2023-10-25 13:16:10', NULL),
(530, 23, 'SP-37', 'Metal Show Piece', NULL, NULL, NULL, 1, 'pcs', 200, 'product/cRtROqOu8p5LnfP1WtjcayAYdtxUP6PcR1UOv7U2.jpg', 1, '2023-10-25 13:16:39', '2023-10-25 13:16:39', NULL),
(531, 23, 'SP-38', 'Metal Show Piece', NULL, NULL, NULL, 1, 'pcs', 100, 'product/SBp7Ra35xvShqr6pjyAMREZvPKJpC7fBSWilmMsJ.jpg', 1, '2023-10-25 13:17:00', '2023-10-25 13:17:00', NULL),
(532, 1, 'PF-01', 'গাড়ি ভাড়া', NULL, '1 Trip', NULL, 10, 'pcs', 1500, 'product/8P7AAZ1i6yI6mKs6bqa0puWfDkUz1WJ8vo8Rxdbs.jpg', 1, '2023-10-25 20:42:13', '2023-10-31 22:31:20', NULL),
(533, 1, 'L-1', 'Labor', 'লেবার', NULL, NULL, 20, 'pcs', 800, 'product/w9b3fbCc8hu2Qkkb1j7tkp2rrw0XnbrqUfKjdQdC.png', 1, '2023-10-25 20:43:29', '2023-11-09 03:37:01', NULL),
(534, 25, 'TT-01', 'Mirror Cake Table', 'কাচের কেক টেবিল', NULL, NULL, 1, 'pcs', 2000, 'product/z7kRRrIlDrOcsuIN72sfwaa6vqiG046kAXSI3lSk.jpg', 1, '2023-10-27 15:35:27', '2023-11-16 15:55:33', NULL),
(535, 25, 'TT-02', 'VIP T-Table', 'ভিআইপি টি টেবিল', NULL, NULL, 2, 'pcs', 1000, 'product/1CZJnog4T2ZyMtd6KfbXlrH7hC6dCxDGrDZMkPm3.png', 1, '2023-10-27 15:36:48', '2023-11-16 15:55:55', NULL),
(536, 25, 'TT-03', 'VIP T-Table', 'ভিআইপি টি টেবিল', NULL, NULL, 2, 'pcs', 1000, 'product/tGoFsIh2Qzym5MAIp5034W16l1TTMdkXKL1gqXc2.jpg', 1, '2023-10-27 15:38:03', '2023-11-16 15:56:26', NULL),
(537, 25, 'TT-04', 'SS Box T-Table', 'এসএস বক্স টি টেবিল', NULL, NULL, 5, 'pcs', 1000, 'product/OkbOr5SdA7xWJiAZOp5zbT5F2JD0pMXNXp8H2B7j.jpg', 1, '2023-10-27 16:19:22', '2023-11-16 15:56:57', NULL),
(538, 25, 'TT-05', 'T-Table', 'টি-টেবিল', NULL, NULL, 8, 'pcs', 300, 'product/rwjD4K9yD35PxYg3yi1q3cjVOTcMhsuLnJ8h4YEi.jpg', 1, '2023-10-27 16:19:53', '2023-11-17 16:31:23', NULL),
(539, 25, 'TT-06', 'T-Table', 'টি-টেবিল', NULL, NULL, 6, 'pcs', 500, 'product/voOzEh9IbTjQo6NQmknEeEd19U8UhjCe352VVdQy.jpg', 1, '2023-10-27 16:20:37', '2023-11-16 15:57:42', NULL),
(540, 25, 'TT-07', 'Gift Table', 'গিফট টেবিল', NULL, NULL, 1, 'pcs', 1000, 'product/OnvVRlYQ6XD7nAZubiUXP7lFlgjrPuEhhmOrDb2S.jpg', 1, '2023-10-27 16:21:05', '2023-11-16 15:58:01', NULL),
(541, 25, 'TT-08', 'Wooden Design Box Tool', 'কাঠের ডিজাইন বক্স টুল', NULL, NULL, 12, 'pcs', 200, 'product/OAv9LGhIs7tQIBfEaTAjjfHJOpDX1xuSN6VUIuOe.jpg', 1, '2023-10-27 16:23:52', '2023-11-17 14:57:10', NULL),
(542, 25, 'TT-09', 'Wooden Design Box Tool', NULL, NULL, NULL, 2, 'pcs', 200, 'product/nH8pfvDjK7UOcUjsrEQHPrb6hYwcD2qFE93YRG2p.jpg', 1, '2023-10-27 16:24:20', '2023-10-27 16:24:20', NULL),
(543, 25, 'TT-10', 'Wooden Design Box Tool', 'কাঠের ডিজাইন বক্স টুল', NULL, NULL, 12, 'pcs', 200, 'product/ZJXGd8eeuocyIBeyuvEoEiOZltxPi6S9DoynwqRM.jpg', 1, '2023-10-27 16:24:40', '2023-11-17 14:57:33', NULL),
(544, 25, 'TT-11', 'Wooden Design Box Tool', NULL, NULL, NULL, 12, 'pcs', 200, 'product/xfaYUt6vPxLwrA86Bt1ncGgEngtB96VRmRVPosj6.jpg', 1, '2023-10-27 16:25:24', '2023-11-17 14:58:20', NULL),
(545, 25, 'TT-12', 'Minar Wooden Box', NULL, NULL, NULL, 4, 'pcs', 500, 'product/5VTF5LIufe7ALqQELAoV36tKSV4et2vVZ8n69W7h.jpg', 1, '2023-10-27 16:26:16', '2023-10-27 16:26:16', NULL),
(546, 25, 'TT-13', 'Minar Wooden Box', NULL, NULL, NULL, 4, 'pcs', 500, 'product/ryDlLmfs0f1a0Kwe5tk4QU1GhRf6wJyNdgl9uPgY.jpg', 1, '2023-10-27 16:26:40', '2023-10-27 16:26:40', NULL),
(547, 25, 'TT-14', 'T-Table', NULL, NULL, NULL, 5, 'pcs', 200, 'product/O1X2T37x9Kqg671xZ1XsOde9OAgx0DNZJ9Usax2b.jpg', 1, '2023-10-27 16:27:07', '2023-10-27 16:27:07', NULL),
(548, 25, 'TT-15', 'Round Side Table', NULL, NULL, NULL, 5, 'pcs', 500, 'product/i35w0Rzt0gpI1eqpwRUTWGh08s7RwA6QJii6AaEr.jpg', 1, '2023-10-27 16:29:12', '2023-10-27 16:29:12', NULL),
(549, 25, 'TT-16', 'One Side Table', NULL, NULL, NULL, 4, 'pcs', 500, 'product/d8EYtc7IOk4KHHKW97tlCp0i5VX1tCbsafgyryVS.jpg', 1, '2023-10-27 16:33:45', '2023-10-27 16:33:45', NULL),
(550, 25, 'TT-17', 'Bar Tool', NULL, NULL, NULL, 6, 'pcs', 500, 'product/uCHeZsgRhqpapYXk390Nbk2ZkzdiolTHgmGlqREh.jpg', 1, '2023-10-27 16:34:33', '2023-10-27 16:34:49', NULL),
(551, 36, 'FC-01', 'Bar Tool', NULL, NULL, NULL, 2, 'pcs', 2000, 'product/O2Hkpv4Gi5nKl0z7BGseJChHwEB5b813S0qrqQDD.jpg', 1, '2023-10-27 16:38:46', '2023-10-27 16:38:46', NULL),
(552, 36, 'FC-02', 'Food Court', NULL, NULL, NULL, 12, 'pcs', 3000, 'product/LLNhI2oaCMTEyrVz0cBzcdHfONMkcEpUC0TeEYIo.jpg', 1, '2023-10-27 16:39:13', '2023-10-27 16:39:13', NULL),
(553, 25, 'TT-20', 'SS Box T-Table Clear Glass', NULL, 'L-4 feet, W-26 in, H-18 inch', NULL, 2, 'pcs', 1500, 'product/t4eRPPCxFNZDNG8JmYohUq91ZqjNA6Vymo5IzaAk.jpg', 1, '2023-10-27 16:41:48', '2023-10-27 16:47:14', NULL),
(554, 25, 'TT-21', 'VIP SS Golden Round T-Table Glass', NULL, 'H-18in, Dia-30inch', NULL, 2, 'pcs', 1000, 'product/KbccxEN4wuL1p79w9vO6ZTYE2c68fQ6xLMTuh2Mc.jpg', 1, '2023-10-27 16:42:51', '2023-10-27 16:49:14', NULL),
(555, 25, 'TT-19', 'VIP SS Golden Round T-Table Glass', NULL, 'L-3 feet, W-22 in, H-18 inch', NULL, 4, 'pcs', 1000, 'product/IuSSGM45arLlpp0nRHsWuG8Wb1RXHAf19XYJltBS.jpg', 1, '2023-10-27 16:46:40', '2023-11-17 15:03:42', '2023-11-17 15:03:42'),
(556, 13, 'CND-27', 'SS Crystal Chandelier', 'এসএস ক্রিস্টাল স্যান্ডেলিয়ার বড়', 'Large', NULL, 12, 'pcs', 2000, 'product/2Fv2JEJL8znDFpSf5JBYVAtrel7oHsMzqpC9Pu60.jpg', 1, '2023-10-28 18:37:08', '2023-11-12 19:43:36', NULL),
(557, 13, 'CND-28', 'SS Crystal Chandelier', 'এসএস স্যান্ডেলিয়ার ছোট', 'Small', NULL, 9, 'pcs', 1000, 'product/C7IGRtM3j8a4JFhZ5QGYPtfrcQZunqpe7xfNP1Oz.jpg', 1, '2023-10-28 18:39:35', '2023-11-13 19:51:58', NULL),
(558, 37, 'FM-01', 'Walkway Red Design Carpet', NULL, '50 feet, 30 feet', 'Red', 3, 'pcs', 1500, 'product/YrNHi37Nb0SSgfLjpTImuDIYLAJHCUcUZoVWeVPc.jpg', 1, '2023-11-02 15:20:49', '2023-11-02 17:45:47', NULL),
(559, 37, 'FM-02', 'Sofa Carpet', NULL, '4x6 feet', NULL, 1, 'pcs', 1000, 'product/re0Fv1CZxzSzDV9t26AMN5MrIV3h4WXuY7Dtazq0.jpg', 1, '2023-11-02 15:23:40', '2023-11-02 15:23:40', NULL),
(560, 37, 'FM-03', 'Grass Carpet', NULL, '11000 SFT', NULL, 11000, 'pcs', 10, 'product/BBdL3igNhMk38uYdURRGZAoQSkGOH6kghmIot3R3.jpg', 1, '2023-11-02 15:26:04', '2023-11-03 15:50:07', NULL),
(561, 37, 'FM-04', 'Walkway Red Design Carpet', NULL, '50 feet, 30 feet', NULL, 1500, 'pcs', 6, 'product/VrQresqhYuGAUkm6OxRxJrqd3IICkshDm8XMt6mX.jpg', 1, '2023-11-02 17:46:48', '2023-11-04 20:37:22', NULL),
(562, 15, 'EP-01', 'White Peacock Feather', 'সাদা ময়ুরের পালক', NULL, NULL, 220, 'pcs', 50, 'product/gn5Jz8MHtd0vvvBukwhjUxm9uJ8BwrBjcrdOLLvs.jpg', 1, '2023-11-02 17:49:24', '2023-11-16 19:42:42', NULL),
(563, 15, 'EP-02', 'Piece Peacock Feather', 'পিস ময়ুরের পালক', NULL, NULL, 50, 'pcs', 50, 'product/JdhBAhE6yWOFk3wI4yB0li8VUm911vH9USbi48sx.jpg', 1, '2023-11-02 18:04:00', '2023-11-11 14:53:29', NULL),
(564, 15, 'EP-03', 'Peacock Feather', 'ময়ুরের পালক', NULL, NULL, 185, 'pcs', 20, 'product/2vz1Cy3OvCBHN6owwAc2cBguayrZjIng6t6NiaHO.jpg', 1, '2023-11-02 18:05:25', '2023-11-11 14:53:52', NULL),
(565, 15, 'EP-04', 'Head Table Charger', 'হেড টেবিল চার্জার', NULL, NULL, 32, 'pcs', 500, 'product/Y7UAuHlnUHGVBCtuQ08qNXTR80j0AUH75X77RnVe.jpg', 1, '2023-11-02 18:06:40', '2023-11-11 14:54:22', NULL),
(566, 15, 'EP-05', 'Tire', 'টায়ার', 'per pc', 'Multi', 20, 'pcs', 100, 'product/yVHr0pUob3OW6PoqLqROOytUxnAuNst4av4ow3Mz.jpg', 1, '2023-11-02 18:07:46', '2023-11-11 14:55:27', NULL),
(567, 15, 'EP-06', 'Direction Sign', NULL, NULL, NULL, 12, 'pcs', 100, 'product/jRXQF8gw8zPsI1XEEt0jpMBdwYp012nJaiZsU5g7.jpg', 1, '2023-11-02 18:08:12', '2023-11-02 18:08:12', NULL),
(568, 15, 'EP-07', 'Easel Frame Welcome Banner Stand', 'ওয়েলকাম ব্যানার স্টান্ড', NULL, NULL, 12, 'pcs', 200, 'product/SEkGaQbTc9UEICoGuu3lpuOC3Lx7rn9hMfEBWL8T.jpg', 1, '2023-11-02 18:09:45', '2023-11-11 14:49:44', NULL),
(569, 15, 'EP-09', 'Glass Welcome Banner', 'গ্লাসের ওয়েলকাম ব্যানার', NULL, NULL, 2, 'pcs', 500, 'product/efmi7EQq3xWiCJdVyGp1byENPV2lgrJ3HW5mLiz6.jpg', 1, '2023-11-02 18:10:51', '2023-11-09 14:34:11', NULL),
(570, 15, 'EP-10', 'Grass Block', NULL, '1x1=65pcs, 1.5x2=75pcs', NULL, 140, 'pcs', 50, 'product/n2WOsiKuJylXpngJKn5RgdKs7nw0RLWf9FQ7v1zK.jpg', 1, '2023-11-02 18:13:21', '2023-11-02 18:13:21', NULL),
(571, 15, 'EP-11', 'Grass Fence', NULL, '4x8 feet', NULL, 20, 'pcs', 1000, 'product/zbJYGRDI4d4C2IIMGqBqIN13nosBTVBEJzcEhbqJ.jpg', 1, '2023-11-02 18:14:26', '2023-11-02 18:14:26', NULL),
(572, 15, 'EP-12', 'Grass Fence', NULL, '2x8 feet', NULL, 14, 'pcs', 500, 'product/1y8Ow4uh6iD2AFVTRbHFXGL8bGWpFtbbjGK7ByDN.jpg', 1, '2023-11-02 18:15:12', '2023-11-02 18:15:12', NULL),
(573, 15, 'EP-13', 'Grass Fence', 'ঘাসের বেড়া', '2x4 feet', NULL, 12, 'pcs', 250, 'product/PA8t5BS0v6LdlGFK6IWW8awSQGzORBqC9XyVUg0w.jpg', 1, '2023-11-02 18:16:16', '2023-11-09 03:43:44', NULL),
(574, 20, 'LT-14', 'Better Together', 'বেটার টুগেদার', NULL, NULL, 1, 'pcs', 2000, 'product/eAinZUBqsvRnjKipTWQNReJOXsLTCAD3Aht5MQXU.jpg', 1, '2023-11-03 18:36:12', '2023-11-09 03:43:13', NULL),
(575, 29, 'WW-22', 'Stand Walkway', 'স্টান্ড ওয়াকওয়ে', NULL, NULL, 2, 'pcs', 1000, 'product/zMSAyGUlFQQoXq0aXccWxmeXRfEjiYRFPsKKKcue.jpg', 1, '2023-11-03 23:38:24', '2023-11-09 03:42:48', NULL),
(576, 30, 'WP-01', 'Wooden Backdrop 6x3 ft', 'কাঠের ব্যাকড্রপ', '6 feet x 3 feet', NULL, 4, 'pcs', 3000, 'product/M4x5iK6Sr0HjyYeBIsZKfLFoEsLJuP3hoLhnBlmw.jpg', 1, '2023-11-05 16:04:48', '2023-11-10 01:06:32', NULL),
(577, 30, 'WP-02', 'Wooden Backdrop 3x8 ft', 'কাঠের ব্যাকড্রপ', '3 feet x 8 feet', 'Wooden', 6, 'pcs', 3000, 'product/nP4ArvVWySURIpAvfBqfcXvulyvqgNGnzC0ywAjw.jpg', 1, '2023-11-05 16:05:37', '2023-11-10 01:06:07', NULL),
(578, 30, 'WP-03', 'Board Wall 4x8 feet', 'বোর্ড ওয়াল', '4 feet x 8 feet', 'Wooden', 28, 'pcs', 500, 'product/Md0zL2ZC0lNvNKFDCqqzB0bSKfNvTOUiRsEkwlID.jpg', 1, '2023-11-05 16:08:38', '2023-11-10 01:05:20', NULL),
(579, 30, 'WP-04', 'Board Wall 2x8 feet', NULL, '2 feet x 8 feet', 'Wooden', 24, 'pcs', 300, 'product/63h3HKeQ78hl6rVgEDavmpzFGQe7TVx0sEJONqF6.jpg', 1, '2023-11-05 16:11:27', '2023-11-05 16:11:27', NULL),
(580, 30, 'WP-05', 'Board Wall 2x4 feet', 'বোর্ড ওয়াল', '2x4 feet', 'Wooden', 6, 'pcs', 300, 'product/F5eJGmKB71pyOBnR80aOkEUW0F2HbWXw56dQ0OTS.jpg', 1, '2023-11-05 16:12:27', '2023-11-10 01:05:04', NULL),
(581, 30, 'WP-06', 'Board Wall 2x2 feet', 'বোর্ড ওয়াল', '2x2 feet', 'Wooden', 4, 'pcs', 200, 'product/y657AtrFwYXrBYUmfBZyq0oQM7BQxGkQVZjMgayH.jpg', 1, '2023-11-05 16:13:12', '2023-11-10 01:03:18', NULL),
(582, 30, 'WP-07', 'Wooden Minar Frame 4x4 feet', 'কাঠের মিনার আর্চ', '4x4 feet', NULL, 5, 'pcs', 500, 'product/E26R9fOv1wYCL08TExHvGz34TX6FBacLZLpk6j3f.jpg', 1, '2023-11-05 16:16:51', '2023-11-10 01:04:28', NULL),
(583, 30, 'WP-08', 'Wooden Minar Frame 4x8 feet', 'কাঠের মিনার আর্চ', '4x8 feet', 'Wooden', 5, 'pcs', 500, 'product/ix91uCoeGGtc56go8AZO58hzL6MIQWnVc5YFVBJy.jpg', 1, '2023-11-05 16:17:49', '2023-11-10 01:04:00', NULL),
(584, 30, 'WP-09', 'Wooden Minar Frame 4x6 feet', 'কাঠের মিনার আর্চ', '4x6 feet', 'Wooden', 4, 'pcs', 500, 'product/wmIZFcv8wugiWaI3NppY12kfpSyEEjX2lliphztg.jpg', 1, '2023-11-05 16:18:30', '2023-11-10 15:20:40', NULL),
(585, 30, 'WP-10', 'Wooden Minar Frame 6x6 feet', 'কাঠের মিনার আর্চ', '6x6 feet', NULL, 4, 'pcs', 500, 'product/2auqBioSjSEVjHU1rWVjPzhfdcvNNwMJTxAbCqem.jpg', 1, '2023-11-05 16:19:05', '2023-11-10 01:02:48', NULL),
(586, 30, 'WP-11', 'Wooden Minar Frame 4x4 feet', 'কাঠের মিনার আর্চ', '4x4 feet', 'Wooden', 5, 'pcs', 500, 'product/cXJqTnp1R82St0sk9EdF6B96y66NzglMZWYSVWyV.jpg', 1, '2023-11-05 16:27:32', '2023-11-10 01:02:20', NULL),
(587, 30, 'WP-12', 'Wooden Minar Frame 4x8 feet', 'কাঠের মিনার আর্চ', '4x8 feet', NULL, 5, 'pcs', 500, 'product/nYuiQBFcDK4LVMWBbh2C8499czSCWJEZxBOkrTrI.jpg', 1, '2023-11-05 16:28:12', '2023-11-10 01:01:49', NULL),
(588, 30, 'WP-13', 'Wooden Minar Frame 4x6 feet', 'কাঠের মিনার আর্চ', '4x6 feet', 'Wooden', 4, 'pcs', 500, 'product/QNa32mhv3iqeg0cimQ0YItCqdmvbvdMv0Yv43Atg.jpg', 1, '2023-11-05 16:29:41', '2023-11-10 01:00:37', NULL),
(589, 30, 'WP-14', 'Wooden Minar Frame 6x6 feet', 'কাঠের মিনার আর্চ', '6x6 feet', 'Wooden', 4, 'pcs', 500, 'product/ZdkoKtIKoQ9UlOVJkUTDcBXwS4cyLFNPd3gdJYnr.jpg', 1, '2023-11-05 16:31:37', '2023-11-10 01:01:05', NULL),
(590, 30, 'WP-15', 'Wooden Arch 5x9 feet', 'কাঠের আর্চ', '5x9 feet', 'Wooden', 2, 'pcs', 500, 'product/IG7CRiKsVlKDfgvfmd97Tz4GmpDgqNmuCAQ2KvYN.jpg', 1, '2023-11-05 16:33:35', '2023-11-10 00:59:29', NULL),
(591, 30, 'WP-16', 'WoodenArch 5x8 feet', 'কাঠের আর্চ', '5x8 feet', 'Wooden', 2, 'pcs', 500, 'product/Vrja7NbKWZKcZafwGrZOlApxF0Yx2yQUpBd8IelA.jpg', 1, '2023-11-05 16:34:27', '2023-11-10 00:58:53', NULL),
(592, 30, 'WP-17', 'Wooden Arch 6x8 feet', 'কাঠের আর্চ', '6x8 feet', 'Wooden', 5, 'pcs', 500, 'product/e7hHoe4dNNoaAZjNVG7m1OPAFRYXYgWSFuulMw1E.jpg', 1, '2023-11-05 16:35:18', '2023-11-10 00:58:19', NULL),
(593, 30, 'WP-18', 'Wooden Arch 4x6 feet', 'কাঠের আর্চ', '4x6 feet', 'Wooden', 5, 'pcs', 500, 'product/D8IzJqZb1SxYEUj4i2AnCiNSmUYIyb5xjEcOfGi5.jpg', 1, '2023-11-05 16:35:58', '2023-11-10 00:57:41', NULL),
(594, 30, 'WP-19', 'Wooden Round Frame 4x6 feet', 'কাঠের রাউন্ড ফ্রেম আর্চ', '4x6 feet', 'Wooden', 6, 'pcs', 300, 'product/aJ74BDDZgKaehhn3DfWh2WTuxSGGJX5W2HVuud0G.jpg', 1, '2023-11-05 16:42:55', '2023-11-09 19:36:49', NULL),
(595, 30, 'WP-20', 'Wooden Pillar 8\"x8\"x10\'', 'কাঠের পিলার', '8\"x8\"x10\'', NULL, 10, 'pcs', 500, 'product/9ypLIXMdrhQb2HfgP4h9vOcGyfNSIx8zgQU0vioU.jpg', 1, '2023-11-05 16:53:28', '2023-11-09 14:31:37', NULL),
(596, 30, 'WP-21', 'Wooden Pillar 8\"x8\"x9\'', 'কাঠের পিলার', '8\"x8\"x9\'', NULL, 10, 'pcs', 500, 'product/SylhhSimPH06lOXXENugmV3goqZFZxhbFmvfZJRt.jpg', 1, '2023-11-05 16:54:09', '2023-11-09 14:31:11', NULL),
(597, 30, 'WP-22', 'Wooden Pillar 8\"x8\"x8\'', 'কাঠের পিলার', '8\"x8\"x8\'', NULL, 10, 'pcs', 500, 'product/W0rskiaH5yWiBIfbM3N8VIstF07EEFujNTIqL7Sp.jpg', 1, '2023-11-05 16:54:40', '2023-11-09 14:30:41', NULL),
(598, 30, 'WP-23', 'Wooden Pillar 8\"x8\"x7\'', 'কাঠের পিলার', '8\"x8\"x7\'', NULL, 10, 'pcs', 500, 'product/Pfkr4tHp8Bg9PReJsZTZPLiWltFP7PnvZwYp7CHu.jpg', 1, '2023-11-05 16:55:16', '2023-11-09 14:30:18', NULL),
(599, 30, 'WP-24', 'Wooden Pillar 8\"x8\"x6\'', 'কাঠের পিলার', '8\"x8\"x6\'', NULL, 10, 'pcs', 500, 'product/jdIj4a6efVqByz152c4EKQgFPyUl6qkYu4KcpeSP.jpg', 1, '2023-11-05 16:55:55', '2023-11-09 14:29:48', NULL),
(600, 30, 'WP-25', 'Wooden Pillar 8\"x8\"x4\'', 'কাঠের পিলার', '8\"x8\"x4\'', NULL, 12, 'pcs', 500, 'product/oP2y9HoGB2PC80lUN92i2LvLRSyiZZIwH8kgTYtf.jpg', 1, '2023-11-05 16:56:39', '2023-11-09 03:39:52', NULL),
(601, 30, 'WP-26', 'Wooden Pillar 8\"x8\"x2\'', 'কাঠের পিলার', '8\"x8\"x2\'', NULL, 12, 'pcs', 500, 'product/dEFNu5eOFUwjHeC5m99d7i9ZIyIdGf96JAejz2O2.jpg', 1, '2023-11-05 16:57:15', '2023-11-09 03:39:31', NULL),
(602, 30, 'WP-27', 'Wooden Pillar 1\'x1\'x10\'', 'কাঠের পিলার', '1\'x1\'x10\'', NULL, 10, 'pcs', 500, 'product/eqsJmqFpH6uvudnvueLszuUKbgsHPgN0Fc58rpnN.jpg', 1, '2023-11-05 16:58:23', '2023-11-09 03:39:11', NULL),
(603, 30, 'WP-28', 'Wooden Pillar 1\'x1\'x8\'', 'কাঠের পিলার', '1\'x1\'x8\'', NULL, 12, 'pcs', 500, 'product/qrlp8H076ZUzzaNEFFD2yeAVi5EzSJU24l0heQrY.jpg', 1, '2023-11-05 16:58:55', '2023-11-09 03:35:54', NULL),
(604, 30, 'WP-29', 'Wooden Fence 1\'x1\'', 'কাঠের বেড়া', '1\'x1\'', NULL, 20, 'pcs', 100, 'product/hHrga0VFfqsqLQsJVzHKX841wyn3JSoG5CJXrsfS.jpg', 1, '2023-11-05 17:03:58', '2023-11-09 03:35:16', NULL),
(605, 30, 'WP-30', 'Wooden Fence 1\'x1.5\'', 'কাঠের বেড়া', '1\'x1.5\'', NULL, 50, 'pcs', 200, 'product/fhp675BB40k89KKshhWyTlKgwa8rLNvDjwynmQlK.jpg', 1, '2023-11-05 17:05:10', '2023-11-09 03:35:01', NULL),
(606, 30, 'WP-31', 'Wooden Fence 1\'x2\'', 'কাঠের বেড়া', '1\'x2\'', NULL, 60, 'pcs', 200, 'product/QizyaDnHJ9HHGlwfN9YUxM9LaSTifGN0qUtfGszm.jpg', 1, '2023-11-05 17:05:43', '2023-11-09 03:34:38', NULL),
(607, 30, 'WP-32', 'Wooden Half Round Arch 6\'x4\'', 'কাঠের হাফ রাউন্ড আর্চ', '6\'x4\'', NULL, 11, 'pcs', 500, 'product/DrIj47ZJql2V3cJSzhZR7ZYpjepvbhrvkAeItjPR.jpg', 1, '2023-11-05 17:18:55', '2023-11-09 03:34:20', NULL),
(608, 30, 'WP-33', 'Wooden Half Round Arch 8\'x4\'', 'কাঠের হাফ রাউন্ড আর্চ', '8\'x4\'', NULL, 12, 'pcs', 500, 'product/1uLZ0mSL2Kokag9nrYRfOMVlShHjT721lTSX77DC.jpg', 1, '2023-11-05 17:19:56', '2023-11-09 03:33:44', NULL),
(609, 30, 'WP-34', 'Wooden Arch 8\'x4\'', 'কাঠের আর্চ', '8\'x4\'', NULL, 1, 'pcs', 500, 'product/nV3yXc0HQeuitMeTTTwmPqEircUREXAJ4al5ztqW.jpg', 1, '2023-11-05 17:21:03', '2023-11-09 03:33:19', NULL),
(610, 30, 'WP-35', 'Wooden Arch 6\'x4\'', 'কাঠের আর্চ', '6\'x4\'', NULL, 4, 'pcs', 500, 'product/y5AHM9nckMcJlbGcj9Q2c9hCAHs0OGRTeSwHMn7A.jpg', 1, '2023-11-05 17:24:09', '2023-11-09 03:33:04', NULL),
(611, 30, 'WP-36', 'Wooden Arch 8\'x4\'', 'কাঠের আর্চ', '8\'x4\'', NULL, 5, 'pcs', 500, 'product/mTsNZhcIwoG52Xp3sTDtob8gQT8K5OskLj7A9tZ9.jpg', 1, '2023-11-05 17:24:45', '2023-11-09 03:32:48', NULL),
(612, 30, 'WP-37', 'Wooden Arch 8\'x4\'', 'কাঠের আর্চ', '8\'x4\'', NULL, 1, 'pcs', 500, 'product/KrOb9l2UV3wVLURbtJTGC2aqF2MOsOEFnyMkSMqp.jpg', 1, '2023-11-05 17:25:36', '2023-11-09 03:32:35', NULL),
(613, 39, 'MR-01', 'Metal Stage Frame', 'মেটাল স্টেজ ফ্রেম', NULL, NULL, 1, 'pcs', 12000, 'product/Mw1lr4Qy9sp0kF4iiS2CnQRNZUJcplpZuB9UzfwF.jpg', 1, '2023-11-05 17:59:46', '2023-11-09 03:27:14', NULL),
(614, 19, 'HT-01', 'Squire Glass Head Table 20 person', '২০ জনের স্কয়ার হেড টেবিল', '20\'x4\'', NULL, 1, 'pcs', 10000, 'product/OM9O8vcWUj1uk3tkYVg1yXxeOj8dqb2u2U9Nuhno.jpg', 1, '2023-11-05 19:39:09', '2023-11-09 03:26:46', NULL),
(615, 19, 'HT-02', 'Eye Shape Head Table', 'চোখ আকৃতি হেড টেবিল', NULL, NULL, 1, 'pcs', 7000, 'product/KbSL7Hk4hfVIgxknLt16EjfMTLWYO7hkejfX9LkJ.jpg', 1, '2023-11-05 19:39:49', '2023-11-09 03:25:58', NULL),
(616, 19, 'HT-03', 'S Shape Head Table', 'হেড টেবিল এস আকৃতি', NULL, NULL, 1, 'pcs', 7000, 'product/Z732AljLG7XhfPSRE36mn60aqJIAZVat8arA4eHR.jpg', 1, '2023-11-05 19:40:23', '2023-11-09 03:25:00', NULL),
(617, 19, 'HT-04', 'Round Glass Head Table', 'রাউন্ড গ্লাস হেড টেবিল', NULL, NULL, 2, 'pcs', 7000, 'product/uUxx49g1VUoyeTUQuUrGsx5z5urJscpVkzLcebCW.jpg', 1, '2023-11-05 19:41:01', '2023-11-09 03:23:38', NULL),
(618, 21, 'MS-101', 'Metal Pillar H-10ft', 'মেটাল পিলার ১০ ফিটি', 'w-10\" x l-10\" x H-10\'', NULL, 30, 'pcs', 1000, 'product/rJmfUnQ0x7vdbwm1R46wuFkWgYvFwQIytNmCYs7p.jpg', 1, '2023-11-07 15:00:44', '2023-11-09 03:20:45', NULL),
(619, 21, 'MS-61.1', 'Bahu', 'বাহু', 'H-5\'', NULL, 20, 'pcs', 20, 'product/ABsPQBJnmzCX0W8psP3OigixjkJCk3eVloDUZWex.jpg', 1, '2023-11-08 18:43:46', '2023-11-11 16:04:42', NULL),
(620, 21, 'MS-61.2', 'Bahu', 'বাহু', 'H-6\'', NULL, 20, 'pcs', 20, 'product/T25y7iiGQNY1YMyui1Ir2Q1eyHlu4apOf4sHkhSl.jpg', 1, '2023-11-08 18:44:54', '2023-11-09 16:09:19', NULL),
(621, 21, 'MS-61.3', 'Bahu', 'বাহু', 'H-8\'', NULL, 16, 'pcs', 20, 'product/vbtsUwtxfl5NMEWQN1Pm6rosIpInv7sjJcWRZUYk.jpg', 1, '2023-11-08 18:45:25', '2023-11-13 19:51:58', NULL),
(622, 21, 'MS-61.4', 'Bahu', 'বাহু', 'H-10\'', NULL, 30, 'pcs', 20, 'product/BoZvAiuI2mJK5IbbvCqvmnUiYWCgrJoH3pv04SDV.jpg', 1, '2023-11-08 18:46:13', '2023-11-09 16:08:57', NULL),
(623, 21, 'MS-61.5', 'Bahu', 'বাহু/বিট মই', 'H-4\'', NULL, 20, 'pcs', 20, 'product/LLNeQKamZfE0dgjax8DDnyWCY0WgofcD68Qmt1Jc.jpg', 1, '2023-11-08 18:47:17', '2023-11-09 16:08:40', NULL),
(624, 21, 'MS-34.1', 'Metal Design Fence', 'মেটাল ডিজাইন বেড়া', 'W-6\' x H-10\'', NULL, 4, 'pcs', 1200, 'product/x5JfjlUgXmjL0nc2eY7G3HjV0J6vNzmV1h5y7Vya.jpg', 1, '2023-11-08 18:50:51', '2023-11-09 03:19:39', NULL),
(625, 21, 'MS-41.1', 'Metal Box Frame', 'মেটাল বক্স ফ্রেম', 'W-6\' x H-10\'', NULL, 4, 'pcs', 200, 'product/qZU5ecOD5ucaa4VoDzx1aqwmmGWY8cGyxYYzilVF.jpg', 1, '2023-11-08 18:54:56', '2023-11-09 03:19:11', NULL),
(626, 21, 'MS-41.2', 'Metal Box Frame', 'মেটাল বক্স ফ্রেম', 'W-5\' x H-8\'', NULL, 4, 'pcs', 200, 'product/7913owovmJCpHFmgG3zn6coONr3pbvFnuGZ68gTF.jpg', 1, '2023-11-08 18:56:20', '2023-11-09 02:51:31', NULL),
(627, 21, 'MS-41.3', 'Metal Box Frame', 'মেটাল বক্স ফ্রেম', 'W-5\' x H-10\'', NULL, 4, 'pcs', 200, 'product/4atDqOQVvaCFXD3T2pwHT9MW9D9WNiA4g4vr1NpA.jpg', 1, '2023-11-08 18:56:53', '2023-11-09 02:51:07', NULL),
(628, 1, 'L-2', 'Labor', 'লেবার', NULL, NULL, 20, 'pcs', 700, 'product/DgAEKjUfdA9QHxWrPBTNWWSAwzN4CljjtVUgBlhN.png', 1, '2023-11-09 03:38:05', '2023-11-09 03:38:48', NULL),
(629, 39, 'MT-01', 'Mini Truss', 'মিনি ট্রাস', 'W20\' x L20\' H-10\'/15\'', NULL, 3, 'pcs', 12000, 'product/FRk78Fp5uYmhDNiAtNkLYxvx1wNzoJVtt0eMM3ta.jpg', 1, '2023-11-10 15:37:48', '2023-11-13 20:05:25', NULL),
(630, 14, 'C-29', 'Marron Velvet', 'মেরুন ভেলভেট কাপড়', '154 Yards', NULL, 154, 'pcs', 20, 'product/4EGUyQ1xewoXZ25iaNZdjdDlm4LoH2HugSi5EdSh.jpg', 1, '2023-11-14 15:11:58', '2023-11-14 15:11:58', NULL),
(631, 25, 'TT-22', 'VIP SS Golden Round T-Table', 'ভিআইপি রাউন্ড এসএস টি-টেবিল', NULL, 'Golden', 1, 'pcs', 1000, 'product/QKdDK3DcAgncD6i4t4PBlzsH8u3QP95E2s36vqyn.jpg', 1, '2023-11-16 16:17:06', '2023-11-16 16:17:06', NULL),
(632, 25, 'TT-23', 'Wooden Console T-Table', 'কাঠের কনসোল টি টেবিল', 'L-48\", W-24\", H-36\"', NULL, 3, 'pcs', 1000, 'product/73DoMB1vIu0FRr6ZquOzvYFF6AABFTZixTkDqpuQ.jpg', 1, '2023-11-16 16:19:20', '2023-11-20 14:41:17', NULL),
(633, 25, 'TT-24', 'Wooden Console T-Table', 'কাঠের কনসোল টেবিল', 'L-48\", W-24\", H-30', NULL, 2, 'pcs', 1000, 'product/NxsoDcMmCOKaAUrCBNZIbdGIcu7XLr6tVSB8QwF7.jpg', 1, '2023-11-16 16:20:11', '2023-11-20 14:40:50', NULL),
(634, 25, 'TT-25', 'Wooden Console T-Table', 'কাঠের কনসোল টেবিল', 'L-49\", W-36\", H-20\"', NULL, 1, 'pcs', 1000, 'product/rzqUaeFYQZ3kqVLe2UIfd1rkUOoLe7rAElSjfV5a.jpg', 1, '2023-11-16 16:21:29', '2023-11-20 14:40:30', NULL),
(635, 25, 'TT-26', 'CNC Minar Side Table', 'সিএনসি মিনার সাইড টেবিল', 'L-19\', W-18, H-24', NULL, 8, 'pcs', 200, 'product/ZWErAhBAd2og7c9cIrl2b2okcuksHj5NoSw1HNGR.jpg', 1, '2023-11-17 15:05:46', '2023-11-17 15:05:46', NULL),
(636, 25, 'TT-27', 'CNC Side Table', 'সিএনসি সাইড টেবিল', NULL, NULL, 18, 'pcs', 200, 'product/mYLvvnrvFwjWsuZ5bXOiZCnFJzEmv7B9xlDZeyAW.jpg', 1, '2023-11-17 15:10:25', '2023-11-20 14:40:08', NULL),
(637, 25, 'TT-29', 'MS Coffee Table', 'এমএস কফি টেবিল', NULL, NULL, 4, 'pcs', 1000, 'product/qUqfJnPdUckyEwMjzqcR8sP7fRL4BDdoGmyypvbO.jpg', 1, '2023-11-17 15:34:17', '2023-11-17 15:34:17', NULL),
(638, 16, 'FV-10', 'Wooden Flower Stone', 'কাঠের ফ্লাওয়ার স্টোন', 'Large-6pcs, Small-6pcs', NULL, 12, 'pcs', 200, 'product/KsMdT9xjdTh1AQww0Vmwx3j8WsfzRukOMgepIh9q.png', 1, '2023-11-17 16:07:51', '2023-11-17 16:07:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `starting_date` datetime NOT NULL,
  `ending_date` datetime NOT NULL,
  `number_of_days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `customer_id`, `product_id`, `invoice_id`, `quantity`, `status`, `starting_date`, `ending_date`, `number_of_days`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 84, 1301, 20, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:46:00', '2023-11-03 23:01:05', NULL),
(2, 1, 85, 1301, 5, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:46:00', '2023-11-03 23:01:09', NULL),
(3, 1, 109, 1301, 1, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:46:00', '2023-11-03 23:01:13', NULL),
(4, 1, 110, 1301, 1, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:46:00', '2023-11-03 23:01:17', NULL),
(5, 2, 72, 1302, 2, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:53:07', '2023-11-03 23:01:47', NULL),
(6, 2, 73, 1302, 10, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:53:07', '2023-11-03 23:01:52', NULL),
(7, 2, 74, 1302, 5, 'returned', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-11-02 20:53:07', '2023-11-03 23:01:57', NULL),
(8, 41, 112, 1303, 6, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:39', NULL),
(9, 41, 95, 1303, 6, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:43', NULL),
(10, 41, 94, 1303, 3, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:46', NULL),
(11, 41, 92, 1303, 3, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:50', NULL),
(12, 41, 96, 1303, 3, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:53', NULL),
(13, 41, 84, 1303, 1, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 04:16:44', '2023-11-04 20:35:56', NULL),
(14, 11, 477, 1304, 2, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 13:15:01', '2023-11-04 16:21:22', NULL),
(15, 104, 463, 1305, 8, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:06', NULL),
(16, 104, 462, 1305, 2, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:10', NULL),
(17, 104, 464, 1305, 6, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:14', NULL),
(18, 104, 59, 1305, 4, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:17', NULL),
(19, 104, 24, 1305, 1, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:21', NULL),
(20, 104, 501, 1305, 4, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:29:41', '2023-11-04 20:36:24', NULL),
(21, 104, 574, 1305, 1, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-03 18:36:36', '2023-11-04 20:36:29', NULL),
(22, 103, 188, 1306, 4, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:36:42', NULL),
(23, 103, 186, 1306, 4, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:02', NULL),
(24, 103, 195, 1306, 2, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:05', NULL),
(25, 103, 315, 1306, 6, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:14', NULL),
(26, 103, 575, 1306, 2, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:17', NULL),
(27, 103, 375, 1306, 1, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:20', NULL),
(28, 103, 561, 1306, 251, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:22', NULL),
(29, 103, 475, 1306, 1, 'returned', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-11-04 00:04:44', '2023-11-04 20:37:25', NULL),
(35, 105, 102, 1307, 2, 'returned', '2023-11-05 00:00:00', '2023-11-06 00:00:00', 1, '2023-11-05 19:04:24', '2023-11-07 17:55:21', NULL),
(36, 1, 21, 1308, 2, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-07 17:49:27', '2023-11-07 17:55:32', NULL),
(38, 13, 203, 1309, 500, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-07 20:15:13', '2023-11-09 03:28:57', NULL),
(41, 1, 21, 1310, 2, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-08 00:37:53', '2023-11-08 00:46:00', NULL),
(42, 1, 73, 1310, 10, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-08 00:37:53', '2023-11-08 00:46:08', NULL),
(43, 1, 84, 1310, 20, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-08 00:37:53', '2023-11-08 00:46:29', NULL),
(44, 1, 413, 1310, 5, 'returned', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-11-08 00:41:15', '2023-11-08 00:47:25', NULL),
(45, 66, 260, 1311, 50, 'returned', '2023-11-08 00:00:00', '2023-11-09 00:00:00', 1, '2023-11-08 16:59:46', '2023-11-11 16:04:11', NULL),
(47, 66, 260, 1312, 70, 'returned', '2023-11-08 00:00:00', '2023-11-09 00:00:00', 1, '2023-11-08 22:14:35', '2023-11-11 16:04:18', NULL),
(48, 66, 463, 1312, 2, 'returned', '2023-11-08 00:00:00', '2023-11-09 00:00:00', 1, '2023-11-08 22:14:35', '2023-11-11 16:04:22', NULL),
(50, 104, 463, 1313, 8, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 15:56:50', '2023-11-11 16:04:29', NULL),
(51, 104, 219, 1313, 200, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 15:56:50', '2023-11-11 16:04:35', NULL),
(52, 104, 619, 1313, 3, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 15:56:50', '2023-11-11 16:04:42', NULL),
(53, 104, 84, 1313, 3, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 15:56:50', '2023-11-11 16:04:47', NULL),
(54, 17, 462, 1314, 6, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 16:36:29', '2023-11-11 16:04:54', NULL),
(55, 17, 461, 1314, 1, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 16:36:29', '2023-11-11 16:04:58', NULL),
(56, 17, 203, 1314, 200, 'returned', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-09 16:36:29', '2023-11-11 16:05:02', NULL),
(57, 6, 84, 1315, 6, 'approved', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-10 02:39:39', '2023-11-10 16:41:58', NULL),
(58, 107, 188, 1316, 4, 'approved', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-10 04:30:40', '2023-11-10 15:32:05', NULL),
(59, 107, 186, 1316, 4, 'approved', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-10 04:30:40', '2023-11-10 15:32:05', NULL),
(60, 107, 193, 1316, 1, 'approved', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-10 04:30:40', '2023-11-10 15:32:05', NULL),
(62, 107, 448, 1316, 4, 'approved', '2023-11-09 00:00:00', '2023-11-10 00:00:00', 1, '2023-11-10 15:32:05', '2023-11-10 15:32:05', NULL),
(63, 39, 629, 1317, 1, 'returned', '2023-11-10 00:00:00', '2023-11-11 00:00:00', 1, '2023-11-10 15:43:39', '2023-11-11 16:05:10', NULL),
(64, 104, 203, 1318, 300, 'returned', '2023-11-10 00:00:00', '2023-11-11 00:00:00', 1, '2023-11-10 15:48:15', '2023-11-11 16:05:17', NULL),
(65, 104, 214, 1318, 50, 'returned', '2023-11-10 00:00:00', '2023-11-11 00:00:00', 1, '2023-11-10 15:48:15', '2023-11-11 16:05:25', NULL),
(66, 104, 464, 1318, 3, 'returned', '2023-11-10 00:00:00', '2023-11-11 00:00:00', 1, '2023-11-10 15:48:15', '2023-11-11 16:05:29', NULL),
(67, 104, 59, 1318, 2, 'returned', '2023-11-10 00:00:00', '2023-11-11 00:00:00', 1, '2023-11-10 15:48:15', '2023-11-11 16:05:33', NULL),
(81, 5, 401, 1319, 2, 'approved', '2023-11-12 00:00:00', '2023-11-13 00:00:00', 1, '2023-11-12 19:54:50', '2023-11-13 19:51:58', NULL),
(82, 5, 557, 1319, 3, 'approved', '2023-11-12 00:00:00', '2023-11-13 00:00:00', 1, '2023-11-12 19:54:50', '2023-11-13 19:51:58', NULL),
(83, 5, 462, 1319, 5, 'approved', '2023-11-12 00:00:00', '2023-11-13 00:00:00', 1, '2023-11-12 19:54:50', '2023-11-13 19:51:58', NULL),
(84, 5, 621, 1319, 4, 'approved', '2023-11-12 00:00:00', '2023-11-13 00:00:00', 1, '2023-11-12 19:54:50', '2023-11-13 19:51:58', NULL),
(85, 5, 477, 1319, 2, 'approved', '2023-11-12 00:00:00', '2023-11-13 00:00:00', 1, '2023-11-12 19:54:50', '2023-11-13 19:51:58', NULL),
(95, 5, 90, 1323, 9, 'returned', '2023-11-16 00:00:00', '2023-11-17 00:00:00', 1, '2023-11-16 19:39:22', '2023-11-16 19:42:36', NULL),
(96, 5, 84, 1323, 9, 'returned', '2023-11-16 00:00:00', '2023-11-17 00:00:00', 1, '2023-11-16 19:39:22', '2023-11-16 19:42:39', NULL),
(97, 5, 562, 1323, 50, 'returned', '2023-11-16 00:00:00', '2023-11-17 00:00:00', 1, '2023-11-16 19:39:22', '2023-11-16 19:42:42', NULL),
(98, 5, 53, 1323, 12, 'returned', '2023-11-16 00:00:00', '2023-11-17 00:00:00', 1, '2023-11-16 19:39:22', '2023-11-16 19:42:45', NULL),
(99, 66, 366, 1324, 8, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 14:46:52', '2023-11-17 16:31:23', NULL),
(100, 66, 538, 1324, 2, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 14:46:52', '2023-11-17 16:31:23', NULL),
(101, 66, 463, 1324, 14, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 14:46:52', '2023-11-17 16:31:23', NULL),
(102, 18, 211, 1325, 50, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 14:52:36', '2023-11-19 22:50:33', NULL),
(103, 18, 136, 1325, 2, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 14:52:36', '2023-11-19 22:50:33', NULL),
(104, 24, 208, 1326, 50, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 15:36:00', '2023-11-19 22:51:03', NULL),
(105, 5, 462, 1327, 12, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 16:18:14', '2023-11-19 22:51:28', NULL),
(106, 5, 477, 1327, 1, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 16:18:14', '2023-11-19 22:51:28', NULL),
(107, 5, 222, 1327, 500, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 16:30:00', '2023-11-19 22:51:28', NULL),
(108, 5, 224, 1327, 500, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 16:30:00', '2023-11-19 22:51:28', NULL),
(109, 66, 462, 1324, 4, 'approved', '2023-11-17 00:00:00', '2023-11-18 00:00:00', 1, '2023-11-17 16:31:23', '2023-11-17 16:31:23', NULL),
(112, 11, 444, 1328, 2, 'pending approval', '2023-11-19 00:00:00', '2023-11-20 00:00:00', 1, '2023-11-19 23:07:05', '2023-11-19 23:07:05', NULL),
(113, 24, 461, 1329, 30, 'pending approval', '2023-11-19 00:00:00', '2023-11-20 00:00:00', 1, '2023-11-19 23:14:28', '2023-11-19 23:14:28', NULL),
(114, 24, 204, 1329, 1000, 'pending approval', '2023-11-19 00:00:00', '2023-11-20 00:00:00', 1, '2023-11-19 23:14:28', '2023-11-19 23:14:28', NULL),
(115, 24, 493, 1329, 2, 'pending approval', '2023-11-19 00:00:00', '2023-11-20 00:00:00', 1, '2023-11-19 23:14:28', '2023-11-19 23:14:28', NULL),
(116, 24, 401, 1329, 2, 'pending approval', '2023-11-19 00:00:00', '2023-11-20 00:00:00', 1, '2023-11-19 23:14:28', '2023-11-19 23:14:28', NULL),
(117, 16, 560, 1330, 520, 'pending approval', '2023-11-20 00:00:00', '2023-11-21 00:00:00', 1, '2023-11-20 15:13:12', '2023-11-20 15:13:12', NULL),
(118, 16, 75, 1330, 2, 'pending approval', '2023-11-20 00:00:00', '2023-11-21 00:00:00', 1, '2023-11-20 15:13:12', '2023-11-20 15:13:12', NULL),
(119, 16, 62, 1331, 20, 'pending approval', '2023-11-20 00:00:00', '2023-11-21 00:00:00', 1, '2023-11-20 15:22:05', '2023-11-20 15:22:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `rental_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `cost` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `product_id`, `rental_id`, `quantity`, `cost`, `created_at`, `updated_at`) VALUES
(1, 477, 14, 1, 1000, '2023-11-04 16:21:22', '2023-11-04 16:21:22'),
(2, 413, 44, 1, 500, '2023-11-08 00:47:25', '2023-11-08 00:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(2, 'admin', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(3, 'sales_manager', 'web', '2023-10-17 11:17:03', '2023-10-17 11:17:03'),
(4, 'inventory_manager', 'web', '2023-10-23 04:22:06', '2023-10-23 04:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 4),
(14, 4),
(15, 2),
(16, 2),
(18, 2),
(18, 3),
(19, 2),
(20, 2),
(20, 3),
(20, 4),
(21, 2),
(22, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bullets` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'section/default.webp',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `title`, `heading`, `description`, `bullets`, `image`, `created_at`, `updated_at`) VALUES
(16, 'about', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(17, 'event_cards', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(18, 'services', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(19, 'testimonials', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(20, 'video_gallery', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(21, 'general_CTA', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(22, 'review_CTA', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:15:28', '2023-12-31 15:15:28'),
(23, 'logistic_page_info', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-12-31 15:36:42', '2023-12-31 15:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `bullets` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'service/default.webp',
  `icon` varchar(255) NOT NULL DEFAULT 'service/service-1.png',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `bullets`, `image`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business analytics', 'Proin molestie nunc id scelerisque facilisis. Nunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem. Donec sit amet nibh condimentum libero\r\n\r\nNunc efficitur mollis nunc, ac facilisis orci viverra vel. Aliquam rutrum libero sit amet justo consectetur luctus. Duis dolor augue, euismod a accumsan at, commodo a lorem.', 'It\'s essential to work with business consultants who have*Business consultants may charge by the project or hour, or you may need to pay daily or monthly retainers.*Meet with the board of directors and employees.*Accounting consulting.', 'service/goUkQfSl4tHP2cMjuhMZps3kihNJczh5Haz3CmER.jpg', 'service/service-4.png', 1, '2023-08-15 13:22:34', '2023-08-17 18:31:25'),
(3, 'Google Tag Manager', 'Remember that each tag you create in Google Tag Manager corresponds to a specific tracking or analytics script you want to include on your website. Triggers determine when those tags should be fired based on user interactions or events, and variables are used to capture and store dynamic data.\r\n\r\nTriggers deould be fired based on user interactions or events, and variables are usedynad to capture and store mic data.', 'based on user interactions or events, and va*termine when those tags sh', 'service/hPbLOJtBC8blQCz2hZf3qWYruZaGECvvrZphOUgB.jpg', 'service/service-3.png', 1, '2023-08-15 16:18:51', '2023-08-17 18:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(50) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `user_id`, `invoice_id`, `type`, `amount`, `method`, `balance`, `description`, `created_at`, `updated_at`) VALUES
(4, 2, 1, NULL, 'deposit added', 100000, NULL, 100000, 'deposit added', '2023-11-02 20:54:46', '2023-11-02 20:54:46'),
(5, 2, 1, 1302, 'rental cost', 3500, NULL, 96500, 'rental cost', '2023-11-02 20:55:10', '2023-11-02 20:55:10'),
(6, 103, 1, NULL, 'deposit added', 13000, NULL, 13000, 'deposit added', '2023-11-04 01:35:05', '2023-11-04 01:35:05'),
(7, 103, 1, 1306, 'rental cost', 13000, NULL, 0, 'rental cost', '2023-11-04 16:00:53', '2023-11-04 16:00:53'),
(8, 11, 1, 1304, 'due added', 16000, NULL, 16600, 'Repair and damage cost', '2023-11-04 16:21:22', '2023-11-04 16:21:22'),
(9, 103, 1, NULL, 'deposit added', 5000, NULL, 5000, 'deposit added', '2023-11-05 17:33:25', '2023-11-05 17:33:25'),
(10, 103, 1, 1306, 'due collection', 5000, NULL, 0, 'due collection', '2023-11-05 17:33:42', '2023-11-05 17:33:42'),
(11, 105, 1, NULL, 'deposit added', 4000, NULL, 4000, 'deposit added', '2023-11-05 19:04:57', '2023-11-05 19:04:57'),
(12, 105, 1, 1307, 'due collection', 4000, NULL, 0, 'due collection', '2023-11-05 19:05:06', '2023-11-05 19:05:06'),
(13, 13, 1, NULL, 'deposit added', 2000, NULL, 2000, 'deposit added', '2023-11-07 20:14:02', '2023-11-07 20:14:02'),
(14, 13, 1, 1309, 'rental cost', 2000, NULL, 0, 'rental cost', '2023-11-07 20:15:27', '2023-11-07 20:15:27'),
(15, 13, 1, 1309, 'rental cost', 2000, NULL, 0, 'rental cost', '2023-11-07 20:15:41', '2023-11-07 20:15:41'),
(19, 1, 1, NULL, 'deposit added', 20000, NULL, 20000, 'deposit added', '2023-11-08 00:45:01', '2023-11-08 00:45:01'),
(20, 1, 1, 1310, 'due collection', 16000, NULL, 4000, 'due collection', '2023-11-08 00:45:09', '2023-11-08 00:45:09'),
(21, 1, 1, 1308, 'due collection', 1000, NULL, 3000, 'due collection', '2023-11-08 00:45:28', '2023-11-08 00:45:28'),
(22, 1, 1, 1310, 'due added', 2000, NULL, 2000, 'Repair and damage cost', '2023-11-08 00:47:25', '2023-11-08 00:47:25'),
(23, 1, 1, 1310, 'due collection', 2000, NULL, 1000, 'due collection', '2023-11-08 00:48:31', '2023-11-08 00:48:31'),
(24, 17, 1, NULL, 'deposit added', 1500, NULL, 1500, 'deposit added', '2023-11-09 16:55:31', '2023-11-09 16:55:31'),
(25, 17, 1, 1314, 'due collection', 1500, NULL, 0, 'due collection', '2023-11-09 16:55:41', '2023-11-09 16:55:41'),
(26, 107, 1, NULL, 'deposit added', 2600, NULL, 2600, 'deposit added', '2023-11-10 16:50:01', '2023-11-10 16:50:01'),
(27, 107, 1, 1316, 'due collection', 2600, NULL, 0, 'due collection', '2023-11-10 16:55:25', '2023-11-10 16:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user/default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sumon Baly', 'maaevent@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/default.png', 'lB0lMHfwtk7bPuVm8GiC0BblnHJH9k54zEWr5y5u1z89neeKpohRMXXzlcGX', NULL, '2023-10-25 07:45:12'),
(2, 'Hafizul Islam', 'admin@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/jBtJCZlgwCPh7Y9wjNJOrap8QJqrDHAUUh1n5Mtn.png', 'gzKj3Gk6hanH6Wlij4jtOm3DNu3Bgee1KoPV8DvTWTKGsSWMMuDQ6e7sh0zM', NULL, '2023-10-29 18:20:24'),
(3, 'Hafizul Islam', 'sales@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/q4eLI797Bu4vjklseTzZ3JkDfpjlrLH51jw2EaAM.png', 'tx7CF506D0AGiLRGHKYhPwmZwkL05CmwT8LbOjDhfHkTH1GCFDIxedizC1T3', NULL, '2023-10-30 21:04:49'),
(4, 'Wizard - Inventory', 'inventory@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/default.png', NULL, '2023-10-23 04:41:56', '2023-10-23 04:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `workforce`
--

CREATE TABLE `workforce` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `travel_allowance` decimal(10,2) DEFAULT NULL,
  `daily_allowance` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workforce`
--

INSERT INTO `workforce` (`id`, `name`, `email`, `phone_number`, `address`, `date_of_birth`, `hire_date`, `position`, `department`, `supervisor_id`, `salary`, `travel_allowance`, `daily_allowance`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Asa Schowalter PhD', 'deckow.adelia@example.org', '01747533221', '1801 Miguel Prairie\nSouth Doris, ND 54309', '2000-01-01', '1996-04-28', 'Manager', 'Marketing', 3, '16000.00', '500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(2, 'Nicola Luettgen', 'hbrown@example.com', '01748404966', '855 Savion Mountains\nNorth Garry, KY 56533', '2000-01-01', '1976-04-13', 'Manager', 'Finance', 2, '34000.00', '3000.00', '4000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(3, 'Mohammed Hand', 'mjaskolski@example.org', '01638999950', '86037 Oswald Ramp Apt. 644\nNorth Leslyside, FL 55460-4500', '2000-01-01', '2009-08-08', 'Intern', 'HR', 2, '34000.00', '1000.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(4, 'Enos Parker', 'gaylord.delphine@example.com', '01799234240', '92613 Gusikowski Square Apt. 836\nWest Linda, MT 75544-6342', '2000-01-01', '1977-12-07', 'Manager', 'Marketing', 2, '33000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(5, 'Daisy Witting', 'zjacobson@example.org', '01694284268', '3584 Thomas Cliffs Apt. 602\nCarliestad, ND 29085', '2000-01-01', '2017-02-10', 'Manager', 'Sales', 3, '18000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(6, 'Mrs. Burnice Hirthe', 'frau@example.com', '01245254895', '1018 Turner Curve\nPricebury, UT 55768-2997', '2000-01-01', '2018-07-18', 'Trainee', 'Finance', 3, '45000.00', '4000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(7, 'Ona Mante', 'sarah39@example.com', '01232948302', '99366 Elmore Hollow\nKutchfurt, NE 91653-6671', '2000-01-01', '1991-12-04', 'Officer', 'HR', 2, '15000.00', '2500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(8, 'Lindsay Ruecker', 'liliane.kohler@example.net', '01225371631', '511 Botsford Fort Apt. 702\nWest Ottis, OR 15672-2145', '2000-01-01', '1994-06-05', 'Intern', 'IT', 3, '41000.00', '1000.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(9, 'Prof. Garth Hermann III', 'marilyne97@example.org', '01195332027', '2810 Kuphal Vista\nHaleystad, NY 36659', '2000-01-01', '2012-01-13', 'Assistant Manager', 'HR', 2, '46000.00', '3500.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(10, 'Edward Rodriguez', 'april54@example.net', '01476387369', '93924 Marks Road\nEast Shaunburgh, AK 12775', '2000-01-01', '2001-06-12', 'Trainee', 'HR', 2, '24000.00', '4000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(11, 'Dr. Pink Heathcote', 'maverick.osinski@example.org', '01387898608', '5210 Rice Drive\nSouth Jessborough, CA 62536-5651', '2000-01-01', '1997-01-02', 'Trainee', 'Sales', 1, '19000.00', '4000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(12, 'Mr. Stan Haag DDS', 'elta29@example.com', '01854423013', '100 Daniel Union\nLakinstad, TN 33293', '2000-01-01', '1988-12-22', 'Trainee', 'Accounting', 1, '46000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(13, 'Jena Wuckert', 'hand.nelle@example.com', '01810018935', '44861 Alvah Tunnel Suite 711\nPort Dakotaville, WA 18617', '2000-01-01', '1997-04-28', 'Executive', 'Sales', 2, '37000.00', '500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(14, 'Harmony Satterfield', 'dickinson.vita@example.net', '01772087176', '8791 Andreane Shoals Apt. 211\nElliottshire, NJ 41161-6917', '2000-01-01', '1994-08-26', 'Trainee', 'Finance', 2, '43000.00', '4000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(15, 'Miss Daniella Marvin DVM', 'kohler.helen@example.org', '01351246783', '3676 Heathcote Ridge Apt. 238\nWest Jo, MD 41759', '2000-01-01', '2023-07-15', 'Manager', 'HR', 2, '33000.00', '3500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(16, 'Sonia Cormier', 'peyton02@example.com', '01319677780', '5535 Balistreri Divide\nBernhardmouth, SC 37439-7841', '2000-01-01', '1977-06-01', 'Intern', 'IT', 2, '22000.00', '500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(17, 'Diana Heller', 'qsteuber@example.net', '01889727247', '6623 Feeney Rapid\nAbshireborough, UT 76835', '2000-01-01', '1988-10-06', 'Executive', 'HR', 3, '49000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(18, 'Carol Bogisich', 'orodriguez@example.net', '01168878397', '468 Angelo Rest Apt. 603\nTommiehaven, RI 05389', '2000-01-01', '1988-03-30', 'Assistant Manager', 'HR', 2, '22000.00', '500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(19, 'Tyshawn McCullough', 'ahmed08@example.com', '01379663604', '5713 Haag Corner Suite 105\nAdeliaberg, ID 71453', '2000-01-01', '2020-09-08', 'Trainee', 'Marketing', 2, '26000.00', '2500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(20, 'Montana Koelpin', 'uherman@example.com', '01380446525', '74749 Rodriguez Mill Suite 577\nNew Kaelaburgh, MS 65219-2489', '2000-01-01', '2008-10-02', 'Executive', 'IT', 2, '34000.00', '500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(21, 'Dr. Eula Hirthe DVM', 'treutel.johnny@example.com', '01617499350', '707 Welch Fords Apt. 512\nSouth Carlosshire, DE 87216', '2000-01-01', '2022-07-15', 'Executive', 'Marketing', 3, '20000.00', '500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(22, 'Mckayla Armstrong', 'cecile.kuvalis@example.net', '01240565371', '232 Elmo Turnpike\nFannieside, CA 44571-1284', '2000-01-01', '1981-08-22', 'Assistant Manager', 'Finance', 3, '17000.00', '2000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(23, 'Misael Simonis', 'hbailey@example.net', '01263092244', '61474 Jonatan Cliffs\nSouth Braxton, AR 19968-6891', '2000-01-01', '2021-01-25', 'Officer', 'Finance', 1, '18000.00', '2000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(24, 'Sylvester Wyman', 'hertha73@example.org', '01926744005', '3240 Gina Fall\nGrantmouth, WY 00757', '2000-01-01', '1994-06-01', 'Manager', 'Accounting', 1, '17000.00', '3000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(25, 'Pattie Hand', 'ola.terry@example.net', '01226898721', '49904 Kiehn Terrace\nAlexafort, AR 38706', '2000-01-01', '2005-11-28', 'Officer', 'Sales', 3, '24000.00', '2500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(26, 'Jaquan Crooks', 'cmaggio@example.com', '01594890911', '198 Rath Prairie\nNorth Micheal, CT 43589', '2000-01-01', '2008-05-23', 'Assistant Manager', 'HR', 2, '23000.00', '3000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(27, 'Alessandra Bergstrom', 'djones@example.com', '01291474484', '57725 Huel Drive Apt. 512\nMalvinaberg, UT 30535-1682', '2000-01-01', '1997-12-12', 'Trainee', 'Sales', 3, '49000.00', '4500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(28, 'Nyah Hoeger', 'nannie90@example.com', '01795689097', '160 Nolan Manor Apt. 046\nPort Taya, MN 87336', '2000-01-01', '1972-10-03', 'Assistant Manager', 'Sales', 3, '34000.00', '2000.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(29, 'Stan Jaskolski IV', 'kerluke.rolando@example.com', '01983379290', '4069 Waldo Lights\nNorth Concepcion, IA 81869-9060', '2000-01-01', '2017-12-04', 'Executive', 'HR', 1, '32000.00', '2000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(30, 'Prof. Matteo O\'Hara I', 'twintheiser@example.net', '01172697514', '262 Bahringer Locks Apt. 118\nNew Irwin, MS 33520', '2000-01-01', '1999-11-04', 'Manager', 'Finance', 3, '25000.00', '500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(31, 'Mr. Jerod Bradtke', 'imcclure@example.com', '01994092067', '97153 Corwin Fords Suite 619\nGiovannafurt, TN 33891-7280', '2000-01-01', '1990-10-22', 'Executive', 'Accounting', 3, '28000.00', '2500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(32, 'Prof. Merlin Lueilwitz', 'roxane80@example.org', '01675554970', '20394 Romaine Courts\nHarrisland, OR 43715-1299', '2000-01-01', '2020-03-03', 'Manager', 'Sales', 2, '29000.00', '4000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(33, 'Audreanne Haag V', 'amani43@example.com', '01343238648', '38136 Lindgren Walk Suite 447\nMariettaland, MA 09687', '2000-01-01', '2021-03-31', 'Intern', 'Sales', 1, '43000.00', '4000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(34, 'Paxton Mertz', 'dconnelly@example.net', '01667065061', '16108 Sandrine Manors\nKubborough, TN 28485', '2000-01-01', '2010-10-07', 'Trainee', 'IT', 2, '33000.00', '3500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(35, 'Ms. Cheyanne Gleichner Sr.', 'hermann.russ@example.org', '01373264074', '953 Grant Wells\nSouth Nedra, RI 86717-7719', '2000-01-01', '2004-06-07', 'Assistant Manager', 'Finance', 3, '42000.00', '4500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(36, 'Ashton Keebler', 'estelle.marquardt@example.com', '01484412257', '5874 Roselyn Mews Apt. 240\nLake Joelle, NY 88738', '2000-01-01', '1983-06-10', 'Assistant Manager', 'Finance', 2, '32000.00', '3000.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(37, 'Halle West', 'rubye.carter@example.net', '01566661858', '289 Welch Path Apt. 333\nSanfordside, ME 78917', '2000-01-01', '2007-03-26', 'Assistant Manager', 'HR', 2, '31000.00', '4500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(38, 'Prof. Cleve Lynch IV', 'ynienow@example.com', '01981953689', '46699 Karianne Ways\nBarrowsbury, MA 84040-7409', '2000-01-01', '1995-02-25', 'Manager', 'HR', 3, '33000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(39, 'Sandy Raynor', 'tyler11@example.net', '01249619771', '54910 Hyatt Mission Suite 108\nPort Bettie, OK 67345-5040', '2000-01-01', '2002-05-05', 'Assistant Manager', 'Accounting', 2, '28000.00', '4500.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(40, 'Lila Beahan MD', 'collins.kailee@example.net', '01319326773', '1088 Concepcion Coves Apt. 363\nEast Flavio, DC 16885-7497', '2000-01-01', '2005-03-18', 'Manager', 'IT', 1, '36000.00', '1500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(41, 'Leif Kutch', 'hansen.nolan@example.com', '01190770095', '32105 Brown Gateway Suite 041\nSouth Elroymouth, DE 62955', '2000-01-01', '1997-07-08', 'Assistant Manager', 'Marketing', 3, '35000.00', '4500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(42, 'Dr. Tierra Rippin DVM', 'mraz.elenora@example.net', '01199163115', '246 Ransom Views Suite 910\nEast Maceyport, OR 20952', '2000-01-01', '2014-05-13', 'Manager', 'Finance', 3, '29000.00', '3000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(43, 'Miss Adell Fadel', 'myra05@example.org', '01885011639', '7233 Boyle Skyway Suite 120\nNew Lindsay, IL 51100', '2000-01-01', '1995-01-03', 'Manager', 'IT', 3, '31000.00', '2500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(44, 'Dr. Nona Prosacco', 'kaleigh66@example.com', '01582208567', '80405 O\'Keefe Ports Suite 661\nPort Elbert, RI 69397', '2000-01-01', '2018-11-26', 'Officer', 'Sales', 3, '23000.00', '3000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(45, 'Prof. Kennith Schamberger', 'cremin.pablo@example.org', '01699164410', '932 Bernardo Unions Apt. 694\nMadonnaside, MD 73863', '2000-01-01', '2018-04-23', 'Officer', 'Sales', 2, '36000.00', '1000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(46, 'Mr. Sebastian Kling III', 'estehr@example.org', '01816606327', '54416 Eryn Falls Apt. 334\nPort Ted, KS 49901', '2000-01-01', '1983-04-24', 'Officer', 'IT', 2, '22000.00', '1000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(47, 'Ms. Chanelle Eichmann I', 'bauer@example.com', '01517819435', '60531 Jed Square Suite 983\nToyshire, NC 24349-5564', '2000-01-01', '1996-02-12', 'Trainee', 'Accounting', 3, '47000.00', '1000.00', '1500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(48, 'Ms. Julianne Feest', 'sbraun@example.org', '01658436803', '161 Valentina Plaza Suite 963\nSouth Dedrickfort, NC 45651', '2000-01-01', '1974-10-26', 'Trainee', 'Finance', 3, '49000.00', '4000.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(49, 'Ms. Vivienne Champlin DVM', 'rhea38@example.net', '01195643739', '82649 Cydney Rapids\nHandburgh, UT 32526', '2000-01-01', '2018-03-06', 'Trainee', 'HR', 3, '37000.00', '1000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(50, 'Maybelle Trantow', 'uwaters@example.com', '01565075282', '25303 Lexie Mill Apt. 212\nO\'Harastad, KS 65138-7635', '2000-01-01', '2002-01-09', 'Executive', 'Sales', 2, '38000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(51, 'Stacey Gorczany', 'modesto.towne@example.com', '01316358925', '369 Luettgen Freeway Suite 445\nNorth Hermanside, FL 96255-9804', '2000-01-01', '1992-04-30', 'Executive', 'HR', 3, '34000.00', '3000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(52, 'Dr. Jermain Bashirian', 'lucio02@example.com', '01180477551', '8077 Green Ramp\nWestville, AK 90292', '2000-01-01', '1997-09-22', 'Intern', 'HR', 1, '37000.00', '2000.00', '500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(53, 'Cassandra Torphy', 'considine.eduardo@example.com', '01229854829', '533 Adella Hills\nBrooklynton, LA 86511', '2000-01-01', '1971-01-04', 'Manager', 'Sales', 2, '24000.00', '2000.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(54, 'Brando Jenkins', 'ethyl65@example.net', '01654274717', '73707 Tremaine Islands Apt. 183\nThielhaven, GA 65323-6528', '2000-01-01', '2008-11-05', 'Assistant Manager', 'IT', 1, '36000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(55, 'Rhoda Bahringer', 'tmann@example.com', '01692871406', '689 Zboncak Branch\nShanahanland, GA 13972', '2000-01-01', '2017-08-14', 'Executive', 'IT', 2, '35000.00', '2000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(56, 'Prof. Austyn Farrell I', 'xmoore@example.net', '01687096351', '9642 Talia Path Apt. 876\nMiguelview, ID 72690', '2000-01-01', '1971-01-02', 'Executive', 'Sales', 2, '44000.00', '4500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(57, 'Casimer Ruecker', 'bria.bogan@example.net', '01314761115', '9842 Ankunding Parkways Suite 697\nPort Hardyberg, NY 45696-7240', '2000-01-01', '1998-05-12', 'Assistant Manager', 'IT', 3, '35000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(58, 'Clinton Barrows Sr.', 'canderson@example.org', '01580273938', '32210 Anika Mews Apt. 221\nKiehnshire, DE 69278', '2000-01-01', '2016-10-24', 'Manager', 'Marketing', 3, '50000.00', '4500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(59, 'Karson Kilback', 'stiedemann.randy@example.org', '01193033963', '17289 Antwan Drive Apt. 600\nCollierfurt, ND 45388-2493', '2000-01-01', '2004-06-09', 'Executive', 'Marketing', 3, '24000.00', '3500.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(60, 'Beaulah Barrows', 'leuschke.litzy@example.net', '01546921109', '52552 Jones Union\nSimonismouth, MS 83972', '2000-01-01', '1971-07-10', 'Intern', 'Finance', 1, '24000.00', '4500.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(61, 'Guiseppe Kihn', 'koepp.humberto@example.net', '01787217298', '515 Malcolm Village Suite 521\nBrayanport, HI 27278', '2000-01-01', '2023-01-16', 'Manager', 'Accounting', 3, '50000.00', '3500.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(62, 'Prof. Ewell Schroeder Jr.', 'jschumm@example.com', '01333884580', '89884 Kertzmann Oval Apt. 707\nAnissaside, MO 23086', '2000-01-01', '2002-10-30', 'Trainee', 'Accounting', 3, '46000.00', '3000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(63, 'Carey Crooks', 'larissa29@example.net', '01533099695', '85604 Satterfield Tunnel Suite 918\nEast Verdie, MS 72427-3642', '2000-01-01', '1987-10-22', 'Trainee', 'IT', 2, '22000.00', '2500.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(64, 'Vernice Lueilwitz', 'olson.robyn@example.com', '01187933953', '2991 Hammes Skyway Apt. 687\nWest Harmonymouth, SD 26691', '2000-01-01', '2018-12-08', 'Manager', 'Marketing', 1, '41000.00', '1000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(65, 'Shaylee Rogahn', 'kaela.daugherty@example.com', '01541027912', '25620 Miller Springs\nBurleyville, OH 92723-3432', '2000-01-01', '2017-04-02', 'Intern', 'Sales', 1, '27000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(66, 'Jamaal Marvin', 'hill.bruce@example.org', '01858974002', '528 Barton Courts\nRicechester, AL 76637', '2000-01-01', '1993-12-14', 'Trainee', 'Finance', 2, '50000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(67, 'Prof. Jaydon Williamson IV', 'bkoepp@example.org', '01422017166', '8660 Aubrey Centers\nNorth Bryonshire, HI 81632-7402', '2000-01-01', '2000-08-17', 'Trainee', 'Finance', 3, '34000.00', '4000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(68, 'Aiden Leannon', 'grady.dannie@example.org', '01715066096', '212 Wisozk Green\nPort Carlos, PA 91736', '2000-01-01', '2018-11-11', 'Executive', 'Finance', 3, '18000.00', '1000.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(69, 'Melba Hyatt', 'gay.harber@example.org', '01473545817', '804 Adrienne Views\nKadinborough, MA 00740', '2000-01-01', '1992-05-06', 'Officer', 'Accounting', 2, '26000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(70, 'Elwin Klein', 'candido.gibson@example.net', '01194766002', '980 Tiana Parkway\nPort Linaberg, WI 49729-8788', '2000-01-01', '1997-04-19', 'Officer', 'HR', 1, '43000.00', '1000.00', '1000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(71, 'Cecile Dooley', 'dexter44@example.net', '01413616339', '322 Billy Path Suite 736\nCarissashire, DE 61385-9644', '2000-01-01', '1981-08-03', 'Manager', 'HR', 1, '33000.00', '1500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(72, 'Bret Schmidt', 'roslyn42@example.com', '01199282285', '940 Kemmer Fords Suite 583\nBradlychester, TX 54876-8343', '2000-01-01', '2017-02-24', 'Manager', 'Sales', 2, '16000.00', '500.00', '4500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(73, 'Alessandra Grady', 'pkoepp@example.net', '01824577535', '2812 Raymond Branch Suite 578\nEast Chrisville, MD 05905-7336', '2000-01-01', '2011-02-25', 'Manager', 'Finance', 2, '41000.00', '2000.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(74, 'Mr. Dimitri Franecki V', 'hunter83@example.com', '01639583129', '35607 Koss Square Apt. 744\nErnsertown, NC 57868-6484', '2000-01-01', '1985-08-23', 'Assistant Manager', 'Finance', 1, '49000.00', '500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(75, 'Miss Elnora Purdy', 'abigayle83@example.net', '01916752486', '9654 Albin Fork Apt. 482\nAlyceview, SC 67911', '2000-01-01', '2003-05-15', 'Executive', 'HR', 1, '25000.00', '2000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(76, 'Brandt Will', 'zboncak.abbey@example.net', '01767786057', '4957 Emmanuel Rapids Apt. 520\nLake Alexzander, KS 37102-5157', '2000-01-01', '1996-08-06', 'Intern', 'HR', 1, '25000.00', '500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(77, 'Sam Wunsch DVM', 'medhurst.adele@example.org', '01374894540', '7059 Kuhic Mall Apt. 689\nWest Lelah, WY 27011-5061', '2000-01-01', '1987-08-29', 'Assistant Manager', 'Accounting', 2, '37000.00', '2500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(78, 'Edgardo Douglas', 'daniel.iva@example.com', '01184072397', '619 Zola Rue\nLake Talonview, MI 88731-0390', '2000-01-01', '1973-08-20', 'Trainee', 'Finance', 2, '50000.00', '500.00', '2500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(79, 'Sven Frami', 'ondricka.una@example.net', '01472319202', '84176 Schowalter River Suite 614\nNew Drew, OH 33967', '2000-01-01', '2022-12-12', 'Manager', 'HR', 1, '23000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(80, 'Wilfredo Rippin', 'darby15@example.com', '01557107702', '9972 Neva Stream\nSouth Mabelle, MO 78065-0172', '2000-01-01', '2003-11-22', 'Trainee', 'Marketing', 3, '42000.00', '4000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(81, 'Dr. Jennifer Heathcote', 'harmony79@example.net', '01695339452', '1979 Konopelski Village Suite 599\nAlannafurt, RI 29945', '2000-01-01', '1995-06-03', 'Trainee', 'IT', 3, '47000.00', '1000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(82, 'Quinten Deckow', 'nleffler@example.org', '01196938725', '9707 Mya Club Apt. 553\nRitchieberg, DE 53567', '2000-01-01', '1993-10-31', 'Intern', 'HR', 1, '48000.00', '2000.00', '3500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(83, 'Corine Conroy', 'jkoch@example.net', '01137720976', '932 Cordelia Centers Suite 630\nSantinofurt, VA 87965', '2000-01-01', '1974-12-27', 'Intern', 'Marketing', 2, '31000.00', '500.00', '1500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(84, 'Ruth Schroeder', 'wondricka@example.net', '01533900542', '59734 Darryl Greens\nPort Cristopher, PA 63208', '2000-01-01', '2011-03-12', 'Executive', 'Accounting', 3, '31000.00', '3500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(85, 'Prof. Crystal Gutkowski', 'yasmin.abbott@example.net', '01148978196', '762 Emerson Prairie\nHintzmouth, SD 95673-7704', '2000-01-01', '1985-04-09', 'Assistant Manager', 'Sales', 3, '37000.00', '1500.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(86, 'Pierre McLaughlin', 'crippin@example.org', '01694390047', '2424 Mckayla Mews Suite 963\nRaleighstad, FL 42868', '2000-01-01', '1993-02-17', 'Manager', 'Finance', 3, '21000.00', '1500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(87, 'Dr. Franz Pfannerstill III', 'fromaguera@example.net', '01760031228', '260 Jaron Mountains Suite 463\nEast Geoffrey, KS 43135', '2000-01-01', '1991-03-24', 'Manager', 'Sales', 1, '22000.00', '3500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(88, 'Julianne Keeling I', 'lweissnat@example.net', '01836907056', '8971 Heather Summit\nSouth Lonie, PA 04176', '2000-01-01', '2007-07-19', 'Manager', 'Marketing', 2, '21000.00', '3500.00', '2000.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(89, 'Prof. Julio Friesen', 'zblanda@example.net', '01446852219', '5141 Schulist Views\nPort Derick, AR 69966', '2000-01-01', '2020-08-09', 'Executive', 'Finance', 3, '24000.00', '3500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(90, 'Rossie Rempel', 'murazik.bailee@example.net', '01564548494', '26130 Sister Station\nSouth Itzel, RI 84700-3633', '2000-01-01', '1997-10-25', 'Executive', 'Accounting', 3, '29000.00', '1500.00', '4500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(91, 'Meagan Turner', 'viola61@example.org', '01491728662', '9384 Horacio River\nNorth Mayeborough, SC 94765-1039', '2000-01-01', '1972-02-22', 'Assistant Manager', 'Accounting', 1, '50000.00', '500.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(92, 'Prof. Cade Bernier', 'hattie.crona@example.com', '01364825148', '168 Lora Estates\nEast Berry, IN 02836', '2000-01-01', '2021-05-20', 'Officer', 'HR', 3, '32000.00', '4500.00', '1500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(93, 'Raphael Emmerich', 'nbogisich@example.net', '01921935822', '3727 Kamren Parkway Apt. 981\nMillerton, DE 37275-9028', '2000-01-01', '1994-07-11', 'Trainee', 'IT', 1, '35000.00', '3000.00', '1000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(94, 'April Murray', 'leonard72@example.org', '01931518110', '853 Eino Rest\nLake Kevonville, IN 82368', '2000-01-01', '1983-08-10', 'Officer', 'Finance', 3, '17000.00', '3000.00', '3000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(95, 'Dr. Jaida Hermann MD', 'efay@example.org', '01536671501', '5091 Tyrel Springs\nHermistonfort, MA 75339', '2000-01-01', '1996-07-23', 'Executive', 'Sales', 2, '42000.00', '4000.00', '500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(96, 'Soledad Lubowitz', 'bernardo.gulgowski@example.org', '01555874254', '1459 Chasity Wall\nSouth Eden, UT 06220', '2000-01-01', '2006-01-25', 'Trainee', 'Marketing', 1, '15000.00', '4500.00', '2000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(97, 'Hank Batz', 'arvel.heaney@example.com', '01612281552', '5230 Murphy Freeway\nDonnellyberg, AL 58766-8408', '2000-01-01', '1993-05-27', 'Intern', 'Finance', 2, '16000.00', '2000.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(98, 'Dr. Kenneth Bradtke IV', 'emarvin@example.net', '01290961930', '3956 Marian Via\nPort Brandyland, NE 18779-3701', '2000-01-01', '2018-06-11', 'Officer', 'Sales', 2, '17000.00', '4500.00', '3500.00', 0, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(99, 'Velda Walter', 'dominic.little@example.org', '01446626923', '438 Rodrick Streets\nKuhntown, MA 24979-4471', '2000-01-01', '2010-06-22', 'Executive', 'IT', 1, '27000.00', '1500.00', '2500.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16'),
(100, 'Wilhelm Gutmann', 'mariano65@example.net', '01892275285', '22266 Domenica Burg Suite 250\nDoylebury, WA 71043', '2000-01-01', '1973-09-10', 'Manager', 'HR', 3, '50000.00', '3500.00', '4000.00', 1, '2023-08-28 03:43:16', '2023-08-28 03:43:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`name`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_details_key` (`detail_name`);

--
-- Indexes for table `company_histories`
--
ALTER TABLE `company_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_email` (`email`);

--
-- Indexes for table `damaged_products`
--
ALTER TABLE `damaged_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_phone_number` (`phone_number`),
  ADD UNIQUE KEY `employee_email` (`email`);

--
-- Indexes for table `event_cards`
--
ALTER TABLE `event_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `page_section`
--
ALTER TABLE `page_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_relation` (`category_id`) USING BTREE;

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_email` (`email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workforce`
--
ALTER TABLE `workforce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `company_histories`
--
ALTER TABLE `company_histories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `damaged_products`
--
ALTER TABLE `damaged_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_cards`
--
ALTER TABLE `event_cards`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1332;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page_section`
--
ALTER TABLE `page_section`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workforce`
--
ALTER TABLE `workforce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `projects_category_relation` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
