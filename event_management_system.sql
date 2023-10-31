-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 02:27 PM
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
(1, 'Turning Visions Into Bricks', 'Converting aspirations into tangible structures with precision and expertise.', 'banner/bH97FxGrCVllBHpjsxbqi2dw2i2apcqozFnTNGIe.jpg', 'https://youtu.be/UDvh63xHVa0', 1, '2023-08-13 06:15:22', '2023-08-17 18:22:49'),
(2, 'Building Dreams, Creating Spaces', 'Transforming your vision into reality with our expert construction solutions.', 'banner/cbvEX1oAhfKTapwaOip5NfMdftpnbUyWvghaVzAk.jpg', 'https://youtu.be/khnr4-ehwKA', 1, '2023-08-13 11:24:13', '2023-08-13 12:50:03'),
(3, 'Your Trusted Construction Partner', 'Reliable construction services tailored to meet your project\'s needs.', 'banner/4kDokZ1QFrRg5WNA7nxtl1euwCfsk5pbidd4AnZC.jpg', 'https://youtu.be/hGjeETM24rk', 1, '2023-08-13 11:26:05', '2023-08-13 14:37:50'),
(4, 'Builders of Sustainable Futures', 'Focusing on eco-friendly construction practices for a greener tomorrow.', 'banner/qadhi3zRPLFXKO7h50pe0ja6DQRcpQgvGlPsS6xi.jpg', NULL, 1, '2023-08-13 14:18:30', '2023-08-15 12:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'category/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Add More now', 'category/Axtwv5lh6QmSWPLIFsM0Ygc8X4I1LI7zhDaPdK0V.jpg', '2023-08-16 12:31:23', '2023-10-11 08:20:30'),
(9, 'আর্টিফিশিয়াল ট্রি', 'category/9UIBuWXHrbpiTlXLN1CQYsxkvabyNSNY08Aj66bl.png', '2023-09-25 18:42:55', '2023-10-12 11:01:25'),
(10, 'সেন্টার পিস', 'category/TSFQwayd1IHjiwqU4JoWBKk1JpIy7Ap6MTsAPVTO.png', '2023-09-25 18:42:55', '2023-10-11 08:43:35'),
(12, 'চেয়ার রিবন এবং কাভার', 'category/0lS8oHyKU8HqagAQQvocNI0MyevM6uRqZaIQrKXh.png', '2023-09-25 18:42:55', '2023-10-11 08:47:50'),
(13, 'স্যান্ডেলিয়ার', 'category/ZBLAUI43rg9QDFSAZ1tqeLAacDVptHhDId30xkzn.png', '2023-09-25 18:42:55', '2023-10-11 08:43:51'),
(14, 'কাপড়', 'category/qsg04AkbOgKzEp93Wi3YuqXgYVvBpdsHpuaJLzdC.png', '2023-09-25 18:42:55', '2023-10-11 08:48:56'),
(15, 'এক্সট্রা প্রোডাক্ট', 'category/EZDUjBTSiR3TgMgSFA8a2PTT66Q6fYUqtn3os4jV.png', '2023-09-25 18:42:55', '2023-10-11 08:48:29'),
(16, 'ফ্লাওয়ার ভাস', 'category/xnG2V8BbHDIoqWkAV12dPGzAFipVEO0B6F2EW0Sh.png', '2023-09-25 18:42:55', '2023-10-11 08:44:11'),
(17, 'ফোয়ারা', 'category/bWet27IgMNxHKNPB3KC3Rq9jZzrhpvc8TDD6vIT8.png', '2023-09-25 18:42:55', '2023-10-11 08:44:25'),
(18, 'হ্যাংগিঃ আইটেম', 'category/1Exh63BX0AeV6JtTni8whNECT7hXNXJUpBjFqgZZ.png', '2023-09-25 18:42:55', '2023-10-11 08:44:38'),
(19, 'হেড টেবিল', 'category/8yoc8w8sg3hle6xJoDsrWRdAHbG8cz3qn512rcMK.png', '2023-09-25 18:42:55', '2023-10-11 08:44:56'),
(20, 'লাইটিং', 'category/7wdIGRYqHszJ4bCyUX3kMYvo6UUHhIRm8KvuQYCO.png', '2023-09-25 18:42:55', '2023-10-11 08:45:07'),
(21, 'মেটাল', 'category/Yb5JnbWQjt9jEE9izrLvNmxht8SFUAgj0YkGdoz0.png', '2023-09-25 18:42:55', '2023-10-11 08:48:46'),
(23, 'শো-পিস', 'category/QAvuG7e0nu2fNUX3T1e0iSX91Kjaz56pdfBgCDTx.png', '2023-09-25 18:42:55', '2023-10-11 08:45:40'),
(24, 'সোফা সেট', 'category/ffTGRlFFr3zRkWI8EDf84qfNitN5mdZ5af9kSPtb.png', '2023-09-25 18:42:55', '2023-10-11 08:45:55'),
(25, 'টেবিল এবং টুল', 'category/iY20E1CJObIgNZ1sI7oyIRW3r6hZOXHbtRMloU1i.png', '2023-09-25 18:42:55', '2023-10-11 08:46:39'),
(26, 'টেবিল রানার', 'category/cJdmIB64qBga1OLsjtatp2YcMwyQFLoOPX9y6td6.png', '2023-09-25 18:42:55', '2023-10-11 08:48:03'),
(27, 'টেবিল টপ', 'category/3yeY3IVBAwsvbgYPcKqBNYrQDdOKcS28YkoBGyO0.png', '2023-09-25 18:42:55', '2023-10-11 08:48:17'),
(28, 'ছাতা', 'category/vYpMn3pzHrECZ2iUw7fJkUSb2a52jZ2j8eqdVtdx.png', '2023-09-25 18:42:55', '2023-10-11 08:47:23'),
(29, 'ওয়াকওয়ে', 'category/5nowviQjmaj4rdt4RuSH4fgm62DruGZZfjAGWI5U.png', '2023-09-25 18:42:55', '2023-10-11 08:46:52'),
(30, 'কাঠের ডিজাইন', 'category/Tz3PwUXtuyyeCG0oFS3pOcmOgkEEFzZ9Vp0QQ0cJ.png', '2023-09-25 18:42:55', '2023-10-11 08:49:10'),
(34, 'চেয়ার', 'category/qMtyo4A4AmoU7s3llaAYC9RDvzHsU4z2jRq2C6so.jpg', '2023-10-15 07:51:34', '2023-10-15 07:51:34'),
(35, 'প্লাটফর্ম', 'category/fGMEZpmWrlpa0YG51gy2lbkVJEQSUpH2I1PR94ph.jpg', '2023-10-18 05:47:50', '2023-10-19 09:23:55');

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

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `name`, `email`, `phone_number`, `subject`, `message`, `ip`, `is_important`, `is_unread`, `created_at`, `updated_at`, `deleted_at`) VALUES
(31, 'Lysanne Weissnat', 'lauretta82@hotmail.com', '319.256.6040', 'Eveniet dolores voluptatum qui esse a maiores officiis.', 'Repudiandae eveniet est minus. Deleniti rem sed sit. Architecto vitae tenetur vel optio doloribus exercitationem. Omnis pariatur rerum et asperiores maiores eveniet.', NULL, 1, 0, '2023-07-25 01:33:07', '2023-08-25 10:20:08', NULL),
(32, 'Noble Brown', 'nella51@gmail.com', '+16293061734', 'Quia ea adipisci in doloremque nihil id.', 'Ipsum fuga sapiente quasi quae maxime quia. Voluptatibus aut et est numquam dicta. Velit nihil doloribus quo nostrum.', NULL, 0, 0, '2022-09-18 12:45:59', '2023-08-25 10:20:08', NULL),
(33, 'Jannie Kautzer DVM', 'jalyn.sporer@cassin.biz', '6417473463', 'Cumque similique enim nam et aut architecto veniam quis.', 'A rerum sequi sed repellat est ab doloremque qui. In sit esse non suscipit aspernatur. Sed quo quia id.', NULL, 1, 0, '2023-06-06 15:05:13', '2023-08-25 10:20:08', NULL),
(34, 'Miss Winnifred Zieme II', 'farrell.estefania@kuhic.com', '+1.551.743.8723', 'Aut maxime sit enim dolor commodi accusamus praesentium.', 'Ab hic aspernatur minus explicabo. Porro voluptatem asperiores sed sit est nulla.', NULL, 1, 0, '2023-06-07 21:59:03', '2023-08-25 10:20:08', NULL),
(35, 'Trinity Hagenes', 'wunsch.shyanne@hotmail.com', '+13032784668', 'Distinctio sint deleniti soluta ut suscipit quod.', 'Culpa itaque voluptas ex ratione corrupti veniam. Optio sequi expedita fugiat rerum ut. In nesciunt ad explicabo modi laborum corrupti saepe enim.', NULL, 0, 1, '2023-08-21 17:24:31', '2023-08-25 10:20:08', NULL),
(36, 'Maryam Hettinger', 'bergstrom.katrina@yahoo.com', '2605412639', 'Officia modi consequatur sunt dolorum consequatur aut.', 'Corporis quia et quis aspernatur sapiente in rerum. Pariatur magni veniam ut consequatur. Sequi illum a alias eaque.', NULL, 0, 0, '2023-08-10 12:19:38', '2023-08-25 10:20:08', NULL),
(37, 'Letitia Harris', 'xshields@oberbrunner.org', '6898920529', 'Laborum impedit quia temporibus blanditiis repellat quo alias.', 'Architecto natus blanditiis officiis laboriosam est molestiae omnis. Assumenda reiciendis et delectus et placeat beatae quibusdam porro. Reiciendis aut facilis non explicabo tempora. Velit sed explicabo similique quos quibusdam.', NULL, 1, 0, '2023-08-21 08:07:37', '2023-08-25 10:20:08', NULL),
(38, 'Alfonso Bayer', 'orie26@gottlieb.com', '641.365.8417', 'Quis fugit ab magni est expedita voluptatem asperiores.', 'Placeat dicta et veritatis reprehenderit rem voluptate. Nostrum neque fugiat et debitis in animi. Porro necessitatibus excepturi esse veniam id voluptas. Velit a velit saepe et.', NULL, 1, 0, '2023-06-25 12:02:52', '2023-08-25 10:20:08', NULL),
(39, 'Josianne Gulgowski DDS', 'idurgan@daniel.com', '+15043665630', 'Nostrum ab placeat ipsa.', 'Eos itaque ipsa aliquid quos odit illo facilis. Id consequatur rerum exercitationem consequuntur ullam non rerum. Eaque doloremque nihil ipsam voluptas quia et possimus. Laboriosam consequatur vel soluta.', NULL, 1, 1, '2023-04-03 01:08:31', '2023-08-25 10:20:08', NULL),
(40, 'Talon Cremin', 'isadore93@tremblay.info', '+15674753743', 'Ut animi odit enim eligendi molestias.', 'Esse reprehenderit ea dolor molestias vero consequatur. Autem nulla facilis ducimus quae. Voluptatem delectus provident quia odit aut recusandae.', NULL, 1, 0, '2023-04-06 16:30:07', '2023-08-25 10:20:08', NULL),
(41, 'Holden Skiles', 'orenner@gmail.com', '6159796014', 'Est iure omnis autem asperiores temporibus odit.', 'Atque quaerat eveniet aut dolorem id quisquam. Ipsa fugit impedit reprehenderit. Quidem laborum adipisci quo aspernatur neque minima.', NULL, 0, 1, '2023-08-02 16:41:10', '2023-08-25 10:20:08', NULL),
(42, 'Lou Grady', 'swunsch@harvey.com', '+19736755804', 'Occaecati et illo dolorem ipsa assumenda est quaerat.', 'Consequatur molestiae voluptates dolorum ipsum ducimus autem sint excepturi. Qui ut laudantium vel ad omnis consequuntur excepturi. Inventore autem eveniet magnam et qui voluptatem sequi deserunt. Dolores ipsum eos quod doloremque qui.', NULL, 1, 0, '2022-11-27 07:47:55', '2023-08-25 10:20:08', NULL),
(43, 'Reanna Conroy', 'rrice@beatty.biz', '+14232588641', 'Cumque exercitationem quia et.', 'Consequatur quis consequatur accusamus officiis ex. Nesciunt laboriosam doloremque commodi explicabo placeat veniam. Consequatur illo aut fugiat eaque aut.', NULL, 0, 1, '2023-06-01 05:17:13', '2023-08-25 10:20:08', NULL),
(44, 'Colton Wyman', 'armstrong.conrad@vandervort.biz', '+14694743294', 'Quo iusto optio quisquam officia et ea cupiditate.', 'Voluptatem nihil voluptatem vitae adipisci. Omnis ex a voluptatum vel voluptatem. Sint inventore quasi dolor ut quidem autem et. Culpa rerum asperiores in sit fuga. Sequi dignissimos harum qui iste eum soluta.', NULL, 1, 0, '2022-08-28 11:18:08', '2023-08-25 10:20:08', NULL),
(45, 'Jakayla Rice', 'katheryn.reynolds@hotmail.com', '15207894314', 'Natus voluptatem corporis temporibus.', 'Accusamus doloribus autem et odio non non minus. Libero consequatur sint alias veniam vero. Distinctio sint nisi omnis consequuntur enim tempore perspiciatis.', NULL, 1, 0, '2023-02-01 00:57:50', '2023-08-25 10:20:08', NULL),
(46, 'Enrico Tromp', 'favian33@gmail.com', '+18608294952', 'Reiciendis in et est itaque ut.', 'Quia recusandae est et ut voluptatem. Repellat sit impedit minus doloribus repellendus debitis sit qui. Eos iure distinctio tenetur nobis in quia. Quod sit voluptas aut et odit id.', NULL, 1, 0, '2023-07-08 16:35:15', '2023-08-25 10:20:08', NULL),
(47, 'Dr. Ayden Kohler MD', 'rebeka53@hotmail.com', '+14787921732', 'Nulla et ex ad dolores aspernatur dolores autem.', 'Sunt voluptatem quos ut reprehenderit. Vel ea magni cupiditate aut iusto est reprehenderit.', NULL, 0, 1, '2022-09-02 00:41:45', '2023-08-25 10:20:08', NULL),
(48, 'Liliane Wunsch', 'lacey81@wunsch.com', '13215685427', 'Qui velit nostrum quis possimus.', 'Aspernatur inventore minima qui rem in nisi rerum. Deserunt cupiditate accusamus expedita recusandae illum provident veniam. Ut accusamus quo possimus.', NULL, 0, 1, '2023-01-11 17:32:17', '2023-08-25 10:20:08', NULL),
(49, 'Aliza Schamberger MD', 'herman.pearlie@hotmail.com', '+14586917168', 'Expedita nam rerum dolorum sit qui libero provident est.', 'Aliquid iusto qui inventore vel qui sit animi. Cum esse voluptas sequi. Enim corporis aut nisi cupiditate cumque cum.', NULL, 0, 0, '2023-06-15 01:08:56', '2023-08-25 10:20:08', NULL),
(50, 'Charlie Wunsch', 'legros.nicolas@kovacek.org', '+13644979225', 'Sint laudantium nisi assumenda nihil.', 'Repellendus aspernatur distinctio quos sunt. Quidem dolor distinctio quibusdam ut enim illo saepe. Optio et praesentium neque ut ipsum iste.', NULL, 1, 0, '2022-09-27 07:29:18', '2023-08-25 10:20:08', NULL),
(51, 'Keanu Thompson', 'mbednar@hotmail.com', '9208858182', 'Mollitia fuga aut sunt et blanditiis amet nobis.', 'Optio ex maxime quia necessitatibus dolorem. Explicabo cumque soluta quidem eum sequi. Qui enim veniam quas id reiciendis suscipit. Quidem quo sint enim porro dolores consequatur reprehenderit.', NULL, 1, 1, '2022-08-26 08:53:55', '2023-08-25 10:20:08', NULL),
(52, 'Ollie Olson', 'fkerluke@swift.com', '+13084815264', 'Id quam eos temporibus vitae dolorum.', 'Explicabo optio eius dolores nostrum. Omnis laboriosam eaque aliquam et et explicabo dolorem.', NULL, 0, 0, '2022-09-20 04:27:08', '2023-08-25 10:20:08', NULL),
(53, 'Danial Kuhlman', 'kemmer.jannie@ullrich.com', '15207907183', 'Fugiat laboriosam inventore culpa dolores nostrum ut.', 'Consectetur perferendis voluptatem rerum ea fugit ut. Cumque totam rerum quia nihil quia dolor fuga. Voluptate in dignissimos ut quam at nam praesentium.', NULL, 1, 1, '2022-11-13 00:00:44', '2023-08-25 10:20:08', NULL),
(54, 'Johnson Bogisich', 'corkery.rosendo@waters.com', '19808615722', 'Sequi ut iusto enim velit.', 'A modi exercitationem vitae dignissimos. Eaque iste officia nesciunt voluptate quis consequatur rerum qui. Quisquam exercitationem expedita rerum nesciunt dolores expedita. Aut officiis dolor voluptas velit quia optio rerum sunt.', NULL, 0, 0, '2022-10-21 06:34:10', '2023-08-25 10:20:08', NULL),
(55, 'Ms. Elisha Morar', 'kprice@hotmail.com', '934.473.8587', 'Itaque et quam eligendi nisi sed numquam.', 'Magnam est eos autem voluptas nam delectus dolorem nostrum. Odio adipisci accusamus dolor voluptatem et. Et odio enim nobis doloribus earum.', NULL, 1, 1, '2023-03-01 23:51:35', '2023-08-25 10:20:08', NULL),
(56, 'Brennon Hahn PhD', 'yundt.fidel@adams.com', '+17258762921', 'Minus ut rerum fugiat neque qui a voluptas voluptas.', 'Rerum nihil ab sint eveniet non et inventore. Quasi dignissimos blanditiis quis sunt nobis in totam consequatur.', NULL, 0, 0, '2023-03-31 00:44:48', '2023-08-25 10:20:08', NULL),
(57, 'Mrs. Ardith Marvin IV', 'sammie.wolf@hotmail.com', '+14842498173', 'Fugiat quasi ut id quae quis.', 'Minima mollitia quod illo et. Nesciunt dolores eum atque ut aut qui. Adipisci eius autem consequatur dolor voluptatem dolore.', NULL, 1, 1, '2023-07-15 06:18:05', '2023-08-25 10:20:08', NULL),
(58, 'Lorenza Kutch', 'idenesik@yahoo.com', '18204231537', 'Iusto et dolores excepturi ex quae.', 'Modi dolores eveniet enim necessitatibus beatae. Quia sapiente ab aut aspernatur. Vitae qui neque quae. Sit perferendis labore rem.', NULL, 0, 0, '2023-01-23 10:54:27', '2023-08-25 10:20:08', NULL),
(59, 'Marques Boyer DVM', 'arath@hotmail.com', '2233423589', 'Vitae officiis nihil ratione corporis.', 'Et nihil reiciendis voluptas maiores est. Esse aut veniam ipsa ab velit. Autem vitae eligendi mollitia et.', NULL, 1, 1, '2023-01-13 11:38:22', '2023-08-25 10:20:08', NULL),
(60, 'Garry Prohaska', 'kuphal.candido@toy.com', '4799306988', 'Qui vel minus sit doloremque.', 'Aliquam sint animi ut maiores ut molestiae qui qui. Vel ex saepe ut sequi saepe at. Aspernatur quae voluptate aut deleniti aut architecto error.', NULL, 0, 1, '2022-10-15 14:57:43', '2023-08-25 10:20:08', NULL),
(61, 'Earnestine Stanton V', 'alexanne.conn@gmail.com', '+14126568734', 'Sit facere eos optio aut quidem.', 'Quam illum eos soluta maiores molestias aut. Non quasi excepturi ipsam et minus. Id dignissimos dolorum consequatur et assumenda eius voluptatem.', NULL, 1, 1, '2022-12-27 09:54:58', '2023-08-25 10:20:08', NULL),
(62, 'Jolie Eichmann', 'smuller@mayert.com', '6579715205', 'Ex earum est dignissimos consequatur vel dignissimos et ab.', 'Dolorem ipsa harum eius libero velit. Enim quo quis tenetur adipisci odit quas exercitationem. Et molestiae ut et amet molestiae odio inventore nihil. Consectetur eum quia eum.', NULL, 1, 1, '2023-06-12 02:24:37', '2023-08-25 10:20:08', NULL),
(63, 'Jovani Hills', 'rosina.prohaska@beer.com', '6318477066', 'Est eum repellendus earum mollitia et est aspernatur.', 'Aliquid et quia ullam sequi. Placeat voluptatem dolor officiis voluptatem. Optio eaque et provident ut. Reiciendis temporibus et maxime.', NULL, 1, 1, '2023-08-04 05:52:16', '2023-08-25 10:20:08', NULL),
(64, 'Elisa Wisozk', 'rrunte@mclaughlin.net', '2839607268', 'Illo illum occaecati blanditiis quasi voluptas in ab.', 'Voluptatum nihil earum eius nam non totam iusto. Hic sunt ipsa odio laboriosam facere exercitationem quo provident. Ea quia quos iste ea aut error ipsum. Corporis dignissimos perspiciatis officiis inventore.', NULL, 1, 0, '2023-07-23 08:11:30', '2023-08-25 11:16:56', NULL),
(65, 'Ryleigh Auer Jr.', 'bednar.vincenza@yahoo.com', '16824926096', 'Adipisci eum et perferendis.', 'Cum et officia repellat omnis nemo. Eos veritatis molestiae deleniti vel est rerum magni. Quis molestias et sapiente in et.', NULL, 1, 1, '2023-04-26 16:08:55', '2023-08-25 10:20:08', NULL),
(66, 'Prof. Dina Yundt', 'arau@champlin.com', '4796148630', 'Perspiciatis autem voluptatem officiis est.', 'Porro ut exercitationem quia et. Iusto voluptatem numquam quam. Itaque aut iusto sunt quaerat qui aut porro.', NULL, 1, 1, '2023-07-28 23:52:28', '2023-08-25 10:20:08', NULL),
(67, 'Kris Moore', 'nfisher@hotmail.com', '414.803.1660', 'Atque beatae et consectetur qui autem exercitationem.', 'Harum est qui voluptatem consectetur blanditiis corrupti commodi. Officiis nulla accusamus incidunt doloribus aperiam. Sint quam et nisi id doloribus ipsum magnam. Quibusdam animi dolorum voluptatem magni qui.', NULL, 0, 1, '2023-07-12 17:10:41', '2023-08-25 10:20:08', NULL),
(68, 'Dr. Valerie Trantow IV', 'carter.jamey@gmail.com', '7317274021', 'Perferendis accusantium ut officia in.', 'Id eveniet quod numquam quia eum vero esse. In pariatur eius neque repellat quos. Est exercitationem incidunt iusto est omnis perferendis. Magnam nesciunt et sint optio. Sit a eligendi facere rerum cumque.', NULL, 1, 0, '2023-07-06 02:51:16', '2023-08-25 10:20:08', NULL),
(69, 'Al Rodriguez', 'vkerluke@gmail.com', '14582966326', 'Odio totam distinctio dolores illo quis sed.', 'Id atque non repellendus dolorem neque quae. Et sint molestiae omnis. Vel ut quae ipsam et sint facilis perspiciatis.', NULL, 0, 1, '2022-10-13 13:35:05', '2023-08-25 10:20:08', NULL),
(70, 'Janessa Tremblay', 'laisha.zieme@fritsch.com', '4128367441', 'Quos excepturi aliquid eligendi consequuntur debitis dolores.', 'Rerum quia eos aliquid molestias. Omnis veritatis harum est repellendus in. Sint eveniet omnis voluptatum ipsa. Qui aut est ea corrupti sint molestiae magni.', NULL, 1, 1, '2023-01-13 15:14:09', '2023-08-25 10:20:08', NULL),
(71, 'Prof. Braulio Waters', 'qgleason@yahoo.com', '+1.651.460.6076', 'Sed saepe ratione qui molestiae inventore.', 'Laborum adipisci recusandae velit officia non ut illo. Voluptatem neque aut qui. Repudiandae ut eligendi possimus sed nisi ducimus quae.', NULL, 0, 1, '2022-10-01 22:48:55', '2023-08-25 10:20:08', NULL),
(72, 'Michel Mills', 'gstroman@yahoo.com', '2704620916', 'Autem omnis magnam voluptas nisi.', 'Impedit molestias et voluptas et et perspiciatis sit possimus. Qui aliquam qui nam ea aut dicta aperiam. Fugiat dolorum enim et qui voluptate dolore molestiae. Est autem fuga eaque dignissimos.', NULL, 0, 1, '2022-09-21 12:52:06', '2023-08-25 10:20:08', NULL),
(73, 'Jerrold Kassulke', 'ejast@hotmail.com', '+18786502762', 'Vel quas rerum et aliquam.', 'Sed sit et enim quia ex modi harum. Consequatur in voluptatibus sint repellendus perspiciatis. Labore dolores delectus ut commodi. Error vitae sed nihil quis et et sed.', NULL, 1, 1, '2022-10-19 05:32:49', '2023-08-25 10:20:08', NULL),
(74, 'Mr. Lucas Lehner', 'lennie.king@oberbrunner.info', '3018155871', 'At placeat laborum provident beatae dolor qui autem.', 'Maiores quia quod repellat sit eligendi ut consequatur. Neque ratione unde eveniet aut consequatur. Tempore iusto in nostrum delectus natus. Fugit error sit quidem nulla voluptates facilis et.', NULL, 0, 0, '2023-04-02 04:19:54', '2023-08-25 10:20:08', NULL),
(75, 'Ms. Lisa Schmitt', 'ivy.hodkiewicz@yahoo.com', '949.847.0078', 'Rerum accusamus ut minus et architecto.', 'Corrupti numquam eum eveniet esse ipsam perspiciatis et. Nemo laboriosam consequatur velit voluptates eum. Quos modi ut rerum omnis.', NULL, 0, 0, '2023-01-26 11:06:59', '2023-08-25 10:20:08', NULL),
(76, 'Kenyatta Lockman', 'otho80@gmail.com', '6237334361', 'Ad rerum itaque doloremque aut quis.', 'Ratione odio eos aliquam ullam eum sit. Quisquam rerum debitis quia. Porro ut doloremque voluptatem quia modi. Veniam explicabo in ut.', NULL, 1, 0, '2022-10-21 16:42:38', '2023-08-25 10:20:08', NULL),
(77, 'Narciso Veum', 'keegan.ziemann@yahoo.com', '+16603941661', 'In sed ad nesciunt ut fugit maiores occaecati expedita.', 'Magni maxime impedit aspernatur quaerat. Consectetur assumenda cum dicta occaecati totam accusantium. Quas aliquid a labore et. Ea voluptates similique consequatur eum.', NULL, 1, 0, '2023-01-27 03:54:14', '2023-08-25 10:20:08', NULL),
(78, 'Ignatius Jaskolski Sr.', 'hershel38@yahoo.com', '16788740905', 'Perferendis tempore tenetur distinctio est rerum ducimus.', 'Cum beatae cumque voluptatibus consectetur explicabo. Sapiente omnis in vero eos. Sit officiis qui omnis iusto rerum. Omnis qui ut dolorem vero hic eaque sint.', NULL, 1, 0, '2022-11-24 16:03:58', '2023-08-25 14:10:43', NULL),
(79, 'Nola Runolfsdottir', 'llangosh@pouros.org', '2314358822', 'Quia enim alias labore voluptatum.', 'Vero consequatur illo ut. Et deleniti autem in ut. Aut rem dicta velit. Culpa omnis deserunt iure aut itaque dolorem.', NULL, 1, 0, '2023-06-27 23:00:24', '2023-08-25 14:10:28', NULL),
(80, 'Dr. Benedict Marks', 'bweimann@schneider.net', '4247529273', 'Corporis id atque mollitia non sunt reiciendis.', 'Et reiciendis accusantium quo vel. Excepturi aspernatur architecto quaerat voluptatem nostrum. Excepturi quod officia molestiae minima consequatur quasi. Fugiat sapiente cumque optio.', NULL, 0, 0, '2023-08-12 15:16:31', '2023-08-25 14:10:13', NULL),
(81, 'Sheridan Reichert', 'vicenta05@feeney.info', '5409520299', 'Ipsa eius et optio culpa itaque distinctio.', 'Quod quam quia et voluptate tempore assumenda. Officiis rerum temporibus est blanditiis est tenetur deleniti totam. Numquam perferendis quia atque consequatur. Et et repellat minus et sit qui.', NULL, 0, 0, '2023-08-23 08:06:53', '2023-08-25 10:33:25', NULL),
(82, 'Mr. Ladarius Emard MD', 'kuphal.dashawn@jones.net', '6055970439', 'Quas aut neque perferendis sed sit in.', 'Et quam voluptate nobis explicabo. Et dolores totam impedit iusto. Non illo assumenda et aut laudantium quos. Quia animi voluptatem assumenda aperiam ut.', NULL, 0, 0, '2023-08-24 14:14:00', '2023-08-25 10:33:25', NULL),
(83, 'Chris Gibson', 'cordelia.jacobs@schroeder.com', '8282258113', 'Et nesciunt vitae in sint quae ab et non.', 'Ut quia odit vero non. Error praesentium voluptate autem similique rerum. Architecto et saepe officiis placeat minus. Consequatur repellat voluptatem nihil esse mollitia in aspernatur sit.', NULL, 0, 1, '2023-08-23 23:21:20', '2023-08-25 10:33:25', NULL),
(84, 'Darlene Greenholt V', 'cummerata.bertrand@berge.info', '6086181696', 'Illo libero vel ipsum voluptas sint.', 'Quia aut praesentium quaerat soluta et accusantium. Qui necessitatibus ullam sed sed tempora. Unde et est modi aperiam nihil aperiam exercitationem. Voluptatibus distinctio maiores ab.', NULL, 0, 0, '2023-08-24 14:26:37', '2023-08-25 13:33:02', NULL),
(85, 'Lynn Bartell', 'blynch@hotmail.com', '3527275640', 'Est optio earum omnis et reprehenderit beatae eum quas.', 'Amet voluptatem blanditiis facere. Laboriosam est molestias consequatur sit. Quibusdam qui est atque officia non veritatis.', NULL, 0, 0, '2023-08-25 01:06:32', '2023-08-25 11:35:27', NULL),
(86, 'Magali Olson', 'jennings98@yahoo.com', '5207221129', 'Similique et eum ut et rerum expedita minus.', 'Ad porro rem qui ea. Ratione deserunt omnis voluptatem eaque alias nemo incidunt. Eum sint voluptatibus consequuntur. Deserunt dignissimos ut dolor magnam.', NULL, 1, 0, '2023-08-24 23:58:38', '2023-08-25 14:06:59', NULL),
(87, 'Ramona Burch', 'jahegupew@mailinator.com', '1231231213', NULL, 'Voluptas nulla venia', '127.0.0.1', 1, 0, '2023-08-25 11:19:40', '2023-08-25 13:33:09', NULL),
(88, 'Alma Powers', 'qeves@mailinator.com', '131221232321', 'Nostrud deserunt ex', 'Hi Bob,\n\nWith resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won\'t even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.\n\nJornalists call this critical, introductory section the \"Lede,\" and when bridge properly executed, it\'s the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang\n\nBest regards,\nJason Muller', '127.0.0.1', 1, 0, '2023-08-25 11:37:02', '2023-08-25 13:32:54', NULL);

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
(1, 'name', 'Maa Event Management', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(2, 'email', 'maaeventmanagementbd@gmail.com', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(3, 'phone', '+880 1671-711933', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(4, 'address', 'Ka-44/2, Kalachandpur Gulshan-2, Dhaka-1212', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(5, 'logo', 'other/NxX95fyKSUomn3JdncbddePsoRMdvCG0jginbhK7.png', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(6, 'favicon', 'favicon.png', 1, '2023-08-19 07:54:35', '2023-08-19 07:54:35'),
(7, 'facebook', 'https://www.facebook.com/', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(8, 'twitter', 'https://twitter.com/', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(9, 'linkedin', 'https://www.linkedin.com/', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(10, 'youtube', 'https://www.youtube.com/', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(11, 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.259504026561!2d90.41494447533775!3d23.809369478630117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c715f2121e7d%3A0xf7d351b7edb1d903!2sMaa%20Event%20Management%20and%20Catering!5e0!3m2!1sen!2sbd!4v1695360704361!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(12, 'CEO_name', 'MD Sumon Baly', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(13, 'CEO_image', 'other/r17jUK5WcPa7R8TCgAj0qm2Bqn7dnmctHmrxuaMP.jpg', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(14, 'CEO_message', 'Maaevent.com is the Largest & Most Loved 360 degree wedding solution provider’s platform in Bangladesh. Starting in 2021, we are running our operations with a view to serving our clients as an all-in-one purchasing platform. Where you can find the best wedding vendors with their Creation, Idea and tons of trusted reviews at the click of a Reviews Description. Whether you are looking for hiring wedding planners or top photographers or for just some ideas and inspirations for your upcoming wedding, Maaevent.com can help you solve your wedding planning tasks through its unique features. With a shortlist feature, a unique checklist facility, inspirational photo gallery, blog and many more- you won’t need to spend hours planning a great wedding. We help our customers to purchase their desired products from the most renowned brands from both home and abroad at most affordable rates. You are able to compare and choose suitable products from thousands of options, depending on quality, style, design and cost, just in a few clicks. Moreover, we help wedding planners and businesses to reach their customers for maximum sales. Be it pre-wedding occasions like engagement, Holud, Mehedi Night, Gala Night or post-wedding reception ceremonies, we got it all covered.', 1, '2023-08-19 07:54:35', '2023-10-23 06:03:20'),
(15, 'whatsapp', '+880 1671-711933', 1, '2023-08-20 13:21:48', '2023-10-23 06:03:20'),
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
(1, 'Ibrahim Khalil', 'ibrahimnahid16@gmail.com', '01726416843', 'Fairy Light', 'Ka-52, Kalachad Pur, Gulshan-2, 1212', 'customers/default.png', 0, NULL, '$2y$10$rqx689heLu1W/6PZLzGUBuGToBYuVq6QLPJ2Cg0Ah1vRVgYAJ.w5a', NULL, '2023-10-22 08:56:16', '2023-10-31 07:57:15'),
(2, 'Rakibul Hasan', 'kakon@gmail.com', '01318322742', 'Maa Event Management', 'Mohakhali, Dhaka', 'customers/9xlFxKJEj1tpiZqfYTsPKWri1UqbofauQ09iOAGI.jpg', 0, NULL, '$2y$10$rF.wP840U7Ld7/zqmvAnsuiDwm4TZywaJobWOuom7GtyonsRuwEZe', NULL, '2023-10-22 12:49:16', '2023-10-22 12:49:16'),
(3, 'Razia Haque Konok', 'elegant_konok@yahoo.com', '01675694452', 'Elegant Event solutions', '3/1, Block-F, Lyceum School building, lift-4, Flat-5B, Opposite of Lalmatia Mohila College, Dhaka 1207, Dhaka, Bangladesh', 'customers/eLZNoD6BVqEtbPB3xMXT7RBUaTAzAGFjii7p5zhE.jpg', 0, NULL, '$2y$10$oiOjHCI4/VB5RTcxUMLTXe17plumcaUwGSn50jaohcDZT2e5Qttem', NULL, '2023-10-24 07:23:26', '2023-10-25 10:11:35'),
(4, 'Galib Jaman', 'gj.emon35@gmail.com', '01766555213', 'Pepplo BD', 'N. avenue, Barishal, Bangladesh', 'customers/HDpX7axtnVDCyR1EDmBjU3JjAYiV46Jt8SELI7w7.jpg', 4900, NULL, '$2y$10$Jj8BfQAt3KgoQPXjwbGOB.Lhk9x2zBTsiMLWm4fEfK2NebGFYVJMi', NULL, '2023-10-25 07:21:00', '2023-10-31 11:14:04'),
(5, 'Abid Hasan Miraz', 'abid@gmail.com', '01303018917', 'Pepplo BD', 'Chowmatha, Barishal', 'customers/psc8J8XhXS2h0OQXUf6jDi1IeCWoJBXmkDjDvNud.jpg', 10000, NULL, '$2y$10$LETLzuYEWqZMw65unPkheOx4buj4IKGqxkVwIE.NkVnAhl6V/2LpW', NULL, '2023-10-31 12:28:22', '2023-10-31 12:30:54');

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
  `status` varchar(100) DEFAULT '''pending approval''',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `user_id`, `subtotal`, `vat_percentage`, `paid`, `discount`, `grand_total`, `due`, `status`, `created_at`, `updated_at`) VALUES
(1302, 1, 1, 5600, 0, 595, 5, 5595, 0, 'rented', '2023-10-26 10:17:27', '2023-10-31 07:57:36'),
(1303, 4, 1, 5000, 0, 8000, 0, 5000, 0, 'approved', '2023-10-28 15:25:08', '2023-10-28 15:26:14'),
(1304, 4, 1, 7000, 0, 10000, 0, 7000, 0, 'approved', '2023-10-29 08:41:48', '2023-10-30 06:47:14'),
(1305, 1, 1, 15000, 0, 5000, 0, 15000, 10000, 'approved', '2023-10-30 06:52:07', '2023-10-31 07:57:15'),
(1306, 3, 1, 7500, 0, 2000, 0, 7500, 5500, 'pending approval', '2023-10-30 06:54:53', '2023-10-30 06:54:53'),
(1307, 4, 1, 23700, 0, 13700, 10000, 13700, 0, 'approved', '2023-10-30 07:21:01', '2023-10-30 07:21:35'),
(1308, 4, 1, 4500, 0, 1500, 1000, 3500, 2000, 'approved', '2023-10-30 07:48:30', '2023-10-30 09:00:05'),
(1309, 4, 1, 16200, 0, 14700, 0, 16200, 1500, 'approved', '2023-10-30 07:58:36', '2023-10-30 08:23:45'),
(1310, 4, 1, 6500, 0, 6500, 0, 6500, 0, 'approved', '2023-10-30 08:29:51', '2023-10-31 11:14:04'),
(1311, 4, 1, 6600, 0, 6100, 500, 6100, 0, 'approved', '2023-10-30 09:01:43', '2023-10-31 11:12:47'),
(1312, 5, 1, 15000, 0, 15000, 0, 15000, 0, 'approved', '2023-10-31 12:29:49', '2023-10-31 12:30:54');

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
(25, 'App\\Models\\User', 3);

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
(1, 'Home', 'Home - Pepplo Builder', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction company,Planning', 'page/7x8Z5Boye1hQyjLEAKPBwjsWI4S1v1BdOquoNOLq.jpg', 1, '2023-08-10 04:02:23', '2023-08-19 06:31:01'),
(2, 'About', 'About - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:33'),
(3, 'Services', 'Services - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction,renovation,interior design,construction company,construction company in the Bangladesh,Consultation in Barishal', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-19 06:30:34'),
(4, 'Service Single', 'Service Single - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-11 06:23:56'),
(5, 'Projects', 'Projects - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(6, 'Project Single', 'Project Single - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-11 10:03:49'),
(7, 'Contact', 'Contact - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(8, 'Quote', 'Quote - Pepplo Builders', 'Leading Construction Company in the Bangladesh', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'construction, renovation, interior design, construction company, construction company in the Bangladesh', 'page/default.webp', 1, '2023-08-10 04:02:23', '2023-08-10 04:02:23'),
(9, 'Team', 'Team - Pepplo Builders', 'Leading construction company in the Bangladesh.', 'Pepplo Builders is a leading construction company in the Bangladesh. We are specialized in construction, renovation, interior design, and more.', 'Builders,construction,construction company', 'page/default.webp', 1, NULL, '2023-08-14 14:02:33');

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
(1, 1, 1, 0, NULL, '2023-08-18 17:43:08'),
(2, 2, 1, 1, NULL, NULL),
(3, 1, 2, 1, NULL, '2023-08-18 17:42:39'),
(4, 2, 2, 1, NULL, NULL),
(5, 3, 2, 1, NULL, NULL),
(6, 4, 2, 1, NULL, NULL),
(7, 5, 2, 1, NULL, NULL),
(8, 6, 2, 1, NULL, NULL),
(9, 7, 2, 1, NULL, NULL),
(10, 8, 2, 1, NULL, NULL),
(11, 9, 2, 1, NULL, NULL),
(12, 2, 3, 1, NULL, NULL),
(13, 1, 4, 1, NULL, '2023-08-15 02:17:54'),
(14, 3, 4, 1, NULL, NULL),
(15, 1, 5, 1, NULL, NULL),
(16, 5, 5, 1, NULL, NULL),
(17, 6, 5, 1, NULL, NULL),
(18, 1, 6, 1, NULL, NULL),
(19, 1, 7, 1, NULL, NULL),
(20, 2, 7, 1, NULL, NULL),
(21, 9, 7, 1, NULL, NULL),
(22, 2, 8, 1, NULL, NULL),
(23, 1, 9, 1, NULL, NULL),
(24, 2, 9, 1, NULL, NULL),
(25, 7, 10, 1, NULL, NULL),
(26, 1, 11, 1, NULL, NULL),
(27, 2, 11, 1, NULL, NULL),
(28, 3, 11, 1, NULL, NULL),
(29, 4, 11, 1, NULL, NULL),
(30, 5, 11, 1, NULL, NULL),
(31, 6, 11, 1, NULL, NULL),
(32, 7, 11, 1, NULL, NULL),
(33, 8, 11, 1, NULL, NULL),
(34, 9, 11, 1, NULL, NULL),
(35, 1, 12, 1, NULL, NULL),
(36, 2, 12, 1, NULL, NULL),
(37, 3, 12, 1, NULL, NULL),
(38, 4, 12, 1, NULL, NULL),
(39, 5, 12, 1, NULL, NULL),
(40, 6, 12, 1, NULL, NULL),
(41, 7, 12, 1, NULL, NULL),
(42, 8, 12, 1, NULL, NULL),
(43, 9, 12, 1, NULL, NULL),
(44, 1, 13, 1, NULL, NULL),
(45, 2, 13, 1, NULL, NULL),
(46, 3, 13, 1, NULL, NULL),
(47, 4, 13, 1, NULL, NULL),
(48, 5, 13, 1, NULL, NULL),
(49, 6, 13, 1, NULL, NULL),
(50, 7, 13, 1, NULL, NULL),
(51, 8, 13, 1, NULL, NULL),
(52, 9, 13, 1, NULL, NULL);

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
(23, 'update deposit', 'web', '2023-10-29 09:13:58', '2023-10-29 09:13:58'),
(24, 'view customer', 'web', '2023-10-29 09:41:27', '2023-10-29 09:41:27'),
(25, 'collect due', 'web', '2023-10-30 06:43:16', '2023-10-30 06:43:16');

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

INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `dimension`, `color`, `stock`, `measurement_unit`, `rental_price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 10, 'CP-1', 'Golden Candle Centre Piece', '2.5 X 1.25', 'Golden', 0, 'pcs', 500, 'product/wvmxBoEAmTmWJa8VuVdSAUrCZqsVSCf4sm3QYIVR.jpg', 1, '2023-10-12 04:45:31', '2023-10-19 12:23:54', NULL),
(22, 10, 'CP-2', 'Silver Candle Centre Piece', '2.5 x 1.25', 'Silver', 1, 'pcs', 500, 'product/5bip4J0jF7cO2yGrBVPXZKIQGv1BrRjaCkrA2hK5.jpg', 1, '2023-10-12 04:54:15', '2023-10-24 05:29:53', NULL),
(23, 10, 'CP-3', 'China Glass Centre Piece', '1.25 x 3', 'Glass', 0, 'pcs', 1500, 'product/iiSDpIgm2SMEZjEe578nLkovhSBPtCib9AzCXYdc.jpg', 1, '2023-10-12 04:56:07', '2023-10-23 08:30:23', NULL),
(24, 10, 'CP-4', 'Table Chandelier Centre Piece', '2.5 x 2', 'Silver', 2, 'pcs', 1000, 'product/gXkhYqegdH5WDMrItubU0GHti3clGgRWboQnqC6q.jpg', 1, '2023-10-12 04:57:45', '2023-10-31 12:30:09', NULL),
(25, 10, 'CP-5', 'Wooden Centre Piece', '1.5 x 1', 'Wooden', -17, 'pcs', 300, 'product/EmMfPw562dIp1eBCQGs2fiZocXhw8nkn2iceKCOq.jpg', 1, '2023-10-12 05:16:43', '2023-10-31 11:12:47', NULL),
(26, 10, 'CP-6', 'Mini Cristal Centre Piece', '1.5', 'Silver', 14, 'pcs', 200, 'product/REI2j3qhYRRCh6PYPlJ1jW5JTeOGOGPo2eXdUOCD.jpg', 1, '2023-10-12 05:19:27', '2023-10-28 15:26:14', NULL),
(27, 10, 'CP-7', 'Candle SS Centre Piece', '1.5', 'SS', 9, 'pcs', 100, 'product/msDimzKfxHmC5a7LpxtgEVPVRynXvvOLFlDM7Hl6.jpg', 1, '2023-10-12 05:20:13', '2023-10-19 09:33:15', NULL),
(28, 10, 'CP-8', 'Clear Acrylic Centre Piece', '2 x 2', NULL, 4, 'pcs', 2000, 'product/pSOdrjwR90CdIeDgb4uXDSUFwAzZSJNejdcCSprS.jpg', 1, '2023-10-12 05:25:14', '2023-10-28 15:26:14', NULL),
(29, 10, 'CP-9', 'Patch Small Centre Piece', '2.5', 'SS', 6, 'pcs', 300, 'product/wLvBCDKDYotrV0gAa8hJi52Lf8VkzR7tGXTosLUn.jpg', 1, '2023-10-12 05:26:41', '2023-10-30 08:14:51', NULL),
(30, 10, 'CP-10', 'Straight Round Small Centre Piece', '1.5feet x 8inch', NULL, 14, 'pcs', 300, 'product/51GQu4jJwNOIzreoOkBuznC3SVbGF5IQZdDUtWc1.jpg', 1, '2023-10-12 07:34:35', '2023-10-28 14:33:30', NULL),
(31, 10, 'CP-11', 'Patch Medium Centre Piece', '1.5 feet x 8 in', 'Golden', 24, 'pcs', 500, 'product/dv5DLstMb2NJOgnF4DWp48JDuRtrt2yRSeNglVZu.jpg', 1, '2023-10-12 07:36:04', '2023-10-30 09:00:05', NULL),
(32, 10, 'CP-', 'Patch Medium Centre Piece', '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/klUL7s7PQGRbtf6qlMklsmcz7q4XVMOE6tMurCFI.jpg', 1, '2023-10-12 07:36:44', '2023-10-12 07:39:09', '2023-10-12 07:39:09'),
(33, 10, 'CP-11', 'Patch Medium Centre Piece', '1.5 feet x 8 in', 'Golden', 29, 'pcs', 500, 'product/wPmPkMRLqDxxh2qX4zF9hBYn3cTIxsprcUrgT9Kk.jpg', 1, '2023-10-12 07:37:57', '2023-10-12 07:39:22', '2023-10-12 07:39:22'),
(34, 10, 'CP-12', 'Straight Box Medium Centre Piece 3 Layer', '1.5 feet x 8 in', 'Golden', 19, 'pcs', 500, 'product/WO0zjFHBTkxJ8Py8yhOK4Vy6xBXwfZ2F0GdeOJvB.jpg', 1, '2023-10-12 07:40:49', '2023-10-31 07:57:15', NULL),
(35, 10, 'CP-13', 'Round Medium Centre Piece 3 Layer', '2 feet x 8 inch', 'Golden', 2, 'pcs', 500, 'product/Bj27U4XYyZSdOyM7a78TxXJjSmmcw0o5k4JrLDYQ.jpg', 1, '2023-10-12 07:41:51', '2023-10-19 11:35:13', NULL),
(36, 10, 'CP-14', 'Round Centre Piece 3 Layer', '2 feet x 10 in', 'Golden', 5, 'pcs', 1000, 'product/grEcX1zDKaPoNFHOsTmiwkVt1WVeTYXKnWAR2tnR.jpg', 1, '2023-10-12 07:42:55', '2023-10-12 07:42:55', NULL),
(37, 10, 'CP-15', 'Straight Centre Piece 3 Layer', '2 feet x 11 in', NULL, 4, 'pcs', 1000, 'product/uSRKpyllkPGPmlYfWQw8Vq1HNmL3KlLIzLwhEPHo.jpg', 1, '2023-10-12 07:46:10', '2023-10-31 07:57:15', NULL),
(38, 10, 'CP-16', 'Patch Big Centre Piece', '2 feet x 10 in', 'Golden', 6, 'pcs', 1000, 'product/T3ie7ij4v5mZLg1uOEGOGkYsTEYj3mBhHOmwuIzN.jpg', 1, '2023-10-12 07:47:52', '2023-10-12 07:47:52', NULL),
(39, 10, 'CP-17', 'Straight Box Large Centre Piece 4 Layer', '2 feet x 13 in', 'Crystal Silver', 6, 'pcs', 1200, 'product/MO0ClyVXZaaBMPlhqpa4iIW0ORvRMWF19Xiu5EDX.jpg', 1, '2023-10-12 08:15:14', '2023-10-12 08:15:14', NULL),
(40, 10, 'CP-18', 'China Crystal Round Centre Piece', '2.5 feet x 14 inch', 'Crystal Silver', 40, 'pcs', 1000, 'product/pEVNNfWi6rEtPoEQbSfqhHUy5nhuPPdNQaQiKhNR.jpg', 1, '2023-10-12 08:39:21', '2023-10-12 08:39:21', NULL),
(41, 10, 'CP-19', 'China Crystal Ball Round Centre Piece', '2 feet', 'Crystal Silver', 9, 'pcs', 600, 'product/PQV59n25YeIulvvvay78j9fZtufNrADO99arY3vO.jpg', 1, '2023-10-12 08:40:24', '2023-10-31 11:12:47', NULL),
(42, 10, 'CP-20', 'China Centre Piece', '1.4 feet', 'Crystal Silver', 19, 'pcs', 150, 'product/y0HNLjsiHuqAgCfMbX0SnuEF7x9Til7X16HFzq3W.jpg', 1, '2023-10-12 08:42:32', '2023-10-12 08:42:32', NULL),
(43, 10, 'CP-20a', 'China Centre Piece', '1.8 feet', 'Crystal Silver', 20, 'pcs', 200, 'product/AquZSUZmwRkTq0GkNVCr0SiXMSui8VwAPqqH54Y6.jpg', 1, '2023-10-12 08:45:01', '2023-10-12 09:22:07', NULL),
(44, 10, 'CP-20b', 'China Round Centre Piece', '2.2 feet', 'Crystal Silver', 17, 'pcs', 250, 'product/jFdbldOWlRhDv4QPMF6mmP07NWj5JHqAFmwOkvlh.jpg', 1, '2023-10-12 09:21:34', '2023-10-30 09:00:05', NULL),
(45, 10, 'CP-21', 'China Crystal Small Centre Piece', '7 inch', NULL, 6, 'pcs', 100, 'product/eSw2YLD0jZUSzTKJHo9aKIgIapnLQbJrVPXusFRd.jpg', 1, '2023-10-12 09:24:03', '2023-10-15 05:36:24', NULL),
(46, 10, 'CP-22', 'China Crystal Ceramic Round Centre Piece', '2.5 feet & 2 feet', 'Crystal & White', 4, 'pcs', 600, 'product/Wvwpo93L7rLS48BDQ9fSjUqJYgpnKRxctT4IVsqS.jpg', 1, '2023-10-12 09:26:13', '2023-10-12 09:26:13', NULL),
(47, 10, 'CP-23', 'China Glass Single Candle Centre Piece', 'Large 1 pc & Small 6 pcs', 'Antique Golden', 7, 'pcs', 200, 'product/P6wUDofNyzdtlePkWspth2vXbSWONOzpiA9vezsg.jpg', 1, '2023-10-12 09:28:04', '2023-10-15 05:37:14', NULL),
(48, 10, 'CP-24', 'Lace Centre Piece', '2.5 feet', 'Golden', 8, 'pcs', 100, 'product/aj9BA4hkOOCVYzCqWbyBkP4tc15jWoE4KZZLUHhv.jpg', 1, '2023-10-12 09:30:41', '2023-10-24 05:30:11', NULL),
(49, 10, 'CP-25', 'China Candle Centre Piece', '2 feet', 'Silver', 2, 'pcs', 500, 'product/Y6sZ71d5umlKMyCIfeTUiP9P7F6q6BW6LPSAaSwU.jpg', 1, '2023-10-12 09:31:53', '2023-10-12 09:31:53', NULL),
(50, 10, 'CP-26', 'China Big Wine Glass Centre Piece', '2 feet', 'Glass', 9, 'pcs', 500, 'product/gDcHmGEzRa5D9432SqSTAmvSQdBOqHG84t8x8vKk.jpg', 1, '2023-10-12 09:33:14', '2023-10-12 09:33:14', NULL),
(51, 10, 'CP-27', 'China Big Tall Glass Centre Piece', NULL, 'Glass', 3, 'pcs', 200, 'product/xyMm7lPoo5A32Q7JGthWPr8bVHAwkKeF43Oa6xX9.jpg', 1, '2023-10-12 09:35:11', '2023-10-12 09:35:11', NULL),
(52, 10, 'CP-28', 'China Big Tall Glass Centre Piece', '2 feet', 'Glass', 25, 'pcs', 500, 'product/gw1TitKOY4H0rriXQ1W3FIG60pfIp0MphoQ0oits.jpg', 1, '2023-10-12 09:37:12', '2023-10-12 09:37:12', NULL),
(53, 10, 'CP-29', 'China Big Tall Glass Centre Piece Double Round', '2 feet', 'Glass', 15, 'pcs', 500, 'product/0kcKKQu7fN03YJZMRJjoPaTGe8FlvJByaWhk5M8C.jpg', 1, '2023-10-12 09:45:31', '2023-10-12 09:45:31', NULL),
(54, 10, 'CP-30', 'China Glass Tall Centre Piece', '2 feet', 'Glass', 2, 'pcs', 500, 'product/OdZqOTGyoboHBVSrlBPtvcn8JWaQdnvx8HWpDNfC.jpg', 1, '2023-10-12 09:50:51', '2023-10-12 09:50:51', NULL),
(55, 10, 'CP-31', 'China Glass Candle Centre Piece', NULL, 'Frosted', 70, 'pcs', 100, 'product/Yk9G1kAOWwVA51bwMKQOeWMC82GJ55oX8Fx4SUqh.jpg', 1, '2023-10-12 09:52:37', '2023-10-12 09:52:37', NULL),
(56, 10, 'CP-32', 'Wine Glass Centre Piece', NULL, 'Glass', 2, 'pcs', 200, 'product/tzcXRyGt3smlXRyqpTlLJNofG6vuOMecM01VO1KY.jpg', 1, '2023-10-12 09:55:49', '2023-10-12 09:55:49', NULL),
(57, 10, 'CP-33', 'Glass Bawl Centre Piece', NULL, 'Glass', 24, 'pcs', 200, 'product/VB23fW2QaZasl86NayxAOu3Zdt5qDSYUBp3YMbjT.jpg', 1, '2023-10-12 09:56:52', '2023-10-12 09:56:52', NULL),
(58, 10, 'CP-34', 'Metal Box Centre Piece', '1.5 feet', 'Golden', 25, 'pcs', 100, 'product/GKUfvvJNB6QAuSqXgIhcKwHWTxq4ihstjzi0TFSI.jpg', 1, '2023-10-12 10:00:43', '2023-10-12 10:00:43', NULL),
(59, 10, 'CP-34a', 'Metal Box Centre Piece', '2 feet', 'Golden', 25, 'pcs', 150, 'product/JDNyUKS6OnI3xwYJnDgTaqMZHksk8XWrtGZ1yrwz.jpg', 1, '2023-10-12 10:01:30', '2023-10-12 10:01:30', NULL),
(60, 10, 'CP-35', 'Tetul Gacher Guri', NULL, 'Wooden', 32, 'pcs', 100, 'product/ZqOahUaxHZh2D3zKbx6uycv4EyYyrPAEMzmj8IBl.jpg', 1, '2023-10-12 10:04:57', '2023-10-12 10:04:57', NULL),
(61, 10, 'CP-36', 'Ring Centre Piece', NULL, 'White', 24, 'pcs', 100, 'product/9EbjzLGAFp5DdJOUybG68QnxGLn2XU4I5aiQiin2.jpg', 1, '2023-10-12 10:06:37', '2023-10-12 10:06:37', NULL),
(62, 10, 'CP-37', 'Double Ring Centre Piece', NULL, 'White', 24, 'pcs', 100, 'product/aSzcGBGp346lzHaVGPxFpnRmwFiyeoCiSboic9o6.jpg', 1, '2023-10-12 10:08:20', '2023-10-12 10:08:20', NULL),
(63, 10, 'CP-38', 'China White Crystal', NULL, 'White', 36, 'pcs', 200, 'product/SnspFhE3xawaIoKxTnA8hXzdtaL9DRQeZ5LwTqMK.jpg', 1, '2023-10-12 10:09:46', '2023-10-12 10:09:46', NULL),
(64, 10, 'CP-39', 'China Glass Round Centre Piece', NULL, 'Glass', 20, 'pcs', 200, 'product/z6UCJHf0SuuWDnJETgouMmcKyra77vzepy8M6SdW.jpg', 1, '2023-10-12 10:32:03', '2023-10-19 09:31:52', NULL),
(65, 10, 'CP-40', 'Glass Fish Bawl', 'Big & Small', 'Glass', 89, 'pcs', 50, 'product/qoWYTNojJ41HqAvgZydbWUdlD84qNExvhvIsmwSd.jpg', 1, '2023-10-12 10:33:09', '2023-10-12 10:33:09', NULL),
(66, 10, 'CP-41', 'Glass Fish Bawl', 'Big', 'Glass', 26, 'pcs', 300, 'product/0JZvGTGdWSZdcq5T2aQLBn7V0wvp762hOzgDFDJt.jpg', 1, '2023-10-12 10:34:42', '2023-10-12 10:34:42', NULL),
(67, 10, 'CP-42', 'Round Mirror Vase', NULL, 'Mirror', 57, 'pcs', 50, 'product/FdhXg2i0rM7a1WMjbVAYtSQcQYpRcSuu5lzKqo7h.jpg', 1, '2023-10-12 10:39:26', '2023-10-24 05:30:15', NULL),
(68, 10, 'CP-43', 'Rectangle', '1.5 x 1.5', 'Mirror', 32, 'pcs', 200, 'product/GqWKulQi65bRE1jI4MvtQAnkhabJtmDNIKoSRw2x.jpg', 1, '2023-10-12 10:48:45', '2023-10-12 10:48:45', NULL),
(69, 10, 'CP-44', 'Metal Hexagon Centre Piece', '10 inch', 'White', 10, 'pcs', 150, 'product/BAv8MM6vwvhGsYtglNKI01pFh3gsGDG6Eu0qkJSb.jpg', 1, '2023-10-12 10:53:52', '2023-10-19 12:23:54', NULL),
(70, 10, 'CP-15', 'Metal Round Centre Piece', '10 inch', 'White', 15, 'pcs', 150, 'product/8uhWgrwXpjxQLZamw2GMEiTMvWq9fiRBwJ89VZrF.jpg', 1, '2023-10-12 10:54:57', '2023-10-19 11:26:03', NULL),
(71, 9, 'AT-01', 'Bamboo Tree', '6 feet', 'Green', 0, 'pcs', 500, 'product/201RG2NtZej61LcEgehESVhEwaatSRxuLwo5kuWE.jpg', 1, '2023-10-12 11:04:53', '2023-10-24 07:17:46', NULL),
(72, 9, 'AT-2', 'Palm Tree', '5 feet', 'Green', 4, 'pcs', 1000, 'product/HYFCOOYPRkXf6BntYK3TQ1SkuBlxYlQlSm7Y1brd.jpg', 1, '2023-10-12 11:09:53', '2023-10-12 11:09:53', NULL),
(73, 9, 'AT-3', 'Date Tree', '4 feet', 'Green', 14, 'pcs', 100, 'product/3DMsdZnM5QDStaXYea6DaDxFat2K66VBFUPwPIzy.jpg', 1, '2023-10-12 11:10:50', '2023-10-24 07:17:46', NULL),
(74, 9, 'AT-4', 'Bat Gach', '3.5 feet', 'Green', 10, 'pcs', 100, 'product/ieygIv4BLbPr1kIRWzXnVkCocNYwtJJxY1QfVFTA.jpg', 1, '2023-10-12 11:12:09', '2023-10-12 11:12:09', NULL),
(75, 9, 'AT-5', 'Golden Jhau Gach', '3 feet', 'Golden', 40, 'pcs', 500, 'product/6BX7Yj2MQGjd7P4ZvJ4QweBYuRtUDLcI3Xv03d1y.jpg', 1, '2023-10-12 11:14:13', '2023-10-12 11:14:13', NULL),
(76, 9, 'AT-6', 'Kashful', '2 feet', 'Green', 30, 'pcs', 20, 'product/1rnczUGnsHx5PdvHDciPgZHwyajBbwGS8JTRhdGz.jpg', 1, '2023-10-12 11:24:16', '2023-10-12 11:24:16', NULL),
(77, 9, 'AT-7', 'Local Tree Branch', '4 feet', NULL, 250, 'pcs', 20, 'product/MPfYD3ZnHZntSU7ZoYx3VMeFnIZZ3xNFAbRSXBd0.jpg', 1, '2023-10-12 11:28:29', '2023-10-12 11:28:29', NULL),
(78, 9, 'AT-8', 'China White Tree Branch', '4 feet', NULL, 120, 'pcs', 50, 'product/57vNnYpBwrZf8H84AEZnylaeMuxOEcK6hirskCdz.jpg', 1, '2023-10-12 11:29:50', '2023-10-12 11:29:50', NULL),
(79, 9, 'AT-9', 'China Dry Tree Branch', '4 feet', NULL, 200, 'pcs', 50, 'product/KlbHNmUs1thVMy21fXooTXgkbjXBkyBgfVqC2Omk.jpg', 1, '2023-10-12 11:30:24', '2023-10-12 11:30:24', NULL),
(80, 9, 'AT-10', 'Ginger Leaf', '3 feet', 'Green', 6, 'pcs', 100, 'product/JJOJ1FtSLKB7ohx41WAvI6SUUQmAkOcE6lsxLVkq.jpg', 1, '2023-10-12 11:31:20', '2023-10-24 07:17:46', NULL),
(81, 13, 'CND-1', 'Glass Chandelier Large', 'Large', NULL, 2, 'pcs', 2500, 'product/ooRh6ONQLXbls8BWkz8ATUyM4IqsipymxJ3AzNZR.jpg', 1, '2023-10-12 13:31:02', '2023-10-12 13:31:02', NULL),
(82, 13, 'CND-1a', 'Glass Chandelier Small', 'Single Layer', NULL, 1, 'pcs', 2000, 'product/e0YIsBrwbt7n4G7mW8XER2cDRgtR2zuJJKbK4k8H.jpg', 1, '2023-10-12 13:32:24', '2023-10-12 13:32:24', NULL),
(83, 13, 'CND-2', 'Glass Chandelier Small', 'Large', NULL, 4, 'pcs', 700, 'product/HONZPFLmgrpSMLlh2764Hgl0hyZww6xa6SG9PNPZ.jpg', 1, '2023-10-12 13:34:50', '2023-10-12 13:34:50', NULL),
(84, 13, 'CND-3', 'Silver Chandelier', NULL, 'Silver', 58, 'pcs', 500, 'product/sZ7BCW1AYngwc6Gt7iNWZUIX2Qx6YK0JnckcgYUT.jpg', 1, '2023-10-13 04:37:52', '2023-10-13 04:37:52', NULL),
(85, 13, 'CND-4', 'Golder Chandelier', NULL, 'Golden', 12, 'pcs', 700, 'product/m9T6UZQCHIuPXKhVPWzNf0m5yTvnAbg2uh2l8Yd2.jpg', 1, '2023-10-13 04:38:46', '2023-10-13 04:38:46', NULL),
(86, 13, 'CND-5', 'Ball Chandelier', '2 feet Dia', 'Golden', 10, 'pcs', 1000, 'product/Fq6NArowwIIbAGo5RvpW4c3FROdC545YjrtEj6BM.jpg', 1, '2023-10-13 04:40:27', '2023-10-13 04:40:27', NULL),
(87, 13, 'CND-6', 'Round Crystal Chandelier', 'Round', 'Silver Crystal', 65, 'pcs', 500, 'product/etVxERNRa1P3zbx976VdOhmOFlm5WbcwEBrTXq2p.jpg', 1, '2023-10-13 04:45:23', '2023-10-13 04:45:23', NULL),
(88, 13, 'CND-7', 'Metal Chandelier', NULL, 'Golden', 2, 'pcs', 1000, 'product/dl0eR0uz8l4iD8yDoJRjccrlObc4jWPrLGQl3D7L.png', 1, '2023-10-13 04:46:21', '2023-10-13 04:46:21', NULL),
(89, 13, 'CND-8', 'Spiral Chandelier', NULL, NULL, 30, 'pcs', 500, 'product/QkvVgDYBCA21I1OAU0NpnIKoeEfMsMt215S9voZt.jpg', 1, '2023-10-13 04:47:32', '2023-10-13 04:47:32', NULL),
(90, 13, 'CND-9', 'Corona Chandelier', NULL, NULL, 30, 'pcs', 800, 'product/1O7OttQVyIsavGbyg24puXsG45mF5E8VJcH933GC.jpg', 1, '2023-10-13 04:48:15', '2023-10-13 04:48:15', NULL),
(91, 13, 'CND-10', 'Crystal Chandelier', NULL, 'Red, Pink, Blue, Purple', 81, 'pcs', 200, 'product/WsONrLRMxFwAxWftavQed7gmceAGKv4NMLtSuJGt.jpg', 1, '2023-10-13 04:50:22', '2023-10-13 04:50:22', NULL),
(92, 13, 'CND-11', 'Anbas Chandelier', 'Large 21 pcs & Small 9 pcs', 'Blue', 30, 'pcs', 200, 'product/mLlw7iXni9zEUukzcEM5w25K4RAVf3amiJJqxgOB.jpg', 1, '2023-10-13 04:52:19', '2023-10-13 04:52:19', NULL),
(93, 13, 'CND-12', 'Anbas Chandelier', 'Medium', 'Sky', 7, 'pcs', 200, 'product/X7TnggmdXeBoF4qtGyDHpEpdkxdvOx7GOfncZEdI.jpg', 1, '2023-10-13 04:53:01', '2023-10-13 04:53:01', NULL),
(94, 13, 'CND-13', 'Anbas Chandelier', 'Large', 'Golden', 18, 'pcs', 200, 'product/8cPf5WYZbhCHoOid6HS0nOtsfFFH55LC3bIf9sJO.jpg', 1, '2023-10-13 04:53:41', '2023-10-13 04:53:41', NULL),
(95, 13, 'CND-14', 'Anbas Chandelier', 'Large 23 pcs, Small 9 pcs', 'Green', 32, 'pcs', 200, 'product/WKM5Pn8IiA5ogRbxGk34jUgo6LMP7Egrhnzukixa.jpg', 1, '2023-10-13 04:54:34', '2023-10-13 04:54:34', NULL),
(96, 13, 'CND-15', 'Anbas Chandelier', 'Large 31 pcs, Small 9 pcs', 'Red', 40, 'pcs', 200, 'product/JVRUqv7kSNUK8bXtaYchTv0PgKRckllge1Ccm2re.jpg', 1, '2023-10-13 04:55:40', '2023-10-13 04:55:40', NULL),
(97, 13, 'CND-16', 'Case Chandelier', NULL, 'White', 50, 'pcs', 100, 'product/gVKX4uysZVfT8aQoKXYrehXhf15XDEyE6JAC8Hnc.jpg', 1, '2023-10-13 04:58:07', '2023-10-13 04:58:07', NULL),
(98, 13, 'CND-17', 'Mic Chandelier', NULL, NULL, 8, 'pcs', 200, 'product/lbRowjxAlhnbN2n2M99Qmbye1Cq086rUxuQKn9ap.jpg', 1, '2023-10-13 04:59:19', '2023-10-13 04:59:19', NULL),
(99, 13, 'CND-18', 'Hanging Chandelier', NULL, 'White', 6, 'pcs', 200, 'product/5R83ZgFzCl9itHvMZN6SzcPSp7gdt4UNvqHPpR9n.jpg', 1, '2023-10-13 05:00:32', '2023-10-13 05:00:32', NULL),
(100, 13, 'CND-19', 'Bulb Chandelier', 'Set', 'Golden', 2, 'pcs', 8000, 'product/TLssgVzPDp45dCLqs3PywSuZHbOXaWogY1SKtmmL.jpg', 1, '2023-10-13 05:01:44', '2023-10-13 05:01:44', NULL),
(101, 13, 'CND-20', 'Large Crystal Chandelier', 'Large', 'Silver Crystal', 1, 'pcs', 2000, 'product/7bYBNNkDFuoxkXL34WUOaMqMB31lHUY3CjgIye1Z.jpg', 1, '2023-10-13 05:03:01', '2023-10-13 05:03:01', NULL),
(102, 13, 'CND-21', 'Glass Crystal Chandelier', '10 gang', 'Crystal', 11, 'pcs', 2000, 'product/1ApHQlvHaA849xPAbImL5LL0osJDJQLsK2yb9ZeK.jpg', 1, '2023-10-13 05:06:39', '2023-10-13 05:06:39', NULL),
(103, 13, 'CND-22', 'Glass Crystal Chandelier', '15 Gang', 'Crystal', 15, 'pcs', 3000, 'product/jUmh6eZIvCIjanwNypZ3xftdEHFvvyR45zZdydH6.jpg', 1, '2023-10-13 05:07:25', '2023-10-13 05:07:25', NULL),
(104, 13, 'CND-24', 'Modern Crystal Chandelier', 'Round', 'Crystal Golden', 6, 'pcs', 1500, 'product/Lk23hJ9Th8Gnf8NQhGjKj0C3lJJBcTl8tWsyIR7s.jpg', 1, '2023-10-13 05:13:36', '2023-10-13 05:13:36', NULL),
(105, 13, 'CND-25', 'Pineapple Chandelier', NULL, 'Glass', 8, 'pcs', 300, 'product/o93Ih8U9hnWtiwbAhETVH9JM2jmdnQeAFGxWiSYo.jpg', 1, '2023-10-13 05:15:18', '2023-10-13 05:15:18', NULL),
(106, 13, 'CND-26', 'Hanging Chandelier', NULL, 'White', 8, 'pcs', 300, 'product/FRVURZCJaJVUuploIPtBsr9ruR18fp7zQtSlb9tp.jpg', 1, '2023-10-13 05:18:26', '2023-10-13 05:18:26', NULL),
(107, 17, 'FT-1', 'Large Stone Chandelier', 'H-7feet, D-8feet', 'White', 1, 'pcs', 25000, 'product/default.webp', 1, '2023-10-13 06:28:00', '2023-10-13 06:28:00', NULL),
(108, 17, 'FT-1', 'Large Stone Chandelier', 'H-7feet, D-8feet', 'Antique White', 1, 'pcs', 25000, 'product/2aCqWJRMsAj7vJkqKIaKCslMS2GRj89s3uL4zsWQ.png', 1, '2023-10-13 06:28:30', '2023-10-13 06:28:30', NULL),
(109, 17, 'FT-2', 'Small Stone Fountain', 'H-4 feet, D-3.5 feet', 'Marvel', 1, 'pcs', 6000, 'product/0PQnOBIrYMZQPy4IxqhqxhSwvtc8cfeA8zkR0c6Y.png', 1, '2023-10-13 06:29:39', '2023-10-30 07:21:35', NULL),
(110, 17, 'FT-3', 'Rectangle Metal Fountain', 'H-5 feet, L-4 feet, W-4 feet', 'White', 2, 'pcs', 7000, 'product/Lgj33WkmBMG8D2s7JiQIyM0vGbSMcLhBtFOFFRoU.jpg', 1, '2023-10-13 06:30:40', '2023-10-13 06:30:40', NULL),
(111, 17, 'FT-4', 'Round Large Metal Fountain', 'H-7 feet', 'White', 0, 'pcs', 5000, 'product/PPy2KCV08P9qdPSmv0qDBK9ujDFajEuGl0YSzd1m.jpg', 1, '2023-10-13 06:31:24', '2023-10-30 07:21:35', NULL),
(112, 17, 'FT-5', 'SS Mini Fountain', 'H-4 feet, W+L-1 feet', 'Steel', 12, 'pcs', 1500, 'product/So6ZS9In7b41E2ZtcSvqn2d36CiUNKC3YST11f3M.jpg', 1, '2023-10-13 06:34:56', '2023-10-13 06:34:56', NULL),
(113, 17, 'FT-6', 'Stone Medium Fountain', 'H-4 feet, D-4 feet', 'Antique White', 1, 'pcs', 10000, 'product/VDHaPL964YR2WeLCiN41TraCr422UntDdqahniKq.jpg', 1, '2023-10-13 08:21:28', '2023-10-13 08:21:28', NULL),
(114, 16, 'FV-2', 'Flower Vase with Base', 'H-3 feet', 'Customize', 1, 'pcs', 600, 'product/N0jE91nbnYUiC3Ffczr7UcRfowPDHg8OptcJohzx.jpg', 1, '2023-10-13 08:36:49', '2023-10-30 08:30:44', NULL),
(115, 16, 'FV-2', 'Flower Vase with Base', 'H-3 feet', 'Customize', 4, 'pcs', 600, 'product/7e1d49Ea5XKd5UV0fbJfSWGPeY2HRFCgdv0o5BDU.jpg', 1, '2023-10-13 08:36:52', '2023-10-13 08:37:22', '2023-10-13 08:37:22'),
(116, 16, 'FV-2', 'Flower Vase with Base', 'H-3 feet', 'Customize', 4, 'pcs', 600, 'product/YvHfGDmJDRrrb9xUn9y4HWrA9HhXsgmFSF8xCzcr.jpg', 1, '2023-10-13 08:36:53', '2023-10-13 08:38:04', '2023-10-13 08:38:04'),
(117, 16, 'FV-1', 'Crystal Flower Vase', 'H-2 feet, 1 feet', 'Crystal Silver', 7, 'pcs', 1000, 'product/GcXVGQLIYLySM5YxJRXfqWBYAgNBdBzo8D3omzjW.jpg', 1, '2023-10-13 09:12:44', '2023-10-31 12:30:09', NULL),
(118, 16, 'FV-3', 'Medium Flower Vase', 'H-3 feet', 'Customize', 6, 'pcs', 500, 'product/2PUSQj3btRBdodGH8eT6aRRcAlqrUVQPItOuich0.jpg', 1, '2023-10-13 09:18:03', '2023-10-19 12:23:54', NULL),
(119, 16, 'FV-4', 'Fiber Flower Vase', 'H-2.5 feet', NULL, 13, 'pcs', 500, 'product/3uzDDlSeGNtswaT1HL3Y7RC6KQwUXinBoIanwjgk.jpg', 1, '2023-10-13 09:29:36', '2023-10-30 08:30:44', NULL),
(120, 16, 'FV-5', 'Plastic Flower Vase', NULL, 'White', 6, 'pcs', 300, 'product/1iwDylrlh9K3sqap6LagyVKZllC2e6rc6iYCCaCk.jpg', 1, '2023-10-13 09:30:18', '2023-10-13 09:30:18', NULL),
(121, 16, 'FV-6', 'Roman Flower Vase', NULL, 'White', 9, 'pcs', 500, 'product/CqTQQLOvP4M27MesAmZMxw69tkzsLFqMXSxVG5jD.jpg', 1, '2023-10-13 09:35:00', '2023-10-13 09:35:00', NULL),
(122, 16, 'FV-7', 'Thin Fiber Flower Vase', NULL, 'Golden', 16, 'pcs', 500, 'product/ap21wYCaUqe7eSAaEUVDRLbBAuARhh6hUBbup5fr.jpg', 1, '2023-10-15 03:52:35', '2023-10-15 03:52:35', NULL),
(123, 16, 'FV-8', 'Jar Shape Flower Vase', NULL, 'Golden', 6, 'pcs', 500, 'product/HP3shoSHmDdZyrw3ugrWxqLTnUdggu6Tt6nzR3dM.jpg', 1, '2023-10-15 03:53:35', '2023-10-15 03:53:35', NULL),
(124, 16, 'FV-9', 'Elephant Teeth Flower Vase', NULL, 'Golden', 2, 'pcs', 1000, 'product/FknqWB0j5ukYxGj6SFSwRCM6OqLhLMvoaDQWNLMV.jpg', 1, '2023-10-15 03:54:24', '2023-10-15 03:54:24', NULL),
(125, 16, 'FV-10', 'Wooden Flower Vase', 'Tall & Short', 'White', 7, 'pcs', 200, 'product/3i5ZzWJzr6F5phymlJSfru7KI8B5gXlAaSPpIcDL.png', 1, '2023-10-15 03:55:52', '2023-10-19 11:35:13', NULL),
(126, 16, 'FV-12', 'Wooden Flower Vase', 'Tall & Short', 'White', 3, 'pcs', 100, 'product/Phf6jt1HmET6BkN1Lz9EI1Jhe5bzu0q2kvl5EHif.jpg', 1, '2023-10-15 03:57:13', '2023-10-15 03:57:13', NULL),
(127, 16, 'FV-13', 'Wooden Box Flower Vase', 'Large, Medium & Small', 'Wooden', 11, 'pcs', 200, 'product/Z6D2TUpmBvLwJfgnZhfdPzijR8VLgyco2OPhsS84.png', 1, '2023-10-15 03:58:12', '2023-10-15 03:58:12', NULL),
(128, 16, 'FV-14a', 'Round Flower Vase', 'Large', 'White', 2, 'pcs', 300, 'product/6ChNnc1dDL6xpfwsXT24cGJkktLoNMSMdlnVuAMX.jpg', 1, '2023-10-15 04:00:00', '2023-10-15 04:00:00', NULL),
(129, 16, 'FV-14b', 'Round Flower Vase', 'Medium', 'White', 2, 'pcs', 250, 'product/sofm28OAPBfsGjnktfpksnGA8nphc6mGS4NGXVBf.jpg', 1, '2023-10-15 04:00:35', '2023-10-15 04:00:35', NULL),
(130, 16, 'FV-14c', 'Round Flower Vase', 'Small', 'White', 5, 'pcs', 250, 'product/YcEo6o5R5sVGTfIE3ir09tqe3crcRNTH6MfFC0WA.jpg', 1, '2023-10-15 04:01:00', '2023-10-15 04:01:00', NULL),
(131, 16, 'FV-15a', 'Mirror Flower Vase', 'Large', NULL, 1, 'pcs', 500, 'product/etFRvy99ZhSTifDHzHDj1gWKIvobgqGiCdZwFmj9.jpg', 1, '2023-10-15 04:02:14', '2023-10-19 12:23:54', NULL),
(132, 16, 'FV-15b', 'Mirror Flower Vase', 'Medium', NULL, 4, 'pcs', 300, 'product/K60x4r0APPpqjQL6P8FoHtmAFKCOVn4inLGf13z3.jpg', 1, '2023-10-15 04:02:53', '2023-10-15 04:02:53', NULL),
(133, 16, 'FV-15c', 'Mirror Flower Vase', 'Small', NULL, 2, 'pcs', 200, 'product/f3MmSzjqexmVFAr64kqcCwcDKbc1Bj1xdFcyHhaK.jpg', 1, '2023-10-15 04:04:38', '2023-10-15 04:04:38', NULL),
(134, 16, 'FV-16', 'Metal Flower Vase', NULL, 'Customize', 4, 'pcs', 300, 'product/MfsJqYh2QG4uw9TH4afdR7Ubg7YpBFXbVFIwgdrW.jpg', 1, '2023-10-15 04:05:46', '2023-10-15 04:05:46', NULL),
(135, 16, 'FV-17', 'Metal Flower Vase', NULL, 'Customize', 19, 'pcs', 300, 'product/UePS6Zl8y62mKbe0986mLCuuRFmjtD1ttj1W40CM.jpg', 1, '2023-10-15 04:06:20', '2023-10-15 04:06:20', NULL),
(136, 16, 'FV-18', 'Coper Flower Vase', 'Large, Medium & Small', 'Coper', 12, 'pcs', 1000, 'product/gVnxcMViuXEonmKsyD02Zi6sGJdbwk5kjqtHa6P8.jpg', 1, '2023-10-15 04:07:21', '2023-10-15 04:07:21', NULL),
(137, 18, 'HI-01', 'Yarn Lace', NULL, 'Blue & Yellow', 7, 'pcs', 200, 'product/dqbMc0m8V5eEn3WaIk35z7588uLUgWAWCWxFe6oe.jpg', 1, '2023-10-15 04:26:50', '2023-10-15 04:26:50', NULL),
(138, 18, 'HI-2', 'Golden Yarn Lace', 'Large, Medium & Small', 'Golden', 18, 'pcs', 200, 'product/VVxkqN7XmquLW8FzLbx9TRy2UG2Y61TFift0XPir.jpg', 1, '2023-10-15 04:27:42', '2023-10-15 04:27:42', NULL),
(139, 18, 'HI-03', 'Red Yarn Lace', NULL, 'Red', 5, 'pcs', 200, 'product/aDblZrtsGWsGKFR77ozp47kYrLliGUa8jguLFQVn.jpg', 1, '2023-10-15 04:29:52', '2023-10-15 04:29:52', NULL),
(140, 18, 'HI-04', 'Pink Yarn Lace', NULL, 'Pink', 8, 'pcs', 200, 'product/Q8oMdSb57dwurdO6Nz3uJkzz8D61pAC7lmqUC0ot.jpg', 1, '2023-10-15 04:30:23', '2023-10-15 04:30:23', NULL),
(141, 18, 'HI-5', 'Silver Yarn Lace', NULL, 'Silver', 10, 'pcs', 200, 'product/y20bdqW1V2zWvqHZFhwmzXRAXvWlhsZvYX2LhDs5.jpg', 1, '2023-10-15 04:31:06', '2023-10-15 04:31:06', NULL),
(142, 18, 'HI-06', 'Silver Beads Lace', NULL, 'Crystal Silver', 7, 'pcs', 500, 'product/70Z9MpzmjPpojFV9A5Sf0zRAJNBvKFEIOCrVCeXo.jpg', 1, '2023-10-15 04:39:01', '2023-10-15 04:39:01', NULL),
(143, 18, 'HI-07', 'Silver Beads Lace', NULL, 'Crystal Silver', 5, 'pcs', 500, 'product/EDyHTRhTpwdnWWnVc7vyH73IWq7lmgK0qyTRggj6.jpg', 1, '2023-10-15 04:40:14', '2023-10-15 04:40:14', NULL),
(144, 18, 'HI-08', 'Golden Beads Lace', NULL, 'Golden', 4, 'pcs', 500, 'product/QVMi1Lj6UHFQtkluqdsfpZE4An0tOmpdzWn8Ij4t.jpg', 1, '2023-10-15 04:40:45', '2023-10-15 04:40:45', NULL),
(145, 18, 'HI-09', 'Transparent Beads Lace', NULL, 'Transparent', 6, 'pcs', 500, 'product/TGdqzg4QkPfx4H9F0q3grpWGDkPQTkCgo3PGNO48.jpg', 1, '2023-10-15 04:41:32', '2023-10-15 04:41:32', NULL),
(146, 18, 'HI-10', 'Ring Lace', NULL, 'White & Cream', 20, 'pcs', 200, 'product/wnAgnIwqMWFU66WowplBGIuIHZY4xTMWBMPH2Fs4.jpg', 1, '2023-10-15 04:42:31', '2023-10-15 04:42:31', NULL),
(147, 18, 'HI-11', 'Yarn Glitter Lace Square', 'Large & Medium', 'Red & Silver', 22, 'pcs', 300, 'product/lgPFiwx1jtGptk4ipV8Mrmob9mLixVsXi6m43ncX.jpg', 1, '2023-10-15 04:43:53', '2023-10-15 04:43:53', NULL),
(148, 18, 'HI-12', 'Yarn Glitter Lace Ring', NULL, 'Red & Yellow', 9, 'pcs', 300, 'product/dSAJZAgF43JJgZrcAYeA40Is6sMRkrevnCJmQyqb.jpg', 1, '2023-10-15 04:44:39', '2023-10-15 04:44:39', NULL),
(149, 18, 'HI-13', 'Yarn Lace', NULL, 'White, Silver & Golden', 72, 'pcs', 100, 'product/21mMtdOtA4IMJKz3NbbnR1mexzn5oqLhDOBo4vlH.jpg', 1, '2023-10-15 04:45:47', '2023-10-15 04:45:47', NULL),
(150, 18, 'HI-14', 'Beads Lace', 'Dhan-5 pcs, Flat-5 pcs', NULL, 10, 'pcs', 500, 'product/0neG4M81h3aZCEWGsOo10AXJII7ufiYil0v8BLte.jpg', 1, '2023-10-15 04:50:54', '2023-10-15 04:50:54', NULL),
(151, 18, 'HI-15', 'Love Beads Lace', NULL, NULL, 4, 'pcs', 500, 'product/Wg2zO4HwVKgQRKtpnMWQkZSWQVjQR87J5fukl7fH.jpg', 1, '2023-10-15 05:06:00', '2023-10-15 05:06:00', NULL),
(152, 18, 'HI-16', 'Beads Lace', NULL, 'Silver & Golden', 20, 'pcs', 500, 'product/8PnN7c7Dh3zfYl4i1mbqrGZI3aofsnrdXkUa7Iqs.jpg', 1, '2023-10-15 05:07:39', '2023-10-15 05:07:39', NULL),
(153, 18, 'HI-17', 'Beads Lace', NULL, 'Golden', 10, 'pcs', 500, 'product/TyBF8l8ktsRgoep1NXSedaFIbhCHWeyX2KyKZCyv.jpg', 1, '2023-10-15 05:08:31', '2023-10-15 05:08:31', NULL),
(154, 18, 'HI-18', 'Beads Lace', NULL, 'Blue, Pink & Purple', 7, 'pcs', 400, 'product/VV0juMoUxAYoJyIhwlSd1SVK6ekH25Gl8C9gxylx.jpg', 1, '2023-10-15 05:11:35', '2023-10-15 05:11:35', NULL),
(155, 18, 'HI-19', 'China Ring', 'S-14, M-15, L-14', 'Customize', 43, 'pcs', 200, 'product/am9DgHqNW9O1oXb2BGusvvM415KUuOj0ZB75zSKD.jpg', 1, '2023-10-15 05:13:09', '2023-10-15 05:13:09', NULL),
(156, 18, 'HI-20', 'Glass Nest Case', NULL, 'Glass', 11, 'pcs', 200, 'product/kipAajnOX2w5Ua9xA0tFSRO26elpWW7lLfJaXmle.jpg', 1, '2023-10-15 05:13:49', '2023-10-15 05:13:49', NULL),
(157, 18, 'HI-21', 'Glass Nest Case', 'Round', 'Glass', 6, 'pcs', 200, 'product/5OrDcrAe1u3SMnniLvA7qWMLYIq2cm4U07B3JfG7.jpg', 1, '2023-10-15 05:14:15', '2023-10-15 05:14:15', NULL),
(158, 18, 'HI-22', 'Glass Nest Case', NULL, 'Glass', 5, 'pcs', 200, 'product/glhDPJ0eMEkDw8zwsGdmji8af0iqLx8FYOnMZE2j.jpg', 1, '2023-10-15 05:15:12', '2023-10-15 05:15:12', NULL),
(159, 18, 'HI-23', 'Hanging Glass Showpiece', NULL, NULL, 165, 'pcs', 50, 'product/dLWGxmHVDEDcIYJLXEo9DO0ewAVTa9uwmKQixcJe.jpg', 1, '2023-10-15 05:15:47', '2023-10-15 05:15:47', NULL),
(160, 18, 'HI-24', 'Hanging Showpiece', NULL, NULL, 1, 'pcs', 1, 'product/wNutZkdNFprwk3RV9WwowLTPwKYBv6P8Y08ljYly.jpg', 1, '2023-10-15 05:16:13', '2023-10-15 05:16:13', NULL),
(161, 18, 'HI-25', 'Hanging Showpiece', NULL, NULL, 160, 'pcs', 50, 'product/B4Ot8lATxI7C5uT775bTlFSfJCzruSYKeqUlMMgf.jpg', 1, '2023-10-15 05:16:33', '2023-10-15 05:16:33', NULL),
(162, 18, 'HI-26', 'Hanging Triangle', 'S-30, L-30', NULL, 60, 'pcs', 50, 'product/Mx1Ti7RAp0KueyapQD2lyeNlppWgZY8798ZADNHb.jpg', 1, '2023-10-15 05:17:36', '2023-10-15 05:17:36', NULL),
(163, 18, 'HI-27', 'Trass Hanging Triangle', NULL, NULL, 22, 'pcs', 50, 'product/LjUDJxVnj9F3f1AfBulnBQMlguur0Pof6v2OHE7A.jpg', 1, '2023-10-15 05:18:04', '2023-10-15 05:18:04', NULL),
(164, 18, 'HI-28', 'Wooden Kashmiri Fan', NULL, 'Golden', 26, 'pcs', 300, 'product/C9gQVH3WsfrlRzaI2i4rk3VILCBvR66FsRGLZygP.jpg', 1, '2023-10-15 05:39:05', '2023-10-15 05:39:05', NULL),
(165, 18, 'HI-29', 'Mirror Fram', NULL, 'Golden', 3, 'pcs', 100, 'product/liHAypdF66iVj0Aa6WkawCjENg3JsEYTwMXv1N5Q.jpg', 1, '2023-10-15 05:39:36', '2023-10-15 05:39:36', NULL),
(166, 18, 'HI-30', 'Mirror Frame Rectangle', NULL, 'Golden', 3, 'pcs', 100, 'product/0d0x8uy9er1oVxwBRcDHbGP9JMgeHfkD4mwKQNZS.jpg', 1, '2023-10-15 05:40:04', '2023-10-15 05:40:04', NULL),
(167, 18, 'HI-31', 'Mirror Frame Round', NULL, 'White', 36, 'pcs', 100, 'product/cuqDXNr8iFuSPgXXUSUCFxgcoS9hHECTggvp404G.jpg', 1, '2023-10-15 05:40:35', '2023-10-15 05:40:35', NULL),
(168, 18, 'HI-32', 'Picture Frame', '30 in x 36 in', NULL, 5, 'pcs', 200, 'product/o4L99aggRC6qEqWWYJjfchpCuErTzdj4y2PnlDRf.jpg', 1, '2023-10-15 05:42:07', '2023-10-15 05:42:07', NULL),
(169, 18, 'HI-33', 'Crystal Fat Chain', '10 feet', 'Crystal', 48, 'pcs', 30, 'product/ELAfND5BGMqaQKY648B71BlrvRHtI8t2aebPiO4n.jpg', 1, '2023-10-15 05:43:22', '2023-10-15 05:43:37', NULL),
(170, 18, 'HI-34', 'Crystal Thin Chain', '10 feet', NULL, 20, 'pcs', 30, 'product/vBhY4kMYBRETX9JstWWsgDAen67zSaPH9wZmeu5D.jpg', 1, '2023-10-15 05:44:14', '2023-10-15 05:44:14', NULL),
(171, 18, 'HI-35', 'Crystal Chain', '2 feet', 'White', 300, 'pcs', 10, 'product/9w5ceHgoGTMoUHKJqT6kIrkXLwMkXXcWeGZK08oO.jpg', 1, '2023-10-15 05:45:05', '2023-10-15 05:45:05', NULL),
(172, 18, 'HI-36', 'Crystal Lohor', '3 feet', 'Crystal', 2000, 'pcs', 50, 'product/ZHylLrEoErlHBBobmCfOHvz6CfmJkQJ4QpQoUN4D.jpg', 1, '2023-10-15 05:47:03', '2023-10-22 05:21:36', NULL),
(173, 18, 'HI-37', 'Pearl Lohor', '3 feet', NULL, 0, 'pcs', 20, 'product/JDaVRlw2xQ49HewU3QRth0KWOMWWgrs0Nzb9cwTv.jpg', 1, '2023-10-15 05:50:11', '2023-10-15 05:50:11', NULL),
(174, 18, 'HI-37', 'Crystal Ball', NULL, NULL, 34, 'pcs', 50, 'product/GDKSGzC4z6HcTVxAHkDMPM3u2QPqbbw0qOn0e1oV.jpg', 1, '2023-10-15 05:50:39', '2023-10-15 05:50:39', NULL),
(175, 18, 'HI-38', 'Glass Snail', 'Tall', NULL, 34, 'pcs', 200, 'product/tzvIX1JoFcjOVldxFO9VkbY7MGzv4tMrr7zKSyRl.jpg', 1, '2023-10-15 05:51:35', '2023-10-15 05:51:35', NULL),
(176, 18, 'HI-39', 'Plastic Oysters', NULL, NULL, 34, 'pcs', 20, 'product/ytpyBIP7tKFEwukhthFLQqTGx7NUtGA3EPPe7ved.jpg', 1, '2023-10-15 05:52:27', '2023-10-15 05:52:27', NULL),
(177, 18, 'HI-40', 'Glass Ball', NULL, NULL, 28, 'pcs', 200, 'product/1Ix7PQU48o4KaBZX4NCukJRyu772NzczS3daBx1D.jpg', 1, '2023-10-15 05:53:37', '2023-10-15 05:53:37', NULL),
(178, 18, 'HI-41', 'Mirror Ball', NULL, 'Mirror', 18, 'pcs', 200, 'product/yPQULXvwOddU8c79mSd19xpSzGhfRdMzvzz0ivUS.jpg', 1, '2023-10-15 05:54:18', '2023-10-15 05:54:18', NULL),
(179, 18, 'HI-42', 'Plastic Ball', NULL, NULL, 25, 'pcs', 20, 'product/fO79rUR6HnyAzIzCCHvS10jwVHXS3dzw3TkHJnFQ.jpg', 1, '2023-10-15 05:54:51', '2023-10-15 05:54:51', NULL),
(180, 18, 'HI-43', 'Small Disco Ball', NULL, NULL, 27, 'pcs', 50, 'product/4fVwykiRqLtyboLBp3mgLIDDYR6F21vRpUnM9kWH.jpg', 1, '2023-10-15 05:56:02', '2023-10-15 05:56:02', NULL),
(181, 18, 'HI-44', 'Small Disco Ball', NULL, NULL, 21, 'pcs', 20, 'product/z6mmvisNHMwqq6QGpnZYy5oDRCQXCzA9LIqyqz9H.jpg', 1, '2023-10-15 05:56:26', '2023-10-19 12:23:54', NULL),
(182, 18, 'HI-45', 'Butterfly', NULL, NULL, 42, 'pcs', 100, 'product/ILvKEV3utx4ivaNSUiBc1gW1YRys9BowUK1SprPP.jpg', 1, '2023-10-15 05:56:51', '2023-10-15 05:56:51', NULL),
(183, 18, 'HI-46', 'Trass SS CNC Cutting', NULL, NULL, 15, 'pcs', 200, 'product/u92zAqahJT7449a8S3nVzRk4iPEuidnTV1QEnTHk.jpg', 1, '2023-10-15 05:58:00', '2023-10-15 05:58:00', NULL),
(184, 18, 'HI-47', 'Metal Round Ball', NULL, NULL, 6, 'pcs', 100, 'product/xE4XB3jLYjkWKPO0g6APorhN3WAISilLBg8vtifH.jpg', 1, '2023-10-15 05:59:51', '2023-10-15 05:59:51', NULL),
(185, 35, 'P-01', 'কাঠের প্লাটফর্ম ৪ x ৪', '16 sft', 'Wooden', 100, 'pcs', 480, 'product/BTnLpkyDGw8xkXIX6UFN1IyuliDqmDEAD0yLgSMi.jpg', 1, '2023-10-18 05:53:04', '2023-10-18 05:53:04', NULL),
(186, 35, 'P-2', 'Wooden Platform 3.5 x 5', '17.5 sft Per SFT-30tk', 'Wooden', 20, 'pcs', 525, 'product/YCAwiH6HZgGzFynjRUSKp6f5TC9zzpMQM1keZnox.jpg', 1, '2023-10-18 05:56:22', '2023-10-18 05:56:22', NULL),
(187, 35, 'P-03', 'Wooden Platform Round', '12feet x 12feet', 'Wooden', 1, 'pcs', 10000, 'product/o1Dbset27146lwMwoZVyKUZnrSfpx1YdhnE7kT0r.jpg', 1, '2023-10-18 06:00:46', '2023-10-18 06:00:46', NULL),
(188, 35, 'P-04', 'Mirror Platform', 'Per Platform 17.5 sft (3.5 feet x 5 feet)', 'Silver', 60, 'pcs', 1225, 'product/hNULdaOlFThmxmOyLDCpSoQA5ynOJONhAATQPeUs.jpg', 1, '2023-10-18 06:11:08', '2023-10-18 06:11:08', NULL),
(189, 35, 'P-05', 'Mirror Platform Golden', 'Per Platform 17.5 sft (3.5 feet x 5 feet)', 'Golden', 40, 'pcs', 2275, 'product/9sFX0bO84Pgju8c9rdTlOdCVPTwsZn6Wev5aocgi.jpg', 1, '2023-10-18 06:14:22', '2023-10-18 06:14:22', NULL),
(190, 35, 'P-06', 'Glass Platform', 'Per Platform 16 sft (4 feet x 4 feet)', 'Transparent Glass', 50, 'pcs', 1120, 'product/7DQc786QzHHTivpVpqoaRkESwT1LTOCVjUPKUuay.jpg', 1, '2023-10-18 06:15:55', '2023-10-18 06:15:55', NULL),
(191, 35, 'P-07', 'Aquarium Platform', 'Per Platform 16 sft (4 feet x 4 feet)', 'Transparent Glass', 2, 'pcs', 4800, 'product/n0KBcaAtkQla85vuUQquDaSb7V56hvmjqOGvZKs0.jpg', 1, '2023-10-18 06:18:39', '2023-10-18 06:18:39', NULL),
(192, 35, 'P-09', 'Water Bed', 'Per Platform 16 sft (4 feet x 4 feet)', 'LED', 25, 'pcs', 5600, 'product/mqZaxwsUMagaAkUk7aKBx2DQ4MWzvRHSoXSfmrkz.jpg', 1, '2023-10-18 06:24:43', '2023-10-18 06:24:43', NULL),
(193, 35, 'P-10', 'Mirror Stair 3 step', '1.5 feet x 4 feet', NULL, 2, 'pcs', 1000, 'product/7kF8S2Let3grBl7hjguPzUtlIyuF3hBd9osMOp67.jpg', 1, '2023-10-18 06:25:27', '2023-10-18 06:26:50', NULL),
(194, 35, 'P-11', 'Mirror Stair 2 step', '1 feet x 4 feet', NULL, 2, 'pcs', 500, 'product/9qosQNwfXMXNC2o2MiadM5q1YTDnAFSUsQm7iwoF.jpg', 1, '2023-10-18 06:26:04', '2023-10-18 06:26:04', NULL),
(195, 35, 'P-12', 'Mirror Stair 1 step', '6 feet x 4 feet', NULL, 2, 'pcs', 300, 'product/CyWI5QPmBkJ4gV26qDO2DVV0LtTA6GwS6iAhzjXu.jpg', 1, '2023-10-18 06:26:32', '2023-10-18 06:26:32', NULL),
(196, 35, 'P-16', 'Straight Stair', '1.5 feet 5pcs & 1 feet 3pcs', 'Wooden', 8, 'pcs', 300, 'product/YkRmum6g0obI6MMHQqjYie35tnM2wVFg6DRbpM6Z.jpg', 1, '2023-10-18 06:52:35', '2023-10-18 06:52:35', NULL),
(197, 34, 'CH-01', 'Golden Round Design Chair', NULL, 'Golden', 50, 'pcs', 300, 'product/3HAoTiPWFOT11g2qnidzBvs0AmXDmB7i6Xm545Uz.jpg', 1, '2023-10-19 04:05:26', '2023-10-19 04:05:26', NULL),
(198, 34, 'CH-2', 'Golden Stick Chair', NULL, 'Golden', 50, 'pcs', 300, 'product/kcxBfKccqAPa22Ewv8uBtEaPjxEbTsqtr6oZ7mz7.jpg', 1, '2023-10-19 04:07:08', '2023-10-19 04:07:08', NULL),
(199, 34, 'CH-03', 'Golden Chair', NULL, 'Golden', 30, 'pcs', 300, 'product/acmQ9lRErbxNpuHM0VRUltvEhQU4k29bKKGcHpIB.jpg', 1, '2023-10-19 04:09:31', '2023-10-30 06:47:14', NULL),
(200, 34, 'CH-04', 'Golden Chair', NULL, 'Golden', 2, 'pcs', 300, 'product/W2ErSty5FIlpg4NfcBc4msiC0QQtH5025u1Xg6pM.jpg', 1, '2023-10-19 04:09:57', '2023-10-19 04:09:57', NULL),
(201, 34, 'CH-05', 'Garden Chair', NULL, 'Golden', 200, 'pcs', 80, 'product/034tqd5U89ch3Koh9zQ6CqqS1pmBKFM9yDdv6U6s.jpg', 1, '2023-10-19 04:10:24', '2023-10-19 04:10:24', NULL),
(202, 34, 'CH-06', 'Garden Chair', NULL, 'White', 200, 'pcs', 80, 'product/mU4HXnMtPjb6WKi4pJuElvvWJ5FAXFIKFb3TQMq1.jpg', 1, '2023-10-19 04:10:53', '2023-10-19 04:10:53', NULL),
(203, 14, 'C-01', 'White Butter', '3000 Yards', 'White', 2948, 'pcs', 6, 'product/I0kFBJ9mOvdhVRscP11e4XHcUSeW94R5FQYewP1w.jpg', 1, '2023-10-19 04:43:04', '2023-10-19 11:26:03', NULL),
(204, 14, 'C-2', 'White Georgette', '3000 Yards', 'White', 3000, 'pcs', 6, 'product/XmXBIxqeK2fXUIPCa57LpX555yiGtJmKZnQExIRR.jpg', 1, '2023-10-19 04:44:46', '2023-10-19 04:44:46', NULL),
(205, 14, 'C-3', 'Black Georgette', '5000 Yards', 'Black', 5000, 'pcs', 6, 'product/ELSxHFjLseUTzOASX7ria4RGpIXDxbxrKoI1xrcX.jpg', 1, '2023-10-19 04:47:24', '2023-10-19 04:47:24', NULL),
(206, 14, 'C-04', 'Piece Butter', '2100 Yards', 'Piece', 2100, 'pcs', 4, 'product/1USIfK9XbaRMhnBdLHZ9PWEKzg6pZkrn3H3nBNxH.jpg', 1, '2023-10-19 04:51:54', '2023-10-19 04:51:54', NULL),
(207, 14, 'C-05', 'Light Piece Butter', '400 Yards', 'Light Piece', 400, 'pcs', 4, 'product/Uq3miEq5FrVY4ArBXNRKAogdMleei7m9fBYVkRo3.png', 1, '2023-10-19 04:52:48', '2023-10-19 04:52:48', NULL),
(208, 14, 'C-06', 'Violet Butter', '1020 Yards', 'Violet', 1020, 'pcs', 4, 'product/OaPLrPebwg2LmDrI5ku4rzKpviVECJcmT6NyDnx4.jpg', 1, '2023-10-19 04:54:28', '2023-10-19 04:54:28', NULL),
(209, 14, 'C-07', 'Sky Blue Butter', '240 Yards', 'Sky Blue', 240, 'pcs', 4, 'product/X56N5pDEr4zXA8W2q6yzLSZAg6TAFENJ5rG7tlOJ.jpg', 1, '2023-10-19 04:55:06', '2023-10-19 04:55:06', NULL),
(210, 14, 'C-08', 'Blue Butter', '300 Yards', 'Blue', 300, 'pcs', 4, 'product/1BwGPAa0cIx17HorIWv28SFJsEUPaenVQy5HTU2s.jpg', 1, '2023-10-19 05:04:42', '2023-10-19 05:04:42', NULL),
(211, 14, 'C-09', 'Sky Georgete', '850 Yards', 'Sky', 850, 'pcs', 6, 'product/I1VtMYNxWxZVDXCwiyGHlOhSEZlA7sY7JUVt0aYf.png', 1, '2023-10-19 05:05:31', '2023-10-19 05:05:31', NULL),
(212, 14, 'C-10', 'Firoja Butter', '400 Yards', 'Firoja', 400, 'pcs', 4, 'product/VhYKSmfdLHKxRdL7ukw8ydY0H0zuyFgMyDDt8e6N.jpg', 1, '2023-10-19 05:08:34', '2023-10-19 05:08:34', NULL),
(213, 14, 'C-11', 'Red Butter', '2700 Yards', 'Red', 2700, 'pcs', 4, 'product/L8eLsyfOVft9huzUmIAqzw5bMgqwY8RZGIv0C1GZ.jpg', 1, '2023-10-19 05:09:06', '2023-10-19 05:09:06', NULL),
(214, 14, 'C-12', 'Golden Butter', '3100 Yards', 'Golden', 3100, 'pcs', 4, 'product/3HctzO26Tre3SHnHaBhZvLppHx3yYroF4VVReyzM.jpg', 1, '2023-10-19 05:10:00', '2023-10-19 05:10:00', NULL),
(215, 14, 'C-13', 'Green Butter', '550 Yards', 'Green', 550, 'pcs', 4, 'product/id1Aa4bWq4yQL40v5p1MuiX8tIZB0SlGROEAzVIu.jpg', 1, '2023-10-19 05:10:53', '2023-10-19 05:10:53', NULL),
(216, 14, 'C-14', 'Green Butter', '650 Yards', 'Green', 4, 'pcs', 4, 'product/TrOuYqNHgzMRF925Wo84oUuJXlrdr4halrr27Bor.png', 1, '2023-10-19 05:11:55', '2023-10-19 05:11:55', NULL),
(217, 14, 'C-15', 'Green Georgette', '1580 Yards', 'Green', 1580, 'pcs', 6, 'product/x6lSufGTnbU2HXri2hCEtPIScUi2zPHFRfbqzx1i.jpg', 1, '2023-10-19 05:13:58', '2023-10-19 05:13:58', NULL),
(218, 14, 'C-16', 'Parrot Butter', '240 Yards', 'Parrot', 240, 'pcs', 4, 'product/l2plPNYAJHjwRKfxdcJQbPOQTu4t6PY3F1RDXGrq.jpg', 1, '2023-10-19 05:14:58', '2023-10-19 05:14:58', NULL),
(219, 14, 'C-17', 'Pink Butter', '1350 Yards', 'Pink', 1350, 'pcs', 4, 'product/2mJ4qcUIwTLCJxHnpEKZS8CS4qWoMhHsJWl9IHAb.jpg', 1, '2023-10-19 05:16:44', '2023-10-19 05:16:44', NULL),
(220, 14, 'C-18', 'Pink Butter', '750 Yards', 'Dark Pink', 750, 'pcs', 4, 'product/H4kRYKMSmsHR9u2VkaoPGMdy0H7VuH3jRcWMxUlD.jpg', 1, '2023-10-21 05:04:35', '2023-10-21 05:04:35', NULL),
(221, 14, 'C-19', 'Light Pink Butter', '1920 Yards', 'Light Pink', 1920, 'pcs', 4, 'product/MZkvxYOka7EgQyvsUEnLwHmb5tO8KbKtR6gBv8Yu.jpg', 1, '2023-10-21 05:05:36', '2023-10-21 05:05:36', NULL),
(222, 14, 'C-20', 'Pink Georgette', '900 Yards', 'Pink', 900, 'pcs', 6, 'product/NXLozcsSy8nM9VVcok4E1VXPz0vB9PuOl0P1DHlF.jpg', 1, '2023-10-21 05:06:31', '2023-10-21 05:06:31', NULL),
(223, 14, 'C-21', 'Violet Butter', '1000 Yards', 'Violet', 4, 'pcs', 4, 'product/seabeaDy9UjRgwDYbc7yCAnYpSZwePY5TJeLEi7N.png', 1, '2023-10-21 05:08:06', '2023-10-21 05:08:06', NULL),
(224, 14, 'C-22', 'Dark Pink Georgette', '1860 Yards', 'Dark Pink', 1860, 'pcs', 6, 'product/DY3YL2WHjL1rSRPPQEXh28iOpRfrxxsvnJYHqMx7.jpg', 1, '2023-10-21 05:45:22', '2023-10-21 05:45:22', NULL),
(225, 14, 'C-23', 'Yellow Butter', '250 Yads', 'Yellow', 4, 'pcs', 4, 'product/WYCbYLEZZnrs31KmZgxYtLF1YfxNk5shH64ROjom.jpg', 1, '2023-10-21 05:45:59', '2023-10-21 05:45:59', NULL),
(226, 14, 'C-24', 'Turmeric Yellow Butter', '420 Yards', 'Turmeric Yellow', 420, 'pcs', 4, 'product/In5gGvXqGockiD7h2c2hMbrnAKkMh6FmfMUdsh7z.jpg', 1, '2023-10-21 05:48:45', '2023-10-21 05:48:45', NULL),
(227, 14, 'C-25', 'Yellow Butter', '2250 Yards', 'Yellow', 2250, 'pcs', 4, 'product/a9dprUckSbUqi9LM97YxtN0jgkRC9DiOQPuONNzR.png', 1, '2023-10-21 05:49:23', '2023-10-21 05:49:23', NULL),
(228, 14, 'C-26', 'Ripe Yellow Butter', '250 Yads', 'Ripe Yellow', 250, 'pcs', 4, 'product/LrYfQJKH58q7ZChyWQY4dD42Rpt2axXCYyAzmU25.jpg', 1, '2023-10-21 05:50:42', '2023-10-21 05:50:42', NULL),
(229, 14, 'C-27', 'Orange Butter', '2250 Yards', 'Orange', 2250, 'pcs', 4, 'product/mmgxww04EQ2xTaCJdDamMBcVM7RAllMZd5oWcjCy.png', 1, '2023-10-21 05:51:20', '2023-10-21 05:51:20', NULL),
(230, 14, 'C-28', 'Deep S Butter', '540 Yards', 'Deep S', 540, 'pcs', 4, 'product/dq6DmUPam2xC93KhI3XG5myujfhPF8zg9OBsEcHS.jpg', 1, '2023-10-21 05:53:37', '2023-10-21 05:53:37', NULL),
(231, 14, 'C-29', 'Maroon Velvet', '154 Yards', 'Marron', 154, 'pcs', 20, 'product/8e1GdFgJAIrRTiAXyEJv96Lh1cphQyoXUgLyFDWU.jpg', 1, '2023-10-21 05:57:23', '2023-10-21 05:57:23', NULL),
(232, 14, 'C-29', 'Maroon Velvet', '154 Yards', 'Marron', 154, 'pcs', 20, 'product/6Qbezi64X1J94VWBFfSSuO6mZAZgflx3N76Bu7Jh.jpg', 1, '2023-10-21 05:57:25', '2023-10-21 06:38:12', '2023-10-21 06:38:12'),
(233, 14, 'C-30', 'Golden Velvet', '112 Yards', 'Golden', 112, 'pcs', 20, 'product/Ifv54czyAJteobHtcoLgBYV6MQC0wXgHjs0rouYy.jpg', 1, '2023-10-21 06:40:07', '2023-10-21 06:40:07', NULL),
(234, 14, 'C-31', 'Orange Velvet', '28 Yards', 'Orange', 28, 'pcs', 20, 'product/kJXoDUxOsHV2mtmUMpa22SZ6hZSGQYR7oe7o6TGG.jpg', 1, '2023-10-21 06:41:49', '2023-10-21 06:41:49', NULL),
(235, 14, 'C-32', 'Deep Purple Design Cloth', '60 yards', 'Deep Purple', 60, 'pcs', 30, 'product/o8ru7uSVDeov9H3rBf4YospmG7RNWa4LeCXeos79.jpg', 1, '2023-10-21 06:43:17', '2023-10-21 06:43:17', NULL),
(236, 14, 'C-33', 'Paste Design Cloth', '60 yards', 'Paste', 60, 'pcs', 30, 'product/YfB7YfnTwyA7Hb2woIu8J8qT5xQacFzyG4n6IG2s.jpg', 1, '2023-10-21 06:44:32', '2023-10-21 06:44:32', NULL),
(237, 14, 'C-34', 'Golden Design Cloth', '60 yards', 'Golden', 30, 'pcs', 30, 'product/C9S5rH8GTAkPNrZmSNucwSAVsaBwVijgfO8XrRBz.jpg', 1, '2023-10-21 06:45:06', '2023-10-21 06:45:06', NULL),
(238, 14, 'C-35', 'Parrot Design Cloth', '60 yards', 'Parrot Green', 30, 'pcs', 30, 'product/a449a8ywuNDcxxtZ0OSP279yOWcLakENJqUO78x6.jpg', 1, '2023-10-21 06:45:48', '2023-10-21 06:45:48', NULL),
(239, 14, 'C-36', 'Stage Backdrop Cloth', '15 feet x 10 feet', 'White', 4, 'pcs', 2000, 'product/nDZIPYSoYctZLcGbVAYesdUaTzYKR1x6jUwWb6wJ.jpg', 1, '2023-10-21 06:47:59', '2023-10-21 06:47:59', NULL),
(240, 14, 'C-37', 'Blue Sequence Cloth', '84 Yards', 'Blue', 84, 'pcs', 30, 'product/N42YE3EDL6kVOGJHYpCpsyTkDR21kjLnPFSNFi4B.jpg', 1, '2023-10-21 06:49:02', '2023-10-21 06:49:02', NULL),
(241, 14, 'C-38', 'Red Sequence Cloth', '140 Yards', 'Red', 140, 'pcs', 30, 'product/6hAHLnrAQb1YOKClwQAbJMkGJVgxsrts4W8nzShe.jpg', 1, '2023-10-21 06:58:32', '2023-10-21 06:58:32', NULL),
(242, 14, 'C-38', 'Golden Sequence Cloth', '140 Yards', 'Golden', 140, 'pcs', 30, 'product/IqfMp1drn3SXlJAlE722I7SqvR97gESmomawNydX.jpg', 1, '2023-10-21 07:02:36', '2023-10-21 07:02:36', NULL),
(243, 14, 'C-40', 'Rose Golden Sequence Cloth', '140 Yards', 'Rose Golden', 140, 'pcs', 30, 'product/3MqTA2ApfmB5qoZsn0uyL9Madpm5D71dMFDJfJdw.jpg', 1, '2023-10-21 07:03:37', '2023-10-21 07:03:37', NULL),
(244, 14, 'C-41', 'Silver Sequence Cloth', '100 Yards', 'Silver', 100, 'pcs', 30, 'product/0S0u03BQZFrChX2eglycePqiZVT75zZp5jOZG3dv.jpg', 1, '2023-10-21 07:04:13', '2023-10-21 07:04:13', NULL),
(245, 14, 'C-42', 'Silver Boquete Cloth', '100 Yards', 'Silver', 100, 'pcs', 10, 'product/YyMCYcaNiVVM7AJerNk02iQgQzFrjB2uZd6Kba96.jpg', 1, '2023-10-21 07:05:16', '2023-10-21 07:05:16', NULL),
(246, 14, 'C-43', 'Golden Thick Tissue Cloth', '220 Yards', 'Golden', 220, 'pcs', 10, 'product/cxv4sG0fKUrd1qW7dkDD4HRV6LahZwJR4lzDLg1J.jpg', 1, '2023-10-21 07:06:15', '2023-10-21 07:06:15', NULL),
(247, 14, 'C-44', 'Golden Curtain', '0', 'Golden', 87, 'pcs', 200, 'product/JjzJk7Znq47qKTrSSAK6mBFuUYjqdpKCxxqaVWMj.png', 1, '2023-10-21 07:07:44', '2023-10-21 07:07:44', NULL),
(248, 14, 'C-45', 'White Curtain', NULL, 'White', 80, 'pcs', 200, 'product/kW4tnvJjyMdYYtlHlHlCDQsbPqzKntndBpcThgR2.png', 1, '2023-10-21 07:21:48', '2023-10-21 07:21:48', NULL),
(249, 14, 'C-46', 'Black Curtain', NULL, 'Black', 83, 'pcs', 200, 'product/TP6wDPHmbALMJaraIvY39grLIiSlPwPUjkwOh7G3.png', 1, '2023-10-21 07:22:10', '2023-10-21 07:22:10', NULL),
(250, 12, 'CR-1', 'White Chair Cover', NULL, 'White', 815, 'pcs', 20, 'product/JKXOHhPHAhJLvFEM0NM1UKCAjL1S4UhrrgSivy9J.jpg', 1, '2023-10-21 08:14:00', '2023-10-21 08:14:00', NULL),
(251, 12, 'CR-2', 'Jute Balco Chair Bow', NULL, 'Jute', 315, 'pcs', 20, 'product/8cXMaKZOBDQRwtlq9hzqQ5FddSUNCuH8BajGifa2.jpg', 1, '2023-10-21 08:15:22', '2023-10-21 08:15:22', NULL),
(252, 12, 'CR-3', 'Piece Color Chair Tie', NULL, 'Piece', 750, 'pcs', 15, 'product/7wkiXWa2Ic0M7UL21avYMzRp996mh1jvBuz132mq.jpg', 1, '2023-10-21 08:16:06', '2023-10-21 08:16:06', NULL),
(253, 12, 'CR-4', 'Purple Color Chair Tie', NULL, 'Purple', 750, 'pcs', 15, 'product/jn3ZNEcQykS7tu4hMk1mGyc8QsYTBnjkIHyENyZa.jpg', 1, '2023-10-21 08:17:48', '2023-10-21 08:17:48', NULL),
(254, 12, 'CR-5', 'Red Color Chair Tie', NULL, 'Red', 780, 'pcs', 15, 'product/sVgJTc5moLJeEcXQYVHMPdodcpEHb8kfNCC6l96L.jpg', 1, '2023-10-21 08:18:26', '2023-10-21 08:18:26', NULL),
(255, 12, 'CR-6', 'Sky Color Chair Tie', NULL, 'Sky', 748, 'pcs', 15, 'product/70SUNqIcHmtbPFCjZBzX1bjUvtbYCwQcSltnsGD1.jpg', 1, '2023-10-21 08:21:40', '2023-10-21 16:05:30', NULL),
(256, 12, 'CR-7', 'Silver Boquete Chair Bow', NULL, 'Silver', 1675, 'pcs', 10, 'product/W5wgpK3zM30VJZUaygxZVelzVU34npSuCy2bFqfZ.jpg', 1, '2023-10-21 08:24:15', '2023-10-21 08:24:15', NULL),
(257, 12, 'CR-8', 'Golden Boquete Chair Bow', NULL, 'Golden', 400, 'pcs', 20, 'product/UfdCARCgo0FRQpnMOrn7AEribjuQAo4rAA8p4O6J.jpg', 1, '2023-10-21 08:25:23', '2023-10-21 08:25:23', NULL),
(258, 12, 'CR-9', 'Blue Lace Chair Bow', NULL, 'Blue', 210, 'pcs', 20, 'product/Moss7lLYES9GZ4E3rvxU1Er4IiMhYTaWbLKijswb.jpg', 1, '2023-10-21 08:25:58', '2023-10-21 08:25:58', NULL),
(259, 12, 'CR-10', 'Sequence Chair Bow', NULL, 'White Golden', 950, 'pcs', 20, 'product/knn792CgmTdvDWdqI7uVGgzE7jUjZbWMQAyqW51h.jpg', 1, '2023-10-21 08:26:48', '2023-10-21 08:26:48', NULL),
(260, 12, 'CR-11', 'Green Color Chair Bow', NULL, 'Green', 211, 'pcs', 5, 'product/pIsHh117eWsWdWHaNpC1HEVAxrA65SDzGoXY9x2E.jpg', 1, '2023-10-21 08:27:18', '2023-10-21 08:27:18', NULL),
(261, 12, 'CR-12', 'Red Color Chair Bow', NULL, 'Red', 822, 'pcs', 5, 'product/Gg1O0IvFYFJ1bSXDt9Kt7MebIx5btR5R2dGOLC0m.jpg', 1, '2023-10-21 08:27:40', '2023-10-21 08:27:40', NULL),
(262, 12, 'CR-13', 'White Color Chair Bow', NULL, 'White', 330, 'pcs', 5, 'product/udkwPGc67menz4laA8gZSImKs4pEB3wzLHk4eOsN.jpg', 1, '2023-10-21 08:28:07', '2023-10-21 08:28:07', NULL),
(263, 12, 'CR-14', 'Blue Color Chair Bow', NULL, 'Blue', 370, 'pcs', 5, 'product/SSVLvABqvSlEzi5inEh3oLJtFofTn1jA4v8BQGv6.jpg', 1, '2023-10-21 08:28:27', '2023-10-21 08:28:27', NULL),
(264, 12, 'CR-15', 'Pink Color Chair Bow', NULL, 'Pink', 860, 'pcs', 5, 'product/aFqNEN5ZgMxdW7hZz0y4WRCs0ia6LIivFajFnPdW.jpg', 1, '2023-10-21 08:28:51', '2023-10-21 08:28:51', NULL),
(265, 12, 'CR-16', 'Golden Color Chair Bow', NULL, 'Golden', 1030, 'pcs', 5, 'product/WHj3wPGRWzokrBMNljpidX0xcQx6Qr96hrSscxRu.jpg', 1, '2023-10-21 08:29:13', '2023-10-21 08:29:13', NULL),
(266, 12, 'CR-17', 'Firoza Color Chair Bow', NULL, 'Firoja', 280, 'pcs', 5, 'product/JkZRDKPqeWIdJ8O1jdM9EfqrRME6ZGYd5hUdrOVm.jpg', 1, '2023-10-21 08:29:48', '2023-10-21 08:29:48', NULL),
(267, 12, 'CR-18', 'White Ball Print Chair Bow', NULL, 'Black', 407, 'pcs', 5, 'product/ozDg6Qdb4aJc3cJKyE3M4Ow69NBoNpeMgTqcVRhJ.jpg', 1, '2023-10-21 08:30:32', '2023-10-21 08:30:32', NULL),
(268, 12, 'CR-19', 'Black Ball Print Chair Bow', NULL, 'White', 350, 'pcs', 5, 'product/jeiFowiqP5bbrczndDliK5CYbikVWh7dF9mulGqv.jpg', 1, '2023-10-21 08:48:50', '2023-10-21 08:48:50', NULL),
(269, 12, 'CR-20', 'Green Chunri Chair Bow', NULL, 'Light Green', 69, 'pcs', 5, 'product/pVw4tbzX640gaLPcLDOpLeerbl15YdzCEAFQT0w0.jpg', 1, '2023-10-21 08:49:52', '2023-10-21 08:49:52', NULL),
(270, 12, 'CR-21', 'Orange Chunri Chair Bow', NULL, 'Orange', 79, 'pcs', 5, 'product/ibpFG2L0g3xFbCIj9GGsES2QO81maobe9yiHWMsx.jpg', 1, '2023-10-21 08:50:23', '2023-10-21 08:50:23', NULL),
(271, 12, 'CR-22', 'Yellow Chunri Chair Bow', NULL, 'Yellow', 57, 'pcs', 5, 'product/ggrZuWKKsfZj1pKJvSAH4Apn34pTe2QZt5op4oOp.jpg', 1, '2023-10-21 08:50:46', '2023-10-21 08:50:46', NULL),
(272, 12, 'CR-23', 'Red Chunri', NULL, 'Red', 88, 'pcs', 5, 'product/EjX8Lg8f6JE23KLPZ0YNTJfixDplAOk2HVuXpD4u.png', 1, '2023-10-21 08:51:17', '2023-10-21 08:51:17', NULL),
(273, 12, 'CR-24', 'Green Dhamas', NULL, 'Green', 350, 'pcs', 5, 'product/cEZhmvkSYDs3IHlDYyE8nlx5rtoPV7uZ8OXBS607.png', 1, '2023-10-21 08:52:07', '2023-10-21 08:52:07', NULL),
(274, 12, 'CR-25', 'Green Tissue Lace Bow', NULL, 'Green', 500, 'pcs', 5, 'product/wvRWAEgEHRJN7xXfBKsOuE0aq24ftkRDUGuvBrmG.png', 1, '2023-10-21 08:52:58', '2023-10-21 08:52:58', NULL),
(275, 12, 'CR-26', 'Cotton Coffey Color Chair Bow', NULL, 'Coffey', 250, 'pcs', 5, 'product/viAF5BjNXRQWiloXsXawb4Bj7sr2oWfpwnybkjlR.png', 1, '2023-10-21 08:53:52', '2023-10-21 08:53:52', NULL),
(276, 12, 'CR-27', 'Black Georgette', NULL, 'Black', 46, 'pcs', 5, 'product/RkOTQAxEN4tNPZSobvEtOVocwjpJoebyod7SSOMj.png', 1, '2023-10-21 08:54:32', '2023-10-21 08:54:32', NULL),
(277, 12, 'CR-28', 'Marking Velco Tie', NULL, 'White', 330, 'pcs', 10, 'product/e005mcje4jtmIlCDP0HpNfyRDNnbPyAlIGxtiYBt.jpg', 1, '2023-10-21 08:55:12', '2023-10-21 08:55:12', NULL),
(278, 12, 'CR-29', 'Piece Butter Chair Bow', NULL, 'Piece', 250, 'pcs', 5, 'product/Z6haizFa2JlIJQtwQVN3PTa8DQQFKzJY4bfsqHsx.png', 1, '2023-10-21 08:55:35', '2023-10-21 08:55:35', NULL),
(279, 26, 'TR-01', 'Red Table Runner', NULL, 'Red', 14, 'pcs', 100, 'product/VPxaNTDBjRv1wEUlNyMAKRj3mulHGQI6SNqTNMxe.jpg', 1, '2023-10-21 09:07:06', '2023-10-21 09:07:06', NULL),
(280, 26, 'TR-02', 'Blue Table Runner', NULL, 'Blue', 8, 'pcs', 100, 'product/default.png', 1, '2023-10-21 09:07:39', '2023-10-21 09:07:39', NULL),
(281, 26, 'TR-03', 'Purple Table Runner', NULL, 'Purple', 8, 'pcs', 100, 'product/CBYd2a4PRXe6iJ7rRnowA11lwlPIRaisaasW6ZWU.jpg', 1, '2023-10-21 09:08:07', '2023-10-21 09:08:07', NULL),
(282, 26, 'TR-04', 'Green Table Runner', NULL, 'Green', 10, 'pcs', 100, 'product/3fVX3MWK4KNmzGqOpnZhrhDTVKHKoB3Vc6yOfN3g.jpg', 1, '2023-10-21 09:08:49', '2023-10-21 09:08:49', NULL),
(283, 26, 'TR-05', 'Golden Table Runner', NULL, 'Golden', 49, 'pcs', 100, 'product/SmfuGrl094LcYW3v1lorIgfbVo41agtT6O0FxbeM.jpg', 1, '2023-10-21 09:09:40', '2023-10-21 09:09:40', NULL),
(284, 26, 'TR-06', 'Firoja Certin Table Runner', NULL, 'Firoja', 7, 'pcs', 100, 'product/f0UX80AMfifAyh3JsHp8SJ2EhbqZaMdPjvMujWd3.jpg', 1, '2023-10-21 09:10:37', '2023-10-21 09:10:37', NULL);
INSERT INTO `products` (`id`, `category_id`, `product_code`, `name`, `dimension`, `color`, `stock`, `measurement_unit`, `rental_price`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(285, 26, 'TR-07', 'Orange Table Runner', NULL, 'Orange', 26, 'pcs', 100, 'product/FHCg52TYCBLUjbIBHKDoIREoJdsrQoCPrJO1SOwP.jpg', 1, '2023-10-21 09:11:03', '2023-10-21 09:11:03', NULL),
(286, 26, 'TR-08', 'Maroon Table Runner', NULL, 'Marron', 10, 'pcs', 100, 'product/ykhkN0r3xl4xiawdRe20Mj0ci2xcgrbUfW2OPEij.jpg', 1, '2023-10-21 09:11:27', '2023-10-21 09:11:27', NULL),
(287, 26, 'TR-09', 'Yellow Table Runner', NULL, 'Yellow', 8, 'pcs', 100, 'product/osy3nim3zlTvz9ViVZ4yHGHvrkkZvFu2O5nshx8X.jpg', 1, '2023-10-21 09:11:48', '2023-10-21 09:11:48', NULL),
(288, 26, 'TR-10', 'Orange Table Runner', NULL, 'Orange', 26, 'pcs', 100, 'product/4PXmYVQM5O6Jt2UBk5FNzU6A1SXzSpEYeXEh2HSL.jpg', 1, '2023-10-21 09:13:53', '2023-10-21 09:13:53', NULL),
(289, 27, 'TT-01', 'Sequence Table Top', NULL, 'Rose Golden', 32, 'pcs', 300, 'product/n2kc08WY5iew70fe0LPdD8IN2iM2agOAAo5K0Tql.jpg', 1, '2023-10-21 09:58:48', '2023-10-21 09:58:48', NULL),
(290, 27, 'TT-02', 'Golden Net Table Top', NULL, 'Golden', 35, 'pcs', 100, 'product/YJJiYQcTbBSjeWwKBRFhBDm29fKyVM1gdvKA6Pve.jpg', 1, '2023-10-21 10:01:08', '2023-10-30 06:47:14', NULL),
(291, 27, 'TT-03', 'Cream Net Table Top', NULL, 'Cream', 18, 'pcs', 100, 'product/JTj5pmrVkDcWgrY5voMSYc3V4dFkxulusSEPAPxE.jpg', 1, '2023-10-21 10:02:15', '2023-10-21 10:02:15', NULL),
(292, 27, 'TT-04', 'White Net Table Top', NULL, 'White', 88, 'pcs', 100, 'product/wihHdzSe2lVWegPdC2N4I3zlo6GoGnoCoiYT391s.jpg', 1, '2023-10-21 10:02:49', '2023-10-21 10:02:49', NULL),
(293, 27, 'TT-06', 'Black Ball Table Top', NULL, 'White', 36, 'pcs', 100, 'product/v6XoDrPlqgbgVq5rP09jJXVlQiiJOa9sv33okBAs.jpg', 1, '2023-10-21 10:03:37', '2023-10-21 10:03:37', NULL),
(294, 27, 'TT-07', 'White Ball Table Top', NULL, 'Black', 19, 'pcs', 100, 'product/ALNruUdbknWM4dUcHhx5cDW9TerqKjU8s3HGBWYi.jpg', 1, '2023-10-21 10:03:57', '2023-10-21 10:03:57', NULL),
(295, 27, 'TT-08', 'White Dhamas Print Table Top', NULL, 'White', 50, 'pcs', 100, 'product/cjt3zOUamreykrPA0cKP3hyI6e2Lj8rYT8igB7fY.jpg', 1, '2023-10-21 10:04:29', '2023-10-21 10:04:29', NULL),
(296, 27, 'TT-09', 'Mud Color Dhamas Print Table Top', NULL, 'Mud Color', 25, 'pcs', 100, 'product/rxsgjoXhrc8x9vZZlPaoxtkeIrDDLVdYPLjdYhNN.jpg', 1, '2023-10-21 10:05:52', '2023-10-21 10:05:52', NULL),
(297, 27, 'TT-09', 'Mud Color Dhamas Print Table Top', NULL, 'Mud Color', 25, 'pcs', 100, 'product/0qw9mmRvKnhumxWodwst2DntJxYqzz8TScgvRVzA.jpg', 1, '2023-10-21 10:05:53', '2023-10-21 10:05:53', NULL),
(298, 27, 'TT-10', 'Red  Dhamas Print Table Top', NULL, 'Red', 19, 'pcs', 100, 'product/CvbMT7Y1zEElvaw0It3F5gDxZcMb40xiy3uSiDme.jpg', 1, '2023-10-21 10:06:19', '2023-10-21 10:06:19', NULL),
(299, 27, 'TT-11', 'Yellow Cotton Print Table Top', NULL, 'Yellow', 21, 'pcs', 100, 'product/k1fAD9n1KSlzU00raO0MZHS9TG2fYWDEnAWNjIaF.jpg', 1, '2023-10-21 10:09:29', '2023-10-21 10:09:29', NULL),
(300, 27, 'TT-12', 'Orange Color Dhamas Print Table Top', NULL, 'Orange', 8, 'pcs', 100, 'product/luctjjrlKWsMQuOY9Hqv649FTGbE5H5YxmxQMSrV.jpg', 1, '2023-10-21 10:10:19', '2023-10-21 10:10:19', NULL),
(301, 27, 'TT-13', 'Green Color Dhamas Print Table Top', NULL, 'Green', 36, 'pcs', 100, 'product/5CBJfQE4oh9Ivei6ZA4TK0NkSjIxgAPTNlWysLHj.jpg', 1, '2023-10-21 10:25:48', '2023-10-21 10:25:48', NULL),
(302, 27, 'TT-14', 'Red Certin Table Top', NULL, 'Red', 22, 'pcs', 100, 'product/cDCjNfWSNd1eCnvdYtXNkZKppOAyaG7Rb2gNuvhM.jpg', 1, '2023-10-21 10:26:29', '2023-10-21 10:26:29', NULL),
(303, 27, 'TT-15', 'Golden Certin Table Top', NULL, 'Golden', 65, 'pcs', 100, 'product/2xZMvFjDg3WBn07DuaAEeWNZCWo8QASpAn70Jje4.jpg', 1, '2023-10-21 10:27:23', '2023-10-21 10:27:23', NULL),
(304, 27, 'TT-16', 'Orange Certin Table Top', NULL, 'Orange', 10, 'pcs', 50, 'product/yEa9wbsAKeTUWhQCqnMAnNKUHdjeKx40iBuPAVth.jpg', 1, '2023-10-21 10:28:49', '2023-10-21 10:28:49', NULL),
(305, 27, 'TT-17', 'Violet Certin Table Top', NULL, 'Violet', 34, 'pcs', 50, 'product/ExfWXVQDde1sBaHITVdq86fetNNRxITTmYPsz7l4.jpg', 1, '2023-10-21 10:29:29', '2023-10-21 10:29:29', NULL),
(306, 27, 'TT-18', 'Deep Orange Certin Table Top', NULL, 'Deep Orange', 12, 'pcs', 50, 'product/KDGTPRlkfwQbsYtXEKzeCEuAXnVSGYoemjICLtLY.jpg', 1, '2023-10-21 10:30:24', '2023-10-21 10:30:24', NULL),
(307, 27, 'TT-19', 'White Certin Table Top', NULL, 'White', 72, 'pcs', 50, 'product/zbL2jpLnVva7pAUYCgvC3ohsbxjhZT6qVj5MrMwX.jpg', 1, '2023-10-21 10:30:54', '2023-10-21 10:30:54', NULL),
(308, 27, 'TT-20', 'Coffey Certin Table Top', NULL, 'Coffey', 25, 'pcs', 50, 'product/ZecZ0X3D6av0rBUwdYi7CgPojLYyZouIzIZHe6Rs.jpg', 1, '2023-10-21 10:31:26', '2023-10-21 10:31:26', NULL),
(309, 27, 'TT-21', 'Pink Certin Table Top', NULL, 'Pink', 60, 'pcs', 50, 'product/8KEi4czvktxWiX8ZUbyGHyAIQ1fmZLIPuGO3UYiz.jpg', 1, '2023-10-21 10:32:03', '2023-10-21 10:32:03', NULL),
(310, 27, 'TT-22', 'Green Certin Table Top', NULL, 'Green', 8, 'pcs', 50, 'product/nP1gk45OC8QbuJyqfk6fWGa1y7w8lTxxv3IGb7eX.jpg', 1, '2023-10-21 10:32:50', '2023-10-21 10:32:50', NULL),
(311, 27, 'TT-23a', 'White Cotton Table Top', 'Large', 'White', 12, 'pcs', 500, 'product/RPFDqHLvm0TVEADsUYeHYlIwYWc9RRuE8COoP7D1.jpg', 1, '2023-10-21 10:34:38', '2023-10-21 10:34:38', NULL),
(312, 27, 'TT-23b', 'White Cotton Table Top', 'Medium', 'White', 16, 'pcs', 300, 'product/2kTYtMWdpFhVvVEuXq52NP8iAZMja0SNH79PWK7p.jpg', 1, '2023-10-21 10:35:09', '2023-10-21 10:35:09', NULL),
(313, 27, 'TT-23c', 'White Cotton Table Top', 'Small', 'White', 9, 'pcs', 100, 'product/mI5bJlpLN0S99PJ2GkajUZ97jvDY0WpFOfLrqG7t.jpg', 1, '2023-10-21 10:35:30', '2023-10-21 10:35:30', NULL),
(314, 27, 'TT-24', 'Red Green Table Top', NULL, 'Red & Green', 17, 'pcs', 100, 'product/ZLwCXU6oXFRTPwJkoKKbWgBqCYwTG8RpI9H3KqqH.jpg', 1, '2023-10-21 10:36:23', '2023-10-21 10:36:23', NULL),
(315, 20, 'LT-01', 'Stick Light', NULL, 'Customize', 10, 'pcs', 1500, 'product/DCUf8mXCp48pwzWI03OvjuiSH5syn1NTLXecskWJ.jpg', 1, '2023-10-22 03:28:15', '2023-10-23 06:29:48', NULL),
(316, 20, 'LT-02', 'Leaf Stick Light Walkway', NULL, 'Customize', 20, 'pcs', 1500, 'product/P86Hja9Ofkv5X1zKSOIdTWOEfpsvSG6guxIUH56m.jpg', 1, '2023-10-22 03:30:27', '2023-10-22 03:30:27', NULL),
(317, 20, 'LT-03', 'Patch Stick Light Walkway', NULL, NULL, 12, 'pcs', 500, 'product/CSRzWdSFiD9JdEzkXwCgO5SppIbqkRyZI030c0rW.jpg', 1, '2023-10-22 03:31:46', '2023-10-22 03:31:46', NULL),
(318, 20, 'LT-04', 'Bulb', NULL, NULL, 500, 'pcs', 20, 'product/teY8eog0pmODGXL7sOnhlsX29nSsoKitR83tdCnj.jpg', 1, '2023-10-22 03:33:20', '2023-10-23 06:29:52', NULL),
(319, 20, 'LT-05', 'Round Bulb', 'Big-70 pcs, Small-258 pcs', NULL, 328, 'pcs', 50, 'product/AOa1O7xCHo9daSJcZN7IzedvtI6mR6t2sVS70MUg.jpg', 1, '2023-10-22 04:22:22', '2023-10-22 04:22:22', NULL),
(320, 20, 'LT-06', 'Star Cloth', 'L-20 feet x W-30 feet', 'Black', 9, 'pcs', 2000, 'product/aMGhEtvpPvOH16Nb2YN32fVXaCI22jIoA94iujf4.jpg', 1, '2023-10-22 04:47:02', '2023-10-22 04:47:02', NULL),
(321, 20, 'LT-07', 'Shower Light', 'Round Size & S Size', NULL, 5, 'pcs', 10000, 'product/OquhWyvsP8Og7Vl2aJ7SKx7QMq0ecayD0pyBkxev.jpg', 1, '2023-10-22 05:06:15', '2023-10-22 05:06:15', NULL),
(322, 20, 'LT-08', 'Gate Setup Lighting', NULL, NULL, 1000, 'pcs', 1000, 'product/5E8hhDNQAveZ1ZZqfTNNJ0Lp0vBQ42OXCQZpRAnE.jpg', 1, '2023-10-22 05:07:57', '2023-10-22 05:07:57', NULL),
(323, 20, 'LT-09', 'Vertical Stick Light', NULL, NULL, 10, 'pcs', 1000, 'product/fbNFbmQMV5oZfZIruuGcaY98rk85iXuohzb1mpfE.jpg', 1, '2023-10-22 05:09:10', '2023-10-22 05:09:10', NULL),
(324, 20, 'LT-10', 'Trass Light Stick', NULL, NULL, 4, 'pcs', 2000, 'product/1beXg0uX206Wd3H4cPA0XzkxPidENwzv2OuBz3qD.png', 1, '2023-10-22 05:11:03', '2023-10-22 05:11:03', NULL),
(325, 20, 'LT-11', 'Corona Light', NULL, NULL, 50, 'pcs', 200, 'product/MWYAIqfcCM8icFKWa49DCRc1Z1LPaJBdber63Kt4.jpg', 1, '2023-10-22 05:12:39', '2023-10-22 05:12:39', NULL),
(326, 20, 'LT-12', 'Bird Light', NULL, NULL, 60, 'pcs', 200, 'product/YmgPg2Zvox5Ak3cxEImzEFm1QSFKdnrvVMECpCJ9.jpg', 1, '2023-10-22 05:13:14', '2023-10-22 05:13:14', NULL),
(327, 20, 'LT-13', 'Garden Lamp', NULL, NULL, 6, 'pcs', 2000, 'product/B30IUGErMIh52mjg0hfME11rREr0kyp2Pv6gNJn7.jpg', 1, '2023-10-22 05:13:53', '2023-10-22 05:13:53', NULL),
(328, 28, 'UM-01', 'Rajsthan Umbrella', NULL, NULL, 20, 'pcs', 200, 'product/uHd2tqIEoZc9olbuuwdOeLEDDBEo9aNVEsJV3iKB.jpg', 1, '2023-10-22 05:17:58', '2023-10-22 05:17:58', NULL),
(329, 28, 'UM-02', 'Printed Umbrella', NULL, NULL, 70, 'pcs', 100, 'product/yaqTFYgsKLdRwfTtRAUHXqnUDHNQSWEjbjPIyVcZ.png', 1, '2023-10-22 05:18:30', '2023-10-22 05:19:58', NULL),
(330, 28, 'UM-03', 'Kashmiri Umbrella', NULL, NULL, 3, 'pcs', 1000, 'product/Ti8DseQkCJOpqdRqLWh6DGz1nMEWENA9qaXEJCRC.png', 1, '2023-10-22 05:19:15', '2023-10-22 05:19:51', NULL),
(331, 24, 'S-01', 'VIP Sofa White', '5 Sitter', 'White', 1, 'pcs', 10000, 'product/MZTbUOoMZAfbQJNuF45t270p7FHAj9ZtuoGrMWSQ.jpg', 1, '2023-10-22 05:24:04', '2023-10-22 05:24:04', NULL),
(332, 24, 'S-02', 'VIP Oval Sofa Velvet', '5 Sitter', 'Violet', 1, 'pcs', 5000, 'product/dDDTQCoq3NTSljWLPD684mhStof9rgFoAGlp26UU.jpg', 1, '2023-10-22 05:25:19', '2023-10-22 05:27:26', NULL),
(333, 24, 'S-03', 'VIP Oval Sofa Velvet', NULL, 'Pink', 1, 'pcs', 5000, 'product/Tz3Ii8L5xvuhG7Y0jHXrdSaX7U8DLPRxvD0v2A2o.jpg', 1, '2023-10-22 05:26:21', '2023-10-22 05:27:40', NULL),
(334, 24, 'S-04', 'VIP Round Velvet Sofa', '5 Sitter', 'Pink', 1, 'pcs', 5000, 'product/cuxTUJdiapvcd479gErUbAIa66X4E95NDVpoajgL.jpg', 1, '2023-10-22 05:27:12', '2023-10-22 05:27:12', NULL),
(335, 24, 'S-05', 'VIP Velvet Sofa', NULL, 'Dark Pink', 1, 'pcs', 5000, 'product/ugPp8urzj5XVjU3j3eEtooMEsry9JdJUlm6P5D37.jpg', 1, '2023-10-22 05:29:32', '2023-10-22 05:29:32', NULL),
(336, 24, 'S-06', 'VIP Oval Sofa', NULL, 'Off White', 1, 'pcs', 3000, 'product/wLCyqMAaWlK7BhshJccVKT0xieB0jkWHH7eHwF59.jpg', 1, '2023-10-22 05:30:14', '2023-10-22 05:30:14', NULL),
(337, 24, 'S-07', 'VIP Velvet Sofa', '5 Sitter', 'Light Golden', 1, 'pcs', 5000, 'product/ivFtQZropfySEas5pONhs8DwdYW5jKZNDPTpelDO.jpg', 1, '2023-10-22 05:32:13', '2023-10-22 05:32:13', NULL),
(338, 24, 'S-08', 'VIP Velvet Sofa', '5 Sitter', 'Golden', 1, 'pcs', 5000, 'product/BiIjWi5mz3HlzoAaawwVtF3ungXUBHJzMgcwjhWi.jpg', 1, '2023-10-22 05:33:49', '2023-10-22 05:33:49', NULL),
(339, 24, 'S-09', 'VIP Velvet Sofa', '5 Sitter', 'Light Golden', 1, 'pcs', 5000, 'product/qcjViKq5SIjMgcVBsrm1hR1jrF9kzBDybap81e7z.jpg', 1, '2023-10-22 05:34:45', '2023-10-22 05:34:45', NULL),
(340, 24, 'S-10', 'VIP Velvet Sofa', '5 Sitter', 'Golden', 1, 'pcs', 4000, 'product/8nTbDZNRplGj8LQRqFDndlnFd23kZV4FMQ9fgsFp.jpg', 1, '2023-10-22 05:36:33', '2023-10-22 05:36:33', NULL),
(341, 24, 'S-11', 'VIP Velvet Sofa', '5 Sitter', 'Off White', 1, 'pcs', 4000, 'product/0yf3naG259HrQu3t9sZzxUWN979bCQkhvW5MXSHr.jpg', 1, '2023-10-22 05:37:13', '2023-10-22 05:37:13', NULL),
(342, 24, 'S-12', 'VIP Oval Round Velvet Sofa', '4 Sitter', 'Off White', 1, 'pcs', 5000, 'product/C9NL4plB7NnbYVNcD82WZ8tvOUf8VODLDjVXKsoj.jpg', 1, '2023-10-22 05:38:15', '2023-10-22 05:38:15', NULL),
(343, 24, 'S-13', 'VIP Round Velvet Sofa', '8 Sitter', 'White', 1, 'pcs', 5000, 'product/B2BwQ5Dm2Jiwk28pNJbDDMjiDnh3zWoDzE88bRby.jpg', 1, '2023-10-22 05:39:19', '2023-10-22 05:39:19', NULL),
(344, 24, 'S-14', 'VIP Round Velvet Sofa', '5 Sitter', 'Green', 1, 'pcs', 3000, 'product/NAi9IBF3RwvLHARKp9UOGbNstpDJoaZh8lG7wuHY.jpg', 1, '2023-10-22 05:40:43', '2023-10-22 05:40:43', NULL),
(345, 24, 'S-15', 'VIP Round Velvet Sofa', '5 Sitter', 'Maroon', 1, 'pcs', 3000, 'product/6tO21WEtUPQuoxdAcrtUsLSILifhJMh9sdYyXXfX.jpg', 1, '2023-10-22 05:41:42', '2023-10-22 05:41:42', NULL),
(346, 24, 'S-16', 'VIP Round Velvet Sofa', '5 Sitter', 'Brown', 1, 'pcs', 2000, 'product/LRSqZ7yCAelvfMPTD1ipc2jlWdGNvUwkg7mWpZU6.jpg', 1, '2023-10-22 05:42:23', '2023-10-22 05:42:23', NULL),
(347, 24, 'S-17', 'Lounge Sofa', '8 Sitter', 'Off White', 4, 'pcs', 2000, 'product/bO8jtl02WLkoLr9QcDZlfgVVd9DHHFK5nDVYuQc5.jpg', 1, '2023-10-22 05:43:57', '2023-10-23 06:29:42', NULL),
(348, 24, 'S-18', 'VIP Box Sofa', '5 Sitter', 'Light Brown', 1, 'pcs', 4000, 'product/HX36zCPTHJOOBcZRcdtbbJG2JaRYrWGyFeyHpNia.jpg', 1, '2023-10-22 05:48:26', '2023-10-22 05:48:26', NULL),
(349, 24, 'S-19', 'VIP Box Sofa', '5 Sitter', 'Green', 1, 'pcs', 3000, 'product/x6sE5azPqi3b7s3qJH6wUkYgDUXWKpG8N8zUIQbD.jpg', 1, '2023-10-22 05:49:38', '2023-10-22 05:51:12', NULL),
(350, 24, 'S-20', 'VIP Box Sofa', '5 Sitter', 'Magenta', 1, 'pcs', 3000, 'product/6BjOQGeIpK2KXg9LT6l62o5z0Rav5Hdfrnn23chw.jpg', 1, '2023-10-22 05:51:04', '2023-10-22 05:51:04', NULL);

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
(3, 1, 29, 1302, 3, 'rented', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-26 10:17:26', '2023-10-31 07:57:28', NULL),
(4, 1, 26, 1302, 6, 'rented', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-28 14:33:30', '2023-10-31 07:57:32', NULL),
(5, 1, 30, 1302, 5, 'rented', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-28 14:33:30', '2023-10-31 07:57:34', NULL),
(6, 1, 31, 1302, 4, 'rented', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-28 14:33:30', '2023-10-31 07:57:36', NULL),
(7, 4, 26, 1303, 5, 'approved', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-28 15:25:08', '2023-10-28 15:26:14', NULL),
(8, 4, 28, 1303, 2, 'approved', '2023-10-30 00:00:00', '2023-10-31 00:00:00', 1, '2023-10-28 15:25:08', '2023-10-28 15:26:14', NULL),
(9, 4, 199, 1304, 20, 'approved', '2023-10-31 00:00:00', '2023-11-01 00:00:00', 1, '2023-10-29 08:41:48', '2023-10-30 06:47:14', NULL),
(10, 4, 290, 1304, 10, 'approved', '2023-10-31 00:00:00', '2023-11-01 00:00:00', 1, '2023-10-29 08:41:48', '2023-10-30 06:47:14', NULL),
(11, 1, 25, 1305, 20, 'approved', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-10-30 06:52:07', '2023-10-31 07:57:15', NULL),
(12, 1, 34, 1305, 10, 'approved', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-10-30 06:52:07', '2023-10-31 07:57:15', NULL),
(13, 1, 37, 1305, 4, 'approved', '2023-11-03 00:00:00', '2023-11-04 00:00:00', 1, '2023-10-30 06:52:07', '2023-10-31 07:57:15', NULL),
(14, 3, 24, 1306, 3, 'pending approval', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-10-30 06:54:53', '2023-10-30 06:54:53', NULL),
(15, 3, 25, 1306, 15, 'pending approval', '2023-11-02 00:00:00', '2023-11-03 00:00:00', 1, '2023-10-30 06:54:53', '2023-10-30 06:54:53', NULL),
(16, 4, 25, 1307, 9, 'approved', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-10-30 07:21:01', '2023-10-30 07:21:35', NULL),
(17, 4, 109, 1307, 1, 'approved', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-10-30 07:21:01', '2023-10-30 07:21:35', NULL),
(18, 4, 111, 1307, 3, 'approved', '2023-11-07 00:00:00', '2023-11-08 00:00:00', 1, '2023-10-30 07:21:01', '2023-10-30 07:21:35', NULL),
(20, 4, 44, 1308, 1, 'approved', '2023-11-22 00:00:00', '2023-11-28 00:00:00', 6, '2023-10-30 07:48:30', '2023-10-30 09:00:05', NULL),
(21, 4, 25, 1309, 7, 'approved', '2023-11-01 00:00:00', '2023-11-04 00:00:00', 3, '2023-10-30 07:58:36', '2023-10-30 08:14:51', NULL),
(22, 4, 29, 1309, 11, 'approved', '2023-11-01 00:00:00', '2023-11-04 00:00:00', 3, '2023-10-30 07:58:36', '2023-10-30 08:14:51', NULL),
(23, 4, 25, 1310, 4, 'approved', '2023-11-29 00:00:00', '2023-11-30 00:00:00', 1, '2023-10-30 08:29:51', '2023-10-30 08:30:44', NULL),
(24, 4, 114, 1310, 3, 'approved', '2023-11-29 00:00:00', '2023-11-30 00:00:00', 1, '2023-10-30 08:29:51', '2023-10-30 08:30:44', NULL),
(25, 4, 117, 1310, 2, 'approved', '2023-11-29 00:00:00', '2023-11-30 00:00:00', 1, '2023-10-30 08:29:51', '2023-10-30 08:30:44', NULL),
(26, 4, 119, 1310, 3, 'approved', '2023-11-29 00:00:00', '2023-11-30 00:00:00', 1, '2023-10-30 08:29:51', '2023-10-30 08:30:44', NULL),
(27, 4, 31, 1308, 1, 'approved', '2023-11-22 00:00:00', '2023-11-28 00:00:00', 6, '2023-10-30 08:49:20', '2023-10-30 09:00:05', NULL),
(28, 4, 25, 1311, 5, 'approved', '2023-11-23 00:00:00', '2023-11-25 00:00:00', 2, '2023-10-30 09:01:43', '2023-10-31 11:12:47', NULL),
(29, 4, 41, 1311, 3, 'approved', '2023-11-23 00:00:00', '2023-11-25 00:00:00', 2, '2023-10-30 09:01:43', '2023-10-31 11:12:47', NULL),
(30, 5, 24, 1312, 2, 'approved', '2023-11-08 00:00:00', '2023-11-11 00:00:00', 3, '2023-10-31 12:29:49', '2023-10-31 12:30:09', NULL),
(31, 5, 117, 1312, 3, 'approved', '2023-11-08 00:00:00', '2023-11-11 00:00:00', 3, '2023-10-31 12:29:49', '2023-10-31 12:30:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `rental_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'about-company', 'About Company', 'our skilled Team grow your business.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.', 'Performing market research.*Doing financial analysis.*Planning a budget.*Creating business plans.*Developing a marketing strategy.*Setting goals and objectives.*Managing client accounts.*Analyzing data.', 'section/default.webp', '2023-08-14 13:58:37', '2023-08-14 13:58:37'),
(2, 'top-header', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:13:54', '2023-08-14 17:13:54'),
(3, 'about-us', 'About Us', 'our skilled Team grow your business.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.', 'Performing market research.*Doing financial analysis.*Planning a budget.*Creating business plans.*Developing a marketing strategy.*Setting goals and objectives.*Managing client accounts.*Analyzing data.', 'section/default.webp', '2023-08-14 17:16:17', '2023-08-14 17:16:17'),
(4, 'services', 'Services', 'Services section', 'The section', NULL, 'section/default.webp', '2023-08-14 17:18:11', '2023-08-18 08:31:19'),
(5, 'projects', 'Projects', 'Projects Heading', 'Project Description', NULL, 'section/default.webp', '2023-08-14 17:20:09', '2023-08-18 08:32:01'),
(6, 'review', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:21:10', '2023-08-14 17:21:10'),
(7, 'team', 'Employees Title', 'Employees Heading', 'Employees Description', NULL, 'section/default.webp', '2023-08-14 17:21:50', '2023-08-18 08:33:49'),
(8, 'company-history', 'Company history', 'This is the best history in time we can remember to the human knowledge!', 'This is the short description', NULL, 'section/default.webp', '2023-08-14 17:22:23', '2023-08-18 11:08:09'),
(9, 'faq', 'FAQs', 'FAQs heading', 'FAQs Description', NULL, 'section/default.webp', '2023-08-14 17:23:34', '2023-08-18 08:34:37'),
(10, 'map', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:24:02', '2023-08-14 17:24:02'),
(11, 'quote-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:25:23', '2023-08-14 17:25:23'),
(12, 'consultation-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:26:01', '2023-08-14 17:26:01'),
(13, 'subscription-cta', NULL, NULL, NULL, NULL, 'section/default.webp', '2023-08-14 17:26:52', '2023-08-14 17:26:52'),
(15, 'feedbacks', 'Feedback Title', 'Feedback Heading', 'Feedback Description', NULL, 'section/default.webp', NULL, '2023-08-18 08:32:43');

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
(1, 4, 1, 1311, 'out', 6100, NULL, 3900, 'rental', '2023-10-31 11:12:47', '2023-10-31 11:12:47'),
(2, 4, 1, NULL, 'in', 2500, NULL, 6400, 'deposit added', '2023-10-31 11:13:31', '2023-10-31 11:13:31'),
(3, 4, 1, 1310, 'out', 1500, NULL, 4900, 'due collection', '2023-10-31 11:14:04', '2023-10-31 11:14:04'),
(4, 5, 1, NULL, 'in', 10000, NULL, 10000, 'deposit added', '2023-10-31 12:28:48', '2023-10-31 12:28:48'),
(5, 5, 1, 1312, 'out', 10000, NULL, 0, 'rental', '2023-10-31 12:30:09', '2023-10-31 12:30:09'),
(6, 5, 1, NULL, 'in', 15000, NULL, 15000, 'deposit added', '2023-10-31 12:30:43', '2023-10-31 12:30:43'),
(7, 5, 1, 1312, 'out', 5000, NULL, 10000, 'due collection', '2023-10-31 12:30:54', '2023-10-31 12:30:54');

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
(1, 'Galib Jaman', 'maaevent@admin.com', NULL, '$2y$10$0e9LtRsmxUnhLdae47aMr.0O16YOP2IqklTZhQ.WMoGleBoXuRPqu', 'user/pyaStJ6AFZqbInLI1xliKnRldTHgjQaFeOxYz1g6.jpg', 'IFP0tckTHEiKKe9g0SsAJYlx1WfZHtvLDatLSltAYC1WIWw7iXCMAn0fsyIF', NULL, '2023-10-29 08:16:44'),
(2, 'Admin Name', 'admin@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/default.png', NULL, NULL, '2023-10-24 15:42:53'),
(3, 'Sales Manager', 'sales@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/default.png', NULL, NULL, '2023-10-29 08:24:53'),
(4, 'Wizard', 'inventory@admin.com', NULL, '$2y$10$rvi6odKPBr3ODXLJIfAG1enRcDEt5rN/YtqLurMqz9kY7cM.c4Gu.', 'user/JhPzIh7Wu6mzBvl2RSjrttStTnNKaaXURIHv9ZlV.png', NULL, '2023-10-23 04:41:56', '2023-10-29 08:26:25');

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
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_phone_number` (`phone_number`),
  ADD UNIQUE KEY `employee_email` (`email`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1313;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
